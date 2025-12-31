@extends('layouts.app')

@section('title', 'Contact Us | Your Company Name — IT, Web & Software Development, Design & More')
@section('description', 'Contact Your Company Name, providing IT consultation, web & software development, graphics design, electronics, logistics, and education services. Discover our mission, team, and expertise.')

@section('content')

<!-- CONTACT PAGE HERO SECTION -->
<section class="bg-gray-50 relative">
    <div class="max-w-7xl mx-auto px-6 py-24 lg:py-32 text-center lg:text-left">

        <div class="lg:flex lg:items-center lg:justify-between">
            <!-- Text Content -->
            <div class="lg:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold text-brand-gray leading-tight">
                    Get in <span class="text-brand-red">Touch</span>
                </h1>
                <p class="mt-6 text-gray-600 text-lg md:text-xl max-w-xl">
                    Have a question or want to start a project? Our team at <span class="font-semibold text-brand-red">Your Company Name</span> is ready to help. Reach out and we’ll get back to you promptly.
                </p>

                <!-- Optional CTA Buttons -->
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#contact-form" 
                       class="bg-brand-red text-white px-8 py-3 rounded-md font-medium shadow-md hover:shadow-lg transition">
                        Contact Us
                    </a>
                    <a href="/services" 
                       class="border-2 border-brand-red text-brand-red px-8 py-3 rounded-md font-medium hover:bg-brand-red hover:text-white transition">
                        View Services
                    </a>
                </div>
            </div>

            <!-- Hero Illustration / Image -->
            <div class="mt-12 lg:mt-0 lg:w-1/2 flex justify-center lg:justify-end">
                <img src="{{ asset('assets/images/contact-hero.jpg') }}" 
                     alt="Contact Your Company Name" 
                     class="w-full max-w-lg rounded-xl shadow-lg object-cover">
            </div>
        </div>

    </div>
</section>
<!-- CONTACT INFORMATION SECTION -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 text-center lg:text-left">

        <!-- Section Header -->
        <div class="max-w-2xl mx-auto lg:mx-0 text-center lg:text-left">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Contact Details
            </h2>
            <p class="mt-4 text-gray-600">
                Reach out to us via phone, email, or visit our office. We’re here to assist you with all your needs.
            </p>
        </div>

        <!-- Contact Grid -->
        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Phone -->
            <div class="flex flex-col items-center lg:items-start bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <svg class="w-10 h-10 text-brand-red mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M3 5h2l3 7-3 7H3l-1-4.5L3 5z" />
                </svg>
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Phone</h3>
                <p class="text-gray-600">+234 800 123 4567</p>
            </div>

            <!-- Email -->
            <div class="flex flex-col items-center lg:items-start bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <svg class="w-10 h-10 text-brand-red mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M16 12H8m8-4H8m8 8H8m-4 0h16a2 2 0 002-2V6a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2z" />
                </svg>
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Email</h3>
                <p class="text-gray-600">info@yourcompany.com</p>
            </div>

            <!-- Address -->
            <div class="flex flex-col items-center lg:items-start bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <svg class="w-10 h-10 text-brand-red mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M12 11c1.657 0 3-1.343 3-3S13.657 5 12 5s-3 1.343-3 3 1.343 3 3 3z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                          d="M12 21s9-4.5 9-11-4-7-9-7-9 3-9 7 9 11 9 11z" />
                </svg>
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Address</h3>
                <p class="text-gray-600">123 Tech Avenue, Lagos, Nigeria</p>
            </div>

            <!-- Social Media -->
            <div class="flex flex-col items-center lg:items-start bg-gray-50 p-6 rounded-xl shadow hover:shadow-lg transition">
                <svg class="w-10 h-10 text-brand-red mb-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22.46 6c-.77.35-1.6.59-2.46.69a4.27 4.27 0 001.88-2.37 8.59 8.59 0 01-2.7 1.03 4.27 4.27 0 00-7.27 3.9A12.12 12.12 0 013 4.91a4.27 4.27 0 001.32 5.7 4.2 4.2 0 01-1.94-.53v.05a4.27 4.27 0 003.42 4.19 4.3 4.3 0 01-1.93.07 4.27 4.27 0 003.99 2.97A8.57 8.57 0 012 19.54a12.08 12.08 0 006.56 1.92c7.88 0 12.2-6.53 12.2-12.2 0-.19-.01-.37-.02-.56A8.72 8.72 0 0024 5.5a8.55 8.55 0 01-2.54.7z"/>
                </svg>
                <h3 class="text-xl font-semibold text-brand-gray mb-2">Follow Us</h3>
                <div class="flex gap-4">
                    <a href="#" class="text-brand-red hover:text-red-700">Facebook</a>
                    <a href="#" class="text-brand-red hover:text-red-700">Twitter</a>
                    <a href="#" class="text-brand-red hover:text-red-700">LinkedIn</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- CONTACT FORM SECTION -->
<section id="contact-form" class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Send Us a Message
            </h2>
            <p class="mt-4 text-gray-600">
                Fill out the form below and our team will get back to you as soon as possible.
            </p>
        </div>

        <!-- Form -->
        <div class="mt-12 max-w-3xl mx-auto">
            <form action="" method="POST" class="bg-white p-8 rounded-xl shadow-md space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" required
                           class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                           class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none">
                </div>

                <!-- Subject -->
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" name="subject" id="subject" required
                           class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none">
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea name="message" id="message" rows="5" required
                              class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" 
                            class="bg-brand-red text-white px-8 py-3 rounded-md font-medium shadow hover:shadow-lg transition">
                        Send Message
                    </button>
                </div>

                <!-- Success / Error Messages -->
                @if(session('success'))
                    <p class="text-green-600 mt-4 text-center">{{ session('success') }}</p>
                @elseif(session('error'))
                    <p class="text-red-600 mt-4 text-center">{{ session('error') }}</p>
                @endif
            </form>
        </div>

    </div>
</section>
<!-- GOOGLE MAPS / LOCATION SECTION -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Our Location
            </h2>
            <p class="mt-4 text-gray-600">
                Visit our office or find us on the map below. We are always happy to meet our clients.
            </p>
        </div>

        <!-- Google Map Embed -->
        <div class="mt-12 w-full h-96 rounded-xl overflow-hidden shadow-lg">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.123456!2d3.3792!3d6.5244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf0c123456789%3A0xabcdef123456789!2sYour%20Company%20Name!5e0!3m2!1sen!2sng!4v1700000000000" 
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>
</section>
<!-- FAQ / HELP SECTION -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Frequently Asked Questions
            </h2>
            <p class="mt-4 text-gray-600">
                Find answers to common inquiries. If you don’t see your question here, feel free to contact us directly.
            </p>
        </div>

        <!-- Accordion -->
        <div class="mt-12 max-w-3xl mx-auto space-y-4">

            <!-- FAQ Item 1 -->
            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                <button @click="open = !open" 
                        class="w-full flex justify-between items-center px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none">
                    <span class="font-medium text-gray-800">How long does it take to get a response?</span>
                    <svg :class="{'transform rotate-180': open}" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-transition class="px-6 py-4 bg-gray-50 text-gray-600 text-sm">
                    We typically respond within 24–48 hours during business days.
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                <button @click="open = !open" 
                        class="w-full flex justify-between items-center px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none">
                    <span class="font-medium text-gray-800">Do you offer custom software solutions?</span>
                    <svg :class="{'transform rotate-180': open}" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-transition class="px-6 py-4 bg-gray-50 text-gray-600 text-sm">
                    Yes, we provide tailored web and software solutions based on your business needs.
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                <button @click="open = !open" 
                        class="w-full flex justify-between items-center px-6 py-4 text-left bg-white hover:bg-gray-50 focus:outline-none">
                    <span class="font-medium text-gray-800">Can I schedule a consultation?</span>
                    <svg :class="{'transform rotate-180': open}" class="w-5 h-5 text-gray-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div x-show="open" x-transition class="px-6 py-4 bg-gray-50 text-gray-600 text-sm">
                    Absolutely! Use the contact form above or call us to schedule a meeting at your convenience.
                </div>
            </div>

        </div>

    </div>
</section>

@endsection