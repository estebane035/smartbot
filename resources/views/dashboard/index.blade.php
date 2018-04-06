@extends('layouts.dashboard', ['menu' => "Dashboard"])

@section('content')

<img src="http://ttv-api.s3.amazonaws.com/assets/connect_dark.png" class="twitch-connect" href="#" />
@stop

@section('scripts')

<script src="https://ttv-api.s3.amazonaws.com/twitch.min.js"></script>
    <script type="text/javascript">
    	Twitch.init({clientId: 'arze5mx4328brjas99b9pqcy61h6ay'}, function(error, status) {
		    // the sdk is now loaded
		  });
    	$('.twitch-connect').click(function() {
			  Twitch.login({
			    scope: ['user_read', 'channel_read']
			  });
			})
    </script>
@stop