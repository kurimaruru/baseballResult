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
    <h1>This is Top Page</h1>
    @foreach ($members as $member)
    <table>
      <thead>
        <td>admin</td>
        <td>名前</td>
        <td>背番号</td>
        <td>ポジション</td>
        <td>利き手</td>
        <td>役割</td>
      </thead>
      <tbody>
        <th>
        <td>{{$member->admin_id}}</td>
        <td>{{$member->name}}</td>
        <td>{{$member->back_number}}</td>
        <td>{{$member->position}}</td>
        <td>{{$member->dominant}}</td>
        <td>{{$member->role}}</td>
        </th>
      </tbody>
    </table>
    @endforeach
  </div>
</body>

</html>
