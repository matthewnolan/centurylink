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
				}else{
					element.find('.3dot').html('...');
					element.find('.details').attr('style','display:block');
				}
			}
		});
		$('.sreadmore').readmore({
			maxHeight:0,
			moreLink: '<a href="#"><div class="plus"><i class="fa fa-plus"></i></div></a>',
			lessLink: '<a href="#"><div class="minus"><i class="fa fa-minus"></i></div></a>',
			afterToggle: function(trigger, element, more) {
				if(more){
					element.find('.3dot').html('');
					element.find('.details').attr('style','display:inline');
				}else{
					element.find('.3dot').html('...');
					element.find('.details').attr('style','display:block');
				}
			}
		});
	});
</script>
<div class="idata" id="safe">
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="itdb-secure">
				<h3 class="secure-title">Secure yet Available</h3>
				<div class="secure-content">
					Provide your users with access to the data they need whenever they need it.
					Our 99.95% uptime SLA is backed by the investments we've made in our network and data center to provide a secure,
					compliant environments for your data. We provide end-to-end security from device based encryption, across the network and within our carrier grade data centers.
					<div class="secure-image hidden-xs"></div>
					<div class="row secure-detail">
						<div class="col-sm-4 first">
							<img class="visible-xs" src="images/customer-data.jpg" alt=""/>
							<h3>Only Cloud Backup <br/>Service to Receive <br/><span>FIPS 140-2 certification</span></h3>
							<div class="sreadmore">
								<p>Asigra's agentless cloud backup and recovery offers and industry-leading compliant solution:</p>
								<div>
									<ul>
										<li>FIPS 140-2 sercurity certification</li>
										<li>EAS 256-bit encryption key</li>
										<li>Comoliance requirements for SOX, HIPAA, Basel II, etc.</li>
										<li>Backup for all files and across all OSs: Windows, Linux & Mac OS</li>
										<li>Incremental client-side deduplication to reduce network bandwidth usage</li>
										<li>Compression technology drives efficient network utilization</li>
										<li>Simplified <i>"install and operations"</i> minimizes downtime, disruption and end user maintance</li>
									</ul>
								</div>
							</div>
					
						</div>
						<div class="col-sm-4 mid">
							<img class="visible-xs" src="images/network.jpg" alt=""/>
							<h3>End-to-end<br/><span>SSL Encryption</span></h3>
							<div class="sreadmore">
								<p>SSl connection with X.509 certificate utilizes CenturyLink network with:</p>
								<div>
									<ul>
										<li>Data sent over private facilities</li>
										<li>Direct connection to data center</li>
										<li>Fully owned and managed by single provider</li>
										<li>Core MPLS network with 99.9999% availability</li>
										<li>Range of connectivity options, including secure VPNs</li>
									</ul>
								</div>
								
							</div>
					
						</div>
						<div class="col-sm-4 last">
							<img class="visible-xs" src="images/sercurity.jpg" alt=""/>
							<h3>Highly Secure &<br/><span>Compliant Centers</span></h3>
							<div class="sreadmore">
								<p>Your data is protected in highly secure data centers:</p>
								<div>
									<ul>
										<li>SSAE 16/SAE 3402 Type II compliant</li>
										<li>Built to Tier 3 standards</li>
										<li>Fully redundant systems</li>
										<li>Staffed 24X7 with sercurity and technical personnel </li>
										<li>Data stored in geographically diverse centers</li>
										<li>Dual authentication required for entry</li>
										<li>Protected with lasted cyber security</li>
										<li>100% center uptime availability</li>
									</ul>
								</div>
								
							</div>
					
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	
<div class="pricing" id="tco">
	<div class="container wrapper">
		<div class="padding-fix">
		
		<div class="row">
			<div class="col-sm-5 image-block">
				<img src="images/itdb-fpo2.png" alt=""/>
			</div>
			<div class="col-sm-7 copy-block">
				<h3 class="block-title">
					Save now. Save down the road.
				</h3>
				<p class="block-content">
					Sure, we deliver a great price, but  what's more important is the bigger financial picture. Total Cost of Ownership is all about financial benefits down the road. Not having to deal with upfront hardware costs, maintenance, software licensing and so on. By eliminating capital investments, you get a predictable monthly per-user cost that's easy to budget.
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
			<img src="images/it-pricing.png" alt=""/>
			<div class="cost-more">
				Call us so we can show you how CenturyLink can reduce your costs.<br/>
				<strong>123.456.7890</strong>
			</div>
		</div>
		
			
		</div>
	</div>
</div>
	
	
<div class="idata" id="console">
	<div class="container wrapper">
		<div class="padding-fix">
			
			<div class="row">
				<div class="col-sm-5 image-block">
				<img src="images/bdb-fpo1.png" alt=""/>
				</div>
				<div class="col-sm-7 copy-block">
					<h3 class="block-title">
						Now you can be hands-on and hands-off at the same time.
					</h3>
					<p class="block-content">
						Our Management Console gives you the visibility and control you need over all backup and restore activities. Get a single consolidated view of all aspects of the service, with the ability to drill down on specific parameters. Enable automatic, set-it and forget-it scheduling, so your backups are always up-to-date.
					</p>
				</div>
			</div>
			
			<div class="block-seperator"></div>
			
			<div class="row easy">
				<div class="col-sm-4">
					<div class="row">
						<div class="easy-icon col-sm-3"><i class="fa icon-eye-1"></i></div>
						<div class="col-sm-9">
							<h3 class="easy-title">Manage tickets</h3>
							<div class="easy-content">
								Get a quick view of recent high-level ticket statuses and instant access to support pages to manage your service tickets in detail.
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="easy-icon col-sm-3"><i class="fa fa-cog"></i></div>
						<div class="col-sm-9">
							<h3 class="easy-title">Add services</h3>
							<div class="easy-content">
								Add additional infrastructure, users or application services to your cloud and change features on the fly.
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="easy-icon col-sm-3"><i class="fa fa-plus"></i></div>
						<div class="col-sm-9">
							<h3 class="easy-title">Data center health</h3>
							<div class="easy-content">
								 View the status and health of our data centers, server pods, storage services, SaaS infrastructure and network.
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr class="block-hr"/>
						
			<div class="itdb-secure" id="ffb">
				<h3 class="secure-title">Fast Onboarding to Speed Migration</h3>
				<div class="secure-content">
					When it comes to onboarding, the faster and easier, the better.
					The CenturyLink team of experts can take you through the onboarding process, beginning with the initial user setup and system configuration.
					We continue with 24X7 real-time assistance for technical questions, product application training and incremental setup.
				</div>
			</div>
			
			<div class="block-seperator"></div>
			
			<div class="row onboard3col">
				<div class="col-sm-4 ">
					<img src="images/gears-g.png" alt="GEARS"/>
					<div class="onboard-title">Self-service Activation</div>
					<div class="onboard-content readmore">
						Get online assistance and information to help you deploy and manage your backup.
						<span class="3dot">...</span><div class="details"></div>
						<ul>
						 	<li>Support Documentation: User Guides, Manuals and Technical Papers</li>
						 	<li>Searchable Articles, Video Demonstrations, Tutorials, FAQs and White Papers</li>
						 	<li>Blog: Helpful product tips and industry and product news</li>
						</ul>
						<div class="i-readmore-fix1 hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="images/talk-g.png" alt="TALK"/>
					<div class="onboard-title">Guided Activation</div>
					<div class="onboard-content readmore">
						Customers who purchase $100 or more in monthly services can use
						<span class="3dot">...</span><div class="details"></div>
						our convenient online scheduling tool to reserve a complimentary one-on-one appointment with one of our expert cloud engineers. Along with helping you perform your first full backup, you'll learn how to:
						<ul>
						 	<li>Select files to back up</li>
						 	<li>Set a backup schedule</li>
						 	<li>Initiate a recovery job</li>
						</ul>
						<div class="i-readmore-fix2 hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="images/join-g.png" alt="Join"/>
					<div class="onboard-title">Do-it-for-me Onboarding</div>
					<div class="onboard-content readmore">
						For users, CenturyLink engineers are assigned to get Secure Online Backup
						<span class="3dot">...</span><div class="details"></div>
						up and running for all of your users. We'll help you:
						<ul>
						 	<li>Install the backup client</li>
						 	<li>Select files</li>
						 	<li>Set a backup schedule</li>
						 	<li>Conduct your first full backup</li>
						</ul>
						For IT, CenturyLink experts will conduct a webinar to provide your team with an in-depth walkthrough of your management console. We will help you:
						<ul>
						 	<li>Understand how to use your notifications</li>
						 	<li>Keep your backups always up-to-date</li>
						 	<li>Keep your data protected</li>
						 	<li>Restore your data</li>
						 	<li>Conduct a review of all tools</li>
						</ul>
					</div>
				</div>
			</div>
			
			
			<div class="block-seperator"></div>
			
		</div>
	</div>
</div>

<hr class="home-hr"/>
<div class="video">
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row video-container">
				<div class="video-left col-sm-7">
					<iframe width="560" height="315" src="//www.youtube.com/embed/ZqpxHipyB-c" frameBorder="0" allowfullscreen></iframe>
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