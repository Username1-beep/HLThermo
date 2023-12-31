<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Направления применения</title>
    <link type="image/x-icon" href="./src/drone.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="./src/drone.ico" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/cable_usage.css">
  </head>
  <body>
    <header class="page-header">
        <nav class="navigation">
            <a href="index.php" class="logo-header">
                <img src="./src/HLThermo-hd.svg" alt="Логотип CableFlyer">
            </a>
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Направления применения</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="cable_contacts.php">Контакты</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="usage-main">
        <h1 class="visually-hidden">Направления применения</h1>
        <p class="usage-title">Направления применения</p>
        <section class="usage-info">
            <section class="usage-container usage-container-left">
                <p class="usage-container-title">Комплексная диагностика</p>
                <ul class="usage-container-text">
                    <li class="usage-container-list">Контроль технического состояния</li>
                    <li class="usage-container-list">Поиск места и определение причин отказа (неисправности)</li>
                    <li class="usage-container-list">Прогнозирование технического состояния</li>
                </ul>
            </section>
            <section class="usage-container usage-container-right">
                <p class="usage-container-title">Создание ГИС</p>
                <ul class="usage-container-text">
                    <li class="usage-container-list">Наглядное представление положения имеющихся воздушных линий электропередачи</li>
                    <li class="usage-container-list">Упрощение проектирования, диагностики и эксплуатации воздушных линий электропередачи</li>
                    <li class="usage-container-list">Ключевая информация об объектах электроэнергетики</li>
                </ul>
                
            </section>
        </section>
        <div class="carouselki">
            <div class=" my-carousel">
                <div id="carouselDiagnosis" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="./src/1.png" alt="Первый слайд" data-index="1">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./src/2.png" alt="Второй слайд" data-index="2">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./src/3.png" alt="Третий слайд" data-index="3">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./src/4.png" alt="Четвертый слайд" data-index="4">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./src/5.png" alt="Пятый слайд" data-index="5">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselDiagnosis" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselDiagnosis" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
            <div class=" my-carousel">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="./src/gis1.png" alt="Первый слайд" data-index="6">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./src/gis2.png" alt="Второй слайд" data-index="7">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./src/gis3.png" alt="Третий слайд" data-index="8">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="./src/gis4.png" alt="Четвертый слайд" data-index="9">
                      </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <section class="previews">
            <div class="gallery">
                <img src="./src/1.png" class="modal-trigger" data-index="1">
                <img src="./src/2.png" class="modal-trigger" data-index="2">
                <img src="./src/3.png" class="modal-trigger" data-index="3">
                <img src="./src/4.png" class="modal-trigger" data-index="4">
                <img src="./src/5.png" class="modal-trigger" data-index="5">
              </div>                  
              <div id="modal" class="modal">
                <img class="modal-content" id="modal-image">
                <span class="prev" onclick="prevImage()">&#10094;</span>
                <span class="next" onclick="nextImage()">&#10095;</span>
              </div>
              <div class="gallery">
                <img src="./src/6.png" class="modal-trigger" data-index="6">
                <img src="./src/7.png" class="modal-trigger" data-index="7">
                <img src="./src/8.png" class="modal-trigger" data-index="8">
                <img src="./src/9.png" class="modal-trigger" data-index="9">
              </div>                  
              <div id="modal" class="modal">
                <div class="modal-wrapper">
                    <img class="modal-content" id="modal-image">
                    <span class="prev" onclick="prevImage()">&#10094;</span>
                    <span class="next" onclick="nextImage()">&#10095;</span>
                </div>
              </div>
        </section>
        <script src="script.js"></script>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>