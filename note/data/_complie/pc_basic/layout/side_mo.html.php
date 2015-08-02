<?php /* Template_ 2.2.7 2015/07/30 21:56:05 G:\web\work\note\eyoom\theme\pc_basic\layout\side_mo.html 000001606 */  $this->include_("eb_outlogin","eb_poll","eb_popular","eb_visit");?>
<?php if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 ?>
<div class="ebm-sidebar-mb-in">
<div class="margin-bottom-30"></div>
<div class="margin-bottom-20">
<?php echo eb_outlogin($TPL_VAR["eyoom"]["outlogin_skin"])?>
</div>
<div class="margin-bottom-20">
<?php if($TPL_VAR["eyoom"]["use_gnu_poll"]=='y'){?><?php echo poll('basic')?><?php }else{?><?php echo eb_poll($TPL_VAR["eyoom"]["poll_skin"])?><?php }?>
</div>
<div class="margin-bottom-20">
<?php echo $TPL_VAR["latest"]->latest_rankset('basic','10')?>
</div>
<div  class="margin-bottom-20">
<?php if($TPL_VAR["eyoom"]["use_gnu_popular"]=='y'){?><?php echo popular('basic')?><?php }else{?><?php echo eb_popular($TPL_VAR["eyoom"]["popular_skin"])?><?php }?>
</div>
<div class="margin-bottom-20">
<?php if($TPL_VAR["eyoom"]["use_gnu_visit"]=='y'){?><?php echo visit('basic')?><?php }else{?><?php echo eb_visit($TPL_VAR["eyoom"]["visit_skin"])?><?php }?>
</div>
<div class="t-right">
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
<div class="margin-bottom-20"></div>
</div>