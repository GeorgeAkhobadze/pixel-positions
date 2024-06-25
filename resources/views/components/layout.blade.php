<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400,500,600&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white font-hanken-grotesk">

<div class="px-10">
     <nav class="flex justify-between items-center py-4 border-b border-white/10">
         <div><a href=""><img src="{{ Vite::asset('resources/images/logo.svg') }}" alt=""/></a></div>
         <div class="space-x-6 font-bold">
             <a href="#">Jobs</a>
             <a href="#">Careers</a>
             <a href="#">Salaries</a>
             <a href="#">Companies</a>
         </div>

         @auth
             <div class="flex gap-4 items-center">
                 <a href="/jobs/create">Post a Job</a>
                 <form method="POST" action="/logout" class="m-0">
                     @csrf
                     @method('DELETE')
                     <button>Log Out</button>
                 </form>
             </div>

         @endauth

         @guest
             <div class="space-x-6 font-bold">
                 <a href="/register">Sign up</a>
                 <a href="/login">Log in</a>
             </div>
         @endguest

     </nav>
    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>
