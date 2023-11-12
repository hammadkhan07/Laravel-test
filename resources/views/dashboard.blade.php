<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if(Session::has('success'))
            {{ Session::get('success') }}
            @elseif(Session::has('error'))
            {{ Session::get('error') }}
            @endif
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
           

<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">

<a href="{{ route('add.consignment') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"><i class="fa fa-pencil"></i> ADD CONSIGNMENT</a>
   
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-4">
        <thead class="text-xs text-white uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Company
                </th>
                <th scope="col" class="px-6 py-3">
                    Contact
                </th>
                <th scope="col" class="px-6 py-3">
                    Address 1
                </th>
                <th scope="col" class="px-6 py-3">
                    Address 2
                </th>
                <th scope="col" class="px-6 py-3">
                    Address 3
                </th>
                <th scope="col" class="px-6 py-3">
                    City
                </th>
                <th scope="col" class="px-6 py-3">
                    Country
                </th>
                <th scope="col" class="px-6 py-3">
                    Export PDF
                </th>
                <th scope="col" class="px-6 py-3">
                    PDF Link
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $consData)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">
                   {{ $consData->company }}
                </td>
                <td class="px-6 py-4">
                {{ $consData->contact }}
                </td>
                <td class="px-6 py-4">
                {{ $consData->address_line_1 }}
                </td>
                <td class="px-6 py-4">
                    {{ $consData->address_line_2 }}
                </td>
                <td class="px-6 py-4">
                {{ $consData->address_line_3 }}
                </td>
                <td class="px-6 py-4">
                {{ $consData->city }}
                </td>
                <td class="px-6 py-4">
                {{ $consData->country }}
                </td>
                <td class="px-6 py-4">
                <a href="{{ route('make_pdf', ['id' => $consData->id ]) }}" class="text-blue-600 bg-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm"><i class="fa fa-file-pdf-o"></i></a>
                </td>
                <td class="px-6 py-4">
                    @if($consData->file_path != '')
                    <a class="text-blue-500 underline" target="_blank" href="{{ asset('storage/'.$consData->file_path) }}">PDF_Url</a>
                    @else
                    Export PDF for link
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

            </div>
        </div>
    </div>
</x-app-layout>
