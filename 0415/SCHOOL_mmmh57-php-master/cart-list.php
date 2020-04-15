<?php $title = '購物車'; ?>
<?php

require __DIR__ . '/__connect_db.php';

$pKeys = array_keys($_SESSION['cart']);

$rows = []; // 預設值
$data_ar = []; // dict

if (!empty($pKeys)) {
    $sql = sprintf("SELECT * FROM products WHERE sid IN(%s)", implode(',', $pKeys));
    // echo $sql;
    // exit;
    $rows = $pdo->query($sql)->fetchAll();

    foreach ($rows as $r) {
        $r['quantity'] = $_SESSION['cart'][$r['sid']];
        $data_ar[$r['sid']] = $r;
    }
}

?>
<?php include __DIR__ . '/parts/_head.php'; ?>
<?php include __DIR__ . '/parts/_navbar.php'; ?>

<div class="container">
    <div class="row">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">DELET</th>
                    <th scope="col">封面</th>
                    <th scope="col">書名</th>
                    <th scope="col">價格</th>
                    <th scope="col">數量</th>
                    <th scope="col">小計</th>
                </tr>
            </thead>
            <tbody>
                
            <?php foreach($_SESSION['cart'] as $sid=>$qty): 
                $item = $data_ar[$sid];
                ?>
            <tr data-sid="<?= $sid ?>">
                <td><i class="fas fa-trash-alt"></i></td>
                <td><img src="imgs/small/<?= $item['book_id'] ?>.jpg" alt=""></td>
                <td><?= $item['bookname'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['quantity'] ?></td>
                <td><?= $item['price']*$item['quantity'] ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>
<?php include __DIR__ . '/parts/_script.php'; ?>
<script>

</script>
<?php include __DIR__ . '/parts/_foot.php'; ?>