@extends('layouts.mainlayout')

@section('content')

<section id="page-title">
    <div class="container clearfix">
      <h1>What is Communitr3e?</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About</li>
      </ol>
    </div>
  </section>



  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">


      <div class="title-block">
        <h4>A <span>one-stop solution</span> for all your college admission needs.<br><br>
        Can’t find a place to look for information about all programs?<br>Searching for admission requirements? <br>Do you need accommodation around college? 
 <br><br>
 Here we are! <span>Communitr3e</span> offers every single piece of information you need to make your college decision.</h4>
      </div>

      <p>

 <br>


</p>

        <div class="col_one_third">
          <div class="heading-block fancy-title nobottomborder title-bottom-border">
            <h4>Why choose <span>Us</span>.</h4>
          </div>
          <p>We integrate everything you need to make your student journey successful in Canada. From diversified program knowledge to local stay options, we have it all.</p>
        </div>
        <div class="col_one_third">
          <div class="heading-block fancy-title nobottomborder title-bottom-border">
            <h4>Our <span>Mission</span>.</h4>
          </div>
          <p>We work towards creating a unified platform for students, faculty, administration and accommodation owners to come and collaborate. All these people and college services act as a primary focal point for us. </p>
        </div>
        <div class="col_one_third col_last">
          <div class="heading-block fancy-title nobottomborder title-bottom-border">
            <h4>What we <span>Do</span>.</h4>
          </div>
          <p>A full-fledged solution that has the power to provide you with all what you need to know. What do we provide here? We’re the bridge between you and all your admissions needs.</p>
        </div>
      </div>
      <div class="row align-items-stretch clearfix">
        <div class="container clearfix">
          <div class="fancy-title title-border">
            <h3>Team Members</h3>
          </div>
          <div class="col_one_third">
            <div class="team">
              <div class="team-image"> <img src="images/team/team2.jpg" alt="Vaibhavi More"> </div>
              <div class="team-desc">
                <div class="team-title">
                  <h4>Vaibhavi More</h4>
                  <span>Developer</span></div>
                </div>
            </div>
          </div>
          <div class="col_one_third">
            <div class="team">
              <div class="team-image"> <img src="images/team/team3.jpg" alt="Nikhil Bachani"> </div>
              <div class="team-desc">
                <div class="team-title">
                  <h4>Nikhil Bachani</h4>
                  <span>Developer</span></div>
                </div>
            </div>
          </div>
          <div class="col_one_third col_last">
            <div class="team">
              <div class="team-image"> <img src="images/team/team1.jpg" alt="Sweta Gupta"> </div>
              <div class="team-desc">
                <div class="team-title">
                  <h4>Sweta Gupta</h4>
                  <span>Designer</span></div>
               </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
		<div class="section nomargin parallax dark skrollable skrollable-between" style="background-image: url(&quot;images/services/home-testi-bg.jpg&quot;); background-size: cover; padding: 100px 0px; background-position: 0px -192.925px;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -500px;">
			<div class="container clearfix">
				<div class="col_one_fourth nobottommargin center bounceIn animated" data-animate="bounceIn">
				<i class="i-plain i-large divcenter nobottommargin icon-time"></i>
				<div class="counter counter-lined"><span data-from="10" data-to="80" data-refresh-interval="50" data-speed="4000" data-comma="true">40+</span>+</div>
				<h5>Hours per Week</h5>
				</div>
				<div class="col_one_fourth nobottommargin center bounceIn animated" data-animate="bounceIn" data-delay="200">
				<i class="i-plain i-large divcenter nobottommargin icon-code"></i>
				<div class="counter counter-lined"><span data-from="100" data-to="25841" data-refresh-interval="50" data-speed="2500" data-comma="true">25,841+</span></div>
				<h5>Lines of Code</h5>
				</div>
				<div class="col_one_fourth nobottommargin center bounceIn animated" data-animate="bounceIn" data-delay="400">
				<i class="i-plain i-large divcenter nobottommargin icon-user-friends"></i>
				<div class="counter counter-lined"><span data-from="100" data-to="923" data-refresh-interval="50" data-speed="3500" data-comma="true">100+</span></div>
				<h5>Users Registered</h5>
				</div>
				<div class="col_one_fourth nobottommargin center col_last bounceIn animated" data-animate="bounceIn" data-delay="600">
				<i class="i-plain i-large divcenter nobottommargin icon-coffee1"></i>
				<div class="counter counter-lined"><span data-from="25" data-to="214" data-refresh-interval="30" data-speed="2700" data-comma="true">100+</span></div>
				<h5>Cups of Coffee</h5>
				</div>
			</div>
		</div>
      <div class="section footer-stick clearfix nomargin">
        <h4 class="uppercase center">What <span>Mentors</span> Say?</h4>
        <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
          <div class="flexslider">
            <div class="slider-wrap">
              
              <div class="slide">
                <div class="testi-image"> <a href="#"><img src="images/testimonials/1.jpg" alt="Professors Testimonails"></a> </div>
                <div class="testi-content">
                  <p>Having a website where potential international students can research programs, courses and accommodations from the perspective of fellow international students helps students make informed decisions on their future educational endeavors."</p>
                  <div class="testi-meta"> Eric Rowen <span>Professor</span> </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
