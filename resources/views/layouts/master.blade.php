<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <nav class="bg-gradient-to-r from-pink-400 to-pink-500 shadow-lg">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <img src="{{ asset('rijcaffe1.png') }}" class="h-24 w-auto" alt="RijCaffe Logo">
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="" class="text-white hover:text-pink-200 transition duration-300 text-sm font-medium">Today's Special</a>
                    <a href="" class="text-white hover:text-pink-200 transition duration-300 text-sm font-medium">Discounted</a>
                    <a href="" class="text-white hover:text-pink-200 transition duration-300 text-sm font-medium">Combo</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mx-auto px-4 py-6">
        @yield('content')
    </div>

</body>
<footer class="bg-pink-600 pt-8 pb-6">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Contact Info -->
            <div class="text-white">
                <h3 class="text-xl font-semibold mb-4">Contact Us</h3>
                <p class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i> Bharatpur-10, Chitwan</p>
                <p class="mb-2"><i class="fas fa-phone mr-2"></i> +977 987654321</p>
                <p class="mb-2"><i class="fas fa-envelope mr-2"></i> info@rijcaffe.com</p>
            </div>

            <!-- Quick Links -->
            <div class="text-white">
                <h3 class="text-xl font-semibold mb-4">Quick Links</h3>
                <ul>
                    <li class="mb-2"><a href="#" class="hover:text-pink-200">About Us</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-pink-200">Menu</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-pink-200">Reservations</a></li>
                    <li class="mb-2"><a href="#" class="hover:text-pink-200">Contact</a></li>
                </ul>
            </div>

            <!-- Map -->
            <div>
                <iframe class="w-full h-48 border-0 rounded-lg"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3450.3122779264418!2d84.4336453!3d27.682689600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb2d933d355d%3A0x5e79bbe09d977ee3!2sSaptagandaki%20Multiple%20Campus!5e1!3m2!1sen!2snp!4v1748700569467!5m2!1sen!2snp"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-pink-500 pt-4">
            <p class="text-center text-white">&copy; 2025 RijCaffe | All Rights Reserved</p>
        </div>
    </div>
</footer>
</html>
