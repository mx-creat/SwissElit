<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwissElit | Excellence Digitale Genève</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-[#030303] text-white">
    <div class="mesh-gradient"></div>
    <div class="grid-overlay"></div>

    <nav id="navbar">
        <a href="#" class="flex items-center gap-2 group">
            <img src="{{ asset('img/crx.png') }}" alt="Logo" class="w-6 h-6 md:w-8 md:h-8 object-contain group-hover:scale-110 transition-transform">
            <span class="text-lg md:text-xl font-black uppercase tracking-tighter text-white">Swiss<span class="text-red-600">Elit</span></span>
        </a>
        <div class="flex items-center gap-4 md:gap-10">
            <a href="#services" class="hidden sm:block text-[9px] font-bold uppercase tracking-widest text-white/60 hover:text-white transition">Expertise</a>
            <a href="#contact" class="btn-swiss !py-2 !px-4 md:!py-2.5 md:!px-6 !text-[8px] md:!text-[9px] !w-auto">Contact</a>
        </div>
    </nav>

    <header class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <video autoplay muted loop playsinline class="video-background" id="heroVideo">
            <source src="{{ asset('img/gif.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10 w-full">
            <div class="max-w-4xl" data-aos="fade-right">
                <h1 class="hero-title">L'EXPERTISE <br><span class="text-glow-red">CONNECTÉE.</span></h1>           
                <p class="text-lg md:text-xl text-gray-400 max-w-2xl font-light mb-8 md:mb-12">Architecture Laravel & Haute Précision Suisse.</p>
                <a href="#services" class="btn-swiss !w-auto">Découvrir l'univers <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </header>

    <section id="services" class="py-20 md:py-32 relative z-10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 mb-8 md:mb-12 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-black uppercase tracking-tighter">Pôles d'Expertise</h2>
        </div>
        <div class="swiper expertise-slider">
           <div class="swiper-wrapper">
                <div class="swiper-slide"><div class="service-card"><i class="fas fa-microchip text-3xl md:text-4xl mb-6"></i><h3 class="font-black uppercase">Architecture</h3><p class="text-gray-500 text-[10px] mt-2 tracking-widest uppercase">Laravel Systems</p></div></div>
                <div class="swiper-slide"><div class="service-card"><i class="fas fa-database text-3xl md:text-4xl mb-6"></i><h3 class="font-black uppercase">Données</h3><p class="text-gray-500 text-[10px] mt-2 tracking-widest uppercase">Sovereign Cloud</p></div></div>
                <div class="swiper-slide"><div class="service-card"><i class="fas fa-eye text-3xl md:text-4xl mb-6"></i><h3 class="font-black uppercase">Design</h3><p class="text-gray-500 text-[10px] mt-2 tracking-widest uppercase">Elite Interfaces</p></div></div>
                <div class="swiper-slide"><div class="service-card"><i class="fas fa-shield-halved text-3xl md:text-4xl mb-6"></i><h3 class="font-black uppercase">Sécurité</h3><p class="text-gray-500 text-[10px] mt-2 tracking-widest uppercase">Cyber-Audit</p></div></div>
                
                <div class="swiper-slide"><div class="service-card"><i class="fas fa-microchip text-3xl md:text-4xl mb-6"></i><h3 class="font-black uppercase">Architecture</h3><p class="text-gray-500 text-[10px] mt-2 tracking-widest uppercase">Laravel Systems</p></div></div>
                <div class="swiper-slide"><div class="service-card"><i class="fas fa-database text-3xl md:text-4xl mb-6"></i><h3 class="font-black uppercase">Données</h3><p class="text-gray-500 text-[10px] mt-2 tracking-widest uppercase">Sovereign Cloud</p></div></div>
                <div class="swiper-slide"><div class="service-card"><i class="fas fa-eye text-3xl md:text-4xl mb-6"></i><h3 class="font-black uppercase">Design</h3><p class="text-gray-500 text-[10px] mt-2 tracking-widest uppercase">Elite Interfaces</p></div></div>
                <div class="swiper-slide"><div class="service-card"><i class="fas fa-shield-halved text-3xl md:text-4xl mb-6"></i><h3 class="font-black uppercase">Sécurité</h3><p class="text-gray-500 text-[10px] mt-2 tracking-widest uppercase">Cyber-Audit</p></div></div>
            </div>
            <div class="flex justify-center gap-6 md:gap-8 mt-12 md:mt-24">
                <div class="swiper-prev nav-btn"><i class="fas fa-chevron-left"></i></div>
                <div class="swiper-next nav-btn"><i class="fas fa-chevron-right"></i></div>
            </div>
        </div>
    </section>

    <section id="engagement" class="py-20 md:py-40 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16" data-aos="fade-up">
                <span class="text-red-600 text-[10px] font-bold tracking-[0.5em] uppercase block mb-4">Notre ADN</span>
                <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter text-white">L'Engagement SwissElit.</h2>
            </div>
            <div class="bento-grid">
                <div class="bento-item bento-main glow-card group" data-aos="fade-up">
                    <div class="absolute top-6 right-6 opacity-10 group-hover:opacity-30 transition-opacity">
                        <i class="fas fa-medal text-6xl"></i>
                    </div>
                    <h3 class="text-3xl md:text-5xl font-black uppercase mb-6 leading-tight">Précision Helvétique.</h3>
                    <p class="text-gray-400 font-light text-sm md:text-lg max-w-md">Standards d'horlogerie appliqués au code.</p>
                </div>
                <div class="bento-item glow-card flex flex-col justify-center text-center border-red-600/20" data-aos="fade-up">
                    <span class="text-5xl md:text-6xl font-black text-red-600 mb-2">99.9%</span>
                    <p class="text-[10px] uppercase tracking-widest text-gray-500 font-bold">Uptime</p>
                </div>
                <div class="bento-item bento-wide glow-card flex items-center justify-between group" data-aos="fade-up">
                    <h3 class="text-lg md:text-2xl font-black uppercase">Souveraineté Digitale</h3>
                    <i class="fas fa-server text-red-600 text-xl md:text-2xl"></i>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-20 md:py-40 relative z-10">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 md:gap-20">
            <div data-aos="fade-right">
                <h2 class="text-4xl md:text-6xl font-black uppercase mb-6 md:mb-8 text-white">Parlons de <br><span class="text-red-600">votre projet.</span></h2>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 border border-white/10 flex items-center justify-center text-red-600"><i class="fas fa-envelope"></i></div>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-white">contact@swisselit.ch</span>
                </div>
            </div>
            <div class="glow-card p-8 md:p-12" data-aos="fade-left">
                <form action="#" class="space-y-4">
                    <div class="input-group">
                        <input type="text" id="nom" class="input-field" placeholder=" " required>
                        <label for="nom" class="input-label">Nom</label>
                    </div>
                    <div class="input-group">
                        <input type="email" id="mail" class="input-field" placeholder=" " required>
                        <label for="mail" class="input-label">Email</label>
                    </div>
                    <div class="input-group">
                        <textarea id="msg" class="input-field" rows="3" placeholder=" " required></textarea>
                        <label for="msg" class="input-label">Message</label>
                    </div>
                    <button type="submit" class="btn-swiss">Envoyer le brief</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="py-8 border-t border-white/5 bg-black text-center text-[8px] md:text-[9px] tracking-[0.4em] text-gray-600 uppercase">
        © 2026 SwissElit SNC — Geneva
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>