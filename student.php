<html>
<head>
    <title>ADD Student</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="font.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        
        section.contact-section {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        section.contact-section h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        
        form#contact-form input[type="text"],
        form#contact-form input[type="email"],
        form#contact-form input[type="url"] {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 100%;
            transition: border-color 0.3s ease;
        }

        form#contact-form input[type="text"]:hover,
        form#contact-form input[type="email"]:hover,
        form#contact-form input[type="url"]:hover {
            border-color: #555;
        }
        
        form#contact-form input:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        
        form#contact-form .button {
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        form#contact-form .button:hover {
            background-color: #0056b3;
        }
        
        mark {
            background-color: #ffe5d1;
            font-weight: bold;
            color: #333;
            padding: 0 5px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <section id="contact" class="contact-section">
        <h2><mark>ADD STUDENT INFO</mark></h2>
        <form id="contact-form" method="POST">
            <input type="text" name="name" placeholder="Student Name" required>
            <input type="text" name="mobile" placeholder="Mobile Number" required pattern="\d{10}">
            <input type="email" name="email" placeholder="Email ID" required>
            <input type="text" name="duration" placeholder="Time Duration">
            <input type="text" name="Publications" placeholder="Publications" required>
            <input type="text" name="Link" placeholder="Link">
            <input type="text" name="Status" placeholder="Status">
            <input type="submit" value="Submit" name="submited" class="button btn btn-primary">
        </form>
    </section>
</body>
</html>

<?php
    include("connection2.php");
?>
