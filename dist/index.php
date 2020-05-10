<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
  </head>
  <body>
    <div class="nav">
      <h1>Spotify php</h1>

    </div>

    <div class="container">

    </div>


    <script id="entry-template" type="text/x-handlebars-template">
      <div class="cd">
        <img src="{{poster}}" alt="">
        <h2>{{title}}</h2>
        <span class="author">{{author}}</span>
        <span class="year">{{year}}</span>

      </div>
    </script>

  </body>
</html>
