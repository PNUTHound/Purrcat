<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search results</title>
    <meta charset="utf-8">
    <meta name = "format-detection" content = "telephone=no" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">   
    <meta name = "format-detection" content = "telephone=no" /> 
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="search/search.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.mobilemenu.js"></script>
    <!--[if lt IE 8]>
        <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
    <![endif]-->
    <!--[if lt IE 9]>
      <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<div class="main">
  <div class="over-head">
    <div class="container">
      <div class="row">
        <article class="span9">
          <a href="index.html" class="link-home"></a>
        </article>
        <article class="span3">
          <form id="search" action="search.php" method="GET" accept-charset="utf-8">
            <input type="text" onFocus="if(this.value =='SEARCH' ) this.value=''" onBlur="if(this.value=='') this.value='SEARCH'" value="SEARCH" name="s">
            <a href="#" onClick="document.getElementById('search').submit()"></a>
          </form>
        </article>
      </div>
    </div>
  </div>
  <div class="div-content">
    <header>
        <div class="container">
             <div class="navbar navbar_ clearfix">
                <div class="navbar-inner">      
                      <div class="clearfix">
                        <h1 class="brand"><a href="index.html"><img src="img/logo.png" alt=""></a><span>dog&amp;cat</span></h1> 
                        <div class="nav-collapse nav-collapse_ collapse">
                            <ul class="nav sf-menu clearfix">
                              <li><a href="index.html">Home</a></li>
                              <li class="sub-menu "><a href="index-1.html">About us</a>
                                 <ul>
                                  <li><a href="#">Our mission</a></li>
                                  <li class="submenu-1"><a href="#">Testimonials</a>
                                    <ul>
                                      <li><a href="#">Allan smith</a></li>
                                      <li><a href="#">Sarah braun</a></li>
                                      <li><a href="#">Sean pete</a></li>
                                    </ul>

                                  </li>
                                  <li><a href="#">Our team</a></li>
                                 </ul>
                              </li>
                              <li><a href="index-2.html">Animals in care</a></li>
                              <li><a href="index-3.html">Gallery</a></li>
                              <li><a href="index-4.html">Contacts</a></li>
                            </ul>
                        </div>
                      </div>
                 </div>  
             </div>
        </div>
    </header>
    <div id="content">
      <div class="container"> 
          <div class="row box-404">
            <article class="span12">
              <h2>search results</h2>
              <div id="search-results"></div>
            </article>
          </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
         <div class="row">
             <article class="span6 fright">
               <ul class="soc-icons">
                 <li><a href="#" class="icon"></a></li>
                 <li><a href="#" class="icon-1"></a></li>
                 <li><a href="#" class="icon-2"></a></li>
               </ul>
             </article>
             <article class="span6 left">
                <span>dog&amp;cat &copy; 2013 | &nbsp;</span><a href="index-5.html">Privacy Policy</a>
             </article>
             
         </div>
    </div>
  </footer>
</div>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>