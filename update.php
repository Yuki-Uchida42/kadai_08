<?php


require_once('funcs.php');



//1. POSTデータ取得
$name=$_POST['name'];
$sex=$_POST['sex'];
$birth=$_POST['birth'];
$email=$_POST['email'];
$id=$_POST['id'];


//2. DB接続します

$pdo=db_conn();

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("UPDATE 
                        gs_bm_table
                    SET 
                        name=:name,
                        sex=:sex,
                        birth=:birth,
                        email=:email,
                        date=sysdate()
                    WHERE
                        id=:id;
                        ");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':birth', $birth, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  sql_error($stmt);
}else{
  //５．index.phpへリダイレクト
  redirect('index.php');
}
?>
