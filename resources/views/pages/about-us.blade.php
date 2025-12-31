@extends('layouts.app')

@section('title', 'About Us | Your Company Name — IT, Web & Software Development, Design & More')
@section('description', 'Learn about Your Company Name, providing IT consultation, web & software development, graphics design, electronics, logistics, and education services. Discover our mission, team, and expertise.')

@section('content')
<!-- ABOUT PAGE HERO SECTION -->
<section class="bg-gray-50 relative">
    <div class="max-w-7xl mx-auto px-6 py-24 lg:py-32 text-center lg:text-left">

        <div class="lg:flex lg:items-center lg:justify-between">
            <!-- Text Content -->
            <div class="lg:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold text-brand-gray leading-tight">
                    About <span class="text-brand-red">Your Company Name</span>
                </h1>
                <p class="mt-6 text-gray-600 text-lg md:text-xl max-w-xl">
                    We provide expert IT consultation, web & software development, graphics design,
                    electronics sales, logistics solutions, and education services to help your business thrive.
                </p>

                <!-- CTA Buttons -->
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="/contact" 
                       class="bg-brand-red text-white px-8 py-3 rounded-md font-medium shadow-md hover:shadow-lg transition">
                        Contact Us
                    </a>
                    <a href="/services" 
                       class="border-2 border-brand-red text-brand-red px-8 py-3 rounded-md font-medium hover:bg-brand-red hover:text-white transition">
                        View Services
                    </a>
                </div>
            </div>

            <!-- Hero Image / Illustration -->
            <div class="mt-12 lg:mt-0 lg:w-1/2 flex justify-center lg:justify-end">
                <img src="{{ asset('assets/images/about-hero.jpg') }}" 
                     alt="About Your Company Name" 
                     class="w-full max-w-lg rounded-xl shadow-lg object-cover">
            </div>
        </div>

    </div>
</section>
<!-- COMPANY OVERVIEW / MISSION & VISION -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Who We Are
            </h2>
            <p class="mt-4 text-gray-600">
                At <span class="font-semibold text-brand-red">Your Company Name</span>, we combine innovation, expertise, and dedication to deliver top-notch IT and business solutions.
            </p>
        </div>

        <!-- Overview + Mission & Vision Cards -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Company Overview -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-brand-gray mb-4">Our Story</h3>
                <p class="text-gray-600 text-sm">
                    Founded in 2020, <span class="font-medium text-brand-red">Your Company Name</span> has been providing innovative IT consultation, web & software development, graphics design, electronics sales, logistics, and education services to clients worldwide. Our team is committed to excellence and delivering value in every project.
                </p>
            </div>

            <!-- Mission -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-brand-gray mb-4">Our Mission</h3>
                <p class="text-gray-600 text-sm">
                    To empower businesses and individuals with cutting-edge technology solutions, creative designs, and reliable services that drive growth and efficiency.
                </p>
            </div>

            <!-- Vision -->
            <div class="bg-gray-50 p-8 rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-brand-gray mb-4">Our Vision</h3>
                <p class="text-gray-600 text-sm">
                    To be the most trusted and innovative partner for IT, design, and business solutions, creating impactful experiences and lasting relationships with our clients.
                </p>
            </div>

        </div>

    </div>
</section>
<!-- OUR STORY / TIMELINE SECTION -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Our Journey
            </h2>
            <p class="mt-4 text-gray-600">
                From our founding to today, see how <span class="font-semibold text-brand-red">Your Company Name</span> has grown, innovated, and delivered exceptional services.
            </p>
        </div>

        <!-- Timeline -->
        <div class="mt-16 relative overflow-hidden">
            <div class="border-t-2 border-gray-300 absolute top-1/2 left-0 w-full transform -translate-y-1/2"></div>

            <div class="flex flex-col md:flex-row md:justify-between relative z-10 space-y-12 md:space-y-0 md:space-x-8">

                <!-- Milestone 1 -->
                <div class="flex flex-col items-center md:w-1/5">
                    <div class="bg-brand-red text-white w-12 h-12 rounded-full flex items-center justify-center font-bold">2020</div>
                    <p class="mt-4 text-center text-gray-600 text-sm">
                        Company Founded with a vision to provide innovative IT and business solutions.
                    </p>
                </div>

                <!-- Milestone 2 -->
                <div class="flex flex-col items-center md:w-1/5">
                    <div class="bg-brand-red text-white w-12 h-12 rounded-full flex items-center justify-center font-bold">2021</div>
                    <p class="mt-4 text-center text-gray-600 text-sm">
                        Launched our first software product and expanded into web development services.
                    </p>
                </div>

                <!-- Milestone 3 -->
                <div class="flex flex-col items-center md:w-1/5">
                    <div class="bg-brand-red text-white w-12 h-12 rounded-full flex items-center justify-center font-bold">2022</div>
                    <p class="mt-4 text-center text-gray-600 text-sm">
                        Added graphics design, electronics sales, and logistics solutions to our portfolio.
                    </p>
                </div>

                <!-- Milestone 4 -->
                <div class="flex flex-col items-center md:w-1/5">
                    <div class="bg-brand-red text-white w-12 h-12 rounded-full flex items-center justify-center font-bold">2023</div>
                    <p class="mt-4 text-center text-gray-600 text-sm">
                        Expanded our education services and served clients across multiple industries.
                    </p>
                </div>

                <!-- Milestone 5 -->
                <div class="flex flex-col items-center md:w-1/5">
                    <div class="bg-brand-red text-white w-12 h-12 rounded-full flex items-center justify-center font-bold">2025</div>
                    <p class="mt-4 text-center text-gray-600 text-sm">
                        Recognized as a leading IT and business solutions provider with a growing global presence.
                    </p>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- TEAM / LEADERSHIP SECTION -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Meet Our Team
            </h2>
            <p class="mt-4 text-gray-600">
                Our team of experts is dedicated to delivering innovative solutions across IT, design, logistics, and education services.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

            <!-- Team Member 1 -->
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/images/team/founder.jpg') }}" alt="Founder Name" class="w-32 h-32 mx-auto rounded-full object-cover">
                <h3 class="mt-4 text-xl font-semibold text-brand-gray">Founder & CEO</h3>
                <p class="mt-2 text-gray-600 text-sm">Jane Doe</p>
                <p class="mt-2 text-gray-500 text-xs">Passionate about innovation and delivering high-quality IT solutions to clients worldwide.</p>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/images/team/team2.jpg') }}" alt="CTO Name" class="w-32 h-32 mx-auto rounded-full object-cover">
                <h3 class="mt-4 text-xl font-semibold text-brand-gray">Chief Technology Officer</h3>
                <p class="mt-2 text-gray-600 text-sm">John Smith</p>
                <p class="mt-2 text-gray-500 text-xs">Expert in software development and IT architecture, leading our technology strategy.</p>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/images/team/team3.jpg') }}" alt="Design Lead Name" class="w-32 h-32 mx-auto rounded-full object-cover">
                <h3 class="mt-4 text-xl font-semibold text-brand-gray">Design Lead</h3>
                <p class="mt-2 text-gray-600 text-sm">Sarah Lee</p>
                <p class="mt-2 text-gray-500 text-xs">Focused on creating visually stunning and user-friendly digital experiences.</p>
            </div>

            <!-- Team Member 4 -->
            <div class="bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/images/team/team4.jpg') }}" alt="Operations Head Name" class="w-32 h-32 mx-auto rounded-full object-cover">
                <h3 class="mt-4 text-xl font-semibold text-brand-gray">Head of Operations</h3>
                <p class="mt-2 text-gray-600 text-sm">Michael Brown</p>
                <p class="mt-2 text-gray-500 text-xs">Ensures smooth project execution and efficient delivery across all services.</p>
            </div>

        </div>

        <!-- Optional CTA -->
        <div class="mt-14 text-center">
            <a href="/contact" class="inline-block bg-brand-red text-white px-8 py-3 rounded-md font-medium shadow hover:shadow-lg transition">
                Join Our Team / Contact Us
            </a>
        </div>

    </div>
</section>
<!-- SERVICES SNAPSHOT SECTION -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                What We Do
            </h2>
            <p class="mt-4 text-gray-600">
                Explore our range of services designed to help your business grow and succeed.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">

            <!-- Service 1 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/it-consulting.svg') }}" alt="IT Consultation" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">IT Consultation</h3>
                <p class="text-gray-600 text-sm">
                    Expert guidance to optimize your technology strategy and solve business challenges.
                </p>
                <a href="/services/it-consultation" class="mt-4 inline-block text-brand-red font-semibold hover:underline">
                    Learn More
                </a>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/web-development.svg') }}" alt="Web & Software Development" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Web & Software Development</h3>
                <p class="text-gray-600 text-sm">
                    Custom websites and software solutions tailored to your business needs.
                </p>
                <a href="/services/web-development" class="mt-4 inline-block text-brand-red font-semibold hover:underline">
                    Learn More
                </a>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/graphic-design.svg') }}" alt="Graphics Design" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Graphics Design</h3>
                <p class="text-gray-600 text-sm">
                    Creative designs that enhance your brand identity and captivate your audience.
                </p>
                <a href="/services/graphic-design" class="mt-4 inline-block text-brand-red font-semibold hover:underline">
                    Learn More
                </a>
            </div>

            <!-- Service 4 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/electronics.svg') }}" alt="Electronics Sales" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Electronics Sales</h3>
                <p class="text-gray-600 text-sm">
                    High-quality electronic gadgets for personal and business use.
                </p>
                <a href="/services/electronics" class="mt-4 inline-block text-brand-red font-semibold hover:underline">
                    Learn More
                </a>
            </div>

            <!-- Service 5 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/logistics.svg') }}" alt="Logistics Solutions" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Logistics Solutions</h3>
                <p class="text-gray-600 text-sm">
                    Efficient logistics services to streamline your supply chain operations.
                </p>
                <a href="/services/logistics" class="mt-4 inline-block text-brand-red font-semibold hover:underline">
                    Learn More
                </a>
            </div>

            <!-- Service 6 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/education.svg') }}" alt="Education Services" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Education Services</h3>
                <p class="text-gray-600 text-sm">
                    Training and educational solutions to empower individuals and organizations.
                </p>
                <a href="/services/education" class="mt-4 inline-block text-brand-red font-semibold hover:underline">
                    Learn More
                </a>
            </div>

        </div>
    </div>
</section>
<!-- AWARDS / CERTIFICATIONS / SOCIAL PROOF -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Trusted by Clients & Recognized for Excellence
            </h2>
            <p class="mt-4 text-gray-600">
                Our work has been recognized by industry leaders, and we are proud to have collaborated with clients worldwide.
            </p>
        </div>

        <!-- Logos / Awards Grid -->
        <div class="mt-16 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">

            <!-- Client / Award 1 -->
            <div class="flex items-center justify-center p-4">
                <img src="{{ asset('assets/logos/client1.png') }}" alt="Client 1" class="max-h-12 object-contain">
            </div>

            <!-- Client / Award 2 -->
            <div class="flex items-center justify-center p-4">
                <img src="{{ asset('assets/logos/client2.png') }}" alt="Client 2" class="max-h-12 object-contain">
            </div>

            <!-- Client / Award 3 -->
            <div class="flex items-center justify-center p-4">
                <img src="{{ asset('assets/logos/award1.png') }}" alt="Award 1" class="max-h-12 object-contain">
            </div>

            <!-- Client / Award 4 -->
            <div class="flex items-center justify-center p-4">
                <img src="{{ asset('assets/logos/client3.png') }}" alt="Client 3" class="max-h-12 object-contain">
            </div>

            <!-- Client / Award 5 -->
            <div class="flex items-center justify-center p-4">
                <img src="{{ asset('assets/logos/award2.png') }}" alt="Award 2" class="max-h-12 object-contain">
            </div>

            <!-- Client / Award 6 -->
            <div class="flex items-center justify-center p-4">
                <img src="{{ asset('assets/logos/client4.png') }}" alt="Client 4" class="max-h-12 object-contain">
            </div>

        </div>

        <!-- Optional CTA -->
        <div class="mt-12 text-center">
            <a href="/contact" class="inline-block bg-brand-red text-white px-8 py-3 rounded-md font-medium shadow hover:shadow-lg transition">
                Work With Us
            </a>
        </div>

    </div>
</section>
<!-- CORE VALUES / WHY CHOOSE US SECTION -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Why Choose <span class="text-brand-red">Us</span>
            </h2>
            <p class="mt-4 text-gray-600">
                We are committed to delivering excellence in every project through innovation, reliability, and customer-focused solutions.
            </p>
        </div>

        <!-- Values Grid -->
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            <!-- Value 1 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/innovation.svg') }}" alt="Innovation" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Innovation</h3>
                <p class="text-gray-600 text-sm">
                    We embrace cutting-edge technology and creative solutions to keep your business ahead.
                </p>
            </div>

            <!-- Value 2 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/reliability.svg') }}" alt="Reliability" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Reliability</h3>
                <p class="text-gray-600 text-sm">
                    Dependable solutions and consistent support ensure your projects are always in good hands.
                </p>
            </div>

            <!-- Value 3 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/customer-focus.svg') }}" alt="Customer Focus" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Customer Focus</h3>
                <p class="text-gray-600 text-sm">
                    Our clients’ success is our priority. We listen, understand, and deliver tailored solutions.
                </p>
            </div>

            <!-- Value 4 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/quality.svg') }}" alt="Quality" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Quality</h3>
                <p class="text-gray-600 text-sm">
                    We deliver top-notch services and products that exceed expectations every time.
                </p>
            </div>

            <!-- Value 5 -->
            <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition text-center">
                <img src="{{ asset('assets/icons/transparency.svg') }}" alt="Transparency" class="w-16 h-16 mx-auto mb-4">
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Transparency</h3>
                <p class="text-gray-600 text-sm">
                    Open communication and clear processes ensure trust and accountability in every project.
                </p>
            </div>

        </div>

    </div>
</section>
<!-- CTA / CONTACT SECTION -->
<section class="bg-brand-red py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <h2 class="text-3xl md:text-4xl font-bold text-white">
            Ready to Work With <span class="font-semibold">Your Company Name?</span>
        </h2>
        <p class="mt-4 text-white text-lg md:text-xl max-w-2xl mx-auto">
            Let's discuss your project and provide solutions tailored to your business needs. Our team is ready to help you succeed.
        </p>

        <!-- CTA Buttons -->
        <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
            <a href="/contact" 
               class="bg-white text-brand-red px-8 py-3 rounded-md font-medium shadow-md hover:shadow-lg transition">
                Contact Us
            </a>
            <a href="/services" 
               class="border-2 border-white text-white px-8 py-3 rounded-md font-medium hover:bg-white hover:text-brand-red transition">
                View Services
            </a>
        </div>

    </div>
</section>

@endsection