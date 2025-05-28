<?php 

use function Laravel\Folio\name;
use function Laravel\Folio\render;

name('home');

render(fn() => redirect()->route('profiles'));

?>

<x-auth-layout title="Home">
    <h1>Home</h1>
</x-auth-layout>