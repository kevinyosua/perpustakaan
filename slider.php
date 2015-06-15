<div class="slider-wrapper theme-orman">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="images/portfolio/01.jpg" alt="slider image 1" />
                <a href="#">
                	<img src="images/portfolio/02.jpg" alt="slider image 2" title="This is an example of a caption" />
                </a>
                <img src="images/portfolio/03.jpg" alt="slider image 3" />
                <img src="images/portfolio/04.jpg" alt="slider image 4" title="#htmlcaption" />
                <img src="images/portfolio/05.jpg" alt="slider image 5" title="#htmlcaption" />
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>Example</strong> caption with <a href="http://dev7studios.com" rel="nofollow">a credit link</a> for <em>this slider</em>.
            </div>
        </div> 
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
				controlNav:false
        });
        </script>
    </div>