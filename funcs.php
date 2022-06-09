<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

function db_conn(){
    try {
        //Password:MAMP='root',XAMPP=''
        $pdo = new PDO('mysql:dbname=gs_kadai;charset=utf8;host=localhost','root','root');
        return $pdo;
      } catch (PDOException $e) {
        exit('DBConnectError'.$e->getMessage());
      }
}


//SQLエラー

function sql_error($stmt)
{
    $error = $stmt->errorInfo();
    exit('ErrorMessage:'.$error[2]);
}

//リダイレクト関数

function redirect($file_name)
{
    header('Location: ' . $file_name);
}

