<!-- basissetup voor menu -->

<div id="menu-container">
	<div id="menu">
		<div id="datadate-info-menu">
			<h1> DataDate </h1>
			<ul>
				<li> <?php echo anchor(base_url().'paginamoetnoggemaaktworden', 'Wat is DataDate?', ''); ?> </li>
				<li> <?php echo anchor(base_url().'', 'Voor wie is DataDate?', ''); ?> </li>
				<li> <?php echo anchor(base_url().'', 'Waarom DataDate?', ''); ?> </li>
			</ul>		
		</div>
		<div id="profiel-info-menu">
			<h1> Profielen </h1>
			<ul>
				<li> <?php echo anchor(base_url().'pages/users', 'Andere DataDaters', ''); ?> </li>
				<li> <?php echo anchor(base_url().'pages/search', 'Zoek', ''); ?> </li>
			</ul>
		</div>
<!--		--><?php //if ($this->session->userdata('ingelogt')) { ?>
			<div id="user-profile-menu">
<!--				<h1> --><?php //echo $this->session->userdata('UserName');?><!-- </h1>-->
				<ul>
<!--					<li> --><?php //echo anchor(base_url().'pagina/'. $this->session->userdata('UserID'), 'Mijn profiel', ''); ?><!-- </li>-->
<!--					<li> --><?php //echo anchor(base_url().''.$this->session->userdata('UserID'), 'Wijzig profiel', ''); ?><!-- </li>-->
					<li> <?php echo anchor(base_url().'', 'Log uit', ''); ?> </li>
				</ul>
			</div>
<!--		--><?php //} else { ?>
			<div id="signup-menu">
				<h1> Nog geen account? </h1>
				<ul>
					<li> <?php echo anchor(base_url().'', 'Aanmelden!', ''); ?> </li>
				</ul>
			</div>
<!--		--><?php //} ?>
	</div>
</div>