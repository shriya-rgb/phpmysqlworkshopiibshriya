  
<!DOCTYPE html>
<html>
<body>

<form action="q3_file_upload.php" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value="Upload" name="submit">
</form>

</body>
</html>

<?php
if(isset($_POST["submit"])){
$target_dir = "day4/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
else{
    echo "<br>File uploaded successfully!!<br>";
    echo "File name: ".basename($target_file,".php")."<br>";
    echo "File size: ".$_FILES["fileToUpload"]['size']." bytes";
}
}
?>