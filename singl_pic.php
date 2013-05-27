<?php
session_start(); 
mysql_connect("localhost","root","");
mysql_select_db("test");
/*mysql_connect("sql303.0lx.net","0lx_12863625","Zak244893");
mysql_select_db("0lx_12863625_Tamar");*/
$pic_num = $_GET['num'];
$result = mysql_query("SELECT * FROM Tamar WHERE ID=$pic_num");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> Darlene Quilt Teacher</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="content-language" content="he" />
  <meta name="generator" content="editplus" />
  <meta name="author" content="" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="style.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
    <div class="wrapper">
	    <div class="logo"><a href="index.php"></a></div>
		<div class="top_menu">
		    <ul>
			   <li class="title"><a href = "index.php">Home page</a>
			   </li>
			   <li class="title"><a href = "classes.php">Classes</a>
			   </li>
			   <li class="title"><a href = "students.php">Students</a>
			   </li>
			   <li class="title"><a href = "#">Special Projects</a>
			   </li>
			   <li class="title"><a href = "#">Demonstrations</a>
			   </li>
			   <li class="title"><a href = "contact_us.php">Contact us</a>
			   </li>
			</ul>
		</div>   <!-- Top Menue -->
		<div style="clear:both"></div>
		<div class="box">
		<div class="side_menu">
		    <ul>
			   <li class="title"><a href = "pic_index.php">Tamar</a>
			   </li>
			   <li class="title"><a href = "pic_index.php">Roni</a>
			   </li>
			   <li class="title"><a href = "pic_index.php">Lea</a>
			   </li>
			   <li class="title"><a href = "pic_index.php">Tamy</a>
			   </li>
			   <li class="title"><a href = "pic_index.php">Hela</a>
			   </li>
			   <li class="title"><a href = "pic_index.php">Gila</a>
			   </li>
			</ul>
		</div>   <!-- Side Menue -->
		<div class="pic_box">
<?php
	 $main_pic = mysql_fetch_array($result);
		echo"<img src = \"pics/",$main_pic['pic_name'],"\">";	
		echo $main_pic['description'];

?>
       </div><!-- pic_box -->
	   <a href = "pic_index.php"> back to picture index </a>
		</div><!-- box -->
	</div>  <!--   wrapper -->
 </body>
</html>
