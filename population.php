<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <title>Articles</title>
  </head>
  <body>
    <h1>Blog Posts</h1>

<?php
$connection = mysql_connect('localhost', 'root', 'test54321')
  or die("Unable to connect to $localhost: " . mysql_errno());

$selected_db = mysql_select_db('banna_log')
  or die("Unable to select database: 'banna_log': " . mysql_errno());

$result = mysql_query("SELECT id, title, author, body FROM articles ORDER BY id desc");

while ($row = mysql_fetch_array($result)){
 ?>
  <div id="header">
       <h2><a href="http://33.33.33.40/day5/article.php?id=<?php print $row['id'];?>"><?php print $row['title'];?></a></h2>
     <div id= "body">
       <p><em>By:<?php print $row['author'];?></em></p>
       <p><?php print $row['body'];?></p>
    </div>
  </div>  
<?php

}

mysql_close($connection);
?>

</html>
