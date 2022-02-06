<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <div class="content">
    <h3>チームを登録する</h3>
    <form method="POST" action="{{route('team.store')}}">
      @csrf
      <label for="team">チーム名</label>
      <input id="team_name" name="team_name" type="text" required value="{{old('team_name')}}">
      <label for="team">ホームページURL</label>
      <input type="text" id="homepage" name="homepage" value="{{old('homepage')}}">
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
