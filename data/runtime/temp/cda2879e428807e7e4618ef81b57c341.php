<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:35:"./template/mobile/lists_product.htm";i:1694417357;s:60:"/www/wwwroot/testweb.aforenergy.com/template/mobile/head.htm";i:1702175699;s:62:"/www/wwwroot/testweb.aforenergy.com/template/mobile/bottom.htm";i:1694417357;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="format-detection" content="telephone=no, email=no" />
        <meta name="renderer" content="webkit" />
        <title><?php echo $eyou['field']['seo_title']; ?>-<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?></title>
        <meta name="description" content="<?php echo $eyou['field']['seo_description']; ?>" />
        <meta name="keywords" content="<?php echo $eyou['field']['seo_keywords']; ?>" />

        <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/iframe.css","","","",""); echo $__VALUE__; ?>
        <!-- public start -->

        <?php  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/bootstrap.min-v3.3.5.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/slick.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/slick-theme.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/animate.min.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/base-v1.4.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/jquery.mCustomScrollbar.min.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/animate.min.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/iconfont.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/main.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/media.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/he_base.css","","","",""); echo $__VALUE__;  $tagStatic = new \think\template\taglib\eyou\TagStatic; $__VALUE__ = $tagStatic->getStatic("skin/css/swiper.min.css","","","",""); echo $__VALUE__; ?>
    </head>
    <body>


        <!-- 头部文件 -->
        <!-- 语言 -->
    <div class="he_index">
      <!-- pc顶部导航 -->
      <header class="he_pc_hd">
        <div class="he_langgz">
          <div class="he_langrf">
            <div class="s_cont1360">
              <div class="he_langgzn">
                <div class="he_langgul clearfix">
                  <div class="he_langgli fl">
                    <div class="he_lanjx">
                      <div class="he_lanjxti he_ftybti ">
                        <p>APAC</p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('')">English (Global)</a>
                        </p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">English (AU&NZ)</a>
                        </p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">日本語</a>
                        </p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">中文</a>
                        </p>
                      </div>


                    </div>
                  </div>
                  <div class="he_langgli fl">
                    <div class="he_lanjx">
                      <div class="he_lanjxti he_ftybti ">
                        <p>AMER</p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('')">English</a>
                        </p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">Português (BR)</a>
                        </p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('')">Español (LATAM)</a>
                        </p>
                      </div>


                    </div>
                  </div>
                  <div class="he_langgli fl">
                    <div class="he_lanjx">
                      <div class="he_lanjxti he_ftybti ">
                        <p>EMEA</p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">English</a>
                        </p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">Español (ES)</a>
                        </p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">Deutsch</a>
                        </p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">Français</a>
                        </p>
                      </div>
                       <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">Dutch</a>
                        </p>
                      </div>
                      <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">Polish</a>
                        </p>
                      </div>
                       <div class="he_lanjd">
                        <p>
                          <a onclick="aWeb('#')">Italiano</a>
                        </p>
                      </div>



                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <script type="text/javascript">
          function aWeb(str){
                  $.ajax({
                      url:'/Cn/Verifyip/setCk.html',
                      data:<?php echo url("","",true,false);?>,
                      type:'POST',
                      dataType:'json',
                      success:function(res){
                          location=str;
                      }
                  })
              }
        </script> -->
        <div class="he_pcbx">
          <div class="he_pcbxn clearfix">
            <div class="he_pcbxle fl">
              <a href="/">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/logo20221208.svg" class="he_img" alt="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_name"); echo $__VALUE__; ?>">
              </a>
            </div>
            <div class="he_pcbxri fr clearfix">
              <div class="he_pcnav clearfix fl">

                <div class="he_pcnli fl ">
                  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "1"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="he_pcnava"><?php echo $field['typename']; ?></a>
                  <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                  <!-- 下拉 -->
                  <div class="he_gdown he_gdown1">
                    <div class="he_conten3">
                      <div class="he_xlatr clearfix">
                        <div class="he_xiala">
                          <div class="he_xialale">
                            <div class="he_xialaul clearfix">
                             <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "8"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                              <div class="he_xialali fl">
                                <div class="he_xialach ">
                                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="clearfix">
                                    <div class="he_xialacle fl">
                                      <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/1-187.png">
                                    </div>
                                    <div class="he_xialacri fl">
                                      <p><?php echo $field['typename']; ?></p><!-- 公司简介 -->
                                    </div>
                                  </a>
                                </div>
                              </div>
                               <?php endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "2"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>

                              <div class="he_xialali fl">
                                <div class="he_xialach ">
                                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="clearfix">
                                    <div class="he_xialacle fl">
                                      <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/3-187.png">
                                    </div>
                                    <div class="he_xialacri fl">
                                      <p><?php echo $field['typename']; ?></p><!-- 课堂 -->
                                    </div>
                                  </a>
                                </div>
                              </div>
                                <?php endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "68"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                              <div class="he_xialali fl">
                                <div class="he_xialach ">
                                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="clearfix">
                                    <div class="he_xialacle fl">
                                      <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/2.png" >
                                    </div>
                                    <div class="he_xialacri fl">
                                      <p><?php echo $field['typename']; ?></p><!-- 荣誉 -->
                                    </div>
                                  </a>
                                </div>
                              </div>
                             <?php endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "9"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                              <div class="he_xialali fl">
                                <div class="he_xialach ">
                                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="clearfix">
                                    <div class="he_xialacle fl">
                                      <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/1-187.png" >
                                    </div>
                                    <div class="he_xialacri fl">
                                      <p><?php echo $field['typename']; ?></p><!-- 公司简介 -->
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="he_pcnli fl ">
                 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "3"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="he_pcnava"><?php echo $field['typename']; ?></a>
                 <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>
                  <!-- 产品下拉 -->
                  <div class="he_gdown he_gdown2">
                    <div class="he_conten3">
                      <div class="he_xialtw clearfix">
                        <div class="he_xialtwle fl">
                          <div class="he_laswkf">
                           <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "20"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                            <div class="he_laswkfli clearfix act">
                              <div class="he_laswkfle fl">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/fw.svg" alt="fw.svg">
                              </div>
                              <div class="he_laswkfri fl">
                                <a href="<?php echo $field['typeurl']; ?>" target="_self">
                                  <p><?php echo $field['typename']; ?></p>
                                </a>
                              </div>
                            </div>
                            <?php endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "21"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                             <div class="he_laswkfli clearfix ">
                              <div class="he_laswkfle fl">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/wuding.svg" alt="wuding.svg">
                              </div>
                              <div class="he_laswkfri fl">
                                <a href="<?php echo $field['typeurl']; ?>" target="_self">
                                  <p><?php echo $field['typename']; ?></p>
                                </a>
                              </div>
                            </div>
                           <?php endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "22"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                            <div class="he_laswkfli clearfix ">
                              <div class="he_laswkfle fl">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/wuding.svg" alt="wuding.svg">
                              </div>
                              <div class="he_laswkfri fl">
                                <a href="<?php echo $field['typeurl']; ?>" target="_self">
                                  <p><?php echo $field['typename']; ?></p>
                                </a>
                              </div>
                            </div>
                             <?php endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "69"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>

                            <div class="he_laswkfli clearfix ">
                              <div class="he_laswkfle fl">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/Frame49.svg" alt="dianli.svg">
                              </div>
                              <div class="he_laswkfri fl">
                                <a href="<?php echo $field['typeurl']; ?>" target="_self">
                                  <p><?php echo $field['typename']; ?></p>
                                </a>
                              </div>
                            </div>
                            <?php endif; else: echo htmlspecialchars_decode("");endif; $field = [];  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "70"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>

                            <div class="he_laswkfli clearfix ">
                              <div class="he_laswkfle fl">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/Frame49.svg" alt="dianli.svg">
                              </div>
                              <div class="he_laswkfri fl">
                                <a href="<?php echo $field['typeurl']; ?>" target="_self">
                                  <p><?php echo $field['typename']; ?></p>
                                </a>
                              </div>
                            </div>
                            <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>



                           <!--  <div class="he_laswkfli clearfix ">
                              <div class="he_laswkfle fl">
                                <img src="<?php echo $GLOBALS['skin']; ?>img/dian.svg" alt="dian.svg">
                              </div>
                              <div class="he_laswkfri fl">
                                <a href="/products?tp5" target="_self">
                                  <p>电池</p>
                                </a>
                              </div>
                            </div>
                            <div class="he_laswkfli clearfix ">
                              <div class="he_laswkfle fl">
                                <img src="<?php echo $GLOBALS['skin']; ?>img/Frame49.svg" alt="Frame49.svg">
                              </div>
                              <div class="he_laswkfri fl">
                                <a href="/products?tp6" target="_self">
                                  <p>智慧能源配套产品</p>
                                </a>
                              </div>
                            </div> -->

                          </div>
                        </div>
                        <div class="he_xialtwri fl">  <!-- 逆变器系统 -->
                          <div class="he_xialwxul">
                            <div class="he_xialtrul clearfix">

                              <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "20"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '6',
  'typeid' => '20',
  'orderby' => 'new',
  'ordermode' => 'asc',
  'flag' => 'c',
  'r' => 'eyou:artlist',
  'row' => '6',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","asc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>


                              <div class="he_xialtrli fl ">
                                <a href="<?php echo $field['arcurl']; ?>" target="_self" class="clearfix">
                                  <div class="he_xialtrig">
                                    <img src="<?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("dhcptu", $aid); echo $__VALUE__; unset($aid); ?>" class="mCS_img_loaded">
                                  </div>
                                  <div class="he_xialtrxf">
                                    <p><?php echo $field['title']; ?></p>
                                  </div>
                                </a>
                              </div>

                              <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                           </div>
                          </div>

                          <div class="he_xialwxul"><!-- 储能系统 -->
                            <div class="he_xialtrul clearfix">
                              <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "21"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '6',
  'typeid' => '21',
  'orderby' => 'new',
  'ordermode' => 'asc',
  'flag' => 'c',
  'r' => 'eyou:artlist',
  'row' => '6',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","asc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                             <div class="he_xialtrli fl ">
                                <a href="<?php echo $field['arcurl']; ?>" target="_self" class="clearfix">
                                  <div class="he_xialtrig">
                                    <img src="<?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("dhcptu", $aid); echo $__VALUE__; unset($aid); ?>" class="mCS_img_loaded">
                                  </div>
                                  <div class="he_xialtrxf">
                                    <p><?php echo $field['title']; ?></p>
                                  </div>
                                </a>
                              </div>
                               <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                             </div>
                          </div>

                          <div class="he_xialwxul"> <!-- 监控系统 -->
                            <div class="he_xialtrul clearfix">
                             <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "22"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '6',
  'typeid' => '22',
  'orderby' => 'new',
  'ordermode' => 'asc',
  'flag' => 'c',
  'r' => 'eyou:artlist',
  'row' => '6',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","asc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>


                              <div class="he_xialtrli fl ">
                                <a href="<?php echo $field['arcurl']; ?>" target="_self" class="clearfix">
                                  <div class="he_xialtrig">
                                    <img src="<?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("dhcptu", $aid); echo $__VALUE__; unset($aid); ?>"  class="mCS_img_loaded">
                                  </div>
                                  <div class="he_xialtrxf">
                                    <p><?php echo $field['title']; ?></p>
                                  </div>
                                </a>
                              </div>
                              <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                            </div>
                          </div>





                          <div class="he_xialwxul">  <!-- 配套产品-->
                            <div class="he_xialtrul clearfix">

                                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "69"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '6',
  'typeid' => '69',
  'orderby' => 'new',
  'ordermode' => 'asc',
  'flag' => 'c',
  'r' => 'eyou:artlist',
  'row' => '6',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","asc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>


                              <div class="he_xialtrli fl ">
                                <a href="<?php echo $field['arcurl']; ?>" target="_self" class="clearfix">
                                  <div class="he_xialtrig">
                                    <img src="<?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("dhcptu", $aid); echo $__VALUE__; unset($aid); ?>"  class="mCS_img_loaded">
                                  </div>
                                  <div class="he_xialtrxf">
                                    <p><?php echo $field['title']; ?></p>
                                  </div>
                                </a>
                              </div>
                             <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                            </div>
                          </div>

                          <div class="he_xialwxul">  <!-- 配套产品-->
                            <div class="he_xialtrul clearfix">

                                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "70"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 6; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "c",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '6',
  'typeid' => '70',
  'orderby' => 'new',
  'ordermode' => 'asc',
  'flag' => 'c',
  'r' => 'eyou:artlist',
  'row' => '6',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "new", "","asc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                              <div class="he_xialtrli fl ">
                                <a href="<?php echo $field['arcurl']; ?>" target="_self" class="clearfix">
                                  <div class="he_xialtrig">
                                    <img src="<?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("dhcptu", $aid); echo $__VALUE__; unset($aid); ?>" class="mCS_img_loaded">
                                  </div>
                                  <div class="he_xialtrxf">
                                    <p><?php echo $field['title']; ?></p>
                                  </div>
                                </a>
                              </div>
                              <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                            </div>
                          </div>





                        </div>
                      </div>
                    </div>
                  </div>
                </div>





                <div class="he_pcnli fl ">
                   <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "4"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="he_pcnava">Support & Service</a>
                  <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                  <!-- 下拉 -->
                  <div class="he_gdown he_gdown5">
                    <div class="he_conten3">
                      <div class="he_xlatr clearfix">
                        <div class="he_xiala clearfix fl">
                          <div class="he_xialale">
                            <div class="he_xialaul clearfix">


                                <div class="he_xialali fl">

                               <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "72"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>

                                <div class="he_xialach">
                                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="clearfix">
                                    <!-- <div class="he_xialacle fl">
                                      <img src="<?php echo $GLOBALS['skin']; ?>img/dwic09.png" alt="dwic09.png">
                                    </div> -->
                                    <div class="he_xialacri fl">
                                      <p>Download</p>
                                    </div>
                                  </a>
                                </div>
                                <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>


                              </div>

                              <div class="he_xialali fl">

                               <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "73"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>

                                <div class="he_xialach">
                                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="clearfix">
                                    <!-- <div class="he_xialacle fl">
                                      <img src="<?php echo $GLOBALS['skin']; ?>img/dwic10.png" alt="dwic10.png">
                                    </div> -->
                                    <div class="he_xialacri fl">
                                      <p>Warranty</p>
                                    </div>
                                  </a>
                                </div>
                               <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>


                              </div>
                              <div class="he_xialali fl">
                                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "74"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>
                                <div class="he_xialach">
                                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="clearfix">
                                   <!--  <div class="he_xialacle fl">
                                      <img src="<?php echo $GLOBALS['skin']; ?>img/dwic10.png" alt="dwic10.png">
                                    </div> -->
                                    <div class="he_xialacri fl">
                                      <p>Online Support</p>
                                    </div>
                                  </a>
                                </div>
                                <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>


                              </div>






                              <div class="he_xialali fl">


                                <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "76"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>


                                <div class="he_xialach">
                                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="clearfix">
                                    <!-- <div class="he_xialacle fl">
                                      <img src="<?php echo $GLOBALS['skin']; ?>img/dwic11.png" alt="dwic11.png">
                                    </div> -->
                                    <div class="he_xialacri fl">
                                      <p>FAQs</p>
                                    </div>
                                  </a>
                                </div>

                                <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                              </div>

                               <div class="he_xialali fl">





                                <div class="he_xialach">

                                    <div class="he_xialacri fl">
                                      <p style="">
                                        <a href="https://pro.aforenergy.com/login
" target="_blank"  style="color: #000000;line-height: 1.5;" >   Monitoring For Business </a>
                                      </p>


                                      <p style="padding-top: 30px;"> <a href="https://home.aforenergy.com/login" target="_blank" style="color: #000000;line-height: 1.5;">    Monitoring For End User </a>

                                      </p>


                                    </div>

                                  </a>
                                </div>



                              </div>





                            </div>
                          </div>
                        </div>
                        <div class="he_xiacode fl">
                          <div class="he_xcodig">
                            <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/ewm.jpg" alt="codesh.jpg">
                          </div>
                          <div class="he_xcodete">
                            <p>Service Centre</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="he_pcnli fl ">
                  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "77"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>

                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="he_pcnava"><?php echo $field['typename']; ?></a>
                  <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                 <!--  案例 -->
                  <!-- 下拉 -->
                <!--   <div class="he_gdown he_gdown3">
                    <div class="he_conten3">
                      <div class="he_xialtw clearfix">
                        <div class="he_xialtwle fl">
                          {loop table="classtype" tid="3" body="1" limit="1" as="v"}

                          <div class="he_xialtwti">
                            <a href="<?php echo $v['url']; ?>" target="_self" class="clearfix">
                              <div class="he_xialtwtile fl">
                                <p>Solutions</p>
                              </div>
                              <div class="he_xialtwtiri fl">
                                <img src="<?php echo $GLOBALS['skin']; ?>img/dwic05.svg" alt="">

                              </div>
                            </a>
                          </div>
                          {/loop}

                          <div class="he_xialtwul">

                            {loop table="classtype" tid="24" body="1" limit="1" as="v"}

                            <div class="he_xialtwli ">
                              <a href="<?php echo $v['url']; ?>" target="_self" class="clearfix">
                                <div class="he_xialtwic fl">
                                  <img src="<?php echo $GLOBALS['skin']; ?>img/dwic05.png" alt="dwic05.png">
                                </div>
                                <div class="he_xialtwte fl">
                                  <div class="he_xialtwtp1">
                                    <p><?php echo $v['classname']; ?></p>
                                  </div>
                                </div>
                              </a>
                            </div>
                            {/loop}

                            {loop table="classtype" tid="25" body="1" limit="1" as="v"}

                            <div class="he_xialtwli ">
                              <a href="<?php echo $v['url']; ?>" target="_self" class="clearfix">
                                <div class="he_xialtwic fl">
                                  <img src="<?php echo $GLOBALS['skin']; ?>img/gongshangye-177.png" alt="gongshangye-177.png">
                                </div>
                                <div class="he_xialtwte fl">
                                  <div class="he_xialtwtp1">
                                    <p><?php echo $v['classname']; ?></p>
                                  </div>
                                </div>
                              </a>
                            </div>
                            {/loop}

                            {loop table="classtype" tid="26" body="1" limit="1" as="v"}

                            <div class="he_xialtwli ">
                              <a href="<?php echo $v['url']; ?>" target="_self" class="clearfix">
                                <div class="he_xialtwic fl">
                                  <img src="<?php echo $GLOBALS['skin']; ?>img/dimian-117.png" alt="dimian-117.png">
                                </div>
                                <div class="he_xialtwte fl">
                                  <div class="he_xialtwtp1">
                                    <p><?php echo $v['classname']; ?></p>
                                  </div>
                                </div>
                              </a>
                            </div>
                            {/loop}



                          </div>
                        </div>
                        <div class="he_xialtwri fl">
                          <div class="he_xialtwti">
                            {loop table="classtype" tid="65" body="1" limit="1" as="v"}
                            <a href="<?php echo $v['url']; ?>" target="_self" class="clearfix">
                              <div class="he_xialtwtile fl">
                                <p>Application cases</p>
                              </div>
                              <div class="he_xialtwtiri fl">
                                <img src="<?php echo $GLOBALS['skin']; ?>img/dwic05.svg" alt="" class="">
                              </div>
                            </a>
                          </div>
                          {/loop}

                          <div class="he_xialtrul clearfix">
                            {loop table="article" tid="64" trait="2"  image="1"   limit="3" as="v"}

                            <div class="he_xialtrli fl ">
                              <a href="<?php echo $v['url']; ?> " target="_self" class="clearfix">
                                <div class="he_xialtrig">
                                  <img src="<?php echo $v['litpic']; ?> " class="mCS_img_loaded">
                                </div>
                                <div class="he_xialtrxf">
                                  <p><?php echo $v['title']; ?></p>
                                </div>
                              </a>
                            </div>
                            {/loop}






                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->


                </div>


                <div class="he_pcnli fl ">
                  <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "71"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>

                  <a href="<?php echo $field['typeurl']; ?>" target="_self" class="he_pcnava"><?php echo $field['typename']; ?></a>
                 <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                 <!--  案例 -->
                  <!-- 下拉 -->
                <!--   <div class="he_gdown he_gdown3">
                    <div class="he_conten3">
                      <div class="he_xialtw clearfix">
                        <div class="he_xialtwle fl">
                          {loop table="classtype" tid="3" body="1" limit="1" as="v"}

                          <div class="he_xialtwti">
                            <a href="<?php echo $v['url']; ?>" target="_self" class="clearfix">
                              <div class="he_xialtwtile fl">
                                <p>Solutions</p>
                              </div>
                              <div class="he_xialtwtiri fl">
                                <img src="<?php echo $GLOBALS['skin']; ?>img/dwic05.svg" alt="">

                              </div>
                            </a>
                          </div>
                          {/loop}

                          <div class="he_xialtwul">

                            {loop table="classtype" tid="24" body="1" limit="1" as="v"}

                            <div class="he_xialtwli ">
                              <a href="<?php echo $v['url']; ?>" target="_self" class="clearfix">
                                <div class="he_xialtwic fl">
                                  <img src="<?php echo $GLOBALS['skin']; ?>img/dwic05.png" alt="dwic05.png">
                                </div>
                                <div class="he_xialtwte fl">
                                  <div class="he_xialtwtp1">
                                    <p><?php echo $v['classname']; ?></p>
                                  </div>
                                </div>
                              </a>
                            </div>
                            {/loop}

                            {loop table="classtype" tid="25" body="1" limit="1" as="v"}

                            <div class="he_xialtwli ">
                              <a href="<?php echo $v['url']; ?>" target="_self" class="clearfix">
                                <div class="he_xialtwic fl">
                                  <img src="<?php echo $GLOBALS['skin']; ?>img/gongshangye-177.png" alt="gongshangye-177.png">
                                </div>
                                <div class="he_xialtwte fl">
                                  <div class="he_xialtwtp1">
                                    <p><?php echo $v['classname']; ?></p>
                                  </div>
                                </div>
                              </a>
                            </div>
                            {/loop}

                            {loop table="classtype" tid="26" body="1" limit="1" as="v"}

                            <div class="he_xialtwli ">
                              <a href="<?php echo $v['url']; ?>" target="_self" class="clearfix">
                                <div class="he_xialtwic fl">
                                  <img src="<?php echo $GLOBALS['skin']; ?>img/dimian-117.png" alt="dimian-117.png">
                                </div>
                                <div class="he_xialtwte fl">
                                  <div class="he_xialtwtp1">
                                    <p><?php echo $v['classname']; ?></p>
                                  </div>
                                </div>
                              </a>
                            </div>
                            {/loop}



                          </div>
                        </div>
                        <div class="he_xialtwri fl">
                          <div class="he_xialtwti">
                            {loop table="classtype" tid="65" body="1" limit="1" as="v"}
                            <a href="<?php echo $v['url']; ?>" target="_self" class="clearfix">
                              <div class="he_xialtwtile fl">
                                <p>Application cases</p>
                              </div>
                              <div class="he_xialtwtiri fl">
                                <img src="<?php echo $GLOBALS['skin']; ?>img/dwic05.svg" alt="" class="">
                              </div>
                            </a>
                          </div>
                          {/loop}

                          <div class="he_xialtrul clearfix">
                            {loop table="article" tid="64" trait="2"  image="1"   limit="3" as="v"}

                            <div class="he_xialtrli fl ">
                              <a href="<?php echo $v['url']; ?> " target="_self" class="clearfix">
                                <div class="he_xialtrig">
                                  <img src="<?php echo $v['litpic']; ?> " class="mCS_img_loaded">
                                </div>
                                <div class="he_xialtrxf">
                                  <p><?php echo $v['title']; ?></p>
                                </div>
                              </a>
                            </div>
                            {/loop}






                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->


                </div>






              </div>
              <div class="he_pcser fl">
                <i class="iconfont icon-search"></i>
                <div class="mc_search_xl">
                  <div class="mc_scm_container mc_pos_center">
                    <form class="mc_scm_form" onsubmit="return false">
                      <div class="mc_msc_box">
                        <input type="text" placeholder="Please enter..." class="mc_msc_input" autocomplete="off" id="keywords">
                        <div class="mc_msc_submit" onclick="search()">
                          <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/heaser1.png" alt="">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="he_lang fl">
                <div class="he_langp clearfix">
                  <div class="he_langple fl">
                    <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/lange.svg" alt="">
                  </div>
                  <div class="he_langpri fl">
                    <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/lanx.png" alt="">
                  </div>
                </div>
                <div class="he_langla">
                  <a href=""></a>
                </div>
              </div>

              <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "68"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagType = new \think\template\taglib\eyou\TagType; $_result = $tagType->getType($typeid, "self", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $field = $__LIST__;?>

              <div class="he_phone fl">
                <a href="<?php echo $field['typeurl']; ?>" target="_self" class="clearfix">
                  <div class="he_phonle fl">
                    <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/heato.png" alt="">
                  </div>
                  <div class="he_phonri fl">
                    <p>Contact</p>
                  </div>
                </a>
              </div>
              <?php endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

            </div>
          </div>
        </div>
      </header>
      <!-- ph导航 -->
      <div class="ys_navph2_header">
        <!-- 导航条 -->
        <nav class="ys_navph2_navbar clearfix">
          <!-- 搜索按钮 -->
          <div class="ys_navph2_search fl">
            <div class="ys_navph2_search_btn">
              <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/search2.png" alt="">
            </div>
            <!-- 搜索弹窗 -->
            <div class="ys_navph2_modal">
              <div class="ys_navph2_modalmbox">
                <div class="ys_navph2_modalm">
                  <div class="ys_navph2_msc_box clearfix">
                    <div class="ys_navph2_msc_boxl fl">
                      <input type="text" placeholder="Please enter keywords!" class="ys_navph2_msc_input" id="phkeywords">
                    </div>
                    <div class="ys_navph2_msc_boxr fr">
                      <button onclick="phsearch()">
                        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/search2.png" alt="">
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ys_navph2_navfl fl">
            <!-- logo -->
            <div class="ys_navph2_logo">
              <a href="/" class="ys_navph2_logo_btn">
                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/logo20221208.svg" alt="logo1.svg">
              </a>
            </div>
          </div>
          <div class="ys_navph2_navfr fr clearfix">
            <!-- 菜单 -->
            <div class="ys_navph2_menu fl">
              <div class="ys_navph2_menu_btn">
                <span class="ys_navph2_menu_line"></span>
              </div>
            </div>
          </div>
        </nav>
        <!-- 下拉 -->
        <div class="ys_navph2_list">
          <ul class="ys_navph2_subnav">
            <!-- 一级 -->
            <li class="ys_navph2_subnav_li">
              <div class="ys_navph2_subnav_lisbox">
                <a href="/" target="_self" class="ys_navph2_subnav_a yxnav_active1">Home</a>
              </div>
              <!-- 二级 -->
              <ul class="ys_navph2_thirnav">
              </ul>
            </li>


            <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 60; endif; $tagChannel = new \think\template\taglib\eyou\TagChannel; $_result = $tagChannel->getChannel($typeid, "top", "", ""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $field["typename"] = text_msubstr($field["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field;$i= intval($key) + 1;$mod = ($i % 2 ); ?>
            <li class="ys_navph2_subnav_li">
              <div class="ys_navph2_subnav_lisbox">
                <a href="<?php echo $field['typeurl']; ?>" target="_self" class="ys_navph2_subnav_a "><?php echo $field['typename']; ?></a>
                <div class="ys_navph2_nav_icon"></div>
              </div>
              <!-- 二级 -->
              <ul class="ys_navph2_thirnav">
                <?php if(!(empty($field['children']) || (($field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator ) && $field['children']->isEmpty()))):  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = ""; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 100; endif;if(is_array($field['children']) || $field['children'] instanceof \think\Collection || $field['children'] instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($field['children']) ? array_slice($field['children'],0,100, true) : $field['children']->slice(0,100, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field2): $field2["typename"] = text_msubstr($field2["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $field2;$i= intval($key) + 1;$mod = ($i % 2 ); ?>


                <li class="ys_navph2_thirnav_li">
                  <div class="ys_navph2_thirnav_lisbox">
                    <a href="<?php echo $field2['typeurl']; ?>" target="_self" class="ys_navph2_thirnav_a "><?php echo $field2['typename']; ?></a>
                  </div>
                  <!-- 四级 -->
                  <ul class="ys_navph2_fournav">
                  </ul>
                </li>
                 <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field2 = []; endif; ?>
               </ul>
            </li>
          <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>



          </ul>
          <!-- 语言选择 -->
          <div class="ys_navph2_lang">
            <div class="ys_navph2_lang_btn">
              <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/lang.png" alt="">
              <span>Language</span>
            </div>
          </div>
          <!-- 语言选择弹窗 -->
          <div class="ys_navph2_lang_modal">
            <div class="ys_navph2_lang_back">&lt; Menu</div>
            <ul class="ys_navph2_subnav">

              <li class="ys_navph2_subnav_li">
                <div class="ys_navph2_subnav_lisbox">
                  <a href="javascript:;" class="ys_navph2_subnav_a">APAC</a>
                  <div class="ys_navph2_nav_icon"></div>
                </div>
                <ul class="ys_navph2_thirnav">
                  <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="" target="_self" class="ys_navph2_thirnav_a ">English (Global)</a>
                    </div>
                  </li>
                  <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a ">English (AU&NZ)</a>
                    </div>
                  </li>
                  <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="https://www.afore.co.jp/" target="_blank" class="ys_navph2_thirnav_a ">日本語</a>
                    </div>
                  </li>
                  <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a ">中文</a>
                    </div>
                  </li>

                </ul>
              </li>
              <li class="ys_navph2_subnav_li">
                <div class="ys_navph2_subnav_lisbox">
                  <a href="javascript:;" class="ys_navph2_subnav_a">AMER</a>
                  <div class="ys_navph2_nav_icon"></div>
                </div>
                <ul class="ys_navph2_thirnav">
                  <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_self" class="ys_navph2_thirnav_a">English</a>
                    </div>
                  </li>
                  <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a">Português (BR)</a>
                    </div>
                  </li>
                  <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a">Español (LATAM)</a>
                    </div>
                  </li>





                </ul>
              </li>
              <li class="ys_navph2_subnav_li">
                <div class="ys_navph2_subnav_lisbox">
                  <a href="javascript:;" class="ys_navph2_subnav_a">EMEA</a>
                  <div class="ys_navph2_nav_icon"></div>
                </div>
                <ul class="ys_navph2_thirnav">
                  <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a">English</a>
                    </div>
                  </li>
                  <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a">Español (ES)</a>
                    </div>
                  </li>
                    <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a">Deutsch</a>
                    </div>
                  </li>
                    <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a">Français</a>
                    </div>
                  </li>
                    <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a">Dutch</a>
                    </div>
                  </li>
                    <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a">Polish</a>
                    </div>
                  </li>
                   <li class="ys_navph2_thirnav_li">
                    <div class="ys_navph2_thirnav_lisbox">
                      <a href="#" target="_blank" class="ys_navph2_thirnav_a">Italiano</a>
                    </div>
                  </li>



                </ul>
              </li>


            </ul>
          </div>
        </div>
      </div>
        <!-- 内页banner -->



        <!-- 内页banner -->
        <div class="he_banbx he_banbx1">
            <div class="he_banli">
                <div class="he_banig">
                    <img src="<?php echo $eyou['field']['typelitpic']; ?>" class="he_banpc" alt="">
                    <img src="<?php echo $eyou['field']['typelitpic']; ?>" class="he_banph" alt="">
                </div>
                <!-- banner文字 -->
                <div class="he_bante">
                    <div class="he_conten1">
                        <div class="he_bantnv">
                            <div class="he_bantti1">
                                <h1><?php echo $eyou['field']['typename']; ?> <p></p>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 主体内容 -->
        <div class="he_main">
            <div class="he_nybx">
                <div class="he_c03bx">
                    <div class="he_c03p1">
                        <div class="s_cont1360">
                            <div class="he_c03bn clearfix" data-sticky-container="">
                                <!--面包屑-->
                                <div class="he_bordkm">
                                    <div class="s_cont1360">
                                        <div class="he_bordul clearfix">
                                            <div class="he_bordfr fl">
                                                <a href="/">
                                                    <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/bordi1.svg" alt="" class="he_int1" />
                                                    <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/bordi2.svg" alt="" class="he_int2" />
                                                </a>
                                            </div>
                                            <div class="he_bordli fl">
                                                &gt;
                                                 <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", " "); echo $__VALUE__; ?>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="he_c03bnle fl">
                                    <div class="he_c03bsul">
                                        <div class="he_c03bcli he_d1bxli" id="1">
                                            <div class="he_c03bti">
                                                <div class="he_c03btdt clearfix wow g_fadeup1">
                                                    <div class="he_c03btile fl">
                                                        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/fw.svg" alt="fw.svg">
                                                    </div>
                                                    <div class="he_c03btiri fl">
                                                        <h2 class="he_x40ft">Single Phase Inverter</h2>
                                                    </div>
                                                </div>
                                                <div class="he_c03btkx wow g_fadeup1">
                                                    <p>If you need more product information, please contact customer service</p>
                                                </div>
                                            </div>
                                            <div class="he_c03bxf">
                                                <div class="he_c03xul">
                                                   <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "20"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 9; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '9',
  'typeid' => '20',
  'r' => 'eyou:artlist',
  'row' => '9',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                                                    <div class="he_c03xli wow g_fadeup1">
                                                        <a href="<?php echo $field['arcurl']; ?>">
                                                            <div class="he_c03xlm">
                                                                <div class="he_c03xlk">
                                                                    <div class="he_c03xlti">
                                                                        <p><?php echo $field['title']; ?></p>
                                                                    </div>
                                                                    <div class="he_c03xlcp">
                                                                        <p><?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("cpxinghao", $aid); echo $__VALUE__; unset($aid); ?> </p>
                                                                    </div>
                                                                    <div class="he_c03cig">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img1">
                                                                    </div>
                                                                    <div class="he_c03ctw">
                                                                        <p>MORE</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                   <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="he_c03bcli he_d1bxli" id="2">
                                            <div class="he_c03bti">
                                                <div class="he_c03btdt clearfix wow g_fadeup1">
                                                    <div class="he_c03btile fl">
                                                        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/wuding.svg" alt="wuding.svg">
                                                    </div>
                                                    <div class="he_c03btiri fl">
                                                        <h2 class="he_x40ft">Three Phase Inverter</h2>
                                                    </div>
                                                </div>
                                                <div class="he_c03btkx wow g_fadeup1">
                                                    <p>If you need more product information, please contact customer service</p>
                                                </div>
                                            </div>
                                            <div class="he_c03bxf">
                                                <div class="he_c03xul">
                                                    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "20"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 9; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '9',
  'typeid' => '20',
  'r' => 'eyou:artlist',
  'row' => '9',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                                                    <div class="he_c03xli wow g_fadeup1">
                                                        <a href="<?php echo $field['arcurl']; ?>">
                                                            <div class="he_c03xlm">
                                                                <div class="he_c03xlk">
                                                                    <div class="he_c03xlti">
                                                                        <p><?php echo $field['title']; ?></p>
                                                                    </div>
                                                                    <div class="he_c03xlcp">
                                                                        <p><?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("cpxinghao", $aid); echo $__VALUE__; unset($aid); ?> </p>
                                                                    </div>
                                                                    <div class="he_c03cig">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img1">
                                                                    </div>
                                                                    <div class="he_c03ctw">
                                                                        <p>MORE</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                   <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                                                   

                                                </div>
                                            </div>
                                        </div>
                                        <div class="he_c03bcli he_d1bxli" id="3">
                                            <div class="he_c03bti">
                                                <div class="he_c03btdt clearfix wow g_fadeup1">
                                                    <div class="he_c03btile fl">
                                                        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dianli.svg" alt="dianli.svg">
                                                    </div>
                                                    <div class="he_c03btiri fl">
                                                        <h2 class="he_x40ft">Energy Storage Inverter</h2>
                                                    </div>
                                                </div>
                                                <div class="he_c03btkx wow g_fadeup1">
                                                    <p>If you need more product information, please contact customer service</p>
                                                </div>
                                            </div>
                                            <div class="he_c03bxf">
                                                <div class="he_c03xul">
                                                 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "20"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 9; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '9',
  'typeid' => '20',
  'r' => 'eyou:artlist',
  'row' => '9',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                                                    <div class="he_c03xli wow g_fadeup1">
                                                        <a href="<?php echo $field['arcurl']; ?>">
                                                            <div class="he_c03xlm">
                                                                <div class="he_c03xlk">
                                                                    <div class="he_c03xlti">
                                                                        <p><?php echo $field['title']; ?></p>
                                                                    </div>
                                                                    <div class="he_c03xlcp">
                                                                        <p><?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("cpxinghao", $aid); echo $__VALUE__; unset($aid); ?> </p>
                                                                    </div>
                                                                    <div class="he_c03cig">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img1">
                                                                    </div>
                                                                    <div class="he_c03ctw">
                                                                        <p>MORE</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                   <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="he_c03bcli he_d1bxli" id="4">
                                            <div class="he_c03bti">
                                                <div class="he_c03btdt clearfix wow g_fadeup1">
                                                    <div class="he_c03btile fl">
                                                        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/EnergyStorageProducts.svg" alt="EnergyStorageProducts.svg">
                                                    </div>
                                                    <div class="he_c03btiri fl">
                                                        <h2 class="he_x40ft">Monitoring System</h2>
                                                    </div>
                                                </div>
                                                <div class="he_c03btkx wow g_fadeup1">
                                                    <p>If you need more product information, please contact customer service</p>
                                                </div>
                                            </div>
                                            <div class="he_c03bxf">
                                                <div class="he_c03xul">
                                                   <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "20"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 9; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '9',
  'typeid' => '20',
  'r' => 'eyou:artlist',
  'row' => '9',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                                                    <div class="he_c03xli wow g_fadeup1">
                                                        <a href="<?php echo $field['arcurl']; ?>">
                                                            <div class="he_c03xlm">
                                                                <div class="he_c03xlk">
                                                                    <div class="he_c03xlti">
                                                                        <p><?php echo $field['title']; ?></p>
                                                                    </div>
                                                                    <div class="he_c03xlcp">
                                                                        <p><?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("cpxinghao", $aid); echo $__VALUE__; unset($aid); ?> </p>
                                                                    </div>
                                                                    <div class="he_c03cig">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img1">
                                                                    </div>
                                                                    <div class="he_c03ctw">
                                                                        <p>MORE</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                   <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                                                 

                                                </div>
                                            </div>
                                        </div>
                                        <div class="he_c03bcli he_d1bxli" id="5">
                                            <div class="he_c03bti">
                                                <div class="he_c03btdt clearfix wow g_fadeup1">
                                                    <div class="he_c03btile fl">
                                                        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/dian.svg" alt="dian.svg">
                                                    </div>
                                                    <div class="he_c03btiri fl">
                                                        <h2 class="he_x40ft">Accessories</h2>
                                                    </div>
                                                </div>
                                                <div class="he_c03btkx wow g_fadeup1">
                                                    <p>If you need more product information, please contact customer service</p>
                                                </div>
                                            </div>
                                            <div class="he_c03bxf">
                                                <div class="he_c03xul">
                                                    <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "20"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 9; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '9',
  'typeid' => '20',
  'r' => 'eyou:artlist',
  'row' => '9',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                                                    <div class="he_c03xli wow g_fadeup1">
                                                        <a href="<?php echo $field['arcurl']; ?>">
                                                            <div class="he_c03xlm">
                                                                <div class="he_c03xlk">
                                                                    <div class="he_c03xlti">
                                                                        <p><?php echo $field['title']; ?></p>
                                                                    </div>
                                                                    <div class="he_c03xlcp">
                                                                        <p><?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("cpxinghao", $aid); echo $__VALUE__; unset($aid); ?> </p>
                                                                    </div>
                                                                    <div class="he_c03cig">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img1">
                                                                    </div>
                                                                    <div class="he_c03ctw">
                                                                        <p>MORE</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                   <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                                                  
                                                  

                                                </div>
                                            </div>
                                        </div>
                                       <!--  <div class="he_c03bcli he_d1bxli" id="6">
                                            <div class="he_c03bti">
                                                <div class="he_c03btdt clearfix wow g_fadeup1">
                                                    <div class="he_c03btile fl">
                                                        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/Frame49.svg" alt="Frame49.svg">
                                                    </div>
                                                    <div class="he_c03btiri fl">
                                                        <h2 class="he_x40ft">Smart Monitoring System</h2>
                                                    </div>
                                                </div>
                                                <div class="he_c03btkx wow g_fadeup1">
                                                    <p>If you need more product information, please contact customer service</p>
                                                </div>
                                            </div>
                                            <div class="he_c03bxf">
                                                <div class="he_c03xul">
                                                   <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "20"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 9; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '9',
  'typeid' => '20',
  'r' => 'eyou:artlist',
  'row' => '9',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                                                    <div class="he_c03xli wow g_fadeup1">
                                                        <a href="<?php echo $field['arcurl']; ?>">
                                                            <div class="he_c03xlm">
                                                                <div class="he_c03xlk">
                                                                    <div class="he_c03xlti">
                                                                        <p><?php echo $field['title']; ?></p>
                                                                    </div>
                                                                    <div class="he_c03xlcp">
                                                                        <p><?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("cpxinghao", $aid); echo $__VALUE__; unset($aid); ?> </p>
                                                                    </div>
                                                                    <div class="he_c03cig">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img1">
                                                                    </div>
                                                                    <div class="he_c03ctw">
                                                                        <p>MORE</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                   <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                                                   
                                                 



                                                </div>
                                            </div>
                                        </div> -->
                                      <!--   <div class="he_c03bcli he_d1bxli" id="7">
                                            <div class="he_c03bti">
                                                <div class="he_c03btdt clearfix wow g_fadeup1">
                                                    <div class="he_c03btile fl">
                                                        <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/fujian3tubiaodaxiaoyanseshiliPVBM-01.svg" alt="fujian3tubiaodaxiaoyanseshiliPVBM-01.svg">
                                                    </div>
                                                    <div class="he_c03btiri fl">
                                                        <h2 class="he_x40ft">Accessories</h2>
                                                    </div>
                                                </div>
                                                <div class="he_c03btkx wow g_fadeup1">
                                                    <p>If you need more product information, please contact customer service</p>
                                                </div>
                                            </div>
                                            <div class="he_c03bxf">
                                                <div class="he_c03xul">
                                                 <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "20"; endif; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 9; endif; $modelid = ""; $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> $modelid,      "joinaid"=> "",      "keyword"=> "",      "release"=> "off",      "idlist"=> "",      "idrange"=> "",      "aid"=> "", ); $tag = array (
  'loop' => '9',
  'typeid' => '20',
  'r' => 'eyou:artlist',
  'row' => '9',
); $tagArclist = new \think\template\taglib\eyou\TagArclist; $_result = $tagArclist->getArclist($param, $row, "", "","desc","",$tag,"0","on","off","","");if(!empty($_result["list"]) && (is_array($_result["list"]) || $_result["list"] instanceof \think\Collection || $_result["list"] instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = is_array($_result["list"]) ? array_slice($_result["list"],0, $row, true) : $_result["list"]->slice(0, $row, true);  $__TAG__ = $_result["tag"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);if($field["is_b"] == 1) : $field["title"] = "<strong>".$field["title"]."</strong>";endif;$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                                                    <div class="he_c03xli wow g_fadeup1">
                                                        <a href="<?php echo $field['arcurl']; ?>">
                                                            <div class="he_c03xlm">
                                                                <div class="he_c03xlk">
                                                                    <div class="he_c03xlti">
                                                                        <p><?php echo $field['title']; ?></p>
                                                                    </div>
                                                                    <div class="he_c03xlcp">
                                                                        <p><?php  $aid = $field['aid']; $tagField = new \think\template\taglib\eyou\TagField; $__VALUE__ = $tagField->getField("cpxinghao", $aid); echo $__VALUE__; unset($aid); ?> </p>
                                                                    </div>
                                                                    <div class="he_c03cig">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img">
                                                                        <img src="<?php echo $field['litpic']; ?>" class="he_img1">
                                                                    </div>
                                                                    <div class="he_c03ctw">
                                                                        <p>MORE</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                   <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>

                                                   
                                                  


                                                </div>
                                            </div>
                                        </div> -->
                                        
                                    </div>
                                </div>

                                <div class="he_c03bnri fr">
                                    <div class="he_c03bnhw ">
                                        <div class="he_c03cnv selector" data-margin-top="120">
                                            <div class="he_c03cnti">
                                                <p></p>
                                            </div>
                                            <div class="he_c03cul">
                                                <div class="he_c03cli act">
                                                    <p>
                                                        <a href="#1" style="color: #333333">Single Phase Inverter</a>
                                                    </p>
                                                </div>
                                                <div class="he_c03cli ">
                                                    <p>
                                                        <a href="#2" style="color: #333333">Three Phase Inverter</a>
                                                    </p>
                                                </div>
                                                <div class="he_c03cli ">
                                                    <p>
                                                        <a href="#3" style="color: #333333">Energy Storage Inverter</a>
                                                    </p>
                                                </div>
                                                <div class="he_c03cli ">
                                                    <p>
                                                        <a href="#4" style="color: #333333">Monitoring System</a>
                                                    </p>
                                                </div>
                                                <div class="he_c03cli ">
                                                    <p>
                                                        <a href="#5" style="color: #333333">Accessories</a>
                                                    </p>
                                                </div>
                                               <!--  <div class="he_c03cli ">
                                                    <p>
                                                        <a href="#6" style="color: #333333">Smart Monitoring System</a>
                                                    </p>
                                                </div>
                                                <div class="he_c03cli ">
                                                    <p>
                                                        <a href="#7" style="color: #333333">Accessories</a>
                                                    </p>
                                                </div> -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="he_c03p2">-->
                        <!--<div class="s_cont1360">-->
                        <!--<div class="he_c03p2ul clearfix">-->
                        <!---->
                        <!--<div class="he_c03p2li fl  wow g_fadeup1">-->
                        <!--<div class="he_c03p2cf">-->
                        <!--<div class="he_c03p2ti">-->
                        <!--<p></p>-->
                        <!--</div>-->
                        <!--<div class="he_c03p2jc yxedr_active">-->
                        <!---->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!---->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="he_c03p3">-->
                        <!--<div class="s_cont1360">-->
                        <!--<div class="he_c03p3n">-->
                        <!--<div class="he_c03p3ti wow g_fadeup1">-->
                        <!--<h2 class="he_x40ft"></h2>-->
                        <!--</div>-->
                        <!--<div class="he_c03p3ul">-->
                        <!--<div class="he_c03p3gc clearfix wow g_fadeup1">-->
                        <!---->
                        <!--<div class="he_c03p3li fl">-->
                        <!--<a href="" target="">-->
                        <!--<div class="he_c03p3kx">-->
                        <!--<div class="he_c03p3ig">-->
                        <!--<img src="/Public/Cn/images/c03ifl.png" alt="" class="he_img">-->
                        <!--<img src="" alt="" class="he_img1">-->
                        <!--</div>-->
                        <!--<div class="he_c03p3tr">-->
                        <!--<div class="he_c03p3tgf">-->
                        <!--<div class="he_c03p3eti">-->
                        <!--<p></p>-->
                        <!--</div>-->
                        <!--<div class="he_c03p3to">-->
                        <!--<p></p>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="he_c03p3tnk">-->
                        <!--<p>更多</p>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</a>-->
                        <!--</div>-->
                        <!---->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
        <script>
            new WOW().init();
        </script>

        <script>
            var sticky = new Sticky('.selector');
                    // 侧边滚动条
                    $(function () {
                        $(function () {
                            var scrollInertiaNum;
                            if (/firefox/.test(navigator.userAgent.toLowerCase())) {
                                scrollInertiaNum = 200;
                            } else {
                                scrollInertiaNum = 200;
                            }
                            $(".he_c03cul").mCustomScrollbar({
                                theme: 'dark',
                                scrollInertia: scrollInertiaNum,
                                horizontalScroll: false,
                                axis: "y",
                                // scrollbarPosition: "outside",
                            });
                        });
                    })
            
                    //侧边导航
                    asideNav();
            
                    function asideNav() {
                        var $nav = $(".he_c03cul"); //侧边导航最外面的盒子
                        var $nav_li = $(".he_c03cli"); //侧边导航循环的部分
                        var $section = $(".he_c03bcli"); //每个模块
                        var $main = $(".he_c03bsul"); //侧边导航显示的区域
                        var topArr = []; //每个模块距离页面最顶部的距离
                        var navHeight = 0; //导航条的高度
                        var beforeIndex = 0; //之前所在模块的index
                        var nowIndex = 0; //现在所在模块的index
            
                        // 初始化
                        asideInit();
                        // 页面加载完重新初始化
                        $(window).on("load", function () {
                            asideInit();
                        });
                        // 页面尺寸改变重新初始化
                        $(window).resize(function () {
                            asideInit();
                        });
            
                        // 滚动事件监听
                        $(window).scroll(function () {
                            asideNavTb();
                            judgeEnter();
                        });
            
                        //导航点击滚动到相应位置
                        $nav_li.click(function () {
                            var index = $(this).index();
                            $("html,body").stop().animate({
                                "scrollTop": topArr[index] - navHeight
                            }, 500);
                        });
            
                        // 获取参数
                        function getPara() {
                            $section.each(function (index, item) {
                                var top = $(this).offset().top;
                                topArr[index] = top;
                            });
                            navHeight = 80;
                        }
                        //左侧样式同步
                        function asideNavTb() {
                            for (var i = 0; i < topArr.length; i++) {
                                if ($(window).scrollTop() > topArr[i] - $(window).height() / 3) {
                                    nowIndex = i;
                                }
                            }
                            if (nowIndex != beforeIndex) {
                                beforeIndex = nowIndex;
                                $nav_li.eq(nowIndex).addClass("act").siblings().removeClass("act");
                            }
                        };
            
                        function judgeEnter() {
                            var itemTop = $nav.offset().top - $(window).scrollTop();
                            var itemBot = itemTop + $nav.height();
                            var containerTop = $main.offset().top - $(window).scrollTop();
                            var containerBot = containerTop + $main.height();
                            if (itemTop - containerTop > 0) {
                                $nav.addClass("start");
                            } else {
                                $nav.removeClass("start");
                            }
                            if (itemBot - containerBot > 0) {
                                $nav.addClass("end");
                            } else {
                                $nav.removeClass("end");
                            }
                        }
            
                        function asideInit() {
                            getPara();
                            asideNavTb();
                            judgeEnter();
                        }
                    }
            
                    // 产品推荐
                    $(function () {
                        $('.he_c03p3gc').slick({
                            infinite: true,
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            responsive: [{
                                    breakpoint: 769,
                                    settings: {
                                        slidesToShow: 2,
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 1,
                                    }
                                }
                            ]
                        })
                    })
                    var test = (window.location.href).split('?tp');
                    if (!isNaN(test[1])) {
            
                        $("html,body").animate({
                            scrollTop: $('.he_d1bxli[data-num="' + test[1] + '"]').offset().top - 100
                        }, 700);
            
                        }
        </script>


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
                                

                                <img src=" <?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/1.ins-180.svg" alt="1.ins-180.svg" class="he_img1">


                                <a target="_blank" title="" href="https://www.instagram.com/afore_pv_inverter/"></a>
                            </div>
                        </div>
                        <div class="he_ftbsli fl">
                            <div class="he_ftbslt">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/2.Facebook-888.svg" alt="2.Facebook-888.svg" class="he_img">


                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/2.Facebook.svg" alt="2.Facebook.svg" class="he_img1">


                                <a target="_blank" title="" href="https://www.facebook.com/AforeNewEnergyTechnology/"></a>
                            </div>
                        </div><div class="he_ftbsli fl">
                            <div class="he_ftbslt">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/3.twiter-248.svg" alt="3.twiter-248.svg" class="he_img">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/3.twiter.svg" alt="3.twiter.svg" class="he_img1">
                                <a target="_blank" title="" href="https://twitter.com/Afore_Inverter"></a>
                            </div>
                        </div><div class="he_ftbsli fl">
                            <div class="he_ftbslt">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/4.lingying-857.svg" alt="4.lingying-857.svg" class="he_img">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/4.lingying.svg" alt="4.lingying.svg" class="he_img1">
                                <a target="_blank" title="" href="https://www.linkedin.com/company/afore-new-energy-technology-shanghai-co-ltd-/"></a>
                            </div>
                        </div>
                        <div class="he_ftbsli fl">
                            <div class="he_ftbslt">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/youtobe%401x-759.svg" alt="youtobe@1x-759.svg" class="he_img">
                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/youtobe%401xyuanse-825.svg" alt="youtobe@1xyuanse-825.svg" class="he_img1">
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
            <p>Afore attaches great importance to your privacy. When you visit our website, please agree to use all cookies. If you want to know more about how we use cookies, please visit our<a href="#" target="_blank">Privacy policy</a>.</p>
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
    if(agreement == 1){
        $("#agreement").hide();
    }
      // 新闻轮播
                 $('.he_synewsg').slick({
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      arrows: true,
                      waitForAnimate:false,
                      // dots: true,
                      infinite:false,
                      fade:true
                  });
      
                if ($(window).width() > 1024 &&  $('.he_syp1txgk video').length > 0 ) {
                  $('.he_syp1txgk video').trigger('play');
              }
      
              $('.he_cookmo').click(function () {
                  sessionStorage.setItem("agreement",1);
                //   let agreement = sessionStorage.getItem("agreement");
                //   console.log(agreement,"agreement");
                  $('.he_cook').stop().fadeOut();
              })
              function getData(){
                  var that = $(this);
      
                  $.ajax({
                      url: "#",
                      data: '',
                      dataType: "json",
                      type: "POST",
                      success: function (data) {
                          if(data.status=='success'){
                              if(data.info.msg == "操作成功"){
                                 var one = data.info.data.co2;
                                 var two = data.info.data.totalInverter;
                                 var three = data.info.data.totalPlant;
                                 var four = data.info.data.totalPowerGeneration;
      
                                 three = (three/1000).toFixed(0);
                                 two = (two/1000).toFixed(0);
                                 four = (four/1000000).toFixed(0);
                                 one = (one/1000).toFixed(0);
                                 $('.he_gunt1').text(three);
                                 $('.he_gunt2').text(two);
                                 $('.he_gunt3').text(four);
                                 $('.he_gunt4').text(one);
                              }
                          }else{
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
                        autoplaySpeed:4000,
                      speed:400,
                      pauseOnDotsHover:true,
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
                                      setTimeout(function() {
                                          $video.get(0).play();
                                      }, 100)
                                  }
                              } else {
                                  $obj.slick('slickPlay');
                              }
                          }
                          // 切换到下一张是否有视频
                          function afterChange() {
                              $obj.on('afterChange', function(event, slick, index) {
                                  // 视频暂停并回到第一帧
                                  $obj.find("video").each(function() {
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
                                  }else{
                                      $obj.slick('slickPlay');
                                  }
      
                              });
                          }
                          // 视频播完切换到下一张
                          function videoEnd() {
                              $obj.find("video").each(function() {
                                  var video = $(this).get(0);
                                  video.onended = function() {
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
                  fade:true,
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
      console.log('%c','color:green')
    </script>
    </body>
</html>