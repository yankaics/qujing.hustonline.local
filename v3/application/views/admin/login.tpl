<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="冰岩作坊">
    <title>后台管理系统</title>
    <link href="http://www.2shoujie.com/resource/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://www.2shoujie.com/resource/bootstrap/css/sigin.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <form class="form-signin" role="form" action="/manage/login/sigin" method="post">
        <h2 class="form-signin-heading">管理员入口</h2>
        <input type="email" name="username" class="form-control" placeholder="用户名" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="密码" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
    </form>
</div>
</body>
</html>