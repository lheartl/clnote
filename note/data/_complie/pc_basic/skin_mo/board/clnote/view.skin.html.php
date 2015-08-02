<?php /* Template_ 2.2.7 2015/08/01 03:14:29 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\board\clnote\view.skin.html 000010049 */  $this->include_("eb_nameview");?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<article class="board-view">
<div class="margin-bottom-10"></div>
<div class="headline">
<h5>
<i class="fa fa-file-text-o"></i>
<?php if($GLOBALS["category_name"]){?><span class="color-red"><?php echo $TPL_VAR["view"]["ca_name"]?></span> - <?php }?>
<?php echo cut_str(get_text($TPL_VAR["view"]["wr_subject"]), 70)?>
</h5>
</div>
<div class="margin-bottom-20"></div>
<section class="board-view-info">
<h2>페이지 정보</h2>
<div class="left">
<?php if($TPL_VAR["eyoom_board"]["bo_use_profile_photo"]){?>
<span class="view-photo margin-right-5"><?php if($TPL_VAR["view"]["mb_photo"]){?><?php echo $TPL_VAR["view"]["mb_photo"]?><?php }else{?><span class="user_icon"><i class="fa fa-user"></i></span><?php }?></span>
<?php }else{?>
<i class="fa fa-user color-grey margin-top-10"></i>
<?php }?>
<?php if($TPL_VAR["lv"]["gnu_icon"]){?>
<span style='display:inline-block;margin-right:2px;'><img src="<?php echo $TPL_VAR["lv"]["gnu_icon"]?>" align="absmiddle"></span>
<?php }?>
<?php if($TPL_VAR["lv"]["eyoom_icon"]){?>
<span style='display:inline-block;margin-right:2px;'><img src="<?php echo $TPL_VAR["lv"]["eyoom_icon"]?>" align="absmiddle"></span>
<?php }?>
<span style='display:inline-block;margin-right:2px;'><?php echo eb_nameview('basic',$TPL_VAR["view"]["mb_id"],$TPL_VAR["view"]["wr_name"],$TPL_VAR["view"]["wr_email"],$TPL_VAR["view"]["wr_homepage"])?><small><?php if($GLOBALS["is_ip_view"]){?>&nbsp;<?php echo $GLOBALS["ip"]?><?php }?></small></span>
<i class="fa fa-comments color-red"></i> <span class="color-red"><?php echo number_format($TPL_VAR["view"]["wr_comment"])?></span>
</div>
<div class="right t-right">
<p>
<i class="fa fa-eye"></i> <?php echo number_format($TPL_VAR["view"]["wr_hit"])?>&nbsp;&nbsp;
<i class="fa fa-clock-o"></i>
<?php if($TPL_VAR["eyoom_board"]["bo_sel_date_type"]=='1'){?>
<?php echo $TPL_VAR["eb"]->date_time('Y.m.d H:i',$TPL_VAR["view"]["wr_datetime"])?>
<?php }elseif($TPL_VAR["eyoom_board"]["bo_sel_date_type"]=='2'){?>
<?php echo $TPL_VAR["eb"]->date_format('Y.m.d H:i',$TPL_VAR["view"]["wr_datetime"])?>
<?php }?>
</p>
</div>
<div class="clear"></div>
</section>
<section class="board-view-atc">
<h2 class="board-view-atc-title">본문</h2>
<div class="margin-bottom-15 t-center"><?php echo $GLOBALS["file_conts"]?></div>
<div class="board-view-con view-content"><?php echo $TPL_VAR["view"]["qhtml"]?></div>
<?php if($GLOBALS["is_signature"]&&$TPL_VAR["view"]["mb_id"]!='anonymous'){?>
<?php $this->print_("signature_mo",$TPL_SCP,1);?>
<?php }?>
</section>
<?php $this->print_("cmt_mo",$TPL_SCP,1);?>
</article>
<style>
.margin-hr-0 {height:1px;border-top:1px dotted #ddd;margin:0 0 10px;clear:both}
.margin-hr-10 {height:1px;border-top:1px dotted #ddd;margin:10px 0;clear:both}
.margin-top-m-1 {margin-top:-1px}
.board-view {margin-bottom:20px;padding-bottom:20px}
.board-view-info {padding:5px 10px;border:1px solid #e5e5e5;color:#555;background:#fafafa}
.board-view-info h2 {position:absolute;font-size:0;line-height:0;overflow:hidden}
.board-view-info .right {margin-top:5px}
.board-view-info .view-photo img {-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;width:30px;height:30px}
.board-view-info .view-photo .fa-user {-webkit-border-radius:50% !important;-moz-border-radius:50% !important;border-radius:50% !important;width:30px;height:30px;background:#fff;color:#aaa;line-height:30px;font-size:16px;text-align:center}
.board-view-file {border-left:1px solid #e5e5e5;border-right:1px solid #e5e5e5}
.board-view-file h2 {position:absolute;font-size:0;line-height:0;overflow:hidden}
.board-view-file ul {margin-bottom:0}
.board-view-file li {padding:7px 5px 7px 10px;border-bottom:1px solid #e5e5e5;background:#fff;font-size:12px}
.board-view-file span {padding:0 5px;color:#888}
.board-view-file a {color:#000;word-wrap:break-word}
.board-view-link {border-left:1px solid #e5e5e5;border-right:1px solid #e5e5e5}
.board-view-link h2 {position:absolute;font-size:0;line-height:0;overflow:hidden}
.board-view-link li {padding:7px 10px;border-bottom:1px solid #e5e5e5;background:#fff;font-size:12px}
.board-view-link a {word-wrap:break-word}
.board-view-bot {zoom:1}
.board-view-bot:after {display:block;visibility:hidden;clear:both;content:""}
.board-view-bot h2 {position:absolute;font-size:0;line-height:0;overflow:hidden}
.board-view-bot ul {margin:0;padding:0;list-style:none}
.view-top-btn {margin:10px 0 10px;padding:10px 0;zoom:1}
.view-top-btn:after {display:block;visibility:hidden;clear:both;content:""}
.view-top-btn h2 {position:absolute;font-size:0;line-height:0;overflow:hidden}
.view-top-btn .top-btn-left li {float:left;margin-right:5px;margin-bottom:5px}
.view-top-btn .top-btn-right li {float:left;margin-left:5px;margin-bottom:5px}
.board-view-atc {min-height:200px;height:auto !important}
.board-view-atc-title {position:absolute;font-size:0;line-height:0;overflow:hidden}
.board-view-img {margin:0;width:100%;overflow:hidden;zoom:1}
.board-view-img:after {display:block;visibility:hidden;clear:both;content:""}
.board-view-img img {max-width:100%;height:auto}
.board-view-con {margin-bottom:30px;width:100%;line-height:1.6;word-break:break-all;overflow:hidden}
.board-view-con a {color:#000;text-decoration:underline}
.board-view-con img {max-width:100%;height:auto}
.board-view-act {margin-bottom:20px;text-align:center}
.board-view-act .board-view-act-gng {position:relative}
.board-view-act .eb-button {padding-left:25px;padding-right:25px}
.board-view-act a {margin-right:5px;vertical-align:middle}
.board-view-act-good, .board-view-act-nogood {display:none;position:absolute;top:30px;left:0;padding:5px 0;width:165px;background:#000;color:#fff;text-align:center}
/* 게시판 보기에서 이미지 자동조절 */
.board-view-con .photo-image, .board-view-con .photo-image {margin:0px 10px}
.board-view-con .photo-image img, .board-view-con .photo-image img {width:100%}
.board-view-con .photo-text, .board-view-con .photo-text {color:#777;font-size:11px;line-height:13pt;margin:0;padding:5px;border:1px solid #ddd;border-top:0}
.board-view-con a {text-decoration:none}
.blind{display:none}
/*SyntaxHighlighter*/
.board-view-con .syntaxhighlighter {border-top:1px solid #eee;border-bottom:1px solid #eee;padding:10px 0}
</style>
<script src="/js/viewimageresize.js"></script>
<script>
<?php if($TPL_VAR["board"]["bo_download_point"]< 0){?>
$(function() {
$("a.view_file_download").click(function() {
if(!g5_is_member) {
alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
return false;
}
var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($TPL_VAR["board"]["bo_download_point"])?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";
if(confirm(msg)) {
var href = $(this).attr("href")+"&js=on";
$(this).attr("href", href);
return true;
} else {
return false;
}
});
});
<?php }?>
function close_modal(wr_id) {
window.parent.closeModal(wr_id);
}
function board_move(href)
{
window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>
<script>
$(function() {
$("a.view_image").click(function() {
window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
return false;
});
// 추천, 비추천
$("#good_button, #nogood_button").click(function() {
var $tx;
if(this.id == "good_button")
$tx = $(".board-view-act-good");
else
$tx = $(".board-view-act-nogood");
excute_good(this.href, $(this), $tx);
return false;
});
// 이미지 리사이즈
$(".board-view-atc").viewimageresize();
});
function excute_good(href, $el, $tx)
{
$.post(
href,
{ js: "on" },
function(data) {
if(data.error) {
alert(data.error);
return false;
}
if(data.count) {
$el.find("strong").text(number_format(String(data.count)));
if($tx.attr("id").search("nogood") > -1) {
$tx.text("이 글을 비추천하셨습니다.");
$tx.fadeIn(200).delay(2500).fadeOut(200);
} else {
$tx.text("이 글을 추천하셨습니다.");
$tx.fadeIn(200).delay(2500).fadeOut(200);
}
}
}, "json"
);
}
</script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shLegacy.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushCss.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushJava.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushPhp.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushPython.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushRuby.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushSass.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushScala.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushSql.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
<link type="text/css" rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/syntaxhighlighter/styles/shCoreDefault.css"/>
<script type="text/javascript">SyntaxHighlighter.all();</script>