<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>ALBUM PAGE</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Roboto:wght@400;700&display=swap"
    rel="stylesheet"
  />

  <!-- Swiper Stylesheet -->
<link
rel="stylesheet"
href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>

<!-- Swiper JavaScript -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <style>
    .sticker {
      position: absolute;
      top: -10px;
      left: -10px;
      background: #ffe4e1;
      border-radius: 50%;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .photo-shadow {
      box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.15), -2px -2px 5px rgba(255, 255, 255, 0.7);
    }


/* Modal styling */
#photo-modal {
  display: none;
  transition: opacity 0.3s ease;
}

#photo-modal.show {
  display: flex;
  opacity: 1;
}

.photo-thumbnail {
  cursor: pointer;
  transition: transform 0.3s ease;
}

.photo-thumbnail:hover {
  transform: scale(1.05);
}


/* Carousel container styling */

.carousel-container {
  position: relative;
  width: 100%;
  max-width: 800px;
  margin: auto;
  overflow: hidden;
  padding: 0px; /* Optional: space around images */
}

.carousel-images-wrapper {
  display: flex;
  transition: transform 0.3s ease-in-out;
}

.carousel-item {
  min-width: 100%;
  box-sizing: border-box;
  padding: 0 10px;
}

/* Styling for buttons */
.carousel-prev, .carousel-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background-color: rgba(0, 0, 0, 0.5);
  border: none;
  color: white;
  font-size: 24px;
  padding: 10px;
  cursor: pointer;
}

.carousel-prev {
  left: 10px;
}

.carousel-next {
  right: 10px;
}

.carousel-prev:hover, .carousel-next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Optional: Styling the images to fit the container */
.carousel-item img {
  width: 100%;
  height: auto;
  border-radius: 8px;
  border: 4px solid #f7b6d0;
}




  </style>
</head>
<body class="bg-gradient-to-b from-pink-100 via-pink-200 to-pink-100 font-roboto relative overflow-auto">
  <!-- Header -->
  @include('layouts.header')

  <!-- Cute Photo Album Section -->
  <main class="container mx-auto px-6 py-8">
    <h1 class="text-5xl font-bold text-pink-600 text-center mb-10 font-indie-flower">My Cute Photo Album</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 ">
   <!-- Photo Cards -->
<div class="relative bg-white rounded-lg p-4 shadow-md hover:scale-105 transition-transform photo-shadow flex items-center justify-between">

    <div class="ml-4">
      <img
        src="images2/IMG_20240827_170906.jpg"
        alt="Sample Photo"
        class="rounded-md border-4 border-pink-200 photo-thumbnail"
        data-large="images2/IMG_20240827_170906.jpg"
        style="height: 300px;" />
    </div>

    <div class="flex-1 text-center">
        <p class="font-bold text-pink-500 text-lg font-indie-flower">Our First Day</p>
        <p class="text-sm text-gray-500 font-roboto">First Meeting with Sir Van</p>
      </div>
  </div>

  </div>
      <!-- Add more photo cards here -->

    </div> {{-- photocards grid --}}



    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 mt-10">

      <!-- Modal for Expanding Photos -->
  <div id="photo-modal" class="hidden fixed inset-0 bg-black bg-opacity-75 flex justify-center items-center z-50">
    <div class="relative">
      <button id="close-modal" class="absolute top-2 right-2 text-white text-2xl">&times;</button>
      <img id="modal-image" class="max-w-full max-h-screen rounded-lg" src="" alt="Expanded Photo" />
    </div>
  </div>


<!-- Photo Card with Carousel 1-->
<div class="photo-card relative bg-white rounded-lg p-4 shadow-md hover:scale-105 transition-transform photo-shadow">
  <div class="sticker">
    <i class="fas fa-heart text-pink-500"></i>
  </div>

  <!-- Carousel Wrapper -->
  <div class="carousel-container relative overflow-hidden">
    <div class="carousel-images-wrapper flex transition-transform ease-in-out duration-300" data-carousel="carousel1">
      <!-- Image 1 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/8 (2).jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/8 (2).jpg" />
      </div>
      <!-- Image 2 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/watchparty2.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/watchparty2.jpg" />
      </div>

    </div>

    <!-- Previous Button -->
    <button class="carousel-prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10094;</button>

    <!-- Next Button -->
    <button class="carousel-next absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10095;</button>
  </div>

  <!-- Caption Text -->
  <div class="mt-4">
    <p class="font-bold text-pink-500 text-lg font-indie-flower">WATCHPARTY</p>
    {{-- <p class="text-sm text-gray-500 font-roboto">We watched the movie Mallari, with lots of delicious snacks.</p> --}}
  </div>
</div>

<!-- Repeat similar structure for other photo cards with unique data-carousel attributes -->



        <!-- Photo Cards 2-->


<!-- Photo Card with Carousel 2-->
<div class="photo-card relative bg-white rounded-lg p-4 shadow-md hover:scale-105 transition-transform photo-shadow">
  <div class="sticker">
    <i class="fas fa-heart text-pink-500"></i>
  </div>

  <!-- Carousel Wrapper -->
  <div class="carousel-container relative overflow-hidden">
    <div class="carousel-images-wrapper flex transition-transform ease-in-out duration-300" data-carousel="carousel2">
      <!-- Image 1 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/siglakasan ojt 1.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/siglakasan ojt 1.jpg" />
      </div>
       <!-- Image 2 -->
       <div class="carousel-item cursor-pointer">
        <img src="images2/siglakasan2.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/siglakasan2.jpg" />
      </div>
      <!-- Image 3 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/siglakasan3.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/siglakasan3.jpg" />
      </div>
      <!-- Image 4 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/siglakasan4.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="siglakasan4.jpg" />
      </div>
      <!-- Image 5 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/siglakasan5.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="siglakasan5.jpg" />
      </div>
      <!-- Image 6 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/siglakasan6.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="siglakasan6.jpg" />
      </div>
      <!-- Image 7 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/siglakasan 7.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="siglakasan 7.jpg" />
      </div>

    </div>

    <!-- Previous Button -->
    <button class="carousel-prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10094;</button>

    <!-- Next Button -->
    <button class="carousel-next absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10095;</button>
  </div>

  <!-- Caption Text -->
  <div class="mt-4">
    <p class="font-bold text-pink-500 text-lg font-indie-flower">SIGLAKASAN</p>
    {{-- <p class="text-sm text-gray-500 font-roboto">The mini-intramural like activity for the interns and ojts of Erudithe, Fligno, and Revamo.</p> --}}
  </div>
</div>

        <!-- Photo Cards 3-->


<!-- Photo Card with Carousel 3-->
<div class="photo-card relative bg-white rounded-lg p-4 shadow-md hover:scale-105 transition-transform photo-shadow">
  <div class="sticker">
    <i class="fas fa-heart text-pink-500"></i>
  </div>

  <!-- Carousel Wrapper -->
  <div class="carousel-container relative overflow-hidden">
    <div class="carousel-images-wrapper flex transition-transform ease-in-out duration-300" data-carousel="carousel3">
      <!-- Image 1 -->
      <div class="carousel-item cursor-pointer">
        <img src="erudithe anniversary/anniversary 1.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="erudithe anniversary/anniversary 1.jpg" />
      </div>
      <!-- Image 2 -->
      <div class="carousel-item cursor-pointer">
        <img src="erudithe anniversary/anniversary 2.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="erudithe anniversary/anniversary 2.jpg" />
      </div>
      <!-- Image 3 -->
      <div class="carousel-item cursor-pointer">
        <img src="erudithe anniversary/anniversary 3.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="erudithe anniversary/anniversary 3.jpg" />
      </div>

        <!-- Image 4 -->
        <div class="carousel-item cursor-pointer">
          <img src="erudithe anniversary/anniversary 4.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="erudithe anniversary/anniversary 4.jpg" />
        </div>
        <!-- Image 5 -->
        <div class="carousel-item cursor-pointer">
          <img src="erudithe anniversary/anniversary 5.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="erudithe anniversary/anniversary 5.jpg" />
        </div>
        <!-- Image 6 -->
        <div class="carousel-item cursor-pointer">
          <img src="erudithe anniversary/anniversary 6.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="erudithe anniversary/anniversary 6.jpg" />
        </div>
      </div>

    <!-- Previous Button -->
    <button class="carousel-prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10094;</button>

    <!-- Next Button -->
    <button class="carousel-next absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10095;</button>
  </div>

  <!-- Caption Text -->
  <div class="mt-4">
    <p class="font-bold text-pink-500 text-lg font-indie-flower">ERUDITHE FOUNDING ANNIVERSARY</p>
    {{-- <p class="text-sm text-gray-500 font-roboto">A special celebration for Erudithe. We danced, ate, and had fun.</p> --}}
  </div>
</div>

        <!-- Photo Cards 4-->


<!-- Photo Card with Carousel 4-->
<div class="photo-card relative bg-white rounded-lg p-4 shadow-md hover:scale-105 transition-transform photo-shadow">
  <div class="sticker">
    <i class="fas fa-heart text-pink-500"></i>
  </div>

  <!-- Carousel Wrapper -->
  <div class="carousel-container relative overflow-hidden">
    <div class="carousel-images-wrapper flex transition-transform ease-in-out duration-300" data-carousel="carousel4">
      <!-- Image 1 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/GA1.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/GA1.jpg" />
      </div>
      <!-- Image 2 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/GA2.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/GA2.jpg" />
      </div>
      <!-- Image 3 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/GA3.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/GA3.jpg" />
      </div>
      <!-- Image 4 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/GA4.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/GA4.jpg" />
      </div>
    </div>

    <!-- Previous Button -->
    <button class="carousel-prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10094;</button>

    <!-- Next Button -->
    <button class="carousel-next absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10095;</button>
  </div>

  <!-- Caption Text -->
  <div class="mt-4">
    <p class="font-bold text-pink-500 text-lg font-indie-flower">GOODBYE ACTIVITY FOR DWCC OJTS</p>
    {{-- <p class="text-sm text-gray-500 font-roboto">We had a fun activity that has lots of fun games.</p> --}}
  </div>
</div>


        <!-- Photo Cards 5-->


<!-- Photo Card with Carousel 5-->
<div class="photo-card relative bg-white rounded-lg p-4 shadow-md hover:scale-105 transition-transform photo-shadow">
  <div class="sticker">
    <i class="fas fa-heart text-pink-500"></i>
  </div>

  <!-- Carousel Wrapper -->
  <div class="carousel-container relative overflow-hidden">
    <div class="carousel-images-wrapper flex transition-transform ease-in-out duration-300" data-carousel="carousel4">
      <!-- Image 1 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/cp1.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/cp1.jpg" />
      </div>
      <!-- Image 2 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/cp2.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/cp2.jpg" />
      </div>
      <!-- Image 3 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/cp3.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/cp3.jpg" />
      </div>
        <!-- Image 4 -->
        <div class="carousel-item cursor-pointer">
          <img src="images2/cp4.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/cp4.jpg" />
        </div>
        <!-- Image 5 -->
        <div class="carousel-item cursor-pointer">
          <img src="images2/cp5.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/cp5.jpg" />
        </div>




    </div>

    <!-- Previous Button -->
    <button class="carousel-prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10094;</button>

    <!-- Next Button -->
    <button class="carousel-next absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10095;</button>
  </div>

  <!-- Caption Text -->
  <div class="mt-4">
    <p class="font-bold text-pink-500 text-lg font-indie-flower">CHRISTMAS PARTY</p>
    {{-- <p class="text-sm text-gray-500 font-roboto">The final event that we had attended.</p> --}}
  </div>
</div>

        <!-- Photo Cards 6-->


<!-- Photo Card with Carousel 6-->
<div class="photo-card relative bg-white rounded-lg p-4 shadow-md hover:scale-105 transition-transform photo-shadow">
  <div class="sticker">
    <i class="fas fa-heart text-pink-500"></i>
  </div>

  <!-- Carousel Wrapper -->
  <div class="carousel-container relative overflow-hidden">
    <div class="carousel-images-wrapper flex transition-transform ease-in-out duration-300" data-carousel="carousel4">
      <!-- Image 1 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/fam1.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="fam1.jpg" />
      </div>
      <!-- Image 2 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/fam2.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="images2/fam2.jpg" />
      </div>
      <!-- Image 3 -->
      <div class="carousel-item cursor-pointer">
        <img src="images2/foundinganniversary1.jpg" alt="Sample Photo" class="rounded-md border-4 border-pink-200 photo-thumbnail" data-large="foundinganniversary1.jpg" />
      </div>
    </div>

    <!-- Previous Button -->
    <button class="carousel-prev absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10094;</button>

    <!-- Next Button -->
    <button class="carousel-next absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full" data-carousel="carousel1">&#10095;</button>
  </div>

  <!-- Caption Text -->
  <div class="mt-4">
    <p class="font-bold text-pink-500 text-lg font-indie-flower">ERUDITHE AND FLIGNO FAMILY</p>
    {{-- <p class="text-sm text-gray-500 font-roboto">Thank you for the warm welcome.</p> --}}
  </div>
</div>
      </div> {{-- photocards grid --}}





    <!-- Single Column Row -->
    <div class="mt-7 flex flex-col md:flex-row items-center bg-white p-8 rounded-lg shadow-lg">
      <!-- Left Content -->
      <div class="w-full md:w-1/2 text-left md:pr-8">
        <h2 class="text-3xl font-bold text-pink-500 font-indie-flower mb-4">A Special Memory</h2>
        <p class="text-gray-600 font-roboto leading-relaxed">
            My journey as an OJT at Learn at Fligno has been an incredibly rewarding experience. Throughout my time here, I have learned and grown in ways I never imagined. Not only did I gain valuable technical skills in tools like Canva, Microsoft Word, Excel, and video editing software, but I also became more mature and confident in my abilities. The workplace environment has been one of the highlights of my experience, as every employee has been incredibly kind and welcoming, making it easier for me to learn and adapt. Moreover, my soft skills—such as communication, collaboration, and time management—have greatly improved, and I now feel more capable and prepared for my future career. I am truly grateful for the opportunity to have worked alongside such wonderful people, and my memories with them will always remain in my heart. The support and knowledge I’ve gained here will stay with me as I continue to grow professionally, and I will always be thankful for the positive impact they’ve had on me.


        </p>

      </div>
      <!-- Right Image -->
      <div class="w-full md:w-1/2 mt-6 md:mt-0">
        <img
          src="images2/foundinganniversary1.jpg"
          alt="Special Memory"
          class="rounded-lg shadow-lg border-4 border-pink-200"
        />
      </div>
    </div>

    <!-- Container -->
    <div class="bg-white shadow-lg rounded-lg  w-full p-6 mt-7">
        <!-- Title -->
        <h2 class="text-4xl font-bold text-pink-500 text-center mb-6">My Works</h2>

        <!-- Group of Pictures -->
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
          <!-- Picture 1 -->
          <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
            <img
               src="myworksfligno/jen.png"
               alt="Sample Photo"
               class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
               data-large="myworksfligno/jen.png"
               />
          </div>

           <!-- Picture 2 -->
           <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
            <img src="myworksfligno/Jenah.png" alt="Sample Photo"
            class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
            data-large="myworksfligno/Jenah.png"
            />
          </div>


          <!-- Picture 3 -->
          <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
            <img src="myworksfligno/Jenah (2).png" alt="Sample Photo"
            class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
            data-large="myworksfligno/Jenah (2).png"
            />
          </div>

           <!-- Picture 4 -->
           <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
            <img src="myworksfligno/EDT.png" alt="Sample Photo"
            class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
            data-large="myworksfligno/EDT.png"
            />
          </div>


           <!-- Picture 5 -->
           <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
            <img src="myworksfligno/jen (2).png" alt="Sample Photo"
            class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
            data-large="myworksfligno/jen (2).png"
            />
          </div>

           <!-- Picture 6 -->
           <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
            <img src="myworksfligno/jen (4).png" alt="Sample Photo"
            class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
            data-large="myworksfligno/jen (4).png"
            />
          </div>


          <!-- Picture 7 -->
          <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
            <img src="myworksfligno/jen (3).png" alt="Sample Photo"
            class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
            data-large="myworksfligno/jen (3).png"
            />
          </div>

           <!-- Picture 8 -->
           <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
            <img src="myworksfligno/LAF.png" alt="Sample Photo"
            class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
            data-large="myworksfligno/LAF.png"
            />
          </div>

           <!-- Picture 9 -->
           <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
            <img src="myworksfligno/Jenah (3).png" alt="Sample Photo"
            class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
            data-large="myworksfligno/Jenah (3).png"
            />
          </div>

           <!-- Picture 10 -->
           <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
            <img src="myworksfligno/Jenah LAF.png" alt="Sample Photo"
            class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
            data-large="myworksfligno/Jenah LAF.png"
            />
          </div>

             <!-- Picture 11 -->
             <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
              <img src="myworksfligno/Jenah EDT.png" alt="Sample Photo"
              class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
              data-large="myworksfligno/Jenah EDT.png"
              />
            </div>

              <!-- Picture 12 -->
              <div class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform">
                <img src="myworksfligno/cny.png" alt="Sample Photo"
                class="overflow-hidden rounded-lg shadow-md hover:scale-105 transition-transform photo-thumbnail"
                data-large="myworksfligno/cny.png"
                />
              </div>



        </div>
      </div>

{{-- <!-- Single Column Row -->
<div class="mt-7 flex flex-col items-center bg-white p-8 rounded-lg shadow-lg">

  <h2 class="text-4xl font-bold text-pink-500 text-center mb-6">My Final Task</h2>
  <h2 class="text-2l text-black-500 text-center mb-2">
    I made a video showcasing a recap of Learn at Fligno's 2024 activities, events, webinars, and seminars.</h2>

  <!-- Centered Video -->
  <div class="w-full md:w-1/2 mt-6">
    <video
      controls
      class="w-full rounded-lg shadow-lg border-4 border-pink-200"
      autoplay
      muted
      loop
    >
      <source src="https://drive.google.com/file/d/1H5Q1hkxsL5SKwXK97jkHIUuzMObha7GH/view?usp=drive_link" type="video/mp4">

    </video>
  </div> --}}
</div>
  </main>

  <!-- Floating Info Button -->
  <footer class="fixed bottom-4 right-4">
    <button
      class="bg-gradient-to-r from-pink-400 to-purple-400 text-white p-4 rounded-full shadow-lg hover:scale-110 transition-transform"
    >
      <i class="fas fa-info text-xl"></i>
    </button>
  </footer>

  <script>


document.addEventListener("DOMContentLoaded", () => {
  const thumbnails = document.querySelectorAll(".photo-thumbnail");
  const modal = document.getElementById("photo-modal");
  const modalImage = document.getElementById("modal-image");
  const closeModal = document.getElementById("close-modal");

  thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener("click", (e) => {
      const largeSrc = e.target.getAttribute("data-large");
      modalImage.src = largeSrc;
      modal.classList.add("show");
    });
  });

  if (closeModal) {
    closeModal.addEventListener("click", () => {
      modal.classList.remove("show");
    });
  }

  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      modal.classList.remove("show");
    }
  });
});





  </script>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const carousels = document.querySelectorAll('.carousel-container');

  carousels.forEach(carousel => {
    const prevBtn = carousel.querySelector(".carousel-prev");
    const nextBtn = carousel.querySelector(".carousel-next");
    const carouselWrapper = carousel.querySelector(".carousel-images-wrapper");
    const items = carousel.querySelectorAll(".carousel-item");
    let currentIndex = 0;
    const totalItems = items.length;

    // Function to update the carousel's position
    function updateCarouselPosition() {
      const itemWidth = items[0].offsetWidth; // Get the width of a single image
      carouselWrapper.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }

    // Move to previous slide
    prevBtn.addEventListener("click", function () {
      if (currentIndex > 0) {
        currentIndex--;
      } else {
        currentIndex = totalItems - 1; // Loop to the last image
      }
      updateCarouselPosition();
    });

    // Move to next slide
    nextBtn.addEventListener("click", function () {
      if (currentIndex < totalItems - 1) {
        currentIndex++;
      } else {
        currentIndex = 0; // Loop to the first image
      }
      updateCarouselPosition();
    });
  });
});

</script>

</body>
</html>
