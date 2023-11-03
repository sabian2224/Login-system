<?php
   include_once 'header.php';
?>


<div class="container" style="margin-top: 100px; margin-bottom: 200px;">
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-6">
      <div class="card">
        <div class="card-body">
          <h2 class="text-center">Log In</h2>
          <form action="includes/login.inc.php" method="post">
            <div class="mb-3">
              <input type="email" name="email" class="form-control" placeholder="Email..." required>
            </div>
            <div class="mb-3">
              <input type="password" name="pwd" class="form-control" placeholder="Password..." required>
            </div>
            <div class="text-center">
              <button type="submit" name="submit" class="btn btn-primary">Log In</button>
            </div>
          </form>
          <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
              echo "<p>Fill in all fields!</p>";
            } else if ($_GET['error'] == "wronglogin") {
              echo "<p>Incorrect login information!</p>";
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
   include_once 'footer.php';
?>
 