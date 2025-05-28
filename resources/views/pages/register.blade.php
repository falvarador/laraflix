<?php 

use function Laravel\Folio\middleware;
use function Laravel\Folio\name;

name('register');

middleware('guest');

?>

<x-auth-layout title="Sign Up">

    <livewire:register-form />

</x-auth-layout>