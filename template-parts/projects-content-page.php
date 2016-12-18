<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package summersixteen
 */

?>


	<article class="project_content" id="myGallery">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <div id="project_controls">
            <form>
                 <span>Filter my projects:</span>
                 <input id="mbHtmlCss" type="checkbox" checked="checked">
                 <label for="mbHtmlCss">HTML &amp; CSS</label>
                 <input id="mbWordpressJquery" type="checkbox" checked="checked">
                 <label for="mbWordpressJquery">WordPress and jQuery</label>
                 <input id="mbResponsive" type="checkbox" checked="checked">
                 <label for="mbResponsive">Responsive</label>
                </div>
            </form>
        </div>
       

       		<ul class="project_list">
            	<li class="project" id="rny">
                	<img class="project-image" src="http://localhost:8888/wp-content/uploads/2016/11/rny.jpg" atl="rny">
                    <h3 data-type="html_css"><a href="http://mbutts.studio.mcad.edu/webdev1/wk13/r_ny/index.html">R&amp;Co Design</a></h3>
                    <a class="view_more" href="http://mbutts.studio.mcad.edu/webdev1/wk13/r_ny/index.html">View Site</a>
                    <p>I built this site ground up to imitate an already existing site R&Co. I heavily relied on the grid structure in order to come up with the end result and only used HTML and CSS. Quick note: The original site has since been updated.</p>
                </li>
                
                <li class="project" id="eviltwin">
                	<img class="project-image" src="http://localhost:8888/wp-content/uploads/2016/11/Screen-Shot-2016-11-12-at-7.51.03-PM.png" atl="Evil Twin">
                    <h3 data-type="responsive" ><a href="http://www.eviltwin.michellebutts.net/blog/">Evil Twin</a></h3>
                    <a class="view_more" href="http://mbutts.studio.mcad.edu/webdev1/wk13/r_ny/index.html">View Site</a>
                    <p>This project was an open topic project that required the use of WordPress. In addition, I utilized jQuery and produced a "working" contact form. I also tried my hand at making the site responsive; it was not required or taught within this course.</p>
                </li>
                <li class="project" id="meetandleash">
                	<img class="project-image" src="http://localhost:8888/wp-content/uploads/2016/11/Screen-Shot-2016-11-12-at-7.54.37-PM.png" atl="meetandleash">
                	<h3 data-type="html_css"><a href="http://mbutts.studio.mcad.edu/webprin/meetandleash/index.html">Meet &amp; Leash</a></h3>
                    <a class="view_more" href="http://mbutts.studio.mcad.edu/webdev1/wk13/r_ny/index.html">View Site</a>
                    <p>This was a course project that focused on linking multiple pages, using a drop down list, and creating hover effects. I relied heavily on HTML and CSS in order to complete this project.</p>
                </li>
                <li class="project" id="hopeunchained">
                	<img class="project-image" src="http://localhost:8888/wp-content/uploads/2016/11/Screen-Shot-2016-11-12-at-7.57.41-PM.png" atl="Hope Unchained">
                	<h3 data-type="html_css"><a href="http://mbutts.studio.mcad.edu/webprin/wk10/mow/mow.html">Hope Unchained</a></h3>
                    <a class="view_more" href="http://mbutts.studio.mcad.edu/webdev1/wk13/r_ny/index.html">View Site</a>
                    <p>This is my one of my first coded sites. The purpose of this project was to build a site that covered an event of the civil rights era. This is a two page site that was built using only HTML and CSS.</p>
                </li>
                <li class="project" id="firstportfolio">
                	<img class="project-image" src="http://localhost:8888/wp-content/uploads/2016/11/Screen-Shot-2016-11-12-at-8.06.34-PM.png" atl="First Portfolio">
                	<h3 data-type="html_css"><a href="http://mbutts.studio.mcad.edu/webdev1/wk10/portfoliotwo/portfolio.html">First Portfolio</a></h3>
                    <a class="view_more" href="http://mbutts.studio.mcad.edu/webdev1/wk13/r_ny/index.html">View Site</a>
                    <p>This course project utilized basic HTML and CSS skills. My actual resume is not attached, don't wait for it to load :) and the connect contact form is not set-up.</p>
                </li>
                <li class="project" id="sanctuary">
                	<img class="project-image" src="http://localhost:8888/wp-content/uploads/2016/11/Screen-Shot-2016-11-12-at-8.10.31-PM.png" atl="sanctuary">
                	<h3 data-type="wordpress_jquery"><a href="http://www.sanctuary.michellebutts.net/">Sanctuary</a></h3>
                    <a class="view_more" href="http://mbutts.studio.mcad.edu/webdev1/wk13/r_ny/index.html">View Site</a>
                    <p>This site is my first introduction into wordpress and jquery. The challenge for this site was to create a sliding home page and a gallery within wordpress. The sliding feature and the gallery were both done using jquery. As you will notice, my gallery (studio cabin -> orchards painters cabin) did not fare well before my project was due. However, we had a similar assignment within the same semester that allowed us to rework our skills on an open topic project and I eventually mastered the slider.</p>
                </li>
        	</ul>
            <div class="project_div">
                <a href="https://github.com/mnbutts">
                <h3>See My Code</h3>
                <p>on</p>
                <p>Github</p>
                </a>
            </div>
</article><!-- #post-## -->
