<?php /* Template_ 2.2.7 2015/07/31 23:28:44 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\member\basic\register_form.skin.html 000022106 */ ?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="register-form">
<script src="/js/jquery.register_form.js"></script>
<?php if($TPL_VAR["config"]["cf_cert_use"]&&($TPL_VAR["config"]["cf_cert_ipin"]||$TPL_VAR["config"]["cf_cert_hp"])){?>
<script src="/js/certify.js"></script>
<?php }?>
<form id="fregisterform" name="fregisterform" action="<?php echo $GLOBALS["register_action_url"]?>" onsubmit="return fregisterform_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" class="sky-form">
<input type="hidden" name="w" value="<?php echo $GLOBALS["w"]?>">
<input type="hidden" name="url" value="<?php echo $GLOBALS["urlencode"]?>">
<input type="hidden" name="agree" value="<?php echo $GLOBALS["agree"]?>">
<input type="hidden" name="agree2" value="<?php echo $GLOBALS["agree2"]?>">
<input type="hidden" name="cert_type" value="<?php echo $TPL_VAR["member"]["mb_certify"]?>">
<input type="hidden" name="cert_no" value="">
<?php if(isset($TPL_VAR["member"]["mb_sex"])){?><input type="hidden" name="mb_sex" value="<?php echo $TPL_VAR["member"]["mb_sex"]?>"><?php }?>
<?php if(isset($TPL_VAR["member"]["mb_nick_date"])&&$TPL_VAR["member"]["mb_nick_date"]>date("Y-m-d",G5_SERVER_TIME-($TPL_VAR["config"]["cf_nick_modify"]* 86400))){?>
<input type="hidden" name="mb_nick_default" value="<?php echo $TPL_VAR["member"]["mb_nick"]?>">
<input type="hidden" name="mb_nick" value="<?php echo $TPL_VAR["member"]["mb_nick"]?>">
<?php }?>
<div class="register-box">
<header><i class="fa fa-key"></i> 사이트 이용정보 입력</header>
<fieldset>
<seciton>
<label for="reg_mb_id" class="label">
아이디<strong class="sound_only"> 필수</strong>
<?php if($GLOBALS["w"]==''){?>
<span class="right">
<a href="javascript:;" class="eb-button eb-button-mini eb-button-dark" type="button" onclick="check_duplication('mb_id');"><span class="color-white">중복체크</span></a>
</span>
<div class="clear"></div>
<?php }?>
</label>
<label class="input">
<i class="icon-prepend fa fa-user"></i>
<input type="text" name="mb_id" value="<?php echo $TPL_VAR["member"]["mb_id"]?>" id="reg_mb_id" <?php if($GLOBALS["w"]!=''){?>required readonly<?php }?> minlength="3" maxlength="20">
<?php if($GLOBALS["w"]==''){?><input type="hidden" name="mb_id_duplicated" id="mb_id_duplicated"><?php }?>
<span id="msg_mb_id"></span>
</label>
</seciton>
<div class="margin-hr-10"></div>
<section>
<label for="reg_mb_password" class="label">비밀번호<strong class="sound_only"> 필수</strong></label>
<label class="input">
<i class="icon-prepend fa fa-lock"></i>
<input type="password" name="mb_password" id="reg_mb_password" <?php if($GLOBALS["w"]!=''){?>required<?php }?> minlength="3" maxlength="20">
</label>
</section>
<section>
<label for="wr_password" class="label">비밀번호 확인<strong class="sound_only"> 필수</strong></label>
<label class="input">
<i class="icon-prepend fa fa-lock"></i>
<input type="password" name="mb_password_re" id="reg_mb_password_re" <?php if($GLOBALS["w"]!=''){?>required<?php }?> minlength="3" maxlength="20">
</label>
</section>
</fieldset>
<header class="border-top"><i class="fa fa-male"></i> 개인정보 입력</header>
<fieldset>
<section>
<label for="reg_mb_name" class="label">이름<strong class="sound_only">필수</strong></label>
</section>
<div class="clear"></div>
<section>
<label class="input">
<i class="icon-prepend fa fa-male"></i>
<input type="text" name="mb_name" id="reg_mb_name"  value="<?php echo $TPL_VAR["member"]["mb_name"]?>" <?php if($GLOBALS["w"]!=''){?>required readonly<?php }?> size="10">
</label>
</section>
<section>
<?php if($TPL_VAR["config"]["cf_cert_use"]){?>
<?php if($TPL_VAR["config"]["cf_cert_ipin"]){?>
<button type="button" id="win_ipin_cert" class="btn-e btn-e-dark">아이핀 본인확인</button>
<?php }?>
<?php if($TPL_VAR["config"]["cf_cert_hp"]){?>
<button type="button" id="win_hp_cert" class="btn-e btn-e-dark">휴대폰 본인확인</button>
<?php }?>
<noscript>본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.</noscript>
<?php }?>
</section>
<div class="clear"></div>
<?php if($TPL_VAR["config"]["cf_cert_use"]){?>
<section>
<div class="eb-alert eb-alert-warning margin-bottom-10 margin-top-10"><strong>Note:</strong> 아이핀 본인확인 후에는 이름이 자동 입력되고 휴대폰 본인확인 후에는 이름과 휴대폰번호가 자동 입력되어 수동으로 입력할수 없게 됩니다.</div>
</section>
<?php }?>
<?php if($TPL_VAR["config"]["cf_cert_use"]&&$TPL_VAR["member"]["mb_certify"]){?>
<section>
<div id="msg_certify">
<strong><?php if($TPL_VAR["member"]["mb_certify"]=='ipin'){?>아이핀<?php }else{?>휴대폰<?php }?> 본인확인</strong><?php if($TPL_VAR["member"]["mb_adult"]){?> 및 <strong>성인인증</strong><?php }?> 완료
</div>
</section>
<?php }?>
<?php if($GLOBALS["req_nick"]){?>
<div class="margin-hr-10"></div>
<section>
<label for="reg_mb_nick" class="label">
닉네임<strong class="sound_only">필수</strong>
<?php if($GLOBALS["w"]==''){?>
<span class="right">
<a href="javascript:;" class="eb-button eb-button-mini eb-button-dark" type="button" onclick="check_duplication('mb_nick');"><span class="color-white">중복체크</span></a>
</span>
<div class="clear"></div>
<?php }?>
</label>
<label class="input">
<input type="hidden" name="mb_nick_default" value="<?php if(isset($TPL_VAR["member"]["mb_nick"])){?><?php echo $TPL_VAR["member"]["mb_nick"]?><?php }?>">
<i class="icon-prepend fa fa-smile-o"></i>
<input type="text" name="mb_nick" value="<?php if(isset($TPL_VAR["member"]["mb_nick"])){?><?php echo $TPL_VAR["member"]["mb_nick"]?><?php }?>" id="reg_mb_nick" required size="10" maxlength="20">
<?php if($GLOBALS["w"]==''){?><input type="hidden" name="mb_nick_duplicated" id="mb_nick_duplicated"><?php }?>
<span id="msg_mb_nick"></span>
</label>
</section>
<div class="clear"></div>
<section>
<div class="eb-alert eb-alert-warning margin-top-10">
<strong>Note:</strong> 공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상) | 닉네임을 바꾸시면 앞으로 <?php echo $TPL_VAR["config"]["cf_nick_modify"]* 1?>일 이내에는 변경 할 수 없습니다.
</div>
</section>
<?php }?>
<div class="margin-hr-10"></div>
<section>
<label for="reg_mb_email" class="label">
이메일<strong class="sound_only"> 필수</strong>
<?php if($GLOBALS["w"]==''){?>
<span class="right">
<a href="javascript:;" class="eb-button eb-button-mini eb-button-dark" type="button" onclick="check_duplication('mb_email');"><span class="color-white">중복체크</span></a>
</span>
<div class="clear"></div>
<?php }?>
</label>
<label class="input">
<input type="hidden" name="old_email" value="<?php echo $TPL_VAR["member"]["mb_email"]?>">
<i class="icon-prepend fa fa-envelope-o"></i>
<input type="text" name="mb_email" value="<?php if(isset($TPL_VAR["member"]["mb_email"])){?><?php echo $TPL_VAR["member"]["mb_email"]?><?php }?>" id="reg_mb_email" required size="70" maxlength="100">
<?php if($GLOBALS["w"]==''){?><input type="hidden" name="mb_email_duplicated" id="mb_email_duplicated"><?php }?>
</label>
</section>
<div class="clear"></div>
<?php if($TPL_VAR["config"]["cf_use_email_certify"]){?>
<section>
<div class="eb-alert eb-alert-warning margin-top-10">
<strong>Note:</strong> <?php if($GLOBALS["w"]==''){?>E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.<?php }?><?php if($GLOBALS["w"]=='u'){?>E-mail 주소를 변경하시면 다시 인증하셔야 합니다.<?php }?>
</div>
</section>
<?php }?>
<div class="clear"></div>
<?php if($TPL_VAR["config"]["cf_use_homepage"]){?>
<section>
<label for="reg_mb_homepage" class="label">홈페이지<?php if($TPL_VAR["config"]["cf_req_homepage"]){?><strong class="sound_only">필수</strong><?php }?></label>
<label class="input">
<i class="icon-prepend fa fa-home"></i>
<input type="text" name="mb_homepage" value="<?php echo $TPL_VAR["member"]["mb_homepage"]?>" id="reg_mb_homepage" <?php if($TPL_VAR["config"]["cf_req_homepage"]){?>required<?php }?> size="70" maxlength="255">
</label>
</section>
<?php }?>
<?php if($TPL_VAR["config"]["cf_use_tel"]){?>
<section>
<label for="reg_mb_tel" class="label">전화번호<?php if($TPL_VAR["config"]["cf_req_tel"]){?><strong class="sound_only">필수</strong><?php }?></label>
<label class="input">
<i class="icon-prepend fa fa-fax"></i>
<input type="text" name="mb_tel" value="<?php echo $TPL_VAR["member"]["mb_tel"]?>" id="reg_mb_tel" <?php if($TPL_VAR["config"]["cf_req_tel"]){?>required<?php }?> maxlength="20">
</label>
</section>
<?php }?>
<?php if($TPL_VAR["config"]["cf_use_hp"]||($TPL_VAR["config"]["cf_cert_use"]&&$TPL_VAR["config"]["cf_cert_hp"])){?>
<section>
<label for="reg_mb_hp" class="label">휴대폰번호<?php if($TPL_VAR["config"]["cf_req_hp"]){?><strong class="sound_only">필수</strong><?php }?></label>
<label class="input">
<i class="icon-prepend fa fa-tablet"></i>
<input type="text" name="mb_hp" value="<?php echo $TPL_VAR["member"]["mb_hp"]?>" id="reg_mb_hp" <?php if($TPL_VAR["config"]["cf_req_hp"]){?>required<?php }?> maxlength="20">
<?php if($TPL_VAR["config"]["cf_cert_use"]&&$TPL_VAR["config"]["cf_cert_hp"]){?>
<input type="hidden" name="old_mb_hp" value="<?php echo $TPL_VAR["member"]["mb_hp"]?>">
<?php }?>
</label>
</section>
<?php }?>
<?php if($TPL_VAR["config"]["cf_use_addr"]){?>
<div class="margin-hr-10"></div>
<section>
<label for="reg_mb_hp" class="label margin-left-5">주소<?php if($TPL_VAR["config"]["cf_req_addr"]){?><strong class="sound_only">필수</strong><?php }?></label>
</section>
<section>
<label for="reg_mb_zip1" class="sound_only">우편번호 앞자리<?php if($TPL_VAR["config"]["cf_req_addr"]){?><strong class="sound_only"> 필수</strong><?php }?></label>
<label class="input">
<i class="icon-append fa fa-question-circle"></i>
<input type="text" name="mb_zip1" value="<?php echo $TPL_VAR["member"]["mb_zip1"]?>" id="reg_mb_zip1" <?php if($TPL_VAR["config"]["cf_req_addr"]){?>required<?php }?> size="3" maxlength="3">
<b class="tooltip tooltip-top-right">우편번호 앞자리</b>
</label>
</section>
<section>
<label for="reg_mb_zip2" class="sound_only">우편번호 뒷자리<?php if($TPL_VAR["config"]["cf_req_addr"]){?><strong class="sound_only"> 필수</strong><?php }?></label>
<label class="input">
<i class="icon-append fa fa-question-circle"></i>
<input type="text" name="mb_zip2" value="<?php echo $TPL_VAR["member"]["mb_zip2"]?>" id="reg_mb_zip2" <?php if($TPL_VAR["config"]["cf_req_addr"]){?>required<?php }?> size="3" maxlength="3">
<b class="tooltip tooltip-top-right">우편번호 뒷자리</b>
</label>
</section>
<section>
<button type="button" onclick="win_zip('fregisterform', 'mb_zip1', 'mb_zip2', 'mb_addr1', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon');" class="btn-e btn-e-dark font-size-14">주소 검색</button>
</section>
<div class="clear margin-bottom-10"></div>
<section>
<label class="input">
<input type="text" name="mb_addr1" value="<?php echo $TPL_VAR["member"]["mb_addr1"]?>" id="reg_mb_addr1" <?php if($TPL_VAR["config"]["cf_req_addr"]){?>required<?php }?> size="50">
</label>
<div class="note margin-bottom-10"><strong>Note:</strong> 기본주소<?php if($TPL_VAR["config"]["cf_req_addr"]){?><strong class="sound_only"> 필수</strong><?php }?></div>
</section>
<div class="clear"></div>
<section>
<label class="input">
<input type="text" name="mb_addr2" value="<?php echo $TPL_VAR["member"]["mb_addr2"]?>" id="reg_mb_addr2" size="50">
</label>
<div class="note margin-bottom-10"><strong>Note:</strong> 상세주소</div>
</section>
<section>
<label class="input">
<input type="text" name="mb_addr3" value="<?php echo $TPL_VAR["member"]["mb_addr3"]?>" id="reg_mb_addr3" size="50" readonly="readonly">
</label>
<div class="note margin-bottom-10"><strong>Note:</strong> 참고항목</div>
</section>
<input type="hidden" name="mb_addr_jibeon" value="<?php echo $TPL_VAR["member"]["mb_addr_jibeon"]?>">
<?php }?>
</fieldset>
<header class="border-top"><i class="fa fa-info"></i> 기타 개인설정</header>
<fieldset>
<?php if($TPL_VAR["config"]["cf_use_signature"]){?>
<section>
<label for="reg_mb_signature" class="label">서명<?php if($TPL_VAR["config"]["cf_req_signature"]){?><strong class="sound_only">필수</strong><?php }?></label>
<label class="textarea textarea-resizable">
<textarea name="mb_signature" id="reg_mb_signature" <?php if($TPL_VAR["config"]["cf_req_signature"]){?>required<?php }?>><?php echo $TPL_VAR["member"]["mb_signature"]?></textarea>
</label>
</section>
<?php }?>
<?php if($TPL_VAR["config"]["cf_use_profile"]){?>
<section>
<label for="reg_mb_profile" class="label">자기소개</label>
<label class="textarea textarea-resizable">
<textarea name="mb_profile" id="reg_mb_profile" <?php if($TPL_VAR["config"]["cf_req_profile"]){?>required<?php }?>><?php echo $TPL_VAR["member"]["mb_profile"]?></textarea>
</label>
</section>
<?php }?>
<section>
<label for="reg_mb_mailling" class="label">메일링서비스</label>
<label class="checkbox">
<input type="checkbox" name="mb_mailling" value="1" id="reg_mb_mailling" <?php if($GLOBALS["w"]==''||$TPL_VAR["member"]["mb_mailling"]){?>checked<?php }?>><i></i>정보 메일을 받겠습니다.
</label>
</section>
<?php if($TPL_VAR["config"]["cf_use_hp"]){?>
<section>
<label for="reg_mb_sms" class="label">SMS 수신여부</label>
<label class="checkbox">
<input type="checkbox" name="mb_sms" value="1" id="reg_mb_sms" <?php if($GLOBALS["w"]==''||$TPL_VAR["member"]["mb_sms"]){?>checked<?php }?>><i></i>휴대폰 문자메세지를 받겠습니다.
</label>
</section>
<?php }?>
<div class="margin-hr-10"></div>
<?php if(isset($TPL_VAR["member"]["mb_open_date"])&&$TPL_VAR["member"]["mb_open_date"]<=date("Y-m-d",G5_SERVER_TIME-($TPL_VAR["config"]["cf_open_modify"]* 86400))||empty($TPL_VAR["member"]["mb_open_date"])){?>
<section>
<label for="reg_mb_open" class="label">정보공개</label>
<label class="checkbox">
<input type="hidden" name="mb_open_default" value="<?php echo $TPL_VAR["member"]["mb_open"]?>">
<input type="checkbox" name="mb_open" value="1" <?php if($GLOBALS["w"]==''||$TPL_VAR["member"]["mb_open"]){?>checked<?php }?> id="reg_mb_open"><i></i>다른분들이 나의 정보를 볼 수 있도록 합니다.
</label>
<div class="note margin-bottom-10"><strong>Note:</strong> 정보공개를 바꾸시면 앞으로 <?php echo $TPL_VAR["config"]["cf_open_modify"]* 1?>일 이내에는 변경이 안됩니다.</div>
</section>
<?php }else{?>
<section>
<label for="reg_mb_open" class="label">정보공개</label>
<label class="checkbox">
<input type="hidden" name="mb_open" value="<?php echo $TPL_VAR["member"]["mb_open"]?>">
</label>
<div class="note margin-bottom-10"><strong>Note:</strong> 정보공개는 수정후 <?php echo $TPL_VAR["config"]["cf_open_modify"]* 1?>일 이내, <?php echo $GLOBALS["open_day"]?> 까지는 변경이 안됩니다.<br>이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.</div>
</section>
<?php }?>
<?php if($GLOBALS["w"]==''&&$TPL_VAR["config"]["cf_use_recommend"]){?>
<section>
<label for="reg_mb_recommend" class="label">추천인아이디</label>
<label class="input">
<i class="icon-prepend fa fa-user"></i>
<i class="icon-append fa fa-question-circle"></i>
<input type="text" name="mb_recommend" id="reg_mb_recommend">
<b class="tooltip tooltip-top-right">추천인 아이디를 남겨주세요.</b>
</label>
</section>
<?php }?>
<div class="margin-hr-10"></div>
</fieldset>
<footer>
<?php if($GLOBALS["w"]=='u'){?>
<div class="left">
<button type="button" value="회원탈퇴" id="btn_remove" class="btn-e btn-e-lg btn-e-default" onclick="member_leave();">회원탈퇴</button>
</div>
<?php }?>
<div class="right">
<button type="submit" value="<?php if($GLOBALS["w"]==''){?>회원가입<?php }else{?>정보수정<?php }?>" id="btn_submit" class="btn-e btn-e-lg btn-e-red" accesskey="s"><?php if($GLOBALS["w"]==''){?>회원가입<?php }else{?>정보수정<?php }?></button>
</div>
<div class="clear"></div>
</footer>
</div>
</form>
<script>
$(function() {
$("#reg_zip_find").css("display", "inline-block");
<?php if($TPL_VAR["config"]["cf_cert_use"]&&$TPL_VAR["config"]["cf_cert_ipin"]){?>
// 아이핀인증
$("#win_ipin_cert").click(function() {
if(!cert_confirm())
return false;
var url = "<?php echo G5_OKNAME_URL?>/ipin1.php";
certify_win_open('kcb-ipin', url);
return;
});
<?php }?>
<?php if($TPL_VAR["config"]["cf_cert_use"]&&$TPL_VAR["config"]["cf_cert_hp"]){?>
// 휴대폰인증
$("#win_hp_cert").click(function() {
if(!cert_confirm()) return false;
<?php if($TPL_VAR["config"]["cf_cert_hp"]=='kcb'){?>
certify_win_open("kcb-hp", "<?php echo G5_OKNAME_URL?>/hpcert1.php");
<?php }elseif($TPL_VAR["config"]["cf_cert_hp"]=='kcp'){?>
certify_win_open("kcp-hp", "<?php echo G5_KCPCERT_URL?>/kcpcert_form.php");
<?php }elseif($TPL_VAR["config"]["cf_cert_hp"]=='lg'){?>
certify_win_open("lg-hp", "<?php echo G5_LGXPAY_URL?>/AuthOnlyReq.php");
<?php }else{?>
alert("기본환경설정에서 휴대폰 본인확인 설정을 해주십시오");
return false;
<?php }?>
return;
});
<?php }?>
});
// submit 최종 폼체크
function fregisterform_submit(f)
{
// 회원아이디 검사
if (f.w.value == "") {
var msg = reg_mb_id_check();
if (msg) {
alert(msg);
f.mb_id.select();
return false;
}
}
<?php if($GLOBALS["w"]==''){?>
if(f.mb_id_duplicated.value != 'y') {
alert('아이디 중복검사를 하셔야 합니다.');
f.mb_id.select();
return false;
}
<?php }?>
if (f.w.value == "") {
if (f.mb_password.value.length < 3) {
alert("비밀번호를 3글자 이상 입력하십시오.");
f.mb_password.focus();
return false;
}
}
if (f.mb_password.value != f.mb_password_re.value) {
alert("비밀번호가 같지 않습니다.");
f.mb_password_re.focus();
return false;
}
if (f.mb_password.value.length > 0) {
if (f.mb_password_re.value.length < 3) {
alert("비밀번호를 3글자 이상 입력하십시오.");
f.mb_password_re.focus();
return false;
}
}
// 이름 검사
if (f.w.value=="") {
if (f.mb_name.value.length < 1) {
alert("이름을 입력하십시오.");
f.mb_name.focus();
return false;
}
/*
var pattern = /([^가-힣\x20])/i;
if (pattern.test(f.mb_name.value)) {
alert("이름은 한글로 입력하십시오.");
f.mb_name.select();
return false;
}
*/
}
<?php if($GLOBALS["w"]==''&&$TPL_VAR["config"]["cf_cert_use"]&&$TPL_VAR["config"]["cf_cert_req"]){?>
// 본인확인 체크
if(f.cert_no.value=="") {
alert("회원가입을 위해서는 본인확인을 해주셔야 합니다.");
return false;
}
<?php }?>
// 닉네임 검사
if ((f.w.value == "") || (f.w.value == "u" && f.mb_nick.defaultValue != f.mb_nick.value)) {
var msg = reg_mb_nick_check();
if (msg) {
alert(msg);
f.reg_mb_nick.select();
return false;
}
}
<?php if($GLOBALS["w"]==''){?>
if(f.mb_nick_duplicated.value != 'y') {
alert('닉네임 중복검사를 하셔야 합니다.');
f.reg_mb_nick.select();
return false;
}
<?php }?>
// E-mail 검사
if ((f.w.value == "") || (f.w.value == "u" && f.mb_email.defaultValue != f.mb_email.value)) {
var msg = reg_mb_email_check();
if (msg) {
alert(msg);
f.reg_mb_email.select();
return false;
}
}
<?php if($GLOBALS["w"]==''){?>
if(f.mb_email_duplicated.value != 'y') {
alert('이메일 중복검사를 하셔야 합니다.');
f.reg_mb_email.select();
return false;
}
<?php }?>
<?php if(($TPL_VAR["config"]["cf_use_hp"]||$TPL_VAR["config"]["cf_cert_hp"])&&$TPL_VAR["config"]["cf_req_hp"]){?>
// 휴대폰번호 체크
var msg = reg_mb_hp_check();
if (msg) {
alert(msg);
f.reg_mb_hp.select();
return false;
}
<?php }?>
if (typeof f.mb_icon != "undefined") {
if (f.mb_icon.value) {
if (!f.mb_icon.value.toLowerCase().match(/.(gif)$/i)) {
alert("회원아이콘이 gif 파일이 아닙니다.");
f.mb_icon.focus();
return false;
}
}
}
if (typeof(f.mb_recommend) != "undefined" && f.mb_recommend.value) {
if (f.mb_id.value == f.mb_recommend.value) {
alert("본인을 추천할 수 없습니다.");
f.mb_recommend.focus();
return false;
}
var msg = reg_mb_recommend_check();
if (msg) {
alert(msg);
f.mb_recommend.select();
return false;
}
}
<?php echo chk_captcha_js()?>
document.getElementById("btn_submit").disabled = "disabled";
return true;
}
function check_duplication(target) {
var mb_id = $('#reg_mb_id').val();
switch(target) {
case 'mb_id':
var msg = reg_mb_id_check();
if(msg) {
alert(msg);
$("#reg_mb_id").focus();
$("#reg_mb_id").select();
return false;
} else {
alert("사용가능한 아이디입니다.");
$("#reg_mb_id").attr('readonly','true');
$("#mb_id_duplicated").val('y');
$("#reg_mb_id").css('background','#f5f5f5');
}
break;
case 'mb_nick':
var msg = reg_mb_nick_check();
if(msg) {
alert(msg);
$("#reg_mb_nick").focus();
$("#reg_mb_nick").select();
return false;
} else {
alert("사용가능한 닉네임입니다.");
$("#reg_mb_nick").attr('readonly','true');
$("#mb_nick_duplicated").val('y');
$("#reg_mb_nick").css('background','#f5f5f5');
}
break;
case 'mb_email':
var msg = reg_mb_email_check();
if(msg) {
alert(msg);
$("#reg_mb_email").focus();
$("#reg_mb_email").select();
return false;
} else {
alert("사용가능한 이메일입니다.");
$("#reg_mb_email").attr('readonly','true');
$("#mb_email_duplicated").val('y');
$("#reg_mb_email").css('background','#f5f5f5');
}
break;
}
}
<?php if($GLOBALS["w"]=='u'){?>
function member_leave() {  // 회원 탈퇴 tto
if (confirm("정말로 회원에서 탈퇴 하시겠습니까?")) {
location.href = '<?php echo G5_BBS_URL?>/member_confirm.php?url=member_leave.php';
}
}
<?php }?>
</script>
</div>
<style>
.margin-hr-10 {height:1px;border-top:1px dotted #ddd;margin:10px 0}
.register-form .register-box {border:1px solid #ddd;}
.register-form .sky-form header {padding:10px 20px;background:#fafafa}
.register-form .sky-form footer {padding:10px 20px}
.register-form .sky-form fieldset {padding:10px}
.register-form .sky-form .vc-captcha fieldset {padding:0}
.register-form .border-top {border-top:1px solid #ddd}
</style>