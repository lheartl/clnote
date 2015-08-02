<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\member\basic\login.skin.html 000007618 */ ?>
<?php if (!defined('_GNUBOARD_')) exit;
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/font-awesome/css/font-awesome.min.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/css/sky-forms.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/scrollbar/src/perfect-scrollbar.css" id="style_color" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/css/style.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/css/custom.css" type="text/css" media="screen">',0);
?>
<div class="eb-login">
<div class="container">
<div class="member-login">
<div class="member-login-header">
<h2>로그인</h2>
<a href="<?php echo G5_BBS_URL?>/password_lost.php" target="_blank">아이디/비밀번호찾기</a>
<a href="./register.php" class="pull-right">회원가입</a>
</div>
<form name="flogin" action="<?php echo $GLOBALS["login_action_url"]?>" onsubmit="return flogin_submit(this);" method="post" class="sky-form">
<input type="hidden" name="url" value='<?php echo $GLOBALS["login_url"]?>'>
<fieldset>
<section>
<label class="input">
<i class="icon-prepend fa fa-user"></i>
<input type="text" class="form-control" placeholder="아이디" name="mb_id" required class="frm_input required" size="20" maxLength="20">
</label>
</section>
<section>
<label class="input">
<i class="icon-prepend fa fa-lock"></i>
<input type="password" class="form-control" placeholder="비밀번호" name="mb_password" required class="frm_input required" size="20" maxLength="20">
</label>
</section>
<label class="checkbox">
<input type="checkbox" name="auto_login" id="login_auto_login"><i></i>자동로그인
</label>
<div class="margin-bottom-20"></div>
<div class="t-center">
<button type="submit" value="로그인" class="eb-button eb-button-red"><i class="fa fa-sign-in"></i> 로그인</button>
</div>
</fieldset>
</form>
</div>
</div>
<?php if($TPL_VAR["default"]["de_level_sell"]== 1){?>
<?php if(preg_match('/orderform.php/',$GLOBALS["url"])){?>
<section class="member-login-notmb">
<div class="headline"><h4>비회원 구매</h4></div>
<p class="font-size-12">
비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.
</p>
<div class="panel panel-basic-bs no-bg">
<div id="scrollbar" class="panel-body contentHolder">
<?php echo $TPL_VAR["default"]["de_guest_privacy"]?>
</div>
</div>
<div class="sky-form">
<label class="checkbox" for="agree">
<input type="checkbox" id="agree" value="1"><i></i><span class="font-size-12">개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.</span>
</label>
</div>
<div class="margin-top-15 t-center">
<a href="javascript:guest_submit(document.flogin);" class="eb-button eb-button-dark">비회원으로 구매하기</a>
</div>
<script>
function guest_submit(f) {
if (document.getElementById('agree')) {
if (!document.getElementById('agree').checked) {
alert("개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.");
return;
}
}
f.url.value = "<?php echo $GLOBALS["url"]?>";
f.action = "<?php echo $GLOBALS["url"]?>";
f.submit();
}
</script>
</section>
<?php }elseif(preg_match('/orderinquiry.php$/',$GLOBALS["url"])){?>
<section class="member-login-order">
<form name="forderinquiry" method="post" action="<?php echo urldecode($GLOBALS["url"])?>" autocomplete="off" class="sky-form">
<section>
<label for="od_id" class="label">주문서번호<strong class="sound_only"> 필수</strong></label>
<label class="input">
<i class="icon-prepend fa fa-shopping-cart"></i>
<input type="text" class="form-control" placeholder="주문서번호" name="od_id" value="<?php echo $GLOBALS["od_id"]?>" id="od_id" required size="20">
</label>
</section>
<section>
<label for="id_pwd" class="label">비밀번호<strong class="sound_only"> 필수</strong></label>
<label class="input">
<i class="icon-prepend fa fa-lock"></i>
<input type="password" class="form-control" placeholder="비밀번호" name="od_pwd" size="20" id="od_pwd" required>
</label>
</section>
<div class="t-center">
<input class="eb-button eb-button-dark" type="submit" value="확인">
</div>
</form>
<h5 class="margin-top-20 color-black"><i class="fa fa-exclamation-circle"></i> 비회원 주문조회 안내</h5>
<p class="font-size-12">메일로 발송해드린 주문서의 <strong>주문번호</strong> 및 주문 시 입력하신 <strong>비밀번호</strong>를 정확히 입력해주십시오.</p>
</section>
<?php }?>
<?php }?>
<div class="main-comeback margin-bottom-30">
<a href="<?php echo G5_URL?>">메인으로 돌아가기</a>
</div>
</div>
<style>
.member-login {width:380px;padding:20px;margin:40px auto 20px;background:#fff;border-top:solid 1px #bf1143}
.member-login .sky-form {border:0}
.member-login .sky-form fieldset {padding:0}
.member-login h2, .member-login p, .member-login p a {color:#777}
.member-login-header {padding-bottom:5px;margin-bottom:30px;border-bottom:solid 1px #eee}
.member-login-header h2 {font-size:20px;padding-bottom:15px;text-align:center;margin-bottom:15px}
.main-comeback {text-align: center;margin-top:0}
.main-comeback a {color:#fff}
.member-login-notmb {width:380px;padding:20px;margin:0px auto 20px;background:#fff}
.member-login-notmb .sky-form {border:0}
.member-login-notmb .panel {padding:10px;border:1px solid #eee;box-shadow: none;margin-bottom:10px}
.member-login-notmb .contentHolder {height:120px}
.member-login-order {width:380px;padding:20px;margin:0px auto 20px;background:#fff}
.member-login-order .sky-form {border:0}
.member-login-order .btn {font-size: 14px;}
@media (max-width: 500px) {
.member-login {width:280px}
.member-login-notmb {width:280px}
.member-login-order {width:280px}
}
</style>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/backstretch/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/jquery.form.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/scrollbar/src/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/scrollbar/src/perfect-scrollbar.js"></script>
<script type="text/javascript">
$.backstretch([
"/eyoom/theme/pc_basic/skin_pc/member/basic/img/login_bg_2.jpg",
"/eyoom/theme/pc_basic/skin_pc/member/basic/img/login_bg_1.jpg",
], {
fade: 1000,
duration: 3000
});
jQuery(document).ready(function ($) {
"use strict";
$('.contentHolder').perfectScrollbar();
});
</script>
<!--[if lt IE 9]>
<script src="/eyoom/theme/pc_basic/js/respond.js"></script>
<script src="/eyoom/theme/pc_basic/js/html5shiv.js"></script>
<script src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/sky-forms-ie8.js"></script>
<![endif]-->
<script>
$(function(){
$("#login_auto_login").click(function(){
if (this.checked) {
this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
}
});
});
function flogin_submit(f)
{
return true;
}
</script>