<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.readmore').readmore({
			speed:200,
			maxHeight:40,
			moreLink: '<a href="javascript:;"><div class="plus"><i class="fa fa-plus"></i></div></a>',
			lessLink: '<a href="javascript:;"><div class="minus"><i class="fa fa-minus"></i></div></a>',
			afterToggle: function(trigger, element, more) {
				if(more){
					element.find('.3dot').html('');
					if(!element.find('.details').hasClass('more')){
						element.find('.details').addClass('more');
					};
					setTimeout(function(){
						if(!element.hasClass('fix-fixed-height')){
							element.addClass('fix-fixed-height');
						}
					}, 150 );
				}else{
					element.find('.3dot').html('...');
					setTimeout(function(){
						element.find('.details').removeClass('more');
					}, 200 );
					element.removeClass('fix-fixed-height');
				}
			}
		});
	})
</script>
<div class="bdata">
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row sticky-padding" id="easy">
				<div class="col-sm-6 copy-block">
					<h3 class="block-title">Back up your files like a pro. No
						experience required.</h3>
					<p class="block-content">With CenturyLink Cloud Solutions, your
						employees' files are backed up automatically. And with our
						easy-to-use Management Console, you'll get the admin tools you
						need to install and schedule backups or delete old and archived
						files—letting you literally set it and forget it.</p>
				</div>
				<div class="col-sm-6 image-block">
					<img src="<?php echo ROOT_URL;  ?>/images/fpo3_2x.png" width="450"
						alt="FPO" />
				</div>
			</div>

			<div class="block-seperator"></div>
			<hr class="block-hr" />

			<div class="row sticky-padding" id="safe">
				<div class="col-sm-6 image-block hidden-xs">
					<img src="<?php echo ROOT_URL;  ?>/images/fpo4_2x.png" width="380"
						alt="" />
				</div>
				<div class="col-sm-6 copy-block">
					<h3 class="block-title">The business world doesn’t run smoothly.
						Your data backups can.</h3>
					<p class="block-content">Here's one worry you can cross off your
						list. With our 99.95% uptime service level agreement, you can rest
						assured that your files are always safe, securely accessible and
						automatically backed up offsite. Plus, we support the most
						stringent levels of data compliance across the healthcare, legal
						and financial industries.</p>
					<p class="block-images">
						<img src="<?php echo ROOT_URL;  ?>/images/bdb-logo3.jpg"
							alt="LOGO" /> <img
							src="<?php echo ROOT_URL;  ?>/images/bdb-logo1.jpg" alt="LOGO" />
						<img src="<?php echo ROOT_URL;  ?>/images/bdb-logo2.jpg"
							alt="LOGO" /> <img
							src="<?php echo ROOT_URL;  ?>/images/bdb-logo4.jpg" alt="LOGO" />
						<img src="<?php echo ROOT_URL;  ?>/images/bdb-logo5.jpg"
							alt="LOGO" />
					</p>
				</div>
				<div class="col-sm-6 image-block visible-xs">
					<img src="<?php echo ROOT_URL;  ?>/images/fpo4_2x.png" width="380"
						alt="" />
				</div>
				<div class="block-seperator"></div>
				<hr class="block-hr" />
			</div>

			<div class="row sticky-padding" id="ffb">
				<div class="col-sm-6 copy-block">
					<h3 class="block-title">Onboard effortlessly and get started today.
					</h3>
					<p class="block-content">Nothing should stand in the way of your
						business taking full advantage of our Cloud Services, or getting
						the convenience and security that comes with backing up your data
						to the cloud. With FREE FastForward Onboarding, getting started is
						easy. Just choose from one of our three onboarding options based
						on your timing and budget, and get started with ease.</p>

				</div>
				<div class="col-sm-6 image-block">
					<img id="onboard-image"
						src="<?php echo ROOT_URL;  ?>/images/onboard_2x.png" width="420"
						alt="ONBOARD" />
				</div>
			</div>

			<div class="block-seperator"></div>

			<div class="row onboard3col">
				<div class="col-sm-4">
					<img src="<?php echo ROOT_URL;  ?>/images/gears.png" alt="GEARS" />
					<div class="onboard-title">Do it Yourself</div>
					<div class="onboard-content readmore">
						Maybe you want the flexibility to set up and activate our Cloud
						Services on your own. <span class="3dot">...</span>
						<div class="details"></div>
						Well, we'll still make it easy. Using nothing more than an
						Internet connection, you can start backing up your files to the
						cloud quickly, whenever you want. CenturyLink provides easy access
						to your data with our intuitive online Management Console.

					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="<?php echo ROOT_URL;  ?>/images/talk.png" alt="TALK" />
					<div class="onboard-title">We Help You Get Started</div>
					<div class="onboard-content readmore">
						With our guided activation, one of our cloud experts will walk you
						through the <span class="3dot">...</span>
						<div class="details"></div>
						initial steps of setup in order to make sure your business is
						taking full advantage of the cloud and can back up all of your
						files safely and securely.
						<div class="fix-height hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="<?php echo ROOT_URL;  ?>/images/join.png" alt="Join" />
					<div class="onboard-title">We Take Care of Every Step</div>
					<div class="onboard-content readmore">
						Need additional support? A CenturyLink cloud expert will work
						closely with you to <span class="3dot">...</span>
						<div class="details"></div>
						customize a plan that meets all your business needs and data
						backup requirements while getting you to the cloud quickly and
						affordably.
						<div class="fix-height hidden-xs hidden-sm"></div>
					</div>
				</div>
			</div>

			<div class="it-present">
				<h3>Want your own IT staff?</h3>
				<p>
					Right now, you can upgrade to our <strong>Remote IT Support Pack
						for only $19.99/month</strong><br /> CenturyLink will handle
					maintenance, networking and troubleshooting for all devices.
				</p>
				<p>
					<strong>Call 800.361.0833</strong> to learn more about our remote
					IT support pack.
				</p>
			</div>


			<div class="block-seperator"></div>
			<hr class="block-hr" />

			<div class="row sticky-padding" id="pricing">
				<div class="col-sm-6 image-block hidden-xs">
					<img src="<?php echo ROOT_URL;  ?>/images/fpo5_2x.png" width="360"
						alt="" />
				</div>
				<div class="col-sm-6 copy-block">
					<h3 class="block-title">The solutions are in the cloud. The pricing
						is down to earth.</h3>
					<p class="block-content">When it comes to backing up your critical
						data, every business has its own needs. Unlike traditional on-site
						data backup solutions, our pricing plans are applied to individual
						users and can be scaled up and down as your business evolves—so
						you never have to pay for what you're not using.</p>

				</div>
				<div class="col-sm-6 image-block visible-xs">
					<img src="<?php echo ROOT_URL;  ?>/images/fpo5_2x.png" width="360"
						alt="" />
				</div>
			</div>

			<div class="cost">
				<div class="cost-title">
					<span class="hidden-sm hidden-xs"></span>
					<h3>
						Our flexible model allows you to scale your storage so <br /> you
						only pay for just what you need.
					</h3>
					<span class="hidden-sm hidden-xs"></span>
				</div>
				<div class="clearfix"></div>
				<img src="<?php echo ROOT_URL;  ?>/images/bs-pricing.png" alt="" />
				<div class="cost-more">
					Call us so we can show you how CenturyLink can reduce your costs.<br />
					<a href="tel:800.361.0833"><strong>800.361.0833</strong> </a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="block-seperator"></div>
<hr class="home-hr" />
<div class="video">
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row video-container">
				<div class="video-left col-sm-7 hidden-xs">
					<iframe width="560" height="300"
						src="//www.youtube.com/embed/PfOEqfbQ6gE" frameBorder="0"
						allowfullscreen></iframe>
				</div>
				<div class="video-right col-sm-5">
					<div>
						<h3>Learn why you can depend on the cloud through thick and thin.</h3>
						<p>Every business faces adversity&#8212;but when you have the
							cloud backing up your data, surviving disasters great and small
							is a whole lot easier. Watch the video to find out more.</p>
					</div>
				</div>
				<div class="video-left col-sm-7 visible-xs">
					<iframe width="560" height="300"
						src="//www.youtube.com/embed/PfOEqfbQ6gE" frameBorder="0"
						allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
