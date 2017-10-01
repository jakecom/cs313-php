<?php
session_start();
if (isSet($_POST['item1']))
  $_SESSION['item1'] = $_POST['item1'];
if(isSet($_POST['item2']))
  $_SESSION['item2'] = $_POST['item2'];
if(isSet($_POST['item3']))
  $_SESSION['item3'] = $_POST['item3'];
?>

<html lang="en">
<head>
  <title>Shopaholics Anonymous</title>
  <meta charset="utf-8">
  <link href="prove03.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div id="wrapper">
  <h1> Shopaholics Anonymous</h1>
  <h1>This is your cart</h1>
  <form action="prove03_checkout.php" method="post">
    <span id="item"><b>Pocket Monsters:</b></span> <br>
    Quantity: <select id="item1" name="item1">
      <option value="<?php $_SESSION['item1']?>" selected><?php echo $_SESSION['item1'];?></option>
      <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br><br>
      <span id="item"><b>Mice:</b></span><br>
      Quantity: <select id="item2" name="item2">
      <option value="<?php $_SESSION['item2']?>" selected><?php echo $_SESSION['item2'];?></option>
      <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select><br><br>
        <span id="item"><b>Diamond Rings:</b><i>(Unless polygamy is back there should be 1 at most)</i></span><br>
        Quantity: <select id="item2" name="item3">
          <option value="<?php $_SESSION['item3']?>" selected><?php echo $_SESSION['item3'];?></option>
          <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select><br><br>
                    -------<a href="prove03.html">Shop Some More!</a>-------<br><br><br><br>
          <span id="infor"><b>When you are ready, go ahead and give me all of your information:</b><br><br>
          Address <br>
          <input type="text" name="address"><br>
          City <br>
          <input type="text" name="city"><br>
          State <br>
          <input type="text" name="state"><br>
          Zip <br>
          <input type="text" name="zip"><br> <br>
          <input type="submit" id="submitButton" name="placeOrder" value="Check Out"><br><br><br>
  </form>
</div>
</body>

</html>