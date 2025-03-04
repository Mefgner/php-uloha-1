<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<ul class="nav">
    <?php
    $file = file_get_contents("parts/header-parts/navigation-btns.json");
    $json = json_decode($file, true);
    foreach ($json as $item) {
        echo "<li><a href=\"$item[path]\">$item[name]</a></li>";
    }
    ?>
	<div></div>
</ul>
</body>
</html>
