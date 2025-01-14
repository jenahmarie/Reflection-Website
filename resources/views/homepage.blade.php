<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>HOMEPAGE</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
</head>
<body class="bg-gray-100 font-roboto">
    @include('layouts.header')

  <main class="container mx-auto flex flex-col md:flex-row items-center py-20 px-6">
    <div class="md:w-1/2 text-center md:text-left mb-10 md:mb-0 ml-10 mr-5">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Hi,</h1>
      <h2 class="text-4xl md:text-5xl font-bold mb-4">I'm <span class="text-pink-500">Jenah Rivero</span></h2>
      <h3 class="text-4xl md:text-5xl font-bold mb-4">a BSIS Student</h3>
      <p class="text-gray-700 mb-8">
        Hi, I’m Jenah Marie Z. Rivero, a fourth-year BS in Information Systems student at City College of Calapan. I’m passionate about web development and aspire to become a skilled website developer. I’m always eager to learn and improve my skills, and I’m excited to create user-friendly websites that make a difference.
      </p>
      <div class="space-x-4">
        {{-- <button class="bg-black text-white px-6 py-3 rounded-full">Hire Me</button> --}}
        <button class="bg-pink-500 text-white px-6 py-3 rounded-full">Get to Know More!</button>
      </div>
    </div>
    <div class="md:w-1/2 flex justify-center ml-1 mr-4">
      <img alt="Portrait of a woman with a gray hoodie" class="rounded-full w-72 h-72 object-cover" height="300" src="images/myimage.jpg" width="300"/>
    </div>
  </main>

  <footer class="fixed bottom-4 right-4">
    <button class="bg-white text-gray-900 p-4 rounded-full shadow-lg">
      <i class="fas fa-info"></i>
    </button>
  </footer>
</body>
</html>
