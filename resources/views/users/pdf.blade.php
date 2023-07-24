<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Users Data</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   </head>
  <style>
    .push-top {
      margin-top: 50px;
    }
  </style>
   <body>
      <div class="container">

        <div class="push-top">
          <table class="table">
            <thead>
                <tr class="table-warning">
                  <td>ID</td>
                  <td>Name</td>
                  <td>Last Name</td>
                  <td>Email</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user['id']}}</td>
                    <td>{{$user['name']}}</td>
                    <td>{{$user['last_name']}}</td>
                    <td>{{$user['email']}}</td>
                </tr>
                @endforeach
                @if(count($users) === 0)
                <tr>
                    No Users available
                </tr>
                @endif  
            </tbody>
          </table>
        <div>

      </div>
   </body>
</html>
