<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>index2</title>
  </head>
  <body>
    <header>
      <div id="navbar">
        <img src="img/logo.png" alt="logo">
      </div>
    </header>
    <main>
      <div class="container">

      </div>
    </main>
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="disco">
        <div class="poster">
          <img src="{{poster}}" alt="{{title}}">
        </div>
        <h2>{{title}}</h2>
        <h3>{{author}}</h3>
        <p>{{genre}}</p>
        <p>{{year}}</p>
      </div>
    </script>
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
