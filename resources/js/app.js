import './bootstrap';
import Alpine from 'alpinejs';
import AOS from 'aos';
// Si tu installes swiper via npm, utilise ces imports :
// import Swiper from 'swiper';
// import { Navigation, EffectCoverflow } from 'swiper/modules';

window.Alpine = Alpine;
Alpine.start();

/**
 * SwissElit Core Interactions
 */
document.addEventListener('DOMContentLoaded', () => {
    
    // 1. Initialisation AOS (Animations au scroll)
    AOS.init({ 
        duration: 800, 
        once: true,
        easing: 'ease-out-cubic'
    });

    // 2. Initialisation Swiper (Slider Coverflow)
    // Note : Si tu utilises le CDN dans le HTML, Swiper est déjà global.
    if (document.querySelector('.expertise-slider')) {
        const swiper = new Swiper('.expertise-slider', {
            // modules: [Navigation, EffectCoverflow], // Décommenter si import NPM
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            loop: true,
            loopedSlides: 4, 
            loopPreventsSliding: false,
            coverflowEffect: {
                rotate: 20,
                stretch: 0,
                depth: 250,
                modifier: 1,
                slideShadows: false,
            },
            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
            },
        });
    }

    // 3. Gestion de la Navigation (Floating Glass Effect)
    const navbar = document.getElementById('navbar');
    const handleScroll = () => {
        if (window.scrollY > 80) {
            navbar?.classList.add('scrolled');
        } else {
            navbar?.classList.remove('scrolled');
        }
    };
    window.addEventListener('scroll', handleScroll, { passive: true });

    // 4. Effet de Glow Interactif (Mouse Tracker)
    const glowCards = document.querySelectorAll('.glow-card');
    
    const handleGlow = (e, card) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        card.style.setProperty('--mouse-x', `${x}px`);
        card.style.setProperty('--mouse-y', `${y}px`);
    };

    glowCards.forEach(card => {
        card.addEventListener('mousemove', (e) => handleGlow(e, card), { passive: true });
    });

    // 5. Optimisation Vidéo Hero
    const heroVideo = document.getElementById('heroVideo');
    if (heroVideo) {
        heroVideo.playbackRate = 0.5;
        
        // Empêcher la mise en pause involontaire sur certains navigateurs mobiles
        heroVideo.play().catch(() => {
            console.log("Autoplay bloqué par le navigateur, interaction requise.");
        });
    }
});