<?php /* Template_ 2.2.7 2015/07/30 21:42:45 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\latest\ebm_notice\latest.skin.html 000001568 */ 
$TPL_loop_1=empty($TPL_VAR["loop"])||!is_array($TPL_VAR["loop"])?0:count($TPL_VAR["loop"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="ebm-notice">
<div class="owl-slider-2">
<?php if($TPL_loop_1){foreach($TPL_VAR["loop"] as $TPL_V1){?>
<div class="item">
<div class="notice-subj left ellipsis">
<span class="label label-e">알림</span> <a href="<?php echo $TPL_V1["href"]?>"><?php echo $TPL_V1["wr_subject"]?></a>
</div>
<?php if($TPL_V1["wr_comment"]){?>
<div class="notice-comment right">
<span class="color-red font-size-11">+<?php echo number_format($TPL_V1["wr_comment"])?>&nbsp;</span>
</div>
<?php }else{?>
<div class="notice-comment right">
<span class="color-red font-size-11">-&nbsp;</span>
</div>
<?php }?>
<div class="clear"></div>
</div>
<?php }}else{?>
<div class="item">
<div class="notice-subj left ellipsis">
<span class="label label-e">알림</span> <a href="#">게시물이 없습니다.</a>
</div>
<div class="notice-comment right">
<span class="color-red font-size-11">-&nbsp;</span>
</div>
<div class="clearfix"></div>
</div>
<?php }?>
</div>
</div>
<style>
.ebm-notice {display:block;overflow:hidden}
.ebm-notice .notice-subj {width:83%}
.ebm-notice .notice-comment {width:17%;text-align:right}
</style>
<script>
$(document).ready(function() {
$(".owl-slider-2").owlCarousel({
autoPlay : 5000,
items : [1],
itemsDesktop : [1199,1],
itemsMobile : [768,1],
pagination: false
});
});
</script>