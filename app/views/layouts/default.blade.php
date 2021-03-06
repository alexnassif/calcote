<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

   <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/JavaScript">

      function change(s){
        var image = document.getElementById('pic');

        if(s == 1)
          image.src = "images/calcote_photo_001.png";
        else if(s == 2)
          image.src = "images/calcote_photo_002.png";
        else if(s == 3)
          image.src = "images/calcote_photo_003.png";
        else if(s == 4)
          image.src = "images/calcote_photo_004.png";
        else 
          image.src = "images/calcote_photo_005.png";


      }
    </script>

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    
  </head>
  <body>
    
        <div class = "container-fluid">
          <div class = "header" >
            
            <h5 class = "blue1" style="text-align:right;margin:0px;padding:0px;">Director</h5>
            <div class="headerBlue">
              
              <h1>Steven Calcote</h1>
              <hr />
              </div>
            
          </div>

          

    <div class="container-fluid" style="margin-top:20px;">
      <div class="row">
        <div class="col-md-1 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="about">About</a></li>
            <li><a href="reel">Reel</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </div>

        @yield('content')
        
      </div>
    </div>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    </div>

  </body>

  <footer>
    
      <div class ="container-fluid" style="margin-top:20px">
        @yield('footer')
      </div>
    
  
  </footer>


</html>