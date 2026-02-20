document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация AOS
    AOS.init({ duration: 1000, once: true });

    // 2. Мобильное меню
    const burger = document.querySelector('.burger');
    const mobileMenu = document.getElementById('mobileMenu');
    const closeMenu = document.querySelector('.mobile-menu__close');
    const menuLinks = document.querySelectorAll('.mobile-menu__link');

    const toggleMenu = () => mobileMenu.classList.toggle('active');

    burger.addEventListener('click', toggleMenu);
    closeMenu.addEventListener('click', toggleMenu);
    menuLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 3. Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phoneInput');
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '');
    });

    // 4. Математическая капча
    const captchaQuestion = document.getElementById('captchaQuestion');
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    const correctAnswer = num1 + num2;
    captchaQuestion.innerText = `${num1} + ${num2}`;

    // 5. Обработка формы (AJAX-имитация)
    const form = document.getElementById('contactForm');
    const successMsg = document.getElementById('successMessage');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const userAnswer = parseInt(document.getElementById('captchaAnswer').value);

        if (userAnswer !== correctAnswer) {
            alert('Ошибка в капче. Попробуйте снова.');
            return;
        }

        // Имитация отправки
        const btn = form.querySelector('button');
        btn.innerText = 'Отправка...';
        btn.disabled = true;

        setTimeout(() => {
            form.style.display = 'none';
            successMsg.style.display = 'flex';
        }, 1500);
    });

    // 6. Cookie Popup
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookiePopup.classList.remove('active');
    });

    // 7. Параллакс для Hero (из прошлого шага)
    document.addEventListener('mousemove', (e) => {
        const img = document.querySelector('.hero__img');
        if (img) {
            const x = (window.innerWidth / 2 - e.pageX) / 60;
            const y = (window.innerHeight / 2 - e.pageY) / 60;
            img.style.transform = `translate(${x}px, ${y}px)`;
        }
    });
});