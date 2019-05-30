<?php
include('key.php');
$lol = '';
$cleanQuery = urlencode($abc);
$url = 'http://www.google.com/search?q='.$cleanQuery;
$scrape = file_get_contents($url);
$abc = ' ';
$abc = isset($_POST['search']) ? $_POST['search'] : '';
$abc = !empty($_POST['search']) ? $_POST['search'] : '';
if(isset($_POST['submit'])) {
  // $lol = "monitored input is: ".$abc; // <- FOR TESTING ––– TRIKYAS
  echo $scrape;

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    body {
      margin: 0;
      padding: 0;
      font-size: 16px;
    }
    h1, h3 {
      text-align: center;
    }
    form {
      width: 50vh;
      height: 10vh;
      margin: 0 auto;
    }
    input[type="text"],
    input[type="text"]:focus{
      outline: none;
      width: 160px;
    }
    input[type="submit"] {
      width: 50px;
      height: 20px;
      border: none;
      border-radius: 0;
      margin-top: -1vh;
      background-color: lightblue;
    }
    input[type="submit"]:hover {
      background-color: lightgreen;
    }
    /*  */

    main {
      height: 80vh;
      width: 100%;
      background: #000;
    }
  </style>
  </head>
  <body>
  <script src="index.js"></script>
  <h1>What's really on your mind.</h1>
  <!-- Below was for testing ONLY! ~TRIKYAS -->
  <?php echo "<h3>" . $lol . "</h3>"; ?>
    <form method="post" action="index.php">
      <label>Regular Search Engine</label>
      <input name="search" type="text" size="10" value="→ "/>
      <input name="submit" type="submit" value="go" />
    </form>
    <main>
      <div class="s"></div>


    </main>
  </body>
</html>
