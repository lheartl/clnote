<?php /* Template_ 2.2.7 2015/07/30 21:56:05 G:\web\work\note\eyoom\theme\pc_basic\layout\tail_sub.html 000001660 */ ?>
<?php if (!defined('_GNUBOARD_')) exit; ?>
<script>
$(function(){
$("#follow button").click(function(){
var action = $(this).attr('value');
var target = $(this).attr('name');
var url = "<?php echo EYOOM_CORE_URL?>/mypage/following.ajax.php";
$.post(url, {'action':action,'user':target}, function(data) {
if(data.result == 'yes') {
var botton = $("."+target);
if(action == 'following') {
botton.removeClass('btn-e-red');
botton.addClass('btn-e-dark');
botton.attr('title','친구관계를 해제합니다.');
botton.html('<i class="fa fa-times"></i> unfollow');
botton.attr('value','unfollow');
}
if(action == 'unfollow') {
botton.removeClass('btn-e-dark');
botton.addClass('btn-e-red');
botton.attr('title','친구관계를 신청합니다.');
botton.html('<i class="fa fa-check"></i> following');
botton.attr('value','following');
}
} else if(data.result == 'no'){
alert('소셜기능을 Off 시켜놓은 회원입니다.');
}
},"json");
});
});
</script>
<?php if($GLOBALS["is_admin"]=='super'){?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$GLOBALS["begin_time"]?><br></div> --><?php }?>
<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
var $sv_use = $(".sv_use");
var count = $sv_use.length;
$sv_use.each(function() {
$(this).css("z-index", count);
$(this).css("position", "relative");
count = count - 1;
});
});
</script>
<![endif]-->
</body>
</html>
<?php echo html_end()?>
<?php exit;?>