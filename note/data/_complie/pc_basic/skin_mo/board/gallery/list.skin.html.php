<?php /* Template_ 2.2.7 2015/07/31 23:43:00 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\board\gallery\list.skin.html 000016472 */  $this->include_("eb_nameview","eb_paging");
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
<?php if($TPL_VAR["eyoom_board"]["bo_use_infinite_scroll"]=='1'){?>
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
<div class="clear"></div>
<div class="margin-bottom-10"></div>
<?php }?>
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
<div class="board-gallery">
<?php if($GLOBALS["is_checkbox"]){?>
<section>
<label class="left" for="chkall">현재 페이지 게시물 전체선택</label>
<label class="checkbox left margin-left-10">
<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);"><i></i>
</label>
</section>
<div class="margin-bottom-10"></div>
<div class="clear"></div>
<?php }?>
<div class="gallery-boxes">
<?php if($TPL_list_1){foreach($TPL_VAR["list"] as $TPL_K1=>$TPL_V1){?>
<?php if($TPL_V1["is_notice"]){?>
<div class="gallery-boxes-in">
<div class="gallery-boxes-in2">
<div class="gallery-boxes-notice">
<p class="margin-bottom-10"><span class="badge badge-e badge-red">알림장</span></p>
<div class="margin-hr-10"></div>
<p><a href="<?php echo $TPL_V1["href"]?>" <?php if($TPL_VAR["wmode"]){?>onclick="eb_modal(this.href); return false;"<?php }?>><strong><?php echo $TPL_V1["subject"]?></strong></a></p>
<div class="margin-hr-10"></div>
<p class="t-right">
<i class="fa fa-clock-o"></i> <?php echo $TPL_VAR["eb"]->date_time('Y.m.d',$TPL_V1["wr_datetime"])?>
<?php if($TPL_V1["wr_comment"]){?>
&nbsp;&nbsp;&nbsp;<i class="fa fa-comments"></i> <span class="color-red"><?php echo number_format($TPL_V1["wr_comment"])?></span>
<?php }?>
</p>
</div>
</div>
</div>
<?php }else{?>
<div id="list-item-<?php echo $TPL_V1["wr_id"]?>" class="gallery-boxes-in">
<div class="gallery-boxes-in2">
<div class="gallery-boxes-img">
<a href="<?php echo $TPL_V1["href"]?>" <?php if($TPL_VAR["wmode"]){?>onclick="eb_modal(this.href); return false;"<?php }?>>
<?php if($TPL_V1["icon_new"]){?>
<div class="ribbon">
<div class="ribbon-bg-yellow">new</div>
</div>
<?php }?>
<?php if($TPL_V1["img_content"]&&!preg_match('/no image/',$TPL_V1["img_content"])){?>
<?php echo $TPL_V1["img_content"]?>
<?php }else{?>
<div class="gallery-boxes-noimg">No Image</div>
<?php }?>
<?php if($GLOBALS["is_checkbox"]){?>
<div class="check-box">
<section>
<label for="chk_wr_id_<?php echo $TPL_K1?>" class="sound_only"><?php echo $TPL_V1["subject"]?></label>
<label class="checkbox">
<input type="checkbox" name="chk_wr_id[]" value="<?php echo $TPL_V1["wr_id"]?>" id="chk_wr_id_<?php echo $TPL_K1?>"><i></i>
</label>
</section>
</div>
<?php }?>
</a>
</div>
<div class="gallery-boxes-description">
<h5 class="subj ellipsis">
<?php if($GLOBALS["wr_id"]==$TPL_V1["wr_id"]){?>
<strong><span class="color-red">열람중 -&nbsp;</span> <a href="<?php echo $TPL_V1["href"]?>" <?php if($TPL_VAR["wmode"]){?>onclick="eb_modal(this.href); return false;"<?php }?>><?php echo $TPL_V1["subject"]?></a></strong>
<?php }else{?>
<a href="<?php echo $TPL_V1["href"]?>" <?php if($TPL_VAR["wmode"]){?>onclick="eb_modal(this.href); return false;"<?php }?>><?php echo $TPL_V1["subject"]?></a>
<?php }?>
</h5>
<div class="margin-bottom-5"></div>
<ul class="list-unstyled gallery-boxes-info">
<li><?php echo eb_nameview('basic',$TPL_V1["mb_id"],$TPL_V1["wr_name"],$TPL_V1["email"],$TPL_V1["homepage"])?></li>
<?php if($TPL_VAR["eyoom_board"]["bo_sel_date_type"]=='1'){?>
<li><i class="fa fa-clock-o"></i> <?php echo $TPL_VAR["eb"]->date_time('Y.m.d',$TPL_V1["wr_datetime"])?></li>
<?php }elseif($TPL_VAR["eyoom_board"]["bo_sel_date_type"]=='2'){?>
<li><i class="fa fa-clock-o"></i> <?php echo $TPL_VAR["eb"]->date_format('Y.m.d',$TPL_V1["wr_datetime"])?></li>
<?php }?>
<?php if($TPL_V1["wr_comment"]){?>
<li><span class="color-red font-size-11">+<?php echo number_format($TPL_V1["wr_comment"])?></span></li>
<?php }?>
<?php if($GLOBALS["is_category"]&&$TPL_V1["ca_name"]){?>
<li><i class="fa fa-tags"></i> <a href="<?php echo $TPL_V1["ca_name_href"]?>"><?php echo $TPL_V1["ca_name"]?></a></li>
<?php }?>
</ul>
<div class="clear"></div>
<?php if( 0){?>
<div class="margin-bottom-5"></div>
<p class="color-grey">
<?php echo $TPL_V1["content"]?>
</p>
<?php }?>
</div>
</div>
</div>
<?php }?>
<?php }}?>
</div>
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
<?php if($TPL_VAR["eyoom_board"]["bo_use_infinite_scroll"]!='1'){?>
<?php echo eb_paging('basic')?>
<?php }else{?>
<div id="infinite_pagination">
<a class="next" href="<?php echo G5_BBS_URL?>/board.php?bo_table=<?php echo $GLOBALS["bo_table"]?>&page=<?php echo $TPL_VAR["page"]+ 1?>"></a>
</div>
<?php }?>
<div class="margin-bottom-20"></div>
<style>
.margin-hr-0 {height:1px;border-top:1px dotted #ddd;margin:0 0 10px;clear:both}
.margin-hr-10 {height:1px;border-top:1px dotted #ddd;margin:10px 0;clear:both}
.board-list .sky-form .radio i,.board-list .sky-form .checkbox i {top:0}
.board-list .bo_current {color:#bf1143}
.board-btn-adm li {float:left;margin-right:5px}
.board-gallery {padding-bottom:20px}
.board-gallery .gallery-boxes-in {background:#fff;width:50%;margin-left:-1px}
.board-gallery .gallery-boxes-in2 {padding:5px}
.board-gallery .gallery-boxes-notice {padding:10px;border:solid 1px #ddd;background:#f8f8f8}
.board-gallery .gallery-boxes-notice:hover {background:#f8f8f8;border:solid 1px #bbb;box-shadow:none}
.board-gallery .gallery-boxes-img {position:relative;display:block;max-height:500px;overflow:hidden}
.board-gallery .gallery-boxes-img img {box-shadow:0 1px 0 #e5e5e5}
.board-gallery .gallery-boxes-img .check-box{position:absolute;top:8px;right:0}
.board-gallery .gallery-boxes-img .gallery-boxes-noimg {background:#000;text-align:center;min-height:146px;line-height:146px;font-size:14px;font-weight:bold;color:#74747a}
.board-gallery .gallery-boxes-description {position:relative;display:block;border:solid 1px #e5e5e5;border-top:0;padding:10px;}
.board-gallery .gallery-boxes-description .subj a {color:#333;font-size:12px}
.board-gallery .gallery-boxes-description .subj a:hover {color:#bf1143}
.board-gallery .gallery-boxes-description .check-box {position:relative;display:block;height:17px;margin-top:5px}
.board-gallery ul.gallery-boxes-info {padding:3px 0}
.board-gallery ul.gallery-boxes-info li {font-size:11px;float:left;margin-right:5px;}
.board-gallery ul.gallery-boxes-info li,.board-gallery ul.gallery-boxes-news li a {color:#888}
.board-gallery .ribbon {position:absolute;top:-1px;left:-1px;overflow:hidden;width:100px;height:100px}
.board-gallery .ribbon:after,.board-webzine .ribbon:before {position:absolute;z-index:-1;top:2px;left:77px;width:10px;height:10px;content:"";transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-webkit-transform:rotate(-45deg);background-color:rgba(0,0,0,.3)}
.board-gallery .ribbon:before {top:79px;left:0}
.board-gallery .ribbon>div {position:relative;z-index:100;top:-5px;left:-47px;width:120px;padding:15px 0 5px;transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-webkit-transform:rotate(-45deg);text-align:center;color:#fff;font-size:11px}
.board-gallery .ribbon-bg-yellow {color:#fff;background:#ff9501}
#infscr-loading {text-align:center;z-index:100;position:absolute;left:50%;bottom:0;width:200px;margin-left:-100px;padding:10px;background:#000;opacity:0.6;color:#fff}
</style>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/masonry/jquery.masonry.min.js"></script>
<?php if($TPL_VAR["wmode"]){?>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/infinite-scroll/jquery.infinitescroll.min.js"></script>
<?php }?>
<script>
$(document).ready(function(){
var $container = $('.gallery-boxes');
<?php if($TPL_VAR["eyoom_board"]["bo_use_infinite_scroll"]=='1'){?>
$container.imagesLoaded(function(){
$container.masonry({
itemSelector : '.gallery-boxes-in'
});
});
$container.infinitescroll({
navSelector  : "#infinite_pagination",
nextSelector : "#infinite_pagination .next",
itemSelector : ".gallery-boxes-in",
loading: {
finishedMsg: 'END',
img: '/eyoom/theme/pc_basic/image/loading.gif'
}
},
function( newElements ) {
var $newElems = $( newElements ).css({ opacity: 0 });
$newElems.imagesLoaded(function(){
$newElems.animate({ opacity: 1 });
$container.masonry( 'appended', $newElems, true );
});
});
<?php }else{?>
var gutter = 0;
var min_width = 150;
$container.imagesLoaded( function(){
$container.masonry({
itemSelector : '.gallery-boxes-in',
gutterWidth: gutter,
isAnimated: true,
columnWidth: function( containerWidth ) {
var box_width = (((containerWidth - 2*gutter)/3) | 0) ;
if (box_width < min_width) {
box_width = (((containerWidth - gutter)/2) | 0);
}
if (box_width < min_width) {
box_width = containerWidth;
}
$('.gallery-boxes-in').width(box_width);
return box_width;
}
});
});
<?php }?>
});
<?php if($TPL_VAR["wmode"]){?>
function eb_modal(href) {
$('.view-iframe-modal').modal('show').on('hidden.bs.modal', function () {
$("#view-iframe").attr("src", "");
});
$('.view-iframe-modal').modal('show').on('shown.bs.modal', function () {
$("#view-iframe").attr("src", href);
$('#view-iframe').height(parseInt($(window).height() * 0.7));
});
return false;
}
$(document).ready(function () {
$(window).resize(function () {
$('#view-iframe').height(parseInt($(window).height() * 0.7));
});
window.closeModal = function(wr_id){
$('.view-iframe-modal').modal('hide');
if(wr_id) {
var w_id = wr_id.split('|');
for(var i=0;i<w_id.length;i++) {
$("#list-item-"+w_id[i]).hide();
}
}
};
});
<?php }?>
</script>
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