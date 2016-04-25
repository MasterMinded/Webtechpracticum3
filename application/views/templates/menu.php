<!-- basissetup voor menu -->

<div id="menu-container">
	<div class="nav" id="menu">
		<ul>
			<li><a href="/">DataDate</a>
				<ul>
					<li> <?php echo anchor(base_url().'', 'Wat is DataDate?', ''); ?> </li>
					<li> <?php echo anchor(base_url().'', 'Voor wie is DataDate?', ''); ?> </li>
					<li> <?php echo anchor(base_url().'', 'Waarom DataDate?', ''); ?> </li>
				</ul>
			</li>
			<li><a href="#">Profielen</a>
				<ul>
					<li> <?php echo anchor(base_url().'', 'Andere profielen', ''); ?> </li>
					<li> <?php echo anchor(base_url().'', 'Zoek', ''); ?> </li>
				</ul>
			</li>
			<?php if ($this->session->userdata('logged_in')) { ?>
			<li><a href="/profile"><?php echo $this->session->userdata('UserName');?></a>
				<ul>
					<li> <?php echo anchor(base_url().'pagina/'. $this->session->userdata('UserID'), 'Mijn profiel', ''); ?></li>
					<li> <?php echo anchor(base_url().''.$this->session->userdata('UserID'), 'Wijzig profiel', ''); ?></li>
					<li> <?php echo anchor(base_url().'index.php/Home/logout', 'Log uit', ''); ?> </li>
				</ul>
			</li>
			<?php } else { ?>
			<li><a href="#"> Registreren</a>
				<ul>
					<li> <?php echo anchor(base_url().'index.php/Home/signup', 'Aanmelden!', ''); ?> </li>
				</ul>
			</li>
			<?php } ?>
		</ul>
	</div>
