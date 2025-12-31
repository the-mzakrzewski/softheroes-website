import './bootstrap';
import {
    Activity,
    ArrowRight,
    BarChart3,
    Calendar,
    Check,
    CheckCircle,
    Clock,
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
    ShieldCheck,
    Wrench,
    Zap
} from 'lucide';

createIcons({
    icons: {
        Menu,
        Clock,
        Zap,
        Code2,
        BarChart3,
        CheckCircle,
        PieChart,
        Wrench,
        Search,
        FileText,
        Layers,
        Activity,
        ArrowRight,
        Check,
        Cpu,
        ShieldCheck,
        Lock,
        Calendar,
        Layout,
        HandCoins,
        Mail,
        Linkedin
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
});
