<html>
<head>
<head>
	<title>We are Launching!</title>
	<link rel="stylesheet" href="<?php echo base_url()?>css/nostyle.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/bs/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()?>css/bs/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>fa/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>fa/css/font-awesome.css">
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>

	<script type="text/javascript">
		
		$(window).load(function(){
			$('input').hover(function(){
				$(this).slideOut();
			})
		})

	</script>
</head>
<body>

<!--Code for the Modal, Not Needed -->



<section id="almo">

	
	<div class="container">

				<div class="modal" id="modal-one" aria-hidden="true">
		  		<div class="modal-dialog">
		    	<div class="modal-header">
		      <h2>Reserve a Room</h2>
		      <a href="#close" class="btn-close" aria-hidden="true">×</a>
		    	</div>
		    	<div class="modal-body">
				Name
		    	<input type="text" class="input-spl" placeholder="Name">
				Phone no
		    	<input type="number" class="input-spl" placeholder="Phone number">
				Check in Date and Timings
				<input type="datetime-local" class="input-spl" placeholder="Choose date and time">
				<h3>Room type</h3>
			<select class="input-spl">
				<option disabled>Choose one package</option>
				<option value="1">Delux</option>
				<option value="1">Diamond</option>
				<option value="1">Economy</option>
			</select>
		    </div>
		    <div class="modal-footer">
		      <a href="#close" class="btn">Close</a>
		      <a class="button button-green">Submit</a>
		    </div>
		    </div>
  </div>
	<center><h1 id="head">Few Hours To Launch </h1></center> <p>

		<div class="row">

				<center style="padding-top: 50px;"><input  type="email" name="email" placeholder="Be The First To Know"/> <a  id="open-modal" href="#modal-one"><button class="btn-trans " >Submit</button></a></center>


				<center style="padding-top: 80px;">
				<a href="#">
                                <span class="fa-stack fa-lg" style="font-size:70px; margin-right: 30px">
                                    <i  class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                 </a>


                 <a href="#">
                                <span class="fa-stack fa-lg" style="font-size:70px; margin-right: 30px">
                                    <i  class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                </span>
                   </a>

                   <a href="#">
                                <span class="fa-stack fa-lg" style="font-size:70px; margin-right: 30px">
                                    <i  class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
			</center>


		</div>


		

	</div>

	

</section>

<section style="background: black; color: white; ">

	<div class="container">
	<div>
		<center>Made with <i class="fa fa-heart"></i> in Nigeria. by Rapheal Prince. on <a href="http://github.com/kofacts"><i class="fa fa-github"></i></a></center> 
	</div>

	</div>
</section>



</body>
</html>
