<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>ویرایش کاربر</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: gray;">
    <div class="container" style="width: 1200px; height:1000px ; margin: 10px auto; background-color: aliceblue;">
        <div class="container mt-3">
            <h2>ویرایش کاربر</h2>
            <form action="{{ route('users.update', ['id' => $user->id]) }}" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="username">نام کاربری:</label>
                    <input type="text" class="form-control" placeholder="نام کاربری را وارد کنید" name="username"
                        value="{{ $user->username }}">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password">رمز عبور:</label>
                    <input type="password" class="form-control" placeholder="رمز عبور را وارد کنید" name="password"
                        value="{{ $user->password }}">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone_number">شماره موبایل:</label>
                    <input type="text" class="form-control" placeholder="شماره موبایل را وارد کنید"
                        name="phone_number" value="{{ $user->phone_number }}">
                    @error('phone_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email">ایمیل:</label>
                    <input type="text" class="form-control" placeholder="ایمیل را وارد کنید" name="email"
                        value="{{ $user->email }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">ثبت</button>
            </form>
        </div>
    </div>
</body>

</html>
