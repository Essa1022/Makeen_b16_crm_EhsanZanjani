<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <title>ویرایش پست</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: gray;">
    <div class="container" style="width: 1200px; height:1000px ; margin: 10px auto; background-color: aliceblue;">
        <div class="container mt-3">
            <h2>ویرایش پست </h2>
            <form action="{{ route('articles.update', ['id' => $article->id ]) }}" method="post">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="title">نام مقاله :</label>
                    <input type="text" class="form-control" placeholder="عنوان مقاله" name="title"
                        value="{{ $article->title }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="author">نویسنده :</label>
                    <input type="text" class="form-control" placeholder="نویسنده" name="author"
                        value="{{ $article->author }}">
                    @error('author')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 mt-3">
                    <label for="category_id">دسته بندی:</label><br>
                    <select name="category_id">
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}"
                                {{ $cat->id == $article->category_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="text"> متن مقاله:</label><br>
                    <textarea name="text" cols="45" rows="15" placeholder="توضیحات">{{ $article->text }}</textarea>
                    @error('text')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">ثبت</button>
            </form>
        </div>
    </div>
</body>

</html>
