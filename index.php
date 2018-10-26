<!DOCTYPE  html>
<html>
<style type="text/css">
    .login {
        heigth:300px;
        width:320px;
        margin:0;
        padding:10px;
        border:1px #CCC solid;
    }
    .login input{
        padding:5px; margin:5px;
    }
</style>
<body>
<form method="post" action="Calculator.php" >
    <div class="login">
        <h2>Future Value Calculator</h2>
        <div>Investment Amount:<input type="text" size="30" name="Investment Amount" value="0"/></div>
        <div>Yearly Interest Rate:<input type="text" size="30" name="Yearly Interest Rate" value="0"/></div>
        <div>Number of Years:<input type="text" size="30" name="Number of Years" value="0"/></div>
        <div><input type="submit" value="Calculator"/></div>
    </div>
</form>
</body>
</html>