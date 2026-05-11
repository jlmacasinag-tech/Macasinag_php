<!DOCTYPE html>
<html>
<head>
    <title>Lab 20: Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 700px;
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
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 6px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 12px;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        textarea {
            min-height: 100px;
            resize: vertical;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #9b59b6;
            box-shadow: 0 0 8px rgba(155, 89, 182, 0.3);
        }
        .radio-group,
        .checkbox-group {
            margin: 10px 0 15px 0;
        }
        .radio-option,
        .checkbox-option {
            margin: 8px 0;
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 8px;
            cursor: pointer;
        }
        button[type="submit"],
        button[type="reset"] {
            padding: 12px 25px;
            background: linear-gradient(135deg, #9b59b6 0%, #8e44ad 100%);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s;
            margin-right: 10px;
            margin-top: 15px;
        }
        button[type="reset"] {
            background: linear-gradient(135deg, #95a5a6 0%, #7f8c8d 100%);
        }
        button[type="submit"]:hover,
        button[type="reset"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-left: 4px solid #dc3545;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .error-item {
            margin: 8px 0;
        }
        .error-item:before {
            content: "❌ ";
        }
        .success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
            padding: 20px;
            border-left: 4px solid #28a745;
            border-radius: 4px;
        }
        .success-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .success-item {
            margin: 10px 0;
            line-height: 1.6;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Lab 20: Student Registration Form</h1>
    <div class="objective">
        <strong>Objective:</strong> Final Project - Apply all concepts learned.
    </div>
    
    <form method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" placeholder="Enter your age" required>
        
        <label>Gender:</label>
        <div class="radio-group">
            <div class="radio-option">
                <input type="radio" id="male" name="gender" value="Male" required>
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
        
        <label for="course">Course:</label>
        <select id="course" name="course" required>
            <option value="">-- Select a course --</option>
            <option value="BS Information Technology">BS Information Technology</option>
            <option value="BS Computer Science">BS Computer Science</option>
            <option value="BS Information Systems">BS Information Systems</option>
        </select>
        
        <label>Hobbies:</label>
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
        </div>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Tell us about yourself..."></textarea>
        
        <button type="submit">Register</button>
        <button type="reset">Clear</button>
    </form>
    
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = array();
        
        if(empty($_POST["name"])) $errors[] = "Name is required";
        if(empty($_POST["email"])) $errors[] = "Email is required";
        elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
        if(empty($_POST["age"])) $errors[] = "Age is required";
        elseif(!is_numeric($_POST["age"]) || $_POST["age"] < 15) $errors[] = "Age must be a number (minimum 15)";
        if(empty($_POST["gender"])) $errors[] = "Gender is required";
        if(empty($_POST["course"])) $errors[] = "Course is required";
        
        if(count($errors) > 0) {
            echo "<div class='error'>";
            foreach($errors as $error) {
                echo "<div class='error-item'>" . $error . "</div>";
            }
            echo "</div>";
        } else {
            echo "<div class='success'>";
            echo "<div class='success-title'>✨ Registration Successful!</div>";
            echo "<div class='success-item'><strong>Name:</strong> " . htmlspecialchars($_POST['name']) . "</div>";
            echo "<div class='success-item'><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</div>";
            echo "<div class='success-item'><strong>Age:</strong> " . htmlspecialchars($_POST['age']) . "</div>";
            echo "<div class='success-item'><strong>Gender:</strong> " . htmlspecialchars($_POST['gender']) . "</div>";
            echo "<div class='success-item'><strong>Course:</strong> " . htmlspecialchars($_POST['course']) . "</div>";
            if(isset($_POST['hobbies']) && count($_POST['hobbies']) > 0) {
                echo "<div class='success-item'><strong>Hobbies:</strong> ";
                foreach($_POST['hobbies'] as $hobby) {
                    echo htmlspecialchars($hobby) . ", ";
                }
                echo "</div>";
            }
            if(!empty($_POST['message'])) {
                echo "<div class='success-item'><strong>Message:</strong> " . nl2br(htmlspecialchars($_POST['message'])) . "</div>";
            }
            echo "</div>";
        }
    }
    ?>
</div>
</body>
</html>
