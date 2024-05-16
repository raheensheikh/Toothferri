<?php include '../includes/header-links.php'; ?>
<section class="role-selection">
	<div class="container">
		<div class="loginSect_logo mb-3">
			<img src="../assets/images/role.png" alt="">
        </div>
		<form class="loginForm verification">
            <h1 class="loginHeading mb-5">OTP Verification</h1>
            <div method="get" class="digit-group pb-3" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                <input class="inputItemMain" type="text" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1" placeholder="-">
                <input class="inputItemMain" type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" maxlength="1" placeholder="-">
                <input class="inputItemMain" type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-1" maxlength="1" placeholder="-">
                <input class="inputItemMain" type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-1" maxlength="1" placeholder="-">
                <input class="inputItemMain" type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-1" maxlength="1" placeholder="-">
                <input class="inputItemMain" type="text" id="digit-6" name="digit-6" data-next="digit-7" data-previous="digit-1" maxlength="1" placeholder="-">
            </div>
            <div class="signin-links">
                <p>Code didn't received?<a href="#!" class="login_links">Resend Code</a></p>
            </div>
            <div class="item">
                <h2 class="green">00:<span>0</span></h2>
                <svg width="160" height="160" xmlns="http://www.w3.org/2000/svg">
                    <circle id="circle" class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="6" stroke="#007A5E" fill="none" />
                </svg>
            </div>
            <div class="selection-btns">
                <a href="create-profile.php" class="cta red mt-4">Continue</a>
            </div>
	    </form>
	</div>
</section>
<?php include '../includes/footer.php';?>


