<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Polityka Prywatności - softheroes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-neutral-800 font-sans antialiased">

    <header class="header">
        <div class="header-container">
            <a href="/" class="logo">soft<span>heroes</span></a>
            <a href="/" class="nav-link text-sm font-bold">← Powrót do strony głównej</a>
        </div>
    </header>

    <main class="max-w-3xl mx-auto px-6 py-32">
        <h1 class="text-4xl font-bold mb-8">Polityka Prywatności</h1>
        
        <div class="prose prose-neutral">
            <p class="mb-4">
                Niniejsza Polityka Prywatności określa zasady przetwarzania i ochrony danych osobowych przekazanych przez Użytkowników w związku z korzystaniem ze strony internetowej SoftHeroes.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">1. Administrator Danych</h2>
            <p class="mb-4">
                Administratorem danych osobowych jest Soft Heroes Michał Zakrzewski, z siedzibą przy ul. Milenijna 29/33, 95-100 Zgierz, NIP: 7322102767.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">2. Zakres zbierania danych</h2>
            <p class="mb-4">
                Zbieramy dane podane dobrowolnie przez formularz kontaktowy, w tym: imię, nazwisko, adres e-mail oraz inne informacje zawarte w treści wiadomości.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">3. Cel przetwarzania danych</h2>
            <p class="mb-4">
                Dane przetwarzane są w celu udzielenia odpowiedzi na przesłane zapytanie, przedstawienia oferty współpracy (na żądanie Użytkownika) oraz w celach analitycznych i statystycznych.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">4. Bezpieczeństwo</h2>
            <p class="mb-4">
                Wdrażamy odpowiednie środki techniczne i organizacyjne, aby chronić Twoje dane przed nieuprawnionym dostępem, utratą czy zniszczeniem.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">5. Kontakt</h2>
            <p class="mb-4">
                W sprawach związanych z ochroną danych osobowych prosimy o kontakt pod adresem: <a href="mailto:kontakt@softheroes.pl" class="text-blue-600 underline">kontakt@softheroes.pl</a>.
            </p>
        </div>
    </main>

    <footer class="footer-section mt-auto">
        <div class="footer-bottom">
            <div>&copy; {{ date('Y') }} softheroes. All rights reserved.</div>
        </div>
    </footer>

</body>
</html>