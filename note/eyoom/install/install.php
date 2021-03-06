<?php

$gmnow = gmdate('D, d M Y H:i:s').' GMT';
header('Expires: 0'); // rfc2616 - Section 14.21
header('Last-Modified: ' . $gmnow);
header('Cache-Control: no-store, no-cache, must-revalidate'); // HTTP/1.1
header('Cache-Control: pre-check=0, post-check=0, max-age=0'); // HTTP/1.1
header('Pragma: no-cache'); // HTTP/1.0

include_once('../../config.php');
include_once ('./install.head.php');
include_once('../classes/qfile.class.php');

// DB접속
$dbconfig_file = '../..'.G5_DATA_PATH.'/'.G5_DBCONFIG_FILE;
if (file_exists($dbconfig_file)) {
    include_once($dbconfig_file);
    include_once('../..'.G5_LIB_PATH.'/common.lib.php');    // 공통 라이브러리

    $connect_db = sql_connect(G5_MYSQL_HOST, G5_MYSQL_USER, G5_MYSQL_PASSWORD) or die('MySQL Connect Error!!!');
    $select_db  = sql_select_db(G5_MYSQL_DB, $connect_db) or die('MySQL DB Error!!!');

    // mysql connect resource $g5 배열에 저장 - 명랑폐인님 제안
    $g5['connect_db'] = $connect_db;

    sql_query(" set names utf8 ");
    if(defined('G5_MYSQL_SET_MODE') && G5_MYSQL_SET_MODE) sql_query("SET SESSION sql_mode = ''");
    if(defined('G5_TIMEZONE')) sql_query(" set time_zone = '".G5_TIMEZONE."'");
}

?>
<div class="ins_inner">
    <h2>설치가 시작되었습니다.</h2>

    <ol>
<?php
$qfile = new qfile;
$ins_theme = $_POST['ins_theme'];
if($ins_theme == 'p') {
	$theme_name = 'pc_basic';
} else {
	$theme_name = 'basic';
}

// eyoom 기본설정
$eyoom = array(
	"theme" => $theme_name,
	"shop_theme" => "",
	"theme_selector" => "n",
	"bootstrap" => "1",
	"outlogin_skin" => "basic",
	"connect_skin" => "basic",
	"popular_skin" => "basic",
	"poll_skin" => "basic",
	"visit_skin" => "basic",
	"new_skin" => "basic",
	"member_skin" => "basic",
	"faq_skin" => "basic",
	"qa_skin" => "basic",
	"search_skin" => "basic",
	"shop_skin" => "basic",
	"newwin_skin" => "basic",
	"mypage_skin" => "basic",
	"signature_skin" => "basic",
	"respond_skin" => "basic",
	"push_skin" => "basic",
	"board_skin" => "basic",
	"emoticon_skin" => "basic",
	"use_gnu_outlogin" => "n",
	"use_gnu_connect" => "n",
	"use_gnu_popular" => "n",
	"use_gnu_poll" => "n",
	"use_gnu_visit" => "n",
	"use_gnu_new" => "n",
	"use_gnu_member" => "n",
	"use_gnu_faq" => "n",
	"use_gnu_qa" => "n",
	"use_gnu_search" => "n",
	"use_gnu_shop" => "n",
	"use_gnu_newwin" => "n",
	"use_eyoom_menu" => "y",
	"use_sideview" => "y",
	"use_switcher" => "off",
	"use_main_side_layout" => "y",
	"use_sub_side_layout" => "y",
	"pos_side_layout" => "right",
	"level_icon_gnu" => "basic",
	"use_level_icon_gnu" => "n",
	"level_icon_eyoom" => "basic",
	"use_level_icon_eyoom" => "n",
	"push_reaction" => "y",
	"push_sound" => "push_sound_01.mp3",
	"push_time" => "10000",
	"photo_width" => "150",
	"photo_height" => "150",
	"cover_width" => "845",
	"cover_height" => "250",
);

// eyoom 설정파일 생성
$qfile->save_file('eyoom',$eyoom_config,$eyoom);

// eyoom.pc_basic.config.php 설정파일 생성
if($ins_theme == 'p') {
	$eyoom['bootstrap'] = 0;
	$qfile->save_file('eyoom',$eyoom_pc_basic,$eyoom);
}

// 이윰 레벨포인트 기본설정
$levelset = array(
	"gnu_name" => '포인트',
	"eyoom_name" => '경험치',
	"login" => '20',
	"write" => '10',
	"reply" => '10',
	"read" => '1',
	"cmt" => '5',
	"good" => '1',
	"regood" => '1',
	"nogood" => '1',
	"renogood" => '1',
	"memo" => '1',
	"following" => '2',
	"follower" => '2',
	"banner" => '5',
	"goodsview" => '1',
	"cart" => '1',
	"wishlist" => '1',
	"recommend" => '5',
	"review" => '5',
	"goodsqa" => '5',
	"order" => '15',
	"cancel" => '0',
	"gnu_alias_2" => '지하계',
	"gnu_alias_3" => '지상계',
	"gnu_alias_4" => '중간계',
	"gnu_alias_5" => '천상계',
	"gnu_alias_6" => '태양계',
	"gnu_alias_7" => '은하계',
	"gnu_alias_8" => '우주계',
	"gnu_alias_9" => '신',
	"max_use_gnu_level" => '7',
	"cnt_gnu_level_2" => '5',
	"cnt_gnu_level_3" => '10',
	"cnt_gnu_level_4" => '15',
	"cnt_gnu_level_5" => '20',
	"cnt_gnu_level_6" => '25',
	"cnt_gnu_level_7" => '30',
	"cnt_gnu_level_8" => '35',
	"cnt_gnu_level_9" => '40',
	"calc_level_point" => '100',
	"calc_level_ratio" => '200',
);
// 이윰 레벨포인트 설정파일 생성
$qfile->save_file('levelset',$levelset_config,$levelset);

$levelinfo = array(
	"1" => array("name" => "Level 1","min" => "0","max" => "200"),
	"2" => array("name" => "Level 2","min" => "200","max" => "600"),
	"3" => array("name" => "Level 3","min" => "600","max" => "1200"),
	"4" => array("name" => "Level 4","min" => "1200","max" => "2000"),
	"5" => array("name" => "Level 5","min" => "2000","max" => "3000"),
	"6" => array("name" => "Level 6","min" => "3000","max" => "4200"),
	"7" => array("name" => "Level 7","min" => "4200","max" => "5600"),
	"8" => array("name" => "Level 8","min" => "5600","max" => "7200"),
	"9" => array("name" => "Level 9","min" => "7200","max" => "9000"),
	"10" => array("name" => "Level 10","min" => "9000","max" => "11000"),
	"11" => array("name" => "Level 11","min" => "11000","max" => "13200"),
	"12" => array("name" => "Level 12","min" => "13200","max" => "15600"),
	"13" => array("name" => "Level 13","min" => "15600","max" => "18200"),
	"14" => array("name" => "Level 14","min" => "18200","max" => "21000"),
	"15" => array("name" => "Level 15","min" => "21000","max" => "24000"),
	"16" => array("name" => "Level 16","min" => "24000","max" => "27200"),
	"17" => array("name" => "Level 17","min" => "27200","max" => "30600"),
	"18" => array("name" => "Level 18","min" => "30600","max" => "34200"),
	"19" => array("name" => "Level 19","min" => "34200","max" => "38000"),
	"20" => array("name" => "Level 20","min" => "38000","max" => "42000"),
	"21" => array("name" => "Level 21","min" => "42000","max" => "46200"),
	"22" => array("name" => "Level 22","min" => "46200","max" => "50600"),
	"23" => array("name" => "Level 23","min" => "50600","max" => "55200"),
	"24" => array("name" => "Level 24","min" => "55200","max" => "60000"),
	"25" => array("name" => "Level 25","min" => "60000","max" => "65000"),
	"26" => array("name" => "Level 26","min" => "65000","max" => "70200"),
	"27" => array("name" => "Level 27","min" => "70200","max" => "75600"),
	"28" => array("name" => "Level 28","min" => "75600","max" => "81200"),
	"29" => array("name" => "Level 29","min" => "81200","max" => "87000"),
	"30" => array("name" => "Level 30","min" => "87000","max" => "93000"),
	"31" => array("name" => "Level 31","min" => "93000","max" => "99200"),
	"32" => array("name" => "Level 32","min" => "99200","max" => "105600"),
	"33" => array("name" => "Level 33","min" => "105600","max" => "112200"),
	"34" => array("name" => "Level 34","min" => "112200","max" => "119000"),
	"35" => array("name" => "Level 35","min" => "119000","max" => "126000"),
	"36" => array("name" => "Level 36","min" => "126000","max" => "133200"),
	"37" => array("name" => "Level 37","min" => "133200","max" => "140600"),
	"38" => array("name" => "Level 38","min" => "140600","max" => "148200"),
	"39" => array("name" => "Level 39","min" => "148200","max" => "156000"),
	"40" => array("name" => "Level 40","min" => "156000","max" => "164000"),
	"41" => array("name" => "Level 41","min" => "164000","max" => "172200"),
	"42" => array("name" => "Level 42","min" => "172200","max" => "180600"),
	"43" => array("name" => "Level 43","min" => "180600","max" => "189200"),
	"44" => array("name" => "Level 44","min" => "189200","max" => "198000"),
	"45" => array("name" => "Level 45","min" => "198000","max" => "207000"),
	"46" => array("name" => "Level 46","min" => "207000","max" => "216200"),
	"47" => array("name" => "Level 47","min" => "216200","max" => "225600"),
	"48" => array("name" => "Level 48","min" => "225600","max" => "235200"),
	"49" => array("name" => "Level 49","min" => "235200","max" => "245000"),
	"50" => array("name" => "Level 50","min" => "245000","max" => "255000"),
	"51" => array("name" => "Level 51","min" => "255000","max" => "265200"),
	"52" => array("name" => "Level 52","min" => "265200","max" => "275600"),
	"53" => array("name" => "Level 53","min" => "275600","max" => "286200"),
	"54" => array("name" => "Level 54","min" => "286200","max" => "297000"),
	"55" => array("name" => "Level 55","min" => "297000","max" => "308000"),
	"56" => array("name" => "Level 56","min" => "308000","max" => "319200"),
	"57" => array("name" => "Level 57","min" => "319200","max" => "330600"),
	"58" => array("name" => "Level 58","min" => "330600","max" => "342200"),
	"59" => array("name" => "Level 59","min" => "342200","max" => "354000"),
	"60" => array("name" => "Level 60","min" => "354000","max" => "366000"),
	"61" => array("name" => "Level 61","min" => "366000","max" => "378200"),
	"62" => array("name" => "Level 62","min" => "378200","max" => "390600"),
	"63" => array("name" => "Level 63","min" => "390600","max" => "403200"),
	"64" => array("name" => "Level 64","min" => "403200","max" => "416000"),
	"65" => array("name" => "Level 65","min" => "416000","max" => "429000"),
	"66" => array("name" => "Level 66","min" => "429000","max" => "442200"),
	"67" => array("name" => "Level 67","min" => "442200","max" => "455600"),
	"68" => array("name" => "Level 68","min" => "455600","max" => "469200"),
	"69" => array("name" => "Level 69","min" => "469200","max" => "483000"),
	"70" => array("name" => "Level 70","min" => "483000","max" => "497000"),
	"71" => array("name" => "Level 71","min" => "497000","max" => "511200"),
	"72" => array("name" => "Level 72","min" => "511200","max" => "525600"),
	"73" => array("name" => "Level 73","min" => "525600","max" => "540200"),
	"74" => array("name" => "Level 74","min" => "540200","max" => "555000"),
	"75" => array("name" => "Level 75","min" => "555000","max" => "570000"),
	"76" => array("name" => "Level 76","min" => "570000","max" => "585200"),
	"77" => array("name" => "Level 77","min" => "585200","max" => "600600"),
	"78" => array("name" => "Level 78","min" => "600600","max" => "616200"),
	"79" => array("name" => "Level 79","min" => "616200","max" => "632000"),
	"80" => array("name" => "Level 80","min" => "632000","max" => "648000"),
	"81" => array("name" => "Level 81","min" => "648000","max" => "664200"),
	"82" => array("name" => "Level 82","min" => "664200","max" => "680600"),
	"83" => array("name" => "Level 83","min" => "680600","max" => "697200"),
	"84" => array("name" => "Level 84","min" => "697200","max" => "714000"),
	"85" => array("name" => "Level 85","min" => "714000","max" => "731000"),
	"86" => array("name" => "Level 86","min" => "731000","max" => "748200"),
	"87" => array("name" => "Level 87","min" => "748200","max" => "765600"),
	"88" => array("name" => "Level 88","min" => "765600","max" => "783200"),
	"89" => array("name" => "Level 89","min" => "783200","max" => "801000"),
	"90" => array("name" => "Level 90","min" => "801000","max" => "819000"),
	"91" => array("name" => "Level 91","min" => "819000","max" => "837200"),
	"92" => array("name" => "Level 92","min" => "837200","max" => "855600"),
	"93" => array("name" => "Level 93","min" => "855600","max" => "874200"),
	"94" => array("name" => "Level 94","min" => "874200","max" => "893000"),
	"95" => array("name" => "Level 95","min" => "893000","max" => "912000"),
	"96" => array("name" => "Level 96","min" => "912000","max" => "931200"),
	"97" => array("name" => "Level 97","min" => "931200","max" => "950600"),
	"98" => array("name" => "Level 98","min" => "950600","max" => "970200"),
	"99" => array("name" => "Level 99","min" => "970200","max" => "990000"),
	"100" => array("name" => "Level 100","min" => "990000","max" => "1010000"),
	"101" => array("name" => "Level 101","min" => "1010000","max" => "1030200"),
	"102" => array("name" => "Level 102","min" => "1030200","max" => "1050600"),
	"103" => array("name" => "Level 103","min" => "1050600","max" => "1071200"),
	"104" => array("name" => "Level 104","min" => "1071200","max" => "1092000"),
	"105" => array("name" => "Level 105","min" => "1092000","max" => "1113000"),
);
// 이윰 레벨포인트 설정파일 생성
$qfile->save_file('levelinfo',$levelinfo_config,$levelinfo,true);

?>
        <li>이윰빌더 설정파일 생성 완료</li>

<?php
// 템플릿 폴더 생성
$template_dir = '../..'.G5_DATA_PATH.'/_complie';
$cache_dir = '../..'.G5_DATA_PATH.'/_cache';
@mkdir($template_dir,0755,true);
@mkdir($cache_dir,0755,true);
?>
        <li>템플릿 폴더 생성 완료</li>

<?php
// DB 테이블 생성
$sql = " desc ".G5_TABLE_PREFIX."eyoom_member";
$result = @mysql_query($sql);

if(!$result || (isset($_POST['table_rest']) && $_POST['table_rest'] == 'y')) {

    // 테이블 생성 ------------------------------------
    $file = implode('', file('./eyoom.table.sql'));
    eval("\$file = \"$file\";");

    $file = preg_replace('/^--.*$/m', '', $file);
    $file = preg_replace('/`g5_([^`]+`)/', '`'.G5_TABLE_PREFIX.'$1', $file);
    $f = explode(';', $file);

    for ($i=0; $i<count($f); $i++) {
        if (trim($f[$i]) == '') continue;
        mysql_query($f[$i]) or die(mysql_error());
    }
}
?>
        <li>DB 테이블 생성 완료</li>
<?php
// DB 설정파일 업데이트
$sql = " 
	update ${g5['config_table']} set 
		cf_include_index = 'eyoom/index.php',
		cf_include_head = 'eyoom/head.php',
		cf_include_tail = 'eyoom/tail.php'
	where cf_admin != ''
";
mysql_query($sql);
?>
        <li>이윰빌더 설정 적용 완료</li>
    </ol>

    <p>축하합니다. 이윰빌더 설치가 완료되었습니다.</p>

</div>
<div class="ins_inner">

    <h2>환경설정 변경은 다음의 과정을 따르십시오.</h2>

    <ol>
        <li>메인페이지로 이동</li>
        <li>관리자 로그인</li>
        <li>관리자 모드 접속</li>
        <li>이윰빌더 메뉴의 기본환경설정</li>
    </ol>

    <div class="inner_btn">
        <a href="../../">메인페이지로 이동</a>
    </div>
</div>

<?php
include_once ('./install.tail.php');
?>