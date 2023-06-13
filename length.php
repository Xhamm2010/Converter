<?php
require_once('function.php');
// Setting the values as empty
$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';


if(isset($_POST['submit'])) {
    $from_value = $_POST['from_value'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];
    
    $to_value = convert_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert-Length</title>
     <!-- Custom CSS -->
     <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="main__content">
        <h2>LENGTH AND DISTANCE CONVERSION</h2>
        <form action="" method="post">
            <div class="entry">
                <h3>Convert From:</h3>
                <label>Value:</label>&nbsp;
                <input type="text" name="from_value" value="<?php echo $from_value ?>" placeholder="enter value">&nbsp;
                <label>Choose Unit:</label>&nbsp;
                <select name="from_unit">
                    <option>unit</option>
                    <option value="inches"<?php if($from_unit == 'inches') { echo " selected"; } ?>>inches</option>
                    <option value="feet"<?php if($from_unit == 'feet') { echo " selected"; } ?>>feet</option>
                    <option value="yards"<?php if($from_unit == 'yards') { echo " selected"; } ?>>yards</option>
                    <option value="miles"<?php if($from_unit == 'miles') { echo " selected"; } ?>>miles</option>
                    <option value="millimeters"<?php if($from_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
                    <option value="centimeters"<?php if($from_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
                    <option value="meters"<?php if($from_unit == 'meters') { echo " selected"; } ?>>meters</option>
                    <option value="kilometers"<?php if($from_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
                </select>
            </div>
            
            <div class="entry">
                <h3>To:</h3>
                <label>Choose Unit</label>&nbsp;
                <select name="to_unit">
                    <option>unit</option>
                    <option value="inches"<?php if($to_unit == 'inches') { echo " selected"; } ?>>inches</option>
                    <option value="feet"<?php if($to_unit == 'feet') { echo " selected"; } ?>>feet</option>
                    <option value="yards"<?php if($to_unit == 'yards') { echo " selected"; } ?>>yards</option>
                    <option value="miles"<?php if($to_unit == 'miles') { echo " selected"; } ?>>miles</option>
                    <option value="millimeters"<?php if($to_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
                    <option value="centimeters"<?php if($to_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
                    <option value="meters"<?php if($to_unit == 'meters') { echo " selected"; } ?>>meters</option>
                    <option value="kilometers"<?php if($to_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
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