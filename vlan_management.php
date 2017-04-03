<?php
include "inc/header.php";
?>

<div class="container-fluid" style="margin-top: -20px">
   <div class="row" >    
   		<div style="margin: auto; text-align: center; background: #4EC5BF;  padding: 100px; display: block;" >
   			<h1 class="heading" style="color: white;  ">VLAN Management</h1>
   		</div>      
   </div>
</div>

<section>
		<div class="text-center">
			<img src="images/server1.jpg" width="100%">
		</div>
	
	<div class="container">

	<br><br>

		<p class="inner-para">
			A <b>virtual LAN (VLAN)</b> is any broadcast domain that is partitioned and isolated in a computer network at the data link layer (OSI layer 2). LAN is an abbreviation for local area network.
		</p>
		<p class="inner-para">
			To subdivide a network into virtual LANs, one configures network equipment. Simpler equipment can partition only per physical port (if at all), in which case each VLAN is connected with a dedicated network cable. More sophisticated devices can mark frames through VLAN tagging, so that a single interconnect (trunk) may be used to transport data for multiple VLANs. Since VLANs share bandwidth, a VLAN trunk can use link aggregation, quality-of-service prioritization, or both to route data efficiently.
		</p>

		<p class="inner-para">
			VLANs allow <strong>network administrators</strong> to group hosts together even if the hosts are not on the same network switch. This can greatly simplify network design and deployment, because VLAN membership can be configured through software. Without VLANs, grouping hosts according to their resource needs necessitates the labor of relocating nodes or rewiring data links.
		</p>

	</div>
</section>

<br> <br>


<?php
	include "inc/footer.php" 
?>