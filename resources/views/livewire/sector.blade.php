<div class="flex">
<div class="bg-white h-screen">
    @livewire('adminsidebar')
</div>

<div class="w-full h-screen bg-green-400 mr-10">
<div>
<h1 class="pb-5 px-5 text-3xl font-bold text-slate-900 ">Halaman Mengelola Sektor</h1>

<div class="flex justify-center">
        <livewire:addsector> </livewire:addsector>
</div>

<div class="border-t-2 border-blue-50 py-2">

</div>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-5">
    
    
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-white uppercase bg-slate-900 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    Polisi Sektor
                </th>
                <th scope="col" class="py-3 px-6">
                    Alamat
                </th>
                <th scope="col" class="py-3 px-6">
                    Kecamatan
                </th>
                <th scope="col" class="py-3 px-6 text-center">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($sectors as $sector)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                <td class="py-4 px-6">
                    {{ $loop->iteration }}
                </td>
                <td class="py-4 px-6">
                    {{ $sector->sector_name }}
                </td>
                <td class="py-4 px-6">
                    {{ $sector->address }}
                </td>
                <td class="py-4 px-6">
                    {{ $sector->district }}
                <td class="py-4 px-6 text-center">
                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button>
                    <button wire:click.prevent='deleteConfirmation({{ $sector->id }})' type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
        
</div>
</div>