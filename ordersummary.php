<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Order Summary</title>
</head>
<body>
    <header>
        <h1>Order Summary</h1>
    </header>
    <div class="content">
        <h2>Your Order Details</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<p><strong>Customer Name:</strong> " . $_POST["customerName"] . "</p>";
            echo "<p><strong>Gender:</strong> " . $_POST["gender"] . "</p>";
            echo "<p><strong>Age:</strong> " . $_POST["age"] . "</p>";
            echo "<p><strong>Address:</strong> " . $_POST["address"] . "</p>";
            echo "<p><strong>Cinema to Watch:</strong> " . $_POST["cinema"] . "</p>";
            echo "<p><strong>Number of Tickets:</strong> " . $_POST["numTickets"] . "</p>";
            
            if (isset($_POST["addOns"])) {
                $addOns = implode(", ", $_POST["addOns"]);
                echo "<p><strong>Add-ons:</strong> " . $addOns . "</p>";
            } else {
                echo "<p><strong>Add-ons:</strong> None</p>";
            }
        } else {
            echo "<p>No data submitted.</p>";
        }
        ?>
    </div>
</body>
</html>
