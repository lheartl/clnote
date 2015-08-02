<?php /* Template_ 2.2.7 2015/07/30 21:56:05 G:\web\work\note\eyoom\theme\pc_basic\layout\head_pc.html 000007794 */ 
$TPL_menu_1=empty($TPL_VAR["menu"])||!is_array($TPL_VAR["menu"])?0:count($TPL_VAR["menu"]);?>
<?php if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/font-awesome/css/font-awesome.min.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/css/sky-forms.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/owl.carousel/owl-carousel/owl.carousel.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/css/style.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/css/custom.css" type="text/css" media="screen">',0);
?>
<!--[if lt IE 9]>
<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/css/sky-forms-ie8.css">
<![endif]-->
<?php if(!$GLOBALS["wmode"]){?>
<div class="wrapper">
<?php if( 1){?>
<div class="wide-layout">
<?php }else{?>
<div class="boxed-layout container">
<?php }?>
<div class="topbar">
<div class="container">
<ul class="list-inline list-unstyled left">
<li>
<a href="javascript://" onclick="window.external.AddFavorite(parent.location.href,document.title);">북마크</a>
</li>
<li>
<a href="<?php echo G5_BBS_URL?>/current_connect.php">접속자 <?php echo $TPL_VAR["connect"]["total_cnt"]?><?php if($TPL_VAR["connect"]["mb_cnt"]){?> (<span><?php echo $TPL_VAR["connect"]["mb_cnt"]?></span>)<?php }?></a>
</li>
<li><a href="<?php echo G5_BBS_URL?>/faq.php">FAQ</a></li>
<li><a href="<?php echo G5_BBS_URL?>/qalist.php">1:1문의</a></li>
<li><a href="<?php echo G5_BBS_URL?>/new.php">새글</a></li>
</ul>
<ul class="list-inline list-unstyled right">
<?php if($GLOBALS["is_member"]){?>
<?php if($GLOBALS["is_admin"]){?>
<li><a href="<?php echo G5_ADMIN_URL?>">관리자</a></li>
<?php }?>
<li><a href="<?php echo G5_BBS_URL?>/member_confirm.php?url=<?php echo G5_BBS_URL?>/register_form.php">정보수정</a></li>
<li><a href="<?php echo G5_BBS_URL?>/logout.php">로그아웃</a></li>
<?php }else{?>
<li><a href="<?php echo G5_BBS_URL?>/register.php">회원가입</a></li>
<li><a href="<?php echo G5_BBS_URL?>/login.php">로그인</a></li>
<?php }?>
<?php if($GLOBALS["is_member"]){?>
<?php echo $TPL_VAR["latest"]->latest_memo('ebp_memo','count=5||cut_subject=20||photo=y')?>
<?php echo $TPL_VAR["latest"]->latest_respond('ebp_respond','count=5||cut_subject=20||photo=y')?>
<?php }?>
</ul>
<div class="clear"></div>
</div>
</div>
<header class="header">
<div class="container">
<div class="logo left">
<?php if( 1){?>
<a href="<?php echo G5_URL?>"><?php echo $TPL_VAR["config"]["cf_title"]?></a>
<?php }else{?>
<a class="navbar-brand" href="<?php echo G5_URL?>"><img src="/eyoom/theme/pc_basic/image/site_logo.png" style="height:38px" alt="<?php echo $TPL_VAR["config"]["cf_title"]?> LOGO"></a>
<?php }?>
</div>
<div class="search-form left">
<form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL?>/search.php" onsubmit="return fsearchbox_submit(this);" class="sky-form">
<input type="hidden" name="sfl" value="wr_subject||wr_content">
<input type="hidden" name="sop" value="and">
<section>
<label for="sch_stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<label for="sch_stx" class="input input-file">
<button class="button" type="submit" id="sch_submit"><i class="fa fa-search"></i></button>
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
<article class="ebp-notice-w right">
<?php echo $TPL_VAR["latest"]->latest_eyoom('ebp_notice','bo_table=게시판id||count=5||cut_subject=30')?>
</article>
<div class="clear"></div>
</div>
</header>
<?php if( 0){?>
<div class="eb-navbar">
<?php }else{?>
<div class="eb-navbar navbar-fixed">
<?php }?>
<nav class="eb-nav nav1">
<div class="container">
<ul>
<li class="<?php if(defined('_INDEX_')){?>active<?php }?> nav-home">
<a href="<?php echo G5_URL?><?php if($GLOBALS["is_member"]&&$TPL_VAR["eyoomer"]["main_index"]!='index'){?>/?home<?php }?>"><i class="fa fa-home"></i> Home</a>
</li>
<?php if($TPL_menu_1){foreach($TPL_VAR["menu"] as $TPL_V1){
$TPL_submenu_2=empty($TPL_V1["submenu"])||!is_array($TPL_V1["submenu"])?0:count($TPL_V1["submenu"]);?>
<li class="<?php if($TPL_V1["active"]){?>active<?php }?>">
<a href="<?php echo $TPL_V1["me_link"]?>" target="_<?php echo $TPL_V1["me_target"]?>">
<?php if($TPL_V1["me_icon"]){?><i class="fa <?php echo $TPL_V1["me_icon"]?>"></i> <?php }?><?php echo $TPL_V1["me_name"]?><?php if($TPL_V1["submenu"]){?> <i class="fa fa-angle-down"></i><?php }?><?php if($TPL_V1["new"]){?> <i class="fa fa-circle nav-new1"></i><?php }?>
</a>
<?php if($TPL_submenu_2){$TPL_I2=-1;foreach($TPL_V1["submenu"] as $TPL_V2){$TPL_I2++;
$TPL_subsub_3=empty($TPL_V2["subsub"])||!is_array($TPL_V2["subsub"])?0:count($TPL_V2["subsub"]);?>
<?php if($TPL_I2== 0){?>
<ul>
<?php }?>
<li class="<?php if($TPL_V2["active"]){?>active<?php }?>">
<a href="<?php echo $TPL_V2["me_link"]?>" target="_<?php echo $TPL_V2["me_target"]?>"><?php if($TPL_V2["me_icon"]){?><i class="fa <?php echo $TPL_V2["me_icon"]?>"></i> <?php }?><?php echo $TPL_V2["me_name"]?><?php if($TPL_V2["new"]){?> <i class="fa fa-circle nav-new2"></i><?php }?><?php if($TPL_V2["sub"]=='on'){?><i class="fa fa-angle-right right"></i><?php }?></a>
<?php if($TPL_subsub_3){$TPL_I3=-1;foreach($TPL_V2["subsub"] as $TPL_V3){$TPL_I3++;?>
<?php if($TPL_I3== 0){?>
<ul>
<?php }?>
<li class="<?php if($TPL_V3["active"]){?>active<?php }?>">
<a href="<?php echo $TPL_V3["me_link"]?>" target="_<?php echo $TPL_V3["me_target"]?>"><?php if($TPL_V3["me_icon"]){?><i class="fa <?php echo $TPL_V3["me_icon"]?>"></i> <?php }?><?php echo $TPL_V3["me_name"]?><?php if($TPL_V3["new"]){?> <i class="fa fa-circle nav-new2"></i><?php }?></a>
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
</div>
</nav>
</div>
<div class="ebp-body">
<div class="container">
<?php if((defined('_INDEX_')&&$TPL_VAR["eyoom"]["use_main_side_layout"]=='y')||(!defined('_INDEX_')&&$TPL_VAR["eyoom"]["use_sub_side_layout"]=='y'&&$TPL_VAR["subinfo"]["sidemenu"]!='n')){?>
<?php if($TPL_VAR["eyoom"]["pos_side_layout"]=='left'){?>
<div class="side-left">
<?php $this->print_("side_pc",$TPL_SCP,1);?>
</div>
<?php }?>
<div class="content <?php if($TPL_VAR["eyoom"]["pos_side_layout"]=='left'){?>content-right<?php }else{?>content-left<?php }?>">
<?php }else{?>
<div class="content">
<?php }?>
<?php if(defined('_INDEX_')||defined('_EYOOM_MYPAGE_')){?>
<?php }else{?>
<div class="eb-title">
<h3 class="left"><i class="fa fa-chevron-circle-right"></i> <?php echo $TPL_VAR["subinfo"]["title"]?></h3>
<ul class="right list-inline con-map">
<?php echo $TPL_VAR["subinfo"]["path"]?>
</ul>
<div class="clear"></div>
</div>
<?php }?>
<?php }?>