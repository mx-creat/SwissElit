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
            filter: contrast(1.1) brightness(0.9);

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

    <nav class="fixed w-full z-50 bg-[#030303]/90 backdrop-blur-xl border-b border-white/5 transition-all duration-300" id="mainNav">
        <div class="max-w-7xl mx-auto px-6 h-24 flex justify-between items-center">
            <a href="#" class="flex items-center gap-4 group">
                <div class="relative w-12 h-12 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo SwissElit" class="w-10 h-10 object-contain group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-red-600/20 opacity-0 group-hover:opacity-100 transition-opacity blur-lg"></div>
                </div>
                <div class="flex flex-col">
                    <span class="text-2xl font-black tracking-[0.2em] uppercase leading-none">Swiss<span class="text-red-600">Elit</span></span>
                    <span class="text-[7px] font-bold tracking-[0.5em] text-gray-500 uppercase mt-1">Excellence in IT</span>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-12 text-[9px] font-black tracking-[0.4em] uppercase">
                <a href="#" class="text-white hover:text-red-600 transition-colors duration-300 relative group py-2">
                    Accueil
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#services" class="text-gray-400 hover:text-red-600 transition-colors duration-300 relative group py-2">
                    Expertise
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-red-600 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#contact" class="btn-swiss !px-8 !py-4 !text-[9px] hover:shadow-[0_0_30px_rgba(230,0,0,0.3)] transition-all">
                    Démarrer un projet
                </a>
            </div>

            <!-- Mobile Menu Toggle (Simplified) -->
            <button class="md:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 group">
                <span class="w-6 h-0.5 bg-white group-hover:bg-red-600 transition-colors"></span>
                <span class="w-4 h-0.5 bg-white group-hover:bg-red-600 transition-colors self-end"></span>
                <span class="w-6 h-0.5 bg-white group-hover:bg-red-600 transition-colors"></span>
            </button>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center pt-24 overflow-hidden bg-black">

        <video autoplay muted loop playsinline class="video-background opacity-40 scale-125" id="heroVideo">
            <source src="https://cdn.builder.io/o/assets%2F7d996016d7704a1490b97e9624729021%2F451cee6b547744f782b823d622a79118?alt=media&token=81555864-4ce9-4fe4-ab33-da8b58da910e&apiKey=7d996016d7704a1490b97e9624729021" type="video/mp4">
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

    <section class="py-12 bg-[#030303] border-b border-white/5 relative z-10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-wrap justify-center items-center gap-12 opacity-30 grayscale contrast-125">
                <span class="text-xs font-bold tracking-[0.4em] uppercase">Vacheron & Constantin</span>
                <span class="text-xs font-bold tracking-[0.4em] uppercase">Swisscom Business</span>
                <span class="text-xs font-bold tracking-[0.4em] uppercase">UBS Group Services</span>
                <span class="text-xs font-bold tracking-[0.4em] uppercase">Rolex S.A.</span>
                <span class="text-xs font-bold tracking-[0.4em] uppercase">Nestlé Health Science</span>
            </div>
        </div>
    </section>

    <section id="services" class="py-32 relative z-10 bg-[#030303]">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="mb-20" data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tighter mb-4">Pôles d'Expertise</h2>
                <div class="w-16 h-1 bg-red-600"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="service-card group" data-aos="fade-up" data-aos-delay="100">
                    <div class="mb-8 text-red-600">
                        <i class="fas fa-microchip text-4xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-xl font-black uppercase mb-3 tracking-tighter">Architecture Logicielle</h3>
                    <p class="text-gray-500 text-[13px] font-light leading-relaxed">
                        Conception de systèmes robustes et évolutifs basés sur les derniers standards de l'informatique de gestion.
                    </p>
                </div>

                <div class="service-card group" data-aos="fade-up" data-aos-delay="200">
                    <div class="mb-8 text-red-600">
                        <i class="fas fa-database text-4xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-xl font-black uppercase mb-3 tracking-tighter">Gestion de Données</h3>
                    <p class="text-gray-500 text-[13px] font-light leading-relaxed">
                        Optimisation, traitement et sécurisation de vos actifs numériques sur des serveurs souverains suisses.
                    </p>
                </div>

                <div class="service-card group" data-aos="fade-up" data-aos-delay="300">
                    <div class="mb-8 text-red-600">
                        <i class="fas fa-eye text-4xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-xl font-black uppercase mb-3 tracking-tighter">Expérience Utilisateur</h3>
                    <p class="text-gray-500 text-[13px] font-light leading-relaxed">
                        Design d'interfaces ergonomiques, intuitives et performantes pour maximiser l'adoption de vos outils.
                    </p>
                </div>

                <div class="service-card group" data-aos="fade-up" data-aos-delay="400">
                    <div class="mb-8 text-red-600">
                        <i class="fas fa-chess-knight text-4xl group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-xl font-black uppercase mb-3 tracking-tighter">Consulting Stratégique</h3>
                    <p class="text-gray-500 text-[13px] font-light leading-relaxed">
                        Accompagnement dans la transformation digitale et l'optimisation des processus de votre entreprise.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-32 relative z-10 bg-[#0a0a0a] border-y border-white/5 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-20 items-center">

            <div data-aos="fade-right">
                <span class="text-red-600 text-[10px] font-bold tracking-[0.4em] uppercase mb-4 block">L'ENGAGEMENT HELVÉTIQUE</span>
                <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter mb-8 leading-tight">
                    LA PRÉCISION <br> COMME <span class="text-glow">STANDARD.</span>
                </h2>
                <div class="space-y-8">
                    <div class="flex gap-6 items-start">
                        <div class="w-12 h-12 flex-shrink-0 bg-red-600/10 border border-red-600/30 flex items-center justify-center text-red-600">
                            <i class="fas fa-check"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2">Qualité sans compromis</h4>
                            <p class="text-gray-500 text-sm leading-relaxed">Chaque ligne de code est soumise à une revue rigoureuse pour garantir des performances optimales.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 items-start">
                        <div class="w-12 h-12 flex-shrink-0 bg-red-600/10 border border-red-600/30 flex items-center justify-center text-red-600">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2">Souveraineté des données</h4>
                            <p class="text-gray-500 text-sm leading-relaxed">Hébergement en Suisse garantissant la protection maximale de vos données critiques.</p>
                        </div>
                    </div>
                    <div class="flex gap-6 items-start">
                        <div class="w-12 h-12 flex-shrink-0 bg-red-600/10 border border-red-600/30 flex items-center justify-center text-red-600">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-2">Agilité technologique</h4>
                            <p class="text-gray-500 text-sm leading-relaxed">Utilisation des dernières technologies (Laravel, Vue.js, Tailwind) pour des outils d'avenir.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative group" data-aos="fade-left" data-aos-delay="200">
                <div class="absolute -inset-4 bg-red-600/10 blur-3xl rounded-full opacity-50 group-hover:opacity-80 transition-opacity"></div>
                <div class="relative border border-white/10 bg-[#030303] p-8 aspect-square flex items-center justify-center">
                    <!-- Un élément visuel "Elite" - Une horloge stylisée ou un engrenage minimaliste -->
                    <div class="w-64 h-64 border-4 border-dashed border-red-600/30 rounded-full flex items-center justify-center animate-slow-spin">
                        <div class="w-48 h-48 border-2 border-red-600/50 rounded-full flex items-center justify-center animate-reverse-spin">
                             <div class="w-32 h-32 bg-red-600 flex items-center justify-center rounded-sm rotate-45 shadow-[0_0_50px_rgba(230,0,0,0.4)]">
                                <span class="-rotate-45 text-4xl font-black italic">S<span class="text-white">E</span></span>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="contact" class="py-32 relative z-10 bg-black">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20">

            <div data-aos="fade-right">
                <span class="text-red-600 text-[10px] font-bold tracking-[0.4em] uppercase mb-4 block">DEMANDE DE PROJET</span>
                <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter mb-8 leading-tight">
                    PRÊT À ÉVOLUER <br> VERS L'<span class="text-glow">EXCELLENCE ?</span>
                </h2>
                <p class="text-gray-400 font-light mb-12">Nous vous accompagnons dans la création d'écosystèmes digitaux hautes performances pour votre entreprise à Genève.</p>
                <div class="space-y-6">
                    <div class="flex items-center gap-6 group">
                        <div class="w-10 h-10 border border-white/10 flex items-center justify-center group-hover:bg-red-600 group-hover:border-red-600 transition-colors">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <span class="text-sm font-bold tracking-widest uppercase">contact@swisselit.ch</span>
                    </div>
                    <div class="flex items-center gap-6 group">
                        <div class="w-10 h-10 border border-white/10 flex items-center justify-center group-hover:bg-red-600 group-hover:border-red-600 transition-colors">
                            <i class="fas fa-phone"></i>
                        </div>
                        <span class="text-sm font-bold tracking-widest uppercase">+41 22 555 12 34</span>
                    </div>
                    <div class="flex items-center gap-6 group">
                        <div class="w-10 h-10 border border-white/10 flex items-center justify-center group-hover:bg-red-600 group-hover:border-red-600 transition-colors">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <span class="text-sm font-bold tracking-widest uppercase">Rue du Rhône 14, 1204 Genève</span>
                    </div>
                </div>
            </div>

            <div class="bg-[#0a0a0a] border border-white/5 p-10" data-aos="fade-left" data-aos-delay="200">
                <form action="#" method="POST" class="space-y-8">
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-[9px] font-bold tracking-widest uppercase text-gray-500">Prénom & Nom</label>
                            <input type="text" class="w-full bg-transparent border-b border-white/10 py-4 text-white focus:outline-none focus:border-red-600 transition-colors" placeholder="Jean Dupont">
                        </div>
                        <div class="space-y-2">
                            <label class="text-[9px] font-bold tracking-widest uppercase text-gray-500">Email Professionnel</label>
                            <input type="email" class="w-full bg-transparent border-b border-white/10 py-4 text-white focus:outline-none focus:border-red-600 transition-colors" placeholder="j.dupont@entreprise.com">
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[9px] font-bold tracking-widest uppercase text-gray-500">Sujet de votre projet</label>
                        <select class="w-full bg-[#030303] border-b border-white/10 py-4 text-white focus:outline-none focus:border-red-600 transition-colors appearance-none">
                            <option>Architecture Logicielle</option>
                            <option>Gestion de Données</option>
                            <option>UI/UX Design</option>
                            <option>Transformation Digitale</option>
                        </select>
                    </div>
                    <div class="space-y-2">
                        <label class="text-[9px] font-bold tracking-widest uppercase text-gray-500">Message</label>
                        <textarea rows="4" class="w-full bg-transparent border-b border-white/10 py-4 text-white focus:outline-none focus:border-red-600 transition-colors" placeholder="Décrivez brièvement vos besoins..."></textarea>
                    </div>
                    <button type="submit" class="btn-swiss w-full">
                        Envoyer ma demande
                        <i class="fas fa-paper-plane text-[10px]"></i>
                    </button>
                </form>
            </div>

        </div>
    </section>

    <footer class="py-12 border-t border-white/5 bg-[#030303]">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6 relative">

            <a href="#" class="absolute -top-24 right-6 w-12 h-12 bg-red-600 flex items-center justify-center text-white hover:bg-red-700 transition-colors shadow-2xl" title="Retour en haut">
                <i class="fas fa-arrow-up"></i>
            </a>

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

        // Effet de scroll sur la navigation
        const mainNav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                mainNav.classList.add('bg-[#030303]/95', 'h-20', 'shadow-2xl');
                mainNav.classList.remove('h-24');
            } else {
                mainNav.classList.remove('bg-[#030303]/95', 'h-20', 'shadow-2xl');
                mainNav.classList.add('h-24');
            }
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
