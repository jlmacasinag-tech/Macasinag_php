<!DOCTYPE html>
<html>
<head>
    <title>Lab 14: Checkbox Input</title>
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
        .checkbox-group {
            margin: 10px 0 15px 0;
        }
        .checkbox-option {
            margin: 8px 0;
        }
        input[type="checkbox"] {
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
        }
        .output-item {
            margin: 8px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Lab 14: Checkbox Input</h1>
    <div class="objective">
        <strong>Objective:</strong> Handle multiple selections with checkboxes.
    </div>
    <form method="post">
        <label>Hobbies (select all that apply):</label>
        <div class="checkbox-group">
            <div class="checkbox-option">
                <input type="checkbox" id="reading" name="hobbies[]" value="Reading">
                <label for="reading">Reading</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="gaming" name="hobbies[]" value="Gaming">
                <label for="gaming">Gaming</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="coding" name="hobbies[]" value="Coding">
                <label for="coding">Coding</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="anime" name="hobbies[]" value="Anime/Manga">
                <label for="anime">Anime/Manga</label>
            </div>
            <div class="checkbox-option">
                <input type="checkbox" id="sports" name="hobbies[]" value="Sports">
                <label for="sports">Sports</label>
            </div>
        </div>
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['hobbies']) && count($_POST['hobbies']) > 0) {
        echo "<div class='output'>";
        echo "<strong>Your Hobbies:</strong><br>";
        foreach($_POST['hobbies'] as $hobby) {
            echo "<div class='output-item'>✓ " . htmlspecialchars($hobby) . "</div>";
        }
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
