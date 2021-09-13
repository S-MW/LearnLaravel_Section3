<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <div style=" margin: auto; width: 50%; border: 3px solid black; padding: 10px;">
                    <h1>Listings</h1>
                    <table style="border: 1px solid blue; ">
                        <tr>
                            <th>Nmae</th>
                        </tr>
                        @foreach($listings as $listing)
                        <tr>
                            <td>{{$listing->name}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
