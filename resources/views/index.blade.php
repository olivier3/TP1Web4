<x-app-layout>
    <x-slot:header>
        <div class="flex justify-center">
            <h1>RÉPERTOIRE D'IP FRAUDULEUSES</h1>
        </div>
    </x-slot:header>
    <X-main>
        <div class="container flex justify-center mx-auto">
            <form class="w-6/12">
                <input class="w-9/12" type="text" placeholder="Mettre une IP à rechercher"/>
                <button type="submit">Rechercher</button>
            </form>
        </div>
    </X-main>
</x-app-layout>
