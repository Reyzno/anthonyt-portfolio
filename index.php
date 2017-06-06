<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Portfolio</title>
    <!-- 2 librairies utilisées pour les animations HTML du header -->
    <script src='assets/vendor/TweenLite.min.js'></script>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <script src="https://code.jquery.com/jquery-3.2.0.js"></script>
    <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js'></script>
    <script src="assets/vendor/jquery.shuffleLetters.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/global.css">

</head>

<body>
    <!--
                         _.-'~~~~~~`-._
                        /      ||      \
                       /       ||       \
                      |        ||        |
                      | _______||_______ |
                      |/ ----- \/ ----- \|
                     /  (     )  (     )  \
                    / \  ----- () -----  / \
                   /   \      /||\      /   \
                  /     \    /||||\    /     \
                 /       \  /||||||\  /       \
                /_        \o========o/        _\
                  `--...__|`-._  _.-'|__...--'
                          |    `'    |

-->
    <header>
        <div class="container-fluid">
            <div class="row">
                <h1 class="main-title col-xs-12 col-sm-12 col-md-12">Anthony Tournier<br>Web designer</h1>
                <svg version="1.1" class="at-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="172.223px" height="161.111px" viewBox="0 0 172.223 161.111" enable-background="new 0 0 172.223 161.111" xml:space="preserve">
                    <g id="Calque_2" display="none">
                    	<rect x="-84.389" y="-69.445" display="inline" stroke="#F5F5F5" stroke-miterlimit="10" width="333" height="284"/>
                    </g>
                    <g id="Calque_1">
                    	<g id="triangle">
                    		<polygon fill="none" stroke="#FFFFFF" stroke-width="4" stroke-miterlimit="10" points="162.334,17.469 88.514,145.329
                    			14.694,17.469 		"/>
                    	</g>
                    	<g id="carre">
                    			<rect x="46.09" y="17.469" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-miterlimit="10" width="85.142" height="85.142"/>
                    	</g>
                    	<g id="cercle">
                    		<circle fill="none" stroke="#FFFFFF" stroke-width="4" stroke-miterlimit="10" cx="88.66" cy="60.04" r="42.57"/>
                    	</g>
                    	<g id="lettreA">
                    		<g>
                    			<path fill="#FFFFFF" stroke="#FFFFFF" stroke-miterlimit="10" d="M78.533,81.779h-3.437l19.855-44.025h3.835l19.949,44.024
                    				h-3.835l-6.507-14.777H88.722l0.951-2.772h17.523L96.672,40.278L78.533,81.779z"/>
                    		</g>
                    	</g>
                    	<g id="lettreT">
                    		<g>
                    			<path fill="#FFFFFF" stroke="#FFFFFF" stroke-miterlimit="10" d="M93.906,37.958v2.763l-15.865,0.002l0.009,41.126h-3.401
                    				l-0.007-41.125l-15.542,0.003v-2.763L93.906,37.958z"/>
                    		</g>
                    	</g>
                    </g>
                    </svg>
            </div>
        </div>
    </header>

    <!-- SECTION WHO IS THIS GUY -->
    <main>
      <div class="neon"></div>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>

        <div class="container">
            <div class="row">
                <p class="section-title">Who is this guy&nbsp;?</p>
                <hr>
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <h2 class="the-person">The Person</h2>
                    <p class="person-text">
                        Born in 1991, I started liking computer and video games very young thanks to game demos slipped into the magazines I bought. It was just the begining! I keep continuing playing lot of games on various console, until my first computer... A whole new world opened to me.
                        Since this, I've never stopped to play and use my computer. Otherwise in real world, I worked as seller in a school context and as order picker for five years. I could not find a job that pleased me, so a crazy idea crossed my mind
                        : What if I become game maker? I rapidly forgot the idea, because what I love in video games is to discover the story, learn the gameplay and experience adventure, not make the game. So I abandoned the idea. It's only after that
                        that I wanted to learn how make website by entering the "Access Code School" of Besançon. 6 months of school and 2 month of traineeship to learn a maximum! Now I am sure, I want to be web designer!
                        </option>
                    </p>
                </div>

                <center>
                    <img src="assets/img/touched.svg" id="language-svg" alt="">
                </center>
            </div>
            <h2 class="section-title">My works</h2>
            <hr>
            <section class="portfolio">
                <div class="content">
                    <div class="projects">
                        <div class="row">
                            <div class="project lfm col-xs-12 col-md-12">
                                <div class="project-image">
                                    <img src="assets/img/lfm.png" alt="" />
                                </div>
                                <div class="project-title">
                                    <h2>Les fées mères</h2>
                                </div>
                                <div class="project-description">
                                  <p>"Les fées mères" is a project where we have to do a site similar to "WeTransfer". We choose the site name based on a joke, because files send are supposed to be ephemeral.
                                  To stay in accordance with the title, we made the site look like a wonderful purple land full of magic !</p>
                                </div>
                            </div>
                            <div class="project date col-xs-12 col-md-12">
                                <div class="project-image">
                                    <img src="assets/img/date.jpg" alt="" />
                                </div>
                                <div class="project-title">
                                    <h2>Date'Art</h2>
                                </div>
                                <div class="project-description">
                                    <p>For this project, me and the team were obligated to make a site or application starting from a database. We choose a database of museum to make it a sort of dating site between museum and people.</p>
                                </div>
                            </div>
                            <div class="project planoi col-xs-12 col-md-6">
                                <div class="project-image" id="planoisactive">
                                    <img src="assets/img/planoisactiv.png" alt="" />
                                </div>
                                <div class="project-title">
                                    <h2>Planois'active</h2>
                                </div>
                                <div class="project-description">
                                    <p>"PlanoiS'active" is my first project with client. For the first time, I was obliged to follow very clear instructions asked by the customers, the visual and practical choices were no longer just for me. We were 4 people
                                        on the project: Me, another web designer, and 2 web developper.</p>
                                </div>
                            </div>
                            <div class="project geest col-xs-12 col-md-6">
                                <div class="project-image" id="geest">
                                    <img src="assets/img/geest.jpg" alt="" />
                                </div>
                                <div class="project-title">
                                    <h2>GE-EST</h2>
                                </div>
                                <div class="project-description">
                                  <p>GE-EST is my traineeship project. I had to do a graphic overhaul without instructions. So I used an empty theme from WordPress to make the site great again.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="form">
                <div id="container">
                    <div id="a1">
                        <div id="a11"></div>
                    </div>
                    <div id="a2">
                        <div id="a21"></div>
                    </div>
                    <div id="a3"></div>
                    <div id="a4"></div>
                    <div id="a5"></div>
                    <div id="a6">Contact module v4.215</div>
                    <div id="a7">
                        <span id="a71">paoock prod.</span>
                        <span id="a73">
                  <b class="a731">19</b>
                    <b class="a732">29</b>
                </span>
                        <span id="a74">
                  <b class="a741">30/</b>
                    <b class="a742">06/</b>
                    <b class="a743">2012</b>
                </span>
                        <span id="a76">CSS animation</span>
                    </div>
                    <div id="a9">
                        <span>12456</span>:
                        <span>123456789</span>.
                        <span>12456</span>:
                        <span>123456789</span>&nbsp;
                        <span>12456</span>
                    </div>
                    <div id="a10">
                        CSS 3D transforms
                        <span></span>
                    </div>
                    <div id="b1">
                        <span class="b11"></span>
                        <span class="b12"></span>
                        <span class="b13"></span>
                        <span class="b14"></span>
                        <span class="b15"></span>
                        <span class="b16"></span>
                        <span class="b17"></span>
                        <span class="b18"></span>
                        <span class="b19"></span>
                        <span class="b110"></span>
                    </div>
                    <form id="contact-form" method="post">
                        <p>Dear Anthony, My <label for="your-name">name</label> is </p>
                        <input class="input-form" type="text" name="name" id="your-name" minlength="3" placeholder="your name"></p>
                        <p> and my
                            <label for="email">mail </label> is
                            <p></p>
                            <input class="input-form" type="email" name="email" id="your-email" placeholder="your mail">
                        </p>

                        <p> I have a
                            <label for="your-message">message</label> for you,</p>

                        <p>
                            <textarea name="message" id="your-message" placeholder="your message" class="expanding"></textarea>
                        </p>
                        <p>
                            <button id="btn-send" type="button" class="send-icon">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30.125px" viewBox="0 452.875 59 59.125" enable-background="new 0 452.875 59 59.125" xml:space="preserve">
                              <g>
                              	<path fill="#FFFFFF" d="M58.367,453.648c-0.24-0.228-0.527-0.341-0.863-0.341c-6.257,0-11.424,0.851-15.5,2.553
                              		c-4.075,1.703-8.367,4.796-12.875,9.279c-1.917,1.941-4.028,4.279-6.33,7.013l-13.63,0.719c-0.384,0.049-0.695,0.24-0.935,0.576
                              		l-8.056,13.811c-0.288,0.479-0.228,0.947,0.18,1.403l2.301,2.301c0.216,0.216,0.492,0.323,0.828,0.323
                              		c0.144,0,0.251-0.012,0.323-0.035l9.926-3.058l10.106,10.106l-3.057,9.925c-0.12,0.433-0.023,0.815,0.288,1.151l2.301,2.302
                              		c0.264,0.215,0.54,0.323,0.827,0.323c0.216,0,0.408-0.049,0.576-0.145l13.811-8.056c0.336-0.239,0.527-0.551,0.576-0.935
                              		l0.719-13.63c2.733-2.302,5.072-4.412,7.013-6.33c4.269-4.292,7.307-8.613,9.117-12.965c1.811-4.352,2.715-9.513,2.715-15.482
                              		C58.728,454.146,58.608,453.877,58.367,453.648z M49.665,467.262c-0.671,0.671-1.486,1.007-2.445,1.007
                              		c-0.959,0-1.774-0.336-2.446-1.007c-0.67-0.672-1.007-1.487-1.007-2.446s0.336-1.773,1.007-2.445
                              		c0.671-0.671,1.486-1.007,2.446-1.007c0.959,0,1.774,0.336,2.445,1.007c0.671,0.672,1.007,1.486,1.007,2.445
                              		C50.672,465.775,50.337,466.59,49.665,467.262z"/>
                              </g>
                              </svg>
                            </button>
                    </form>
                </div>
            </section>
        </div>
        <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
        <script type="text/javascript" src="assets/vendor/header.js"></script>
        <script src="assets/js/index.js"></script>
    </main>
</body>

</html>
