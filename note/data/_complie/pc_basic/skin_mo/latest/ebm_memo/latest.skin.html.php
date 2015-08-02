<?php /* Template_ 2.2.7 2015/07/30 21:42:45 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\latest\ebm_memo\latest.skin.html 000004149 */ 
$TPL_loop_1=empty($TPL_VAR["loop"])||!is_array($TPL_VAR["loop"])?0:count($TPL_VAR["loop"]);?>
<?php if (!defined('_GNUBOARD_')) exit;
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/scrollbar/src/perfect-scrollbar.css" id="style_color" type="text/css" media="screen">',0);
?>
<li class="dropdown dropdown-extended dropdown-memo">
<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
쪽지
<span class="badge rounded-2x badge-e badge-dark"><?php echo $GLOBALS["memo_not_read"]?></span>
</a>
<ul class="dropdown-menu">
<li class="external">
<h5>미확인 <span class="color-red"><?php echo $GLOBALS["memo_not_read"]?>건</span> 쪽지가 있습니다.</h5>
<a href="<?php echo G5_BBS_URL?>/memo.php" target="_blank" class="win_memo">more</a>
</li>
<li>
<ul class="dropdown-menu-list contentHolder" style="height: 275px;">
<?php if($TPL_loop_1){foreach($TPL_VAR["loop"] as $TPL_V1){?>
<?php if($TPL_V1["is_read"]){?>
<li class="read-disable">
<?php }else{?>
<li>
<?php }?>
<a href="<?php echo $TPL_V1["href"]?>" target="_blank" class="win_memo">
<?php if($TPL_VAR["photo"]=='y'){?>
<span class="photo">
<?php if($TPL_V1["mb_photo"]){?><?php echo $TPL_V1["mb_photo"]?><?php }else{?><span class="user_icon"><i class="fa fa-user memo-photo"></i></span><?php }?>
</span>
<?php }?>
<span class="description">
<span class="from color-black"><?php echo $TPL_V1["mb_name"]?></span>
</span>
<span class="subject ellipsis"><?php echo $TPL_V1["memo"]?></span>
<span class="time"><?php if($TPL_V1["is_read"]){?>읽음<?php }else{?><strong class="color-red">읽지않음</strong><?php }?> <?php echo $TPL_VAR["eb"]->date_time('Y-m-d H:i',$TPL_V1["datetime"])?></span>
<div class="clear"></div>
</a>
</li>
<?php }}else{?>
<p class="t-center margin-top-20">확인하지 않은 쪽지가 없습니다.</p>
<?php }?>
</ul>
</li>
</ul>
</li>
<style>
.topbar li.dropdown-memo .dropdown-menu .dropdown-menu-list > li a .details {overflow:hidden}
.topbar li.dropdown-memo > .dropdown-menu .dropdown-menu-list > li a {border-top:1px dotted #e5e5e5}
.topbar li.dropdown-memo > .dropdown-menu .dropdown-menu-list > li.read-disable a {color:#bbb !important}
.topbar li.dropdown-memo > .dropdown-menu .dropdown-menu-list > li.read-disable span {color:#bbb !important}
.topbar li.dropdown-memo > .dropdown-menu .dropdown-menu-list > li:first-child a {border-top:0}
.topbar li.dropdown-memo > .dropdown-menu .dropdown-menu-list > li .photo {float:left;margin:0 10px 10px 0}
.topbar li.dropdown-memo > .dropdown-menu .dropdown-menu-list > li .photo img {height:28px;width:28px;-webkit-border-radius:50% !important;-moz-border-radius:50% !important;-ms-border-radius:50% !important;-o-border-radius:50% !important;border-radius:50% !important}
.topbar li.dropdown-memo > .dropdown-menu .dropdown-menu-list > li .photo .memo-photo {height:28px;width:28px;font-size:16px;line-height:28px;text-align:center;background:#eee;color:#84848a;-webkit-border-radius:50% !important;-moz-border-radius:50% !important;-ms-border-radius:50% !important;-o-border-radius:50% !important;border-radius:50% !important}
.topbar li.dropdown-memo > .dropdown-menu .dropdown-menu-list > li .description {display:block;margin-left:38px}
.topbar li.dropdown-memo > .dropdown-menu .dropdown-menu-list > li .description .from {font-size:12px;font-weight:600}
.topbar li.dropdown-memo > .dropdown-menu .dropdown-menu-list > li .subject {display:block !important;font-size:12px;line-height:1.3;margin-left:38px;margin-top:5px}
.topbar li.dropdown-memo .dropdown-menu .dropdown-menu-list > li a .time {display:block !important;font-size:10px;color:#999;float:right;margin-top:5px}
</style>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/scrollbar/src/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/scrollbar/src/perfect-scrollbar.js"></script>
<script>
jQuery(document).ready(function ($) {
"use strict";
$('.contentHolder').perfectScrollbar();
});
</script>