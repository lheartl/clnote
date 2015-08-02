<?php /* Template_ 2.2.7 2015/07/30 21:42:45 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\hotpost\basic\latest.skin.html 000001171 */ 
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
<span class="sound_only">댓글</span><small class="color-red"> +<?php echo $TPL_V1["wr_comment"]?></small><span class="sound_only">개</span>
<?php }?>
</a>
</td>
<td class="t-center color-red"><?php echo number_format($TPL_V1["wr_hit"])?></td>
</tr>
<?php }}?>
</tbody>
</table>
</div>
</div>
<style>
.hot-post .eb-table th {text-align:center}
</style>