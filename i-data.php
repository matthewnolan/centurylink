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
							<img class="visible-xs" src="images/customer-data.jpg"/> 
							<h3>Data Encrypted with <br/><strong>AES 256-bit Key</strong></h3>
							<div class="sreadmore">
								<p>Asigra&#8480; agentless client technology enables:</p>
								<div>
									<ul>
										<li>EAS 256-bit encryption key</li>
										<li>FIPS 140-2 sercurity certification</li>
										<li>Comoliance requirements for SOX, HIPAA, Basel II, etc.</li>
										<li>Backup for all files and across all OSs: Windows, Linux & Mac OS</li>
										<li>Incremental client-side deduplication to reduce network bandwidth usage</li>
										<li>Compression technology drives efficient network utilization</li>
										<li>Simplified install and operations minimizes downtime, disruption and end user maintance</li>
									</ul>
								</div>
							</div>
					
						</div>
						<div class="col-sm-4 mid">
							<img class="visible-xs" src="images/network.jpg"/> 
							<h3>Using SSL</h3>
							<div class="sreadmore">
								<p>SSl connection with X.509 certificate utilizes CenturyLink network with:</p>
								<div>
									<ul>
										<li>Data sent over private facilities</li>
										<li>Direct connection to data center</li>
										<li>Fully owned and managed by single provider</li>
										<li>Core MPLS network with 99.9999% availability</li>
										<li>REange of connectivity options, including secure VPNs</li>
									</ul>
								</div>
								
							</div>
					
						</div>
						<div class="col-sm-4 last">
							<img class="visible-xs" src="images/sercurity.jpg"/> 
							<h3>Highly Secure &<br/><strong>Compliant Centers</strong></h3>
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
				<img src="images/cal-fpo.jpg" alt=""/>
			</div>
			<div class="col-sm-7 copy-block">
				<h3 class="block-title">
					Improved Total Cost of Ownership is Just the Beginning. 
				</h3>
				<p class="block-content">
						Total Cost of Ownership isn't just about price. It's about all the other financial benefits down the road.
						 Not having to deal with upfront hardware costs, maintenance, software licensing, and on. 
						 CenturyLink Cloud Backup provides you with a compelling cost advantage over legacy, premise-based solutions--while also meeting all of your requirements.
						  By eliminating capital investments in expensive storage equipment, you get a predictable monthly per-user cost that's easy to budget. We also take care of all management, proactively providing all updates and security patches. 
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
			<img src="images/it-pricing.png"/>
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
				<img src="images/console-icon.png" alt=""/>
				</div>
				<div class="col-sm-7 copy-block">
					<h3 class="block-title">
						Now you can be hands-on and<br/> hands-off at the same time.
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
						<div class="easy-icon col-sm-3"><i class="fa fa-eye"></i></div>
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
						Well, we'll still make it easy. Using nothing more than an Internet connection, you can start backing up your files to the Cloud quickly, whenever you want.  CenturyLink provides easy access to your data with our intuitive online Management Console.
					
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="images/talk-g.png" alt="TALK"/>
					<div class="onboard-title">Guided Activation</div>
					<div class="onboard-content readmore">
						Customers who purchase $100 or more in monthly services can use
						<span class="3dot">...</span><div class="details"></div>
						 initial steps of setup in order to make sure your business is taking full advantage of the Cloud and can back up all of your files safely and securely.
						<div class="fix-readmore-height hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="images/join-g.png" alt="Join"/>
					<div class="onboard-title">Do-it-for-me Onboarding</div>
					<div class="onboard-content readmore">
						For users, CenturyLink engineers are assigned to get Secure Online Backup
						<span class="3dot">...</span><div class="details"></div>
						customize a plan that meets all your business needs and data backup requirements while getting you to the Cloud quickly and affordably. 
						<div class="fix-readmore-height hidden-xs hidden-sm"></div>
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
				<div class="video-left col-sm-8">
					<iframe width="560" height="315" src="//www.youtube.com/embed/ZqpxHipyB-c" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="video-right col-sm-4">
					<div>
						<h3>Lorem Ipsum.</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et egestas dolor, non iaculis dolor. Integer ut elit quis ante varius dignissim. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>