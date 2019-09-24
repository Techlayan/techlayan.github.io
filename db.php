<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("student", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['item_name'];
$email = $_POST['item_email'];
$subject = $_POST['item_subject'];
$message = $_POST['item_message'];
if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysql_query("INSERT INTO `student`(item_name, item_email, item_subject, item_message) values ('$name', '$email', '$subject', '$message')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>