<?php /* Template_ 2.2.7 2015/07/30 21:56:06 G:\web\work\note\eyoom\theme\pc_basic\skin_pc\visit\basic\visit.skin.html 000001779 */ ?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="headline"><h5>Statistics</h5></div>
<ul class="list-unstyled statistics-list">
<li><a href="<?php echo G5_BBS_URL?>/current_connect.php">현재접속자 : <b><?php echo $TPL_VAR["connect"]["total_cnt"]?><?php if($TPL_VAR["connect"]["mb_cnt"]){?> (<span class='color-red'>Member <?php echo $TPL_VAR["connect"]["mb_cnt"]?></span>)<?php }?></b></a></li>
<li>오늘방문자 : <b><?php echo $TPL_VAR["counter"]["visit_today"]?></b></li>
<?php if($GLOBALS["is_admin"]=='super'||$GLOBALS["is_auth"]){?>
<!--<li>어제방문자 : <b><?php echo $TPL_VAR["counter"]["visit_yesterday"]?></b></li>-->
<?php }?>
<li>최대방문자 : <b><?php echo $TPL_VAR["counter"]["visit_max"]?></b></li>
<li>전체방문자 : <b><?php echo $TPL_VAR["counter"]["visit_total"]?></b></li>
<?php if($GLOBALS["is_admin"]=='super'||$GLOBALS["is_auth"]){?>
<!--<li>신규회원수 : <b><?php echo $TPL_VAR["counter"]["newby"]?></b></li>-->
<?php }?>
<li>전체회원수 : <b><?php echo $TPL_VAR["counter"]["members"]?></b></li>
<li>전체게시물 : <b><?php echo $TPL_VAR["counter"]["write"]?></b></li>
<?php if($GLOBALS["is_admin"]=='super'||$GLOBALS["is_auth"]){?>
<!--<li>전체코멘트 : <b><?php echo $TPL_VAR["counter"]["comment"]?></b></li>-->
<?php }?>
</ul>
<style>
.statistics-list li {color:#333;font-size:11px;padding:4px 0px;display:block;border-top:solid 1px #eee}
.statistics-list li:first-child {border-top:none !important}
.statistics-list li a {color:#333;font-size:11px;display:block}
.statistics-list li a:hover {color:#bf1143}
.statistics-list li b {color:#333;float:right;font-weight:500}
</style>