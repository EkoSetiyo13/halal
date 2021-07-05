<!DOCTYPE html>
<html>
<head>
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/js/mdb.min.js"></script>
	<link rel="stylesheet" type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/css/mdb.min.css">
	<title>
		
	</title>
</head>
<body>

	<!--Pagination red-->
	<nav>
	    <ul class="pagination pg-red">

	        <!--Numbers-->
	        <li class="page-item"><a class="page-link">1</a></li>
	        <li class="page-item"><a class="page-link">2</a></li>
	        <li class="page-item"><a class="page-link">3</a></li>
	        <li class="page-item"><a class="page-link">4</a></li>

	    </ul>
	</nav>
	<!--/Pagination red-->

    <hr/>
    <h3>Container</h3>
    <hr/>
    <script type="text/javascript">
    	$(document).ready(function(){
            
    		//Hide all cards
    		$(".card").each(function(index, value){
    			$('.card').hide();
    		})
            

    		$(".page-link").on('click', function(){
                
    			$(".page-link").each(function(index, value){
    				$(value).parent().removeClass("active");
    			});

    			//Hide all cards
	    		$(".card").each(function(index, value){
	    			$('.card').hide();
	    		})
  
    			$(this).parent().addClass("active");
    			var cardId = "#" + $(this).text();
    			$(cardId).show();
    		});

    	});
    </script>
	<div class="container">
		<!--Card-->
		<div id="1" class="card">

		    <!--Card image-->
		    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
		    <!--/.Card image-->

		    <!--Card content-->
		    <div class="card-block">
		        <!--Title-->
		        <h4 class="card-title">This is card 1</h4>
		        <!--Text-->
		        <p class="card-text">First content</p>
		        <a href="#" class="btn btn-primary">Button</a>
		    </div>
		    <!--/.Card content-->

		</div>
		<!--/.Card-->

		<!--Card-->
		<div id="2" class="card">

		    <!--Card image-->
		    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
		    <!--/.Card image-->

		    <!--Card content-->
		    <div class="card-block">
		        <!--Title-->
		        <h4 class="card-title">This is card 2</h4>
		        <!--Text-->
		        <p class="card-text">Second content</p>
		        <a href="#" class="btn btn-primary">Button</a>
		    </div>
		    <!--/.Card content-->

		</div>
		<!--/.Card-->

		<!--Card-->
		<div id="3" class="card">

		    <!--Card image-->
		    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
		    <!--/.Card image-->

		    <!--Card content-->
		    <div class="card-block">
		        <!--Title-->
		        <h4 class="card-title">This is card 3</h4>
		        <!--Text-->
		        <p class="card-text">Third content</p>
		        <a href="#" class="btn btn-primary">Button</a>
		    </div>
		    <!--/.Card content-->

		</div>
		<!--/.Card-->

		<!--Card-->
		<div id="4" class="card">

		    <!--Card image-->
		    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20%282%29.jpg" alt="Card image cap">
		    <!--/.Card image-->

		    <!--Card content-->
		    <div class="card-block">
		        <!--Title-->
		        <h4 class="card-title">This is card 4</h4>
		        <!--Text-->
		        <p class="card-text">Fourth content</p>
		        <a href="#" class="btn btn-primary">Button</a>
		    </div>
		    <!--/.Card content-->

		</div>
		<!--/.Card-->
	</div>


	

</body>
</html>