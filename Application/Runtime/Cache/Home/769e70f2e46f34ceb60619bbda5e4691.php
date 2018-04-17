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
                    [<a href="/index.php/Home/Index?l=zh-cn" style='cursor:pointer;' title='简体中文'>简体中文</a>]
                    [<a href="/index.php/Home/Index?l=en-us" style='cursor:pointer;' title='English'>English</a>]
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

<link rel="stylesheet" href="/Public/Home/layerslider/css/layerslider.css" type="text/css" />

<!--[if lt IE 9]><script src="/Public/Home/js/html5.js"></script><![endif]-->

<div class="slider"><!-- SLIDER -->

    <div id="layerslider">

        <?php if(is_array($ad_info)): $i = 0; $__LIST__ = $ad_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="ls-layer">
        
                <a class="ls-a" href="<?php echo ($vo["ad_link"]); ?>" target="_blank"><img class="ls-bg" src="/Uploads/picture/<?php echo ($vo["ad_img"]); ?>" alt="<?php echo ($vo["ad_name"]); ?>"/></a>
        
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

    </div>


</div><!-- END SLIDER -->


<!-- <div class="main">MAIN

    <div class="container_12">

    <?php $__m_product=M("product"); $_m_product_list=$__m_product ->field("id,cid,title,update_time,status,published,image_id,psize,summary") ->where("is_recommend=1 AND status=1 AND lang='zh-cn'") ->order("id DESC") ->limit(3) ->select(); foreach ($_m_product_list as $key=>$pro):?><div class="grid_4">

            <a href="<?php echo U('product/read',array('id'=>$pro['id']));?>"><img src="<?php echo get_default_img($pro['image_id']);?>" alt="<?php echo ($pro["title"]); ?>" width="300" height="158" /></a>

            <h5 class="uppercase">

                <?php echo ($pro["title"]); ?>

            </h5>

            <p>

                <?php echo cutStr($pro['summary'],60,0);?>

            </p><a href="<?php echo U('product/read',array('id'=>$pro['id']));?>" class="link_bottom"><?php echo (L("T_VIEW")); ?></a>

        </div><?php endforeach;?>

        <div class="divider"></div>

    </div>

</div>END MAIN -->



<div class="subcontent"><!-- SUBCONTENT -->

    <div class="container_12 bg01">

		<div class="grid_03 inner">

			<div class="list-type-3">

				<div class="tit">

				<img src="/Public/Home/images/news.gif" alt="最新资讯"/>

				<h2>

				最新资讯 <em><small>NEWS</small></em>

				</h2>

				</div>

			    <ul>

			        <?php $__m_news=M("news"); $_news_list=$__m_news ->field("id,cid,title,update_time,image_id,status,published,summary") ->where("is_recommend=1 AND status=1 AND lang='zh-cn'") ->order("id DESC") ->limit(6) ->select(); foreach ($_news_list as $key=>$new):?><li>

			            <a href="<?php echo U('news/read',array('id'=>$new['id']));?>"><?php echo cutStr($new['title'],30,0);?></a>

			        </li><?php endforeach;?>

			    </ul>

			</div>

		</div>

		<div style="float:left;margin:0px 4px;padding-top:20px;">

		<img src="/Public/Home/images/index08.gif" alt=""/>

		</div>

        <div class="grid_03 inner">

            <div>

            	<div class="tit">

				<img src="/Public/Home/images/us.gif" alt="关于我们"/>

				<h2>

				关于我们 <em><small>ABOUT US</small></em>

				</h2>

				</div>

                <ul>

                    <li>

                        <p style="text-indent:2em;">
	<span style="line-height:2;"><a href="index.php/page/index/name/about" target="_blank">Q刷宝——专业提供便民支付服务的第三方专业化服务公司，拥有独立的第三方便民服务平台，提供便民支付服务，有独立的专业化运营团队保障业务运营。Q刷宝的客户端及刷卡器均通过中国银联相关机构的检测认证。公司旨在为个人及企业提供简单、方便、安全的综合移动支付产品与服务。</a></span> 
</p>

                    </li>

                </ul>

            </div>

        </div>

        <div style="float:left;padding-top:20px;margin:0px 4px;">

		<img src="/Public/Home/images/index08.gif" alt=""/>

		</div>

        <div class="grid_03 inner">

            <div>

            	<div class="tit">

				<img src="/Public/Home/images/bmfw.gif" alt="便民服务"/>

				<h2>

				便民服务 <em><small>SERVICE</small></em>

				</h2>

				</div>

                <ul>

                    <li>

                        <p style="text-indent:2em;">
	<a href="index.php/page/index/name/cpjs" target="_blank"><span style="line-height:2;">手机充值、余额查</span><span style="line-height:2;">询、信用卡还款、账号充 值、转账汇款、水电煤缴费、机票购买、火 车票购买等便民服务，让您足不出户，一次搞定。</span></a> 
</p>

                    </li>

                </ul>

            </div>

        </div>

	</div>

</div><!-- END SUBCONTENT -->





<script src="/Public/Home/layerslider/jQuery/jquery-easing-1.3.js" type="text/javascript"></script>

<script src="/Public/Home/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>

<script type="text/javascript">

    $(document).ready(function(){

        $('#layerslider').layerSlider({

            skinsPath : '/Public/Home/layerslider/skins/',

            animateFirstLayer: true,

            navPrevNext: true,

            navStartStop: false,

            navButtons: true,

            autoPlayVideos: false,

            skin : 'defaultskin'

        });

    });

</script>

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