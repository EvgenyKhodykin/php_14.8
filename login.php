<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorisation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
      <div class="container text-center my-4">
      <h4 class="modal-title">Для авторизации на сайте введите логин и пароль:</h2>
      <div class="row my-3">
        <form action="process.php" method="post">
            <input name="login" type="text" placeholder="Логин">
            <input name="password" type="password" placeholder="Пароль">
            <input name="submit" type="submit" value="Войти">
        </form>
      </div>
      <a href="index.php" class="btn btn-primary" role="button" data-bs-toggle="button">Вернуться на главную страницу &#8617;</a>  
      </div>
    
</body>
</html>
