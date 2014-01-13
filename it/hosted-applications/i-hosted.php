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
		$('.sreadmore').readmore({
			speed:200,
			maxHeight:120,
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

// 		function initGroupReadmore(selector) {
// 			var $list = $(selector);
// 			// hide expand
// 			$list.find('[data-expand="true"]').hide();
// 			// calculate height
// 			var height = 0;
// 			$list.find('.sreadmore').each(function(){
// 				if(height < $(this).height()) {
// 					height = $(this).height();
// 				}
// 			});
// 			// init max-height
// 			$list.find('[data-expand="true"]').show();
// 			$list.find('.sreadmore').readmore({
// 				maxHeight:height,
// 				moreLink: '<a href="javascript:;"><div class="plus"><i class="fa fa-plus"></i></div></a>',
// 				lessLink: '<a href="javascript:;"><div class="minus"><i class="fa fa-minus"></i></div></a>',
// 				afterToggle: function(trigger, element, more) {
// 					if(more){
// 						element.find('.3dot').html('');
// 						element.find('.details').attr('style','display:inline');
// 						element.find('[data-expand="true"]').show();
// 					}else{
// 						element.find('.3dot').html('');
// 						element.find('.details').attr('style','display:block;clear:both').height(40);
// 						element.find('[data-expand="true"]').hide();
// 					}
// 				}
// 			});
// 			$list.find('[data-expand="true"]').hide();
// 		};
// 		initGroupReadmore('#whatweoffer');
// 		initGroupReadmore('#securefeatures');
		
		$('.desktop-graph-left .gplus').click(function(){
			$(this).parents('.left-block').find('.closed').hide();
			$(this).parents('.left-block').find('.opened').show();
		});
		$('.desktop-graph-left .gminus').click(function(){
			$(this).parents('.left-block').find('.opened').hide();
			$(this).parents('.left-block').find('.closed').show();
		});
		$('.desktop-graph-right .gplus').click(function(){
			$(this).parents('.desktop-graph-right').find('.closed').hide();
			$(this).parents('.desktop-graph-right').find('.opened').show();
		});
		$('.desktop-graph-right .gminus').click(function(){
			$(this).parents('.desktop-graph-right').find('.opened').hide();
			$(this).parents('.desktop-graph-right').find('.closed').show();
		});
		$('.desktop-graph-mid .gplus').click(function(){
			$(this).parents('.mid-block').find('.closed').hide();
			$(this).parents('.mid-block').find('.opened').show();
		});
		$('.desktop-graph-mid .gminus').click(function(){
			$(this).parents('.mid-block').find('.opened').hide();
			$(this).parents('.mid-block').find('.closed').show();
		});
	});
</script>
<div id="ihosted" class="ihosted">
	<div class="container wrapper">
		<div class="padding-fix" id="wwo">
			<div class="row sticky-padding">
				<div class="col-sm-6 image-block hidden-xs">
					<img src="<?php echo ROOT_URL;  ?>/images/ihosted-fpo1.png"
						alt="FPO" />
				</div>
				<div class="col-sm-6 copy-block">
					<p class="block-link">Microsoft Suite Exchange, SharePoint, Lync</p>
					<h3 class="block-title">Increase control and decrease workload at
						the same time.</h3>
					<p class="block-content">Forget the hassles of software licensing,
						setup and troubleshooting&#8212;CenturyLink Hosted Applications
						bring your business deployment, installation and maintenance in
						one package. With a complete set of email and collaboration tools,
						we offer the connectivity and integration your users need, all
						in a secure, protected environment. Best of all, these services
						reduce the burden for IT, providing flexible options that are easy
						to manage.</p>

				</div>
				<div class="col-sm-6 image-block visible-xs">
					<img src="<?php echo ROOT_URL;  ?>/images/ihosted-fpo1.png"
						alt="FPO" />
				</div>
			</div>
			<div class="block-seperator"></div>
			<div class="row onboard3col" id="whatweoffer">
				<div class="col-sm-4">
					<img src="<?php echo ROOT_URL;  ?>/images/exchange.png" alt="GEARS" />
					<div class="onboard-title">Microsoft Hosted Exchange</div>
					<div class="onboard-content new-business sreadmore">
						<ul>
							<li>ActivSync provides consistent experience across iOS, Android
								and BlackBerry devices, as well as across OS X and Windows PCs,
								laptops and servers</li>
							<li>Up-to-date AV/AS/AP and filtering</li>
							<!--<li class="startread"></li> -->
							<li data-expand="true">Shared calendar and address book functionality</li>
							<li data-expand="true">Email access from any Internet connection using Outlook Web
								access</li>
							<li data-expand="true">Customize mailbox size based on user</li>
							<li data-expand="true">Add more space with click of a button <br /> <br /> <a
								href="<?php echo ROOT_URL;  ?>/pdf/it-hosted-apps/Microsoft_Hosted_Exchange.pdf"
								target="_blank" class="pdflink">Download</a> features and
								pricing <img src="<?php echo ROOT_URL;  ?>/images/pdf.png"
								alt="" /></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="<?php echo ROOT_URL;  ?>/images/sharepoint.png"
						alt="TALK" />
					<div class="onboard-title">Microsoft Hosted SharePoint</div>
					<div class="onboard-content new-business sreadmore">
						<ul>
							<li>Securely allow collaboration and file sharing</li>
							<li>Maintain complete control over user permissions</li>
							<li>Fully integrated with Microsoft Office</li>
							<!--<li class="startread"></li> -->
							<li data-expand="true">Your server maintained by Microsoft-certified techs in our
								data centers</li>
							<li data-expand="true">Automatic replication duplicates documents across
								geographically dispersed data centers, providing complete data
								redundancy</li>
							<li data-expand="true">No training required for IT on setup or maintenance <br /> <br />
								<a
								href="<?php echo ROOT_URL;  ?>/pdf/it-hosted-apps/Microsoft_Hosted_SharePoint.pdf"
								target="_blank" class="pdflink">Download</a> features and
								pricing <img src="<?php echo ROOT_URL;  ?>/images/pdf.png"
								alt="" /></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<img src="<?php echo ROOT_URL;  ?>/images/lync.png" alt="Join" />
					<div class="onboard-title">Microsoft Hosted Lync</div>
					<div class="onboard-content new-business sreadmore">
						<ul>
							<li>Single solution for IM, Voice, Video and Chat</li>
							<li>Secure environment for all communications</li>
							<li>Unified, single client on desktop and laptop</li>
							<!--<li class="startread"></li> -->
							<li data-expand="true">Consistent Microsoft UX for end users assures fast adoption</li>
							<li data-expand="true">Integrates with Outlook & Exchange</li>
							<li data-expand="true">Access to existing directories and contacts</li>
							<li data-expand="true">Eliminates separate telephony support</li>
							<li data-expand="true">Reduces help-desk queries</li>
							<li data-expand="true">Reduces teleconferencing costs <br /> <br /> <a
								href="<?php echo ROOT_URL;  ?>/pdf/it-hosted-apps/Microsoft_Hosted_Lync.pdf"
								target="_blank" class="pdflink">Download</a> features and
								pricing <img src="<?php echo ROOT_URL;  ?>/images/pdf.png"
								alt="" /></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="block-seperator"></div>
			<hr class="block-hr" />


			<div id="safe" class="row sticky-padding">
				<div class="col-sm-6 copy-block">
					<p class="block-link">Email Anti-virus by McAfee</p>
					<h3 class="block-title">Stop viruses, malware, worms and other
						online pests.</h3>
					<p class="block-content">It's a dangerous world out there. Viruses
						and malware attacks have become the norm, and your business
						leadership is looking for you to avoid the outages and downtime that
						come with these threats.  McAfee combines industry leading security 
						and archiving capabilities with AV/AS PC protection software, proactively 
						protecting your business while you focus on other things.</p>

				</div>
				<div class="col-sm-6 image-block">
					<img src="<?php echo ROOT_URL;  ?>/images/ihosted-fpo2.png" alt="" />
				</div>
			</div>
			<div class="row ihosted3col">
				<h3 class="col-xs-12">Email Anti-virus Protection:</h3>
				<div class="col-sm-4">
					<ul>
						<li>Proactive and comprehensive protection against viruses,
							malware and spam</li>
						<li>Automatic updates and patches protect against latest
							threats&#8212;without any IT oversight</li>
						<li>Real-time response to threats before they hit your
							network&#8212;your environment is not infected, and you avoid
							costly and time-consuming mitigation efforts</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul>
						<li>Block and removal of suspicious content including phishing and
							worm protection, imbedded URLs, images and attachments before
							users can click on them and infect your environment</li>
						<li>Continuous scan and evaluation of outgoing emails to maintain
							content policies and proprietary information loss</li>
					</ul>

				</div>
				<div class="col-sm-4">
					<ul>
						<li>Endpoint security protects every device on your network
							against infection</li>
						<li>Scales with your environment as it grows <br /> <br /> <span
							class="nowrap"><a
								href="<?php echo ROOT_URL;  ?>/pdf/it-hosted-apps/McAfee.pdf"
								target="_blank" class="pdflink">Download</a> features and
								pricing <img src="<?php echo ROOT_URL;  ?>/images/pdf.png"
								alt="" /> </span></li>
						<li class="last"><img
							src="<?php echo ROOT_URL;  ?>/images/mcafee.png" alt="" /></li>
					</ul>
				</div>
			</div>

			<div class="block-seperator"></div>
			<hr class="block-hr" />

			<div id="email" class="row sticky-padding">
				<div class="col-sm-6 image-block hidden-xs">
					<img src="<?php echo ROOT_URL;  ?>/images/ihosted-fpo3.png" alt="" />
					<div class="row child-image">
						<div class="col-xs-6">
							<img src="<?php echo ROOT_URL;  ?>/images/mcafee.png" alt="" />
						</div>
						<div class="col-xs-6 mes-logo">
							<img src="<?php echo ROOT_URL;  ?>/images/mes-solution.png"
								alt="" />
						</div>
					</div>
				</div>
				<div class="col-sm-6 copy-block">
					<p class="block-link">Email Archiving by McAfee and
						MessageSolutions</p>
					<h3 class="block-title">The best email archive is the one that
						comes with options.</h3>
					<p class="block-content">Housed in the security of CenturyLink's
						carrier-grade data centers, your mail will be both vigilantly
						protected and highly available when you choose McAfee or
						MessageSolutions for your email archiving needs. Both providers
						meet the most stringent industry compliance requirements for
						recovery and authenticity, and free you from the burden of
						building and managing your own archival system to meet changing
						compliance demands.</p>
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
					<div class="block-content">
						<h3>Email Archiving and Retention:</h3>
						<ul>
							<li>Optimized archiving reduces storage space up to 80%</li>
							<li>Meet compliance requirements without relying on end-users'
								actions</li>
							<li>Centralize all capture and storage for quick restore and
								recovery</li>
							<li>eDiscovery features such as notation, logging and indexing
								increase search relevancy</li>
							<li>Avoid the costs and complexity of building and managing your
								own archiving system <br /> <br /> <a
								href="<?php echo ROOT_URL;  ?>/pdf/it-hosted-apps/McAfee.pdf"
								target="_blank" class="pdflink">Download</a> features and
								pricing <img src="<?php echo ROOT_URL;  ?>/images/pdf.png"
								alt="" />
							</li>
						</ul>
					</div>

				</div>
				<div class="col-sm-6 image-block visible-xs">
					<img src="<?php echo ROOT_URL;  ?>/images/ihosted-fpo3.png" alt="" />
					<div class="row child-image">
						<div class="col-xs-6">
							<img src="<?php echo ROOT_URL;  ?>/images/mcafee.png" alt="" />
						</div>
						<div class="col-xs-6" id="mes-logo">
							<img src="<?php echo ROOT_URL;  ?>/images/mes-solution.png"
								alt="" />
						</div>
					</div>
				</div>
			</div>
			<div class="block-seperator"></div>
			<hr class="block-hr" />
			<div id="webmanagement" class="row sticky-padding">
				<div class="col-sm-6 copy-block">
					<p class="block-link">Website Hosting and Management</p>
					<h3 class="block-title">Because a website is only as strong as its
						host.</h3>
					<p class="block-content">Why Web Hosting from CenturyLink Cloud
						Services? We're the trusted resource that can provide your company
						with a secure, easy-to-manage, and dependable online presence.
						What's even better, it can happen without the costs and headaches
						of maintaining it yourself. Of course, we're more than just the
						basics. CenturyLink has a range of applications that can easily,
						and cost-efficiently, add capabilities and possibilities to your
						website.</p>
					<p class="block-content">
						Find out more about CenturyLink Web Hosting. <br /> <a
							class="istyle"
							href="<?php echo ROOT_URL;  ?>/pdf/it-hosted-apps/CenturyLink_Web_Hosting.pdf"
							target="_blank" class="pdflink">Download</a> <img
							src="<?php echo ROOT_URL;  ?>/images/pdf.png" alt="" /> features
						and pricing
					</p>

				</div>
				<div class="col-sm-6 image-block">
					<img src="<?php echo ROOT_URL;  ?>/images/ihosted-fpo4.png" alt="" />
				</div>
			</div>
			<div class="row fivecolumns onboard3col" id="securefeatures">
				<div class="col-sm-2">
					<img src="<?php echo ROOT_URL;  ?>/images/attra.png" alt="LOGO" />
					<div class="onboard-title">SEO: Attracta</div>
					<div class="onboard-content new-business sreadmore">
						Crawls all pages of your site&#8212;even hidden ones&#8212;and
						submits XML reports to all major search engines: Google, Yahoo,
						Bing and Ask&mdash;enhancing SEO results.
						<!--<div class="startread"></div> -->
						<ul data-expand="true">
							<li>Identifies and reports broken links and errors that impact
								SEO</li>
							<li>Add JavaScript apps&#8212;like Google Analytics&#8212;with a
								single click</li>
							<li>Keeps you off Google blacklist before you are on it</li>
							<li>Largest SEO provider, updating 100 million Google webpages
								every day</li>
							<li>Optional rank building and fully managed SEO campaigns
								available</li>
						</ul>
					</div>

				</div>
				<div class="col-sm-2">
					<img src="<?php echo ROOT_URL;  ?>/images/pinna.png" alt="LOGO" />
					<div class="onboard-title">Ecommerce</div>
					<div class="onboard-content new-business sreadmore">
						A suite of complete, turnkey shopping cart solutions that include
						direct integrations into the world's most powerful applications.
						<!--<div class="startread"></div> -->
						<ul data-expand="true">
							<li>Complete turnkey shopping cart solutions</li>
							<li>Certified PCI compliant environment meets DSS controls &
								processes</li>
							<li>Highly secure with 2048-bit SSL certificates, and optional
								extended, organizational & domain validations available</li>
							<li>All features and integration capabilities built in</li>
						</ul>
					</div>


				</div>
				<div class="col-sm-2">
					<img src="<?php echo ROOT_URL;  ?>/images/gomobile.png" alt="LOGO" />
					<div class="onboard-title">Mobile Website</div>
					<div class="onboard-content new-business sreadmore">
						A single integrated content management platform that serves form
						factors for mobile devices and desktop websites.
						<!--<div class="startread"></div> -->
						<ul data-expand="true">
							<li>Automatic redirect of mobile users from Web to optimized
								mobile site</li>
							<li>Supports redirect code in JavaScript, PHP, JSP, ASP</li>
							<li>Optimized for SEO: integrated & automatic</li>
						</ul>
					</div>


				</div>
				<div class="col-sm-2">
					<img src="<?php echo ROOT_URL;  ?>/images/sitelock.png" alt="LOGO" />
					<div class="onboard-title">Protect your website</div>
					<div class="onboard-content new-business sreadmore">
						This application provides vulnerability scanning for network,
						applications, SQL Injection, and Cross-site Scripting (XSS).
						<!--<div class="startread"></div> -->
						<ul data-expand="true">
							<li>Identifies website and application viruses</li>
							<li>Instant alerts for search engine or SPAM blacklisting</li>
							<li>Lightweight scan crawls entire site without impacting network
								or site performance</li>
							<li>Fully automated and real-time dashboard reporting</li>
						</ul>
					</div>


				</div>
				<div class="col-sm-2">
					<img src="<?php echo ROOT_URL;  ?>/images/stop.png" alt="LOGO" />
					<div class="onboard-title">Website Health & Reputation Monitoring</div>
					<div class="onboard-content new-business sreadmore">
						The cost-efficient way to prevent, detect and recover your website
						from malware and virus attacks.
						<ul data-expand="true">
							<li>Non-intrusive, automatic monitoring that is easy to deploy</li>
							<li>Scans your site for malicious code, using signature-based
								approach</li>
							<li>Comprehensive daily check on search, malware, DNS, phishing
								and spam blacklists</li>
							<li>Examines HTML, JavaScript, PHP, iframes. http links, Ads,
								redirects, Flash, pdfs, .exe files</li>
						</ul>
					</div>


				</div>
			</div>
		</div>
	</div>
	<div id="graph" class="graph sticky-padding">
		<div class="container wrapper">
			<div class="padding-fix">
				<div class="hidden-xs">
					<h3>How CenturyLink delivers a better hosted application
						environment.</h3>
					<div class="excerpt">Our integrated, end-to-end platform provides a
						robust infrastructure solution that ensures application
						availability, security and business continuity. We deliver this
						performance for all of your locations, home offices and mobile
						workers. With CenturyLink's Management Console, you get the
						visibility and control you need to deliver a superior user
						experience.</div>
					<div class="desktop-graph">
						<div class="desktop-graph-left">
							<div class="left-block top">
								<div class="closed">
									<a href="javascript:;"><div class="gplus">
											<i class="fa fa-plus"></i>
										</div> </a> <img
										src="<?php echo ROOT_URL;?>/images/graph-mobile.png" alt="" />
									<p>Mobile Devices</p>
								</div>
								<div class="opened">
									<a href="javascript:;"><div class="gminus">
											<i class="fa fa-minus"></i>
										</div> </a>
									<p>Mobile users get full access and ActiveSync</p>
								</div>
							</div>
							<div class="left-block mid">
								<div class="closed">
									<a href="javascript:;"><div class="gplus">
											<i class="fa fa-plus"></i>
										</div> </a> <img
										src="<?php echo ROOT_URL;?>/images/graph-home-office.png"
										alt="" />
									<p>Home Office</p>
								</div>
								<div class="opened">
									<a href="javascript:;"><div class="gminus">
											<i class="fa fa-minus"></i>
										</div> </a>
									<p>Home office users get secure access to apps and full feature
										functionality</p>
								</div>
							</div>
							<div class="left-block bot">
								<div class="closed">
									<a href="javascript:;"><div class="gplus">
											<i class="fa fa-plus"></i>
										</div> </a> <img
										src="<?php echo ROOT_URL;?>/images/graph-office-location.png"
										alt="" />
									<p>Office Location(s)</p>
								</div>
								<div class="opened">
									<a href="javascript:;"><div class="gminus">
											<i class="fa fa-minus"></i>
										</div> </a>
									<p>Your environment is protected with state of the art security
										that is always up to date</p>
								</div>
							</div>
						</div>

						<div class="desktop-graph-join">
							<p>Secure WAN and VPNs available</p>
						</div>


						<div class="desktop-graph-mid">
							<div class="mid-block first">
								<div class="closed">
									<h4>CenturyLink Network</h4>
									<a href="javascript:;"><div class="gplus">
											<i class="fa fa-plus"></i>
										</div> </a>
								</div>
								<div class="opened">
									<p>Core MPLS network with 99.999% availability & deep
										national/local fiber</p>
									<a href="javascript:;"><div class="gminus">
											<i class="fa fa-minus"></i>
										</div> </a>
								</div>
							</div>
							<div class="mid-block mid">
								<div class="closed">
									<h4>
										CenturyLink<br /> Data Center
									</h4>
									<a href="javascript:;"><div class="gplus">
											<i class="fa fa-plus"></i>
										</div> </a>
								</div>
								<div class="opened">
									<p>Apps are hosted in compliant data centers with 100% uptime
										and layered security</p>
									<a href="javascript:;"><div class="gminus">
											<i class="fa fa-minus"></i>
										</div> </a>
								</div>
							</div>
							<div class="mid-block last">
								<div class="closed">
									<h4>Internet</h4>
									<a href="javascript:;"><div class="gplus">
											<i class="fa fa-plus"></i>
										</div> </a>
								</div>
								<div class="opened">
									<p>Tier 1 Internet for fast content serving to users</p>
									<a href="javascript:;"><div class="gminus">
											<i class="fa fa-minus"></i>
										</div> </a>
								</div>
							</div>
						</div>

						<div class="desktop-graph-right">
							<div class="closed">
								<a href="javascript:;"><div class="gplus">
										<i class="fa fa-plus"></i>
									</div> </a> <img
									src="<?php echo ROOT_URL;?>/images/graph-customer.png" alt="" />
								<p>Customers & Prospects accessing your websites</p>
							</div>
							<div class="opened">
								<a href="javascript:;"><div class="gminus">
										<i class="fa fa-minus"></i>
									</div> </a>
								<p>Highly available website that is fully secured</p>
							</div>
						</div>
					</div>
				</div>
				<div class="mobile-graph-text visible-xs">
					<h3>How CenturyLink delivers a better hosted application
						environment</h3>
					<p>Provide your users with access to the data they need whenever
						they need it. Our 99.95% uptime SLA is backed by the investments
						we ve made in our network and data center to provide a secure,
						compliant environments for your data. We provide end-to-end
						security from device based encryption, across the network and
						within our carrier grade data centers.</p>
				</div>
				<div class="mobile-graph visible-xs">
					<div class="mobile-graph-top">
						<div class="top-block first">
							<h4>Mobile Devices</h4>
							<p>Mobile users get full access and ActiveSync</p>
						</div>
						<div class="top-block mid">
							<h4>Home Office</h4>
							<p>Home office users get secure access to apps and full feature
								functionality</p>
						</div>
						<div class="top-block last">
							<h4>Office Location(s)</h4>
							<p>Your environment is protected with state of the art security
								that is always up to date</p>
						</div>
					</div>

					<div class="mobile-graph-join">
						<p>Secure WAN and VPNs available</p>
					</div>


					<div class="mobile-graph-mid">
						<div class="mid-block first">
							<h4>CenturyLink Network</h4>
							<p>Core MPLS network with 99.999% availability & deep
								national/local fiber</p>
						</div>
						<div class="mid-block mid">
							<h4>
								CenturyLink<br /> Data Center
							</h4>
							<p>are hosted in compliant data centers with 100% uptime and
								layered security</p>
						</div>
						<div class="mid-block last">
							<h4>Internet</h4>
							<p>Tier 1 Internet for fast content serving to users</p>
						</div>
					</div>

					<div class="mobile-graph-bot">
						<h4>Customers & Prospects accessing your websites</h4>
						<p>Highly available website that is fully secured</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row sticky-padding" id="ffb">
				<div class="col-sm-7 copy-block">
					<h3 class="block-title">Onboard effortlessly and get started today.
					</h3>
					<p class="block-content">
						Nothing should stand in the way of your business taking full
						advantage of our Cloud services, or getting the convenience and
						security that comes with backing up your data to the cloud. With
						FREE FastForward Onboarding,&#8480; getting started is easy. Just
						choose from one of our three onboarding options based on your
						timing and budget, and get started with ease.<br /> <br> <a
							class="istyle"
							href="<?php echo ROOT_URL;  ?>/pdf/it-hosted-apps/FastForward_Onboarding.pdf">Download
							pdf <img src="<?php echo ROOT_URL;  ?>/images/pdf.png" alt="PDF" />
						</a> for details of all support plans.
					</p>

				</div>
				<div class="col-sm-5 image-block">
					<img id="onboard-image"
						src="<?php echo ROOT_URL;  ?>/images/onboardg_2x.png" width="374"
						alt="ONBOARD" />
				</div>
			</div>

			<div class="block-seperator"></div>
			<div class="row onboard3col">
				<div class="col-sm-4 center">
					<img src="<?php echo ROOT_URL;  ?>/images/gears-g.png" alt="GEARS" />
					<div class="onboard-title center">Do it Yourself</div>
					<div class="onboard-content readmore">
						Maybe you want the flexibility to set up and activate our Cloud
						Services on your own. <span class="3dot">...</span>
						<div class="details"></div>
						Well, we'll still make it easy. Using nothing more than an
						Internet connection, you can start backing up your files to the
						cloud quickly, whenever you want. CenturyLink provides easy access
						to your data with our intuitive online Management Console. &nbsp;&nbsp;

					</div>
				</div>
				<div class="col-sm-4 center">
					<img src="<?php echo ROOT_URL;  ?>/images/talk-g.png" alt="TALK" />
					<div class="onboard-title center">We Help You Get Started</div>
					<div class="onboard-content readmore">
						With our guided activation, one of our cloud experts will walk you
						through the <span class="3dot">...</span>
						<div class="details"></div>
						initial steps of setup in order to make sure your business is
						taking full advantage of the cloud.
						<div class="fix-readmore-height hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="col-sm-4 center">
					<img src="<?php echo ROOT_URL;  ?>/images/join-g.png" alt="Join" />
					<div class="onboard-title center">We Take Care of Every Step</div>
					<div class="onboard-content readmore">
						Need additional support? A CenturyLink cloud expert will work
						closely with you to <span class="3dot">...</span>
						<div class="details"></div>
						customize a plan that meets all your business needs and data
						backup requirements while getting you to the cloud quickly and
						affordably.
						<div class="fix-readmore-height hidden-xs hidden-sm"></div>
					</div>
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
					<iframe width="560" height="300"
						src="//www.youtube.com/embed/ZqpxHipyB-c" frameBorder="0"
						allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
