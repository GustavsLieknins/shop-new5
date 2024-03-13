<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/style.css">
  <title>Products</title>
</head>
<body>
  <header>
    <p>BestShopVHQ</p>
    @auth
      <div>
        <p>Wsp, {{ auth()->user()->name }}</p>
        <form action="/logout" method="post">
        @csrf
          <button>Log out</button>
        </form>
      </div>
    @endauth
    @guest
      <div>
        <p><a href="/login">Log in</a></p>
        <p><a href="/register">Sign up</a></p>
      </div>
    @endguest
  </header>

    {{ $slot }}

  </body>
</html>