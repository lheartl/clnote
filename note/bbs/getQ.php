<?php
include_once('./_common.php');

/**
 * wr_id 문제번호
 * wr_1~15 순서대로
 * 문제
 * 이미지1
 * 이미지2
 * 문제텍스트1
 * 문제텍스트2
 * 문제텍스트3
 * 문제텍스트4
 * 문제텍스트5
 * 보기1
 * 보기2
 * 보기3
 * 보기4
 * 보기5
 * 정답
 * 
 * @var unknown
 */
$sql = "select wr_id,wr_1,wr_2,wr_3,wr_4,wr_5,wr_6,wr_7,wr_8,wr_9,wr_10,wr_11,wr_12,wr_13,wr_14,wr_15 from g5_write_".$q_type." order by rand() limit 1 ";
$row = sql_fetch($sql);
$qhtml='';
$qhtml.='<table class="eb-table">';
$qhtml.="<thead><tr><th class='font-size-13'>";
$qhtml.="문제.".$row['wr_id']." ".$row['wr_1'];
$qhtml.="</th></tr></thead><tbody><tr><td class='font-size-12'>";
if($row['wr_2']!=''){//문제 이미지1
	$qhtml.='<img src="http://clnotes.com/hbqimg/'.$row['wr_2'].'">';
}
if($row['wr_3']!=''){//문제 이미지2
	$qhtml.='<br><img src="http://clnotes.com/hbqmg/'.$row['wr_3'].'">';
}
$qhtml.='<div>';
if($row['wr_4']!=''){//문제 텍스트1
	$qhtml.=$row['wr_4'];
}
if($row['wr_5']!=''){//문제 텍스트1
	$qhtml.='<br>'.$row['wr_5'];
}
if($row['wr_6']!=''){//문제 텍스트1
	$qhtml.='<br>'.$row['wr_6'];
}
if($row['wr_7']!=''){//문제 텍스트1
	$qhtml.='<br>'.$row['wr_7'];
}
if($row['wr_8']!=''){//문제 텍스트1
	$qhtml.='<br>'.$row['wr_8'];
}
$qhtml.='</div></td></tr><tr><td class="font-size-11">';

if($row['wr_9']!=''){//문제 보기1
	$qhtml.='<button class="eb-button eb-button-large eb-button-gray" style="text-align: left;" name="btn_submit" value="" onclick="chkDab(1);">'.$row['wr_9'].'</button>';
}
if($row['wr_10']!=''){//문제 보기2
	$qhtml.='<br><button class="eb-button eb-button-large eb-button-gray" style="text-align: left;" name="btn_submit" value="" onclick="chkDab(2);">'.$row['wr_10'].'</button>';
}
if($row['wr_11']!=''){//문제 보기3
	$qhtml.='<br><button class="eb-button eb-button-large eb-button-gray" style="text-align: left;" name="btn_submit" value="" onclick="chkDab(3);">'.$row['wr_11'].'</button>';
}
if($row['wr_12']!=''){//문제 보기4
	$qhtml.='<br><button class="eb-button eb-button-large eb-button-gray" style="text-align: left;" name="btn_submit" value="" onclick="chkDab(4);">'.$row['wr_12'].'</button>';
}
if($row['wr_13']!=''){//문제 보기5
	$qhtml.='<br><button class="eb-button eb-button-large eb-button-gray" style="text-align: left;" name="btn_submit" value="" onclick="chkDab(5);">'.$row['wr_13'].'</button>';
}
$qhtml.='<input type="hidden" id="answer" value="'.$row[wr_14].'">';
$qhtml.='<input type="hidden" id="qno" value="'.$row['wr_id'].'">';
$qhtml.='<input type="hidden" id="qtext" value="'.$row['wr_1'].'">';
$qhtml.='</td></tr></tbody></table></div>';


echo $qhtml;
?>