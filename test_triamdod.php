<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>

    *{
        margin:0;
        padding:0;
        font-family: 'Kanit', sans-serif;
    }

    body{
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
    }

    h2{
        margin:10px 0 50px 0;
        text-align:center;
    }

    .form{
        padding:10px 50px;
        background-color:#E4E4E4;
        height:500px;
        width:300px;
    }

    .input{
        width:100%;
        height:25px;
        display:flex;
        justify-content:space-between;
        margin:10px 0;
    }

    .input:nth-child(5){
        display:flex;
        justify-content:flex-end;
    }

    input[name="submit"]{
        width:60px;
    }

</style>
<body>

    <?php
       include('server.php');

       //$insert = mysqli_query($conn,"INSERT INTO `register`(`token`) VALUES (CONCAT(SUBSTRING('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),SUBSTRING('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),SUBSTRING('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),SUBSTRING('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),SUBSTRING('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),SUBSTRING('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),SUBSTRING('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1),SUBSTRING('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', rand()*36+1, 1)))");
    
    ?>

    <div class="form">
    <h2>Triam-dod Register</h2>
    <form method="POST" action="insert.php">
        <div class="input">
        <label for="realname">ชื่อนักเรียน</label>
        <input type="text" name="realname">
        </div>

        <div class="input">
        <label for="realname">ห้อง</label>
        <input type="text" name="class">
        </div>

        <div class="input">
        <label for="realname">เลขที่</label>
        <input type="text" name="number">
        </div>

        <div class="input">
        <label for="token">Token</label>
        <input type="token" name="token">
        </div>

        <div class="input"><input type="submit" name="submit"></div>
    </form>
    </div>

</body>
</html>