<?php
   $name = $_FILES['file']['name'];
   $size = $_FILES['file']['size'];
   $type = $_FILES['file']['type'];

   $tmp_name = $_FILES['file']['tmp_name'];

   //die();

   if(isset($name))
   {
       if(!empty($name))
       {
           //echo 'ok';
           $location = '/upload/';

           if(move_uploaded_file($tmp_name,$locatio.$name))
           {
               echo 'file uploaded to upload folders.';

           }
           else {
               echo 'error while uploading file.';
           }

       }
       else {
           echo 'please choose the file to upload';
       }
   }
   
?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
 <input type="file" name="file"><br><br>
 <input type="submit" value="upload">
</form>