<!doctype html>
<html>

  <head>
    <title>File upload example</title>
  </head>
  <body>
    <form action="upload.php" method = "POST" enctype="multipart/form-data">
      Select a file to upload
      <br>
      <input type="file" name="file">

      <button type="submit" name="submit">Upload</button>
    </form>
  </body>

<html>