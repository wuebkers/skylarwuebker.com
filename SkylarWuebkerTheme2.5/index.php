<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SkylarWuebker2.5
 */

get_header(); ?>
            <section id="main" class="content col-xs-12">
            	<div class="welcome col-xs-12 col-sm-12 col-md-12 col-lg-12">
                          	<div class="text">
                    	<h2>Creative Solutions.</h2>
                    </div>
                </div>
                
             	<div class="about" data-delay="0" data-animation="fade-in">
                	<div class="clear"></div>
                    	<div class="pitch col-xs-12 col-sm-12 col-md-5 col-lg-5 col-lg-offset-1">
                			<h4>Hello, I'm Skylar Wuebker</h4><p>With working with large companies, as well as becoming a sought after freelance designer, I understand the importance with client relations as well how important perfection is when handling any client media. Currently a front end developer at <a target="_blank" href="http://www.216digital.com">216 Digital</a>, my range of design is quite diverse, spanning from page and web layouts to environmental graphics used in stadiums and tradeshow booths. You can preview these projects at <a target="_blank" href="http://www.fortyninedegrees.com">fortyninedegrees.com</a>. As a young professional in the field I have become highly recognizable for my excellence by The University of Akron, as well as the work I have done within the community. In addition to completing my Bachelors of Fine Arts and maintaining a 3.0 GPA, I have also co-founded an organization of young design professionals offering freelance work to local businesses. You can preview projects that I have been a part of locally at <a target="_blank" href="http://www.creative-folk.com">creative-folk.com</a>. Currently located in Akron Ohio, I am available for any design and advertising work you may have. Available for travel worldwide.</p>
                		</div>
                	
                    <div class="self col-xs-12 col-sm-12- col-md-7 col-lg-6">
                	</div>
                 </div>
                <div class="location" data-delay="0" data-animation="fade-in">
                	<h6>
                        From<br>
                        <span class="dayton">Dayton</span> - 
                        <span class="akron">Akron</span>
                    </h6>
                </div>
                <div class="clear"></div>
                
                <div class="window row" data-delay="0" data-animation="fade-in">    
                    <ul class="items list-unstyled">
                        <li class="tile web">
                            <a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project1" class="fancybox fancy-image" data-title-id="title-1"><img src="photos/tiles/crystal_tile.png"></a>
                            <div id="title-1" class="sr-only">
                                <h1>TITLE</h1>
                                This is 1st title.
                            </div>




                            <a href="photos/tiles/crystal_tile.png" title="Second Project in Lightbox" rel="project1" class="fancybox sr-only"><img src="photos/tiles/crystal_tile.png"></a>
                            <a href="photos/tiles/crystal_tile.png" title="Second Project in Lightbox" rel="project1" class="fancybox sr-only"><img src="photos/tiles/crystal_tile.png"></a>
                            <a href="photos/tiles/crystal_tile.png" title="Second Project in Lightbox" rel="project1" class="fancybox sr-only"><img src="photos/tiles/crystal_tile.png"></a>

                        </li>
                        <li class="tile print"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project2" class="fancy-image fancybox"><img src="photos/tiles/nick_tile.png"></a></li>
                        <li class="tile identity"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project3" class="fancy-image fancybox"><img src="photos/tiles/cultural_tile.png"></a></li>
                        <li class="tile web"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project4" class="fancy-image fancybox"><img src="photos/tiles/black_male_tile.png"></a></li>
                        <li class="tile web"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project5" class="fancy-image fancybox"><img src="photos/tiles/hothead_tile.png"></a></li>
                        <li class="tile identity"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project6" class="fancy-image fancybox"><img src="photos/tiles/unity_tile.png"></a></li>
                        <li class="tile print"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project7" class="fancy-image fancybox"><img src="photos/tiles/facade_tile2.png"></a></li>
                        <li class="tile print"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project8" class="fancy-image fancybox"><img src="photos/tiles/mason_tile.png"></a></li>
                        <li class="tile print"><a href="photos/tiles/crystal_tile.png" title="Open Project in Lightbox" rel="project9" class="fancy-image fancybox"><img src="photos/tiles/menu_tile.jpg"></a></li>
                    </ul>
                    <div class="more">
                		<h5><a href="work.html">See More Work</a></h5>
                	</div>
                </div>
                <div class="reach" data-delay="0" data-animation="fade-in">
            		<h4>Ready to stand out?<div class="button"><a href="contact.html">Get in touch</a></div></h4>
				</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>