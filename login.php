<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php");?>
    <title>About STA</title>
</head>
<body>
<?php $title = "Login"; include("components/nav.php");?>
<div class="blackBackground loginContainer textCenter">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <p class="smallTitle">Please Login to Continue</p>
                <form>
                    <label for="loginEmail">Email</label>
                    <input type="text" class="mainInput loginInput" placeholder="Email" id="loginEmail" name="loginEmail">
                    <label for="loginPassword">Password</label>
                    <input type="password" class="mainInput loginInput" placeholder="Password" id="loginPassword" name="loginPassword">
                    <br>
                    <input type="checkbox" name="rememberMe" id="rememberMe">
                    <label for="rememberMe" id="rememberMeLabel">Remember me</label>
                    <br>
                    <a href="my-account.php">
                        <input type="submit" value="Login" id="loginButton" class="primaryButton">
                    </a>
                </form>
            </div>
        </div>
    </div>
    <div class="plusDivider"></div>
</div>
<div class="grayBackground">
    <?php include("components/sponsors.php");?>
</div>
<div class="blackBackground">
    <?php include("components/footer.php");?>
</div>
<?php include("components/scripts.php");?>
<script>
    $("#loginButton").click(function (e) {
       e.preventDefault();
        window.location.href = "my-account.php";
    });
</script>