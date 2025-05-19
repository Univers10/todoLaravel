<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une tâche</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Ajouter une tâche</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700">Titre</label>
            <input type="text" name="title" id="title" class="w-full border rounded px-3 py-2 @error('title') border-red-500 @enderror" value="{{ old('title') }}">
            @error('title')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full border rounded px-3 py-2 @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Enregistrer</button>
        <a href="{{ route('tasks.index') }}" class="text-gray-500 ml-4">Annuler</a>
    </form>
</body>
</html>
