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
                        <span>Redukcja Latency: avg. -80%</span>
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
        </div>
    </section>

    <section class="audit-section">
        <div class="section-grid">
            <!-- Section Label -->
            <div class="section-label-col">
                <span class="section-label">// AUDYT WYDAJNOŚCI //</span>
            </div>

            <!-- Content -->
            <div class="section-content-col">
                <h2 class="blockers-title">
                    Odzyskaj kontrolę nad stabilnością swojego systemu dzięki ustrukturyzowanej diagnozie. Skupiam się
                    na znalezieniu najkrótszej drogi do odblokowania Twojego biznesu.
                </h2>
                <p class="blockers-description">
                    Audyt to intensywny sprint diagnostyczny, który kończy się konkretną listą priorytetów technicznych.
                    Zamiast wprowadzać przypadkowe poprawki, działam metodą naukową: analizuję telemetrię, profiluję kod
                    i badam zachowanie bazy danych pod obciążeniem.
                    <br/> <br/>
                    Otrzymujesz ode mnie dokumentację „Performance Roadmap”, która jasno wskazuje, co wymaga
                    natychmiastowej interwencji (Quick Wins), a co jest zadaniem architektonicznym na przyszłość. Całość
                    procesu odbywa się asynchronicznie i bezinwazyjnie – nie angażuję Twojego zespołu, pracuję na
                    kopiach logów i dostępach do repozytorium.
                </p>
            </div>
        </div>

        <div class="audit-grid">
            <!-- Left Column: Timeline -->
            <div class="audit-timeline">
                <!-- Stage 1 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <i data-lucide="search"></i>
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-stage-label">Etap 01</span>
                        <h3 class="timeline-title">Telemetria i profilowanie</h3>
                        <p class="timeline-desc">
                            Skupiam się na konfiguracji narzędzi pomiarowych i zbieraniu danych z kluczowych ścieżek
                            użytkownika. Identyfikuję „najdroższe” operacje i mierzę realne czasy odpowiedzi backendu.
                        </p>
                    </div>
                </div>

                <!-- Stage 2 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <i data-lucide="file-text"></i>
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-stage-label">Etap 02</span>
                        <h3 class="timeline-title">Izolacja wąskich gardeł</h3>
                        <p class="timeline-desc">
                            Schodzę na poziom zapytań SQL i logiki biznesowej. Szukam nieefektywnej komunikacji między
                            usługami, brakujących indeksów oraz problemów z zarządzaniem pamięcią w PHP, Pythonie lub
                            JS.
                        </p>
                    </div>
                </div>

                <!-- Stage 3 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <i data-lucide="layers"></i>
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-stage-label">Etap 03</span>
                        <h3 class="timeline-title">Audyt Infrastruktury</h3>
                        <p class="timeline-desc">
                            Weryfikuję, czy konfiguracja serwerowa (AWS, Azure, Bare-metal) wspiera Twoją aplikację.
                            Szukam błędów w konfiguracji środowiska, których naprawa może przynieść natychmiastową ulgę
                            dla systemu.
                        </p>
                    </div>
                </div>

                <!-- Stage 4 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <i data-lucide="activity"></i>
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-stage-label">Etap 04</span>
                        <h3 class="timeline-title">Performance Roadmap & Strategia</h3>
                        <p class="timeline-desc">
                            Dostarczam raport z jasną hierarchią działań. Dzielę zadania na te, które dają wynik w 24h,
                            oraz strategiczne rekomendacje, które trwale wyeliminują dług techniczny w Twojej
                            architekturze.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Pricing & CTA -->
            <div class="audit-pricing-wrapper">
                <div class="audit-pricing-card">
                    <div class="audit-pricing-content">
                        <div class="audit-pricing-header">
                            <div class="flex flex-col gap-1">
                                <span class="text-blue-500 text-[10px] font-black uppercase tracking-[0.3em] mb-3">Inwestycja już od</span>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-5xl md:text-6xl font-black text-white tracking-tighter">4999</span>
                                    <span class="text-xl font-bold text-neutral-500">PLN</span>
                                </div>
                                <div class="mt-6 pt-6 border-t border-neutral-800">
                                    <p class="text-[11px] text-neutral-400 leading-relaxed uppercase tracking-widest">
                                        Cena netto. Ostateczna wycena zależy od <br> wielkości i złożoności Twojego
                                        systemu.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <ul class="audit-features-list">
                            <li class="audit-feature-item">
                                <i data-lucide="clock" class="audit-feature-icon"></i>
                                <span>Czas realizacji: ok. 5 dni roboczych</span>
                            </li>
                            <li class="audit-feature-item">
                                <i data-lucide="check-circle" class="audit-feature-icon"></i>
                                <span>Pełna analiza kodu i infrastruktury</span>
                            </li>
                            <li class="audit-feature-item">
                                <i data-lucide="check-circle" class="audit-feature-icon"></i>
                                <span>Raport z listą "Quick Wins"</span>
                            </li>
                            <li class="audit-feature-item">
                                <i data-lucide="check-circle" class="audit-feature-icon"></i>
                                <span>Plan naprawczy "Performance Roadmap"</span>
                            </li>
                            <li class="audit-feature-item">
                                <i data-lucide="check-circle" class="audit-feature-icon"></i>
                                <span>1h konsultacji omówienia wyników</span>
                            </li>
                            <li class="audit-feature-item">
                                <i data-lucide="check-circle" class="audit-feature-icon"></i>
                                <span>Gwarancja znalezienia wąskich gardeł</span>
                            </li>
                        </ul>
                    </div>

                    <div class="audit-cta-wrapper">
                        <a href="#kontakt" class="audit-cta">Zamów Audyt</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cases-section">
        <div class="section-grid">
            <!-- Section Label -->
            <div class="section-label-col">
                <span class="section-label">// CASE STUDY //</span>
            </div>

            <!-- Content -->
            <div class="section-content-col">
                <h2 class="blockers-title">
                    Optymalizacja backendu to nie tylko czystszy kod – to mierzalny wpływ na stabilność biznesu i realne oszczędności w infrastrukturze.
                </h2>
                <p class="blockers-description">
                    Poniżej znajdziesz wybrane realizacje, w których mierzyłem się z krytycznymi problemami wydajnościowymi. Każdy z tych przypadków wymagał innego podejścia: od głębokiej refaktoryzacji zapytań SQL, przez zmianę architektury potoków danych, aż po wdrożenie zaawansowanych mechanizmów cachowania.
                    <br /> <br />
                    Nie publikuję tu setek linii kodu, ale konkretne metryki, które pokazują stan systemu przed i po mojej interwencji. Moim celem w każdym projekcie jest znalezienie tzw. „dźwigni” – tych 20% zmian w architekturze, które dają 80% poprawy szybkości działania systemu.
                </p>

            </div>
        </div>

        <div class="cases-grid">
            <!-- Case 1 -->
            <div class="case-card">
                <div class="case-header">
                    <span class="case-tag">E-Commerce High-Load</span>
                    <h3 class="case-title">Ratunek silnika E-commerce pod szczytowym obciążeniem</h3>
                </div>
                
                <div class="case-content">
                    <span class="case-lead">Platforma stawała się bezużyteczna w godzinach szczytu, generując czasy odpowiedzi powyżej 120 sekund i masowe porzucenia koszyków.</span>
                    
                    <p class="case-desc">
                        Gdy baza danych przestała radzić sobie z sesjami tysięcy użytkowników jednocześnie, firma zaczęła notować realne straty finansowe. Problem leżał w nieefektywnych zapytaniach i braku odpowiedniej warstwy cachowania.
                    </p>

                    <ul class="case-list">
                        <li class="case-list-item">
                            <i data-lucide="check" class="case-list-icon"></i> 
                            <span><strong>Wdrożenie warstwy Redis</strong> – Oddelegowanie powtarzalnych odczytów i sesji do pamięci RAM, odciążając główną bazę danych o 70%.</span>
                        </li>
                        <li class="case-list-item">
                            <i data-lucide="check" class="case-list-icon"></i> 
                            <span><strong>Refaktoryzacja zapytań</strong> – Eliminacja kosztownych joinów na ogromnych zbiorach danych.</span>
                        </li>
                        <li class="case-list-item">
                            <i data-lucide="check" class="case-list-icon"></i> 
                            <span><strong>Precyzyjne indeksowanie</strong> – Analiza planów wykonania zapytań i wdrożenie indeksów celujących w procesy.</span>
                        </li>
                    </ul>
                </div>

                <div class="case-footer">
                    <div class="case-metrics-container">
                        <div class="case-metric-box before">
                            <span class="case-metric-label">Przed</span>
                            <span class="case-metric-value">120s+</span>
                        </div>
                        <div class="case-metric-box after">
                            <span class="case-metric-label">Po</span>
                            <span class="case-metric-value">&lt;200ms</span>
                        </div>
                    </div>

                    <div class="case-result-badge">
                        <p class="case-result-text">WYNIK: Redukcja czasu ładowania o 99%.</p>
                    </div>
                </div>
            </div>

            <!-- Case 2 -->
            <div class="case-card">
                <div class="case-header">
                    <span class="case-tag">Data Ingestion</span>
                    <h3 class="case-title">Optymalizacja potoków danych o wolumenie 20GB dziennie</h3>
                </div>
                
                <div class="case-content">
                    <span class="case-lead">Krytyczny proces przetwarzania danych trwał 24 godziny, zmuszając firmę do pracy na nieaktualnych informacjach.</span>
                    
                    <p class="case-desc">
                        Wąskie gardło w potoku danych (data pipeline) uniemożliwiało podejmowanie decyzji w czasie rzeczywistym. System nie nadążał z parsowaniem surowych plików. Tradycyjne podejście plikowe osiągnęło swój kres wydajnościowy.
                    </p>

                    <ul class="case-list">
                        <li class="case-list-item">
                            <i data-lucide="check" class="case-list-icon"></i> 
                            <span><strong>MongoDB as Staging</strong> – Wdrożenie warstwy stagingowej do błyskawicznego parsowania i wstępnej obróbki surowych danych.</span>
                        </li>
                        <li class="case-list-item">
                            <i data-lucide="check" class="case-list-icon"></i> 
                            <span><strong>Streamowanie danych</strong> – Zastąpienie powolnych procesów odczytu plików zoptymalizowanym przesyłem strumieniowym.</span>
                        </li>
                        <li class="case-list-item">
                            <i data-lucide="check" class="case-list-icon"></i> 
                            <span><strong>Równoleglizacja i Bulk-Ops</strong> – Rozbicie monoprocesu na dziesiątki równoległych wątków wykorzystujących operacje zbiorcze.</span>
                        </li>
                    </ul>
                </div>

                <div class="case-footer">
                    <div class="case-metrics-container">
                        <div class="case-metric-box before">
                            <span class="case-metric-label">Przed</span>
                            <span class="case-metric-value">24h</span>
                        </div>
                        <div class="case-metric-box after">
                            <span class="case-metric-label">Po</span>
                            <span class="case-metric-value">5min</span>
                        </div>
                    </div>

                    <div class="case-result-badge">
                        <p class="case-result-text">WYNIK: 288-krotny wzrost wydajności.</p>
                    </div>
                </div>
            </div>
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
                                Nie zgaduję. Używam profilowania kodu, aby wskazać realne źródła problemów i wdrożyć
                                poprawki, które faktycznie działają.
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
                                Optymalizuję system tak, aby Twój system mógł obsłużyć większy ruch bez konieczności
                                ciągłego zwiększania wydatków na infrastrukturę.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section">
        <div class="section-grid">
            <!-- Section Label -->
            <div class="section-label-col">
                <span class="section-label">// MASZ PYTANIA? //</span>
            </div>

            <!-- Content -->
            <div class="section-content-col">
                <h2 class="blockers-title">
                    Znajdź odpowiedzi dotyczące optymalizacji Twojego systemu.
                </h2>
            </div>
        </div>

        <div class="faq-grid">
            <!-- Q1 -->
            <div class="faq-item">
                <div class="faq-question-col">
                    <i data-lucide="cpu" class="faq-icon"></i>
                    <h3 class="faq-question">W jakich technologiach się specjalizuje?</h3>
                </div>
                <div class="faq-answer-col">
                    <p class="faq-answer">
                        Skupiam się wyłącznie na tym, co znam najlepiej: PHP (Laravel, Symfony), JavaScript/TypeScript (Node.js) oraz Python (Django, FastAPI). Optymalizuję bazy danych PostgreSQL, MySQL i MongoDB oraz architekturę opartą o Redis i RabbitMQ.
                    </p>
                </div>
            </div>

            <!-- Q2 -->
            <div class="faq-item">
                <div class="faq-question-col">
                    <i data-lucide="shield-check" class="faq-icon"></i>
                    <h3 class="faq-question">Czy audyt wymaga przerwy w działaniu systemu?</h3>
                </div>
                <div class="faq-answer-col">
                    <p class="faq-answer">
                        Nie. Proces audytu jest całkowicie bezinwazyjny. Pracuję asynchronicznie, analizując logi, telemetrię i kod źródłowy. Nie wprowadzam zmian na produkcji bez wcześniejszych testów i Twojej akceptacji.
                    </p>
                </div>
            </div>

            <!-- Q3 -->
            <div class="faq-item">
                <div class="faq-question-col">
                    <i data-lucide="lock" class="faq-icon"></i>
                    <h3 class="faq-question">Czy możemy podpisać umowę NDA?</h3>
                </div>
                <div class="faq-answer-col">
                    <p class="faq-answer">
                        Tak. Bezpieczeństwo Twojego kodu i danych biznesowych jest priorytetem. Przed uzyskaniem dostępów podpisujemy standardową umowę o zachowaniu poufności (NDA).
                    </p>
                </div>
            </div>

            <!-- Q4 -->
            <div class="faq-item">
                <div class="faq-question-col">
                    <i data-lucide="calendar" class="faq-icon"></i>
                    <h3 class="faq-question">Ile trzeba czekać na rozpoczęcie prac?</h3>
                </div>
                <div class="faq-answer-col">
                    <p class="faq-answer">
                        Jako ekspert pracujący z ograniczoną liczbą klientów, zazwyczaj planuję audyty z 2-tygodniowym wyprzedzeniem. Pozwala mi to na pełne skupienie się na jednym systemie w danym sprincie diagnostycznym.
                    </p>
                </div>
            </div>

            <!-- Q5 -->
            <div class="faq-item">
                <div class="faq-question-col">
                    <i data-lucide="layout" class="faq-icon"></i>
                    <h3 class="faq-question">Czy zajmujesz się również frontendem lub CMS-ami?</h3>
                </div>
                <div class="faq-answer-col">
                    <p class="faq-answer">
                        Nie. Nie zajmuję się WordPressami, poprawianiem wizualnych błędów w CSS czy budową stron wizytówek. Moja domena to wyłącznie wydajność backendu, bazy danych i architektura systemowa.
                    </p>
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