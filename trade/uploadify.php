<?php
if (!empty($_FILES)) {		
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $_REQUEST['folder'] . '/';
	//若无文件夹，创建该文件夹（只有一级创建）
	if(!is_dir($targetPath)){mkdir($targetPath,0777);}
	//$new_file_name = new_name( $_FILES['Filedata']['name']);
	$new_file_name = $_FILES['Filedata']['name'];
	$targetFile =  str_replace('//','/',$targetPath) . $new_file_name;
	move_uploaded_file($tempFile,iconv("UTF-8","gb2312", $targetFile));
	echo str_replace($_SERVER['DOCUMENT_ROOT'],'',$targetFile);
}

/*重命名文件*/
 function new_name($filename){
	$ext = pathinfo($filename);
	$ext = $ext['extension'];
	$name = basename($filename,$ext); 
	$name = md5($name.time()).'.'.$ext;
	return $name;
 }
 
?>