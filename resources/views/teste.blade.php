<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white p-4 text-center text-xl font-bold">
        Minha Página Tailwind
    </header>
    
    <main class="max-w-4xl mx-auto p-6">
        <section class="text-center my-8">
            <h1 class="text-3xl font-bold">Bem-vindo à minha página</h1>
            <p class="text-gray-700 mt-2">Esta é uma página simples utilizando Tailwind CSS.</p>
        </section>
        
        <section class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-4 shadow-md rounded-lg">
                <h2 class="text-xl font-semibold">Card 1</h2>
                <p class="text-gray-600 mt-2">Conteúdo do primeiro card.</p>
            </div>
            <div class="bg-white p-4 shadow-md rounded-lg">
                <h2 class="text-xl font-semibold">Card 2</h2>
                <p class="text-gray-600 mt-2">Conteúdo do segundo card.</p>
            </div>
            <div class="bg-white p-4 shadow-md rounded-lg">
                <h2 class="text-xl font-semibold">Card 3</h2>
                <p class="text-gray-600 mt-2">Conteúdo do terceiro card.</p>
            </div>
            <div class="bg-white p-4 shadow-md rounded-lg">
                <h2 class="text-xl font-semibold">Card 3</h2>
                <p class="text-gray-600 mt-2">aaaaaaaaaaaaaa</p>
            </div>
        </section>
    </main>
    
    <footer class="bg-blue-600 text-white text-center p-4 mt-8">
        &copy; 2025 Minha Página Tailwind
    </footer>
</body>
</html>