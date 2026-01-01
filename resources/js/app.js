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

    // Contact Form AJAX Logic
    const contactForm = document.getElementById('contact-form');
    const statusDiv = document.getElementById('js-form-status');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            // If browser validation fails, don't do anything and let the browser show its tooltips
            if (!contactForm.checkValidity()) {
                return;
            }

            e.preventDefault();

            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerText;

            // Clear previous messages and errors
            statusDiv.classList.add('hidden');
            statusDiv.innerHTML = '';
            statusDiv.className = 'hidden mb-6 p-4 rounded-md'; 
            
            // Remove existing error messages
            contactForm.querySelectorAll('.text-red-500').forEach(el => el.remove());

            // Set loading state
            submitBtn.disabled = true;
            submitBtn.innerText = 'Wysyłanie...';

            try {
                const formData = new FormData(contactForm);
                const response = await fetch(contactForm.action, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: formData
                });

                const data = await response.json();

                let shouldScroll = false;

                if (response.ok) {
                    // Success
                    statusDiv.innerHTML = `<p class="font-bold">Wiadomość wysłana</p><p>${data.message}</p>`;
                    statusDiv.className = 'bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md';
                    statusDiv.classList.remove('hidden');
                    contactForm.reset();
                    shouldScroll = true;
                } else {
                    // Handle errors
                    if (response.status === 422) {
                        const errors = data.errors;
                        for (const [key, messages] of Object.entries(errors)) {
                            const input = contactForm.querySelector(`[name="${key}"]`);
                            if (input) {
                                const errorSpan = document.createElement('span');
                                errorSpan.className = 'text-red-500 text-xs mt-1 block';
                                errorSpan.innerText = messages[0];
                                input.parentNode.appendChild(errorSpan);
                            }
                        }
                        // For validation errors, we might not want to scroll to the top statusDiv 
                        // as errors are shown next to inputs. But if we want to scroll to the first error:
                        const firstError = contactForm.querySelector('.text-red-500');
                        if (firstError) {
                            const headerOffset = 100;
                            const elementPosition = firstError.getBoundingClientRect().top;
                            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                            window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
                        }
                    } else {
                        throw new Error('Wystąpił błąd serwera.');
                    }
                }

                if (shouldScroll) {
                    const headerOffset = 100;
                    const elementPosition = statusDiv.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            } catch (error) {
                statusDiv.innerText = 'Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.';
                statusDiv.className = 'bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-md';
                statusDiv.classList.remove('hidden');
                
                const headerOffset = 100;
                const elementPosition = statusDiv.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                window.scrollTo({ top: offsetPosition, behavior: 'smooth' });
            } finally {
                submitBtn.disabled = false;
                submitBtn.innerText = originalBtnText;
            }
        });
    }
});
