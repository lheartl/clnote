<?php /* Template_ 2.2.7 2015/07/30 21:42:45 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\newwin\basic\newwin.skin.html 000001825 */ 
$TPL_newwin_1=empty($TPL_VAR["newwin"])||!is_array($TPL_VAR["newwin"])?0:count($TPL_VAR["newwin"]);?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div id="hd_pop">
<h2>팝업레이어 알림</h2>
<?php if($TPL_newwin_1){foreach($TPL_VAR["newwin"] as $TPL_V1){?>
<div id="hd_pops_<?php echo $TPL_V1["nw_id"]?>" class="hd_pops" style="top:<?php echo $TPL_V1["nw_top"]?>px;left:<?php echo $TPL_V1["nw_left"]?>px">
<div class="hd_pops_con" style="width:<?php echo $TPL_V1["nw_width"]?>px;height:<?php echo $TPL_V1["nw_height"]?>px">
<div class="padding-all-10 font-size-12">
<?php echo conv_content(($TPL_V1["nw_content"]), 1)?>
</div>
</div>
<div class="hd_pops_footer">
<button class="hd_pops_reject hd_pops_<?php echo $TPL_V1["nw_id"]?> <?php echo $TPL_V1["nw_disable_hours"]?>"><strong><?php echo $TPL_V1["nw_disable_hours"]?></strong>시간 동안 다시 열람하지 않습니다.</button>
<button class="hd_pops_close hd_pops_<?php echo $TPL_V1["nw_id"]?>">닫기</button>
</div>
</div>
<?php }}else{?>
<span class="sound_only">팝업레이어 알림이 없습니다.</span>
<?php }?>
</div>
<style>
.hd_pops {border:3px solid #bf1143;-webkit-box-shadow:0 4px 9px rgba(0, 0, 0, .1);box-shadow:0 4px 9px rgba(0, 0, 0, .1)}
.hd_pops_footer {background:#bf1143}
</style>
<script>
$(function() {
$(".hd_pops_reject").click(function() {
var id = $(this).attr('class').split(' ');
var ck_name = id[1];
var exp_time = parseInt(id[2]);
$("#"+id[1]).css("display", "none");
set_cookie(ck_name, 1, exp_time, g5_cookie_domain);
});
$('.hd_pops_close').click(function() {
var idb = $(this).attr('class').split(' ');
$('#'+idb[1]).css('display','none');
});
$("#hd").css("z-index", 1000);
});
</script>