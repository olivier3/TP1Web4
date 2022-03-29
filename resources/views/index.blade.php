<x-app-layout>
    <x-slot:header>
        <div class="flex justify-center">
            <h1>RÉPERTOIRE D'IP FRAUDULEUSES</h1>
        </div>
    </x-slot:header>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <h1><b>ADRESSE À RECHERCHER</b></h1>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="Recherche">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
