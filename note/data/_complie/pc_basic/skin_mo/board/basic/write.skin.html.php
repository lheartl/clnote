<?php /* Template_ 2.2.7 2015/07/30 21:42:45 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\board\basic\write.skin.html 000021845 */ 
$TPL_wr_link_1=empty($TPL_VAR["wr_link"])||!is_array($TPL_VAR["wr_link"])?0:count($TPL_VAR["wr_link"]);
$TPL_wr_file_1=empty($TPL_VAR["wr_file"])||!is_array($TPL_VAR["wr_file"])?0:count($TPL_VAR["wr_file"]);?>
<?php if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/styles/shCoreDjango.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/venobox/venobox.css" type="text/css" media="screen">',0);
?>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/venobox/venobox.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
<script type="text/javascript">SyntaxHighlighter.all();</script>
<script>
$(document).ready(function(){
$(".emoticon").venobox({border:'3px'});
//동영상 추가
$("#btn_video").click(function(){
var v_url = $("#video_url").val();
if(!v_url) alert('동영상 주소를 입력해 주세요.');
else set_textarea_contents('video',v_url);
$("#video_url").val('');
});
//코드 추가
$(".ch_code").click(function(){
var ch = $(this).text();
var val = ch.toLowerCase();
set_textarea_contents('code',val);
});
//사운드크라우드 추가
$("#btn_scloud").click(function(){
var s_url = $("#scloud_url").val();
if(!s_url) alert('사운드크라우드 주소를 입력해 주세요.');
else set_textarea_contents('sound',s_url);
});
$("#scloud_url").val('');
});
function set_emoticon(emoticon) {
var type='emoticon';
set_textarea_contents(type,emoticon);
}
function set_textarea_contents(type,value) {
var type_text = '';
var content = '';
var mobile = <?php if(G5_IS_MOBILE){?>true<?php }else{?>false<?php }?>;
switch(type) {
case 'emoticon': type_text = '이모티콘'; break;
case 'video': type_text = '동영상'; break;
case 'code': type_text = 'code'; break;
case 'sound': type_text = 'soundcloud'; break;
}
if(type_text != 'code') {
content = '{'+type_text+':'+value+'}';
} else {
content = '{code:'+value+'}<br><br>{/code}<br>'
}
if(g5_editor.indexOf('ckeditor')!=-1 && !mobile) {
CKEDITOR.instances.wr_content.insertHtml(content);
} else if(g5_editor.indexOf('smarteditor')!=-1 && !mobile) {
oEditors.getById["wr_content"].exec("PASTE_HTML", [content]);
} else {
var wr_html = $("#wr_content").val();
var wr_emo = content;
wr_html += wr_emo;
$("#wr_content").val(wr_html);
}
}
</script>
<section class="board-write">
<div class="margin-bottom-10"></div>
<div class="headline"><h4><i class="fa fa-pencil"></i> <?php echo $GLOBALS["g5"]["title"]?></h4></div>
<form name="fwrite" id="fwrite" action="<?php echo $GLOBALS["action_url"]?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" class="sky-form">
<input type="hidden" name="uid" value="<?php echo $GLOBALS["uid"]?>">
<input type="hidden" name="w" value="<?php echo $GLOBALS["w"]?>">
<input type="hidden" name="bo_table" value="<?php echo $GLOBALS["bo_table"]?>">
<input type="hidden" name="wr_id" value="<?php echo $GLOBALS["wr_id"]?>">
<input type="hidden" name="sca" value="<?php echo $GLOBALS["sca"]?>">
<input type="hidden" name="sfl" value="<?php echo $GLOBALS["sfl"]?>">
<input type="hidden" name="stx" value="<?php echo $GLOBALS["stx"]?>">
<input type="hidden" name="spt" value="<?php echo $GLOBALS["spt"]?>">
<input type="hidden" name="sst" value="<?php echo $GLOBALS["sst"]?>">
<input type="hidden" name="sod" value="<?php echo $GLOBALS["sod"]?>">
<input type="hidden" name="page" value="<?php echo $GLOBALS["page"]?>">
<input type="hidden" name="board_skin_path" value="<?php echo EYOOM_CORE_PATH?>/board">
<input type="hidden" name="wr_1" id="wr_1" value="<?php echo $GLOBALS["wr_1"]?>">
<input type="hidden" name="wmode" id="wmode" value="<?php echo $GLOBALS["wmode"]?>">
<?php echo $GLOBALS["option_hidden"]?>
<div class="tbl_frm01 tbl_wrap">
<?php if($GLOBALS["is_name"]){?>
<section>
<label for="wr_name" class="label">이름<strong class="sound_only">필수</strong></label>
<label class="input margin-bottom-10">
<i class="icon-append fa fa-user"></i>
<input type="text" name="wr_name" value="<?php echo $GLOBALS["name"]?>" id="wr_name" required size="10" maxlength="20">
</label>
</section>
<?php }?>
<?php if($GLOBALS["is_password"]&&!$GLOBALS["is_admin"]){?>
<section>
<label for="wr_password" class="label">비밀번호<strong class="sound_only">필수</strong></label>
<label class="input margin-bottom-10">
<i class="icon-append fa fa-lock"></i>
<input type="password" name="wr_password" id="wr_password" required maxlength="20">
</label>
</section>
<?php }?>
<?php if($GLOBALS["is_email"]){?>
<section>
<label for="wr_email" class="label">이메일</label>
<label class="input margin-bottom-10">
<i class="icon-append fa fa-envelope-o"></i>
<input type="text" name="wr_email" value="<?php echo $GLOBALS["email"]?>" id="wr_email" size="50" maxlength="100">
</label>
</section>
<?php }?>
<?php if($GLOBALS["is_homepage"]){?>
<section>
<label for="wr_homepage" class="label">홈페이지</label>
<label class="input margin-bottom-10">
<i class="icon-append fa fa-home"></i>
<input type="text" name="wr_homepage" value="<?php echo $GLOBALS["homepage"]?>" id="wr_homepage" size="50">
</label>
</section>
<?php }?>
<section class="margin-top-20">
<?php if($GLOBALS["is_category"]){?>
<div class="margin-bottom-10">
<label class="select">
<select name="ca_name" id="ca_name" required class="form-control">
<option value="">선택하세요 - 필수</option>
<?php echo $GLOBALS["category_option"]?>
</select>
<i></i>
</label>
</div>
<?php }?>
<div>
<?php if($GLOBALS["is_notice"]||$GLOBALS["is_html"]||$GLOBALS["is_secret"]||$GLOBALS["is_mail"]||$GLOBALS["is_anonymous"]){?>
<?php if($GLOBALS["is_notice"]){?>
<label for="notice" class="checkbox"><input type="checkbox" id="notice" name="notice" value="1" <?php echo $GLOBALS["notice_checked"]?>><i></i>공지</label>
<?php }?>
<?php if($GLOBALS["is_html"]){?>
<?php if($GLOBALS["is_dhtml_editor"]){?>
<input type="hidden" value="html1" name="html">
<?php }else{?>
<label for="html" class="checkbox"><input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="<?php echo $GLOBALS["html_value"]?>" <?php echo $GLOBALS["html_checked"]?>><i></i>HTML</label>
<?php }?>
<?php }?>
<?php if($GLOBALS["is_secret"]){?>
<?php if($GLOBALS["is_admin"]||$GLOBALS["is_secret"]== 1){?>
<label for="secret" class="checkbox"><input type="checkbox" id="secret" name="secret" value="secret" <?php echo $GLOBALS["secret_checked"]?>><i></i>비밀글</label>
<?php }else{?>
<input type="hidden" name="secret" value="secret">
<?php }?>
<?php }?>
<?php if($GLOBALS["is_anonymous"]){?>
<label for="anonymous" class="checkbox"><input type="checkbox" id="anonymous" name="anonymous" value="y" <?php echo $GLOBALS["anonymous_checked"]?>><i></i>익명글</label>
<?php }?>
<?php if($GLOBALS["is_mail"]){?>
<label for="mail" class="checkbox"><input type="checkbox" id="mail" name="mail" value="mail" <?php echo $GLOBALS["recv_email_checked"]?>><i></i>답변메일받기</label>
<?php }?>
<?php }?>
</div>
</section>
<div class="margin-hr-10"></div>
<section>
<div>
<label for="wr_subject" class="sound_only">제목<strong class="sound_only"> 필수</strong></label>
<label class="input">
<i class="icon-prepend fa fa-edit"></i>
<input type="text" name="wr_subject" value="<?php echo $GLOBALS["subject"]?>" id="wr_subject" required class="form-control" size="50" maxlength="255" placeholder="제목">
<b class="tooltip tooltip-top-left">제목을 입력 해 주세요.</b>
</label>
</div>
<?php if($GLOBALS["is_member"]){?>
<div class="margin-top-10">
<script src="/js/autosave.js"></script>
<button type="button" id="btn_autosave" class="btn btn-e right">임시 저장된 글 (<span id="autosave_count"><?php echo $GLOBALS["autosave_count"]?></span>)</button>
<div class="clear"></div>
<div id="autosave_pop">
<strong>임시 저장된 글 목록</strong>
<div><span class="autosave_close"><i class="fa fa-times"></i></span></div>
<div class="clear"></div>
<ul></ul>
<div><span class="autosave_close btn-e btn-e-dark">닫기</span></div>
</div>
</div>
<?php }?>
</section>
<div class="margin-hr-10"></div>
<section>
<div class="wr_content">
<?php if(!$GLOBALS["is_member"]){?>
<div class="eb-alert eb-alert-danger">
<strong>Note!</strong> 글쓰기 시 회원만 동영상, 사운드클라우드, 코드, 이모티콘 첨부가 가능합니다.
</div>
<?php }?>
<div id="write-option">
<div class="panel panel-default" style="border:0;margin-bottom:0;box-shadow:none">
<a class="eb-button eb-button-mini eb-button-light" data-toggle="collapse" data-parent="#write-option" href="#collapse-video-wr">동영상</a>
<a class="eb-button eb-button-mini eb-button-light" data-toggle="collapse" data-parent="#write-option" href="#collapse-sound-wr">사운드클라우드</a>
<a class="eb-button eb-button-mini eb-button-light" data-toggle="collapse" data-parent="#write-option" href="#collapse-code-wr">코드</a>
<a class="eb-button eb-button-mini eb-button-red right" data-toggle="modal" data-target=".edit-guide-modal" onclick="return false;">에디터 가이드</a>
<a class="eb-button eb-button-mini eb-button-dark right emoticon" data-type="iframe" title="이모티콘" href="<?php echo EYOOM_CORE_URL?>/board/emoticon.php">이모티콘</a>
<div class="clear"></div>
<div id="collapse-video-wr" class="panel-collapse collapse">
<div class="eb-con-box margin-top-10">
<label class="input input-file">
<a href="javascript:;" class="button bg-color-light" id="btn_video" onclick="return false;">확인</a>
<input type="text" id="video_url" class="form-control" placeholder="동영상주소">
</label>
</div>
</div>
<div id="collapse-sound-wr" class="panel-collapse collapse">
<div class="eb-con-box margin-top-10">
<div class="margin-bottom-10">
<label class="input input-file">
<a href="javascript:;" class="button bg-color-light" id="btn_scloud" onclick="return false;">확인</a>
<input type="text" id="scloud_url" class="form-control" placeholder="사운드클라우드 음원주소">
</label>
</div>
<div class="t-right">
<a href="https://soundcloud.com/" target="_blank" class="eb-button eb-button-mini eb-button-light"><i class="fa fa-location-arrow"></i> 사운드클라우드 GO</a>
</div>
</div>
</div>
<div id="collapse-code-wr" class="panel-collapse collapse">
<div class="eb-con-box margin-top-10">
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">HTML</a>
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">PHP</a>
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">CSS</a>
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">JS</a>
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">JAVA</a>
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">XML</a>
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">PYTHON</a>
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">RUBY</a>
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">SASS</a>
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">SCALA</a>
<a href="javascript:;" class="ch_code btn-e-xs" onclick="return false;">SQL</a>
</div>
</div>
</div>
</div>
<div class="margin-bottom-10"></div>
<?php if($GLOBALS["write_min"]||$GLOBALS["write_max"]){?>
<p id="char_count_desc">이 게시판은 최소 <strong><?php echo $GLOBALS["write_min"]?></strong>글자 이상, 최대 <strong><?php echo $GLOBALS["write_max"]?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
<?php }?>
<?php echo $GLOBALS["editor_html"]?>
<?php if($GLOBALS["write_min"]||$GLOBALS["write_max"]){?>
<div id="char_count_wrap"><span id="char_count"></span>글자</div>
<?php }?>
</div>
</section>
<div class="margin-hr-10"></div>
<section>
<?php if($TPL_wr_link_1){foreach($TPL_VAR["wr_link"] as $TPL_K1=>$TPL_V1){?>
<div>
<label class="input">
<i class="icon-append fa fa-link"></i>
<input type="text" name="wr_link<?php echo $TPL_K1?>" value="<?php if($GLOBALS["w"]=='u'){?><?php echo $TPL_V1["link_val"]?><?php }?>" id="wr_link<?php echo $TPL_K1?>" class="form-control" size="50" placeholder="링크 <?php echo $TPL_K1?>">
<b class="tooltip tooltip-top-right">링크주소를 입력 해 주세요.</b>
</label>
</div>
<div class="margin-hr-10"></div>
<?php }}?>
</section>
<section>
<?php if($TPL_wr_file_1){foreach($TPL_VAR["wr_file"] as $TPL_K1=>$TPL_V1){?>
<div>
<label for="file" class="input input-file">
<div class="button bg-color-light"><input type="file" id="file" name="bf_file[]" value="사진선택" title="파일첨부 <?php echo $TPL_K1+ 1?> : 용량 <?php echo $GLOBALS["upload_max_filesize"]?> 이하만 업로드 가능" onchange="this.parentNode.nextSibling.value = this.value">파일<?php echo $TPL_K1+ 1?> 선택</div><input type="text" readonly>
</label>
</div>
<?php if($GLOBALS["is_file_content"]){?>
<div class="margin-top-10">
<label class="input">
<i class="icon-append fa fa-question-circle"></i>
<input type="text" name="bf_content[]" value="<?php if($GLOBALS["w"]=='u'){?><?php echo $TPL_V1["bf_content"]?><?php }?>" class="form-control" size="50" placeholder="파일<?php echo $TPL_K1+ 1?> 설명">
<b class="tooltip tooltip-top-right">파일<?php echo $TPL_K1+ 1?> 설명을 입력 해 주세요.</b>
</label>
</div>
<div class="clear"></div>
<?php }?>
<?php if($GLOBALS["w"]=='u'&&$TPL_V1["file"]){?>
<div>
<label for="bf_file_del<?php echo $TPL_K1?>" class="checkbox"><input type="checkbox" id="bf_file_del<?php echo $TPL_K1?>" name="bf_file_del[<?php echo $TPL_K1?>]" value="1"><i></i><?php echo $TPL_V1["source"]?> (<?php echo $TPL_V1["size"]?>) 파일삭제</label>
</div>
<?php }?>
<div class="margin-hr-10"></div>
<?php }}?>
</section>
<?php if(!$GLOBALS["is_member"]){?>
<section>
<label class="label">자동등록방지</label>
<div class="vc-captcha"><?php echo $GLOBALS["captcha_html"]?></div>
<div class="margin-bottom-20"></div>
</section>
<?php }?>
</div>
<div class="t-center margin-bottom-10">
<input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn-e">
<a href="<?php if($GLOBALS["wmode"]){?>javascript:history.go(-1)<?php }else{?>./board.php?bo_table=<?php echo $GLOBALS["bo_table"]?><?php }?>" class="btn-e btn-e-dark">취소</a>
</div>
</form>
<script>
<?php if($GLOBALS["write_min"]||$GLOBALS["write_max"]){?>
// 글자수 제한
var char_min = parseInt(<?php echo $GLOBALS["write_min"]?>); // 최소
var char_max = parseInt(<?php echo $GLOBALS["write_max"]?>>); // 최대
check_byte("wr_content", "char_count");
$(function() {
$("#wr_content").on("keyup", function() {
check_byte("wr_content", "char_count");
});
});
<?php }?>
function html_auto_br(obj)
{
if (obj.checked) {
result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
if (result)
obj.value = "html2";
else
obj.value = "html1";
}
else
obj.value = "";
}
function fwrite_submit(f)
{
<?php echo $GLOBALS["editor_js"]?> // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함
<?php if($GLOBALS["is_anonymous"]){?>
var wr_1 = '<?php echo $GLOBALS["wr_1"]?>';
if($("#anonymous").is(':checked')) {
wr_1 = wr_1+'|y';
$("#wr_1").val(wr_1);
}
<?php }?>
var subject = "";
var content = "";
$.ajax({
url: g5_bbs_url+"/ajax.filter.php",
type: "POST",
data: {
"subject": f.wr_subject.value,
"content": f.wr_content.value
},
dataType: "json",
async: false,
cache: false,
success: function(data, textStatus) {
subject = data.subject;
content = data.content;
}
});
if (subject) {
alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
f.wr_subject.focus();
return false;
}
if (content) {
alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
if (typeof(ed_wr_content) != "undefined")
ed_wr_content.returnFalse();
else
f.wr_content.focus();
return false;
}
if (document.getElementById("char_count")) {
if (char_min > 0 || char_max > 0) {
var cnt = parseInt(check_byte("wr_content", "char_count"));
if (char_min > 0 && char_min > cnt) {
alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
return false;
}
else if (char_max > 0 && char_max < cnt) {
alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
return false;
}
}
}
<?php echo $GLOBALS["captcha_js"]?> // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함
document.getElementById("btn_submit").disabled = "disabled";
return true;
}
</script>
</section>
<div class="modal fade edit-guide-modal" tabindex="-1" role="dialog" aria-labelledby="EditGuideModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
<h4><i class="fa fa-edit"></i> 에디터 가이드</h4>
</div>
<div class="modal-body">
<h5 class="margin-bottom-10"><strong><i class="fa fa-info-circle"></i> 동영상첨부는 에디터 본문에서 원하는 위치에 <code>{동영상:동영상 공유주소}</code> 형태로 입력하세요.</strong></h5>
<span class="color-red">ex)</span> Youtube 동영상 공유주소가 http://www.youtube.com/watch?v=tEnsqpThaFg 일 경우
<pre class="brush: html;">
					{동영상:http://www.youtube.com/watch?v=tEnsqpThaFg}
				</pre>
<span class="color-red">ex)</span> Vimeo 동영상 공유주소가 http://vimeo.com/47387431 일 경우
<pre class="brush: html;">
					{동영상:http://vimeo.com/47387431}
				</pre>
<div class="eb-alert">
<strong>Info!</strong> 동영상첨부는 Youtube, Viemo, 네이버 티비캐스트, 다음 팟, 데일리모션, 판도라, 테드, 태그스토리, 슬라이드쉐어 등이 가능합니다.
</div>
<div class="clear-line"></div>
<h5 class="margin-bottom-10"><strong><i class="fa fa-info-circle"></i> 사운드클라우드의 음원 첨부 가능합니다. <code>{soundcloud:SoundCloud 공유주소}</code></strong></h5>
<p>- 사운드클라우드 사이트 주소: <a href="https://soundcloud.com" target="_blank">https://soundcloud.com</a></p>
<span class="color-red">ex)</span> SoundCloud 음원 공유주소가 https://soundcloud.com/chen-winnie-1/lee-sung-yeol-misaeng-ost 일 경우
<pre class="brush: html;">
					{soundcloud:https://soundcloud.com/chen-winnie-1/lee-sung-yeol-misaeng-ost}
				</pre>
<div class="clear-line"></div>
<h5><strong><i class="fa fa-info-circle"></i> 코드하일라이트를 사용하실 경우 아래의 예제를 참고하세요.</strong></h5>
<pre class="brush: html;">
					{code:html}
					html 코드입력...
					{/code}
				</pre>
<div class="eb-alert">
<strong>Info!</strong> code 종류는 html, xml, css, js, php, python, java, ruby 등이 있습니다.
</div>
<div class="clear-line"></div>
<div class="eb-alert eb-alert-danger">
<strong>Info!</strong> 위 동영상 및 SoundCloud 사용법은 댓글 창에서도 동일하게 적용가능합니다.
</div>
</div>
</div>
</div>
</div>
<style>
.margin-hr-0 {height:1px;border-top:1px dotted #ddd;margin:0 0 10px;clear:both}
.margin-hr-10 {height:1px;border-top:1px dotted #ddd;margin:10px 0;clear:both}
.margin-top-m-1 {margin-top:-1px}
.board-write .tbl_frm01 textarea {width:100% !important;height:200px;border:0px;box-shadow:0 0 1px #000; background:#f8f8f8;padding:0px;line-height:1.5;margin:10px 0}
.board-write .input-group-btn .btn {cursor:inherit}
#char_count_desc {display:block;margin:0 0 5px;padding:0}
#char_count_wrap {margin:5px 0 0;text-align:right}
#char_count {font-weight:bold}
#autosave_wrapper {position:relative}
#autosave_pop {display:none;z-index:10;position:absolute;top:280px;right:10px;padding:8px;width:320px;height:auto !important;height:180px;max-height:180px;border:1px solid #565656;background:#fff;overflow-y:scroll}
html.no-overflowscrolling #autosave_pop {height:auto;max-height:10000px !important}
#autosave_pop strong {position:absolute;font-size:0;line-height:0;overflow:hidden}
#autosave_pop div {text-align:right}
#autosave_pop button {margin:0;padding:0;border:0;background:transparent;margin-left:10px}
#autosave_pop ul {margin:10px 0;padding:0;border-top:1px solid #e9e9e9;list-style:none}
#autosave_pop li {padding:8px 5px;border-bottom:1px solid #e9e9e9;zoom:1}
#autosave_pop li:after {display:block;visibility:hidden;clear:both;content:""}
#autosave_pop a {display:block;float:left}
#autosave_pop span {display:block;float:right}
.autosave_close {cursor:pointer}
.autosave_content {display:none}
/* Smart Editor Style */
.cke_sc {margin-bottom:10px}
.btn_cke_sc {padding:0 10px}
.cke_sc_def {padding:10px;margin-bottom:10px;margin-top:10px}
.cke_sc_def button {padding:3px 15px;background:#53535a;color:#fff;border:none}
/* CK Editor Style */
.cke_chrome {border:1px solid #ddd !important;box-shadow:none !important}
.cke_top {background:#fafafa !important;border-bottom:1px solid #ddd !important;box-shadow:none !important}
.cke_bottom {background:#fafafa !important;border-top:1px solid #ddd !important;box-shadow:none !important}
.cke_toolgroup {border:1px solid #c5c5c5 !important;border-bottom-color:#c5c5c5 !important;box-shadow:none !important;background:#fff !important;background-image:none !important}
.cke_combo_button {border:1px solid #c5c5c5 !important;border-bottom-color:#c5c5c5 !important;box-shadow:none !important;background:#fff !important;background-image:none !important}
</style>