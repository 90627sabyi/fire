<html>
  <head>
    <title> Indian Legendar </title>
<head>
  <body>
    <h1> Welcome to Indian Legendar </h1>
    <h1> We are actively recruiting now. Drop in if you are free.Drop in a comment for recruitment or to leave any message. To access posted comments you need to post a new comment everytime </h1>
<video controls>
    <source  src="./IIL.mp4">
</video>
    <h1> Happy Holidays! </h1>
<form action="" method="post">
  <label> Username Ingame: <br><input type="text" name="name"><br></label>
  <label> Message: <br><textarea cols="70" rows="15" name="mes"></textarea></label><br>
  <input type="submit" name="post" value="Post">
 </form>
  </body>
  </html>
<?php 
$name = $_POST["name"];
$text = $_POST["mes"];
$post = $_POST["post"};
if($post) {
$write = fopen("./com.txt", "a+");
fwrite=($write, "<u><b> $name</b></u><br>$text<br></br>");
fclose($write);
$read = fopen("./com.txt", "r+t");
echo "All comments:<br>";
while(!feof($read)){
echo fread($read, 1024);
}
fclose($read);  
?>
