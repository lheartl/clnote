<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\newpost\ebp_np_basic\latest.skin.html 000005508 */ 
$TPL_write_1=empty($TPL_VAR["write"])||!is_array($TPL_VAR["write"])?0:count($TPL_VAR["write"]);
$TPL_comment_1=empty($TPL_VAR["comment"])||!is_array($TPL_VAR["comment"])?0:count($TPL_VAR["comment"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="headline">
<h5>새로 등록된 글</h5>
</div>
<div class="ebp-np-basic margin-bottom-20">
<ul>
<?php if($TPL_write_1){foreach($TPL_VAR["write"] as $TPL_V1){?>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-file-text-o <?php if($TPL_V1["new"]){?>color-red<?php }?>"></i> <a href="<?php echo $TPL_V1["href"]?>"><?php echo $TPL_V1["wr_subject"]?></a> <?php if($TPL_V1["wr_comment"]){?><span class="color-red font-size-11">+<?php echo number_format($TPL_V1["wr_comment"])?></span><?php }?>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">
<?php echo $TPL_V1["mb_nick"]?>
</div>
<div class="clear"></div>
</li>
<?php }}else{?>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">새로 등록된 글 샘플입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">새로 등록된 글 샘플입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">새로 등록된 글 샘플입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">새로 등록된 글 샘플입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">새로 등록된 글 샘플입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-file-text-o"></i> <a href="#">새로 등록된 글 샘플입니다.</a> <span class="color-red font-size-11">+3</span>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<?php }?>
</ul>
</div>
<div class="headline">
<h5>새로 등록된 댓글</h5>
</div>
<div class="ebp-np-basic">
<ul>
<?php if($TPL_comment_1){foreach($TPL_VAR["comment"] as $TPL_V1){?>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-comments-o <?php if($TPL_V1["new"]){?>color-red<?php }?>"></i> <a href="<?php echo $TPL_V1["href"]?>"><?php echo $TPL_V1["wr_subject"]?></a>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">
<?php echo $TPL_V1["mb_nick"]?>
</div>
<div class="clear"></div>
</li>
<?php }}else{?>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-comments-o"></i> <a href="#">새로 등록된 댓글 샘플입니다.</a>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-comments-o"></i> <a href="#">새로 등록된 댓글 샘플입니다.</a>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-comments-o"></i> <a href="#">새로 등록된 댓글 샘플입니다.</a>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-comments-o"></i> <a href="#">새로 등록된 댓글 샘플입니다.</a>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-comments-o"></i> <a href="#">새로 등록된 댓글 샘플입니다.</a>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<li>
<div class="np-basic-subj left ellipsis">
<i class="fa fa-comments-o"></i> <a href="#">새로 등록된 댓글 샘플입니다.</a>
</div>
<div class="np-basic-mb right t-right font-size-11 color-grey ellipsis">닉네임</div>
<div class="clear"></div>
</li>
<?php }?>
</ul>
</div>
<style>
.ebp-np-basic {display:block;overflow:hidden}
.ebp-np-basic ul {list-style:none;margin:0;padding:0}
.ebp-np-basic li {padding:4px 0;border-bottom:1px dotted #ddd}
.ebp-np-basic li i {padding-left:2px;padding-right:3px;color:#a4a4aa}
.ebp-np-basic li i.color-red {color:#bf1143}
.ebp-np-basic li:last-child {border-bottom:0}
.ebp-np-basic .np-basic-subj {width:75%}
.ebp-np-basic .np-basic-mb {width:25%}
</style>