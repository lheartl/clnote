<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\latest\ebp_basic\latest.skin.html 000003084 */ 
$TPL_loop_1=empty($TPL_VAR["loop"])||!is_array($TPL_VAR["loop"])?0:count($TPL_VAR["loop"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="headline">
<h5><?php echo $TPL_VAR["title"]?></h5>
</div>
<div class="ebp-basic">
<ul>
<?php if($TPL_loop_1){foreach($TPL_VAR["loop"] as $TPL_V1){?>
<li>
<div class="basic-subj left ellipsis">
<i class="fa fa-file-text-o <?php if($TPL_V1["new"]){?>color-red<?php }?>"></i> <a href="<?php echo $TPL_V1["href"]?>"><?php echo $TPL_V1["wr_subject"]?></a> <?php if($TPL_V1["wr_comment"]){?><span class="color-red font-size-11">+<?php echo number_format($TPL_V1["wr_comment"])?></span><?php }?>
</div>
<div class="basic-view right t-right font-size-11 color-grey">
<?php echo number_format($TPL_V1["wr_hit"])?>
</div>
<div class="clear"></div>
</li>
<?php }}else{?>
<li>
<div class="basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">베이직 샘플 최신글입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="basic-view right t-right font-size-11 color-grey">8</div>
<div class="clear"></div>
</li>
<li>
<div class="basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">베이직 샘플 최신글입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="basic-view right t-right font-size-11 color-grey">8</div>
<div class="clear"></div>
</li>
<li>
<div class="basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">베이직 샘플 최신글입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="basic-view right t-right font-size-11 color-grey">8</div>
<div class="clear"></div>
</li>
<li>
<div class="basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">베이직 샘플 최신글입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="basic-view right t-right font-size-11 color-grey">8</div>
<div class="clear"></div>
</li>
<li>
<div class="basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">베이직 샘플 최신글입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="basic-view right t-right font-size-11 color-grey">8</div>
<div class="clear"></div>
</li>
<li>
<div class="basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">베이직 샘플 최신글입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="basic-view right t-right font-size-11 color-grey">8</div>
<div class="clear"></div>
</li>
<?php }?>
</ul>
</div>
<style>
.ebp-basic {display:block;overflow:hidden}
.ebp-basic ul {list-style:none;margin:0;padding:0}
.ebp-basic li {padding:4px 0;border-bottom:1px dotted #ddd}
.ebp-basic li i {padding-left:2px;padding-right:3px;color:#a4a4aa}
.ebp-basic li i.color-red {color:#bf1143}
.ebp-basic li:last-child {border-bottom:0}
.ebp-basic .basic-subj {width:80%}
.ebp-basic .basic-view {width:20%}
</style>