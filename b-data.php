<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.readmore').readmore({
			maxHeight:40,
			moreLink: '<a href="#"><div class="plus"><i class="fa fa-plus"></i></div></a>',
			lessLink: '<a href="#"><div class="minus"><i class="fa fa-minus"></i></div></a>',
			afterToggle: function(trigger, element, more) {
				if(more){
					$('#onboard-image').attr('src','images/onboard.png');
					element.find('.3dot').html('');
					element.find('.details').attr('style','display:inline');
					element.addClass('fix-fixed-height');
				}else{
					$('#onboard-image').attr('src','images/onboard-closed.png');
					element.find('.3dot').html('...');
					element.find('.details').attr('style','display:block');
					element.removeClass('fix-fixed-height');
				}
			}
		});
	});
</script>
<div class="bdata" id="easy">
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row">
				<div class="col-sm-6 copy-block">
					<h3 class="block-title">
						Back up your files like a pro. No experience required.
					</h3>
					<p class="block-content">
						With CenturyLink Cloud Solutions, your employees' files are backed up automatically. And with our easy-to-use management console, you'll get the admin tools you need to install and schedule backups or delete old and archived files--letting you literally set it and forget it.
					</p>
				</div>
				<div class="col-sm-6 image-block">
				<img src="images/bdb-fpo1.png" alt="FPO"/>
				</div>
			</div>
			
			<div class="block-seperator"></div>
			<hr class="block-hr"/>
			
			<div class="row" id="safe">
				<div class="col-sm-6 image-block">
				<img src="images/bdb-fpo2.png" alt=""/>
				</div>
				<div class="col-sm-6 copy-block">
					<h3 class="block-title">
						The business world doesn't run smoothly. Your data backups can.
					</h3>
					<p class="block-content">
						Here's one worry you can cross off your list. With our 99.95% uptime service level agreement, you can rest assured that your files are always safe, securely accessible and automatically backed up offsite.
					</p>
					<p class="block-images">
						<img src="images/bdb-logo3.jpg" alt="LOGO"/>
						<img src="images/bdb-logo1.jpg" alt="LOGO"/>
						<img src="images/bdb-logo2.jpg" alt="LOGO"/>
						<img src="images/bdb-logo4.jpg" alt="LOGO"/>
						<img src="images/bdb-logo5.jpg" alt="LOGO"/>
					</p>
				</div>
			</div>
			
			<div class="block-seperator"></div>
			<hr class="block-hr"/>
			
			<div class="row" id="ffb">
				<div class="col-sm-7 copy-block">
					<h3 class="block-title">
						Onboard effortlessly and get started today.
					</h3>
					<p class="block-content">
						Nothing should stand in the way of your business taking full advantage of our cloud services,
						or getting the convenience and security that comes with backing up your data to the Cloud. With FREE FastForward Onboarding&#8480;,
						getting started is easy. Just choose from one of our three onboarding options based on your timing and budget, and get started with ease.
						<a href="">Download pdf <img src="images/pdf.png" alt="PDF"/>  </a>      for details of all support plans.
					</p>
					
				</div>
				<div class="col-sm-5 image-block">
					<img id="onboard-image" src="images/onboard-closed.png" alt="ONBOARD"/>
				</div>
			</div>
			
			<div class="block-seperator"></div>
			
			<div class="row onboard3col">
				<div class="col-sm-4">
					<img src="images/gears.png" alt="GEARS"/>
					<div class="onboard-title">Do it Yourself</div>
					<div class="onboard-content readmore">
						Maybe you want the flexibility to set up and activate our Cloud services on your own.
						<span class="3dot">...</span><div class="details"></div>
						Well, we'll still make it easy. Using nothing more than an Internet connection, you can start backing up your files to the Cloud quickly, whenever you want.  CenturyLink provides easy access to your data with our intuitive online Management Console.
					
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="images/talk.png" alt="TALK"/>
					<div class="onboard-title">We Help You Get Started</div>
					<div class="onboard-content readmore">
						With our guided activation, one of our Cloud experts will walk you through the
						<span class="3dot">...</span><div class="details"></div>
						 initial steps of setup in order to make sure your business is taking full advantage of the Cloud and can back up all of your files safely and securely.
						<div class="new-fix-height4 hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="images/join.png" alt="Join"/>
					<div class="onboard-title">We Take Care of Every Step</div>
					<div class="onboard-content readmore">
						Need additional support? A CenturyLink Cloud expert will work closely with you to
						<span class="3dot">...</span><div class="details"></div>
						customize a plan that meets all your business needs and data backup requirements while getting you to the Cloud quickly and affordably.
						<div class="new-fix-height4 hidden-xs hidden-sm"></div>
					</div>
				</div>
			</div>
			
			<div class="it-present">
				<h3>Want your own IT staff?</h3>
				<p>
					Right now you can upgrade to our <strong>Remote IT Support Pack for only $19.99/month.</strong><br/>
					CenturyLink will handle maintenance, networking, and troubleshooting for all devices.
				</p>
				<p>
					<strong>Call 123.456.7890</strong> to learn more about our remote IT support pack.
				</p>
			</div>
			
			
			<div class="block-seperator"></div>
			<hr class="block-hr"/>
			
			<div class="row"  id="pricing">
				<div class="col-sm-6 image-block">
					<img src="images/bdb-fpo3.png" alt=""/>
				</div>
				<div class="col-sm-6 copy-block">
					<h3 class="block-title">
						The solutions are in the cloud. The pricing is down to earth.
					</h3>
					<p class="block-content">
						When it comes to backing up your critical data, every business has its own needs.
						Unlike traditional on-site data backup solutions, our pricing plans are applied to individual users,
						and can be scaled up and down as your business evolves--so you never have to pay for what you're not using.
					</p>
					
				</div>
			</div>
					
			<div class="cost">
				<div class="cost-title">
					<span class="hidden-sm hidden-xs"></span>
					<h3>Our flexible model allows you to scale your storage so you only <br/> pay for just what you need.</h3>
					<span class="hidden-sm hidden-xs"></span>
				</div>
				<div class="clearfix"></div>
				<img src="images/bs-pricing.png" alt=""/>
				<div class="cost-more">
					Call us so we can show you how CenturyLink can reduce your costs.<br/>
					<strong>123.456.7890</strong>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="block-seperator"></div>
<hr class="home-hr"/>
<div class="video">
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row video-container">
				<div class="video-left col-sm-7">
					<iframe width="560" height="315" src="//www.youtube.com/embed/PfOEqfbQ6gE" frameBorder="0" allowfullscreen></iframe>
				</div>
				<div class="video-right col-sm-5">
					<div>
						<h3>Learn why you can depend on the cloud through thick and thin.</h3>
						<p>
							Every business faces adversity&#8212;but when you have the cloud backing up your data, surviving disasters great and small is a whole lot easier. Watch the video to find out more.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>