<!DOCTYPE html>
<html>
<head>
    <title>Lab 18: GET vs POST Comparison</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.2);
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
        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }
        .form-section {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 6px;
        }
        .form-section h3 {
            color: #9b59b6;
            margin-bottom: 15px;
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
        .info-box {
            background-color: #d1ecf1;
            color: #0c5460;
            padding: 15px;
            border-left: 4px solid #17a2b8;
            border-radius: 4px;
            margin-top: 20px;
            font-size: 14px;
            line-height: 1.6;
        }
        @media (max-width: 768px) {
            .two-col {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Lab 18: GET vs POST Comparison</h1>
    <div class="objective">
        <strong>Objective:</strong> Observe differences between GET and POST methods.
    </div>
    
    <div class="two-col">
        <div class="form-section">
            <h3>Form using GET:</h3>
            <form method="get">
                <label for="get_input">Input (GET):</label>
                <input type="text" id="get_input" name="get_input" placeholder="Enter text">
                <input type="submit" value="Submit with GET">
            </form>
        </div>
        
        <div class="form-section">
            <h3>Form using POST:</h3>
            <form method="post">
                <label for="post_input">Input (POST):</label>
                <input type="text" id="post_input" name="post_input" placeholder="Enter text">
                <input type="submit" value="Submit with POST">
            </form>
        </div>
    </div>
    
    <?php
    if(isset($_GET['get_input']) && !empty($_GET['get_input'])) {
        echo "<div class='info-box'>";
        echo "<strong>GET Result:</strong><br>";
        echo "<strong>Data visible in URL:</strong> " . htmlspecialchars($_SERVER['QUERY_STRING']) . "<br>";
        echo "<strong>Your input:</strong> " . htmlspecialchars($_GET['get_input']);
        echo "</div>";
    }
    if(isset($_POST['post_input']) && !empty($_POST['post_input'])) {
        echo "<div class='info-box'>";
        echo "<strong>POST Result:</strong><br>";
        echo "Data NOT visible in URL (hidden in request body)<br>";
        echo "<strong>Your input:</strong> " . htmlspecialchars($_POST['post_input']);
        echo "</div>";
    }
    ?>
    
    <div class="info-box">
        <strong>Key Differences:</strong><br>
        <strong>GET:</strong> Data in URL (max 2000 chars), visible, use for retrieval<br>
        <strong>POST:</strong> Data in body (no size limit), hidden, use for sensitive data
    </div>
</div>
</body>
</html>
