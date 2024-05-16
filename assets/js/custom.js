// OTP TIMER
var time = 60;
var initialOffset = '440';
var i = 1


/* Need initial run as interval hasn't yet occured... */
var interval = setInterval(function() {
	$('h2 span	').text(i);
	if (i == time) {  	
		clearInterval(interval);
		return;
	}
	$('.circle_animation').css('stroke-dashoffset', initialOffset-((i+1)*(initialOffset/time)));
	i++;  
}, 1000);


/// OTP INPUTS START
$('.digit-group').find('input').each(function() {
  $(this).attr('maxlength', 1);
  $(this).on('keyup', function(e) {
    var parent = $($(this).parent());
  
    if(e.keyCode === 8 || e.keyCode === 37) {
      var prev = parent.find('input#' + $(this).data('previous'));
  
      if(prev.length) {
        $(prev).select();
      }
    } else if((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
      var next = parent.find('input#' + $(this).data('next'));
  
      if(next.length) {
        $(next).select();
      } else {
        if(parent.data('autosubmit')) {
          parent.submit();
        }
      }
    }
  });
  });
  /// OTP INPUTS END



function increment(element) {
  var inputElement = element.parentNode.querySelector('input[type="number"]');
  inputElement.value = parseInt(inputElement.value, 10) + 1;
}

function decrement(element) {
  var inputElement = element.parentNode.querySelector('input[type="number"]');
  var currentValue = parseInt(inputElement.value, 10);
  if (currentValue > 0) {
      inputElement.value = currentValue - 1;
  }
}


document.addEventListener('DOMContentLoaded', function () {
  const carImgContainers = document.querySelectorAll('.car_img');

  carImgContainers.forEach(function (carImgContainer) {
      const carImg = carImgContainer.querySelector('img');

      carImgContainer.addEventListener('mousemove', function (e) {
          const mouseX = e.clientX;
          const mouseY = e.clientY;

          // Increase the rotation speed by changing the values (e.g., * 0.01)
          const rotateX = (mouseY - carImgContainer.offsetTop) * 0.02;
          const rotateY = (mouseX - carImgContainer.offsetLeft) * 0.02;

          carImg.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(50px)`;
      });

      carImgContainer.addEventListener('mouseleave', function () {
          carImg.style.transform = 'rotateX(0) rotateY(0) translateZ(0)';
      });
  });
});

$(document).ready(function () {
  var currentPageUrl = window.location.href;

  $(".all_navLinks a").each(function () {
      var linkUrl = $(this).attr("href");

      if (currentPageUrl.indexOf(linkUrl) !== -1) {
          $(this).addClass("active");
      }
  });
});

function toggleSidebar() {
  var sidebar = document.querySelector('.sideBar');
  var aside = document.querySelector('.aside');
  var headerSection = document.querySelector('.headerSection');
  var contentsection = document.querySelector('.indexSection1');

  aside.classList.toggle('active');
  headerSection.classList.toggle('active');
  contentsection.classList.toggle('active');
}

function toggleUserProfile() {
  var userProfileDetail = document.querySelector('.User_profiledetail');

  userProfileDetail.classList.toggle('active');

  if (userProfileDetail.classList.contains('active')) {
      // Add a click event listener to close the div when clicking outside of it
      document.addEventListener('click', closeUserProfileOnClickOutside);
  } else {
      // Remove the click event listener when the div is closed
      document.removeEventListener('click', closeUserProfileOnClickOutside);
  }
}

function closeUserProfileOnClickOutside(event) {
  var userProfileDetail = document.querySelector('.User_profiledetail');
  var userSect = document.querySelector('.userSect');

  if (!userProfileDetail.contains(event.target) && !userSect.contains(event.target)) {
      userProfileDetail.classList.remove('active');
      document.removeEventListener('click', closeUserProfileOnClickOutside);
  }
}

// Splash Screen Js
document.addEventListener("DOMContentLoaded", function () {
  // Simulate a delay (you can replace this with actual loading logic)
  setTimeout(function () {
      // Hide the splash screen
      document.getElementById("splash-screen").style.display = "none";
      // Show the main content
      document.getElementById("content").style.display = "block";
  }, 3000); // Adjust the duration as needed (in milliseconds)
});





//Range
$(function() {
  var $document   = $(document),
      $inputRange = $('input[type="range"]');
  
  // Example functionality to demonstrate a value feedback
  function valueOutput(element) {
      var value = element.value,
          output = element.parentNode.getElementsByTagName('output')[0];
      output.innerHTML = value;
  }
  for (var i = $inputRange.length - 1; i >= 0; i--) {
      valueOutput($inputRange[i]);
  };
  $document.on('input', 'input[type="range"]', function(e) {
      valueOutput(e.target);
  });
  // end
  
  // Example functionality to demonstrate disabled functionality
  $document .on('click', 'button[data-behaviour="toggle"]', function(e) {
    var $inputRange = $('input[type="range"]', e.target.parentNode);
    if ($inputRange[0].disabled) {
      $inputRange.prop("disabled", false);
    }
    else {
      $inputRange.prop("disabled", true);
    }
    
    $inputRange.rangeslider('update');
  });

  $inputRange.rangeslider({
    polyfill: false 
  });
});

// Multiple Images Selection Js

var imgUploads = document.querySelectorAll('.upload-img')
  , imgPreviews = document.querySelectorAll('.img-preview')
  , imgUploadForms = document.querySelectorAll('.form-upload')
  , totalFiles
  , previewTitle
  , previewTitleText
  , img;

imgUploads.forEach(function (imgUpload, index) {
  imgUpload.addEventListener('change', function (event) {
    previewImgs(event, index);
  }, true);
});

function previewImgs(event, index) {
  totalFiles = imgUploads[index].files.length;

  if (!!totalFiles) {
    imgPreviews[index].classList.remove('img-thumbs-hidden');
  }

  for (var i = 0; i < totalFiles; i++) {
    var wrapper = document.createElement('div');
    wrapper.classList.add('wrapper-thumb');
    var removeBtn = document.createElement("span");
    var nodeRemove = document.createTextNode('X');
    removeBtn.classList.add('remove-btn');
    removeBtn.appendChild(nodeRemove);
    img = document.createElement('img');
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add('img-preview-thumb');
    wrapper.appendChild(img);
    wrapper.appendChild(removeBtn);
    imgPreviews[index].appendChild(wrapper);

    removeBtn.addEventListener('click', function () {
      this.parentNode.remove();
    });
  }
}