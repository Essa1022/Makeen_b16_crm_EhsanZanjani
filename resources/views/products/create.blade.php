<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>ثبت محصول جدید</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: gray">
    <div class="container" style="width: 1200px; height: 1000px; margin: 10px auto; background-color: aliceblue">
        <div class="container mt-3">
            <h2>فرم محصول</h2>
            <form action="{{ route('products.create') }}" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="product_name">نام محصول:</label>
                    <input type="text" class="form-control" placeholder="نام محصول را وارد کنید" name="product_name"
                        value="{{ old('product_name') }}" />
                    @error('product_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="color">رنگ:</label>
                    <input type="text" class="form-control" placeholder="رنگ ها را وارد کنید" name="color"
                        value="{{ old('color') }}" />
                    @error('color')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="memory">حافظه:</label>
                    <input type="text" class="form-control" placeholder="حافظه را وارد کنید" name="memory"
                        value="{{ old('memory') }}" />
                    @error('memory')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="part_number">پارت نامبر:</label>
                    <input type="text" class="form-control" placeholder="پارت نامبر را وارد کنید" name="part_number"
                        value="{{ old('part_number') }}" />
                    @error('part_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price">قیمت (به ریال):</label>
                    <input type="text" class="form-control" placeholder="قیمت را وارد کنید" name="price"
                        value="{{ old('price') }}" />
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">ثبت</button>
            </form>
        </div>
    </div>
</body>

</html>
