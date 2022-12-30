
<div>
@livewire('navbar')
@if (session()->has('message-success'))
 
        <div x-data ="{ open: true }"
             x-init ="setTimeout(() => {open = false}, 3000)"
             x-show.transition.duration.1000ms = "open"
         class="mx-12 mt-2 flex justify-center items-center font-medium py-1 px-2 rounded-md text-green-700 bg-green-100 border border-green-300 ">
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
<div class="flex justify-center border-black">
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>



<form wire:submit.prevent="store">
<div class="flex justify-between border-2 px-2 bg-slate-300 mt-2">

 
<div class="border-black-2px w-[700px] h-full px-6">
     
    <div>

      <h1 class="text-xl font-bold py-4">Form Registrasi</h1>
   </div>
   
   
  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Nomor Induk Kependudukan :
      </label>
      <input wire:model="nik" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="number" placeholder="Masukan NIK" >
      @error('nik')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>

   
  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Nama Lengkap :
      </label>
      <input wire:model="name" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Masukan Nama Lengkap">
      @error('name')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>

  
  <div class="relative mb-3">
         <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Jenis Kelamin :
      </label>
        <select wire:model="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
          <option selected>-- Pilih --</option>
          <option value="l">Laki-Laki</option>
          <option value="p">Perempuan</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-black">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
       @error('gender')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
   </div>

   
   <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Tanggal Lahir :
      </label>
      <input wire:model="birth_date" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="date" placeholder="Masukan NIK">
       @error('birth_date')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>

    <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Alamat Lengkap :
      </label>
      <textarea wire:model="address" id="message" rows="4" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Isikan alamat anda"></textarea>
       @error('address')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>
</div>

<div class="border-black-1px w-[700px] h-full pt-[60px] px-6">

      <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Nomor Telepon :
      </label>
      <input wire:model="phone" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="number" placeholder="Masukan Nomor Telepon">
       @error('phone')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>

      <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Email :
      </label>
      <input wire:model="email" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="email" placeholder="Masukan Email">
       @error('email')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>

  <div class="flex flex-wrap -mx-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Password :
      </label>
      <input wire:model="password" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="Isikan Password Anda">
       @error('password')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>

     <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Verifikasi Password :
      </label>
      <input wire:model="verification_password" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="Isikan Password Anda">
       @error('password')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>

    <div class="pt-[25px] text-center">
      
    <button type="submit" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-6" >+ Tambah</button>
  </div>
   
</div>

</div>

</form>

</div>
  
</div>
