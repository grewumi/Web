<!DOCTYPE html>
<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
		<meta http-equiv="Content-Language" content="zh-cn" />
    	<script type="text/javascript" src="http://localhost/ideadiscover/js/jquery-1.8.3.js"></script>
		<link rel="stylesheet" type="text/css" href="http://localhost/ideadiscover/css/coder.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/ideadiscover/css/apple_list.css">
		<script type="text/javascript" src="http://localhost/ideadiscover/js/coder.js"></script>
		<title>主页</title>
	</head>
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
	require "cpp_coder/linker.php";
?>
</div>

<!--内容区-->
<div style="width:610px; float:left;">

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