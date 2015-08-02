<?php /* Template_ 2.2.7 2015/08/01 22:16:08 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\board\clnote\list.skin.html 000006274 */  $this->include_("eb_nameview","eb_paging");
$TPL_list_1=empty($TPL_VAR["list"])||!is_array($TPL_VAR["list"])?0:count($TPL_VAR["list"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="qa-list">
<div class="board-info margin-bottom-10">
<div class="left margin-top-5">
<span><i class="fa fa-th-list"></i> Total <?php echo number_format($GLOBALS["total_count"])?>건</span> <?php echo $GLOBALS["page"]?> 페이지 <?php echo $GLOBALS["total_page"]?>
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
<div class="tab-content">
<form name="fqalist" id="fqalist" action="./qadelete.php" onsubmit="return fqalist_submit(this);" method="post" class="sky-form">
<input type="hidden" name="stx" value="<?php echo $GLOBALS["stx"]?>">
<input type="hidden" name="sca" value="<?php echo $GLOBALS["sca"]?>">
<input type="hidden" name="page" value="<?php echo $GLOBALS["page"]?>">
<div class="table-list-eb margin-bottom-20">
<table class="eb-table">
<thead>
<tr>
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
<tr class="<?php if($TPL_V1["is_notice"]){?>board-notice<?php }?>">
<?php if($GLOBALS["is_checkbox"]){?>
<td rowspan="2" class="td-chk">
<label for="chk_wr_id_<?php echo $TPL_K1?>" class="sound_only"><?php echo $TPL_V1["subject"]?></label>
<label class="checkbox">
<input type="checkbox" name="chk_wr_id[]" value="<?php echo $TPL_V1["wr_id"]?>" id="chk_wr_id_<?php echo $TPL_K1?>"><i></i>
</label>
</td>
<?php }?>
<td class="td-subject">
<?php if($TPL_V1["icon_reply"]){?>
<i class="fa fa-reply" style="margin-left:<?php echo $TPL_V1["reply"]?>px;"></i>
<?php }?>
<a href="<?php echo $TPL_V1["href"]?>">
<?php if($TPL_V1["is_notice"]){?>
<strong class="color-black"><?php echo $TPL_V1["wr_4"]?></strong>
<?php }elseif($GLOBALS["wr_id"]==$TPL_V1["wr_id"]){?>
<strong class="color-black"><?php echo $TPL_V1["wr_4"]?></strong>
<?php }else{?>
<?php echo $TPL_V1["wr_4"]?>
<?php }?>
</a>
<?php if($TPL_V1["icon_new"]){?><span class="badge badge-e badge-red">new</span><?php }?>
<?php if($TPL_V1["icon_secret"]){?><i class="fa fa-lock color-red"></i><?php }?>
</td>
</tr>
<tr>
<td class="font-size-11">
<?php if($GLOBALS["is_category"]&&$TPL_V1["ca_name"]){?>
<a href="<?php echo $TPL_V1["ca_name_href"]?>"><span class="color-red"><?php echo $TPL_V1["ca_name"]?></span>&nbsp;&nbsp;</a>
<?php }?>
<?php if($TPL_VAR["eyoom_board"]["bo_sel_date_type"]=='1'){?>
<i class="fa fa-clock-o color-grey"></i> <?php echo $TPL_VAR["eb"]->date_time('Y.m.d',$TPL_V1["wr_datetime"])?>&nbsp;&nbsp;
<?php }elseif($TPL_VAR["eyoom_board"]["bo_sel_date_type"]=='2'){?>
<i class="fa fa-clock-o color-grey"></i> <?php echo $TPL_VAR["eb"]->date_format('Y.m.d',$TPL_V1["wr_datetime"])?>&nbsp;&nbsp;
<?php }?>
<span><i class="fa fa-user color-grey"></i> <?php echo eb_nameview('basic',$TPL_V1["mb_id"],$TPL_V1["wr_name"],$TPL_V1["email"],$TPL_V1["homepage"])?></span>
</td>
</tr>
<?php }}else{?>
<tr>
<td colspan="<?php echo $TPL_VAR["colspan"]?>" class="t-center">게시물이 없습니다.</td>
</tr>
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