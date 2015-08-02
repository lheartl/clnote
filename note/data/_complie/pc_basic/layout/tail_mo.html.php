<?php /* Template_ 2.2.7 2015/07/30 21:56:11 G:\web\work\note\eyoom\theme\pc_basic\layout\tail_mo.html 000002241 */ ?>
<?php if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 ?>
<?php if(!$GLOBALS["wmode"]){?>
</div>
<div class="ebm-footer">
<p><a href="<?php echo $TPL_VAR["href"]?>">PC버전</a> <span class="right">Copyright &copy; <?php echo $TPL_VAR["config"]["cf_title"]?>. All Rights Reserved.</span></p>
<div class="clear"></div>
</div>
</div>
<aside class="ebm-sidebar-mb">
<div class="ebm-sidebar-mb-title">
<div class="ebm-toggle-btn">
<a class="ebm-sidebar-close"><i class="fa fa-close"></i></a>
</div>
<h5>MEMBER & SITE <span class="color-red">INFO</span></h5>
</div>
<div class="ebm-sidebar-mb-scroll scrollable">
<?php $this->print_("side_mo",$TPL_SCP,1);?>
</div>
</aside>
</div>
<?php $this->print_("misc_mo",$TPL_SCP,1);?>
<?php }?>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/back-to-top.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/jquery.form.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/app.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js_mo/snap.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js_mo/app_mo.js"></script>
<script>
jQuery(document).ready(function() {
App.init();
App.initTooltip();
});
</script>
<!--[if lt IE 9]>
<script src="/eyoom/theme/pc_basic/js/respond.js"></script>
<script src="/eyoom/theme/pc_basic/js/html5shiv.js"></script>
<script src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/sky-forms-ie8.js"></script>
<![endif]-->
<?php $this->print_("tail_sub",$TPL_SCP,1);?>