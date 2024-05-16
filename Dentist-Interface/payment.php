<?php include '../includes/header-links.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/aside.php'; ?>
<section class="indexSection1 password_section">
    <p class="title mb-3">Payment</p>
    <div class="row">
        <div class="col-12 col-lg-5 col-md-8 col-sm-10">
            <form>
                <div class="logInput mb-3">
                    <div class="email">
                        <p><img src="../assets/images/jcb.png" alt=""> Payment Settings</p>
                        <span><img src="../assets/images/arrow-forward.png" alt=""></span>
                    </div>
                </div>
                <div class="expiry_date">
                    <div class="logInput mb-3">
                        <div class="email">
                            <span><img src="../assets/images/calendar.png" alt=""></span>
                            <input type="text" placeholder="Exp. Month">
                        </div>
                    </div>
                    <div class="logInput mb-3">
                        <div class="email">
                        <span><img src="../assets/images/calendar.png" alt=""></span>
                            <input type="text" placeholder="Exp. Year">
                        </div>
                    </div>
                </div>
                <div class="logInput mb-3">
                    <div class="email">
                    <span><img src="../assets/images/lock.png" alt=""></span>
                        <input type="text" placeholder="Exp. Month">
                    </div>
                </div>
                <a href="#" class="cta2 mb-3" data-bs-toggle="modal" data-bs-target="#transaction_Modal">Add</a>
                <div class="logInput card_id mb-3">
                    <span class="absIcon"><img src="../assets/images/jcb.png" alt=""></span>
                    <div class="email">
                        <label for="" class="green">Jason Hanks</label>
                        <input type="email" placeholder="4012888888881881">
                    </div>
                    <span><img src="../assets/images/arrow.png" alt=""></span>     
                </div>
                <div href="" class="logInput card_id mb-3">
					<span class="absIcon"><img src="../assets/images/paypal.png" alt=""></span>
                    <div class="email">
                        <label for="" class="green">Jason Hanks</label>
                        <input type="email" placeholder="4012888888881881">
                    </div>
                    <span><img src="../assets/images/arrow.png" alt=""></span>
                </div>
            </form>

        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>