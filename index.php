<link rel="stylesheet" href="style.css" type="text/css">


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Performance Informance System</title>
</head>

<body>
<div class="main">

<div>
    <?php

        include_once("header.php");
    ?>
</div>

<div>
<div class="mainbody">
	<div class="innermainbody">
        <?php
        if($_GET['page']!='')
            {
            include_once($_GET['page'].".php");
            }
            else
                {
    		include_once("loginpage.php");
                }
        ?>
    </div>
<div>
</div>

<div>
    <?php
        include_once("footer.php");
    ?>
</div>

</div>
</div>
</body>
</html>