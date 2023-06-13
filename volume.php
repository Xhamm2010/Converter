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
    
    $to_value = convert_volume($from_value, $from_unit, $to_unit);
}

$volume_options = array(
    'cubic inches',
    'cubic feet',
    'Imperial gallons',
    'Imperial quarts',
    'Imperial pints',
    'Imperial cups',
    'Imperial ounces',
    'Imperial tablespoons',
    'Imperial teaspoons',
    'US gallons',
    'US quarts',
    'US pints',
    'US cups',
    'US ounces',
    'US tablespoons',
    'US teaspoons',
    'cubic centimeters',
    'cubic meters',
    'liters',
    'milliliters'
  );

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert-Volume</title>
     <!-- Custom CSS -->
     <link rel="stylesheet" href="css/styles.css">
</head>
  <body>
    <div id="main__content">
        <h2>VOLUME CONVERSION</h2>
        <form action="" method="post">
            <div class="entry">
                <h3>Convert From:</h3>
                <label>Value:</label>&nbsp;
                <input type="text" name="from_value" value="<?php echo $from_value ?>" placeholder="enter value">&nbsp;
                <label>Choose Unit:</label>&nbsp;
                <select name="from_unit">
                    <option>unit</option>
                    <?php 
                        foreach($volume_options as $unit){
                            $opt = optionize($unit);
                            echo "
                            <option value=\"{$opt}\"";
                            if($from_unit == $opt) { echo " selected"; }
                            echo ">{$unit}</option>";
                            }

                    ?>   
                </select>
            </div>

            <div class="entry">
                <h3>To:</h3>
                <label>Choose Unit</label>&nbsp;
                <select name="to_unit">
                    <option>unit</option>
                    <?php
                        foreach($volume_options as $unit){
                            $opt = optionize($unit);
                            echo "
                            <option value=\"{$opt}\"";
                            if($to_unit == $opt) { echo " selected"; }
                            echo ">{$unit}</option>";
                        }
                    ?>
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