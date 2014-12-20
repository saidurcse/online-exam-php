<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div id="background">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Online Exam</title>
  <style type="text/css">
<!--
#admin {
	position:absolute;
	width:249px;
	height:222px;
	z-index:1;
	left: 373px;
	top: 191px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	font-style: normal;
	font-weight: normal;
	color: #CCC;
	background: #666;
	text-decoration: none;
}
#apDiv1 {
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
  <form action="checklog.php" method="post">
  <div id="apDiv1">
    <div id="admin">
      <p>Admin</p>
      <p>Username
        <input type="text" name="id" id="id" tabindex="10" />
      </p>
      <p>Password
        <label for="pass3"></label>
        <input type="password" name="pass" id="pass" tabindex="20" />
      </p>
      <p>
        <label for="signin"></label>
        <input type="submit" name="signin" id="signin" value="SignIn" />
      </p>
      <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">HOME</a></p>
      
    </div>
  </div>
  
  </form>
  </body>
  </html>
</div>
