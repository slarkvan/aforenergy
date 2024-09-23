<?php
/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-06-28
 */

namespace weapp\LinkArchives\controller;

use think\Page;
use think\Db;
use app\common\controller\Weapp;
use weapp\LinkArchives\model\LinkArchivesModel;

/**
 * 插件的控制器
 */
class LinkArchives extends Weapp
{
    /**
     * 实例化模型
     */
    private $model;

    /**
     * 实例化对象
     */
    private $db;

    /**
     * 插件基本信息
     */
    private $weappInfo;

    /**
     * 构造方法
     */
    public function __construct(){
        parent::__construct();
        $this->model = new LinkArchivesModel;
        $this->db = Db::name('WeappLinkArchives');

        /*插件基本信息*/
        $this->weappInfo = $this->getWeappInfo();
        $this->assign('weappInfo', $this->weappInfo);
        /*--end*/
    }

    /**
     * 插件后台管理 - 列表
     */
    public function index()
    {
        return $this->fetch();
    }

    /**
     * 获取关联文档列表 前台标签
     */
    public function get_link_arc_list($param = [])
    {

        $aid = !empty($param['aid']) ? $param['aid'] : 0;
        if (empty($aid)) return [];

        $result = $this->model->getLinkArcList($aid);

        return $result;
    }

    /**
     * 判断是否有关联文档 前台标签
     */
    public function get_link_arc_count($param = [])
    {
        $aid = !empty($param['aid']) ? $param['aid'] : 0;
        if (empty($aid)) return [];

        $count = Db::name('weapp_link_archives')
            ->where('aid', $aid)
            ->where('link_aid', '>', 0)
            ->count();

        return [['count'=>$count]];
    }

    /**
     * 选择关联文档
     * @return [type] [description]
     */
    public function ajax_archives_list()
    {
        $assign_data = array();
        $condition = array();
        // 获取到所有URL参数
        $param = input('param.');
        $typeid = input('param.typeid/d');
        $channels = input('param.channel/s');

        // 应用搜索条件
        foreach (['keywords','typeid','channel'] as $key) {
            if ($key == 'keywords' && !empty($param[$key])) {
                $param[$key] = trim($param[$key]);
                $condition['a.title'] = array('LIKE', "%{$param[$key]}%");
            } else if ($key == 'typeid' && !empty($param[$key])) {
                $typeid = $param[$key];
                $hasRow = model('Arctype')->getHasChildren($typeid);
                $typeids = get_arr_column($hasRow, 'id');
                /*权限控制 by 小虎哥*/
                $admin_info = session('admin_info');
                if (0 < intval($admin_info['role_id'])) {
                    $auth_role_info = $admin_info['auth_role_info'];
                    if(! empty($auth_role_info)){
                        if(isset($auth_role_info['only_oneself']) && 1 == $auth_role_info['only_oneself']){
                            $condition['a.admin_id'] = $admin_info['admin_id'];
                        }
                        if(! empty($auth_role_info['permission']['arctype'])){
                            if (!empty($typeid)) {
                                $typeids = array_intersect($typeids, $auth_role_info['permission']['arctype']);
                            }
                        }
                    }
                }
                /*--end*/
                $condition['a.typeid'] = array('IN', $typeids);
            } else if ($key == 'channel') {
                if (empty($param[$key])) {
                    $allow_release_channel = config('global.allow_release_channel');
                    $key_tmp = array_search('7', $allow_release_channel);
                    if (is_numeric($key_tmp) && 0 <= $key_tmp) {
                        unset($allow_release_channel[$key_tmp]);
                    }
                    $param[$key] = implode(',', $allow_release_channel);
                }
                $condition['a.'.$key] = array('in', explode(',', $param[$key]));
            } else if (!empty($param[$key])) {
                $condition['a.'.$key] = array('eq', $param[$key]);
            }
        }

        // 排除已选中的文档
//        $aids = input('param.aids/s');
//        $aidArr = explode(',', trim($aids, ','));
//        if (!empty($aidArr)) {
//            $condition['a.aid'] = ['NOT IN', $aids];
//        }

        // 审核通过
        $condition['a.arcrank'] = array('gt', -1);
        /*多语言*/
        $condition['a.lang'] = array('eq', $this->admin_lang);
        /*回收站数据不显示*/
        $condition['a.is_del'] = array('eq', 0);

        /**
         * 数据查询，搜索出主键ID的值
         */
        $count = Db::name('archives')->alias('a')->where($condition)->count('aid');// 查询满足要求的总记录数
        $Page = new Page($count, config('paginate.list_rows'));// 实例化分页类 传入总记录数和每页显示的记录数
        $list = Db::name('archives')
            ->field("a.aid")
            ->alias('a')
            ->where($condition)
            ->order('a.sort_order asc, a.aid desc')
            ->limit($Page->firstRow.','.$Page->listRows)
            ->getAllWithIndex('aid');

        /**
         * 完善数据集信息
         * 在数据量大的情况下，经过优化的搜索逻辑，先搜索出主键ID，再通过ID将其他信息补充完整；
         */
        if ($list) {
            $aids = array_keys($list);
            $fields = "b.*, a.*, a.aid as aid";
            $row = Db::name('archives')
                ->field($fields)
                ->alias('a')
                ->join('__ARCTYPE__ b', 'a.typeid = b.id', 'LEFT')
                ->where('a.aid', 'in', $aids)
                ->getAllWithIndex('aid');
            foreach ($list as $key => $val) {
                $list[$key] = $row[$val['aid']];
            }
        }
        $show = $Page->show(); // 分页显示输出
        $assign_data['page'] = $show; // 赋值分页输出
        $assign_data['list'] = $list; // 赋值数据集
        $assign_data['pager'] = $Page; // 赋值分页对象

        /*允许发布文档列表的栏目*/
        $allow_release_channel = !empty($channels) ? explode(',', $channels) : config('global.allow_release_channel');
        $key_tmp = array_search('7', $allow_release_channel);
        if (is_numeric($key_tmp) && 0 <= $key_tmp) {
            unset($allow_release_channel[$key_tmp]);
        }
        $assign_data['arctype_html'] = allow_release_arctype($typeid, $allow_release_channel);
        /*--end*/

        $this->assign($assign_data);

        return $this->fetch();
    }

}