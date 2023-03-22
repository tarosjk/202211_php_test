<?php
require('config/dbconnect.php');

// エラーメッセージ
$errors = [
  'pizzaname' => '',
  'chefname' => '',
  'topping' => '',
];

// 入力値の再反映用
$pizzaname = $chefname = $topping = '';

// データの送信チェック
if( isset($_POST['submit']) ) {
  
  // echo 'フォーム送信しました';

  // 必須入力
  if( empty($_POST['pizzaname']) ) {
    $errors['pizzaname'] = 'ピザ名は必須入力です';
  } else {
    $pizzaname = $_POST['pizzaname'];
  }

  if( empty($_POST['chefname']) ) {
    $errors['chefname'] = 'シェフ名は必須入力です';
  } else {
    $chefname = $_POST['chefname'];
  }

  if( empty($_POST['topping']) ) {
    $errors['topping'] = 'トッピングは必須入力です';
  } else {
    $topping = $_POST['topping'];
  }

  // エラーがあったかどうかのチェック
  // $errors配列のそれぞれの値が空かどうかをチェック
  if( !array_filter($errors) ) {
    // データベースの処理
    $stmt = $db->prepare('INSERT INTO `pizza`(`pizzaname`, `chefname`, `topping`) VALUES (?,?,?)');
    $stmt->bindValue(1, $_POST['pizzaname']);
    $stmt->bindValue(2, $_POST['chefname']);
    $stmt->bindValue(3, $_POST['topping']);
    $result = $stmt->execute();

    if($result) {
      // 配列が空(false) = エラーなし
      // リダイレクト(TOPページへ)
      header('location:pizza.php');
      exit; //全ての処理ストップ
    }

    
  }

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
          <input type="text" class="form-control" id="pizzaname" name="pizzaname" value="<?= $pizzaname; ?>">
          <p class="form-text text-danger"><?= $errors['pizzaname']; ?></p>
        </div>
        <div class="mb-3">
          <label for="chefname" class="form-label">シェフの名前</label>
          <input type="text" class="form-control" id="chefname" name="chefname" value="<?= $chefname; ?>">
          <p class="form-text text-danger"><?= $errors['chefname']; ?></p>
        </div>
        <div class="mb-3">
          <label for="topping" class="form-label">トッピング</label>
          <input type="text" class="form-control" id="topping" name="topping" value="<?= $topping; ?>">
          <p class="form-text text-danger"><?= $errors['topping']; ?></p>
        </div>
        <div class="text-center">
          <button class="btn btn-primary" name="submit" value="submit">登録する</button>
        </div>
      </form>
    </div>
  </div>

</div>

<?php require('template/footer.php'); ?>