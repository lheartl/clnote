<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\paging\basic\paging.skin.html 000001545 */ 
$TPL_paging_1=empty($TPL_VAR["paging"])||!is_array($TPL_VAR["paging"])?0:count($TPL_VAR["paging"]);?>
<?php if (!defined("_GNUBOARD_")) exit;?>
<div class="t-center margin-top-20">
<ul class="eb-pagination">
<li><a href="<?php echo $TPL_VAR["url"]?>1<?php echo $TPL_VAR["add"]?>"><i class="fa fa-step-backward"></i></a></li>
<li><a href="<?php echo $TPL_VAR["url"]?><?php if(($TPL_VAR["cur_page"]- 1)<= 0){?>1<?php }else{?><?php echo ($TPL_VAR["cur_page"]- 1)?><?php }?><?php echo $TPL_VAR["add"]?>"><i class="fa fa-angle-left"></i></a></li>
<?php if($TPL_paging_1){foreach($TPL_VAR["paging"] as $TPL_K1=>$TPL_V1){?>
<li <?php if($TPL_V1["on"]){?>class="eb-active"<?php }?>><a href="<?php echo $TPL_V1["url"]?>"><span><?php echo $TPL_K1?><span class="sound_only">페이지</span></span></a></li>
<?php }}else{?>
<li class="eb-active"><a href="<?php echo $TPL_VAR["url"]?>1<?php echo $TPL_VAR["add"]?>"><span>1<span class="sound_only">페이지</span></span></a></li>
<?php }?>
<li><a href="<?php echo $TPL_VAR["url"]?><?php if(($TPL_VAR["cur_page"]+ 1)>$TPL_VAR["total_page"]){?><?php echo $TPL_VAR["total_page"]?><?php }else{?><?php echo ($TPL_VAR["cur_page"]+ 1)?><?php }?><?php echo $TPL_VAR["add"]?>"><i class="fa fa-angle-right"></i></a></li>
<li><a href="<?php echo $TPL_VAR["url"]?><?php echo $TPL_VAR["total_page"]?><?php echo $TPL_VAR["add"]?>"><i class="fa fa-step-forward"></i></a></li>
</ul>
</div>