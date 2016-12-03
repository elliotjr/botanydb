
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Botany DB</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/starter-template.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Botany DB</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Botany DB</h1>
        <p class="lead">Explore Australian Flora</p>
      </div>

      <div class="row">
        <div class="col-centered col-md-8">
          <form class="" action="index.html" method="post">
            <div class="col-md-8">
              <input type="text" class="form-control search-term" name="searchTerm" placeholder="Search for Australian Flora">
            </div>
            <div class="col-md-1">
              <button type="button" class="btn btn-primary" name="button" onclick="doSearch()">Search</button>
            </div>
          </form>
        </div>

      </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">

      function doSearch() {
        var searchTerm = $('.search-term').val();
        $.ajax({
          method: "POST",
          url: "search.php",
          data: {searchTerm:searchTerm}
        })
        .done(function(data) {
          alert(data);
        });
      }

      $(document).ready(function() {

      });
    </script>

  </body>
</html>
