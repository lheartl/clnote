<?php /* Template_ 2.2.7 2015/07/30 21:10:01 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\search\basic\search.skin.html 000007254 */  $this->include_("eb_paging");
$TPL__sel_group_1=empty($GLOBALS["sel_group"])||!is_array($GLOBALS["sel_group"])?0:count($GLOBALS["sel_group"]);
$TPL_loop_1=empty($TPL_VAR["loop"])||!is_array($TPL_VAR["loop"])?0:count($TPL_VAR["loop"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="search-result">
<form name="fsearch" onsubmit="return fsearch_submit(this);" method="get" class="sky-form">
<input type="hidden" name="srows" value="<?php echo $GLOBALS["srows"]?>">
<div class="row">
<section class="col col-9"><label class="label">검색선택</label></section>
<section class="col col-3 inline-group">
<label for="sop_or" class="radio"><input type="radio" value="or" <?php if($GLOBALS["sop"]=='or'){?>checked<?php }?> id="sop_or" name="sop"><i class="rounded-x"></i>OR</label>
<label for="sop_and" class="radio"><input type="radio" value="and" <?php if($GLOBALS["sop"]=='and'){?>checked<?php }?> id="sop_and" name="sop"><i class="rounded-x"></i>AND</label>
</section>
<div class="clear"></div>
<section class="col col-3">
<label class="select">
<select name="gr_id" id="gr_id" class="form-control">
<option value="">전체그룹</option>
<?php if($TPL__sel_group_1){foreach($GLOBALS["sel_group"] as $TPL_V1){?>
<option value='<?php echo $TPL_V1["gr_id"]?>'><?php echo $TPL_V1["gr_subject"]?></option>
<?php }}?>
</select>
<i></i>
</label>
</section>
<script>document.getElementById("gr_id").value = "<?php echo $GLOBALS["gr_id"]?>";</script>
<section class="col col-3">
<label for="sfl" class="sound_only">검색조건</label>
<label class="select">
<select name="sfl" id="sfl" class="form-control">
<option value="wr_subject||wr_content" <?php echo get_selected($_GET['sfl'],"wr_subject||wr_content")?>>제목+내용</option>
<option value="wr_subject" <?php echo get_selected($_GET['sfl'],"wr_subject")?>>제목</option>
<option value="wr_content" <?php echo get_selected($_GET['sfl'],"wr_content")?>>내용</option>
<option value="mb_id" <?php echo get_selected($_GET['sfl'],"mb_id")?>>회원아이디</option>
<option value="wr_name" <?php echo get_selected($_GET['sfl'],"wr_name")?>>이름</option>
</select>
<i></i>
</label>
</section>
<section class="col col-3">
<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<label class="input">
<input type="text" name="stx" value="<?php echo $GLOBALS["text_stx"]?>" id="stx" required required class="form-control" maxlength="20">
</label>
</section>
<section class="col col-3">
<button type="submit" value="검색" class="eb-button eb-button-dark width-100">검색</button>
</section>
<script>
function fsearch_submit(f)
{
if (f.stx.value.length < 2) {
alert("검색어는 두글자 이상 입력하십시오.");
f.stx.select();
f.stx.focus();
return false;
}
// 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
var cnt = 0;
for (var i=0; i<f.stx.value.length; i++) {
if (f.stx.value.charAt(i) == ' ')
cnt++;
}
if (cnt > 1) {
alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
f.stx.select();
f.stx.focus();
return false;
}
f.action = "";
return true;
}
</script>
</div>
</form>
<div class="margin-hr-10"></div>
<div class="margin-bottom-20"></div>
<?php if($GLOBALS["stx"]){?>
<?php if($GLOBALS["board_count"]){?>
<section class="margin-bottom-20">
<div class="eb-alert eb-alert-info">
<h5><strong class="color-red"><?php echo $GLOBALS["stx"]?></strong> 전체검색 결과</h5>
<p>
게시판 -<strong> <?php echo $GLOBALS["board_count"]?></strong> 개 |
게시물 -<strong> <?php echo number_format($GLOBALS["total_count"])?></strong> 개
<small class="right"><em><?php echo number_format($GLOBALS["page"])?> / <?php echo number_format($GLOBALS["total_page"])?> 페이지 열람 중</em></small>
</p>
</div>
</section>
<?php }?>
<?php }?>
<?php if($GLOBALS["stx"]){?>
<?php if($GLOBALS["board_count"]){?>
<section class="tab-e1 margin-bottom-30">
<ul class="nav nav-tabs">
<li class="active"><a href="?<?php echo $GLOBALS["search_query"]?>&amp;gr_id=<?php echo $GLOBALS["gr_id"]?>" <?php echo $GLOBALS["sch_all"]?>>전체게시판</a></li>
<?php echo $GLOBALS["str_board_list"]?>
</ul>
</section>
<?php }else{?>
<div class="t-center margin-bottom-10">검색된 자료가 하나도 없습니다.</div>
<?php }?>
<?php }?>
<div class="margin-bottom-20"></div>
<?php if($GLOBALS["stx"]&&$GLOBALS["board_count"]){?><section class="search-result-list"><?php }?>
<?php if($TPL_loop_1){foreach($TPL_VAR["loop"] as $TPL_V1){
$TPL_list_2=empty($TPL_V1["list"])||!is_array($TPL_V1["list"])?0:count($TPL_V1["list"]);?>
<div class="headline">
<h5>
<a href="./board.php?bo_table=<?php echo $TPL_V1["bo_table"]?>&amp;<?php echo $GLOBALS["search_query"]?>">
<i class="fa fa-search"></i> <span class="color-red"><?php echo $TPL_V1["bo_subject"]?></span> 게시판 내 결과
</a>
</h5>
</div>
<div class="margin-bottom-20"></div>
<ul class="list-unstyled result-list margin-bottom-10">
<?php if($TPL_list_2){foreach($TPL_V1["list"] as $TPL_V2){?>
<li>
<h5 class="margin-bottom-5">
<a href="<?php echo $TPL_V2["href"]?><?php echo $TPL_V2["comment_href"]?>"><strong><i class="fa fa-chevron-circle-right"></i> <?php echo $TPL_V2["comment_def"]?><?php echo $TPL_V2["subject"]?></strong></a>
<a href="<?php echo $TPL_V2["href"]?><?php echo $TPL_V2["comment_href"]?>" target="_blank" class="right" data-placement="top" data-toggle="tooltip" title="새창"><i class="fa fa-external-link color-grey"></i></a>
</h5>
<div class="clear"></div>
<p class="margin-bottom-5"><?php echo $TPL_V2["content"]?></p>
<p><i class="fa fa-user"></i> <?php echo $TPL_V2["name"]?> <i class="fa fa-clock-o"></i> <?php echo $TPL_V2["wr_datetime"]?></p>
</li>
<?php }}?>
</ul>
<div class="right margin-bottom-10"><a href="./board.php?bo_table=<?php echo $TPL_V1["bo_table"]?>&amp;<?php echo $GLOBALS["search_query"]?>" class="eb-button eb-button-mini eb-button-dark"><strong><?php echo $TPL_V1["bo_subject"]?></strong> 결과 더보기</a></div>
<div class="clear"></div>
<?php }}else{?>
<?php if($GLOBALS["stx"]&&$GLOBALS["board_count"]){?>
</section>
<?php }?>
<?php }?>
<?php echo eb_paging('basic')?>
<div class="margin-bottom-10"></div>
</div>
<style>
.margin-hr-10 {height:1px;border-top:1px dotted #ddd;margin:10px 0}
.search-result .sky-form .inline-group .radio {margin-right:10px}
.search-result .tab-e1 .nav-tabs a {font-size:12px}
.search-result .tab-e1 .nav-tabs {border-bottom:1px solid #555}
.search-result .tab-e1 .nav-tabs > .active > a,.search-result .tab-e1 .nav-tabs > .active > a:hover,.search-result .tab-e1 .nav-tabs > .active > a:focus {background:#555}
.search-result .tab-e1 .nav-tabs > li > a:hover {background:#555}
.search-result .tab-e1 .sch_on {color:#bf1143}
@media (max-width: 767px) {
.search-result  .tab-e1 .nav-tabs {border:1px solid #ddd;padding:7px;background:#fafafa}
}
.search-result-list .result-list li {padding:10px;border-bottom:1px dotted #ddd}
.search-result-list .result-list li:hover {background:#f8f8f8}
.search-result-list .result-list li:first-child {border-top:1px dotted #ddd}
.search-result-list .sch_word {color:#bf1143}
</style>