<?php
include "inc/header.php";

$portfolioList = [

	["name" => "Donias",    "pic" => "images/portfolio/donias.png"  ],
		
	["name" => "Dramantram",    "pic" => "images/portfolio/dramantram.png" ],
	["name" => "Sreejen Interior",    "pic" => "images/portfolio/sreejaninterior.png" ],
	["name" => "Delhi Karavan",    "pic" => "images/portfolio/delhikaravan.png" ],
	["name" => "Daily Fresh Organics",    "pic" => "images/portfolio/dailyfreshorganics.png" ],
	["name" => "Easy Zariya",    "pic" => "images/portfolio/easyzariya.png" ],
	["name" => "Redon App",    "pic" => "images/portfolio/redonapp.png" ],
	["name" => "Way2Make",    "pic" => "images/portfolio/way2make.png" ],
			
];

?>


<div class="container-fluid" style="margin-top: -20px">
   <div class="row" >    
   		<div style="margin: auto; text-align: center; background: #4EC5BF;  padding: 100px; display: block;  " >
   			<h1 class="heading" style="color: white; "> Our Works</h1>
   		</div>      
   </div>
</div>

<section style="background: white">
	<div class="container">
		<br/><br/> <br/> <br/>
		<div class="openSans">
			
			<?php foreach ( $portfolioList as $item )  { ?>
			<div class="col-md-3" >
				<div class='portfolio-item'>
					<div class="pic"> 
					<img src="<?php echo $item['pic']; ?>" class="img-responsive" /> 
					</div>
					<div class="info"> <?php echo $item['name'];  ?> </div>
				</div>				
			</div>			
			<?php
			}
			?>

		</div>
		<br/><br>
	</div>	
</section>


<?php
include "inc/footer.php";
?>