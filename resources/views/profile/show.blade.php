@extends('layouts.app')

@section('content')
<div class="myContainer">
<section class="info">
            <div class="photo">
                <img src="/storage/{{$user->basicinformation->image}}">
            </div>
            <h1>{{ $user->name }} {{ $user->surname }}</h1>
            <div class="contact">
                <h4>Adres</h4>
                <p>
                    {{ $user->basicinformation->street }} {{ $user->basicinformation->number_of_building }}/{{ $user->basicinformation->number_of_home }}<br>
                    {{ $user->basicinformation->post_code }} {{ $user->basicinformation->city }}
                </p>
                <h4>Kontakt</h4>
                <p>
                    Tel. <a href="tel:+48{{ $user->basicinformation->phone_number }}">{{ $user->basicinformation->phone_number }}</a><br>
                    e-mail: <a href="malito:{{ $user->basicinformation->email }}">{{ $user->basicinformation->email }}</a>
                </p>
                <h4>Data urodzenia</h4>
                <p>{{ $user->basicinformation->date_of_birth }}</p>
            </div>
            <h4 id="umiejentnosci">Umiejętności</h4>
            <ul class="skills">
                <li>
                    <h5>HTML5</h5><span class="bar"><span class="html"></span></span>
                </li>
                <li>
                    <h5>CSS3</h5><span class="bar"><span class="css"></span></span>
                </li>
                <li>
                    <h5>JavaScript</h5><span class="bar"><span class="javascript"></span></span>
                </li>
                <li>
                    <h5>PHP/Laravel</h5><span class="bar"><span class="laravel"></span></span>
                </li>
            </ul>
            <a href="cv_filip_czaplinski.pdf" class="przycisk" target="_blank">Pobierz CV w PDF</a>
            <a href="https://github.com/filuus" class="przycisk" target="_blank">Profil na GitHub</a>
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
                        <a href="http://{{ $project->link }}" target="_blank">pietnascie.pl</a>
                        <p>
                            {{ $project->description }}
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>
        <footer>
            <p>
                Wyrażam zgodę na przetwarzanie moich danych osobowych zawartych w przesłanym CV dla potrzeb niezbędnych w procesie rekrutacji, zgodnie z ustawą z dnia 29.08.1997 roku o Ochronie danych Osobowych (Dz.U.Nr. 133 poz.883)
            </p>
        </footer>
</div>
@endsection