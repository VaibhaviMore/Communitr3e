@extends('layouts.mainlayout')

@section('content')
<section id="slider" class="slider-element revslider-wrap slider-parallax clearfix">
   <div class="slider-parallax-inner">
      <div id="rev_slider_579_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="default-slider" style="padding:0px;">
         <div id="rev_slider_579_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.4">
            <ul>
               <li data-transition="slideup" data-slotamount="1" data-masterspeed="1500" data-delay="10000" data-saveperformance="off"> 
                  <img src="images/slider/rev/main/banner.jpg" alt="Banner" data-bgposition="left top" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="130" data-scaleend="100" data-bgpositionend="right bottom">
                  <div class="tp-caption ltl tp-resizeme revo-slider-emphasis-text nopadding noborder" data-x="150" data-y="600" data-transform_in="x:10;y:0;z:0;rotationY:120;rotationZ:0;scaleX:0.8;scaleY:0.8;skewX:0;s:600;skewY:0;opacity:0.6;transformPerspective:200;transformOrigin:50% 50%;" data-speed="600" data-start="5000" data-easing="easeOutCubic" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000" data-endeasing="Power4.easeIn" 
                  style="z-index: 3; white-space: nowrap; color: #003971; line-height: 1.2; max-width: 980px; width: 980px; white-space: normal; opacity: 0.6; background-color: rgba(255, 255, 255, 0.6);">
                  We are here to help! <br>
                 Communitr3e offers every single piece of information you need.
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section id="content">
   <div class="content-wrap nopadding">
      <div class="section parallax full-screen nomargin noborder" style="background-image: url('images/parallax/home/11.jpg');" data-bottom-top="background-position:-400px -200px;" data-top-bottom="background-position:-200px -400px;">
         <div class="vertical-middle">
                  <div class="container clearfix">
            <div class="col_three_fifth nobottommargin">
                      <div class="emphasis-title">
                <h2>Programs &amp; Courses</h2>
                <p class="lead topmargin-sm">
                There’s a long list of programs that are offered here in Canada. Nothing to be perplexed about though. 
                At Communitr3e you can find course information and requirements specific to each program. 
                Still need some research to make a decision? <br>
                Try our search feature to explore programs by their category and duration.
                
                </p>
                <a href="{{ route('programs.index') }}" class="button button-desc button-3d button-rounded button-teal center">Explore Everything<span>Know all about the programs</span></a> </div>
                    </div>
          </div>
                </div>
      </div>
              <div class="row nopadding align-items-stretch">
        <div class="col-lg-4 dark col-padding ohidden" style="background-color: #009933;">
                  <div>
            <h3 class="uppercase" style="font-weight: 600;">Why choose Us</h3>
            <p style="line-height: 1.8; font-size: 16px;">We integrate everything you need to make your student journey successful in Canada. From diversified program knowledge to local stay options, we have it all.</p>
           <i class="icon-bulb bgicon"></i> </div>
                </div>
        <div class="col-lg-4 dark col-padding ohidden" style="background-color: #34495e;">
                  <div>
            <h3 class="uppercase" style="font-weight: 600;">Our Mission</h3>
            <p style="line-height: 1.8; font-size: 16px;">We work towards creating a unified platform for students, faculty, administration and accommodation owners to come and collaborate. All these people and college services act as a primary focal point for us. </p>
           <i class="icon-cog bgicon"></i> </div>
                </div>
        <div class="col-lg-4 dark col-padding ohidden" style="background-color: #e74c3c;">
                  <div>
            <h3 class="uppercase" style="font-weight: 600;">What you get</h3>
            <p style="line-height: 1.8; font-size: 16px;">A full-fledged solution that has the power to provide you with all what you need to know. What do we provide here? We’re the bridge between you and all your admissions needs.</p>
            <i class="icon-thumbs-up bgicon"></i> </div>
                </div>
      </div>
              <div class="clear"></div>
              <div class="section nomargin noborder" style="background-image: url('images/parallax/3.jpg');">
        <div class="heading-block center nobottomborder nobottommargin">
                  <h2>"Coming together is a beginning.<br>Keeping together is progress.<br>Working together is success."</h2>
                </div>
      </div>
              <div class="section parallax full-screen dark nomargin noborder" style="background-image: url('images/parallax/home/10.jpg');" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
        <div class="vertical-middle">
                  <div class="container center clearfix">
            <div class="emphasis-title">
                      <h2>Looking for Accomodation</h2>
                      <p class="lead topmargin-sm font-weight-bold" style="color: #333;">
                      
                      So you have already made a decision on the program. Good going! Now you need to search for available housing around the college you chose. 
                      We are here to help you. Explore our listings and filter them to align with your requirements. 
                      But wait. Still deciding on your program but need housing options before you decide? 
                      We’ve got you covered here too. Search based on rent, area and availability to make the right choice.
                      
                      </p>
                    </div>
           <a href="{{ route('accommodation.index') }}" class="button button-dark button-rounded button-reveal button-large tright"><i class="icon-search"></i><span>Start Searching</span></a></div>
                </div>
      </div>
            </div>
</section>

@endsection
