<!-- basissetup voor menu -->

<div id="menu-container">
	<div class="nav" id="menu">
		<ul>
			<li class="menuitem" id="datadate-info-menu"><a href="/">DataDate</a>
				<ul>
					<li> <?php echo anchor(base_url().'', 'Wat is DataDate?', ''); ?> </li>
					<li> <?php echo anchor(base_url().'', 'Voor wie is DataDate?', ''); ?> </li>
					<li> <?php echo anchor(base_url().'', 'Waarom DataDate?', ''); ?> </li>
				</ul>
			</li>
			<li class="menuitem" id="profiel-info-menu"><a href="#">Profielen</a>
				<ul>
					<li> <?php echo anchor(base_url().'', 'Andere profielen', ''); ?> </li>
					<li> <?php echo anchor(base_url().'', 'Zoek', ''); ?> </li>
				</ul>
			</li>
			<?php if ($this->session->userdata('logged_in')) { ?>
			<li id="user-profile-menu"><a href="/profile"><?php echo $this->session->userdata('UserName');?></a>
			<ul>
			<li> <?php echo anchor(base_url().'pagina/'. $this->session->userdata('UserID'), 'Mijn profiel', ''); ?> </li>
			<li> <?php echo anchor(base_url().''.$this->session->userdata('UserID'), 'Wijzig profiel', ''); ?> </li>
			<li> <?php echo anchor(base_url().'index.php/Home/logout', 'Log uit', ''); ?> </li>
			</ul>
			</li>
			<?php } else { ?>
			<li class="menuitem" id="signup-menu"><a href="#"> Nog niet geregistreerd?</a>
				<ul>
					<li> <?php echo anchor(base_url().'index.php/Home/signup', 'Aanmelden!', ''); ?> </li>
				</ul>
			</li>
			<?php } ?>
		</ul>
	</div>
