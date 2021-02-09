<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel-boolean</title>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
  </head>

  <body>
    <h1>laravel-boolean</h1>

    {{-- con il for each stampo tutti gli elementi della mia collection --}}
    @foreach ($cars as $item)
        <h2><?php echo $item->brand . " - " . $item->name ?></h2>
        <h3><?php echo $item->license_plate . " - " . $item->color . " - " . $item->type . " - " . $item->year ?></h3>
        <hr>
    @endforeach

  </body>

</html>