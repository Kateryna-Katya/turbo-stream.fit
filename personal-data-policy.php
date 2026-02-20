<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> — Экспертный консалтинг и стратегии роста</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='none' stroke='white' stroke-width='2'/><path d='M30 50 L50 30 L70 50 L50 70 Z' fill='white'/></svg>">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#home" class="logo">
                <span class="logo__accent">Turbo</span>Stream
            </a>
            
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#home" class="nav__link">Главная</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                    <li><a href="./#strategies" class="nav__link">Стратегии</a></li>
                    <li><a href="./#insights" class="nav__link">Инсайты</a></li>
                    <li><a href="./#about" class="nav__link">О нас</a></li>
                </ul>
            </nav>
            
            <div class="header__actions">
                <a href="./#contact" class="btn btn--outline">Связаться</a>
                <button class="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" data-aos="fade-down">Privacy & Security</span>
            <h1 data-aos="fade-up">Политика обработки персональных данных</h1>

            <div class="legal-content">
                <div class="policy-intro" data-aos="fade-up" data-aos-delay="100">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика обработки персональных данных (далее —
                        «Политика») определяет порядок и условия обработки персональных
                        данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                        устанавливает меры по обеспечению безопасности этих данных.
                    </p>
                    <p>
                        1.1. Важнейшей целью и условием осуществления своей деятельности
                        Оператор считает соблюдение прав и свобод человека и гражданина при
                        обработке его персональных данных, в том числе защиты прав на
                        неприкосновенность частной жизни, личную и семейную тайну.
                    </p>
                    <p>
                        1.2. Настоящая Политика применяется ко всей информации, которую
                        Оператор может получить о посетителях (далее — «Пользователи»)
                        веб-сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section" data-aos="fade-up">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li>
                            <strong>Веб-сайт</strong> — совокупность графических и
                            информационных материалов, доступных по адресу <strong><?= $fullDomain ?></strong>.
                        </li>
                        <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                        <li>
                            <strong>Персональные данные</strong> — любая информация,
                            относящаяся прямо или косвенно к Пользователю.
                        </li>
                        <li>
                            <strong>Обработка данных</strong> — любое действие (операция) или совокупность действий, совершаемых с данными (сбор, запись, систематизация, хранение).
                        </li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <i class="fas fa-user-shield"></i>
                            <div>
                                <strong>Личные данные:</strong>
                                <span>ФИО, Email, контактный номер телефона.</span>
                            </div>
                        </div>
                        <div class="data-item">
                            <i class="fas fa-cookie-bite"></i>
                            <div>
                                <strong>Технические данные:</strong>
                                <span>Cookies, IP-адрес, тип браузера и параметры сессии.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section" data-aos="fade-up">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="legal-list">
                        <li>Идентификация Пользователя для предоставления доступа к консалтинг-платформе.</li>
                        <li>Установление обратной связи, включая направление уведомлений и обработку заявок.</li>
                        <li>Исполнение договоров на оказание консультационных услуг и предоставление инсайтов.</li>
                        <li>Улучшение качества работы блога и анализ эффективности предложенных стратегий.</li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up">
                    <h2>5. Правовые основания</h2>
                    <p>
                        Оператор обрабатывает персональные данные Пользователя только в случае их заполнения и/или отправки Пользователем самостоятельно через специальные формы на сайте <strong><?= $fullDomain ?></strong>. 
                        Мы также обрабатываем обезличенные данные, если это разрешено в настройках вашего браузера (включено сохранение файлов «cookie» и использование технологии JavaScript).
                    </p>
                </div>

                <div class="policy-section contact-footer-policy" data-aos="fade-up">
                    <h2>6. Вопросы и отзывы</h2>
                    <p>Если у вас возникли вопросы касательно обработки ваших данных, вы можете направить официальный запрос на наш электронный адрес:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#home" class="logo footer__logo">
                    <span class="logo__accent">Turbo</span>Stream
                </a>
                <p class="footer__description">
                    Инновационная технология консалтинга для переосмысления вашего бизнеса. Мы создаем решения, которые меняют правила игры.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__list">
                    <li><a href="./#home">Главная</a></li>
                    <li><a href="./#expertise">Экспертиза</a></li>
                    <li><a href="./#strategies">Стратегии</a></li>
                    <li><a href="./#insights">Инсайты</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__list">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-list">
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <a href="tel:+390697639385">+39 06 9763 9385</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Via dei Condotti, 10, 00187 Roma RM, Italy</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="footer__bottom">
            <div class="container footer__bottom-content">
                <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены.</p>
                <p>Предложение активно только в странах ЕС</p>
            </div>
        </div>
    </footer>
    <div class="mobile-menu" id="mobileMenu">
        <button class="mobile-menu__close"><i class="fas fa-times"></i></button>
        <nav class="mobile-menu__nav">
            <a href="./#home" class="mobile-menu__link">Главная</a>
            <a href="./#expertise" class="mobile-menu__link">Экспертиза</a>
            <a href="./#strategies" class="mobile-menu__link">Стратегии</a>
            <a href="./#insights" class="mobile-menu__link">Инсайты</a>
            <a href="./#about" class="mobile-menu__link">О нас</a>
            <a href="./#contact" class="mobile-menu__link btn btn--outline">Связаться</a>
        </nav>
    </div>
    
    <div id="cookiePopup" class="cookie-popup">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
        <button id="acceptCookies" class="btn btn--outline btn--small">Принять</button>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
</body>
</html>