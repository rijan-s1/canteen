@extends('layouts.master')
@section('content')
    <div class="flex px-20 py-20 gap-8">
        <div class="w-3/4 grid grid-cols-3 gap-4 ">
            <div class="bg-blue-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75 " onclick="alert('Dish 1')">
              <img src="{{asset('samosa.jpeg')}}" alt="dish1" class="h-24 rounded-lg mx-auto mb-2">
              <h4 class="text-center font-semibold text-2xl">Samosa</h4>
              <p class="text-red-500 text-2xl font-bold  text-center">Rs 20</p>
            </div>

            <div class="bg-pink-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75" onclick="alert('Dish 2')">
              <img src="https://png.pngtree.com/png-clipart/20250206/original/pngtree-traditional-newari-momos-on-white-background-png-image_20372781.png" alt="dish2" class="h-24 rounded-lg mx-auto mb-2">
              <h4 class="text-center font-semibold text-2xl">Momo</h4>
              <p class="text-red-500 text-2xl font-bold  text-center">Rs 80</p>
            </div>

            <div class="bg-green-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75" onclick="alert('Dish 3')">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9yItYpWPG0kNgGG7IjPUC8d-xlUE8FmOp8Q&s" alt="dish3" class="h-24 rounded-lg mx-auto mb-2">
              <h4 class="text-center font-semibold text-2xl">Chowmein</h4>
              <p class="text-red-500 font-bold  text-2xl text-center">Rs 70</p>
            </div>

            <div class="bg-yellow-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75" onclick="alert('Dish 4')">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9OlvvfHE67HHqwfSB9cf9w1ryeuxcwWowYA&s" alt="dish4" class="h-24 rounded-lg mx-auto mb-2">
              <h4 class="text-center font-semibold text-2xl">Burger</h4>
              <p class="text-red-500 text-2xl font-bold  text-center">Rs 100</p>
            </div>

            <div class="bg-purple-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75" onclick="alert('Dish 5')">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmlGdSeYCmAf5dCDYW4cZC5qGD5tAxxnkpKw&s" alt="dish5" class="h-24 rounded-lg mx-auto mb-2">
              <h4 class="text-center font-semibold text-2xl">Pizza</h4>
              <p class="text-red-500 text-2xl font-bold  text-center">Rs 150</p>
            </div>

            <div class="bg-orange-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75" onclick="alert('Dish 6')">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSBt5RdbNGN2PopQ1ox14cVQI7tiXglqrAIA&s" alt="dish6" class="h-24 rounded-lg mx-auto mb-2">
              <h4 class="text-center font-semibold text-2xl">Fries</h4>
              <p class="text-red-500 text-2xl font-bold  text-center">Rs 50</p>
            </div>
          </div>

        <div class="w-1/4 ml-8"><div class="bg-red-200 px-4 py-2 text-center font-semibold text-2xl text-blue-500 shadow-md rounded-md">My Cart
            </div>
        <hr class="border-red-500 mt-2 w-full border-2 border-dashed">
        <div class="flex items-center justify-between border-b py-2 px-4">
            <!-- Dish Name -->
            <p class=" font-semibold">Samosa</p>

            <!-- Quantity Controls -->
            <div class=" flex items-center space-x-2">
              <button onclick="decrement()" class="bg-gray-200 p-2 w-8 rounded">-</button>
              <input id="quantity" type="number" value="1" min="1" readonly
                     class="border border-gray-300 w-12 text-center rounded" />
              <button onclick="increment()" class="bg-gray-200 p-2 w-8 rounded">+</button>
            </div>

            <!-- Price -->
            <p class="  text-green-600 font-bold text-center">Rs 20</p>

            <!-- Delete Icon -->
            <button onclick="removeItem()" class=" text-right text-red-600 text-xl">
              Del
            </button>
          </div>
          <hr class="border-red-500 mt-2 w-full border-2 border-dashed">
          <div class="font-bold text-2xl text text-green-500 mt-4">Total: <input type="text" class="readonly" name="total" value=135> </div>
          <button class="font-bold text-2xl text text-green-500 mt-4">Pay With E-sewa  </button>


    </div>
    </div>
    <script>

        function increment(){
            let quantity = document.getElementById('quantity');
                quantity.value = parseInt(quantity.value) + 1;
        }
        function decrement(){
            let quantity = document.getElementById('quantity');
            if(quantity.value > 1){
                quantity.value = parseInt(quantity.value) - 1;
            }
        }
    </script>

    @endsection
