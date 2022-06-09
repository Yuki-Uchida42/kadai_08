
<?php




require_once('funcs.php');
$id=$_GET['id'];
$pdo=db_conn();



//２．データ取得SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id=:id');
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();


$view="";
if ($status==false) {
    sql_error($stmt);
}else{
    $result=$stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>詳細画面</legend>
                <label>名前：<input type="text" name="name" value="<?= $result['name'] ?>"></label><br>
                <label>性別：<input type="text" name="sex" value="<?= $result['sex'] ?>"></label><br>
                <label>生年月日：<input type="text" name="birth" value="<?= $result['birth'] ?>"></label><br>
                <label>Email：<input type="text" name="email" value="<?= $result['email'] ?>"></label><br>

                <input type="hidden" name="id" value="<?= $result['id'] ?>"><br>

                <input type="submit" value="更新">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>

