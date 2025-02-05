<x-app>
    <header class="relative text-center bg-white pb-5">
        <div class="relative z-10">
            <img src="{{ asset('logo.jpg') }}" alt="" class="m-auto w-[200px]">
            <h1 class="mb-4 text-xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl">
                Bienvenue dans votre SaladBox
            </h1>
            <p class="mb-6 text-xlg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                Choisissez vos ingrédients, ajoutez ce que vous aimez, et laissez de côté ce que vous n’aimez pas !
            </p>

            <!-- Language Selector -->
            <!-- <div class="mb-4">
                <form action="{{ route('language.switch') }}" method="POST">
                    @csrf
                    <select name="language" onchange="this.form.submit()" class="border rounded-md p-2">
                        <option value="en" {{ session('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="fr" {{ session('locale') == 'fr' ? 'selected' : '' }}>Français</option>
                        <option value="ar" {{ session('locale') == 'ar' ? 'selected' : '' }}>العربية</option>
                    </select>
                </form>
            </div> -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 p-4">
                <!-- Image -->
                <img src="{{ asset('table.png') }}" alt="Table" class="w-[150px] ]">

                <!-- Form -->
                <form action="{{ route('salad.commancer') }}" method="post" class="w-full max-w-sm md:w-auto bg-white p-4 rounded-lg shadow-lg">
                    @csrf
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Sélectionnez le numéro de table :
                    </label>
                    <select id="table" name="table" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>

                    <!-- Button -->
                    <button type="submit" class="mt-4 w-full md:w-auto inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-orange-500 rounded-lg hover:bg-green-600 focus:ring-4 focus:ring-blue-300">
                        Commancer
                        <svg class="w-4 h-4 ml-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </form>
            </div>

        </div>
    </header>
</x-app>