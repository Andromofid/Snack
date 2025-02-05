<x-app>
    <div class="max-w-sm mx-auto">
        <!-- Display Success Message -->
        @if (session('success'))
        <div class="p-4 mb-4 text-green-700 bg-green-100 border border-green-400 rounded-lg">
            {{ session('success') }}
        </div>
        @endif

        <!-- Display Validation Errors -->
        @if ($errors->any())
        <div class="p-4 mb-4 text-red-700 bg-red-100 border border-red-400 rounded-lg">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form -->
        <form class="max-w-sm mx-auto" action="{{ route('adminSalad.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <!-- Title Input -->
            <div class="mb-5">
                <label for="titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                <input type="text" name="titre" id="titre" value="{{ old('titre') }}"
                    class="bg-gray-50 border @error('titre') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required />
                @error('titre')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Price Input -->
            <div class="mb-5">
                <label for="prix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prix</label>
                <input type="number" name="prix" id="prix" value="{{ old('prix') }}"
                    class="bg-gray-50 border @error('prix') border-red-500 @else border-gray-300 @enderror text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    required />
                @error('prix')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- File Upload -->
            <div class="flex flex-col mt-5">
                <label class="mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                <input class="block w-full text-sm text-gray-900 border @error('photo') border-red-500 @else border-gray-300 @enderror rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="file_input" type="file" name="photo">
                @error('photo')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="mt-4 w-full md:w-auto inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-orange-500 rounded-lg hover:bg-green-600 focus:ring-4 focus:ring-blue-300">
                Ajouter
            </button>
        </form>
    </div>
</x-app> 