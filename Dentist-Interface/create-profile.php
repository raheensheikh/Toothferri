<?php include '../includes/header-links.php'; ?>
<section class="role-selection create-profile">
    <div class="container">
        <form class="loginForm">
            <h1 class="loginHeading mb-5">Create Profile</h1>
            <div class="qr_scan">
                <div class="selection-btns">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                            <label for="imageUpload" class="xy-center">
                                <img src="../assets/images/edit.png" alt="img">
                            </label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url('../assets/images/background.png');">
                            </div>
                        </div>
                    </div>
                    <div class="scroll">
                        <div class="logInput mt-5 mb-3">
                            <div class="email">
                                <label for="" class="green">Full Name</label>
                                <input type="text" placeholder="John Smith">
                            </div>
                        </div>
                        <div class="logInput mb-3">
                            <div class="email">
                                <input type="number" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="create-select">
                            <select class="logInput mb-3" aria-label="Default select example">
                                <option value="0">Role</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="logInput mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Open To Work</label>
                            </div>
                        </div>
                        <div class="logInput mb-3">
                            <div class="email">
                                <input type="text" placeholder="Experience">
                            </div>
                        </div>
                        <div class="logInput mb-3">
                            <div class="email">
                                <input type="text" placeholder="Response Time">
                            </div>
                        </div>
                        <textarea class="textbox logInput mb-3" placeholder="About"></textarea>
                        <div class="logInput certificates mb-3">
                            <p class="green">Traning Certificates</p>
                            <div class="addProperty_image">
                                <div class="upload_box">
                                    <a href="javascript:void(0)">
                                        <img src="../assets/images/plus.png" alt="">
                                    </a>
                                </div>
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="file" class="upload-img form-control" name="images[]" multiple="">
                                </div>
                            </div>
                            <div class="img-thumbs img-thumbs-hidden img-preview"></div>
                        </div>
                        <div class="range-wrapper">
                            <p class="green mb-4">Hourly Charges</p>
                            <div id="slider-container">
                                <input type="range" id="range-slider" min="0" max="100" step="1" value="5">
                                <div id="circle">$<span id="circle-value">1500</span></div>
                            </div>
                            <div class="price_box">
                                <span class="green">$0</span><span class="green">$100</span>
                            </div>
                        </div>
                        <div class="logInput mt-3 mb-3">
                            <div class="email">
                                <input type="text" placeholder="Cancellation Fee">
                            </div>
                        </div>
                        <div class="selection-btns">
                            <a href="avaibility.php"  data-bs-toggle="modal" data-bs-target="#lead_Modal" class="cta red">Continue</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php include '../includes/footer.php'; ?>