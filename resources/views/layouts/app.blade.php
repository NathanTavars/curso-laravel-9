<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - EspecializaTi</title>

    <link rel="shortcut icon" href="{{ url('images/favicon.ico') }}" type="image/png">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    
     <header class="bg-purple-400 shadow ">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8 lg:flex lg:justify-between">
      <h1 class="text-3xl font-bold tracking-tight text-white  ">CRUD</h1>
      <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="shadow bg-purple-700 hover:bg-purple-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Logout</button>
    </form>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="container mx-auto px-4 py-8">
            
            @yield('content')
        </div>
    </div>
  </main>

</body>
</html>
