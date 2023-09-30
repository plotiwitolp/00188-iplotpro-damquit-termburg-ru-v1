<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Термлины</title>
</head>

<body>
    <style>
        body {
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        .termln-container {
            max-width: 1220px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .termln__top {
            background-color: #2E2D4B;
            color: #D9CBA1;
            padding: 30px 0 82px;
        }

        .termln__title,
        .termln__desc {
            text-align: center;
        }

        .termln__title {
            font-size: 100px;
            line-height: 136.2px;
            margin: 0;
            font-weight: 400;
        }

        .termln__desc {
            max-width: 1044px;
            margin: 0 auto;
            line-height: 24.51px;
            font-size: 18px;
        }

        .termln__anchor-list-inner {
            display: flex;
            justify-content: center;
            gap: 34px;
            margin-top: 60px;
        }

        .termln__anchor-list-item {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px solid #D9CBA1;
        }

        .termln-list__item-title {
            font-size: 60px;
            font-weight: 600;
            line-height: 81.72px;
            text-align: center;
        }

        .termln-list__item {
            margin: 100px auto;
        }

        .termln-list__item-body {
            font-size: 25px;
            line-height: 34.05px;
        }

        .termln-list__item-body-main {
            display: flex;
        }

        .termln-list__tabs-mob {
            display: none;
        }

        .termln-list__item-desc {
            width: 725px;
        }

        .termln-list__item-img {
            width: calc(100% - 725px);
            overflow: hidden;
        }

        .termln-list__item-desc {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
    </style>

    <main>

        <div class="termln">
            <div class="termln__top">
                <div class="termln-container">
                    <h1 class="termln__title">Термлины</h1>
                    <div class="termln__desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</div>
                    <div class="termln__anchor-list">
                        <div class="termln__anchor-list-inner">
                            <a href="#id" class="termln__anchor-list-item">
                                <img src="./img/termln__anchor-list/01.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#id" class="termln__anchor-list-item">
                                <img src="./img/termln__anchor-list/02.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#id" class="termln__anchor-list-item">
                                <img src="./img/termln__anchor-list/02.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#id" class="termln__anchor-list-item">
                                <img src="./img/termln__anchor-list/02.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#id" class="termln__anchor-list-item">
                                <img src="./img/termln__anchor-list/02.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#id" class="termln__anchor-list-item">
                                <img src="./img/termln__anchor-list/02.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#id" class="termln__anchor-list-item">
                                <img src="./img/termln__anchor-list/02.png" alt="">
                                <span>Подробнее</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="termln-container">
                <div class="termln-list">


                    <div class="termln-list__item">
                        <div class="termln-list__item-title">Банник-Яромир</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img">
                                    <img src="./img/termln-list/001.png" alt="">
                                </div>
                                <div class="termln-list__item-desc">
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Имя:</span>
                                        <span class="termln-list__item-desc-item-text">Банник – Яромир (значение имени – <i>«стремящийся к миру»</i>).</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Дата рождения:</span>
                                        <span class="termln-list__item-desc-item-text">Неизвестна.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Особые приметы:</span>
                                        <span class="termln-list__item-desc-item-text">Старичок. Показываться людям не любит. Всегда с ним красная шапка – невидимка и прилипшие листики от банных веников.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Миссия:</span>
                                        <span class="termln-list__item-desc-item-text">Хранитель бани. Поддерживает нужную температуру, нагоняет пар и создает комфортные условия в каждой бане и сауне.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Баня, которой покровительствует в Термбурге:</span>
                                        <span class="termln-list__item-desc-item-text">Яромир, безусловно, Хранитель всех бань, но как коренной термлин, он распределил обязанности и каждому раздал свои места парения для особого присмотра.
                                            Бани Яромира – <i>«Русская парная»</i> и <i>«Бани индивидуального парения»</i>.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="termln-list__tabs">
                                <div class="termln-list__tabs-desktop">
                                    <div class="termln-list__tabs-desktop-tabs">
                                        <div class="termln-list__tabs-desktop-tabs__item">История</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Характер и привычки</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Любимые выражения</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Приметы</div>
                                    </div>
                                    <div class="termln-list__tabs-desktop-body">
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                                <div class="termln-list__tabs-mob">
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">История</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Характер и привычки</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Любимые выражения</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Приметы</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img">
                                    <img src="./img/termln-list/002.png" alt="">
                                </div>
                                <div class="termln-list__item-desc">
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Имя:</span>
                                        <span class="termln-list__item-desc-item-text">Банная Бабушка Валькирия (значение имени – «имеющая силу лекаря»).</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Дата рождения:</span>
                                        <span class="termln-list__item-desc-item-text">Неизвестна.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Особые приметы:</span>
                                        <span class="termln-list__item-desc-item-text">Старичок. Показываться людям не любит. Всегда с ним красная шапка – невидимка и прилипшие листики от банных веников.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Миссия:</span>
                                        <span class="termln-list__item-desc-item-text">Хранитель бани. Поддерживает нужную температуру, нагоняет пар и создает комфортные условия в каждой бане и сауне.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Баня, которой покровительствует в Термбурге:</span>
                                        <span class="termln-list__item-desc-item-text">Яромир, безусловно, Хранитель всех бань, но как коренной термлин, он распределил обязанности и каждому раздал свои места парения для особого присмотра.
                                            Бани Яромира – <i>«Русская парная»</i> и <i>«Бани индивидуального парения»</i>.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="termln-list__tabs">
                                <div class="termln-list__tabs-desktop">
                                    <div class="termln-list__tabs-desktop-tabs">
                                        <div class="termln-list__tabs-desktop-tabs__item">История</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Характер и привычки</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Любимые выражения</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Приметы</div>
                                    </div>
                                    <div class="termln-list__tabs-desktop-body">
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                                <div class="termln-list__tabs-mob">
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">История</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Характер и привычки</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Любимые выражения</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Приметы</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img">
                                    <img src="./img/termln-list/002.png" alt="">
                                </div>
                                <div class="termln-list__item-desc">
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Имя:</span>
                                        <span class="termln-list__item-desc-item-text">Банная Бабушка Валькирия (значение имени – «имеющая силу лекаря»).</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Дата рождения:</span>
                                        <span class="termln-list__item-desc-item-text">Неизвестна.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Особые приметы:</span>
                                        <span class="termln-list__item-desc-item-text">Старичок. Показываться людям не любит. Всегда с ним красная шапка – невидимка и прилипшие листики от банных веников.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Миссия:</span>
                                        <span class="termln-list__item-desc-item-text">Хранитель бани. Поддерживает нужную температуру, нагоняет пар и создает комфортные условия в каждой бане и сауне.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Баня, которой покровительствует в Термбурге:</span>
                                        <span class="termln-list__item-desc-item-text">Яромир, безусловно, Хранитель всех бань, но как коренной термлин, он распределил обязанности и каждому раздал свои места парения для особого присмотра.
                                            Бани Яромира – <i>«Русская парная»</i> и <i>«Бани индивидуального парения»</i>.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="termln-list__tabs">
                                <div class="termln-list__tabs-desktop">
                                    <div class="termln-list__tabs-desktop-tabs">
                                        <div class="termln-list__tabs-desktop-tabs__item">История</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Характер и привычки</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Любимые выражения</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Приметы</div>
                                    </div>
                                    <div class="termln-list__tabs-desktop-body">
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                                <div class="termln-list__tabs-mob">
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">История</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Характер и привычки</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Любимые выражения</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Приметы</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img">
                                    <img src="./img/termln-list/002.png" alt="">
                                </div>
                                <div class="termln-list__item-desc">
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Имя:</span>
                                        <span class="termln-list__item-desc-item-text">Банная Бабушка Валькирия (значение имени – «имеющая силу лекаря»).</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Дата рождения:</span>
                                        <span class="termln-list__item-desc-item-text">Неизвестна.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Особые приметы:</span>
                                        <span class="termln-list__item-desc-item-text">Старичок. Показываться людям не любит. Всегда с ним красная шапка – невидимка и прилипшие листики от банных веников.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Миссия:</span>
                                        <span class="termln-list__item-desc-item-text">Хранитель бани. Поддерживает нужную температуру, нагоняет пар и создает комфортные условия в каждой бане и сауне.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Баня, которой покровительствует в Термбурге:</span>
                                        <span class="termln-list__item-desc-item-text">Яромир, безусловно, Хранитель всех бань, но как коренной термлин, он распределил обязанности и каждому раздал свои места парения для особого присмотра.
                                            Бани Яромира – <i>«Русская парная»</i> и <i>«Бани индивидуального парения»</i>.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="termln-list__tabs">
                                <div class="termln-list__tabs-desktop">
                                    <div class="termln-list__tabs-desktop-tabs">
                                        <div class="termln-list__tabs-desktop-tabs__item">История</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Характер и привычки</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Любимые выражения</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Приметы</div>
                                    </div>
                                    <div class="termln-list__tabs-desktop-body">
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                                <div class="termln-list__tabs-mob">
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">История</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Характер и привычки</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Любимые выражения</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Приметы</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img">
                                    <img src="./img/termln-list/002.png" alt="">
                                </div>
                                <div class="termln-list__item-desc">
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Имя:</span>
                                        <span class="termln-list__item-desc-item-text">Банная Бабушка Валькирия (значение имени – «имеющая силу лекаря»).</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Дата рождения:</span>
                                        <span class="termln-list__item-desc-item-text">Неизвестна.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Особые приметы:</span>
                                        <span class="termln-list__item-desc-item-text">Старичок. Показываться людям не любит. Всегда с ним красная шапка – невидимка и прилипшие листики от банных веников.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Миссия:</span>
                                        <span class="termln-list__item-desc-item-text">Хранитель бани. Поддерживает нужную температуру, нагоняет пар и создает комфортные условия в каждой бане и сауне.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Баня, которой покровительствует в Термбурге:</span>
                                        <span class="termln-list__item-desc-item-text">Яромир, безусловно, Хранитель всех бань, но как коренной термлин, он распределил обязанности и каждому раздал свои места парения для особого присмотра.
                                            Бани Яромира – <i>«Русская парная»</i> и <i>«Бани индивидуального парения»</i>.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="termln-list__tabs">
                                <div class="termln-list__tabs-desktop">
                                    <div class="termln-list__tabs-desktop-tabs">
                                        <div class="termln-list__tabs-desktop-tabs__item">История</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Характер и привычки</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Любимые выражения</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Приметы</div>
                                    </div>
                                    <div class="termln-list__tabs-desktop-body">
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                                <div class="termln-list__tabs-mob">
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">История</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Характер и привычки</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Любимые выражения</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Приметы</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img">
                                    <img src="./img/termln-list/002.png" alt="">
                                </div>
                                <div class="termln-list__item-desc">
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Имя:</span>
                                        <span class="termln-list__item-desc-item-text">Банная Бабушка Валькирия (значение имени – «имеющая силу лекаря»).</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Дата рождения:</span>
                                        <span class="termln-list__item-desc-item-text">Неизвестна.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Особые приметы:</span>
                                        <span class="termln-list__item-desc-item-text">Старичок. Показываться людям не любит. Всегда с ним красная шапка – невидимка и прилипшие листики от банных веников.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Миссия:</span>
                                        <span class="termln-list__item-desc-item-text">Хранитель бани. Поддерживает нужную температуру, нагоняет пар и создает комфортные условия в каждой бане и сауне.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Баня, которой покровительствует в Термбурге:</span>
                                        <span class="termln-list__item-desc-item-text">Яромир, безусловно, Хранитель всех бань, но как коренной термлин, он распределил обязанности и каждому раздал свои места парения для особого присмотра.
                                            Бани Яромира – <i>«Русская парная»</i> и <i>«Бани индивидуального парения»</i>.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="termln-list__tabs">
                                <div class="termln-list__tabs-desktop">
                                    <div class="termln-list__tabs-desktop-tabs">
                                        <div class="termln-list__tabs-desktop-tabs__item">История</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Характер и привычки</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Любимые выражения</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Приметы</div>
                                    </div>
                                    <div class="termln-list__tabs-desktop-body">
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                                <div class="termln-list__tabs-mob">
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">История</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Характер и привычки</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Любимые выражения</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Приметы</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img">
                                    <img src="./img/termln-list/002.png" alt="">
                                </div>
                                <div class="termln-list__item-desc">
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Имя:</span>
                                        <span class="termln-list__item-desc-item-text">Банная Бабушка Валькирия (значение имени – «имеющая силу лекаря»).</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Дата рождения:</span>
                                        <span class="termln-list__item-desc-item-text">Неизвестна.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Особые приметы:</span>
                                        <span class="termln-list__item-desc-item-text">Старичок. Показываться людям не любит. Всегда с ним красная шапка – невидимка и прилипшие листики от банных веников.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Миссия:</span>
                                        <span class="termln-list__item-desc-item-text">Хранитель бани. Поддерживает нужную температуру, нагоняет пар и создает комфортные условия в каждой бане и сауне.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Баня, которой покровительствует в Термбурге:</span>
                                        <span class="termln-list__item-desc-item-text">Яромир, безусловно, Хранитель всех бань, но как коренной термлин, он распределил обязанности и каждому раздал свои места парения для особого присмотра.
                                            Бани Яромира – <i>«Русская парная»</i> и <i>«Бани индивидуального парения»</i>.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="termln-list__tabs">
                                <div class="termln-list__tabs-desktop">
                                    <div class="termln-list__tabs-desktop-tabs">
                                        <div class="termln-list__tabs-desktop-tabs__item">История</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Характер и привычки</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Любимые выражения</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Приметы</div>
                                    </div>
                                    <div class="termln-list__tabs-desktop-body">
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                                <div class="termln-list__tabs-mob">
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">История</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Характер и привычки</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Любимые выражения</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab">Приметы</div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </main>

    <script>

    </script>
</body>

</html>