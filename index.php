<?php

  



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather Scraper</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>

    html, body
    {
      height:100%;
    }

    .container
    {
      background-image: url("image.jpg");
      width:100%;
      height:100%;
      background-size: cover;
      background-position: center;
      padding-top: 150px;
    }

    .center
    {
      text-align:center;
    }

    .white
    {
      color:white;
    }

    p
    {
      padding-top: 20px;
      padding-bottom: 20px;
    }

    button
    {
      margin-top: 20px;
      margin-bottom: 20px;
    }

    .alert
    {
      margin-top: 20px;
      display:none;
    }
    


  </style>
  </head>
  <body>

  <div class="container">

    <div class="row">

      <div class="col-md-6 col-md-offset-3">

        <h1 class="center white"> Weather Predictor </h1>
        <p class="lead center white">Enter a city below to get a forecast for the weather. </p>

        <form>
          <div class ="form-group">

            <input type="text" class="form-control" name="city" id="city" placeholder="Eg. New Delhi, Bangalore, Kolkata">

            


          </div>

          <button id="findMyWeather" class="btn btn-success btn-lg btn-primary center-block"> Find the Weather! </button> 
               

        </form>

        <div id="success" class="alert alert-success">

          Success!

        </div>
        <div id="fail" class="alert alert-danger">

          Sorry, Weather for the city you've entered could not be found. Please try again later.

        </div>

        <div id="noCity" class="alert alert-danger">

          Please enter a city!

        </div>
      

      </div>




    </div>

    
  </div>





    





    <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>

    $("#findMyWeather").click(function(event)
    {
        event.preventDefault();

        if($("#city").val()!="")
        { 

          $.get("scraper.php?city="+$("#city").val(), function(data)
          {
            if(data=="")
            {
              $(".alert").hide();
              $("#fail").fadeIn();

            }
            else
            {
              $(".alert").hide();
              $("#success").html(data).fadeIn();
            }
          
          });

        }

        else
        {
          $(".alert").hide();
          $("#noCity").fadeIn();
        }

    });




    </script>
  </body>
</html>