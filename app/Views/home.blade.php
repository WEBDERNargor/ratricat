<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Scoreboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th {
            background-color: #000;
            color: #fff;
            text-align: left;
            padding: 10px;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:nth-child(odd) {
            background-color: #fff;
        }
        .container{
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="header">
            @if(isset($_SESSION['user']))
            <p>Welcome, {{$_SESSION['user']['name']}} <a href="/profile">Profile</a> | <a onclick="return confirm('are you sure?');" href="/logout">Logout</a></p>
            
            @else
            <a href="/profile">Profile</a> |
            <a href="/login">Login</a>
            @endif   
        </div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>NAME</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $user): ?>
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                   
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</body>
</html>