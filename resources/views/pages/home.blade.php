@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="relative overflow-hidden bg-white">
    <div class="max-w-7xl mx-auto px-6 py-20 grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

        <!-- LEFT: TEXT CONTENT -->
        <div>
            <span
                class="inline-block mb-4 px-4 py-1 text-sm font-medium rounded-full
                       bg-brand-light text-brand-red">
                IT Solutions • Software • Design • Logistics • Education
            </span>

            <h1 class="text-4xl md:text-5xl xl:text-6xl font-extrabold leading-tight text-brand-gray">
                Smart Digital Solutions
                <span class="text-brand-red block">
                    Built to Scale Your Business
                </span>
            </h1>

            <p class="mt-6 text-lg text-gray-600 max-w-xl">
                We provide IT consulting, web and software development, digital design,
                electronics sales, logistics solutions, and professional training —
                all under one trusted brand.
            </p>

            <!-- CTA BUTTONS -->
            <div class="mt-8 flex flex-col sm:flex-row gap-4">
                <a href="/contact"
                   class="inline-flex items-center justify-center
                          bg-brand-red hover:bg-brand-dark
                          text-white px-8 py-3 rounded-md font-medium transition">
                    Get a Free Consultation
                </a>

                <a href="/services"
                   class="inline-flex items-center justify-center
                          border border-brand-red text-brand-red
                          hover:bg-brand-red hover:text-white
                          px-8 py-3 rounded-md font-medium transition">
                    Explore Our Services
                </a>
            </div>

            <!-- TRUST STATS -->
            <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 gap-6 text-sm">
                <div>
                    <p class="text-2xl font-bold text-brand-red">120+</p>
                    <p class="text-gray-500">Projects Delivered</p>
                </div>
                <div>
                    <p class="text-2xl font-bold text-brand-red">7+</p>
                    <p class="text-gray-500">Years Experience</p>
                </div>
                <div class="hidden sm:block">
                    <p class="text-2xl font-bold text-brand-red">98%</p>
                    <p class="text-gray-500">Client Satisfaction</p>
                </div>
            </div>
        </div>

        <!-- RIGHT: IMAGE / ILLUSTRATION -->
        <div class="relative">
            <div
                class="absolute -top-10 -left-10 w-72 h-72 bg-brand-red/10 rounded-full blur-3xl">
            </div>

            <img
                src="{{ asset('assets/images/hero-image.jpg') }}"
                alt="Digital Solutions Illustration"
                class="relative w-full max-w-lg mx-auto"
            >
        </div>

    </div>
</section>

<!-- SERVICES SECTION -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Our Core Services
            </h2>
            <p class="mt-4 text-gray-600">
                We deliver end-to-end solutions across technology, design,
                logistics, and education to help businesses grow.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- IT Consulting -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition">
                <div class="text-brand-red text-3xl mb-4">💡</div>
                <h3 class="text-xl font-semibold text-brand-gray">
                    IT Consulting
                </h3>
                <p class="mt-3 text-gray-600 text-sm">
                    Strategic technology guidance to optimize operations,
                    reduce costs, and scale securely.
                </p>
                <a href="/services/it-consulting"
                   class="inline-block mt-4 text-brand-red font-medium hover:underline">
                    Learn More →
                </a>
            </div>

            <!-- Web & Software Development -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition">
                <div class="text-brand-red text-3xl mb-4">🧩</div>
                <h3 class="text-xl font-semibold text-brand-gray">
                    Web & Software Development
                </h3>
                <p class="mt-3 text-gray-600 text-sm">
                    Custom websites, enterprise systems, and scalable software
                    solutions built with modern technologies.
                </p>
                <a href="/services/software-development"
                   class="inline-block mt-4 text-brand-red font-medium hover:underline">
                    Learn More →
                </a>
            </div>

            <!-- Graphics & Branding -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition">
                <div class="text-brand-red text-3xl mb-4">🎨</div>
                <h3 class="text-xl font-semibold text-brand-gray">
                    Graphics & Branding
                </h3>
                <p class="mt-3 text-gray-600 text-sm">
                    Visual identity, brand strategy, and creative designs
                    that communicate trust and professionalism.
                </p>
                <a href="/services/graphics-design"
                   class="inline-block mt-4 text-brand-red font-medium hover:underline">
                    Learn More →
                </a>
            </div>

            <!-- Electronics Sales -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition">
                <div class="text-brand-red text-3xl mb-4">📦</div>
                <h3 class="text-xl font-semibold text-brand-gray">
                    Electronics & Gadgets
                </h3>
                <p class="mt-3 text-gray-600 text-sm">
                    Reliable supply of quality electronic devices and tech
                    accessories for individuals and businesses.
                </p>
                <a href="/services/electronics"
                   class="inline-block mt-4 text-brand-red font-medium hover:underline">
                    Learn More →
                </a>
            </div>

            <!-- Logistics -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition">
                <div class="text-brand-red text-3xl mb-4">🚚</div>
                <h3 class="text-xl font-semibold text-brand-gray">
                    Logistics & Delivery
                </h3>
                <p class="mt-3 text-gray-600 text-sm">
                    Efficient logistics and delivery services designed to
                    move goods quickly and securely.
                </p>
                <a href="/services/logistics"
                   class="inline-block mt-4 text-brand-red font-medium hover:underline">
                    Learn More →
                </a>
            </div>

            <!-- Education -->
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-lg transition">
                <div class="text-brand-red text-3xl mb-4">🎓</div>
                <h3 class="text-xl font-semibold text-brand-gray">
                    Education & Training
                </h3>
                <p class="mt-3 text-gray-600 text-sm">
                    Professional training programs in technology, business,
                    and digital skills for individuals and organizations.
                </p>
                <a href="/services/education"
                   class="inline-block mt-4 text-brand-red font-medium hover:underline">
                    Learn More →
                </a>
            </div>

        </div>
    </div>
</section>

<!-- WHY CHOOSE US SECTION -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Why Choose Us
            </h2>
            <p class="mt-4 text-gray-600">
                We combine expertise, innovation, and dedication to deliver
                solutions that transform your business.
            </p>
        </div>

        <!-- Features Grid -->
        <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Feature 1 -->
            <div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                <div class="text-brand-red text-4xl mb-4">⚡</div>
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Fast & Efficient</h3>
                <p class="text-gray-600 text-sm">
                    We deliver high-quality solutions quickly without compromising
                    quality.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                <div class="text-brand-red text-4xl mb-4">🎯</div>
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Client-Focused</h3>
                <p class="text-gray-600 text-sm">
                    Your business goals are our priority. We tailor solutions
                    to your needs.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                <div class="text-brand-red text-4xl mb-4">🔒</div>
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Secure & Reliable</h3>
                <p class="text-gray-600 text-sm">
                    All solutions are designed with security, scalability, and
                    long-term reliability in mind.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="flex flex-col items-center text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition">
                <div class="text-brand-red text-4xl mb-4">💡</div>
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Innovative Solutions</h3>
                <p class="text-gray-600 text-sm">
                    We leverage the latest technologies and best practices to
                    deliver innovative solutions.
                </p>
            </div>

        </div>

        <!-- Optional CTA -->
        <div class="mt-14 text-center">
            <a href="/contact"
               class="inline-block bg-brand-red hover:bg-brand-dark text-white px-8 py-3 rounded-md font-medium transition">
               Get Your Free Consultation
            </a>
        </div>

    </div>
</section>
<!-- FEATURED PROJECTS / CASE STUDIES -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Featured Projects
            </h2>
            <p class="mt-4 text-gray-600">
                Explore some of the impactful projects we have delivered across technology, design, logistics, and education.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Project 1 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/projects/project1.jpg') }}"
                     alt="E-commerce Platform"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-brand-gray">E-commerce Platform</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Developed a scalable e-commerce platform that increased client sales by 45% within 3 months.
                    </p>
                    <a href="/projects/ecommerce-platform"
                       class="inline-block mt-4 text-brand-red font-medium hover:underline">
                        View Project →
                    </a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/projects/project2.jpg') }}"
                     alt="Corporate Website"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-brand-gray">Corporate Website</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Designed a modern corporate website with an integrated blog to improve engagement and brand visibility.
                    </p>
                    <a href="/projects/corporate-website"
                       class="inline-block mt-4 text-brand-red font-medium hover:underline">
                        View Project →
                    </a>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/projects/project3.jpg') }}"
                     alt="Educational Platform"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-brand-gray">Educational Platform</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Built an online learning platform providing digital courses and interactive learning tools.
                    </p>
                    <a href="/projects/educational-platform"
                       class="inline-block mt-4 text-brand-red font-medium hover:underline">
                        View Project →
                    </a>
                </div>
            </div>

            <!-- Project 4 (Optional) -->
            <div class="bg-white rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/projects/project4.jpg') }}"
                     alt="Logistics App"
                     class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-brand-gray">Logistics App</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Developed a real-time logistics tracking app improving delivery efficiency by 30%.
                    </p>
                    <a href="/projects/logistics-app"
                       class="inline-block mt-4 text-brand-red font-medium hover:underline">
                        View Project →
                    </a>
                </div>
            </div>

        </div>

        <!-- Optional CTA -->
        <div class="mt-14 text-center">
            <a href="/projects"
               class="inline-block bg-brand-red hover:bg-brand-dark text-white px-8 py-3 rounded-md font-medium transition">
               View All Projects
            </a>
        </div>

    </div>
</section>
<!-- HOW WE WORK / PROCESS TIMELINE -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                How We Work
            </h2>
            <p class="mt-4 text-gray-600">
                Our structured approach ensures successful delivery of every project.
            </p>
        </div>

        <!-- Timeline -->
        <div class="mt-16 relative flex flex-col md:flex-row items-center justify-between">

            <!-- Step 1 -->
            <div class="flex flex-col items-center text-center md:w-1/5 px-2">
                <div class="bg-brand-red text-white w-16 h-16 rounded-full flex items-center justify-center text-3xl mb-4">🔍</div>
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Discover</h3>
                <p class="text-gray-600 text-sm">Understand your business and plan the perfect solution.</p>
            </div>

            <!-- Arrow 1 -->
            <div class="hidden md:block absolute top-8 left-[20%] w-[16%] h-1 bg-gray-300 rotate-0 z-0"></div>
            <div class="hidden md:block absolute top-8 left-[20%] w-4 h-4 bg-gray-300 rotate-45 z-10"></div>

            <!-- Step 2 -->
            <div class="flex flex-col items-center text-center md:w-1/5 px-2 mt-10 md:mt-0">
                <div class="bg-brand-red text-white w-16 h-16 rounded-full flex items-center justify-center text-3xl mb-4">🎨</div>
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Design</h3>
                <p class="text-gray-600 text-sm">Create wireframes, UI/UX designs, and prototypes.</p>
            </div>

            <!-- Arrow 2 -->
            <div class="hidden md:block absolute top-8 left-[40%] w-[16%] h-1 bg-gray-300 rotate-0 z-0"></div>
            <div class="hidden md:block absolute top-8 left-[40%] w-4 h-4 bg-gray-300 rotate-45 z-10"></div>

            <!-- Step 3 -->
            <div class="flex flex-col items-center text-center md:w-1/5 px-2 mt-10 md:mt-0">
                <div class="bg-brand-red text-white w-16 h-16 rounded-full flex items-center justify-center text-3xl mb-4">🛠️</div>
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Build</h3>
                <p class="text-gray-600 text-sm">Develop high-quality websites, apps, or systems.</p>
            </div>

            <!-- Arrow 3 -->
            <div class="hidden md:block absolute top-8 left-[60%] w-[16%] h-1 bg-gray-300 rotate-0 z-0"></div>
            <div class="hidden md:block absolute top-8 left-[60%] w-4 h-4 bg-gray-300 rotate-45 z-10"></div>

            <!-- Step 4 -->
            <div class="flex flex-col items-center text-center md:w-1/5 px-2 mt-10 md:mt-0">
                <div class="bg-brand-red text-white w-16 h-16 rounded-full flex items-center justify-center text-3xl mb-4">🚀</div>
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Deploy</h3>
                <p class="text-gray-600 text-sm">Launch your solution securely and smoothly.</p>
            </div>

            <!-- Arrow 4 -->
            <div class="hidden md:block absolute top-8 left-[80%] w-[16%] h-1 bg-gray-300 rotate-0 z-0"></div>
            <div class="hidden md:block absolute top-8 left-[80%] w-4 h-4 bg-gray-300 rotate-45 z-10"></div>

            <!-- Step 5 -->
            <div class="flex flex-col items-center text-center md:w-1/5 px-2 mt-10 md:mt-0">
                <div class="bg-brand-red text-white w-16 h-16 rounded-full flex items-center justify-center text-3xl mb-4">💡</div>
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Support</h3>
                <p class="text-gray-600 text-sm">Continuous maintenance, updates, and support.</p>
            </div>

        </div>

    </div>
</section>
<!-- TESTIMONIALS / SOCIAL PROOF CAROUSEL -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                What Our Clients Say
            </h2>
            <p class="mt-4 text-gray-600">
                Real feedback from businesses and individuals we’ve helped.
            </p>
        </div>

        <!-- Swiper Container -->
        <div class="mt-14 swiper testimonial-swiper">
            <div class="swiper-wrapper">

                <!-- Testimonial Slide 1 -->
                <div class="swiper-slide bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition flex flex-col items-center text-center">
                    
                    <!-- Optional Video -->
                    <video class="w-full h-48 rounded-lg mb-4" controls>
                        <source src="{{ asset('assets/videos/testimonial1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div class="flex flex-col items-center mb-4">
                        <h4 class="text-lg font-semibold text-brand-gray">John Doe</h4>
                        <p class="text-sm text-gray-500 mb-2">CEO, TechCorp</p>

                        <!-- Star Rating -->
                        <div class="flex">
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                        </div>
                    </div>

                    <p class="text-gray-600 text-sm">
                        "Working with this company was a game-changer. They delivered on time
                        and exceeded expectations in design and functionality."
                    </p>
                </div>

                <!-- Testimonial Slide 2 -->
                <div class="swiper-slide bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition flex flex-col items-center text-center">
                    <video class="w-full h-48 rounded-lg mb-4" controls>
                        <source src="{{ asset('assets/videos/testimonial2.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div class="flex flex-col items-center mb-4">
                        <h4 class="text-lg font-semibold text-brand-gray">Jane Smith</h4>
                        <p class="text-sm text-gray-500 mb-2">Founder, EduLearn</p>
                        <div class="flex">
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                        </div>
                    </div>

                    <p class="text-gray-600 text-sm">
                        "Highly professional and creative team. The project was delivered seamlessly,
                        with excellent post-launch support."
                    </p>
                </div>

                <!-- Testimonial Slide 3 -->
                <div class="swiper-slide bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition flex flex-col items-center text-center">
                    <video class="w-full h-48 rounded-lg mb-4" controls>
                        <source src="{{ asset('assets/videos/testimonial3.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div class="flex flex-col items-center mb-4">
                        <h4 class="text-lg font-semibold text-brand-gray">Michael Lee</h4>
                        <p class="text-sm text-gray-500 mb-2">Logistics Manager, FastShip</p>
                        <div class="flex">
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                            <span class="text-yellow-400">★</span>
                        </div>
                    </div>

                    <p class="text-gray-600 text-sm">
                        "Their logistics software transformed our operations. Communication was smooth,
                        and they delivered exactly what we needed."
                    </p>
                </div>

            </div>

            <!-- Pagination -->
            <div class="swiper-pagination mt-6"></div>
        </div>

       

    </div>
</section>
<!-- BLOG / INSIGHTS / EDUCATION -->
<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">
                Insights & Education
            </h2>
            <p class="mt-4 text-gray-600">
                Explore our latest articles, tips, and guides to help your business grow.
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="mt-14 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Blog Post 1 -->
            <div class="bg-gray-50 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/blog/blog1.jpg') }}" alt="Blog 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-brand-gray">Top 5 Web Development Trends in 2026</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Stay ahead with the latest trends in web development, from AI integration to modern frameworks.
                    </p>
                    <a href="/blog/web-development-trends-2026" class="inline-block mt-4 text-brand-red font-medium hover:underline">
                        Read More →
                    </a>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div class="bg-gray-50 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/blog/blog2.jpg') }}" alt="Blog 2" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-brand-gray">Effective IT Consultation for SMEs</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Learn how IT consulting can transform your small business and boost operational efficiency.
                    </p>
                    <a href="/blog/it-consultation-smes" class="inline-block mt-4 text-brand-red font-medium hover:underline">
                        Read More →
                    </a>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div class="bg-gray-50 rounded-xl shadow-sm hover:shadow-lg transition overflow-hidden">
                <img src="{{ asset('assets/images/blog/blog3.jpg') }}" alt="Blog 3" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-brand-gray">Design Tips to Improve User Experience</h3>
                    <p class="mt-2 text-gray-600 text-sm">
                        Explore practical tips for creating visually appealing and user-friendly digital products.
                    </p>
                    <a href="/blog/design-tips-ux" class="inline-block mt-4 text-brand-red font-medium hover:underline">
                        Read More →
                    </a>
                </div>
            </div>

        </div>

        <!-- Optional CTA -->
        <div class="mt-14 text-center">
            <a href="/blog"
               class="inline-block bg-brand-red hover:bg-brand-dark text-white px-8 py-3 rounded-md font-medium transition">
               View All Articles
            </a>
        </div>

    </div>
</section>
<!-- FINAL CALL-TO-ACTION -->
<section class="bg-brand-red py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">

        <!-- Heading -->
        <h2 class="text-3xl md:text-4xl font-bold text-white">
            Ready to Start Your Project?
        </h2>
        <p class="mt-4 text-white text-lg md:text-xl max-w-2xl mx-auto">
            Partner with us for innovative IT solutions, web & software development, and creative services.
            Let’s bring your ideas to life.
        </p>

        <!-- CTA Buttons -->
        <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
            <a href="/contact"
               class="inline-block bg-white text-brand-red font-semibold px-8 py-3 rounded-md shadow-md hover:shadow-lg transition">
               Contact Us
            </a>
            <a href="/get-quote"
               class="inline-block border-2 border-white text-white font-semibold px-8 py-3 rounded-md hover:bg-white hover:text-brand-red transition">
               Get a Free Quote
            </a>
        </div>

    </div>
</section>


@endsection
