<nav class="bg-red-400 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="#" class="flex items-center">
        <img src="{{ asset('assets/logo.png') }}" class="h-6 mr-9 sm:h-9" alt="Flowbite Logo" />
        <span class="self-center text-xl whitespace-nowrap text-white font-bold">Silapang</span>
    </a>
 
    <div class="hidden bg-red-400 w-full md:block md:w-auto" id="navbar-default items-align-center">
      <ul class="flex flex-col border border-gray-100 rounded-lg bg-red-400 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 items-center">
        <li>
           <a href={{ route('home') }} class="block py-2 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
        </li>
        <li>
            <a href={{ route('register') }}><button type="button" class="text-white bg-gray-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 focus:outline-none">Register</button></a>
            <a href={{ route('login') }}><button type="button" class="text-white bg-slate-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2  focus:outline-none ">Login</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
