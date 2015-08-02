<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\ranking\basic\rankset.skin.html 000004295 */ 
$TPL_rank_today_1=empty($TPL_VAR["rank_today"])||!is_array($TPL_VAR["rank_today"])?0:count($TPL_VAR["rank_today"]);
$TPL_rank_total_1=empty($TPL_VAR["rank_total"])||!is_array($TPL_VAR["rank_total"])?0:count($TPL_VAR["rank_total"]);
$TPL_rank_level_1=empty($TPL_VAR["rank_level"])||!is_array($TPL_VAR["rank_level"])?0:count($TPL_VAR["rank_level"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="latest-ranking-w">
<div class="tab-e1">
<div class="headline">
<h5><i class="fa fa-bar-chart"></i> Ranking</h5>
</div>
<ul class="nav nav-tabs">
<li class="active"><a href="#rank-1" data-toggle="tab">오늘<?php echo $TPL_VAR["levelset"]["gnu_name"]?></a></li>
<li class=""><a href="#rank-2" data-toggle="tab">전체<?php echo $TPL_VAR["levelset"]["gnu_name"]?></a></li>
<li class=""><a href="#rank-3" data-toggle="tab"><?php echo $TPL_VAR["levelset"]["eyoom_name"]?></a></li>
</ul>
<div class="tab-content bg-color-white">
<div class="tab-pane fade active in" id="rank-1">
<div class="latest-ranking-e1">
<ul class="list-unstyled">
<?php if($TPL_rank_today_1){$TPL_I1=-1;foreach($TPL_VAR["rank_today"] as $TPL_V1){$TPL_I1++;?>
<li>
<div class="width-60 left ellipsis">
<span class="ranking-num <?php if($TPL_I1<= 2){?>ranking-num-<?php echo $TPL_I1+ 1?><?php }?>"><?php if($TPL_I1< 9){?>0<?php }?><?php echo $TPL_I1+ 1?></span>
<?php if($TPL_V1["eyoom_icon"]){?>
<span style='display:inline-block;margin-right:2px;'><img src="<?php echo $TPL_V1["eyoom_icon"]?>"></span>
<?php }?>
<?php echo $TPL_V1["mb_nick"]?>
</div>
<div class="width-40 right">
<?php echo number_format($TPL_V1["point"])?>
</div>
<div class="clear"></div>
</li>
<?php }}else{?>
<p class="t-center">출력할 랭킹이 없습니다.</p>
<?php }?>
</ul>
</div>
</div>
<div class="tab-pane fade in" id="rank-2">
<div class="latest-ranking-e1">
<ul class="list-unstyled">
<?php if($TPL_rank_total_1){$TPL_I1=-1;foreach($TPL_VAR["rank_total"] as $TPL_V1){$TPL_I1++;?>
<li>
<div class="width-60 left ellipsis">
<span class="ranking-num <?php if($TPL_I1<= 2){?>ranking-num-<?php echo $TPL_I1+ 1?><?php }?>"><?php if($TPL_I1< 9){?>0<?php }?><?php echo $TPL_I1+ 1?></span>
<?php if($TPL_V1["eyoom_icon"]){?>
<span style='display:inline-block;margin-right:2px;'><img src="<?php echo $TPL_V1["eyoom_icon"]?>"></span>
<?php }?>
<?php echo $TPL_V1["mb_nick"]?>
</div>
<div class="width-40 right">
<?php echo number_format($TPL_V1["point"])?>
</div>
<div class="clear"></div>
</li>
<?php }}else{?>
<p class="t-center">출력할 랭킹이 없습니다.</p>
<?php }?>
</ul>
</div>
</div>
<div class="tab-pane fade in" id="rank-3">
<div class="latest-ranking-e1">
<ul class="list-unstyled">
<?php if($TPL_rank_level_1){$TPL_I1=-1;foreach($TPL_VAR["rank_level"] as $TPL_V1){$TPL_I1++;?>
<li>
<div class="width-60 left ellipsis">
<span class="ranking-num <?php if($TPL_I1<= 2){?>ranking-num-<?php echo $TPL_I1+ 1?><?php }?>"><?php if($TPL_I1< 9){?>0<?php }?><?php echo $TPL_I1+ 1?></span>
<?php if($TPL_V1["eyoom_icon"]){?>
<span style='display:inline-block;margin-right:2px;'><img src="<?php echo $TPL_V1["eyoom_icon"]?>"></span>
<?php }?>
<?php echo $TPL_V1["mb_nick"]?>
</div>
<div class="width-40 right">
<?php echo number_format($TPL_V1["point"])?>
</div>
<div class="clear"></div>
</li>
<?php }}else{?>
<p class="t-center">출력할 랭킹이 없습니다.</p>
<?php }?>
</ul>
</div>
</div>
</div>
</div>
</div>
<style>
.latest-ranking-e1 ul {margin-bottom:0}
.latest-ranking-e1 li {padding:4px 0;border-bottom:1px dotted #ddd}
.latest-ranking-e1 li:last-child {border-bottom:0}
.latest-ranking-e1 .ranking-num {background:#555;padding:3px 3px;color:#fff;margin-right:5px;font-size:11px}
.latest-ranking-e1 .ranking-num-1 {background:#bf1143}
.latest-ranking-e1 .ranking-num-2 {background:#ff9501}
.latest-ranking-e1 .ranking-num-3 {background:#ff9501}
.latest-ranking-e1 .left {padding-right:0;padding-left:0;font-size:12px;color:#333}
.latest-ranking-e1 .right {padding-right:0;padding-left:0;text-align:right;color:#bf1143;font-size:11px;margin-top:4px}
.latest-ranking-w .tab-e1 .tab-content img {margin-top:0;margin-bottom:0}
.latest-ranking-w .tab-e1 .nav-tabs a {padding:5px 10px}
</style>