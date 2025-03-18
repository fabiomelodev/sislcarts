@props([
    'message'
])
<div
class="top-8 right-4 border shadow-lg rounded-lg absolute flex justify-center items-center gap-2 bg-white py-2 px-6"
x-data="{ show: false }"
x-init="setTimeout(() => show = true, 800); setTimeout(() => show = false, 3000)"
x-show="show"
x-transition:enter="transition duration-500"
x-transition:enter-start="translate-x-full"
x-transition:enter-end="translate-x-0"
x-transition:leave="transition duration-500"
x-transition:leave-start="translate-0"
x-transition:leave-end="translate-x-full">
    <p class="text-sm font-medium text-center">
        {{ $message }}
    </p>

    <div class="w-4 h-4 rounded-full bg-green-500"></div>
</div>
