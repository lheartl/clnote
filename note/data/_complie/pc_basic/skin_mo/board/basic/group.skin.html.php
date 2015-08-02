<?php /* Template_ 2.2.7 2015/07/30 21:42:45 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\board\basic\group.skin.html 000001731 */ 
$TPL_list_1=empty($TPL_VAR["list"])||!is_array($TPL_VAR["list"])?0:count($TPL_VAR["list"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<?php if($TPL_list_1){foreach($TPL_VAR["list"] as $TPL_V1){
$TPL_data_2=empty($TPL_V1["data"])||!is_array($TPL_V1["data"])?0:count($TPL_V1["data"]);?>
<div class="eb-con-box">
<div class="headline">
<h4><a href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $TPL_V1["bo_table"]?>"><?php echo $TPL_V1["bo_subject"]?></a></h4>
</div>
<div class="ebm-basic">
<ul>
<?php if($TPL_data_2){foreach($TPL_V1["data"] as $TPL_V2){?>
<li>
<div class="basic-subj left ellipsis">
<i class="fa fa-file-text-o <?php if($TPL_V1["new"]){?>color-red<?php }?>"></i> <a href="<?php echo $TPL_V2["href"]?>"><?php echo $TPL_V2["wr_subject"]?></a> <?php if($TPL_V2["wr_comment"]){?><span class="color-red font-size-11">+<?php echo number_format($TPL_V2["wr_comment"])?></span><?php }?>
</div>
<div class="basic-view right t-right font-size-11 color-grey">
<?php echo number_format($TPL_V2["wr_hit"])?>
</div>
<div class="clear"></div>
</li>
<?php }}else{?>
<p class="t-center">게시물이 없습니다.</p>
<?php }?>
</ul>
</div>
</div>
<div class="margin-bottom-20"></div>
<?php }}?>
<style>
.ebm-basic {display:block;overflow:hidden}
.ebm-basic ul {list-style:none;margin:0;padding:0}
.ebm-basic li {padding:4px 0;border-bottom:1px dotted #ddd}
.ebm-basic li i {padding-left:2px;padding-right:3px;color:#a4a4aa}
.ebm-basic li i.color-red {color:#bf1143}
.ebm-basic li:last-child {border-bottom:0}
.ebm-basic .basic-subj {width:80%}
.ebm-basic .basic-view {width:20%}
</style>