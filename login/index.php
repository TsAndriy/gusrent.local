<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Вхід в адмін-панель</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
<div class="container" style="width: 300px; margin-top: 50px">
    <div class="main-form">
        <form class="login" action="check-login.php" method="post">
            <h3>Вхід</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">Логін</label>
                <input type="text" name="login" class="form-control"
                       id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" name="password" class="form-control"
                       id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary form-btn">Увійти</button>
        </form>
    </div>
</div>
<body >

