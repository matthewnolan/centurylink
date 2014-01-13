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
		})
		
	});
</script>
<div class="bhosted">
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row sticky-padding" id="email">
				<div class="col-sm-6 copy-block">
					<h3 class="block-title">Now you can be on the same page, and you
						can share the page too.</h3>
					<p class="block-content">Here, there, or somewhere between here and
						there, is where you and your employees need to work. It's the new
						workspace&#8212;without walls. It's where you need to have access
						to everything on any device. You don't want to compromise. You
						want to be productive and competitive. And the good news is, you
						can be. All from the most trusted name in business productivity.
						Microsoft.</p>

				</div>
				<div class="col-sm-6 image-block">
					<img src="<?php echo ROOT_URL;  ?>/images/new-business-fpo1.png"
						alt="MICROSOFT CLOUD" />
				</div>
			</div>
			<div class="block-seperator"></div>
			<div class="row onboard3col">
				<div class="col-sm-4 ">
					<img src="<?php echo ROOT_URL;  ?>/images/exchange.png" alt="GEARS" />
					<div class="onboard-title">Microsoft Hosted Exchange</div>
					<div class="onboard-content new-business readmore">
						Emails, invites, calendars, the works. Enjoy bigger and more
						reliable mailboxes <span class="3dot">...</span>
						<div class="details">
							and added security. Wherever you work, you’ll work smarter even
							though you’re working offsite or away from home.
							<p>
								<a
									href="<?php echo ROOT_URL;  ?>/pdf/business-hosted-apps/Microsoft_Hosted_Exchange.pdf"
									target="_blank" class="pdflink">Download</a> the details <img
									src="<?php echo ROOT_URL;  ?>/images/pdf.png" alt="" />
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="<?php echo ROOT_URL;  ?>/images/sharepoint.png"
						alt="TALK" />
					<div class="onboard-title">Microsoft Hosted SharePoint</div>
					<div class="onboard-content new-business readmore">
						This is collaboration at its best. Share ideas and documents,
						organize, build, manage <span class="3dot">...</span>
						<div class="details"></div>
							and best of all, discover a new way to work…from anywhere. &nbsp; &nbsp; &nbsp;
							<p>
								<a
									href="<?php echo ROOT_URL;  ?>/pdf/business-hosted-apps/Microsoft_Hosted_SharePoint.pdf"
									target="_blank" class="pdflink">Download</a> the details <img
									src="<?php echo ROOT_URL;  ?>/images/pdf.png" alt="" />
							</p>
						<div class="fix-height-1 hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="<?php echo ROOT_URL;  ?>/images/lync.png" alt="Join" />
					<div class="onboard-title">Microsoft Hosted Lync</div>
					<div class="onboard-content new-business readmore">
						Now you can host online meetings, video calls and instant
						messages.
						<div class="details"></div>
						<p>This is the capability to meet in person, without being there
							in person.</p>
						<p>
							<a
								href="<?php echo ROOT_URL;  ?>/pdf/business-hosted-apps/Microsoft_Hosted_Lync.pdf"
								target="_blank" class="pdflink">Download</a> the details <img
								src="<?php echo ROOT_URL;  ?>/images/pdf.png" alt="" />
						</p>
						<div class="fix-height-2 hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="block-seperator"></div>
				<hr class="block-hr" />
			</div>

			<div id="safe" class="row sticky-padding">
				<div class="col-sm-6 image-block hidden-xs">
					<img src="<?php echo ROOT_URL;  ?>/images/fpo4_2x.png" width="380"
						alt="" />
				</div>
				<div class="col-sm-6 copy-block">
					<p class="block-link mobile-trick-padding">Protect your business</p>
					<h3 class="block-title">Take security off manual, and put it on
						automatic.</h3>
					<p class="block-content">It's just human nature. The things we
						can't see, we tend to take for granted. Like computer viruses and
						our network security. That's why McAfee is so important. It makes
						your security automatic.</p>
					<p class="block-content">This is a hosted app that proactively
						checks anti-virus software, updates patches and protects against
						threats to open applications. </p>
						<p class="block-content">Put it this way, McAfee is software
						that's vigilant&#8212;even when you and your employees aren't.</p>
						

				</div>
				<div class="col-sm-6 image-block visible-xs">
					<img src="<?php echo ROOT_URL;  ?>/images/fpo4_2x.png" width="380"
						alt="" />
				</div>
			</div>
			<div class="block-seperator"></div>
			<div class="row onboard3col">
				<div class="col-sm-4 col-sm-offset-2">
					<img src="<?php echo ROOT_URL;  ?>/images/mcafee.png" alt="MCAFEE" />
					<div class="onboard-title">McAfee</div>
					<div class="onboard-content new-business readmore">
						This is a hosted application that makes your security automatic.
						It proactively <span class="3dot">...</span>
						<div class="details"></div>
						checks for viruses, updates patches and protects against threats.
						McAfee is software that’s vigilant, even when you can’t be.
						<p>
							<a
								href="<?php echo ROOT_URL;  ?>/pdf/business-hosted-apps/McAfee.pdf"
								target="_blank" class="pdflink">Download</a> the details <img
								src="<?php echo ROOT_URL;  ?>/images/pdf.png" alt="" />
						</p>
						<div class="fix-height-1 hidden-xs hidden-sm"></div>
					</div>


				</div>
				<div class="col-sm-4">
					<img src="<?php echo ROOT_URL;  ?>/images/mes-solution.png"
						alt="MESSAGE SOLUTIONS" />
					<div class="onboard-title">MessageSolution</div>
					<div class="onboard-content new-business readmore">
						Now you’ll have the ability to capture, archive and organize
						unstructured emails <span class="3dot">...</span>
						<div class="details"></div>
						and files. In fact, MessageSolution allows you and your staff to
						retrieve that critical information in a heartbeat.
						<p>That means when you need historical emails recovered
							immediately for legal and regulatory compliance, you’ve got it.</p>
					</div>


				</div>
				<div class="block-seperator"></div>
				<hr class="block-hr" />
			</div>

			<div id="webmanagement" class="row sticky-padding">
				<div class="col-sm-6 copy-block">
					<p class="block-link mobile-trick-padding">Grow your business</p>
					<h3 class="block-title">Your website should work as hard as you do.
					</h3>
					<p class="block-content">
						Web hosting from CenturyLink Cloud Services provides you with a
						secure, easy-to-manage and dependable online presence. Add to that
						the fact that every Web hosting plan includes free 1-year domain
						name registration, webmail, FTP access, the Site Builder<sup>SM</sup>
						tool, and 50 or 100GB of storage.
					</p>
					<p class="block-content">You can also add capabilities to your
						website with any of these hosted applications.</p>

				</div>
				<div class="col-sm-6 image-block">
					<img src="<?php echo ROOT_URL;  ?>/images/fpo1_2x.png" width="450"
						alt="" />
				</div>
			</div>
			<div class="block-seperator"></div>
			<div class="row fivecolumns onboard3col">
				<div class="col-sm-2">
					<img src="<?php echo ROOT_URL;  ?>/images/attra.png" alt="LOGO" />
					<div class="onboard-title">Attracta</div>
					<div class="onboard-content new-business readmore">
						Potential customers need to be able to find <span class="3dot">...</span>
						<div class="details"></div>
						your website, easily and quickly. Attracta is a search visibility
						tool that increases your presence&#8212;moving your business to
						the top of the search page.
					</div>

				</div>
				<div class="col-sm-2">
					<img src="<?php echo ROOT_URL;  ?>/images/pinna.png" alt="LOGO" />
					<div class="onboard-title">Pinnacle Cart</div>
					<div class="onboard-content new-business readmore">
						Ecommerce is a vital part of doing business <span class="3dot">...</span>
						<div class="details"></div>
						on the Web. Pinnacle gives you an immediate plug-in ecommerce
						capability. So now, your business has a prime location on the
						Web's Main Street.
						<div class="fix-height1 hidden-xs hidden-sm"></div>
					</div>


				</div>
				<div class="col-sm-2">
					<img src="<?php echo ROOT_URL;  ?>/images/gomobile.png" alt="LOGO" />
					<div class="onboard-title">goMobi</div>
					<div class="onboard-content new-business readmore">
						Take your Web presence mobile.
						<!-- <span class="3dot">...</span> -->
						<div class="details"></div>
						goMobi is an easy-to-use hosted application that allows you to
						create a high-quality mobile site quickly and cost-efficiently.
						<div class="fix-height-3 hidden-xs hidden-sm"></div>
					</div>


				</div>
				<div class="col-sm-2">
					<img src="<?php echo ROOT_URL;  ?>/images/sitelock.png" alt="LOGO" />
					<div class="onboard-title">SiteLock</div>
					<div class="onboard-content new-business readmore">
						Protection from hackers, malware and <span class="3dot">...</span>
						<div class="details"></div>
						other threats. In other words, this is a service that safeguards
						your website. It's like a healthcare plan for your business and
						your online reputation.
					</div>


				</div>
				<div class="col-sm-2">
					<img src="<?php echo ROOT_URL;  ?>/images/stop.png" alt="LOGO" />
					<div class="onboard-title">StopTheHacker</div>
					<div class="onboard-content new-business readmore">
						StopTheHacker is technology that <span class="3dot">...</span>
						<div class="details"></div>
						insures the security of your website. It not only protects, it
						also detects any hacking, including all subdomains and all pages
						of your website.
					</div>


				</div>
				<div class="block-seperator"></div>
				<hr class="block-hr" />
			</div>

			<div class="row sticky-padding" id="ffb">
				<div class="col-sm-6 copy-block">
					<h3 class="block-title">Onboard effortlessly and get started today.
					</h3>
					<p class="block-content">
						Nothing should stand in the way of your business taking full
						advantage of our Cloud Services, or getting the convenience and
						security that comes with hosting your applications in the cloud.
						With FREE FastForward Onboarding,&#8480; getting started is easy.
						Just choose from one of our three onboarding options based on your
						timing and budget, and get started with ease. <a class="bstyle"
							href="<?php echo ROOT_URL;  ?>/pdf/business-hosted-apps/FastForward_Onboarding.pdf">Download
							pdf <img src="<?php echo ROOT_URL;  ?>/images/pdf.png" alt="PDF" />
						</a> for details of all support plans.
					</p>

				</div>
				<div class="col-sm-6 image-block">
					<img id="onboard-image"
						src="<?php echo ROOT_URL;  ?>/images/onboard_2x.png" width="420"
						alt="ONBOARD" />
				</div>
			</div>

			<div class="block-seperator"></div>
			<div class="row onboard3col">
				<div class="col-sm-4 ">
					<img src="<?php echo ROOT_URL;  ?>/images/gears.png" alt="GEARS" />
					<div class="onboard-title">Do it Yourself</div>
					<div class="onboard-content readmore">
						Maybe you want the flexibility to set up and activate our Cloud
						Services on your own. <span class="3dot">...</span>
						<div class="details"></div>
						Well, we'll still make it easy. Using nothing more than an
						Internet connection, you can start running your applications in
						the cloud quickly. CenturyLink provides easy access to your data
						with our intuitive online Management Console.

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
						taking full advantage of the cloud.
						<div class="fix-height-4 hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="<?php echo ROOT_URL;  ?>/images/join.png" alt="Join" />
					<div class="onboard-title">We Take Care of Every Step</div>
					<div class="onboard-content readmore">
						Need additional support? A CenturyLink cloud expert will work
						closely with you to <span class="3dot">...</span>
						<div class="details"></div>
						customize a plan that meets all your business needs and
						requirements while getting you to the cloud quickly and
						affordably.
						<div class="fix-height hidden-xs hidden-sm"></div>
					</div>
				</div>
			</div>

			<div class="it-present">
				<h3>Want your own IT staff?</h3>
				<p>
					Right now, you can upgrade to our <strong>Remote IT Support Pack for
						only $19.99/month</strong><br /> CenturyLink will handle
					maintenance, networking and troubleshooting for all devices.
				</p>
				<p>
					<strong>Call 800.361.0833</strong> to learn more about our remote
					IT support pack.
				</p>
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
					<iframe id="business-video" width="560" height="300"
						src="//www.youtube.com/embed/ZqpxHipyB-c" frameBorder="0"
						allowfullscreen></iframe>
				</div>
				<div class="video-right col-sm-5">
					<div id="about-business-video">
						<h3>Cloud as flexible as you are.</h3>
						<p>CenturyLink Cloud Computing lets you and your employees work
							from virtually anywhere, anytime, and start working right away.
							Now that's agility.</p>
					</div>
				</div>
				<div class="video-left col-sm-7 visible-xs">
					<iframe id="business-video" width="560" height="300"
						src="//www.youtube.com/embed/ZqpxHipyB-c" frameBorder="0"
						allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
