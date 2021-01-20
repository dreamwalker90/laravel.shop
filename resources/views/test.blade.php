<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Rocker - Bootstrap4  Admin Dashboard Template</title>

        <link href="/assets/css/style.css" rel="stylesheet"/>
    </head>
<body>
<div >
<?php
  $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
	 //Insert your code here

$num1=mt_rand(-100,100);
$num2=mt_rand(-100,100);
if(in_array($num1,$array) && in_array($num2,$array)){
  echo $num1+$num2;
}
elseif($num1<0||$num2<0){
	echo -1;}
elseif ($num1>$num2){
echo 0;
}
elseif(in_array($num1,$array)&& $num2>100){
  echo $num1+100;
}else{
    echo 0;
}

?>
</div>

</body>
</html>

