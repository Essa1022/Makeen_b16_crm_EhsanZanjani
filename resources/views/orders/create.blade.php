<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>ثبت سفارش</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: gray">
    <div class="container" style="width: 1200px; height: 1000px; margin: 10px auto; background-color: aliceblue">
        <div class="container mt-3">
            <h2>سفارشات</h2>
            <form action="{{ route('orders.create') }}" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="username">نام کاربری:</label>
                    <input type="text" class="form-control" placeholder="نام کاربری را وارد کنید" name="username"
                        value="{{ old('username') }}" />
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="product">نام محصول:</label>
                    <input type="text" class="form-control" placeholder="نام محصول را وارد کنید" name="product"
                        value="{{ old('product') }}" />
                    @error('product')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="number">تعداد :</label>
                    <input type="text" class="form-control" placeholder="  تعداد را وارد کنید" name="number"
                        value="{{ old('number') }}" />
                    @error('number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address">آدرس:</label>
                    <input type="text" class="form-control" placeholder="آدرس را وارد کنید" name="address"
                        value="{{ old('address') }}" />
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">ثبت</button>
            </form>
        </div>
    </div>
</body>

</html>
