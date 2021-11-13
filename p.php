<html>
<body>
<?php
$x=87;
$y=458.89;
//$z=(integer)$y;
//echo $z
$res=$x>$y?"<h3>x":"<h3>y";
echo $res,"<br>";
$a=array(1,2,'s',"hello");
//$z=array("uni-1"=>"seu","uni-2"=>"nsu");
//foreach ($z as $val){
//    echo $val->uni-2,"<br>";
//}

$b=array(2,56,6,4,11);
rsort($b);
$sum=array_sum($b);
echo $sum,"<br>";
$count =count($b);
echo $count,"<br>";
foreach ($b as $c){
    echo $c,"<br>";
}

?>

</body>
</html>