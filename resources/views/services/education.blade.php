@extends('layouts.app')

@section('title', 'Education Services | Learn, Upskill & Get Certified')
@section('description', 'Explore our education programs, online and offline courses, and certifications. Learn from expert instructors and gain practical skills for career growth.')

@section('content')

<!-- HERO SECTION -->
<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-brand-gray">Empowering You Through Knowledge & Skills</h1>
        <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">Learn from expert instructors, gain practical skills, and get certified to advance your career.</p>
        <a href="#courses" class="mt-8 inline-block bg-brand-red text-white px-8 py-3 rounded-md font-medium hover:bg-brand-dark transition">
            Enroll Now
        </a>
    </div>
</section>

<!-- FEATURED COURSES -->
<section id="courses" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Featured Courses</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Our most popular programs designed for your career growth.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Course Card -->
            <div class="bg-gray-50 rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/courses/course1.jpg') }}" class="w-full h-64 object-cover" alt="Course 1">
                <div class="p-6 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray">Web Development Bootcamp</h3>
                    <p class="text-gray-600 text-sm mt-2">Learn full-stack web development with hands-on projects.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-gray-600 text-sm">Duration: 12 Weeks</span>
                        <a href="{{ route('contact') }}" class="bg-brand-red text-white px-4 py-2 rounded-md text-sm hover:bg-brand-dark transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/courses/course2.jpg') }}" class="w-full h-64 object-cover" alt="Course 2">
                <div class="p-6 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray">Graphic Design Masterclass</h3>
                    <p class="text-gray-600 text-sm mt-2">Master Adobe Suite and modern design techniques.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-gray-600 text-sm">Duration: 8 Weeks</span>
                        <a href="{{ route('contact') }}" class="bg-brand-red text-white px-4 py-2 rounded-md text-sm hover:bg-brand-dark transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl shadow hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/courses/course3.jpg') }}" class="w-full h-64 object-cover" alt="Course 3">
                <div class="p-6 text-left">
                    <h3 class="font-semibold text-lg text-brand-gray">IT Consultation & Strategy</h3>
                    <p class="text-gray-600 text-sm mt-2">Develop practical IT solutions and strategy skills for business.</p>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="text-gray-600 text-sm">Duration: 6 Weeks</span>
                        <a href="{{ route('contact') }}" class="bg-brand-red text-white px-4 py-2 rounded-md text-sm hover:bg-brand-dark transition">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US / USPs -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Why Learn With Us</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Gain practical skills, expert guidance, and recognized certification to boost your career.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/expert.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Expert Instructors">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Expert Instructors</h3>
                <p class="text-gray-600 text-sm">Learn from professionals with real-world experience.</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/practical.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Hands-on Training">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Practical Training</h3>
                <p class="text-gray-600 text-sm">Hands-on projects to apply what you learn immediately.</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/certificate.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Certification">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Certification</h3>
                <p class="text-gray-600 text-sm">Get recognized certificates to boost your career opportunities.</p>
            </div>
            <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/flexible.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Flexible Learning">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Flexible Learning</h3>
                <p class="text-gray-600 text-sm">Learn at your own pace with online and offline options.</p>
            </div>
        </div>
    </div>
</section>

<!-- LEARNING PROCESS -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">How Learning Works</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Step-by-step approach to ensure you gain skills effectively.</p>

        <div class="mt-12 flex flex-col lg:flex-row items-center justify-between relative">
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gray-300 z-0"></div>

            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">1</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Choose Course</h3>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">2</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Enroll & Start Learning</h3>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10 mb-12 lg:mb-0">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">3</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Complete Assignments & Projects</h3>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/5 z-10">
                <div class="bg-red-500 text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">4</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Get Certified & Apply Skills</h3>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Student Success Stories</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Hear from learners who advanced their careers with us.</p>

        <div class="mt-12 flex gap-6 overflow-x-auto snap-x snap-mandatory px-4 py-4">
            <div class="flex-none w-80 bg-white p-6 rounded-xl shadow hover:shadow-lg transition snap-center">
                <p class="text-gray-600 mb-4">"The web development bootcamp was transformative! I landed a new job in just two months."</p>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('assets/images/testimonials/student1.jpg') }}" class="w-12 h-12 rounded-full" alt="Student">
                    <div>
                        <h4 class="font-semibold text-brand-gray">Chinedu Okeke</h4>
                        <div class="flex text-yellow-400">
                            @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-24 bg-red-500 text-white text-center">
    <h2 class="text-3xl md:text-4xl font-bold">Start Learning Today</h2>
    <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">Enroll in our programs and take the first step toward career growth.</p>
    <a href="{{ route('contact') }}" class="mt-8 inline-block bg-white text-red-600 px-8 py-3 rounded-md font-medium hover:bg-gray-100 transition">
        Enroll Now
    </a>
</section>

@endsection
