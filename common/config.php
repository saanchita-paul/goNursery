<?php
$sInitialBN="Gonursery";
$sInitialEN="Gonursery";
$sSiteName="Gonursery || Gonursery";
$sSiteTitle="Gonursery || Ecological Marketplace in Bangladesh";
$sKeyWords="Ecological Marketplace in Bangladesh";
$sAuthor="Gonursery";
$sDeveloper="";
$sEmail="";
$sAppId="";

//Local
$sSiteURL="http://localhost/Gonursery/";
$sCurrURL="http://localhost/Gonursery".$_SERVER["REQUEST_URI"];

//Web
// $sSiteURL="https://Gonursery/";
// $sCurrURL="https://Gonursery/".$_SERVER["REQUEST_URI"];


$dtTimeDifference=6*60*60;
$dtDate=gmdate("Y-m-d", time()+$dtTimeDifference);
$dtDay=gmdate("l", time()+$dtTimeDifference);
$dtDateTime=gmdate("d F Y", time()+$dtTimeDifference);
$dtDateTimeF=gmdate("d F, Y H:i:s", time()+$dtTimeDifference);


//Local
$sCSSBootStrap='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/bootstrap-5.0.1-dist/css/bootstrap.min.css">';
$sCSSAnimate='<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">';
$sCSSFontAwesome='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/fontawesome-free-5.15.3-web/css/all.css">';
$sJSjQuery='<script type="text/javascript" src="'.$sSiteURL.'common/jquery-3.6.0/jquery-3.6.0.min.js"></script>';
$sJSBootStrap='<script type="text/javascript" src="'.$sSiteURL.'common/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>';
$sJSAnimate='<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/animateCSS/1.2.2/jquery.animatecss.min.js"></script>';

$sJShtml5shiv='<script type="text/javascript" src="'.$sSiteURL.'common/IE9/html5shiv.min.js"></script>';
$sJSrespond='<script type="text/javascript" src="'.$sSiteURL.'common/IE9/respond.min.js"></script>';
$sPopper='<script type="text/javascript" src="'.$sSiteURL.'common/js/popper.min.js"></script>';

/*//Web
$sCSSBootStrap='<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
$sCSSFontAwesome='<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">';
$sJSjQuery='<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>';
$sJSBootStrap='<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
$sJShtml5shiv='<script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>';
$sJSrespond='<script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';*/

//Common
$sCSSEMM='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/css/style.css?'.$dtDateTimeF.'">';
$sJSEMM='<script type="text/javascript" src="'.$sSiteURL.'common/js/script.js"></script>';
$sCSSSolaimanLipi='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/css/SolaimanLipi.css">';
$sCSSKiron='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/css/Kiron.css">';
$sCSSjDatePick='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/jquery.datepick.package-5.1.0/css/jquery.datepick.css">';
$sJSjDatePickPlug='<script type="text/javascript" src="common/jquery.datepick.package-5.1.0/js/jquery.plugin.min.js"></script>';
$sJSjDatePick='<script type="text/javascript" src="common/jquery.datepick.package-5.1.0/js/jquery.datepick.js"></script>';
$sJSSearchJsApi='<script type="text/javascript" src="http://www.google.com/jsapi"></script>';
$sJSSearchPhoneticUnicode='<script type="text/javascript" src="'.$sSiteURL.'common/search/phoneticunicode.js"></script>';
$sJSSearchUnijoy='<script type="text/javascript" src="'.$sSiteURL.'common/search/unijoy.js"></script>';
$sJSSearchCSE='<script type="text/javascript" src="'.$sSiteURL.'common/search/cse-search-box.js"></script>';
$sCSSEkko='<link rel="stylesheet" type="text/css" href="'.$sSiteURL.'common/ekko-lightbox/ekko-lightbox.min.css?'.$dtDateTimeF.'">';
$sJSEkko='<script type="text/javascript" src="'.$sSiteURL.'common/ekko-lightbox/ekko-lightbox.min.js"></script>';
$sJShtml5shiv='<script type="text/javascript" src="'.$sSiteURL.'common/IE9/html5shiv.min.js"></script>';
$sJSrespond='<script type="text/javascript" src="'.$sSiteURL.'common/IE9/respond.min.js"></script>';
$sCSSOwl='<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>';
$sCSSOwlMin='<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>';
$sJSOwl='<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>';

$sFbRoot='<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v4.0&appId=2689491844415645&autoLogAppEvents=1"></script>';
$sFbPage='<div class="fb-page" data-href="https://www.facebook.com/channel24bd.tv/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/channel24bd.tv/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/channel24bd.tv/">channel24bd</a></blockquote></div>';
$sBackUpTop='<div id="back_to_top" class="back_to_top on"><span class="go_up"><i class="fas fa-angle-up"></i></span></div>';
$sAddThis='<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5db8647fb75fdf19"></script> ';

$sLogoURL=$sSiteURL."media/common/text-logo.png";
$sLogoURLFooter=$sSiteURL."media/common/FLogo.png";
$sLogoURLfb=$sSiteURL."media/common/logo-fb.jpg";
$sFavicon=$sSiteURL."media/common/favicon.png";
$sThumb=$sSiteURL."media/common/thumb.jpg";
$sSign=$sSiteURL."media/common/Sign.png";


function fFormatString($s){
	global $connEMM;
	/*Ommits HTML Code from the texts*/
	if(function_exists("mysqli_real_escape_string")){
		$sStr=mysqli_real_escape_string($connEMM, trim($s));/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=strip_tags($sStr);/*Strip HTML and PHP tags from a string*/
		$sStr=str_replace("'", "`", $sStr);
	}else{
		$sStr=trim($s);/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=strip_tags($sStr);/*Strip HTML and PHP tags from a string*/
		$sStr=str_replace("'", "`", $sStr);
	}
	return $sStr;
}
function fFormatStringHeading($s){
	global $connEMM;
	/*Passes HTML Code in the texts*/
	if(function_exists("mysqli_real_escape_string")){
		$sStr=mysqli_real_escape_string($connEMM, trim($s));/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=htmlspecialchars($sStr);
		$sStr=str_replace("'", "&#39;", $sStr);
		$sStr=str_replace("'", "`", $sStr);
	}else{
		$sStr=trim($s);/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=htmlspecialchars($sStr);
		$sStr=str_replace("'", "&#39;", $sStr);
		$sStr=str_replace("'", "`", $sStr);
	}
	return $sStr;
}
function fFormatStringHTML($s){
	global $connEMM;
	/*Passes HTML Code in the texts*/
	if(function_exists("mysqli_real_escape_string")){
		$sStr=mysqli_real_escape_string($connEMM, trim($s));/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=str_replace("'", "`", $sStr);
	}else{
		$sStr=trim($s);/*Escapes special characters in a string for use in an SQL statement*/
		$sStr=str_replace("'", "`", $sStr);
	}
	return $sStr;
}
function fFormatURL($s){
	global $connEMM;
	/*Excludes HTML tags from a text*/
	$sStr=trim($s);
	$arrWords=array(":","‘","’","/","'","`","?", "“", '"', ",", "  ", "<", ">", "~", "!", "@", "$", "%", "^", "&", "*", "(", ")", "[", "]", "{", "}", "+", "॥", "ঃ", "।", "&#39;", ".", "..", "...", "....", ";", "#", "lsquo", "rsquo");
	$sStr=str_replace($arrWords, "", $sStr);
	$sStr=strip_tags($sStr);/*Strip HTML and PHP tags from a string*/
	$sStr=html_entity_decode($sStr);
	$sStr=str_replace("   ", " ", $sStr);
	$sStr=str_replace("  ", " ", $sStr);
	$sStr=str_replace(" ", "-", $sStr);
	return $sStr;
}
function fFormatHead($s){
	global $connEMM;
	/*Excludes HTML tags from a text*/
	$arrWords=array("&ldquo;", "&rdquo;", "&acute;", "<br>", "<br />", "<p>", "</p>", "</font>", "<blink>", "</blink>", "<font size=5>", "<font size=+5>", "<font size=4>", "<font size=+4>", "<font size=3>", "<font size=+3>", "<font color=black size=2>", "<strong>", "</strong>", "\r", "\n", "\r\n", "&nbsp;", "&rsquo;", "&lsquo;", "<iframe src=", "http:/*www.youtube.com/embed/", "</iframe>", "frameborder=", "width=", "height=", "color: #ff0000;", "<ul>", "</ul>", "<li>", "</li>", "<a href=", "</a>", "<span style=", "</span>", "color: #888888;", "<em>", "</em>", '0', '429', '276', ">", '\">', '\"', "&#39;");
	$sStr=trim($s);
	$sStr=mysqli_real_escape_string($connEMM, trim($s));/*Escapes special characters in a string for use in an SQL statement*/
	$sStr=strip_tags($sStr);/*Strip HTML and PHP tags from a string*/
	$sStr=str_replace("'", "`", $sStr);
	$sStr=str_replace($arrWords, " ", $sStr);
	$sStr=html_entity_decode($sStr);
	return $sStr;
}
function fEn2Bn($BDDate){
	/*Convert a English date to Bangla date*/
	$en=array("AM","PM","am","pm","Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Sat","Sun","Mon","Tue","Wed","Thu","Fri","January","February","March","April","May","June","July","August","September","October","November","December","0","1","2","3","4","5","6","7","8","9");
	$bn=array("এএম","পিএম","এএম","পিএম","শনিবার","রোববার","সোমবার","মঙ্গলবার","বুধবার","বৃহস্পতিবার","শুক্রবার","শনি","রোব","সোম","মঙ্গল","বুধ","বৃহস্পতি","শুক্র","জানুয়ারি","ফেব্রুয়ারি","মার্চ","এপ্রিল","মে","জুন","জুলাই","আগস্ট","সেপ্টেম্বর","অক্টোবর","নভেম্বর","ডিসেম্বর","০","১","২","৩","৪","৫","৬","৭","৮","৯");
	$BDDate=str_replace($en,$bn,$BDDate);
	return $BDDate;
}
function fGetWordsCount($sBrief, $iWordsNo){
	/*Get first 10 words from a lot of words*/
	$sBrief=implode(' ', array_slice(explode(' ', $sBrief), 0, $iWordsNo));
	return $sBrief;
}
function fGetCharCount($sBrief, $iCharNo){
	/*Get first 10 words from a lot of words*/
	$sBrief=substr($sBrief, 0, $iCharNo);
	return $sBrief;
}

//This function upd_spCat_Pos_ID_check($iContentID, $iSpCatID, $iSpCadPos) // Do not use this Function without checking
function upd_spCat_Pos_ID_check($iContentID, $iSpCatID, $iSpCadPos){
	//It is for Re-Serial by the System. // Date: 28.11.2018 // Do not use this Function without checking
	global $connEMM;
		echo "<br>Inside the update position id<br><br>";
	$qSQL="";$qSQL_Array=""; $qSQL_Total=""; $iTotal=0;$sPosition=array();
	$aAllData=array(); $aAllData[0] = array(); $aAllData[1] = array(); $aAllData[2] = array();  $aAllData[3] = array();
		//all record count
		$qSQL_Total="SELECT count(ContentID) as TotalRecord FROM bn_content WHERE Deletable=1 AND ShowContent=1 AND SpecialCategoryID=2 AND  SpecialCategoryIDPos>=$iSpCadPos";
		$qSQL_Total="SELECT count(ContentID) as TotalRecord FROM bn_content WHERE Deletable=1 AND ShowContent=1 AND SpecialCategoryID=2 AND  SpecialCategoryIDPos>=$iSpCadPos";
		echo "<br>Total Record SQL:".$qSQL_Total."<br><br>";
		$resultSQL=mysqli_query($connEMM, $qSQL_Total);
		if(mysqli_num_rows($resultSQL)>0){
			////echo "<br>WITH POS No.".$rsSQL["SpecialCategoryIDPos"]."<br>";
				$rsSQL=mysqli_fetch_assoc($resultSQL);
				$iTotal= $rsSQL["TotalRecord"];
		}//end of total row number

		echo "<br>Total Record:".$iTotal."<br><br>";
		//all data in an array
		$qSQL_Array="SELECT ContentID, CategoryID, SpecialCategoryID, SpecialCategoryIDPos FROM bn_content WHERE Deletable=1 AND ShowContent=1 AND SpecialCategoryID=2 AND SpecialCategoryIDPos>=$iSpCadPos 		ORDER BY SpecialCategoryIDPos, CategoryID, ContentID ";
		echo "<br>Array SQL:".$qSQL_Array."<br><br>";
		$resultSQL=mysqli_query($connEMM, $qSQL_Array);
			//$iT=0;
		while($rsSQL=mysqli_fetch_assoc($resultSQL)){
				array_push($aAllData[0], $rsSQL["ContentID"]);
				array_push($aAllData[1], $rsSQL["CategoryID"]);
				array_push($aAllData[2], $rsSQL["SpecialCategoryID"]);
				array_push($aAllData[3], $rsSQL["SpecialCategoryIDPos"]);
				//echo "<br>Inside Array Value of Record:.$iT<br><br>";
				//$iT++;
		}//end of all data in an array

		//echo "<br>After getting array values<br><br>";
		//compare & update position
		$iPos=$iSpCadPos+1;
		for($i=0;$i<=$iTotal;$i++){
			echo "<br>Content ID:".$aAllData[0][$i]."<br>";
			$qSQL="UPDATE bn_content SET SpecialCategoryIDPos=".$iPos." WHERE ContentID=".$aAllData[0][$i];
			echo "<br>".$qSQL."<br>";
			$resultInsert=mysqli_query($connEMM, $qSQL) or die(mysqli_error($connEMM));
			if($resultInsert){
				echo "<br> UPDATE SUCCESSFULL of Content ID: ".$aAllData[0][$i]."<br><br><br><br>";
			}
			$iPos++;
		}	//end of update
		//echo "<br>".$qSQL."<br><br>"; exit;
		mysqli_free_result($result1SQL);
		return 1;
} //End of Re-Serial by the System. // Date: 28.11.2018

?>
