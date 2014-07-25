<?php
$id =$_GET['id'];
?>

 <?php
 $connection = mysql_connect('localhost', 'root', "")
  or die("Unable to connect to $localhost: " . mysql_errno());

 $selected_db = mysql_select_db('banna_log')
 or die("Unable to select database: 'banna_log': " . mysql_errno());

$result = mysql_query("SELECT id, title, author, body FROM articles WHERE id = " . $id);
while ($row = mysql_fetch_array($result)){
      ?>
     <h2><a href="http://33.33.33.40/day5/article.php?id=ID"><?php print $row['title'];?></a></h2>
       <p><em>By:<?php print $row['author'];?></em></p>
      <p><?php print $row['body'];?><p>
 <?php
  
}

mysql_close($connection);
?>
