<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
  <title>لیست محصولات</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: gray">
  <div class="container" style="width: 1200px; height: 1000px; margin: 10px auto; background-color: aliceblue">
    <div class="container mt-3">

      <h2>جدول محصولات</h2>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>نام محصول</th>
            <th>رنگ</th>
            <th>حافظه داخلی</th>
            <th>پارت نامبر</th>
            <th>قیمت(به ریال)</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)

              <tr>
                <td>{{ $product->product_name}}</td>
                <td>{{ $product->color}}</td>
                <td>{{ $product->memory}}</td>
                <td>{{ $product->part_number}}</td>
                <td>{{ $product->price}}</td>
                <td>
                    <a href="{{ route('products.edit', ['id' => $product->id]) }}">ویرایش</a>
                  <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">
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
