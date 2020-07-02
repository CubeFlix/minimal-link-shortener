<!DOCTYPE html>

<html>
  <head>
    <title>URL Shortener</title>
  </head>

  <body>
    <?php 

$id = $_POST['id'];

$jsonData = file_get_contents("link/links.json");
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

