<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwissElit | Excellence Digitale Genève</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap');
        
        /* --- Base & Reset --- */
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #030303; /* Noir encore plus profond */
            color: #ffffff; 
            overflow-x: hidden; 
            -webkit-font-smoothing: antialiased;
        }

        /* Sélection de texte aux couleurs de la marque */
        ::selection { background: #E60000; color: white; }

        /* --- Vidéo d'Arrière-plan (Parfaitement fondue) --- */
        .video-background {
            position: absolute;
            right: -10%;
            width: 65vw;
            height: auto;
            aspect-ratio: 1/1;
            object-fit: contain;
            z-index: 0;
            opacity: 0.18; /* Juste ce qu'il faut pour être vu sans gêner */
            pointer-events: none;
            filter: grayscale(100%) contrast(1.3) brightness(0.8);
            
            /* Masque radial très doux pour effacer les bords nets de la vidéo */
            mask-image: radial-gradient(circle at center, black 30%, transparent 75%);
            -webkit-mask-image: radial-gradient(circle at center, black 30%, transparent 75%);
        }

        /* Dégradé pour garantir la lecture du texte sur la gauche */
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, #030303 30%, rgba(3,3,3,0.8) 50%, transparent 100%);
            z-index: 1;
            pointer-events: none;
        }

        /* --- Typographie Massive --- */
        .hero-title {
            font-size: clamp(4rem, 10vw, 9rem);
            line-height: 0.85;
            font-weight: 900;
            letter-spacing: -0.05em;
            text-transform: uppercase;
        }

        .text-glow { 
            color: #E60000;
            text-shadow: 0 0 40px rgba(230, 0, 0, 0.5); 
        }

        /* --- Boutons Brutalistes (Angles nets) --- */
        .btn-swiss {
            background-color: #E60000;
            color: white;
            padding: 1.25rem 2.5rem;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .btn-swiss:hover {
            background-color: #b30000;
            box-shadow: 0 0 20px rgba(230, 0, 0, 0.4);
        }

        .btn-outline {
            background-color: transparent;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 1.25rem 2.5rem;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            background-color: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.4);
        }

        /* --- Cartes de Services (Design Industriel/Tech) --- */
        .service-card {
            background: #080808;
            border: 1px solid rgba(255, 255, 255, 0.05);
            padding: 4rem 3rem;
            position: relative;
            transition: all 0.4s ease;
        }

        .service-card:hover {
            background: #0a0a0a;
            border-color: rgba(230, 0, 0, 0.3);
            transform: translateY(-5px);
        }

        /* La barre rouge stricte en bas */
        .service-card::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 50%;
            transform: translateX(-50%);
            width: 0%;
            height: 3px;
            background: #E60000;
            transition: width 0.5s cubic-bezier(0.19, 1, 0.22, 1);
        }

        .service-card:hover::after { width: 40%; }
    </style>
</head>
<body class="antialiased">

    <nav class="fixed w-full z-50 bg-[#030303]/80 backdrop-blur-md border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 h-24 flex justify-between items-center">
            <div class="flex items-center gap-4">
                <img src="{{ asset('img/logo.png') }}" alt="Logo SwissElit" class="w-10 h-10 object-contain">
                <span class="text-2xl font-black tracking-[0.15em] uppercase">Swiss<span class="text-red-600">Elit</span></span>
            </div>
            
            <div class="hidden md:flex items-center gap-10 text-[10px] font-bold tracking-[0.3em] uppercase">
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Accueil</a>
                <a href="#services" class="text-gray-400 hover:text-white transition-colors duration-300">Expertise</a>
                <a href="#contact" class="bg-red-600 px-6 py-3 text-white hover:bg-red-700 transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center pt-24 overflow-hidden">
        
        <video autoplay muted loop playsinline class="video-background" id="heroVideo">
            <source src="{{ asset('img/Gif.mp4') }}" type="video/mp4">
        </video>
        
        <div class="hero-overlay"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
            <div class="max-w-4xl">
                
                <div class="inline-flex items-center gap-3 px-4 py-1.5 border border-red-600/30 bg-red-600/5 text-red-500 text-[9px] font-bold uppercase tracking-[0.2em] mb-10" data-aos="fade-right">
                    <span class="w-1.5 h-1.5 bg-red-600 animate-pulse"></span>
                    Disponible pour projets à Genève
                </div>

                <h1 class="hero-title mb-10" data-aos="fade-up" data-aos-delay="100">
                    L'EXPERTISE <br>
                    <span class="text-glow">CONNECTÉE.</span>
                </h1>

                <p class="text-lg md:text-xl text-gray-400 max-w-2xl font-light leading-relaxed mb-12" data-aos="fade-up" data-aos-delay="200">
                    Écosystèmes digitaux hautes performances. Architecture <span class="text-white border-b border-red-600/50 pb-0.5">Laravel</span> & Interfaces Modernes. L'ingénierie suisse au service de votre gestion.
                </p>

                <div class="flex flex-col sm:flex-row gap-5" data-aos="fade-up" data-aos-delay="300">
                    <a href="#services" class="btn-swiss group">
                        Découvrir nos solutions
                        <i class="fas fa-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#contact" class="btn-outline">
                        Démarrer un projet
                    </a>
                </div>

            </div>
        </div>
    </header>

    <section id="services" class="py-32 relative z-10 bg-[#030303] border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="mb-20" data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tighter mb-4">Pôles d'Expertise</h2>
                <div class="w-16 h-1 bg-red-600"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                
                <div class="service-card group" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-10 text-red-600">
                        <i class="fas fa-microchip text-4xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-black uppercase mb-4 tracking-tighter">Architecture Logicielle</h3>
                    <p class="text-gray-500 text-sm font-light leading-relaxed">
                        Conception de systèmes robustes et évolutifs basés sur les derniers standards de l'informatique de gestion.
                    </p>
                </div>

                <div class="service-card group" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-10 text-red-600">
                        <i class="fas fa-database text-4xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-black uppercase mb-4 tracking-tighter">Gestion de Données</h3>
                    <p class="text-gray-500 text-sm font-light leading-relaxed">
                        Optimisation, traitement et sécurisation de vos actifs numériques sur des serveurs souverains suisses.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <footer class="py-12 border-t border-white/5 bg-[#030303]">
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
        // Initialisation des animations au scroll
        AOS.init({ 
            duration: 800, 
            once: true,
            offset: 100
        });

        // Ralentissement de la vidéo pour une boucle subtile et pro
        window.addEventListener('load', function() {
            const video = document.getElementById('heroVideo');
            if (video) {
                // Régler la vitesse (0.5 = 50% de la vitesse normale)
                video.playbackRate = 0.5; 
            }
        });
    </script>
</body>
</html>