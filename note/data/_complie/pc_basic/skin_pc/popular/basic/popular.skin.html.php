<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\popular\basic\popular.skin.html 000000952 */ 
$TPL_list_1=empty($TPL_VAR["list"])||!is_array($TPL_VAR["list"])?0:count($TPL_VAR["list"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="popular">
<div class="headline">
<h5><i class="fa fa-search"></i> 인기검색어</h5>
</div>
<section class="popular-box">
<ul class="list-unstyled">
<?php if($TPL_list_1){foreach($TPL_VAR["list"] as $TPL_V1){?>
<li>
<a href="<?php echo G5_BBS_URL?>/search.php?sfl=wr_subject&amp;sop=and&amp;stx=<?php echo urlencode($TPL_V1["pp_word"])?>">
<span class="label label-light"><?php echo $TPL_V1["pp_word"]?></span>
</a>
</li>
<?php }}?>
</ul>
</section>
</div>
<div class="margin-bottom-20"></div>
<style>
.popular .popular-box {display:block;overflow:hidden;border:1px solid#ddd;background:#fff;padding:10px 10px 5px}
.popular li {float:left;margin:0 1px 5px}
</style>