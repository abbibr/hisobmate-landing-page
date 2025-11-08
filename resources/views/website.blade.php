<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href={{ asset('logo.webp') }}>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="HisobMate - Smart Bill Splitting & Expense Tracker for Friends, Roommates and Colleagues">
    <title>HisobMate – Smart Bill Splitting & Expense Tracker</title>

    <link rel="canonical" href="https://hisobmate.uz/">
    <link rel="alternate" href="https://hisobmate.uz/" hreflang="ru" />
    <link rel="alternate" href="https://hisobmate.uz/" hreflang="uz" />
    <link rel="alternate" href="https://hisobmate.uz/" hreflang="en" />
    <link rel="alternate" href="https://hisobmate.uz/" hreflang="x-default" />

    <meta property="og:title" content="HisobMate: Smart Bill Splitting & Expense Tracker" />
    <meta property="og:description"
        content="Split bills, track group expenses, and manage shared debts quickly and stress-free in Uzbekistan." />
    <meta property="og:url" content="https://hisobmate.uz/" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://hisobmate.uz/logo.png" />
    <meta property="og:locale" content="ru_RU" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@HisobMateApp" />
    <meta name="twitter:creator" content="@HisobMateApp" />
    <meta name="twitter:title" content="HisobMate: Your New Group Expense Tracker" />
    <meta name="twitter:description"
        content="Never worry about splitting the bill again. Track everything with HisobMate." />
    <meta name="twitter:image" content="https://hisobmate.uz/logo.png" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {}
            }
        }
    </script>

    <link rel="preload"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@600;700;800&family=Manrope:wght@400;600;700;800&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@600;700;800&family=Manrope:wght@400;600;700;800&display=swap">
    </noscript>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        media="print" onload="this.media='all'">
    <style>
        * {
            font-family: 'Inter', sans-serif;
            transition: color 0.3s, background-color 0.3s;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Poppins', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, #1A73E8, #06B6D4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-btn {
            background: linear-gradient(135deg, #1A73E8, #06B6D4);
        }

        .gradient-accent {
            background: linear-gradient(135deg, #FBBF24, #F59E0B);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes glow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(26, 115, 232, 0.3);
            }

            50% {
                box-shadow: 0 0 40px rgba(26, 115, 232, 0.6);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }

        .float {
            animation: float 6s ease-in-out infinite;
        }

        .glow-effect {
            animation: glow 3s ease-in-out infinite;
        }

        .pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }

        .dark-toggle {
            cursor: pointer;
        }

        .glass {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dark .glass {
            background: rgba(0, 0, 0, 0.2);
        }

        .modal-overlay {
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        input::placeholder,
        textarea::placeholder {
            color: currentColor;
            opacity: 0.5;
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
        }

        .input-modern {
            background: transparent;
            border: 2px solid;
            border-color: #E5E7EB;
            padding: 12px 16px;
            border-radius: 12px;
            transition: all 0.3s;
        }

        .dark .input-modern {
            border-color: #374151;
        }

        .input-modern:focus {
            outline: none;
            border-color: #1A73E8;
            box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
        }

        .btn-modern {
            position: relative;
            overflow: hidden;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s;
        }

        .btn-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: left 0.5s;
        }

        .btn-modern:hover::before {
            left: 100%;
        }

        /* Language flags */
        .flag-icon {
            width: 24px;
            height: 18px;
            display: inline-block;
            margin-right: 8px;
            background-size: cover;
        }

        /* Scroll reveal */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes float-up {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scale-pop {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes confetti-fall {
            0% {
                transform: translateY(-100px) rotateZ(0deg);
                opacity: 1;
            }

            100% {
                transform: translateY(500px) rotateZ(720deg);
                opacity: 0;
            }
        }

        @keyframes pulse-ring {
            0% {
                box-shadow: 0 0 0 0 rgba(26, 115, 232, 0.7);
            }

            70% {
                box-shadow: 0 0 0 30px rgba(26, 115, 232, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(26, 115, 232, 0);
            }
        }

        @keyframes slide-in-left {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .float-up {
            animation: float-up 0.6s ease-out;
        }

        .scale-pop {
            animation: scale-pop 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .pulse-ring {
            animation: pulse-ring 2s infinite;
        }

        .confetti {
            animation: confetti-fall 3s ease-in forwards;
            position: fixed;
            pointer-events: none;
        }

        .benefit-item {
            animation: slide-in-left ease-out forwards;
        }

        .benefit-item:nth-child(1) {
            animation-delay: 0.3s;
        }

        .benefit-item:nth-child(2) {
            animation-delay: 0.4s;
        }

        .benefit-item:nth-child(3) {
            animation-delay: 0.5s;
        }

        .benefit-item:nth-child(4) {
            animation-delay: 0.6s;
        }

        .success-badge {
            background: linear-gradient(135deg, #1A73E8, #06B6D4);
            box-shadow: 0 10px 40px rgba(26, 115, 232, 0.3);
        }

        .btn-glow {
            background: linear-gradient(135deg, #1A73E8, #06B6D4);
            box-shadow: 0 0 20px rgba(26, 115, 232, 0.4);
            transition: all 0.3s ease;
        }

        .btn-glow:hover {
            box-shadow: 0 0 40px rgba(26, 115, 232, 0.6);
            transform: translateY(-2px);
        }

        .share-btn {
            transition: all 0.3s ease;
        }

        .share-btn:hover {
            transform: scale(1.1);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-slate-950 dark:text-white">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-PSB8K85PH3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-PSB8K85PH3');
    </script>

    <!-- Navbar Section -->
    @include('sections.header')

    <!-- Hero Section -->
    @include('sections.hero')

    <!-- Problem Section -->
    @include('sections.problem')

    <!-- Video Demo Section  -->
    @include('sections.video-demo')

    <!-- Features Section -->
    @include('sections.feature')

    <!-- Preview Section -->
    @include('sections.preview')

    <!-- CTA Section -->
    @include('sections.cta')

    {{-- FAQ Section --}}
    @include('sections.faq')

    {{-- Form Section --}}
    @include('sections.form')

    <!-- Footer -->
    @include('sections.footer')

    <!-- Modal -->
    @include('sections.modal')

    <!-- Success Modal -->
    @include('sections.success-modal')

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn"
        class="fixed bottom-8 right-8 z-40 p-4 rounded-full gradient-btn text-white shadow-lg hover:shadow-xl transition-all duration-300 opacity-0 invisible hover:scale-110"
        onclick="window.scrollTo({top: 0, behavior: 'smooth'})" title="Scroll to top">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>

    <script defer>
        // Dark Mode Toggle
        const darkToggle = document.getElementById('darkToggle');
        const html = document.documentElement;

        // Set dark mode by default on first visit
        if (!localStorage.getItem('theme')) {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }

        darkToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });

        // Language System
        const translations = {
            en: {},
            uz: {},
            ru: {}
        };

        let currentLang = localStorage.getItem('lang') || 'ru';

        function setLanguage(lang) {
            currentLang = lang;
            localStorage.setItem('lang', lang);
            updateTranslations();
        }

        function updateTranslations() {
            document.querySelectorAll('[data-en]').forEach(el => {
                const text = el.getAttribute(`data-${currentLang}`);
                if (text !== null) el.textContent = text;
            });
        }

        document.getElementById('languageSelect').value = currentLang;
        document.getElementById('languageSelect').addEventListener('change', (e) => {
            setLanguage(e.target.value);
        });

        updateTranslations();

        // Scroll Reveal Animation
        const revealElements = document.querySelectorAll('.reveal');

        const revealOnScroll = () => {
            revealElements.forEach(element => {
                const windowHeight = window.innerHeight;
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    element.classList.add('active');
                }
            });
        };

        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll(); // Initial check

        // Modal Functions
        function openModal() {
            const modal = document.getElementById('waitlistModal');
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('waitlistModal');
            modal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.getElementById('waitlistModal').addEventListener('click', (e) => {
            if (e.target.id === 'waitlistModal') {
                closeModal();
            }
        });

        // Form Submission
        document.getElementById('waitlistForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const form = e.target;
            const button = form.querySelector('button[type="submit"]');
            const originalText = button.innerHTML;

            // Show loading state
            button.disabled = true;
            button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';

            try {
                const response = await fetch(form.action, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || ''
                    },
                    body: JSON.stringify({
                        fullname: form.querySelector('input[name="fullname"]').value.trim(),
                        phone: form.querySelector('input[name="phone"]').value.trim(),
                        email: form.querySelector('input[name="email"]').value.trim(),
                        username: form.querySelector('input[name="username"]').value.trim(),
                        code: form.querySelector('input[name="code"]')?.value.trim() || ''
                    })
                });

                const result = await response.json();

                if (response.ok) {
                    // Get user email to display in success modal
                    const userEmail = form.querySelector('input[name="email"]').value;

                    // Update and show success modal
                    showSuccessModal(userEmail);

                    // Konversiyani GA4'ga yuborish
                    if (typeof gtag === 'function') {
                        gtag('event', 'page_view', {
                            'page_title': 'Waitlist Success',
                            'page_path': '/waitlist-success' // Bu virtual URL bo'ladi
                        });
                    }

                    // Close waitlist modal
                    closeModal();

                    // Reset form
                    form.reset();

                    // Reset button
                    button.innerHTML = originalText;
                    button.disabled = false;
                } else {
                    // Handle validation errors
                    const errorMessage = result.errors
                        ? Object.values(result.errors).flat().join('\n')
                        : result.message || 'An error occurred';

                    alert(errorMessage);
                    button.innerHTML = originalText;
                    button.disabled = false;
                }

            } catch (error) {
                console.error('Fetch Error:', error);
                alert('Network error. Please check your connection and try again.');
                button.innerHTML = originalText;
                button.disabled = false;
            }
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Scroll to Top Button
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                scrollToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                scrollToTopBtn.classList.add('opacity-0', 'invisible');
                scrollToTopBtn.classList.remove('opacity-100', 'visible');
            }
        });

        // Create confetti animation
        function createConfetti() {
            const container = document.getElementById('confettiContainer');
            const colors = ['#1A73E8', '#06B6D4', '#FBBF24', '#F59E0B', '#EC4899'];
            const emojis = ['🎉', '✨', '🎊', '⭐', '💫'];

            for (let i = 0; i < 30; i++) {
                const confetti = document.createElement('div');
                confetti.className = 'confetti text-2xl';
                confetti.textContent = emojis[Math.floor(Math.random() * emojis.length)];
                confetti.style.left = Math.random() * 100 + '%';
                confetti.style.animationDelay = Math.random() * 0.3 + 's';
                confetti.style.animationDuration = (2 + Math.random()) + 's';
                container.appendChild(confetti);

                setTimeout(() => confetti.remove(), 3000);
            }
        }

        // Update email in success modal
        function updateSuccessEmail(email) {
            const emailElement = document.getElementById('confirmEmail');
            if (emailElement) {
                emailElement.textContent = email;
            }
        }

        // Show success modal
        function showSuccessModal(email) {
            const modal = document.getElementById('successModal');
            modal.classList.remove('hidden');
            updateSuccessEmail(email);
            createConfetti();
            setupShareButtons();
        }

        // Close success modal
        function closeSuccessModal() {
            const modal = document.getElementById('successModal');
            modal.classList.add('hidden');
        }

        // Setup share buttons
        function setupShareButtons() {
            const shareButtons = document.querySelectorAll('.share-btn');

            shareButtons.forEach((btn, index) => {
                btn.onclick = () => {
                    const shareTexts = [
                        'Just joined HisobMate waitlist! Smart bill splitting made easy. Join us: hisobmate.uz',
                        'I\'m on the HisobMate waitlist! The future of expense tracking. hisobmate.uz',
                        'HisobMate is coming soon and I\'m excited! Join the waitlist: hisobmate.uz',
                        'hisobmate.uz'
                    ];

                    const urls = [
                        'https://twitter.com/intent/tweet?text=' + encodeURIComponent(shareTexts[0]),
                        'https://t.me/share/url?url=hisobmate.uz&text=' + encodeURIComponent(shareTexts[1]),
                        'https://www.linkedin.com/sharing/share-offsite/?url=hisobmate.uz',
                        'javascript:void(0)'
                    ];

                    if (index === 3) {
                        // Copy link to clipboard
                        navigator.clipboard.writeText('hisobmate.uz');
                        btn.innerHTML = '<i class="fas fa-check text-sm"></i>';
                        setTimeout(() => {
                            btn.innerHTML = '<i class="fas fa-link text-sm"></i>';
                        }, 2000);
                    } else {
                        window.open(urls[index], '_blank', 'width=600,height=400');
                    }
                };
            });
        }

        // Har qanday ID berilgan tugmani kuzatish
        document.querySelectorAll('button').forEach(button => {
            if (button.id) {
                button.addEventListener('click', () => {
                    if (typeof gtag === 'function') {
                        gtag('event', 'button_click', {
                            'button_id': button.id,
                            'button_text': button.textContent.trim()
                        });
                    }
                });
            }
        });
    </script>
</body>

</html>