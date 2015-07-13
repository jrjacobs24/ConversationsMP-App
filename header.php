<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Conversations_MP
 * @since Conversations Made Possible 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

 	<section id="container" class="container-fluid no-padding hfeed site">

 	<!-- ********************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************** -->

    	<!-- header start-->
		<header class="header black-bg">
			
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
			</div>
			<!--logo start-->
			<?php if ( is_front_page() && is_home() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo"><strong><?php bloginfo( 'name' ); ?></strong></a>
			<?php else: ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo"><strong><?php bloginfo( 'name' ); ?></strong></a>
			<?php endif; ?>
			<!--logo end-->
			<div class="nav notify-row" id="top_menu">
		        <!--  notification start -->
				<ul class="nav top-menu">
				    <!-- settings start -->
				    <li class="dropdown">
				        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
				            <i class="fa fa-tasks"></i>
				            <span class="badge bg-theme">4</span>
				        </a>
				        <ul class="dropdown-menu extended tasks-bar">
				            <div class="notify-arrow notify-arrow-green"></div>
				            <li>
				                <p class="green">You have 4 pending tasks</p>
				            </li>
				            <li>
				                <a href="index.html#">
				                    <div class="task-info">
				                        <div class="desc">DashGum Admin Panel</div>
				                        <div class="percent">40%</div>
				                    </div>
				                    <div class="progress progress-striped">
				                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
				                            <span class="sr-only">40% Complete (success)</span>
				                        </div>
				                    </div>
				                </a>
				            </li>
				            <li>
				                <a href="index.html#">
				                    <div class="task-info">
				                        <div class="desc">Database Update</div>
				                        <div class="percent">60%</div>
				                    </div>
				                    <div class="progress progress-striped">
				                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
				                            <span class="sr-only">60% Complete (warning)</span>
				                        </div>
				                    </div>
				                </a>
				            </li>
				            <li>
				                <a href="index.html#">
				                    <div class="task-info">
				                        <div class="desc">Product Development</div>
				                        <div class="percent">80%</div>
				                    </div>
				                    <div class="progress progress-striped">
				                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
				                            <span class="sr-only">80% Complete</span>
				                        </div>
				                    </div>
				                </a>
				            </li>
				            <li>
				                <a href="index.html#">
				                    <div class="task-info">
				                        <div class="desc">Payments Sent</div>
				                        <div class="percent">70%</div>
				                    </div>
				                    <div class="progress progress-striped">
				                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
				                            <span class="sr-only">70% Complete (Important)</span>
				                        </div>
				                    </div>
				                </a>
				            </li>
				            <li class="external">
				                <a href="#">See All Tasks</a>
				            </li>
				        </ul>
				    </li>
				    <!-- settings end -->
				    <!-- inbox dropdown start-->
				    <li id="header_inbox_bar" class="dropdown">
				        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
				            <i class="fa fa-envelope-o"></i>
				            <span class="badge bg-theme">5</span>
				        </a>
				        <ul class="dropdown-menu extended inbox">
				            <div class="notify-arrow notify-arrow-green"></div>
				            <li>
				                <p class="green">You have 5 new messages</p>
				            </li>
				            <li>
				                <a href="index.html#">
				                    <span class="photo"><img alt="avatar" src="<?php echo get_template_directory_uri(); ?>/img/ui-zac.jpg"></span>
				                    <span class="subject">
				                    <span class="from">Zac Snider</span>
				                    <span class="time">Just now</span>
				                    </span>
				                    <span class="message">
				                        Hi mate, how is everything?
				                    </span>
				                </a>
				            </li>
				            <li>
				                <a href="index.html#">
				                    <span class="photo"><img alt="avatar" src="<?php echo get_template_directory_uri(); ?>/img/ui-divya.jpg"></span>
				                    <span class="subject">
				                    <span class="from">Divya Manian</span>
				                    <span class="time">40 mins.</span>
				                    </span>
				                    <span class="message">
				                     Hi, I need your help with this.
				                    </span>
				                </a>
				            </li>
				            <li>
				                <a href="index.html#">
				                    <span class="photo"><img alt="avatar" src="<?php echo get_template_directory_uri(); ?>/img/ui-danro.jpg"></span>
				                    <span class="subject">
				                    <span class="from">Dan Rogers</span>
				                    <span class="time">2 hrs.</span>
				                    </span>
				                    <span class="message">
				                        Love your new Dashboard.
				                    </span>
				                </a>
				            </li>
				            <li>
				                <a href="index.html#">
				                    <span class="photo"><img alt="avatar" src="<?php echo get_template_directory_uri(); ?>/img/ui-sherman.jpg"></span>
				                    <span class="subject">
				                    <span class="from">Dj Sherman</span>
				                    <span class="time">4 hrs.</span>
				                    </span>
				                    <span class="message">
				                        Please, answer asap.
				                    </span>
				                </a>
				            </li>
				            <li>
				                <a href="index.html#">See all messages</a>
				            </li>
				        </ul>
				    </li>
				    <!-- inbox dropdown end -->
				</ul>
				<!--  notification end -->
			</div>

		    <div class="top-menu">
		    	<ul class="nav pull-right top-menu">

		    		<li>
		    			<span>
			    			<?php 
			    			$current_user = wp_get_current_user();
			    			printf( "Hello, %s ", $current_user->user_firstname );
			    			?>
				    		<a href="profile.html">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ui-sam.jpg" class="img-circle" width="60">
							</a>
						</span>
					</li>
		    	</ul>
		    </div>
	    </header>
	    <!-- header end -->

	    <?php get_template_part('partials/side', 'nav'); ?>

		<!-- ********************************************************
		MAIN CONTENT
		*********************************************************** -->

		<!--main content start-->
		<section id="main-content" class="site-content">