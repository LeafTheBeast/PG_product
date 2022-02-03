<?php
include_once("style.php");
include_once("code.php");
$checking = $_GET["test_text"];
// do {
//   $counter = count($arr);
//   $counter++;
//   $arr[$counter] = $_POST["test_text"];
// } while (isset($_POST["test_text"]));
// if (!(isset($_GET["test_text"]))) {
//   $test = 'hello';
// } else {
//   $test = 'not hello';
// }
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
  <h1>Pierre Grönich</h1>
  <div>
    <form action="index.php" method="GET">
      <input type="text" name="test_text">
      <input type="submit">
    </form>
    <p><?php echo $_GET['test_text'] ?></p>
    <p><?php echo print_r($data) ?></p>
    <p><?php echo $data->kennzeichen ?></p>
  </div>
</body>

</html>
<?php

?>