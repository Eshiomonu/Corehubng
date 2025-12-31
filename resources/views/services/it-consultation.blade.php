@extends('layouts.app')

@section('title', 'IT Consultation | Expert IT Solutions for Your Business')
@section('description', 'Book a professional IT consultation with our expert team. Tailored strategies, proven results, and 24/7 support for your business.')

@section('content')

<!-- HERO SECTION -->
<section class="bg-gray-50 py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-brand-gray">
            Professional IT Consultation for Your Business
        </h1>
        <p class="mt-4 text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
            Optimize your IT infrastructure, improve efficiency, and achieve business growth with tailored strategies from our expert team.
        </p>
        <a href="{{ route('contact') }}" class="mt-8 inline-block bg-brand-red text-white px-8 py-3 rounded-md font-medium hover:bg-brand-dark transition">
            Book a Consultation
        </a>
    </div>
</section>

<!-- WHY CHOOSE US / USPs -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Why Choose Our IT Consultation</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Our team provides expert guidance and actionable strategies tailored to your business needs.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- USP 1 -->
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/expert.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Expert Advisors">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Expert Advisors</h3>
                <p class="text-gray-600 text-sm">Get advice from certified IT professionals with years of experience.</p>
            </div>
            <!-- USP 2 -->
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/strategy.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Tailored Strategies">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Tailored Strategies</h3>
                <p class="text-gray-600 text-sm">We design IT solutions specifically for your business goals.</p>
            </div>
            <!-- USP 3 -->
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/results.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="Proven Results">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">Proven Results</h3>
                <p class="text-gray-600 text-sm">Our strategies have helped businesses increase efficiency and reduce costs.</p>
            </div>
            <!-- USP 4 -->
            <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/images/services/icons/support.svg') }}" class="w-16 h-16 mx-auto mb-4" alt="24/7 Support">
                <h3 class="font-semibold text-lg text-brand-gray mb-2">24/7 Support</h3>
                <p class="text-gray-600 text-sm">Continuous assistance ensures your IT systems run smoothly at all times.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONSULTATION PROCESS -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Our Consultation Process</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">A clear and structured approach to achieve your business objectives.</p>

        <div class="mt-12 flex flex-col lg:flex-row items-center justify-between relative">
            <!-- Timeline line -->
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 h-1 bg-gray-300 z-0"></div>

            <!-- Steps -->
            <div class="relative flex flex-col items-center lg:w-1/4 z-10 mb-12 lg:mb-0">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">1</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Assessment</h3>
                <p class="text-gray-600 text-sm mt-2">We evaluate your current IT infrastructure and business needs.</p>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/4 z-10 mb-12 lg:mb-0">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">2</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Strategy</h3>
                <p class="text-gray-600 text-sm mt-2">Tailored solutions and roadmap designed for your goals.</p>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/4 z-10 mb-12 lg:mb-0">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">3</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Implementation</h3>
                <p class="text-gray-600 text-sm mt-2">Our team executes the plan and optimizes your systems.</p>
            </div>
            <div class="relative flex flex-col items-center lg:w-1/4 z-10">
                <div class="bg-brand-red text-white w-16 h-16 flex items-center justify-center rounded-full font-bold text-xl">4</div>
                <h3 class="mt-4 font-semibold text-lg text-brand-gray">Follow-up</h3>
                <p class="text-gray-600 text-sm mt-2">Continuous monitoring and improvement for lasting results.</p>
            </div>
        </div>
    </div>
</section>

<!-- PRICING / PACKAGES -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">Consultation Packages</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Choose a package that fits your business needs and budget.</p>

        <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Basic Package -->
            <div class="p-8 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-brand-gray mb-4">Basic</h3>
                <p class="text-gray-600 mb-6">Ideal for small businesses or startups looking for IT guidance.</p>
                <p class="text-3xl font-bold text-brand-red mb-6">$199</p>
                <ul class="mb-6 text-gray-600 text-sm space-y-2">
                    <li>1-hour consultation</li>
                    <li>Email support</li>
                    <li>Basic IT assessment</li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-block bg-brand-red text-white px-6 py-3 rounded-md font-medium hover:bg-brand-dark transition">
                    Book Now
                </a>
            </div>

            <!-- Standard Package -->
            <div class="p-8 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-brand-gray mb-4">Standard</h3>
                <p class="text-gray-600 mb-6">For growing businesses needing detailed IT strategy and implementation guidance.</p>
                <p class="text-3xl font-bold text-brand-red mb-6">$399</p>
                <ul class="mb-6 text-gray-600 text-sm space-y-2">
                    <li>2-hour consultation</li>
                    <li>Email & phone support</li>
                    <li>Comprehensive IT assessment</li>
                    <li>Strategy recommendations</li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-block bg-brand-red text-white px-6 py-3 rounded-md font-medium hover:bg-brand-dark transition">
                    Book Now
                </a>
            </div>

            <!-- Premium Package -->
            <div class="p-8 border rounded-xl shadow hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-brand-gray mb-4">Premium</h3>
                <p class="text-gray-600 mb-6">Full-service package for enterprises requiring end-to-end IT consulting.</p>
                <p class="text-3xl font-bold text-brand-red mb-6">$699</p>
                <ul class="mb-6 text-gray-600 text-sm space-y-2">
                    <li>4-hour consultation</li>
                    <li>Priority support 24/7</li>
                    <li>Full IT assessment & strategy</li>
                    <li>Implementation guidance</li>
                    <li>Follow-up review</li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-block bg-brand-red text-white px-6 py-3 rounded-md font-medium hover:bg-brand-dark transition">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS / CLIENT SUCCESS -->
<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-brand-gray">What Our Clients Say</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Real experiences from businesses that benefited from our IT consultation.</p>

        <div class="mt-12 relative">
            <!-- Carousel (simple horizontal scroll for demo) -->
            <div class="flex gap-6 overflow-x-auto snap-x snap-mandatory px-4 py-4">
                <!-- Testimonial 1 -->
                <div class="flex-none w-80 bg-white p-6 rounded-xl shadow hover:shadow-lg transition snap-center">
                    <p class="text-gray-600 mb-4">"The IT consultation transformed our workflow. Highly recommended!"</p>
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/images/testimonials/client1.jpg') }}" class="w-12 h-12 rounded-full" alt="Client 1">
                        <div>
                            <h4 class="font-semibold text-brand-gray">Jane Doe</h4>
                            <div class="flex text-yellow-400">
                                <!-- 5 Stars -->
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="flex-none w-80 bg-white p-6 rounded-xl shadow hover:shadow-lg transition snap-center">
                    <p class="text-gray-600 mb-4">"Professional, efficient, and knowledgeable. Our IT systems are now fully optimized."</p>
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/images/testimonials/client2.jpg') }}" class="w-12 h-12 rounded-full" alt="Client 2">
                        <div>
                            <h4 class="font-semibold text-brand-gray">John Smith</h4>
                            <div class="flex text-yellow-400">
                                <!-- 5 Stars -->
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.49 6.91l6.564-.955L10 0l2.946 5.955 6.564.955-4.755 4.635 1.123 6.545z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more testimonials as needed -->
            </div>
        </div>
</section>

<!-- CTA SECTION -->
<section class="py-24 bg-brand-red text-white text-center">
    <h2 class="text-3xl md:text-4xl font-bold">Ready to Optimize Your IT?</h2>
    <p class="mt-4 text-lg md:text-xl max-w-2xl mx-auto">Book a consultation with our expert team today and take your business to the next level.</p>
    <a href="{{ route('contact') }}" class="mt-8 inline-block bg-white text-brand-red px-8 py-3 rounded-md font-medium hover:bg-gray-100 transition">
        Book a Consultation
    </a>
</section>

@endsection
