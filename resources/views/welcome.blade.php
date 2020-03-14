<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">หัวข้อ</th>
      <th scope="col">คำตอบ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($values as $value)
      <td>{{$value->id}}</td>
      <td>{{$value->question}}</td>
      <td>@{{$value->answer}}</td>
      @endforeach
    </tr>
  </tbody>
</table>
</body>
</html>
