<?php global $uri; ?>
<header id="header">
<div
	class="bgwelcome <?php if(in_array( $uri,array('data','apps','voice') )) echo 'bgdata'; ?>">
	<div class="container">
		<div class="space38 hidden-xs"></div>
		<div class="space10 visible-xs"></div>
		<div class="row">
			<div class="col-xs-4 col-sm-3 col-md-2 fixlogosite">
				<a href="http://www.centurylink.com/small-business/" target="_blank"
					<object data="<?php echo ROOT_URL; ?>/images/logo.svg" width="141" height="30" type="image/svg+xml">
								<img  src="<?php echo ROOT_URL; ?>/images/logo.png" alt="CENTURYLINK" width="141" height="30"/>
							</object></a>
			</div>
			<div class="col-xs-8 col-sm-6 col-md-5">
				<nav class="navbar navbar-default hidden-xs" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#mobi-nav-collapse">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="mobi-nav-collapse">
					<ul class="nav navbar-nav navbar-mainmenu">
						<li
						<?php if($uri == '' || $uri == 'index'){ echo ' class="active"'; }?>><a
							href="<?php echo ROOT_URL; ?>/">HOME</a></li>
						<li
							class="dropdown<?php if(in_array( $uri,array('data','apps','voice') )){ echo ' active'; }?>"><a
							href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCT
								COMPONENTS <b class="caret"></b> </a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo ROOT_URL; ?>/managed-data/">MANAGED DATA</a>
									<div class="lidesc">
										<span class="desctext">We manage your connection and data backup.</span>
									</div>
								</li>
								<li><a href="<?php echo ROOT_URL; ?>/managed-voice/">MANAGED
										VOICE</a>
									<div class="lidesc">
										<span class="desctext">We give you phones, a dial tone, and a
											wide range of advanced calling and messaging features.</span>
									</div>
								</li>
								<li><a href="<?php echo ROOT_URL; ?>/managed-applications/">MANAGED
										APPLICATIONS</a>
									<div class="lidesc">
										<span class="desctext">We provide and manage your business
											apps so you don&apos;t have to buy or update software.</span>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				</nav>
			</div>


			<!--#Menu on Mobi#-->
			<nav class="mobile-global-nav visible-xs">
			<button class="mobile-nav-button" type="button"
				data-toggle="collapse" data-target="#mobile-nav-content">
				<span class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse" id="mobile-nav-content">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo ROOT_URL; ?>/">HOME</a></li>
					<li class="mid"><strong>PRODUCT COMPONENTS</strong>
						<ul>
							<li><a href="<?php echo ROOT_URL; ?>/managed-data/">MANAGED DATA</a>
							</li>
							<li><a href="<?php echo ROOT_URL; ?>/managed-voice/">MANAGED
									VOICE</a></li>
							<li><a href="<?php echo ROOT_URL; ?>/managed-applications/">MANAGED
									APPLICATIONS</a></li>
						</ul>
					</li>
					<li class="last">
						<div class="col-xs-6 phone">
							<a href="callto:800.850.9881"><i class="fa fa-phone"></i> <span>800.850.9881</span>
							</a>
						</div>
						<div class="col-xs-6 social-header">
							<a href="https://www.facebook.com/CenturyLinkBusiness"
								title="Follow us on Facebook" class="facebook" target="_blank"
								rel="nofollow"> <span class="fa-stack"> <i
									class="fa fa-square fa-stack-2x"></i> <i
									class="fa fa-facebook fa-stack-1x fa-inverse"></i> </span> </a>

							<a href="https://twitter.com/CenturyLinkBiz"
								title="Follow us on Twitter" class="twitter" target="_blank"
								rel="nofollow"> <span class="fa-stack"> <i
									class="fa fa-square fa-stack-2x"></i> <i
									class="fa fa-twitter fa-stack-1x fa-inverse"></i> </span> </a>

							<a href="http://www.linkedin.com/company/1434913?trk=tyah"
								title="Follow us on Linkedin" target="_blank" class="linkedin"
								rel="nofollow"> <span class="fa-stack"> <i
									class="fa fa-square fa-stack-2x"></i> <i
									class="fa fa-linkedin fa-stack-1x fa-inverse"></i> </span> </a>

							<a class="google-plus"
								href="https://plus.google.com/u/0/117080893855557903730/posts"
								title="Follow us on Google Plus" target="_blank" rel="nofollow">
								<span class="fa-stack"> <i class="fa fa-square fa-stack-2x"></i>
									<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i> </span>
							</a>
						</div>
					</li>
				</ul>
			</div>
			</nav>



			<div class="col-xs-0 col-sm-3 col-md-3 nonpaddingall">
				<ul class="fa-ul hidden-xs">
					<li>
                        	<a href="callto:800.850.9881">
                            <i class="fa-li fa fa-phone fa-lg"></i><span>800.850.9881</span> 
                            </a>
					</li>
					<li><a href="#set-up-an-apointment" class="btscroll"><i
							class="fa-li fa fa-calendar fa-lg"></i><span>SCHEDULE A MEETING</span>
					</a></li>
					<li class="visible-sm"><a
						href="https://www.facebook.com/CenturyLinkBusiness"
						title="Follow us on Facebook" class="facebook" target="_blank"
						rel="nofollow"> <span class="fa-stack"> <i
								class="fa fa-square fa-stack-2x"></i> <i
								class="fa fa-facebook fa-stack-1x fa-inverse"></i> </span> </a>

						<a href="https://twitter.com/CenturyLinkBiz"
						title="Follow us on Twitter" class="twitter" target="_blank"
						rel="nofollow"> <span class="fa-stack"> <i
								class="fa fa-square fa-stack-2x"></i> <i
								class="fa fa-twitter fa-stack-1x fa-inverse"></i> </span> </a> <a
						href="http://www.linkedin.com/company/1434913?trk=tyah"
						title="Follow us on Linkedin" target="_blank" class="linkedin"
						rel="nofollow"> <span class="fa-stack"> <i
								class="fa fa-square fa-stack-2x"></i> <i
								class="fa fa-linkedin fa-stack-1x fa-inverse"></i> </span> </a>

						<a class="google-plus"
						href="https://plus.google.com/u/0/117080893855557903730/posts"
						title="Follow us on Google Plus" target="_blank" rel="nofollow"> <span
							class="fa-stack"> <i class="fa fa-square fa-stack-2x"></i> <i
								class="fa fa-google-plus fa-stack-1x fa-inverse"></i> </span> </a>
					</li>
				</ul>

			</div>
			<div class="col-xs-0 col-md-2 hidden-xs hidden-sm social-header">
				<a href="https://www.facebook.com/CenturyLinkBusiness"
					title="Follow us on Facebook" class="facebook" target="_blank"
					rel="nofollow"> <span class="fa-stack"> <i
						class="fa fa-square fa-stack-2x fa-bg-header"></i> <i
						class="fa fa-facebook fa-stack-1x fa-inverse"></i> </span> </a> <a
					href="https://twitter.com/CenturyLinkBiz"
					title="Follow us on Twitter" class="twitter" target="_blank"
					rel="nofollow"> <span class="fa-stack"> <i
						class="fa fa-square fa-stack-2x fa-bg-header"></i> <i
						class="fa fa-twitter fa-stack-1x fa-inverse"></i> </span> </a> <a
					href="http://www.linkedin.com/company/1434913?trk=tyah"
					title="Follow us on Linkedin" target="_blank" class="linkedin"
					rel="nofollow"> <span class="fa-stack"> <i
						class="fa fa-square fa-stack-2x fa-bg-header"></i> <i
						class="fa fa-linkedin fa-stack-1x fa-inverse"></i> </span> </a> <a
					class="google-plus"
					href="https://plus.google.com/u/0/117080893855557903730/posts"
					title="Follow us on Google Plus" target="_blank" rel="nofollow"> <span
					class="fa-stack"> <i class="fa fa-square fa-stack-2x fa-bg-header"></i>
						<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i> </span> </a>
			</div>
		</div>
		<?php
		switch($uri) {
			case 'index':
				page_inc('includes/header_home.php');
				break;
			case 'data':
				page_inc('includes/header_data.php');
				break;
			case 'voice':
				page_inc('includes/header_voice.php');
				break;
			case 'apps':
				page_inc('includes/header_apps.php');
				break;
			default:
				page_inc('includes/header_home.php');
				break;
		}
		?>
	</div>
	<!--./container-->
</div>
</header>
