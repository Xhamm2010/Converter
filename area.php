<?php
require_once('function.php');
// Initializing the values as empty
$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';


if(isset($_POST['submit'])) {
    $from_value = $_POST['from_value'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];
    $to_value = convert_area($from_value, $from_unit, $to_unit);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert-Area</title>
     <!-- Custom CSS -->
     <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="main__content">
        <h2>AREA CONVERSION</h2>
        <form action="" method="post">
            <div class="entry">
                <h3>Convert From:</h3>
                <label>Value:</label>&nbsp;
                <input type="text" name="from_value" value="<?php echo $from_value ?>" placeholder="enter value">&nbsp;
                <label>Choose Unit:</label>&nbsp;
                <select name="from_unit">
                    <option>unit</option>
                    <option value="square_inches"<?php if($from_unit == 'square_inches') { echo " selected"; } ?>>square inches</option>
                    <option value="square_feet"<?php if($from_unit == 'square_feet') { echo " selected"; } ?>>square feet</option>
                    <option value="square_yards"<?php if($from_unit == 'square_yards') { echo " selected"; } ?>>square yards</option>
                    <option value="square_miles"<?php if($from_unit == 'square_miles') { echo " selected"; } ?>>square miles</option>
                    <option value="square_millimeters"<?php if($from_unit == 'square_millimeters') { echo " selected"; } ?>>square millimeters</option>
                    <option value="square_centimeters"<?php if($from_unit == 'square_centimeters') { echo " selected"; } ?>>square centimeters</option>
                    <option value="square_meters"<?php if($from_unit == 'square_meters') { echo " selected"; } ?>>square meters</option>
                    <option value="square_kilometers"<?php if($from_unit == 'square_kilometers') { echo " selected"; } ?>>square kilometers</option>
                    <option value="acres"<?php if($from_unit == 'acres') { echo " selected"; } ?>>acres</option>
                    <option value="hectares"<?php if($from_unit == 'hectares') { echo " selected"; } ?>>hectares</option>
                </select>
            </div>

            <div class="entry">
                <h3>To:</h3>
                <label>Choose Unit</label>&nbsp;
                <select name="to_unit">
                    <option>unit</option>
                    <option value="square_inches"<?php if($to_unit == 'square_inches') { echo " selected"; } ?>>square inches</option>
                    <option value="square_inches"<?php if($to_unit == 'square_inches') { echo " selected"; } ?>>square inches</option>
                    <option value="square_feet"<?php if($to_unit == 'square_feet') { echo " selected"; } ?>>square feet</option>
                    <option value="square_yards"<?php if($to_unit == 'square_yards') { echo " selected"; } ?>>square yards</option>
                    <option value="square_miles"<?php if($to_unit == 'square_miles') { echo " selected"; } ?>>square miles</option>
                    <option value="square_millimeters"<?php if($to_unit == 'square_millimeters') { echo " selected"; } ?>>square millimeters</option>
                    <option value="square_centimeters"<?php if($to_unit == 'square_centimeters') { echo " selected"; } ?>>square centimeters</option>
                    <option value="square_meters"<?php if($to_unit == 'square_meters') { echo " selected"; } ?>>square meters</option>
                    <option value="square_kilometers"<?php if($to_unit == 'square_kilometers') { echo " selected"; } ?>>square kilometers</option>
                    <option value="acres"<?php if($to_unit == 'acres') { echo " selected"; } ?>>acres</option>
                    <option value="hectares"<?php if($to_unit == 'hectares') { echo " selected"; } ?>>hectares</option>
                </select>&nbsp;
                <label>Result:</label>&nbsp;
                <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>">&nbsp;
            </div>
            <button type="submit" name="submit">Submit</button>
            <button type="reset" value="reset" onclick="window.location.href='length.php'">Reset</button>
        </form>
        <a href="index.php" class="backLink">Back to Menu&rarr;</a>
    </div>
</body>
</html>
