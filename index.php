<html>
<title>AR WEB App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <style>
#x {

  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body>
<form method="get" action="index.php">
<div style = "margin: 10px">
    <input type="submit" class="btn btn-info" name="on"  id="x" value="ON" />
        <input type="submit" class="btn btn-info" name="off" id="x" value="OFF" />
        <input type="submit" class="btn btn-info" name="blink" id="x" value="Blink" />
        <input type="submit" class="btn btn-info" name="" id="x" value="Extra">
        </div>
</form>

<?php
    if(isset($_GET['off']))
        {
                        echo "LED is off";
                        shell_exec("gpio -g write 12 0");
        }
  if(isset($_GET['on']))
            {
                        echo "LED is on";
                        shell_exec("gpio -g mode 12 out");
                        shell_exec("gpio -g write 12 1");
            }
?>
   </body>
</html>
