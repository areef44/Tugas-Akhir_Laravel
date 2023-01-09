<div>
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<form wire:submit.prevent="update" method="post" enctype="multipart/form-data">

    <input type="hidden" name="" wire:model="categoriesId">

  <div class="flex">
    
  <div>
    <div class="w-[400px] pt-8 px-4">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Kategori :
      </label>
      <input wire:model="categories"  class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" name="categories" placeholder="Masukan Nama Kategori">
      @error('categories')
        <p class="text-red-500 text-xs italic">Silakan isi Kategori | minimal 3 Huruf</p>
      @enderror
    </div>
  </div>

  <div>
    <div class="w-[500px] pt-8">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Deskripsi :
      </label>
      <textarea wire:model="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" name="description" placeholder="Isikan deskripsi kategori"></textarea>
      @error('categories')
      <p class="text-red-500 text-xs italic">Silahkan isi Deskripsi | minimal 5 karakter</p>
      @enderror
    </div>
  </div>


   <div class="pt-8 px-4">
        <button type="submit" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-6" >- Ubah</button>
    </div>

  </div>

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

</form>

</div>


