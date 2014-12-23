<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tentang Ontang</title>
<link href="{{asset('resume/styles.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('resume/css/prettyPhoto.css')}}" type="text/css" media="screen" charset="utf-8" />
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js?ver=3.3"></script>	
<script type="text/javascript" src="{{asset('resume/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('resume/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</head>

<body>
<div id="header">
	<div id="logo"><a href="#"><img src="{{asset('resume/images/logoold.png')}}"></a></div>
	<ul id="main-menu">
    	<li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#work">Work</a></li>
        <li><a href="#connect">Connect</a></li>
    </ul>
</div>

<div id="container">

<!--Begin About Section-->
    <div id="about">
        @if(Session::has('success_message'))
            <div style="background: #f9b1d8; width:100%; height:5%;">
                <p style="margin-left: 10%; color:#FFFFFF;">Your Message has been sent. Please wait for the respond. :)</p>
            </div>
            <?php Session::forget('success_message'); ?>
        @endif
        <h1>About</h1>
        <ul id="top-social">
        	<li><a href="http://www.facebook.com/metagaze.yogi" class="facebook">Facebook</a></li>
            <li><a href="http://twitter.com/yogiisinaga" class="twitter">Twitter</a></li>
            <li><a href="http://id.linkedin.com/in/yogiisinaga/" class="linkedin">LinkedIn</a></li>
        </ul>
        <div class="top-divider"></div>
        <div class="content">
        	<img src="{{asset('resume/images/resume.jpg')}}" />
            <h2>My Name is Yogi, and I will code anything to see your smile.</h2>
            <p>I am currently pursuing a Computer Science Degree in Institut Teknologi Bandung and I'm also working as a Part Time Web Back-end Developer in Suitmedia. I am not
                a smart person but I always strive to be like one. I like to learn something new and inventing ideas for apps. I'm a silent and shy person but once you know me well enough, I will
                become a totally different person. Of all the subject in Computer Science, I like Web Application Development the most. But that doesn't mean I limit myself to only learn that subject.
                Beside programming I also have a great interest in singing, playing badminton, and everything related to South Korea.</p> 
            <br>
            <br><p>I hope with this page you get to know me better, and I really want to know you also. Let's get connected! :)</p>    
            <ul id="service-icons">
            	<!--<li class="services-design">Design</li>
                <li class="services-mobile">Mobile</li>
                <li class="services-film">Film</li>
                <li class="services-photo">Photo</li>-->
            </ul>
        </div>
    <div class="bottom-divider"></div> 
    </div>
<!--End About Section-->

<!--Begin Experience Section-->   
    <div id="experience">
    	<h1>Experience</h1>
        <div class="top-divider"></div>
        <div class="content">
            <div class="col">
            <h2>Suitmedia Part Time Back-end Developer</h2>
            <img src="{{asset('resume/images/suitmedia.png')}}" width="100%" height="auto" />
            <p>Suitmedia is a Creative Digital Lab which focused on delivering solutions across any digital media and optimizes it. Its main business objective is focused in research and developing web-based and mobile-based application. Located in Pejaten, South Jakarta, Suitmedia has produced several well-known works such as www.bukalapak.com, www.scallope.com, www.hijUp.com , and many of client demand applications.
            <br>My role in this Company is developing several website back-end applications using technologies such as Laravel ( PHP Framework ), Ruby On Rails, and etc.
            </p>
            </div>
            
            <div class="col col-mid">
            <h2>Suitmedia Back-end Developer Intern</h2>
            <img src="{{asset('resume/images/suitmedia.png')}}" width="100%" height="auto" />
            <p> Basically the same. Only with a shorter period. I also got the Part Time Position as the performance result from this Internship Program. </p>
            </div>
            
            <div class="col">
            <h2>ITB Programming Laboratory Assistant</h2>
            <img src="{{asset('resume/images/itb.png')}}" width="100%" height="auto" />
            <p>Programming Laboratory is a department in STEI ( Informatics ) ITB which is interested in researching any computer programming related subject. The head of this laboratory is Dr. Fazat Nur Azizah, ST, M.Sc. There are several focus in our lab such as Object Oriented Programming, Programming Fundamental, and several Platforms Programming. My role in this laboratory is as a laboratory assistant, which is helping lecturers in doing their research and assisting students in learning activities.</p>
            </div>
        </div>    
        <div class="bottom-divider"></div>
    </div>
<!--End Experience Section-->

<!--Begin Work Section-->  
    <div id="work">
    	<h1>Work</h1>
        <div class="top-divider"></div>
        <h3>Click for detail.</h3>
        	<div class="content">
            	<ul id="work-thumbs">
                	<li><a href="" rel="prettyPhoto[1]" title="Image Description"><img src="{{asset('resume/images/work/avanza.jpg')}}" data-toggle="modal" data-target=".bs-example-modal-lg-1"></a>
                    </li>
                    <div class="modal fade bs-example-modal-lg-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div style="margin-top:10%; margin-left:10%; margin-right:10%; margin-bottom:10%">
                            <h3>Toyota Avanza Garage</h3>
                            <p>Avanza Garage is an Event held by Toyota Indonesia to increase the enthusiasm of Avanza Owner in Indonesia. The main point of the Event is to upload the photo of your Avanza Car Modification and try to get as much point as possible by receiving Like and Share at your photo.
                            <br>
                            <br>For this Event my teammate and I are asked to make the web-based application that would be linked to the Toyota Indonesia Facebook Page. We develop this application using Laravel PHP Framework and Facebook Javascript SDK 3. The application is accessible through this <a href="https://www.facebook.com/avanzanation/app_274245672763534">link</a>.
                            </p>
                            <img src="{{asset('resume/images/work/avanza-1.jpg')}}" width="50%" height="auto">
                            </div>
                        </div>
                      </div>
                    </div>
                    <li><a href="" rel="prettyPhoto[1]" title="Image Description"><img src="{{asset('resume/images/work/cakpres.jpg')}}" data-toggle="modal" data-target=".bs-example-modal-lg-2"></a>
                    </li>
                    <div class="modal fade bs-example-modal-lg-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div style="margin-top:10%; margin-left:10%; margin-right:10%; margin-bottom:10%">
                            <h3>Presidential Election Game - Cakpres</h3>
                            <p>Cakpres is a game that my team and I developed to compete in Hackaton Code For Vote 2 2014. It is a real-time massive multiplayer game about Indonesian Presidential Candidate. The main objective of the game is to answer the questions about the candidates as fast as possible and be the fastest among all of the players that is online together. Beside of the quiz, Cakpres also serve some useful informations such as FAQ about the election, list of violation done by the candidates, and etc.
                            <br>
                            <br>Cakpres is also able to be accessed with Web Based since it’s developed using Ionic framework. And for the online multiplayer we implemented it using node.js and firebase. The application can be accessed <a href="https://play.google.com/store/apps/details?id=com.suitmedia.cakpres">here</a>.
                            </p>
                            <img src="{{asset('resume/images/work/cakpres-1.png')}}" width="50%" height="auto">
                            </div>
                        </div>
                      </div>
                    </div>
                    <li><a href="" rel="prettyPhoto[1]" title="Image Description"><img src="{{asset('resume/images/work/quicklook.jpg')}}" data-toggle="modal" data-target=".bs-example-modal-lg-3"></a>
                    </li>
                    <div class="modal fade bs-example-modal-lg-3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div style="margin-top:10%; margin-left:10%; margin-right:10%; margin-bottom:10%">
                            <h3>Quicklook POD</h3>
                            <p>Quicklook is a web-based application for one of Petroleum Engineering Lecturer in ITB. The main feature of this application is to do some calculations and simulate the result in graphs. There are 2 type of simulation ( Static Class and Monte Carlo Simulation ) implemented in this application. And user can fill out the data in the spreadsheet-like page in the apps.
                            <br>
                            <br>The application is now already an intellectual property of the lecturer. The application developed in PHP Language using Laravel Framework, and implementing several javascript plugins such as amchart and dhtmlxgrid for the features.
                            </p>
                            <img src="{{asset('resume/images/work/quicklook-1.png')}}" width="50%" height="auto">
                            </div>
                        </div>
                      </div>
                    </div>
                    <li class="last"><a href="" rel="prettyPhoto[1]" title="Image Description"><img src="{{asset('resume/images/work/reself.jpg')}}" data-toggle="modal" data-target=".bs-example-modal-lg-4"></a>
                    </li>
                    <div class="modal fade bs-example-modal-lg-4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div style="margin-top:10%; margin-left:10%; margin-right:10%; margin-bottom:10%">
                            <h3>ReSelf, Remote Camera Shutter for Samsung Wearable</h3>
                            <p>ReSelf is a Samsung Wearable Application that we developed to participate in the Hackaton for Samsung Galaxy Gear Challenge 2014. The main functionality of this application is to enable you control your phone camera by using your Samsung Wearable. It is very useful when you want to take a group picture because the preview of the camera is also shown in the Wearable Side.
                            <br>We develop this application using Tizen Language, which is a language for The Samsung Wearable Development for the Back-end of the Gear App, using Angular JS as the front-end of the Gear App because the front-end is using HTML. And for the Mobile Side of The App we are using Android from Scratch.
                            <br>This Application is still waiting permit to be published in Samsung Apps Store and currently our team is trying to enhance this application to increase its quality.
                            </p>
                            <img src="{{asset('resume/images/work/reself-1.jpg')}}" width="50%" height="auto">
                            </div>
                        </div>
                      </div>
                    </div>
                    <li><a href="" rel="prettyPhoto[1]" title="Image Description"><img src="{{asset('resume/images/work/suitcommerce.jpg')}}" data-toggle="modal" data-target=".bs-example-modal-lg-5"></a>
                    </li>
                    <div class="modal fade bs-example-modal-lg-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div style="margin-top:10%; margin-left:10%; margin-right:10%; margin-bottom:10%">
                            <h3>Suitcommerce</h3>
                            <p>Suitcommerce is a backend platform for e-commerce web-based application. Developed while I am being an intern in Suitmedia, the main idea of this project is to make a platform for an e-commerce application so that when  the company received a related project they do not have to start from beginning. For this purpose, the suitcommerce application is made to be very general and only handle the backend process.
                            <br>Suitcommerce consists of e-commerce admin backend features such as CRUD ( Create, Read, Update, Delete ) for several models related to this subject such as Products, Users, Categories, and etc. And it also capable of generating reports based on the data entered by the admin.
                            <br>Suitcommerce is developed in PHP Language using Laravel Framework and currently able to be accessed <a href="http://www.suitcommerce.suitdev.com">here</a>. But it’s just for the staging phase so it might be removed after several times.
                            </p>
                            <img src="{{asset('resume/images/work/suitcommerce-1.png')}}" width="50%" height="auto">
                            </div>
                        </div>
                      </div>
                    </div>
                </ul>
            </div>
        <div class="bottom-divider"></div>
    </div>
<!--End Work Section-->

<!--Begin Connect Section-->  
    <div id="connect">
    	<h1>Connect</h1>
        <div class="top-divider"></div>
        	<div class="content">
            	<div id="form">
                	{{Form::open(['url' => 'sendcontactmessage','method'=>'POST'])}}
                    	<span>Name</span>
                        {{Form::text('sender_name',null,array(
                                'id'=> 'sender_name',
                                'class'=>'name'
                        ))}}
                        <span>Email</span>
                        {{Form::text('sender_email',null,array(
                                'id'=> 'sender_email',
                                'class'=>'email'
                        ))}}
                        <span>Message</span>
                        {{Form::textarea('content',null,array(
                                'id'=> 'content',
                                'class'=>'message'
                        ))}}
                        {{Form::submit('Submit', array('class'=>'submit','name'=>'submite'))}}
                    {{Form::close()}}
                </div>
                <div id="social-footer">
                	<h2>Let's get connected!</h2>
                    <p>I'd love to collaborate and making ideas become reality. And will happily help you solving your problems with digital solutions. Please kindly add my 
                        social media account or send me a contact message through provided form. Looking forward to hear from you soon.</p>
                    <ul id="sm-links">
                    	<li><a href="http://www.facebook.com/metagaze.yogi" class="facebook">Facebook</a></li>
                        <li><a href="http://twitter.com/yogiisinaga" class="twitter">Twitter</a></li>
                        <li><a href="http://id.linkedin.com/in/yogiisinaga/" class="linkedin">LinkedIn</a></li>
                    </ul>
                </div>
            </div>
    </div>
<!--End Connect Section--> 

</div>

 <!-- The JavaScript -->  
        <script type="text/javascript">
    		$(function() {
                $('#main-menu li a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');

                    event.preventDefault();
                });
            });
			
 			 $(document).ready(function(){
    		$("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false, deeplinking: false});
  			});

        </script>
</body>
</html>
