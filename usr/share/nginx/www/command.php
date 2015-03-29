<?php
//===============================================================
// 共通処理
//===============================================================
#require_once("../common/common.php");
error_log("us_log:"."script_entry ".__FILE__." updated at ".date( "Y/m/d H:i", getlastmod())); // ファイルヘッダログ

//===============================================================
// 定数
//===============================================================
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
	<title>コマンド実行</title>
	<meta name="viewport" content="width=device-width, initital-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<!-- <script src="custom-scripting.js"></script> -->
	<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
</head>

<body>

<div data-role="page" id="new"> 
	  
<div data-role="header" data-position="fixed">
    <h1>コマンド実行</h1>
</div>
<pre>
	<?php
	  if (isset($_POST['command'])){
	  	$command=$_POST['command'];
	  	echo `$command`;
	  }
	?>
</pre>

  <div data-role="content" data-theme="c" class="no-cache">
  	<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post" data-ajax="false">
		<label for="command">コマンド:</label>
    <input type="text" name="command" id="command" value=""/>
		<!-- <input type="textbox" name="command" id="command" /> -->
		<input type="submit" value="実行" />
	</form>

  </div>

<div data-role="footer" data-position="fixed">
    <!-- <h4>Copyright© UEDA P.E. jp Consulting Office 2014</h4> -->
    <h4>© UEDA Ofice 2015</h4>
</div>
</div> <!-- page -->


</body>
</html>
