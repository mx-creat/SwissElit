<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwissElit | Excellence Digitale Genève</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root { --swiss-red: #E60000; --dark-bg: #030303; }
        
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--dark-bg); 
            color: #ffffff; 
            overflow-x: hidden; 
            -webkit-font-smoothing: antialiased;
        }

        /* --- Effet de Grille Industrielle --- */
        .grid-overlay {
            position: fixed; inset: 0;
            background-image: 
                linear-gradient(to right, rgba(255,255,255,0.02) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.02) 1px, transparent 1px);
            background-size: 50px 50px; 
            z-index: 1; 
            pointer-events: none;
        }

        /* --- Vidéo d'Arrière-plan (Ton GIF MP4) --- */
        .video-background {
            position: absolute;
            right: -5%;
            width: 65vw;
            height: auto;
            aspect-ratio: 1/1;
            object-fit: contain;
            z-index: 0;
            pointer-events: none;
            filter: contrast(1.1) brightness(0.8);
            mask-image: radial-gradient(circle at center, black 30%, transparent 75%);
            -webkit-mask-image: radial-gradient(circle at center, black 30%, transparent 75%);
        }

        .hero-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(90deg, #030303 30%, rgba(3,3,3,0.7) 60%, transparent 100%);
            z-index: 1; pointer-events: none;
        }

        /* --- Typographie Massive --- */
       /* --- Typographie Massive Corrigée --- */
        .hero-title {
            font-size: clamp(3.5rem, 10vw, 8.5rem);
            /* Augmente le line-height de 0.85 à 1.1 ou 1.2 pour l'espace vertical */
            line-height: 1.1; 
            font-weight: 900;
            text-transform: uppercase;
            /* Augmente légèrement l'espace entre les lettres pour la lisibilité */
            letter-spacing: -0.02em; 
            /* Ajoute une marge plus forte en bas pour décoller du paragraphe */
            margin-bottom: 3.5rem; 
        }

        /* Optionnel : si tu veux un espace spécifique entre le premier mot et le mot rouge */
        .hero-title span.text-glow-red {
            display: inline-block;
            margin-top: 0.5rem;
        }

        .text-glow-red {
            color: var(--swiss-red);
            text-shadow: 0 0 30px rgba(230, 0, 0, 0.5);
        }

        /* --- Cartes de Services --- */
        .service-card {
            background: #080808;
            border: 1px solid rgba(255, 255, 255, 0.05);
            padding: 3.5rem 2.5rem;
            position: relative;
            transition: all 0.5s cubic-bezier(0.19, 1, 0.22, 1);
            overflow: hidden;
        }

        .service-card:hover {
            border-color: var(--swiss-red);
            transform: translateY(-10px);
            background: #0a0a0a;
        }

        .service-card::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; width: 0%; height: 3px;
            background: var(--swiss-red);
            transition: width 0.5s ease;
        }
        .service-card:hover::after { width: 100%; }

        /* --- Boutons Brutalistes --- */
        .btn-swiss {
            background-color: var(--swiss-red);
            color: white;
            padding: 1.25rem 2.5rem;
            font-size: 0.75rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            transition: all 0.4s ease;
            display: inline-flex;
            align-items: center;
            gap: 1rem;
        }

        .btn-swiss:hover {
            box-shadow: 0 0 30px rgba(230, 0, 0, 0.4);
            transform: scale(1.02);
        }

        /* --- Animations SE --- */
        @keyframes slow-spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
        .animate-slow-spin { animation: slow-spin 20s linear infinite; }
        .animate-reverse-spin { animation: slow-spin 15s linear reverse infinite; }

    </style>
</head>
<body class="antialiased">
    <div class="grid-overlay"></div>

    <nav class="fixed w-full z-50 transition-all duration-500 border-b border-white/5 bg-black/90 backdrop-blur-xl" id="navbar">
        <div class="max-w-7xl mx-auto px-6 h-24 flex justify-between items-center transition-all" id="nav-container">
            <a href="#" class="flex items-center gap-4 group">
                <div class="w-12 h-12 relative overflow-hidden flex items-center justify-center">
                    <img src="{{ asset('img/crx.png') }}" alt="SwissElit Logo" class="w-10 h-10 object-contain group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-red-600/20 opacity-0 group-hover:opacity-100 transition-opacity blur-lg"></div>
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-black tracking-tighter uppercase leading-none">Swiss<span class="text-red-600">Elit</span></span>
                </div>
            </a>
            <div class="hidden md:flex items-center gap-10 text-[10px] font-black tracking-[0.3em] uppercase">
                <a href="#services" class="hover:text-red-600 transition">Expertise</a>
                <a href="#engagement" class="hover:text-red-600 transition">Engagement</a>
                <a href="#contact" class="btn-swiss !py-3 !px-6 !text-[9px]">Démarrer un projet</a>
            </div>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center pt-24 overflow-hidden bg-black">
        <video autoplay muted loop playsinline class="video-background" id="heroVideo">
            <source src="{{ asset('img/gif.mp4') }}" type="video/mp4">
        </video>

        <div class="hero-overlay"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
            <div class="max-w-4xl" data-aos="fade-right">
                <div class="inline-flex items-center gap-3 px-4 py-2 border border-red-600/30 bg-red-600/5 text-red-500 text-[9px] font-bold uppercase tracking-[0.2em] mb-10">
                    <span class="w-1.5 h-1.5 bg-red-600 animate-pulse"></span>
                    Disponible pour projets à Genève
                </div>
                <h1 class="hero-title">L'EXPERTISE <br><span class="text-glow-red">CONNECTÉE.</span></h1>           
                <p class="text-xl text-gray-400 max-w-2xl font-light leading-relaxed mb-12">
                    Écosystèmes digitaux hautes performances. Architecture <span class="text-white border-b border-red-600/50">Laravel</span> & Interfaces Modernes. L'ingénierie suisse au service de votre gestion.
                </p>
                <div class="flex flex-wrap gap-5">
                    <a href="#services" class="btn-swiss group">
                        Découvrir nos solutions
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section class="py-16 bg-[#030303] border-y border-white/5 relative z-10">
        <div class="max-w-7xl mx-auto px-6 flex flex-wrap justify-center gap-12 opacity-25 grayscale contrast-125">
            <span class="text-xs font-bold tracking-[0.4em] uppercase">Vacheron & Constantin</span>
            <span class="text-xs font-bold tracking-[0.4em] uppercase">Swisscom</span>
            <span class="text-xs font-bold tracking-[0.4em] uppercase">UBS Group</span>
            <span class="text-xs font-bold tracking-[0.4em] uppercase">Rolex S.A.</span>
        </div>
    </section>

    <section id="services" class="py-32 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-20" data-aos="fade-up">
                <h2 class="text-4xl font-black uppercase tracking-tighter mb-4">Pôles d'Expertise</h2>
                <div class="w-20 h-1 bg-red-600"></div>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="service-card group" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-microchip text-4xl text-red-600 mb-8 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-black uppercase mb-3">Architecture</h3>
                    <p class="text-gray-500 text-sm font-light">Systèmes robustes et évolutifs basés sur les standards de l'informatique de gestion.</p>
                </div>
                <div class="service-card group" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-database text-4xl text-red-600 mb-8 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-black uppercase mb-3">Données</h3>
                    <p class="text-gray-500 text-sm font-light">Optimisation et sécurisation de vos actifs sur des serveurs souverains suisses.</p>
                </div>
                <div class="service-card group" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-eye text-4xl text-red-600 mb-8 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-black uppercase mb-3">UX/UI Design</h3>
                    <p class="text-gray-500 text-sm font-light">Interfaces ergonomiques et performantes pour maximiser l'adoption utilisateur.</p>
                </div>
                <div class="service-card group" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-chess-knight text-4xl text-red-600 mb-8 group-hover:scale-110 transition-transform"></i>
                    <h3 class="text-xl font-black uppercase mb-3">Consulting</h3>
                    <p class="text-gray-500 text-sm font-light">Accompagnement stratégique dans votre transformation digitale globale.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="engagement" class="py-32 bg-[#0a0a0a] border-y border-white/5 relative z-10">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 items-center gap-20">
            <div data-aos="fade-right">
                <span class="text-red-600 text-[10px] font-bold tracking-[0.4em] uppercase mb-4 block">L'ENGAGEMENT HELVÉTIQUE</span>
                <h2 class="text-5xl font-black uppercase mb-12">Précision <span class="text-glow-red">Standard.</span></h2>
                <div class="space-y-8">
                    <div class="flex gap-6 items-start">
                        <div class="w-12 h-12 flex-shrink-0 bg-red-600/10 border border-red-600/30 flex items-center justify-center text-red-600"><i class="fas fa-check"></i></div>
                        <div><h4 class="font-bold text-lg mb-1">Qualité sans compromis</h4><p class="text-gray-500 text-sm">Code audité pour garantir des performances optimales.</p></div>
                    </div>
                    <div class="flex gap-6 items-start">
                        <div class="w-12 h-12 flex-shrink-0 bg-red-600/10 border border-red-600/30 flex items-center justify-center text-red-600"><i class="fas fa-shield-alt"></i></div>
                        <div><h4 class="font-bold text-lg mb-1">Souveraineté suisse</h4><p class="text-gray-400 text-sm">Protection maximale de vos données critiques.</p></div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center" data-aos="zoom-in">
                <div class="w-80 h-80 border border-white/10 rounded-full flex items-center justify-center animate-slow-spin">
                    <div class="w-64 h-64 border-2 border-dashed border-red-600/30 rounded-full flex items-center justify-center animate-reverse-spin">
                        <div class="w-32 h-32 bg-red-600 rotate-45 flex items-center justify-center shadow-[0_0_50px_rgba(230,0,0,0.3)]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-32 relative z-10 bg-black">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20">
            <div data-aos="fade-right">
                <h2 class="text-5xl font-black uppercase mb-8">Démarrer un <span class="text-glow-red">projet.</span></h2>
                <p class="text-gray-400 mb-12">Nous créons des outils d'avenir pour votre entreprise à Genève.</p>
                <div class="space-y-6">
                    <div class="flex items-center gap-6 group">
                        <div class="w-10 h-10 border border-white/10 flex items-center justify-center group-hover:bg-red-600 transition-colors"><i class="fas fa-envelope"></i></div>
                        <span class="text-sm font-bold uppercase tracking-widest">contact@swisselit.ch</span>
                    </div>
                    <div class="flex items-center gap-6 group">
                        <div class="w-10 h-10 border border-white/10 flex items-center justify-center group-hover:bg-red-600 transition-colors"><i class="fas fa-map-marker-alt"></i></div>
                        <span class="text-sm font-bold uppercase tracking-widest">Rue du Rhône 14, Genève</span>
                    </div>
                </div>
            </div>
            <div class="bg-[#0a0a0a] p-10 border border-white/5" data-aos="fade-left">
                <form class="space-y-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        <input type="text" placeholder="Prénom & Nom" class="w-full bg-transparent border-b border-white/10 py-4 focus:border-red-600 outline-none transition-colors">
                        <input type="email" placeholder="Email Pro" class="w-full bg-transparent border-b border-white/10 py-4 focus:border-red-600 outline-none transition-colors">
                    </div>
                    <textarea placeholder="Votre projet..." rows="4" class="w-full bg-transparent border-b border-white/10 py-4 focus:border-red-600 outline-none transition-colors"></textarea>
                    <button class="btn-swiss w-full justify-center">Envoyer la demande <i class="fas fa-paper-plane text-[10px]"></i></button>
                </form>
            </div>
        </div>
    </section>

    <footer class="py-12 border-t border-white/5 bg-[#030303] relative z-10">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3 opacity-50 hover:opacity-100 transition-opacity">
                <img src="{{ asset('img/logo.png') }}" alt="SE" class="h-6 w-6 object-contain">
                <span class="text-sm font-black tracking-widest uppercase">Swiss<span class="text-red-600">Elit</span></span>
            </div>
            <p class="text-[9px] tracking-[0.3em] text-gray-600 uppercase">© 2026 SwissElit SNC — Excellence in IT</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });

        const mainNav = document.getElementById('navbar');
        const navContainer = document.getElementById('nav-container');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                mainNav.classList.add('bg-black', 'shadow-2xl');
                navContainer.classList.replace('h-24', 'h-16');
            } else {
                mainNav.classList.remove('bg-black', 'shadow-2xl');
                navContainer.classList.replace('h-16', 'h-24');
            }
        });

        window.addEventListener('load', function() {
            const video = document.getElementById('heroVideo');
            if (video) { video.playbackRate = 0.5; }
        });
    </script>
</body>
</html>