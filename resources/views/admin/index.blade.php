<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Užsiregistravę dalyviai</title>
  </head>
  <body>
    <div class="container">
      <h1>Užsiregistravę dalyviai:</h1>
      <table class="table">
        <thead>
          <tr>
            <th>Nr.</th>
            <th>Vardas</th>
            <th>Pavardė</th>
            <th>El. paštas</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($registrations as $registration)
          <tr>
            <th>{{ $registration->id}}</th>
            <td>{{ $registration->first_name}}</td>
            <td>{{ $registration->last_name}}</td>
            <td>{{ $registration->email}}</td>
            @endforeach
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
