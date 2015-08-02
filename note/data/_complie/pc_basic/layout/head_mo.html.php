<?php /* Template_ 2.2.7 2015/08/01 03:52:33 G:\web\work\note\eyoom\theme\pc_basic\layout\head_mo.html 000008620 */ 
$TPL_menu_1=empty($TPL_VAR["menu"])||!is_array($TPL_VAR["menu"])?0:count($TPL_VAR["menu"]);?>
<?php if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/font-awesome/css/font-awesome.min.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/css/sky-forms.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/owl.carousel/owl-carousel/owl.carousel.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/css_mo/style_mo.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/css_mo/custom_mo.css" type="text/css" media="screen">',0);
?>
<?php if(!$GLOBALS["wmode"]){?>
<div id="preloader">
<div id="status">
<p class="t-center">
Loading the content...
</p>
</div>
</div>
<div class="wrapper">
<div id="sidebar" class="ebm-sidebar">
<div class="ebm-sidebar-scroll">
<div class="sidebar-section">
<p>NAVIGATION</p>
<a href="#" class="sidebar-close"><i class="fa fa-times"></i></a>
</div>
<div class="sidebar-search">
<div class="search-form">
<form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL?>/search.php" onsubmit="return fsearchbox_submit(this);" class="sky-form">
<input type="hidden" name="sfl" value="wr_subject||wr_content">
<input type="hidden" name="sop" value="and">
<section>
<label for="sch_stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<label for="sch_stx" class="input input-file">
<button class="button bg-color-white" type="submit" id="sch_submit"><i class="fa fa-search color-red"></i></button>
<input type="text" name="stx" id="sch_stx" maxlength="20" class="form-control" placeholder="전체검색" value="">
</label>
</section>
</form>
<script>
function fsearchbox_submit(f) {
if (f.stx.value.length < 2 || f.stx.value == $("#sch_stx").attr("placeholder")) {
alert("검색어는 두글자 이상 입력하십시오.");
f.stx.select();
f.stx.focus();
return false;
}
// 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
var cnt = 0;
for (var i=0; i<f.stx.value.length; i++) {
if (f.stx.value.charAt(i) == ' ') cnt++;
}
if (cnt > 1) {
alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
f.stx.select();
f.stx.focus();
return false;
}
return true;
}
</script>
</div>
</div>
<ul class="list-group sidebar-nav" id="sidebar-nav">
<li class="list-group-item <?php if(defined('_INDEX_')){?>active<?php }?>">
<a href="<?php echo G5_URL?><?php if($GLOBALS["is_member"]&&$TPL_VAR["eyoomer"]["main_index"]!='index'){?>/?home<?php }?>">Home</a>
</li>
<?php if($TPL_menu_1){foreach($TPL_VAR["menu"] as $TPL_K1=>$TPL_V1){
$TPL_submenu_2=empty($TPL_V1["submenu"])||!is_array($TPL_V1["submenu"])?0:count($TPL_V1["submenu"]);?>
<li class="list-group-item <?php if($TPL_V1["submenu"]){?>list-toggle<?php }?> <?php if($TPL_V1["active"]){?>active<?php }?>">
<a <?php if($TPL_V1["submenu"]){?>data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-<?php echo $TPL_K1?>"<?php }else{?>href="<?php echo $TPL_V1["me_link"]?>" target="_<?php echo $TPL_V1["me_target"]?>"<?php }?>>
<?php if($TPL_V1["me_icon"]){?><i class="fa <?php echo $TPL_V1["me_icon"]?>"></i> <?php }?><?php echo $TPL_V1["me_name"]?>
</a>
<?php if($TPL_submenu_2){$TPL_I2=-1;foreach($TPL_V1["submenu"] as $TPL_V2){$TPL_I2++;
$TPL_subsub_3=empty($TPL_V2["subsub"])||!is_array($TPL_V2["subsub"])?0:count($TPL_V2["subsub"]);?>
<?php if($TPL_I2== 0){?>
<ul id="collapse-<?php echo $TPL_K1?>" class="collapse <?php if($TPL_V1["active"]){?>in<?php }?>">
<?php }?>
<li class="<?php if($TPL_V2["active"]){?>active<?php }?>">
<a href="<?php echo $TPL_V2["me_link"]?>" target="_<?php echo $TPL_V2["me_target"]?>">
<?php if($TPL_V2["me_icon"]){?><i class="fa <?php echo $TPL_V2["me_icon"]?>"></i> <?php }?><?php echo $TPL_V2["me_name"]?><?php if($TPL_V2["new"]){?> <i class="fa fa-circle color-red"></i><?php }?>
</a>
<?php if($TPL_subsub_3){$TPL_I3=-1;foreach($TPL_V2["subsub"] as $TPL_V3){$TPL_I3++;?>
<?php if($TPL_I3== 0){?>
<ul class="in">
<?php }?>
<li class="<?php if($TPL_V3["active"]){?>active<?php }?>">
<a href="<?php echo $TPL_V3["me_link"]?>" target="_<?php echo $TPL_V3["me_target"]?>" class="subsub-style">
- <?php if($TPL_V3["me_icon"]){?><i class="fa <?php echo $TPL_V3["me_icon"]?>"></i> <?php }?><?php echo $TPL_V3["me_name"]?><?php if($TPL_V3["new"]){?> <i class="fa fa-circle nav-new2"></i><?php }?>
</a>
</li>
<?php if($TPL_I3==$TPL_subsub_3- 1){?>
</ul>
<?php }?>
<?php }}?>
</li>
<?php if($TPL_I2==$TPL_submenu_2- 1){?>
</ul>
<?php }?>
<?php }}?>
</li>
<?php }}?>
</ul>
<div class="sidebar-section"><p>DEFAULT MENU</div>
<ul class="list-group sidebar-nav">
<?php if( 1){?>
<li class="list-group-item">
<a href="<?php echo G5_BBS_URL?>/faq.php"><i class="fa fa-question-circle"></i> FAQ</a>
</li>
<li class="list-group-item">
<a href="<?php echo G5_BBS_URL?>/qalist.php"><i class="fa fa-lock"></i> 1:1 문의</a>
</li>
<?php }?>
</ul>
<div class="sidebar-section"><p>INFORMATION</p></div>
<ul class="list-group sidebar-nav">
<?php if( 1){?>
<!-- <li class="list-group-item <?php if($GLOBALS["pid"]=='aboutus'){?>active<?php }?>">
<a href="<?php echo G5_URL?>/page/?pid=aboutus"><i class="fa fa-building"></i> ABOUT US</a>
</li> -->
<li class="list-group-item <?php if($GLOBALS["pid"]=='provision'){?>active<?php }?>">
<a href="<?php echo G5_URL?>/page/?pid=provision"><i class="fa fa-clipboard"></i> 이용약관</a>
</li>
<li class="list-group-item <?php if($GLOBALS["pid"]=='privacy'){?>active<?php }?>">
<a href="<?php echo G5_URL?>/page/?pid=privacy"><i class="fa fa-male"></i> 개인정보 취급방침</a>
</li>
<li class="list-group-item <?php if($GLOBALS["pid"]=='noemail'){?>active<?php }?>">
<a href="<?php echo G5_URL?>/page/?pid=noemail"><i class="fa fa-exclamation-triangle"></i> 이메일 무단수집거부</a>
</li>
<?php }?>
</ul>
<div class="sidebar-copyright">
<p>&copy; <?php echo $TPL_VAR["config"]["cf_title"]?>. All Rights Reserved.</p>
</div>
</div>
</div>
<div id="content" class="ebm-content">
<div class="ebm-header">
<a href="#" class="sidebar-btn"><i class="fa fa-align-justify"></i></a>
<div class="ebm-logo">
<?php if( 1){?>
<a href="<?php echo G5_URL?>"><?php echo $TPL_VAR["config"]["cf_title"]?></a>
<?php }else{?>
<a href="<?php echo G5_URL?>"><img src="/eyoom/theme/pc_basic/image/site_logo.png" style="height:26px" alt="<?php echo $TPL_VAR["config"]["cf_title"]?> LOGO"></a>
<?php }?>
</div>
<?php if($GLOBALS["is_member"]){?>
<a href="<?php echo G5_BBS_URL?>/logout.php" class="ebm-login">LOGOUT</a>
<?php }else{?>
<a href="<?php echo G5_BBS_URL?>/login.php" class="ebm-login">LOGIN</a>
<?php }?>
</div>
<div class="ebm-member-bar topbar">
<ul class="list-inline list-unstyled left">
<?php if($GLOBALS["is_member"]){?>
<?php echo $TPL_VAR["latest"]->latest_memo('ebm_memo','count=5||cut_subject=20||photo=y')?>
<?php echo $TPL_VAR["latest"]->latest_respond('ebm_respond','count=5||cut_subject=20||photo=y')?>
<?php }?>
<?php if($GLOBALS["is_member"]){?>
<li><a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=<?php echo G5_BBS_URL?>/register_form.php">정보수정</a></li>
<?php if($GLOBALS["is_admin"]){?>
<li><a href="<?php echo G5_ADMIN_URL?>">관리자</a></li>
<?php }?>
<?php }else{?>
<li><a href="<?php echo G5_BBS_URL?>/register.php">회원가입</a></li>
<?php }?>
</ul>
<ul class="list-inline list-unstyled right">
<li>
<a href="#" class="ebm-sidebar-open">
<strong class="username"><?php if($TPL_VAR["eyoomer"]["mb_nick"]){?><?php echo $TPL_VAR["eyoomer"]["mb_nick"]?><?php }else{?><?php echo $TPL_VAR["eyoomer"]["mb_name"]?><?php }?> <i class="fa fa-outdent"></i></strong>
</a>
</li>
</ul>
<div class="clear"></div>
</div>
<div class="ebm-title-wrap">
<?php if(defined('_INDEX_')||defined('_EYOOM_MYPAGE_')){?>
<?php }else{?>
<div class="ebm-title">
<div class="heading heading-e1">
<h4><?php echo $TPL_VAR["subinfo"]["title"]?></h4>
<p>
<ul class="list-inline list-unstyled con-map">
<?php echo $TPL_VAR["subinfo"]["path"]?>
</ul>
</p>
</div>
</div>
<?php }?>
</div>
<div class="ebm-notice-wrap">
<div class="ebm-notice-box">
<?php echo $TPL_VAR["latest"]->latest_eyoom('ebm_notice','bo_table=게시판id||count=5||cut_subject=30')?>
</div>
</div>
<div class="ebm-content-wrap">
<?php }?>