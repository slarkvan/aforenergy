<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:45:"./application/admin/template/download/add.htm";i:1692667952;s:80:"/www/wwwroot/testweb.aforenergy.com/application/admin/template/public/layout.htm";i:1692667952;s:83:"/www/wwwroot/testweb.aforenergy.com/application/admin/template/public/theme_css.htm";i:1680508822;s:98:"/www/wwwroot/testweb.aforenergy.com/application/admin/template/archives/get_field_addonextitem.htm";i:1680508822;s:80:"/www/wwwroot/testweb.aforenergy.com/application/admin/template/public/footer.htm";i:1680508822;}*/ ?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen"/>
<link href="/public/plugins/layui/css/layui.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/main.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/css/page.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css">
<link href="/public/static/admin/font/css/font-awesome.min.css?v=<?php echo $version; ?>" rel="stylesheet" />
<link href="/public/static/admin/font/css/iconfont.css?v=<?php echo $version; ?>" rel="stylesheet" />
<!--[if IE 7]>
  <link rel="stylesheet" href="/public/static/admin/font/css/font-awesome-ie7.min.css?v=<?php echo $version; ?>">
<![endif]-->
<script type="text/javascript">
    var eyou_basefile = "<?php echo \think\Request::instance()->baseFile(); ?>";
    var module_name = "<?php echo MODULE_NAME; ?>";
    var GetUploadify_url = "<?php echo url('Uploadimgnew/upload'); ?>";
    // 插件专用旧版上传图片框
    if ('Weapp@execute' == "<?php echo CONTROLLER_NAME; ?>@<?php echo ACTION_NAME; ?>") {
      GetUploadify_url = "<?php echo url('Uploadify/upload'); ?>";
    }
    var __root_dir__ = "";
    var __lang__ = "<?php echo $admin_lang; ?>";
    var __seo_pseudo__ = <?php echo (isset($global['seo_pseudo']) && ($global['seo_pseudo'] !== '')?$global['seo_pseudo']:1); ?>;
    var __web_xss_filter__ = <?php echo (isset($global['web_xss_filter']) && ($global['web_xss_filter'] !== '')?$global['web_xss_filter']:0); ?>;
    var __is_mobile__ = <?php echo (isset($is_mobile) && ($is_mobile !== '')?$is_mobile:0); ?>;
    var __security_ask_open__ = <?php echo (isset($global['security_ask_open']) && ($global['security_ask_open'] !== '')?$global['security_ask_open']:0); ?>;
</script>
<link href="/public/static/admin/js/jquery-ui/jquery-ui.min.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css"/>
<link href="/public/static/admin/js/perfect-scrollbar.min.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css"/>
<!-- <link type="text/css" rel="stylesheet" href="/public/plugins/tags_input/css/jquery.tagsinput.css?v=<?php echo $version; ?>"> -->
<style type="text/css">html, body { overflow: visible;}</style>
<link href="/public/static/admin/css/diy_style.css?v=<?php echo $version; ?>" rel="stylesheet" type="text/css" />

<!-- 官方内置样式表，升级会覆盖变动，请勿修改，否则后果自负 -->

<style type="text/css">
	/*左侧收缩图标*/
	#foldSidebar i { font-size: 24px;color:<?php echo $global['web_theme_color']; ?>; }
    /*左侧菜单*/
    .eycms_cont_left{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl dd a:hover,.eycms_cont_left dl dd a.on,.eycms_cont_left dl dt.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl dd a:active{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist dd{ background:<?php echo $global['web_theme_color']; ?>; }
    .eycms_cont_left dl.jslist dd a:hover,.eycms_cont_left dl.jslist dd a.on{ background:<?php echo $global['web_assist_color']; ?>; }
    .eycms_cont_left dl.jslist:hover{ background:<?php echo $global['web_assist_color']; ?>; }
    /*栏目操作*/
    .cate-dropup .cate-dropup-con a:hover{ background-color: <?php echo $global['web_theme_color']; ?>; }
    /*按钮*/
    a.ncap-btn-green { background-color: <?php echo $global['web_theme_color']; ?>; }
    a:hover.ncap-btn-green { background-color: <?php echo $global['web_assist_color']; ?>; }
    .flexigrid .sDiv2 .btn:hover { background-color: <?php echo $global['web_theme_color']; ?>; }
    .flexigrid .mDiv .fbutton div.add{background-color: <?php echo $global['web_theme_color']; ?>; border: none;}
    .flexigrid .mDiv .fbutton div.add:hover{ background-color: <?php echo $global['web_assist_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds{color:<?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;}
	.flexigrid .mDiv .fbutton div.adds:hover{ background-color: <?php echo $global['web_theme_color']; ?>;}
    /*选项卡字体*/
    .tab-base a.current,
    .tab-base a:hover.current {color:<?php echo $global['web_theme_color']; ?> !important;}
    .tab-base a.current:after,
    .tab-base a:hover.current:after {background-color: <?php echo $global['web_theme_color']; ?>;}
    .addartbtn input.btn:hover{ border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>; }
    .addartbtn input.btn.selected{ color: <?php echo $global['web_theme_color']; ?>;border-bottom: 1px solid <?php echo $global['web_theme_color']; ?>;}
	/*会员导航*/
	.member-nav-group .member-nav-item .btn.selected{background: <?php echo $global['web_theme_color']; ?>;border: 1px solid <?php echo $global['web_theme_color']; ?>;box-shadow: -1px 0 0 0 <?php echo $global['web_theme_color']; ?>;}
	.member-nav-group .member-nav-item:first-child .btn.selected{border-left: 1px solid <?php echo $global['web_theme_color']; ?> !important;}
	/*搜索按钮图标*/
	.flexigrid .sDiv2 .fa-search{}
        
    /* 商品订单列表标题 */
   .flexigrid .mDiv .ftitle h3 {border-left: 3px solid <?php echo $global['web_theme_color']; ?>;} 
	
    /*分页*/
    .pagination > .active > a, .pagination > .active > a:focus, 
	.pagination > .active > a:hover, 
	.pagination > .active > span, 
	.pagination > .active > span:focus, 
	.pagination > .active > span:hover { border-color: <?php echo $global['web_theme_color']; ?>;color:<?php echo $global['web_theme_color']; ?>; }
    
    .layui-form-onswitch {border-color: <?php echo $global['web_theme_color']; ?> !important;background-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-enable.selected { background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .onoff .cb-disable.selected {background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .pcwap-onoff .cb-enable.selected { background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    .pcwap-onoff .cb-disable.selected {background-color: <?php echo $global['web_theme_color']; ?> !important;border-color: <?php echo $global['web_theme_color']; ?> !important;}
    input[type="text"]:focus,
    input[type="text"]:hover,
    input[type="text"]:active,
    input[type="password"]:focus,
    input[type="password"]:hover,
    input[type="password"]:active,
    textarea:hover,
    textarea:focus,
    textarea:active { border-color:<?php echo hex2rgba($global['web_theme_color'],0.8); ?>;box-shadow: 0 0 0 1px <?php echo hex2rgba($global['web_theme_color'],0.5); ?> !important;}
    .input-file-show:hover .type-file-button {background-color:<?php echo $global['web_theme_color']; ?> !important; }
    .input-file-show:hover {border-color: <?php echo $global['web_theme_color']; ?> !important;box-shadow: 0 0 5px <?php echo hex2rgba($global['web_theme_color'],0.5); ?> !important;}
    .input-file-show:hover span.show a,
    .input-file-show span.show a:hover { color: <?php echo $global['web_theme_color']; ?> !important;}
    .input-file-show:hover .type-file-button {background-color: <?php echo $global['web_theme_color']; ?> !important; }
    .color_z { color: <?php echo $global['web_theme_color']; ?> !important;}
    a.imgupload{
        background-color: <?php echo $global['web_theme_color']; ?> !important;
        border-color: <?php echo $global['web_theme_color']; ?> !important;
    }
    /*专题节点按钮*/
    .ncap-form-default .special-add{background-color:<?php echo $global['web_theme_color']; ?>;border-color:<?php echo $global['web_theme_color']; ?>;}
    .ncap-form-default .special-add:hover{background-color:<?php echo $global['web_assist_color']; ?>;border-color:<?php echo $global['web_assist_color']; ?>;}
    
    /*更多功能标题*/
    .on-off_panel .title::before {background-color:<?php echo $global['web_theme_color']; ?>;}
    .on-off_panel .on-off_list-caidan .icon_bg .on{color: <?php echo $global['web_theme_color']; ?>;}
    .on-off_panel .e-jianhao {color: <?php echo $global['web_theme_color']; ?>;}
    
     /*内容菜单*/
    .ztree li a:hover{color:<?php echo $global['web_theme_color']; ?> !important;}
    .ztree li a.curSelectedNode{background-color: <?php echo $global['web_theme_color']; ?> !important; border-color:<?php echo $global['web_theme_color']; ?> !important;}
    .layout-left .on-off-btn {background-color: <?php echo $global['web_theme_color']; ?> !important;}

    .iframe_loading{
        width:100%;
        background:url(/public/static/admin/images/loading-0.gif) no-repeat center center;
    }
    
    .layui-btn-normal {background-color: <?php echo $global['web_theme_color']; ?>;}
    
    /* 商品规格按钮 */
    /* .preset-bt{border-color: <?php echo $global['web_theme_color']; ?> !important;background:<?php echo $global['web_theme_color']; ?>;} */
</style>
<script type="text/javascript" src="/public/static/common/js/jquery.min.js?t=v1.6.5"></script>
<!-- <script type="text/javascript" src="/public/plugins/tags_input/js/jquery.tagsinput.js?v=<?php echo $version; ?>"></script> -->
<script type="text/javascript" src="/public/static/admin/js/jquery-ui/jquery-ui.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/plugins/layer-v3.1.0/layer.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.cookie.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/admin.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.validation.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/common.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/perfect-scrollbar.min.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/static/admin/js/jquery.mousewheel.js?v=<?php echo $version; ?>"></script>
<script type="text/javascript" src="/public/plugins/layui/layui.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/myFormValidate.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/myAjax2.js?v=<?php echo $version; ?>"></script>
<script src="/public/static/admin/js/global.js?v=<?php echo $version; ?>"></script>
</head>
<link rel="stylesheet" type="text/css" href="/public/plugins/webuploader/webuploader.css">

<?php if($editor['editor_select'] == '1'): ?>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.config.js?t=v1.6.5"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/ueditor.all.min.js?t=v1.6.5"></script>
    <script type="text/javascript" src="/public/plugins/Ueditor/lang/zh-cn/zh-cn.js?t=v1.6.5"></script>
<?php else: ?>
    <script type="text/javascript" src="/public/plugins/ckeditor/ckeditor.js?t=v1.6.5"></script>
<?php endif; ?>
<style type="text/css">
    /*服务器名称下拉*/
    .help-hot-list {
        padding: 10px 0;
        width: 164px;
        position: absolute;
        left: 16px;
        top: 40px;
        margin: 0;
        line-height: 32px;
        font-size: 14px;
        border-radius: 2px;
        box-shadow: 0 1px 5px rgba(0,0,0,.2);
        background-color: #fff;
        display: none;
        z-index: 999999;
    }
    .remote-hot-list{
        left: 86px;
        top: 26px;
    }
    .help-hot-list>a {
        display: block;
        color: #333;
        text-decoration: none;
        overflow: hidden;
        padding-right: 10px;
    }
    .help-hot-list>a:hover {
        background-color: #f3f3f3;
    }
    .help-hot-list>a>div {
        float: left;
        height: 32px;
        overflow: hidden;
        max-width:94%;
    }
    .help-hot-list>a>div.number {
        text-align: center;
        width: 22px;
        color: #ff8105
    }
    .help-hot-list>a>div.hottxt{
        width: 132px;
       overflow: hidden;
       text-overflow:ellipsis;
       white-space: nowrap;
    }
    .help-hot-list>a>div.number.c1 {
        color: #ff2c00
    }
    .help-hot-list>a>div.number.c2 {
        color: #ff5a00
    }
    .help-hot-list>a>div.number.c3 {
        color: #3cbe85
    }
    .template_div .ey_server_name{
        position: relative;
    }

</style>

<body class="bodysy-w">
<div id="toolTipLayer" style="position: absolute; z-index: 9999; display: none; visibility: visible; left: 95px; top: 573px;"></div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="geduan_div" class="h10"></div>
<div id="page_div" class="page min-hg-c mb-20" style="min-width:auto;box-shadow:none;">
    <div class="fixed-bar">
        <div class="item-title">
            <a class="back_xin" href="javascript:history.back();" title="返回"><i class="iconfont e-fanhui"></i></a>
            <a class="back_sz" href="javascript:void(0);"  data-href="<?php echo url('Download/help'); ?>" onclick="openHelpframe(this, '设置与帮助', '500px', '100%', 'r');" title="设置与帮助"><i class="iconfont e-shezhi-tongyong"></i></a>
            <div class="subject">
                <h3>发布文档</h3>
                <h5></h5>
            </div>
            <ul class="tab-base nc-row">
                <li><a href="javascript:void(0);" data-index='1' class="tab current"><span>基础内容</span></a></li>
                <li><a href="javascript:void(0);" data-index='2' class="tab"><span>SEO优化</span></a></li>
                <li><a href="javascript:void(0);" data-index='3' class="tab"><span>更多设置</span></a></li>
                <!-- #weapp_demontrate_li# -->
            </ul>
        </div>
    </div>
    <form class="form-horizontal" id="post_form" action="<?php echo url('Download/add'); ?>" method="post">
        <!-- 常规信息 -->
        <div class="ncap-form-default tab_div_1">
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>文档标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" name="title" value="" id="title" class="input-txt" maxlength="200" <?php if($channelRow['is_repeat_title'] == '0'): ?> oninput="check_title_repeat(this,0);" <?php endif; ?>>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    副标题：<input type="text" name="subtitle" value="" id="subtitle" class="w200">
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="title"><em>*</em>栏目分类</label>
                </dt>
                <dd class="opt">  
                    <select name="typeid" id="typeid">
                        <option value="0">请选择栏目…</option>
                        <?php echo $arctype_html; ?>
                    </select>
                    <span class="err"></span>
                </dd>
            </dl>
            <?php if(!(empty($global['web_stypeid_open']) || (($global['web_stypeid_open'] instanceof \think\Collection || $global['web_stypeid_open'] instanceof \think\Paginator ) && $global['web_stypeid_open']->isEmpty()))): ?>
            <dl class="row">
                <dt class="tit">
                    <label for="stypeid">副栏目分类</label>
                </dt>
                <dd class="opt"> 
                    <input type="hidden" name="stypeid" id="stypeid" value="" class="input-txt" onkeyup="this.value=this.value.replace(/[^\d\,]/g,'');" onpaste="this.value=this.value.replace(/[^\d\,]/g,'');">
                    &nbsp;<a href="javascript:void(0);" data-channel="<?php echo $channeltype; ?>" onclick="select_stypeid(this);" class="ncap-btn ncap-btn-green">选择副栏目</a>
                    <span class="err"></span>
                    <div id="stypeid_txt" class="pt5"></div>
                </dd>
            </dl>
            <?php endif; ?>
            <dl class="row">
                <dt class="tit">
                    <label>文档属性</label>
                </dt>
                <dd class="opt">
                    <?php if(is_array($archives_flags) || $archives_flags instanceof \think\Collection || $archives_flags instanceof \think\Paginator): $i = 0; $__LIST__ = $archives_flags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <label><input type="checkbox" name="<?php echo $vo['flag_fieldname']; ?>" value="1"><?php echo $vo['flag_name']; ?><!-- [<?php echo $vo['flag_attr']; ?>] --></label>&nbsp;
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <span class="err"></span>
                    <p class="notic">如需管理，请点击右上角设置与帮助按钮</p>
                </dd>
            </dl>
            <dl class="row none dl_jump">
                <dt class="tit">
                    <label>跳转网址</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="" name="jumplinks" id="jumplinks" class="input-txt" placeholder="http://">
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row" style="z-index:2;">
                <dt class="tit">
                    <label>文档标签</label>
                </dt>
                <dd class="opt">          
                    <input type="text" value="" name="tags" id="tags" class="input-txt" placeholder="多个标签之间以逗号隔开" autocomplete="off" oninput="get_common_tagindex_input(this);" onfocus="$('#often_tags').hide();" onkeyup="this.value=this.value.replace(/[\，]/g,',');" onpaste="this.value=this.value.replace(/[\，]/g,',')">&nbsp;
                    <a href="javascript:void(0);" onclick="get_common_tagindex(this);">显示常用标签</a>&nbsp;<img id="tag_loading" src="/public/static/common/images/loading.gif" style="display: none;" />
                    <div class="often_tags" id="often_tags" data-opt="add" style="display: none;"></div>
                    <div class="often_tags" id="often_tags_input" style="display: none;"></div>
                    <input type="hidden" id="tags_click_count">
                </dd>
            </dl>
            <dl class="row <?php if(empty($global['web_citysite_open']) || (($global['web_citysite_open'] instanceof \think\Collection || $global['web_citysite_open'] instanceof \think\Paginator ) && $global['web_citysite_open']->isEmpty())): ?> none <?php endif; ?> ">
                <dt class="tit">
                    <label for="title">所属区域</label>
                </dt>
                <dd class="opt"> 
                    <select name="province_id" id="province_id" onchange="set_city_list(0);">
                        <option value="0">全国</option>
                        <?php $_result=get_site_province_list();if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['id']; ?>" <?php if(\think\Request::instance()->param('province_id') == $vo['id']): ?> selected="true" <?php endif; ?>><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <select name="city_id" id="city_id" class="none ml5" onchange="set_area_list(0);">
                        <option value="">--请选择--</option>
                    </select>
                    <select name="area_id" id="area_id" class="none ml5">
                        <option value="">--请选择--</option>
                    </select>
                    <span class="err"></span>
                    <p class="notic"></p>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                  <label>封面图片</label>
                </dt>
                <dd class="opt">
                    <div class="input-file-show div_litpic_local">
                        <span class="show">
                            <a id="img_a" target="_blank" class="nyroModal" rel="gal" href="javascript:void(0);">
                                <i id="img_i" class="fa fa-picture-o" onmouseover="" onmouseout="layer.close(layer_tips);"></i>
                            </a>
                        </span>
                        <span class="type-file-box">
                            <input type="text" id="litpic_local" name="litpic_local" value="" class="type-file-text" autocomplete="off">
                            <input type="button" name="button" id="button1" value="选择上传..." class="type-file-button">
                            <input class="type-file-file" onClick="GetUploadify(1,'','allimg','img_call_back')" size="30" hidefocus="true" nc_type="change_site_logo"
                                   title="点击前方预览图可查看大图，点击按钮选择文件并提交表单后上传生效">
                        </span>
                    </div>
                    <input type="text" id="litpic_remote" name="litpic_remote" value="" placeholder="http://" class="input-txt" onKeyup="keyupRemote(this, 'litpic');" style="display: none;">
                    &nbsp;
                    <label><input type="checkbox" name="is_remote" id="is_remote" value="1" onClick="clickRemote(this, 'litpic');">远程图片</label>
                    <span class="err"></span>
                </dd>
            </dl>
			<?php if(!empty($channelRow['data']['is_download_pay'])): ?>
            <div class="<?php if(empty($channelRow['data']['is_download_pay'])): ?> none <?php endif; ?>">
                <dl class="row">
                    <dt class="tit">
                        <label>付费限制</label>
                    </dt>
                    <dd class="opt">
                        <label class="curpoin"><input type="radio" name="restric_type" value="0" checked="checked">免费</label>&nbsp;&nbsp;
                        <label class="curpoin"><input type="radio" name="restric_type" value="1">付费</label>&nbsp;&nbsp;
                        <label class="curpoin"><input type="radio" name="restric_type" value="2">指定会员</label>&nbsp;&nbsp;
                        <label class="curpoin"><input type="radio" name="restric_type" value="3">会员付费</label>&nbsp;&nbsp;
                    </dd>
                </dl>
                <dl class="row none" id="dl_arc_level_id">
                    <dt class="tit">
                        <label><em>*</em>会员等级</label>
                    </dt>
                    <dd class="opt">
                        <select name="arc_level_id" id="arc_level_id">
                            <?php if(is_array($users_level) || $users_level instanceof \think\Collection || $users_level instanceof \think\Paginator): $i = 0; $__LIST__ = $users_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <option value="<?php echo $vo['level_id']; ?>" level_value="<?php echo $vo['level_value']; ?>"><?php echo $vo['level_name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                        <label id="no_vip_pay_label"><input type="checkbox" name="no_vip_pay" id="no_vip_pay" value="1" onClick="clickNoVipPay(this);">开启非会员付费</label>
                    </dd>
                </dl>
                <dl class="row none" id="dl_users_price">
                    <dt class="tit">
                        <label for="users_price"><em>*</em>购买价格</label>
                    </dt>
                    <dd class="opt">
                        <input type="text" name="users_price" id="users_price" class="input-txt" autocomplete="off" style="width: 100px !important;text-align: right;" onkeyup="this.value=this.value.replace(/[^\d\.]/g,'');" onpaste="this.value=this.value.replace(/[^\d\.]/g,'')">&nbsp;元
                        <span class="err"></span>
                        <p class="notic"></p>
                    </dd>
                </dl>
            </div>
            <?php else: ?>
            <dl class="row">
                <dt class="tit">
                    <label>下载限制</label>
                </dt>
                <dd class="opt">
                    <select name="arc_level_id" id="arc_level_id">
                        <option value="0">不限会员</option>
                        <?php if(is_array($users_level) || $users_level instanceof \think\Collection || $users_level instanceof \think\Paginator): $i = 0; $__LIST__ = $users_level;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['level_id']; ?>"><?php echo $vo['level_name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <p class="notic">如需使用付费下载功能，请到频道模型里下载模型内开启</p>
                </dd>
            </dl>
            <?php endif; ?>
            <dl class="row" style="z-index: 2;">
                <dt class="tit">
                  <label>上传文件</label>
                </dt>
                <dd class="opt">
                    <div class="layui-upload">
                        <?php if($qiniu_open == 1): ?>
                        <button type="button" class="layui-btn layui-btn-normal" style="position: relative;z-index: 1;">
                            七牛云上传
                            <input type="file" name="file" id="qiniuFile" multiple="multiple" onchange="qiniu_upload(this);" style="position: absolute;top: 0;right: 0;opacity: 0;width: 110px;height: 30px;"/>
                        </button>
                        <?php elseif($oss_open == 1): ?>
                        <button type="button" class="layui-btn layui-btn-normal" style="position: relative;z-index: 1;">
                            oss上传
                            <input type="file" name="file" id="ossFile" multiple="multiple" onchange="oss_upload(this);" style="position: absolute;top: 0;right: 0;opacity: 0;width: 110px;height: 30px;"/>
                        </button>
                        <?php elseif($cos_open == 1): ?>
                        <button type="button" class="layui-btn layui-btn-normal" style="position: relative;z-index: 1;">
                            cos上传
                            <input type="file" name="file" id="cosFile" multiple="multiple" onchange="cos_multiple_upload(this);" style="position: absolute;top: 0;right: 0;opacity: 0;width: 110px;height: 30px;"/>
                        </button>
                        <?php else: ?>
                        <button type="button" class="layui-btn layui-btn-normal" id="buttonList">选择多文件</button>
                        <?php endif; ?>
                        <label><input type="checkbox" value="1" onclick="ClickRemoteFile(this);">远程地址</label>

                        <a href="javascript:void(0);" data-url="<?php echo url('Download/template_set'); ?>" onclick="TemplateSet(this);" style="display: inline-block;" id='TemplateSet' data-servername_use="<?php echo $servername_use; ?>">[参数设置]</a>

                        <div class="layui-upload-list none" id="layui-upload-list_downfile">
                            <table class="layui-table">
                                <thead>
                                    <tr>
                                        <th>文件名</th>
                                        <th class="th_server_name" <?php if($servername_use != '1'): ?> style="display: none;" <?php endif; ?>><?php echo $servername_info['field_title']; ?></th>
                                        <th>大小</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody id="demoList"></tbody>
                            </table>
                        </div>

                        <div style="display: none;" id='ClickRemoteFile'>
                            <div id='Template'>
                                <div class="template_div">
                                    远程地址1：<input type="text" name="remote_file[]" value="" placeholder="http://" style="width: 50%;">
                                    <?php if(is_array($attr_field) || $attr_field instanceof \think\Collection || $attr_field instanceof \think\Paginator): $i = 0; $__LIST__ = $attr_field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <span class="ey_<?php echo $vo['field_name']; ?>" <?php if($vo['field_use'] != '1'): ?> style="display: none;" <?php endif; ?>>
                                            <span class="title_<?php echo $vo['field_name']; ?>"><?php echo $vo['field_title']; ?></span>：<input type="text" name="<?php echo $vo['field_name']; ?>[]" id="<?php echo $vo['field_name']; ?>_remote_1" style="width: 7%;" <?php if($vo['field_name']=='server_name'): ?> onclick="searchServername(this);" autocomplete="off" value="<?php echo $default_servername; ?>" <?php endif; ?>>
                                            <?php if($vo['field_name']=='server_name'): ?>
                                                <div class="help-hot-list remote-hot-list" style="display: none;" data-test_val="5434" id="search_keywords_list_<?php echo $vo['field_name']; ?>_remote_1">

                                                </div>
                                            <?php endif; ?>
                                        </span>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <div class="template_div">
                                    远程地址2：<input type="text" name="remote_file[]" value="" placeholder="http://" style="width: 50%;">
                                    <?php if(is_array($attr_field) || $attr_field instanceof \think\Collection || $attr_field instanceof \think\Paginator): $i = 0; $__LIST__ = $attr_field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <span class="ey_<?php echo $vo['field_name']; ?>" <?php if($vo['field_use'] != '1'): ?> style="display: none;" <?php endif; ?>>
                                            <span class="title_<?php echo $vo['field_name']; ?>"><?php echo $vo['field_title']; ?></span>：<input type="text" name="<?php echo $vo['field_name']; ?>[]" id="<?php echo $vo['field_name']; ?>_remote_2" style="width: 7%;" <?php if($vo['field_name']=='server_name'): ?> onclick="searchServername(this);" autocomplete="off" value="<?php echo $default_servername; ?>" <?php endif; ?>>
                                            <?php if($vo['field_name']=='server_name'): ?>
                                                <div class="help-hot-list remote-hot-list" style="display: none;" id="search_keywords_list_<?php echo $vo['field_name']; ?>_remote_2">

                                                </div>
                                            <?php endif; ?>
                                        </span>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                                <div class="template_div">
                                    远程地址3：<input type="text" name="remote_file[]" value="" placeholder="http://" style="width: 50%;">
                                    <?php if(is_array($attr_field) || $attr_field instanceof \think\Collection || $attr_field instanceof \think\Paginator): $i = 0; $__LIST__ = $attr_field;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <span class="ey_<?php echo $vo['field_name']; ?>" <?php if($vo['field_use'] != '1'): ?> style="display: none;" <?php endif; ?>>
                                            <span class="title_<?php echo $vo['field_name']; ?>"><?php echo $vo['field_title']; ?></span>：<input type="text" name="<?php echo $vo['field_name']; ?>[]" id="<?php echo $vo['field_name']; ?>_remote_3" style="width: 7%;" <?php if($vo['field_name']=='server_name'): ?> onclick="searchServername(this);" autocomplete="off" value="<?php echo $default_servername; ?>" <?php endif; ?>>
                                            <?php if($vo['field_name']=='server_name'): ?>
                                                <div class="help-hot-list remote-hot-list" style="display: none;" id="search_keywords_list_<?php echo $vo['field_name']; ?>_remote_3">

                                                </div>
                                            <?php endif; ?>
                                        </span>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </div>
                            </div>
                            <a onclick="GetTemplateAddr(2);" style="cursor: pointer;">
                                更多远程地址
                            </a>
                        </div>
                        <button style="display:none;" type="button" class="layui-btn" id="buttonListAction">批量重传</button>
                    </div>
                </dd>
            </dl>
            
            <span id="FieldAddonextitem" class="custom_fields"></span>
<script type="text/javascript">
    $(function() {
        var aidNew = <?php echo (isset($field['aid']) && ($field['aid'] !== '')?$field['aid']:'0'); ?>;
        var typeidNew = <?php echo (isset($typeid) && ($typeid !== '')?$typeid:'0'); ?>;
        if (!typeidNew) typeidNew = <?php echo (isset($field['typeid']) && ($field['typeid'] !== '')?$field['typeid']:'0'); ?>;
        var channeltypeNew = <?php echo (isset($channeltype) && ($channeltype !== '')?$channeltype:'0'); ?>;
        var ControllerName = '<?php echo CONTROLLER_NAME; ?>';
        var ActionName = '<?php echo ACTION_NAME; ?>';
        GetAddonextitem(0, typeidNew, channeltypeNew, aidNew, false, ControllerName, ActionName);
    });

    function GetAddonextitem(init, typeidNew, channeltypeNew, aidNew, is_destroy, ControllerName, ActionName) {
        layer.load(3, {shade: [0.5,'#fff']});
        ControllerName = ControllerName ? ControllerName : '';
        ActionName = ActionName ? ActionName : '';
        $.ajax({
            url: "<?php echo url('Archives/ajax_get_addonextitem'); ?>",
            data: {typeid: typeidNew, channeltype: channeltypeNew, aid: aidNew, controller_name: ControllerName, action_name:ActionName, _ajax:1},
            type:'get',
            success:function(res) {
                layer.closeAll();
                if (res.code == 0) {
                    layer.alert(res.msg, {icon: 2, title:false});
                } else {
                    var EditorSelect = <?php echo $editor['editor_select']; ?>;
                    if (2 == EditorSelect) {
                        // 编辑器内容数据提取
                        var contentData = [];
                        $.each(res.data.htmltextField, function (index, value) {
                            var contentID = 'addonFieldExt_' + value;
                            var getContent = '';
                            for (instance in CKEDITOR.instances) {
                                CKEDITOR.instances[contentID].updateElement();
                                getContent = CKEDITOR.instances[contentID].getData();
                            }
                            contentData.push(getContent);
                        });
                        // 覆盖原先的编辑器HTML
                        $('#FieldAddonextitem').empty().html(res.data.html);
                        // 追加编辑器的内容
                        $.each(res.data.htmltextField, function (index, value) {
                            if (contentData[index]) {
                                var contentID = 'addonFieldExt_' + value;
                                CKEDITOR.instances[contentID].setData(contentData[index]);
                            }
                        });
                    } else if (1 == EditorSelect) {
                        $('#FieldAddonextitem').empty().html(res.data.html);
                        
                        if (1 == init) {
                            $.each(res.data.htmltextField, function (index, value) {
                                showEditor_1597892187('addonFieldExt_'+value);
                            });
                        }
                    }
                    // 自动远程图片本地化和自动清除本站链接
                    var editor_addonFieldExt = '';
                    $.each(res.data.htmltextField, function (index, value) {
                        if ($('#editor_addonFieldExt')) {
                            if (editor_addonFieldExt) {
                                editor_addonFieldExt += ','+value;
                            }else{
                                editor_addonFieldExt = value;
                            }
                        }
                    });
                    if (editor_addonFieldExt) {
                        $('#editor_addonFieldExt').val(editor_addonFieldExt);
                    }
                }
            },
            error: function(e){
                layer.closeAll();
                layer.alert(e.responseText, {icon: 2, title:false});
            }
        });
    }

    // 渲染编辑器
    function showEditor_1597892187(elemtid) {
        var content = '';
        try{
            content = UE.getEditor(elemtid).getContent();
            UE.getEditor(elemtid).destroy();
        }catch(e){}
        var serverUrl = eyou_basefile+'?m=admin&c=Ueditor&a=index&savepath=ueditor&lang='+__lang__;
        var options = {
            serverUrl : serverUrl,
            zIndex: 999,
            initialFrameWidth: "100%", //初化宽度
            initialFrameHeight: 450, //初化高度            
            focus: false, //初始化时，是否让编辑器获得焦点true或false
            maximumWords: 99999,
            removeFormatAttributes: 'class,style,lang,width,height,align,hspace,valign',//允许的最大字符数 'fullscreen',
            pasteplain:false, //是否默认为纯文本粘贴。false为不使用纯文本粘贴，true为使用纯文本粘贴
            autoHeightEnabled: false,
            toolbars: ueditor_toolbars
        };
        eval("ue_"+elemtid+" = UE.getEditor(elemtid, options);ue_"+elemtid+".ready(function() {ue_"+elemtid+".setContent(content);});");
    }
</script>
        </div>
        <!-- 常规信息 -->
        <!-- SEO参数 -->
        <div class="ncap-form-default tab_div_2" style="display:none;">
            <dl class="row">
                <dt class="tit">
                    <label for="seo_title">SEO标题</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="" name="seo_title" id="seo_title" class="input-txt">
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO关键词</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_keywords" name="seo_keywords" style="height:20px;"></textarea>
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>SEO描述</label>
                </dt>
                <dd class="opt">          
                    <textarea rows="5" cols="60" id="seo_description" name="seo_description" style="height:130px;"></textarea>
                    <span class="err"></span>
                </dd>
            </dl>
        </div>
        <!-- SEO参数 -->
        <!-- 其他参数 -->
        <div class="ncap-form-default tab_div_3" style="display:none;">
            <dl class="row">
                <dt class="tit">
                    <label for="author">作者</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo (\think\Session::get('admin_info.pen_name') ?: '小编'); ?>" name="author" id="author" class="input-txt">
                </dd>
            </dl>
            <dl class="row dl_origin">
                <dt class="tit">
                    <label>来源</label>
                </dt>
                <dd class="opt origin-hot">
                    <input type="text" value="<?php echo $system_originlist_0; ?>" name="origin" id="origin" class="input-txt" onclick="searchOrigin(this);" autocomplete="off">
                    <div class="origin-hot-list" style="display: none;" id="search_keywords_list_origin"></div>
                    <textarea id="system_originlist_str" style="display: none;"><?php echo $system_originlist_str; ?></textarea>
                    <span class="setting" onclick="set_originlist();">设置</span>
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>点击数</label>
                </dt>
                <dd class="opt">    
                    <input type="text" value="<?php echo $rand_arcclick; ?>" name="click" id="click" class="input-txt">
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>下载数</label>
                </dt>
                <dd class="opt">
                    <input type="text" value="<?php echo $rand_arcdownload; ?>" name="downcount" id="downcount" class="input-txt">
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label>阅读权限</label>
                </dt>
                <dd class="opt">
                    <select name="arcrank" id="arcrank" <?php if($admin_info['role_id']>0&&$auth_role_info['check_oneself']<1): ?> disabled="disabled" <?php endif; ?>>
                        <?php if(is_array($arcrank_list) || $arcrank_list instanceof \think\Collection || $arcrank_list instanceof \think\Paginator): $i = 0; $__LIST__ = $arcrank_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo['rank']; ?>" <?php if($admin_info['role_id']>0&&$auth_role_info['check_oneself']<1&&$vo['rank']==-1): ?> selected="selected" <?php endif; ?>><?php echo $vo['name']; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <span class="err"></span>
                </dd>
            </dl>
            <!-- #weapp_UsersGroup_content_users_id=<?php echo $field['users_id']; ?>#--><!-- #weapp_UsersGroup_content# -->
            <dl class="row">
                <dt class="tit">
                    <label for="add_time">发布时间</label>
                </dt>
                <dd class="opt">
                    <input type="text" class="input-txt" id="add_time" name="add_time" value="<?php echo date('Y-m-d H:i:s') ?>" autocomplete="off">        
                    <span class="add-on input-group-addon">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                    </span> 
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row">
                <dt class="tit">
                    <label for="tempview">文档模板</label>
                </dt>
                <dd class="opt">
                    <select name="tempview" id="tempview">
                        <?php if(is_array($templateList) || $templateList instanceof \think\Collection || $templateList instanceof \think\Paginator): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <option value="<?php echo $vo; ?>" <?php if($vo == $tempview): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                    <input type="hidden" name="type_tempview" value="<?php echo $tempview; ?>" />
                    <span class="err"></span>
                </dd>
            </dl>
            <dl class="row <?php if(!in_array(($seo_pseudo), explode(',',"2,3"))): ?>no-grey<?php endif; ?>">
                <dt class="tit">
                    <label>自定义文件名</label>
                </dt>
                <dd class="opt">
                    <input type="text" <?php if(!in_array(($seo_pseudo), explode(',',"2,3"))): ?>readonly="readonly" title="动态模式下不支持自定义文档url"<?php endif; ?> value="" name="htmlfilename" id="htmlfilename" autocomplete="off" onkeyup="this.value=this.value.replace(/[^\u4E00-\u9FA5\w\-]/g,'-');" onpaste="this.value=this.value.replace(/[^\u4E00-\u9FA5\w\-]/g,'-');" class="input-txt <?php if(!in_array(($seo_pseudo), explode(',',"2,3"))): ?>no-drop<?php endif; ?>">.html
                    <span class="err"></span>
                </dd>
            </dl>
        </div>
        <!-- 其他参数 -->
        <!-- #weapp_demontrate_div# -->
        <div class="ncap-form-default">
            <div class="bot2">
                <input type="hidden" name="gourl" value="<?php echo (isset($gourl) && ($gourl !== '')?$gourl:''); ?>">
                <input type="hidden" name="editor_addonFieldExt" id="editor_addonFieldExt" value="">
                <a href="JavaScript:void(0);" onclick="check_submit();" class="ncap-btn-big ncap-btn-green" id="submitBtn">确认提交</a>
                <a class="ncap-btn-big ncap-btn-no" href="javascript:history.back();" title="返回">返回</a>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript" src="/public/plugins/webuploader/webuploader.min.js"></script>
<script type="text/javascript">
    var uploader_swf = '/public/plugins/webuploader/Uploader.swf';
    var server_url   = "<?php echo url('Ueditor/DownloadUploadFile',array('savepath'=>'soft')); ?>";
    var admin_id = "<?php echo (\think\Session::get('admin_id') ?: '1'); ?>";
</script>
<script src="/public/static/admin/js/getting-started.js"></script>

<!-- 陈风任 -->
<script type="text/javascript">
    function cos_multiple_upload() {
        $('#layui-upload-list_downfile').show();
        var cosFileObj = document.getElementById("cosFile").files;
        var servername_use = $('#TemplateSet').attr("data-servername_use");
        var formData = new FormData();
        formData.append('file_num', cosFileObj.length);
        for (var i = 0; i < cosFileObj.length; i++) {
            var file = cosFileObj[i];
            var fileName = file.name;
            var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
            var ext = judgeExt(fileExt);
            if (ext > -1) {
                // 追加显示在页面上
                var timestamp = new Date().getTime() + '-' + Math.ceil(Math.random()*100);
                var append_html = '';
                append_html += '<tr>';
                append_html += '<td>'+ file.name +'</td>';
                if (1 == servername_use){
                    append_html += '<td class="th_server_name">';
                } else {
                    append_html += '<td class="th_server_name" style="display: none;">';
                }
                append_html += '<input type="text" name="fileupload[server_name][]" value="腾讯云服务器" id="severname_qiniuyun_'+i+'" onclick="searchServername(this);" autocomplete="off">';
                append_html += '<div class="help-hot-list" style="display: none;" id="search_keywords_list_severname_qiniuyun_'+i+'"></div>';
                append_html += '</td>';
                append_html += '<td>'+ (file.size/1014).toFixed(1) +' KB</td>';
                append_html += '<td id="upload-'+ timestamp +'">上传腾讯云…请稍等</td>';
                append_html += '<td><button class="layui-btn layui-btn-xs layui-btn-danger demo-delete" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</button>';
                append_html += '</td>';
                append_html += '</tr>';
                $("#demoList").append(append_html);

                // 表单提交数据
                formData.append('file_' + [i], cosFileObj[i]);
                formData.append('file_mime_' + [i], file.type);
                formData.append('file_name_' + [i], file.name);
                formData.append('file_size_' + [i], file.size);
                formData.append('file_ext_'  + [i], fileExt);
                formData.append('file_tdid_' + [i], "#upload-" + timestamp);
            } else {
                showErrorMsg('不支持选中的文件格式，仅支持' + "<?php echo $basic['file_type']; ?>");
            }
        }

        // 上传提示
        layer.msg('上传腾讯云……&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font id="upgrade_backup_speed">0.01</font>%，请勿刷新', {icon: 1, time: 3600000, shade: [0.2]});
        layer.load(3, {shade: [0.1,'#fff']});

        // 执行上传
        $.ajax({
            type: 'post',
            url : '/index.php?m=plugins&c=Cos&a=cos_multiple_upload&_ajax=1',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            xhr: function () {
                myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) {
                    myXhr.upload.addEventListener('progress', function(e) {
                        var curr = e.loaded;
                        var total = e.total;
                        var process = parseInt(curr / total * 100);
                        process = 100 == process ? 99 : process;
                        $('#upgrade_backup_speed').html(process);
                    });
                }
                return myXhr;
            },
            success: function(res) {
                layer.closeAll();
                try {
                    if (1 == res.code) {
                        var file_url = res.data.file_url;
                        $.each(file_url, function(i, item) {
                            var html = '';
                            html += '<input type="hidden" name="fileupload[file_url][]" value="'+ file_url[i] +'">';
                            html += '<input type="hidden" name="fileupload[file_mime][]" value="'+ res.data.file_mime[i] +'">';
                            html += '<input type="hidden" name="fileupload[file_name][]" value="'+ res.data.file_name[i] +'">';
                            html += '<input type="hidden" name="fileupload[file_size][]" value="'+ res.data.file_size[i] +'">';
                            html += '<input type="hidden" name="fileupload[file_ext][]" value="'+ res.data.file_ext[i] +'">';
                            $(res.data.file_tdid[i]).html('<span style="color: #5FB878;">上传成功</span>' + html);
                        });
                    } else {
                        showErrorAlert('接口超时，部分上传腾讯云失败，请移除未上传成功的文件重新上传。');
                    }
                } catch(e) {}
            },
            error: function(e){
                layer.closeAll();
                showErrorAlert(e.responseText);
            }
        });
    }
</script>
<!-- END -->

<script type="text/javascript">
    function qiniu_upload() {
        $('#layui-upload-list_downfile').show();
        var arr = [];
        var servername_use = $('#TemplateSet').attr("data-servername_use");
        for(var i = 0 ;i<document.getElementById("qiniuFile").files.length;i++){
            //file对象为用户选择的某一个文件
            file=document.getElementById("qiniuFile").files[i];
            var fileName = file.name;
            var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
            var ext = judgeExt(fileExt);
            if (ext>-1) {
                //此时取出这个文件进行处理，这里只是显示文件名
                var timestamp = new Date().getTime()+'-'+ Math.ceil(Math.random()*100);
                    arr[i] = timestamp;
                var append_html = '';
                append_html += '<tr id="upload-'+ timestamp +'">';
                append_html += '<td>'+ file.name +'</td>';
                if (1 == servername_use){
                    append_html += '<td class="th_server_name">';
                }else{
                    append_html += '<td class="th_server_name" style="display: none;">';
                }
                append_html += '<input type="text" name="fileupload[server_name][]" value="七牛云服务器" id="severname_qiniuyun_'+i+'" onclick="searchServername(this);" autocomplete="off">';
                append_html += '<div class="help-hot-list" style="display: none;" id="search_keywords_list_severname_qiniuyun_'+i+'"></div>';
                append_html += '</td>';
                append_html += '<td>'+ (file.size/1014).toFixed(1) +' KB</td>';
                append_html += '<td>等待上传</td>';
                append_html += '<td><button class="layui-btn layui-btn-xs layui-btn-danger demo-delete" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</button>';
                append_html += '</td>';
                append_html += '</tr>';
                $("#demoList").append(append_html);
            }else{
                showErrorMsg('不支持选中的文件格式,仅支持'+"<?php echo $basic['file_type']; ?>");
            }
        }

        var date = new Date();
        var y = date.getFullYear();
        var m = date.getMonth() + 1;
            m = m < 10 ? '0' + m : m;
        var d = date.getDate();
            d = d < 10 ? ('0' + d) : d;

        //获取token
        $.ajax({
            type: 'POST',
            url: '/index.php?m=plugins&c=Qiniuyun&a=qiniu_upload',
            data: {_ajax:1,down:1},
            dataType: "JSON",
            success: function(res1){
                if (1 == res1.code){
                    var token  = res1.data.token;
                    for(var i = 0 ;i<document.getElementById("qiniuFile").files.length;i++) {
                        file = document.getElementById("qiniuFile").files[i];

                        var fileName = file.name;
                        var formData = new FormData();
                        formData.append('token', token);
                        //文件路径
                        formData.append('file', file);
                        //获取文件拓展名
                        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                        //三位随机数
                        var num = round_num();
                        //七牛云存储文件名
                        var name = admin_id+'-'+ new Date().getTime()+num+ fileExt;
                        fileName = res1.data.filePath + y + m + d + "/"+ name;
                        formData.append('key', fileName);
                        var tr = $("#upload-" + arr[i]);
                        new Promise(function() {
                            var tr = $("#upload-" + arr[i]);
                            var file_mime = file.type;
                            var file_name = file.name;
                            var file_size = file.size;
                            var file_ext = fileExt;
                            $.ajax({
                                url: res1.data.uphost,
                                type: 'POST',
                                dataType: 'JSON',
                                data: formData,
                                timeout: 1200000,
                                // async: false,
                                cache: false,  //默认是true，但是一般不做缓存
                                processData: false, //用于对data参数进行序列化处理，这里必须false；如果是true，就会将FormData转换为String类型
                                contentType: false,  //一些文件上传http协议的关系，自行百度，如果上传的有文件，那么只能设置为false
                                xhr: function () { //获取ajaxSettings中的xhr对象，为它的upload属性绑定progress事件的处理函数
                                    myXhr = $.ajaxSettings.xhr();
                                    if (myXhr.upload) { //检查upload属性是否存在
                                        //绑定progress事件的回调函数
                                        // myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
                                        myXhr.upload.addEventListener('progress', function (e) {
                                            var curr = e.loaded;
                                            var total = e.total;
                                            process = parseInt(curr / total * 100);
                                            tr.children("td").eq(3).text('上传中...' + process + "%");
                                        });
                                    }

                                    return myXhr; //xhr对象返回给jQuery使用
                                },
                                success: function (res2) {
                                    var video_url = res1.data.domain + "/" + res2.key;
                                    var html = '';
                                    html += '<input type="hidden" name="fileupload[file_url][]" value="'+ video_url +'">';
                                    html += '<input type="hidden" name="fileupload[file_mime][]" value="'+ file_mime +'">';
                                    html += '<input type="hidden" name="fileupload[file_name][]" value="'+ file_name +'">';
                                    html += '<input type="hidden" name="fileupload[file_ext][]" value="'+ file_ext +'">';
                                    html += '<input type="hidden" name="fileupload[file_size][]" value="'+ file_size +'">';

                                    var tds = tr.children();
                                    tds.eq(3).html('<span style="color: #5FB878;">上传成功</span>');
                                    tds.eq(4).html('<span class="layui-btn layui-btn-xs layui-btn-danger" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</span>'+html);

                                },
                                error: function (e) {
                                    showErrorMsg(e.responseText);
                                    return false;
                                }
                            });
                        })
                    }
                }else{
                    showErrorMsg(res1.msg);
                }
            },
            error: function(e){
                showErrorMsg(e.responseText);
            }
        });

    }

    function oss_upload() {
        $('#layui-upload-list_downfile').show();
        var arr = [];
        var servername_use = $('#TemplateSet').attr("data-servername_use");
        for(var i = 0 ;i<document.getElementById("ossFile").files.length;i++){
            //file对象为用户选择的某一个文件
            file=document.getElementById("ossFile").files[i];
            var fileName = file.name;
            var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
            var ext = judgeExt(fileExt);
            if (ext>-1) {
                //此时取出这个文件进行处理，这里只是显示文件名
                var timestamp = new Date().getTime() + '-' + Math.ceil(Math.random()*100);
                arr[i] = timestamp;
                var append_html = '';
                append_html += '<tr id="upload-'+ timestamp +'">';
                append_html += '<td>'+ file.name +'</td>';
                if (1 == servername_use){
                    append_html += '<td class="th_server_name">';
                }else{
                    append_html += '<td class="th_server_name" style="display: none;">';
                }
                append_html += '<input type="text" name="fileupload[server_name][]" value="阿里云服务器" id="severname_qiniuyun_'+i+'" onclick="searchServername(this);" autocomplete="off">';
                append_html += '<div class="help-hot-list" style="display: none;" id="search_keywords_list_severname_qiniuyun_'+i+'"></div>';
                append_html += '</td>';
                append_html += '<td>'+ (file.size/1014).toFixed(1) +' KB</td>';
                append_html += '<td>等待上传</td>';
                append_html += '<td><button class="layui-btn layui-btn-xs layui-btn-danger demo-delete" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</button>';
                append_html += '</td>';
                append_html += '</tr>';
                $("#demoList").append(append_html);
            }else{
                showErrorMsg('不支持选中的文件格式,仅支持'+"<?php echo $basic['file_type']; ?>");
            }
        }
        var date = new Date();
        var y = date.getFullYear();
        var m = date.getMonth() + 1;
        m = m < 10 ? '0' + m : m;
        var d = date.getDate();
        d = d < 10 ? ('0' + d) : d;

        //获取token
        $.ajax({
            type: 'POST',
            url : '/index.php?m=plugins&c=AliyunOss&a=oss_upload',
            data: {_ajax:1,down:1},
            dataType: "JSON",
            success: function(res1){
                if (1 == res1.code){
                    var accessid = res1.data.accessid;
                    var policy = res1.data.policy;
                    var signature = res1.data.signature;
                    var filePath = res1.data.filePath;
                    for(var i = 0 ;i<document.getElementById("ossFile").files.length;i++) {
                        file = document.getElementById("ossFile").files[i];
                        var fileName = file.name;

                        var request = new FormData();
                        request.append("OSSAccessKeyId",accessid);//Bucket 拥有者的Access Key Id。
                        request.append("policy",policy);//policy规定了请求的表单域的合法性
                        request.append("Signature",signature);//根据Access Key Secret和policy计算的签名信息，OSS验证该签名信息从而验证该Post请求的合法性
                        request.append("success_action_status",201);// 让服务端返回200,不然，默认会返回204

                        //获取文件拓展名
                        var fileExt = fileName.substr(fileName.lastIndexOf('.')).toLowerCase();
                        //三位随机数
                        var num = round_num();
                        //七牛云存储文件名
                        var name = admin_id+'-'+ new Date().getTime()+num+ fileExt;
                        fileName = filePath + y + m + d + "/"+ name;

                        request.append("key", fileName);
                        request.append('file', file);

                        var tr = $("#upload-" + arr[i]);
                        new Promise(function() {
                            var tr = $("#upload-" + arr[i]);
                            var file_mime = file.type;
                            var file_name = file.name;
                            var file_size = file.size;
                            var file_ext = fileExt;
                            $.ajax({
                                url: res1.data.host,
                                data: request,
                                processData: false,
                                cache: false,
                                contentType: false,
                                dataType: 'xml',
                                type : 'post',
                                xhr: function () { //获取ajaxSettings中的xhr对象，为它的upload属性绑定progress事件的处理函数
                                    myXhr = $.ajaxSettings.xhr();
                                    if (myXhr.upload) { //检查upload属性是否存在
                                        //绑定progress事件的回调函数
                                        // myXhr.upload.addEventListener('progress', progressHandlingFunction, false);
                                        myXhr.upload.addEventListener('progress', function (e) {
                                            var curr = e.loaded;
                                            var total = e.total;
                                            process = parseInt(curr / total * 100);
                                            tr.children("td").eq(3).text('上传中...' + process + "%");
                                        });
                                    }

                                    return myXhr; //xhr对象返回给jQuery使用
                                },
                                success: function (res2) {
                                    var res = $(res2).find('PostResponse');
                                    if (res) {
                                        var key = res.find('Key').text();
                                        var video_url = res1.data.domain + "/" + key;
                                        var html = '';
                                        html += '<input type="hidden" name="fileupload[file_url][]" value="' + video_url + '">';
                                        html += '<input type="hidden" name="fileupload[file_mime][]" value="' + file_mime + '">';
                                        html += '<input type="hidden" name="fileupload[file_name][]" value="' + file_name + '">';
                                        html += '<input type="hidden" name="fileupload[file_ext][]" value="' + file_ext + '">';
                                        html += '<input type="hidden" name="fileupload[file_size][]" value="' + file_size + '">';

                                        var tds = tr.children();
                                        tds.eq(3).html('<span style="color: #5FB878;">上传成功</span>');
                                        tds.eq(4).html('<span class="layui-btn layui-btn-xs layui-btn-danger" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</span>' + html);
                                    }

                                },
                                error: function (e) {
                                    showErrorMsg(e.responseText);
                                    return false;
                                }
                            });
                        })
                    }
                }else{
                    showErrorMsg(res1.msg);
                }
            },
            error: function(e){
                showErrorMsg(e.responseText);
            }
        });
    }

    // 远程/本地上传文件切换
    function ClickRemoteFile(obj)
    {   
        if ($(obj).is(':checked')) {
            $('#ClickRemoteFile').show();
            //$('#TemplateSet').show();
        } else {
            $('#ClickRemoteFile').hide();
            //$('#TemplateSet').hide();
        }
    }

    // 远程地址参数设置
    function TemplateSet(th){
        var url = $(th).attr('data-url');
        //iframe窗
        layer.open({
            type: 2,
            title: '参数设置',
            fixed: true, //不固定
            shadeClose: false,
            shade: layer_shade,
            maxmin: true, //开启最大化最小化按钮
            area: ['40%', '60%'],
            content: url
        });
    }

    // 获取模板属性数据
    function GetTemplateAddr(num){
        if (!num) {
            num = 1;
        }
        $.ajax({
            url: "<?php echo url('Download/get_template', ['_ajax'=>1]); ?>",
            data: {num:num},
            type:'post',
            dataType:'json',
            success: function(res){
                // 拼装模板属性并追加
                AddTemplateAddr(num,res.data);
            },
        });
    }

    // 删除对应的文件及文件信息
    function DeleteFile(obj){
        layer.confirm('确认要移除？', {
            shade: layer_shade,
            area: ['480px', '190px'],
            move: false,
            title: '提示',
            btnAlign:'r',
            closeBtn: 3,
            btn: ['确定', '取消'], //按钮
            success: function () {
                  $(".layui-layer-content").css('text-align', 'left');
              }
        }, function (index) {
            layer.close(index);
            $(obj).parent().parent().remove();
            if ($('#demoList tr').length > 0) {
                $('#layui-upload-list_downfile').show();
            } else {
                $('#layui-upload-list_downfile').hide();
            }
            <?php if($qiniu_open == 1): ?>
            $('#qiniuFile').val('');
            <?php elseif($oss_open == 1): ?>
            $('#ossFile').val('');
            <?php elseif($cos_open == 1): ?>
            $('#cosFile').val('');
            <?php endif; ?>
        }, function (index) {
            layer.close(index);
        });
    }
    // 拼装模板属性并追加
    function AddTemplateAddr(num,data){
        if (!num) {
            num = 1;
        }
        // 获取指定div数量
        var SerialNum = $('#Template div.template_div').length;
        var default_servername = "<?php echo $default_servername; ?>";
        // 获取是否有
        // 初始化数组
        var html_div = [];
        // 拼装html
        if (num > 1) {
            for (var i = 0; i < num; i++) {
                SerialNum++;
                html_div +=
                [
                    '<div class="template_div">'+
                        '远程地址'+SerialNum+'：<input type="text" name="remote_file[]" value="" placeholder="http://" style="width: 50%;"> '
                ];

                if (data) {
                    for (var j = 0; j < data.length; j++) {
                        if (data[j]['field_name'] == 'server_name') {
                            if (data[j]['field_use'] == 1){
                                html_div += ['<span class="ey_' + data[j]['field_name'] + '"> '];
                            }else {
                                html_div += ['<span  style="display:none;" class="ey_' + data[j]['field_name'] + '"> '];
                            }
                            html_div +=
                                [
                                    '<span class="title_'+data[j]['field_name']+'"> '+data[j]['field_title']+'</span>：<input type="text" name="'+data[j]['field_name']+'[]" id="'+data[j]['field_name']+'_remote_'+SerialNum+'" style="width: 7%;" onclick="searchServername(this);" autocomplete="off" value="'+default_servername+'">'+
                                '<div class="help-hot-list" style="display: none;" id="search_keywords_list_'+data[j]['field_name']+'_remote_'+SerialNum+'"></div>'+
                                '</span>'
                                ];
                        }else{
                            if (data[j]['field_use'] == 1){
                                html_div += ['<span class="ey_' + data[j]['field_name'] + '"> '];
                            }else {
                                html_div += ['<span  style="display:none;" class="ey_' + data[j]['field_name'] + '"> '];
                            }

                            html_div +=
                                [
                                    '<span class="title_'+data[j]['field_name']+'"> '+data[j]['field_title']+'</span>：<input type="text" name="'+data[j]['field_name']+'[]" id="'+data[j]['field_name']+'_'+SerialNum+'" style="width: 7%;">'+
                                '</span>'
                                ];
                        }
                    }
                }

                html_div +=
                [
                    '</div>'
                ];
            }
        }else{
            SerialNum++;
            html_div += 
            [
                '<div class="template_div">'+
                    '远程地址'+SerialNum+'：<input type="text" name="remote_file[]" value="" placeholder="http://" style="width: 50%;">'
            ];

            if (data) {
                for (var j = 0; j < data.length; j++) {
                    if (data[j]['field_name'] == 'server_name') {
                        if (data[j]['field_use'] == 1){
                            html_div += ['<span class="ey_' + data[j]['field_name'] + '"> '];
                        }else {
                            html_div += ['<span  style="display:none;" class="ey_' + data[j]['field_name'] + '"> '];
                        }
                        html_div +=
                            [
                                '<span class="title_'+data[j]['field_name']+'"> '+data[j]['field_title']+'</span>：<input type="text" name="'+data[j]['field_name']+'[]" id="'+data[j]['field_name']+'_remote_'+SerialNum+'" style="width: 7%;" onclick="searchServername(this);" autocomplete="off" value="'+default_servername+'">'+
                                '<div class="help-hot-list" style="display: none;" id="search_keywords_list_'+data[j]['field_name']+'_remote_'+SerialNum+'"></div>'+
                                '</span>'
                            ];
                    }else{
                        if (data[j]['field_use'] == 1){
                            html_div += ['<span class="ey_' + data[j]['field_name'] + '"> '];
                        }else {
                            html_div += ['<span  style="display:none;" class="ey_' + data[j]['field_name'] + '"> '];
                        }

                        html_div +=
                            [
                                '<span class="title_'+data[j]['field_name']+'"> '+data[j]['field_title']+'</span>：<input type="text" name="'+data[j]['field_name']+'[]" id="'+data[j]['field_name']+'_'+SerialNum+'" style="width: 7%;">'+
                                '</span>'
                            ];
                    }
                }
            }

            html_div += 
            [
                '</div>'
            ];
        }

        // 追加html
        $('#Template').append(html_div);
    }
    // 文件上传JS
    layui.use('upload', function(){
        var type = "<?php echo $basic['file_type']; ?>";
        var $ = layui.jquery,upload = layui.upload;
        // 多文件列表示例
        var demoListView = $('#demoList'),uploadListIns = upload.render({
            elem: '#buttonList',
            url: server_url,
            accept: 'file',
            exts: type,
            multiple: true,
            auto: true,
            bindAction: '#buttonListAction',
            choose: function(obj){
                $('#layui-upload-list_downfile').show();
                // 将每次选择的文件追加到文件队列
                var files = this.files = obj.pushFile();
                var servername_use = $('#TemplateSet').attr("data-servername_use");
                // 读取本地文件
                obj.preview(function(index, file, result){
                    if (1 == servername_use) {
                        var tr = $(
                            [
                                '<tr id="upload-' + index + '">',
                                '<td>' + file.name + '</td>',
                                '<td  class="th_server_name"><input type="text" name="fileupload[server_name][]" value="<?php echo $default_servername; ?>" id="severname_local_' + index + '" onclick="searchServername(this);" autocomplete="off">',
                                '<div class="help-hot-list" style="display: none;" id="search_keywords_list_severname_local_' + index + '"></div>',
                                '</td>',
                                '<td>' + (file.size / 1014).toFixed(1) + ' KB</td>',
                                '<td>等待上传</td>',
                                '<td>',
                                // '<button class="layui-btn layui-btn-xs demo-reload layui-hide">重传</button>',
                                '<button class="layui-btn layui-btn-xs layui-btn-danger demo-delete" style="line-height:unset;height: unset;">移除</button>',
                                '</td>',
                                '</tr>'
                            ].join(''));
                    }else{
                        var tr = $(
                            [
                                '<tr id="upload-' + index + '">',
                                '<td>' + file.name + '</td>',
                                '<td  class="th_server_name" style="display: none;"><input type="text" name="fileupload[server_name][]" value="<?php echo $default_servername; ?>" id="severname_local_' + index + '" onclick="searchServername(this);" autocomplete="off">',
                                '<div class="help-hot-list" style="display: none;" id="search_keywords_list_severname_local_' + index + '"></div>',
                                '</td>',
                                '<td>' + (file.size / 1014).toFixed(1) + ' KB</td>',
                                '<td>等待上传</td>',
                                '<td>',
                                // '<button class="layui-btn layui-btn-xs demo-reload layui-hide">重传</button>',
                                '<button class="layui-btn layui-btn-xs layui-btn-danger demo-delete" style="line-height:unset;height: unset;">移除</button>',
                                '</td>',
                                '</tr>'
                            ].join(''));
                    }

                    // 单个重传
                    tr.find('.demo-reload').on('click', function(){
                        obj.upload(index, file);
                    });

                    // 删除
                    tr.find('.demo-delete').on('click', function(){
                        // 删除对应的文件
                        delete files[index];
                        tr.remove();
                        // 清空 input file 值，以免删除后出现同名文件不可选
                        uploadListIns.config.elem.next()[0].value = '';
                    });
                    demoListView.append(tr);
                });
            },
            done: function(res, index, upload){
                if(res.code == 1){
                    // 上传成功
                    var html = '';
                    html += '<input type="hidden" name="fileupload[file_url][]" value="'+res.file_url+'">';
                    html += '<input type="hidden" name="fileupload[file_mime][]" value="'+res.file_mime+'">';
                    html += '<input type="hidden" name="fileupload[file_name][]" value="'+res.file_name+'">';
                    html += '<input type="hidden" name="fileupload[file_ext][]" value="'+res.file_ext+'">';
                    html += '<input type="hidden" name="fileupload[file_size][]" value="'+res.file_size+'">';
                    html += '<input type="hidden" name="fileupload[uhash][]" value="'+res.uhash+'">';
                    html += '<input type="hidden" name="fileupload[md5file][]" value="'+res.md5file+'">';

                    var tr = demoListView.find('tr#upload-'+ index),
                    tds = tr.children();
                    tds.eq(0).html(res.file_name);
                    tds.eq(3).html('<span style="color: #5FB878;">'+res.msg+'</span>');
                    tds.eq(4).html('<span class="layui-btn layui-btn-xs layui-btn-danger" style="line-height:unset;height: unset;" onclick="DeleteFile(this);">移除</span>'+html);

                    // 清空操作
                    return delete this.files[index];// 删除文件队列已经上传成功的文件
                }
                this.error(res, index, upload);
            },
            error: function(res, index, upload){
                if (res.msg){
                    var tr = demoListView.find('tr#upload-'+ index),
                        tds = tr.children();
                    tds.eq(3).html('<span style="color: #FF5722;">'+res.msg+'</span>');
                }else{
                    msg = "请求上传接口出现异常,请打开<a style='color:red;' target='_blank' href='https://www.eyoucms.com/plus/view.php?aid=28315&origin_eycms=1'>教程</a>查看是否存在配置错误";
                    showSuccessAlert(msg);
                }
                return false;

            }
        });
    });
</script>

<script type="text/javascript">
    layui.use('laydate', function() {
        var laydate = layui.laydate;

        laydate.render({
            elem: '#add_time'
            ,type: 'datetime'
        });
    })
    $(function () {
        try {
            var web_citysite_open = <?php echo (isset($global['web_citysite_open']) && ($global['web_citysite_open'] !== '')?$global['web_citysite_open']:0); ?>;
            var site_province_id = <?php echo (isset($site_province_id) && ($site_province_id !== '')?$site_province_id:0); ?>;
            var site_city_id = <?php echo (isset($site_city_id) && ($site_city_id !== '')?$site_city_id:0); ?>;
            var site_area_id = <?php echo (isset($site_area_id) && ($site_area_id !== '')?$site_area_id:0); ?>;
            if (web_citysite_open > 0 && site_province_id > 0) {
                $('select[name=province_id]').val(site_province_id);
                set_city_list(site_city_id);
                set_area_list(site_area_id);
            }
        }catch(e){}
     
        //选项卡切换列表
        $('.tab-base').find('.tab').click(function(){
            $('.tab-base').find('.tab').each(function(){
                $(this).removeClass('current');
            });
            $(this).addClass('current');
            var tab_index = $(this).data('index');          
            $(".tab_div_1, .tab_div_2, .tab_div_3, .tab_div_4").hide();
            $(".tab_div_"+tab_index).show();
            layer.closeAll();
        });

        $('input[name=is_jump]').click(function(){
            if ($(this).is(':checked')) {
                $('.dl_jump').show();
            } else {
                $('.dl_jump').hide();
            }
        });

        var dftypeid = <?php echo (isset($typeid) && ($typeid !== '')?$typeid:'0'); ?>;
        $('#typeid').change(function(){
            var current_channel = $(this).find('option:selected').data('current_channel');
            if (0 < $(this).val() && <?php echo $channeltype; ?> != current_channel) {
                showErrorMsg('请选择对应模型的栏目！');
                $(this).val(dftypeid);
            } else if (<?php echo $channeltype; ?> == current_channel) {
                layer.closeAll();
            }
            GetAddonextitem(1, $(this).val(), <?php echo $channeltype; ?>, 0, true);
        });

        $(document).click(function(){
            $('#often_tags').hide();
            $('#often_tags_input').hide();
            event.stopPropagation();
        });

        $('#often_tags').click(function(){
            $('#often_tags').show();
            event.stopPropagation();
        });

        $('input[name=tags]').keyup(function(){
            var tags = $.trim($(this).val());
            $('#seo_keywords').val(tags);
        });

        $('input[name=restric_type]').click(function(){
            $('#dl_arc_level_id').hide();
            $('#dl_users_price').hide();
            $('#no_vip_pay_label').hide();
            var restric_type = $(this).val();
            $('#arc_level_id').find('option:eq(0)').attr('selected',true);
            if (-1 < $.inArray(restric_type, ['1','3'])) {
                $('#dl_users_price').show();
            }
            if (-1 < $.inArray(restric_type, ['2','3'])) {
                $('#dl_arc_level_id').show();
                if (2 == restric_type) {
                    $('#no_vip_pay_label').show();
                    if ($('#no_vip_pay').is(':checked')){
                        $('#dl_users_price').show();
                    }
                }
            }
        });
    });

    // 判断输入框是否为空
    function check_submit(){
        if($.trim($('input[name=title]').val()) == ''){
            $($('.tab-base').find('.tab')[0]).trigger('click'); 
            showErrorMsg('标题不能为空！');
            $('input[name=title]').focus();
            return false;
        }
        if ($('#typeid').val() == 0) {
            $($('.tab-base').find('.tab')[0]).trigger('click'); 
            showErrorMsg('请选择栏目…！');
            $('#typeid').focus();
            return false;
        }

        var is_download_pay = <?php echo (isset($channelRow['data']['is_download_pay']) && ($channelRow['data']['is_download_pay'] !== '')?$channelRow['data']['is_download_pay']:0); ?>;
        if (is_download_pay != 0) {
            var restric_type = $('input[name=restric_type]:checked').val();
            if ( restric_type == 1 ||  restric_type == 3 || (restric_type == 2 && $('#no_vip_pay').is(':checked'))){
                var users_price = $('#users_price').val();
                if (parseFloat(users_price).toString()  == "NaN") {
                    users_price = 0;
                }
                if (0 == users_price || users_price == '') {
                    showErrorMsg('购买价格不能为空或0');
                    $('#users_price').focus();
                    return false;
                } else {
                    var exp = /^(([1-9]\d*)|\d)(\.\d{1,2})?$/;
                    if (!exp.test(users_price)) {
                        showErrorMsg('购买价格格式不正确！');
                        $('#users_price').focus();
                        return false;
                    }
                }
            }
        }
        
        var htmlfilename = $.trim($('input[name=htmlfilename]').val());
        if (htmlfilename != '') {
            var exp = /^\d{1,}$/;
            if (exp.test(htmlfilename)) {
                showErrorAlert('自定义文件名不能纯数字，会与文档ID冲突！');
                $('input[name=htmlfilename]').focus();
                return false;
            }
        }

        layer_loading('正在处理');
        if(!ajax_check_htmlfilename())
        {
            layer.closeAll();
            showErrorMsg('自定义文件名已存在！');
            $('input[name=htmlfilename]').focus();
            return false;
        }
        setTimeout(function (){
            editor_auto_210607();
            $('#post_form').submit();
        }, 1);
    }

    function img_call_back(fileurl_tmp)
    {
        $("#litpic_local").val(fileurl_tmp);
        $("#img_a").attr('href', fileurl_tmp);
        $("#img_i").attr('onmouseover', "layer_tips=layer.tips('<img src="+fileurl_tmp+" class=\\'layer_tips_img\\'>',this,{tips: [1, '#fff']});");
        $("input[name=is_litpic]").attr('checked', true); // 自动勾选属性[图片]
    }

    function round_num() {
        var num = '';
        for(var i=0;i<3;i++)
        {
            num+=Math.floor(Math.random()*10);
        }
        return num;
    }

    function judgeExt(ext) {
        var type = "<?php echo $basic['file_type']; ?>";
        var extArr = [];
        extArr = type.split("|");
        var ext = ext.replace(".","");

        return extArr.indexOf(ext);
    }

    // 服务器名称选择
    function ServernameSelect(th){
        var url = $(th).attr('data-url');
        var sn_name_sub = $(th).attr('data-sn_name_sub');
        var sn_type = $(th).attr('data-sn_type');
        if (sn_type==1){
            var key = $(th).parent().parent().attr('id');
        }else{
            var key = $(th).attr('data-file_key');
        }

        url = url+'&file_key='+key+'&sn_type='+sn_type+'&sn_name_sub='+sn_name_sub;
        //iframe窗
        layer.open({
            type: 2,
            title: '服务器名称选择',
            fixed: true, //不固定
            shadeClose: false,
            shade: layer_shade,
            maxmin: true, //开启最大化最小化按钮
            area: ['40%', '60%'],
            content: url
        });
    }

</script>

<script type="text/javascript">
    $(function(){
        $("body").click(function(){
            $('.help-hot-list').hide();
        });

    });

    var t2_1598602098 = '';

    function search_mouseover(th)
    {
        var sinput_id = $(th).attr('data-sinput_id');
        $('#search_keywords_list_'+sinput_id).show();
        try{
            clearTimeout(t2_1598602098);
        }catch(e){}
    }

    function search_mouseout(th)
    {
        var sinput_id = $(th).attr('data-sinput_id');
        var setFunc = $("#search_keywords_list_"+sinput_id).hide();
        t2_1598602098 = setTimeout('"'+setFunc+'"',1000);
    }

    function searchServername(th) {
        var sinput_id = $(th).attr('id');
        $.ajax({
            type: "POST",
            url: "<?php echo url('Download/search_servername'); ?>",
            data: {keyword:'',_ajax:1},
            dataType: 'json',
            cache: false,
            success: function (res) {
                if(res.code == 1){
                    if (res.data.length > 0) {
                        var html='';
                        res.data.forEach(function(i,e) {
                            var e_num = e+1;
                            html += '<a href="javascript:void(0);" onclick="select_sname(this);" onmouseover="search_mouseover(this);" onmouseout="search_mouseout(this);" data-sname="'+i+'" data-sinput_id="'+sinput_id+'" style="cursor: pointer;">';
                            html += '<div class="number c'+e_num+'">'+e_num+'</div>';
                            html += '<div class="hottxt">'+i+'</div>';
                            html += '</a>';
                        });
                        // return false;

                        $('#search_keywords_list_'+sinput_id).html(html).show();
                    } else {
                        $('#search_keywords_list_'+sinput_id).hide();
                    }
                } else {
                    $('#search_keywords_list_'+sinput_id).hide();
                }
            }
        });
    }

    function select_sname(th) {
        var sinput_id = $(th).attr('data-sinput_id');
        var sname = $(th).attr('data-sname');
        $("#"+sinput_id).val(sname);
    }

    function clickNoVipPay(obj) {
        if ($(obj).is(':checked')) {
            $('#dl_users_price').show();
        } else {
            $('#dl_users_price').hide();
        }
    }
</script>
<script>
    try{
        var mt20_1649209614 = sessionStorage.getItem("mt20_1649209614");
        if (mt20_1649209614 == 1){
            $("#geduan_div").removeClass("h10");
        }else{
            $("#geduan_div").addClass("h10");
        }
    }catch(e){}
</script>
<div id="goTop">
    <a href="JavaScript:void(0);" id="btntop">
        <i class="fa fa-angle-up"></i>
    </a>
    <a href="JavaScript:void(0);" id="btnbottom">
        <i class="fa fa-angle-down"></i>
    </a>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#think_page_trace_open').css('z-index', 99999);
    });
</script>
</body>
</html>
