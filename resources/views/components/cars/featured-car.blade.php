<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ $car['image'] }}" alt="{{ $car['name'] }}" class="w-full h-48 object-cover">
    <div class="p-6">
        <h3 class="text-xl font-semibold mb-2">{{ $car['name'] }}</h3>
        <p class="text-gray-600 mb-4">${{ number_format($car['price']) }}</p>
        <div class="flex justify-between text-sm text-gray-500">
            <span>{{ $car['year'] }}</span>
            <span>{{ $car['mileage'] }}km</span>
            <span>{{ $car['transmission'] }}</span>
        </div>
        <a href="#" class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">
            View Details
        </a>
    </div>
</div>