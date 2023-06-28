<?php
   include_once "header.php";
?>




<div class="container">
        <div class="signup-form" style="
            border: 2px solid grey;
            border-radius: 5px;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            background-color: #FFFFFF;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            ">
            <h2 class="text-center">Create an Account</h2>
            <p class="text-center"><a href="login.php">Already have an account? Log in</a></p>
            <form action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <label for="fname">First Name:</label>
                    <input required type="text" class="form-control" id="fname" name="fname" placeholder="First Name...">
                </div>
                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input required type="text" class="form-control" id="lname" name="lname" placeholder="Last Name...">
                </div>
                <div class="form-group">
                    <label for="bdate">Date of Birth:</label>
                    <input required type="date" class="form-control" id="bdate" name="bdate">
                </div>
                <div class="form-group">
                    <label>Sex:</label>
                    <div class="form-check">
                        <input required type="radio" class="form-check-input" name="sex" id="male" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input required type="radio" class="form-check-input" name="sex" id="female" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email...">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password...">
                </div>
                <div class="form-group">
                    <label for="pwdRepeat">Confirm Password:</label>
                    <input type="password" class="form-control" id="pwdRepeat" name="pwdRepeat" placeholder="Confirm Password...">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="submit">Save and Continue</button>
                </div>
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyinput") {
                        echo "<p class='text-danger'>Fill in all fields!</p>";
                    } else if ($_GET['error'] == "invalidemail") {
                        echo "<p class='text-danger'>Choose a proper email!</p>";
                    } else if ($_GET['error'] == "passwordsdontmatch") {
                        echo "<p class='text-danger'>Passwords don't match!</p>";
                    } else if ($_GET['error'] == "stmtfailed") {
                        echo "<p class='text-danger'>Something went wrong, try again!</p>";
                    } else if ($_GET['error'] == "none") {
                        echo "<p class='text-success'>Signed up successfully!</p>";
                    }
                }
                ?>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





<?php
   include_once 'footer.php';
?>
 
