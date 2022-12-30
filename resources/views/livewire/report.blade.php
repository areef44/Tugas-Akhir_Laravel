
<div class="flex">
<div class="bg-white h-screen">
    @livewire('sidebar')
</div>

<div class="w-full h-screen bg-red-400 mr-10">
<div>
<h1 class="py-8 px-5 text-3xl font-bold text-slate-900 ">Halaman Mengelola Laporan</h1>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-50 uppercase bg-slate-700 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama Barang
                </th>
                <th scope="col" class="py-3 px-6">
                    Kategori Barang
                </th>
                <th scope="col" class="py-3 px-6">
                    Polisi Sektor
                </th>
                <th scope="col" class="py-3 px-6">
                    Identitas Barang
                </th>
                <th scope="col" class="py-3 px-6">
                    Jumlah Barang
                </th>
                <th scope="col" class="py-3 px-6">
                    Nilai Barang
                </th>
                <th scope="col" class="py-3 px-6">
                    Tanggal Lapor
                </th>
                <th scope="col" class="py-3 px-6">
                    Tanggal Kehilangan
                </th>
                <th scope="col" class="py-3 px-6">
                    Lokasi Kehilangan
                </th>
                <th scope="col" class="py-3 px-6">
                    Kronologi Kehilangan
                </th>
                 <th scope="col" class="py-3 px-6">
                    Gambar
                </th>
                <th scope="col" class="py-3 px-6">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($reports as $report)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                <td class="py-4 px-6">
                    {{ $loop->iteration++}}
                </td>
                <td class="py-4 px-6">
                    {{ $report->item }}
                </td>
                <td class="py-4 px-6">
                    {{ $report->categories->categories }}
                </td>
                <td class="py-4 px-6">
                    {{ $report->polices->sectors->sector_name }}
                </td>
                   <td class="py-4 px-6">
                    {{ $report->identity }}
                </td>
                <td class="py-4 px-6">
                    {{ $report->quantity }}
                </td>
                <td class="py-4 px-6">
                    {{ $report->value }}
                </td>
                <td class="py-4 px-6">
                    {{ $report->report_date }}
                </td>
                 <td class="py-4 px-6">
                    {{ $report->loss_date }}
                </td>
                <td class="py-4 px-6">
                    {{ $report->lost_location }}
                </td>
                <td class="py-4 px-6">
                    {{ $report->story }}
                </td>
                   <td class="py-4 px-6">
                    <img wire:model="picture" src={{Storage::url($report->picture)}} class="rounded w-20 h-20">
                </td>
                <td class="py-4 px-6">
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

