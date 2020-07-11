<div class="top_nav">
	<div class="nav_menu">
		<nav class="nav navbar-nav">
			<ul class=" navbar-right">
				<li class="nav-item dropdown open" style="padding-left:s15px;">
					<a href="javascript:;" class="user-profile dropdown-toggle h7" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false"><?php echo $this->session->userdata('email');?> </a>
					<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(15px, 21px, 0px);">
						<a class="dropdown-item h7" href="<?php echo site_url('Login/logout');?>"><i class="fa fa-sign-out pull-right fa-3x"></i> Log Out</a>
					</div>
				</li>                			
			</ul>
		</nav>
	</div>
</div>
