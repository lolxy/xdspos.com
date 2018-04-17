<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<head>
    <meta charset="utf-8" />
    <title><?php echo ($webtitle); ?>-<?php echo ($site["name"]); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo ($site["description"]); ?>,<?php echo ($info['description']); ?>" />
    <meta name="keywords" content="<?php echo ($site["keyword"]); ?>,<?php echo ($info['keywords']); ?>" />
    <meta name="author" content="cony" />
    <!-- CSS -->
    <link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" />
    <!-- END CSS -->
    <!-- JAVASCRIPT -->
    <script src="/Public/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="/Public/Home/js/script.js"></script>
    <script type="text/javascript" src="/Public/Home/js/superfish.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.modernizr.min.js"></script>
    <!-- END JAVASCRIPT -->
</head>
<body>
<div class="header"><!-- HEADER -->
    <div class="container_16" style="padding-top: 6px;">
        <div class="grid_10">
            <ul class="filter group">
                <?php $_m_nav=M("nav");$__list__=$_m_nav->where("lang='zh-cn'  AND type='top' AND parent_id=0")->order('sort DESC')->select();foreach($__list__ as $_k1=>$_v1):$cid=$_v1['id'];$child=$_m_nav->where('parent_id='.$cid)->order('sort DESC')->select();extract($_v1);?><li>
                        <a href="<?php echo ($link); ?>" class="grey"><?php echo ($nav_name); ?></a>
                    </li><?php endforeach; ?>
            </ul>
        </div>
        <div class="grid_6" style="text-align: right;">
                <?php if(C('SITE_INFO.LANG_SWITCH_ON')){ ?>
                    [<a href="/index.php/Home/Message?l=zh-cn" style='cursor:pointer;' title='简体中文'>简体中文</a>]
                    [<a href="/index.php/Home/Message?l=en-us" style='cursor:pointer;' title='English'>English</a>]
                  <!--  [<a href="<?php echo U('Member/index');?>" style='cursor:pointer;' title='login'><?php echo (L("T_LOGIN")); ?></a>]
                    [<a href="<?php echo U('Member/index');?>#toregister" style='cursor:pointer;' title='signIn'><?php echo (L("T_SIGN")); ?></a>]-->
                <?php } ?>
        </div>
    </div>
    <div class="container_12">
        <div class="grid_3">

            <div class="logo"><!-- LOGO -->
                <a href="/index.php"><img src="/Public/Home/images/logo.png" alt="" /></a>
            </div>
        </div><!-- END LOGO -->

        <div class="grid_9"><!-- MENU -->
            <ul class="sf-menu">
                <li>
                    <a href="/index.php"><span class="uppercase"><?php echo (L("T_HOME")); ?></span></a>
                </li>
                <?php $_m_nav=M("nav");$__list__=$_m_nav->where("lang='zh-cn'  AND type='middle' AND parent_id=0")->order('sort DESC')->select();foreach($__list__ as $_k1=>$_v1):$cid=$_v1['id'];$child=$_m_nav->where('parent_id='.$cid)->order('sort DESC')->select();extract($_v1);?><li>
                    <a href="<?php echo ($link); ?>"><span class="uppercase"><?php echo ($nav_name); ?></span></a>
                        <?php if(!empty($child)): ?><ul>
                                <?php if(is_array($child)): $i = 0; $__LIST__ = $child;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nc): $mod = ($i % 2 );++$i;?><li>
                                    <a href="<?php echo ($nc["link"]); ?>"><?php echo ($nc["nav_name"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul><?php endif; ?>
                    </li><?php endforeach; ?>
            </ul>
        </div><!-- END MENU -->
    </div>
</div><!-- END HEADER -->

<div class="map_container" style="position:relative;"><!-- MAP CONTAINER -->

    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ditu.google.cn/maps?f=q&amp;source=embed&amp;hl=zh-CN&amp;geocode=&amp;q=<?php echo urlencode($site['address']);?>&amp;output=embed"></iframe><br /><small><a href="http://ditu.google.cn/maps?f=q&amp;source=embed&amp;hl=zh-CN&amp;geocode=&amp;q=<?php echo urlencode($site['address']);?>" style="color:#0000FF;text-align:left;position:absolute;bottom:10px;left:10px;">查看大图</a></small>    <div class="container_12">

    </div>

</div><!-- END BREADCRUMBS -->
<div class="warpper">
<div class="contains">

<div class="main"><!-- MAIN -->

    <div class="container_12">



        <div class="grid_9">

            <div class="contact">

                <form action="<?php echo U('message/add');?>" id="contact_form" method="post" />

                <p><?php echo (L("T_NAME")); ?>：<input type="text" name="username" id="name" value="" class="requiredField" /> <label><span class="required">*</span></label></p>



                <p><?php echo (L("T_EMAIL")); ?>：<input type="text" name="email" id="email" value="" class="requiredField email" /><label><span class="required">*</span></label></p>



                <p><?php echo (L("T_MOBILE")); ?>：<input type="text" name="moblie" id="moblie" value="" /></p>



                <p>

                    <?php echo (L("T_MESSAGE_CONTENT")); ?>：<textarea name="content" id="message" style="width: 280px; height: 80px;"  class="requiredField"></textarea></p>

                <p><?php echo (L("T_CODE")); ?>：

                    <input class="input" name="verify_code" id="verify_code" type="text" size="20" value="" />

                    <img src="<?php echo U('Base/verify_code');?>"  title="看不清？单击此处刷新" onclick="this.src+='?rand='+Math.random();"  style="cursor: pointer; vertical-align: middle;"/>

                </p>

                <input name="submitted" id="submitted" value="提交" class="submit" type="submit" />



                </form>

            </div>

        </div>



    </div>



</div><!-- END MAIN -->
</div>
</div>

<div class="footer_middle"><!-- FOOTER MIDDLE -->

    <div class="container_12 bg01">

        <!-- <div class="grid_2">

            <h5>

                <?php echo (L("T_NAV")); ?>

            </h5>

            <div class="list-type-footer">

                <ul>

                    <li>

                        <a href="/index.php"><span class="grey"><?php echo (L("T_HOME")); ?></span></a>

                    </li>

                    <?php $_m_nav=M("nav");$__list__=$_m_nav->where("lang='zh-cn'  AND type='bottom' AND parent_id=0")->order('sort DESC')->select();foreach($__list__ as $_k1=>$_v1):$cid=$_v1['id'];$child=$_m_nav->where('parent_id='.$cid)->order('sort DESC')->select();extract($_v1);?><li>

                            <a href="<?php echo ($link); ?>" class="grey"><?php echo ($nav_name); ?></a>

                        </li><?php endforeach; ?>

                </ul>

            </div>

        </div> -->

        <div class="grid_2">

            <h5>

                <?php echo (L("T_LINKS")); ?>

            </h5>

            <div class="list-type-footer">

                <ul>

                    <?php $__m_link=M("link");$__link_list=$__m_link->where('display=1')->order('sort DESC')->limit(12)->select();foreach($__link_list as $_lk=>$_lv):extract($_lv);?><li>

                        <a href="<?php echo ($link); ?>" class="grey" <?php if($target == 2): ?>target='_blank'<?php endif; ?> title='<?php echo ($title); ?>'><img src="<?php echo ($imagepath); ?>" alt="<?php echo ($title); ?>"/></a>

                    </li><?php endforeach; ?>

                </ul>

            </div>

        </div>

        <!-- <div class="grid_2">

            <h5>

                关注微博

            </h5>

            <div class="list-type-footer">

                <a href="http://weibo.com/522504678" target="_blank"><img src="/Public/Home/images/logo_ft_1.png"> </a>

            </div>

        </div>

        <div class="grid_3 latest_posts">

            <h5>

                关注微信

            </h5>

            <div class="list-type-footer">

                <img src="/Public/Home/images/weixin.jpg" width="110" height="110">

            </div>

        </div>

        <div class="grid_3">

            <h5>

                Contact Details

            </h5>

            <div class="list-type-footer">

                <p class="grey">

                    CONIST

                </p><br />

                <p class="grey">


                </p><br />

                <p class="grey">

                    QQ群:  <a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=d58a5cb1a5297cd53db318b24cf5de264a68c7869f29c7c659b86d6ad80debca"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="Conist php技术交流群" title="Conist php技术交流群"></a>

                </p><br />

                <p class="grey">

                    Email: <a href="conist@conist.com" class="grey">conist@conist.com</a>

                </p>

            </div>

        </div> -->

    </div>

</div><!-- FOOTER MIDDLE -->



<div class="footer"><!-- FOOTER -->

    <div class="container_12">

        <div class="grid_6">

            <p class="copyright">

                &copy; Copyright &copy; 2015.<a target="_blank" href="www.xsdpos.com">www.xsdpos.com</a> All rights reserved.

            </p>

        </div>

        <!-- <div class="grid_6">

            <div class="social-box">

                <a href="#"><img src="/Public/Home/images/social_facebook.png" width="19" height="18" alt="" /></a> <a href="#"><img src="/Public/Home/images/social_twitter.png" width="19" height="18" alt="" /></a> <a href="#"><img src="/Public/Home/images/social_flickr.png" width="19" height="18" alt="" /></a> <a href="#"><img src="/Public/Home/images/social_linkedin.png" width="19" height="19" alt="" /></a> <a href="#"><img src="/Public/Home/images/social_dribble.png" width="19" height="18" alt="" /></a>

            </div>

        </div> -->

    </div>

</div><!-- END FOOTER -->

</body></html>