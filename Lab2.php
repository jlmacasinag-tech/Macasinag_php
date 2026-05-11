<!DOCTYPE html>
<html>
<head>
    <title>Lab 2: Using POST Method</title>
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
        .output {
            background: linear-gradient(135deg, #d7bde2 0%, #c39bd3 100%);
            padding: 20px;
            border-left: 4px solid #9b59b6;
            border-radius: 4px;
            margin-top: 20px;
            color: #333;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
        .info-box {
            background-color: #d1ecf1;
            color: #0c5460;
            padding: 15px;
            border-left: 4px solid #17a2b8;
            border-radius: 4px;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Lab 2: Using POST Method</h1>
    <div class="objective">
        <strong>Objective:</strong> Understand the difference between GET and POST.
    </div>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['name']) && !empty($_POST['name'])) {
        echo "<div class='output'>";
        echo "Hello, " . htmlspecialchars($_POST['name']) . "!";
        echo "</div>";
        echo "<div class='info-box'>";
        echo "<strong>💡 Key Difference:</strong><br>";
        echo "✓ <strong>POST Method:</strong> Data is sent in the request body (hidden from URL)<br>";
        echo "✓ Better for sensitive data<br>";
        echo "✓ No URL length limit";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
