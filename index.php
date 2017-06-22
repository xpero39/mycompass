<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MY COMPASS</title>
    <meta name="description" content="Web application aiding in choosing the right path forward.">
    <meta name="keywords" content="VueJS, bootstrap, personal growth">
    <meta name="author" content="Peter Vreča">
    <link rel="icon" href="img/favicon-compass.ico">
    <!-- Vue.js 2.0 -->
    <script src="https://unpkg.com/vue@2.2.4"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/d87f30f392.js"></script>

</head>
    <body>
        <div class="container">
            <div  class="row" id="app">
                
                        <!-- HEADER -->

                <div class="jumbotron text-center" style="background:#46a35d;color:white;">
                <i class="fa fa-compass fa-5x" aria-hidden="true"></i>
                <h1>MY COMPASS</h1>
                <p>Application for choosing your growth path (to glory).</p>
                <p style="font-size: 11pt;">Allign your learning goals with projects, change habits and challange your fears.</p>
                </div>

                         <!-- END OF HEADER -->

                         <!-- MAIN CONTENT -->
                 
                 <!-- ACTIVE STEPS BLOCK -->
                 <div class="jumbotron text-center col-xs-12 col-sm-12" style="background:white;color:#46a35d;border:5px solid #46a35d">
                    <i class="fa fa-compass fa-3x" aria-hidden="true"></i>
                    <h2>ACTIVE STEPS</h2><br> <!-- read active from the database -->
                </div>
                <!-- END OF ACTIVE STEPS BLOCK -->

                <div class="col-xs-6 col-sm-3" style="background:#46a35d;color:white;">
                    <h2>Learning goals</h2><br>
                    <input type="text" id="l-goal-input" v-model="message">
                    <p>List your learning goals.</p><br>
                    <ul>
                        <li v-for="goal in goals" v-text="goal"></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3" style="background-color:gray;color:white;">
                    <h2>Projects</h2><br>
                    <input type="text" id="project-input" v-model="message">
                    <p>List your projects.</p><br>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-xs-6 col-sm-3" style="background:#46a35d;color:white;">
                    <h2>Habits</h2><br>
                    <input type="text" id="habit-input" v-model="message">
                    <p>List your habits.</p><br>
                </div>
                <div class="col-xs-6 col-sm-3" style="background-color:gray;color:white;">
                    <h2>Fears</h2><br>
                    <input type="text" id="fear-input" v-model="message">
                    <p>List your fears.</p><br>
                </div>

                <!-- PAST STEPS BLOCK -->
                <div class="jumbotron text-center col-xs-12 col-sm-12" style="background:white;color:#46a35d;border:5px solid #46a35d; margin-top:30px; ">
                    <i class="fa fa-compass fa-3x" aria-hidden="true"></i>
                    <h2>PAST STEPS</h2><br> <!-- read completed from the database -->
                </div>
                <!-- END OF PAST STEPS BLOCK -->

                         <!-- END OF MAIN CONTENT -->

            </div>
        </div>

                         <!-- FOOTER -->

                <footer class="footer text-center"  >
                <div class="container">
                    <br>
                    <p class="text-muted">Made by Peter Vreča <i class="fa fa-copyright" aria-hidden="true"></i> in 2017 using VueJS, Bootstrap.<br> Follow me on:   <a href="https://www.linkedin.com/in/peter-vre%C4%8Da-613626114/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="https://github.com/xpero39/"><i class="fa fa-github" aria-hidden="true"></i></a>
                    <a href="https://www.freecodecamp.com/xpero39"><i class="fa fa-free-code-camp" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/xpero39"><i class="fa fa-twitter" aria-hidden="true"></i></a></p>
                </div>
                </footer>

                         <!-- END OF FOOTER -->

        <script src="js/app.js"></script>
    </body>
</html>