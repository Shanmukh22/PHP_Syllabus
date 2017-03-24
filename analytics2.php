<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php require_once("header.php");
    //check for opt 1 to 3 (opt's are the various analytics questions)
    //if(isset($_POST['opt'])) $opt = $_POST['opt'];
    ?>
<H2>Analytics</H2>
<div id="wrapper">
<p>This page will provide stats on the data.(Shanmukh, Jim)</p>

<!-- Login to the database -->

<?php
  try{
    $db = new PDO('mysql:host=localhost;dbname=5717F16dbg02', '5717g02', '8720');
    echo "connection success \n";
        }catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
?>
<!-- User picks a question -->
<form action="analytics.php" method="post">
&nbsp<input type="radio" name="opt" value="1">How many responses</input>&nbsp
&nbsp<input type="radio" name="opt" value="2">Another Question</input>&nbsp
&nbsp<input type="radio" name="opt" value="3">One more question</input>&nbsp
&nbsp<input type="submit"></input>
</form>
/*
 <?php
 if (isset($_SESSION['username']))
 {
 echo "<p>You are logged in and can access this content.</p>";
 
 //Put 3 if statements here for each opt#
 //query the database inside each if statement for each opt. echo results to the page.
 //example: if(opt=1){count all entries in the database}
 //echo $opt.'</br>';
 }
 else
 {
 echo "<p>You are not signed in and cannot view this content.</br>";
 echo "<a href='login.php'>Sign In</a></p>";
 }
 ?>
 */
</div>
</body>
</html>
