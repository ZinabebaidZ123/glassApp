<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(!$data == []){
?>
    <h1><?php echo $data['product_name'];?></h1>
    <img src="images/<?php echo $data['Photo'];?>" alt="" srcset="">
<?php
}
?>
</body>
</html>