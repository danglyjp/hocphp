<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học php</title>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
    <?php
    $x= 5;
    $y=6; 

    if($x == 5 && $y == '3'){
        echo 'dung';
    }else{
        echo 'sai';
    }
echo "<hr>";
switch ($x) {
    case 5:
        echo '5 th1';
        break;
    case 6:
        echo '6 th2';
        break;
    
    default:
    echo 'defaul';
        break;
}


$loops=1;
do {
    echo "<br> so thu tu la $loops";
    $loops++;
} while ($loops <= 5);


for ($num=0; $num <= 5 ; $num++) { 
    echo "<br>for so thu tu la $num";
}
echo "<hr>";
$arrProducts = ['product1','product2','product3','product4'];
print_r ($arrProducts);
// print ($arrProducts);
echo '<pre>';
var_dump($arrProducts);
echo "<hr>";

$arrProductsMuti =[
[
    'id' => '1',
    'product' => 'BMV',
    'price' => '100'

],
[
    'id' => '2',
    'product' =>'HONDA',
    'price' => '200'
],
[
    'id' => '3',
    'product' =>'BENLY',
    'price' => '300'
    ]
];
?>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
  </tr>
 <!-- <?php foreach($arrProductsMuti as $item){ ?>
  <tr>
    <td><?= $item['id']; ?></td>
    <td><?= $item['product']; ?></td>
    <td><?= $item['price']; ?></td>
  </tr>
<?php } ?> -->

<!-- <?php foreach($arrProductsMuti as $item): ?>
  <tr>
    <td><?= $item['id']; ?></td>
    <td><?= $item['product']; ?></td>
    <td><?= $item['price']; ?></td>
  </tr>
<?php endforeach; ?> -->

<?php foreach($arrProductsMuti as $item): ?>
    <?php if($item['price'] >= 200):?>
  <tr>
    <td><?= $item['id']; ?></td>
    <td><?= $item['product']; ?></td>
    <td><?= $item['price']; ?></td>
  </tr>
  <?php endif; ?>
  <?php endforeach; ?>

</table>
</body>
</html>