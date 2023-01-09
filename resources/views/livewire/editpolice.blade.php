<div>
  
<div class="flex bg-blue-500">
  <div class="bg-white h-screen ">
    @livewire('policesidebar')
</div>
 
  <div class="w-[350px] px-3">
<form wire:submit.prevent="update({{$polices->id}})" method="post" enctype="multipart/form-data">
      

  <div class="w-[350px] px-3">
  <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Foto Petugas :
      </label>
      <input wire:model="photo" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="file" name="photo" placeholder="Pilih Foto">
      @error('photo')
      <p class="text-red-500 text-xs italic">Silakan Pilih Foto Petugas.</p>
      @enderror
    </div>
  </div>



  <div>
     <div class="text-start py-6">
        <button type="submit" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">- Ubah</button>   
      </div>

      <div>
      @if (session()->has('message-success'))
 
        <div x-data ="{ open: true }"
             x-init ="setTimeout(() => {open = false}, 3000)"
             x-show.transition.duration.1000ms = "open"
         class="flex justify-center items-center font-medium py-1 px-2 rounded-md text-green-700 bg-green-100 border border-green-300 ">
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
</div>
  
</form>
    
  </div>

</div>

</div>


