<title>Binit's Remote Uploader</title>
<center>

</br</p></br</p><form method="post">
<input name="url" size="50" />
<input name="submit" type="submit" />
</form>

<b>Instruction:</b>
</p>Sample values for ftp and http
</p>ftp://username:password@example.com/path/to/file.png
</p>ftp://example.com/path/to/file.png
</p>http://www.example.com/path/to/file.png
</p>
<?php

// maximum execution time in seconds
set_time_limit (24 * 60 * 60);

if (!isset($_POST['submit'])) die();

// folder to save downloaded files to. must end with slash

$url = $_POST['url'];
$newfname = basename($url);

$file = fopen ($url, "rb");
if ($file) {
  $newf = fopen ($newfname, "wb");

  if ($newf)
  while(!feof($file)) {
    fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
  }
}

if ($file) {
  fclose($file);
}

if ($newf) {
  fclose($newf);
}

?>
</center>
