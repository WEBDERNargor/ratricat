<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #666;
        }
        input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .forgot-password {
            text-align: right;
            font-size: 0.8rem;
            margin-bottom: 1rem;
        }
        .login-button {
            width: 100%;
            padding: 0.75rem;
            background: linear-gradient(to right, #00c9ff, #92fe9d);
            border: none;
            border-radius: 20px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        .social-login {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }
        .social-icon {
            width: 30px;
            height: 30px;
            margin: 0 0.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1rem;
        }
        .facebook { background-color: #3b5998; }
        .twitter { background-color: #1da1f2; }
        .google { background-color: #db4437; }
        .signup {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="post" action="{{ route('login_process') }}">
            <div class="form-group">
                <label for="email">Email</label>
                <input required type="text" name="email" id="email" placeholder="Type your Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input required type="password" name="password" id="password" placeholder="Type your password">
            </div>
            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="login-button">LOGIN</button>
        </form>
        <div class="social-login">
            <a href="#" class="social-icon facebook">f</a>
            <a href="#" class="social-icon twitter">t</a>
            <a href="#" class="social-icon google">G</a>
        </div>
        <div class="signup">
            <p>Haven't account yet? <a href="#">SIGN UP</a></p>
        </div>
    </div>
</body>
</html>