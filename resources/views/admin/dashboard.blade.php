<x-app-layout>
  <x-slot name="header">
    Admin Dashboard
  </x-slot>
<main class="py-4">
    @yield('content')
</main>
@include('modal')
</x-app-layout>