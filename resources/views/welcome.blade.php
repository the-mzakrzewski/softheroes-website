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
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                 stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
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
                Wydajniejszy backend to <span class="hero-highlight">niższe koszty</span> oraz stabilny wzrost Twojej
                firmy
            </h1>

            <!-- Sub-headline & CTA -->
            <div class="hero-subtitle-container">
                <p class="hero-subtitle">
                    Specjalistyczna optymalizacja systemów w PHP, Node.js i Pythonie. Zredukuję obciążenie Twoich
                    serwerów i wyeliminuję przestoje, byś mógł skupić się na sprzedaży, a nie na gaszeniu pożarów
                    technicznych.
                </p>
                <a href="#uslugi" class="hero-cta">
                    Umów audyt wydajności
                </a>

                <div class="hero-trust-indicators">
                    <div class="trust-item">
                        <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        <span>13+ lat doświadczenia</span>
                    </div>
                    <div class="trust-item">
                        <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span>Architektura High-Load</span>
                    </div>
                    <div class="trust-item">
                        <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                        <span>Stack: PHP • JS • PYTHON</span>
                    </div>
                    <div class="trust-item">
                        <svg class="trust-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        <span>Średnio -80% czasu odpowiedzi</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="blockers-section">
        <div class="section-grid">
            <!-- Section Label -->
            <div class="section-label-col">
                <span class="section-label">// BLOKADY WZROSTU //</span>
            </div>

            <!-- Content -->
            <div class="section-content-col">
                <h2 class="blockers-title">
                    Zamiast eliminować problemy w architekturze, większość firm próbuje je „przykryć” coraz droższą
                    infrastrukturą.
                </h2>
                <p class="blockers-description">
                    Inwestowanie w mocniejsze serwery to rozwiązanie krótkowzroczne – generuje wysokie koszty, nie
                    usuwając źródła problemu. Prawdziwa bariera skalowalności prawie zawsze leży w kodzie i strukturze
                    danych.
                    <br><br>
                    Wykorzystuję 13-letnie doświadczenie, aby precyzyjnie wskazać te punkty oporu. Pomagam odblokować
                    wydajność Twojej aplikacji i obniżyć koszty utrzymania, unikając ryzykownego przepisywania systemu
                    od zera.
                </p>
            </div>
        </div>

        <div class="blockers-boxes-container">
            <!-- Box 1 -->
            <div class="blocker-box">
                <div class="blocker-box-number">01</div>
                <h3 class="blocker-box-title">Biznes i konwersja</h3>
                <p class="blocker-box-text">
                    <strong>Wolny system to uciekający klienci.</strong> Każda sekunda opóźnienia w odpowiedzi aplikacji
                    to mierzalny spadek zadowolenia użytkowników i wzrost współczynnika odrzuceń. Jeśli system zwalnia w
                    kluczowych momentach, Twoje wydatki na marketing idą na marne, bo backend staje się barierą dla
                    sprzedaży.
                </p>
            </div>

            <!-- Box 2 -->
            <div class="blocker-box">
                <div class="blocker-box-number">02</div>
                <h3 class="blocker-box-title">Infrastruktura i koszty</h3>
                <p class="blocker-box-text">
                    <strong>Drenaż budżetu przez nieefektywny kod.</strong> Nieoptymalne zapytania i brak właściwego
                    cachowania „przepalają” zasoby serwerowe, zmuszając Cię do płacenia gigantycznych rachunków za AWS
                    czy Azure. Zoptymalizowany system pozwala zredukować koszty utrzymania nawet o 40-60%, przy
                    zachowaniu tej samej skali ruchu.
                </p>
            </div>

            <!-- Box 3 -->
            <div class="blocker-box">
                <div class="blocker-box-number">03</div>
                <h3 class="blocker-box-title">Zespół i rozwój</h3>
                <p class="blocker-box-text">
                    <strong>Paraliż deweloperski i gaszenie pożarów.</strong> Zamiast dowozić nowe funkcjonalności, Twój
                    zespół spędza 80% czasu na reanimowaniu bazy danych. Frustracja programistów i strach przed każdym
                    wdrożeniem blokują innowacje. Stabilna architektura przywraca Twojemu zespołowi zwinność i spokój
                    pracy.

            </div>
    </section>

    <section class="about-section">
        <div class="section-grid">
            <!-- Section Label -->
            <div class="section-label-col">
                <span class="section-label">// O SOFTHEROES //</span>
            </div>

            <!-- Content -->
            <div class="section-content-col">
                <h2 class="blockers-title">
                    Pomagam firmom, których backend przestał nadążać za wzrostem biznesu. Wykorzystuję 13 lat
                    doświadczenia, aby przywrócić systemom szybkość i stabilność.
                </h2>
                <p class="blockers-description">
                    Nazywam się Michał Zakrzewski. Specjalizuję się w optymalizacji wydajności i naprawie wąskich gardeł
                    w systemach opartych o PHP, Python i JavaScript. W softheroes pracujesz bezpośrednio z inżynierem –
                    bez pośredników i bez zgadywania, gdzie leży problem. Skupiam się na konkretnych wynikach: krótszym
                    czasie odpowiedzi i mniejszym obciążeniu serwerów.
                </p>

                <div class="about-checklist">
                    <!-- Item 1 -->
                    <div class="checklist-item">
                        <div class="checklist-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </div>
                        <div class="checklist-content">
                            <h3 class="checklist-title">Stabilizacja zamiast rewolucji</h3>
                            <p class="checklist-desc">
                                Zamiast pisać system od nowa, naprawiam to, co już masz. Skupiam się na optymalizacji
                                bazy danych i poprawie kluczowych procesów backendowych.
                            </p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="checklist-item">
                        <div class="checklist-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z"/>
                            </svg>
                        </div>
                        <div class="checklist-content">
                            <h3 class="checklist-title">Dane zamiast intuicji</h3>
                            <p class="checklist-desc">
                                Nie zgaduję. Używam profilowania kodu, aby wskazać realne źródła problemów i wdrożyć poprawki, które faktycznie działają.
                            </p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="checklist-item">
                        <div class="checklist-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z"/>
                            </svg>
                        </div>
                        <div class="checklist-content">
                            <h3 class="checklist-title">Efektywność kosztowa</h3>
                            <p class="checklist-desc">
                                Optymalizuję system tak, aby Twój system mógł obsłużyć większy ruch bez konieczności ciągłego zwiększania wydatków na infrastrukturę.
                            </p>
                        </div>
                    </div>
                </div>
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