<?php $title = 'Index'; ?>

<?php include __DIR__ . '/parts/_head.php' ?>
<?php include __DIR__ . '/parts/_navbar.php' ?>

<div class="container">
    <pre>
  <?php
    print_r($_POST);
    //print_r($_REQUEST);<----比較少用，會同時收到POST和GET
    ?>
  </pre>

    <form method="post" action="">
        <!-- 如果設定了POST，又設定了ACTION ACTION的頁面可以收到GET(詳細差一要再查一下QAQ) -->
        <div class="form-group">
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
            <label class="form-check-label" for="Check1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>


<?php include __DIR__ . '/parts/_script.php' ?>
<?php include __DIR__ . '/parts/_foot.php' ?>