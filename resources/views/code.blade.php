<!DOCTYPE html>
<html>
<head>
<title>Laravel 5.8 Generate QR Code Tutorial with Example - W3Adda</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Laravel 5.8 Generate QR Code Tutorial with Example - W3Adda</h2>
<br>
<br>
    <div class="row">
			<div class="col-md-4">
				    <h5>Simple Qr Code With String</h5>
    {!! QrCode::size(200)->generate('W3Adda Laravel Tutorial'); !!}
			</div>

			<div class="col-md-4">
				<h5>Qr Code With Color</h5>
     {!! QrCode::size(200)->backgroundColor(255,55,0)->generate('W3Adda Laravel Tutorial'); !!}
                <img src="{{ asset('/assets/logo_halal.png') }}" class="navbar-brand-img" alt="...">
			</div>
			<div class="col-md-4">
				<h5>Qr Code with Image</h5>
				<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge('assets/logo_halal_bg.png', 0.3, true)
                        ->size(200)->errorCorrection('H')
                        ->generate('W3Adda Laravel Tutorial')) !!} ">
                
                <a href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(1000)->errorCorrection('H')->generate('halal.its.ac.id')) !!} " download>
                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge('assets/logo_halal_bg.png', 0.3, true)->size(1000)->errorCorrection('H')->generate('halal.its.ac.id')) !!} ">
                </a>
				
			</div>
	</div>

</div>

</body>

</html>