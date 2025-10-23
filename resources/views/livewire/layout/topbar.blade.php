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


<div class="topbar-container bg-white shadow shadow-md fixed h-14 flex px-4 top-0">
    <div class="flex items-center justify-between w-full">
        <h1>TOPBAR</h1>
        <span class="material-symbols-outlined cursor-pointer" wire:click="logout">door_open</span>
    </div>
</div>