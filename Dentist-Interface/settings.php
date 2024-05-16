<?php include '../includes/header-links.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/aside.php'; ?>
<section class="indexSection1 password_section">
    <p class="title mb-3">Settings</p>
    <div class="row">
        <div class="col-12 col-lg-5 col-md-7 col-sm-10">
            <form>
                <a href="payment.php" class="logInput mb-3">
                    <div class="email">
                        <p class="green">Payment Settings</p>
                        <span><img src="../assets/images/credit-card.png" alt=""></span>
                    </div>
                </a>
                <a href="terms-&-conditions.php" class="logInput mb-3">
                    <div class="email">
                        <p class="green">Terms & Condition</p>
                        <span><img src="../assets/images/setting-terms.png" alt=""></span>
                    </div>
                </a>
                <a href="privacy-policy.php" class="logInput mb-3">
                    <div class="email">
                        <p class="green">Privacy Policy</p>
                        <span><img src="../assets/images/privacy-policy.png" alt=""></span>
                    </div>
                </a>
                <a href="" class="logInput mb-3" data-bs-toggle="modal" data-bs-target="#feedback_Modal">
                    <div class="email">
                        <p class="green">Feedback</p>
                        <span><img src="../assets/images/message.png" alt=""></span>
                    </div>
                </a>
                <a href="" class="logInput mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2" checked>
                        <label class="green form-check-label" for="flexSwitchCheckDefault2">Notification</label>
                    </div>
                </a>
            </form>
        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>