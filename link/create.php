<html>

<head>

<title>Creating Link</title>

</head>

<body>

<?php 

$oldlink = $_POST["link"];
$key = $_POST["id"];

$exploded = explode("//", $oldlink);

if (count($exploded) == 1){
    $link = $exploded[0];
}
else if (count($exploded) == 2){
    $link = $exploded[1];
}


if ($link == "" or $key == ""){
echo "Link or ID must not be none!";
}
else{

$inp = file_get_contents('links.json');
$tempArray = json_decode($inp, true);

if (array_key_exists($key, $tempArray)){
	echo "Link already exists! Go to <a href=/index.php>the main page</a> to try again!";
}
else{

$tempArray[$key] = $link;
$jsonData = json_encode($tempArray);
file_put_contents('links.json', $jsonData);

echo "Link for $link sucessfully created with the link $key!<br>
";
echo "Go to <a href=/>the main page</a> or <a href=/link/?id=$key>your new link</a>!";

}
}


?>


</body>
