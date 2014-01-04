<?php
	$uri = substr( $_SERVER['PHP_SELF'], strrpos($_SERVER['PHP_SELF'],'/')+1, -4 );
?>
<header id="header">
	<div class="bgwelcome <?php if(in_array( $uri,array('data','apps','voice') )) echo 'bgdata'; ?>">
	  <div class="container">
            <div class="space38 hidden-xs"></div>
            <div class="space10 visible-xs"></div>
            <div class="row">
                    <div class="col-xs-4 col-sm-3 col-md-2">
                        <!--<a href="index.php" title="Century Link" id="logo" class="sprite">Century Link</a>-->
                        <object data="images/logo.svg" width="141" height="30" type="image/svg+xml">
							<img  src="images/logo.png" alt="CENTURYLINK" width="141" height="30"/>
						</object>
                    </div>
                    <div class="col-xs-8 col-sm-6 col-md-5">
                        <nav class="navbar navbar-default hidden-xs" role="navigation">
                          <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobi-nav-collapse">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                </button>
                                <!--<a href="#" class="navbar-brand visible-xs">Menu</a>-->
                            </div>
                            
                            <div class="collapse navbar-collapse" id="mobi-nav-collapse">
                                <ul class="nav navbar-nav navbar-mainmenu">
                                  <li<?php if($uri == '' || $uri == 'index'){ echo ' class="active"'; }?>><a href="index.php">HOME</a></li>
                                  <li class="dropdown<?php if($uri == 'data' || $uri == 'voice' || $uri == 'apps'){ echo ' active'; }?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCT COMPONENTS <b class="caret"></b></a>
                                  		<ul class="dropdown-menu">
											<li><a href="data.php">MANAGED DATA</a>
                                            	<div class="lidesc">
					                             	<span class="desctext">We manage your internet connection, virtual server, and data back-up.</span>
                                                </div>
                                            </li>
											<li><a href="voice.php">MANAGED VOICE</a>
                                            	<div class="lidesc">
                                                	<span class="desctext">We give you phones, a dial tone, and a wide range of advanced calling and messaging features.</span>
                                                </div>
                                            </li>
											<li><a href="apps.php">MANAGED APPLICATIONS</a>
                                            	<div class="lidesc">
                                                	<span class="desctext">We provide and manager your business apps so you don&apos;t have to buy or update software.</span>
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
							<button class="mobile-nav-button" type="button" data-toggle="collapse" data-target="#mobile-nav-content">
                                <span class="icon-bar"></span>
                               	<span class="icon-bar"></span>
                            	<span class="icon-bar"></span>
                             </button>
                            <div class="collapse navbar-collapse" id="mobile-nav-content">
                                <ul class="nav navbar-nav">
									<li class="active"><a href="index.php">HOME</a></li>
                                  	<li class="mid">
                                  		<strong>PRODUCT COMPONENTS</strong>
	                                  	<ul>
											<li><a href="data.php">MANAGED DATA</a></li>
											<li><a href="voice.php">MANAGED VOICE</a></li>
											<li><a href="apps.php">MANAGED APPLICATIONS</a></li>
	                                  	</ul>
                                  	</li>
                                  	<li class="last">
                                  		<div class="col-xs-6 phone"><a href="callto:800.361.0833"><i class="fa fa-phone"></i>  <span>800.361.0833</span></a></div>
                                  		<div class="col-xs-6 social-header">
					                        <a href="https://www.facebook.com/CenturyLinkBusiness" title="Follow us on Facebook" class="facebook" target="_blank" rel="nofollow">
					                            <span class="fa-stack">
					                                <i class="fa fa-square fa-stack-2x"></i>
					                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
					                            </span>
					                        </a>
					                      
					                        <a href="https://twitter.com/CenturyLinkBiz" title="Follow us on Twitter" class="twitter" target="_blank" rel="nofollow">
					                            <span class="fa-stack">
					                                <i class="fa fa-square fa-stack-2x"></i>
					                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
					                            </span>
					                        </a>
					                      
					                        <a href="http://www.linkedin.com/company/1434913?trk=tyah" title="Follow us on Linkedin" target="_blank" class="linkedin" rel="nofollow">
					                            <span class="fa-stack">
					                                <i class="fa fa-square fa-stack-2x"></i>
					                                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
					                            </span>
					                        </a>
					                      
					                        <a class="google-plus" href="https://plus.google.com/u/0/117080893855557903730/posts" title="Follow us on Google Plus" target="_blank" rel="nofollow">
					                            <span class="fa-stack">
					                                <i class="fa fa-square fa-stack-2x"></i>
					                                <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
					                            </span>
					                        </a>
					                    </div>
                                  	</li>
                                </ul>
                            </div>
                    </nav>
                        
                        
                        
                    <div class="col-xs-0 col-sm-3 col-md-3" style="padding:0;">
                        <ul class="fa-ul hidden-xs">
                          <li><a href="callto:800.361.0833"><i class="fa-li fa fa-phone fa-lg"></i><span>800.361.0833</span></a></li>
                          <li><a href="#set-up-an-apointment" class="btscroll"><i class="fa-li fa fa-calendar fa-lg"></i><span>SCHEDULE A MEETING</span></a></li>
                          <li class="visible-sm">
                           		<a href="https://www.facebook.com/CenturyLinkBusiness" title="Follow us on Facebook" class="facebook" target="_blank" rel="nofollow">
					                            <span class="fa-stack">
					                                <i class="fa fa-square fa-stack-2x"></i>
					                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
					                            </span>
					             </a>
					                      
					             <a href="https://twitter.com/CenturyLinkBiz" title="Follow us on Twitter" class="twitter" target="_blank" rel="nofollow">
					                            <span class="fa-stack">
					                                <i class="fa fa-square fa-stack-2x"></i>
					                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
					                            </span>
					             </a>
					                      
					             <a href="http://www.linkedin.com/company/1434913?trk=tyah" title="Follow us on Linkedin" target="_blank" class="linkedin" rel="nofollow">
					                            <span class="fa-stack">
					                                <i class="fa fa-square fa-stack-2x"></i>
					                                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
					                            </span>
					              </a>
					                      
					              <a class="google-plus" href="https://plus.google.com/u/0/117080893855557903730/posts" title="Follow us on Google Plus" target="_blank" rel="nofollow">
					                            <span class="fa-stack">
					                                <i class="fa fa-square fa-stack-2x"></i>
					                                <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
					                            </span>
					               </a>
                          </li>
                        </ul>
    
                    </div>
                    <div class="col-xs-0 col-md-2 hidden-xs hidden-sm social-header">
                        <a href="https://www.facebook.com/CenturyLinkBusiness" title="Follow us on Facebook" class="facebook" target="_blank" rel="nofollow">
					     	<span class="fa-stack">
					        	<i class="fa fa-square fa-stack-2x fa-bg-header"></i>
					        	<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
					        </span>
						</a>
					                      
					 	<a href="https://twitter.com/CenturyLinkBiz" title="Follow us on Twitter" class="twitter" target="_blank" rel="nofollow">
					    	<span class="fa-stack">
					        	<i class="fa fa-square fa-stack-2x fa-bg-header"></i>
					         	<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
					    	</span>
						</a>
					                      
					 	<a href="http://www.linkedin.com/company/1434913?trk=tyah" title="Follow us on Linkedin" target="_blank" class="linkedin" rel="nofollow">
					     	<span class="fa-stack">
					        	<i class="fa fa-square fa-stack-2x fa-bg-header"></i>
					        	<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
					    	</span>
					 	</a>
					                      
					 	<a class="google-plus" href="https://plus.google.com/u/0/117080893855557903730/posts" title="Follow us on Google Plus" target="_blank" rel="nofollow">
					    	<span class="fa-stack">
					        	<i class="fa fa-square fa-stack-2x fa-bg-header"></i>
					        	<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
					    	</span>
					 	</a>
                    </div>
             </div>
             <?php
			 	switch($uri) {
					case 'index':
						require_once('./header_home.php');
						break;
					case 'data':
						require_once('./header_data.php');
						break;
					case 'voice':
						require_once('./header_voice.php');
						break;
					case 'apps':
						require_once('./header_apps.php');
						break;
					default:
						require_once('./header_home.php');
						break;
				}
			 ?>
	</div><!--./container-->
  </div>
</header>