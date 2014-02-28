<header>
<?php
function UploadOne($fname)
{
$uploaddir = 'uploadedfiles/';
if (is_uploaded_file($fname['tmp_name']))
{
$filname = basename($fname['name']);
$uploadfile = $uploaddir . basename($fname['name']);
if (move_uploaded_file ($fname['tmp_name'], $uploadfile))
$res = "File " . $filname . " was successfully uploaded and stored.<br>";
else
$res = "Could not move ".$fname['tmp_name']." to ".$uploadfile."<br>";
}
else
$res = "File ".$fname['name']." failed to upload.";
return ($res);
}
?>
</header>
<body>
<?php
if ($_FILES['picture']['name'] != "")
{
$res = UploadOne($_FILES['picture']);
$filname = $_FILES['picture']['name'];
echo ($res);
}
?>