<?php include '../includes/header-links.php'; ?>
<?php include '../includes/header.php';?>
<?php include '../includes/aside.php';?>
<section class="indexSection1 profile_wrapper">
    <p class="title mb-3">Appointments</p>
    <div class="row details">
        <a href="video-call.php" class="phone"><img src="../assets/images/call.png" alt=""></a>
        <div class="qr_scan">
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                    <label for="imageUpload" class="xy-center">
                        <img src="../assets/images/edit.png" alt="img">
                    </label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url('../assets/images/Capture.png');">
                    </div>
                </div>
            </div>
            <p class="title green">Steve Smith</p>
            <span>
                <img src="../assets/images/star.png" alt="">
                <img src="../assets/images/star.png" alt="">
                <img src="../assets/images/star.png" alt="">
                <img src="../assets/images/star.png" alt="">
                <img src="../assets/images/star.png" alt="">
            </span>
            <div class="chat_box about mt-3">
                <div class="profile_details">
                    <ul>
                        <li class="last">
                            <p class="title">Dr Steve Smith</p>
                            <p class="title">Charges</p>
                        </li>
                        <li class="last">
                            <p class="small_para">Lorem ipsum</p>
                            <p class="small_para">$10</p>
                        </li>
                        <li class="last">
                            <p class="small_para"></p>
                            <p class="small_para">$100</p>
                        </li>
                        <li class="last">
                            <p class="title">Time</p>
                            <p class="small_para">9:00Am - 12:00Pm</p>
                        </li>
                        <li class="">
                            <p class="title">Date</p>
                            <p class="small_para">Sep 02, 2023</p>
                        </li>
                        <li class="last">
                            <p class="title">Total</p>
                            <p class="title">&110</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="chat_box about mt-3">
                <p class="title">Sessions Detail</p>
                <table class="table table-group-divider mt-3">
                    <thead>
                        <tr class="table-bordered">
                            <th class="green table-borderless" scope="col">Day</th>
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
            <a href="#" class="cta2 mt-3" data-bs-toggle="modal" data-bs-target="#assign_Modal">Assign To</a>



        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>