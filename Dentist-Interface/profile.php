<?php include '../includes/header-links.php'; ?>
<?php include '../includes/header.php';?>
<?php include '../includes/aside.php';?>
<section class="indexSection1 profile_wrapper">
    <p class="title mb-3">Profile</p>
    <a href="" class="code_scan" data-bs-toggle="modal" data-bs-target="#share_Modal"><img src="../assets/images/profile-qr.png" alt=""></a>
    <div class="row">
        <div class="qr_scan">
            <div class="profile_uploaded">
                <div class="profile">
                    <img src="../assets/images/capture.png" alt="img">
                </div>
                <a href="edit-profile.php" class="edit_profile"><img src="../assets/images/edit.png" alt="img"></a>
            </div>
            <p class="title green">Dr. John Lee</p>
            <p class="small_para">Dentist</p>
            <span>
                <img src="../assets/images/star.png" alt="">
                <img src="../assets/images/star.png" alt="">
                <img src="../assets/images/star.png" alt="">
                <img src="../assets/images/star.png" alt="">
                <img src="../assets/images/star.png" alt="">
            </span>
            <div class="duration_box mt-3">
                <div class="time">
                    <p class="small_para">Response Time</p>
                    <p class="green">15Mins</p>
                </div>
                <div class="time">
                    <p class="small_para">Experience</p>
                    <p class="green">10 Years</p>
                </div>
                <div class="time last">
                    <p class="small_para">Minimum Charges</p>
                    <p class="green">$50</p>
                </div>
            </div>
            <div class="appointment_tabs mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="false">Info & Reviews</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <div class="row">
                            <div class="chat_box about mt-3">
                                <p class="title">About</p>
                                <p class="small_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur pretium, augue id finibus efficitur, nisi risus elementum mi, id ultrices ex leo</p>
                            </div>
                            <div class="chat_box about mt-3">
                                <p class="title">Avalability</p>
                                <table class="table  table-group-divider mt-3">
                                    <thead>
                                        <tr>
                                            <th class="green" scope="col">Day</th>
                                            <th class="green" scope="col">Date</th>
                                            <th class="green" scope="col">Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="small_para">Friday</td>
                                            <td class="small_para">23-12-2022</td>
                                            <td class="small_para">05:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="small_para">Friday</td>
                                            <td class="small_para">23-12-2022</td>
                                            <td class="small_para">05:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="small_para">Friday</td>
                                            <td class="small_para">23-12-2022</td>
                                            <td class="small_para">05:00 PM</td>
                                        </tr>
                                        <tr>
                                            <td class="small_para">Friday</td>
                                            <td class="small_para">23-12-2022</td>
                                            <td class="small_para">05:00 PM</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="chat_box about mt-3">
                                <p class="title">Specialities</p>
                                <p class="small_para">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur pretium, augue id finibus efficitur, nisi risus elementum mi, id ultrices ex leo</p>
                            </div>
                            <div class="chat_box about mt-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault3" checked>
                                    <label class="title form-check-label" for="flexSwitchCheckDefault3">Looking For Job?</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <div class="row mt-4">
                            <div class="chat_box about mb-3">
                                <p class="title mb-2">Certificates</p>
                                <div class="certificates-img">
                                    <img src="../assets/images/certificate-2.png" alt="">
                                    <img src="../assets/images/certificate-1.png" alt="">
                                    <img src="../assets/images/certificate-1.png" alt="">
                                </div>  
                            </div>
                            <div class="review-heading">
                                <p class="title">Review</p>
                                <p class="blue_title">Based on 20 Reviews</p>
                            </div>
                            <div class="profile_info about mt-3">
                                <div class="img-sec">
                                    <img src="../assets/images/doctor.png" alt="">
                                    <div class="name">
                                        <p class="title">Steve Smith</p>
                                        <p class="small_para">MBBS. ND-DNM</p>
                                    </div>
                                </div>
                                <div class="rattings">
                                    <span>
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                    </span>
                                    <p class="small_para">4.5/5</p>
                                </div>
                            </div>
                            <div class="profile_info about mt-3">
                                <div class="img-sec">
                                    <img src="../assets/images/doctor.png" alt="">
                                    <div class="name">
                                        <p class="title">Steve Smith</p>
                                        <p class="small_para">MBBS. ND-DNM</p>
                                    </div>
                                </div>
                                <div class="rattings">
                                    <span>
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                    </span>
                                    <p class="small_para">4.5/5</p>
                                </div>
                            </div>
                            <div class="profile_info about mt-3">
                                <div class="img-sec">
                                    <img src="../assets/images/doctor.png" alt="">
                                    <div class="name">
                                        <p class="title">Steve Smith</p>
                                        <p class="small_para">MBBS. ND-DNM</p>
                                    </div>
                                </div>
                                <div class="rattings">
                                    <span>
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                        <img src="../assets/images/star.png" alt="">
                                    </span>
                                    <p class="small_para">4.5/5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>