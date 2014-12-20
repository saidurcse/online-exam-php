<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Exam</title>
<style type="text/css">
<!--
#student {
	position:absolute;
	width:243px;
	height:221px;
	z-index:2;
	left: 374px;
	top: 187px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	font-style: normal;
	font-weight: normal;
	color: #CCC;
	background: #666;
}
#apDiv1{
	position:absolute;
	width:1010px;
	height:600px;
	z-index:1;
	background: #999;
}

-->
</style>
</head>

<body>
<!-- Student Log In Module Code Goes Here and Action is checklog1.php -->
<form action="checklog1.php" method="post">
<div id="apDiv1">

    <div id="student">
        <p>Student</p>
        <p>Username
            <label><input type="text" name="id" id="id" tabindex="30" />
			</label>
        </p>
        <p>Password
            <label><input type="password" name="pass" id="pass" tabindex="40" />
            </label>
        </p>
        <p>
        <input type="submit" name="signin2" id="signin2" value="SignIn" />
        </p>
        <p>            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">HOME</a>
		</p>
   </div>
</div>
</form>
</body>
</html>
