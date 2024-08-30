<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevTools</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #ffffff;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 200px;
        }
        .version {
            text-align: center;
            color: #888;
            margin-bottom: 30px;
        }
        .stats {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .stat-box {
            background-color: #2a2a2a;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            text-align: center;
            flex: 1 1 150px;
            margin: 5px;
        }
        .plugins {
            text-align: center;
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
        }
        .footer a {
            color: #4a4a4a;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="<?= URL() ?>/devtools/image/logo_cats/png" alt="DevTools Logo">
        </div>
        <div class="version">
            Ratricat DevTools
        </div>
        <div class="stats">
            <div class="stat-box">
                <h3>v3.2.0</h3>
            </div>
            <div class="stat-box">
                <h3>6 pages</h3>
            </div>
            <div class="stat-box">
                <h3>47 components</h3>
            </div>
            <div class="stat-box">
                <h3>113 imports</h3>
            </div>
            <div class="stat-box">
                <h3>8 modules</h3>
            </div>
        </div>
        <div class="plugins">
            <div class="stat-box">
                <h3>6 plugins</h3>
            </div>
        </div>
        <div class="footer">
            <a href="#">Ideas & Suggestions</a>
            <a href="#">Project Roadmap</a>
            <a href="#">Bug Reports</a>
            <a href="#">Settings</a>
        </div>
    </div>
</body>
</html>