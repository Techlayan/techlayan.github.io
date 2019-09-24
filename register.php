<?php
include ("database connection/connection.php");

if(isset($_POST['submit']))
{
	$item_name = $_POST['item_name'];
	$item_email = $_POST['item_email'];
	$item_subject = $_POST['item_subject'];

	$item_message = $_POST['item_message'];

if( !empty($item_name) || !empty($item_email) || !empty($item_subject) ||   !empty($item_message))
{

        $INSERT = "INSERT Into `user` (`item_name`,`item_email`,`item_subject`,`item_message`) values('$item_name','$item_email','$item_subject','$item_message')";
       
        if($conn->query($INSERT))
		{
			echo '<script>window.location = "index.html"</script>';   
		}
		else
		{
    		echo '<script>window.location = "index.html"</script>';   
  		}
				if(isset($_GET["id"]))
				{
					echo "<div class='error'>{$_GET["id"]}</div>";
				}
			}
		}	
			?>
		
	