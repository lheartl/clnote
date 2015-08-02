<?php /* Template_ 2.2.7 2015/07/30 21:42:45 G:\web\work\note\eyoom\theme\pc_basic\skin_mo\nameview\basic\nameview.skin.html 000002269 */ ?>
<?php if (!defined('_GNUBOARD_')) exit; ?>
<span class="sv_wrap">
<a href="<?php echo $TPL_VAR["head"]["link"]?>" class="sv_member" title="<?php echo $TPL_VAR["head"]["title"]?>" target="_blank" onclick="return false;"> <b><?php echo $TPL_VAR["head"]["name"]?></b></a>
<?php  ob_start(); ?>
<span class="sv dropdown-menu" role="menu">
<?php if($TPL_VAR["mb_id"]&&$TPL_VAR["member"]["mb_id"]){?>
<a href="<?php echo G5_BBS_URL?>/memo_form.php?me_recv_mb_id=<?php echo $TPL_VAR["mb_id"]?>" class="win_memo" id="ol_after_memo"><i class="fa fa-envelope-o"></i> 쪽지보내기</a>
<a href="<?php echo $TPL_VAR["link"]["profile"]?>" onclick="win_profile(this.href); return false;"><i class="fa fa-info"></i> 자기소개</a>
<a href="<?php echo $TPL_VAR["link"]["article"]?>"><i class="fa fa-file-text-o"></i> 전체게시물</a>
<?php }?>
<?php if($TPL_VAR["email"]){?>
<a href="<?php echo $TPL_VAR["link"]["email"]?>" onclick="win_email(this.href); return false;"><i class="fa fa-envelope-o"></i> 메일보내기</a>
<?php }?>
<?php if($TPL_VAR["home"]){?>
<a href="<?php echo $TPL_VAR["link"]["home"]?>" target="_blank"><i class="fa fa-home"></i> 홈페이지</a>
<?php }?>
<?php if($TPL_VAR["bo_table"]){?>
<?php if($TPL_VAR["mb_id"]){?>
<a href="<?php echo $TPL_VAR["link"]["sid"]?>"><i class="fa fa-search"></i> 아이디로 검색</a>
<?php }else{?>
<a href="<?php echo $TPL_VAR["link"]["sname"]?>"><i class="fa fa-search"></i> 이름으로 검색</a>
<?php }?>
<?php }?>
<?php if($TPL_VAR["g5"]["sms5_use_sideview"]){?>
<a href="<?php echo $TPL_VAR["link"]["sms"]?>" class="win_sms5" target="_blank"><i class="fa fa-mobile"></i> 문자보내기</a>
<?php }?>
<?php if($TPL_VAR["is_admin"]){?>
<a href="<?php echo $TPL_VAR["link"]["info"]?>" target="_blank"><i class="fa fa-cog"></i> 회원정보변경</a>
<a href="<?php echo $TPL_VAR["link"]["point"]?>" target="_blank"><i class="fa fa-tachometer"></i> <?php echo $TPL_VAR["levelset"]["gnu_name"]?>내역</a>
<?php }?>
</span>
<?php
$mb_name = ob_get_contents();
ob_end_clean();
?>
<?php echo $mb_name; ?>
<noscript class="sv_nojs"><?php echo $noscript;?></noscript>
</span>