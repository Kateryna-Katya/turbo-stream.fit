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
            <span class="section-tag" data-aos="fade-down">Terms & Conditions</span>
            <h1 data-aos="fade-up">Условия использования</h1>

            <div class="legal-content">
                <div class="policy-hero-card terms-accent" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                        представляют собой юридически обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>.
                        Используя наш сайт и его консалтинговые ресурсы, вы подтверждаете свое полное согласие с данными Условиями.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>1. Предмет Соглашения</h2>
                    <p>
                        Компания предоставляет Пользователю доступ к использованию сайта
                        <strong><?= $fullDomain ?></strong> и его функционала, включая: доступ к
                        инновационным методологиям, экспертным статьям в блоге, стратегическим консультациям и другим инструментам 
                        развития бизнеса. Настоящее Соглашение регулирует все аспекты взаимодействия Пользователя с платформой в рамках законодательства ЕС.
                    </p>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>2. Обязанности и права Пользователя</h2>
                    <p>При использовании платформы <strong><?= $domainTitle ?></strong> запрещается:</p>
                    <ul class="legal-list">
                        <li>Публиковать или передавать любую незаконную, вредоносную или клеветническую информацию.</li>
                        <li>Предпринимать действия, которые могут нарушить работу цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.</li>
                        <li>Использовать автоматизированные скрипты (боты) для коммерческого сбора информации без письменного разрешения.</li>
                        <li>Предоставлять заведомо ложную информацию при запросе консультации.</li>
                    </ul>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>3. Интеллектуальная собственность</h2>
                    <div class="property-block">
                        <i class="fas fa-copyright"></i>
                        <p>
                            Весь контент на <strong><?= $fullDomain ?></strong> (тексты стратегий, программный код, графика, логотипы) является исключительной интеллектуальной собственностью Компании. 
                            Вам предоставляется ограниченная лицензия для личного использования в целях анализа и развития собственного проекта. Копирование и тиражирование материалов запрещено.
                        </p>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>4. Ограничение ответственности</h2>
                    <div class="warning-block">
                        <p>
                            Услуги и информация предоставляются по принципу <strong>«как есть» (as is)</strong>. Компания не несет ответственности за любые финансовые или репутационные убытки, 
                            возникшие в результате применения рекомендаций с платформы <strong><?= $domainTitle ?></strong>. Решение о внедрении стратегий принимает Пользователь.
                        </p>
                    </div>
                </div>

                <div class="legal-section" data-aos="fade-up">
                    <h2>5. Изменения и разрешение споров</h2>
                    <p>
                        Мы оставляем за собой право изменять данные Условия в любое время. Все споры стороны будут стремиться разрешить путем конструктивных переговоров. 
                        В случае недостижения согласия, спор подлежит рассмотрению в суде по месту регистрации Оператора (Рим, Италия).
                    </p>
                </div>

                <div class="contact-footer-policy" data-aos="fade-up">
                    <h2>Контактная информация</h2>
                    <p>Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нашей юридической службой:</p>
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