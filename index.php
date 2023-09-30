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
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            overflow: hidden;
        }

        .termln__top {
            background-color: #2e2d4b;
            color: #d9cba1;
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
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            gap: 34px;
            margin-top: 60px;
        }

        .termln__anchor-list-item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border: 1px solid #d9cba1;
            gap: 5px;
        }

        .termln-list__item-title {
            font-size: 60px;
            font-weight: 600;
            line-height: 81.72px;
            text-align: center;
            margin-bottom: 60px;
            color: #2e2d4b;
        }

        .termln-list__item {
            margin: 100px auto;
        }

        .termln-list__item-body {
            font-size: 25px;
            line-height: 34.05px;
            color: #1c1c1c;
        }

        .termln-list__item-body-main {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 58px;
        }

        .termln-list__tabs-mob {
            display: none;
        }

        .termln-list__item-desc {
            width: 725px;
        }

        .termln-list__item-img {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: calc(100% - 725px);
            overflow: hidden;
            position: relative;
        }

        .termln-list__item-img img {
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            position: relative;
        }

        .termln-list__item-desc {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            gap: 20px;
        }

        .termln-list__item-desc-item-label {
            color: #2e2d4b;
            font-weight: 700;
        }

        .termln-list__tabs-desktop-tabs {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            gap: 48px;
        }

        .termln-list__tabs-desktop-tabs__item,
        .termln-list__tabs-mob-item-tab {
            padding: 10px 40px 10px 20px;
            background-color: #dfaf20;
            cursor: pointer;
            border-radius: 3px;
            position: relative;
            font-weight: 600;
        }

        .termln-list__tabs-desktop-tabs__item::after,
        .termln-list__tabs-mob-item-tab span::after {
            content: "";
            display: block;
            position: absolute;
            right: 15px;
            top: 20px;
            width: 15px;
            height: 15px;
            background-image: url(./img_termln/arrow-deactivate.png);
        }

        .termln-list__tabs-desktop-tabs__item.active,
        .termln-list__tabs-mob-item-tab.active {
            background-color: #2e2d4b;
            color: #d9cba1;
        }

        .termln-list__tabs-desktop-tabs__item.active::after,
        .termln-list__tabs-mob-item-tab.active span::after {
            background-image: url(./img_termln/arrow-active.png);
        }

        .termln-list__tabs-desktop-tabs__item.active::after {
            top: 23px;
        }

        .termln-list__tabs-desktop-body {
            margin-top: 35px;
        }

        .termln-list__tabs-desktop-body-item {
            display: none;
            padding-right: 78px;
        }

        .termln-list__tabs-desktop-body-item.active {
            display: block;
        }

        .termln__anchor-list-item span {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
            color: #d9cba1;
            gap: 8px;
            margin-bottom: 10px;
        }

        .termln__anchor-list-item span:after {
            content: "";
            display: block;
            width: 29px;
            height: 9px;
            background-image: url(./img_termln/anchor-arrow.png);
        }

        .termln__anchor-list-item {
            text-decoration: none;
            -webkit-transition: -webkit-box-shadow 0.2s ease-in-out;
            transition: -webkit-box-shadow 0.2s ease-in-out;
            transition: box-shadow 0.2s ease-in-out;
            transition: box-shadow 0.2s ease-in-out, -webkit-box-shadow 0.2s ease-in-out;
        }

        .termln__anchor-list-item:hover {
            -webkit-box-shadow: 0 0 20px rgba(217, 203, 161, 0.5019607843);
            box-shadow: 0 0 20px rgba(217, 203, 161, 0.5019607843);
        }

        .termln__anchor-list-item img {
            margin: auto;
        }

        .termln-list__item-img:after {
            content: "";
            display: block;
            position: absolute;
            top: 450px;
            left: 0;
            background-image: url(./img_termln/ellipse-desk.png);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 430px;
            height: 125px;
            z-index: -1;
        }

        /* start корректировка позиционирования картинок и элипса */
        .termln-list__item-img_01 img {
            left: -126px;
            margin-bottom: -23px;
            margin-top: -145px;
        }

        .termln-list__item-img_01 {
            top: -15px;
            left: 5px;
        }

        .termln-list__item-img_02 img {
            left: -86px;
            margin-bottom: -30px;
            margin-top: 57px;
        }

        .termln-list__item-img_02 {
            top: -83px;
            left: 13px;
        }

        .termln-list__item-img_03 img {
            left: -5px;
            margin-bottom: 8px;
            margin-top: 143px;
        }

        .termln-list__item-img_03 {
            top: -90px;
            left: 5px;
        }

        .termln-list__item-img_04 img {
            left: -119px;
            margin-bottom: 5px;
            margin-top: 50px;
        }

        .termln-list__item-img_04 {
            top: -90px;
            left: 5px;
        }

        .termln-list__item-img_05 img {
            left: -26px;
            margin-bottom: 17px;
            margin-top: 115px;
        }

        .termln-list__item-img_05 {
            top: -90px;
            left: 5px;
        }

        .termln-list__item-img_06 img {
            left: -61px;
            margin-bottom: -20px;
            margin-top: 195px;
        }

        .termln-list__item-img_06 {
            top: -90px;
            left: 5px;
        }

        .termln-list__item-img_07 img {
            left: -29px;
            margin-bottom: 26px;
            margin-top: 79px;
        }

        .termln-list__item-img_07 {
            top: -90px;
            left: 5px;
        }

        /* end корректировка позиционирования картинок и элипса */
        @media (max-width: 1250px) {
            .termln-container {
                padding: 0 15px;
            }

            .termln-list__item-img {
                top: 0;
                left: 0;
                width: 465px;
            }

            .termln__anchor-list-inner {
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start;
            }

            .termln-list__item-desc {
                width: calc(100% - 465px);
            }

            .termln-list__item-img img {
                left: 0;
                margin-bottom: 0;
                margin-top: 0;
                width: 100%;
            }

            .termln-list__item-img:after {
                top: 350px;
            }

            /* start корректировка позиционирования картинок и элипса */
            .termln-list__item-img_02 img {
                top: 90px;
                left: 19px;
            }

            .termln-list__item-img_03 img {
                top: 68px;
                left: 19px;
            }

            .termln-list__item-img_04 img {
                top: 84px;
                left: -24px;
            }

            .termln-list__item-img_05 img {
                top: 68px;
                left: 13px;
            }

            .termln-list__item-img_06 img {
                top: 107px;
                left: -39px;
            }

            .termln-list__item-img_07 img {
                top: 70px;
                left: 16px;
            }

            /* end корректировка позиционирования картинок и элипса */
            .termln__top {
                padding: 25px 0 45px;
            }

            .termln__anchor-list {
                overflow: scroll;
                padding-bottom: 15px;
            }

            .termln-list__tabs-desktop-tabs {
                gap: 10px;
            }
        }

        @media (max-width: 1010px) {
            .termln-list__item-body-main {
                margin-bottom: 35px;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
            }

            .termln-list__item-img,
            .termln-list__item-desc {
                width: 100%;
            }

            .termln-list__tabs-desktop-tabs {
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .termln-list__item-img {
                top: 0;
                left: 0;
                width: 360px;
                margin: 0 auto;
            }

            .termln-list__item-img img {
                width: 100%;
                left: 0;
                top: 0;
            }

            .termln-list__item-img:after {
                top: 246px;
                left: -13px;
                width: 380px;
            }

            /* start корректировка позиционирования картинок и элипса */
            .termln-list__item-img_02:after {
                top: 173px;
                left: -15px;
            }

            .termln-list__item-img_03:after {
                top: 187px;
                left: -15px;
            }

            .termln-list__item-img_04:after {
                top: 174px;
                left: -9px;
            }

            .termln-list__item-img_05:after {
                top: 179px;
                left: -14px;
            }

            .termln-list__item-img_06:after {
                top: 164px;
                left: -8px;
            }

            .termln-list__item-img_07:after {
                top: 162px;
                left: -15px;
            }

            /* end корректировка позиционирования картинок и элипса */
            .termln-list__item-desc {
                margin-top: 40px;
            }

            .termln-list__item-title {
                font-size: 48px;
                line-height: 48.72px;
                margin-bottom: 35px;
            }

            .termln-list__item {
                margin: 70px auto;
            }
        }

        @media (max-width: 538px) {
            .termln-container {
                padding: 0 20px;
            }

            .termln__top {
                padding: 35px 0 40px;
            }

            .termln__title {
                font-size: 60px;
                line-height: 81.72px;
            }

            .termln__desc {
                margin-top: 10px;
                line-height: 19.07px;
                font-size: 14px;
            }

            .termln__anchor-list-inner {
                gap: 15px;
                margin-top: 40px;
            }

            .termln-list {
                margin-top: 50px;
            }

            .termln-list__item {
                margin: 0 auto 60px;
            }

            .termln-list__item-title {
                font-size: 30px;
                line-height: 40.86px;
                margin-bottom: 0;
            }

            .termln-list__item-img {
                width: 323px;
            }

            .termln-list__item-img:after {
                top: 260px;
                left: 52px;
                width: 179px;
                height: 50px;
            }

            .termln-list__item-desc {
                margin-top: 30px;
            }

            .termln-list__tabs-desktop {
                display: none;
            }

            .termln-list__tabs-mob {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                gap: 15px;
            }

            .termln-list__item-body {
                font-size: 18px;
                line-height: 24.5px;
            }

            .termln-list__item-desc {
                gap: 10px;
            }

            .termln-list__tabs-mob-item-tab {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
            }

            .termln-list__tabs-mob-item-tab span {
                position: relative;
            }

            .termln-list__tabs-mob-item-tab span::after {
                top: 4px;
                right: -25px;
            }

            .termln-list__tabs-mob-item-tab.active span::after {
                top: 8px;
            }

            .termln-list__item-body-main {
                margin-bottom: 40px;
            }

            .termln-list__tabs-mob-item-body {
                margin: 20px 0 5px;
            }

            .termln-list__tabs-mob-item-body {
                display: none;
            }

            .termln-list__tabs-mob-item-tab.active+.termln-list__tabs-mob-item-body {
                display: block;
            }

            /* start корректировка позиционирования картинок и элипса */
            .termln-list__item-img_01 {
                margin-top: -34px;
                margin-left: 30px;
            }

            .termln-list__item-img_02 {
                margin-top: 7px;
                margin-left: 19px;
            }

            .termln-list__item-img_02:after {
                top: 190px;
            }

            .termln-list__item-img_03 {
                margin-top: 19px;
                margin-left: 26px;
                padding-bottom: 17px;
            }

            .termln-list__item-img_03:after {
                top: 230px;
            }

            .termln-list__item-img_04 {
                margin-top: -31px;
                margin-left: -7px;
            }

            .termln-list__item-img_04:after {
                top: 201px;
                left: 77px;
            }

            .termln-list__item-img_05 {
                margin-top: 12px;
                margin-left: 22px;
            }

            .termln-list__item-img_05:after {
                top: 211px;
                left: 54px;
            }

            .termln-list__item-img_06 {
                margin-top: -59px;
                margin-left: -15px;
            }

            .termln-list__item-img_06:after {
                top: 185px;
                left: 76px;
            }

            .termln-list__item-img_07 {
                margin-top: -13px;
                margin-left: 16px;
            }

            .termln-list__item-img_07:after {
                top: 198px;
                left: 40px;
            }

            /* end корректировка позиционирования картинок и элипса */
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
                            <a href="#hero-01" class="termln__anchor-list-item">
                                <img src="./img_termln/termln__anchor-list/01.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#hero-02" class="termln__anchor-list-item">
                                <img src="./img_termln/termln__anchor-list/02.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#hero-03" class="termln__anchor-list-item">
                                <img src="./img_termln/termln__anchor-list/03.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#hero-04" class="termln__anchor-list-item">
                                <img src="./img_termln/termln__anchor-list/04.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#hero-05" class="termln__anchor-list-item">
                                <img src="./img_termln/termln__anchor-list/05.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#hero-06" class="termln__anchor-list-item">
                                <img src="./img_termln/termln__anchor-list/06.png" alt="">
                                <span>Подробнее</span>
                            </a>
                            <a href="#hero-07" class="termln__anchor-list-item">
                                <img src="./img_termln/termln__anchor-list/07.png" alt="">
                                <span>Подробнее</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="termln-container">
                <div class="termln-list">


                    <div class="termln-list__item" id="hero-01">
                        <div class="termln-list__item-title">Банник-Яромир</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img termln-list__item-img_01">
                                    <img src="./img_termln/termln-list/001.png" alt="">
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
                                        <div class="termln-list__tabs-desktop-tabs__item active">История</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Характер и привычки</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Любимые выражения</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Приметы</div>
                                    </div>
                                    <div class="termln-list__tabs-desktop-body">
                                        <div class="termln-list__tabs-desktop-body-item active">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью.
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            2
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            3
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            4
                                        </div>
                                    </div>
                                </div>
                                <div class="termln-list__tabs-mob">
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab active"><span>История</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Характер и привычки</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Любимые выражения</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Приметы</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="termln-list__item" id="hero-02">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img termln-list__item-img_02">
                                    <img src="./img_termln/termln-list/002.png" alt="">
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
                                        <span class="termln-list__item-desc-item-text">Всегда ходит с травками, улыбается и дарит хорошую энергетику.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Миссия:</span>
                                        <span class="termln-list__item-desc-item-text">Банная бабушка — дух, обитающий в бане. Хозяйка бани в облике доброй старушки - повитухи или знахарки, доброжелательна к слабым и больным, избавляет их от всех болезней.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Баня, которой покровительствует в Термбурге:</span>
                                        <span class="termln-list__item-desc-item-text"><i>«Травяная парная»</i> - это любимое место Бабушки Валькирии.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="termln-list__tabs">
                                <div class="termln-list__tabs-desktop">
                                    <div class="termln-list__tabs-desktop-tabs">
                                        <div class="termln-list__tabs-desktop-tabs__item active">История</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Характер и привычки</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Любимые выражения</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Приметы</div>
                                    </div>
                                    <div class="termln-list__tabs-desktop-body">
                                        <div class="termln-list__tabs-desktop-body-item active">
                                            Давно замужем. Всегда была рядом с Яромиром. Все эти годы поддерживала в нем надежду, что его мечта обязательно осуществиться и такой город бань обязательно построят. Сильно любит дочь Лелю.
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            2
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            3
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            4
                                        </div>
                                    </div>
                                </div>
                                <div class="termln-list__tabs-mob">
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab active"><span>История</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Давно замужем. Всегда была рядом с Яромиром. Все эти годы поддерживала в нем надежду, что его мечта обязательно осуществиться и такой город бань обязательно построят. Сильно любит дочь Лелю.
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Характер и привычки</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Любимые выражения</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Приметы</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item" id="hero-03">
                        <div class="termln-list__item-title">Домовой Переслав</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img termln-list__item-img_03">
                                    <img src="./img_termln/termln-list/003.png" alt="">
                                </div>
                                <div class="termln-list__item-desc">
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Имя:</span>
                                        <span class="termln-list__item-desc-item-text">Домовой Переслав (значение имени – «очень мудрый, славный»).</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Дата рождения:</span>
                                        <span class="termln-list__item-desc-item-text">Неизвестна.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Особые приметы:</span>
                                        <span class="termln-list__item-desc-item-text">Седой и всегда ходит в лаптях. Они друзья с Банником Яромиром и Дворовым Казимиром.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Миссия:</span>
                                        <span class="termln-list__item-desc-item-text">Хранитель всего комплекса Термбург.</span>
                                    </div>
                                    <div class="termln-list__item-desc-item">
                                        <span class="termln-list__item-desc-item-label">Баня, которой покровительствует в Термбурге:</span>
                                        <span class="termln-list__item-desc-item-text"><i>"Липовая парная"</i> и <i>"Мультикаменная"</i>.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="termln-list__tabs">
                                <div class="termln-list__tabs-desktop">
                                    <div class="termln-list__tabs-desktop-tabs">
                                        <div class="termln-list__tabs-desktop-tabs__item active">История</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Характер и привычки</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Любимые выражения</div>
                                        <div class="termln-list__tabs-desktop-tabs__item">Приметы</div>
                                    </div>
                                    <div class="termln-list__tabs-desktop-body">
                                        <div class="termln-list__tabs-desktop-body-item active">
                                            Странствовал рядом с Яромиром. Селился всегда в домах недалеко от бани Яромира, но вместе им жить никогда не удавалось. Радостно последовал в Термбург, чтобы помогать другу и поддерживать порядок в таком большом комплексе.
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            2
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            3
                                        </div>
                                        <div class="termln-list__tabs-desktop-body-item">
                                            4
                                        </div>
                                    </div>
                                </div>
                                <div class="termln-list__tabs-mob">
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab active"><span>История</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью.
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Характер и привычки</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Любимые выражения</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Приметы</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item" id="hero-04">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img termln-list__item-img_04">
                                    <img src="./img_termln/termln-list/004.png" alt="">
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
                                        <div class="termln-list__tabs-mob-item-tab"><span>История</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Характер и привычки</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Любимые выражения</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Приметы</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item" id="hero-05">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img termln-list__item-img_05">
                                    <img src="./img_termln/termln-list/005.png" alt="">
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
                                        <div class="termln-list__tabs-mob-item-tab"><span>История</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Характер и привычки</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Любимые выражения</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Приметы</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item" id="hero-06">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img termln-list__item-img_06">
                                    <img src="./img_termln/termln-list/006.png" alt="">
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
                                        <div class="termln-list__tabs-mob-item-tab"><span>История</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Характер и привычки</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Любимые выражения</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Приметы</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 4
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="termln-list__item" id="hero-07">
                        <div class="termln-list__item-title">Банная Бабушка Валькирия</div>
                        <div class="termln-list__item-body">

                            <div class="termln-list__item-body-main">
                                <div class="termln-list__item-img termln-list__item-img_07">
                                    <img src="./img_termln/termln-list/007.png" alt="">
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
                                        <div class="termln-list__tabs-mob-item-tab"><span>История</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 1
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Характер и привычки</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 2
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Любимые выражения</span></div>
                                        <div class="termln-list__tabs-mob-item-body">
                                            Был банником у Петра 1, который обещал ему построить целый город бань, но не успел.
                                            Долго скитался и мечтал, что кто - то захочет его мечту реализовать. Благодаря черным петухам узнал про Термбург и привел сюда жить всю семью. 3
                                        </div>
                                    </div>
                                    <div class="termln-list__tabs-mob-item">
                                        <div class="termln-list__tabs-mob-item-tab"><span>Приметы</span></div>
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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        (function($) {
            $(document).ready(function() {

                $('.termln-list__tabs-desktop-tabs__item').on('click', function() {
                    const parentTabs = $(this).closest('.termln-list__tabs-desktop-tabs');
                    const parentBodyItem = parentTabs.next('.termln-list__tabs-desktop-body');
                    const bodyItems = parentBodyItem.find('.termln-list__tabs-desktop-body-item');
                    let currentIndex = $(this).index();
                    parentTabs.find('.termln-list__tabs-desktop-tabs__item').removeClass('active');
                    $(this).addClass('active');
                    bodyItems.removeClass('active');
                    bodyItems.eq(currentIndex).addClass('active');
                });

                $('.termln-list__tabs-mob-item-tab').on('click', function() {
                    $(this).parents('.termln-list__tabs-mob').find('.termln-list__tabs-mob-item-tab').removeClass('active');
                    $(this).addClass('active');
                })

            });
        })(jQuery);
    </script>
</body>

</html>