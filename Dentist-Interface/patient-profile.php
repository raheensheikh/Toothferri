<?php include '../includes/header-links.php'; ?>
<?php include '../includes/header.php';?>
<?php include '../includes/aside.php';?>
<section class="indexSection1 profile_wrapper">
    <p class="title mb-3">Patient Profile</p>
    <a href="" class="code_scan" data-bs-toggle="modal" data-bs-target="#clip_share_Modal"><img src="../assets/images/profile-qr.png" alt=""></a>
    <div class="row">
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
            <div class="chat_box about mt-3">
                <p class="title small_para" style= "font-size : 22px; text-decoration : underline; " >Session Details</p>
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
                    </tbody>
                </table>
            </div>
            <a href="#" class="cta2 mt-3" data-bs-toggle="modal" data-bs-target="#session_Modal"><span><img src="../assets/images/call.png" alt=""></span> Start Session</a>

        </div>
    </div>
</section>
<?php include '../includes/footer.php'; ?>