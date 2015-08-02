<?php /* Template_ 2.2.7 2015/08/01 20:11:16 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\board\qbasic\list.skin.html 000003149 */ ?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="board-list">
<input type="hidden" id="bo_table" name="bo_table" value="<?php echo $GLOBALS["bo_table"]?>">
<input type="hidden" name="mb_id" id="mb_id" value="<?php echo $TPL_VAR["member"]["mb_id"]?>">
<label class="select">
<select name="q_type_sel" id="q_type_sel" required class="form-control">
<option value="">선택하세요 - 필수</option>
<option value="hbq">형법</option>
<option value="hsbq">형소법</option>
<option value="koreaq">국사</option>
<option value="eng">영어</option>
</select>
</label>
<div class="stdiv board-footer">
<div class="center" style="text-align: center;">
<button class="eb-button eb-button-large eb-button-red" style="text-align: center;" name="btn_submit" value="문제풀기 시작" onclick="startQ();">문제풀기 시작</button>
</div>
</div>
<div class="qdiv margin-bottom-20" style="display:none;">
</div>
</div>
<div class="margin-bottom-20"></div>
<style>
.margin-hr-0 {height:1px;border-top:1px dotted #ddd;margin:0 0 10px;clear:both}
.margin-hr-10 {height:1px;border-top:1px dotted #ddd;margin:10px 0;clear:both}
.board-list .sky-form .radio,.board-list .sky-form .checkbox {padding-left:0}
.board-list .sky-form .radio i,.board-list .sky-form .checkbox i {top:-10px}
.board-list .bo_current {color:#bf1143}
.board-list .table-list-eb span.badge {padding:1px 5px 2px;font-size:10px}
.table-list-eb th {text-align:center}
.table-list-eb td i {margin:2px}
.table-list-eb td em {font-size:11px;padding:0 3px;color:#bf1143;font-style:normal}
.table-list-eb td em .cnt_cmt {font-weight:300}
.table-list-eb td .fa-reply {-ms-transform:scale(-1,-1);-webkit-transform:scale(-1,-1);transform:scale(-1,-1)}
.table-list-eb td.td-chk {width:24px}
.table-list-eb td.td-subject {background:#f8f8f8;padding:12px 8px}
.table-list-eb td .sv_wrap b {font-weight:300}
.board-btn-adm li {float:left;margin-right:5px}
</style>
<script>
function startQ(){
if($("#q_type_sel").val()==""){
alert("과목을 선택하십시오.");
return false;
}
alert("문제 풀이를 시작합니다.");
$(".stdiv").hide();
getQuest();
}
//문제를 가져온다
function getQuest(){
$(".stdiv").html("");
$.ajax({
type:"GET",
url:"./getQ.php",
data:"bo_table="+$("#bo_table").val()+"&q_type="+$("#q_type_sel").val(),
success: function(result){
$("#q_type_sel").attr("disabled",true);
$(".stdiv").html(result);
$(".stdiv").show();
}
});
}
function chkDab(dab){
if(confirm(dab+"번째 항목을 정답으로 선택하시겠습니까?")){
var canswer = $("#answer").val();
if(canswer==dab){
alert("정답입니다.");
getQuest();
}else{
if(confirm("틀렸습니다. 오답노트에 저장하시겠습니까?")){
saveNodab();
}else{
getQuest();
}
}
}
}
//오답노트에 저장한다
function saveNodab(){
$.ajax({
type:"GET",
url:"./saveQ.php",
data:"table_name="+$("#q_type_sel").val()+"&member_id="+$("#mb_id").val()+"&qno="+$("#qno").val()+"&qtext="+$("#qtext").val(),
success: function(result){
alert(result);
getQuest();
}
});
}
</script>