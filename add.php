<?php

// データの送信チェック
if( isset($_POST['submit']) ) {
  echo 'フォーム送信しました';
}

?>
<?php require('template/header.php'); ?>

<div class="container">

  <h1 class="text-center my-5 h4">ピザの追加</h1>

  <div class="row justify-content-center">
    <div class="col-md-8 bg-white p-4 rounded">
      
      <pre>
      <?php
      var_dump($_POST);
      ?>
      </pre>

      <form action="add.php" method="post">
        <div class="mb-3">
          <label for="pizzaname" class="form-label">ピザの名前</label>
          <input type="text" class="form-control" id="pizzaname" name="pizzaname">
        </div>
        <div class="mb-3">
          <label for="chefname" class="form-label">シェフの名前</label>
          <input type="text" class="form-control" id="chefname" name="chefname">
        </div>
        <div class="mb-3">
          <label for="topping" class="form-label">トッピング</label>
          <input type="text" class="form-control" id="topping" name="topping">
        </div>
        <div class="text-center">
          <button class="btn btn-primary" name="submit" value="submit">登録する</button>
        </div>
      </form>
    </div>
  </div>

</div>

<?php require('template/footer.php'); ?>