<!DOCTYPE html>
<head>
	<title> Calculator using superglobal</title>
</head>
<?php
// Q-9
$num1 = $_POST['fNum'];
$num2 = $_POST['lNum'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($num1) && is_numeric($num2)) {
    switch ($operator) {
        case "Add":
           $result = $num1 + $num2;
            break;
        case "Subtract":
           $result = $num1 - $num2;
            break;
        case "Multiply":
            $result = $num1 * $num2;
            break;
        case "Divide":
            $result = $num1 / $num2;
    }
}
?>
<body>
    <div id="page-wrap">
	  <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="fNum" id="first_num" required="required" value="<?php echo $num1; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="lNum" id="second_num" required="required" value="<?php echo $num2; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
	  </form>
    </div>
</body>
</html>