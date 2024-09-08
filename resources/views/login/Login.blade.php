@include('login\css\Login')
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>ورود</title>
</head>
<body>
<div class="login">
    <h1>ورود</h1>
    <form method="post" action="">
        <input type="text" id="username"  name="username" placeholder="نام کاربری" required="required" autocomplete="off"/>
        <input type="password" name="password" placeholder="رمز عبور" required="required" autocomplete="off" />
        <button type="submit" class="btn btn-primary btn-block btn-large">ورود</button>
    </form>
</div>
</body>
</html>


