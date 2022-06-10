<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>CRUD課題</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">ユーザーを追加</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">番号</th>
                    <th scope="col">名前</th>
                    <th scope="col">Eメール</th>
                    <th scope="col">電話番号</th>
                    <th scope="col">パスワード</th>
                    <th scope="col">編集</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "select * from `crud`";

                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $mobile . '</td>
                        <td>' . $password . '</td>
                        <td>
                            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">更新</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">削除</a></button>
                        </td>
                    </tr>';
                    }
                }


                ?>

            </tbody>
        </table>
    </div>
</body>

</html>