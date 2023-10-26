<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Unicons --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">


    {{-- Main CSS  --}}
    <link rel="stylesheet" href="{{asset ('css/main.css')}}">

    {{-- Typed JS --}}
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    
        {{-- Favicon --}}
    <link rel="shortcut icon" href="{{asset ('images/favicon.ico')}}" type="image/x-icon">
    <title>IUST Bus Tracker</title>
</head>
<body>
    {{-- ======= SideBar ========= --}}
    <div class="nav__toggle" id="nav-toggle">
        <i class="uil uil-bars"></i>
    </div>
    <aside class="sidebar" id="sidebar">
        <div class="show-sidebar">
        <nav class="nav">
            <div class="nav__logo">
                <a href="#" class="nav__logo__text">IBT</a>
            </div>

            <div class="nav__menu">
                <div class="menu">
                    <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#home" class="nav__link active-link">Home</a>
                            </li>

                            <li class="nav__item">
                                <a href="#buses" class="nav__link">Buses</a>
                            </li>

                            <li class="nav__item">
                                <a href="{{url('/')}}/register" class="nav__link">Register</a>
                            </li>

                            <li class="nav__item">
                                <a href="{{url('/')}}/admin/login" class="nav__link">Admin</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    </aside>

    {{-- ==================== Main section ================ --}}
    <main class="main">
            <section class="home" id="home">
                <div class="home__container container grid">
                
                    {{-- <img src="{{asset ('images/background.png')}}" alt="" class="home__img"> --}}
                    <div class="home__data">
                        <h1 class="home__title">IUST BUS TRACKER</h1>
                        <h3 class="home__subtitle">Charting Routes, Connecting Journeys: IUST Bus Tracker – Your Pathway to Seamless Campus Travel.</h3>
                        <p class="home__description">IUST Bus Tracker: Seamlessly monitor real-time bus locations and arrivals within the campus. Effortlessly enhance your daily commute with accurate and convenient tracking technology.</p>
                        <div class="button__icon">
                            <a href="{{url('/')}}/student/login" class="button"><i class="uil uil-user button__icon"></i>Student Login</a>
                            <a href="{{url('/')}}/incharge/login" class="button"><i class="uil uil-user-md button__icon"></i>Incharge Login</a>
                        </div>
                    </div>

                    <div class="my__info">

                    {{-- ---------------------------------------------------------------- --}}
                        <div class="info__item">
                            <div class="info__icon">
                                <i class="uil uil-google-play"></i>
                            </div>

                            <div>
                                <h3 class="info__title">Download Our <a href="#">Android App</a> </h3>
                                {{-- <a href="#" class="info__subtitle">Bus Tracker</a> --}}
                            </div>
                        </div>
                    {{-- ---------------------------------------------------------------- --}}
                    </div>
                </div>
            </section>

            {{-- ===================== buses ================== --}}
        <section class="buses section" id="buses">
            <h2 data-heading="Routes" class="section__title">Bus Details</h2>

            <div class="buses__container container grid">
                <div class="buses__tabs">
                    <div class="buses__header buses__active" data-target="#anantnag">
                        <i class="uil uil-bus-school buses__icon"></i>

                        <div>
                            <h1 class="buses__title">Anantnag</h1>
                        </div>
                        <i class="uil uil-angle-down buses__arrow"></i>
                    </div>

                    <div class="buses__header" data-target="#srg">
                        <i class="uil uil-bus-school buses__icon"></i>

                        <div>
                            <h1 class="buses__title">Srinagar</h1>
                        </div>
                        <i class="uil uil-angle-down buses__arrow"></i>
                    </div>

                    <div class="buses__header" data-target="#kulgam">
                        <i class="uil uil-bus-school buses__icon"></i>

                        <div>
                            <h1 class="buses__title">Kulgam</h1>
                        </div>
                        <i class="uil uil-angle-down buses__arrow"></i>
                    </div>

                    <div class="buses__header" data-target="#tral">
                        <i class="uil uil-bus-school buses__icon"></i>

                        <div>
                            <h1 class="buses__title">Tral</h1>
                        </div>
                        <i class="uil uil-angle-down buses__arrow"></i>
                    </div>

                    <div class="buses__header" data-target="#pulwama">
                        <i class="uil uil-bus-school buses__icon"></i>

                        <div>
                            <h1 class="buses__title">Pulwama</h1>
                        </div>
                        <i class="uil uil-angle-down buses__arrow"></i>
                    </div>

                    <div class="buses__header" data-target="#shopian">
                        <i class="uil uil-bus-school buses__icon"></i>

                        <div>
                            <h1 class="buses__title">Shopian</h1>
                        </div>
                        <i class="uil uil-angle-down buses__arrow"></i>
                    </div>

                </div>

                <div class="buses__content">

                    <div class="buses__group buses__active" data-content id="anantnag">
                        <div class="buses__list grid">

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 1 : BALSOO KAIMOH WANPHOO BYPASS IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 6 : MOOMINABAD ASHAJIPORA JANGLAT MANDI LAL CHOWK KHANABAL IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 23 : DIALGAM MOOMINABAD ASHAJIPORA BYPASS NAIBASTI IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 32 : SRIGUFWARA,CHENIWADER, KANELWON, THUJWARA, TAKIBAL, ZIRPARA, PADSHAHBAGH , IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 38 : LAZIBAL, KHANABAL, BIJBEHARA, IUST</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="buses__group" data-content id="srg">
                        <div class="buses__list grid">

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 2: NATIPORA,CHANIPORA,MATHEN,AHAMEDIYA HOSPITAL,NOWGAM,IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 3: MOLVI STOP,BUTKADAL,MIL STOP,ZADIBAL,ALAMGARI BAZAR,HAWAL,NOWHATTA,DALGATE ,IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 5: CHADOORA KRALPORA KANIPORA NOWGAM IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 7: NATIPORA, AZADBASTI, BUDSHAHNAGAR, NAIKBAGH, NOWGAM, BYPASS TO IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 9: RAMBAGH,SOLINA,TULSIBAGH,JAWAHARNAGER,RAJBAGH,TRC ,IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 10: RANIWARI,KHANYAR,KHYAM,DALGATE,SONWAR,BATWARA,LASJAN,PAMPORE, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 11: KANITAR,UMMER COLONY,LALBAZAR,BUDSHAH MOLHA,MOLVI STOP,MILSTOP,  IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 12: NAGBAL GULAB BAGH VIA GREEN VALLEY 90FEET P.S. SOURS ALI JAN ROAD SEKIDAFAR KARAN NAGAR FIRE STATION BATAMALOO IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 14: RAZIA KADAL BOHRI KADAL GOUSIA HOSPITAL BARBARSHAH VIA GANDHI COLLEGE MUNWARABAD TRC IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 16: OMPORA,BUDGAM,PEERBAGH,HYDERPORA,SANATNAGAR,CHANIPORA,BYPASS , IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 17: HYDERPORA,PARRYPORA,BAGHAT,BARZULA,SANATNAGER,BYPASS, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 18: KANITAR,SADRIBAL,KU,NIET,SADAKADAL,RANIWARI,TRC , IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 19: BEMINA,PARAMPORA,QAMERWARI,BATMALOO,FIRE SERVICE,TRC ,IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 20: HABBAK,MALBAGH,ELLAHIBAGH,90 FEET,NOWSHARA,HAWAL,NOWHATTA,MUNWAR,TRC ,IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 21: MAGAM, KANIHAMA, NARBAL, HMT, BEMINA, HYDERPORA BYPASS, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 21-A: HARWAN,SHALIMAR,NISHAT,BRAIN,SONWAR, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 21-B: KAMARWARI CROSSING, BEMINA CROSSING, IQBALABAD, GRID STATION, BEMINA BYEPASS, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 22: RANGRATH,RAWALPORA,SANATNAGER,BYPASS, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 26: AHMADNAGER,90 FEET, SOURA, ALAMGARI BAZAR,NOWHATTA,GOWSIYA HOSPITAL KHYAM, DALGATE, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 27: EIDGAH SAFA KADAL KARAN NAGAR BATAMALOO LAL CHOWK IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 28: AHMED NAGAR, UMER HAIR, BUCHPORA, SOURA, ALIJAN ROAD, NALAMAR ROAD, RAJOURI KADAL, BABA DEMB, TRC, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 29: NAGBAL, PANDACH, GULAB BAGH, ZAKURA CROSSING, HABBAK, KU,RAINAWARI, DALGATE, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 30: MUJGUND,HMT,BEMINA,HYDERPORA BYPASS ,IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 31: MATTAN,IQBAL ABAD,SARNEL,LAZIBAL,SADIQ ABAD,  IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 33: NARBAL, HMT, BEMINA, HYDERPORA BYEPASS, NOWGAM BYEPASS, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 34: NISHAT, BREEN, NEHRU PARK, DALGATE, SONWAR, PANTHA CHOWK, BYPASS, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 35: NATIPORA, CHANPORA, BAGHEMETAB, KRALPORA, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 39: MOLVI STOP, KANITAR, KU, NIET, RANIWARI, KHANYAR, DALGATE, PAMPORE, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 40: NAGBAL, KHALMULLA, SHUHAMA, SAIDPORA, BATAPORA, ZAKURA CROSSING, HABBAK, MALLA BAGH, ELLAHI BAGH, 90-FEET SOURA, HAWAL, ALAMGARI BAZAR, NOWHATTA, KHYAM, DALGATE, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 41: WATHURA(PETROL PUMP)  KRALPORA BAGH-E-MEHTAB CHANAPORA NOWGAM BYPASS IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 42: HUMHAMA CHOWK, PEERBAGH, HYDERPORA BRIDGE, SANAT NAGAR, NOWGAM, IUST</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="buses__group" data-content id="kulgam">
                        <div class="buses__list grid">

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 8: YARIPORA, FRISAL, ARWANI, BIJBEHARA, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 36: KULGAM,KAIMO,WANPHOO,HARNAGH, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 43: QAZIGUND TO IUST VIA NH-44</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="buses__group" data-content id="tral">
                        <div class="buses__list grid">

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 4 : BUS ADA TRAL,SHAIR ABAD,NOWDAL, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 13 : BUS ADA TRAL,SHAIR ABAD,NOWDAL ,IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 25 : TRAL I BALA AMIRABAD DADASARA CHANDRIGAM NOORPORA IUST</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="buses__group" data-content id="pulwama">
                        <div class="buses__list grid">

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 15 : PULWAMA,PRICHOO,GANGOO,PINGLINA,PAHOO,KAKAPORA,SAMBORA,GALANDER, IUST</h3>
                                </div>
                            </div>

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 37 : RAJPORA, PULWAMA,TANGPONA,KOIL,LAJURA,MALANGPORA, IUST</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="buses__group" data-content id="shopian">
                        <div class="buses__list grid">

                            <div class="buses__data">
                                <div class="buses__titles">
                                    <h3 class="buses__name">BUS 24 : SHOPIAN,SOOFANAMA,SHARIMAL,TOOKRO,KEIGAM,HALL,NAIKES,BUNDZOO,PULWAMA,KOIL, IUST</h3>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>


    {{-- ------------ Main JS ----------------- --}}
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
