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
    <nav class="bg-pink-400 shadow px-12 py-4 flex justify-between items-center text-blue-800 shadow-lg rounded-b-md "><img src="{{ asset('rijcaffe1.png') }}" class="h-20 " alt="Logo">
    <div class="flex gap-4">
        <a href="">Today's Special</a>
    <a href="">Discounted</a>
<a href="">Combo</a></div></nav>
    <div class="mx-4 my-4">@yield('content')</div>
    <footer class="bg-pink-600 mt-11 "><p class="mx-4 text-center text-white">&copy; 2025 | RijCaffe | All Rights Reserved</p>
       <div class="flex justify-between mx-8  m-4"> <iframe
  class="w-72 h-48 border-0"
  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3450.3122779264418!2d84.4336453!3d27.682689600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994fb2d933d355d%3A0x5e79bbe09d977ee3!2sSaptagandaki%20Multiple%20Campus!5e1!3m2!1sen!2snp!4v1748700569467!5m2!1sen!2snp"
  allowfullscreen=""
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade">
</iframe>
</div>
</footer>
</body>
</html>
