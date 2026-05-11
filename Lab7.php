<!DOCTYPE html>
<html>
<head>
    <title>Lab 7: Radio Buttons</title>
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
            margin-top: 12px;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }
        .radio-group {
            margin: 10px 0 15px 0;
        }
        .radio-option {
            margin: 8px 0;
        }
        input[type="radio"] {
            margin-right: 8px;
            cursor: pointer;
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
            margin-top: 15px;
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
    </style>
</head>
<body>
<div class="container">
    <h1>Lab 7: Radio Buttons</h1>
    <div class="objective">
        <strong>Objective:</strong> Handle selection input with radio buttons.
    </div>
    <form method="post" action="">
        <label>Gender:</label>
        <div class="radio-group">
            <div class="radio-option">
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label>
            </div>
            <div class="radio-option">
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other">Other</label>
            </div>
        </div>
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['gender']) && !empty($_POST['gender'])) {
        echo "<div class='output'>";
        echo "Selected Gender: <strong>" . htmlspecialchars($_POST['gender']) . "</strong>";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
