<?php 

use function Laravel\Folio\middleware;
use function Laravel\Folio\name;

name('login');

middleware('guest');

?>

<x-auth-layout title="Sign In">

    <livewire:login-form />

</x-auth-layout>