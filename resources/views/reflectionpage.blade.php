<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Reflections</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
</head>
<body class="bg-gradient-to-b from-white-100 via-pink-200 to-pink-100 font-roboto relative overflow-auto">
    @include('layouts.header')

    <!-- Main Content -->
    <main class="container mx-auto mt-10 px-6">
        <!-- Title Section -->
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-pink-700">My Reflection</h1>
            <p class="text-lg text-gray-700 mt-2">"Take a moment to reflect on the journey."</p>
        </div>

        <!-- Reflection Box (Centered and Wide) -->
        <div class="bg-pink-50 rounded-xl shadow-xl p-8 max-w-3xl mx-auto relative hover:scale-105 transition-transform" style="margin-bottom: 20px;">

            <div class="absolute top-[-20px] left-[50%] transform -translate-x-1/2 bg-gradient-to-r from-pink-300 to-purple-300 w-16 h-16 rounded-full flex items-center justify-center">
                <i class="fas fa-heart text-white text-2xl"></i>
            </div>
            {{-- <h2 class="text-2xl font-bold text-gray-800 mt-16">Reflection Page</h2> --}}
            <p class="text-gray-600 mt-4"><strong>● Describe the department or functional area and its methods of operation.</strong></p>
            <p class="text-gray-600 mt-4">
                If I were to describe the department in general, in terms of its physical aspects, it was clean, well-maintained, and the facilities were all functioning well—such as the air conditioning, Wi-Fi, and the faucets in the kitchen and toilet. Regarding its methods of operation, everything was well-organized. I noticed that the employees were not working under pressure, and I could see that they were happy, especially during events. I can say that the department is also concerned about its employees' happiness and well-being. The department felt like home; everyone was nice, welcoming, and kind.
            </p>
            <p class="text-gray-600 mt-4"><strong>● As an Intern, how did the department benefit from you?</strong></p>
            <p class="text-gray-600 mt-4">
                The department benefited from me by having someone complete the tasks assigned by our supervisor and his colleagues. Some tasks I accomplished include:
                <ul class="list-disc pl-8 mt-2">
                    <li>Completing the Fligno Technical Exam to test if the exam could realistically be finished within a week, which gave them insight into its attainability for applicants.</li>
                    <li>Revising reports and adding visual representations to make them less wordy.</li>
                    <li>Creating creative social media posts for the Erudithe and Learn at Fligno Facebook pages.</li>
                    <li>Producing a year-end recap video of Learn at Fligno's events and activities in 2024.</li>
                    <li>Developing an attendance system for the interns and OJTs of Erudithe and Learn at Fligno, though I only managed to complete 50% of it.</li>
                    <li>Participating in departmental activities, including dance performances during events.</li>
                </ul>
            </p>
            <p class="text-gray-600 mt-4"><strong>● Summarize how you spent the hours during your practicum, including specific accomplishments.</strong></p>
            <p class="text-gray-600 mt-4">
                I spent my practicum hours building both my technical and soft skills. I used this time to develop my programming, designing, and interpersonal skills. I grew personally and professionally during this journey. Some of my accomplishments include performing in front of a large audience, which I had never done before due to my shyness, and gaining more confidence in communicating effectively without stuttering.
            </p>
            <p class="text-gray-600 mt-4"><strong>● What have you learned from the experience in the company?</strong></p>
            <p class="text-gray-600 mt-4">
                From my experience in the company, I learned:
                <ul class="list-disc pl-8 mt-2">
                    <li>The importance of valuing other people's time and being punctual.</li>
                    <li>How to socialize and communicate effectively with others.</li>
                    <li>To embrace changes and adapt to new environments.</li>
                    <li>Emotional resilience, as I learned not to be easily affected by minor setbacks.</li>
                    <li>The importance of mingling and building good relationships with others.</li>
                </ul>
            </p>
            <p class="text-gray-600 mt-4"><strong>● How was your experience with the people in the company?</strong></p>
            <p class="text-gray-600 mt-4">
                Everyone in the company was nice, welcoming, kind, and friendly. I truly felt their warmth toward us, the OJTs. Even the bosses were approachable and often joked around with everyone in the office. Observing them, I felt a sense of happiness and family within the company. I loved how they greeted each other with "Good morning" upon entering the office and said "Goodbye" and "Take care" when leaving. I am incredibly grateful to have been with such amazing people during my OJT journey.
            </p>
            <p class="text-gray-600 mt-4"><strong>● The most memorable event during your practicum?</strong></p>
            <p class="text-gray-600 mt-4">
                The most memorable event during my practicum was the second day of my training. We had a watch party where we watched the movie <i>Mallari</i> together, with everyone wearing their pajamas. That was the moment I got to bond with everyone and meet the people in the office, who later became an important part of my memories. I will never forget the kindness they showed to me and my fellow trainees throughout our entire OJT journey.
            </p>
            <p class="text-gray-600 mt-4"><strong>● Recommendations for the company to facilitate future practicum experiences.</strong></p>
            <p class="text-gray-600 mt-4">
                My recommendation is to assign more tasks to future trainees. Our supervisor was always concerned about overwhelming us with too many tasks. While I appreciated their consideration, I would have preferred a heavier workload to gain more experience and learnings that I could add to the experiences section of my resume.
            </p>
            <p class="text-gray-600 mt-4"><strong>● Your advice to those who will take their practicum in the near future.</strong></p>
            <p class="text-gray-600 mt-4">
                Be kind and respectful to everyone. Avoid being late. And most importantly, enjoy the journey!
            </p>
        </div>

    </main>

    <!-- Floating Info Button -->
    <footer class="fixed bottom-4 right-4">
        <button class="bg-gradient-to-r from-pink-400 to-purple-400 text-white p-4 rounded-full shadow-lg hover:scale-110 transition-transform">
            <i class="fas fa-info text-xl"></i>
        </button>
    </footer>

    <!-- Cute Floating Decorations -->
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
</body>
</html>
