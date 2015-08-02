<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\latest\ebp_image_slider\latest.skin.html 000003424 */ 
$TPL_loop_1=empty($TPL_VAR["loop"])||!is_array($TPL_VAR["loop"])?0:count($TPL_VAR["loop"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="ebp-image-slider">
<div class="owl-navi">
<a class="owl-btn prev-1"><i class="fa fa-angle-left"></i></a>
<a class="owl-btn next-1"><i class="fa fa-angle-right"></i></a>
</div>
<div class="owl-slider-1">
<?php if($TPL_loop_1){foreach($TPL_VAR["loop"] as $TPL_V1){?>
<article class="item">
<?php if($TPL_V1["image"]){?>
<a href="<?php echo $TPL_V1["href"]?>"><img class="img-responsive" src="<?php echo $TPL_V1["image"]?>" alt=""></a>
<?php }else{?>
<a href="<?php echo $TPL_V1["href"]?>" class="no-image">No Image</a>
<?php }?>
<?php if($TPL_V1["wr_subject"]){?>
<a class="item-subj ellipsis" href="<?php echo $TPL_V1["href"]?>"><?php echo $TPL_V1["wr_subject"]?> <?php if($TPL_V1["wr_comment"]){?><span class="color-yellow font-size-11">+<?php echo number_format($TPL_V1["wr_comment"])?></span><?php }?></a>
<?php }?>
</article>
<?php }}else{?>
<article class="item">
<a href="#" class="no-image">No Image</a>
<a class="item-subj ellipsis" href="#">Sample <span class="color-yellow font-size-11">+3</span></a>
</article>
<article class="item">
<a href="#" class="no-image">No Image</a>
<a class="item-subj ellipsis" href="#">Sample <span class="color-yellow font-size-11">+3</span></a>
</article>
<article class="item">
<a href="#" class="no-image">No Image</a>
<a class="item-subj ellipsis" href="#">Sample <span class="color-yellow font-size-11">+3</span></a>
</article>
<article class="item">
<a href="#" class="no-image">No Image</a>
<a class="item-subj ellipsis" href="#">Sample <span class="color-yellow font-size-11">+3</span></a>
</article>
<?php }?>
</div>
</div>
<style>
.ebp-image-slider {position:relative;overflow:hidden;display:block}
.ebp-image-slider .item{position:relative;overflow:hidden;margin:1px;background:#54545a;text-align:center;min-height:100px;max-height:200px}
.ebp-image-slider .owl-navi a.owl-btn {color:#000;width:34px;height:34px;font-size:16px;cursor:pointer;line-height:34px;text-align:center;display:inline-block;opacity:0.7;background:#fff}
.ebp-image-slider .owl-navi a.owl-btn:hover {color:#fff;opacity:0.7;background:#000;-webkit-transition:all 0.2s ease-in-out;-moz-transition:all 0.2s ease-in-out;-o-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out}
.ebp-image-slider .owl-navi a.owl-btn.prev-1 {position:absolute;top:50%;left:0;z-index:1;margin-top:-17px;margin-left:3px}
.ebp-image-slider .owl-navi a.owl-btn.next-1 {position:absolute;top:50%;right:0;z-index:1;margin-top:-17px;margin-right:2px}
.ebp-image-slider a.item-subj {position:absolute;left:0;bottom:0;color:#fff;width:100%;padding:5px 10px;text-align:center;background:#000;-ms-filter:"progid: DXImageTransform.Microsoft.Alpha(Opacity=70)";filter:alpha(opacity=70);opacity:0.7}
.ebp-image-slider a.no-image {font-size:20px;line-height:200px;color:#fff}
</style>
<script>
$(document).ready(function() {
var owl = jQuery(".owl-slider-1");
owl.owlCarousel({
autoPlay : 4000,
items : [2],
itemsDesktop : [1199,2],
itemsMobile : false,
slideSpeed: 300,
pagination: false
});
jQuery(".next-1").click(function(){
owl.trigger('owl.next');
})
jQuery(".prev-1").click(function(){
owl.trigger('owl.prev');
})
});
</script>