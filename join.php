<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php");?>
    <title>The Society of Typographic Arts</title>
</head>
<body>
<?php $title = "Join"; include("components/nav.php");?>
<div class="blackBackground joinContainer">
    <div class="container">
        <div class="row">
            <div class="twelve columns joinOption joinOptionStudent">
                <h4>Student Member</h4>
                <h5>$12.00</h5>
                <p>Subscription period: 1 year No recurring payments</p>
            </div>
        </div>
        <div class="row">
            <div class="four columns joinOption">
                <h4>Corporate</h4>
                <h5>$250.00</h5>
                <p>Subscription period: 1 year No recurring payments</p>
            </div>
            <div class="four columns joinOption">
                <h4>Freelance</h4>
                <h5>$10.00</h5>
                <p>Subscription period: Unlimited</p>
            </div>
            <div class="four columns joinOption">
                <h4>Member</h4>
                <h5>$90.00</h5>
                <p>Subscription period: 1 year No recurring payments</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="twelve columns joinFAQ">
                <h4><span class="whiteText">Are membership dues paid annually or one-time only?</span>

                Professional and Corporate Memberships automatically renew annually, Freelance Memberships automatically renew monthly and Student Memberships have to be manually renewed every school year. You can cancel at any time. Student memberships must be renewed manually after the membership ends. Membership dues are nonrefundable.
                <br>
                    <span class="whiteText">Can I switch membership plans?</span>

                To downgrade or upgrade your membership, you will need so after a membership has ended. For membership plans that automatically renew, you will need to cancel your current membership, then select a different plan when filling out the renewal form.
                <br>
                    <span class="whiteText">How do I cancel my membership?</span>

                Canceling your membership is easy and convenient. You can do it directly within your account manager. No questions asked.
                <br>
                    <span class="whiteText">I cancelled my membership. Now what?</span>

                You will continue to receive member benefits until the membership has gone full term. Canceling essentially tells our system that you would not like to be billed again for your current membership. Membership dues are nonrefundable.
                <br>
                    <span class="whiteText">My company wants to write a check for our Corporate Membership.</span>

                Sure, no problem. We’re excited to have you join our family. Please contact our Membership Director and we'll get you set in no time.
                <br>
                    <span class="whiteText">Can I update my credit card to keep my membership up to date?</span>

                You can update all of your billing information from the account menu in the top-right part of the screen after logging into you account.
                <br>
                    <span class="whiteText">Now that I’m a member. How can I get involved or help?</span>

                We’re always looking for help in different areas. Please contact our Membership Director to see what's available.
                <br>
                    <span class="whiteText">I have an STA account, but I don't know my password.</span>

                You can reset your password by following the instructions here.
                </h4>


            </div>
        </div>
    </div>
    <div class="bottomMargin"></div>
    <div class="plusDivider"></div>
</div>

<div class="grayBackground">
    <?php include("components/sponsors.php");?>
</div>

<div class="blackBackground">
    <?php include("components/footer.php");?>
</div>
<?php include("components/scripts.php");?>

</body>
</html>
