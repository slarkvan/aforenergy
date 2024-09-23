<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:35:"./template/mobile/view_download.htm";i:1694417357;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $eyou['field']['seo_title']; ?></title>
<meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
<meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />
<link href="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_ico"); echo $__VALUE__; ?>" rel="shortcut icon" type="image/x-icon" />
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/style/pintuer.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/style/header.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/style/style.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/style/iconfont.css","","","",""); echo $__VALUE__; ?>
<!--[if lt IE 9]><?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/respond.js","","","",""); echo $__VALUE__; ?> <![endif]-->
</head>
<body>
<!--网站公用头部——开始-->
模板文件不存在: ./template/mobile/header.htm
<div class="layout bg-gray">
    <div class="container hidden-l">
        <div class="line">
            <div class="nav-bread">
                <i class="iconfont icon-home margin-small-right text-gray" aria-hidden="true"></i> <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", ""); echo $__VALUE__; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="line">
            <div class="x9">
                <div class="sidebar-l">
                    <!--内容 begin-->
                    <div class="bg-white padding-large radius-middle">
                        <div class="article">
                            <div class="post">
                                <h1><?php echo $eyou['field']['title']; ?></h1>
                                <div class="blank-small"></div>
                            </div>
                            <div class="line">
                                <div class="xl12 xs10 xm10 xb10">
                                    <div class="text-gray text-default height-big">
                                       <span class="margin-right">作者：<?php echo $eyou['field']['author']; ?></span>
                                       <span class="margin-right">更新时间：<?php echo MyDate('Y-m-d',$eyou['field']['update_time']); ?></span>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="blank-middle"></div>
                            <div class="post">
                                <?php echo $eyou['field']['content']; ?>
                            </div>
                        </div><!-- article   -->
                        <div class="blank-small"></div>
                        <div class="text-center">
                            <!-- 收藏代码开始  -->
                            <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagCollect = new \think\template\taglib\eyou\TagCollect; $_result = $tagCollect->getCollect($aid, "<i class='iconfont icon-shoucang1 margin-small-right'></i>已收藏", "<i class='iconfont icon-shoucang1 margin-small-right'></i>加入收藏", "off"); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "";else: $field = $__LIST__;?>
                                <a class="button hidden-l bg-gray border-none radius-rounded text-center text-main" <?php echo $field['onclick']; ?>><?php echo $field['cancel']; ?></a>
                                <?php echo $field['hidden']; endif; else: echo "";endif; unset($aid); $field = []; ?>
                            <!--  收藏代码结束 -->
                        </div>
                        <div class="blank-middle"></div>
                        <!--tag-->
                        <?php if(!(empty($eyou['field']['tags']) || (($eyou['field']['tags'] instanceof \think\Collection || $eyou['field']['tags'] instanceof \think\Paginator ) && $eyou['field']['tags']->isEmpty()))): ?>
                            <span class="text-main padding-right">Tag:</span>
                            <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagTag = new \think\template\taglib\eyou\TagTag; $_result = $tagTag->getTag(0, $typeid, $aid, 100, "new", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 100, true) : $_result->slice(0, 100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                            <a href="<?php echo $field['link']; ?>" class="tag tags bg-yellow radius-rounded height text-white margin-small-bottom padding-small" <?php echo $field['target']; ?>><?php echo $field['tag']; ?></a>
                            <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $field = []; endif; ?>
                        <!--tag end-->

                        <!-- 上下篇 -->
                        <div class="blank-small"></div>
                        <div class="padding-big-top border-top height">
                            <div class="line">
                                <div class="x12 xs10 xm10">
                                    <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("pre");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 30, false);  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys11";}'); echo $__VALUE__; ?>：<a href="<?php echo $field['arcurl']; ?>" class="text-gray" title="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys11";}'); echo $__VALUE__; ?>：<?php echo $field['title']; ?>"><?php echo $field['title']; ?></a>
                                    <?php else:  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys11";}'); echo $__VALUE__; ?>：<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys10";}'); echo $__VALUE__; endif; $field = []; ?>
                                    <div class="blank"></div>
                                    <?php  $tagPrenext = new \think\template\taglib\eyou\TagPrenext; $_result = $tagPrenext->getPrenext("next");if(!empty($_result) || (($_result instanceof \think\Collection || $_result instanceof \think\Paginator ) && $_result->isEmpty())): $field = $_result; $field["title"] = text_msubstr($field["title"], 0, 30, false);  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys12";}'); echo $__VALUE__; ?>：<a href="<?php echo $field['arcurl']; ?>" class="text-gray" title="<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys12";}'); echo $__VALUE__; ?>：<?php echo $field['title']; ?>"><?php echo $field['title']; ?></a>
                                    <?php else:  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys12";}'); echo $__VALUE__; ?>：<?php  $tagLang = new \think\template\taglib\eyou\TagLang; $__VALUE__ = $tagLang->getLang('a:1:{s:4:"name";s:5:"sys10";}'); echo $__VALUE__; endif; $field = []; ?>
                                </div>
                                <div class="x12 xs2 xm2 text-center">
                                    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = $eyou['field']['typeid']; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                                    <a href="<?php echo $field['typeurl']; ?>" class="button button-big button-block bg-yellow margin-top radius-rounded border-none text-default"><i class="iconfont icon-back margin-small-right"></i>返回列表</a>
                                    <!-- <?php echo $field['typename']; ?> -->
                                    <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                                </div>
                           </div>
                        </div>
                        <!-- 上下篇 -->
                    </div>
                    <div class="blank-big"></div>
                </div><!-- sidebar-l -->
            </div>
            <div class="xl12 xs12 xm3 xb3">
                <div class="sidebar-r">
                    <div class="download-detail bg-white radius-middle">
                        <div class="padding-big">
                            <?php if(is_array($eyou['field']['file_list']) || $eyou['field']['file_list'] instanceof \think\Collection || $eyou['field']['file_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $eyou['field']['file_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                                <!-- <?php echo $field['file_url']; ?> -->
                                <a href="<?php echo $field['downurl']; ?>" <?php if($field['extract_code'] !=''): ?>data-clipboard-text="<?php echo $field['extract_code']; ?>"<?php endif; ?> class="btn button button-big button-block text-center bg-yellow border-none radius-big margin-top"><i class="iconfont icon-xiazai margin-right"></i><?php echo $field['server_name']; ?></a>
                                <?php if($field['extract_code'] !=''): ?>
                                    <div class="text-center text-gray margin-small-top">
                                        提取码：<?php echo $field['extract_code']; ?><!-- 有提取码则显示 -->
                                    </div>
                                <?php endif; ?>
                            <?php echo isset($field["ey_1563185380"])?$field["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($field["ey_1563185376"]))?$field["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                            <div class="blank-middle"></div>
                            <div class="text-center">
                                <div class="xl4 xs4 xb4 xm4">
                                    <span class="text-gray text-default">
                                    <i class="iconfont icon-eye margin-small-right"></i>
                                    <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagArcclick = new \think\template\taglib\eyou\TagArcclick; $__VALUE__ = $tagArcclick->getArcclick($aid, "", ""); echo $__VALUE__; ?>
                                    </span>
                                </div>
                                <div class="xl4 xs4 xb4 xm4">
                                    <span class="text-gray text-middle">
                                    <i class="iconfont icon-download margin-small-right"></i>
                                    <?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagDowncount = new \think\template\taglib\eyou\TagDowncount; $__VALUE__ = $tagDowncount->getDowncount($aid); echo $__VALUE__; ?>
                                    </span>
                                </div>
                                <div class="xl4 xs4 xb4 xm4">
                                    <span class="text-gray text-middle">
                                        <i class="iconfont icon-shoucang1 margin-small-right"></i>
                                        <span><?php  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagCollectnum = new \think\template\taglib\eyou\TagCollectnum; $__VALUE__ = $tagCollectnum->getCollectnum($aid); echo $__VALUE__; ?></span>
                                    </span>
                                </div>
                            </div>

                        <div class="blank-small"></div>
                        </div>
                    </div>
                    <div class="blank-small"></div>
                    <div class="padding-big bg-white radius-middle hidden-l">
                        <div class="title-l">
                            <h2>标签</h2>
                        </div>
                        <div class="blank-small"></div>
                        <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(!isset($aid) || empty($aid)) : $aid = "0"; endif; $tagTag = new \think\template\taglib\eyou\TagTag; $_result = $tagTag->getTag(1, $typeid, $aid, 20, "new", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 20, true) : $_result->slice(0, 20, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $i= intval($key) + 1;$mod = ($i % 2 ); ?>
                            <a href="<?php echo $field['link']; ?>" class="tag tags bg-white border radius-rounded text-gray margin-bottom margin-small-right padding " <?php echo $field['target']; ?>><?php echo $field['tag']; ?></a>
                        <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); $field = []; ?>
                    </div>

                    <div class="blank"></div>

                    <?php  $tagAdv = new \think\template\taglib\eyou\TagAdv; $_result = $tagAdv->getAdv(29, "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, 10, true) : $_result->slice(0, 10, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field):  if ($i == 0) : $field["currentclass"] = $field["currentstyle"] = ""; else:  $field["currentclass"] = $field["currentstyle"] = ""; endif;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                        <a href='<?php echo $field['links']; ?>' <?php echo $field['target']; ?>><img src="<?php echo $field['litpic']; ?>" class="img-responsive radius-middle" alt="<?php echo $field['title']; ?>"></a>
                        <div class="blank"></div>
                    <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="blank-big"></div>
</div>
<!--网站公用底部——开始-->
模板文件不存在: ./template/mobile/footer.htm
<!--网站公用底部——结束-->
<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/pintuer.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/common.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/Lib/clipboard/clipboard.min.js","","","",""); echo $__VALUE__; ?>
<script>
    var clipboard = new ClipboardJS('.btn'); //先实例化
    clipboard.on('success', function(e) {
        alert('提取码复制成功，确定后转到下载地址！'); // 复制成功的事件
    });
    clipboard.on('error', function(e) {
        alert('复制失败'); // 复制失败的事件
    });
</script>
</body>
</html>
