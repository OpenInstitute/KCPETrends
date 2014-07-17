<!DOCTYPE HTML>
<!--
	Prologue 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>KCPE Trends</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		 <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-45632034-1', 'openinstitute.com');
		  ga('send', 'pageview');
		</script>

		<script src="js/jquery-1.9.1.min.js"></script>	
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<link rel="shortcut icon" href="images/gfavicon16-blank.png">
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-normal.css" />
			<link rel="stylesheet" href="css/style-narrower.css" />
			<link rel="stylesheet" href="css/style-narrow.css" />
			<link rel="stylesheet" href="css/style-mobile.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css" rel="stylesheet">
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
		<script type="text/javascript" src="js/knockout-2.2.1.js"></script>
		<script type="text/javascript" src="js/globalize.min.js"></script>
		<script type="text/javascript" src="js/dx.chartjs.js"></script>
		<script type="text/javascript" src="js/data.js"></script>

		<style>
			#kcpe_data, #kcpe_data_chart  {
				margin-top: 30px;
				width: 100%;
				left:0px;
			}
			
			.half_chart {
				margin-top: 10px;
				width: 50%;
			}
			
			.rightside{
				float: right;
				top: 0px;
			}

			.leftside{
				float: left;
				top: 0px;
			}

			.center{
				margin-left: auto;
				margin-right: auto;
				z-index: 20;
				position: inherit;
			}

			h1 {
                font-size: 3em;
            }
                h1.alt {
                    color: #888;
                }

            .oi {
                margin: 0 0 1em;
                text-align: center;
            }

            #hint p {
               color: #666;
               font-size: 0.5em;
               margin: 0;
            }

            #nav ul li a {
            	padding: 0.25em 1.75em;
            }

            #logo {
            	margin: 0.75em 1.5em 0.75em;
            }

            #about, .searching {
            	font-size: 14pt;
            	line-height: 1.8;
            }

            #search-results {
            	margin-bottom: 20px;
            }

		</style>

	</head>
	<body>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">
				<div class="top">

					<!-- Logo -->
						<div id="logo">
							
							<span class="image"><img src="images/glogo-blank.png" alt="" /></span>

							<h1 id="title">KCPE Trends</h1>
							<!-- <span class="byline"></span> -->
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#home" id="home-link" class="skel-panels-ignoreHref"><span class="fa fa-home">Home</span></a></li>
								<li><a href="#trends" id="trends-link" class="skel-panels-ignoreHref"><span class="fa fa-bar-chart-o">KCPE Trends</span></a></li>
								<li><a href="#about" id="about-link" class="skel-panels-ignoreHref"><span class="fa fa-info-circle">About KCPE Trends</span></a></li>
								<li><a href="#comments" id="comments-link" class="skel-panels-ignoreHref"><span class="fa fa-comments-o">Have Your Say</span></a></li>
								<li><a href="#data" id="data-link" class="skel-panels-ignoreHref"><span class="fa fa-cloud-download">Get the Data</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-panels-ignoreHref"><span class="fa fa-envelope">Contact</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

				    <ul class="oi">
				        <li><a href="http://openinstitute.com/"><img class="image" src="images/oi-alt-logo.png" alt="" style="max-width: 120px;" /></a></li>
				    </ul>

				    <!-- Social Icons -->
				        <ul class="icons">
				            <li><a href="http://twitter.com/open_institute" class="fa fa-twitter solo"><span>Twitter</span></a></li>
				            <li><a href="http://plus.google.com/+OpenInstitute" class="fa fa-google-plus solo"><span>Google+</span></a></li>
				            <li><a href="http://facebook.com/theopeninstitute" class="fa fa-facebook solo"><span>Facebook</span></a></li>
				            <li><a href="http://github.com/openinstitute" class="fa fa-github-alt solo"><span>Github</span></a></li>
				            <li><a href="http://www.linkedin.com/company/2865525" class="fa fa-linkedin solo"><span>Linkedin</span></a></li>
				            <li><a href="mailto:hello@openinstitute.com" class="fa fa-envelope solo"><span>Email</span></a></li>
				        </ul>
				</div>
			
			</div>

		<!-- Main -->
			<div id="main">
			
				 <!-- Intro -->
                    <section id="home" class="one">
                        <div class="container">

                            <img class="image featured" src="images/featured1.png" alt="" />

                            <header>
                                <h1 class="alt">Trends in KCPE <strong>performance</strong>.</h1>
                            </header>

                            <h3>
	                            Thousands of students sit for their Kenya Certificate of Primary Education (KCPE) exams every year.
	                            Discover the performance records of schools, districts and counties in Kenya from 2006 to 2011.
                            </h3>

                            <footer>
                                <a href="#trends" class="button scrolly">View KCPE Trends</a>
                            </footer>

                        </div>
                    </section>

				<!-- Portfolio -->
					<section id="trends" class="two">
					<div class="container">
						<header>
							<h2>KCPE Trends</h2>
						</header>
						<p style="margin-bottom: 0.5em">Start typing to search</p>
						<div id="hint">
							<p>Hint: the results of your search will be shown below</p>
						</div>
						
						<div id="search-results" class="row">
							<form action="#" method="post" target="_self">
								<input type="text" value="" id="searchterm" onKeyUp="showResult(this.value);"/>
								<br />
								<input type ="radio" id="level_rad" name="level_rad" value="school" checked> School 
								<input type ="radio" id="level_rad" name="level_rad" value="district" > District 
								<input type ="radio" id="level_rad" name="level_rad" value="county" > County
							<br />
						 	</form>
					 	</div>
				      		
						<div id='kcpe_data'></div>
						<div id='kcpe_data_global'></div>
						<div id='kcpe_data_ENG' class="half_chart rightside"></div>
						<div id='kcpe_data_MATHS' class="half_chart leftside"></div>
						<div id='kcpe_data_SCIENCE' class="half_chart rightside"></div>
						<div id='kcpe_data_KIS' class="half_chart leftside"></div>
						<div id='kcpe_data_SSR' class="half_chart center" ></div>
						<div class="clearfix"></div>


						<!-- AddThis Button BEGIN -->
						<br /><br/>
						<div 
							class="addthis_toolbox addthis_default_style addthis_32x32_style"
							addthis:url="http://bit.ly/kcpetrends"
					        addthis:title="KCPE Trends"
					        addthis:description="Thousands of students sit for their Kenya Certificate of Primary Education (KCPE) exams every year. Discover the performance records of schools, districts and counties in Kenya from 2006 to 2011."
					        style="margin-left:auto;margin-right:auto"> 
								<a class="addthis_button_twitter"></a>
								<a class="addthis_button_facebook"></a>
								<a class="addthis_button_google_plusone_share"></a>
								<a class="addthis_button_linkedin"></a>
								<a class="addthis_button_compact"></a><!-- <a class="addthis_counter addthis_bubble_style"></a>-->
						</div>
						<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-528228b91a99bdec"></script>
						<script type="text/javascript">
							var addthis_share = {
							    templates : {
							        twitter : "Discover how schools performed in #KCPE exams from 2006 to 2011 http://bit.ly/kcpetrends via @Open_Institute #kcpetrends"
							    }
							}
						</script>
						<!-- AddThis Button END -->		
					</div>
					</section>

			<!-- About -->
					<section id="about" class="three">
						<div class="container">
							<header>
								<h2>About KCPE Trends</h2>
							</header>

							<p>
								Over the last number of years, trends in education performance have emerged from across the country, some of which can be explained by 
								cultural norms, climate change or even conflict. Root causes, especially the negative trends, are in some cases not so easy to identify. 
								For instance, some counties with relatively good climate, cultural behaviours that promote education and fairly good economies still perform 
								below the national average in some subjects. Nakuru county, for instance, performed below the national average for Science between 2006 and 2011. 
								However, we are unable to find targeted interventions for the county related to performance in Sciences.
 								<br /><br />
								Although there exist a number of studies that show the challenges with education performance and poor outcomes, it is more difficult to find 
								cases of targeted regional interventions that address subject level performance problems in counties.
								</br /><br />
								Join us on 6th December, 2013 as we bring together education sector experts to explore what can be done to deliver targeted interventions at the 
								sub-national levels of our education system. Follow the hashtag <a href="https://twitter.com/search?q=%23KCPEtrends" target="_blank"><strong>#kcpetrends</strong></a> 
								on twitter or subscribe to our mailing list for more information.
							</p>
							<h3>Grassroots Voices</h3>
							<iframe width="853" height="480" src="//www.youtube.com/embed/OcYDyHoP3jE" frameborder="0" allowfullscreen></iframe>
							<br />
							<br />

							<h3>Disclaimer</h3>
							<br />
							<p> 
								This visualization relies on school codes assigned by the Kenya National Examinations Council to identify a trend. Over time, some schools 
								seemed to have their codes changed for one reason or another so the dataset may list a school with multiple school codes. This causes some 
								of the schools to show up in different districts and different counties or search results to be duplicated.
							</p>

							<h3>Known Issues</h3>
							<br />
							<p>
								The following are known issue listed with the current iteration of KCPE Trends visualization:
								<ul>
									<li><i class="fa fa-angle-right"></i> Counties like Murang’a that have apostrophe’s and/or special characters do not show up</li>
									<li><i class="fa fa-angle-right"></i> Sometimes only subject charts show up without the overall average chart</li>
									<li><i class="fa fa-angle-right"></i> The Social Studies and Religion chart stretches unevenly if you search again without refreshing the page</li>
								</ul>
								We’re currently working on these issues and they will be corrected soon. 
								At which point we will also include a comparison feature to compare different schools, districts and regions and 
								direct links to specific charts that you can share on social media.
								</br /><br />
								If you have any queries or feedback, please email us on <a href="mailto:hello@openinstitute.com">hello@openinstitute.com</a>
							</p>

						</div>
					</section>

			<!-- Comments -->
					<section id="comments" class="five">
						<div class="container">
							<header>
								<h2>Have Your Say</h2>
							</header>

							<div id="disqus_thread"></div>
						    <script type="text/javascript">
						        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
						        var disqus_shortname = 'kcpetrends'; // required: replace example with your forum shortname

						        /* * * DON'T EDIT BELOW THIS LINE * * */
						        (function() {
						            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
						            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
						            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
						        })();
						    </script>
						    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
						    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
						</div>
					</section>

				<!-- Get the data -->
					<section id="data" class="two">	
						<div class="container">
							<header>
								<h2>Get the Data</h2>
							</header>

							<h3>Want to use the raw data to check the facts, or build your own projects? KCPE Trends is built with data from the <a href="http://opendata.go.ke/" target="_blank">Kenya Open Data portal</a> and 
							<a href="http://www.knec.ac.ke/main/index.php" target="_blank">Kenya National Examinations Council</a>. You're welcome to re-use all of this information, in any way you please and without any cost, as long as you acknowledge where you got the data from.</h3>
							<br />
							<div class="action">
								<a onclick="_gaq.push(['_trackEvent', 'Outbound Link', 'Download on GitHub']);" href="dataset_dl.php" class="button">
            						<i class="fa fa-cloud-download fa-lg"></i>&nbsp;&nbsp;
            							Download .csv
  								</a>
							</div>

						</div>
					</section>
			

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>

							<p>Stay in touch.</p>
							
							<form action="https://docs.google.com/a/openinstitute.com/forms/d/13frkRA5TQlDFfueJtRKCjbOzfEWoh2Lg7vc_904ouo4/formResponse" method="POST" id="ss-form" target="_self" onsubmit="">
  					
								<div class="row half">
									<div class="6u"><input type="text" class="text" name="entry.783466386" placeholder="Name" id="entry_0" /></div>
									<div class="6u"><input type="text" class="text" name="entry.1281195243" placeholder="Email" id="entry_1" /></div>
								</div>
								<div class="row half">
									<div class="12u">
										<textarea name="entry.600532200" placeholder="Message" id="entry_2"></textarea>
									</div>
								</div>
								<!-- <div class="row">
									<div class="12u">
										<a href="#" class="button submit">Send Message</a>
									</div>
								</div> -->

								<div class="ss-item ss-navigate">
									<div class="ss-form-entry">
										<input type="submit" name="submit" value="Submit" class="button" style="margin-top:10px;" />
								</div>

							</form>

						</div>
					</section>
			
			</div>

		<!-- Footer -->
            <div id="footer">
                
                <!-- Copyright -->
                    <div class="copyright">
                        <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a><br /><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">KCPE Trends</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://openinstitute.com" property="cc:attributionName" rel="cc:attributionURL">Open Institute</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_US">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.
                    </div>

                <!-- Credits
                Photo - Kenya: Student using his fingers to solve a problem on the Early Grade Mathematics Assessment (EGMA)
                By - GlobalPartnership for Education
                Link - http://www.flickr.com/photos/gpforeducation/8493336550/
                -->    
            </div>

	</body>
</html>

