
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pixel Art</title>
  <link rel="stylesheet" href="main.css">
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
  <?php include('navigation.php'); ?>
  <?php echo $_SERVER['HTTP_REFERER']."<br>"; ?>
  <?php require("pixelart.php"); ?>
  
  <script>
    function handleImageClick(event) {
      $.ajax({
        url: "data.php"
      }).done(function(response) {
        $('table').html(response)
      })
    }
  </script>
</body>
</html>
