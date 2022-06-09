



<?php




require_once('funcs.php');
$id=$_GET['id'];
$pdo=db_conn();



//２．データ取得SQL作成
$stmt = $pdo->prepare('DELETE FROM gs_bm_table WHERE id = :id');
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();


$view="";
if ($status==false) {
    sql_error($stmt);
}else{
    redirect('select.php');
}

?>