<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>لیست کاربران</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: gray;">
    <div class="container" style="width: 1200px; height:1000px ; margin: 10px auto; background-color: aliceblue;">
        <div class="container mt-3">
            <h2>لیست کاربران</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>نام کاربری</th>
                        <th>رمز عبور</th>
                        <th>شماره موبایل</th>
                        <th>ایمیل</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ route('users.edit', ['id' => $user->id]) }}">ویرایش</a>
                                <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="حذف" onclick="return confirm('اطمینان دارید؟')">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
