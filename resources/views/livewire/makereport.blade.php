<div class="flex">

    <div class="bg-white h-screen">

    @livewire('sidebar')

    </div>
    
    <div class="w-full h-screen bg-red-400">

        
        <!-- component -->
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 pr-10 lg:px-8">
                <div class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard px-8 pt-3 rounded-bl-lg rounded-br-lg">
                    <h1 class="py-2 mb-4 px-5 text-2xl font-bold text-slate-900">Halaman Cetak Laporan Kehilangan</h1>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="text-center px-6 py-3 border-b-2 border-gray-300 leading-4 text-blue-500 tracking-wider">No</th>
                                <th class="text-center px-6 py-3 border-b-2 border-gray-300 text-sm leading-4 text-blue-500 tracking-wider">Nama</th>
                                <th class="text-center px-6 py-3 border-b-2 border-gray-300 text-sm leading-4 text-blue-500 tracking-wider">Pelapor</th>
                                <th class="text-center px-6 py-3 border-b-2 border-gray-300 text-sm leading-4 text-blue-500 tracking-wider">Tanggal Lapor</th>
                                <th class="text-center px-6 py-3 border-b-2 border-gray-300 text-sm leading-4 text-blue-500 tracking-wider">Tanggal Hilang</th>
                                <th class="text-center px-6 py-3 border-b-2 border-gray-300 text-sm leading-4 text-blue-500 tracking-wider">Lokasi Kehilangan</th>
                                <th class="text-center px-6 py-3 border-b-2 border-gray-300 text-sm leading-4 text-blue-500 tracking-wider">Status</th>
                                <th class="text-center px-6 py-3 border-b-2 border-gray-300 text-sm leading-4 text-blue-500 tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                                @foreach ($reports as $report)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="flex items-center">
                                            <div>
                                                <div class="text-sm leading-5 text-gray-800">{{ $loop->iteration}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                        <div class="text-center text-sm leading-5 text-blue-900">{{$report->item}}</div>
                                    </td>
                                    <td class="text-center px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $report->members->name }}</td>
                                    <td class="text-center px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $report->report_date }}</td>
                                    <td class="text-center px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $report->loss_date }}</td>
                                    <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">{{ $report->lost_location }}</td>
                                    <td class="text-center px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">{{ $report['isValidated'] ?  'Sudah Divalidasi' : 'Belum Divalidasi' ; }}</td>
                                    <td class="whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5">
                                        <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Detail</button>
                                        <a href={{ route('cetakpdf') }} target="blank"><button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Export PDF</button></a>
                                    </td>
                                        
                                </tr>
                                @endforeach
                                
                               
                        </tbody>
                    </table>
                  <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">


    </div>
                </div>
            </div>
    </div>

  
</div>
