<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: beige;
	        background-image: linear-gradient(180deg,lightpink 0%, lightblue 100%);
	        font-family: 'Poppins', sans-serif;
	        overflow: hidden;
	        
        }
        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            text-align: center;
        }
        input[type="number"], select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Calculator</h2>
        <form method="POST">
            <input type="number" name="num1" placeholder="Enter first number" required><br><br>
            <input type="number" name="num2" placeholder="Enter second number" required><br><br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select><br><br>
            <input type="submit" name="calculate" value="Calculate">
        </form>
        <div class="result">
            <?php
            if(isset($_POST['calculate'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                switch ($operation) {
                    case 'add':
                        $result = $num1 + $num2;
                        echo "The Sum of the two numbers is: $result";
                        break;
                    case 'subtract':
                        $result = $num1 - $num2;
                        echo "The Difference of the two numbers is: $result";
                        break;
                    case 'multiply':
                        $result = $num1 * $num2;
                        echo "The Product of the two numbers is: $result";
                        break;
                    case 'divide':
                        if($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "The Quotient of the two numbers is: $result";
                        } else {
                            echo "Error: Division by zero is not allowed";
                        }
                        break;
                    default:
                        echo "Invalid operation";
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>