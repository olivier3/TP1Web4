<x-app-layout>
    <x-slot:header>
        <div class="flex justify-center">
            <h1><b>AJOUTER UNE ADRESSE AU REPERTOIRE</b></h1>
        </div>
    </x-slot:header>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <h1><b>AJOUTER UNE ADRESSE</b></h1>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form action="">
                <input type="text" placeholder="adresse a soumettre" name="search">
                <button type="Soumettre">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
