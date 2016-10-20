# YouWatchConvert
Convert URL


Convert URL
------------

```

<?php
include 'YouWatchConvert.php';
$convert = new YouWatchConvert;
?>
<!DOCTYPE html>

<html>
<head>
    <title>My Site</title>
</head>

<body>

  <iframe src="<?php echo $convert->URL('http://youwatch.org/embed-hswvnt4d0o3t-830x500.html'); ?>"></iframe>

</body>
</html>


```
