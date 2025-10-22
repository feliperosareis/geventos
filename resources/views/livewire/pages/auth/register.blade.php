<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    
    /**
    * Handle an incoming registration request.
    */
    public function register(): void
    {
        $validated = $this->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $validated['password'] = Hash::make($validated['password']);
        
        event(new Registered($user = User::create($validated)));
        
        Auth::login($user);
        
        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    
    <header>
        <!-- Navbar -->
        <nav class="flex flex-row flex-nowrap items-center justify-between mt-0 py-4 px-6 border-b border-gray-200 bg-white" id="desktop-menu">
            <!-- logo -->
            <a class="flex items-center py-2 me-4 text-xl" href="../index.html">
                <img class="inline-block w-36" src="../images/logo.png">
            </a>
                
                <!-- menu -->
                <ul class="flex ms-auto mt-2">
                    <!-- Customizer (Only for demo purpose) -->
                    <li x-data="{ open: false }" class="relative">
                        <a href="javascript:;" class="py-3 px-4 flex text-sm rounded-full focus:outline-hidden" aria-controls="mobile-canvas" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
                            <span class="sr-only">Customizer</span>
                            <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                            </svg>
                            <!-- <i class="text-2xl bi bi-gear"></i> -->
                        </a>
                        
                        <!-- Right Offcanvas -->
                        <div class="fixed w-full h-full inset-0 z-50" id="mobile-canvas" x-description="Mobile menu" x-show="open" style="display: none;">
                            <!-- bg open -->
                            <span class="fixed bg-gray-900 opacity-70 w-full h-full inset-x-0 top-0"></span>
                            
                            <nav id="mobile-nav" class="flex flex-col gap-6 end-0 w-72 fixed top-0 bg-white  h-full overflow-auto z-40 scrollbars show" 
                            x-show="open" @click.away="open=false" 
                            x-description="Mobile menu" role="menu" 
                            aria-orientation="vertical" 
                            aria-labelledby="navbartoggle" 
                            x-transition:enter="transition-transform duration-300" x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full" x-transition:enter-end="translate-x-0" 
                            x-transition:leave="transition-transform duration-300" x-transition:leave-start="translate-x-0" 
                            x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full">
                            <div class="p-6 bg-indigo-500 text-gray-100 border-b border-gray-200 dark:border-gray-700">
                                <div class="flex flex-row justify-between">
                                    <h3 class="text-md font-bold">Customizer</h3>
                                    <button @click="open = false" type="button" class="inline-block size-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block text-gray-100 bi bi-x-lg" viewBox="0 0 16 16" id="x-lg"><path d="M1.293 1.293a1 1 0 011.414 0L8 6.586l5.293-5.293a1 1 0 111.414 1.414L9.414 8l5.293 5.293a1 1 0 01-1.414 1.414L8 9.414l-5.293 5.293a1 1 0 01-1.414-1.414L6.586 8 1.293 2.707a1 1 0 010-1.414z"></path></svg>
                                        <!-- <i class="bi bi-x-lg"></i> -->
                                    </Button>
                                </div>
                            </div>
                            
                            <div class="px-6 flex flex-col gap-1.5">
                                <h3>Theme Color</h3>
                                <div class="relative flex flex-wrap items-center gap-2">
                                    <button data-color="default" title="default" class="inline-block p-3 bg-[#6366f1] [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="red" title="red" class="inline-block p-3 bg-red-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="yellow" title="yellow" class="inline-block p-3 bg-yellow-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="green" title="green" class="inline-block p-3 bg-green-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="blue" title="blue" class="inline-block p-3 bg-blue-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="purple" title="purple" class="inline-block p-3 bg-purple-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="lime" title="lime" class="inline-block p-3 bg-lime-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="pink" title="pink" class="inline-block p-3 bg-pink-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="sky" title="sky" class="inline-block p-3 bg-sky-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="rosewood" title="rosewood" class="inline-block p-3 bg-[#9F2A2A] [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="genoa" title="genoa" class="inline-block p-3 bg-[#166064] [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="seance" title="seance" class="inline-block p-3 bg-[#7E2A9F] [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="gold" title="gold" class="inline-block p-3 bg-[#B58429] [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-color="orange" title="orange" class="inline-block p-3 bg-orange-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                </div>
                            </div>
                            
                            <div class="px-6 flex flex-col gap-1.5">
                                <h3>Neutral Color</h3>
                                <div class="relative flex items-center gap-2">
                                    <button data-neutral="default" title="default" class="inline-block p-3 bg-[#84848f] [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-neutral="zinc" title="zinc" class="inline-block p-3 bg-zinc-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-neutral="stone" title="stone" class="inline-block p-3 bg-stone-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-neutral="slate" title="slate" class="inline-block p-3 bg-slate-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-neutral="gray" title="gray" class="inline-block p-3 bg-gray-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                    <button data-neutral="neutral" title="neutral" class="inline-block p-3 bg-neutral-500 [&.active]:border [&.active]:border-gray-700 dark:[&.active]:border-gray-100 hover:opacity-90 rounded-full cursor-pointer"></button>
                                </div>
                            </div>
                            
                            <div class="px-6 flex flex-col gap-1.5">
                                <h3>Light &amp; Dark</h3>
                                <!-- light and dark mode -->
                                <button data-type="theme" id="lightdark"
                                class="theme-icon text-yellow-500 flex items-center justify-center size-8 rounded-full bg-white dark:bg-gray-600 border border-gray-500 hover:bg-gray-200 dark:hover:bg-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun" viewBox="0 0 16 16">
                                    <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
                                    <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"/>
                                    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"/>
                                </svg>
                            </button>
                        </div>
                        
                        <div class="px-6 flex flex-col gap-1.5">
                            <h3>Switch RTL</h3>
                            <!-- switch -->
                            <label for="switch-rtl" class="relative w-8 py-3">
                                <input data-type="rtl" id="switch-rtl" type="checkbox" name="lightdarks" id="lightdarks" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white dark:bg-gray-700 border border-gray-500 appearance-none cursor-pointer"/>
                                <span class="toggle-label block overflow-hidden h-5 rounded-full bg-gray-300 dark:bg-gray-900 cursor-pointer"></span>
                            </label>
                        </div>
                        
                        <div class="px-6 flex flex-col gap-1.5">
                            <h3>Refresh Chart Color</h3>
                            <!-- reload -->
                            <button id="reload"
                            class="flex items-center justify-center size-8 rounded-full bg-white dark:bg-gray-600 border border-gray-500 hover:bg-gray-200 dark:hover:bg-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                            </svg>
                        </button>
                    </div>
                    
                    <div class="pt-6 px-6">
                        <div x-data="{ open: true }" x-show="open" class="flex justify-between items-center relative bg-yellow-100 text-yellow-900 p-3 rounded-lg mb-4">
                            <div>
                                How to apply? please read the documentation text
                            </div>
                            <button type="button" @click="open = false">
                                <span class="text-2xl">×</span>
                                <!-- <i class="bi bi-x-lg"></i> -->
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </li><!-- End Customizer (Only for demo purpose) -->
        
        <li class="relative">
            <a href="/login" class="py-3 px-4 flex hover:text-indigo-500 focus:outline-hidden">
                <div class="relative inline-block">Login</div>
            </a>
        </li>
        @if (!route('registro'))
            <li class="relative">
                <a href="register-basic.html" class="py-3 px-4 flex hover:text-indigo-500 focus:outline-hidden">
                    <div class="relative inline-block">Registro</div>
                </a>
            </li>
        @endif
    </ul>
</nav><!-- End Navbar -->
</header>

<main>
    <!-- =========={ register }==========  -->
    <div id="register-area" class="relative py-12 bg-gray-100 /40">
        <div class="container xl:max-w-6xl mx-auto px-4">
            <div class="flex flex-wrap flex-row -mx-4 justify-center">
                <!-- register form -->
                <div class="max-w-full w-full md:w-2/3 lg:w-1/2 px-6 sm:px-12">
                    <div class="relative">
                        <div class="p-6 sm:py-8 sm:px-12 rounded-lg bg-white  shadow-xl">
                            <form id="register-form">
                                <h1 class="text-2xl leading-normal mb-6 font-bold text-gray-800   text-center">Registro</h1>
                                <hr class="block w-12 h-0.5 mx-auto my-5 bg-gray-700 border-gray-700">
                                <div class="mb-6">
                                    <input name="name" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0" placeholder="Nome Completo" value="" aria-label="nome completo" type="text" required>
                                </div>
                                <div class="mb-6">
                                    <input name="email" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0" placeholder="Email" value="" aria-label="email" type="email" required>
                                </div>
                                <div class="mb-6">
                                    <input class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0" placeholder="Senha" aria-label="senha" type="password" value="" required>
                                </div>
                                <div class="mb-6">
                                    <input class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0" placeholder="Confirmar Senha" aria-label="confirmar senha" type="password" value="" required>
                                </div>
                                <div class="mb-6 flex items-center">
                                    <input class="form-checkbox h-5 w-5 text-indigo-500  border border-gray-300  rounded-sm focus:outline-hidden" type="checkbox" value="" id="terms" required>
                                    <label class="ms-2" for="terms">
                                        Concordo com os <a href="#">Termos e Condições</a>
                                    </label>
                                </div>
                                <div class="grid">
                                    <button type="submit" class="py-2 px-4 inline-block text-center rounded-sm leading-normal text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-hidden focus:ring-0">
                                        Registrar
                                    </button>
                                </div>
                            </form>
                            <div class="mt-3">
                                <p class="text-center mb-3">Já é cadastrado?</p>
                                <p class="text-center"><a class="hover:text-indigo-500" href="login-basic.html">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End register -->
</main>



@php
/*
<form wire:submit="register">
    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input wire:model="name" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                
                <x-text-input wire:model="password" id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password" />
                
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    
                    <x-text-input wire:model="password_confirmation" id="password_confirmation" class="block mt-1 w-full"
                    type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                    
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                            {{ __('Already registered?') }}
                        </a>
                        
                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
                */
                @endphp
            </div>
            