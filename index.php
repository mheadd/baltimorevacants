<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Baltimore Vacants</title>
        <meta name="author" content="Shea Frederick">
        <link rel="stylesheet" href="/static/resources/stylesheets/screen.css">
        <link rel="stylesheet" href="/static/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
        <script type="application/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
        <script type="application/javascript" src="/static/js/leaflet.js"></script>
        <script type="application/javascript" src="/static/js/jquery-ui-1.8.16.custom.min.js"></script>
        <script>var STARTLOC = '<?php if(isset($_GET['loc'])){ print $_GET['loc']; } ?>';</script>
        <script type="application/javascript" src="/static/js/site.js?ver=1"></script>
        <script type="application/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="/static/js/fancybox/jquery.fancybox-1.3.4.js"></script>
        <script type="text/javascript" src="/static/js/fancybox/jquery.easing-1.3.pack.js"></script>
    </head>
    <body>
        <a id="initialinfo" href="#initial-view-info" style="display:none">&nbsp;</a>
        <form id="home-search" onsubmit="$('#btn-submit').click();return false;">
        <div id="main">
            <div class="detail-box" id="detail-box">
                <span>Select a property</span>
            </div>
            <div class="map-contain">
                <div class="header">
                    <div class="title-contain">
                        <h1>Baltimore Vacants</h1>
                    </div>
                    <div class="search-controls">
                        <div class="search-contain">
                            <div class="search">
                                <div id="search-box">
                                    <input type="text" id="address" name="address" class="search-input" autocomplete="off" placeholder="Enter Baltimore city address" />
                                    <input type="submit" id="btn-submit" value="Submit" class="btn-submit" />
                                </div>
                            </div>
                            <div class="option-controls">
                                <div class="options">
                                    <label class="section-label">Type:</label>
                                    <input type="checkbox" id="check1" checked />
                                    <label for="check1" class="btn btn-house group first">House</label>
                                    <input type="checkbox" id="check2" />
                                    <label for="check2" class="btn-lot btn group last">Lot</label>
                                    <label class="section-label">Show:</label>
                                    <input type="checkbox" id="check3" />
                                    <label for="check3" class="btn btn-crime">Crime</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lmap-wrap">
                    <div id="lmapcontainer" style="width:500px;height:500px;"></div>
                </div>
                <div class="footer">
                    <div class="footer-credit">
                        <a id="credits" href="#credit-text">Developer Credits</a> &nbsp;&nbsp;&nbsp;  |  &nbsp;&nbsp;&nbsp;  Baltimore vacants data provided through <a href="http://data.baltimorecity.gov/" target="parent">Open Baltimore</a>
                    </div>
                    <div class="footer-social">
                        <p>
                            Spread the word:
                        </p>
                        <span><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.baltimorevacants.com/" data-via="bmorevacants" data-text="Search for vacant houses and lots through out the city of Baltimore" data-count="horizontal">Tweet</a></span>
                        <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.baltimorevacants.com&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:20px;" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
            <div id="sb-contain">
                <div class="left-v-shadow"></div>
                <div class="search-result">
                    <span id="result-value" class="result-value">...</span>
                    <span class="result-label">Matching results</span>
                </div>
                <div id="sb-contents">
                    <ul id="results-list"></ul>
                    <div class="text-btn next" id="btn-next">
                        <a href="#">Next 25</a>
                    </div>
                    <div id="too-many" class="too-many">
                        <span class="exclaim">!</span>
                        <p class="lrg-text">
                            Too many results to list.
                        </p>
                        <p>
                            Enter a Baltimore City address or zoom in closer.
                        </p>
                    </div>
                    <div id="initial" class="initial">
                        <p>
                            Enter a Baltimore City address
                        </p>
                    </div>
                    <div id="loading" class="loading"></div>
                </div>
            </div>
        </div>
        <div style="display:none">
            <div id="initial-view-info">
                <h2>Welcome to Baltimore Vacants</h2>
                <p>Please keep in mind that this web site is still in the beta phase and may contain errors. You should verify all informaiton found here with a third party.</p>
                <p>To view vacants in an area, you can <b>zoom into a neighborhood</b> or type an <b>address in the search box</b> at the top of this page.</p>
                <p>The toggle buttons in the upper right corner of this site allow you to turn on or off viewing of <b>Vacant houses</b>, <b>Vacant land</b> and <b>Police monitored (blue light) cameras</b>.</p>
            </div>
            <div id="credit-text">
                <h2>Developed with care and a passion for Baltimore</h2>
                <p class="spread-word">
                    Spread the word: <span><a href="http://twitter.com/share" class="twitter-share-button" data-url="http://www.baltimorevacants.com/" data-via="bmorevacants" data-text="Search for vacant houses and lots through out the city of Baltimore" data-count="horizontal">Tweet</a></span><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.baltimorevacants.com&amp;layout=button_count&amp;show_faces=false&amp;width=100&amp;action=like&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:20px;" allowTransparency="true"></iframe>
                </p>
                <p>
                    Blight is a major issue for many American cities, particularly those who have undergone major economic and cultural changes since the mid 20th centruy.
                </p>
                <p>
                    The goal of this application is to shed light on the current situation in Baltimore. Far too many homes are unoccupied and as a result draining city resources, not providing annual tax revenue and presenting over health and safety issues for citizens.
                </p>
                <p>
                    Help support Open Data and Baltimore by sharing this app with your friends, family and those willing to make an investment in this city.
                </p>
                <p>
                    Thank you,
                </p>
                <div class="name">
                    <div class="name-pic"></div>
                    <p class="strong">
                        Shea Frederick
                    </p>
                    <p>
                        <a href="https://twitter.com/vinylfox" class="twitter-follow-button" data-show-count="false">Follow @vinylfox</a>
                    </p>
                    <p>
                        Web Developer
                    </p>
                    <p>
                        Baltimore resident
                    </p>
                </div>
                <div class="name">
                    <div class="name-pic"></div>
                    <p class="strong">
                        James Schaffer
                    </p>
                    <p>
                        <a href="https://twitter.com/james_schaffer" class="twitter-follow-button" data-show-count="false">Follow @james_schaffer</a>
                    </p>
                    <p>
                        Web Designer
                    </p>
                    <p>
                        Baltimore resident
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        </form>
        <script>
            ! function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if(!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");
        </script>
        <!-- GOOGLE ANALYTICS -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-26641992-1']);
            _gaq.push(['_setDomainName', 'baltimorevacants.org']);
            _gaq.push(['_setAllowLinker', true]);
            _gaq.push(['_trackPageview']); (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>
