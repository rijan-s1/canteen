@extends('layouts.master')
@section('content')
    <script src="https://unpkg.com/lucide@latest"></script>

    <div class="flex px-20 py-20 gap-8">
        <div class="w-3/4 grid grid-cols-3 gap-4 ">
            <div class="bg-blue-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75"
                onclick="addToOrder('Samosa', 20)">
                <img src="{{ asset('samosa.jpeg') }}" alt="dish1" class="h-24 rounded-lg mx-auto mb-2">
                <h4 class="text-center font-semibold text-2xl">Samosa</h4>
                <p class="text-red-500 text-2xl font-bold  text-center">Rs 20</p>
            </div>

            <div class="bg-pink-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75"
                onclick="addToOrder('Momo', 80)">
                <img src="https://png.pngtree.com/png-clipart/20250206/original/pngtree-traditional-newari-momos-on-white-background-png-image_20372781.png"
                    alt="dish2" class="h-24 rounded-lg mx-auto mb-2">
                <h4 class="text-center font-semibold text-2xl">Momo</h4>
                <p class="text-red-500 text-2xl font-bold  text-center">Rs 80</p>
            </div>

            <div class="bg-green-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75"
                onclick="addToOrder('Chowmein', 70)">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9yItYpWPG0kNgGG7IjPUC8d-xlUE8FmOp8Q&s"
                    alt="dish3" class="h-24 rounded-lg mx-auto mb-2">
                <h4 class="text-center font-semibold text-2xl">Chowmein</h4>
                <p class="text-red-500 font-bold  text-2xl text-center">Rs 70</p>
            </div>

            <div class="bg-yellow-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75"
                onclick="addToOrder('Burger', 100)">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9OlvvfHE67HHqwfSB9cf9w1ryeuxcwWowYA&s"
                    alt="dish4" class="h-24 rounded-lg mx-auto mb-2">
                <h4 class="text-center font-semibold text-2xl">Burger</h4>
                <p class="text-red-500 text-2xl font-bold  text-center">Rs 100</p>
            </div>

            <div class="bg-purple-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75"
                onclick="addToOrder('Pizza', 150)">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmlGdSeYCmAf5dCDYW4cZC5qGD5tAxxnkpKw&s"
                    alt="dish5" class="h-24 rounded-lg mx-auto mb-2">
                <h4 class="text-center font-semibold text-2xl">Pizza</h4>
                <p class="text-red-500 text-2xl font-bold  text-center">Rs 150</p>
            </div>

            <div class="bg-orange-200 h-48 p-4 rounded-lg shadow-md cursor-pointer hover:bg-opacity-75"
                onclick="addToOrder('Fries', 50)">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSBt5RdbNGN2PopQ1ox14cVQI7tiXglqrAIA&s"
                    alt="dish6" class="h-24 rounded-lg mx-auto mb-2">
                <h4 class="text-center font-semibold text-2xl">Fries</h4>
                <p class="text-red-500 text-2xl font-bold  text-center">Rs 50</p>
            </div>
        </div>

        <div class="w-1/4 ml-8">
            <div class="bg-red-200 px-4 py-2 text-center font-semibold text-2xl text-blue-500 shadow-md rounded-md">My Order
            </div>
            <hr class="border-red-500 mt-2 w-full border-2 border-dashed">

            <!-- ✅ Dynamic Order List Goes Here -->
            <div id="order-list"></div>

            <hr class="border-red-500 mt-2 w-full border-2 border-dashed">
            <div class="font-bold text-2xl text text-green-500 mt-4 flex">Total: <h3 id="total" class="ml-4">0</h3>
            </div>

            <form method="POST" action="{{ route('esewa.pay') }}">
                @csrf
                <input type="hidden" name="total" id="hiddenTotal">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-4 w-full">Proceed to Pay</button>
            </form>

        </div>
    </div>



    <script>
        let orders = {};

        function addToOrder(name, price) {
            if (!orders[name]) {
                orders[name] = {
                    price: price,
                    qty: 1
                };
            } else {
                orders[name].qty++;
            }
            renderOrderList();
        }

        function incrementItem(name) {
            orders[name].qty++;
            renderOrderList();
        }

        function decrementItem(name) {
            if (orders[name].qty > 1) {
                orders[name].qty--;
            } else {
                delete orders[name];
            }
            renderOrderList();
        }

        function removeItem(name) {
            delete orders[name];
            renderOrderList();
        }

        function renderOrderList() {
            let orderList = document.getElementById('order-list');
            orderList.innerHTML = '';
            let total = 0;

            for (let name in orders) {
                let item = orders[name];
                total += item.price * item.qty;

                orderList.innerHTML += `
            <div class="flex items-center justify-between border-b py-2 px-4">
                <p class="font-semibold">${name}</p>
                <div class="flex items-center space-x-2">
                    <button onclick="decrementItem('${name}')" class="bg-gray-200 p-2 w-8 rounded">-</button>
                    <input type="number" value="${item.qty}" min="1" readonly class="border border-gray-300 w-16 text-center rounded" />
                    <button onclick="incrementItem('${name}')" class="bg-gray-200 p-2 w-8 rounded">+</button>
                </div>
                <p class="text-green-600 font-bold text-center">${item.price * item.qty}</p>
                <button onclick="removeItem('${name}')" class="text-red-600" aria-label="Delete">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hover:text-red-800 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 6h18M9 6V4a1 1 0 011-1h4a1 1 0 011 1v2m2 0v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6h14z" />
    </svg>
</button>

            </div>
            `;

                document.getElementById('total').innerText = total;

                // ✅ input for eSewa
                document.getElementById('hiddenTotal').value = total;
            }

           
        }
    </script>
@endsection
