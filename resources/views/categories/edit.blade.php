<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>ویرایش دسته بندی</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: gray;">
    <div class="container" style="width: 1200px; height:1000px ; margin: 10px auto; background-color: aliceblue;">
        <div class="container mt-3">
            <h2>ویرایش دسته بندی</h2>
            <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="name">نام دسته بندی:</label>
                    <input type="text" class="form-control" placeholder="نام دسته بندی را وارد کنید" name="name"
                        value="{{ $category->name }}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description"> توضیحات:</label><br>
                    <textarea name="description" cols="30" rows="10" placeholder="توضیحات">{{ $category->description }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">ثبت</button>
            </form>
        </div>
    </div>
</body>

</html>
