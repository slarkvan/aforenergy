<?php

namespace weapp\LinkArchives\behavior\admin;

use Darabonba\GatewaySpi\Models\InterceptorContext\request;
use think\Db;
/**
 * 行为扩展
 */
class LinkArchivesBehavior
{
    protected static $actionName;
    protected static $controllerName;
    protected static $moduleName;
    protected static $method;

    /**
     * 构造方法
     * @param Request $request Request对象
     * @access public
     */
    public function __construct()
    {
        !isset(self::$moduleName) && self::$moduleName = request()->module();
        !isset(self::$controllerName) && self::$controllerName = request()->controller();
        !isset(self::$actionName) && self::$actionName = request()->action();
        !isset(self::$method) && self::$method = strtoupper(request()->method());
    }

    /**
     * 模块初始化
     * @param array $params 传入参数
     * @access public
     */
    public function moduleInit(&$params)
    {

    }

    /**
     * 操作开始执行
     * @param array $params 传入参数
     * @access public
     */
    public function actionBegin(&$params)
    {

    }

    /**
     * 视图内容过滤
     * @param array $params 传入参数
     * @access public
     */
    public function viewFilter(&$params)
    {
        $row = Db::name("weapp")->where('code','eq','LinkArchives')->find();
        if (!empty($row) && $row['status'] == 1){
            if (self::$controllerName == 'Article' && 'GET' == self::$method && in_array(self::$actionName, ['add','edit'])){
                $str_li = '<li><a href="javascript:void(0);" data-index=\'230918\' class="tab"><span>关联文档</span></a></li><!-- #weapp_li# -->';
                $params = str_replace('<!-- #weapp_li# -->', $str_li, $params);
                $aid = $_GET['id'];
                $link_arc = [];
                if ($aid){
                    $linkArchivesModel = new \weapp\LinkArchives\model\LinkArchivesModel();
                    $link_arc = $linkArchivesModel->getLinkArc($aid);
                }
                $none = 'none';
                if (empty($link_arc['link_aid']))  $link_arc['link_aid'] = '';
                if (!empty($link_arc['link_list']))  $none = '';
                //pc模板 begin
                $str_div = '<div class="ncap-form-default tab_div_230918 tab_div_body" style="display:none;">
                <dl class="row">
                    <dt class="tit">
                        <label>关联文档</label>
                    </dt>
                    <dd class="opt">
                        <div class="none">
                            <textarea rows="5" cols="60" name="link_aid" id="link_aid">'.$link_arc['link_aid'].'</textarea>
                        </div>
                        <a href="javascript:void(0);" onclick="selectLinkArchives();" class="ncap-btn ncap-btn-green">选择文档</a>
                    </dd>
                </dl>
                <dl class="row '.$none.'" id="link_arc_dl">
                    <dt class="tit"></dt>
                    <dd class="opt">
                        <div class="ment-comment-table pd0">
                            <div class="ment-table-wrapper">
                                <div class="ment-table ment-table-default" style="max-height: 307px;padding: 0 10px;overflow-y: auto;">
                                    <div class="ment-table-header">
                                        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
                                            <colgroup> <col width=""> <col width="60"> </colgroup>
                                            <thead>
                                            <tr>
                                                <th> <div class="ment-table-cell"><span>文档标题</span> </div> </th>
                                                <th> <div class="ment-table-cell"><span>操作</span> </div> </th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="ment-table-body">
                                        <table cellspacing="0" cellpadding="0" border="0" style="width: 100%;">
                                            <colgroup> <col width=""> <col width="60"> </colgroup>
                                            <tbody class="ment-table-tbody linkArchivesTbody">';
                if (!empty($link_arc['link_list'])){
                    foreach ($link_arc['link_list'] as $k => $v){
                        $str_div .= '        <tr draggable="false" class="ment-table-row">
                                                <td><div class="ment-table-cell ellipsis">'.$v['title'].'</div></td>
                                                <td><div class="ment-table-cell"><a class="curpoin" href="javaScript:void(0);" data-aid="'.$v['aid'].'" onclick="delNodeArchives(this);">删除</a></div></td>
                                             </tr>';
                    }
                }

                $str_div .= '                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </dd>
                </dl>
            </div>';
                $str_div .= '
                    <script>
                        var ajax_archives_list = "'.weapp_url('LinkArchives/LinkArchives/ajax_archives_list').'";
                        var link_aid = "'.$link_arc['link_aid'].'";
                        var link_list = "";
                        var new_link_aid = "";
                        var new_link_list = "";';
                if (!empty($link_arc['link_list'])){
                    $str_div .= '
                        link_list = [];
                        new_link_aid = [];
                        new_link_list = [];
                    ';
                    foreach ($link_arc['link_list'] as $k => $v){
                        $str_div .= '        
                            new_link_aid.push("'.$v['aid'].'");
                            link_list.push({"aid": "'.$v['aid'].'", "title": "'.$v['title'].'"});
                            new_link_list.push({"aid": "'.$v['aid'].'", "title": "'.$v['title'].'"});
                        ';
                    }
                }
                $str_div .= '
                    </script>
                ';

                $str_div .=
                    '<script>window.demonstrate_1650795693 || document.write(\'<script src="' . ROOT_DIR . '/weapp/LinkArchives/template/skin/js/link_archives_456.js?v={$version}" type="text/javascript"><\/script>\')</script>';
                $str_div .= '
                    <!-- #weapp_div# -->
                ';
                $params = str_replace('<!-- #weapp_div# -->', $str_div, $params);

            }
        }

    }

    /**
     * 应用结束
     * @param array $params 传入参数
     * @access public
     */
    public function appEnd(&$params)
    {
        $row = Db::name("weapp")->where('code','eq','LinkArchives')->find();
        if (!empty($row) && $row['status'] == 1) {
            $linkArchivesModel = new \weapp\LinkArchives\model\LinkArchivesModel();
            if (self::$controllerName == 'Article' && 'POST' == self::$method && in_array(self::$actionName, ['add', 'edit'])) {
                $linkArchivesModel->afterSave($_POST['aid'], $_POST['link_aid'], self::$actionName);
            }elseif (self::$controllerName == 'Archives' && 'del' == self::$actionName){
                $linkArchivesModel->delByAids($_POST['aids']);
            }
        }
    }
}