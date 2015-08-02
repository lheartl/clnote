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
$sql = "select count(*) as cnt from g5_write_clnote where mb_id ='{$member_id}' and wr_1='{$table_name}' and wr_2='{$qno}' ";
$row = sql_fetch($sql);
if($row['cnt']>0){
	sql_query(" update clnote set wr_3 = wr_3 + 1 where member_id ='{$member_id}' and table_name='{$table_name}' and qno='{$qno}'  ");
}else{
	$sql = " insert into g5_write_clnote (mb_id,wr_1,wr_2,wr_3,wr_4,wr_datetime,wr_5) values('{$member_id}','{$table_name}','{$qno}','1','{$qtext}',NOW(),'{$table_name}')";
	sql_query($sql);
}

echo "저장되었습니다.";
?>