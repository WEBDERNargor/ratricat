<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile page</title>
</head>
<body>
    <h1 class="text-center text-2xl">Profile</h1>
    <p>Welcome, {{ $_SESSION['user']['name'] }} <a href="/">Home</a>  |  <a onclick="return confirm('are you sure?');" href="/logout">Logout</a></p>
   
</body>
</html>