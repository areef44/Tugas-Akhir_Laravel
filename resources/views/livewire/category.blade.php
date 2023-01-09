<div class="flex">
<div class="bg-white h-screen">
    @livewire('adminsidebar')
</div>

<div class="w-full h-screen bg-green-400 mr-10">
<div>
<h1 class="px-5 text-3xl font-bold text-slate-900 ">Halaman Mengelola Kategori</h1>

   

<div class="flex justify-center">
     @if ($statusUpdate)
        <livewire:category-update> </livewire:category-update>
        @else
        <livewire:addcategory> </livewire:addcategory>
        @endif
    
</div>

 

<div class="border-t-2 my-2"></div>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-5">
    
    
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-slate-600 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    Kategori
                </th>
                <th scope="col" class="py-3 px-6">
                    Deskripsi
                </th>
                <th scope="col" class="py-3 px-6 text-center">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6">
                    {{$loop->iteration}}
                </td>
                <td class="py-4 px-6">
                    {{$category->categories}}
                </td>
                <td class="py-4 px-6">
                    {{$category->description}}
                </td>
                <td class="py-4 px-6 text-center">
                    <button wire:click="getCategories({{ $category->id }})" type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Edit</button>
                    <button wire:click.prevent='deleteConfirmation({{ $category->id }})' type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Hapus</button>
                </td>
            </tr>

             @endforeach
        </tbody>
    </table>
</div>

</div>
        
</div>
</div>
