<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\outlogin\basic\outlogin.skin.2.html 000007708 */ ?>
<?php if (!defined("_GNUBOARD_")) exit; //?>
<section class="ol-after">
<div class="service-block-e">
<div class="member-photo">
<div class="photo">
<a href="#" class="member-img" data-toggle="modal" data-target=".profile-modal"><?php if($TPL_VAR["profile_photo"]){?><?php echo $TPL_VAR["profile_photo"]?><?php }else{?><span class="user_icon"><i class="fa fa-user"></i></span><?php }?></a>
<?php if( 0){?>
<a href="<?php echo G5_BBS_URL?>/respond.php"><span class="badge rounded-2x badge-e" data-placement="right" data-toggle="tooltip" title="내글반응"><i class="fa fa-comments"></i> <?php echo $TPL_VAR["respond"]?></span></a>
<?php }?>
</div>
</div>
<div class="modal fade profile-modal" tabindex="-1" role="dialog" aria-labelledby="profilelModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<form name="profile_photo" method="post" action="<?php echo EYOOM_CORE_URL?>/member/photo_update.php" enctype="multipart/form-data" class="sky-form">
<input type="hidden" name="old_photo" value="<?php echo $TPL_VAR["eyoomer"]["photo"]?>">
<input type="hidden" name="back_url" value="<?php echo $_SERVER["REQUEST_URI"]?>">
<div class="modal-header">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
<h4 id="profilelModalLabel" class="modal-title">프로필 사진변경</h4>
</div>
<div class="modal-body">
<div class="profile-photo"><?php echo $TPL_VAR["profile_photo"]?></div>
<div class="profile-txt">프로필 사진은 이미지(gif/jpg/png) 파일만 등록가능하며 자동으로 가로X세로 80x80픽셀로 썸네일화 합니다.</div>
<label class="label">사진 선택</label>
<label for="file" class="input input-file">
<div class="button bg-color-light"><input type="file" id="file" name="photo" value="사진선택" onchange="this.parentNode.nextSibling.value = this.value">파일선택</div><input type="text" readonly>
</label>
<?php if($TPL_VAR["eyoomer"]["photo"]){?><label class="checkbox"><input type="checkbox" name="del_photo" value="1"><i></i>프로필사진 삭제</label><?php }?>
</div>
<div class="modal-footer">
<button data-dismiss="modal" class="btn-e btn-e-dark" type="button">닫기</button>
<button class="btn-e" type="submit" value="저장하기">저장하기</button>
</div>
</form>
</div>
</div>
</div>
<div class="member-name margin-bottom-10">
<div class="left service-in">
<h6>
<?php if($TPL_VAR["lv"]["gnu_icon"]){?>
<span style='display:inline-block;margin-right:2px;'><img src="<?php echo $TPL_VAR["lv"]["gnu_icon"]?>" align="absmiddle"></span>
<?php }?>
<?php if($TPL_VAR["lv"]["eyoom_icon"]){?>
<span style='display:inline-block;margin-right:2px;'><img src="<?php echo $TPL_VAR["lv"]["eyoom_icon"]?>" align="absmiddle"></span>
<?php }?>
<?php echo $TPL_VAR["nick"]?>
</h6>
</div>
<div class="right service-in">
<p><?php if($GLOBALS["is_admin"]){?>최고관리자<?php }else{?><?php echo $TPL_VAR["lvinfo"]["gnu_name"]?>/<?php echo $TPL_VAR["lvinfo"]["name"]?><?php }?></p>
</div>
<div class="clear"></div>
</div>
<a href="<?php echo G5_BBS_URL?>/point.php" target="_blank" id="ol_after_pt" class="member-point">
<i class="fa fa-tachometer"></i>
<strong class="color-red"><?php echo $TPL_VAR["levelset"]["gnu_name"]?></strong>
<strong class="counter"><?php echo $TPL_VAR["point"]?></strong>
</a>
<div class="clear"></div>
<div class="member-lv margin-bottom-10">
<div class="left service-in">
<p class="font-size-11">레벨</p>
<h6 class="counter"><?php echo $TPL_VAR["eyoomer"]["level"]?></h6>
</div>
<div class="right service-in t-right">
<p class="font-size-11"><?php echo $TPL_VAR["levelset"]["eyoom_name"]?></p>
<h6 class="counter"><?php echo number_format($TPL_VAR["eyoomer"]["level_point"])?></h6>
</div>
<div class="clear"></div>
</div>
<div class="statistics">
<p class="font-size-11">진행률 <span class="right"><?php echo $TPL_VAR["lvinfo"]["ratio"]?>%</span></p>
<div class="clear"></div>
<div class="eb-progress eb-progress-mini eb-progress-danger eb-progress-striped eb-active">
<div class="eb-progress-bar" style="width:<?php echo $TPL_VAR["lvinfo"]["ratio"]?>%"></div>
</div>
</div>
</div>
</section>
<section class="ol-after-bottom">
<div>
<div class="left">
<div class="dropdown">
<button type="button" class="eb-button eb-button-small eb-button-dark dropdown-toggle my-menu" data-toggle="dropdown">내메뉴 <i class="fa fa-caret-down"></i></button>
<ul class="dropdown-menu" role="menu">
<li><a href="<?php echo G5_BBS_URL?>/respond.php">내글반응 <span class="badge badge-e rounded-2x"><?php echo $TPL_VAR["respond"]?></span></a></li>
<li>
<a href="<?php echo G5_BBS_URL?>/memo.php" target="_blank" id="ol_after_memo" class="win_memo">
쪽지 <span class="badge badge-e rounded-2x"><?php echo $TPL_VAR["memo_not_read"]?></span>
</a>
</li>
<li>
<a href="<?php echo G5_BBS_URL?>/scrap.php" target="_blank" id="ol_after_scrap" class="win_scrap">스크랩</a>
</li>
<?php if($GLOBALS["is_admin"]=='super'||$GLOBALS["is_auth"]){?>
<li class="divider"></li>
<li><a href="<?php echo G5_ADMIN_URL?>">관리자페이지</a></li>
<?php }?>
</ul>
</div>
</div>
<div class="right logout">
<a href="<?php echo G5_BBS_URL?>/logout.php" type="button" class="eb-button eb-button-small eb-button-red">로그아웃</a>
</div>
<div class="clear"></div>
</div>
</section>
<style>
.ol-after {position:relative;display:block;border:1px solid #ddd;background:#fff;padding:0px;margin-top:32px;min-height:150px}
.ol-after-bottom {border:1px solid #ddd;border-top:0;background:#fff;padding:10px}
.ol-after .service-block-e {padding:40px 10px 10px}
.ol-after .member-name {border-bottom:1px solid #eee;padding-bottom:10px}
.ol-after .member-lv {border-top:1px solid #eee;padding-top:10px}
.ol-after .statistics p {margin-bottom:2px}
.ol-after .member-point i {color:#ff9501;float:left;font-size:38px;margin:0 20px 10px 0}
.ol-after .member-point strong {line-height:40px;font-size:14px}
.member-photo .member-img {position:absolute;top:-32px;left:50%;margin-left:-32px;height:64px;width:64px;padding:4px;-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;box-shadow:0 0px 0px 1px rgba(0,0,0,.12);background-color:#fff}
.member-photo .member-img img {-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;background-color:#fff;background-size:cover}
.member-photo .member-img i {color:#84848a;font-size:50px;position:absolute;top:10px;left:17px}
.member-photo .photo .badge {position:absolute;top:-35px;left:50%;margin-left:30px;font-size:12px}
.ol-after-bottom .my-menu {font-size:12px}
.ol-after-bottom .badge {font-size:12px}
.profile-photo {display:block;text-align:center;margin:0 auto 20px;height:64px;width:64px;padding:4px;-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;box-shadow:0 0px 0px 1px rgba(0,0,0,.12);background-color:#fff}
.profile-photo i {height:56px;width:56px;color:#84848a;font-size:50px;text-align:center;-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;background-color:#fff;line-height:60px}
.profile-photo img {-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;background-color:#fff;background-size: cover}
</style>
<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
location.href = "<?php echo G5_BBS_URL?>/member_confirm.php?url=member_leave.php";
}
</script>