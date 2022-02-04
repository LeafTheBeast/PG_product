<?php
include_once "style.php";
include_once "code.php";

?>

</style>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Project X</h1>
  <div>
    <form action="index.php" method="GET">
      <input type="text" name="test_text">
      <input type="submit">
    </form>
    <p><?php echo $_GET['test_text'] ?></p>
    <p><?php  ?></p>
    <p><?php foreach ($test as $row) {
          echo  $row["Kennzeichen"] . "\n";
        } ?></p>
  </div>
</body>

</html>
<?php

?>