<!DOCTYPE html>
<html lang="pl" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SoftHeroes - Rozwiązania Cyfrowe</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-black font-sans antialiased">

    <!-- Header / Navbar -->
    <!-- Navbar aligned with the rest of the content width (max-w-7xl) -->
    <header class="header">
        <div class="header-container">
            <div class="logo">soft<span>heroes</span></div>
            
            <!-- Real Menu instead of Hamburger -->
            <nav class="nav-menu">
                <a href="#uslugi" class="nav-link">Usługi</a>
                <a href="#o-nas" class="nav-link">O nas</a>
                <a href="#projekty" class="nav-link">Projekty</a>
                <a href="#kontakt" class="nav-cta">Kontakt</a>
            </nav>

            <!-- Mobile Menu Icon -->
            <button class="mobile-menu-btn" aria-label="Menu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </header>

    <main class="main-content"> <!-- Padding top to account for fixed header -->
        
        <!-- Hero Section: Full Height & No Image -->
        <section class="hero-section">
            <div class="hero-container">
                <!-- Main Headline -->
                <h1 class="hero-title">
                    Wydajniejszy backend to <span class="hero-highlight">niższe koszty</span> oraz stabilny wzrost Twojej firmy
                </h1>
                
                <!-- Sub-headline & CTA -->
                <div class="hero-subtitle-container">
                    <p class="hero-subtitle">
                        Specjalistyczna optymalizacja systemów w PHP, Node.js i Pythonie. Zredukuję obciążenie Twoich serwerów i wyeliminuję przestoje, byś mógł skupić się na sprzedaży, a nie na gaszeniu pożarów technicznych.
                    </p>
                    <a href="#uslugi" class="hero-cta">
                        Umów audyt wydajności
                    </a>
                    
                    <div class="hero-trust-indicators">
                        <div class="trust-item">
                            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>13+ lat doświadczenia</span>
                        </div>
                        <div class="trust-item">
                            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                            <span>Architektura High-Load</span>
                        </div>
                        <div class="trust-item">
                            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                            <span>Stack: PHP • JS • PYTHON</span>
                        </div>
                        <div class="trust-item">
                            <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                            <span>Średnio -80% czasu odpowiedzi</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="blockers-section">
            <div class="blockers-grid">
                <!-- Section Label -->
                <div class="blockers-label-col">
                    <span class="blockers-label">// BLOKADY WZROSTU //</span>
                </div>

                <!-- Content -->
                <div class="blockers-content-col">
                    <h2 class="blockers-title">
                        Twój biznes rośnie szybciej niż wydajność Twojego systemu, a dokupowanie kolejnych serwerów przestało przynosić rezultaty.
                    </h2>
                    <p class="blockers-description">
                        Większość firm na etapie skalowania wpada w pułapkę „pudrowania problemu”. Zamiast szukać przyczyn w architekturze backendu, inwestują w coraz droższą infrastrukturę chmurową. To rozwiązanie krótkowzroczne, które generuje ogromne koszty, nie usuwając realnego wąskiego gardła.
                        <br><br>
                        Prawdziwa bariera prawie zawsze leży w kodzie i strukturze danych. Jako inżynier z 13-letnim doświadczeniem pomagam firmom zidentyfikować te punkty oporu i odblokować potencjał aplikacji bez konieczności kosztownego przepisywania systemu od zera.
                    </p>
                </div>
            </div>

            <div class="blockers-boxes-container">
                <!-- Box 1 -->
                <div class="blocker-box">
                    <div class="blocker-box-number">01</div>
                    <h3 class="blocker-box-title">Biznes i konwersja</h3>
                    <p class="blocker-box-text">
                        <strong>Wolny system to uciekający klienci.</strong> Każda sekunda opóźnienia w odpowiedzi aplikacji to mierzalny spadek zadowolenia użytkowników i wzrost współczynnika odrzuceń. Jeśli system zwalnia w kluczowych momentach, Twoje wydatki na marketing idą na marne, bo backend staje się barierą dla sprzedaży.
                    </p>
                </div>

                <!-- Box 2 -->
                <div class="blocker-box">
                    <div class="blocker-box-number">02</div>
                    <h3 class="blocker-box-title">Infrastruktura i koszty</h3>
                    <p class="blocker-box-text">
                        <strong>Drenaż budżetu przez nieefektywny kod.</strong> Nieoptymalne zapytania i brak właściwego cachowania „przepalają” zasoby serwerowe, zmuszając Cię do płacenia gigantycznych rachunków za AWS czy Azure. Zoptymalizowany system pozwala zredukować koszty utrzymania nawet o 40-60%, przy zachowaniu tej samej skali ruchu.
                    </p>
                </div>

                <!-- Box 3 -->
                <div class="blocker-box">
                    <div class="blocker-box-number">03</div>
                    <h3 class="blocker-box-title">Zespół i rozwój</h3>
                    <p class="blocker-box-text">
                        <strong>Paraliż deweloperski i gaszenie pożarów.</strong> Zamiast dowozić nowe funkcjonalności, Twój zespół spędza 80% czasu na reanimowaniu bazy danych. Frustracja programistów i strach przed każdym wdrożeniem blokują innowacje. Stabilna architektura przywraca Twojemu zespołowi zwinność i spokój pracy.
                    </p>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-gray-50 py-12 px-6 md:px-12 border-t border-gray-200">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center md:items-end gap-6">
            <div class="text-center md:text-left">
                <div class="text-xl font-bold mb-2">SoftHeroes</div>
                <p class="text-gray-500 text-sm">© {{ date('Y') }} SoftHeroes Inc. Wszelkie prawa zastrzeżone.</p>
            </div>
            <div class="flex gap-6 text-sm text-gray-500">
                <a href="#" class="hover:text-black">Prywatność</a>
                <a href="#" class="hover:text-black">Regulamin</a>
            </div>
        </div>
    </footer>
</body>
</html>