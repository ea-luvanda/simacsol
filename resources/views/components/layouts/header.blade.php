<!-- Navigation -->
<nav class="sticky top-0 z-50 bg-white shadow-none">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                <img src="{{ asset('img/logores/solextended.png') }}" alt="SimacSol Logo" class="h-20 w-auto p-2">
                </div>
            </div>
            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ asset('/#home') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Nyumbani</a>
                <a href="{{ asset('/#kuhusu') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Kuhusu</a>
                <a href="{{ asset('/#mtaala') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Mtaala</a>
                <a href="{{ asset('/#mawasiliano') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Mawasiliano</a>
            </div>
            <div class="flex items-center">
                <div class="space-x-4">
                    <a href="{{ route('jiunge') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Jiunge Sasa</a>
                </div>
            </div>
        </div>
    </div>
</nav>