<!DOCTYPE html>
<?php
$db = new SQLite3('/var/www/html/farm/farm.db');
$results = $db->query('SELECT humidity FROM status');
while ($row = $results->fetchArray()) {
$humidity = $row[0];
}
$results = $db->query('SELECT humidity_map FROM status');
while ($row = $results->fetchArray()) {
$humidity_map = $row[0];
}


?>

<html>
    <head>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="css/mtfont.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/circle.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Smart Farm</title>
    </head>
    <body>
        <!-- Navbar Start here -->
          <nav class="nav-style">
            <div class="nav-wrapper container nav-style">
              <a href="#!" class="brand-logo">Smart Farm</a>
              <a href="#" data-activates="nav-side" class="navBtn right"><i class="material-icons">menu</i></a>
                <ul class="side-nav" id="nav-side">
                    <!-- Header -->
                    <header class="header">
                        <li><img class="responsive-img " id="farm-logo" src="img/TaeyeonEvil.jpg"></li>
                        <li><h4 class="center ">Smart Farm</h4></li>
                        <hr width="190" >
                    </header>
                    <!-- Menu Item -->
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Farm List</a></li>
                        <li><a href="#">Statistics</a></li>    
                        <li><a href="#">Setting</a></li> 
                        <li><a href="#">About</a></li> 
                </ul>
            </div>
          </nav>
     
        
        
        
        <!-- Content Section -->
        <div class="container">
            <h3 class="text-normal">Dashboard</h3>
            <h5 class="text-main">Farm Status:</h5>
            <div class="row">
                <div class="col s12 m6">
                <div class="card white">
                    <div class="card-content text-normal">
                        <div class="row row-fix">
                            <div class="col s6">
                                <h6>Humidity:</h6>

				<?php echo"<div class=\"c100 p$humidity_map  cir-red\">";?>
                                    <span class="text-normal"><?php echo "$humidity_map%";?></span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s6 right-align">
                                <h6>Humidity:</h6>
                                <h3><?php echo "$humidity";?></h3>
                                <p>Farm: Farm 1</p>
                                <p>Last Update: 15:30</p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6">
                    <div class="card white">
                        <div class="card-content text-normal">
                            <div class="row row-fix">
                                <div class="col s6">
                                    <h6>Water Level:</h6>
                                    <div class="c100 p50 cir-blue">
                                        <span class="text-normal">50%</span>
                                        <div class="slice">
                                            <div class="bar"></div>
                                            <div class="fill"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col s6 right-align">
                                    <h5>Water Volume:</h5>
                                    <h5>150/300 ml.</h5>
                                    <p>Last Update: 15:30</p>
                                </div>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="row">
                <h4>Active Farm</h4>
                <div class="col s12">
                    <ul>
                        <li>
                            <div class="card white">
                                <div class="card-content text-normal farm-list">
                                    <div class="row row-fix">
                                        <div class="col s6">
                                            <img src="img/Tae_ico.png">
                                            <h5>Farm 1</h5>
                                        </div>                                            
                                        <div class="col s6">
                                             <div class="switch">
                                                <label>
                                                  Off
                                                  <input type="checkbox" checked="checked">
                                                  <span class="lever"></span>
                                                  On
                                                </label>
                                              </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card white">
                                <div class="card-content text-normal farm-list">
                                    <div class="row row-fix">
                                        <div class="col s6">
                                            <img src="img/Tae_ico.png">
                                            <h5>Farm 2</h5>
                                        </div>                                            
                                        <div class="col s6">
                                             <div class="switch">
                                                <label>
                                                  Off
                                                  <input type="checkbox">
                                                  <span class="lever"></span>
                                                  On
                                                </label>
                                              </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="card white">
                                <div class="card-content text-normal farm-list">
                                    <div class="row row-fix">
                                        <div class="col s6">
                                            <img src="img/Tae_ico.png">
                                            <h5>Farm 3</h5>
                                        </div>                                            
                                        <div class="col s6">
                                             <div class="switch">
                                                <label>
                                                  Off
                                                  <input type="checkbox">
                                                  <span class="lever"></span>
                                                  On
                                                </label>
                                              </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <!-- Script Section -->
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="application/javascript" src="js/materialize.min.js"></script>
        <script>
          $(".navBtn").sideNav();
        </script>
    </body>
</html>
