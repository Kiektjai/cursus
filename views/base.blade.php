<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('browsertitle')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styles.css">
    @yield('css')
  </head>
  <body>

    @include('topnav')

    @yield('outsidecontainer')

    <div class="container">

      <div class="row">
        <br><br>
        @include('errormessage')
      </div>

      @yield('content')

    </div>

    <div class="row footer-background">
      <div class="col-md-3">
        <div class="padding-left-8px">
          <h4>Contact us</h4>
          123 Main st.<br>
          Unionville, PA<br>
          7654321<br>
          +1 (555) 555-1212
      </div>
      </div>
      <div class="col-md-6"></div>
      <div class="col-md-3">Map</div>
    </div>

  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"
  integrity="sha256-JklDYODbg0X+8sPiKkcFURb5z7RvlNMIaE3RA2z97vw="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  @yield('bottomjs')

  </body>
</html>
