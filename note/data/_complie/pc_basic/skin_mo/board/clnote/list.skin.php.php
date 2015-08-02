<?php /* Template_ 2.2.7 2015/08/01 01:23:14 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\board\clnote\list.skin.php 000006035 */  $this->include_("eb_paging");
$TPL__category_tab_1=empty($GLOBALS["category_tab"])||!is_array($GLOBALS["category_tab"])?0:count($GLOBALS["category_tab"]);
$TPL_list_1=empty($TPL_VAR["list"])||!is_array($TPL_VAR["list"])?0:count($TPL_VAR["list"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="qa-list">
<div class="board-info margin-bottom-10">
<div class="left margin-top-5">
<span><i class="fa fa-th-list"></i> Total <?php echo number_format($GLOBALS["total_count"])?>건</span> <?php echo $GLOBALS["page"]?> 페이지
</div>
<?php if($GLOBALS["admin_href"]||$TPL_VAR["write_href"]){?>
<div class="right">
<?php if($GLOBALS["admin_href"]){?><a href="<?php echo $GLOBALS["admin_href"]?>" class="eb-button eb-button-small eb-button-red" type="button"><i class="fa fa-cog"></i> 관리자</a> <?php }?>
<?php if($GLOBALS["write_href"]){?><a href="<?php echo $GLOBALS["write_href"]?>" class="eb-button eb-button-small eb-button-dark" type="button"><i class="fa fa-pencil"></i> 문의등록</a><?php }?>
</div>
<?php }?>
<div class="clear"></div>
</div>
<div class="tab-e1">
<?php if($GLOBALS["category_option"]){?>
<!-- 카테고리 시작 -->
<ul class="nav nav-tabs">
<li <?php if($GLOBALS["sca"]==''){?>class="active"<?php }?>><a href="<?php echo $GLOBALS["category_href"]?>">전체</a></li>
<?php if($TPL__category_tab_1){foreach($GLOBALS["category_tab"] as $TPL_V1){?>
<li <?php if($TPL_V1["category"]==$GLOBALS["sca"]){?>class="active"<?php }?>>
<a href="<?php echo $TPL_V1["href"]?>">
<?php if($TPL_V1["category"]==$GLOBALS["sca"]){?><span class="sound_only">열린 분류 </span><?php }?>
<?php echo $TPL_V1["category"]?>
</a>
</li>
<?php }}?>
</ul>
<!-- 카테고리 끝 -->
<?php }?>
<div class="tab-content">
<form name="fqalist" id="fqalist" action="./qadelete.php" onsubmit="return fqalist_submit(this);" method="post" class="sky-form">
<input type="hidden" name="stx" value="<?php echo $GLOBALS["stx"]?>">
<input type="hidden" name="sca" value="<?php echo $GLOBALS["sca"]?>">
<input type="hidden" name="page" value="<?php echo $GLOBALS["page"]?>">
<div class="table-list-eb margin-bottom-20">
<table class="eb-table">
<thead>
<tr>
<th>번호</th>
<?php if($GLOBALS["is_checkbox"]){?>
<th>
<label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
<label class="checkbox">
<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);"><i></i>
</label>
</th>
<?php }?>
<th>제목</th>
</tr>
</thead>
<tbody>
<?php if($TPL_list_1){foreach($TPL_VAR["list"] as $TPL_K1=>$TPL_V1){?>
<tr>
<td rowspan="2" class="t-center"><?php echo $TPL_V1["wr_id"]?></td>
<?php if($GLOBALS["is_checkbox"]){?>
<td rowspan="2" class="t-center">
<label for="chk_qa_id_<?php echo $TPL_K1?>" class="sound_only"><?php echo $TPL_V1["wr_4"]?></label>
<label class="checkbox">
<input type="checkbox" name="chk_qa_id[]" value="<?php echo $TPL_V1["wr_id"]?>" id="chk_qa_id_<?php echo $TPL_K1?>"><i></i>
</label>
</td>
<?php }?>
<td class="bg-color-light2">
<a href="<?php echo $TPL_V1["view_href"]?>">
<?php echo $TPL_V1["wr_4"]?>
</a>
<?php if($TPL_V1["icon_file"]){?>
<i class="fa fa-floppy-o margin-left-5"></i>
<?php }?>
</td>
</tr>
<tr>
<td class="font-size-11 color-grey">
<?php echo $TPL_V1["wr_datetime"]?>
</td>
</tr>
<?php }}else{?>
<tr><td colspan="<?php echo $TPL_VAR["colspan"]?>" class="t-center">게시물이 없습니다.</td></tr>
<?php }?>
</tbody>
</table>
</div>
<div class="left">
<?php if($GLOBALS["is_checkbox"]){?>
<input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value" class="eb-button eb-button-small eb-button-red">
<?php }?>
</div>
<div class="right">
<?php if($GLOBALS["list_href"]){?><a href="<?php echo $GLOBALS["list_href"]?>" class="eb-button eb-button-small eb-button-light">목록</a>&nbsp;&nbsp;<?php }?>
<?php if($GLOBALS["write_href"]){?><a href="<?php echo $GLOBALS["write_href"]?>" class="eb-button eb-button-small eb-button-dark"><i class="fa fa-pencil"></i> 문의등록</a><?php }?>
</div>
<div class="clear"></div>
</form>
</div>
</div>
</div>
<?php if($GLOBALS["is_checkbox"]){?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php }?>
<!--{//_list_pages}-->
<?php echo eb_paging('basic')?>
<!-- 게시판 검색 시작 { -->
<div class="margin-top-20">
<form name="fsearch" method="get" class="sky-form">
<input type="hidden" name="sca" value="<?php echo $GLOBALS["sca"]?>">
<section>
<label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<label class="input">
<input type="text" name="stx" value="<?php echo stripslashes($GLOBALS["stx"])?>" required id="stx" class="form-control" size="15" maxlength="15" placeholder="1:1검색">
</label>
</section>
<section>
<button class="eb-button eb-button-dark" type="submit" value="검색">검색</button>
</section>
</form>
</div>
<style>
.qa-list .sky-form .checkbox i {top:-7px}
.qa-list .txt_done {color:#bf1143}
.qa-list .txt_rdy {color:#ff9501}
.qa-list .sch_word {color:#bf1143}
.qa-list .table-list-eb th {text-align:center}
</style>
<?php if($GLOBALS["is_checkbox"]){?>
<script>
function all_checked(sw) {
var f = document.fqalist;
for (var i=0; i<f.length; i++) {
if (f.elements[i].name == "chk_qa_id[]")
f.elements[i].checked = sw;
}
}
function fqalist_submit(f) {
var chk_count = 0;
for (var i=0; i<f.length; i++) {
if (f.elements[i].name == "chk_qa_id[]" && f.elements[i].checked)
chk_count++;
}
if (!chk_count) {
alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
return false;
}
if(document.pressed == "선택삭제") {
if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다"))
return false;
}
return true;
}
</script>
<?php }?>