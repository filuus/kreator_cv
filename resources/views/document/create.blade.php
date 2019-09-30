@extends('layouts.app')

@section('content')

<!-- PODSTAWOWE INFORMACJE -->
    <div id="form1" class="card-body">
    <h4 class="col-11 offset-1">Podstawowe informacje</h4>
        <form enctype="multipart/form-data" id="basicInformationForm" role="form" method="POST" action="">

        <input name="_token" value="{{ csrf_token() }}" type="hidden" />

        <div class="form-group row">
            <label for="street" class="col-md-4 col-form-label text-md-right">Ulica</label>
            <div class="col-md-6">
                <input id="street" name="street" type="text" class="@error('street') is-invalid @enderror">
                @error('street')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="number_of_home" class="col-md-4 col-form-label text-md-right">Numer domu</label>
            <div class="col-md-6">
                <input id="number_of_home" name="number_of_home" type="text" class="@error('number_of_home') is-invalid @enderror">
                @error('number_of_home')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="number_of_building" class="col-md-4 col-form-label text-md-right">Numer budynku</label>
            <div class="col-md-6">
                <input id="number_of_building" name="number_of_building" type="text" class="@error('number_of_building') is-invalid @enderror">
                @error('number_of_building')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="post_code" class="col-md-4 col-form-label text-md-right">Kod pocztowy</label>
            <div class="col-md-6">
                <input id="post_code" name="post_code" type="text" class="@error('post_code') is-invalid @enderror">
                @error('post_code')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">Miasto</label>
            <div class="col-md-6">
                <input id="city" name="city" type="text" class="@error('city') is-invalid @enderror">
                @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="phone_number" class="col-md-4 col-form-label text-md-right">Numer telefonu</label>
            <div class="col-md-6">
                <input id="phone_number" name="phone_number" type="text" class="@error('phone_number') is-invalid @enderror">
                @error('phone_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Adres email</label>
            <div class="col-md-6">
                <input id="email" name="email" type="text" class="@error('email') is-invalid @enderror">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Data urodzenia</label>
            <div class="col-md-6">
                <input id="date_of_birth" name="date_of_birth" type="text" class="@error('date_of_birth') is-invalid @enderror">
                @error('date_of_birth')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="goal" class="col-md-4 col-form-label text-md-right">Cel zawodowy</label>
            <div class="col-md-6">
                <input id="goal" name="goal" type="text" class="@error('goal') is-invalid @enderror">
                @error('goal')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="image" class="col-md-4 col-form-label text-md-right">Zdjęcie</label>
            <div class="col-md-6">
                <input id="image" name="image" type="file" class="@error('goal') is-invalid @enderror">
                @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" id="saveBasicInformation" class="btn btn-primary">
                    Dalej
                </button>
            </div>
        </div>

        </form>
    </div>

<!-- WYKSZTAŁCENIE -->
    <div id="form2" class="card-body">
    <h4 class="col-11 offset-1">Wykształcenie</h4>
        <form enctype="multipart/form-data" id="schoolForm" role="form" method="POST" action="">

        <input name="_token" value="{{ csrf_token() }}" type="hidden" />

        <div class="main-box-school">
        
            <div class="form-row">
                <div class="col-2 offset-1">
                    <div class="md-form form-group">
                        <label for="start_year">Rok rozpaczęcia</label>
                        <input id="start_year" name="start_year_0" type="text" class="form-control @error('start_year') is-invalid @enderror">
                        @error('start_year')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-2">
                    <div class="md-form form-group">
                        <label for="end_year">Rok zakończenia</label>
                            <input id="end_year" name="end_year_0" type="text" class="form-control @error('end_year') is-invalid @enderror">
                            @error('end_year')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="md-form form-group">
                        <label for="name_of_school">Nazwa szkoły</label>
                        <input id="name_of_school" name="name_of_school_0" type="text" class="form-control @error('name_of_school') is-invalid @enderror">
                        @error('name_of_school')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>

                <div class="col-2">
                    <div class="md-form form-group">
                        <label for="city">Miasto</label>
                        <input id="city" name="city_0" type="text" class="form-control @error('city') is-invalid @enderror">
                        @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        
        </div>

        <div class="form-group row mb-5">
            <div class="col-1 offset-10">
                <button id="addSchool" class="btn btn-primary">
                    Dodaj
                </button>
            </div>
        </div>

        <div class="form-group row mt-5">
            <div class="col-1 offset-10">
                <button type="submit" id="saveSchool" class="btn btn-primary">
                    Dalej
                </button>
            </div>
        </div>

        </form>
    </div>

<!-- DOŚWIADCZENIE ZAWODOWE -->
    <div id="form3" class="card-body">
    <h4 class="col-11 offset-1">Doświadczenie zawodowe</h4>
        <form enctype="multipart/form-data" id="experienceForm" role="form" method="POST" action="">

        <input name="_token" value="{{ csrf_token() }}" type="hidden" />

        <div class="main-box-experience">
        
            <div class="form-row">
                <div class="col-1 offset-1">
                    <div class="md-form form-group">
                        <label for="start_year">Rok rozpaczęcia</label>
                        <input id="start_year" name="start_year_0" type="text" class="form-control @error('start_year') is-invalid @enderror">
                        @error('start_year')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-1">
                    <div class="md-form form-group">
                        <label for="start_month">Miesiąc</label>
                        <input id="start_month" name="start_month_0" type="text" class="form-control @error('start_month') is-invalid @enderror">
                        @error('start_month')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-1">
                    <div class="md-form form-group">
                        <label for="end_year">Rok zakończenia</label>
                            <input id="end_year" name="end_year_0" type="text" class="form-control @error('end_year') is-invalid @enderror">
                            @error('end_year')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>

                <div class="col-1">
                    <div class="md-form form-group">
                        <label for="end_month">Miesiąc</label>
                            <input id="end_month" name="end_month_0" type="text" class="form-control @error('end_month') is-invalid @enderror">
                            @error('end_month')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="md-form form-group">
                        <label for="name_of_company">Nazwa firmy</label>
                        <input id="name_of_company" name="name_of_company_0" type="text" class="form-control @error('name_of_company') is-invalid @enderror">
                        @error('name_of_company')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>

                <div class="col-2">
                    <div class="md-form form-group">
                        <label for="position">Stanowisko</label>
                        <input id="position" name="position_0" type="text" class="form-control @error('position') is-invalid @enderror">
                        @error('position')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        
        

            <div class="form-row">
                <div class="col-10 offset-1">
                    <div class="md-form form-group">
                        <label for="description">Opis</label>
                        <textarea id="description" name="description_0" class="form-control @error('description') is-invalid @enderror"></textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

        </div>

        <div class="form-group row mb-5">
            <div class="col-1 offset-10">
                <button id="addExperienc" class="btn btn-primary">
                    Dodaj
                </button>
            </div>
        </div>

        <div class="form-group row mt-5">
            <div class="col-1 offset-9">
                <button id="skip_experiences" class="btn btn-primary">
                    Pomiń
                </button>
            </div>
            <div class="col-1">
                <button type="submit" id="saveSchool" class="btn btn-primary">
                    Dalej
                </button>
            </div>
        </div>

        <div class="form-group row mt-5">
            
        </div>

        </form>
    </div>

<!-- CERTYFIKATY -->
    <div id="form4" class="card-body">
        <h4 class="col-11 offset-1">Certyfikaty</h4>
        <form enctype="multipart/form-data" id="certificateForm" role="form" method="POST" action="">

            <input name="_token" value="{{ csrf_token() }}" type="hidden" />

            <div class="main-box-certificate">
                  
                <div class="form-row">

                    <div class="col-1 offset-1">
                        <div class="md-form form-group">
                            <label for="start_year">Rok rozpaczęcia</label>
                            <input id="start_year" name="start_year_0" type="text" class="form-control @error('start_year') is-invalid @enderror">
                            @error('start_year')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="md-form form-group">
                            <label for="start_month">Miesiąc</label>
                            <input id="start_month" name="start_month_0" type="text" class="form-control @error('start_month') is-invalid @enderror">
                            @error('start_month')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="md-form form-group">
                            <label for="end_year">Rok zakończenia</label>
                                <input id="end_year" name="end_year_0" type="text" class="form-control @error('end_year') is-invalid @enderror">
                                @error('end_year')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>

                    <div class="col-1">
                        <div class="md-form form-group">
                            <label for="end_month">Miesiąc</label>
                                <input id="end_month" name="end_month_0" type="text" class="form-control @error('end_month') is-invalid @enderror">
                                @error('end_month')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="md-form form-group">
                            <label for="certificate">Certyfikat</label>
                            <input id="certificate" name="certificate_0" type="text" class="form-control @error('certificate') is-invalid @enderror">
                            @error('certificate')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="col-2">
                        <div class="md-form form-group">
                            <label for="city">Miasto</label>
                            <input id="city" name="city_0" type="text" class="form-control @error('city') is-invalid @enderror">
                            @error('city')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>
                
            </div>

                <div class="form-group row mb-5">
                    <div class="col-1 offset-10">
                        <button id="addCertificate" class="btn btn-primary">
                            Dodaj
                        </button>
                    </div>
                </div>

                <div class="form-group row mt-5">
                    <div class="col-1 offset-9">
                        <button id="skip_certificates" class="btn btn-primary">
                            Pomiń
                        </button>
                    </div>
                    <div class="col-1">
                        <button type="submit" id="saveCertificate" class="btn btn-primary">
                            Dalej
                        </button>
                    </div>
                </div>

        </form>
    </div>
<!-- PROJEKTY -->
    <div id="form5" class="card-body">
        <h4 class="col-11 offset-1">Projekty</h4>
            <form enctype="multipart/form-data" id="projectForm" role="form" method="POST" action="">

            <input name="_token" value="{{ csrf_token() }}" type="hidden" />

            <div class="main-box-project">

                    <div class="col-4 offset-1">
                        <div class="md-form form-group">
                            <label for="link">Link</label>
                            <input id="link" name="link_0" type="text" class="form-control @error('link') is-invalid @enderror">
                            @error('link')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                    </div>

                <div class="form-row">
                    <div class="col-10 offset-1">
                        <div class="md-form form-group">
                            <label for="description">Opis</label>
                            <textarea id="description" name="description_0" class="form-control @error('description') is-invalid @enderror"></textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

            <div class="form-group row mb-5">
                <div class="col-1 offset-10">
                    <button id="addProject" class="btn btn-primary">
                        Dodaj
                    </button>
                </div>
            </div>

            <div class="form-group row mt-5">
                <div class="col-1 offset-9">
                    <button id="skip_projects" class="btn btn-primary">
                        Pomiń
                    </button>
                </div>
                <div class="col-1">
                    <button type="submit" id="saveProject" class="btn btn-primary">
                        Dalej
                    </button>
                </div>
            </div>

            </form>
        </div>
<!--  -->
<div id="end" class="card-body">
    <form method="POST" action="/documnets/save">
        @csrf
        <div class="col-1 offset-9">
            <button type="submit" class="btn btn-primary">
                Zapisz
            </button>
        </div>
    </form>
</div>


@endsection
@section('script')
<script>

window.onload = function(){
    $('#form1').show();
    $('#form2').hide();
    $('#form3').hide();
    $('#form4').hide();
    $('#form5').hide();
    $('#end').hide();

// PODSTAWOWE INFORMACJE - POST

    $('#basicInformationForm').on('submit', function(event) {
        event.preventDefault();
    $.ajax({
        url         : "/documents/basic",
        method      : "post",
        data        : new FormData(this),
        dataType    : 'text',
        contentType : false,
        cache       : false,
        processData : false,
        })
        .done(function(res) {
            $('#form1').hide();
            $('#form2').show();
        })
        .fail(function(error) {
        })
        .always(function() {
        });
    });

// WYKSZTAŁCENIE - POST

    let i = 1;

    $('#addSchool').on('click', function(event) {
        event.preventDefault();
        $('.main-box-school').append(
            '<div class="form-row">' + 
            '<div class="col-2 offset-1">' +
            '<div class="md-form form-group">' + 
            '<input id="start_year" name="start_year_' + i + '" type="text" class="form-control @error("start_year") is-invalid @enderror">' +
            '@error("start_year")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '<div class="col-2">' +
            '<div class="md-form form-group">' +
            '<input id="end_year" name="end_year_' + i + '" type="text" class="form-control @error("end_year") is-invalid @enderror">' +
            '@error("end_year")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '<div class="col-4">' +
            '<div class="md-form form-group">' +
            '<input id="name_of_school" name="name_of_school_' + i + '" type="text" class="form-control @error("name_of_school") is-invalid @enderror">' +
            '@error("name_of_school")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '<div class="col-2">' +
            '<div class="md-form form-group">' +
            '<input id="city" name="city_' + i + '" type="text" class="form-control @error("city") is-invalid @enderror">' +
            '@error("city")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '</div>'
        );
        i++;
    });

    $('#schoolForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
        url         : "/documents/school",
        method      : "post",
        data        : new FormData(this),
        dataType    : 'text',
        contentType : false,
        cache       : false,
        processData : false,
        })
        .done(function(res) {
            $('#form2').hide();
            $('#form3').show();
        })
        .fail(function(error) {
        })
        .always(function() {
        });
    });

// DOŚWIADCZENIE - POST

    let j = 1;

    $('#addExperienc').on('click', function(event) {
        event.preventDefault();
        console.log('dupa');
        $('.main-box-experience').append(
            '<div class="form-row">' +
            '<div class="col-1 offset-1">' +
            '<div class="md-form form-group">' +
            '<input id="start_year" name="start_year_' + j + '" type="text" class="form-control @error("start_year") is-invalid @enderror">' +
            '@error("start_year")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '<div class="col-1">' +
            '<div class="md-form form-group">' +
            '<input id="start_month" name="start_month_' + j + '" type="text" class="form-control @error("start_month") is-invalid @enderror">' +
            '@error("start_month")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '<div class="col-1">' +
            '<div class="md-form form-group">' +
            '<input id="end_year" name="end_year_' + j + '" type="text" class="form-control @error("end_year") is-invalid @enderror">' +
            '@error("end_year")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '<div class="col-1">' +
            '<div class="md-form form-group">' +
            '<input id="end_month" name="end_month_' + j + '" type="text" class="form-control @error("end_month") is-invalid @enderror">' +
            '@error("end_month")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '<div class="col-4">' +
            '<div class="md-form form-group">' +
            '<input id="name_of_company" name="name_of_company_' + j + '" type="text" class="form-control @error("name_of_company") is-invalid @enderror">' +
            '@error("name_of_company")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '<div class="col-2">' +
            '<div class="md-form form-group">' + 
            '<input id="position" name="position_' + j + '" type="text" class="form-control @error("position") is-invalid @enderror">' +
            '@error("position")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<div class="form-row">' +
            '<div class="col-10 offset-1">' +
            '<div class="md-form form-group">' +
            '<textarea id="description" name="description_' + j + '" class="form-control @error("description") is-invalid @enderror"></textarea>' +
            '@error("description")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '</div>'
        );
        j++;
    });

    $('#experienceForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url         : "/documents/experience",
            method      : "post",
            data        : new FormData(this),
            dataType    : 'text',
            contentType : false,
            cache       : false,
            processData : false,
        })
        .done(function(res) {
            $('#form3').hide();
            $('#form4').show();
        })
        .fail(function(error) {
        })
        .always(function() {
        });
    });

    $('#skip_experiences').on('click', function() {
        $('#form3').hide();
        $('#form4').show();
    })

// CERTYFIKATY - POST

    let k = 1;

    $('#addCertificate').on('click', function(event) {
        event.preventDefault();
        $('.main-box-certificate').append(
        '<div class="form-row">' +
        '<div class="col-1 offset-1">' +
        '<div class="md-form form-group">' +
        '<input id="start_year" name="start_year_' + k + '" type="text" class="form-control @error("start_year") is-invalid @enderror">' +
        '@error("start_year")' +
        '<div class="alert alert-danger">{{ $message }}</div>' +
        '@enderror' +
        '</div>' +
        '</div>' +
        '<div class="col-1">' +
        '<div class="md-form form-group">' +
        '<input id="start_month" name="start_month_' + k + '" type="text" class="form-control @error("start_month") is-invalid @enderror">' +
        '@error("start_month")' +
        '<div class="alert alert-danger">{{ $message }}</div>' +
        '@enderror' +
        '</div>' +
        '</div>' +
        '<div class="col-1">' +
        '<div class="md-form form-group">' +
        '<input id="end_year" name="end_year_' + k + '" type="text" class="form-control @error("end_year") is-invalid @enderror">' +
        '@error("end_year")' +
        '<div class="alert alert-danger">{{ $message }}</div>' +
        '@enderror' +
        '</div>' +
        '</div>' +
        '<div class="col-1">' +
        '<div class="md-form form-group">' +
        '<input id="end_month" name="end_month_' + k + '" type="text" class="form-control @error("end_month") is-invalid @enderror">' +
        '@error("end_month")' +
        '<div class="alert alert-danger">{{ $message }}</div>' +
        '@enderror' +
        '</div>' +
        '</div>' +
        '<div class="col-4">' +
        '<div class="md-form form-group">' +
        '<input id="certificate" name="certificate_' + k + '" type="text" class="form-control @error("certificate") is-invalid @enderror">' +
        '@error("certificate")' +
        '<div class="alert alert-danger">{{ $message }}</div>' +
        '@enderror' +
        '</div>' +      
        '</div>' +
        '<div class="col-2">' +
        '<div class="md-form form-group">' +
        '<input id="city" name="city_' + k + '" type="text" class="form-control @error("city") is-invalid @enderror">' +
        '@error("city")' +
        '<div class="alert alert-danger">{{ $message }}</div>'
        '@enderror' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>'
        );
        k++;
    });

    $('#certificateForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
        url         : "/documents/certificate",
        method      : "post",
        data        : new FormData(this),
        dataType    : 'text',
        contentType : false,
        cache       : false,
        processData : false,
        })
        .done(function(res) {
            $('#form4').hide();
            $('#form5').show();
        })
        .fail(function(error) {
        })
        .always(function() {
        });
    });

    $('#skip_certificates').on('click', function() {
        $('#form4').hide();
        $('#form5').show();
    })

    

// PROJEKTY - POST

    let l = 1;

    $('#addProject').on('click', function(event) {
        event.preventDefault();
        $('.main-box-project').append(
            '<div class="col-4 offset-1">' +
            '<div class="md-form form-group">' +
            '<input id="link" name="link_' + l + '" type="text" class="form-control @error("link") is-invalid @enderror">' +
            '@error("link")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +      
            '</div>' +
            '<div class="form-row">' +
            '<div class="col-10 offset-1">' +
            '<div class="md-form form-group">' +
            '<textarea id="description" name="description_' + l + '" class="form-control @error("description") is-invalid @enderror"></textarea>' +
            '@error("description")' +
            '<div class="alert alert-danger">{{ $message }}</div>' +
            '@enderror' +
            '</div>' +
            '</div>' +
            '</div>'
        );
        l++;
    });

    $('#projectForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
        url         : "/documents/project",
        method      : "post",
        data        : new FormData(this),
        dataType    : 'text',
        contentType : false,
        cache       : false,
        processData : false,
        })
        .done(function(res) {
            $('#form5').hide();
            $('#end').show();
        })
        .fail(function(error) {
        })
        .always(function() {
        });
    });

    $('#skip_project').on('click', function() {
        $('#form5').hide();
        $('#end').show();
    })

}

</script>
@endsection