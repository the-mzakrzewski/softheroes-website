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
            <i data-lucide="menu" class="w-6 h-6"></i>
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
                        <i data-lucide="clock" class="trust-icon"></i>
                        <span>13+ lat doświadczenia</span>
                    </div>
                    <div class="trust-item">
                        <i data-lucide="zap" class="trust-icon"></i>
                        <span>Architektura High-Load</span>
                    </div>
                    <div class="trust-item">
                        <i data-lucide="code-2" class="trust-icon"></i>
                        <span>Stack: PHP • JS • PYTHON</span>
                    </div>
                    <div class="trust-item">
                        <i data-lucide="bar-chart-3" class="trust-icon"></i>
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
                            <i data-lucide="check-circle" class="size-6"></i>
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
                            <i data-lucide="file-text" class="size-6"></i>
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
                            <i data-lucide="hand-coins" class="size-6"></i>
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