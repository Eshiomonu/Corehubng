<footer class="bg-brand-gray text-gray-300">
    <div class="max-w-7xl mx-auto px-6 py-16">

        <!-- Footer Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- Brand -->
            <div>
                <img
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="Company Logo"
                    class="h-10 mb-4"
                >
                <p class="text-sm leading-relaxed">
                    We build modern, scalable digital solutions that help
                    businesses grow and stand out.
                </p>
            </div>

            <!-- Company -->
            <div>
                <h4 class="text-white font-semibold mb-4">Company</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="/about" class="hover:text-brand-red transition">About Us</a></li>
                    <li><a href="/blog" class="hover:text-brand-red transition">Blog</a></li>
                    <li><a href="/contact" class="hover:text-brand-red transition">Contact</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div>
                <h4 class="text-white font-semibold mb-4">Resources</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="hover:text-brand-red transition">Help Center</a></li>
                    <li><a href="#" class="hover:text-brand-red transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-brand-red transition">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="text-white font-semibold mb-4">Contact</h4>
                <p class="text-sm">Email: info@mywebsite.com</p>
                <p class="text-sm mt-2">Phone: +234 800 000 0000</p>

                <div class="flex gap-4 mt-4 text-sm">
                    <a href="#" class="hover:text-brand-red transition">Facebook</a>
                    <a href="#" class="hover:text-brand-red transition">Twitter</a>
                    <a href="#" class="hover:text-brand-red transition">LinkedIn</a>
                </div>
            </div>

        </div>

        <!-- Divider -->
        <div class="border-t border-gray-700 mt-12 pt-6 text-center text-sm text-gray-400">
            © {{ date('Y') }} MyCompany. All rights reserved.
        </div>

    </div>
</footer>
