<?php /* Template_ 2.2.7 2015/07/30 21:42:45 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\emoticon\basic\emoticon.skin.html 000002313 */ 
$TPL__emo_type_1=empty($GLOBALS["emo_type"])||!is_array($GLOBALS["emo_type"])?0:count($GLOBALS["emo_type"]);
$TPL__emoticon_1=empty($GLOBALS["emoticon"])||!is_array($GLOBALS["emoticon"])?0:count($GLOBALS["emoticon"]);?>
<?php if (!defined('_GNUBOARD_')) exit;
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/css/sky-forms.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/css_mo/style_mo.css" type="text/css" media="screen">',0);
add_stylesheet('<link rel="stylesheet" href="/eyoom/theme/pc_basic/css_mo/custom_mo.css" type="text/css" media="screen">',0);
?>
<div class="emoticon-list sky-form">
<div class="emoticon-select">
<section class="col col-3">
<label class="select">
<select name="eom" id="emo" onchange="change_emoticon(this.value);" class="form-control">
<?php if($TPL__emo_type_1){foreach($GLOBALS["emo_type"] as $TPL_V1){?>
<option value="<?php echo $TPL_V1?>" <?php if($GLOBALS["emo"]==$TPL_V1){?>selected<?php }?>><?php echo $TPL_V1?></option>
<?php }}?>
</select>
<i></i>
</label>
</section>
<div class="clear"></div>
</div>
<ul class="emoticons">
<?php if($TPL__emoticon_1){foreach($GLOBALS["emoticon"] as $TPL_V1){?>
<li><a href='javascript:;' onclick="set_emoticon('<?php echo $TPL_V1["emoticon"]?>');"><img src="<?php echo $TPL_V1["url"]?>" width="40"></a></li>
<?php }}?>
</ul>
</div>
<style>
.emoticon-select {padding:10px 0}
.emoticons li {float:left;list-style-type:none;min-height:65px;margin:5px 16px}
</style>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/plugins/sky-forms/version-2.0.5/js/jquery.form.min.js"></script>
<script type="text/javascript" src="/eyoom/theme/pc_basic/js_mo/newwin_mo.js"></script>
<script>
function change_emoticon(emo) {
var url = './emoticon.php?emo='+emo;
$(location).attr('href',url);
}
function set_emoticon(emoticon) {
parent.set_emoticon(emoticon);
parent.jQuery('.vbox-close, .vbox-overlay').trigger('click');
}
</script>
<?php $this->print_("tail_sub",$TPL_SCP,1);?>