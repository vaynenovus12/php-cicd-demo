<?php
$version = file_get_contents("version.txt");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CI/CD Demo</title>
</head>

<body>

<h1>PHP CI/CD Demo Application</h1>

<p>This page is deployed through Jenkins pipeline.</p>

<p>Application Version:
<strong><?php echo $version; ?></strong>
</p>

</body>
</html>

