<h1>Welcome to Population Data Online</h1>
<?php
// Create connection
// Can save arguments for mysql_connect() function as variables,
// or input "manually" into the function.
// e.g., mysql_connect('website.com', 'Jones', 'un1c0rn')
$connection = mysql_connect('localhost', 'root', "")
  or die("Unable to connect to $localhost: " . mysql_errno());

// Select database
$selected_db = mysql_select_db('day5')
  or die("Unable to select database: 'day5': " . mysql_errno());

// SQL Query
$result = mysql_query("SELECT id, title, author, body FROM articles");

// Fetch the data from the result
while ($row = mysql_fetch_array($result)){
  echo "ID" . $row['id'] . "<br>" ."Title"  . $row['title']  . "<br>" . "Author" .$row['author'] . "<br>". "Body" . $row['body'];
}


// Close connection
mysql_close($connection);
?>


