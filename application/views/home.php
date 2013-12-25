<?php
$this->load->view('header');
?>
<title><?php /*echo $title*/?></title>
<?php $this->load->view('head');?>
	<div id="banner">
		<img src = "<?php echo base_url()?>images/banner-1.png">
	</div>	
	<div id="menuBg">
		<div id="menu">
			<div id="menuHolder"> Menu</div>
			<ul>
				<li></li>
			</ul>
		</div>
	</div>
<?php 
$this->load->view('footer');
?>