<?php $title = 'Index'; ?>
<!--設定頁面名稱(總網站名稱設定在_head.php)-->

<?php include __DIR__ . '/parts/_head.php' ?>
<?php include __DIR__ . '/parts/_navbar.php' ?>
<!--
  include:要不到會提示woring
  require:要不到直接停止運作error
-->

<div class="container">
  <pre>
  <?php
  print_r($_GET);
  //得到一個array(關聯式陣列)
  //要送出一定要有NAME屬性!!!!!!!!
  ?>
  </pre>

  <form method="get" action="">
    <!-- method="傳送方式" action="傳給誰，沒設定就傳給自己"-->
    <div class="form-group">
      <!-- label的功能>>FOCUSE哪個ID -->
      <label for="email">Email address</label>
      <input type="text" class="form-control" id="email" name="email">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="Check1" name="Check1">
        <!-- for的功能>>FOCUSE哪個ID -->
      <label class="form-check-label" for="Check1">Check me out</label>
      <!-- 相關選擇方式請看mmmh57-php-0406-am(https://youtu.be/N0HmwxJJ4b4?t=1536) -->
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>


<?php include __DIR__ . '/parts/_script.php' ?>
<?php include __DIR__ . '/parts/_foot.php' ?>