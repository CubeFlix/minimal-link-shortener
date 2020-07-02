<!DOCTYPE html>

<html>
  <head>
    <title>URL Shortener</title>
  </head>

  <body>
    <?php 

$id = $_GET['id'];

$jsonData = file_get_contents("links.json");
$json_a = json_decode($jsonData, true);

if (array_key_exists($id, $json_a)){
    $link = $json_a[$id];

    header("Location: http://$link"); 
}
else {
    echo "Link dosen't exist!";
}




?>
  </body>
</html>

