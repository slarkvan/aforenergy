<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:31:"./template/pc/view_download.htm";i:1724151250;s:58:"/www/wwwroot/testweb.aforenergy.com/template/pc/bottom.htm";i:1721290442;}*/ ?>
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
模板文件不存在: ./template/pc/header.htm
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
<!-- footer -->
<footer class="he_fot">
  <div class="he_conten2">
    <div class="he_ftybx clearfix">
      <div class="he_ftybxle fl">
        <div class="he_ftybti">
          <p></p>
        </div>
        <div class="he_ftybdj">
        </div>
      </div>
      <div class="he_ftybxri fl clearfix">
        <div class="he_ftynav clearfix fl">
          <div class="he_ftynli fl">
            <div class="he_ftybti">
              <p>About Afore</p>
            </div>
            <div class="he_ftybta clearfix">
              <div class="he_ftybtlk">
                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "1"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "son",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></a>
                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>


              </div>
            </div>
          </div>
          <div class="he_ftynli fl">
            <div class="he_ftybti">
              <p>Solutions</p>
            </div>
            <div class="he_ftybta clearfix">
              <div class="he_ftybtlk">
                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "son",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
                <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></a>
                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
              </div>
            </div>
          </div>
          <div class="he_ftynli fl">
            <div class="he_ftybti">
              <p>Products</p>
            </div>
            <div class="he_ftybta clearfix">
              <div class="he_ftybtlk">

                <a href="#">Single Phase Inverter</a>
                <a href="#">Three Phase Inverter</a>
                <a href="#">Energy Storage Inverter</a>
                <a href="#">Monitoring System</a>
                <a href="#">Accessories</a>

              </div>





            </div>
          </div>
          <div class="he_ftynli fl">
            <div class="he_ftybti">
              <p>Support & Service</p>
            </div>
            <div class="he_ftybta clearfix">
              <div class="he_ftybtlk">

                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "4"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "son",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" target="_self"><?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></a>
                <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist);  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "71"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                <a href="<?php echo $field['typeurl']; ?>" target="_self"><?php echo $field['typename']; ?></a>
                <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
              </div>


            </div>
          </div>
        </div>
        <div class="he_ftshre fl">
          <div class="he_ftybti">
            <p>Follow us</p>
          </div>

          <div class="he_ftbsul clearfix">
            <div class="he_ftbsli fl">
              <div class="he_ftbslt">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/1.ins.svg" alt="1.ins.svg" class="he_img">


                <img src=" <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/1.ins-180.svg" alt="1.ins-180.svg"
                  class="he_img1">


                <a target="_blank" title="" href="https://www.instagram.com/afore_pv_inverter/"></a>
              </div>
            </div>
            <div class="he_ftbsli fl">
              <div class="he_ftbslt">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/2.Facebook-888.svg" alt="2.Facebook-888.svg"
                  class="he_img">


                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/2.Facebook.svg" alt="2.Facebook.svg"
                  class="he_img1">


                <a target="_blank" title="" href="https://www.facebook.com/AforeNewEnergyTechnology/"></a>
              </div>
            </div>
            <div class="he_ftbsli fl">
              <div class="he_ftbslt">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/3.twiter-248.svg" alt="3.twiter-248.svg"
                  class="he_img">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/3.twiter.svg" alt="3.twiter.svg"
                  class="he_img1">
                <a target="_blank" title="" href="https://twitter.com/Afore_Inverter"></a>
              </div>
            </div>
            <div class="he_ftbsli fl">
              <div class="he_ftbslt">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/4.lingying-857.svg" alt="4.lingying-857.svg"
                  class="he_img">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/4.lingying.svg" alt="4.lingying.svg"
                  class="he_img1">
                <a target="_blank" title=""
                  href="https://www.linkedin.com/company/afore-new-energy-technology-shanghai-co-ltd-/"></a>
              </div>
            </div>
            <div class="he_ftbsli fl">
              <div class="he_ftbslt">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/youtobe401x-759.svg" alt="youtobe@1x-759.svg"
                  class="he_img">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/youtobe401xyuanse-825.svg"
                  alt="youtobe@1xyuanse-825.svg" class="he_img1">
                <a target="_blank" title="" href="https://www.youtube.com/channel/UCfPo0exLtvJBUU7I9jmdM_A
"></a>
              </div>
            </div>
          </div>


        </div>

      </div>
    </div>
    <div class="he_ftybhj clearfix">
      <div class="he_ftybhjle fl">
        <p>Copyright © 2008-2023 pv inverter manufacturers and Supplier in china All Reserved By Afore New energy
        </p>
      </div>
      <div class="he_ftybhjri fr">
        <p>
          <a href="#">Privacy policy</a>
        </p>
      </div>
    </div>
  </div>
</footer>
<div class="he_ladjg">
  <div class="he_conten2">
    <div class="he_cookn clearfix">
      <div class="he_cooknri fl">
        <div class="he_cooknlti">
          <p></p>
        </div>
        <div class="he_cooknlp">
          <p></p>
        </div>
        <div class="he_cooknlyt">
          <a href="" target=""></a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- 弹窗公共，每个页面都有 -->



<!-- cookies -->
<div class="he_cook" id="agreement">
  <div class="he_conten2">
    <div class="he_cookc">
      <div class="he_cooknlti">
        <p></p>
      </div>
      <div class="he_cooknlp">
        <p>Afore attaches great importance to your privacy. When you visit our website, please agree to use all cookies.
          If you want to know more about how we use cookies, please visit our<a href="#" target="_blank">Privacy
            policy</a>.</p>
      </div>
      <div class="he_cooknlyt">
        <a href="#" target="_blank">More information</a>
      </div>
      <div class="he_cookmo">
        <div class="he_cooknb he_cooknb1">
          <div class="he_syp2mob">
            <a href="javascript:;" class="getCookie">I Agree</a>
          </div>
        </div>
        <div class="he_cooknb he_cooknb2">
          <div class="he_syp2mob">
            <a href="javascript:;">Disagree</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- public start -->

<?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/sticky.min.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery-3.6.0.min.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/slick.min.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/jquery.mCustomScrollbar.concat.min.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/appear.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/buttonLite.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/bshareC0.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/anime.min.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/wow.min.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/common.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/Yongsy.js","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/js/layer.js","","","",""); echo $__VALUE__; ?>

<!-- public end -->
<script>
  new WOW().init();
</script>
<script>
  let agreement = sessionStorage.getItem("agreement");
  if (agreement == 1) {
    $("#agreement").hide();
  }
  // 新闻轮播
  $('.he_synewsg').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    waitForAnimate: false,
    // dots: true,
    infinite: false,
    fade: true
  });

  if ($(window).width() > 1024 && $('.he_syp1txgk video').length > 0) {
    $('.he_syp1txgk video').trigger('play');
  }

  $('.he_cookmo').click(function () {
    sessionStorage.setItem("agreement", 1);
    //   let agreement = sessionStorage.getItem("agreement");
    //   console.log(agreement,"agreement");
    $('.he_cook').stop().fadeOut();
  })
  function getData() {
    var that = $(this);
    $.ajax({
      url: "#",
      data: '',
      dataType: "json",
      type: "POST",
      success: function (data) {
        if (data.status == 'success') {
          if (data.info.msg == "操作成功") {
            var one = data.info.data.co2;
            var two = data.info.data.totalInverter;
            var three = data.info.data.totalPlant;
            var four = data.info.data.totalPowerGeneration;

            three = (three / 1000).toFixed(0);
            two = (two / 1000).toFixed(0);
            four = (four / 1000000).toFixed(0);
            one = (one / 1000).toFixed(0);
            $('.he_gunt1').text(three);
            $('.he_gunt2').text(two);
            $('.he_gunt3').text(four);
            $('.he_gunt4').text(one);
          }
        } else {
          console.log(data)
        }
      },
      error: function (data) {
      }
    });
  }
  $(function () {

    getData();
    // banner相关
    bannerInit();
  });
  // banner相关
  function bannerInit() {
    // 轮播初始化
    $('.he_banul').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      autoplaySpeed: 4000,
      speed: 400,
      pauseOnDotsHover: true,
      // fade: true,
      // prevArrow: ".he_banqgle",
      // nextArrow: ".he_banqgri",
      responsive: [{
        breakpoint: 1024,
        settings: {
          autoplay: true,
        }
      }]
    });
    // 视频播完轮播
    banVideo(".he_banul");
    function banVideo(selector) {
      var $obj = $(selector);
      if ($(window).width() > 1200 && $obj.find("video").length > 0) {
        init();

        function init() {
          firstVideo();
          videoEnd();
          afterChange();
        }
        // 检验第一屏是否有视频
        function firstVideo() {
          var $firSlide = $obj.find(".slick-slide[data-slick-index=0]");
          var $video = $firSlide.find("video");
          // autoplay自动播放
          if ($video.length > 0) {
            $obj.slick('slickPause');
            // 如果轮播只有一个循环播放
            if ($obj.get(0).slick.slideCount < 2) {
              $video.attr("loop", "loop");
            }
            if ($video.get(0).paused) {
              setTimeout(function () {
                $video.get(0).play();
              }, 100)
            }
          } else {
            $obj.slick('slickPlay');
          }
        }
        // 切换到下一张是否有视频
        function afterChange() {
          $obj.on('afterChange', function (event, slick, index) {
            // 视频暂停并回到第一帧
            $obj.find("video").each(function () {
              var video = $(this).get(0);
              video.pause();
              video.currentTime = 0;
            });
            // 有视频则暂停轮播
            var $nowSlide = $(slick.$slides[index]);
            var $video = $nowSlide.find("video");
            if ($video.length > 0) {
              $obj.slick('slickPause');
              $video.get(0).play();
            } else {
              $obj.slick('slickPlay');
            }

          });
        }
        // 视频播完切换到下一张
        function videoEnd() {
          $obj.find("video").each(function () {
            var video = $(this).get(0);
            video.onended = function () {
              $obj.slick("next");
              $obj.slick('slickPlay');
            };
          });
        };
      } else {
        $obj.slick('play');
      }
    };
  }

  // 数字滚动
  $(".he_gunt").appear(function () {
    var count = $(this).text();
    var counts = parseInt(count.replace(/,/, ""));
    $(this).countTo({
      form: 1,
      to: counts,
      speed: 1500,
      refreshInterval: 90,
      onComplete: function () {
        $(this).text(count);
      }
    });
  });

  if ($(window).width() > 1024) {
    $(".he_syp3n").appear(function () {
      $(this).addClass('width')
    })
  }

  // part1
  $(".he_syp1txg").slick({
    slidesToShow: 1,
    // vertical: true,
    fade: true,
    autoplaySpeed: 16000,
    autoplay: true,
    cssEase: "ease-in",
    pauseOnHover: false,
    swipe: false,
    draggable: false,
    responsive: [{
      breakpoint: 769,
      settings: {
        vertical: false,
      }
    }]
  })

  $(".he_syp1eli").click(function () {
    var index = $(this).index();
    $(this).addClass("act").siblings().removeClass("act");
    $(".he_syp1txg").slick("slickGoTo", index)
  })
  $('.he_syp1txg').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    var index = nextSlide;
    $(".he_syp1eli").eq(index).addClass("act").siblings().removeClass("act");
  });

  // 新闻图片hover切换
  $('.he_syp2rli').hover(function () {
    var index = $(this).index();
    $(".he_synewsg").slick("slickGoTo", index)
    $(this).addClass("act").siblings().removeClass("act");
  })
  $('.he_syp3n').hover(function () {
    $(this).addClass('he_phide1');
    $(this).removeClass('he_phide');

  }, function () {
    $(this).addClass('he_phide');
    $(this).removeClass('he_phide1');

  })

  $(".he_syp3n").mouseleave(function () {
    setTimeout(function () {
      $(".he_syp3n").removeClass('he_phide');
    }, 300)
  });
</script>



<script>
  console.log('%c', 'color:green')
</script>
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
