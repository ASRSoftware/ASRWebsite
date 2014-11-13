jQuery(function($) {

	//Ajax contact
	var form = $('.contact-form');
		form.submit(function () {
			$this = $(this);
			$.post($(this).attr('action'), function(data) {
			$this.prev().text(data.message).fadeIn().delay(3000).fadeOut();
		},'json');
		return false;
	});


	$('#contact-page form').submit(function(e){
		e.preventDefault();
		var data = $(this).serializeArray();
                // alert(data);
		$.post('sendMail.php', data , function(e){
                    if(e == 'true'){
                        alert('your message has been sent!');
                    }else{
                        // do nothing.
                    }
		})
	});

	//Goto Top
	$('.gototop').click(function(event) {
		 event.preventDefault();
		 $('html, body').animate({
			 scrollTop: $("body").offset().top
		 }, 500);
	});	
	//End goto top		

	$(document).on('click','a.portfolio', function(e){
		e.preventDefault();
		$('body').append('<div id="preview-portfolio-item" style="display:none"><div class="close-preview-portfolio-item"></div><div class="element"></div></div>');
		var href = $(this).attr('href');
		$.get(href, function(html){
			$('#preview-portfolio-item .element').html(html);
			$('#preview-portfolio-item').fadeIn('fast');
			resizePreview();
		});
	});
	$(document).on('click','.close-preview-portfolio-item', function(){
		$(this).parents('#preview-portfolio-item').fadeOut();
	});

	resizePreview = function(){
		// var height = $('#preview-portfolio-item #portfolio-single').height();
		$elm = $('#preview-portfolio-item #portfolio-single');
		$elm.css({
			'margin-top': -$elm.height()/2,
			'margin-left': -$elm.width()/2
		});
	}
});

