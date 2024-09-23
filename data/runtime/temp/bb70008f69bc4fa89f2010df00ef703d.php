<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:36:"./template/mobile/lists_download.htm";i:1694417357;s:60:"/www/wwwroot/testweb.aforenergy.com/template/mobile/head.htm";i:1702175699;}*/ ?>
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


    <div class="he_nyym he_d1ym he_dxlym">
       

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
                                    <p>

                                    </p>
                                </div>
                            </div>
                            <div class="he_basuo">
                                <div class="he_bashj">
                                    <div class="he_syp4in">
                                        <div class="he_syp4inp">
                                            <input type="text" placeholder="Search key" name="keys" value="">
                                        </div>
                                        <div class="he_syp4inbt clearfix keywords">
                                            <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/suod1.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 主体内容 -->
            <div class="he_main">
                <div class="he_dxlnyq">
                    <!--面包屑-->
                     <div class="he_bordkm"> 
     <div class="s_cont1360"> 
      <div class="he_bordul clearfix"> 
       <div class="he_bordfr fl"> 
        <a href="/"> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/bordi1.svg" alt="" class="he_int1" /> <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/bordi2.svg" alt="" class="he_int2" /> </a> 
       </div> 
       <div class="he_bordli fl">
         &gt; 
         <?php  $typeid = ""; if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $tagPosition = new \think\template\taglib\eyou\TagPosition; $__VALUE__ = $tagPosition->getPosition($typeid, "", " "); echo $__VALUE__; ?>

       </div>
      
      </div> 
     </div> 
    </div> 


                    <div class="he_quline">
                        <div class="s_qhbox">

                           
                            <div class="s_qhnr act">
                                <a href="#">
                                  <?php echo $eyou['field']['typename']; ?>
                                </a>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="he_d1ylz">
                        <!-- 检索条件 -->
                        <div class="he_d1yp1">
                            <div class="he_d1yp1ec">
                                <div class="he_d1ypjc1 he_d1p2">
                                    <div class="he_d1p1ti wow g_fadeup1">
                                        <p>
                                            According to the product
</p>
                                    </div>
                                    <div class="he_d1p1ny wow g_fadeup1">
                                        <div class="he_d1p1nkc">
                                            <div class="he_d1p1nli he_d1p1nli1 clearfix">
                                                <div class="he_d1p1nle fl">
                                                    <p>
                                                        Type
                                                    </p>
                                                </div>
                                                <div class="he_d1p1nri fl">
                                                    <div class="he_d1p1nol clearfix">
                                                        

                                                       <?php  if(isset($ui_typeid) && !empty($ui_typeid)) : $typeid = $ui_typeid; else: $typeid = "72"; endif; if(isset($ui_row) && !empty($ui_row)) : $row = $ui_row; else: $row = 10; endif; $tagChannelartlist = new \think\template\taglib\eyou\TagChannelartlist; $_result = $tagChannelartlist->getChannelartlist($typeid, "son",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator): $i = 0; $e = 1;$__LIST__ = is_array($_result) ? array_slice($_result,0, $row, true) : $_result->slice(0, $row, true); if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$channelartlist): $channelartlist["typename"] = text_msubstr($channelartlist["typename"], 0, 100, false); $__LIST__[$key] = $_result[$key] = $channelartlist;$i= intval($key) + 1;$mod = ($i % 2 ); ?>

                                                        <div class="he_d1p1njx he_d1p1si fl clearfix get_type" data-id="40" data-type="one">
                                                            <div class="he_d1p1cjx fl">
                                                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/duihao.svg" alt="" class="he_img">
                                                                <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/jiahao.svg" alt="" class="he_img1">
                                                            </div>
                                                            <div class="he_d1p1cwx fr">
                                                                <p>
                                                                    <a href="<?php  $__VALUE__ = isset($channelartlist["typeurl"]) ? $channelartlist["typeurl"] : "变量名不存在"; echo $__VALUE__; ?>" >
                                                                   <?php  $__VALUE__ = isset($channelartlist["typename"]) ? $channelartlist["typename"] : "变量名不存在"; echo $__VALUE__; ?></a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                     <?php ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $typeid = $row = ""; unset($channelartlist); ?>
                                                       
                                                        
                                                      
                                                      
                                                        
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            


                                        </div>
                                        <div class="he_d1p1nig">
                                            <img src="<?php  $tagGlobal = new \think\template\taglib\eyou\TagGlobal; $__VALUE__ = $tagGlobal->getGlobal("web_templets_pc"); echo $__VALUE__; ?>/skin/img/jiantoux.svg" alt="">
                                        </div>
                                    </div>
                                </div>


                                

                                
                            </div>
                            
                        </div>
                        <!-- 检索内容 -->
                        <div class="he_d1yp2 he_d1bxli" data-num="1">
                           <!--  <div class="he_d1yp2ti wow g_fadeup1">
                                <p>
                                    Search Result（ ）
                                </p>
                            </div> -->
                            <div class="he_d1yp2ul">
                                <div class="he_d1yp2tou clearfix wow g_fadeup1">
                                    <div class="he_d1yp2tz he_d1yp2t1 fl">
                                        <p>
                                            File Name1
                                        </p>
                                    </div>
                                    <div class="he_d1yp2tz he_d1yp2t2 fl">
                                        <p>
                                            Product type
                                        </p>
                                    </div>
                                    <!--<div class="he_d1yp2tz he_d1yp2t3 fl">-->
                                    <!--<p>文件类型</p>-->
                                    <!--</div>-->
                                    <!--<div class="he_d1yp2tz he_d1yp2t4 fl">-->
                                    <!--<p>语言</p>-->
                                    <!--</div>-->
                                </div>
                                <div class="he_d1yp2bod">

                                   
                                   <?php  $typeid = "";  if(empty($typeid) && isset($channelartlist["id"]) && !empty($channelartlist["id"])) : $typeid = intval($channelartlist["id"]); endif;  $param = array(      "typeid"=> $typeid,      "notypeid"=> "",      "flag"=> "",      "noflag"=> "",      "channel"=> "",      "keyword"=> "",      "idlist"=> "",      "idrange"=> "", ); $tagList = new \think\template\taglib\eyou\TagList; $_result_tmp = $tagList->getList($param, 10, "", "", "desc", "on","off","");if(!empty($_result_tmp) && (is_array($_result_tmp) || $_result_tmp instanceof \think\Collection || $_result_tmp instanceof \think\Paginator)): $i = 0; $e = 1; $__LIST__ = $_result = $_result_tmp["list"]; $__PAGES__ = $_result_tmp["pages"];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$field): $aid = $field["aid"];$users_id = $field["users_id"];$field["title"] = text_msubstr($field["title"], 0, 100, false);$field["seo_description"] = text_msubstr($field["seo_description"], 0, 160, true);$i= intval($key) + 1;$mod = ($i % 2 ); ?>



                                    <div class="he_d1yp2bl clearfix wow g_fadeup1">
                                        <div class="he_d1yp2tz he_d1yp2t1 fl">
                                            <p>
                                               <?php echo $field['title']; ?>
                                            </p>
                                        </div>
                                        <div class="he_d1yp2tz he_d1yp2t2 fl">
                                            <p>
                                             <?php echo $field['typename']; ?>
                                            </p>
                                        </div>
                                       
                                        <div class="he_d1yp2tz he_d1yp2t5 fl">
                                            <?php  $aid = $field['aid']; $tagArcview = new \think\template\taglib\eyou\TagArcview; $_result = $tagArcview->getArcview($aid, "",""); if(is_array($_result) || $_result instanceof \think\Collection || $_result instanceof \think\Paginator):  $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: $view = $__LIST__;$users_id = $view["users_id"];if(is_array($view['file_list']) || $view['file_list'] instanceof \think\Collection || $view['file_list'] instanceof \think\Paginator): $i = 0; $e = 1; $__LIST__ = $view['file_list'];if( count($__LIST__)==0 ) : echo htmlspecialchars_decode("");else: foreach($__LIST__ as $key=>$vo): $i= intval($key) + 1;$mod = ($i % 2 ); ?>

                                            <a href="<?php echo $vo['downurl']; ?>" target="_blank">
                                                Preview
                                            </a>
                                                <?php echo isset($vo["ey_1563185380"])?$vo["ey_1563185380"]:""; ?><?php echo (1 == $e && isset($vo["ey_1563185376"]))?$vo["ey_1563185376"]:""; ++$e; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $vo = []; endif; else: echo htmlspecialchars_decode("");endif; unset($aid); unset($users_id); $view = []; ?>
                                            <a href="#" target="_blank">
                                                Download
                                            </a>
                                        </div>
                                    </div>
                                      <?php ++$e; $aid = 0; $users_id = 0; endforeach; endif; else: echo htmlspecialchars_decode("");endif; $field = []; ?>


                                    
                                   
                                    
                                   
                                    
                                    
                                    
                                    
                                  
                                </div>
                               <!--  <div class="he_d1p3any wow g_fadeup1 getList">
                                    <div class="he_syp2mob">
                                        <a href="javascript:;" class="nomore">
                                            加载更多
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
           {include="bottom.html"}



        <!-- public end -->
        <script>
            new WOW().init();
        </script>
        <script>
            $('.get_type').click(function() {
        var that = $(this);
        var id = that.attr('data-id');
        var html = '';

        var index = layer.load(1, {
            shade: [0.1, '#fff'] //0.1透明度的白色背景
        });
        $.ajax({
            url: "/Cn/Index/getType.html",
            data: {
                id: id
            },
            dataType: "json",
            type: "POST",
            success: function(data) {
                layer.close(index)
                console.log(data)
                if (data.status == 'success') {
                    if (data.info.length > 0) {
                        for (let i = 0; i < data.info.length; i++) {

                            if (id == 0) {
                                html += '<div class="he_d1p1njx he_d1p1si fl clearfix act" data-id="' + data.info[i].id + '" id="two' + data.info[i].id + '" data-type="two">';
                            } else {
                                html += '<div class="he_d1p1njx he_d1p1si fl clearfix" data-id="' + data.info[i].id + '" id="two' + data.info[i].id + '" data-type="two">';

                            }
                            html += '<div class="he_d1p1cjx fl">';
                            html += '<img src="/Public/Cn/images/duihao.svg" alt="" class="he_img">';
                            html += '<img src="/Public/Cn/images/jiahao.svg" alt="" class="he_img1">';
                            html += '</div>';
                            html += '<div class="he_d1p1cwx fr">';
                            html += '<p>' + data.info[i].title + '</p>';
                            html += '</div>';
                            html += '</div>';
                        }
                        if (that.hasClass("act")) {
                            $('.he_d1p1niol').append(html)
                        } else {
                            var type_two = []
                            $('.he_d1p1njx').each(function(i, v) {

                                if ($(this).attr('data-type') == 'two' && $(this).attr('data-id') != 0) {
                                    type_two.push($(this).attr('data-id'));
                                }

                            })
                            for (let i = 0; i < type_two.length; i++) {
                                for (let j = 0; j < data.info.length; j++) {
                                    if (type_two[i] == data.info[j].id) {
                                        $('#two' + type_two[i]).remove();
                                    }
                                }
                            }
                            console.log(type_two);

                        }

                    } else {

                    }

                } else {
                    layer.msg(data.info);
                }
            },
            error: function(data) {}
        });

    })
    // $(function(){
    //     $('.he_d1ypjc1').find('.he_d1p1nli1').find('.he_d1p1si').click(function(){
    //         var shu = $(this).index() - 1;
    //         $('.he_d1ypjc1').find('.he_d1p1nli2').find('.he_d1p1niol').eq(shu).stop().fadeIn().siblings().hide();
    //         if($(this).hasClass('act')){
    //             $('.he_d1ypjc1').find('.he_d1p1nli2').find('.he_d1p1niol').eq(shu).children().removeClass('act');
    //             $('.he_d1ypjc1').find('.he_d1p1nli2').stop().fadeOut();
    //         }else{
    //             $('.he_d1ypjc1').find('.he_d1p1nli2').stop().fadeIn();
    //         }
    //     })
    // })

$(function() {

    var swich = true;
    // 选择全部
    $("body").on("click", ".he_d1p1all", function() {
        if (swich) {
            swich = false;
            $(this).siblings().addClass('act');
            $(this).addClass('act');
        } else {
            swich = true;
            $(this).siblings().removeClass('act');
            $(this).removeClass('act');
        }
    })

    $("body").on("click", ".he_d1p1si", function() {
        var all = true;
        $(this).toggleClass('act');
        $(this).parents('.he_d1p1nol,.he_d1p1niol').find('.he_d1p1si').each(function(index, item) {
            if ($(item).hasClass("act") == false) {
                console.log(item)
                all = false;
                return false;
            };
        });

        if (all) {
            console.log(this)
            $(this).parents('.he_d1p1nol,.he_d1p1niol').find('.he_d1p1all').addClass('act');
        } else {
            $(this).parents('.he_d1p1nol,.he_d1p1niol').find('.he_d1p1all').removeClass('act');
        }
    })


    $('.he_d1p1nig').click(function() {
        $(this).parents('.he_d1p2').toggleClass('on1');
    })

    $('.he_d1p1njx').click(function() {
        $(this).parents('.he_d1p2').removeClass('on1');
    })

    $('.he_d1p2').each(function(index, item) {
        if ($(this).find('.he_d1p1ny').height() > 70) {
            $(this).addClass('on');
            $(this).addClass('on1');
        }
    });

    $('.keywords').click(function() {
        var keys = $("input[name='keys']").val();
        var html = '';
        page = 0
        var type = "";
        var type_two = "";
        var type_three = "";
        var type_four = "";
        var type_five = "";

        $('.he_d1p1njx').each(function(i, v) {
                if ($(this).attr('data-type') == 'one' && $(this).hasClass('act') === true && $(this).attr('data-id') != 0) {
                    type += $(this).attr('data-id') + ",";
                }
                if ($(this).attr('data-type') == 'two' && $(this).hasClass('act') === true && $(this).attr('data-id') != 0) {
                    type_two += $(this).attr('data-id') + ",";
                }
                if ($(this).attr('data-type') == 'three' && $(this).hasClass('act') === true && $(this).attr('data-id') != 0) {
                    type_three += $(this).attr('data-id') + ",";
                }
                if ($(this).attr('data-type') == 'four' && $(this).hasClass('act') === true && $(this).attr('data-id') != 0) {
                    type_four += $(this).attr('data-id') + ",";

                }
                if ($(this).attr('data-type') == 'five' && $(this).hasClass('act') === true && $(this).attr('data-id') != 0) {
                    type_five += $(this).attr('data-id') + ",";
                }
            })
            // if($('.threes').hasClass('act')){
            //     type_three = ""
            // }
        var index = layer.load(1, {
            shade: [0.1, '#fff'] //0.1透明度的白色背景
        });
        $.ajax({
            url: "/Cn/Index/getDownloads.html",
            data: {
                keys: keys,
                type: type,
                type_two: type_two,
                type_three: type_three,
                type_four: type_four,
                type_five: type_five,
                page: page
            },
            dataType: "json",
            type: "POST",
            success: function(data) {
                layer.close(index)
                console.log(data)
                if (data.status == 'success') {
                    if (data.info.list.length > 0) {
                        for (let i = 0; i < data.info.list.length; i++) {





                            html += '<div class="he_d1yp2bl clearfix wow g_fadeup1">';
                            html += '<div class="he_d1yp2tz he_d1yp2t1 fl">';
                            html += '<p>' + data.info.list[i].title + '</p>';
                            html += '</div>';
                            html += '<div class="he_d1yp2tz he_d1yp2t2 fl">';
                            html += '<p>' + data.info.list[i].type + '</p>';
                            html += '</div>';
                            // html+= '<div class="he_d1yp2tz he_d1yp2t3 fl">';
                            // html+= '<p>'+data.info.list[i].type_three+'</p>';
                            // html+= '</div>';
                            // html+= '<div class="he_d1yp2tz he_d1yp2t4 fl">';
                            // html+= '<p>'+data.info.list[i].type_four+'</p>';
                            // html+= '</div>';
                            html += '<div class="he_d1yp2tz he_d1yp2t5 fl">';
                            if (data.info.list[i].show == 1) {
                                html += '<a href="/Cn/Skippower/downloadFileF?id=' + data.info.list[i].id + '&mid=60" target="_blank">预览</a>';
                            }
                            html += '<a href="/Cn/Skippower/downloadFile?id=' + data.info.list[i].id + '&mid=60" target="_blank">下载</a>';
                            html += '</div>';
                            html += '</div>';

                        }
                        page = 1
                        $('.nomore').text('加载更多');
                        $('.he_d1yp2bod').empty()
                        $('.he_d1yp2bod').append(html)
                        $('.he_d1yp2ti p').text('搜索结果（' + data.info.count + '）')

                    } else {
                        $('.nomore').text('没有更多！');
                        $('.he_d1yp2bod').empty()
                        $('.he_d1yp2ti p').text('搜索结果（0）')
                    }
                    $("html,body").animate({

                        scrollTop: $('.he_d1bxli[data-num="1"]').offset().top - 100

                    }, 700);
                } else {
                    layer.msg(data.info);
                }
            },
            error: function(data) {}
        });

    })
    var page = 1;
    $('.getList').click(function(e) {
        var keys = $("input[name='keys']").val();
        var html = '';
        var type = "";
        var type_two = "";
        var type_three = "";
        var type_four = "";
        var type_five = "";

        $('.he_d1p1njx').each(function(i, v) {
                if ($(this).attr('data-type') == 'one' && $(this).hasClass('act') === true && $(this).attr('data-id') != 0) {
                    type += $(this).attr('data-id') + ",";
                }
                if ($(this).attr('data-type') == 'two' && $(this).hasClass('act') === true && $(this).attr('data-id') != 0) {
                    type_two += $(this).attr('data-id') + ",";
                }
                if ($(this).attr('data-type') == 'three' && $(this).hasClass('act') === true && $(this).attr('data-id') != 0) {
                    type_three += $(this).attr('data-id') + ",";
                }
                if ($(this).attr('data-type') == 'four' && $(this).hasClass('act') === true && $(this).attr('data-id') != 0) {
                    type_four += $(this).attr('data-id') + ",";

                }
                if ($(this).attr('data-type') == 'five' && $(this).hasClass('act') === true && $(this).attr('data-id') != 0) {
                    type_five += $(this).attr('data-id') + ",";
                }
            })
            // if($('.threes').hasClass('act')){
            //     type_three = ""
            // }
        var index = layer.load(1, {
            shade: [0.1, '#fff'] //0.1透明度的白色背景
        });
        $.ajax({
            url: "/Cn/Index/getDownloads.html",
            data: {
                keys: keys,
                type: type,
                type_two: type_two,
                type_three: type_three,
                type_four: type_four,
                type_five: type_five,
                page: page
            },
            dataType: "json",
            type: "POST",
            success: function(data) {
                layer.close(index)
                console.log(data)
                if (data.status == 'success') {
                    if (data.info.list.length > 0) {
                        for (let i = 0; i < data.info.list.length; i++) {

                            html += '<div class="he_d1yp2bl clearfix wow g_fadeup1">';
                            html += '<div class="he_d1yp2tz he_d1yp2t1 fl">';
                            html += '<p>' + data.info.list[i].title + '</p>';
                            html += '</div>';
                            html += '<div class="he_d1yp2tz he_d1yp2t2 fl">';
                            html += '<p>' + data.info.list[i].type + '</p>';
                            html += '</div>';
                            // html+= '<div class="he_d1yp2tz he_d1yp2t3 fl">';
                            // html+= '<p>'+data.info.list[i].type_three+'</p>';
                            // html+= '</div>';
                            // html+= '<div class="he_d1yp2tz he_d1yp2t4 fl">';
                            // html+= '<p>'+data.info.list[i].type_four+'</p>';
                            // html+= '</div>';
                            html += '<div class="he_d1yp2tz he_d1yp2t5 fl">';
                            if (data.info.list[i].show == 1) {
                                html += '<a href="/Cn/Skippower/downloadFileF?id=' + data.info.list[i].id + '&mid=60" target="_blank">预览</a>';
                            }
                            html += '<a href="/Cn/Skippower/downloadFile?id=' + data.info.list[i].id + '&mid=60" target="_blank">下载</a>';
                            html += '</div>';
                            html += '</div>';

                        }

                        $('.he_d1yp2bod').append(html)
                        page++
                    } else {
                        $('.nomore').text('没有更多！');
                    }
                } else {
                    layer.msg(data.info);
                }
            },
            error: function(data) {}
        });
    })
    $('.get_all').click(function() {
        $('.he_d1p1njx').each(function(i, v) {
            if ($(this).attr('data-type') == 'four') {
                $(this).removeClass('cannot');
            }
            if ($(this).attr('data-type') == 'five') {
                $(this).removeClass('cannot');
            }
        })
    })
    $("body").on("click", ".get_all_type", function() {
        if ($(this).hasClass('act')) {
            $('.he_d1p1njx').each(function(i, v) {
                if ($(this).attr('data-type') == 'two') {
                    $(this).addClass('act');
                }
            })
        } else {
            $('.he_d1p1njx').each(function(i, v) {
                if ($(this).attr('data-type') == 'two') {
                    $(this).removeClass('act');
                }
            })
        }

    })
    $('.get_country').click(function() {
        if ($('.get_country').hasClass('act') && $('.get_language').hasClass('act')) {
            $('.he_d1p1njx').each(function(i, v) {
                if ($(this).attr('data-type') == 'four') {
                    $(this).removeClass('cannot');
                }
                if ($(this).attr('data-type') == 'five') {
                    $(this).removeClass('cannot');
                }
            })
        } else {
            if ($(this).hasClass('act')) {
                $('.he_d1p1njx').each(function(i, v) {
                    if ($(this).attr('data-type') == 'four') {
                        $(this).addClass('cannot');
                        $(this).removeClass('act');
                    }
                })
            } else {
                if ($('.get_language').hasClass('act')) {
                    $('.he_d1p1njx').each(function(i, v) {
                        if ($(this).attr('data-type') == 'five') {
                            $(this).addClass('cannot');
                            $(this).removeClass('act');
                        }
                    })
                } else {
                    $('.he_d1p1njx').each(function(i, v) {
                        if ($(this).attr('data-type') == 'four') {
                            $(this).removeClass('cannot');
                            $(this).removeClass('act');
                        }
                    })
                }

            }
        }


    })
    $('.get_language').click(function() {
        if ($('.get_country').hasClass('act') && $('.get_language').hasClass('act')) {
            $('.he_d1p1njx').each(function(i, v) {
                if ($(this).attr('data-type') == 'four') {
                    $(this).removeClass('cannot');
                }
                if ($(this).attr('data-type') == 'five') {
                    $(this).removeClass('cannot');
                }
            })
        } else {
            if ($('.get_language').hasClass('act')) {
                $('.he_d1p1njx').each(function(i, v) {
                    if ($(this).attr('data-type') == 'five') {
                        $(this).addClass('cannot');
                        $(this).removeClass('act');
                    }
                })
            } else {
                if ($('.get_country').hasClass('act')) {
                    $('.he_d1p1njx').each(function(i, v) {
                        if ($(this).attr('data-type') == 'four') {
                            $(this).addClass('cannot');
                            $(this).removeClass('act');
                        }
                    })
                } else {
                    $('.he_d1p1njx').each(function(i, v) {
                        if ($(this).attr('data-type') == 'five') {
                            $(this).removeClass('cannot');
                            $(this).removeClass('act');
                        }
                    })
                }

            }
        }

    })
})
        </script>
        <script>
            console.log('%c文件路径：./Cn/View/Lists/downloads', 'color:green')
        </script>
    </body>

</html>