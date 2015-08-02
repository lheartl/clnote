<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\outlogin\basic\outlogin.skin.1.html 000003984 */ ?>
<?php if (!defined("_GNUBOARD_")) exit;?>
<section class="ol-before">
<form name="foutlogin" action="<?php echo $TPL_VAR["outlogin_action_url"]?>" onsubmit="return fhead_submit(this);" method="post" autocomplete="off" class="sky-form">
<input type="hidden" name="url" value="<?php echo $TPL_VAR["outlogin_url"]?>">
<div class="headline">
<h4>LOGIN</h4>
</div>
<div class="ol-account">
<span class="left"><a href="<?php echo G5_BBS_URL?>/register.php">회원가입</a></span>
<span class="right">
<a href="<?php echo G5_BBS_URL?>/password_lost.php" id="ol_password_lost">아이디/비번찾기</a>
</span>
</div>
<section>
<div class="row">
<div class="col col-12">
<label class="input">
<i class="icon-append fa fa-user"></i>
<input type="text" id="ol_id" name="mb_id" required class="form-control" maxlength="20" placeholder="아이디">
<b class="tooltip tooltip-top-right">아이디를 입력 해 주세요.</b>
</label>
</div>
</div>
</section>
<section>
<div class="row">
<div class="col col-12">
<label class="input">
<i class="icon-append fa fa-lock"></i>
<input type="password" name="mb_password" id="ol_pw" required class="form-control" maxlength="20" placeholder="비밀번호">
<b class="tooltip tooltip-top-right">비밀번호를 입력 해 주세요.</b>
</label>
</div>
</div>
</section>
<div class="left">
<label class="checkbox"><input type="checkbox" name="auto_login" value="1" id="auto_login"><i></i><span class="ol-stay">자동로그인</span></label>
</div>
<div class="right">
<button id="ol_submit" class="btn-e" type="submit">Login</button>
</div>
<div class="clear"></div>
</form>
</section>
<?php if( 0){?>
<!-- 아이디/비번찾기 modal -->
<div class="modal fade password-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myPasswordModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
<h4 id="myLargeModalLabel" class="modal-title">아이디/비밀번호 찾기</h4>
</div>
<div class="modal-body">
</div>
</div>
</div>
</div>
<!-- END 아이디/비번찾기 modal -->
<?php }?>
<style>
.ol-before {border:1px solid #e5e5e5;background:#fff;padding:13px 10px}
.ol-before .ol-account {font-size:12px;clear:both}
.ol-before .ol-account span {padding-bottom:10px}
.ol-before .ol-stay {font-size:12px;letter-spacing:-1px}
</style>
<script>
$omi = $('#ol_id');
$omp = $('#ol_pw');
$omi_label = $('#ol_idlabel');
$omi_label.addClass('ol_idlabel');
$omp_label = $('#ol_pwlabel');
$omp_label.addClass('ol_pwlabel');
$(function() {
$omi.focus(function() {
$omi_label.css('visibility','hidden');
});
$omp.focus(function() {
$omp_label.css('visibility','hidden');
});
$omi.blur(function() {
$this = $(this);
if($this.attr('id') == "ol_id" && $this.attr('value') == "") $omi_label.css('visibility','visible');
});
$omp.blur(function() {
$this = $(this);
if($this.attr('id') == "ol_pw" && $this.attr('value') == "") $omp_label.css('visibility','visible');
});
$("#auto_login").click(function(){
if ($(this).is(":checked")) {
if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
return false;
}
});
});
function fhead_submit(f)
{
if (f.mb_id.value == '' || f.mb_id.value == $("#ol_id").attr("placeholder")) {
alert("아이디를 입력해 주세요.");
f.mb_id.select();
f.mb_id.focus();
return false;
}
if (f.mb_password.value == '' || f.mb_password.value == $("#ol_pw").attr("placeholder")) {
alert("비밀번호를 입력해 주세요.");
f.mb_password.select();
f.mb_password.focus();
return false;
}
return true;
}
</script>