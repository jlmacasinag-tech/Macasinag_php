<!DOCTYPE html>
<html>
<head>
    <title>Lab 19: Form with File Structure</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
            max-width: 700px;
            width: 100%;
        }
        h1 {
            color: #9b59b6;
            text-align: center;
            margin-bottom: 10px;
        }
        .objective {
            background-color: #f0f0f0;
            padding: 15px;
            border-left: 4px solid #9b59b6;
            margin-bottom: 20px;
            border-radius: 4px;
            font-size: 14px;
        }
        .explanation {
            background-color: #d1ecf1;
            color: #0c5460;
            padding: 15px;
            border-left: 4px solid #17a2b8;
            border-radius: 4px;
            margin: 20px 0;
            font-size: 14px;
            line-height: 1.6;
        }
        code {
            background-color: #f5f5f5;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
            color: #d63384;
        }
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #9b59b6;
            box-shadow: 0 0 8px rgba(155, 89, 182, 0.3);
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s;
        }
        input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(155, 89, 182, 0.4);
        }
        .success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
            padding: 20px;
            border-left: 4px solid #28a745;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Lab 19: Form with File Structure</h1>
    <div class="objective">
        <strong>Objective:</strong> Organize code with separate files.
    </div>
    
    <div class="explanation">
        <strong>Recommended File Structure:</strong><br>
        📁 project/<br>
        &nbsp;&nbsp;├── form.php (contains form HTML)<br>
        &nbsp;&nbsp;├── process.php (contains form processing logic)<br>
        &nbsp;&nbsp;└── index.php (main entry point)<br><br>
        
        <strong>form.php example:</strong><br>
        <code>&lt;form method="post" action="process.php"&gt;</code><br>
        <code>&nbsp;&nbsp;&lt;input type="text" name="username"&gt;</code><br>
        <code>&lt;/form&gt;</code><br><br>
        
        <strong>process.php example:</strong><br>
        <code>&lt;?php</code><br>
        <code>\$username = \$_POST['username'];</code><br>
        <code>echo "Hello, " . htmlspecialchars(\$username);</code><br>
        <code>?&gt;</code>
    </div>
    
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="Enter username" required>
        <input type="submit" value="Process">
    </form>
    
    <?php
    if(isset($_POST['username']) && !empty($_POST['username'])) {
        echo "<div class='success'>";
        echo "<strong>✅ (process.php)</strong> Hello, " . htmlspecialchars($_POST['username']);
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
