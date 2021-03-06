<?php /* Template_ 2.2.7 2015/07/30 21:42:45 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\member\basic\register_result.skin.html 000001797 */ ?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="member-skin">
<div class="heading heading-e1 margin-bottom-40">
<h2>환영합니다.</h2>
<p>
<strong><?php echo $TPL_VAR["mb"]["mb_name"]?></strong>님의 회원가입을 진심으로 축하합니다.
</p>
</div>
<?php if($TPL_VAR["config"]["cf_use_email_certify"]){?>
<p class="margin-bottom-10">
회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.<br>
<strong class="color-red">발송된 인증메일을 확인하신 후 인증처리</strong>를 하시면 사이트를 원활하게 이용하실 수 있습니다.
</p>
<div class="eb-con-box-dark margin-bottom-10">
<p>아이디 : <?php echo $TPL_VAR["mb"]["mb_id"]?></p>
<p>이메일 주소 : <?php echo $TPL_VAR["mb"]["mb_email"]?></p>
</div>
<p class="margin-bottom-10">
이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.<br>
</p>
<?php }?>
<div class="eb-con-box margin-bottom-10">
<p class="font-size-12">
회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.<br>
아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.
</p>
</div>
<p>
회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.<br>
감사합니다.
</p>
<div class="margin-hr-10"></div>
<div class="t-center">
<a href="<?php echo G5_URL?>/" class="btn-e btn-e-dark">메인으로</a>
</div>
</div>
<style>
.margin-hr-10 {height:1px;border-top:1px dotted #ddd;margin:10px 0}
</style>