<?php /* Template_ 2.2.7 2015/07/30 21:30:30 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\board\qbasic\view_comment.skin.html 000022584 */  $this->include_("eb_nameview");
$TPL_cmt_list_1=empty($TPL_VAR["cmt_list"])||!is_array($TPL_VAR["cmt_list"])?0:count($TPL_VAR["cmt_list"]);?>
<?php if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/venobox/venobox.css" type="text/css" media="screen">',0);
?>
<!--[if lt IE 9]>
<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/css/sky-forms-ie8.css">
<![endif]-->
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/venobox/venobox.min.js"></script>
<script>
// 글자수 제한
var char_min = parseInt(<?php echo $GLOBALS["comment_min"]?>); // 최소
var char_max = parseInt(<?php echo $GLOBALS["comment_max"]?>); // 최대
</script>
<style>
.margin-hr-0 {height:1px;border-top:1px dotted #ddd;margin:0 0 10px;clear:both}
.margin-hr-10 {height:1px;border-top:1px dotted #ddd;margin:10px 0;clear:both}
.margin-top-m-1 {margin-top:-1px}
.view-comment {border-left:1px dotted #e5e5e5;border-right:1px dotted #e5e5e5;background:#fcfcfc}
.view-comment .eb-comment {overflow:visible;margin-top:0;padding:10px 10px 10px 10px;border-top:1px solid #e5e5e5;border-bottom:1px solid #e5e5e5;border-left:1px dotted #e5e5e5;margin-top:-1px;margin-left:-1px;background:#fff}
.view-comment .eb-comment .comment-body {overflow:visible}
.view-comment .eb-comment .comment-body p {color:#777;line-height:1.4}
.basic-bs .eb-comment .comment-heading {margin:0 0 5px;font-size:13px;position:relative}
.view-comment .eb-comment .comment-heading a,.view-comment .eb-comment .comment-heading a:hover {color:#555}
.view-comment .eb-comment .comment-heading strong {padding-right:5px}
.view-comment .eb-comment .comment-heading small {top:3px;right:0;color:#999;font-size:12px;position:absolute}
.view-comment .view-comment-photo img {-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;width:30px;height:30px;margin-bottom:5px}
.view-comment .view-comment-photo .fa-user {-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;width:30px;height:30px;background:#eee;color:#84848a;line-height:30px;font-size:16px;text-align:center;margin-bottom:5px}
.view-comment .view-comment-photo {float:left;margin-right:5px}
.view-comment .comment-body-pn {padding-left:0px}
.view-comment .comment-name-w {padding-top:7px;padding-bottom:15px}
.view-comment .comment-name {font-weight:bold}
.view-comment .comment-ip {font-size:11px}
.view-comment .comment-btn a {margin-left:5px}
.view-comment .comment-btn a.like-btn1 {padding-left:20px;padding-right:20px;margin-left:10px}
.view-comment .comment-btn a.like-btn2 {padding-left:20px;padding-right:20px}
.view-comment .syntaxhighlighter {border-top:1px solid #eee;border-bottom:1px solid #eee;padding:10px 0}
.comment-area .view-comment-write-box {border:1px solid #ddd;margin-top:10px}
.comment-area .sky-form header {padding:8px 16px}
.comment-area .sky-form footer {padding:10px 16px}
.comment-area .sky-form button {margin:0}
#bo_vc_send_sns li {float:left;margin:0 5px 15px 0px;list-style:none}
#bo_vc_send_sns li input {margin:5px 5px 15px 5px}
</style>
<div class="headline"><h4><i class="fa fa-comments"></i> 댓글목록</h4></div>
<div class="margin-bottom-20"></div>
<div class="comment-area">
<div class="view-comment">
<?php if($TPL_cmt_list_1){foreach($TPL_VAR["cmt_list"] as $TPL_V1){?>
<h1 style="display:none;"><?php echo $TPL_V1["wr_name"]?>님 글에 달린 댓글</h1>
<div class="clear"></div>
<div id="c_<?php echo $TPL_V1["comment_id"]?>" class="eb-comment" style="<?php if($TPL_V1["cmt_depth"]){?>margin-left:<?php echo $TPL_V1["cmt_depth"]?>px;<?php }?>">
<?php if($TPL_VAR["eyoom_board"]["bo_use_profile_photo"]){?>
<div class="comment-photo">
<span class="view-comment-photo"><?php if($TPL_V1["mb_photo"]){?><?php echo $TPL_V1["mb_photo"]?><?php }else{?><span class="user_icon"><i class="fa fa-user"></i></span><?php }?></span>
</div>
<div class="comment-body">
<?php }else{?>
<div class="comment-body-pn">
<?php }?>
<div class="comment-heading">
<p class="comment-name-w">
<?php if($TPL_V1["gnu_icon"]){?>
<span style='display:inline-block;margin-right:2px;'><img src="<?php echo $TPL_V1["gnu_icon"]?>" align="absmiddle"></span>
<?php }?>
<?php if($TPL_V1["eyoom_icon"]){?>
<span style='display:inline-block;margin-right:2px;'><img src="<?php echo $TPL_V1["eyoom_icon"]?>" align="absmiddle"></span>
<?php }?>
<span class="comment-name"><?php echo eb_nameview('basic',$TPL_V1["mb_id"],$TPL_V1["wr_name"],$TPL_V1["wr_email"],$TPL_V1["wr_homepage"])?></span> <?php if($GLOBALS["is_ip_view"]){?><span class="comment-ip"><?php echo $TPL_V1["ip"]?></span><?php }?>
<span class="right">
<?php if($TPL_VAR["eyoom_board"]["bo_sel_date_type"]=='1'){?>
<i class="fa fa-clock-o"></i> <?php echo $TPL_VAR["eb"]->date_time('Y.m.d H:i',$TPL_V1["datetime"])?>
<?php }elseif($TPL_VAR["eyoom_board"]["bo_sel_date_type"]=='2'){?>
<i class="fa fa-clock-o"></i> <?php echo $TPL_VAR["eb"]->date_format('Y.m.d H:i',$TPL_V1["datetime"])?>
<?php }?>
</span>
</p>
</div>
<p>
<?php if(strstr($TPL_V1["wr_option"],'secret')){?><i class="fa fa-lock color-red"></i> <?php }?>
<?php if($TPL_V1["imgsrc"]){?>
<img src="<?php echo $TPL_V1["imgsrc"]?>" class="img-responsive"><br>
<?php }?>
<?php echo $TPL_V1["comment"]?>
</p>
<div class="margin-bottom-15"></div>
<div class="comment-btn t-right">
<?php if($TPL_V1["is_reply"]||$TPL_V1["is_edit"]||$TPL_V1["is_del"]){?>
<?php if($TPL_V1["is_reply"]){?><a href="<?php echo $TPL_V1["c_reply_href"]?>" onclick="comment_box('<?php echo $TPL_V1["comment_id"]?>', 'c'); return false;" class="eb-button eb-button-mini eb-button-light">댓글</a><?php }?>
<?php if($TPL_V1["is_edit"]){?><a href="<?php echo $TPL_V1["c_edit_href"]?>" onclick="comment_box('<?php echo $TPL_V1["comment_id"]?>', 'cu'); return false;" class="eb-button eb-button-mini eb-button-light">수정</a><?php }?>
<?php if($TPL_V1["is_del"]){?><a href="<?php echo $TPL_V1["del_link"]?>" onclick="return comment_delete();" class="eb-button eb-button-mini eb-button-light">삭제</a><?php }?>
<?php }?>
<?php if($TPL_V1["c_good_href"]||$TPL_V1["c_nogood_href"]){?>
<?php if($TPL_V1["c_good_href"]){?>
<a href="<?php echo $TPL_V1["c_good_href"]?>" id="goodcmt_button_<?php echo $TPL_V1["comment_id"]?>" class="goodcmt_button eb-button eb-button-mini eb-button-dark like-btn1" type="button" title="goodcmt"><i class="fa fa-thumbs-up"></i> <strong class="board-cmt-act-good color-orange"><?php if($TPL_V1["good"]){?><?php echo $TPL_V1["good"]?><?php }else{?>0<?php }?></strong></a>
<?php }?>
<?php if($TPL_V1["c_nogood_href"]){?>
<a href="<?php echo $TPL_V1["c_nogood_href"]?>" id="nogoodcmt_button_<?php echo $TPL_V1["comment_id"]?>" class="nogoodcmt_button eb-button eb-button-mini eb-button-dark like-btn2" type="button" title="nogoodcmt"><i class="fa fa-thumbs-down"></i> <strong class="board-cmt-act-nogood color-grey"><?php if($TPL_V1["nogood"]){?><?php echo $TPL_V1["nogood"]?><?php }else{?>0<?php }?></strong></a>
<?php }?>
<?php }?>
</div>
<span id="edit_<?php echo $TPL_V1["comment_id"]?>"></span>				<span id="reply_<?php echo $TPL_V1["comment_id"]?>"></span>
<input type="hidden" value="<?php echo strstr($TPL_V1["wr_option"],'secret')?>" id="secret_comment_<?php echo $TPL_V1["comment_id"]?>">
<input type="hidden" value="<?php echo $TPL_V1["anonymous_id"]?>" id="anonymous_id_<?php echo $TPL_V1["comment_id"]?>">
<textarea id="save_comment_<?php echo $TPL_V1["comment_id"]?>" style="display:none"><?php echo $TPL_V1["content1"]?></textarea>
<div class="clear"></div>
</div>
</div>
<?php }}else{?>
<div class="eb-comment margin-bottom-20">
<p id="bo_vc_empty" class="t-center">등록된 댓글이 없습니다.</p>
</div>
<?php }?>
</div>
<div class="margin-bottom-20"></div>
<?php if($GLOBALS["is_comment_write"]){?>
<div id="view-comment-write">
<form name="fviewcomment" action="./write_comment_update.php" onsubmit="return fviewcomment_submit(this);" method="post" autocomplete="off" class="sky-form view-comment-write-box" enctype="multipart/form-data">
<input type="hidden" name="w" value="<?php if(!$GLOBALS["w"]){?>c<?php }else{?><?php echo $GLOBALS["w"]?><?php }?>" id="w">
<input type="hidden" name="bo_table" value="<?php echo $GLOBALS["bo_table"]?>">
<input type="hidden" name="wr_id" value="<?php echo $GLOBALS["wr_id"]?>">
<input type="hidden" name="comment_id" value="<?php echo $GLOBALS["c_id"]?>" id="comment_id">
<input type="hidden" name="sca" value="<?php echo $GLOBALS["sca"]?>">
<input type="hidden" name="sfl" value="<?php echo $GLOBALS["sfl"]?>">
<input type="hidden" name="stx" value="<?php echo $GLOBALS["stx"]?>">
<input type="hidden" name="spt" value="<?php echo $GLOBALS["spt"]?>">
<input type="hidden" name="page" value="<?php echo $GLOBALS["page"]?>">
<input type="hidden" name="is_good" value="">
<input type="hidden" name="board_skin_path" value="<?php echo EYOOM_CORE_PATH?>/board">
<input type="hidden" name="wr_1" value="<?php echo $GLOBALS["wr_1"]?>">
<input type="hidden" name="cmt_amt" value="<?php echo $GLOBALS["cmt_amt"]?>">
<input type="hidden" name="wmode" value="<?php echo $GLOBALS["wmode"]?>">
<header><i class="fa fa-pencil"></i> 댓글쓰기</header>
<div class="padding-all-10">
<div class="row">
<section class="col col-4">
<label class="checkbox left"><input type="checkbox" name="wr_secret" value="secret" id="wr_secret"><i></i>비밀글 사용</label>
<?php if($GLOBALS["is_anonymous"]){?>
<label class="checkbox left margin-left-10"><input type="checkbox" name="anonymous" value="y" id="anonymous"><i></i>익명글 사용</label>
<?php }?>
<div class="clear"></div>
</section>
<?php if(!$GLOBALS["is_member"]){?>
<section class="col col-4">
<label for="wr_name" class="label">이름<strong class="sound_only"> 필수</strong></label>
<label class="input">
<i class="icon-append fa fa-user"></i>
<input type="text" name="wr_name" value="<?php echo get_cookie('ck_sns_name')?>" id="wr_name" required size="5" maxLength="20">
</label>
</section>
<section class="col col-4">
<label for="wr_password" class="label">비밀번호<strong class="sound_only"> 필수</strong></label>
<label class="input">
<i class="icon-append fa fa-lock"></i>
<input type="password" name="wr_password" id="wr_password" required size="10" maxLength="20">
</label>
</section>
<?php }?>
</div>
<?php if($TPL_VAR["board"]["bo_use_sns"]&&($TPL_VAR["config"]["cf_facebook_appid"]||$TPL_VAR["config"]["cf_twitter_key"])){?>
<label class="label">SNS 동시등록</label>
<div id="bo_vc_send_sns"></div>
<div class="clear"></div>
<?php }?>
<section>
<div id="comment-option">
<div class="panel panel-default" style="border:0;margin-bottom:0;box-shadow:none">
<a class="eb-button eb-button-mini eb-button-light" data-toggle="collapse" data-parent="#comment-option" href="#collapse-image-cm">이미지첨부</a>
<a class="eb-button eb-button-mini eb-button-light" data-toggle="collapse" data-parent="#comment-option" href="#collapse-video-cm">동영상</a>
<a class="eb-button eb-button-mini eb-button-light" data-toggle="collapse" data-parent="#comment-option" href="#collapse-sound-cm">사운드클라우드</a>
<a class="eb-button eb-button-mini eb-button-light" data-toggle="collapse" data-parent="#comment-option" href="#collapse-code-cm">코드</a>
<a class="eb-button eb-button-mini eb-button-dark right emoticon" data-type="iframe" title="이모티콘" href="<?php echo EYOOM_CORE_URL?>/board/emoticon.php">이모티콘</a>
<div class="clear"></div>
<div id="collapse-image-cm" class="panel-collapse collapse">
<div class="eb-con-box margin-top-10">
<label for="file" class="input input-file">
<div class="button bg-color-light"><input type="file" id="file" name="cmt_file[]" value="이미지선택" title="파일첨부 : 용량 <?php echo $GLOBALS["upload_max_filesize"]?> 이하만 업로드 가능" onchange="this.parentNode.nextSibling.value = this.value">Image</div><input type="text" readonly>
</label>
</div>
</div>
<div id="collapse-video-cm" class="panel-collapse collapse">
<div class="eb-con-box margin-top-10">
<label class="input input-file">
<a href="javascript:;" class="button bg-color-light" id="btn_video" onclick="return false;">확인</a>
<input type="text" id="video_url" class="form-control" placeholder="동영상주소">
</label>
</div>
</div>
<div id="collapse-sound-cm" class="panel-collapse collapse">
<div class="eb-con-box margin-top-10">
<div class="row">
<div class="col col-12 margin-bottom-10">
<label class="input input-file">
<a href="javascript:;" class="button bg-color-light" id="btn_scloud" onclick="return false;">확인</a>
<input type="text" id="scloud_url" class="form-control" placeholder="사운드클라우드 음원주소">
</label>
</div>
<div class="col col-12 t-right">
<a href="https://soundcloud.com/" target="_blank" class="eb-button eb-button-mini eb-button-light"><i class="fa fa-location-arrow"></i> 사운드클라우드 GO</a>
</div>
<div class="clear"></div>
</div>
</div>
</div>
<div id="collapse-code-cm" class="panel-collapse collapse">
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
<label class="textarea textarea-resizable">
<?php if($GLOBALS["comment_min"]||$GLOBALS["comment_max"]){?><strong id="char_cnt"><span id="char_count"></span>글자</strong><?php }?>
<textarea rows="7" id="wr_content" name="wr_content" maxlength="10000" required title="내용" <?php if($GLOBALS["comment_min"]||$GLOBALS["comment_max"]){?>onkeyup="check_byte('wr_content', 'char_count');"<?php }?>><?php echo $GLOBALS["c_wr_content"]?></textarea>
<?php if($GLOBALS["comment_min"]||$GLOBALS["comment_max"]){?><script> check_byte('wr_content', 'char_count'); </script><?php }?>
<script>
$("textarea#wr_content[maxlength]").live("keyup change", function() {
var str = $(this).val()
var mx = parseInt($(this).attr("maxlength"))
if (str.length > mx) {
$(this).val(str.substr(0, mx));
return false;
}
});
</script>
</label>
<div class="note"><strong>Note:</strong> 댓글은 자신을 나타내는 얼굴입니다. 무분별한 댓글, 욕설, 비방 등을 삼가하여 주세요.</div>
</section>
<?php if(!$GLOBALS["is_member"]){?>
<section>
<label class="label">자동등록방지</label>
<div class="vc-captcha"><?php echo $GLOBALS["captcha_html"]?></div>
</section>
<?php }?>
</div>
<footer>
<button type="submit" id="btn_submit" class="btn-e pull-right" value="댓글등록">댓글등록</button>
</footer>
</form>
</div>
</div>
<script>
var save_before = '';
var save_html = document.getElementById('view-comment-write').innerHTML;
function set_emoticon(emoticon) {
var type='emoticon';
set_textarea_contents(type,emoticon);
}
function set_textarea_contents(type,value) {
var type_text = '';
var content = '';
switch(type) {
case 'emoticon': type_text = '이모티콘'; break;
case 'video': type_text = '동영상'; break;
case 'code': type_text = 'code'; break;
case 'sound': type_text = 'soundcloud'; break;
}
if(type_text != 'code') {
content = '{'+type_text+':'+value+'}';
} else {
content = '{code:'+value+'}\n\n{/code}\n'
}
var wr_html = $("#wr_content").val();
var wr_emo = content;
wr_html += wr_emo;
$("#wr_content").val(wr_html);
}
function good_and_write()
{
var f = document.fviewcomment;
if (fviewcomment_submit(f)) {
f.is_good.value = 1;
f.submit();
} else {
f.is_good.value = 0;
}
}
function fviewcomment_submit(f) {
var pattern = /(^\s*)|(\s*$)/g; // \s 공백 문자
f.is_good.value = 0;
<?php if($GLOBALS["is_anonymous"]){?>
var wr_1 = '<?php echo $GLOBALS["wr_1"]?>';
if($("#anonymous").is(':checked')) {
wr_1 = wr_1+'|y';
f.wr_1.value=wr_1;
}
<?php }?>
var subject = "";
var content = "";
$.ajax({
url: g5_bbs_url+"/ajax.filter.php",
type: "POST",
data: {
"subject": "",
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
if (content) {
alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
f.wr_content.focus();
return false;
}
// 양쪽 공백 없애기
var pattern = /(^\s*)|(\s*$)/g; // \s 공백 문자
document.getElementById('wr_content').value = document.getElementById('wr_content').value.replace(pattern, "");
if (char_min > 0 || char_max > 0)
{
check_byte('wr_content', 'char_count');
var cnt = parseInt(document.getElementById('char_count').innerHTML);
if (char_min > 0 && char_min > cnt)
{
alert("댓글은 "+char_min+"글자 이상 쓰셔야 합니다.");
return false;
} else if (char_max > 0 && char_max < cnt)
{
alert("댓글은 "+char_max+"글자 이하로 쓰셔야 합니다.");
return false;
}
}
else if (!document.getElementById('wr_content').value)
{
alert("댓글을 입력하여 주십시오.");
return false;
}
if (typeof(f.wr_name) != 'undefined')
{
f.wr_name.value = f.wr_name.value.replace(pattern, "");
if (f.wr_name.value == '')
{
alert('이름이 입력되지 않았습니다.');
f.wr_name.focus();
return false;
}
}
if (typeof(f.wr_password) != 'undefined')
{
f.wr_password.value = f.wr_password.value.replace(pattern, "");
if (f.wr_password.value == '')
{
alert('비밀번호가 입력되지 않았습니다.');
f.wr_password.focus();
return false;
}
}
<?php if($is_guest) echo chk_captcha_js();  ?>
document.getElementById("btn_submit").disabled = "disabled";
return true;
}
function comment_box(comment_id, work)
{
var el_id;
// 댓글 아이디가 넘어오면 답변, 수정
if (comment_id)
{
if (work == 'c')
el_id = 'reply_' + comment_id;
else
el_id = 'edit_' + comment_id;
}
else
el_id = 'view-comment-write';
if (save_before != el_id)
{
if (save_before)
{
document.getElementById(save_before).style.display = 'none';
document.getElementById(save_before).innerHTML = '';
}
document.getElementById(el_id).style.display = '';
document.getElementById(el_id).innerHTML = save_html;
// 댓글 수정
if (work == 'cu')
{
document.getElementById('wr_content').value = document.getElementById('save_comment_' + comment_id).value;
if (typeof char_count != 'undefined')
check_byte('wr_content', 'char_count');
if (document.getElementById('secret_comment_'+comment_id).value)
document.getElementById('wr_secret').checked = true;
else
document.getElementById('wr_secret').checked = false;
<?php if($GLOBALS["is_anonymous"]){?>
if (document.getElementById('anonymous_id_'+comment_id).value)
document.getElementById('anonymous').checked = true;
else
document.getElementById('anonymous').checked = false;
<?php }?>
}
document.getElementById('comment_id').value = comment_id;
document.getElementById('w').value = work;
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
$("#scloud_url").val('');
});
if(save_before)
$("#captcha_reload").trigger("click");
save_before = el_id;
}
}
function comment_delete()
{
return confirm("이 댓글을 삭제하시겠습니까?");
}
comment_box('', 'c'); // 댓글 입력폼이 보이도록 처리하기위해서 추가 (root님)
<?php if($TPL_VAR["board"]["bo_use_sns"]&&($TPL_VAR["config"]["cf_facebook_appid"]||$TPL_VAR["config"]["cf_twitter_key"])){?>
// sns 등록
$(function() {
$("#bo_vc_send_sns").load(
"<?php echo G5_SNS_URL?>/view_comment_write.sns.skin.php?bo_table=<?php echo $GLOBALS["bo_table"]?>",
function() {
save_html = document.getElementById('view-comment-write').innerHTML;
}
);
});
<?php }?>
</script>
<script>
$(function() {
// 댓글 추천, 비추천
$(".goodcmt_button, .nogoodcmt_button").click(function() {
var $tx;
if($(this).attr('title') == "goodcmt")
$tx = $(".board-cmt-act-good");
else
$tx = $(".board-cmt-act-nogood");
excute_goodcmt(this.href, $(this), $tx);
return false;
});
});
function excute_goodcmt(href, $el, $tx)
{
$.post(
href,
{ js: "on" },
function(data) {
if(data.error) {
alert(data.error);
return false;
}
if(data.count) {
$el.find("strong").text(number_format(String(data.count)));
if($tx.attr("id").search("nogood") > -1) {
$tx.text("이 글을 비추천하셨습니다.");
$tx.fadeIn(200).delay(2500).fadeOut(200);
} else {
$tx.text("이 글을 추천하셨습니다.");
$tx.fadeIn(200).delay(2500).fadeOut(200);
}
}
}, "json"
);
}
$('.accordion dt').on('click', function () {
var current_dt = $(this);
//dd of just clicked dt not active - direct sibling
if (!$(this).next('dd').hasClass('active')){
//call back function interprets this as selected $('dd')
//checking if any other sibling dd's active
if (current_dt.siblings('dd.active').length) {
//find dd with a class of active before sliding up
current_dt
.siblings('dd.active')
.slideUp(function() {
current_dt
.next('dd')
.slideDown()
.addClass('active');
})
.removeClass('active')
.find('dd.active')
.hide()
.removeClass('active');
} else {
current_dt.next('dd').slideDown().addClass('active');
}
} else {
//dd of just clicked dt is active - close form
current_dt.next('dd').slideUp().removeClass('active');
}
});
</script>
<?php }?>
<!--[if lt IE 9]>
<script src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/sky-forms-ie8.js"></script>
<![endif]-->