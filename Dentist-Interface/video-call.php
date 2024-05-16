<?php include '../includes/header-links.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/aside.php'; ?>
<section class="indexSection1 video">
`   <div class="videoCall">
        <div class="video_call_option">
            <div class="record">
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck1">
                        <i class="fa-solid fa-microphone-slash"></i>
                    </label>
                    <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck2">
                    <i class="fa-solid fa-video"></i>
                    </label>
                    <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck3">
                    <i class="fa-solid fa-volume-high"></i>
                    </label>
                    <a href="" class="btn hang_up" data-bs-toggle="modal" data-bs-target="#callnote_Modal">
                        <img src="../assets/images/hang-up.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <a href="javascript:void(0)" class="video_caller">
            <img src="../assets/images/user.png" alt="">
        </a>
    </div>
</section>
<?php include '../includes/footer.php'; ?>