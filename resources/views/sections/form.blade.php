<!-- CTA Section with Waitlist Form -->
<section id="cta" class="py-20 px-4 bg-gradient-to-b from-gray-50 to-white dark:from-slate-900 dark:to-slate-950">
    <div class="max-w-4xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white mb-4">
                <span data-en="Ready to simplify shared expenses?" data-uz="Xarajatlarni soddalashtirishga tayyormisiz?"
                    data-ru="Готовы упростить совместные расходы?"></span>
            </h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                <span data-en="Be among the first 1,000 users to get early access and exclusive launch benefits."
                    data-uz="Birinchi 1,000 foydalanuvchi orasiga qo'shiling va erta kirishning eksklyuziv imtiyozlarini oling."
                    data-ru="Станьте одним из первых 1000 пользователей и получите ранний доступ с эксклюзивными преимуществами."></span>
            </p>
        </div>

        <!-- Form Container -->
        <div
            class="bg-white dark:bg-slate-800 rounded-3xl p-8 md:p-12 shadow-2xl border border-gray-200 dark:border-gray-700">
            <!-- Form Header -->
            <div class="text-center mb-10">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                    <span data-en="Join the Waitlist" data-uz="Kutish ro'yxatiga qo'shilish"
                        data-ru="Присоединиться к списку ожидания"></span>
                </h3>
                <p class="text-gray-600 dark:text-gray-400">
                    <span data-en="Get early access and exclusive updates"
                        data-uz="Erta kirish va eksklyuziv yangilanishlarni oling"
                        data-ru="Получите ранний доступ и эксклюзивные обновления"></span>
                </p>
            </div>

            <!-- Form -->
            <form id="ctaWaitlistForm" class="space-y-5" method="POST" action="{{ route('user.store.waitlist') }}">
                @csrf

                <!-- Two Column Layout for Desktop -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Full Name -->
                    <div>
                        <label class="block font-semibold mb-3 text-gray-900 dark:text-white">
                            <span data-en="Full Name" data-uz="To'liq Ism" data-ru="Полное имя"></span>
                        </label>
                        <input type="text" name="fullname" placeholder="Ibrohim Abbosov" required
                            class="input-modern w-full text-gray-900 dark:text-white dark:bg-slate-700 dark:border-slate-600">
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label class="block font-semibold mb-3 text-gray-900 dark:text-white">
                            <span data-en="Phone Number" data-uz="Telefon raqami" data-ru="Номер телефона"></span>
                        </label>
                        <input type="tel" name="phone" placeholder="+998 99 123 45 67" required
                            class="input-modern w-full text-gray-900 dark:text-white dark:bg-slate-700 dark:border-slate-600">
                    </div>
                </div>

                <!-- Two Column Layout for Desktop -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Email -->
                    <div>
                        <label class="block font-semibold mb-3 text-gray-900 dark:text-white">
                            <span data-en="Email Address" data-uz="Email Manzili"
                                data-ru="Адрес электронной почты"></span>
                        </label>
                        <input type="email" name="email" placeholder="your@email.com" required
                            class="input-modern w-full text-gray-900 dark:text-white dark:bg-slate-700 dark:border-slate-600">
                    </div>

                    <!-- Telegram Username -->
                    <div>
                        <label class="block font-semibold mb-3 text-gray-900 dark:text-white">
                            <span data-en="Telegram Username" data-uz="Telegram Foydalanuvchi Nomi"
                                data-ru="Имя пользователя Telegram"></span>
                        </label>
                        <div class="flex">
                            <input type="text" name="username" placeholder="username" required
                                class="input-modern flex-1 rounded-l-none text-gray-900 dark:text-white dark:bg-slate-700 dark:border-slate-600">
                        </div>
                    </div>
                </div>

                <!-- Promo Code Section - Collapsible with Better UX -->
                <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                    <button type="button" id="promoToggle"
                        class="flex items-center gap-2 text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white transition-colors">
                        <i class="fas fa-gift text-lg"></i>
                        <span data-en="Have a promo code?" data-uz="Promo kodingiz bormi?"
                            data-ru="У вас есть промокод?"></span>
                        <i class="fas fa-chevron-down ml-auto text-sm"></i>
                    </button>

                    <!-- Promo Input - Hidden by default -->
                    <div id="promoSection"
                        class="hidden mt-4 p-4 bg-blue-50 dark:bg-slate-700/50 rounded-lg border border-blue-200 dark:border-slate-600">
                        <label class="block font-semibold mb-3 text-gray-900 dark:text-white">
                            <span data-en="Promo Code" data-uz="Promo Kodi" data-ru="Промокод"></span>
                            <span class="text-xs text-gray-500 dark:text-gray-400 font-normal ml-2">
                                <span data-en="(optional)" data-uz="(ixtiyoriy)" data-ru="(необязательно)"></span>
                            </span>
                        </label>
                        <input type="text" name="code" placeholder="e.g., EARLYBIRD"
                            class="input-modern w-full text-gray-900 dark:text-white dark:bg-slate-700 dark:border-slate-600">
                        <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                            <i class="fas fa-info-circle mr-1"></i>
                            <span data-en="Enter your promo code to unlock special launch benefits"
                                data-uz="Maxsus ishga tushirish imtiyozlarini ochish uchun promo kodini kiriting"
                                data-ru="Введите промокод для получения специальных привилегий"></span>
                        </p>
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" id="join-form"
                    class="w-full mt-8 gradient-btn text-white py-4 rounded-xl font-bold btn-modern text-lg hover:shadow-xl transition-all duration-300">
                    <i class="fas fa-rocket mr-2"></i>
                    <span data-en="Join Now" data-uz="Qo'shilish" data-ru="Присоединиться"></span>
                </button>

                <!-- Footer Text -->
                <p class="text-xs text-gray-500 dark:text-gray-400 text-center pt-2">
                    <i class="fas fa-lock mr-1"></i>
                    <span data-en="Your data is safe with us. We never share your information."
                        data-uz="Sizning ma'lumotlaringiz biz bilan xavfsiz. Biz hech qachon ma'lumotlaringizni ulashmaymiz."
                        data-ru="Ваши данные в безопасности. Мы никогда не делимся вашей информацией."></span>
                </p>
            </form>
        </div>
    </div>
</section>

<style>
    /* Ensure proper styling for form inputs */
    .input-modern {
        background: transparent;
        border: 2px solid;
        border-color: #E5E7EB;
        padding: 12px 16px;
        border-radius: 12px;
        transition: all 0.3s;
        font-size: 1rem;
    }

    .dark .input-modern {
        border-color: #374151;
    }

    .input-modern:focus {
        outline: none;
        border-color: #1A73E8;
        box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
    }

    .dark .input-modern:focus {
        box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.2);
    }

    .gradient-btn {
        background: linear-gradient(135deg, #1A73E8, #06B6D4);
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

    /* Checkbox styling */
    input[type="checkbox"] {
        cursor: pointer;
    }

    /* Placeholder styling */
    .input-modern::placeholder {
        color: currentColor;
        opacity: 0.5;
    }

    /* Promo section animation */
    #promoSection {
        animation: slideDown 0.3s ease-out;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    #promoToggle:hover {
        font-weight: 500;
    }

    #promoToggle i {
        transition: transform 0.3s ease;
    }

    #promoToggle.active i {
        transform: rotate(180deg);
    }
</style>

<script>
    // Promo Code Toggle
    const promoToggle = document.getElementById('promoToggle');
    const promoSection = document.getElementById('promoSection');

    promoToggle.addEventListener('click', (e) => {
        e.preventDefault();
        promoSection.classList.toggle('hidden');
        promoToggle.classList.toggle('active');
    });

    // CTA Form Submission
    document.getElementById('ctaWaitlistForm').addEventListener('submit', async (e) => {
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
                    code: form.querySelector('input[name="code"]').value.trim()
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

                // Reset form
                form.reset();

                // Reset button
                button.innerHTML = originalText;
                button.disabled = false;

                // Close promo section
                promoSection.classList.add('hidden');
                promoToggle.classList.remove('active');

                // Scroll to success modal
                document.getElementById('successModal').scrollIntoView({ behavior: 'smooth', block: 'center' });
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

    // Update CTA form translations when language changes
    function updateCtaTranslations() {
        document.querySelectorAll('#cta [data-en]').forEach(el => {
            const text = el.getAttribute(`data-${currentLang}`);
            if (text) el.textContent = text;
        });
    }
</script>