<?php
include_once "header.php";
?>

<?php 
  include_once "includes/dbh.inc.php";


  
  $sql = 'SELECT fname FROM users WHERE id = ' . $_SESSION["userid"];
  $result = mysqli_query($conn, $sql);
  
  if ($result) {
      $row = mysqli_fetch_assoc($result);
      $fname = $row['fname'];
      
  } else {
      echo "Query failed.";
  }
?>

<div class="center-div" style="
 display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;">
    <div class="container text-center">
      <h1>Hi <?php echo $fname; ?>!</h1>
      <p>Welcome to your profile page</p>
      
    </div>
  </div>


<?php
   include_once "footer.php";
?>