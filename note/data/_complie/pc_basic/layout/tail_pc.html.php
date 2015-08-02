<?php /* Template_ 2.2.7 2015/07/30 21:56:05 G:\web\work\note\eyoom\theme\pc_basic\layout\tail_pc.html 000005328 */  $this->include_("eb_visit");?>
<?php if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 ?>
<?php if(!$GLOBALS["wmode"]){?>
</div><!--//end content-->
<?php if((defined('_INDEX_')&&$TPL_VAR["eyoom"]["use_main_side_layout"]=='y')||(!defined('_INDEX_')&&$TPL_VAR["eyoom"]["use_sub_side_layout"]=='y')){?>
<?php if($TPL_VAR["eyoom"]["pos_side_layout"]=='right'){?>
<div class="side-right">
<?php $this->print_("side_pc",$TPL_SCP,1);?>
</div>
<?php }?>
<?php }?>
<div class="clear"></div>
</div><!--//end container-->
</div><!--//end eb-body-->
<footer class="footer">
<div class="container">
<div class="footer-col">
<div class="footer-col-space">
<div class="logo margin-bottom-5">
<?php if( 1){?>
<a href="<?php echo G5_URL?>"><?php echo $TPL_VAR["config"]["cf_title"]?></a>
<?php }else{?>
<a class="navbar-brand" href="<?php echo G5_URL?>"><img src="/eyoom/theme/pc_basic/image/site_logo.png" style="height:26px" alt="<?php echo $TPL_VAR["config"]["cf_title"]?> LOGO"></a>
<?php }?>
</div>
<div class="eb-con-box margin-bottom-15">
<p><span class="font-size-12">사이트 소개...<br>하단영역의 수정은 테마 /layout/tail_pc.html에서 수정합니다.</span></p>
</div>
<div class="eb-social-icon">
<ul>
<li class="social-facebook"><a target="_blank" href="#">Facebook</a></li>
<li class="social-twitter"><a target="_blank" href="#">Twitter</a></li>
<li class="social-google"><a target="_blank" href="#">Google Plus</a></li>
<li class="social-tumblr"><a target="_blank" href="#">Tumblr</a></li>
<li class="social-instagram"><a target="_blank" href="#">Instagram</a></li>
</ul>
</div>
</div>
</div>
<div class="footer-col">
<div class="footer-col-space">
<?php if($TPL_VAR["eyoom"]["use_gnu_visit"]=='y'){?><?php echo visit('basic')?><?php }else{?><?php echo eb_visit($TPL_VAR["eyoom"]["visit_skin"])?><?php }?>
</div>
</div>
<div class="footer-col">
<div class="footer-col-space">
<div class="headline"><h5>Information</h5></div>
<ul class="list-unstyled link-list">
<li>
<a href="<?php echo G5_URL?>/page/?pid=aboutus">About us</a><i class="fa fa-angle-right"></i><div class="clear"></div>
</li>
<li>
<a href="<?php echo G5_URL?>/page/?pid=provision">이용약관</a><i class="fa fa-angle-right"></i><div class="clear"></div>
</li>
<li>
<a href="<?php echo G5_URL?>/page/?pid=privacy">개인정보 취급방침</a><i class="fa fa-angle-right"></i><div class="clear"></div>
</li>
<li>
<a href="<?php echo G5_URL?>/page/?pid=noemail">이메일 무단수집거부</a><i class="fa fa-angle-right"></i><div class="clear"></div>
</li>
<li>
<a href="<?php echo G5_URL?>/page/?pid=contactus">Contact Us</a><i class="fa fa-angle-right"></i><div class="clear"></div>
</li>
<li>
<a href="<?php echo $TPL_VAR["href"]?>">모바일버전</a><i class="fa fa-angle-right"></i><div class="clear"></div>
</li>
</ul>
</div>
</div>
<div class="footer-col">
<div class="footer-col-space">
<div class="headline"><h5>Contact Us</h5></div>
<address>
<p><i class="fa fa-home"></i><?php echo $TPL_VAR["config"]["cf_title"]?></p>
<p><i class="fa fa-building"></i>사이트 정보 1</p>
<p><i class="fa fa-phone"></i>사이트 정보 2</p>
<p><i class="fa fa-globe"></i>사이트 정보 3</p>
<p><i class="fa fa-info-circle"></i>사이트 정보 4</p>
<p><i class="fa fa-envelope"></i>Email: <a href="mailto:webmaster@site.name">webmaster@site.name</a></p>
</address>
</div>
</div>
</div>
</footer>
<div class="copyright">
<div class="container">
<p class="t-center">Copyright &copy; <?php echo $TPL_VAR["config"]["cf_title"]?>. All Rights Reserved.</p>
</div>
</div>
</div><!--//end wide-layout or boxed-layout-->
</div><!--//end wrapper-->
<?php }?>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/back-to-top.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/jquery.form.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/counter/waypoints.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/counter/jquery.counterup.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/jquery.bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/jquery.sticky.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/app.js"></script>
<script>
jQuery(document).ready(function() {
App.init();
App.initCounter();
App.initNavfix();
App.initTooltip();
});
</script>
<!--[if lt IE 9]>
<script src="/eyoom/theme/pc_basic/js/respond.js"></script>
<script src="/eyoom/theme/pc_basic/js/html5shiv.js"></script>
<script src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/sky-forms-ie8.js"></script>
<![endif]-->
<?php $this->print_("tail_sub",$TPL_SCP,1);?>