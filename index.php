<?php
include('key.php');
$lol = '';
$cleanQuery = urlencode($trikyas);
$url = 'http://www.google.com/search?q='.$cleanQuery;
$scrape = file_get_contents($url);
$trikyas = ' ';
$trikyas = isset($_POST['search']) ? $_POST['search'] : '';
$trikyas = !empty($_POST['search']) ? $_POST['search'] : '';
if(isset($_POST['submit'])) {
  // $lol = 'monitored input is: '.$trikyas; // <- FOR TESTING ––– TRIKYAS
  echo $scrape;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Search | Trikyas</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
  </head>
  <body>
  <script src="index.js"></script>
  <h1>What's really going on here?</h1>
  <!-- START test -->
    <?php echo "<h3>" . $lol . "</h3>"; ?>
  <!-- END test -->
    <form method="post" action="index.php">
      <label>Regular Search Engine</label>
      <input name="search" type="text" size="10" value="→ "/>
      <input name="submit" type="submit" value="go" />
    </form>
    <main>

      <!-- START test -->
      <!-- <div class="s"></div> -->
      <!-- END test -->
    </main>
  </body>
</html>
