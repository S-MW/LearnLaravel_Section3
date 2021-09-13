<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    @include('messages.success')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b-2 border-gray-200">
                    <a href="Listings\create"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full right-0">Create listing</button> </a>
                </div>
                <div style=" margin: auto; width: 50%; border: 3px solid black; padding: 10px;">
                    <h2>Listings</h2>
                    <table style="border: 1px solid blue; ">
                    @if(count($listings)>0)
                        <tr>
                            <th>Nmae</th>
                        </tr>
                        @foreach($listings as $listing)
                        <tr>
                            <td>{{$listing->name}}</td>
                        </tr>
                        @endforeach
                        @else
                        <p class="bg-red-600">You Don't have any Listings yet !</p>
                    @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
