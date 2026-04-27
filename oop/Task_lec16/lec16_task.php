<?php 

 class  product 
 {
private $name;

 private $price;
 private $image;
 public $description;
 public $tax;

 function setInfo($name,$price,$description,$tax)
 {
   $this->name = $name;
   $this->price = $price;
   $this->description = $description;
   $this->tax = $tax;

 }
function getInfoArray()
{
    return [
        "name" => $this->name,
        "price" => $this->price,
        "description" => $this->description,
        "tax" => $this->tax
    ];
}

 function priceAfterDiscount($number)
 {
  $new_price = $this->price * ($number/100);

  return $this->price - $new_price;;
 }

function getFinalPrice()
{
  
  $tax_value = $this->price *($this->tax / 100);
  return $this->price + $tax_value;

} 



 }


$p = new product();
$p->setInfo("phone",15000,"samsongA56",10);

$data = $p->getInfoArray();

$p2 = new product();
$p2->setInfo("phone2",17000,"samsongA57",15);

$data2 = $p2->getInfoArray();
 ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['name'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['price'] ?> EGP</h6>

            <p class="card-text"><?= $data['description'] ?></p>

            <p>Tax: <?= $data['tax'] ?>%</p>
            <p>After Discount: <?= $p->priceAfterDiscount(50) ?> EGP</p>
            <p>Final Price: <?= $p->getFinalPrice() ?> EGP</p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data2['name'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data2['price'] ?> EGP</h6>

            <p class="card-text"><?= $data2['description'] ?></p>

            <p>Tax: <?= $data2['tax'] ?>%</p>
            <p>After Discount: <?= $p2->priceAfterDiscount(30) ?> EGP</p>
            <p>Final Price: <?= $p2->getFinalPrice() ?> EGP</p>
        </div>
    </div>
</div>

