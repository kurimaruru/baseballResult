<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <div>
    <h1>メンバー登録</h1>
  </div>
  <div class="form">
    <form method="POST" action="{{route('members.store')}}">
      @csrf
      <label for="name">登録名</label>
      <input id="name" name="name" type="text" required value="{{old('name')}}">
      <label for="backNum">背番号</label>
      <input id="backNum" name="back_number" type="number" required value="{{old('back_number')}}">
      <label for="position">ポジション</label>
      <input id="position" name="position" type="number" required value="{{old('position')}}">
      <label for="dominant">投打</label>
      <input id="dominant" name="dominant" type="text" required value="{{old('dominant')}}">
      <label for="role">役割</label>
      <input id="role" name="role" type="text" required value="{{old('role')}}"><br>
      <button type="submit">登録する</button>
    </form>
  </div>
  @if ($errors->any())
  <div class="card-text text-left alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
</body>

</html>
