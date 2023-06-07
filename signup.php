<?php
require "header.php";
?>

<main>
    <div class="signup-container">
        <h1 class="signup-title">Sign up</h1>
        <form class="form-signup" action="includes/signup.inc.php" method="post">
            <div>
                <input type="text" name="uid" placeholder="Username">
            </div>
            <div>
                <input type="text" name="mail" placeholder="E-mail">
            </div>
            <div>
                <input type="password" name="pwd" placeholder="Password">
            </div>
            <div>
                <input type="password" name="pwd-repeat" placeholder="Repeat password">
            </div>
            <button type="submit" name="signup-submit">Sign up</button>
        </form>
    </div>
</main>



<?php
require "footer.php";
?>