<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>


<div x-bind:aria-expanded="sidebar" :class="{ 'ms-64 -me-64 md:ms-0 md:me-0': sidebar, 'ms-0 me-0 md:ms-64': !(sidebar) }" class="flex flex-col me-0 md:ms-64 min-h-screen transition-all duration-500 ease-in-out">
      <!-- Navbar -->
      <nav :class="{ 'start-64 -end-64 md:start-0 md:end-0': sidebar, 'start-0 end-0 md:start-64': !(sidebar) }" class="z-50 fixed flex flex-row flex-nowrap items-center justify-between mt-0 py-2 start-0 md:start-64 end-0 px-6 bg-white dark:bg-gray-800 shadow-xs transition-all duration-500 ease-in-out" id="desktop-menu">
        <!-- sidenav button-->
        <button id="navbartoggle" type="button" class="inline-flex items-center justify-center text-gray-800 hover:text-gray-600 dark:text-gray-300 dark:hover:text-gray-200 focus:outline-hidden focus:ring-0" aria-controls="sidebar-menu" @click="sidebar = !sidebar">
          <span class="sr-only">Mobile menu</span>
          <svg x-description="Icon sidebar" x-state:on="Menu sidebar" x-state:off="Menu closed" class="hidden h-8 w-8" :class="{ 'block': sidebar, 'hidden': !(sidebar) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path class="hidden md:block" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            <path class="md:hidden" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
          </svg>

          <svg x-description="Icon closed" x-state:on="Menu sidebar" x-state:off="Menu closed" class="block h-8 w-8" :class="{ 'hidden': sidebar, 'block': !(sidebar) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path class="md:hidden" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            <path class="hidden md:block" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
          </svg>
          <!-- <i class="text-2xl bi bi-list"></i> -->
        </button>

        <!-- Search -->
        <form class="hidden sm:inline-block md:hidden lg:inline-block mx-5">
          <div class="flex flex-wrap items-stretch w-full relative">
            <input type="text" class="shrink flex-grow max-w-full leading-5 relative text-sm py-2 px-4 rounded-s-sm  text-gray-800 bg-gray-100 overflow-x-auto focus:outline-hidden border border-gray-100 focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Search…" aria-label="Search">
            <div class="flex -me-px">
              <button class="flex items-center py-2 px-4 -ms-1  rounded-e-sm leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-hidden focus:ring-0" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <!-- <i class="inline-block size-4 bi bi-search"></i> -->
              </button>
            </div>
          </div>
        </form>

        <!-- menu -->
        <ul class="flex ms-auto mt-2">

          <!-- messages -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="py-3 px-4 flex text-sm rounded-full focus:outline-hidden" id="messages" @click="open = ! open">
              <div class="relative inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="dark:text-gray-300 size-6 bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"></path>
                </svg>
                <!-- <i class="text-2xl bi bi-envelope"></i> -->
                <span class="flex justify-center absolute -top-2 -end-1  text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">3</span></span>
              </div>
            </a>

            <div x-show="open" @click.outside="open = false" 
            x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" 
            x-transition:enter-end="opacity-100 scale-100" 
            x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="opacity-100 scale-100" 
            x-transition:leave-end="opacity-0 scale-95" 
            class="w-72 absolute -end-24 sm:-end-28 md:end-0 rounded-sm top-full z-50 py-0.5 text-start  bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="display: none;">
              <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                <div class="relative">
                  <div class="font-bold dark:text-white">Messages</div>
                  <div x-data="{ open: false }" class="absolute top-0 end-0">
                    <a @click="open = ! open" href="javascript:;" class="inline-block me-2" title="Search message">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="dark:text-white inline-block size-4 bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                      </svg>
                      <!-- <i class="inline-block size-4 bi bi-search"></i> -->
                    </a>
                    <div x-show="open" @click.outside="open = false" class="origin-top-right absolute end-0 bg-white dark:bg-gray-700 z-10 rounded" style="min-width:16rem">
                       <form class="inline-block w-full">
                        <div class="flex flex-wrap items-stretch w-full relative">
                          <input type="text" class="shrink flex-grow max-w-full leading-5 relative text-sm py-2 px-4 rounded-s-sm text-gray-800 bg-gray-100 overflow-x-auto focus:outline-hidden border border-gray-100 focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" placeholder="Search messages…" aria-label="Search">
                          <div class="flex -me-px">
                            <button class="flex items-center py-2 px-4 -ms-1 rounded-e-sm leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-hidden focus:ring-0" type="button">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                              <!-- <i class="inline-block size-4 bi bi-search"></i> -->
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <a href="#" class="inline-block me-2" title="Mark all as read">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="dark:text-white inline-block size-4 bi bi-envelope-open" viewBox="0 0 16 16">
                        <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z"/>
                      </svg>
                      <!-- <i class="inline-block size-4 bi bi-envelope-open"></i> -->
                    </a>
                    <a href="#" class="inline-block me-2" title="New message">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="dark:text-white inline-block size-4 bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                      <!-- <i class="inline-block size-4 bi bi-pencil-square"></i> -->
                    </a>
                  </div>
                </div>
              </div>
              <div class="max-h-60 overflow-y-auto scrollbars show">
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900/40 dark:hover:bg-gray-900/20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="src/img/avatar/avatar2.png" class="h-10 w-10 rounded-full mx-auto" alt="Daniel Esteban">
                        <span title="online" class="flex justify-center absolute -bottom-0.5 end-2 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="shrink max-w-full px-2 w-3/4">
                      <div class="text-sm dark:text-indigo-800 font-bold">Daniel Esteban</div>
                      <div class="text-gray-500 text-sm mt-1">What do you think about this project?</div>
                      <div class="text-gray-500 text-sm mt-1">12m ago</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900/40 dark:hover:bg-gray-900/20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="src/img/avatar/avatar3.png" class="h-10 w-10 rounded-full mx-auto" alt="Carlos Garcia">
                        <span title="busy" class="flex justify-center absolute -bottom-0.5 end-2 text-center bg-pink-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="shrink max-w-full px-2 w-3/4">
                      <div class="text-sm dark:text-indigo-800 font-bold">Carlos Garcia</div>
                      <div class="text-gray-500 text-sm mt-1">Hello, how are you friends?</div>
                      <div class="text-gray-500 text-sm mt-1">30m ago</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900/40 dark:hover:bg-gray-900/20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="src/img/avatar/avatar4.png" class="h-10 w-10 rounded-full mx-auto" alt="Steven Rey">
                        <span title="offline" class="flex justify-center absolute -bottom-0.5 end-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="shrink max-w-full px-2 w-3/4">
                      <div class="text-sm dark:text-indigo-800 font-bold">Steven Rey</div>
                      <div class="text-gray-500 text-sm mt-1">Thank you for your help today.</div>
                      <div class="text-gray-500 text-sm mt-1">4h ago</div>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900/20 py-2 hover:bg-gray-100">
                    <div class="shrink max-w-full px-2 w-1/4 text-center">
                      <div class="relative">
                        <img src="src/img/avatar/avatar.png" class="h-10 w-10 rounded-full mx-auto" alt="Roman Davis">
                        <span title="offline" class="flex justify-center absolute -bottom-0.5 end-2 text-center bg-gray-500 border border-white w-3 h-3 rounded-full"></span>
                      </div>
                    </div>
                    <div class="shrink max-w-full px-2 w-3/4">
                      <div class="text-sm dark:text-indigo-800 font-bold">Roman Davis</div>
                      <div class="text-gray-500 text-sm mt-1">Do you have time? I want to call you.</div>
                      <div class="text-gray-500 text-sm mt-1">5h ago</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-3 text-center font-normal">
                <a href="#" class="hover:underline dark:text-white">Show all Messages</a>
              </div>
            </div>
          </li>
          
          <!-- notification -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="py-3 px-4 flex text-sm rounded-full focus:outline-hidden" id="notify" @click="open = ! open">
              <div class="relative inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="dark:text-gray-300 size-6 bi bi-bell" viewBox="0 0 16 16">
                  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                </svg>
                <!-- <i class="inline-block text-2xl size-6 bi bi-bell"></i> -->
                <span class="flex justify-center absolute -top-2 -end-1  text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span class="align-self-center">1</span></span>
              </div>
            </a>

            <div x-show="open" @click.outside="open = false" 
            x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" 
            x-transition:enter-end="opacity-100 scale-100" 
            x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="opacity-100 scale-100" 
            x-transition:leave-end="opacity-0 scale-95" 
            class="w-72 absolute -end-16 md:end-0 rounded-sm top-full z-50 py-0.5 text-start bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="display: none;">
              <div class="p-3 font-normal border-b border-gray-200 dark:border-gray-700">
                <div class="relative">
                  <div class="font-bold dark:text-white">Notifications</div>
                  <div class="absolute top-0 end-0">
                    <a href="#" class="inline-block me-2" title="Clear all">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="dark:text-white inline-block size-4 bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg>
                      <!-- <i class="inline-block size-4 bi bi-trash"></i> -->
                    </a>
                  </div>
                </div>
              </div>
              <div class="max-h-60 overflow-y-auto scrollbars show">
                <a class="relative" href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900/40 dark:hover:bg-gray-900/20 py-2 hover:bg-gray-100 bg-gray-50">
                    <div class="shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto size-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="self-center size-4 bi bi-calendar4-event" viewBox="0 0 16 16">
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                          <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                        </svg>
                        <!-- <i class="self-center size-4 bi bi-calendar4-event"></i> -->
                      </div>
                    </div>
                    <div class="shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold dark:text-indigo-800">Event will coming</div>
                      <div class="text-gray-500 text-sm mt-1">Meeting with Mr.John Navas at:10.00Am</div>
                      <div class="text-gray-500 text-sm mt-1">1h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900/20 py-2 hover:bg-gray-100">
                    <div class="shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto size-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="self-center size-4 bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                          <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                        </svg>
                        <!-- <i class="self-center size-4 bi bi-hand-thumbs-up"></i> -->
                      </div>
                    </div>
                    <div class="shrink max-w-full px-2 w-3/4">
                      <div class="text-gray-500 text-sm mt-1"><b class="text-gray-600 dark:text-gray-400">Daniel</b> like your post: <b class="text-gray-600 dark:text-gray-400">Hello World!</b></div>
                      <div class="text-gray-500 text-sm mt-1">3h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900/20 py-2 hover:bg-gray-100">
                    <div class="shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto size-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="self-center size-4 bi bi-hdd-stack" viewBox="0 0 16 16">
                          <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"/>
                          <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                          <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        </svg>
                        <!-- <i class="self-center size-4 bi bi-hdd-stack"></i> -->
                      </div>
                    </div>
                    <div class="shrink max-w-full px-2 w-3/4">
                      <div class="text-sm font-bold dark:text-indigo-800">Server maintenance</div>
                      <div class="text-gray-500 text-sm mt-1">Server maintenance at:07.00Am</div>
                      <div class="text-gray-500 text-sm mt-1">8h ago</div>
                    </div>
                  </div>
                </a>
                <a class="relative" href="#">
                  <div class="flex flex-wrap flex-row items-center border-b border-gray-200 dark:border-gray-700 dark:hover:bg-gray-900/20 py-2 hover:bg-gray-100">
                    <div class="shrink max-w-full px-2 w-1/4 text-center">
                      <div class="flex justify-center mx-auto size-8 rounded-full bg-indigo-500 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="self-center size-4 bi bi-chat-left" viewBox="0 0 16 16">
                          <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        </svg>
                        <!-- <i class="self-center size-4 bi bi-chat-left"></i> -->
                      </div>
                    </div>
                    <div class="shrink max-w-full px-2 w-3/4">
                      <div class="text-gray-500 text-sm mt-1"><b class="text-gray-600 dark:text-gray-400">Carlos</b> comment in your post: <b class="text-gray-600 dark:text-gray-400">Hello World!</b></div>
                      <div class="text-gray-500 text-sm mt-1">1d ago</div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="p-3 text-center font-normal">
                <a href="#" class="hover:underline dark:text-white">Show all Notifications</a>
              </div>
            </div>
          </li>

          <!-- profile -->
          <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="px-3 flex text-sm rounded-full focus:outline-hidden" id="user-menu-button" @click="open = ! open">
              <div class="relative">
                <img class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700" src="src/img/avatar/avatar.png" alt="avatar">
                <span title="online" class="flex justify-center absolute -bottom-0.5 end-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
              </div>
              <span class="hidden md:block ms-1 self-center dark:text-gray-300">Ari Budin</span>
            </a>
            <ul x-show="open" @click.outside="open = false" 
            x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95" 
            x-transition:enter-end="opacity-100 scale-100" 
            x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="opacity-100 scale-100" 
            x-transition:leave-end="opacity-0 scale-95" 
            class="origin-top-right absolute end-0 rounded-sm top-full z-50 py-0.5 text-start min-w-[12rem] bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="display: none;">
              <li class="relative">
                <div class="flex flex-wrap flex-row -mx-4 px-3 py-4 items-center">
                  <div class="shrink max-w-full px-4 w-1/3">
                    <img src="src/img/avatar/avatar.png" class="h-10 w-10 rounded-full" alt="Ari Budin">
                  </div>
                  <div class="shrink max-w-full px-4 w-2/3 ps-1">
                    <div class="font-bold "><a href="#" class=" text-gray-800 dark:text-gray-300 hover:text-indigo-500">Ari Budin</a></div>
                    <div class="text-gray text-sm mt-1 dark:text-gray-300">Professional Front end developer.</div>
                  </div>
                </div>
              </li>
              <li class="relative">
                <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap dark:text-gray-300 hover:text-indigo-500" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline me-2 size-4 bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                  </svg>
                  <!-- <i class="inline me-2 size-4 bi bi-gear"></i> --> Settings &amp; Privacy
                </a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap dark:text-gray-300 hover:text-indigo-500" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline me-2 size-4 bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                  </svg>
                  <!-- <i class="inline me-2 size-4 bi bi-question-circle"></i> --> Help &amp; Support
                </a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap dark:text-gray-300 hover:text-indigo-500" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline me-2 size-4 bi bi-translate" viewBox="0 0 16 16">
                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                  </svg>
                  <!-- <i class="inline me-2 size-4 bi bi-translate"></i> --> Change Language
                  </a>
              </li>
              <li class="relative">
                <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap dark:text-gray-300 hover:text-indigo-500" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline me-2 size-4 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg>
                  <!-- <i class="inline me-2 size-4 bi bi-box-arrow-in-right"></i> --> Sign out
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- End Navbar -->
     
    </div>