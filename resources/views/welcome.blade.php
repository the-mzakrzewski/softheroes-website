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
            <div class="logo">SoftHeroes</div>
            
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

        <!-- Vision and Impact Section -->
        <section id="o-nas" class="px-6 md:px-0 py-24 max-w-7xl mx-auto border-t border-gray-200">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12">
                <!-- Section Label -->
                <div class="md:col-span-3">
                    <span class="text-sm font-mono text-gray-400 tracking-widest uppercase">// NASZA WIZJA //</span>
                </div>

                <!-- Content -->
                <div class="md:col-span-9">
                    <h2 class="text-3xl md:text-5xl font-bold mb-8 leading-tight">
                        „Niezależnie czy to strona, aplikacja czy identyfikacja wizualna – tworzymy rzeczy, które działają.”
                    </h2>
                    <p class="text-lg text-gray-500 mb-16 max-w-2xl">
                        Wierzymy, że design to nie tylko wygląd, ale przede wszystkim sposób działania. Nasze podejście łączy analitykę z kreatywnością, dostarczając wymierne rezultaty.
                    </p>

                    <!-- Key Metrics -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 border-t border-gray-100 pt-10">
                        <div>
                            <div class="text-5xl font-bold text-blue-700 mb-2">47+</div>
                            <div class="text-sm text-gray-500 uppercase tracking-wide font-medium">Zrealizowanych projektów</div>
                        </div>
                        <div>
                            <div class="text-5xl font-bold text-blue-700 mb-2">8.5M+ PLN</div>
                            <div class="text-sm text-gray-500 uppercase tracking-wide font-medium">Przychodu klientów</div>
                        </div>
                        <div>
                            <div class="text-5xl font-bold text-blue-700 mb-2">95%</div>
                            <div class="text-sm text-gray-500 uppercase tracking-wide font-medium">Retencji klientów</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust and Transition -->
        <section class="px-6 md:px-12 pb-24 max-w-7xl mx-auto">
            <div class="border-t border-gray-200 pt-12">
                <p class="text-sm text-gray-400 mb-8 uppercase tracking-widest text-center md:text-left">Zaufali nam</p>
                <div class="flex flex-wrap justify-between items-center gap-8 grayscale opacity-60">
                    <!-- Logo Placeholders -->
                    <svg class="h-8 w-auto" viewBox="0 0 100 30" fill="currentColor"><path d="M10,15 L20,5 L30,15 L20,25 Z M40,5 H90 V25 H40 Z" /></svg>
                    <svg class="h-8 w-auto" viewBox="0 0 100 30" fill="currentColor"><circle cx="15" cy="15" r="10"/><rect x="35" y="5" width="55" height="20"/></svg>
                    <svg class="h-8 w-auto" viewBox="0 0 100 30" fill="currentColor"><rect x="5" y="5" width="20" height="20"/><rect x="35" y="5" width="55" height="20"/></svg>
                    <svg class="h-8 w-auto" viewBox="0 0 100 30" fill="currentColor"><path d="M15,5 L25,25 L5,25 Z"/><rect x="35" y="5" width="55" height="20"/></svg>
                    <svg class="h-8 w-auto" viewBox="0 0 100 30" fill="currentColor"><circle cx="15" cy="15" r="10"/><rect x="35" y="5" width="55" height="20"/></svg>
                </div>
            </div>
            
            <div class="border-t border-black mt-24 pt-12">
                <h3 class="text-3xl md:text-5xl font-bold max-w-4xl leading-tight">
                    Tak pomagamy ambitnym firmom osiągnąć sukces.
                </h3>
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