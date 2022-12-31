
<div class="flex">
<div class="bg-white h-screen">
    @livewire('sidebar')
</div>

<div class="w-full h-screen bg-red-400 mr-10">
<div>
<h1 class="py-8 px-5 text-3xl font-bold text-slate-900 ">Halaman Mengelola Laporan</h1>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-[10px] text-gray-50 uppercase bg-slate-700 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-4">
                    No
                </th>
                <th scope="col" class="py-3 px-4">
                    Nama
                </th>
                <th scope="col" class="py-3 px-4">
                    Kategori
                </th>
                <th scope="col" class="py-3 px-4">
                    Polisi Sektor
                </th>
                <th scope="col" class="py-3 px-4">
                    Ciri-Ciri
                </th>
                <th scope="col" class="py-3 px-4">
                    Jumlah
                </th>
                <th scope="col" class="py-3 px-4">
                    Nilai
                </th>
                <th scope="col" class="py-3 px-4">
                    Tanggal Lapor
                </th>
                <th scope="col" class="py-3 px-4">
                    Tanggal Hilang
                </th>
                <th scope="col" class="py-3 px-4">
                    Lokasi
                </th>
                <th scope="col" class="py-3 px-4">
                    Kronologi
                </th>
                 <th scope="col" class="py-3 px-4">
                    Gambar
                </th>
                <th scope="col" class=" text-center py-3 px-4">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($reports as $report)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                <td class="py-4 px-4">
                    {{ $loop->iteration++}}
                </td>
                <td class="py-4 px-4">
                    {{ $report->item }}
                </td>
                <td class="py-4 px-4">
                    {{ $report->categories->categories }}
                </td>
                <td class="py-4 px-4">
                    {{ $report->polices->sectors->sector_name }}
                </td>
                   <td class="py-4 px-4">
                    {{ $report->identity }}
                </td>
                <td class="py-4 px-4">
                    {{ $report->quantity }}
                </td>
                <td class="py-4 px-4">
                    {{ $report->value }}
                </td>
                <td class="py-4 px-4">
                    {{ $report->report_date }}
                </td>
                 <td class="py-4 px-4">
                    {{ $report->loss_date }}
                </td>
                <td class="py-4 px-4">
                    {{ $report->lost_location }}
                </td>
                <td class="py-4 px-4">
                    {{ $report->story }}
                </td>
                   <td class="py-4 px-4">
                    <img wire:model="picture" src={{Storage::url($report->picture)}} class="rounded w-20 h-20">
                </td>
                <td class="text-center py-4 px-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    <button wire:click.prevent='deleteConfirmation({{ $report->id }})' type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Hapus</button>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

</div>
        
</div>
</div>

