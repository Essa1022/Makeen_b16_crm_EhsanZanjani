<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <title>جدول مقالات</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: gray;">
  <div class="container" style="width: 1200px; height:1000px ; margin: 10px auto; background-color: aliceblue;">
    <div class="container mt-3">
      <h2>جدول مقالات</h2>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>عنوان</th>
            <th>نام نویسنده</th>
            <th>دسته بندی</th>
            <th>متن</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $articles)
              <tr>
                <td>{{$articles->title}}</td>
                <td>{{$articles->author}}</td>
                <td>{{$articles->category_id}}</td>
                <td>{{$articles->text}}</td>
                <td>
                    <a href="{{ route('articles.edit', ['id' => $articles->id ]) }}">ویرایش</a>
                  <form action="{{ route('articles.destroy', ['id' => $articles->id ]) }}" method="post">
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
