<?php include '../includes/header-links.php'; ?>
<section class="role-selection">
	<div class="container">
		<div class="loginSect_logo mb-3">
			<img src="../assets/images/role.png" alt="">
        </div>
		<form class="loginForm">
            <h1 class="loginHeading mb-5">Login</h1>
            <div class="selection-btns">
                <div class="logInput mb-3">
					<span class="absIcon"><img src="../assets/images/call-end.png" alt=""></span>
                    <div class="email">
                        <label for="">Phone Number</label>
                        <input type="number" placeholder="+1 223 456 4567">
                    </div>
				</div>
                <a href="otp.php" class="cta red">Login</a>
            </div>
	    </form>
	</div>
</section>
<?php include '../includes/footer.php';?>


