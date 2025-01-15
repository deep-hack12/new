<?php
    $id = $_GET['No']; // Fetch the ID from the URL
    include("connection2.php"); // Include database connection

    // Fetch the record to populate the form
    $query = "SELECT * FROM student WHERE No='$id'";
    $data = mysqli_query($deta, $query);
    $result = mysqli_fetch_assoc($data);

    if (!$result) {
        die("Record not found for ID: " . htmlspecialchars($id));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .contact-section {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .contact-section h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input[type="text"], input[type="email"] {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: 100%;
        }
        input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<section id="contact" class="contact-section">
    <h2>Update Student Info</h2>
    <form id="contact-form" method="POST">
        <input type="text" value="<?php echo htmlspecialchars($result['Name']); ?>" name="Name" placeholder="Student Name" required>
        <input type="text" value="<?php echo htmlspecialchars($result['Mobile_no']); ?>" name="Mobile_no" placeholder="Mobile Number" required pattern="\d{10}">
        <input type="email" value="<?php echo htmlspecialchars($result['Email']); ?>" name="Email" placeholder="Email ID" required>
        <input type="text" value="<?php echo htmlspecialchars($result['Duration']); ?>" name="Duration" placeholder="Time Duration">
        <input type="text" value="<?php echo htmlspecialchars($result['Publications']); ?>" name="Publications" placeholder="Publications" required>
        <input type="text" value="<?php echo htmlspecialchars($result['Link']); ?>" name="Link" placeholder="Link">
        <input type="text" value="<?php echo htmlspecialchars($result['Status']); ?>" name="Status" placeholder="Status">
        <input type="submit" value="Update" name="Update">
    </form>
</section>
</body>
</html>

<?php
    if (isset($_POST['Update'])) {
        $Name = mysqli_real_escape_string($deta, $_POST['Name']);
        $Mobile_no = mysqli_real_escape_string($deta, $_POST['Mobile_no']);
        $Email = mysqli_real_escape_string($deta, $_POST['Email']);
        $Duration = mysqli_real_escape_string($deta, $_POST['Duration']);
        $Publications = mysqli_real_escape_string($deta, $_POST['Publications']);
        $Link = mysqli_real_escape_string($deta, $_POST['Link']);
        $Status = mysqli_real_escape_string($deta, $_POST['Status']);

        if (!empty($Name) && !empty($Mobile_no) && !empty($Email) && !empty($Publications) && !empty($Status)) {
            $query = "UPDATE student 
                      SET Name='$Name', Mobile_no='$Mobile_no', Email='$Email', Duration='$Duration', 
                          Publications='$Publications', Link='$Link', Status='$Status' 
                      WHERE No='$id'";

            if (mysqli_query($deta, $query)) {
                echo "<p style='color: green; text-align: center;'>Data updated successfully.</p>";
            } else {
                echo "<p style='color: red; text-align: center;'>Update failed: " . mysqli_error($deta) . "</p>";
            }
        } else {
            echo "<p style='color: red; text-align: center;'>All required fields must be filled.</p>";
        }
    }
?>
