@extends('frontend/layout')
@section('title','information')
@section('content')
<section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6> our information</h6>
            <h4>personal<em>information</em></h4>
            <p>here some information about us</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>i'm Hafsa</span></div>
                    <div class="gradient-border"><span>i'm Afnan</span></div>
                    
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-01.jpg" alt="">
                       
                        </div>
                        <div class="right-content">
                        <h4>personal information</h4>
                        <P> full name : {{ $name }}</p>
                        <p>  phone number : {{ $phone }}</p>
                        <p> email : {{ $email }}</p>
                        <p>nationality : {{ $nationality }}</p>
                        
                            
                      
                          <span>birth</span>
                          <span>6</span>
                          <span class="last-span">3 </span>
                          <div class="text-button">
                           
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-02.jpg" alt="">
                          
                        </div>
                        <div class="right-content">
                          <h4>personal information</h4>
                          <P>full name : افنان عمر العفيف 
                            <p> phone number : 735022837</p>
                            <p>email : fano.y9@gmail.com</p>
                           <p> nationality : yemeni-hadramout</p>
                          </p>
                          <span>birth</span>
                          <span>5</span>
                          <span class="last-span">14</span>
                          <div class="text-button">
                           
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-03.jpg" alt="">
                          <div class="price"><h6>$184</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Web Design</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan.<br><br>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
                          <span>28 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-04.jpg" alt="">
                          <div class="price"><h6>$76</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>WordPress Introduction</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan.<br><br>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
                          <span>48 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">2 Certificates</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection