<!DOCTYPE html>
<html>
<head>
    <title>Laravel Auto Increment Serial Number Example - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
       
<div class="container">
    <h1>Laravel Auto Increment Serial Number</h1>
  
    <table class="table table-bordered data-table" >
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $user)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
       
</body>
     
</html>