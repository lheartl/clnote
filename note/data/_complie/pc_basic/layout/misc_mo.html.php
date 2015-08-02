<?php /* Template_ 2.2.7 2015/07/30 21:56:05 G:\web\work\note\eyoom\theme\pc_basic\layout\misc_mo.html 000004883 */ ?>
<?php if (!defined('_GNUBOARD_')) exit;?>
<div class="modal fade profile-modal" tabindex="-1" role="dialog" aria-labelledby="profilelModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<form name="profile_photo" method="post" action="<?php echo EYOOM_CORE_URL?>/member/photo_update.php" enctype="multipart/form-data" class="sky-form">
<input type="hidden" name="old_photo" value="<?php echo $TPL_VAR["eyoomer"]["photo"]?>">
<input type="hidden" name="back_url" value="<?php echo $_SERVER["REQUEST_URI"]?>">
<div class="modal-header">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
<h4 id="profilelModalLabel" class="modal-title">프로필 사진변경</h4>
</div>
<div class="modal-body">
<div class="profile-photo"><?php echo $TPL_VAR["profile_photo"]?></div>
<div class="profile-txt">프로필 사진은 이미지(gif/jpg/png) 파일만 등록가능하며 자동으로 가로X세로 80x80픽셀로 썸네일화 합니다.</div>
<label class="label">사진 선택</label>
<label for="file" class="input input-file">
<div class="button bg-color-light"><input type="file" id="file" name="photo" value="사진선택" onchange="this.parentNode.nextSibling.value = this.value">파일선택</div><input type="text" readonly>
</label>
<?php if($TPL_VAR["eyoomer"]["photo"]){?><label class="checkbox"><input type="checkbox" name="del_photo" value="1"><i></i>프로필사진 삭제</label><?php }?>
</div>
<div class="modal-footer">
<button data-dismiss="modal" class="btn-e btn-e-dark" type="button">닫기</button>
<button class="btn-e" type="submit" value="저장하기">저장하기</button>
</div>
</form>
</div>
</div>
</div>
<div class="modal fade search-modal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content">
<div class="modal-header">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
<h4 id="myLargeModalLabel" class="modal-title"><i class="fa fa-search"></i> <?php echo $TPL_VAR["board"]["bo_subject"]?> 검색</h4>
</div>
<div class="modal-body">
<!-- 게시판 검색 시작 { -->
<div id="bo_sch" class="sky-form">
<!--legend>게시물 검색</legend-->
<form name="fsearch" method="get">
<input type="hidden" name="bo_table" value="<?php echo $GLOBALS["bo_table"]?>">
<input type="hidden" name="sca" value="<?php echo $GLOBALS["sca"]?>">
<input type="hidden" name="sop" value="and">
<label for="sfl" class="sound_only">검색대상</label>
<div class="row">
<section class="col col-12">
<label class="select">
<select name="sfl" id="sfl" class="form-control">
<option value="wr_subject"<?php echo get_selected($GLOBALS["sfl"],'wr_subject',true)?>>제목</option>
<option value="wr_content"<?php echo get_selected($GLOBALS["sfl"],'wr_content')?>>내용</option>
<option value="wr_subject||wr_content"<?php echo get_selected($GLOBALS["sfl"],'wr_subject||wr_content')?>>제목+내용</option>
<option value="mb_id,1"<?php echo get_selected($GLOBALS["sfl"],'mb_id,1')?>>회원아이디</option>
<option value="mb_id,0"<?php echo get_selected($GLOBALS["sfl"],'mb_id,0')?>>회원아이디(코)</option>
<option value="wr_name,1"<?php echo get_selected($GLOBALS["sfl"],'wr_name,1')?>>글쓴이</option>
<option value="wr_name,0"<?php echo get_selected($GLOBALS["sfl"],'wr_name,0')?>>글쓴이(코)</option>
</select>
<i></i>
</label>
</section>
<section class="col col-12">
<label for="stw" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
<label for="file" class="input input-file">
<button class="button" type="submit" value="검색" style="background:#d5d5d5;">검색</button>
<input type="text" name="stx" value="<?php echo stripslashes($GLOBALS["stx"])?>" required id="stx" class="form-control">
</label>
</section>
</div>
</form>
</div>
<!-- } 게시판 검색 끝 -->
</div>
<div class="modal-footer">
<button data-dismiss="modal" class="btn-e btn-e-dark" type="button">닫기</button>
</div>
</div>
</div>
</div>
<?php if($TPL_VAR["wmode"]){?>
<div class="modal fade view-iframe-modal" tabindex="-1" role="dialog" aria-labelledby="boardlistModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
<h4 id="myLargeModalLabel" class="modal-title"><i class="fa fa-search"></i> View Details</h4>
</div>
<div class="modal-body">
<iframe id="view-iframe" scrolling="yes" width="100%" frameborder="0"></iframe>
</div>
<div class="modal-footer">
<button data-dismiss="modal" class="btn-e btn-e-dark" type="button">닫기</button>
</div>
</div>
</div>
</div>
<?php }?>