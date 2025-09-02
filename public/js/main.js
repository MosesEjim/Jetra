(function($) {

	"use strict";


	$(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });


	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	// Scrollax
   $.Scrollax();

	var carousel = function() {
		$('.home-slider').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:0,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});
		$('.carousel-testimony').owlCarousel({
			center: true,
			loop: true,
			autoplay: true,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 3
				}
			}
		});
	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');	
				}
			} 
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
				}
			} 
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');	
				}
				
				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();


	var counter = function() {
		
		$('#section-counter, .hero-wrap, .ftco-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();


	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();


	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });


})(jQuery);

// ... existing code ...

// Chat Widget Functionality
document.addEventListener('DOMContentLoaded', function() {
	const chatButton = document.getElementById('chatButton');
	const chatWindow = document.getElementById('chatWindow');
	const closeChat = document.getElementById('closeChat');
	const messageInput = document.getElementById('messageInput');
	const sendMessage = document.getElementById('sendMessage');
	const chatMessages = document.getElementById('chatMessages');
	let isSending = false; // Flag to prevent multiple simultaneous requests
	let lastMessageId = 0; // Track last message ID for updates

	// Guest name management
	function generateGuestName() {
		const randomNumber = Math.floor(Math.random() * 10000); // Generate random number 0-9999
		return `guest${randomNumber}`;
	}

	function getOrCreateGuestName() {
		let guestName = localStorage.getItem('jetra_guest_name');
		if (!guestName) {
			guestName = generateGuestName();
			localStorage.setItem('jetra_guest_name', guestName);
		}
		return guestName;
	}

	// Initialize guest name on page load
	const currentGuestName = getOrCreateGuestName();
	console.log('Current guest:', currentGuestName);

	// Load existing messages
	function loadMessages() {
		const guestName = getOrCreateGuestName();
		
		fetch(`/telegram/get-messages?chat_id=${guestName}`)
			.then(response => response.json())
			.then(data => {
				if (data.status === 'success' && data.messages.length > 0) {
					// Clear existing messages
					chatMessages.innerHTML = '';
					
					// Add all messages
					data.messages.forEach(msg => {
						addMessage(msg.message, msg.is_from_telegram ? 'bot' : 'user', msg.time);
						lastMessageId = Math.max(lastMessageId, msg.id);
					});
					
					// Scroll to bottom
					chatMessages.scrollTop = chatMessages.scrollHeight;
				}
			})
			.catch(error => {
				console.error('Error loading messages:', error);
			});
	}

	// Check for new messages periodically
	function checkForNewMessages() {
		const guestName = getOrCreateGuestName();
		
		fetch(`/telegram/get-messages?chat_id=${guestName}`)
			.then(response => response.json())
			.then(data => {
				if (data.status === 'success' && data.messages.length > 0) {
					// Find new messages
					const newMessages = data.messages.filter(msg => msg.id > lastMessageId);
					
					if (newMessages.length > 0) {
						newMessages.forEach(msg => {
							addMessage(msg.message, msg.is_from_telegram ? 'bot' : 'user', msg.time);
							lastMessageId = Math.max(lastMessageId, msg.id);
						});
						
						// Scroll to bottom
						chatMessages.scrollTop = chatMessages.scrollHeight;
					}
				}
			})
			.catch(error => {
				console.error('Error checking for new messages:', error);
			});
	}

	// Open chat window
	chatButton.addEventListener('click', function() {
		chatWindow.style.display = 'flex';
		messageInput.focus();
		
		// Load messages when opening chat
		loadMessages();
		
		// Start checking for new messages
		startMessagePolling();
	});

	// Close chat window
	closeChat.addEventListener('click', function() {
		chatWindow.style.display = 'none';
		stopMessagePolling();
	});

	// Close chat when clicking outside
	document.addEventListener('click', function(e) {
		if (!chatWindow.contains(e.target) && !chatButton.contains(e.target)) {
			//chatWindow.style.display = 'none';
			stopMessagePolling();
		}
	});

	let messagePollingInterval;

	function startMessagePolling() {
		// Check for new messages every 3 seconds
		messagePollingInterval = setInterval(checkForNewMessages, 3000);
	}

	function stopMessagePolling() {
		if (messagePollingInterval) {
			clearInterval(messagePollingInterval);
			messagePollingInterval = null;
		}
	}

	// Send message function
	function sendMessageHandler() {
		// Prevent multiple simultaneous requests
		if (isSending) {
			return;
		}
		
		const message = messageInput.value.trim();
		if (message && message.length > 0) {
			isSending = true;
			
			// Disable send button and input while sending
			sendMessage.disabled = true;
			messageInput.disabled = true;
			sendMessage.innerHTML = '<i class="fa fa-spinner fa-spin"></i>';
			
			// Add user message and clear input
			addMessage(message, 'user');
			messageInput.value = '';
			messageInput.focus();
			
			// Show typing indicator
			const typingDiv = document.createElement('div');
			typingDiv.className = 'message bot-message typing-indicator';
			typingDiv.innerHTML = `
				<div class="message-content">
					<p>Typing...</p>
				</div>
			`;
			chatMessages.appendChild(typingDiv);
			chatMessages.scrollTop = chatMessages.scrollHeight;
			
			// Get guest name and format message for Telegram
			const guestName = getOrCreateGuestName();
			const formattedMessage = `${guestName}: ${message}`;
			
			// Send message to Telegram API
			fetch('/telegram/send-message', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-Requested-With': 'XMLHttpRequest'
				},
				body: JSON.stringify({ message: formattedMessage, guest: guestName })
			})
			.then(response => {
				if (!response.ok) {
					throw new Error(`HTTP error! status: ${response.status}`);
				}
				return response.json();
			})
			.then(data => {
				// Remove typing indicator safely
				if (typingDiv && typingDiv.parentNode) {
					chatMessages.removeChild(typingDiv);
				}
				
				// Add bot response
				if (data.status === 'success') {
					//addMessage("✅ Message sent successfully! Our team will get back to you soon.", 'bot');
				} else {
					addMessage("❌ Sorry, there was an error sending your message. Please try again.", 'bot');
				}
			})
			.catch(error => {
				// Remove typing indicator safely
				if (typingDiv && typingDiv.parentNode) {
					chatMessages.removeChild(typingDiv);
				}
				
				// Add error message based on error type
				let errorMessage = "❌ Sorry, there was an error sending your message. Please try again.";
				if (error.name === 'TypeError' && error.message.includes('fetch')) {
					errorMessage = "🌐 Network error. Please check your connection and try again.";
				}
				
				addMessage(errorMessage, 'bot');
				console.error('Error:', error);
			})
			.finally(() => {
				// Remove typing indicator safely if it still exists
				if (typingDiv && typingDiv.parentNode) {
					chatMessages.removeChild(typingDiv);
				}
				
				// Re-enable send button and input
				sendMessage.disabled = false;
				messageInput.disabled = false;
				sendMessage.innerHTML = '<i class="fa fa-paper-plane"></i>';
				
				// Reset sending flag
				isSending = false;
			});
		}
	}

	// Add message to chat
	function addMessage(text, sender, time = null) {
		const messageDiv = document.createElement('div');
		messageDiv.className = `message ${sender}-message`;
		
		const timeString = time || new Date().toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
		
		messageDiv.innerHTML = `
			<div class="message-content">
				<p>${text}</p>
			</div>
			<div class="message-time">${timeString}</div>
		`;
		
		chatMessages.appendChild(messageDiv);
		chatMessages.scrollTop = chatMessages.scrollHeight;
	}

	// Send message on button click
	sendMessage.addEventListener('click', sendMessageHandler);

	// Send message on Enter key
	messageInput.addEventListener('keypress', function(e) {
		if (e.key === 'Enter') {
			sendMessageHandler();
		}
	});
});