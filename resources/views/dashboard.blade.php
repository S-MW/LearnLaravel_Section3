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

                
                    <h2>Listings</h2>


                    <section class="container mx-auto p-6 font-mono">
                        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                            <div class="w-full overflow-x-auto">
                            @if(count($listings)>0)
                            <table class="w-full">
                                <thead>
                                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                    <th class="px-4 py-3">Name</th>
                                    <th class="px-4 py-3">Date</th>
                                    <th class="px-4 py-3">Action</th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                @foreach($listings as $listing)
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 text-sm border">{{$listing->name}}</td>
                                    <td class="px-4 py-3 text-sm border">{{$listing->created_at}}</td>
                                    <td class="px-4 py-3 text-sm border">
                                        <form action="#">
                                        <a href="Listings\create"> <button class="bg-yellow-600 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded-full right-0">Edit</button> </a>
                                        </form>
                                        <form action="/Listings/{{$listing->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="Listings\create"> <button class="bg-red-600 hover:bg-red-400 text-white font-bold py-2 px-4 rounded-full right-0">Delete</button> </a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @else
                        <p class="bg-red-600">You Don't have any Listings yet !</p>
                    @endif
                            </div>
                        </div>
                        </section>

            </div>
        </div>
    </div>
    
</x-app-layout>
