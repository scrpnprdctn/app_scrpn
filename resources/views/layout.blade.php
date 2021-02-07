<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
  </head>
  <body>

    <section class="hero is-small is-info">
        <div class="hero-body">
          <p class="title">
            My first Blog
          </p>
          <p class="subtitle">
            I swear ...
          </p>
        </div>
    </section>

  <section class="section">
    <div class="container">

        @yield('content')
        
    </div>
  </section>
  </body>
</html>
