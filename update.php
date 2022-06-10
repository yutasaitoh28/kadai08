<?php

include 'connect.php';
$id = $_GET['updateid'];
$sql = "select * from `crud` where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";

    $result = mysqli_query($con,$sql);

    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con)); 
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>CRUD課題</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="form-group">
                <label>名前</label>
                <input type="text" class="form-control" placeholder="名前を入力してください" name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label>Eメール</label>
                <input type="email" class="form-control" placeholder="Eメールを入力してください" name="email" autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <label>電話番号</label>
                <input type="text" class="form-control" placeholder="電話番号を入力してください" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
            </div>
            <div class="form-group">
                <label>パスワード</label>
                <input type="text" class="form-control" placeholder="パスワードを入力してください" name="password" autocomplete="off" value=<?php echo $password;?>>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">更新</button>
        </form>
    </div>

</body>

</html>