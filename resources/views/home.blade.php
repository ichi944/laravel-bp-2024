<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>

<body>
  <header class="bg-blue-500">

    <nav class="container mx-auto flex items-center justify-between p-6">
      <div class="text-white">
        <h1 class="font-bold text-xl">Logo</h1>
      </div>
      <div class="desktop-menu space-x-4">
        <a href="#" class="text-white">Home</a>
        <a href="#" class="text-white">About</a>
        <a href="#" class="text-white">Contact</a>
      </div>
      <div class="mobile-menu">
        <label for="menu-toggle" id="hamburger" class="cursor-pointer text-white">
          <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </label>
        <div id="mobile-links" class="hidden absolute right-0 w-48 mt-2 py-2 bg-white border rounded shadow-xl">
          <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Home</a>
          <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">About</a>
          <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-indigo-500 hover:text-white">Contact</a>
        </div>
      </div>
    </nav>
  </header>
  <main class="max-w-7xl mx-auto">
    <section class="container mx-auto p-6">
      <h1 class="text-2xl font-bold">Home</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
    </section>
  </main>
</body>

</html>
