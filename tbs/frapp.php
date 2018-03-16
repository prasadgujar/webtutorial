<?php
  //echo 'yoyoy';
  if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith']))
  {
      $offset  = 0;
       $text = $_POST['text'];
       $search = $_POST['searchfor'];
       $replace = $_POST['replacewith'];
       $slen = strlen($search);
     //echo 'yoyoyyo';
      if(!empty($text)&&!empty($search)&&!empty($replace))
      {
          //echo 'ok';
          while($spos = strpos($text,$search,$offset))
          {
               $offset =  $spos + $slen.'<br>';
              $text = substr_replace($text,$replace,$spos,$slen);


          }
          echo $text;

      }
      else {
          echo 'please fill the data.';
      }
  }
?>

<form action="frapp.php" method="POST">
  <textarea name="text" rows="6" cols="30"></textarea><br><br>
  Search For:<br>
  <input type="text" name="searchfor"><br><br>
  Replace with:<br>
  <input type="text" name="replacewith"><br><br>
  <input type="submit" value="Find And Replace"> 
</form>