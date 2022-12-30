<div class="flex justify-center py-12 bg-green-500 h-screen">
    
    <div class="w-3/4 h-full py-5 mr-10">

        <div class="flex justify-center border-black">

<form action="" method="post" enctype="multipart/form-data">
<div class="flex justify-between border-2 px-2 bg-slate-300 mt-2">

<div class="border-black-2px w-[500px] h-full px-6 py-6">

    <div>
      <h1 class="text-xl font-bold py-2">Form Edit Sector</h1>
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

</div>
