		<!--App Sidebar-->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar">
			<div class="app-sidebar__user clearfix">
				<div class="user-pro-body">
					<div class="sideuser-img">
						<img src="assets/img/users/male/15.jpg" alt="user-img" class="">
						<span class="sidebar-icon"></span>
					</div>
					<div class="user-info">
						<h2 class="app-sidebar__user-name"><?php echo "yaniar.prayogo" ?></h2>
						<span class="app-sidebar__title">Administrator</span>
					</div>
				</div>
			</div>
			<ul class="side-menu">
				<li><h3>Main</h3></li>
				<li>
					<a class="side-menu__item"  href="<?php echo site_url('Dashboard');?>"><i class="side-menu__icon" data-eva="monitor-outline"></i><span class="side-menu__label">Dashboard</span></a>
				</li>
				<li><h3>Apps</h3></li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="cube-outline"></i><span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-down"></i></a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="<?php echo site_url('Client');?>">Client Data</a></li>
						<li><a class="slide-item" href="#">Report</a></li>
						<li><a class="slide-item" href="#">Search Client</a></li>
					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="email-outline"></i><span class="side-menu__label">Account Data Maintance</span><i class="angle fe fe-chevron-down"></i></a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="<?php echo site_url('Users');?>">Maintance User</a></li>
					</ul>
				</li>

				<li><h3>Setting</h3></li>
				<li class="slide">
					<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon" data-eva="book-outline"></i><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-down"></i></a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="page-profile.html">Profile</a></li>
						<li><a class="slide-item" href="page-editprofile.html">Edit Profile</a></li>
						<li><a class="slide-item" href="page-invoice.html">Invoice</a></li>
						<li><a class="slide-item" href="blog.html">Blog</a></li>
						<li><a class="slide-item" href="page-timeline.html">Timeline</a></li>
						<li><a class="slide-item" href="page-pricing.html">Page Pricing</a></li>
						<li><a class="slide-item" href="page-todotask.html">Todo Task</a></li>
						<li><a class="slide-item" href="page-widget-notification.html">Notification Widgets </a></li>
						<li><a class="slide-item" href="page-sessionout.html">Session Timeout</a></li>
						<li><a class="slide-item" href="page-faqs.html">FAQS</a></li>
						<li><a class="slide-item" href="page-termsconditions.html">Terms & Conditions</a></li>
						<li><a class="slide-item" href="page-create.html">Page Create</a></li>
					</ul>
				</li>

			</ul>
		</aside>
		<!--/App Sidebar-->