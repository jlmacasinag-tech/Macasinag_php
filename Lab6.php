<!DOCTYPE html>
<html>
<head>
    <title>Lab 6: Email Validation</title>
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
            max-width: 500px;
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
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 6px;
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
            margin-top: 20px;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 20px;
            border-left: 4px solid #dc3545;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Lab 6: Email Validation</h1>
    <div class="objective">
        <strong>Objective:</strong> Validate email format using filter_var().
    </div>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Enter your email">
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['email']) && !empty($_POST['email'])) {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "<div class='success'>";
            echo "✅ Valid email: " . htmlspecialchars($_POST['email']);
            echo "</div>";
        } else {
            echo "<div class='error'>";
            echo "❌ Invalid email format";
            echo "</div>";
        }
    }
    ?>
</div>
</body>
</html>
