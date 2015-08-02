<?php /* Template_ 2.2.7 2015/08/01 22:40:54 G:\web\work\note\eyoom\theme\pc_basic\main\index_mo.html 000001036 */ ?>
<?php if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 ?>
<div class="stdiv board-footer">
<div class="center" style="text-align: center;">
<button class="eb-button eb-button-large eb-button-red" style="text-align: center;" name="btn_submit" value="문제풀기" onclick="moveQ();">문제풀기 시작</button>
</div>
</div>
<div class="margin-bottom-20">
<?php echo $TPL_VAR["latest"]->latest_eyoom('ebm_image_slider','bo_table=freeimg||count=6||cut_subject=20||img_view=y||bo_direct=n||img_width=400')?>
</div>
<!-- <div class="eb-con-box margin-bottom-20">
<?php echo $TPL_VAR["latest"]->latest_newpost('ebm_np_basic','count=6||cut_subject=23||cut_content=23')?>
</div> -->
<div class="eb-con-box margin-bottom-20">
<?php echo $TPL_VAR["latest"]->latest_eyoom('ebm_basic','title=자유게시판||bo_table=free||count=6||cut_subject=25')?>
</div>
<script>
function moveQ(){
alert("d");
}
</script>