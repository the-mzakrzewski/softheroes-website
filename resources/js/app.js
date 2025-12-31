import {
    ArrowRight,
    ArrowUp,
    Award,
    Calendar,
    Check,
    CheckCircle,
    ChevronsDown,
    Code2,
    Cpu,
    createIcons,
    FileText,
    HandCoins,
    Layers,
    Layout,
    Linkedin,
    Lock,
    Mail,
    Menu,
    PieChart,
    Search,
    ServerCog,
    ShieldCheck,
    Wrench,
    Zap,
    Clock,
    Target
} from 'lucide';

createIcons({
    icons: {
        Menu,
        Zap,
        Code2,
        CheckCircle,
        PieChart,
        Wrench,
        Search,
        FileText,
        Layers,
        ArrowRight,
        Check,
        Cpu,
        ShieldCheck,
        Lock,
        Calendar,
        Layout,
        HandCoins,
        Mail,
        Linkedin,
        ArrowUp,
        Award,
        ChevronsDown,
        ServerCog,
        Clock,
        Target
    },
});

document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.querySelector('.nav-menu');

    if (mobileMenuBtn && navMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('is-open');
        });

        // Close menu when a link is clicked
        const navLinks = navMenu.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('is-open');
            });
        });
    }

    // Back to Top Button Logic
    const backToTopBtn = document.getElementById('back-to-top');

    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
