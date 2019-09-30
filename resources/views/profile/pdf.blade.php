<html>
    <head>
        <meta charset="utf-8">
        <style>
            * {
                margin: 0;
                padding: 0;
                border: none;
                list-style: none;
            }

            html {
                font-family: 'dejavu sans';
            }

            .myContainer {
            }

           .info {
               width: 30%;
               float: left;
               height: 90%;
               background-color: #3983a9;
               color: white;
           } 

           .photo {
                text-align: center;
                padding: 3%;
            }

           img {
                width: 60%;
                border-radius: 50;
            }

            .info h1 {
                text-transform: uppercase;
                background-color: #3983a9;
                padding: 1%;
                text-align: center;
                font-size: 16pt;
            }

            .info h4 {
                padding: 0 10%;
                font-size: 14pt;
            }

            .info p {
                padding: 1% 10%;
                font-size: 8pt;
            }

            .info p a {
                color: white;
            }

            .info ul {
                padding: 5% 10%;
                font-size: 12pt;
            }

            .contact {
                text-align: center;
            }

            .contact h4 {
                padding-top: 2%;
                font-size: 13pt;
            }

           .main {
               width: 70%;
               height: 87%;
               float: left;
               background-color: white;
                padding: 0;
                padding-bottom: 0;
                padding-top: 0;
           }

           h2 {
                text-transform: uppercase;
                font-size: 12pt;
                padding: 0;
                padding-top: 1%;
            }

            .main > * > li {
                padding: 1%;
            }

            .main > p {
                font-size: 10pt;
            }

            .main > ul {
                font-size: 10pt;
            }

           .clear {
               background-color: yellow;
               height: 0;
               page-break-after: avoid;
               clear: left;
           }
           footer {
               background-color: #3983a9;
               color: white;
               font-size: 8pt;
               text-align: center;
               padding: 2%;
               margin: 0;
               height: 3%;
           }
        </style>
    </head>
    <body>
        <div class="myContainer">
            <section class="info">
                <div class="photo">
                    <img src="{{ public_path("storage/".$user->basicinformation->image) }}">
                </div>
                <h1>{{ $user->name }} {{ $user->surname }}</h1>
                <div class="contact">
                    <h4>Adres</h4>
                    <p>
                        {{ $user->basicinformation->street }} {{ $user->basicinformation->number_of_home }}<br>
                        {{ $user->basicinformation->post_code }} {{ $user->basicinformation->city }}
                    </p>
                    <h4>Kontakt</h4>
                    <p>
                        Tel. <a href="tel:+48{{ $user->basicinformation->phone_number }}">{{ $user->basicinformation->phone_number }}</a><br>
                        e-mail: <a href="malito:{{ $user->basicinformation->email }}">{{ $user->basicinformation->email }}</a>
                        www: <a href="http://filuuus.ayz.pl/cv/index.html">http://filuuus.ayz.pl/cv/index.html</a>
                    </p>
                    <h4>Data urodzenia</h4>
                    <p>{{ $user->basicinformation->date_of_birth }}</p>
                </div>
            </section>
            <div class="main">
                <h2>Cel zawodowy</h2>
                <p>
                    {{ $user->basicinformation->goal }}
                </p>
                <h2>Wykształcenie</h2>
                <ul>
                    @foreach($user->schools as $school)
                        <li>
                            <p class="date">{{ $school->start_year }} - {{ $school->end_year }}</p>
                            <h3>{{ $school->name_of_school }} w {{ $school->city }}</h3>
                        </li>
                    @endforeach
                </ul>
                <h2>Doświadczenie</h2>
                <ul>
                    @foreach($user->experiences as $experience)
                        <li>
                            <p class="date">{{ $experience->start_month }}.{{ $experience->start_year }} - {{ $experience->end_month }}.{{ $experience->end_year }}</p>
                            <h3>{{ $experience->name_of_company }}</h3>
                            <p>{{ $experience->position }}</p>
                            <p>
                                {{ $experience->description }}
                            </p>
                    </li>
                    @endforeach
                </ul>
                <h2>Certyfikaty i uprawnienia</h2>
                <ul>
                    @foreach($user->certificates as $certificate)
                    <li>
                        {{ $certificate->certificate }}
                        ({{ $certificate->city }}, {{ $certificate->start_month }} {{ $certificate->start_year }} - {{ $certificate->end_month }} {{ $certificate->end_year }}).
                    </li>
                    @endforeach
                </ul>
                <h2>Zrealizowane projekty</h2>
                <ul>
                    @foreach($user->projects as $project)
                        <li>
                            <a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a>
                            <p>
                                {{ $project->description }}
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="clear"></div>
            <footer>
                <p>
                Wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w przesłanym CV dla potrzeb niezbędnych w procesie rekrutacji, zgodnie z ustawą z dnia 29.08.1997 roku o Ochronie danych Osobowych (Dz.U.Nr. 133 poz.883)
                </p>
            </footer>
        </div>
    </body>
</html>
