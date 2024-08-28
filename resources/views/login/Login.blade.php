@include('login\css\Login')
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>ورود</title>
</head>
<body>
<div class="login">
    <h1>Login</h1>
    <form method="head">
        <input type="text" name="username" placeholder="Username" required="required" autocomplete="off"/>
        <input type="password" name="password" placeholder="Password" required="required" autocomplete="off" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Submit</button>
    </form>
</div>
</body>
</html>


