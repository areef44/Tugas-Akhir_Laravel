<div class="w-[1000px]">
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<form wire:submit.prevent="update" method="post" enctype="multipart/form-data">

  <div class="flex justify-between">

  <div class="W-1/2">

    <input type="hidden" wire:model="sectorId">

    <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-[400px] px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Nama Sector :
      </label>
      <input wire:model="sector_name" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" name="sector_name" placeholder="Masukan Nama Sector">
      @error('sector_name')
      <p class="text-red-500 text-xs italic">Silakan isi Nama Sector | minimal 3 Huruf</p>
      @enderror
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-[400px] px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Nama Kecamatan :
      </label>
      <input wire:model="district" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" name="district" placeholder="Masukan Nama Kecamatan">
      @error('district')
      <p class="text-red-500 text-xs italic">Silakan isi Nama Kecamatan | minimal 5 Huruf</p>
      @enderror
    </div>
  </div>

  </div>

  <div class="w-1/2">

    <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Alamat Sector :
      </label>
      <textarea wire:model="address" id="message" rows="3" class="block p-2.5 w-[500px] text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" name="address" placeholder="Isikan alamat sector"></textarea>
      @error('address')
      <p class="text-red-500 text-xs italic">Silahkan isi Alamat Sector | minimal 5 Huruf</p>
      @enderror
    </div>
  </div>

  <div class="text-start">
        <button type="submit" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">+Tambah</button>
    </div>

  </div>

</div>

@if (session()->has('message-success'))
 
        <div x-data ="{ open: true }"
             x-init ="setTimeout(() => {open = false}, 3000)"
             x-show.transition.duration.1000ms = "open"
         class="flex justify-center items-center font-medium py-1 mb-2 px-2 rounded-md text-green-700 bg-green-100 border border-green-300 ">
            <div slot="avatar">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>
            <div class="text-xl font-normal  max-w-full flex-initial">
                {{ session('message-success') }}</div>
            <div class="flex flex-auto flex-row-reverse">
                <div>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x cursor-pointer hover:text-green-400 rounded-full w-5 h-5 ml-2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg> --}}
                </div>
            </div>
        </div>

   @endif

</form>

</div>




{{-- <div class="flex justify-center py-12 bg-green-500 h-screen">
    
    <div class="w-3/4 h-full py-5 mr-10">

        <div class="flex justify-center border-black">

<form action="" method="post" enctype="multipart/form-data">
<div class="flex justify-between border-2 px-2 bg-slate-300 mt-2">

<div class="border-black-2px w-[500px] h-full px-6 py-6">

    <div>
      <h1 class="text-xl font-bold py-2">Form Tambah Sector</h1>
   </div>
   
  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Nama Sector :
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" name="sector_name" placeholder="Masukan Nama Sector">
      <p class="text-red-500 text-xs italic">Silakan isi Nama Sector.</p>
    </div>
  </div>

       <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Alamat Sector :
      </label>
      <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="address" placeholder="Isikan alamat sector"></textarea>
      <p class="text-red-500 text-xs italic">Silahkan isi Alamat Sector.</p>
    </div>
  </div>

     
  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Nama Kecamatan :
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" name="district" placeholder="Masukan Nama Kecamatan">
      <p class="text-red-500 text-xs italic">Silakan isi Nama Kecamatan.</p>
    </div>
  </div>

  <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>

  <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a href={{ route('sector') }}>Kembali</a></button>

</div>

</div>

</form>
</div>

</div>

</div> --}}

