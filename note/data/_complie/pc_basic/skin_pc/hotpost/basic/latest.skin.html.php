<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\hotpost\basic\latest.skin.html 000002064 */ 
$TPL_loop_1=empty($TPL_VAR["loop"])||!is_array($TPL_VAR["loop"])?0:count($TPL_VAR["loop"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="hot-post">
<div class="headline"><h5>월간베스트</h5></div>
<div class="margin-top-20">
<table class="eb-table eb-table-hover">
<thead>
<tr>
<th>랭킹</th>
<th>제목</th>
<?php if($TPL_VAR["photo"]=='y'){?>
<th>포토</th>
<?php }?>
<th>글쓴이</th>
<th>날짜</th>
<th>조회</th>
</tr>
</thead>
<tbody>
<?php if($TPL_loop_1){foreach($TPL_VAR["loop"] as $TPL_K1=>$TPL_V1){?>
<tr>
<td class="t-center">
<strong><span class="badge badge-dark"><?php echo $TPL_K1+ 1?></span></strong>
</td>
<td class="td-subject">
<a href="<?php echo $TPL_V1["href"]?>">
<?php echo $TPL_V1["wr_subject"]?>
<?php if($TPL_V1["wr_comment"]){?>
<span class="sound_only">댓글</span><em> <?php echo $TPL_V1["wr_comment"]?></em><span class="sound_only">개</span>
<?php }?>
</a>
</td>
<?php if($TPL_VAR["photo"]=='y'){?>
<td class="post-photo td-width-10">
<?php if($TPL_V1["mb_photo"]){?><?php echo $TPL_V1["mb_photo"]?><?php }else{?><div class="user_icon"><i class="fa fa-user"></i></div><?php }?>
</td>
<?php }?>
<td class="t-center"><?php echo $TPL_V1["mb_nick"]?></td>
<td class="t-center"><?php echo $TPL_VAR["eb"]->date_time('Y.m.d',$TPL_V1["datetime"])?></td>
<td class="t-center color-red"><?php echo number_format($TPL_V1["wr_hit"])?></td>
</tr>
<?php }}?>
</tbody>
</table>
</div>
</div>
<style>
.hot-post .eb-table th {text-align:center}
.hot-post .post-photo {overflow:hidden;text-align:center}
.hot-post .post-photo img {-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;width:28px;height:28px}
.hot-post .post-photo i {-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;width:28px;height:28px;line-height:28px;background:#eee;font-size:16px;color:#84848a;text-align:center}
</style>