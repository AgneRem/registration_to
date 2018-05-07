<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Registracija</title>
  </head>
  <body class="container">
    <h1>Registracija į konferenciją</h1>


    @include('layouts.errors'); 

    <form class="" action="/registrations" method="post">
    {{ csrf_field()}}

    <div class="form-group">
      <label for="first_name">Jūsų vardas</label>
      <input type="text" name="first_name" value="" class="form-control" id="first_name">
    </div>

    <div class="form-group">
      <label for="last_name">Jūsų pavardė</label>
      <input type="text" name="last_name" value="" class="form-control" id="last_name">
    </div>

    <div class="form-group">
      <label for="email">Jūsų el.paštas</label>
      <input type="email" name="email" value="" class="form-control" id="emailAddress">
    </div>

    <input type="submit" name="" class="btn btn-primary" value="Registruotis">
    </form>
  </body>
</html>
