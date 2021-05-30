<?php
	$badword = $_GET["badword"];

    $paragrafo = "Lorem ipsum dolor $badword amet consectetur adipisicing elit.";

 echo strlen($paragrafo);
 echo "<br>";                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        

   echo str_replace("$badword", "***", $paragrafo)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>