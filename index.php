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
    <link rel="stylesheet" type="text/css" href="main.css" />
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
