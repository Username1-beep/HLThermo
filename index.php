 <!DOCTYPE html>
 <html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>HL Thermo</title>
        <link rel="stylesheet" href="./styles/cable_main.css">
        <link type="image/x-icon" href="./src/drone.ico" rel="shortcut icon">
        <link type="Image/x-icon" href="./src/drone.ico" rel="icon">
    </head>
    <body> 
        <header class="page-header">
            <nav class="navigation">
                <a href="index.php" class="logo-header">
                    <img src="./src/HLThermo-hd.svg" alt="Логотип CableFlyer">
                </a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cable_usage.php">Направления применения</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="cable_contacts.php">Контакты</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="main-container page-main">
            <h1 class="visually-hidden">Канатолет "CableFlyer"</h1>
            <section class="introduction">
                <div class="intro-info">
                    <h2 class="visually-hidden">Введение о продукте</h2>
                    <p class="intro-header">HL Thermo</p>
                    <p class="intro-text">
                        Автоматизированный комплекс для контроля за состоянием воздушных линий электропередачи с использованием тепловизионной диагностики
                    </p>
                    <div class="mail-link">
                        <img class="mail-icon" src="./src/mail.svg" alt="Письмо иконка">
                        <a class="intro-link" href="cable_contacts.php">Связь с нами</a>
                    </div>
                </div>
            </section>
            <section class="about">
                <div class="about-info">
                    <h2 class="visually-hidden">Как это работает</h2>
                    <h3 class="about-header">Как это работает</h3>
                    <p class="about-text">Разработанный комплекс позволяет повысить качество тепловизионной диагностики воздушных линий за счет автоматизации распознавания дефектных областей на термограммах</p>
                    <!-- <p class="about-text-s">В самом начале мы поставили для себя цель: обезопасить и облегчить обслуживания ЛЭП</p> -->
                    <ul class="advantages-list">
                        <li class="advantages-item">
                            <img class="adv-image" src="./src/mod4.1.jpg" alt="Цифровизация иконка">
                            <div>
                                <h3 class="advantages-title">Тепловизионная диагностика</h3>
                                <p class="advantages-description">Оценка технического состояния воздушных линий электропередачи по данным тепловизионной диагностики</p>
                            </div>
                        </li>
                        <li class="advantages-item">
                            <img class="adv-image" src="./src/mod1.jpg" alt="Безопасность иконка">
                            <div>
                                <h3 class="advantages-title">Беспилотный летательный аппарат</h3>
                                <p class="advantages-description">Проведение удалённого регулярного мониторинга протяженных воздушных линий</p>
                            </div>
                        </li>
                        <li class="advantages-item">
                            <img class="adv-image" src="./src/mod2.jpg" alt="Качество иконка">
                            <div>
                                <h3 class="advantages-title">Зарядно-защитная станция</h3>
                                <p class="advantages-description">Увеличение дальности полета беспилотного летательного аппарата за счет заряда аккумуляторных батарей на станции</p>
                            </div>
                        </li>
                        <li class="advantages-item">
                            <img class="adv-image" src="./src/mod3.1.jpg" alt="Скорость иконка">
                            <div>
                                <h3 class="advantages-title">Обработка данных</h3>
                                <p class="advantages-description">Формирование отчета, показывающего не только техническое состояние, но и координаты расположения неисправностей узлов воздушных линий</p>
                            </div>
                        </li>
                      
                    </ul>
                </div>
                <img class="about-image" src="./src/2.1.png" alt="Фотография Канатолёта">
            </section>
            <section class="sch-section">
                <img class="sch-image modal-trigger" src="./src/sch1.png" alt="схема" onclick="openModal('./src/sch1.png')">               
                <img class="sch-image modal-trigger" src="./src/sch2.png" alt="схема" onclick="openModal('./src/sch2.png')">
                <div id="modal" class="modal">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <img class="modal-content" src="./src/3.png" id="modal-image">
                </div> 
            </section>
            <script src="script_main.js"></script>
        </main>
        <footer class="page-footer">
            <section class="footer-contacts">
                <p class="footer-item">E-mail:  ooo_teploviz@mail.ru</p>
                <p class="footer-item">ООО “Тепловиз”</p>
                <p class="footer-item">© Copyright 2023. All Rights Reserved</p>
            </section>
            <a href="#" class="logo-footer">
                    <img src="./src/fond-footer1.png" alt="Логотип CableFlyer">
                </a>
        </footer>
    </body>
 </html>