<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;
    
    /**
    * Handle an incoming authentication request.
    */
    public function login(): void
    {
        $this->validate();
        
        $this->form->authenticate();
        
        Session::regenerate();
        
        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <div class="bg-gray-100 " style="background: url(../images/login/blog_4.jpg);background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
        <div class="flex flex-wrap flex-row">
            <span class="fixed bg-gray-900 opacity-70 w-full h-full inset-x-0 top-0"></span>
            <div class="shrink max-w-full w-full min-h-screen sm:w-2/3 lg:w-1/2 xl:w-1/3 z-30">
                
                <div class="max-w-full w-full h-full px-6 sm:px-12 bg-white shadow-lg z-40 pt-[20%]">
                    <div class="relative">
                        <div class="p-6 sm:p-8">
                            <form id="login-form" wire:submit="login">
                                <div class="text-center">
                                    <a class="py-2 text-2xl" href="#">
                                        <img class="inline-block w-36" src="../images/logo.png">
                                    </a>
                                </div>
                                <hr class="block w-12 h-0.5 mx-auto my-5 bg-gray-700 border-gray-700">
                                <div class="mb-6">
                                    <label for="inputemail" class="inline-block mb-2">Email</label>
                                    <input name="email" wire:model="form.email" id="inputemail" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0" value="" aria-label="email" type="email" required>
                                    <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                                </div>
                                <div class="mb-6">
                                    <div class="flex flex-wrap flex-row">
                                        <div class="shrink max-w-full w-1/2">
                                            <label for="inputpass" class="inline-block mb-2">Senha</label>
                                        </div>
                                        <div class="shrink max-w-full w-1/2 text-end">
                                            <a class="hover:text-blue-700 text-xs" href="forgot-password.html">Esqueci minha senha</a>
                                        </div>
                                    </div>
                                    <input wire:model="form.password" name="password" id="inputpass" class="w-full leading-5 relative py-2 px-4 rounded-sm text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-hidden focus:border-gray-400 focus:ring-0   " aria-label="password" type="password" value="" required>
                                    <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                                </div>
                                <div class="mb-6 flex items-center">
                                    <input class="form-checkbox h-5 w-5 text-indigo-500  border border-gray-300  rounded-sm focus:outline-hidden" type="checkbox" value="" id="remember" required>
                                    <label class="ms-2" for="remember">
                                        Lembrar de mim
                                    </label>
                                </div>
                                <div class="grid">
                                    <button type="submit" class="py-2 px-4 inline-block text-center rounded-sm leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-hidden focus:ring-0">
                                        Login
                                    </button>
                                </div>
                            </form>
                            <div class="mt-4">
                                <p class="text-center mb-0">Ainda não possui uma conta? <a class="hover:text-indigo-500" href="/registro">Registre-se</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        