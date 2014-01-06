<footer id="footer">
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-md-8">
			<div class="row">
				<div class="col-sm-4 col-md-3 col-lg-3">
					<a href="<?php echo ROOT_URL; ?>/"> <span><strong>HOME</strong> </span>
					</a>
				</div>
				<div class="space20 visible-sm visible-xs"></div>
				<div class="col-sm-8 col-md-5 col-lg-5">
					<div>
						<span><strong>PRODUCT COMPONENTS</strong> </span>
					</div>
					<div class="space20 hidden-xs"></div>
					<a href="<?php echo ROOT_URL; ?>/managed-data/"><span><strong>MANAGED
								DATA</strong> </span> </a><br> <a
						href="<?php echo ROOT_URL; ?>/managed-voice/"><span><strong>MANAGED
								VOICE</strong> </span> </a><br> <a
						href="<?php echo ROOT_URL; ?>/managed-applications/"><span><strong>MANAGED
								APPLICATIONS</strong> </span> </a>
				</div>
				<div class="space20 visible-sm visible-xs"></div>
				<div class="col-md-4 col-lg-4 hidden-sm">
					<a href="#set-up-an-apointment" class="btscroll"><span><strong>SCHEDULE
								A MEETING</strong> </span> </a>
				</div>
				<div class="space20 hidden-lg"></div>
			</div>
		</div>
		<div class="col-sm-4 col-md-4">
			<span class="div-right-social-footer hidden-xs"></span>
			<h4 class="hidden-xs">
				CENTURYLINK<sup>&reg;</sup><br>MANAGED OFFICE
			</h4>
			<div class="fs14b visible-xs">
				<a href="callto:123.456.7890"><i class="fa fa-phone"></i> <span><a
						href="tel:8008509881">800.850.9881</a> </span> </a>
			</div>
			<span class="visible-xs"><strong>CENTURYLINK<sup>&reg;</sup><br>MANAGED
					OFFICE</strong> </span>
			<div class="space20 visible-xs"></div>
			<div id="social-footer">
				<a href="https://www.facebook.com/CenturyLinkBusiness"
					title="Follow us on Facebook" class="facebook" target="_blank"
					rel="nofollow"> <span class="fa-stack"> <i
						class="fa fa-square fa-stack-2x fa-bg-footer"></i> <i
						class="fa fa-facebook fa-stack-1x fa-inverse"></i> </span> </a> <a
					href="https://twitter.com/CenturyLinkBiz"
					title="Follow us on Twitter" class="twitter" target="_blank"
					rel="nofollow"> <span class="fa-stack"> <i
						class="fa fa-square fa-stack-2x fa-bg-footer"></i> <i
						class="fa fa-twitter fa-stack-1x fa-inverse"></i> </span> </a> <a
					href="http://www.linkedin.com/company/1434913?trk=tyah"
					title="Follow us on Linkedin" target="_blank" class="linkedin"
					rel="nofollow"> <span class="fa-stack"> <i
						class="fa fa-square fa-stack-2x fa-bg-footer"></i> <i
						class="fa fa-linkedin fa-stack-1x fa-inverse"></i> </span> </a> <a
					href="https://plus.google.com/u/0/117080893855557903730/posts"
					title="Follow us on Google Plus" target="_blank"
					class="google-plus" rel="nofollow"> <span class="fa-stack"> <i
						class="fa fa-square fa-stack-2x fa-bg-footer"></i> <i
						class="fa fa-google-plus fa-stack-1x fa-inverse"></i> </span> </a>
			</div>

		</div>
	</div>
	<div id="copyrighttext">Copyright &copy; CenturyLink, Inc. All Rights
		Reserved</div>
	<!-- <div id="div-img-footer" class="hidden-xs"><img src="<?php echo ROOT_URL; ?>/images/img_footer.png" alt="" class="img-responsive copyimg" /></div> -->
</div>
<!--     <div class="visible-xs">
    	<div class="space10"></div>
        <div class="space5"></div>
        <img src="<?php echo ROOT_URL; ?>/images/mobi/bgfooter.png" alt="" class="img-responsive" />
    </div> --> <!--     <div class="container visible-xs">
    	<span class="mobicopyright">Copyright &copy; 2013 CenturyLink, Inc. All Rights Reserved.</span>
    </div> --> <!-- <div class="space40 hidden-xs"></div> --> </footer>


<div class="legal-copy">
	<div class="container">Services not available everywhere. Business
		customers only. CenturyLink may change or cancel services or
		substitute similar services at its sole discretion without notice.
		&copy; 2014 CenturyLink. All Rights Reserved. The CenturyLink mark,
		pathways logo and certain CenturyLink product names are the property
		of CenturyLink. All other marks are property of their respective
		owners.</div>
</div>
<div id="div-img-footer" class=""></div>
<!--# Area Scipts #-->
<script
	type="text/javascript"
	src="<?php echo ROOT_URL; ?>/js/jquery-1.9.1.min.js"></script>
<script
	type="text/javascript"
	src="<?php echo ROOT_URL; ?>/js/jquery.validate.js"></script>
<script
	type="text/javascript"
	src="<?php echo ROOT_URL; ?>/js/jquery.sticky.js"></script>
<script
	type="text/javascript"
	src="<?php echo ROOT_URL; ?>/dist/js/bootstrap.min.js"></script>
<script
	type="text/javascript"
	src="<?php echo ROOT_URL; ?>/js/jquery.bxslider.min.js"></script>
<script
	type="text/javascript"
	src="<?php echo ROOT_URL; ?>/js/jquery.scrollUp.min.js"></script>
<script type="text/javascript">
/*	<![CDATA[	*/
$(window).on('load',function(){
	 $('#testimonial-slider > .color-testtimonial').show();
	 $('.slideshow > .slide').show();
});

var ua = navigator.userAgent.toLowerCase();
var isAndroid = ua.indexOf("android") > -1;
if(isAndroid) {
	 var container = jQuery('.container')[0];
     var winw = jQuery(container).width();
     jQuery('iframe').css('max-width',winw - 40);
     jQuery('iframe').css('height','auto');
}
jQuery(document).ready(function($) {
	var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod|Android)/g) ? true : false );
	if (!iOS){
		$('i.fa-phone').unwrap();
	}
	
	var viewportwidth = $(window).width();
	$('.nextpage').each(function(){
			var navwidth = $(this).find('a.btscroll').width() + 10;
			var perleft = (100-(navwidth*100/viewportwidth))/2;
			$(this).css({"position":"absolute","bottom":20,"left":perleft+"%"});
	});
	
	if(viewportwidth >750 && viewportwidth <= 992){
			$('#div-left-modifferent').css({"padding-left":15});
	}

	// init scrollspy
	$('body').scrollspy({ target: '#div-navsticky', offset: $('#div-navsticky').outerHeight() })
	
	var slider = $('#testimonial-slider').bxSlider({
			minSlides: 1,
			maxSlides: 1,
			slideMargin: 0,
			auto: false,
			autoControls: false,
			pager : false,
			controls : false
	});
	
	$('a.btprev').click(function(e){
		e.preventDefault();
		slider.goToPrevSlide();
	});
	
	$('a.btnext').click(function(e){
		e.preventDefault();
		slider.goToNextSlide();
	});
	
	/*var ulwidth = $('ul.dropdown-menu').width();
		ulwidth = ulwidth + 6;
	var	ulwidth2 = ulwidth + 50;
	
	$(window).resize(function(){
		$('ul.dropdown-menu li').hover(function(){
			$(this).find('.lidesc').css({"display":"block","position":"absolute","top": -3,"left": ulwidth,"width": ulwidth2,"height": "auto"});
		},function(){
			$(this).find('.lidesc').hide();
		});
	});*/
	
    $('iframe').each(function(){
        var url = $(this).attr("src");
        $(this).attr("src",url+"?wmode=transparent");
    });
	
	$('#div-navsticky').sticky({topSpacing: 0});
	
	$(window).resize(function(){
		var viewportwidth = $(window).width();
		var heightwrapsticky = $('#div-navsticky').outerHeight();
		$('#div-navsticky').parent().css({"height": heightwrapsticky});
		
		$('.nextpage').each(function(){
			var navwidth = $(this).find('a.btscroll').width() + 10;
			var perleft = (100-(navwidth*100/viewportwidth))/2;
			$(this).css({"position":"absolute","bottom":20,"left":perleft+"%"});
		});
		
		if(viewportwidth >750 && viewportwidth <= 992){
			$('#div-left-modifferent').css({"padding-left":15});
		}
		
		/*$('a.btscroll').click(function(e){
			e.preventDefault();
			var $this = $(this);
			var targetid = $this.attr('href');
			var offset = $(targetid).offset().top - heightwrapsticky + 1;
			$('html, body').animate({
				scrollTop: offset
			}, 'normal');
		});
		*/

		$('body').scrollspy({ target: '#div-navsticky', offset: $('#div-navsticky').outerHeight() })
	});
	
	$("#formcontact").validate();

	$('#whatisinitMobiSlide').append($('#whatisinitslide').html());
	
	function initWhatisinitSlide(idselector) {
		var $wrap = $(idselector);
		var whatisinSlide = $wrap.find('.slideshow').bxSlider({
				mode : 'fade',
				minSlides: 1,
				maxSlides: 1,
				slideMargin: 0,
				auto: true,
				autoControls: false,
				controls : false
		});

		$wrap.find('.clicker').remove();
		for(var i=1 ; i<=7; i++) {
			var html = '<a class="clicker clicker-'+ i + '" data-index="' + i + '">&nbsp;</a>';
			$wrap.append(html);
		}
		
		$wrap.find('.clicker').bind('click', function(){
			var idx = $(this).attr('data-index');
			whatisinSlide.goToSlide(idx - 1);
		});
	}

	initWhatisinitSlide('#whatisinitslide');
	initWhatisinitSlide('#whatisinitMobiSlide');

	var heightwrapsticky = $('#div-navsticky').outerHeight();
	$('a.btscroll').click(function(e){
		e.preventDefault();
		var $this = $(this);
		var targetid = $this.attr('href');
		var offset = $(targetid).offset().top - heightwrapsticky + 1;
		$('html, body').animate({
			scrollTop: offset
		}, 'normal');
	});

	//BACKTOTOP
	$.scrollUp({
		  scrollImg: true,
		  scrollDistance: 360
	});
	$('a#scrollUp').click(function(){
		setTimeout(function(){
			$('#div-navsticky li.active').removeClass('active');
		},300);
	});
});
/*	]]>	*/
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27852033-5', 'centurylinkmanagedoffice.com');
  ga('send', 'pageview');
  
  //Google analytics event trigger
	$('.twitter').on('click', function() {
		  ga('send', 'event', 'social', 'click', 'twitter');
	});
	$('.facebook').on('click', function() {
		  ga('send', 'event', 'social', 'click', 'facebook');
	});
	$('.google-plus').on('click', function() {
		  ga('send', 'event', 'social', 'click', 'google plus');
	});
	$('.linkedin').on('click', function() {
		  ga('send', 'event', 'social', 'click', 'linkedin');
	});
</script>

<!-- BEGIN LivePerson Monitor. -->
<script> var lpMTagConfig = {'lpServer' : "sales.liveperson.net",'lpNumber' : "56948775",'lpProtocol' : (document.location.toString().indexOf('https:')==0) ? 'https' : 'http'}; function lpAddMonitorTag(src){if(typeof(src)=='undefined'||typeof(src)=='object'){src=lpMTagConfig.lpMTagSrc?lpMTagConfig.lpMTagSrc:'/hcp/html/mTag.js';}if(src.indexOf('http')!=0){src=lpMTagConfig.lpProtocol+"://"+lpMTagConfig.lpServer+src+'?site='+lpMTagConfig.lpNumber;}else{if(src.indexOf('site=')<0){if(src.indexOf('?')<0)src=src+'?';else src=src+'&';src=src+'site='+lpMTagConfig.lpNumber;}};var s=document.createElement('script');s.setAttribute('type','text/javascript');s.setAttribute('charset','iso-8859-1');s.setAttribute('src',src);document.getElementsByTagName('head').item(0).appendChild(s);} if (window.attachEvent) window.attachEvent('onload',lpAddMonitorTag); else window.addEventListener("load",lpAddMonitorTag,false);
</script>
<!-- END LivePerson Monitor. -->

<?php require_once dirname(__FILE__) . '/mkto.php';?>
</body>
</html>
