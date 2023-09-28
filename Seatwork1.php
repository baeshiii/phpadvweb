<!DOCTYPE html>
<html>
<head>
    <title>Loop Operation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        h1 {
            color: #333;
        }

        form {
            display: inline-block;
            text-align: left;
            border: 2px solid #ccc;
            padding: 20px;
            border-radius: 10px;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 200px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .results {
            text-align: left;
            margin-top: 20px;
            border: 2px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Loop Operation</h1>
    <form method="post" action="">
        <label for="num1">Enter the first positive integer:</label>
        <input type="text" name="num1" required><br><br>
        <label for="num2">Enter the second positive integer:</label>
        <input type="text" name="num2" required><br><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>
	
	

    <?php
if (isset($_POST['calculate'])) {
    $input_num1 = intval($_POST['num1']);
    $input_num2 = intval($_POST['num2']);

    if ($input_num1 < 0 || $input_num2 < 0) {
        echo "<div class='results'>";
        echo "<h2>Error:</h2>";
        echo "Please enter positive integers only.";
        echo "</div>";
    } else {

        $result_product = 0;
        for ($i = 0; $i < $input_num2; $i++) {
            $result_product += $input_num1;
        }


        $result_quotient = 0;
        while ($input_num1 >= $input_num2) {
            $input_num1 -= $input_num2;
            $result_quotient++;
        }


        $result_remainder = $input_num1;

        echo "<div class='results'>";
        echo "<h2>Results:</h2>";
        echo "Product: $result_product<br>";
        echo "Quotient: $result_quotient<br>";
        echo "Remainder: $result_remainder<br>";
        echo "</div>";
    }
}
?>

</body>
</html>
