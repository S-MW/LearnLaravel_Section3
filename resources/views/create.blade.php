<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

        @include('messages.error')
    <div class="py-12 ">
    <a href="/dashboard"> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full inset-y-0 right-0">Back</button> </a>
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 " method="POST" action="/Listings">
                    @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">name</label>
                    <input class="shadow appearance-none border rounded w-1/2 l py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="name">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">address</label>
                    <input class="shadow appearance-none border rounded w-1/2 l py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="address" id="address" type="text" placeholder="address">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="website">website</label>
                    <input class="shadow appearance-none border rounded w-1/2  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  name="website" id="website" type="text" placeholder="website">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">email</label>
                    <input class="shadow appearance-none border rounded w-1/2  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  name="email" id="email" type="text" placeholder="email">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bio">bio</label>
                    <input class="shadow appearance-none border rounded w-1/2  py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  name="bio" id="bio" type="text" placeholder="bio">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">phone</label>
                    <input class="shadow appearance-none border rounded w-1/2 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="phone"  id="phone" type="number" placeholder="phone">
                </div>

                <button class="w-1/2  bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ">Submit</button> 
                </form>              
    </div>
    
</x-app-layout>
