<?php

require('config/dbconnect.php');

//$_GET['id']の存在チェック
if( isset($_GET['id']) ) {

  $stmt = $db->prepare('SELECT * FROM pizza WHERE id = ?');
  $stmt->bindValue(1, $_GET['id']);
  $result = $stmt->execute();

  if($result) {
    $pizza = $stmt->fetch(); //１件のみ抽出

  }

} else {
  echo 'idの値がありません';
}

?>
<?php require('template/header.php'); ?>

<div class="container">
  <h2 class="text-center my-5 display-4">Pizza Detail</h2>

  <?php if( isset($pizza) && !empty($pizza) ): ?>
    <h3 class="text-center mb-5"><?= $pizza['pizzaname']; ?></h3>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <p>トッピング: <?= $pizza['topping']; ?></p>
            <p>シェフの名前: <?= $pizza['chefname']; ?></p>
            <p class="text-end">登録日: <?= $pizza['created_at']; ?></p>
          </div>
        </div>
      </div>
    </div>
  <?php else: ?>
    <p>ピザが選択されていません。</p>
  <?php endif;  ?>
</div>

<?php require('template/footer.php'); ?>