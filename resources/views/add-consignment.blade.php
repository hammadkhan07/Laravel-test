<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Consignment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add new consignment</h2>
      <form method="POST" action="{{ route('create.cons') }}">
        @csrf
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="w-full">
                  <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company</label>
                  <input type="text" name="company" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Company name here....">
                   @error('company')
                   <span class="text-red-500">{{ $message }}</span>
                   @enderror
                </div>
              <div class="w-full">
                  <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                  <input type="text" name="contact" id="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="e.g. 923022123123">
                  @error('contact')
                   <span class="text-red-500">{{ $message }}</span>
                   @enderror
                </div>
              <div class="w-full">
                  <label for="address_line_1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address Line 1</label>
                  <input type="text" name="address_line_1" id="address_line_1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                  @error('address_line_1')
                   <span class="text-red-500">{{ $message }}</span>
                   @enderror
                </div>
              <div class="w-full">
                  <label for="address_line_2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address Line 2</label>
                  <input type="text" name="address_line_2" id="address_line_2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
              </div>
              <div class="sm:col-span-2">
                  <label for="address_line_3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address Line 3</label>
                  <input type="text" name="address_line_3" id="address_line_3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
              </div>
              <div class="w-full">
                  <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">City</label>
                  <input type="text" name="city" id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="city">
                  @error('city')
                   <span class="text-red-500">{{ $message }}</span>
                   @enderror
                </div>
              <div class="w-full">
                  <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Country</label>
                  <input type="text" name="country" id="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="country">
                  @error('country')
                   <span class="text-red-500">{{ $message }}</span>
                   @enderror
                </div>
          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg">
              SUBMIT
          </button>

          <a href="{{ route('dashboard') }}" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-gray-700 rounded-lg">
              BACK
          </a>
      </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
