<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Profile Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: 'Roboto', sans-serif;
        background-color: #fff5f5;
      }
    </style>
  </head>
  <body class="flex flex-col min-h-screen">
    @include('layouts.header')


    <div class="flex-1 bg-white p-8 rounded-lg shadow-lg max-w-6xl mx-auto mt-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="col-span-1 bg-pink-100 p-6 rounded-lg">
          <div class="flex flex-col items-center">
            <img
              alt="Profile picture of a smiling woman with a red headband"
              class="rounded-full w-32 h-32 mb-4"
              height="150"
              src="images/profile picture.jpg"
              width="150"
            />
            <h2 class="text-xl font-bold">Jenah Rivero</h2>
            <p class="text-red-500">BSIS Student</p>
            <p class="italic text-center mt-4">
                I am a BSIS student with a passion for web development, specializing in Laravel, CSS, JavaScript, and HTML.
            </p>
          </div>


          <div class="mt-6">
            <strong> Basic Information </strong>
            <hr style="border: none; height: 2px; background-color: black; margin: 0;">


            <p>
              <strong>Age:</strong> 21
            </p>
            <p>
              <strong>Status:</strong> Single
            </p>

            <p>
              <strong>Birthdate:</strong> February 28, 2003
            </p>

            <br>

            <strong>Contact Information</strong>
<hr style="border: none; height: 2px; background-color: black; margin: 5px 0;">

<div style="font-family: Arial, sans-serif; line-height: 1.8;">
  <p style="margin: 0;">
    <i class="fa fa-envelope" style="margin-right: 8px; color: black;"></i>
    Email: <a href="mailto:example@gmail.com" style="color: black; text-decoration: none;">jenahmarie28@gmail.com</a>
  </p>
  <p style="margin: 0;">
    <i class="fa fa-phone" style="margin-right: 8px; color: black;"></i>
    Phone: <a href="tel:+639123456789" style="color: black; text-decoration: none;">+63 906 620 5123</a>
  </p>
  <p style="margin: 0;">
    <i class="fa fa-map-marker" style="margin-right: 8px; color: black;"></i>
    Location: San Antonio, Calapan City, Oriental Mindoro
  </p>
</div>

<br>

<strong>Education</strong>
<hr style="border: none; height: 2px; background-color: black; margin: 5px 0;">

<div style="font-family: Arial, sans-serif; line-height: 1.8;">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-4">
            <div>
                <p class="font-bold">Science, Technology, Engineering, and Mathematics</p>
                <p class="text-gray-700">Luna Goco Colleges Inc.</p>
                <p class="text-gray-700 text-xs">June 2019 - March 2021</p>
            </div>
        </div>
        <div class="flex justify-between items-center">
            <div>
                <p class="font-bold">Bachelor of Science in Information Systems</p>
                <p class="text-gray-700">City College of Calapan</p>
                <p class="text-gray-700 text-xs">August 2021 - Present</p>
            </div>
        </div>
    </div>
</div>





            <div class="mt-4 flex flex-wrap gap-2">
              <span class="bg-red-500 text-white px-2 py-1 rounded">Organized</span>
              <span class="bg-red-500 text-white px-2 py-1 rounded">Creative</span>
              <span class="bg-red-500 text-white px-2 py-1 rounded">Practical</span>
              <span class="bg-red-500 text-white px-2 py-1 rounded">Hardworking</span>
              <span class="bg-red-500 text-white px-2 py-1 rounded">Passionate</span>
              <span class="bg-red-500 text-white px-2 py-1 rounded">Eager to Learn</span>
            </div>
          </div>
        </div>

        <div class="col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Bio Section (1 column) -->
            <div class="bg-white p-6 rounded-lg shadow md:col-span-2">
              <h3 class="text-lg font-bold mb-4">Bio</h3>
              <p>
                  I am a BSIS student at City College of Calapan with a deep interest in web development,
                  specializing in technologies like Laravel, CSS, JavaScript, and HTML. Passionate about
                  learning and growth, I strive to apply my skills in real-world projects, from creating
                  web applications to developing innovative solutions for everyday challenges.
              </p>
            </div>

          <!-- Skills Section -->
          <div class="md:col-span-2">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <!-- Technical Skills -->
      <div class="bg-gray-50 p-4 rounded-lg shadow-md w-full">
        <h3 class="text-lg font-bold mb-4">Technical Skills</h3>
        <div class="space-y-2">
          <div class="flex items-center">
            <i class="fa fa-code text-blue-500 mr-3"></i>
            <span class="flex-1">HTML, CSS, JavaScript</span>
          </div>
          <div class="flex items-center">
            <i class="fa fa-cogs text-green-500 mr-3"></i>
            <span class="flex-1">PHP & Laravel Framework</span>
          </div>
          <div class="flex items-center">
            <i class="fa fa-database text-purple-500 mr-3"></i>
            <span class="flex-1">MySQL & Database Management</span>
          </div>
          <div class="flex items-center">
            <i class="fab fa-github text-red-500 mr-3"></i>
            <span class="flex-1">Git & GitHub</span>
          </div>
        </div>
      </div>
      <!-- Soft Skills -->
      <div class="bg-gray-50 p-4 rounded-lg shadow-md w-full">
        <h3 class="text-lg font-bold mb-4">Soft Skills</h3>
        <div class="space-y-2">
          <div class="flex items-center">
            <i class="fa fa-users text-indigo-500 mr-3"></i>
            <span class="flex-1">Team Collaboration</span>
          </div>
          <div class="flex items-center">
            <i class="fa fa-lightbulb text-yellow-500 mr-3"></i>
            <span class="flex-1">Problem Solving</span>
          </div>
          <div class="flex items-center">
            <i class="fa fa-arrows-alt text-teal-500 mr-3"></i>
            <span class="flex-1">Adaptability</span>
          </div>
          <div class="flex items-center">
            <i class="fa fa-check-circle text-gray-500 mr-3"></i>
            <span class="flex-1">Attention to Detail</span>
          </div>
        </div>
      </div>
    </div>
  </div>



<!-- Personality Section (spans both columns) -->
<div class="bg-white p-6 rounded-lg shadow md:col-span-2">
    <h3 class="text-lg font-bold mb-4">Personality</h3>
    <div class="space-y-4">
        <div class="flex items-center">
            <span class="w-1/4 font-semibold">Introvert</span>
            <div class="w-3/4 bg-gray-200 rounded-full h-2.5">
                <div class="bg-blue-500 h-2.5 rounded-full" style="width: 70%"></div>
            </div>
        </div>
        <div class="flex items-center">
            <span class="w-1/4 font-semibold">Analytical</span>
            <div class="w-3/4 bg-gray-200 rounded-full h-2.5">
                <div class="bg-green-500 h-2.5 rounded-full" style="width: 50%"></div>
            </div>
        </div>
        <div class="flex items-center">
            <span class="w-1/4 font-semibold">Creative</span>
            <div class="w-3/4 bg-gray-200 rounded-full h-2.5">
                <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 90%"></div>
            </div>
        </div>
        <div class="flex items-center">
            <span class="w-1/4 font-semibold">Optimistic</span>
            <div class="w-3/4 bg-gray-200 rounded-full h-2.5">
                <div class="bg-purple-500 h-2.5 rounded-full" style="width: 60%"></div>
            </div>
        </div>
    </div>
</div>
            <!-- Hobbies Section (spans both columns) -->
            <div class="bg-white p-6 rounded-lg shadow md:col-span-2">
              <h3 class="text-lg font-bold mb-4">Hobbies</h3>
              <ul class="list-disc list-inside">
                <li>Designing digital graphics such as book covers, engaging social media posts, and posters.</li>
                <li>Developing websites and web applications.</li>
                <li>Writing and reading stories on Wattpad, as well as watching anime and K-dramas.</li>
              </ul>
            </div>
          </div>

  </body>
</html>
