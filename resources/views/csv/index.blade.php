<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('csv.post') }}" method="post">
    @csrf
    <table border="1" width="200">
      <tr>
        <th>名前</th>
        <th>年齢</th>
      </tr>
      @foreach ($users as $item)
          <tr>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['age'] }}</td>
          </tr>
      @endforeach
    </table>
    <button type="submit">CSV出力</button>
  </form>
</body>
</html>