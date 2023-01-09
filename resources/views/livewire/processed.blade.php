<div class="flex">
<div class="bg-white h-screen">
    @livewire('policesidebar')
</div>

<div class="w-full h-screen bg-blue-500 mr-10">
<div>
<h1 class="py-8 px-5 text-3xl font-bold text-slate-900 ">Daftar Laporan Yang Sudah Divalidasi</h1>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg mx-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-50 uppercase bg-slate-700 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    Nama
                </th>
                  <th scope="col" class="py-3 px-6">
                    Pelapor
                </th>
                <th scope="col" class="py-3 px-6">
                    Kategori
                </th>
                <th scope="col" class="py-3 px-6">
                    Polisi Sektor
                </th>
                <th scope="col" class="py-3 px-6">
                    Identitas
                </th>
                <th scope="col" class="py-3 px-6">
                    Jumlah
                </th>
                <th scope="col" class="py-3 px-6">
                    Nilai
                </th>
                <th scope="col" class="py-3 px-6">
                    Tanggal Lapor
                </th>
                <th scope="col" class="py-3 px-6">
                    Tanggal Hilang
                </th>
                <th scope="col" class="py-3 px-6">
                    Lokasi
                </th>
                <th scope="col" class="py-3 px-6">
                    Kronologi
                </th>
                 <th scope="col" class="py-3 px-6">
                    Gambar
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="py-4 px-6">
                    {{ $loop->iteration }}
                </td>
                <td class="py-4 px-6">
                    {{ $report->item }}
                </td>
                <td class="py-4 px-6">
                    {{ $report->members->name}}
                </td>
                <td class="py-4 px-6">
                    {{ $report->categories->categories}}
                </td>
                   <td class="py-4 px-6">
                    {{ $report->polices->sectors->sector_name}}
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
                    {{ $report->lost_location}}
                </td>
                   <td class="py-4 px-6">
                    {{ $report->story}}
                </td>
                </td>
                   <td class="py-4 px-6">
                    @if (!$report->picture == null)
                    <img src={{Storage::url($report->picture)}} width="100px" height="100px">
                    @else
                    <p>Tidak Ada Gambar</p>
                    @endif
                </td>
                  </td>
                   <td class="py-4 px-6">
                    {{ $report['isValidated'] ?  'Sudah Divalidasi' : 'Belum Divalidasi' ; }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
        
</div>
</div>
