<?php include '../includes/header-links.php'; ?>
<?php include '../includes/header.php';?>
<?php include '../includes/aside.php';?>
<section class="indexSection1 profile_wrapper">
    <p class="title mb-3">Patient Profile</p>
    <div class="row">
        <a href="" class="code_scan" data-bs-toggle="modal" data-bs-target="#clip_share_Modal"><img
                src="../assets/images/profile-qr.png" alt=""></a>
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
            <p class="title green">Patient Name</p>
            <p class="small_para">abcd.123@example.com</p>
            <p class="small_para">+1 - 123 - 456 7890</p>
            <a href="#" class="cta2 mt-3">Message</a>
            <div class="appointment_tabs mt-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                            type="button" role="tab" aria-controls="general" aria-selected="true">General</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule" type="button"
                            role="tab" aria-controls="info" aria-selected="false">Schedule</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <div class="row details">
                            <div class="chat_box about mt-3">
                                <div class="profile_details">
                                    <ul>
                                        <li class="last">
                                            <p class="title">Gender</p>
                                            <p class="small_para">Female</p>
                                        </li>
                                        <li class="last">
                                            <p class="title">Age</p>
                                            <p class="small_para">18</p>
                                        </li>
                                        <li class="last">
                                            <p class="title">Height</p>
                                            <p class="small_para">5Ft 4Inch</p>
                                        </li>
                                        <li class="last">
                                            <p class="title">Weight</p>
                                            <p class="small_para">130 Pounds</p>
                                        </li>
                                    </ul>
                                </div>
                                <p class="title mb-2" style="font-size:22px ; text-align : start; ">Previous History</p>
                                <p class="small_para" style="text-align : start;">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.Curabitur pretium, augue id finibus efficitur, nisi
                                    risus elementum mi, id ultrices ex leo</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                        <div class="row mt-4">
                            <div class="appointment_tabs details_tab mt-2">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="general2-tab" data-bs-toggle="tab"
                                            data-bs-target="#general2" type="button" role="tab" aria-controls="general2"
                                            aria-selected="true">Previous Sessions</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="schedule2-tab" data-bs-toggle="tab"
                                            data-bs-target="#schedule2" type="button" role="tab"
                                            aria-controls="schedule2" aria-selected="false">Current Schedule</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="general2" role="tabpanel"
                                        aria-labelledby="general2-tab">
                                        <div class="row details">
                                            <div class="chat_box about mt-3">
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
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="schedule2" role="tabpanel"
                                        aria-labelledby="schedule2-tab">
                                        <div class="row details">
                                            <div class="chat_box about mt-3">
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
                                        </div>
                                    </div>
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