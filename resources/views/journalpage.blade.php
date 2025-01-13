<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Floating Journal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
</head>
<body class="bg-gradient-to-b from-white-100 via-pink-700 to-pink-100 font-roboto relative overflow-auto">
  @include('layouts.header')

  <!-- Main Content -->
  <main class="container mx-auto mt-10 px-6">
    <!-- Title Section -->
    <div class="text-center mb-10">
      <h1 class="text-4xl font-bold text-pink-700">My Weekly Journals</h1>
      <p class="text-lg text-gray-700 mt-2">"Explore my journey as I take my on-the-job training at Learn at Fligno."</p>
    </div>

   <!-- Journals Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"style="margin-bottom: 20px;">
   <!-- Journal Card 1 -->
   <div class="bg-gradient-to-br from-pink-200 via-pink-400 to-pink-500 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <!-- Week Tag -->
    <div class="absolute top-4 right-4 bg-gradient-to-r from-teal-600 to-green-600 text-white text-xs px-3 py-1 rounded-full shadow-sm">
      Week 1
    </div>
    <!-- Icon -->
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-lg mx-auto">
      <i class="fas fa-pencil-alt text-gradient-to-br from-pink-600 to-pink-700 text-4xl"></i>
    </div>
    <!-- Title -->
    <h2 class="text-xl font-bold text-pink-900 mt-6 text-center">
      My First Week
    </h2>
    <!-- Content -->
    <p class="text-gray-100 mt-4 text-sm line-clamp-3">
      "This week was filled with new experiences and learning opportunities..."
    </p>
    <!-- Button -->
    <button
      onclick="journalModal(
        'Week 1',
        'This week was filled with new experiences and learning opportunities at Erudithe&#44; where LearnAtFligno is based&#46; ' +
        'We started with an orientation where we were introduced to the company&#44; its goals&#44; and the people who would guide us&#46; ' +
        'We also had an online meeting with a representative from Fligno&#44; who explained their mission and gave us tips on proper online etiquette&#46; ' +
        'A fun tradition followed&#44; where we danced &quot;Pantropiko&quot; to welcome us as new trainees&#46; ' +
        'Throughout the week&#44; we worked on various tasks&#46; I learned how to handle Excel sheets and convert them into database tables&#44; ' +
        'although a mix-up taught me the importance of clarifying instructions&#46; We also explored regex patterns and created Google Forms&#44; ' +
        'earning praise for quickly picking up the skill&#46; Another task was to create a LinkedIn profile&#44; which I found helpful for my career goals&#46; ' +
        'Amidst the work&#44; we also had fun moments&#46; We danced to &quot;Sana All&quot; with the team and participated in a pajama-themed watch party&#46; ' +
        'The employees were very supportive&#44; and we enjoyed delicious snacks while watching the movie Mallari&#46; ' +
        'This week was both productive and enjoyable&#44; blending professional growth with memorable team bonding activities&#46;'
      )"
      class="mt-6 bg-gradient-to-r from-teal-600 to-green-600 hover:from-green-600 hover:to-yellow-500 text-white px-5 py-2 rounded-full shadow-lg transition-transform transform hover:scale-110 focus:outline-none"
      style="text-align: justify; white-space: normal; display: block; text-align-last: justify;"
    >
      Read More
    </button>
  </div>



    <!-- Journal Card 2 -->
<div class="bg-gradient-to-br from-sky-400 via-blue-400 to-indigo-500 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">Week 2</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
      <i class="fas fa-paint-brush text-pink-600 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-blue-700 mt-6 text-center">Balancing Creativity and Learning</h2>
    <p class="text-gray-100 mt-4 text-sm line-clamp-3">
      "This week was full of growth and learning at Erudithe, where I worked on a variety of tasks..."
    </p>
    <button
      onclick="journalModal(
        'Week 2',
        'This week was full of growth and learning at Erudithe, where I worked on a variety of tasks that helped me develop my skills. ' +
        'I focused on creating documents detailing updates for Laravel 11 and JavaScript, diving into their features and updates, which expanded my knowledge and understanding of both. ' +
        'I also learned how to use Excel for tracking attendance, a practical task that emphasized the importance of routine. ' +
        'Midweek, I explored Zustand during an online meeting with Sir Aries and even learned how to create an HTML email signature. ' +
        'By Thursday, I was tasked with designing a newsletter for LSI\'s upcoming training program. Presenting my work to our program head was a great opportunity to receive constructive feedback, especially on graphic design elements like color choices, fonts, and layout. ' +
        'The week ended on a relaxed note, allowing us to take a step back and focus on personal study and reflection. ' +
        'Overall, this week was a rewarding mix of technical learning and creative exploration, leaving me inspired to improve and grow further.'
      )"
      class="mt-6 bg-pink-500 hover:bg-pink-600 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
      style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
      Read More
    </button>
  </div>


   <!-- Journal Card 3 -->
<div class="bg-gradient-to-br from-emerald-300 via-emerald-400 to-teal-500 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-orange-500 text-white text-xs px-2 py-1 rounded-full">Week 3</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
      <i class="fas fa-cogs text-orange-500 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-yellow-300 mt-6 text-center">Blending Skills and Teamwork</h2>
    <p class="text-gray-100 mt-4 text-sm line-clamp-3">
      "This week was filled with a mix of creative and technical tasks, along with preparations for..."
    </p>
    <button
      onclick="journalModal(
        'Week 3',
        'This week was filled with a mix of creative and technical tasks, along with preparations for an important visit. On September 9, I practiced using Canva, familiarizing myself with the design tool for future tasks. ' +
        'On September 10, I accomplished the login page for the attendance system, making significant progress on the project. The next day, September 11, I submitted my GitHub account and uploaded the attendance system, learning the importance of version control and collaboration. ' +
        'On September 12, we practiced a dance in preparation for a performance for important clients who would be visiting. It was a fun and engaging way to bond with the team. Finally, on September 13, I created a banner for LSI’s upcoming ESL training, further expanding my design skills. ' +
        'This week blended hands-on technical work with creative tasks and team-building activities, making it both productive and enjoyable.'
      )"
      class="mt-6 bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
      style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
      Read More
    </button>
  </div>



     <!-- Journal Card 4 -->
<div class="bg-gradient-to-br from-pink-500 via-purple-400 to-blue-500 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <!-- Week Tag -->
    <div class="absolute top-4 right-4 bg-gradient-to-r from-teal-400 to-teal-600 text-white text-xs px-3 py-1 rounded-full shadow-sm">
      Week 4
    </div>
    <!-- Icon -->
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-lg mx-auto">
      <i class="fas fa-hourglass-half text-gradient-to-br from-teal-500 to-teal-700 text-4xl"></i>
    </div>
    <!-- Title -->
    <h2 class="text-xl font-bold text-indigo-100 mt-6 text-center">
      Building Patience and Progress
    </h2>
    <!-- Content -->
    <p class="text-gray-200 mt-4 text-sm line-clamp-3">
      "This week involved a combination of remote work&#44; hands-on tasks&#44; and experiences that helped me develop both technically and professionally&#46; On September 16&#44; I worked from home&#44; continuing my tasks remotely&#46; The following day&#44; September 17&#44; I focused on revising the old timesheet..."
    </p>
    <!-- Button -->
    <button
      onclick="journalModal(
        'Week 4',
        'This week involved a combination of remote work&#44; hands-on tasks&#44; and experiences that helped me develop both technically and professionally&#46; On September 16&#44; I worked from home&#44; continuing my tasks remotely&#46; The following day&#44; September 17&#44; I focused on revising the old timesheet format&#44; improving its structure for better use&#46; ' +
        'On September 18&#44; I attended Day 3 of the ESL training alongside the other employees&#46; It was an eye-opening experience&#44; as I got to witness firsthand the challenges of facilitating training&#44; especially dealing with trainees who had difficult attitudes&#46; It taught me the importance of patience and adaptability in real-world situations&#46; ' +
        'By September 19&#44; I had completed the new timesheet format and successfully transferred the old records to it&#44; ensuring everything was up-to-date&#46; On September 20&#44; I worked on a draft for suggestions on new features to incorporate into Fligno\'s current LMS&#44; enhancing my understanding of the system and how to improve it&#46; ' +
        'This week was a balance of practical tasks&#44; learning experiences&#44; and contributing ideas for the company\'s growth&#44; making it a valuable and productive week&#46;'
      )"
      class="mt-6 bg-gradient-to-r from-pink-600 to-purple-700 hover:from-purple-700 hover:to-blue-600 text-white px-5 py-2 rounded-full shadow-lg transition-transform transform hover:scale-110 focus:outline-none"
      style="text-align: justify; white-space: normal; display: block; text-align-last: justify;"
    >
      Read More
    </button>
  </div>



<!-- Journal Card 5 -->
<div class="bg-gradient-to-br from-blue-300 via-pink-400 to-indigo-500 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">Week 5</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
      <i class="fas fa-seedling text-yellow-500 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-yellow-100 mt-6 text-center">Prototyping Growth</h2>
    <p class="text-gray-100 mt-4 text-sm line-clamp-3">
      "This week was filled with meaningful tasks and personal growth. Sir Aries was away, but we still had our weekly huddle through Google Meet, where he announced that we would need to create a journal website as a requirement to receive our certificates..."
    </p>
    <button
      onclick="journalModal(
        'Week 5',
        'This week was filled with meaningful tasks and personal growth. Sir Aries was away, but we still had our weekly huddle through Google Meet, where he announced that we would need to create a journal website as a requirement to receive our certificates at the end of our OJT. I continued working on my task, which involved suggesting new features for the current LMS of Fligno. I designed a prototype in Canva, helping me become more familiar with web applications. ' +
        'On September 24, I double-checked the attendance for the payout, and Sir Aries made the final adjustments. Sir Van then gave us valuable advice on enhancing our soft skills, particularly the importance of understanding our bosses and learning from mistakes. He also tasked us with presenting ideas for the company\'s newsletter, which we did in the afternoon. After receiving feedback from Sir Van, we began working on the newsletter. Later that day, we practiced dance steps for the upcoming Erudithe anniversary celebration, making the day both fun and productive. ' +
        'I continued working on the newsletter and developed our journal website on September 25, making steady progress. By the next day, I was still focused on both tasks, refining my designs and systems. ' +
        'On September 27, I had the opportunity to attend the Digital Career Expo at the Calapan City Convention Center, where I assisted with Fligno\'s booth. Although I felt nervous and stumbled a bit when talking to people, I managed to promote Learn at Fligno. This experience encouraged me to work on my communication and socialization skills, which I recognize as key to success. ' +
        'This week was a balance of creative work, learning opportunities, and personal development, leaving me motivated to keep improving.'
      )"
      class="mt-6 bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
      style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
      Read More
    </button>
  </div>





         <!-- Journal Card 6 -->
<div class="bg-gradient-to-br from-indigo-300 via-blue-400 to-blue-700 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-orange-500 text-white text-xs px-2 py-1 rounded-full">Week 6</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
      <i class="fas fa-link text-orange-500 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-indigo-100 mt-6 text-center">Research, Resilience, and Connections</h2>
    <p class="text-gray-100 mt-4 text-sm line-clamp-3">
      "This week was a mix of focused tasks and personal growth. I continued working on the newsletter..."
    </p>
    <button
      onclick="journalModal(
        'Week 6',
        'This week was a mix of focused tasks and personal growth. I continued working on the newsletter design, making steady progress. Sir Aries assigned me a task to research the profile of Doc Ligot and the company he established. This assignment helped me improve my researching skills, teaching me the value of careful study and thorough investigation. ' +
        'On October 1, I focused on the Attendance System while Sir Aries introduced us to the Timesheet application. He asked for my insights on how a partnership between Learn at Fligno and Doc Ligot\'s company, Cirrolytix, could benefit us. This task enhanced my critical thinking, and I realized the importance of truly understanding the topics I\'m researching. ' +
        'On October 2, I continued working on the Attendance System and had a bonding experience with the interns while enjoying a treat at Greenwich, courtesy of Sir Van. It was nice to connect with my colleagues, and they are all very kind. ' +
        'The next day, I helped fix the Timesheet for the upcoming payout, though I faced a personal issue at home. Despite that, the work continued smoothly. ' +
        'On October 4, the office had a brownout due to a broken breaker, but that didn\'t stop us from having fun. We had a mini activity where we gave candy to the person we wanted to thank the most, and we wrapped up early, heading home with the interns and DWCC OJTs. ' +
        'This week was a mix of productive tasks and personal connections, leaving me with new skills and positive memories.'
      )"
      class="mt-6 bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
      style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
      Read More
    </button>
  </div>


     <!-- Journal Card 7 -->
<div class="bg-gradient-to-br from-indigo-300 via-indigo-400 to-blue-500 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-yellow-500 text-white text-xs px-2 py-1 rounded-full">Week 7</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-briefcase text-yellow-500 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-indigo-700 mt-6 text-center">Balancing Work, Growth, and Joy</h2>
    <p class="text-gray-800 mt-4 text-sm line-clamp-3">
        "This week brought a mix of tasks and a bit of personal joy. On October 7, we worked from home due to..."
    </p>
    <button
        onclick="journalModal(
            'Week 7',
            'This week brought a mix of tasks and a bit of personal joy. On October 7, we worked from home due to the broken breaker in the office, making it a quieter day for me. ' +
            'On October 8, I began researching companies that are hiring Laravel developers and compiled my findings into a file. After that, Sir Aries allowed me to visit school for our intramurals, which was a great chance to reconnect with friends. I felt happy seeing them again and took a brief break from work to enjoy the day. ' +
            'October 9 was busy as Sir Van asked me to recreate a flyer for Learn at Fligno. It was an exciting task, and I started working on it right away. ' +
            'The next day, October 10, I continued working on the flyer and had it reviewed by Sir Spero. I received valuable feedback, which helped improve the design. ' +
            'Finally, on October 11, Sir Aries gave us a technical exam to challenge our coding skills. It was a bit intimidating, but I\'m excited to apply what I\'ve learned and see how I measure up. ' +
            'This week was a mix of productive work and personal moments that refreshed me. I\'m looking forward to the challenges and learning opportunities ahead.'
        )"
        class="mt-6 bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>



          <!-- Journal Card 8 -->
<div class="bg-gradient-to-br from-orange-200 via-yellow-300 to-peach-400 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-orange-600 text-white text-xs px-2 py-1 rounded-full">Week 8</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-tasks text-orange-600 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-orange-700 mt-6 text-center">A Week of Balance: Farewell, Tasks, and Growth</h2>
    <p class="text-gray-800 mt-4 text-sm line-clamp-3">
        "This week was filled with a mix of fun activities and focused work. On October 14, I experienced the last..."
    </p>
    <button
        onclick="journalModal(
            'Week 8',
            'This week was filled with a mix of fun activities and focused work. On October 14, I experienced the last day of the DWCC OJTs. We had a lively debate in the afternoon, followed by a closing ceremony. To cap off the day, we enjoyed a karaoke session before heading home, making it a memorable farewell. ' +
            'On October 15, I worked on a task assigned by Sir Aries, which involved creating a Google Form for our course certification survey. It was a simple yet important task that required attention to detail. ' +
            'The following days, October 16, 17, and 18, were a blend of practice and work. We spent time rehearsing for the upcoming performance while I focused on completing my Technical Exam, which involved creating an e-commerce website. Balancing the two tasks was challenging, but I managed to keep up with both, learning new skills along the way. ' +
            'This week, I learned how to juggle multiple tasks and responsibilities, all while enjoying the camaraderie of my fellow interns. It was a fulfilling week, full of both professional development and personal growth.'
        )"
        class="mt-6 bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>



         <!-- Journal Card 9 -->
<div class="bg-gradient-to-br from-blue-200 via-cyan-300 to-coral-400 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-blue-600 text-white text-xs px-2 py-1 rounded-full">Week 9</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-calendar-check text-blue-600 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-blue-700 mt-6 text-center">Productive Week</h2>
    <p class="text-gray-700 mt-4 text-sm line-clamp-3">
        "This week, I continued to work on the Technical Exam for Fligno, which kept me focused as I worked through the challenges of building an e-commerce website. On October 21, Sir Van called me in the morning to simplify a document, adding visual presentations to make the information..."
    </p>
    <button
        onclick="journalModal(
            'Week 9',
            'This week, I continued to work on the Technical Exam for Fligno, which kept me focused as I worked through the challenges of building an e-commerce website. On October 21, Sir Van called me in the morning to simplify a document, adding visual presentations to make the information clearer and more engaging. It was a task that required creativity and attention to detail, and I enjoyed applying my skills to improve the document. In the afternoon, we took a break from work to practice our dance routine and visited the performance venue. ' +
            'On October 22, I focused on completing the task Sir Van had assigned to me. After making the necessary revisions, I submitted the document in the afternoon, and Sir Van praised my work, which was encouraging. ' +
            'Overall, it was a productive week, balancing both work and preparation for the upcoming performance.'
        )"
        class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>




         <!-- Journal Card 10 -->
<div class="bg-gradient-to-br from-purple-200 via-violet-300 to-yellow-200 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-purple-600 text-white text-xs px-2 py-1 rounded-full">Week 10</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-trophy text-purple-600 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-purple-700 mt-6 text-center">Celebrations & Progress</h2>
    <p class="text-gray-700 mt-4 text-sm line-clamp-3">
        "This week was a mix of celebrations and continued development work. On October 28, I participated in..."
    </p>
    <button
        onclick="journalModal(
            'Week 10',
            'This week was a mix of celebrations and continued development work. On October 28, I participated in the company’s anniversary preparations in the afternoon, which provided me with an opportunity to socialize and improve my interpersonal skills. It was a fun experience that allowed me to connect with the team in a more casual setting. ' +
            'From October 29 to 31, I focused on my technical exam, specifically working on an e-commerce website. I made steady progress in developing the website, refining the features and functionality. This task helped me further enhance my coding and web development skills, allowing me to apply what I’ve learned so far in a practical way. The week was productive, balancing socialization with technical work.'
        )"
        class="mt-6 bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>



          <!-- Journal Card 11 -->
<div class="bg-gradient-to-br from-orange-200 via-yellow-300 to-green-200 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-orange-600 text-white text-xs px-2 py-1 rounded-full">Week 11</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-exclamation-circle text-orange-600 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-orange-700 mt-6 text-center">Growth & Challenges</h2>
    <p class="text-gray-700 mt-4 text-sm line-clamp-3">
        "This week was full of learning experiences as I continued to work on various tasks. On November 4, I submitted my ..."
    </p>
    <button
        onclick="journalModal(
            'Week 11',
            'This week was full of learning experiences as I continued to work on various tasks. On November 4, I submitted my system to Sir Aries, who praised my work and encouraged me to finish the project so I could add it to my portfolio. This feedback motivated me to keep coding and pushing forward. I also worked on the Timesheet in the afternoon. ' +
            'On November 5, I spent the morning working on the Attendance System, where I learned how page refreshes reset the state and how to use states based on database conditions. In the afternoon, Ms. Honey gave us a task to edit social media designs for the company, which was a fun and creative challenge. ' +
            'On November 6, I continued with the social media designs and had the opportunity to join a meeting with Sir Aries and Sir Van. They assigned me the task of creating a summary and visual presentation of the Career Path Survey database, which enhanced my skills in organizing data. ' +
            'On November 7, I continued working on the visual presentation. Although I struggled a bit with Excel due to my limited experience, I learned a lot about sorting and managing data. ' +
            'By the end of the week, I had gained more confidence in both my technical and design skills, and I’m looking forward to applying what I’ve learned in future tasks.'
        )"
        class="mt-6 bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>




         <!-- Journal Card 12 -->
<div class="bg-gradient-to-br from-yellow-200 via-purple-300 to-indigo-200 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-yellow-600 text-white text-xs px-2 py-1 rounded-full">Week 12</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-laptop text-yellow-600 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-yellow-700 mt-6 text-center">Tech & Creativity</h2>
    <p class="text-gray-700 mt-4 text-sm line-clamp-3">
        "This week was filled with a mix of technical tasks and creative assignments. On November 9, I finished the task in the morning, then in the afternoon, Sir Aries introduced..."
    </p>
    <button
        onclick="journalModal(
            'Week 12',
            'This week was filled with a mix of technical tasks and creative assignments. On November 9, I finished the task in the morning, then in the afternoon, Sir Aries introduced us to KNIME, which was a new tool for me. I also continued working on the Attendance System. ' +
            'On November 11, I focused on further developing the Attendance System. There were revisions to the admin dashboard, and I added the UI for new features. ' +
            'November 12 was a creative day, as Ms. Honey assigned us to design a Facebook post for Oriental Mindoro Day, which gave me a chance to enhance my design skills. ' +
            'The next day, Sir Aries assigned us to create Visual Ads for our newly created Facebook group. I was tasked with creating ads for Laravel, which was an exciting project to work on. ' +
            'On November 14, I worked on creating a script for our one-minute video and wrote a caption/article for the Pre-Capability Course Outline to be posted on our social media pages. ' +
            'Finally, on November 15, I spent time revising and improving the caption, ensuring that it was clear and engaging for our audience. Overall, this week allowed me to develop both my technical and creative skills, and I feel more confident in handling various tasks.'
        )"
        class="mt-6 bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>



         <!-- Journal Card 13 -->
<div class="bg-gradient-to-br from-green-200 via-blue-300 to-teal-200 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-green-600 text-white text-xs px-2 py-1 rounded-full">Week 13</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-chart-line text-green-600 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-green-700 mt-6 text-center">Skill Enhancement</h2>
    <p class="text-gray-700 mt-4 text-sm line-clamp-3">
        "This week was focused on improving my technical skills and working on creative social..."
    </p>
    <button
        onclick="journalModal(
            'Week 13',
            'This week was focused on improving my technical skills and working on creative social media tasks. On November 18, I spent the day practicing the dance for the upcoming Christmas party, which was a fun break from the usual tasks. ' +
            'On November 19, Ms. Honey asked me to revise the creative social media post for Bonifacio Day. I continued refining it on November 20, working on the design and content to make it more engaging. ' +
            'On November 21, Sir Aries assigned me a task to practice using KNIME, a tool for creating graphs. I worked on creating pie charts to identify the courses of the respondents, which helped me gain hands-on experience with data visualization. ' +
            'Finally, on November 22, Sir Aries tasked me with creating a report using an Excel sheet to summarize the data for all the trainings conducted in 2023. I created a summary of the total number of participants in each of the 25 courses and their respective details. This task significantly enhanced my skills in report generation and data accuracy, allowing me to confidently handle similar tasks in the future. Overall, it was a productive week, combining both creative and technical assignments.'
        )"
        class="mt-6 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>


           <!-- Journal Card 14 -->
        <div class="bg-gradient-to-br from-pink-200 via--300 to-blue-200 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
            <div class="absolute top-4 right-4 bg-teal-500 text-white text-xs px-2 py-1 rounded-full">Week 14</div>
            <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
              <i class="fas fa-palette text-teal-500 text-3xl"></i>
            </div>
            <h2 class="text-xl font-bold text-teal-700 mt-6 text-center">Learning & Design</h2>
            <p class="text-gray-700 mt-4 text-sm line-clamp-3">
              "This week was a balance of learning new tools&#44; improving design skills..."
            </p>
            <button
            onclick="journalModal(
              'Week 14',
              'This week was a balance of learning new tools&#44; improving design skills&#44; and participating in team activities&#46; On November 25&#44; I focused on studying KNIME for data analysis&#44; enhancing my understanding of how to work with data more efficiently&#46; ' +
              'On November 26&#44; I designed a creative social media post for the group about JavaScript&#46; Although I faced challenges with the design and maintaining consistency&#44; I learned valuable lessons on proper design techniques&#46; ' +
              'I continued working on the social media post on November 27&#44; refining the design to make it more cohesive and visually appealing&#46; ' +
              'On November 28&#44; I participated in a program for the DWCC Second Batch OJTs&#44; which was a goodbye activity&#46; This experience taught me to be more competitive and driven&#44; as I watched others present their work&#46; ' +
              'Finally&#44; on November 29&#44; I continued improving the design for the creative social media post&#44; focusing on fine-tuning the elements I had worked on earlier in the week&#46; It was a week of steady growth&#44; both creatively and professionally&#46;'
            )"
            class="mt-6 bg-pink-600 hover:bg-purple-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
            style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
            Read More
          </button>


          </div>



            <!-- Journal Card 15 -->
<div class="bg-gradient-to-br from-yellow-200 via-orange-300 to-red-200 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-orange-500 text-white text-xs px-2 py-1 rounded-full">Week 15</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-users text-orange-500 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-orange-700 mt-6 text-center">Teamwork and Organization</h2>
    <p class="text-gray-700 mt-4 text-sm line-clamp-3">
        "This week was dedicated to collaboration and planning, focusing on tasks such as timesheet updates and project organization."
    </p>
    <button
        onclick="journalModal(
            'Week 15',
            'This week was a productive period during my OJT at Learn at Fligno. ' +
            'I accomplished the DWCC OJTs timesheet report and updated the timesheet with new entries. ' +
            'Additionally, I had a meeting with Sir Van regarding a group project to create course backgrounds for Learn at Fligno’s offered courses. ' +
            'During the meeting, I contributed to the planning and organization of tasks, creating a project timeline to guide our progress. ' +
            'The week offered valuable experience in project collaboration and improving my teamwork skills. ' +
            'There were no specific challenges encountered, allowing me to focus on completing my tasks effectively. ' +
            'Goals for next week include enhancing collaboration skills by being more involved in team discussions and activities, completing the course background creation, and continuing to improve time management to stay organized while juggling multiple tasks.'
        )"
        class="mt-6 bg-yellow-600 hover:bg-red-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>

<!-- Journal Card 16 -->
<div class="bg-gradient-to-br from-blue-200 via-indigo-300 to-purple-200 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-orange-500 text-white text-xs px-2 py-1 rounded-full">Week 16</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-book-open text-purple-500 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-orange-700 mt-6 text-center">Detail-Oriented Documentation</h2>
    <p class="text-gray-700 mt-4 text-sm line-clamp-3">
        "This week focused on creating detailed documents for Learn at Fligno’s course backgrounds, honing my organizational and documentation skills."
    </p>
    <button
        onclick="journalModal(
            'Week 16',
            'This week focused on creating detailed documents for Learn at Fligno’s course backgrounds, providing comprehensive information and context for each course offered. ' +
            'This task provided a valuable opportunity to improve my documentation and organizational skills. ' +
            'Fortunately, there were no specific challenges or problems encountered this week, allowing me to concentrate fully on completing the task accurately and efficiently. ' +
            'I ensured that all necessary details for each course were included and organized effectively. ' +
            'Goals for next week include continuing to refine my documentation skills by prioritizing clarity and conciseness in course materials. ' +
            'I also aim to start planning for upcoming tasks or projects to ensure proactive preparation, while enhancing attention to detail and organization in all future tasks.'
        )"
        class="mt-6 bg-blue-600 hover:bg-purple-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>


          <!-- Journal Card 17 -->
<div class="bg-gradient-to-br from-green-200 via-yellow-300 to-red-200 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-orange-500 text-white text-xs px-2 py-1 rounded-full">Week 17</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-calendar-alt text-red-500 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-orange-700 mt-6 text-center">Creative Growth in Progress</h2>
    <p class="text-gray-700 mt-4 text-sm line-clamp-3">
        "This week at Learn at Fligno/Erudithe was a blend of creativity and reflection as I worked on designs for upcoming events and pushed forward on the website project."
    </p>
    <button
        onclick="journalModal(
            'Week 17',
            'This week at Learn at Fligno/Erudithe was a blend of creativity and reflection. ' +
            'I attended the Christmas party with the Learn at Fligno/Erudithe family, celebrating the season with camaraderie and joy. ' +
            'One of the significant tasks was progressing on the website project, a key requirement that serves as a reflection of my work and a journal of my OJT experience. ' +
            'Additionally, I created social media posts for upcoming monthly events such as Christmas Day, Rizal Day, and New Year. This task honed my design and creativity skills. ' +
            'A challenge I encountered was finding fresh and unique ideas for social media post designs. Initially, it was tough to create something that felt original and engaging. ' +
            'To overcome this, I researched design inspirations and brainstormed new concepts. Experimenting with different layouts and styles led to designs that received positive feedback from Ms. Honey, boosting my confidence. ' +
            'Goals for next week include continuing to improve my creative skills, aiming for more innovative and engaging designs, and refining the website project to align with all expectations.'
        )"
        class="mt-6 bg-green-600 hover:bg-red-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>



<!-- Journal Card 18 -->
<div class="bg-gradient-to-br from-pink-200 via-red-300 to-blue-200 rounded-xl shadow-lg p-6 relative hover:scale-105 transition-transform">
    <div class="absolute top-4 right-4 bg-orange-500 text-white text-xs px-2 py-1 rounded-full">Week 18</div>
    <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-md mx-auto">
        <i class="fas fa-video text-blue-500 text-3xl"></i>
    </div>
    <h2 class="text-xl font-bold text-orange-700 mt-6 text-center">Balancing Creativity and Learning</h2>
    <p class="text-gray-700 mt-4 text-sm line-clamp-3">
        "This week, I explored my creativity by crafting a video recap of the events and training sessions at Learn at Fligno for 2024, summarizing key moments and achievements."
    </p>
    <button
        onclick="journalModal(
            'Week 18',
            'This week, I explored my creativity by crafting a video recap of the events and training sessions at Learn at Fligno for 2024, summarizing key moments and achievements. ' +
            'The task allowed me to enhance my creativity and improve my video editing skills. I gained hands-on experience in effectively using video editing software. ' +
            'One challenge I faced was learning how to efficiently use the video editing software, particularly achieving smooth transitions and fitting all the content within the video. ' +
            'To overcome this, I dedicated more time to exploring the software features. I watched tutorials and experimented with different tools until I was able to create a polished final product. ' +
            'Though I have no specific goals for next week, I aim to continuously improve myself in various aspects.'
        )"
        class="mt-6 bg-pink-600 hover:bg-purple-700 text-white px-4 py-2 rounded-full shadow-md transition-transform transform hover:scale-110"
        style="text-align: justify; white-space: normal; display: block; text-align-last: justify;">
        Read More
    </button>
</div>

  </div>

  </main>

  <!-- Floating Journal Modal -->
  <div id="journalModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white rounded-xl shadow-2xl w-2/3 p-8 relative max-h-[80%] overflow-y-auto">
      <!-- Close Button -->
      <button onclick="closeJournal()"
        class="absolute top-3 right-3 bg-pink-500 hover:bg-pink-600 text-white p-2 rounded-full shadow-md">
        <i class="fas fa-times"></i>
      </button>

      <!-- Icon -->
      <div class="bg-gradient-to-r from-pink-200 to-purple-200 p-5 rounded-full mx-auto w-24 h-24 flex items-center justify-center mb-6 shadow-lg">
        <i class="fas fa-feather-alt text-pink-600 text-4xl"></i>
      </div>

      <!-- Title -->
      <h2 id="journalTitle" class="text-3xl font-bold text-center text-purple-700">Journal</h2>

      <!-- Content -->
      <p id="journalContent" class="text-gray-600 mt-4 leading-relaxed">
        Content will be loaded here dynamically based on the clicked journal.
      </p>
    </div>
  </div>

  <!-- Floating Decorations -->
  <div class="absolute top-8 left-6 animate-pulse">
    <i class="fas fa-cloud text-blue-300 text-6xl"></i>
  </div>
  <div class="absolute bottom-20 right-8 animate-bounce">
    <i class="fas fa-heart text-pink-400 text-4xl"></i>
  </div>
  <div class="absolute top-32 right-10 animate-spin-slow">
    <i class="fas fa-star text-yellow-400 text-5xl"></i>
  </div>

  <!-- Tailwind CSS Animation -->
  <style>
    @keyframes spin-slow {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .animate-spin-slow {
      animation: spin-slow 10s linear infinite;
    }
  </style>

  <!-- JavaScript Functions -->
  <script>
    function journalModal(title, content) {
      document.getElementById('journalTitle').innerText = title;
      document.getElementById('journalContent').innerText = content;
      document.getElementById('journalModal').classList.remove('hidden');
    }

    function closeJournal() {
      document.getElementById('journalModal').classList.add('hidden');
    }
  </script>
</body>
</html>
