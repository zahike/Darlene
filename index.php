<?php
session_start(); 
mysql_connect("localhost","root","");
mysql_select_db("test");
/*mysql_connect("sql303.0lx.net","0lx_12863625","Zak244893");
mysql_select_db("0lx_12863625_Tamar");*/
$query = "SELECT * FROM Darlene";
$result = mysql_query($query);
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
		<p>
 <center><h2>Welcome to My Studio</h2></center><br/>
For the past twelve years I have had the pleasure of quilt making and teaching in my own studio.  What it lacks in size it makes up for in warmth and creativity. The walls are strewn with quilts of all sizes, and the shelves are filled with books and equipment related to quilting and many other textile arts.  Students are encouraged to borrow books to personally expand their horizons.<br/><br/>
I can not call myself a traditional quilter anymore than I can call myself a contemporary quilter.  When creativity strikes it takes any form that will bend itself to my imagination.  I piece, appliqué, fold, paint, ink, and embroider.  When I have the image that speaks to me, I stop.  If I imagine a bed quilt, I make a bed quilt.  If I want a contemporary image for the wall that is what happens. Most of my quilts are for family and friends; some are for exhibits.  Most quilts do double duty, first to an exhibit, and then to a family member.<br/><br/>
My computer is quickly becoming a large part of the quilting experience. It is now equipped with "Paint Net" as I have begun to partner with my computer to add imaging possibilities to my appliqué quilts. In general, the computer provides my students and me with limitless pictures to use in our quilts. There are wonderful quilt sites for information, for virtual travel to quilt shows around the world, and for online classes.  My students and I take advantage of as much as we can.<br/><br/>
Join my students and me, both virtually on the computer and in person.  There is a new world waiting for you through quilting. 		<br/><br/>
		</p><br/>

			<ul style="list-style:none;"> 
<?php
     while ($index_pic = mysql_fetch_array($result)){
		echo"<li style=\"float:left;border:0px solid #000;\">";
		echo"<a href = \"singl_pic.php?num=",$index_pic['ID'],"\"><img src = \"pics/Darlene/",$index_pic['pic_name'],"\" height=\"90px\" width=\"128px\"style=\"border:0;\"></a>";
		echo"</li>";			
     };
?>
			</ul>
		</div> <!-- box -->
	</div>    <!-- wrapper -->
 </body>
</html>
