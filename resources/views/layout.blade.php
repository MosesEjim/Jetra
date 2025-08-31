<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jetra - networking solutions agency</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="/path/to/favicon.png">
	
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	
	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	
	@yield('content')
		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
		<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
		<script src="{{ asset('js/scrollax.min.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{ asset('js/google-map.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		
		<!-- Floating Chat Button and Chat Window -->
		<div class="chat-widget">
			<!-- Chat Button -->
			<button class="chat-button" id="chatButton">
				<i class="fa fa-comments"></i>
				<span class="chat-label">Support Chat</span>
			</button>
			
			<!-- Chat Window -->
			<div class="chat-window" id="chatWindow">
				<div class="chat-header">
					<h5>Support Chat</h5>
					<button class="close-chat" id="closeChat">
						<i class="fa fa-times"></i>
					</button>
				</div>
				<div class="chat-messages" id="chatMessages">
					<div class="message bot-message">
						<div class="message-content">
							<p>Hello! How can we help you today?</p>
						</div>
						<div class="message-time">Just now</div>
					</div>
				</div>
				<div class="chat-input">
					<input type="text" id="messageInput" placeholder="Type your message...">
					<button id="sendMessage">
						<i class="fa fa-paper-plane"></i>
					</button>
				</div>
			</div>
		</div>
		
	</body>
	</html>