$('.language').each(function () {
  $(this).find('> .select').on('click', function () {
    $(this).next().slideToggle();
  });
  $(this).find('.option').on('click', function () {
    $('.language > .select').html($(this).html()).next().slideUp();
  });
});




window.onload = function () {
    'use strict';
    /* prevent placeholder from sliding on input content */
    var inp = document.getElementsByTagName('input'),
        il = inp.length;

    while(--il) {
        inp[il].addEventListener('blur', function () {
            var t = this;
            (t.value.length > 0) ? t.classList.add('have-content') : t.classList.remove('have-content');
        });
    }

    /* trigger click event on checkbox when click on text */
    var i = 0,
        remember = document.getElementsByClassName("remember-me")[0],
        rememberCB = remember.getElementsByTagName("input")[0],
        rememberTxt = remember.getElementsByClassName("remember-me-txt")[0];
    
    rememberTxt.addEventListener('click', function () {
        i === 0 ? i = 1 : i = 0;
        if (i)
            rememberCB.checked = true;
        else
            rememberCB.checked = false;
    });
};


window.onload = function() {
  $('.button_container').click(function() {
    $('.button_container').toggleClass('active');
    $('.menu').toggleClass('open');
  });
};





(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});





//material contact form animation
$('.contact-form').find('.form-control').each(function() {
  var targetItem = $(this).parent();
  if ($(this).val()) {
    $(targetItem).find('label').css({
      'top': '10px',
      'fontSize': '14px'
    });
  }
})
$('.contact-form').find('.form-control').focus(function() {
  $(this).parent('.input-block').addClass('focus');
  $(this).parent().find('label').animate({
    'top': '10px',
    'fontSize': '14px'
  }, 300);
})
$('.contact-form').find('.form-control').blur(function() {
  if ($(this).val().length == 0) {
    $(this).parent('.input-block').removeClass('focus');
    $(this).parent().find('label').animate({
      'top': '25px',
      'fontSize': '18px'
    }, 300);
  }
})







$(function(){
  $(".accordion .menu-head").click(function(){
    
   if( $(".plus-minus i").hasClass("ion-plus") ) {
     
     $(".plus-minus i").removeClass("ion-plus");
      $(".plus-minus i").addClass("ion-minus");
   
   }else{
   
      $(".plus-minus i").addClass("ion-plus");
     
   }
      
    $(".accordion .data").slideToggle("slow");
    
  });
});


  $('.select2-config').select2({ width: '100%' });

document.querySelector("html").classList.add('js');
/* 
var fileInput  = document.querySelector( ".input-file" ),  
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");
     
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return.innerHTML = this.value;  
});  
*/
	$('.fileupp').fileuploader({
        theme: 'onebutton',
        upload: {
            url: 'php/ajax_upload_file.php',
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            start: true,
            synchron: true,
            beforeSend: function(item) {
				var input = $('#custom_file_name');
				// set the POST field
				if(input.length)
					item.upload.data.custom_name = input.val();
				// reset input value
				input.val("");
			},
            onSuccess: function(result, item) {
                var data = JSON.parse(result),
					nameWasChanged = false;
				// get the new file name
                if(data.isSuccess && data.files[0]) {
					nameWasChanged = item.name != data.files[0].name;
                    item.name = data.files[0].name;
                }
				// make HTML changes
				if(nameWasChanged)
					item.html.find('.column-title div').animate({opacity: 0}, 400);
                item.html.find('.column-actions').append('<a class="fileuploader-action fileuploader-action-remove fileuploader-action-success" title="Remove"><i></i></a>');
                setTimeout(function() {
					item.html.find('.column-title div').attr('title', item.name).text(item.name).animate({opacity: 1}, 400);
                    item.html.find('.progress-bar2').fadeOut(400);
                }, 400);
            },
            onError: function(item) {
				var progressBar = item.html.find('.progress-bar2');
				// make HTML changes
				if(progressBar.length > 0) {
					progressBar.find('span').html(0 + "%");
                    progressBar.find('.fileuploader-progressbar .bar').width(0 + "%");
					item.html.find('.progress-bar2').fadeOut(400);
				}
                item.upload.status != 'cancelled' && item.html.find('.fileuploader-action-retry').length == 0 ? item.html.find('.column-actions').prepend(
                    '<a class="fileuploader-action fileuploader-action-retry" title="Retry"><i></i></a>'
                ) : null;
            },
            onProgress: function(data, item) {
                var progressBar = item.html.find('.progress-bar2');
				// make HTML changes
                if(progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('span').html(data.percentage + "%");
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
            },
            onComplete: null,
        },
		onRemove: function(item) {
			// send POST request
			$.post('./php/ajax_remove_file.php', {
				file: item.name
			});
		}
    });


fiyat_hesapla();
function fiyat_hesapla(){
	$(".workList li").slideToggle();
}