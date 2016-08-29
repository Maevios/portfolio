<script> <!-- YOUTUBE RUN SCRIPT ONLY FOR HOME PAGE -->
	$('document').ready(function() {
	  $('#wrapper').tubular();
	});
</script> <!-- END OF SCRIPT -->

<p id="to-top"> <!-- Scroll to the TOP button -->
	<a href="#top"><span></span></a>
</p> <!-- END of button -->

<div id="content"> <!-- CONTENT START -->
	<section id="free_space" style="height:800px;"> <!-- FIRST SECTION -->
		<div class="first_content">
			<div style="opacity: 1; padding-top: 0px;">
				<h1>Welcome to The Colosseum</h1>
			</div>
			<div class="buttons" style="opacity: 1; padding-top: 0px;">
				<div class="button solid_color">
					<a class="primary-color" href="#welcome" style="">Learn More</a>
				</div>
				<div class="button solid_color">
					<a class="secondary-color" href="#fighters">Fighters</a>
				</div>
			</div>
		</div>
	</section> <!-- END OF FIRST SECTION -->

	<section id="welcome"> <!-- WELCOME SECTION -->
		<div class="welcome_content">
			<div class="welcome_boxes">
				<div class="welcome_box">
					<h3>Home of fighters</h3>
					<span>The Colosseum is a martial arts club located in
						the center of Aarhus, offering a wide choice of
						activities for anyone wanting to:
					</span>
					<ul>
						<li><img src="images/red_glove.png" alt=""> <span>Quickly get in shape</span></li>
						<li><img src="images/red_glove.png" alt=""> <span>Become stronger and faster</span></li>
						<li><img src="images/red_glove.png" alt=""> <span>Do hardcore workout</span></li>
						<li><img src="images/red_glove.png" alt=""> <span>Grow up physically and mentally</span></li>
						<li><img src="images/red_glove.png" alt=""> <span>Become a professional in their favorite fighting arts</span></li>
					</ul>
					<span>We also offer special classes for women, kids,
							and teenagers. Our experienced instructors 
							will help you reach your goals and achieve 
							high results in a short period of time. Under
							their supervision your training will become 
							an exciting journey into the world of martial 
							arts. So if you are not afraid of a hard workout 
							you are more than welcome to participate!
					</span>				
				</div>
				<div class="welcome_box">
					<h3>Online streams</h3>
					<span>We are happy to announce about recently added
						new features, which gives its users and members 
						perfect possibility to watch various fight events 
						and competitions online for free. To get invited 
						to watch stunning shows with our fighters 
						participation and recent news please fill the form
						below.
					</span>
					<div class="fighters"><img alt="" src="images/fighters.png">
						<form>
							<input type="text" placeholder="Name"><br><br>
							<input type="text" placeholder="E-mail"><br><br>
							<input type="submit" value="submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section> <!-- END OF WLECOME SECTION -->

	<section id="prices"> <!-- WELCOME SECTION -->
		<h2>Prices and schedules</h2>
		<div class="prices_content">
			<div class="prices_content_2">
				<h3>Choose style to view training days</h3>
				<div id="styles">
					<ul>
						<li><a href="#"><img src="images/styles/boxing.png" alt=""><br><span>Boxing</span></a></li>
						<li><a href="#"><img src="images/styles/thai_boxing.png" alt=""><br><span>Thai boxing</span></a></li>
						<li><a href="#"><img src="images/styles/kung_fu.png" alt=""><br><span>Kung Fu</span></a></li>
						<li><a href="#"><img src="images/styles/mma.png" alt=""><br><span>MMA</span></a></li>
						<li><a href="#"><img src="images/styles/for_kids.png" alt=""><br><span>For kids</span></a></li>
					</ul>
				</div>
				<div class="divider"></div>
				<div id="prices_2">
					<span>Membership is for any lessons you want to attend out of our extensive program. You don't have to bind 
							yourself to a particular martial art. For instance, you can mix and match the speed and agility of kung fu 
							with the power and practicality of kickboxing.</span><br><br>
					<table>
						<tr>
							<th>Children (8-14 years)</th>
							<th>Adults</th>
							<th>Juniors (15-17 years)</th>
							<th>Single lesson</th>
						</tr>
						<tr>
							<td><img src="images/prices_arrow.png" alt=""><span>3 months: kr. 475</span></td>
							<td><img src="images/prices_arrow.png" alt=""><span>3 months: kr. 950</span></td>
							<td><img src="images/prices_arrow.png" alt=""><span>3 months: kr. 850</span></td>
							<td><img src="images/prices_arrow.png" alt=""><span>Adults: kr. 50</span></td>
						</tr>
						<tr>
							<td></td>
							<td><img src="images/prices_arrow.png" alt=""><span>6 months: kr. 1450</span></td>
							<td><img src="images/prices_arrow.png" alt=""><span>6 months: kr. 1300</span></td>
							<td><img src="images/prices_arrow.png" alt=""><span>Children ( under 15 years) kr. 25</span></td>
						</tr>
						<tr>
							<td></td>
							<td><img src="images/prices_arrow.png" alt=""><span>12 months: kr. 2500</span></td>
							<td><img src="images/prices_arrow.png" alt=""><span>12 months: kr. 2100</span></td>
							<td></td>
						</tr>
					</table><br><br>
					<span class="header">Student discount</span><br><br>
					<span>If you are a student you can get a discount when buying a one year membersship.<br>
							Contact us for more info about this offer.</span>
					<div class="boxing_gloves"><img src="images/boxing_gloves.png" alt=""/></div>
				</div>
			</div>
		</div>
	</section> <!-- END OF WELCOME SECTION -->
	
	<section id="reviews"> <!-- REVIEWS SECTION -->
		<h2>Reviews</h2>
		<div class="reviews_content">
			<img src="images/reviews.png" alt="">
		</div>
	</section> <!-- END OF REVIEWS SECTION -->
	
	<section id="gallery"> <!-- START OF SLIDER SECTION -->
		<h2>Gallery</h2>
		
		<div class="sec_content">
		<!-- use jssor.slider.debug.js instead for debug -->
		<script>
			jQuery(document).ready(function ($) {
				
				var jssor_1_SlideoTransitions = [
				  [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
				  [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
				  [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
				  [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
				  [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
				  [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
				  [{b:10000,d:2000,x:-379,e:{x:7}}],
				  [{b:10000,d:2000,x:-379,e:{x:7}}],
				  [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
				];
				
				var jssor_1_options = {
				  $AutoPlay: true,
				  $SlideDuration: 800,
				  $SlideEasing: $Jease$.$OutQuint,
				  $CaptionSliderOptions: {
					$Class: $JssorCaptionSlideo$,
					$Transitions: jssor_1_SlideoTransitions
				  },
				  $ArrowNavigatorOptions: {
					$Class: $JssorArrowNavigator$
				  },
				  $BulletNavigatorOptions: {
					$Class: $JssorBulletNavigator$
				  }
				};
				
				var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
				
				//responsive code begin
				//you can remove responsive code if you don't want the slider scales while window resizing
				function ScaleSlider() {
					var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
					if (refSize) {
						refSize = Math.min(refSize, 1920);
						jssor_1_slider.$ScaleWidth(refSize);
					}
					else {
						window.setTimeout(ScaleSlider, 30);
					}
				}
				ScaleSlider();
				$(window).bind("load", ScaleSlider);
				$(window).bind("resize", ScaleSlider);
				$(window).bind("orientationchange", ScaleSlider);
				//responsive code end
			});
		</script>

		<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
			<!-- Loading Screen -->
			<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
				<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
				<div style="position:absolute;display:block;background:url('images/slider/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
			</div>
			<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
				<div data-p="225.00" style="display: none;">
					<img data-u="image" src="images/slider/theteam.jpg" alt="" />
				</div>
				<div data-p="225.00" style="display: none;">
					<img data-u="image" src="images/slider/image3.jpg" alt=""/>
				</div>
				<div data-p="225.00" style="display: none;">
					<img data-u="image" src="images/slider/workout.jpg" alt="" />
				</div>
				<div data-p="225.00" style="display: none;">
					<img data-u="image" src="images/slider/mma.jpg" alt="" />
				</div>
				<div data-p="225.00" style="display: none;">
					<img data-u="image" src="images/slider/forKids.jpg" alt=""/>
				</div>
				
				
			<!--<div data-p="225.00" style="display: none;">
					<img data-u="image" src="images/slider/red.jpg" />
					<div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div>
					<div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
					<div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
						<img src="images/slider/c-phone.png" style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" />
						<img src="images/slider/c-jssor-slider.png" data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" />
						<img src="images/slider/c-text.png" data-u="caption" data-t="2" style="position: absolute; top: 153px; left: 163px; width: 80px; height: 53px;" />
						<img src="images/slider/c-fruit.png" data-u="caption" data-t="3" style="position: absolute; top: 60px; left: 220px; width: 140px; height: 90px;" />
						<img src="images/slider/c-navigator.png" data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" />
					</div>
					<div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
						<img src="images/slider/c-phone-horizontal.png" style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" />
						<div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
							<img src="images/slider/theteam.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" />
							<img src="images/slider/image3.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" />
							<img src="images/slider/workout.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 758px; width: 379px; height: 213px;" />
							<img src="images/slider/mma.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 1137px; width: 379px; height: 213px;" />
							<img src="images/slider/forKids.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 1516px; width: 379px; height: 213px;" />
						</div>
						<img src="images/slider/c-navigator-horizontal.png" style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" />
						<img src="images/slider/c-finger-pointing.png" data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" />
					</div>
				</div>-->
			</div>
			<!-- Bullet Navigator -->
			<div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
				<!-- bullet navigator item prototype -->
				<div data-u="prototype" style="width:16px;height:16px;"></div>
			</div>
			<!-- Arrow Navigator -->
			<span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
			<span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
		</div>
		</div>
	</section> <!-- END OF SLIDER SECTION -->
	
	<section id="sponsors"> <!-- REVIEWS SECTION -->
		<h2>Sponsors</h2>
		<div class="sponsors_content">
			<img src="images/sponsors.png" alt="">
		</div>
	</section> <!-- END OF REVIEWS SECTION -->		
	
</div>