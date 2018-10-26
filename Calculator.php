<!DOCTYPE html>
<html>
<style type="text/css">
    .display {
        height:200px; width:400px;
        margin:1px 42%;
        padding:10px;
        border:1px dodgerblue solid;
        text-align: left;
    }
    h2 {
        color: darkblue;
    }
</style>
<body>
<?php
$Yearly_Interest_Rate = "%";
$usd = "$";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Investment_Amount = $_POST["Investment_Amount"];
    $Yearly_Interest_Rate = $_POST["Yearly_Interest_Rate"];
    $Number_of_Years = $_POST["Number_of_Years"];
    $Future = $Investment_Amount * (1 + ($Yearly_Interest_Rate/100)) ** $Number_of_Years;
}
?>
<form method="post">
<div class="display">
    <h1>Future Value Calculator</h1>
    <div>
        <span>Investment Amount:
            <?php
            echo $Investment_Amount;
            ?>
        </span>
    </div>
    <div>
        <span>Yearly Interest Rate:
            <?php
            echo $Yearly_Interest_Rate;
            ?>
        </span>
    </div>
    <div>
        <span>Number Of Year:
            <?php
            echo $Number_of_Years;
            ?>
        </span>
    </div>
    <div>
        <span>Future Value:
            <?php
            echo $Future;
            ?>
        </span>
    </div>
</div>
</form>
</body>
</html>