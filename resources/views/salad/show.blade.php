<x-app>
    <main class="flex flex-col items-center mt-5 p-4 w-full">
        <!-- Salad Details Card -->
        <div class="flex flex-col sm:flex-row items-center bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 
                    dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 w-full max-w-md sm:max-w-xl md:max-w-2xl">

            <!-- Salad Image -->
            <img class="object-cover w-full sm:w-48 h-40 sm:h-56 rounded-t-lg sm:rounded-none sm:rounded-s-lg"
                src="{{ asset('/storage/' . $salad->photo) }}" alt="Salad Image">

            <!-- Salad Details -->
            <div class="flex flex-col justify-between p-4 w-full">
                <h5 class="mb-2 text-xl sm:text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    {{ $salad->titre }}
                </h5>
                <p class="mb-3 text-lg font-semibold text-gray-700 dark:text-gray-400">
                    {{ $salad->prix }} MAD
                </p>
            </div>
        </div>

        <!-- Ingredients List -->
        <ul class="grid w-full gap-4 mt-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach($salad->ingredients as $ingredient)
            <li>
                <input type="checkbox" id="ingredient{{$ingredient->id}}" value="" class="hidden peer">
                <label for="ingredient{{$ingredient->id}}" class="flex items-center justify-between w-full p-4 
                            text-gray-500 bg-white border-2 border-gray-200 rounded-lg shadow-md 
                            cursor-pointer hover:bg-gray-50 hover:text-gray-600 
                            dark:hover:text-gray-300 dark:border-gray-700 
                            peer-checked:border-blue-600 dark:peer-checked:border-blue-600 
                            dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <!-- Icon -->
                    <svg class="w-7 h-7 text-green-500 mr-3" fill="currentColor" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4z" />
                    </svg>

                    <!-- Ingredient Name -->
                    <div class="text-lg font-semibold">{{$ingredient->titre}}</div>
                </label>
            </li>
            @endforeach
            @foreach($salad->ingredients as $ingredient)
            <li>
                <input type="checkbox" id="ingredient{{$ingredient->id}}" value="" class="hidden peer">
                <label for="ingredient{{$ingredient->id}}" class="flex items-center justify-between w-full p-4 
                            text-gray-500 bg-white border-2 border-gray-200 rounded-lg shadow-md 
                            cursor-pointer hover:bg-gray-50 hover:text-gray-600 
                            dark:hover:text-gray-300 dark:border-gray-700 
                            peer-checked:border-blue-600 dark:peer-checked:border-blue-600 
                            dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <!-- Icon -->
                    <svg class="w-7 h-7 text-green-500 mr-3" fill="currentColor" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4z" />
                    </svg>

                    <!-- Ingredient Name -->
                    <div class="text-lg font-semibold">{{$ingredient->titre}}</div>
                </label>
            </li>
            @endforeach
            @foreach($salad->ingredients as $ingredient)
            <li>
                <input type="checkbox" id="ingredient{{$ingredient->id}}" value="" class="hidden peer">
                <label for="ingredient{{$ingredient->id}}" class="flex items-center justify-between w-full p-4 
                            text-gray-500 bg-white border-2 border-gray-200 rounded-lg shadow-md 
                            cursor-pointer hover:bg-gray-50 hover:text-gray-600 
                            dark:hover:text-gray-300 dark:border-gray-700 
                            peer-checked:border-blue-600 dark:peer-checked:border-blue-600 
                            dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <!-- Icon -->
                    <svg class="w-7 h-7 text-green-500 mr-3" fill="currentColor" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4z" />
                    </svg>

                    <!-- Ingredient Name -->
                    <div class="text-lg font-semibold">{{$ingredient->titre}}</div>
                </label>
            </li>
            @endforeach
            @foreach($salad->ingredients as $ingredient)
            <li>
                <input type="checkbox" id="ingredient{{$ingredient->id}}" value="" class="hidden peer">
                <label for="ingredient{{$ingredient->id}}" class="flex items-center justify-between w-full p-4 
                            text-gray-500 bg-white border-2 border-gray-200 rounded-lg shadow-md 
                            cursor-pointer hover:bg-gray-50 hover:text-gray-600 
                            dark:hover:text-gray-300 dark:border-gray-700 
                            peer-checked:border-blue-600 dark:peer-checked:border-blue-600 
                            dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <!-- Icon -->
                    <svg class="w-7 h-7 text-green-500 mr-3" fill="currentColor" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4z" />
                    </svg>

                    <!-- Ingredient Name -->
                    <div class="text-lg font-semibold">{{$ingredient->titre}}</div>
                </label>
            </li>
            @endforeach
            @foreach($salad->ingredients as $ingredient)
            <li>
                <input type="checkbox" id="ingredient{{$ingredient->id}}" value="" class="hidden peer">
                <label for="ingredient{{$ingredient->id}}" class="flex items-center justify-between w-full p-4 
                            text-gray-500 bg-white border-2 border-gray-200 rounded-lg shadow-md 
                            cursor-pointer hover:bg-gray-50 hover:text-gray-600 
                            dark:hover:text-gray-300 dark:border-gray-700 
                            peer-checked:border-blue-600 dark:peer-checked:border-blue-600 
                            dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">

                    <!-- Icon -->
                    <svg class="w-7 h-7 text-green-500 mr-3" fill="currentColor" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4z" />
                    </svg>

                    <!-- Ingredient Name -->
                    <div class="text-lg font-semibold">{{$ingredient->titre}}</div>
                </label>
            </li>
            @endforeach
        </ul>
    </main>
</x-app>