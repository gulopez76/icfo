<?php

function CalcDiffDate($firstdate) {
    $inidt=strtotime($firstdate);
    $fidt=strtotime(date("Y-m-d"));
    $diff=abs($inidt - $fidt);
    return abs(round($diff / 86400));
}
if (isset($_POST['dtfi'])) {
    $result = CalcDiffDate($_POST['dtfi']);
 }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ICFO GUILLEM ULLDEMOLINS LOPEZ</title>
    </head>
    <body>
         <h4>
	     ICFO GUILLEM ULLDEMOLINS LOPEZ - DAY'S PAGE
         </h4>

        <?php if (isset($result)) { ?>
            <h4> Number of days elapsed between  <?php echo $_POST['dtfi']; ?> and <?php echo date('Y-m-d'); ?> are <?php echo $result ?> </h4>
        <?php } ?>
        <form name="days-form" action="" method="POST">
            <label for="Date">Date:</label>
            <input name="dtfi" type="date" value="<?php echo date('Y-m-d'); ?>">
            <br>
	    <p>
	    <input type="submit" name="submit" value="Calculate">
        </form>
	<form method="post" action="http://ec2-3-22-166-110.us-east-2.compute.amazonaws.com/index.php">
	    <input type="submit" value="Return">
	</form>
    </body>
</html>
