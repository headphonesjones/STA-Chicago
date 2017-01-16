<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php");?>
    <title>The Society of Typographic Arts</title>
</head>
<body>
<?php $title = "Membership"; include("components/nav.php");?>
<div class="blackBackground membershipNavContainer">
    <?php include("components/membership/membership-nav.php");?>
</div>
<div class="whiteBackground">
    <div class="container">
        <div class="row">
            <ul class="tab-nav">
                <li>
                    <a class="button active" href="#profile">Profile</a>
                </li>
                <li>
                    <a class="button" href="#updatepassword">Update Password</a>
                </li>
                <li>
                    <a class="button" href="#billinginformation">Billing Information</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <div class="container">
                        <div class="row">
                            <div class="eight columns">
                                <div class="memberPhoto"></div>
                            </div>
                            <div class="four columns">
                                <a class="secondaryButton changePhotoButton" href="#">Change Photo</a>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="twelve columns">
                                <p class="smallTitle">My Profile</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="six columns">
                                <input class="u-full-width memberInputs" type="text" placeholder="Name" id="memberNameInput">
                            </div>
                            <div class="six columns">
                                <input class="u-full-width memberInputs" type="email" placeholder="test@mailbox.com" id="memberEmailInput">
                            </div>
                        </div>
                        <div class="row">
                            <div class="six columns">
                                <input class="u-full-width memberInputs" type="text" placeholder="Website" id="memberWebsiteInput">
                            </div>
                            <div class="six columns">
                                <input class="u-full-width memberInputs" type="text" placeholder="Location / City" id="memberLocationInput">
                            </div>
                        </div>
                        <div class="row">
                            <div class="six columns">
                                <input class="u-full-width memberInputs" type="text" placeholder="Company Name" id="memberCompanyInput">
                            </div>
                            <div class="six columns">
                                <input class="u-full-width memberInputs" type="text" placeholder="Role" id="memberRoleInput">
                            </div>
                        </div>
                        <div class="row">
                            <div class="twelve columns">
                                <input class="u-full-width memberInputs" type="text" placeholder="Skills" id="memberSkillsInput">
                            </div>
                        </div>
                        <div class="row">
                            <div class="three columns">
                                <p>Available for work</p>
                            </div>
                            <div class="nine columns">
                                <label class="switch">
                                  <input type="checkbox">
                                  <div class="slider round"></div>
                                </label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="twelve columns">
                                <p class="smallTitle">SOCIAL LINKS</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label class="switch margin">
                                    <input type="checkbox">
                                    <div class="slider round"></div>
                                </label>
                            </div>
                            <div class="ten columns">
                                <input class="u-full-width memberInputs" type="text" placeholder="Twitter">
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label class="switch margin">
                                    <input type="checkbox">
                                    <div class="slider round"></div>
                                </label>
                            </div>
                            <div class="ten columns">
                                <input class="u-full-width memberInputs" type="text" placeholder="Dribbble">
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label class="switch margin">
                                    <input type="checkbox">
                                    <div class="slider round"></div>
                                </label>
                            </div>
                            <div class="ten columns">
                                <input class="u-full-width memberInputs" type="text" placeholder="Blog">
                            </div>
                        </div>
                        <div class="row save">
                            <div class="twelve columns">
                                <a class="secondaryButton" href="#">Save</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="updatepassword">
                    <div class="row">
                        <div class="twelve columns">
                            <input class="u-full-width memberInputs" type="password" placeholder="Old Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve columns">
                            <input class="u-full-width memberInputs" type="password" placeholder="New Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve columns">
                            <input class="u-full-width memberInputs" type="password" placeholder="Confirm New Password">
                        </div>
                    </div>
                    <div class="row save">
                        <div class="twelve columns center">
                            <a class="secondaryButton" href="#">Change</a>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="billinginformation">
                    <div class="row">
                        <div class="eight columns">
                            <p class="smallTitle">Your Current Plan</p>
                            <h5>Professional<br>Membership</h5>
                            <p>automatically renew December 20, 2016</p>
                        </div>
                        <div class="four columns center">
                            <a class="secondaryButton upgrade" href="#">Upgrade Plan</a>
                            <a class="cancel" href="#">CANCEL YOUR MEMBERSHIP</a>
                        </div>
                    </div>
                    <hr class="margin"/>
                    <div class="row">
                        <div class="twelve columns">
                            <p class="smallTitle">Credit Card Information</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="eight columns">
                            <input class="u-full-width memberInputs" type="password" placeholder="Confirm New Password">
                        </div>
                        <div class="four columns center">
                            <a class="secondaryButton" href="#">Change Card</a>
                        </div>
                    </div>
                    <hr class="margin"/>
                    <div class="row">
                        <div class="twelve columns">
                            <p class="smallTitle">Invoices</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="four columns">
                            <p>Feb 29, 2016</p>
                        </div>
                        <div class="four columns">
                            <p>Professional</p>
                        </div>
                        <div class="four columns">
                            <p>$90</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blackBackground">
    <?php include("components/footer.php");?>
</div>
<?php include("components/scripts.php");?>
</body>
</html>
