<?php

include"implement.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $lang['title']?></title>
 <style type="text/css">
  *{margin: 0;padding: 0}
body{font-family: sans-serif;}
.menubar ul{
  margin: 0;
  padding: 0;
  list-style: none;
  width: 100%;
  height: 40px;
  background: gray;
}
.menubar ul li{
  float: left;
  width: 130px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  background: gray;

}
#media{
  float: right;
}
.menubar ul li a{
  text-decoration: none;
  color:red;
  display: block;
}
.menubar ul li a:hover{
background: blue;
}
.menubar ul li ul{
display: none;
}
.menubar ul li:hover ul{
display: block;
position: relative;
}
h4{margin-top: 88px;}


 </style>
 
</head>
<body>
<div class="menubar">
  <ul>
  	<li><a href="#"><?php echo $lang['home']?></a></li>
    <li><a href="#"><?php echo $lang['travel']?></a></li>
    <li id="menuAttr"><a href="#"><?php echo $lang['service']?></a></li>
    <li id="menuAttr"><a href="#"><?php echo $lang['about']?></a></li>
    <li id="menuAttr"><a href="#"><?php echo $lang['help']?></a></li>
     <li id="menuAttr"><a href="index.php"><?php echo $lang['language']?></a>
       <ul>
         <li><a href="index.php?lang=<?php echo"en";?>">English</a></li>
         <li><a href="index.php?lang=<?php echo "bang"?>">বাংলা</a></li>
       </ul>
     </li>
  
 </ul>
</div>
<section class="section">
<center>
  <h4><?php echo $lang['dear']?></h4>
    <p>
        <?php echo $lang['describe']?>
    </p>
</center>  
</section>
</body>
</html>