<!DOCTYPE html>
<html>
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
		<meta http-equiv="Content-Language" content="zh-cn" />
    	<script type="text/javascript" src="http://localhost/ideadiscover/js/jquery-1.8.3.js"></script>
		<link rel="stylesheet" type="text/css" href="http://localhost/ideadiscover/css/coder.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/ideadiscover/css/apple_list.css">
		<script type="text/javascript" src="http://localhost/ideadiscover/js/coder.js"></script>
		<title>��ְѵ��Ӫ������</title>
	</head>
<?php
	//�������ݿ�
	$con = mysql_connect("localhost","root","");
	if (!$con){
  		die('Could not connect: ' . mysql_error());
  	}
	//ѡ�����ݿ�
	mysql_select_db("web", $con);
	//���ò�ѯ����
	mysql_query("set names 'gbk'");
	
	//�洢��ѯ���(�洢����Ϊ����)
	//�������ݴ洢��
	$result = mysql_query("SELECT `coder_content` FROM `coder_infomation` WHERE `day` = 4 LIMIT 0, 30 ");
	//�������������洢��
	$result_title = mysql_query("SELECT `dis_content` FROM `coder_infomation` WHERE `day` = 4 LIMIT 0, 30 ");
	
	$index=1;
?>
<body id="homefirst">



<!--���-->
<div id="wrapper">

<!--HEAD-->
<div id="header_index">
	<h1 onMouseOver="ddou()">
    	<a title="Seul's database" href="http://localhost/ideadiscover/">
        	looking for youself
        </a>
    </h1>
</div>

<!--������ҳ�������-->
<div>	
<?php
	//�����˵�
	require "linker.php";
?>
</div>

<!--������-->
<div style="width:610px; float:left;">

<!-- ��������-->
<h2>
<?php
	//��������
	echo $index++;echo "  ";	
	//ȡ���洢����е�����mysql_fetch_array����ÿ�η��ش洢����е���һ��
	$row = mysql_fetch_array($result_title);
	//��ӡ�洢�������Ӧ�ֶε�ֵ
  	echo $row['dis_content'];	
?>
</h2>
<textarea class="coder">
<?php	
	$row = mysql_fetch_array($result);
  	echo $row['coder_content'];	
?>
</textarea>

<!-- ��������-->
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

<!-- ��������-->
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

<!-- ��������-->
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

<!-- ��������-->
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
	
<!-- ��������-->
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

<!-- ��������-->
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

<!-- ��������-->
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

<!-- ��������-->
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

<!-- ��������-->
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

<!-- ��������-->
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

<!-- ��������-->
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

<!-- ��������-->
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
	//�ر�����
	mysql_close($con);
?>
</textarea>

<!--�����
<div  contenteditable="true" class="test_box" id="content">
</div>
-->

</div>
<!--������END-->	

<div id="sider">
<h3 style="margin-left:80px;">dou</h3>
</div>

<!--����-->
<div id="footer">
</div>

</div>
<!--���END-->


</body>
</html>