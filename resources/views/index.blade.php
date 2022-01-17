<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="site-container">


        <!-- <img src="./img/background-image.jpg" alt="" class="background-image"> -->
        <header class="header">
            <div class="header-number">Hof #345</div>
            <div class="header-logo active">
                <img src="{{ asset('storage/img/main-logo.png') }}" alt="logo">
            </div>
            <div class="header-popup">
                <div class="modalTrigger" data-modal="#modalInfo">
                    Mehr Infos
                </div>
            </div>
        </header>
        <main class="main-content">
            <div class="container">
                <div class="content-box">
                    <div class="content-box__heading">
                        <h1>Aischgrund Biohof Prechtel</h1>
                        <span>#landvergnuegen</span>
                    </div>
                    <div class="content-box__description">
                        <div class="description__text">
                            Porem sitat mi, quaeprorum dit fugiate aut aut res del mos doloria quasita tectam ipit lab
                            ius ut et pedis
                            sed et ad et lab inti con re volenem quamet omnihil magnist dolluptas volo to dic temporpos
                            ad ulpa
                            ipsandunt.
                        </div>
                        <div class="description__image">
                            <img src="{{ asset('storage/img/shield.svg') }}" alt="shield">
                        </div>
                    </div>
                    <div class="accordion-container">
                        <div class="accordion__item accordion-support">
                            <div class="accordion__button">
                                Hofprojekt unterstützen
                                <img src="{{ asset('storage/img/icon-coins.svg') }}" alt="coins">
                            </div>
                            <div class="accordion__content">
                                <div class="accordion__content__heading">Hofprojekte werden vom Gastgeber eingestellt.
                                    Es gelten die
                                    Landvergnügen AGBs.</div>
                                <div class="tab-item">
                                    <div class="tab__content">
                                        <div class="tab__title">Ein neuer Weidezaun</div>
                                        <div class="tab__progress">
                                            <div class="tab__progress__line">
                                                <div class="tab__progress__upperline" style="width: 36%;"></div>
                                            </div>
                                            <div class="tab__progress__percent">36%</div>
                                        </div>
                                    </div>
                                    <div class="tab__arrow">
                                        <img src="{{ asset('storage/img/icon-arrow-right.svg') }}" alt="next step">
                                    </div>
                                </div>
                                <div class="tab-step">
                                    <div class="tab__title">Ein neuer Weidezaun</div>
                                    <div class="tab__progress">
                                        <div class="tab__progress__line">
                                            <div class="tab__progress__upperline" style="width: 36%;"></div>
                                        </div>
                                        <div class="tab__progress__percent">36%</div>
                                    </div>
                                    <div class="tab-step__description">Unsere Schweine laufen immer weg, daher sollen
                                        Sie einen neuen Zaun
                                        bekommen</div>
                                    <form action="{{ route('in-voice') }}" method="POST" class="tab-step__payment test-payment">
                                        @csrf

                                        <div class="form-group">
                                            <input type="radio" name="payment1" id="payment1-1" value="10">
                                            <label for="payment1-1">10€</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="payment1" id="payment1-2" value="20">
                                            <label for="payment1-2">20€</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="payment1" id="payment1-3" value="50">
                                            <label for="payment1-3">50€</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="payment1" id="payment1-4" value="100">
                                            <label for="payment1-4">100€</label>
                                        </div>
                                    </form>
                                    <div class="tab-step__control">
                                        <a href="#" class="btn-link tab-step__next payment1">
                                            Jetzt unterstützen
                                            <img src="{{ asset('storage/img/icon-apple-pay.svg') }}"
                                                alt="apple pay icon">
                                        </a>
                                        <div class="tab-step__back">Zahlungsart ändern</div>
                                    </div>
                                </div>
                                <div class="tab-item">
                                    <div class="tab__content">
                                        <div class="tab__title">Urlaub für die Gastgeber</div>
                                        <div class="tab__progress">
                                            <div class="tab__progress__line">
                                                <div class="tab__progress__upperline" style="width: 36%;"></div>
                                            </div>
                                            <div class="tab__progress__percent">36%</div>
                                        </div>
                                    </div>
                                    <div class="tab__arrow">
                                        <img src="{{ asset('storage/img/icon-arrow-right.svg') }}" alt="next step">
                                    </div>
                                </div>
                                <div class="tab-step">
                                    <div class="tab__title">Urlaub für die Gastgeber</div>
                                    <div class="tab__progress">
                                        <div class="tab__progress__line">
                                            <div class="tab__progress__upperline" style="width: 36%;"></div>
                                        </div>
                                        <div class="tab__progress__percent">36%</div>
                                    </div>
                                    <div class="tab-step__description">Unsere Schweine laufen immer weg, daher sollen
                                        Sie einen neuen Zaun
                                        bekommen</div>
                                    <form action="" class="tab-step__payment">
                                        <div class="form-group">
                                            <input type="radio" name="payment2" id="payment2-1">
                                            <label for="payment2-1">25€</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="payment2" id="payment2-2">
                                            <label for="payment2-2">50€</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="payment2" id="payment2-3">
                                            <label for="payment2-3">75€</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="payment2" id="payment2-4">
                                            <label for="payment2-4">150€</label>
                                        </div>
                                    </form>
                                    <div class="tab-step__control">
                                        <a href="#" class="btn-link tab-step__next">
                                            Jetzt unterstützen
                                            <img src="{{ asset('storage/img/icon-apple-pay.svg') }}"
                                                alt="apple pay icon">
                                        </a>
                                        <div class="tab-step__back">Zahlungsart ändern</div>
                                    </div>
                                </div>
                                <div class="tab-item bottom-spacing no-progress-bar">
                                    <div class="tab__content">
                                        <div class="tab__title">Urlaub für die Gastgeber</div>
                                    </div>
                                    <div class="tab__arrow">
                                        <img src="{{ asset('storage/img/icon-arrow-right.svg') }}" alt="next step">
                                    </div>
                                </div>
                                <div class="tab-step">
                                    <div class="tab__title">Urlaub für die Gastgeber</div>
                                    <div class="tab__progress">
                                        <div class="tab__progress__line">
                                            <div class="tab__progress__upperline" style="width: 36%;"></div>
                                        </div>
                                        <div class="tab__progress__percent">36%</div>
                                    </div>
                                    <div class="tab-step__description">Unsere Schweine laufen immer weg, daher sollen
                                        Sie einen neuen Zaun
                                        bekommen</div>
                                    <form action="" class="tab-step__payment">
                                        <div class="form-group">
                                            <input type="radio" name="payment3" id="payment3-1">
                                            <label for="payment3-1">25€</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="payment3" id="payment3-2">
                                            <label for="payment3-2">50€</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="payment3" id="payment3-3">
                                            <label for="payment3-3">100€</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" name="payment3" id="payment3-4">
                                            <label for="payment3-4">200€</label>
                                        </div>
                                    </form>
                                    <div class="tab-step__control">
                                        <a href="#" class="btn-link tab-step__next">
                                            Jetzt unterstützen
                                            <img src="{{ asset('storage/img/icon-apple-pay.svg') }}"
                                                alt="apple pay icon">
                                        </a>
                                        <div class="tab-step__back">Zahlungsart ändern</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion__item accordion-compensation">
                            <div class="accordion__button">
                                <span>
                                    CO<span>2</span> Kompensation
                                </span>
                                <img src="{{ asset('storage/img/icon-co2.svg') }}" alt="CO2">
                            </div>
                            <div class="accordion__content">
                                <div class="accordion__content__heading">
                                    CO2-Kompensation Ihrer Fahrten ins Landvergnügen, in Kooperation mit Atmosfair.de
                                </div>
                                <div class="accordion-compensation__content">
                                    <div class="range-slider__title">
                                        Anreise
                                    </div>
                                    <div class="range-slider">
                                        <span class="amount">75km</span>
                                    </div>
                                    <div id="slider"></div>
                                    <div class="range-slider__title">Verbrauch (in Liter)</div>
                                    <div class="range-input">
                                        <input type="number" name="diesel">
                                        <select name="range-select">
                                            <option value="Diesel" selected>Diesel</option>
                                            <option value="Benzin">Benzin</option>
                                            <option value="Elektrisch">Elektrisch</option>
                                        </select>
                                    </div>
                                    <a href="#" class="btn-link">CO2</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-popup">
                <div class="modalTrigger" data-modal="#impressum">Impressum</div>
            </div>
        </main>
        <div class="modal" id="modalInfo">
            <div class="modal__body">
                <div class="modal__content">
                    <div class="modal__close"></div>
                    <div class="popup-heading">Über uns</div>
                    <div class="popup-text">Landvergnügen ist ein Stellplatzführer für Wohnmobile im ländlichen Raum.
                        Porem sitat
                        mi, quaeprorum dit fugiate aut aut res del mos doloria quasita tectam ipit lab ius ut et pedis
                        sed et ad et
                        lab inti con re volenem quamet omnihil magnist dolluptas volo to dic temporpos ad ulpa ipsandunt
                        repudam
                        apelles sit eaturitat ex eum qui cupides eum quis quis explian denesequi sectore molescim aute
                        modis ex
                        eumquidunt eium et impos etus, ut moloraessime nonectu resciam.</div>
                    <div class="popup-button">Mehr Informationen</div>
                </div>
            </div>
        </div>
        <div class="modal" id="impressum">
            <div class="modal__body">
                <div class="modal__content">
                    <div class="modal__close"></div>
                    <div class="popup-heading">Impressum</div>
                    <div class="popup-text">Landvergnügen ist ein Stellplatzführer für Wohnmobile im ländlichen Raum.
                        Porem sitat
                        mi, quaeprorum dit fugiate aut aut res del mos doloria quasita tectam ipit lab ius ut et pedis
                        sed et ad et
                        lab inti con re volenem quamet omnihil magnist dolluptas volo to dic temporpos ad ulpa ipsandunt
                        repudam
                        apelles sit eaturitat ex eum qui cupides eum quis quis explian denesequi sectore molescim aute
                        modis ex
                        eumquidunt eium et impos etus, ut moloraessime nonectu resciam.</div>
                    <div class="popup-button">Mehr Informationen</div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui-min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>


    <script>
        $('.payment1').click(function (e) {
            $('.test-payment').submit();
        });
    </script>
</body>

</html>
