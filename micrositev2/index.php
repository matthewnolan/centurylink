<?php
	#############
	# THIS PART IS PAGE LOADER
	#############
	
	include_once "config.php";
	
	# include other files
	$redirect_url = @$_SERVER['REDIRECT_URL'];
	if(!empty($redirect_url)) {
		$file = str_replace(ROOT_URL, '', $redirect_url);
		if(strpos($file, '.php') === FALSE) {
			$file = rtrim($file, '/') . '/index.php';
		}
		if(file_exists(ROOT_PATH . $file)){
			return include ROOT_PATH . $file;
		}
	}
	
	#############
	# END PAGE LOADER
	#############
?>
<?php
	page_header('CenturyLink Managed Office','index');
?>
<div id="div-navsticky">
	<div class="container">
    	<div class="row">
        	<div class="col-md-2 col-lg-2 hiddens-xs hidden-sm">
            	<div class="hidden-xs pull-left">
            		<a href="index.php" title="Century Link" id="logo-sticky" class="sprite">Century Link</a>
                </div>
            </div>
            <div class="col-xs-12 col-md-10 col-lg-8">

                <ul class="nav nav-pills pull-left">
                	<li><a href="#learn-how-with-managed-office" class="btscroll">THE DIFFERENCE</a></li>
                    <li><a href="#how-big-is-your-business" class="btscroll">YOUR BUSINESS</a></li>
                    <li><a href="#how-does-pricing-work" class="btscroll">PRICING</a></li>
                    <li><a href="#what-in-it-for-you" class="btscroll">WHAT YOU GET</a></li>
                    <li><a href="#managed-office-component" class="btscroll">COMPONENT</a></li>
                </ul>


            </div>
            <div class="visible-lg">
                <div class="col-lg-2 nopadding">
                	<div class="divcallto">
                            <a href="callto:800.850.9881">
                            	<i class="fa fa-phone fa-lg font-gray-mormal"></i>
                            	800.850.9881
                            </a>
                    </div>
                    <div class="divschedule">
                        	<a href="#set-up-an-apointment" class="btscroll">
                            	<i class="fa fa-calendar fa-lg font-gray-mormal"></i>
                            	Schedule a meeting
                            </a>
                    </div>
                 </div>
            </div>
         </div>
    </div>
</div>

<div id="div-testimonial">
	<div class="container bgtestimonial">
    	<div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="text-center hidden-lg font-green-mormal"><strong>Want to see who else is benefiting from Managed Office?</strong></div>
                    <div class="text-right visible-lg font-green-mormal"><strong>Want to see who else is benefiting from Managed Office?</strong></div>
                    <div class="space10 visible-xs"></div>
            </div>

            <div class="col-xs-12 col-sm-8 col-md-8">

            	<div class="row">
                	<div class="col-xs-1 col-md-1">
                    	<a href="#" class="sprite btprev"></a>
                    </div>
                    <div class="col-xs-9 col-md-10">
                      <div id="testimonial-slider">
                        <div class="color-testtimonial color-testtimonial-first">
                            <div class="say-testimonial"><p><strong>&quot;With Managed Office, we're more efficient, and more productive. For us, it was the shortcut to fast-forward.&quot;</strong></p></div>
                            <em>Dale Griffith, Western Trucking</em>
                        </div>
                        <div class="color-testtimonial">
                            <div class="say-testimonial"><p><strong>&quot;With Managed Office, we're more efficient, and more productive. For us, it was the shortcut to fast-forward.&quot;</strong></p></div>
                            <em>Dale Griffith, Western Trucking</em>
                        </div>
                        <div class="color-testtimonial">
                            <div class="say-testimonial"><p><strong>&quot;With Managed Office, we're more efficient, and more productive. For us, it was the shortcut to fast-forward.&quot;</strong></p></div>
                            <em>Dale Griffith, Western Trucking</em>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-1 col-md-1">
                    	<a href="#" class="sprite btnext"></a>
                    </div>
                </div>

            </div>
        </div>
	</div>
</div>
<div class="line-break sprite" id="learn-how-with-managed-office"></div>
<div id="managed-office">
  <div class="overlay-timer">
	<div class="container">
    	<div class="space38 hidden-xs"></div>
    	<div class="space100 hidden-xs"></div>
    	<div class="row">
        	<div class="col-sm-6 col-md-5 col-lg-5">
            	<div class="space38 hidden-xs"></div>
            	<h2>What makes Managed Office different?</h2>
                <p class="fs14b font-gray-mormal">
                	Managed Office is more than just a bundle of products and services. When you have Managed Office, CenturyLink implements, maintains and upgrades a huge amount of advanced business information technology, so that you don't have to worry about it. You get one provider, one network, and one number to call for White Glove Service...
                </p>
                <p class="fs14b">
                	With Managed Office, it's all-in-one and done.
                </p>
            </div>
            <div class="col-sm-6 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1 text-center">
            	<div class="hidden-xs hidden-sm">
                	<div class="hspaceoff">
                         <div class="sprite bg-circle"></div>
                    </div>
                    <div class="hspaceoff">
                    	<div class="align-middle"><strong>YOUR <br /> ALL-IN-ONE SOLUTION</strong></div>
                    	<table class="tb-managed-office">
                        	<tr>
                            	<td class="valigntop widtd70"><i class="sprite ico-glove"></i></td>
                                <td class="text-left">
                                	<span class="title-col">White Glove Service</span>
                                    <p class="desc-col">From the moment you sign up for Managed Office you get 24/7 full-service support.</p>
                                </td>
                            </tr>
                            <tr>
                            	<td class="valigntop widtd70"><i class="sprite ico-dollar"></i></td>
                                <td class="text-left">
                                	<span class="title-col">No Capital Expense</span>
                                    <p class="desc-col">You don't have to buy or maintain your own equipment. Plus, we provide and manage your apps so you don't have to purchase and update software.</p>
                                </td>
                            </tr>
                            <tr>
                            	<td class="valigntop widtd70"><i class="sprite ico-human-timer"></i></td>
                                <td class="text-left">
                                	<span class="title-col">One Contact</span>
                                    <p class="desc-col">Anytime you have a question or a problem, reach out to us and we'll make it right.</p>
                                </td>
                            </tr>
                            <tr>
                            	<td class="valigntop widtd70"><i class="sprite ico-chair"></i></td>
                                <td class="text-left">
                                	<span class="title-col">One Flat Rate</span>
                                    <p class="desc-col">When you get one flat rate per seat per month, scaling is much easier.</p>
                                </td>
                            </tr>
                            <tr>
                            	<td class="valigntop widtd70"><i class="sprite ico-link-network"></i></td>
                                <td class="text-left">
                                	<span class="title-col">One Network</span>
                                    <p class="desc-col">When you're on the CenturyLink network, you get a leading provider and an outstanding service level agreement that assures your business stays up and running.</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="visible-xs visible-sm">
                	<img src="<?php echo ROOT_URL; ?>/images/mobi/modifferent.png" alt="" class="imgmodiff" />
                </div>

            </div>
        </div>
    </div>
  </div>
  <div class="space20 visible-xs"></div>
  <!--<div class="hidden-xs"><div class="line-gradient"></div></div>
  <div class="visible-xs"><div class="mobi-line-gradient"></div></div>
  <div class="space20 visible-xs"></div>
  <div class="container">
  	<div class="row">
    	<div class="space40 visible-lg visible-md"></div>
		<div class="col-sm-6 col-md-6 col-md-push-6 col-lg-6">
			<div id="div-left-modifferent">
            	<div class="space38 visible-lg"></div>
				<h2>How can Managed Office change your business?</h2>
				<div class="fs14b font-gray-mormal"><strong>See how our products and services all work together to drive your business forward.</strong></div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6 col-md-pull-6 col-lg-6">
        	<div class="space20 visible-xs visible-sm visible-md"></div>
			<div>
                <iframe width="485" height="298" src="//www.youtube.com/embed/8hkMuw9PIUo" frameborder="0" class="home-vid-1" allowfullscreen></iframe>
			</div>
            <div class="space20 visible-xs visible-sm visible-md"></div>
		</div>
  	</div>
    <div class="space38 hidden-xs"></div>

  </div>-->
  <div class="nextpage visible-lg visible-md">
        <a href="#how-big-is-your-business" class="btscroll">
        	<i class="sprite down-arrow"></i>
        	<span>IS MANAGED OFFICE RIGHT FOR YOUR BUSINESS</span>
        </a>
  </div>
  <div class="space60 visible-md visible-lg"></div>
</div>
<div class="line-break sprite" id="how-big-is-your-business"></div>
<div class="business">
	<div class="container">
    	<div class="space60 hidden-xs"></div>
    	<div class="row">
			<div class="col-sm-4 col-md-5">
            	<div class="space100 hidden-xs"></div>
				<div id="div-left-mobusiness">
					<h2>How big is your business?</h2>
			        <p class="fs14b font-gray-mormal"><strong>No matter what size your business is, Managed Office can add a lot of value and prepare you for the future.</strong></p>
			    </div>
		    </div>

		    <div class="col-sm-6 col-sm-offset-1 col-md-6 col-md-offset-1">
            	<div class="visible-xs">
                	<img src="<?php echo ROOT_URL; ?>/images/mobi/business.png" alt="" class="img-responsive" />
                </div>
            	<div class="hidden-xs">
                        <div class="sprite bg-circle"></div>
                        <div class="row" id="right-mobusiness">
                            <div class="col-sm-4 col-md-4">
                                <div class="img-mobusiness"><img src="<?php echo ROOT_URL; ?>/images/no_it.png" alt="" /></div>
                                <div class="tile-it-mobusiness"><strong><span class="font-green-mormal">NO</span> <span class="font-white-mormal">IT staff?</span></strong></div>
                                <div class="content-it-mobusiness">
                                    You're likely spending too much time trying to manage your own communication and your own network. With Managed Office, CenturyLink makes sure you're always up and running so that you can focus on your core business.
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="img-mobusiness"><img src="<?php echo ROOT_URL; ?>/images/limited_it.png" alt="" /></div>
                                <div class="tile-it-mobusiness"><strong><span class="font-green-mormal">LIMITED</span> <span class="font-white-mormal">IT staff?</span></strong></div>
                                <div class="content-it-mobusiness">
                                    They're likely stretched making sure your employees are connected 100% of the time. Managed Office is a full service, full support solution that can help free up your IT staff.  We install all your communications and manage your network so they can manage mission critical business technology.
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div class="img-mobusiness"><img src="<?php echo ROOT_URL; ?>/images/team_it.png" alt="" /></div>
                                <div class="tile-it-mobusiness"><strong><span class="font-green-mormal">FULL</span> <span class="font-white-mormal">IT staff?</span></strong></div>
                                <div class="content-it-mobusiness">
                                    They're likely burdened with day-to-day communication and IT support tasks. Moving to a fully managed solution will free up your IT staff from managing your network and allow them instead to focus on technologies and operations that can grow your business.
                                </div>
                            </div>
                        </div>
                </div>
		    </div>
	    </div>
        <div class="space100 hidden-xs"></div>
        <div class="space100 hidden-xs"></div>
        <div class="space100 hidden-xs"></div>
        <div class="nextpage visible-lg visible-md">
            <a href="#how-does-pricing-work" class="btscroll">
                <i class="sprite down-arrow"></i>
                <span>WHAT WILL MANAGED OFFICE COST?</span>
            </a>
        </div>
        <div class="space20"></div>
    </div>
</div>
<div class="line-break sprite" id="how-does-pricing-work"></div>
<div id="priccingwork">
  <div class="overlay-chair">
	<div class="container">
    	<div class="space60 hidden-xs"></div>
    	<div class="row">
			<div class="col-sm-6 col-md-5 col-lg-6">
            	<div class="space38 hidden-xs"></div>
				<div>
					<h2>How does pricing work?</h2>
                    <div class="visible-xs">
                        <img src="<?php echo ROOT_URL; ?>/images/mobi/simple_answer.png" alt="" />
                    </div>
			        <p class="fs14b font-gray-mormal">
                    	The beauty of Managed Office is that you pay one fixed rate per seat per month. You dont have to buy, install or manage anything, and you get one invoice from one trusted provider. You can plan for the short term and the long term because our predictable pricing scales with your business.
                    </p>
                    <p class="fs14b">
			        	Need questions answered?<br />
			        	<span class="font-gray-mormal">Schedule a meeting to learn more.</span>
					</p>
			    </div>
		    </div>
		    <div class="col-sm-6 col-md-7 col-lg-6">
				<div class="hidden-xs">
					<img src="<?php echo ROOT_URL; ?>/images/simple_answer.png" class="fullwidth-sm" alt="" />
			    </div>
		    </div>
	    </div>
        <div class="space100 hidden-xs"></div>
    	<div class="nextpage visible-lg visible-md">
            <a href="#what-in-it-for-you" class="btscroll">
                <i class="sprite down-arrow"></i>
                <span>WHAT'S IN IT FOR YOU?</span>
            </a>
        </div>
    </div>
  </div>
</div>
<div class="line-break sprite" id="what-in-it-for-you"></div>
<div id="whatinit">
	<div class="container">
      <div class="overlay-circle">
    	<div class="space100 hidden-xs"></div>
    	<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-5 col-lg-6">
            	<div class="space38 hidden-xs"></div>
				<div>
					<h2>What's in it for you?</h2>
                    <div class="visible-xs">
                        <img src="<?php echo ROOT_URL; ?>/images/mobi/whatinit.png" alt="" usemap="#slideshowmap" class="img-responsive" />
                        <map name="slideshowmap">
                          <area shape="circle" coords="69,84,37" href="#1" alt="One invoice, one trusted provider">
                          <area shape="circle" coords="137,47,37" href="#2" alt="Phone and hardware">
                          <area shape="circle" coords="208,80,37" href="#3" alt="Anytime cloud access to files">
                          <area shape="circle" coords="225,155,37" href="#4" alt="Fully managed software updates">
                          <area shape="circle" coords="180,220,37" href="#5" alt="One solution one partner">
                          <area shape="circle" coords="100,221,37" href="#6" alt="Dynamic scalability">
                          <area shape="circle" coords="50,160,37" href="#7" alt="Lower total cost of ownership">
                        </map>
                    </div>
                    <div class="space20 visible-xs"></div>
                    <p class="fs14b font-gray-mormal">
			        &bull; All your phones and hardware are installed and managed for you. <br />
                    &bull; There are no upfront investments or ongoing operational expenses.<br />
                    &bull; CenturyLink's Cloud makes your business's information secure and accessible, anytime, anywhere.  <br />
                    &bull; You'll always have the latest and greatest, because we're continually updating your communication, applications, and network technology.  <br />
                    &bull; You'll never need a thirdparty supplier to upgrade your software or manage your technology.<br />
                    &bull; Managed Office is a totally scalable solution.<br />
                    &bull; Our fully managed solution improves your total cost of ownership.<br />
                    &bull; You get one invoice from one trusted partner.<br />
                    &bull; A dedicated technical operations center is available 24/7 and proactively monitors your network.
                    </p>
					<div class="space20 visible-xs"></div>
			    </div>
		    </div>
		    <div class="col-sm-6 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-0 hidden-xs">
				<div class="hidden-xs">
					<div class="slideshow">
                    	<div class="slide slide-first">
                        	<img src="<?php echo ROOT_URL; ?>/images/wiify_invoice.png" alt="" class="img-responsive" />
                        </div>
                        <div class="slide">
                        	<img src="<?php echo ROOT_URL; ?>/images/wiify_phone.png" alt="" class="img-responsive" />
                        </div>
                        <div class="slide">
                        	<img src="<?php echo ROOT_URL; ?>/images/wiify_cloud.png" alt="" class="img-responsive" />
                        </div>
                        <div class="slide">
                        	<img src="<?php echo ROOT_URL; ?>/images/wiify_dot.png" alt="" class="img-responsive" />
                        </div>
                        <div class="slide">
                        	<img src="<?php echo ROOT_URL; ?>/images/wiify_human.png" alt="" class="img-responsive" />
                        </div>
                        <div class="slide">
                        	<img src="<?php echo ROOT_URL; ?>/images/wiify_chair.png" alt="" class="img-responsive" />
                        </div>
                        <div class="slide">
                        	<img src="<?php echo ROOT_URL; ?>/images/wiify_calc.png" alt="" class="img-responsive" />
                        </div>
                    </div>
			    </div>
		    </div>
	    </div>

        <div class="space60 hidden-xs"></div>
        <div class="space5 hidden-xs"></div>
    	<div class="nextpage visible-lg visible-md">
            <a href="#managed-office-component" class="btscroll">

                <i class="sprite down-arrow"></i>
                <span>LEARN MORE ABOUT OUR PRODUCT COMPONENTS?</span>
            </a>

        </div>
      </div>
	</div>
</div>
<div class="line-break sprite" id="managed-office-component"></div>
<div id="maofco">
	<div class="container">
    	<div class="space38 hidden-xs"></div>
        <h2 class="text-center">Managed Office Components</h2>
        <div class="space38 hidden-xs"></div>
        <div class="row">
        	<div class="col-sm-6 col-md-5 col-lg-6">
            	<div class="space38 hidden-xs"></div>
            	<h2><span class="font-green-mormal">Managed DATA</span><br />The world of business only works if you're connected to it.</h2>
                <div class="visible-xs">
                	<img src="<?php echo ROOT_URL; ?>/images/mobi/icon_data.png" alt="" class="img-responsive" />
                </div>
                <div class="space20 visible-xs"></div>
                <p class="fs14b font-gray-mormal">
                Managed Office not only makes sure every employee is connected to the Internet, CenturyLink makes sure everyone in your office is connected to our privately owned and operated network.
                </p>
                <a href="data.php" class="sprite btreadmore">Read more</a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
            	<div class="overlay-caro hidden-xs fullwidth-sm">
                	<div class="space38 hidden-xs"></div>
                	<img src="<?php echo ROOT_URL; ?>/images/icon_data.png" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
        <div class="space40"></div>
        <div class="hidden-xs"><div class="line-gradient"></div></div>
  		<div class="visible-xs"><div class="mobi-line-gradient"></div></div>
   </div>
   <div class="overlay-voice">
   		<div class="container">
        	<div class="space40 hidden-xs"></div>
            <div class="row fix-xs-components">
                <div class="col-sm-6 col-md-5 col-lg-6">
                    
                    <h2><span class="font-green-mormal">Managed VOICE</span> <br> In one word, how do we make sure everyone is on the same page? VoIP.</h2>
                    <div class="visible-xs">
                        <img src="<?php echo ROOT_URL; ?>/images/mobi/icon_voice.png" alt="" class="img-responsive" />
                    </div>

                    <div class="space20 visible-xs"></div>
                    <p class="fs14b font-gray-mormal">
                    Managed Office gives you everything you need to make calls, including the phones themselves, and a wide variety of advanced features.
                    </p>
                    <a href="voice.php" class="sprite btreadmore">Read more</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="hidden-xs">
                        <img src="<?php echo ROOT_URL; ?>/images/icon_voice.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
   		</div>
   </div>
        <div class="hidden-xs"><div class="line-gradient"></div></div>
  		<div class="visible-xs"><div class="mobi-line-gradient"></div></div>
   <div class="overlay-apps">
   		<div class="container">
            <div class="row fix-xs-components-apps">
                <div class="col-sm-6 col-md-5 col-lg-6">
                    <div class="space38 hidden-xs"></div>
                    <h2><span class="font-green-mormal">Managed APPLICATIONS</span><br />How do you get all the tools of the trade without buying the toolbox?</h2>
                    <div class="visible-xs">
                        <img src="<?php echo ROOT_URL; ?>/images/mobi/icon_apps.png" alt="" class="img-responsive" />
                    </div>
                     <div class="space20 visible-xs"></div>
                    <p class="fs14b font-gray-mormal">
                    The days of buying and updating software are over. With Managed Applications, you get the essential business applications you need without having to buy licenses or worry about installation.
                    </p>
                    <table width="100%" class="tbmnapps visible-xs">
                    	<tr>
                        	<td><img src="<?php echo ROOT_URL; ?>/images/ico_app_1.png" alt="" class="img-responsive" /></td>
                            <td><img src="<?php echo ROOT_URL; ?>/images/ico_app_2.png" alt="" class="img-responsive" /></td>
                            <td><img src="<?php echo ROOT_URL; ?>/images/ico_app_3.png" alt="" class="img-responsive" /></td>
                        </tr>
                        <tr>
                        	<td><img src="<?php echo ROOT_URL; ?>/images/ico_app_4.png" alt="" class="img-responsive" /></td>
                            <td><img src="<?php echo ROOT_URL; ?>/images/ico_app_5.png" alt="" class="img-responsive" /></td>
                            <td><img src="<?php echo ROOT_URL; ?>/images/ico_app_6.png" alt="" class="img-responsive" /></td>
                        </tr>
                    </table>
                    <a href="apps.php" class="sprite btreadmore">Read more</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">

                    <div class="hidden-xs">
                        <div class="space38 hidden-xs"></div>
                        <img src="<?php echo ROOT_URL; ?>/images/icon_apps.png" alt="" class="img-responsive" />
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-xs-12">
                	<div class="visible-xs text-center">
                    	
                    	<span class="fs13b">To speak with a Centurylink representative</span> <br />
                        <a href="callto:800.850.9881"><span class="fs13b">Call 800.850.9881</span></a>
                        <div class="space10"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nextpage visible-lg visible-md">
            <a href="#set-up-an-apointment" class="btscroll">
                <i class="sprite down-arrow"></i>
                <span>SET UP AN APPOINTMENT</span>
            </a>
        </div>
       
        <div class="space20"></div>
      </div>
	</div>
</div>
<div id="lpButDivID-1387813736901" class="icolivechat hidden-xs"></div>
<script type="text/javascript" charset="UTF-8" src="https://sales.liveperson.net/hc/56948775/?cmd=mTagRepstate&amp;site=56948775&amp;buttonID=43&amp;divID=lpButDivID-1387813736901&amp;bt=1&amp;c=1"></script>
<?php
	page_footer();
?>
