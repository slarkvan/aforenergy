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
 * Date: 2018-4-3
 */

namespace weapp\LinkArchives\model;

use think\Db;
use think\Model;

/**
 * 模型
 */
class LinkArchivesModel extends Model
{
    /**
     * 数据表名，不带前缀
     */
    public $name = 'weapp_link_archives';

    //初始化
    protected function initialize()
    {
        // 需要调用`Model`的`initialize`方法
        parent::initialize();
    }

    public function afterSave($aid = 0, $link_aid = [], $opt = 'add')
    {
        if (!empty($link_aid)) {
            if ($opt == 'edit') {
                Db::name('weapp_link_archives')->where('aid', $aid)->where('link_aid', 'not in', $link_aid)->delete();
            }
            $have_link_aid_arr = Db::name('weapp_link_archives')->where('aid', $aid)->where('link_aid', 'in', $link_aid)->column('link_aid');
            $link_aid_arr = explode(',', $link_aid);
            $insert_link_aid = [];
            foreach ($link_aid_arr as $k => $v) {
                if (empty($v)) continue;
                if (in_array($v, $have_link_aid_arr)) {
                    unset($link_aid_arr[$k]);
                } else {
                    $insert_link_aid[] = [
                        'aid' => $aid,
                        'link_aid' => $v,
                        'add_time' => getTime(),
                    ];
                }
            }

            if (!empty($insert_link_aid)) Db::name('weapp_link_archives')->insertAll($insert_link_aid);
        } else if (empty($link_aid) && $opt == 'edit') {
            Db::name('weapp_link_archives')->where('aid', $aid)->delete();
        }
    }

    public function getLinkArc($aid = 0)
    {
        $data['link_aid'] = Db::name('weapp_link_archives')->where('aid', $aid)->where('link_aid', '>', 0)->column('link_aid');
        $data['link_list'] = '';
        if (!empty($data['link_aid'])) {
            $data['link_aid'] = implode(',', $data['link_aid']);
            $data['link_list'] = Db::name('archives')->where('aid', 'in', $data['link_aid'])->field('aid,title')->select();
        }
        return $data;
    }

    public function getLinkArcList($aid = 0)
    {
        $arc_list = Db::name('weapp_link_archives')
            ->alias('a')
            ->join('archives b', 'a.link_aid = b.aid','left')
            ->join('arctype c', 'b.typeid = c.id', 'left')
            ->field('c.*,b.*')
            ->where('a.aid', $aid)
            ->where('a.link_aid', '>', 0)
            ->select();
        $link_list = [];
        foreach ($arc_list as $k => $v) {
            $data = $v;
            $data['arcurl'] = arcurl('home/Article/view', $v, true, true);
            $data['litpic'] = handle_subdir_pic($v['litpic']);
            $link_list[] = $data;
        }
        return $link_list;
    }

    public function delByAids($aids = [])
    {
        if (!empty($aids)) Db::name('weapp_link_archives')->where('aid', 'in', $aids)->delete();
        return true;
    }
}