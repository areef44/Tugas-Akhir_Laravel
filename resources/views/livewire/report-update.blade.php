
<div class="flex">

    <div class="bg-white h-screen">

    @livewire('sidebar')

    </div>
    
    <div class="w-full h-full py-2 bg-red-400">
        
      <div class="mx-36 pb-2">
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

        <div class="flex justify-center border-black">

<form wire:submit.prevent="update({{$reports->id}})" enctype="multipart/form-data">
   
    @csrf
<div class="flex justify-between border-2 px-2 bg-slate-300">

<div class="border-black-2px w-[500px] h-full px-6">



    <div>
      <h1 class="text-xl font-bold py-2">Form Update Kehilangan Barang</h1>
   </div>
   
  <div class="flex flex-wrap -mx-3 mb-3">
    {{-- <input type="text" value={{ $reports->id }}> --}}
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Nama Barang :
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" name="item" wire:model="item">
        @error('item')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>


    <div class="flex flex-wrap  mb-3">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Kategori Barang :</label>
    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" wire:model="id_category">
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->categories}}</option>  
        @endforeach
    </select>
      @error('id_category')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>

     <div class="flex flex-wrap  mb-3">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Polsek :</label>
    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" wire:model="id_police">
    <option>Pilih</option>
    @foreach ($polices as $police)
    <option value="{{$police->id}}">{{$police->sectors->sector_name}}</option> 
    @endforeach
    </select>
    @error('id_police')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  

    <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Masukan Identitas Barang:
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" name="identity" wire:model="identity">
      <p class="text-black text-xs italic">* boleh tidak diisi</p>
    </div>
  </div>

    <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Masukan Jumlah Barang:
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="number" name="quantity" wire:model="quantity">
      <p class="text-black text-xs italic">* boleh tidak diisi</p>
    </div>
  </div>

      <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Masukan Nilai Barang:
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="number" name="value" wire:model="value">
      <p class="text-black text-xs italic">* boleh tidak diisi</p>
    </div>
  </div>


</div>



<div class="border-black-1px w-[500px] h-screen pt-[44px] px-6">

       <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Tanggal Lapor :
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="date" wire:model="report_date" >
        @error('report_date')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>

         <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Tanggal Hilang :
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="date" wire:model="loss_date">
        @error('loss_date')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>

       <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Lokasi Kehilangan :
      </label>
      <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " wire:model="lost_location" placeholder="Isikan alamat anda">
      </textarea>
        @error('lost_location')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
  </div>

        <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Kronologi Kehilangan :
      </label>
      <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" wire:model="story" placeholder="Isikan alamat anda">
      </textarea>
      <p class="text-black text-xs italic">* boleh tidak diisi</p>
    </div>
  </div>
 

      <div class="flex flex-wrap -mx-3 mb-3">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Gambar :
      </label>
      <input wire:model="picture" class="appearance-none block w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="file" wire:model="picture" placeholder="Masukan Gambar">
      <p class="text-black text-xs italic">* boleh tidak ada gambar</p>
    </div>
    {{-- <div class="text-center">
      <img src="{{Storage::url($reports->picture)}}" alt="" width="50px" height="50px">
    </div> --}}
  </div>

  <input type="hidden" name="id_user" value={{ $reports->id_user }} >

  <input type="hidden" name="isValidated" value={{  $reports->isValidated }} >

    <div class="pt-2 text-center">
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Submit</button>
  </div>
   
</div>

</div>

</form>
</div>
        


    </div>

</div>

