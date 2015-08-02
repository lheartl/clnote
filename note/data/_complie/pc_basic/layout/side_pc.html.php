<?php /* Template_ 2.2.7 2015/07/30 21:56:05 G:\web\work\note\eyoom\theme\pc_basic\layout\side_pc.html 000002488 */  $this->include_("eb_outlogin","eb_poll","eb_popular");
$TPL_sidemenu_1=empty($TPL_VAR["sidemenu"])||!is_array($TPL_VAR["sidemenu"])?0:count($TPL_VAR["sidemenu"]);?>
<?php if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 ?>
<div class="margin-bottom-20">
<?php if($TPL_VAR["eyoom"]["use_gnu_outlogin"]=='y'){?><?php echo outlogin('basic')?><?php }else{?><?php echo eb_outlogin($TPL_VAR["eyoom"]["outlogin_skin"])?><?php }?>
</div>
<?php if(!defined('_INDEX_')){?>
<div class="headline"><h5>Side Menu</h5></div>
<div class="margin-bottom-20">
<ul class="list-group sidebar-nav" id="sidebar-nav">
<?php if($TPL_sidemenu_1){foreach($TPL_VAR["sidemenu"] as $TPL_K1=>$TPL_V1){
$TPL_submenu_2=empty($TPL_V1["submenu"])||!is_array($TPL_V1["submenu"])?0:count($TPL_V1["submenu"]);?>
<li class="list-group-item list-toggle <?php if($TPL_V1["active"]){?>active<?php }?>">
<a <?php if($TPL_V1["submenu"]){?>data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-<?php echo $TPL_K1?>"<?php }else{?>href="<?php echo $TPL_V1["me_link"]?>" target="_<?php echo $TPL_V1["me_target"]?>"<?php }?>><?php echo $TPL_V1["me_name"]?></a>
<ul id="collapse-<?php echo $TPL_K1?>" class="collapse <?php if($TPL_V1["active"]){?>in<?php }?>">
<?php if($TPL_submenu_2){foreach($TPL_V1["submenu"] as $TPL_V2){?>
<li class="<?php if($TPL_V2["active"]){?>active<?php }?>"><?php if($TPL_V2["new"]){?><span class="badge badge-e badge-red">new</span><?php }?><a href="<?php echo $TPL_V2["me_link"]?>" target="_<?php echo $TPL_V2["me_target"]?>"><?php if($TPL_V2["active"]){?><i class="fa fa-chevron-circle-right"></i><?php }else{?><i class="fa fa-circle"></i><?php }?> <?php echo $TPL_V2["me_name"]?></a></li>
<?php }}?>
</ul>
</li>
<?php }}?>
</ul>
</div>
<?php }?>
<div class="margin-bottom-20">
<?php echo $TPL_VAR["latest"]->latest_newpost('ebp_np_basic','count=6||cut_subject=17||cut_content=20')?>
</div>
<div class="margin-bottom-20">
<?php if($TPL_VAR["eyoom"]["use_gnu_poll"]=='y'){?><?php echo poll('basic')?><?php }else{?><?php echo eb_poll($TPL_VAR["eyoom"]["poll_skin"])?><?php }?>
</div>
<div class="margin-bottom-20">
<?php echo $TPL_VAR["latest"]->latest_rankset('basic','10')?>
</div>
<div>
<?php if($TPL_VAR["eyoom"]["use_gnu_popular"]=='y'){?><?php echo popular('basic')?><?php }else{?><?php echo eb_popular($TPL_VAR["eyoom"]["popular_skin"])?><?php }?>
</div>