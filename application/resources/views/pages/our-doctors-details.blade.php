@extends('layouts.default')
@section('title', 'Home Medical')


@section('content')

    <x-page-header pageTitle='Detalii Medic' pageSubtitle='Detalii Medic' />

    <!--Team Details Start-->
    <section class="team-details">
        <div class="container">
            <div class="team-details__top">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <div class="team-details__top-left">
                            <div class="team-details__img-1">
                                <img src="{{ asset('assets/images/Galerie-HM/' . $doctor['image']) }}" alt="{{ $doctor['name'] }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7">
                        <div class="team-details__top-right">
                            <div class="team-details__client-box">
                                <h3 class="team-details__client-name">{{ $doctor['name'] }}</h3>
                                <span class="team-details__client-sub-title">{{ $doctor['specialization'] }}</span>
                                <div class="team-details__social">
                                    <a href="https://www.facebook.com/share/1JyNuEhQbp/" target="_blank" rel="noopener noreferrer"><i class="icon-facebook-app-symbol"></i></a>
                                    <a href="https://www.tiktok.com/@home.medical7" target="_blank" rel="noopener noreferrer" aria-label="TikTok"><svg viewBox="0 0 64 64" width="27" height="27" aria-hidden="true" focusable="false" style="display:block; fill: currentColor; transform: translateY(0.5px); transform-origin: center;"><path d="M39.5 9.5c1.9 2.9 4.7 5 8.1 6.2v6.4c-2.8-.4-5.4-1.7-7.4-3.8v16.5c0 7.3-5.9 13.2-13.2 13.2S11 42 11 34.8 16.9 21.6 24.2 21.6c1.8 0 3.5.3 5 .9v6.5a11 11 0 0 0-5-1.4c-4.7 0-8.4 3.8-8.4 8.4 0 4.7 3.8 8.4 8.4 8.4 4.6 0 8.3-3.6 8.4-8.2V9.5h5.5Z"/></svg></a>
                                </div>
                                <p class="team-details__client-text">{{ $doctor['intro'] }}</p>
                                <ul class="team-details__client-address list-unstyled">
                                    <li>
                                        <p><span class="icon-pin"></span>Adresă</p>
                                        <h5>Timișoara, Str. Ulpia Traiana, Nr. 27</h5>
                                    </li>
                                    <li>
                                        <p><span class="icon-phone"></span>Telefon</p>
                                        <h5><a href="tel:0356171818">0356 171 818 · 0723 716 085</a></h5>
                                    </li>
                                    <li>
                                        <p><span class="icon-email"></span>Email</p>
                                        <h5><a href="mailto:homemedicalvmc@gmail.com">homemedicalvmc@gmail.com</a></h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-details__bottom">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="team-details__bottom-left">
                            <h3 class="team-details__bottom-title">Biografie</h3>
                            @php
                                $doctorBiography = match ($doctor['slug'] ?? null) {
                                    'dandea-cristina' => 'Medic specialist chirurg, cu o abordare centrată pe pacient și pe nevoile individuale ale fiecărei persoane. În activitatea profesională pune accent pe empatie, respect, comunicare deschisă și pe explicarea clară a opțiunilor medicale și a pașilor necesari pe parcursul tratamentului.

Consideră că un act medical de calitate înseamnă nu doar pregătire și precizie, ci și răbdare, atenție și capacitatea de a înțelege nevoile și temerile pacientului. În practica ambulatorie, activitatea sa include evaluarea și tratamentul unei game variate de afecțiuni chirurgicale, cu utilizarea unor proceduri minim invazive atunci când acestea sunt potrivite.

Își propune ca fiecare pacient să se simtă ascultat, înțeles și în siguranță pe parcursul evaluării și tratamentului medical.',
                                    'dumitru-cristina-stefania' => 'Medic specialist ORL, cu experiență în evaluarea și tratamentul afecțiunilor urechii, nasului și gâtului, atât la adulți, cât și la copii. Are competență în ecografie generală și pregătire în ecografia cervicală, cu un interes deosebit pentru utilizarea investigațiilor imagistice în patologia ORL și cervico-facială.

Activitatea sa medicală include consultații ORL, investigații și tratamente specifice, precum și proceduri și intervenții ORL și cervico-faciale. Este Șef de Lucrări la disciplina Histologie în cadrul Universității de Medicină și Farmacie „Victor Babeș” din Timișoara și Doctor în Medicină, având și o activitate științifică în domeniul patologiei capului și gâtului.

Acordă o atenție deosebită evaluării corecte a fiecărui pacient și unei abordări medicale adaptate nevoilor individuale.',
                                    'oniciu-marciana-alexandra' => 'Medic specialist în Medicină Internă, cu o abordare orientată către evaluarea pacientului în ansamblu, nu doar către un simptom sau un diagnostic izolat. Acordă atenție identificării cauzelor simptomelor, corelării informațiilor clinice și investigațiilor și stabilirii unei conduite medicale adaptate fiecărui pacient. Consideră important ca pacientul să înțeleagă diagnosticul, semnificația investigațiilor și pașii necesari pentru îngrijirea sănătății sale.',
                                    'abdel-majid-damra' => 'Medic specialist gastroenterolog, preocupat de diagnosticarea și tratamentul afecțiunilor digestive și hepatice. Oferă servicii de diagnostic și evaluare utilizând investigații moderne, precum ecografia abdominală și endoscopia digestivă superioară și inferioară. Pune accent pe o îngrijire atentă și empatică, într-un mediu sigur, bazat pe atenție la detalii și comunicare deschisă cu pacientul.',
                                    'ilin-simona-ramona' => 'Medic specialist în Medicină Internă, cu o perspectivă integrată asupra stării de sănătate a pacientului. În practica medicală acordă atenție identificării cauzelor simptomelor, corelării informațiilor clinice și investigațiilor și stabilirii unui plan medical adaptat fiecărui pacient. Experiența sa include evaluarea patologiilor cardiovasculare, respiratorii, metabolice, renale și digestive, precum și a pacienților cu patologii multiple. Consideră importantă comunicarea clară cu pacientul și explicarea diagnosticului și a investigațiilor.',
                                    'burdan-ghita-adrian' => 'Medic specialist gastroenterolog, cu experiență în diagnosticarea și tratarea afecțiunilor digestive. Activitatea sa include evaluarea pacienților și utilizarea investigațiilor specifice gastroenterologiei, cu experiență în endoscopie digestivă diagnostică și terapeutică și ecografie abdominală. Abordarea medicală urmărește identificarea corectă a problemei și stabilirea unei conduite adaptate fiecărui pacient.',
                                    'musat-ionut-marian' => 'Medic specialist ortoped, cu experiență în diagnosticarea și tratarea afecțiunilor musculo-scheletale, cu un interes deosebit pentru chirurgia artroscopică și patologia genunchiului. A urmat cursuri de formare și perfecționare în tehnici moderne de artroscopie, chirurgie reconstructivă și tratamentul traumatismelor. Activitatea sa se extinde asupra mai multor segmente ale ortopediei și traumatologiei, cu accent pe soluții personalizate pentru fiecare pacient și pe recuperarea funcțională și calitatea vieții.',
                                    default => '3–5 propoziții despre medic, experiență și domeniul de activitate.',
                                };
                            @endphp
                            <p class="team-details__bottom-text">{{ $doctorBiography }}</p>
                            <div class="team-details__practice-area">
                                <h4 class="team-details__practice-area-title">Servicii oferite</h4>
                                <div class="team-details__practice-area-list-box">
                                    <p>Lista consultațiilor, procedurilor și intervențiilor pe care medicul le efectuează în cadrul Home Medical.</p>
                                    @php
                                        $servicesBySlug = [
                                            'agajani-heshmatollah' => [
                                                'Consultație',
                                                'Control',
                                                'Dermatoscopie',
                                                'Examinare lampă Wood',
                                                'Electrocauterizare',
                                                'Excizie chirurgicală nevi pigmentari',
                                                'Extracții comedoane',
                                                'Incizie / excizie chist epidermoid',
                                                'Suprimare fire sutură',
                                            ],
                                            'oniciu-marciana-alexandra' => [
                                                'EKG',
                                                'Ultrasonografie generală',
                                                'Indice gleznă-braț',
                                                'Holter TA',
                                                'Holter EKG',
                                                'Spirometrie simplă și bronhodilatație',
                                            ],
                                            'buta-marius-catalin' => [
                                                'Consultație',
                                                'Spirometrie cu bronhodilatație',
                                                'Aerosoli',
                                            ],
                                            'marginean-andrei' => [
                                                'Anestezie locală',
                                                'Consultație',
                                                'Excizie formațiuni tumorale tegumentare superficiale',
                                                'Incizie abces perianal',
                                                'Incizie abcese flegmoane',
                                                'Îndepărtare corp străin percutan',
                                                'Interpretare analize',
                                                'Pansament + toaletă plăgi',
                                                'Polipectomie',
                                                'Suprimare fire sutură',
                                                'Tratament integral pentru cura hemoroidală grad 2-3',
                                                'Tratament urgență',
                                                'Trombectomie externă',
                                                'Biopsie sân',
                                                'Clip mamar',
                                                'Ecografie mamară',
                                            ],
                                            'talan-claudia-loredana' => [
                                                'Recuperare medicală',
                                                'Consult fizioterapie',
                                                'Control fizioterapie',
                                                'Kinetoterapie',
                                                'Laser terapie',
                                                'Masaj relaxare',
                                                'Ultrasonoterapie',
                                            ],
                                            'dandea-cristina' => [
                                                'EKG',
                                                'Ultrasonografie generală',
                                                'Debridarea excizională a escarelor, plăgilor suprainfectate și arsurilor',
                                                'Repararea plăgilor tegumentare și a țesutului celular subcutanat',
                                                'Biopsia leziunilor tegumentare și a țesutului celular subcutanat',
                                                'Biopsia excizională a leziunilor tegumentare',
                                                'Ablația tumorilor tegumentare (+/- biopsie)',
                                                'Ablația nevului tegumentar',
                                                'Ablație molluscum pendulum',
                                                'Lipectomia',
                                                'Ablația chistului sebaceu',
                                                'Ablația chistului pilonidal',
                                                'Drenajul abceselor tegumentare și subtegumentare',
                                                'Drenajul hematomului tegumentar / subtegumentar',
                                                'Tratamentul hidrosadenitei (incizie / drenaj)',
                                                'Ablația carbunculului',
                                                'Tratament panarițiu',
                                                'Tratament bartholinită',
                                                'Excizia condiloamelor / papiloamelor tegumentare',
                                                'Îndepărtarea verucilor plantare / palmare',
                                                'Îndepărtarea corpilor străini',
                                            ],
                                            'dumitru-cristina-stefania' => [
                                                'Consultație ORL adulți',
                                                'Consultație ORL copii',
                                                'Control ORL',
                                                'Ecografie cervico-facială',
                                                'Consultație ORL + ecografie cervico-facială (pachet)',
                                                'Endoscopie ORL rigidă (nazală, laringiană, otică)',
                                                'Fibroscopie ORL',
                                                'Extragere dop de cerumen',
                                                'Extragere corpi străini (ureche, nas, faringe)',
                                                'Tamponament nazal / oprirea epistaxisului',
                                                'Cauterizare pată vasculară nazală',
                                                'Turbinoreducție (cauterizare cornete nazale inferioare)',
                                                'Toaletă auriculară / tratament local otic',
                                                'Pansament și îngrijire postoperatorie ORL',
                                                'Excizie formațiuni cutanate și subcutanate ale feței și gâtului',
                                                'Mici intervenții chirurgicale ORL și cervico-faciale',
                                                'Incizie și drenaj abcese',
                                                'Biopsie sferă ORL',
                                                'Sutură plăgi',
                                            ],
                                            'ciobanu-andra-vera-livia' => [
                                                'Consultații psihiatrice pentru adulți',
                                                'Evaluare clinică și diagnostic psihiatric',
                                                'Stabilirea unui plan terapeutic individualizat',
                                                'Prescrierea și monitorizarea tratamentului psihofarmacologic',
                                                'Consultații de control și monitorizarea evoluției',
                                                'Consiliere psihiatrică și psihoeducație',
                                                'Evaluarea tulburărilor anxioase, depresive, psihotice, afective, cognitive și de somn',
                                                'Eliberarea documentelor medicale și a avizelor psihiatrice, în condițiile prevăzute de lege',
                                            ],
                                            'abdel-majid-damra' => [
                                                'Ecografie abdominală',
                                                'Consult',
                                                'Colonoscopie',
                                                'Gastroscopie',
                                                'Polipectomie',
                                            ],
                                            'burdan-ghita-adrian' => [
                                                'Ecografie abdominală',
                                                'Consult',
                                                'Colonoscopie',
                                                'Gastroscopie',
                                                'Polipectomie',
                                            ],
                                            'ilin-simona-ramona' => [
                                                'EKG',
                                                'Ultrasonografie generală',
                                                'Indice gleznă-braț',
                                                'Holter TA',
                                                'Holter EKG',
                                                'Spirometrie simplă și bronhodilatație',
                                            ],
                                            'musat-ionut-marian' => [
                                                'Consultație inițială',
                                                'Consultație de control',
                                                'Consultație + referat medical',
                                                'Consultație de urgență',
                                                'Infiltrații (PRP, acid hialuronic, corticosteroid)',
                                                'Pansament',
                                                'Puncție evacuatoare',
                                                'Reducere ortopedică fractură',
                                                'Suprimare aparat gipsat',
                                                'Suprimare fire de sutură',
                                            ],
                                            'drira-ouassim' => [
                                                'Consultație inițială',
                                                'Consultație de control',
                                                'Consultație + referat medical',
                                                'Consultație de urgență',
                                                'Infiltrații (PRP, acid hialuronic, corticosteroid și celule stem)',
                                                'Pansament',
                                                'Puncție evacuatoare',
                                                'Reducere ortopedică fractură',
                                                'Suprimare aparat gipsat',
                                                'Suprimare fire de sutură',
                                            ],
                                        ];

                                        $defaultServices = [
                                            'Ecografie abdominală',
                                            'Consult',
                                            'Colonoscopie',
                                            'Gastroscopie',
                                            'Polipectomie',
                                        ];

                                        $doctorServices = $servicesBySlug[$doctor['slug'] ?? ''] ?? $defaultServices;
                                        $splitIndex = (int) ceil(count($doctorServices) / 2);
                                        $leftColumnServices = array_slice($doctorServices, 0, $splitIndex);
                                        $rightColumnServices = array_slice($doctorServices, $splitIndex);
                                    @endphp
                                    <ul class="list-unstyled team-details__practice-area-list">
                                        @foreach ($leftColumnServices as $service)
                                            <li>
                                                <div class="icon"></div>
                                                <div class="text">
                                                    <p>{{ $service }}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <ul class="list-unstyled team-details__practice-area-list team-details__practice-area-list--two">
                                        @foreach ($rightColumnServices as $service)
                                            <li>
                                                <div class="icon"></div>
                                                <div class="text">
                                                    <p>{{ $service }}</p>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Skills section hidden intentionally for all doctor detail pages --}}
                    <div class="col-xl-6 col-lg-6" style="display: none;">
                        <div class="team-details__bottom-right">
                            <h3 class="team-details__progress-title-1">Skills</h3>
                            <ul class="team-details__progress-list list-unstyled">
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Repair Device</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="80%">
                                                <div class="count-text">80%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Replace Device</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="95%">
                                                <div class="count-text">95%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="team-details__progress">
                                        <h4 class="team-details__progress-title">Diagnostics</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="65%">
                                                <div class="count-text">65%</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Team Details End-->

    {{-- Contact Our Team section hidden intentionally for all doctor detail pages --}}
    <section class="team-details-contact" style="display: none;">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Contact Our
                        Team</span>
                </div>
                <h2 class="section-title__title title-animation">Give Us A <span>Message</span>
                </h2>
            </div>
            <div class="team-details-contact__inner">
                <form class="contact-form-validated team-details-contact__form" action="assets/inc/sendemail.php"
                    method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="text" name="name" placeholder="Your Name" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="email" name="Email" placeholder="Email Address" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="text" name="Phone" placeholder="Phone Number" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="team-details-contact__input-box">
                                <input type="text" name="subject" placeholder="Subject" >
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="team-details-contact__input-box text-message-box">
                                <textarea name="message" placeholder="Message" ></textarea>
                            </div>
                            <div class="team-details-contact__btn-box">
                                <button type="submit" class="thm-btn">
                                    <span class="fas fa-arrow-right"></span>
                                    send a
                                    message
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="result"></div>
                </form>
            </div>
        </div>
    </section>

@endsection
