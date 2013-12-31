<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.readmore').readmore({
			maxHeight:40,
			moreLink: '<a href="#"><div class="plus"><i class="fa fa-plus"></i></div></a>',
			lessLink: '<a href="#"><div class="minus"><i class="fa fa-minus"></i></div></a>',
			afterToggle: function(trigger, element, more) {
				if(more){
					element.find('.3dot').html('');
					element.find('.details').attr('style','display:inline');
					element.addClass('fix-fixed-height');
				}else{
					element.find('.3dot').html('...');
					element.find('.details').attr('style','display:block');
					element.removeClass('fix-fixed-height');
				}
			}
		});
		$('.sreadmore').readmore({
			maxHeight:150,
			moreLink: '<a href="#"><div class="plus"><i class="fa fa-plus"></i></div></a>',
			lessLink: '<a href="#"><div class="minus"><i class="fa fa-minus"></i></div></a>',
			afterToggle: function(trigger, element, more) {
				if(more){
					element.find('.startread').attr('style','display:none');
					element.addClass('fix-fixed-height');
				}else{
					element.find('.startread').attr('style','display:block');
					element.removeClass('fix-fixed-height');
				}
			}
		});
	});
</script>
<div class="ihosted">
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row">
				<div class="col-sm-6 image-block hidden-xs">
					<img src="images/ihosted-fpo1.png" alt="FPO"/>
				</div>
				<div class="col-sm-6 copy-block">
					<p class="block-link">
						<a href="">Microsoft Suite Exchange, SharePoint, Lync</a>
					</p>
					<h3 class="block-title">
						Increase control and decrease workload at the same time.
					</h3>
					<p class="block-content">
						Forget the hassles of software licensing, setup and troubleshooting&#8212;CenturyLink Hosted Applications bring your business deployment, installation and maintenance in one package. 
						With a complete set of email and collaboration tools, we offer the connectivity and interactivity your users need, all in a secure, protected environment. Best of all, these services reduce the burden for IT, providing flexible options that are easy to manage.
					</p>
					
				</div>
				<div class="col-sm-6 image-block visible-xs">
					<img src="images/ihosted-fpo1.png" alt="FPO"/>
				</div>
			</div>
			<div class="block-seperator"></div>
			<div class="row onboard3col">
				<div class="col-sm-4 ">
					<img src="images/exchange.png" alt="GEARS"/>
					<div class="onboard-title">Microsoft Hosted Exchange</div>
					<div class="onboard-content new-business sreadmore">
						<ul>
							<li>ActivSync provides consistent experience across iOS, Android and BlackBerry devices, as well as across OS X and Windows PCs, laptops and servers.</li>
							<li>Up-to-date AV/AS/AP and filtering</li>
							<li class="startread"></li>
							<li>Shared calendar and address book functionality</li>
							<li>Email access from any Internet connection using Outlook Web access</li>
							<li>Customize mailbox size based on user </li>
							<li>Add more space with click of a button <br/><br/>
								<a href="download.php?fname=t.pdf">Download</a> features and pricing <img src="images/pdf.png" alt=""/></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="images/sharepoint.png" alt="TALK"/>
					<div class="onboard-title">Microsoft Hosted SharePoint</div>
					<div class="onboard-content new-business sreadmore">
						<ul>
							<li>Securely allow collaboration and file sharing</li>
							<li>Maintain complete control over user permissions</li>
							<li>Fully integrated with Microsoft Office</li>
							<li class="startread"></li>
							<li>Your server maintained by Microsoft-certified techs in our data centers</li>
							<li>Automatic replication duplicates documents across geographically dispersed data centers, providing complete data redundancy</li>
							<li>No training required for IT on setup or maintenance <br/><br/>
								<a href="">Download</a> features and pricing <img src="images/pdf.png" alt=""/></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4">
					<img src="images/lync.png" alt="Join"/>
					<div class="onboard-title">Microsoft Hosted Lync</div>
					<div class="onboard-content new-business sreadmore">
						<ul>
							<li> Single solution for IM, Voice, Video and Chat</li>
							<li>Secure environment for all communications</li>
							<li>Unified, single client on desktop and laptop</li>
							<li class="startread"></li>
							<li>Consistent Microsoft UX for end users assures fast adoption</li>
							<li>Integrates with Outlook & Exchange</li>
							<li>Access to existing directories and contacts</li>
							<li>Eliminates separate telephony support</li>
							<li>Reduces help-desk queries</li>
							<li>Reduces teleconferencing costs <br/><br/>
								<a href="">Download</a> features and pricing <img src="images/pdf.png" alt=""/></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="block-seperator"></div>
			<hr class="block-hr"/>
			
	
			<div id="safe" class="row">
				<div class="col-sm-6 copy-block">
					<p class="block-link">
						<a href="">Email Anti-virus by McAfee</a>
					</p>
					<h3 class="block-title">
						Stop viruses, malware, worms and other online pests.
					</h3>
					<p class="block-content">
						It's a dangerous world out there. 
						Viruses and malware attacks have become the norm, and your business leadership is looking for you to avoid outages and downtime that come with these threats. 
						McAfee provides the industry-leading security and archiving capabilities you need to guard your AV/AS software, proactively protecting your business while you focus on other things. 
					</p>
				
				</div>
				<div class="col-sm-6 image-block">
					<img src="images/ihosted-fpo2.png" alt=""/>
				</div>
			</div>
			<div class="row ihosted3col">
				<h3 class="col-xs-12">Email Anti-virus Protection:</h3>
				<div class="col-sm-4">
					<ul>
						<li>Proactive and comprehensive protection against viruses, malware and spam</li>
						<li>Automatic updates and patches protect against latest threats&#8212;without any IT oversight</li>
						<li>Real Time response to threats before they hit your network&#8212;your environment is not infected and you avoid costly and time-consuming mitigation efforts</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul>
						<li>Block and removal of suspicious content including phishing and worm protection, imbedded URLs, images and attachments before users can click on them and infect your environment</li>
						<li>Continuous scan and evaluation of outgoing emails to maintain content policies and proprietary information loss</li>
					</ul>
					
				</div>
				<div class="col-sm-4">
					<ul>
						<li>Endpoint security protects every device on your network against infection</li>
						<li>Scales with your environment as it grows <br/><br/>
							<a href="">Download</a> features and pricing <img src="images/pdf.png" alt=""/></li>
						<li class="last"><img src="images/mcafee.png" alt=""/></li>
					</ul>
				</div>
			</div>
			
			<div class="block-seperator"></div>
			<hr class="block-hr"/>
			
			<div id="email" class="row">
			<div class="col-sm-6 image-block hidden-xs">
					<img src="images/ihosted-fpo3.png" alt=""/>
					<div class="row child-image">
						<div class="col-xs-6">
							<img src="images/mcafee.png" alt=""/>
						</div>
						<div class="col-xs-6">
							<img src="images/mes-solution.png" alt=""/>
						</div>
					</div>
				</div>
				<div class="col-sm-6 copy-block">
					<p class="block-link">
						<a href="">Email Archiving by McAfee and MessageSolutions</a>
					</p>
					<h3 class="block-title">
						The best email archive is the one that comes with options.
					</h3>
					<p class="block-content">
						Housed in the security of CenturyLink's carrier-grade data centers, your mail will be both vigilantly protected and highly available when you choose McAfee or MessageSolutions for your email archiving needs. Both providers the most stringent industry compliance requirements for recovery and authenticity, and free you from the burden of building and managing you own archival system to meet changing compliance demands.
					</p>
					<p class="block-images">
						<img src="images/bdb-logo3.jpg" alt="LOGO"/>
						<img src="images/bdb-logo1.jpg" alt="LOGO"/>
						<img src="images/bdb-logo2.jpg" alt="LOGO"/>
						<img src="images/bdb-logo4.jpg" alt="LOGO"/>
						<img src="images/bdb-logo5.jpg" alt="LOGO"/>
					</p>
					<div class="block-content">
						<h3>Email Archiving and Retention:</h3>
						<ul>
							<li>Optimized archiving reduces storage space up to 80% </li>
							<li>Meet compliance requirements without relying on end-users actions</li>
							<li>Centralize all capture and storage for quick restore and recovery</li>
							<li>eDiscovery features such as notation, logging and indexing increase search relevancy</li>
							<li>Avoid the costs and complexity of building and managing your own archiving system <br/><br/>
								<a href="">Download</a> features and pricing <img src="images/pdf.png" alt=""/>
							</li>
						</ul>
					</div>
				
				</div>
				<div class="col-sm-6 image-block visible-xs">
					<img src="images/ihosted-fpo3.png" alt=""/>
					<div class="row child-image">
						<div class="col-xs-6">
							<img src="images/mcafee.png" alt=""/>
						</div>
						<div class="col-xs-6">
							<img src="images/mes-solution.png" alt=""/>
						</div>
					</div>
				</div>
			</div>
			<div class="block-seperator"></div>
			<hr class="block-hr"/>
			<div id="webmanagement" class="row">
				<div class="col-sm-6 copy-block">
					<p class="block-link">
						<a href="">Website Hosting and Management</a>
					</p>
					<h3 class="block-title">
						Because a website is only as strong as its host.
					</h3>
					<p class="block-content">
						Why Web Hosting from CenturyLink Cloud Services? We're the trusted resource that can provide your company with a secure, easy-to-manage, and dependable online presence. What's even better, it can happen without the costs and headaches of maintaining it yourself. Of course, we're more than just the basics. CenturyLink has a range of applications that can easily, and cost-efficiently, add capabilities and possibilities to your website.
					</p>
					<p class="block-content">
						Find out more about CenturyLink Web Hosting. <br/>
						<a class="istyle" href="">Download</a> <img src="images/pdf.png" alt=""/> features and pricing 
					</p>
				
				</div>
				<div class="col-sm-6 image-block">
					<img src="images/ihosted-fpo4.png" alt=""/>
				</div>
			</div>
			<div class="row fivecolumns onboard3col">
				<div class="col-sm-2">
				<img src="images/attra.png" alt="LOGO"/>
				<div class="onboard-title">SEO: Attracta</div>
				<div class="onboard-content new-business sreadmore">
					Crawls all pages of your site&#8212;even hidden one&#8212;sand submits XML report to all major search engines: Google, Yahoo, Bing and Ask enhancing SEO results.
					<div class="startread"></div>
					<ul>
						<li>Identifies and reports broken links and errors that impact SEO</li>
						<li>Add JavaScript apps&#8212;like Google Analytics&#8212;with a single click</li>
						<li>Keeps you off Google blacklist before you are on it</li>
						<li>Largest SEO provider, updating 100 million Google webpages every day</li>
						<li>Optional rank building and fully managed SEO campaigns available</li>
					</ul>
				</div>
				
				</div>
				<div class="col-sm-2">
				<img src="images/pinna.png" alt="LOGO"/>
				<div class="onboard-title">Ecommerce</div>
				<div class="onboard-content new-business sreadmore">
					A suite of complete, turnkey shopping cart solutions that include direct integrations into the world's most powerful applications.
					<div class="startread"></div>
					<ul>
						<li>Complete turnkey shopping cart solutions</li>
						<li>Certified  PCI compliant environment meets DSS controls & processes</li>
						<li>Highly secure with 2048-bit SSL certificates, and optional extended, organizational & domain validations available</li>
						<li>All features and integration capabilities built in</li>
					</ul>
				</div>
				
					
				</div>
				<div class="col-sm-2">
				<img src="images/gomobile.png" alt="LOGO"/>
				<div class="onboard-title">Mobile Website</div>
				<div class="onboard-content new-business sreadmore">
					A single integrated content management platform that serves form factors for mobile devices and desktop websites.
					<div class="startread"></div>
					<ul>
						<li>Automatic redirect of mobile users from Web to optimized mobile site</li>
						<li>Supports redirect code in JavaScript, PHP, JSP, ASP</li>
						<li>Optimized for SEO: integrated & automatic</li>
					</ul>
				</div>
				
					
				</div>
				<div class="col-sm-2">
				<img src="images/sitelock.png" alt="LOGO"/>
				<div class="onboard-title">Protect your website</div>
				<div class="onboard-content new-business sreadmore">
					This application provides vulnerability scanning for network, applications, SQL Injection, and Cross-Site Scripting (XSS).  
					<div class="startread"></div>
					<ul>
						<li>Identifies website and application viruses</li>
						<li>Instant alerts for search engine or SPAM blacklisting</li>
						<li>Lightweight scan crawls entire site without impacting network or site performance</li>
						<li>Fully automated and real-time dashboard reporting</li>
					</ul>
				</div>
				
					
				</div>
				<div class="col-sm-2">
				<img src="images/stop.png" alt="LOGO"/>
				<div class="onboard-title">Website Health & Reputation Monitoring</div>
				<div class="onboard-content new-business sreadmore">
					The cost-efficient way to prevent, detect and recover your website from malware and virus attacks.
					<div class="startread"></div>
					<ul>
						<li>Non-intrusive, automatic monitoring that is easy to deploy</li>
						<li>Scans your site for malicious code, using signature based approach</li>
						<li>Comprehensive daily check on search, malware, DNS, phishing and spam blacklists</li>
						<li>Examines HTML, JavaScript, php, iframes. http links, Ads, redirects, Flash, pdfs, .exe files</li>
					</ul>
				</div>
				
					
				</div>
			</div>
		</div>
	</div>
<div id="graph" class="graph">
	<div class="container wrapper">
		<div class="padding-fix">
			<h3>How CenturyLink delivers a better hosted application environment</h3>
			<div class="excerpt">
				Our integrated, end-to-end platform provides a robust infrastructure solution that ensures application availability, security and business continuity. We deliver this performance for all of your locations, home offices and mobile workers. With CenturyLink's Management Console, you get the visibility and control you need to deliver a superior user experience.
			</div>
			<img src="images/temp-graph.png" style="margin-top:50px;"/>
		</div>
	</div>
</div>
	<div class="container wrapper">
		<div class="padding-fix">	
			<div class="row" id="ffb">
				<div class="col-sm-7 copy-block">
					<h3 class="block-title">
						Onboard effortlessly and get started today.
					</h3>
					<p class="block-content">
						Nothing should stand in the way of your business taking full advantage of our cloud services,
						or getting the convenience and security that comes with backing up your data to the Cloud. With FREE FastForward Onboarding&#8480;,
						getting started is easy. Just choose from one of our three onboarding options based on your timing and budget, and get started with ease.<br/>
						<a class="istyle" href="">Download pdf <img src="images/pdf.png" alt="PDF"/>  </a>      for details of all support plans.
					</p>
					
				</div>
				<div class="col-sm-5 image-block">
					<img id="onboard-image" src="images/ihosted-fpo5.png" alt="ONBOARD"/>
				</div>
			</div>
			
			<div class="block-seperator"></div>
			<div class="row onboard3col">
				<div class="col-sm-4 center">
					<img src="images/gears-g.png" alt="GEARS"/>
					<div class="onboard-title center">Do it Yourself</div>
					<div class="onboard-content readmore">
						Maybe you want the flexibility to set up and activate our Cloud services on your own.
						<span class="3dot">...</span><div class="details"></div>
						Well, we'll still make it easy. Using nothing more than an Internet connection, you can start backing up your files to the Cloud quickly, whenever you want.  CenturyLink provides easy access to your data with our intuitive online Management Console.
					
					</div>
				</div>
				<div class="col-sm-4 center">
					<img src="images/talk-g.png" alt="TALK"/>
					<div class="onboard-title center">We Help You Get Started</div>
					<div class="onboard-content readmore">
						With our guided activation, one of our Cloud experts will walk you through the
						<span class="3dot">...</span><div class="details"></div>
						 initial steps of setup in order to make sure your business is taking full advantage of the Cloud and can back up all of your files safely and securely.
						<div class="fix-readmore-height hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="col-sm-4 center">
					<img src="images/join-g.png" alt="Join"/>
					<div class="onboard-title center">We Take Care of Every Step</div>
					<div class="onboard-content readmore">
						Need additional support? A CenturyLink Cloud expert will work closely with you to
						<span class="3dot">...</span><div class="details"></div>
						customize a plan that meets all your business needs and data backup requirements while getting you to the Cloud quickly and affordably.
						<div class="fix-readmore-height hidden-xs hidden-sm"></div>
					</div>
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
					<iframe id="business-video" width="560" height="315" src="//www.youtube.com/embed/ZqpxHipyB-c" frameBorder="0" allowfullscreen></iframe>
				</div>
				<div class="video-right col-sm-5">
					<div id="about-business-video">
						<h3>Cloud as flexible as you are.</h3>
						<p>CenturyLink Cloud Computing lets you and your employees work from virtually anywhere, anytime, and start working right away. Now that's agility.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
