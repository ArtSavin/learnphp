<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Новая страница"; ?></title>
</head>
<?php
//Массивы
$arr = [1,4,5,6,7];
$one = 1;
$two = 2;
$three = 3;
[$one, $two, $three] = $arr2;
echo $arr[1];
echo '<pre>';
print_r($arr);
echo '</pre>';
?>
<?php
//Массивы
$arr2 = [1,4, 4, 20, 5,6,7];

echo '<pre>';
foreach ($arr2 as $key){
    echo $key . "<br>";
}
echo '</pre>';
echo '<pre>';
echo count($arr2);
echo '</pre>';
echo '<pre>';
print_r(array_count_values($arr2));
echo '</pre>';
echo '<pre>';
$arr3 = [1,4,5,6,7];
function upto2($n){
    return $n+2;
}
print_r(array_map('upto2', $arr3));
echo '</pre>';
?>
<body>

</body>
</html>