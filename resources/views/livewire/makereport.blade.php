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
                                    <div>
                                        <div x-data="{ open : false }">
                                            <button @click="open = true" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Detail</button>
                                            <div x-transition x-show="open" class="fixed top-0 left-0 w-full h-screen bg-black/50 flex justify-center items-center">
                                                <div class="p-6 w-1/2 bg-white rounded-lg border border-gray-200 shadow-md">
                                                      <div class="flex justify-center">
                            <div class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-3xl hover:bg-gray-100 my-4">
                                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"  @if (!$report->picture == null)
                                <img src={{Storage::url($report->picture)}} width="100px" height="100px">
                                @else
                                <p>Tidak Ada Gambar</p>
                                @endif
                                <div class="flex flex-col justify-between p-4 leading-normal">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Identitas Barang</h5>
                                    <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">{{ $report->item }}</p>
                                    <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">{{ $report->identity }}</p>
                                    <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">Laporan pada : {{ $report->report_date }}</p>
                                    <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">Hilang pada : {{ $report->loss_date }}</p>
                                    <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">Hilang di : {{ $report->lost_location }}</p>
                                    <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">Kronologi : {{ $report->story }}</p>
                                    <button @click="open = false" class="text-white bg-gradient-to-br from-red-600 to-red-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Kembali Ke Daftar</button>

                                </div>
                            </div>
                            </div>
                                            </div>
                                        </div> 
                                        <a href={{ route('cetakpdf',$report->id) }} target="blank"><button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Print</button></a>
                                    </div>     
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
