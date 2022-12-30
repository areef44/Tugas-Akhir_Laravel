@livewire('navbar')
<div class="w-1/3 mx-auto mt-32 border-2 px-4 py-4 rounded bg-slate-300">
<h1 class="text-3xl py-4">Form Login</h1>
<form>
  <div class="mb-6">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email :</label>
    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Email" required>
    <p class="text-red-500 text-xs italic">Silakan isi email anda.</p>
  </div>
  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password :</label>
    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Password" required>
    <p class="text-red-500 text-xs italic">Silakan isi password anda.</p>
  </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

</div>
