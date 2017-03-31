<?php
include "inc/header.php";
?>

<div class="container-fluid" style="margin-top: -20px">
   <div class="row" >    
   		<div style="margin: auto; text-align: center; background: #4EC5BF;  padding: 100px; display: block;  " >
   			<h1 class="heading" style="color: white;  "> Contact Us </h1>
   		</div>      
   </div>
</div>

<section class=" ">
	<div class="container">
		<br><br>

		<div class="row">
			<div class="col-md-6">
				<h4 class="contact-page"> Drop us a line: </h4>
				<h3 class="contact-page"> info@diodecode.com  </h3>
				<br>
				<p>
					No: 1668/A, 3<sup>rd</sup> Floor,  <br/>
					G.V. Complex, 14<sup>th</sup> Main,  <br/>					
					BDA Complex Road,<br/>
					7<sup>th</sup> Sector, HSR Layout,<br>
					Bangalore - 560102.<br>
					(+91) 7348821817 <br/>
				</p>				
			</div>
			<div class="col-md-6">

				<form>
                    <div class="form-group">

                        <label for="InputName">Full Name:</label>
                        <input class="form-control" type="text" id="InputName" placeholder="Your Full Name" required="true">

                        <label for="InputEmail">Email Address:</label>
                        <input class="form-control" type="Email" id="InputEmail" placeholder=" Your Email Address">

                        <label for="InputPhone">Phone No.</label>
                        <input class="form-control" type="Phone" id="InputPhone" placeholder="Phone Number">

                        <label for="Message">Your Message:</label>
                        <textarea class="form-control" placeholder="Your Message Here"></textarea>

                        <button class="btn btn-primary" style="margin-bottom: 10px; margin-left: 15px;">Submit</button>	
                    </div>
                </form>
                		
			</div>
		</div>		
		<br/>
	</div>	
</section>









<?php
include "inc/footer.php";
?>