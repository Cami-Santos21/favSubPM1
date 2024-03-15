<x-layout>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<div class="grid place-content-center h-screen">

    <h1 class="font"> Log in </h1>
    <form action="/login" method="POST">
        @csrf
        <div class="my-2">
           <x-input titulo="Email" type="text" nombre="email"/>
        </div>
        <div>
            <x-input titulo="password" type="password" nombre="password"/>
        </div>
    </form>
        <button class="border bg-[#f9a8d4] rounded border-[#c44685]" type="submit">Log In</button>
    </form>
</x-layout>
