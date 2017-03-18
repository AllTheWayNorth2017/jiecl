<?php

if($frm_action == 'check') 
{ 
$gradeName = $_GET['gradename']; 
$gradeAdminObj = new Services_GradeAdmin($db); 
//根据$gradeName去判断是否再数据库里存在填入的用户名字，如果存在返回1，如果 
不存在返回0，这个返回值是传到grade.js里。 
$gradeCheck = $gradeAdminObj->getGradeByName($gradeName); 
if(is_numeric($gradeCheck)){ 
echo '1'; 
}else{ 
echo '0'; 
} 
exit(); 
} 



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>hhh</title>
	<script type="text/javascript">
		/** 
		* 验证用户名是否重复的js 
		* 
		* @name grade.js 
		* @author jason<msn:x334@eyou.com> 
		* @use 验证用户名是否存在 
		* @todo 
		*/ 
		$(document).ready(function(){ 
		checkConfirm(); 
		}); 
		//验证用户名是否存在 
		function checkConfirm(){ 
		$("#NAME").blur(function(){ 
		var gradename = $(this).val(); 
		var changeUrl = "GradeAdmin.php?action=check&gradename="+gradename; 
		$.get(changeUrl,function(str){ 
		if(str == '1'){ 
		$("#gradeInfo").html("<font color=\"red\">您输入的用户名存在！请重新输入！</font>"); 
		}else{ 
		$("#gradeInfo").html(""); 
		} 
		}) 
		return false; 
		}) 
		} 


	</script>
</head>
<body>
	

	<input type="text" size="6" name="NAME" id="NAME"/><font color="red">*</font> 
	<span id="gradeInfo"></span> 

	


</body>
</html>