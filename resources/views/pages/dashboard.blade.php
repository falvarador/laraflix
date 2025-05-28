<?php 

use function Laravel\Folio\middleware;
use function Laravel\Folio\name;

name('dashboard');

middleware('auth');

?>

<x-dashboard-layout>

    <x-slot name="header">
        <x-navbar />
    </x-slot>

    <livewire:billboard />
    <section class="pt-5 pb-40">
        <livewire:movie-list type="trending" />
        <livewire:movie-list type="favorites" />
    </section>

</x-dashboard-layout>