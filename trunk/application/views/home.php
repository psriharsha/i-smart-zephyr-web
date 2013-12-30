<?php
$this->load->view('header');
?>
<title><?php /*echo $title*/?></title>
<?php $this->load->view('head');?>
	<div id="banner">
		<img src = "<?php echo base_url()?>images/banner-1.png">
	</div>	
<?php $this->load->view('menu')?>
<div id = "content">
	<div class="horiMenuCont">
		<h1>Why do you need it?</h1>
		<ul>
			<li>There is no reliable way of remotely monitoring vital signs for Acutely Ill patients outside the Hospital setting
			</li>
			<li>Lack of systems outside of Hospital to alert deterioration of vital signs and predict emergencies automatically.
			</li>
			<li>Manual measurement and entry of different vital signs during observations
			 are prone to errors.
			</li>
			<li>No efficient and reliable way of transmitting vital sign data between health professionals.
			</li>
			<li>As a result – avoidable hospital admissions and prolonged hospital stays – increased costs
			</li>
		</ul>
	</div>
	<div class="horiMenuCont">
		<h1>Existing Problems</h1>
		<ul>
			<li>I-Smart is an Electronic Healthcare monitoring system for acutely ill patients.
			</li>
			<li>Automatically reads vital signs and transmits data to central server which is remotely accessible by all members of the Health Team.
			</li>
			<li>Deterioration in vital signs automatically trigger alerts to initiate appropriate response.
			</li>
			<li>Cost saving to healthcare system from prevented hospital admission and safer supported discharge.
			</li>
		</ul>
	</div>
	<div class="horiMenuCont">
		<h1>Existing Problems</h1>
		<ul>
			<li>No reliable way of remotely monitoring vital signs for Acutely Ill patients outside the Hospital setting
			</li>
			<li>Lack of systems outside of Hospital to alert deterioration of vital signs and predict emergencies automatically.
			</li>
			<li>Manual measurement and entry of different vital signs during observations which are prone to errors.
			</li>
			<li>No efficient and reliable way of transmitting vital sign data between health professionals.
			</li>
			<li>As a result – avoidable hospital admissions and prolonged hospital stays – increased costs
			</li>
		</ul>
	</div>
</div>
<?php 
$this->load->view('footer');
?>