<?php
require('config/dbconnect.php');

$sql = 'SELECT * FROM pizza ORDER BY created_at DESC'; //自分で作成したテーブル名
$result = $db->query($sql);

if($result) {
  $pizzas = $result->fetchAll();
  // echo '<pre>';
  // print_r( $pizzas );
  // echo '</pre>';
} else {
  echo 'データが受け取れませんでした';
}

?>
<?php require('template/header.php'); ?>

<div class="container">
  <h2 class="text-center my-5 display-4">Our Special Pizzas</h2>

  <div class="row">
    <?php foreach($pizzas as $pizza): ?>
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title"><?= $pizza['pizzaname']; ?></h3>
          <p class="card-text"><?= $pizza['topping']; ?></p>
          <a href="#" class="btn btn-primary">詳細</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    
  </div>
</div>

<?php require('template/footer.php'); ?>