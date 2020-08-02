// menu script.
$ (document).ready(function() {
	var fixHeight = function() {
		$ (".navbar-nav").css(
			"max-height",
			document.documentElement.clientHeight - 5000
		);
	};
	
		fixHeight();
		
	$(window).resize(function() {
		fixHeight();
	});
	
	$(".navbar .navbar-toggler").on("click", function() {
		fixHeight();
	});			

	$ (".navbar-toggler, .overlay").on("click", function() {
		$ (".mobileMenu, .overlay").toggleClass("open");
		console.log("clicked");
	});
});


// Lang Select
$(function() {
  if ($('.select-options ul li').hasClass('selected')) {
    $('.select .input').text($('.select-options li.selected > span:first-child').text());
  } else {
    $('.select .input').text($('.select-options li:first-child > span:first-child').text());
  }
  $('.select').click(function() {
    $('.select-options').toggleClass('visible');
  });
  $('.select-options li').click(function() {
    $('.selected').removeClass('selected');
    $(this).addClass('selected');
    $('.select .input').text($(this).find('span:first-child').text());
  });
})


// Owl Related
$('.bnnr-owl').owlCarousel({
	loop:true,
	margin:0,
	nav:true,
	dots:false,
	navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
	autoplay:true,
	autoplayTimeout:3000,
	autoplayHoverPause:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:3
		},
		1000:{
			items:5
		}
	}
})

// Owl Latest Jobs
$('.jobs-owl').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	dots:false,
	navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
	responsive:{
		0:{
			items:1
		},
		600:{
			items:1
		},
		1000:{
			items:2
		},
		1200:{
			items:3
		}	
	}
})


// Owl Related
$('.blog-owl').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
	responsive:{
		0:{
			items:1
		},
		600:{
			items:2
		},
		1000:{
			items:3
		},
		1200:{
			items:4
		}		
	}
})


// Owl widget
$('.widget-owl').owlCarousel({
	loop:true,
	margin:10,
	nav:true,
	navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
	responsive:{
		0:{
			items:1
		},
		600:{
			items:4
		},
		1000:{
			items:7
		}
	}
})
 
 
//Get the button:
mybutton = document.getElementById("pageup");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

//dropdown tag skills
$('.ui.dropdown')
  .dropdown()
;

//Sem UI Checkbox
$('.ui.checkbox')
  .checkbox()
;

// Product Grid 1
$(document).ready(function() {
	$('#list').click(function(event){event.preventDefault();$('#products .lg-item').addClass('list-group-item1');});
	$('#grid').click(function(event){event.preventDefault();$('#products .lg-item').removeClass('list-group-item1');$('#products .lg-item').addClass('grid-group-item1');});
});

// Product Grid 2
$(document).ready(function() {
	$('#list').click(function(event){event.preventDefault();$('#products_1 .lg-item').addClass('list-group-item1');});
	$('#grid').click(function(event){event.preventDefault();$('#products_1 .lg-item').removeClass('list-group-item1');$('#products_1 .lg-item').addClass('grid-group-item1');});
});

// Product Grid 2
$(document).ready(function() {
	$('#list').click(function(event){event.preventDefault();$('#products_2 .lg-item').addClass('list-group-item1');});
	$('#grid').click(function(event){event.preventDefault();$('#products_2 .lg-item').removeClass('list-group-item1');$('#products_2 .lg-item').addClass('grid-group-item1');});
});

