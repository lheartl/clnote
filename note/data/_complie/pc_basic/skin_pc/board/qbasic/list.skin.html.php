<?php /* Template_ 2.2.7 2015/07/30 21:28:09 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\board\qbasic\list.skin.html 000010028 */  $this->include_("eb_nameview","eb_paging");
$TPL__bocate_1=empty($GLOBALS["bocate"])||!is_array($GLOBALS["bocate"])?0:count($GLOBALS["bocate"]);
$TPL_list_1=empty($TPL_VAR["list"])||!is_array($TPL_VAR["list"])?0:count($TPL_VAR["list"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="board-list">
<?php if($GLOBALS["is_category"]){?>
<script>
// 카테고리 이동
function category_view(sca) {
if(sca)	var url = "<?php echo $GLOBALS["category_href"]?>&sca="+sca;
else var url = "<?php echo $GLOBALS["category_href"]?>";
$(location).attr('href',url);
return false;
}
</script>
<div class="sky-form">
<section class="left width-50">
<h5 class="margin-top-5 ellipsis"><span class="color-red"><?php echo $TPL_VAR["board"]["bo_subject"]?></span> 분류</h5>
</section>
<section class="right width-50">
<label class="select">
<select name="ca_name" id="ca_name" required class="form-control" onchange="return category_view(this.value);">
<option value="">전체 (<?php echo $GLOBALS["ca_total"]?>)</option>
<?php if($TPL__bocate_1){foreach($GLOBALS["bocate"] as $TPL_V1){?>
<option value="<?php echo $TPL_V1["ca_sca"]?>" <?php if($GLOBALS["decode_sca"]==$TPL_V1["ca_name"]){?>selected<?php }?>><?php echo $TPL_V1["ca_name"]?> (<?php echo $TPL_V1["ca_count"]?>)</option>
<?php }}?>
</select>
<i></i>
</label>
</section>
<div class="clear"></div>
</div>
<div class="margin-hr-0"></div>
<?php }?>
<div class="board-info margin-bottom-10">
<div class="left margin-top-5">
<span><i class="fa fa-th-list"></i> Total <?php echo number_format($GLOBALS["total_count"])?>건</span> <?php echo $GLOBALS["page"]?> 페이지
</div>
<?php if($GLOBALS["write_href"]){?>
<div class="right">
<?php if($GLOBALS["admin_href"]){?><a href="<?php echo $GLOBALS["admin_href"]?>" class="eb-button eb-button-small eb-button-red" type="button"><i class="fa fa-cog"></i> 관리자</a>&nbsp;<?php }?>
<?php if($GLOBALS["eyoom_href"]){?><a href="<?php echo $GLOBALS["eyoom_href"]?>" class="eb-button eb-button-small eb-button-red" type="button"><i class="fa fa-cogs"></i> 이윰설정</a>&nbsp;<?php }?>
<?php if($GLOBALS["write_href"]){?><a href="<?php echo $GLOBALS["write_href"]?>" class="eb-button eb-button-small eb-button-dark" type="button"><i class="fa fa-pencil"></i> 글쓰기</a><?php }?>
</div>
<?php }?>
<div class="clear"></div>
</div>
<?php if($GLOBALS["is_admin"]){?>
<form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post" class="sky-form">
<input type="hidden" name="bo_table" value="<?php echo $GLOBALS["bo_table"]?>">
<input type="hidden" name="sfl" value="<?php echo $GLOBALS["sfl"]?>">
<input type="hidden" name="stx" value="<?php echo $GLOBALS["stx"]?>">
<input type="hidden" name="spt" value="<?php echo $GLOBALS["spt"]?>">
<input type="hidden" name="sca" value="<?php echo $GLOBALS["sca"]?>">
<input type="hidden" name="page" value="<?php echo $GLOBALS["page"]?>">
<input type="hidden" name="sw" value="">
<?php }?>
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
<strong class="color-black"><?php echo $TPL_V1["subject"]?></strong>
<?php }elseif($GLOBALS["wr_id"]==$TPL_V1["wr_id"]){?>
<strong class="color-black"><?php echo $TPL_V1["subject"]?></strong>
<?php }else{?>
<?php echo $TPL_V1["subject"]?>
<?php }?>
<?php if($TPL_V1["comment_cnt"]){?><span class="sound_only">댓글</span><em>+<?php echo $TPL_V1["comment_cnt"]?></em><span class="sound_only">개</span><?php }?>
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
<div class="board-footer">
<div class="left">
<?php if($GLOBALS["is_checkbox"]){?>
<ul class="list-unstyled board-btn-adm left">
<li><button class="eb-button eb-button-small eb-button-red" type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value">선택삭제</button></li>
<li><button class="eb-button eb-button-small eb-button-red" type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value">선택복사</button></li>
<li><button class="eb-button eb-button-small eb-button-red" type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value">선택이동</button></li>
</ul>
<?php }?>
<span class="left">
<?php if($GLOBALS["rss_href"]){?><a href="<?php echo $GLOBALS["rss_href"]?>" class="eb-button eb-button-small eb-button-yellow" type="button"><i class="fa fa-rss"></i></a><?php }?>
<a href="#" class="eb-button eb-button-small eb-button-dark" data-toggle="modal" data-target=".search-modal"><i class="fa fa-search"></i></a>
</span>
</div>
<div class="right">
<?php if($GLOBALS["list_href"]||$GLOBALS["write_href"]){?>
<ul class="list-unstyled board-btn-user">
<?php if($GLOBALS["write_href"]){?><li><a href="<?php echo $GLOBALS["write_href"]?>" class="eb-button eb-button-small eb-button-dark" type="button"><i class="fa fa-pencil"></i> 글쓰기</a></li><?php }?>
</ul>
<?php }?>
</div>
<div class="clear"></div>
</div>
<?php if($GLOBALS["is_admin"]){?></form><?php }?>
</div>
<?php if($GLOBALS["is_checkbox"]){?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php }?>
<?php echo eb_paging('basic')?>
<div class="margin-bottom-20"></div>
<?php if($TPL_VAR["eyoom_board"]["bo_use_hotgul"]== 1){?>
<?php echo $TPL_VAR["latest"]->latest_hot('basic','title=HOT5||count=5||cut_subject=25')?>
<?php }?>
<style>
.margin-hr-0 {height:1px;border-top:1px dotted #ddd;margin:0 0 10px;clear:both}
.margin-hr-10 {height:1px;border-top:1px dotted #ddd;margin:10px 0;clear:both}
.board-list .sky-form .radio,.board-list .sky-form .checkbox {padding-left:0}
.board-list .sky-form .radio i,.board-list .sky-form .checkbox i {top:-10px}
.board-list .bo_current {color:#bf1143}
.board-list .table-list-eb span.badge {padding:1px 5px 2px;font-size:10px}
.table-list-eb th {text-align:center}
.table-list-eb td i {margin:2px}
.table-list-eb td em {font-size:11px;padding:0 3px;color:#bf1143;font-style:normal}
.table-list-eb td em .cnt_cmt {font-weight:300}
.table-list-eb td .fa-reply {-ms-transform:scale(-1,-1);-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}
.table-list-eb td.td-chk {width:24px}
.table-list-eb td.td-subject {background:#f8f8f8;padding:12px 8px}
.table-list-eb td .sv_wrap b {font-weight:300}
.board-btn-adm li {float:left;margin-right:5px}
</style>
<?php if($GLOBALS["is_checkbox"]){?>
<script>
function all_checked(sw) {
var f = document.fboardlist;
for (var i=0; i<f.length; i++) {
if (f.elements[i].name == "chk_wr_id[]")
f.elements[i].checked = sw;
}
}
function fboardlist_submit(f) {
var chk_count = 0;
for (var i=0; i<f.length; i++) {
if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
chk_count++;
}
if (!chk_count) {
alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
return false;
}
if(document.pressed == "선택복사") {
select_copy("copy");
return;
}
if(document.pressed == "선택이동") {
select_copy("move");
return;
}
if(document.pressed == "선택삭제") {
if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
return false;
f.removeAttribute("target");
f.action = "./board_list_update.php";
}
return true;
}
// 선택한 게시물 복사 및 이동
function select_copy(sw) {
var f = document.fboardlist;
if (sw == "copy")
str = "복사";
else
str = "이동";
var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");
f.sw.value = sw;
f.target = "move";
f.action = "./move.php";
f.submit();
}
</script>
<?php }?>