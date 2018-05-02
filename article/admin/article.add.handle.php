<?php
	require_once('../connect.php');
	//把传递过来的信息入库,在入库之前对所有的信息进行校验。
	if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){
		echo "<script>alert('标题不能为空');window.location.href='article.add.php';</script>";
	}
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dataline =  time();
	$insertsql = "insert into articles(title, author, description, content, dataline) values('$title', '$author', '$description', '$content', $dataline)";
	if(mysql_query($insertsql)){
		echo "<script>alert('发布文章成功');window.location.href='article.manage.php';</script>";
	}else{
		echo "<script>alert('发布失败');window.location.href='article.manage.php';</script>";
	}
?>