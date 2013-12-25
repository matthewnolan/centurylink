<div class="bhosted">
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row">
				<div class="col-sm-6 copy-block">
					<h3 class="block-title">
						Now you can be on the same page, and you can share the page too.
					</h3>
					<p class="block-content">
						Here, there, or somewhere between here and there, is where you and your employees need to work. It's the new workspace&#8212;without walls. 
						It's where you need to have access to everything on any device. 
						You don't want to compromise. You want to be productive and competitive. And the good news is, you can be.
						All from the most trusted name in business productivity. Microsoft. 
						
					</p>
					
				</div>
				<div class="col-sm-6 image-block">
					<img src="images/new-bussiness-fpo1.png" alt="MICROSOFT CLOUD"/>
				</div>
			</div>
			<div class="block-seperator"></div>
			<div class="row onboard3col">
				<div class="col-sm-4 ">
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
						<div class="fix-readmore-height hidden-xs hidden-sm"></div>
					</div>
				</div>
				<div class="col-sm-4 ">
					<img src="images/join.png" alt="Join"/>
					<div class="onboard-title">We Take Care of Every Step</div>
					<div class="onboard-content readmore">
						Need additional support? A CenturyLink Cloud expert will work closely with you to
						<span class="3dot">...</span><div class="details"></div>
						customize a plan that meets all your business needs and data backup requirements while getting you to the Cloud quickly and affordably. 
						<div class="fix-readmore-height hidden-xs hidden-sm"></div>
					</div>
				</div>
			</div>
			
			<div class="block-seperator"></div>
			<hr class="block-hr"/>
			
	
			<div id="bhdb" class="row">		
				<div class="col-sm-6 image-block hidden-xs">
					<img src="images/deposit.png" alt=""/>
				</div>
				<div class="col-sm-6 copy-block">
					<p class="block-link">
						<a href="">CenturyLink Data Backup</a>
					</p>
					<h3 class="block-title">
						If data is the crown jewel of <br/> your bussiness, you should <br/> have the perfect safety deposit box.
					</h3>
					<p class="block-content">
						Is your data being backed up? After all, business depends on you having access to critical information when and where you need it. Don't leave backing up your data to chance or someonce's memory. With CentiryLink<br/>
						Cloud Service data backup is sercure and automatic.
					</p>
					<p class="block-more"> Backup data without a second thought. <a href="">Start Now</a>
					</p>
					<div class="testimonial hidden-sm hidden-xs">
						<div>
							<p class="first">
								"A security breach can cost me clients and revenue. I'm not going to settle for second-rate protection. "
							</p>
							<p class="last">John Sommatino, 20 years of network and systems administration</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 image-block visible-xs">
					<img src="images/deposit.png" alt=""/>
				</div>
				<div class="col-sm-6 copy-block visible-sm visible-xs">
					<div class="testimonial">
						<div>
							<p class="first">
								"A security breach can cost me clients and revenue. I'm not going to settle for second-rate protection."
							</p>
							<p class="last">John Sommatino, 20 years of network and systems administration</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<hr class="home-hr"/>
<div class="video">
	<div class="container wrapper">
		<div class="padding-fix">
			<div class="row video-container">
				<div class="video-left col-sm-7">
					<iframe id="bussiness-video" width="560" height="315" src="//www.youtube.com/embed/ZqpxHipyB-c" frameborder="0" allowfullscreen></iframe>
					<ul class="video-list">
						<li><a href="javascript:void(0)" class="active" data-src="//www.youtube.com/embed/ZqpxHipyB-c" data-content="With CenturyLink Cloud Services, your business doesn't have to dive into the pool. You can just stick your toe in the water. Or the cloud.">
							<span>Wondering how to take the first step to the cloud?</span>
							<i class="fa fa-play-circle-o"></i>
						</a></li>
						<li>
							<a href="javascript:void(0)" data-src="//www.youtube.com/embed/PfOEqfbQ6gE" data-content="Please filled me.">
								<span>Learn why you can depend on the cloud.</span>
								<i class="fa fa-play-circle-o"></i>
							</a></li>
						<li><a href="javascript:void(0)" data-src="//www.youtube.com/embed/7sxwi2Owec8" data-content="Please filled me.">
							<span>Cloud as flexible as you are.</span>
							<i class="fa fa-play-circle-o"></i>
						</a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="video-right col-sm-5">
					<div id="about-bussiness-video">
						<h3>Wondering how to take the first step to the cloud?</h3>
						<p>With CenturyLink Cloud Services, your business doesn't have to dive into the pool. You can just stick your toe in the water. Or the cloud.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$('.video-list a').click(function(){
		var player = $('#bussiness-video');
		var title = $('#about-bussiness-video h3');
		var content = $('#about-bussiness-video p');
		var src = $(this).attr('data-src');
		var new_title = $(this).find('span').html();
		var new_content = $(this).attr('data-content');
		player.attr('src',src);
		title.html(new_title);
		content.html(new_content);
		$(this).parents('.video-list').find('a').removeClass('active');
		$(this).addClass('active');
	});
});
</script>