<div class="flex">
<div class="bg-white h-screen">
    @livewire('policesidebar')
</div>

<div class="w-full h-screen bg-blue-500 mr-10">
<div>
<h1 class="py-8 px-5 text-3xl font-bold text-slate-900 ">Daftar Laporan Yang Belum Divalidasi</h1>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-50 uppercase bg-slate-700 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-2">
                    No
                </th>
                <th scope="col" class="py-3 px-2">
                    Barang
                </th>
                  <th scope="col" class="py-3 px-2">
                    Pelapor
                </th>
                <th scope="col" class="py-3 px-2">
                    Kategori
                </th>
                <th scope="col" class="py-3 px-2">
                    Polsek
                </th>
                <th scope="col" class="py-3 px-2">
                    Identitas
                </th>
                <th scope="col" class="py-3 px-2">
                    Jumlah
                </th>
                <th scope="col" class="py-3 px-2">
                    Nilai
                </th>
                <th scope="col" class="py-3 px-2">
                    Tanggal Lapor
                </th>
                <th scope="col" class="py-3 px-2">
                    Tanggal Hilang
                </th>
                <th scope="col" class="py-3 px-2">
                    Lokasi
                </th>
                <th scope="col" class="py-3 px-2">
                    Kronologi
                </th>
                 <th scope="col" class="py-3 px-2">
                    Gambar
                </th>
                  <th scope="col" class="py-3 px-2">
                    Status
                </th>
                <th scope="col" class="py-3 px-2">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-2">
                    {{ $loop->iteration }}
                </td>
                <td class="py-4 px-2">
                    {{ $report->item }}
                </td>
                <td class="py-4 px-2">
                    {{ $report->members->name}}
                </td>
                <td class="py-4 px-2">
                    {{ $report->categories->categories}}
                </td>
                   <td class="py-4 px-2">
                    {{ $report->polices->sectors->sector_name}}
                </td>
                <td class="py-4 px-2">
                    {{ $report->identity }}
                </td>
                <td class="py-4 px-2">
                    {{ $report->quantity }}
                </td>
                <td class="py-4 px-2">
                    {{ $report->value }}
                </td>
                 <td class="py-4 px-2">
                    {{ $report->report_date }}
                </td>
                <td class="py-4 px-2">
                    {{ $report->loss_date }}
                </td>
                <td class="py-4 px-2">
                    {{ $report->lost_location }}
                </td>
                <td class="py-4 px-2">
                    {{ $report->story }}
                </td>
                <td class="py-4 px-2">
                    <img wire:model="picture" src={{Storage::url($report->picture)}} class="rounded w-20 h-20">
                </td>
                <td class="py-4 px-2">
                    {{ $report['isValidated'] ?  'Sudah Divalidasi' : 'Belum Divalidasi' ; }}
                </td>
                <td class="py-4 px-2">
                    <form wire:submit.prevent="validated({{$report->id}})">
                        <input type="hidden" name="is_read" id="is_read" value="1">
                       <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Validasi</button>
                    </form>
                </td>
            @endforeach
            </tr>
        </tbody>
    </table>
</div>

</div>
        
</div>
</div>
