<x-app>

    <main class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-5 justify-items-center">
        <!-- Card 1 -->
        @foreach($salads as $salad)
        <div class="w-[300px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <div class="w-full h-48 overflow-hidden rounded-t-lg">
                    <img class="w-full h-full object-cover" src="{{ asset('storage/'.$salad->photo) }}" alt="Product Image" />
                </div>
            </a>
            <div class="p-5 flex flex-col items-center">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">
                        {{$salad->titre}}
                    </h5>
                </a>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {{$salad->prix}}MAD</p>
                <a href="{{route('salad.show',$salad)}}" class="inline-flex items-center px-3 py-2 w-full flex justify-center text-base font-medium text-center text-white bg-orange-500 rounded-lg hover:bg-[#4CAF50] focus:ring-4 focus:ring-blue-300">
                    Composez votre SaladBox
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
    </main>
</x-app>