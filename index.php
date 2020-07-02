<!DOCTYPE html>

<html>
  <head>
    <title>URL Shortener</title>
  </head>

  <body>
    <h1>URL Shortener</h1>
    Visit a link by entering a link here:
    <form action="/visit.php" method="post">
    ID: <input type="text" name="id">
    <input type="submit">
</form>
<br>

    Or, go to <a href=/link?id=>/link?id=</a> with a valid id to visit a link.

<br>
<br>
    To make a new link, enter in the link here:
    <form action="/link/create.php" method="post">
    Link: <input type="text" name="link">
    ID: <input type="text" name="id">
    <input type="submit">

    </form>
    
  </body>
</html>

