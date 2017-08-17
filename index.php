<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MY COMPASS</title>
    <meta name="description" content="Web application aiding in choosing the right path forward.">
    <meta name="keywords" content="VueJS, bootstrap, personal growth">
    <meta name="author" content="Peter Vreča">
    <link rel="icon" href="img/favicon-compass.ico">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Vue.js 2.0 -->
    <script src="https://unpkg.com/vue@2.2.4"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/d87f30f392.js"></script>

</head>
    <body>
        <div class="container">
            <div class="row" id="app">
                
                        <!-- HEADER -->

                <div class="jumbotron text-center" id="green" >
                <i class="fa fa-compass fa-5x" aria-hidden="true"></i>
                <h1>MY COMPASS</h1>
                <p>Application for choosing your growth path (to glory).</p>
                <p style="font-size: 11pt;">Align your learning goals with projects, change habits and challenge your fears.</p>
                </div>

                         <!-- END OF HEADER -->


                         <!-- MAIN CONTENT -->
                       
                 
                 <!-- ACTIVE STEPS BLOCK -->
                 <div class="jumbotron text-center col-xs-12 col-sm-12" id="white">
                    <i class="fa fa-compass fa-3x" aria-hidden="true"></i>
                    <h2>ACTIVE STEPS</h2><br> <!-- read active from the database -->
                </div>
                <!-- END OF ACTIVE STEPS BLOCK -->


                <div class="col-xs-6 col-sm-3" id="green">
                    <h2>Learning goals</h2><br>
                    <!--<form action="insert.php" method="post">-->
                    <input type="text" id="goalinput" name="goal" v-model="gmessage">
                    <button type="submit" id="goalButton" v-on:click="insert('goal')">Add a new goal.</button>
                    </form>
                    <p>List your learning goals.</p><br>
                        <?php 
                            $data = "goal"; //variable in global scope!
                            include ('php/retrieve.php');
                            echo "<ul>";
                            while($row = $goals->fetch_assoc()){
                             echo "<li style='list-style:none inside;'>" . $row['g_title'] . "<input type=\"checkbox\" id=\"checkbox\" style=\"margin-left:10px;\"></li>";
                            }
                            echo "</ul>";
                        ?>
                </div>
                <div class="col-xs-6 col-sm-3" id="gray">
                    <h2>Projects</h2><br>
                    <input type="text" id="projectinput" v-model="pmessage">
                    <button type="button" id="projectButton" v-on:click="insert('project')">Add a new project.</button>
                    <p>List your projects.</p><br>
                        
                        <?php 
                            $data = "project"; //variable in global scope!
                            include ('php/retrieve.php');
                            echo "<ul>";
                            while($row = $projects->fetch_assoc()){
                             echo "<li style='list-style:none inside;'>" . $row['p_title'] . "<input type=\"checkbox\" id=\"checkbox\" style=\"margin-left:10px;\"></li>";
                            }
                            echo "</ul>";
                        ?>

                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-xs-6 col-sm-3" id="green">
                    <h2>Habits</h2><br>
                    <input type="text" id="habitinput" v-model="hmessage">
                    <button type="button" id="habitButton" v-on:click="insert('habit')">Add a new habit.</button>
                    <p>List your habits.</p><br>
                        <?php 
                            $data = "habit"; //variable in global scope!
                            include ('php/retrieve.php');
                            echo "<ul>";
                            while($row = $habits->fetch_assoc()){
                                echo "<li style='list-style:none inside;'>" . $row['h_title'] . "<input type=\"checkbox\" id=\"checkbox\" style=\"margin-left:10px;\"></li>";
                            }
                            echo "</ul>";
                        ?>
                </div>
                <div class="col-xs-6 col-sm-3" id="gray">
                    <h2>Fears</h2><br>
                    <input type="text" id="fearinput" v-model="fmessage">
                    <button type="button" id="fearButton" v-on:click="insert('fear')">Add a new fear.</button>
                    <p>List your fears.</p><br>
                        <?php 
                            $data = "fear"; //variable in global scope!
                            include ('php/retrieve.php');
                            echo "<ul>";
                            while($row = $fears->fetch_assoc()){
                                echo "<li style='list-style:none inside;'>" . $row['f_title'] . "<input type=\"checkbox\" id=\"checkbox\" style=\"margin-left:10px;\"></li>";
                            }  
                            echo "</ul>";
                        ?>
                </div>


                <!-- PAST STEPS BLOCK -->
                <div class="jumbotron text-center col-xs-12 col-sm-12" id="white" style="margin-top:30px;">
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
                    <p class="text-muted">Made by Peter Vreča <i class="fa fa-copyright" aria-hidden="true"></i> in 2017 using PHP, VueJS and Bootstrap.<br> Follow me on:   <a href="https://www.linkedin.com/in/peter-vre%C4%8Da-613626114/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="https://github.com/xpero39/"><i class="fa fa-github" aria-hidden="true"></i></a>
                    <a href="https://www.freecodecamp.com/xpero39"><i class="fa fa-free-code-camp" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/xpero39"><i class="fa fa-twitter" aria-hidden="true"></i></a></p>
                </div>
                </footer>

                         <!-- END OF FOOTER -->

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>