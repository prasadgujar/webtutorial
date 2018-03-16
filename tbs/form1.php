<?php
$find = array('alex','billy','dale');
$replace = array ('a**x','b***y','d**e');
if(isset($_POST['user_name'])&&!empty($_POST['user_name']))
{
     $user_name = $_POST['user_name'];
     $user_name_lc = strtolower($user_name);
     $user_name_new  = str_ireplace($find,$replace,$user_name);
    
     echo $user_name_new;
}
?>

<form action='form1.php' method='POST'>
 <textarea name = "user_name" rows="6" cols="30"><?php echo $user_name?></textarea><br><br>
 <input type="submit" value="Submit">
</form>