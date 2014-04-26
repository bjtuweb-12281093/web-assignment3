<html>
<head>

<style type="text/css">
#SignUp{
width:80px;height:25px;
}
</style>


<title>用户注册</title>
</head>
<body>
<form name="form1" method="post" action="add.php">
<center><h1>新用户注册</h1><br><center>
<center><table width="400" border="0">
<tr>
<td align="center">用户名:</td>
<td><input name="UserName" type="text" id="UserName" size="15"></input></td>
</tr>
<tr>
<td align="center">密  码:</td>
<td><input name="Password" type="password" id="Password" size="15"></input></td>
</tr>
<tr>
<td align="center">确认密码:</td>
<td><input name="ConfirmPassword" type="password" id="ConfirmPassword" size="15"></input></td>
</tr>
<tr>
<td align="center">Email:</td>
<td><input name="Email" type="text" id="Email" size="20"></input></td>
</tr>
</table><center>
<td><center><input name="SignUp" type="submit" id="SignUp" value="注册" size = '65'></input><br><center></td>
已有账号，<a href="index.php">登录</a>。
</form>
</body>
</html>