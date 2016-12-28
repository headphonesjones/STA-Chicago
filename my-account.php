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
                <div class="four columns">
                    <li>
                        <a class="button active" href="#profile">Profile</a>
                    </li>
                </div>
                <div class="four columns">
                    <li>
                        <a class="button" href="#updatepassword">Update Password</a>
                    </li>
                </div>
                <div class="four columns">
                    <li>
                        <a class="button" href="#billinginformation">Billing Information</a>
                    </li>
                </div>
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
                        <div class="row">
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
                        <div class="row">
                            <div class="twelve columns">
                                <h3>SOCIAL LINKS</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label class="switch">
                                    <input type="checkbox">
                                    <div class="slider round"></div>
                                </label>
                            </div>
                            <div class="ten columns">
                                <input class="u-full-width memberInputs" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label class="switch">
                                    <input type="checkbox">
                                    <div class="slider round"></div>
                                </label>
                            </div>
                            <div class="ten columns">
                                <input class="u-full-width memberInputs" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                            </div>
                        </div>
                        <div class="row">
                            <div class="two columns">
                                <label class="switch">
                                    <input type="checkbox">
                                    <div class="slider round"></div>
                                </label>
                            </div>
                            <div class="ten columns">
                                <input class="u-full-width memberInputs" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                            </div>
                        </div>
                        <div class="row">
                            <div class="twelve columns">
                                <a class="button" href="#">Save</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="updatepassword">
                    <div class="row">
                        <div class="twelve columns">
                            <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve columns">
                            <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve columns">
                            <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve columns">
                            <a class="button" href="#">Change</a>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="billinginformation">...</div>
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
