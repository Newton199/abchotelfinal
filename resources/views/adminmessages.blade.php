<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

  <style>
body {
  font-size: 200%;
}

table {
  border-collapse: collapse;
  
}
th, td {
  padding: 10px;
  text-align: center;
}


tr:hover {background-color: #D6EEEE;}


  </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

    <div class="collapse navbar-collapse" id="myNavbar">
        
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home">Home</a></li>
        <li><a href="/showmessage">messages</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-centre">
        <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
        
    </div>
  </div>
</nav>


@forelse($messages as $message)
 <center><h2> Guest Message</h2>
<table>
  <tr>
    
    <th>Name</th>
    <th>Email</th> 
    <th>message</th>

  </tr>
<tr>

    <td>{{$message->name}}</td>
    <td>{{$message->email}}</td>
    <td>{{$message->message}}</td>
  </tr>
 
</table></center>

<br>
@empty
@endforelse