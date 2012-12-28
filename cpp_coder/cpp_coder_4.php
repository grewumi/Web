<!DOCTYPE html>
<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
		<meta http-equiv="Content-Language" content="zh-cn" />
    	<script type="text/javascript" src="http://localhost/ideadiscover/js/jquery-1.8.3.js"></script>
		<link rel="stylesheet" type="text/css" href="http://localhost/ideadiscover/css/coder.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/ideadiscover/css/apple_list.css">
		<script type="text/javascript" src="http://localhost/ideadiscover/js/coder.js"></script>
		<title>求职训练营第四天</title>
	</head>
<?php
	//连接数据库
	$con = mysql_connect("localhost","root","");
	if (!$con){
  		die('Could not connect: ' . mysql_error());
  	}
	//选择数据库
	mysql_select_db("web", $con);
	//设置查询语言
	mysql_query("set names 'gbk'");
	
	//存储查询结果(存储类型为数组)
	//代码内容存储集
	$result = mysql_query("SELECT `coder_content` FROM `coder_infomation` WHERE `day` = 4 LIMIT 0, 30 ");
	//代码内容描述存储集
	$result_title = mysql_query("SELECT `dis_content` FROM `coder_infomation` WHERE `day` = 4 LIMIT 0, 30 ");
	
	$index=1;
?>
<body id="homefirst">



<!--外壳-->
<div id="wrapper">

<!--HEAD-->
<div id="header_index">
	<h1 onMouseOver="ddou()">
    	<a title="Seul's database" href="http://localhost/ideadiscover/">
        	looking for youself
        </a>
    </h1>
</div>

<!--各个子页面的链接-->
<div>	
<?php
	//包含菜单
	require "linker.php";
?>
</div>

<!--内容区-->
<div style="width:610px; float:left;">

<!-- 代码内容-->
<h2>
<?php
	//内容索引
	echo $index++;echo "  ";	
	//取出存储结果中的数据mysql_fetch_array函数每次返回存储结果中的下一条
	$row = mysql_fetch_array($result_title);
	//打印存储结果中相应字段的值
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php	
	$row = mysql_fetch_array($result);
  	echo $row['coder_content'];	
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>
	
<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>	
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
?>
</textarea>

<!-- 代码内容-->
<h2>
<?php
	echo $index++;echo "  ";	
	$row = mysql_fetch_array($result_title);
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php
	$row = mysql_fetch_array($result);
	echo $row['coder_content'];
	//关闭连接
	mysql_close($con);
?>
</textarea>

<!--输入框
<div  contenteditable="true" class="test_box" id="content">
</div>
-->

</div>
<!--内容区END-->	

<div id="sider">
<h3 style="margin-left:80px;">dou</h3>
</div>

<!--清理-->
<div id="footer">
</div>

</div>
<!--外壳END-->


</body>
</html>