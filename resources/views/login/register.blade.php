@include('login\support')
<!DOCTYPE HTML>
<html>
<head>
    <title>ثبت نام</title>
<body>
<form>
    <div class="col-xs-2">
        <h3>لطفا اطلاعات را به طور دقیق وارد کنید</h3>
        <div class="col-xs-2">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="نام و نام خانوادگی">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <div class="col-xs-2">
            <div class="col-xs-2">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="ایمیل" required autocomplete="email">    </div>
            </div>
    <br>
    <div class="col-xs-2">
        <div class="col-xs-2">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="رمزعبور" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <br>
    <div class="col-xs-2">
        <div class="col-xs-2">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"placeholder="تکرار رمز عبور" required autocomplete="new-password">
        </div>
    </div>
    <div class="row mb-0">
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">
                {{ __('تایید') }}
            </button>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary" formaction="/">ورود</button>
    </div>
</form>
</body>
</html>


