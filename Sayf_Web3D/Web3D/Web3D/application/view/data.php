<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data - Web 3D Application</title>
</head>
<body>
<?php

for ($i = 0; $i < count ($data); $i++) {
    echo "<p> " . $data[$i]['x3dModelTitle'] . "</p>";
    echo "<p> " . $data[$i]['x3dCreationMethod'] . "</p>";
    echo "<p> " . $data[$i]['modelTitle'] . "</p>";
    echo "<p> " . $data[$i]['modelSubtitle'] . "</p>";
    echo "<p> " . $data[$i]['modelDescription'] . "</p>";
}

?>
</body>
</html>