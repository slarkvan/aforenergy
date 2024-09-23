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

namespace weapp\Export\controller;

use think\Cookie;
use think\Page;
use think\Db;
use app\common\controller\Weapp;
use weapp\Export\model\ExportModel;

/**
 * 插件的控制器
 */
class Export extends Weapp
{
    /**
     * 实例化模型
     */
    private $model;

    /**
     * 实例化对象
     */
    private $db,$channel_types,$channels,$is_old_product_attr;

    /**
     * 插件基本信息
     */
    private $weappInfo;

    /**
     * 构造方法
     */
    public function __construct(){
        parent::__construct();
        $this->model = new ExportModel;
        $this->db = Db::name('WeappExport');

        /*插件基本信息*/
        $this->weappInfo = $this->getWeappInfo();
        $this->assign('weappInfo', $this->weappInfo);
        $this->channels=Db::name('channeltype')->where(['id'=>['not in',[6,7,8,9]]])->order('id asc')->select();
        $this->channel_types=$this->my_array_column($this->channels,'id');

        $this->is_old_product_attr = tpSetting('system.system_old_product_attr', [], 'cn');
        /*--end*/
    }

    function my_array_column($array, $column_key) {
        if (!function_exists('array_column')) {
            $data = [];
            foreach ($array as $key => $value) {
                $data[] = $value[$column_key];
            }
            return $data;
        }else{
            return array_column($array,$column_key);
        }

    }


    /**
     * 插件使用指南
     */
    public function doc(){
        return $this->fetch('doc');
    }

    /**
     * 系统内置钩子show方法（没用到这个方法，建议删掉）
     * 用于在前台模板显示片段的html代码，比如：QQ客服、对联广告等
     *
     * @param  mixed  $params 传入的参数
     */
    public function show($params = null){
        $list = $this->db->select();
        $this->assign('list', $list);
        echo $this->fetch('show');
    }

    /**
     * 插件后台管理 - 列表
     */
    public function index()
    {
        $list = array();
        $keywords = input('keywords/s');

        $map = array();
        if (!empty($keywords)) {
            $map['title'] = array('LIKE', "%{$keywords}%");
        }

        $count = $this->db->where($map)->count('id');// 查询满足要求的总记录数
        $pageObj = new Page($count, config('paginate.list_rows'));// 实例化分页类 传入总记录数和每页显示的记录数
        $list = $this->db->where($map)->order('id desc')->limit($pageObj->firstRow.','.$pageObj->listRows)->select();
        $pageStr = $pageObj->show(); // 分页显示输出
        $this->assign('list', $list); // 赋值数据集
        $this->assign('pageStr', $pageStr); // 赋值分页输出
        $this->assign('pageObj', $pageObj); // 赋值分页对象

        return $this->fetch('index');
    }

    /**
     * 插件后台管理 - 新增
     */
    public function add()
    {
        if (IS_POST) {
            $post = input('post.');

            /*------------这里可以实现存储数据之前的额外逻辑 start-------------*/

            /*处理LOGO的本地上传与远程*/
            $is_remote = !empty($post['is_remote']) ? $post['is_remote'] : 0;
            $logo = '';
            if ($is_remote == 1) {
                $logo = $post['logo_remote']; // 远程链接
            } else {
                $logo = $post['logo_local']; // 本地上传链接
            }
            $post['logo'] = $logo;
            /*--end*/

            /*--------------------------------end------------------------------*/

            /*组装存储数据*/
            $nowData = array(
                'add_time'    => getTime(),
                'update_time'    => getTime(),
            );
            $saveData = array_merge($post, $nowData);
            /*--end*/
            $insertId = $this->db->insert($saveData);
            if (false !== $insertId) {
                adminLog('新增'.$this->weappInfo['name'].'：'.$post['title']); // 写入操作日志
                $this->success("操作成功", weapp_url('Export/Export/index'));
            }else{
                $this->error("操作失败");
            }
            exit;
        }

        return $this->fetch('add');
    }
    
    /**
     * 插件后台管理 - 编辑
     */
    public function edit()
    {
        if (IS_POST) {
            $post = input('post.');
            $post['id'] = eyIntval($post['id']);
            if(!empty($post['id'])){

                /*------------这里可以实现存储数据之前的额外逻辑 start-------------*/

                /*处理LOGO的本地上传与远程*/
                $is_remote = !empty($post['is_remote']) ? $post['is_remote'] : 0;
                $logo = '';
                if ($is_remote == 1) {
                    $logo = $post['logo_remote']; // 远程链接
                } else {
                    $logo = $post['logo_local']; // 本地上传链接
                }
                $post['logo'] = $logo;
                /*--end*/

                /*--------------------------------end------------------------------*/

                /*组装存储数据*/
                $nowData = array(
                    'typeid'    => empty($post['typeid']) ? 1 : $post['typeid'],
                    'url'    => trim($post['url']),
                    'update_time'    => getTime(),
                );
                $saveData = array_merge($post, $nowData);
                /*--end*/

                $r = $this->db->where(array('id'=>$post['id']))->update($saveData);
                if ($r) {
                    adminLog('编辑'.$this->weappInfo['name'].'：'.$post['title']); // 写入操作日志
                    $this->success("操作成功!", weapp_url('Export/Export/index'));
                }
            }
            $this->error("操作失败!");
        }

        $id = input('id/d', 0);
        $row = $this->db->find($id);
        if (empty($row)) {
            $this->error('数据不存在，请联系管理员！');
            exit;
        }
        
        /*同时拥有本地上传与远程URL的逻辑处理*/
        if (is_http_url($row['logo'])) {
            $row['is_remote'] = 1;
            $row['logo_remote'] = $row['logo'];
        } else {
            $row['is_remote'] = 0;
            $row['logo_local'] = $row['logo'];
        }
        /*--end*/

        $this->assign('row',$row);

        return $this->fetch('edit');
    }
    
    /**
     * 删除文档
     */
    public function del()
    {
        $id_arr = input('del_id/a');
        $id_arr = eyIntval($id_arr);
        if(!empty($id_arr) && IS_POST){
            $result = $this->db->where("id",'IN',$id_arr)->select();
            $title_list = get_arr_column($result, 'title');

            $r = $this->db->where("id",'IN',$id_arr)->delete();
            if($r){
                adminLog('删除'.$this->weappInfo['name'].'：'.implode(',', $title_list));
                $this->success("操作成功!");
            }else{
                $this->error("操作失败!");
            }
        }else{
            $this->error("参数有误!");
        }
    }
    
    /**
     * 插件配置
     */
    public function conf()
    {
        if (IS_POST) {
            $post = input('post.');
            if(!empty($post['code'])){
                $data = array(
                    'tag_weapp' => $post['tag_weapp'],
                    'update_time' => getTime(),
                );
                $r = M('weapp')->where('code','eq',$post['code'])->update($data);
                if ($r) {
                    \think\Cache::clear('hooks');
                    adminLog('编辑'.$this->weappInfo['name'].'：插件配置'); // 写入操作日志
                    $this->success("操作成功!", weapp_url('Export/Export/conf'));
                }
            }
            $this->error("操作失败!");
        }

        $row = M('weapp')->where('code','eq','Export')->find();
        $this->assign('row', $row);

        return $this->fetch('conf');
    }
    /**
     * 文档导入
     */
    public function import(){
        if($this->request->isPost() || $this->request->param('page')){
            if($this->request->param('page')){
                $path='PHPExcel-1-8.Classes.PHPExcel';
                weapp_vendor($path, 'Export');
                weapp_vendor($path.".IOFactory",'Export');
                $res=\think\Cache::get('export');
                $field_arr=\think\Cache::get('export_title');
                $typeid=\think\Cache::get('typeid');
                $list_id=\think\Cache::get('list_id');
            }else{
                $tmp_file = $_FILES ['file_stu'] ['tmp_name'];
                $file_types = explode ( ".", $_FILES ['file_stu'] ['name'] );
                $file_type = $file_types [count ( $file_types ) - 1];
                /*判别是不是.xls文件，判别是不是excel文件*/
                if (strtolower ( $file_type ) != "xlsx" && strtolower ( $file_type ) != "xls")
                {
                    $this->error ( '不是Excel文件，重新上传' );
                }
                /*设置上传路径*/
                $savePath = UPLOAD_PATH;
                /*以时间来命名上传的文件*/
                $str = date ( 'Ymdhis' );
                $file_name = $str . "." . $file_type;
                /*是否上传成功*/
                if (! copy ( $tmp_file, $savePath . $file_name ))
                {
                    $this->error ( '上传失败' );
                }
                $res=$this->read(UPLOAD_PATH.$file_name,"UTF-8",$file_type);//传参,判断office2007还是office2003
                $field_arr=$res[1];//标题配置
                unset($res[1]);
                $typeid=$this->request->post('typeid',0);
                $list_id=$this->request->post('list_id',0);
                \think\Cache::set('typeid',$typeid,3600);
                \think\Cache::set('list_id',$list_id,3600);
                \think\Cache::set('export',$res,3600);
                \think\Cache::set('export_title',$field_arr,3600);
            }
            $field_arr_2=[
                'typeid'=>'栏目ID',
                'title'=>'标题',
                'seo_title'=>'SEO标题',
                'seo_keywords'=>'SEO关键词',
                'seo_description'=>'SEO描述',
                'litpic'=>'缩略图',
                'content'=>'内容',
                'content_ey_m'=>'手机端内容',
                'arcrank'=>'审核',
                'aid'=>'文章ID',
                'sort_order'=>'排序',
                'click'=>'浏览量',
                'add_time'=>'发布时间',
                'author'=>'作者',
                'origin'=>'来源',
                'users_price'=>'价格',
                'stock_count'=>'库存'
            ];
            $t2k=$this->setTitle($field_arr_2,$field_arr,$typeid,$list_id);
            $last=Db::name('archives')->order('aid desc')->find();
            $last_id=$last?$last['aid']:0;
            $newData=$art_content=$pro_content=$img_content=$ext_content=[];
            $attr=[];
            $attr_2=[];//新增商品参数
            $last_id_arr=[];
            $num=0;

            $page=$this->request->param('page',1);
            $total_num=$this->request->param('num',0);
            $pageSize=500;
            $start=($page-1)*$pageSize;
            $end=$start+$pageSize;
            $total_page=ceil(count($res)/$pageSize);
            $i=1;

            $arc_types_list = Db::name('arctype')
                ->alias('a')
                ->field('a.id,b.ctl_name,a.current_channel,b.table,b.ifsystem,a.lang,a.current_channel')
                ->join('__CHANNELTYPE__ b', 'a.current_channel = b.id', 'LEFT')
                ->select();
            
            $arc_types=[];
            foreach ($arc_types_list as $k=>$v){
                $arc_types[$v['id']]=$v;
            }
            //$arc_types = array_column($arc_types,null,'id');
            //$typeid=$this->request->param('typeid');
            $sel_types=$arc_types[$typeid];
            foreach ( $res as $k => $v ) //循环excel表
            {
                if($i>$start && $i<=$end){
                    $v=$this->setTk($t2k,$v);
                    $row=$arc_types[$v['typeid']];
                    $last_id++;
                    if(isset($v['aid']) && $v['aid']){//设置了文章id
                        $last_id=$v['aid'];
                        $arc=Db::name('archives')->where(['aid'=>$v['aid']])->field('aid')->find();
                        if($arc){
                            //$table_content=($arc['channel']==2)?'product_content': ($arc['channel']==3?'images_content':'article_content') ;
                            $table_content=$row['table'].'_content';
                            Db::name($table_content)->where(['aid'=>$v['aid']])->delete();
                            Db::name('archives')->where(['aid'=>$v['aid']])->delete();
                            if($arc['channel']==2){
                                Db::name('product_attr')->where(['aid'=>$v['aid']])->delete();
                            }
                        }
                    }
                    $add_time=$this->get_date_by_excel($v['add_time']);
                    $last_id_arr[]=$last_id;
                    $newData[] = array(
                        'aid'=>$last_id,
                        'title'=>$v['title'],
                        'typeid'=> $v['typeid'],
                        'channel'   => $row['current_channel'],
                        'seo_title'     => $v['seo_title'],
                        'seo_keywords'     => $v['seo_keywords'],
                        'seo_description'     => $v['seo_description'],
                        'litpic'     => $v['litpic'],
                        'is_litpic'     => ($v['litpic']?1:0),
                        'arcrank'     => (($v['arcrank'] && $v['arcrank']=='否')?-1:0),
                        'admin_id'  => session('admin_info.admin_id'),
                        'lang'  => $row['lang'],
                        'sort_order'    => $v['sort_order']?:0,
                        'click'         =>$v['click']?:0,
                        'users_price'   =>$v['users_price']?:0,
                        'author'   =>$v['author'],
                        'origin'   =>$v['origin'],
                        'stock_count'   =>($v['stock_count']?:99999),
                        'add_time'     => $add_time,
                        'update_time'  => $add_time,
                    );
                    $c_data=[
                        //'content'=>str_replace(array("/r", "/n", "/r/n",chr(10)), "<br/>",$v['content']),
                        //'content_ey_m'=>str_replace(array("/r", "/n", "/r/n",chr(10)), "<br/>",$v['content_ey_m']),

                        'content'=>$v['content'],
                        'content_ey_m'=>$v['content_ey_m'],
                        'aid'=>$last_id,
                        'add_time'     =>  $add_time,
                        'update_time'  =>  $add_time,
                    ];
                    if(!in_array($row['current_channel'],[1,2,3,4,5])){
                        unset($c_data['content'],$c_data['content_ey_m']);
                    }

                    if(isset($t2k['M']) && $t2k['M']){
                        foreach ($t2k['M'] as $km=>$rm){
                            if( strpos($rm,'M-') !== false || strpos($rm,'A-') !== false) continue;
                            $c_data[$km]=trim($v[$rm]);
                        }
                    }
                    if($row['current_channel']==1){//文章模型
                        $art_content[]=$c_data;
                    }elseif($row['current_channel']==3){
                        $img_content[]=$c_data;
                    }elseif($row['current_channel']==2){//产品模型
                        $pro_content[]=$c_data;
                        if(isset($t2k['A']) && $t2k['A']){
                            //$attr=[];
                            foreach ($t2k['A'] as $ka=>$ra){
                                if(trim($v[$ra])){
                                    $attr[]=[
                                        'aid'=>$last_id,
                                        'attr_id'=>$ka,
                                        'attr_value'=>trim($v[$ra]),
                                        'add_time'=>time(),
                                        'update_time'=>time(),
                                    ];
                                }
                            }
                        }
                        if(isset($t2k['S']) && $t2k['S']){
                            //$attr=[];
                            foreach ($t2k['S'] as $kb=>$rb){
                                if(trim($v[$rb])){
                                    $attr_2[]=[
                                        'aid'=>$last_id,
                                        'attr_id'=>$kb,
                                        'attr_value'=>trim($v[$rb]),
                                        'add_time'=>time(),
                                        'update_time'=>time(),
                                    ];
                                }
                            }

                            //exit(var_dump($attr_2));
                        }

                    }else{
                        $ext_content[]=$c_data;
                    }
                }
                $i++;
            }
            Db::startTrans();//开启事务
            try{
                if($newData) $num=Db::name('archives')->insertAll($newData);
                if($art_content) Db::name('article_content')->insertAll($art_content);
                if($pro_content) Db::name('product_content')->insertAll($pro_content);
                if($img_content) Db::name('images_content')->insertAll($img_content);
                if($attr){
                    Db::name('product_attr')->insertAll($attr);
                }
                if($attr_2){
                    Db::name('shop_product_attr')->insertAll($attr_2);
                    Db::name('archives')->where(['aid'=>['in',$last_id_arr]])->update(['attrlist_id'=>$list_id]);

                }
                if($ext_content){
                    Db::name($sel_types['table'].'_content')->insertAll($ext_content);
                }


                Db::commit();
            }catch (\Exception $e) {
                Db::rollback();
                $this->error('导入失败：'.$e->getMessage(),weapp_url('Export/Export/import'));
            }
            //$this->writeLog(var_export($data,true));
            adminLog('数据导入'.$this->weappInfo['name']); // 写入操作日志
            $total_num+=$num;
            if($page>=$total_page){
                if($total_num==0){
                    $this->error('导入数据库失败',weapp_url('Export/Export/import'));
                }else{
                    $this->success ( '成功导入成功 '.$total_num.' 条记录',weapp_url('Export/Export/import'));
                }
            }else{
                $this->success ( '正在导入第'.$page.'页记录',weapp_url('Export/Export/import','typeid='.$typeid.'&num='.$total_num.'&page='.($page+1)));
            }

        }else{

            $this->assign('is_old',$this->is_old_product_attr);
            $this->assign('arctype_html', allow_release_arctype(0, $this->channel_types));
            return $this->fetch('import');
        }
    }
    public function get_date_by_excel($date){
        if (!$date || $date == '0000-00-00'){
            return time();
        }
        $unix_time = \PHPExcel_Shared_Date::ExcelToPHP($date);
        $add_time=gmdate('Y-m-d H:i:s',$unix_time);
        if($add_time){
            $add_time=strtotime($add_time);
        }else{
            $add_time=time();
        }
        return $add_time;

    }

    public function setTitle($field_2,$field,$typeid=0,$list_id=0){
        if($typeid){
            $type=Db::name('arctype')->where(['id'=>$typeid])->find();
            $channel_field=Db::name('channelfield')
                ->where(['channel_id'=>$type['current_channel'],'ifsystem'=>0])
                ->order('sort_order asc')
                ->select();
            foreach ($channel_field as $k=>$r){
                $field_2['M'][$r['name']]='M-'.$r['title'];
            }
            if($type['current_channel']==2){//如果是产品模型，则考虑产品参数
                $attr_field=Db::name('product_attribute')
                    ->where(['typeid'=>$typeid,'is_del'=>0])
                    ->order('sort_order asc')
                    ->select();
                foreach ($attr_field as $k=>$r){
                    $field_2['A'][$r['attr_id']]='A-'.$r['attr_name'];
                }
                if($this->is_old_product_attr==0 && $list_id){
                    $attr_field2=Db::name('shop_product_attribute')
                        ->where(['list_id'=>$list_id,'is_del'=>0])
                        ->order('sort_order asc')
                        ->select();
                    foreach ($attr_field2 as $k=>$r){
                        $field_2['S'][$r['attr_id']]='S-'.$r['attr_name'];
                    }
                }
            }
        }
        foreach ($field_2 as $k=>$r){
            if(is_array($r)){
                foreach ($r as $kr=>$rr){
                    foreach ($field as $k2=>$r2){
                        if($rr==$r2){
                            $field_2[$k][$kr]=$k2;
                            break;
                        }
                    }
                }
            }else{
                foreach ($field as $k2=>$r2){
                    if($r==$r2){
                        $field_2[$k]=$k2;
                        break;
                    }
                }
            }
        }
        return $field_2;
    }
    public function setTk($field,$val){
        foreach ($field as $k=>&$v){
            if(!is_array($v)){
                $v=$val[$v];
            }
        }
        return array_merge($field,$val);
    }

    /**
     * 文档导出
     */
    public function importOut(){
        $page=$this->request->param('page',1);
        $title_arr=array(
            '文章ID'=>'aid',
            '栏目'=>'typeid',
            '标题'=>'title',
            '网址'=>'arcurl',
            'SEO标题'=>'seo_title',
            'SEO关键词'=>'seo_keywords',
            'SEO描述'=>'seo_description',
            '内容'=>'content',
            '手机端内容'=>'content_ey_m',
            '审核'=>'arcrank',
            '添加时间'=>'add_time',
            '修改时间'=>'update_time',
            '作者'=>'author',
            '来源'=>'origin',
            '排序'=>'sort_order',
            '浏览量'=>'click',
            '价格'=>'users_price',
            '库存'=>'stock_count',
        );
        if($this->request->isPost() || $page>1){
            $arc_db = Db::name('archives');
            if($this->request->isPost()){
                $post_data=$this->request->post();
                \think\Cache::set('post_data',$post_data,3600);
            }else{
                $post_data=\think\Cache::get('post_data');
            }
            $typeid=$post_data['typeid'];
            $channel_id=$post_data['channel_id'];
            $map=['is_del'=>0];
            if($typeid){
                $hasRow = model('Arctype')->getHasChildren($typeid);
                $typeids = get_arr_column($hasRow, 'id');
                $map['typeid']=['in',$typeids];
            }
            $map['channel']=$channel_id;
            if($page==1){
                Cookie::set('times',time());
            }
            if($post_data['start_time'] || $post_data['end_time']){
                $where_2='';
                if($post_data['start_time']){
                    $where_2.='a.add_time>=' . strtotime($post_data['start_time']);
                }
                if($post_data['start_time']){
                    $where_2.=' AND a.add_time<' . strtotime($post_data['end_time'].' 23:59:59');
                }
                $map[] = Db::raw(trim($where_2,'AND'));
            }
            if(isset($post_data['limit_num']) && intval($post_data['limit_num'])){
                $pagesize=intval($post_data['limit_num']);
            }else{
                $pagesize=10000;
            }
            $offset=($page-1)*$pagesize;
            $channel=Db::name('channeltype')->where(['id'=>$channel_id])->find();
            $list = $arc_db->alias('a')
                ->join($channel['table'].'_content c','a.aid=c.aid')
                ->field('*,a.add_time as add_time')
                ->where($map)->order('a.aid desc')->limit($offset.','.$pagesize)
                //->fetchSql(true)
                ->select();

            if(!$list){
                $this->success ( '导出成功',weapp_url('Export/Export/index'));
            }
            if($post_data['fields']){
                foreach ($title_arr as $k=>$r){
                    if(!in_array($k,$post_data['fields'])){
                        unset($title_arr[$k]);
                    }
                }
            }

            if($channel_id > 5){
                unset($title_arr['内容'],$title_arr['手机端内容']);
            }
            $channel_field=Db::name('channelfield')
                ->where(['channel_id'=>$channel_id,'ifsystem'=>0])
                ->order('sort_order asc')
                ->select();
            foreach ($channel_field as $k=>$r){
                $title_arr['M-'.$r['title']]=$r['name'];
            }
            if($post_data['is_attr']==1){//导出自定义参数
                if($this->is_old_product_attr==0){
                    $attr_field2=Db::name('shop_product_attribute')
                        ->where(['list_id'=>$post_data['list_id'],'is_del'=>0])
                        ->order('sort_order asc')
                        ->select();
                    foreach ($attr_field2 as $k=>$r){
                        $title_arr['S-'.$r['attr_name']]='S_'.$r['attr_id'];
                    }
                }else{
                    $attr_field=Db::name('product_attribute')
                        ->where(['typeid'=>$typeid,'is_del'=>0])
                        ->order('sort_order asc')
                        ->select();
                    foreach ($attr_field as $k=>$r){
                        $title_arr['A-'.$r['attr_name']]='A_'.$r['attr_id'];
                    }
                }
            }
            $data_0=[];
            foreach ($title_arr as $k=>$r){
                $data_0[]=$k;
            }
            $data[]=$data_0;
            $types=Db::name('arctype')->select();
            $types_arr=[];
            foreach ($types as $k=>$r){
                $types_arr[$r['id']]=$r;
            }
            $attr_data=$this->getAttrList($list);
            foreach ($list as $k=>$r){

                //正则表达式去除职位描述的html标签
                if($this->request->param('filter',0) && $channel_id <= 5){
                    $content = strip_tags(htmlspecialchars_decode($r['content']));
                    $r['content'] = preg_replace("/&[a-zA-Z;]*/",'',$content);
                    if($r['content_ey_m']){
                        $r['content_ey_m']=preg_replace("/&[a-zA-Z;]*/",'', strip_tags(htmlspecialchars_decode($r['content_ey_m'])) );
                    }
                }

                $description = strip_tags(htmlspecialchars_decode($r['seo_description']));
                //去除仍然存在的&amp;nbsp;
                $r['seo_description'] = preg_replace("/&[a-zA-Z;]*/",'',$description);
                $data_r=[];
                if(isset($attr_data[$r['aid']])){
                    $r=array_merge($r,$attr_data[$r['aid']]);
                }
                foreach ($title_arr as $kr=>$pr){
                    if($pr=='typeid'){
                        $data_r[]= $types_arr[$r['typeid']]['typename'];
                    }elseif($pr=='add_time'){
                        $data_r[]= date('Y-m-d H:i:s',$r['add_time']);
                    }elseif($pr=='update_time'){
                        $data_r[]= date('Y-m-d H:i:s',$r['update_time']);
                    }elseif($pr=='arcrank'){
                        $data_r[]= ($r['arcrank']==0?'是':'否');
                    }elseif(isset($r[$pr])){
                        $data_r[]=$r[$pr];
                    }elseif($pr=='arcurl'){
                        $data_r[]=get_arcurl(array_merge($types_arr[$r['typeid']],$r),false);
                    }else{
                        $data_r[]='-';
                    }
                }
                $data[]=$data_r;
            }

            $this->exportExcel($data,Cookie::get('times').'-'.$page);
            //exit(var_dump($file_name));
            $this->success ( '成功导出 '.(count($data)-1).' 条记录',weapp_url('Export/Export/importOut','channel_id='.$channel_id.'&typeid='.$typeid.'&page='.($page+1)));

        }
        $this->assign('channels',$this->channels);
        $this->assign('fields',$title_arr);
        $this->assign('arctype_html', allow_release_arctype(0,$this->channel_types));
        return $this->fetch('import_out');
    }

    public function getAttrList($data){
        $ids=$this->my_array_column($data,'aid');
        $r_data=[];
        if($this->is_old_product_attr==0){
            $attr=Db::name('shop_product_attr')->where(['aid'=>['in',$ids]])->select();
            foreach ($attr as $k=>$r){
                $r_data[$r['aid']]['S_'.$r['attr_id']]=$r['attr_value'];
            }
        }else{
            $attr=Db::name('product_attr')->where(['aid'=>['in',$ids]])->select();
            foreach ($attr as $k=>$r){
                $r_data[$r['aid']]['A_'.$r['attr_id']]=$r['attr_value'];
            }
        }
        return $r_data;
    }
    public function get_arctype_html(){
        $channel=$this->request->param('channel');
        $html=allow_release_arctype(0,[$channel]);
        $str='';
        if($channel==2 && $this->is_old_product_attr==0){
            //产品模型
            $str.='<option value="">请选择</option>';
            $attr_list=DB::name('shop_product_attrlist')->where(['status'=>1])->order('sort_order asc')->select();
            foreach ($attr_list as $k=>$r){
                $str.='<option value="'.$r['list_id'].'">'.$r['list_name'].'</option>';
            }
        }
        $this->success('请求成功',null,['html'=>$html,'channel'=>$channel,'attr_str'=>$str]);
    }
    protected function writeLog($log)
    {
        $fp = fopen(RUNTIME_PATH. 'log/' . date('Y') . date('m') . date('d') . ".log.php", "a+");
        flock($fp, LOCK_EX);
        fwrite($fp, "<?php exit();?>RUN TIME:" . date('Y-m-d H:i:s') . "\n" . $log . "\n");
        flock($fp, LOCK_UN);
        fclose($fp);
    }

    public function read($filename,$encode,$file_type){
        $path='PHPExcel-1-8.Classes.PHPExcel';
        weapp_vendor($path, 'Export');
        weapp_vendor($path.".IOFactory",'Export');

        if(strtolower ( $file_type )=='xls')//判断excel表类型为2003还是2007
        {
            weapp_vendor($path.".Reader.Excel5",'Export');
            $objReader = \PHPExcel_IOFactory::createReader('Excel5');
        }elseif(strtolower ( $file_type )=='xlsx')
        {
            weapp_vendor($path.".Reader.Excel2007",'Export');
            $objReader = \PHPExcel_IOFactory::createReader('Excel2007');
        }
        $objReader->setReadDataOnly(true);
        $objPHPExcel = $objReader->load($filename);
        $objWorksheet = $objPHPExcel->getActiveSheet();
        $highestRow = $objWorksheet->getHighestRow();
        $highestColumn = $objWorksheet->getHighestColumn();
        $highestColumnIndex = \PHPExcel_Cell::columnIndexFromString($highestColumn);
        $excelData = array();
        for ($row = 1; $row <= $highestRow; $row++) {
            for ($col = 0; $col < $highestColumnIndex; $col++) {
                $excelData[$row][] =(string)$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
            }
        }
        return $excelData;
    }
    public function getType(){
        $typeid=$this->request->param('typeid');
        $row=Db::name('arctype')->where(['id'=>$typeid])->find();
        $all_types=allow_release_arctype($typeid, $this->channel_types,false);
        if($typeid){
            $sel_types=$this->setTypes($all_types,$typeid);
            $html=$this->setTable($sel_types);
        }else{
            $html=$this->setTable($all_types);
        }

        $str='';
        if($row['current_channel']==2 && $this->is_old_product_attr==0){
            //产品模型
            $str.='<option value="">请选择</option>';
            $attr_list=DB::name('shop_product_attrlist')->where(['status'=>1])->order('sort_order asc')->select();
            foreach ($attr_list as $k=>$r){
                $str.='<option value="'.$r['list_id'].'">'.$r['list_name'].'</option>';
            }
        }

        //$res=$this->setTable($sel_types);
        $this->success('ok',null,['html'=>$html,'channel'=>$row['current_channel'],'attr'=>$str]);
    }
    public function setTypes($arr,$typeid){
        $sel_types=[];
        foreach ($arr as $k=>$r){
            if($typeid==$r['id']){
                $sel_types=$r;
                return $sel_types;
            }
            if($r['has_children']){
                $sel_types=$this->setTypes($r['children'],$typeid);
                if($sel_types) break;
            }
        }
        return $sel_types;
    }
    public function setTable($arr,$html=''){
        if(isset($arr['has_children'])){
            $html.='<tr><td>'.$arr['typename'].'</td><td>'.$arr['id'].'</td></tr>';
            $arr=$arr['children'];
        }
        foreach ($arr as $k=>$r){
            $html.='<tr><td><span style="padding-left: '.($r['grade']*20).'px">'.$r['typename'].'</span></td><td>'.$r['id'].'</td></tr>';
            if(isset($r['children']) && $r['children']){
                $html=$this->setTable($r['children'],$html);
            }
        }
        return $html;
    }
    function exportExcel($array,$times){
        $path='PHPExcel-1-8.Classes.PHPExcel';
        weapp_vendor($path, 'Export');
        weapp_vendor($path.".IOFactory",'Export');
        weapp_vendor($path.".Reader.Excel2007",'Export');
        $objPHPExcel = new \PHPExcel();
        $objSheet = $objPHPExcel->getActiveSheet();        //选取当前的sheet对象
        $objSheet->setTitle('helen');                      //对当前sheet对象命名
        //常规方式：利用setCellValue()填充数据
        //$objSheet->setCellValue("A1","张三")->setCellValue("B1","李四");   //利用setCellValues()填充数据
        //取巧模式：利用fromArray()填充数据
        $styleArray = array(
            //'fill'    => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00')),
            'font' => array(
                'bold' => true,
                'color' => array('rgb' => 'FF0000'),
                'size' => 11
            ));
        $objSheet->getStyle(1)->applyFromArray($styleArray);
        /*
        $array = array(
            array('栏目','标题','SEO标题','SEO关键词','SEO描述','内容'),
            array("公司荣誉","我的标题","111","222","333","内容1"),
            array("公司荣誉","我的标题2","22","222","333","内容2")
        );
        */
        $objSheet->fromArray($array);  //利用fromArray()直接一次性填充数据
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');   //设定写入excel的类型
        $file_path=UPLOAD_PATH.'export'.DS.date('Ym').DS;

        if (!file_exists($file_path)){
            mkdir($file_path,0755,true);
        }
        $file_name=$file_path.$times.'.xlsx';
        $objWriter->save($file_name);       //保存文件
        $in_data=[
            'title'=>'导出excel',
            'url'=>$file_name,
            'times'=>$times,
            'add_time'=>time(),
        ];
        $this->model->insert($in_data);
        return $file_name;
    }
    /**
     * 插件安装的后置操作
     */
    public function afterInstall()
    {
        // 系统默认是自动调用，这里在安装完插件之后，更改为手工调用
        $savedata = [
            'tag_weapp' => 2,
            'update_time'   => getTime(),
        ];
        Db::name('weapp')->where(['code'=>'Export'])->update($savedata);
    }

    public function getMuban(){
        $field_arr=[
            '栏目ID','标题','SEO标题','SEO关键词','SEO描述','缩略图','内容','手机端内容','排序','浏览量','发布时间','审核','作者','来源','价格','库存'
        ];
        $typeid=$this->request->post('typeid',0);
        $if_id=$this->request->post('if_id',0);
        $list_id=$this->request->post('list_id',0);
        if($if_id){
            $field_arr[]='文章ID';
        }
        if($typeid && $this->request->post('zdy',0)){
            $type=Db::name('arctype')->where(['id'=>$typeid])->find();
            $channel_field=Db::name('channelfield')
                ->where(['channel_id'=>$type['current_channel'],'ifsystem'=>0])
                ->order('sort_order asc')
                ->select();
            foreach ($channel_field as $k=>$r){
                $field_arr[]='M-'.$r['title'];
            }
            if($type['current_channel']==2){//如果是产品模型，则考虑产品参数
                $attr_field=Db::name('product_attribute')
                    ->where(['typeid'=>$typeid,'is_del'=>0])
                    ->order('sort_order asc')
                    ->select();
                foreach ($attr_field as $k=>$r){
                    $field_arr[]='A-'.$r['attr_name'];
                }
                if($this->is_old_product_attr==0 && $list_id){
                    $attr_f2=Db::name('shop_product_attribute')
                        ->where(['list_id'=>$list_id])
                        ->order('sort_order asc')
                        ->select();
                    foreach ($attr_f2 as $k=>$r){
                        $field_arr[]='S-'.$r['attr_name'];
                    }
                }

            }
        }

        $path='PHPExcel-1-8.Classes.PHPExcel';
        weapp_vendor($path, 'Export');
        weapp_vendor($path.".IOFactory",'Export');
        weapp_vendor($path.".Reader.Excel2007",'Export');
        $objPHPExcel = new \PHPExcel();
        $objSheet = $objPHPExcel->getActiveSheet();        //选取当前的sheet对象
        $objSheet->setTitle('helen');                      //对当前sheet对象命名
        //常规方式：利用setCellValue()填充数据
        //$objSheet->setCellValue("A1","张三")->setCellValue("B1","李四");   //利用setCellValues()填充数据
        //取巧模式：利用fromArray()填充数据
        $styleArray = array(
            //'fill'    => array('type' => PHPExcel_Style_Fill::FILL_SOLID,'color' => array('rgb' => 'FFFF00')),
            'font' => array(
                'bold' => true,
                'color' => array('rgb' => 'FF0000'),
                'size' => 11
            ));
        $objSheet->getStyle(1)->applyFromArray($styleArray);
        $objPHPExcel->getActiveSheet()->getDefaultColumnDimension()
            ->setWidth(15);
        /*
        $array = array(
            array('栏目','标题','SEO标题','SEO关键词','SEO描述','内容'),
            array("公司荣誉","我的标题","111","222","333","内容1"),
            array("公司荣誉","我的标题2","22","222","333","内容2")
        );
        */
        $objSheet->fromArray($field_arr);  //利用fromArray()直接一次性填充数据
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');   //设定写入excel的类型
        $file_path=UPLOAD_PATH.'export'.DS.date('Ym').DS;

        if (!file_exists($file_path)){
            mkdir($file_path,0755,true);
        }
        $file_name=$file_path.'muban_'.$typeid.'.xlsx';
        $objWriter->save($file_name);       //保存文件
        $this->success('请求成功','',['file_name'=>'/'.$file_name]);
    }
}