<template>
    <header class="absolute top-0 left-0 w-full flex item-center z-10">
        <div class="container">
            <div class="flex item-center justify-between relative">
                <div class="px-4">
                    <h3 class="font-bold text-lg text-primary">My Notes</h3>
                </div>
            </div>
            <div class=" flex item-end">
          <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-2  pointer-events-none">
                  <svg aria-hidden="true" class="w-4 h-4 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
              </div>
              <input type="search" id="input-search" class="w-300 h-7 bg-gray-50 border border-10 border-black dark:focus:border-none text-gray-900 text-sm rounded-2xl pl-6 dark:focus:bg-white pr-2" required>
          </div>
            </div>
        </div>
    </header>
</template>
