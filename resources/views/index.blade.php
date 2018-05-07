<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Registracija</title>
  </head>
  <body class="container">
    @if (session('message'))
      <div class="alert alert-success">
        {{ session('message')}}
      <a href="/edit"><button type="button" name="button" class="btn btn-warning">Norite redaguoti rezervaciją? Spauskite čia</button> </a> 
      </div>
    @endif
    <a href="/create"><button type="button" name="button" class="btn btn-success"> <h1>Registracija į konferenciją</h1></button></a>
  </body>
</html>
