<div id="waitlistModal"
    class="modal-overlay fixed inset-0 bg-black/50 dark:bg-black/70 z-50 flex items-center justify-center p-4">
    <div
        class="reveal bg-white dark:bg-slate-900 rounded-3xl max-w-md w-full p-8 shadow-2xl border border-gray-200 dark:border-gray-700">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-black">
                <span data-en="Join the Waitlist" data-uz="Kutish ro'yxatiga qo'shilish"
                    data-ru="Присоединиться к списку ожидания"></span>
            </h2>
            <button type="button" onclick="closeModal()" class="text-2xl hover:rotate-90 transition-transform">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <form id="waitlistForm" class="space-y-4" method="POST" action="{{ route('user.store.waitlist') }}">
            @csrf
            <div>
                <label class="block font-semibold mb-2">
                    <span data-en="Full Name" data-uz="To'liq Ism" data-ru="Полное имя"></span>
                </label>
                <input type="text" name="fullname" placeholder="Ibrohim Abbosov" required class="input-modern w-full">
            </div>

            <div>
                <label class="block font-semibold mb-2">
                    <span data-en="Phone Number" data-uz="Telefon raqami" data-ru="Номер телефона"></span>
                </label>
                <input type="tel" name="phone" placeholder="+998 99 123 45 67" required class="input-modern w-full">
            </div>

            <div>
                <label class="block font-semibold mb-2">
                    <span data-en="Email Address" data-uz="Email Manzili" data-ru="Адрес электронной почты"></span>
                </label>
                <input type="email" name="email" placeholder="your@email.com" required class="input-modern w-full">
            </div>

            <div>
                <label class="block font-semibold mb-2">
                    <span data-en="Telegram Username" data-uz="Telegram Foydalanuvchi Nomi"
                        data-ru="Имя пользователя Telegram"></span>
                </label>
                <div class="flex">
                    <span class="input-modern flex items-center bg-gray-50 dark:bg-gray-800">@</span>
                    <input type="text" name="username" placeholder="username" required class="input-modern flex-1">
                </div>
            </div>

            <!-- Promo Code Section - Compact Collapsible -->
            <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                <button type="button" id="modalPromoToggle"
                    class="flex items-center gap-2 text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
                    <i class="fas fa-gift"></i>
                    <span data-en="Have a promo code?" data-uz="Promo kodingiz bormi?"
                        data-ru="У вас есть промокод?"></span>
                    <i class="fas fa-chevron-down ml-auto text-xs"></i>
                </button>

                <!-- Promo Input - Hidden by default -->
                <div id="modalPromoSection"
                    class="hidden mt-3 p-3 bg-blue-50 dark:bg-slate-800 rounded-lg border border-blue-200 dark:border-slate-700">
                    <input type="text" name="code" placeholder="e.g., EARLYBIRD" class="input-modern w-full text-sm">
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                        <i class="fas fa-info-circle mr-1"></i>
                        <span data-en="Enter code to unlock benefits" data-uz="Imtiyozlarni ochish uchun kodni kiriting"
                            data-ru="Введите код для получения привилегий"></span>
                    </p>
                </div>
            </div>

            <button type="submit" id="join-modal"
                class="gradient-btn text-white w-full py-3 rounded-xl font-bold btn-modern text-lg mt-6">
                <span data-en="Join Now" data-uz="Qo'shilish" data-ru="Присоединиться"></span>
            </button>

            <p class="text-xs text-gray-500 dark:text-gray-400 text-center">
                <span data-en="We'll send you updates about HisobMate launch and early access."
                    data-uz="Biz sizga HisobMate ishga tushganda yangilanishlarni yuboramiz."
                    data-ru="Мы отправим вам обновления о запуске HisobMate и раннем доступе."></span>
            </p>
        </form>
    </div>
</div>

<style>
    /* Promo section animation for modal */
    #modalPromoSection {
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

    #modalPromoToggle:hover {
        font-weight: 500;
    }

    #modalPromoToggle i:last-child {
        transition: transform 0.3s ease;
    }

    #modalPromoToggle.active i:last-child {
        transform: rotate(180deg);
    }
</style>

<script>
    // Modal Promo Code Toggle
    const modalPromoToggle = document.getElementById('modalPromoToggle');
    const modalPromoSection = document.getElementById('modalPromoSection');

    if (modalPromoToggle) {
        modalPromoToggle.addEventListener('click', (e) => {
            e.preventDefault();
            modalPromoSection.classList.toggle('hidden');
            modalPromoToggle.classList.toggle('active');
        });
    }
</script>