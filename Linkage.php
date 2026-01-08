<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0032)http://www.joomlasaver.com/photo -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-gb"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base href=".">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
<meta http-equiv="Pragma" content="no-cache">
<meta name="author" content="潤捷電控">
<meta name="keywords" content="潤捷電控 軟體設計程式設計 ERP,MIS,HTML,MCU,BMS,SOFTWARE,Embedded">
<meta name="description" content="潤捷電控 軟體設計程式設計 ERP,MIS,HTML,MCU,BMS,SOFTWARE,Embedded">
<title>潤捷電控 軟體程式設計的專業公司</title>
<link href="./RJC/template.css" rel="stylesheet" type="text/css">

<style type="text/css">.xFont{font-size:350%}
.fb_iframe_widget{display:inline-block;position:relative} 
</style>	
	
</head>

<body>
	<?
// 是否是表單送回
if  (isset($_POST["Send"])) { 
    // 取得表單欄位內容
    $xfrom = $_POST["From"];
    $xsubject = $_POST["Subject"];
    $xbody = $_POST["TextBody"];

    $servername = "sql213.yabi.me";
    $username = "yabi_29197924";
    $password = "xdr3bhu7";
    $dbname = "yabi_29197924_RJC";

    if ($xsubject == '')
    {
       echo "<script>alert('連絡方式 : 必須有資料, 否則無法連絡 !')</script>";
    }
    else
    {
      //echo "<script>alert('$xfrom : $xsubject : $xbody : test ok ...!')</script>";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      }
      $sql_str = "INSERT INTO rjc_db(fitem, ftel, fnote) VALUES ('$xfrom','$xsubject','$xbody')";
      if ($conn->query($sql_str) == TRUE) {
         echo "<script>alert('資料已存檔 ...')</script>";
      } else {
        echo "<script>alert('資料存檔異常 ...')</script>";
      }
      $conn->close();
    }
}
?>
<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>

<div id="header">
<div id="header-inner">
	
<div id="logo">
  <a href="index.html" title="主網頁">
     <img src="./RJC/Logo7.jpg" alt="ZungJung logo">
  </a>
</div>
																  
<div id="navigation" class="navbar navbar-inverse" role="navigation">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div id="toolbar" class="navbar-collapse collapse">
<ul class="menu">
<li><a href="index.html">首頁</a></li>
<li><a href="LCD_Lane.html" style="text-decoration:none;color:black">工業自動控制</a></li>
<li><a href="Software.html" style="text-decoration:none;color:black">軟體實績介紹</a></li>
<li><a href="RJC_ERP.html" style="text-decoration:none;color:black">製造業 ERP 設計</a></li>
<li><a href="RJC_MIS.html" style="text-decoration:none;color:black">企業 MIS 設計</a></li>
<li><a href="Linkage.php">聯絡我們</a></li>
</ul>
</div>
</div></div>
</div>
	
<div id="banner">
<div id="container">
<a href="index.html" title="主網頁" style="text-decoration:none;color:white"><h1>. 潤捷電控 - 資訊有限公司 .</h1></a>
<div class="social">- 資訊系統．專業的軟體設計團隊 -　
<div class="fb-share-button fb_iframe_widget">
	
 <span style="vertical-align: bottom; width: 77px; height: 28px;">
  <iframe frameborder="0" src="./RJC/share_button.html" style="border: none; visibility: visible; width: 77px; height: 28px;">
  </iframe></span>
</div>
	
<iframe id="" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" style="position: static; visibility: visible; width: 76px; height: 28px;" title="Twitter Tweet Button" src="./RJC/tweet_button.html">
</iframe>
	
</div>
</div>
</div>
<div class="clearfix">
  <div id="container">
	  <table width="1130" border="0" cellspacing="1" cellpadding="1">
		  <tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr>
		  <tr>
		  <td width=10%> </td><td width=90% style="font-size:160%; color:#002700"><b>--　請留下您的連絡訊息　--</b></td>
		  </tr>
		  <tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr><tr><td> </td></tr>
	  </table>

<form action="Linkage.php" method="post">	  
	  <table width="1160" border="0" cellspacing="1" cellpadding="0" style="border:1px gray dotted;">

  <tr><td width=7%> </td><td> </td><td> </td></tr>
  <tr><td> 　</td><td> 　</td><td> 　</td></tr>
		  
  <tr><td> 　</td><td style="font-size:130%;"><b>連絡人:</b></td>
  <td style="font-size:125%;"><input type="text" size="30" name="From">　輸入個人名稱或公司稱謂
  </td></tr>
		  
  <tr><td> 　</td><td> 　</td><td> 　</td></tr>		  
  <tr><td> 　</td><td style="font-size:130%;"><b>連絡方式:</b></td>
  <td style="font-size:125%;"><input type="text" size="40" name="Subject">　輸入連絡方式 email, line 或 電話 .. 等
  </td></tr>
		  
  <tr><td> 　</td><td> 　</td><td> 　</td></tr>		  
  <tr><td> 　</td><td style="font-size:130%;"><b>需求內容:</b></td><td>  
  <textarea rows="5" cols="40" name="TextBody">
  </textarea>
  </td></tr>
  <tr><td> 　</td><td> 　</td></tr>
  <tr><td> </td><td> </td><td> </td></tr>	  
	  </table>　　
	
	  <table>
	     <tr>
			 <td width=35%> </td>
			 <td>&nbsp;<input type="submit" name="Send" value="&nbsp;送出資料&nbsp;"></td>
		 </tr>
	  </table>
</Form>


	  <table>
	     <tr>
			 <td width=35%> </td>
			 <td align="right">&nbsp;</td>
		 </tr>
	  </table>	  
	  
<table width="1200" border="0" cellspacing="1" cellpadding="1">
	<tbody>
    <tr>
		<td style="width: 1048px; border-bottom: 1px solid gray; "> </td>
	</tr>
    <tr>
      <td>&nbsp;</td>
	</tr>		
	</tbody>
</table>
	  
<div class="form">
<h4>資訊系統軟體設計領域的專業團隊。</h4>
<h5>是您公司企業製造與行政流程, 資訊化的最佳顧問, 也是事業上的最佳夥伴。</h5>

我們的軟體工程師有十幾年以上的設計經驗, 熟悉各式的軟體設計工具及各種電腦語言, 可以為您在各種領域上提供各式解決方案。
</div>
</div>
</div>
<div id="copyright">
<div id="container">
<div id="copy">
Copyright © 2021  Run-Jie.  All Right Reserve.
</div>
<div id="social">
<a href="" target="_blank"><img src="./RJC/facebook.png" alt="facebook Icon"></a>
<a href="" target="_blank"><img src="./RJC/twitter.png" alt="Twitter Icon"></a>
</div>
</div>
</div>
<div id="disclaimer" style="background-color:#184A7D;color:#DBDBDB;">
<div id="container" style="font-size:130%">
連絡方式：chayiwave@outlook.com　　　　　　Line ID：0987560860
</div>
</div>

</body></html>