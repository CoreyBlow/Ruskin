<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
    </head>
    
    <body>
        <div id="wrapper">
            <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <div id="banner">             
            </div>
            
            
            
     
            <div class='w3-sidenav w3-collapse w3-slim' id='sidenav'>

</div>

            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                


    <head>
       
        <title>Side Nav</title>
        <style type="text/css">
            
            * {
                margin: 0;
                padding: 0;
            }
            
            body {
                font-family: Open Sans, Arial, sans-serif;
                overflow-x: hidden;
            }
            
            nav {
                position: fixed;
                z-index: 1000;
                top: 0;
                bottom: 0;
                width: 200px;
                background-color: #036;
                transform: translate3d(-200px, 0, 0);
                transition: transform 0.4s ease;
            }
            .active-nav nav {
                transform: translate3d(0, 0, 0);
            }
            nav ul {
                list-style: none;
                margin-top: 100px;
            }
            nav ul li a {
                text-decoration: none;
                display: block;
                text-align: center;
                color: #fff;
                padding: 10px 0;
            }
            
            .nav-toggle-btn {
                display: block;
                position: absolute;
                left: 200px;
                width: 40px;
                height: 40px;
                background-color: #666;
            }
            
            .content {
                padding-top: 300px;
                height: 2000px;
                background-color: #fff;
                text-align: center;
                transition: transform 0.4s ease;
            }
            .active-nav .content {
                transform: translate3d(200px, 0, 0);
            }
            
            
            
        </style>
    </head>
    
        
        <nav>
            
            <a href="#" class="nav-toggle-btn"></a>
            
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Indices.php">Indices</a></li>
                <br/><a class="subnavigation" href="Works.php">Works</a>
                <br/><a class="subnavigation" href="Manuscripts.php">Manuscripts</a>
                <br/><a class="subnavigation" href="Corpora.php">Corpora</a>
                <br/><a class="subnavigation" href="Works_by_Others.php">Works by Others</a>
                <br/><a class="subnavigation" href="Commentary.php">Commentary</a>
                <br/><a class="subnavigation" href="Essays.php">Essays</a>
                <li><a href="#">XML</a></li>
                <li><a href="#">Bibliography</a></li>
                <li><a href="Staff_and_Support.php">Staff and Support</a></li>
                <li><a href="Legal.php">Legal</a></li>
                <center> 
                <table cellpadding="5" cellspacing="1" class="searchBox">
                    <tbody>
                        <tr>
                            <td align="center">
                                <form action="search.php" method="get">…</form>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div align="left">
                                                        <input type="text" name="query" id="query" size="20" value=" " 
                                                               action="include/js_suggest/SearchPage.php" columns="2" autocomplete=
                                                               "off" delay="1500">
                                                        <br>
                                                        <div id="querySuggestList" class="SuggestFramework_List" style=
                                                             "position: absolute; z-index: 1; width: 309px; word-wrap: break-word;
                                                             cursor: default; display: none;">
                                                            <table class="SuggestFramework_Combo" cellspacing="0" cellpadding=
                                                            "0">
                                                                <tbody></tbody>
                                                             </table>
                                                        </div>
                                                    </div>    
                                                </td>        
                                                <td>
                                                    <input type="submit" value="Search">
                                                </td>
                                            </tr>    
                                        </tbody>    
                                    </table>     
                                    <input type="hidden" name="search" value="1">
                                </form>    
                                
                            </td>
                        </tr>
                    </tbody>
                </table>
            </center>
            </ul>
            
        </nav>
        
        
        <div class="content">
            <h1></h1>
        </div>
        
        
        
        
        
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        
        (function() {
            
            var bodyEl = $('body'),
                navToggleBtn = bodyEl.find('.nav-toggle-btn');
            
            navToggleBtn.on('click', function(e) {
                bodyEl.toggleClass('active-nav');
                e.preventDefault();
            });
            
            
            
        })();
        
        
    </script>

    </body>
</html>

        
        
       
  

    
  

                
            </div>
          
            <footer>
                <p></p>
            </footer>
        </div>
    </body>
</html>
   
