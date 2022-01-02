@extends('template.base')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap');

            body {
                background-color: #201F1F;
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
            }

            /* Header */
            .header {
                margin-top: 30px;
                display: flex;
                justify-content: space-between;
                padding: 0 170px;
            }

            .iconNama {
                display: flex;
                justify-content: space-evenly;
                width: 12%;
            }

            .nama {
                color: white;
                font-weight: 700;
                font-size: 17px;
                margin-top: 7px;
            }

            .iconNama img {
                width: 30%;
            }

            nav {
                display: flex;
                justify-content: space-evenly;
                width: 40%;
                margin-top: 7px;
                color: white;
            }

            /* Header */

            /* Banner */
            .banner {
                margin-top: 150px;
                display: flex;
                justify-content: space-between;
                padding: 0 170px;
            }

            .caption {
                width: 40%;
                margin-left: 70px;
            }

            .sapaan {
                color: #298dff;
                font-size: 50px;
                font-weight: 700;
            }

            span {
                color: white;
            }

            .desc {
                margin-top: 10px;
                margin-bottom: 70px;
                color: white;
                text-align: justify;
            }

            .btn-Email {
                padding: 10px 20px;
                background-color: #298dff;
                color: white;
                font-weight: 700;
                border: none;
                border-radius: 5px;
            }

            .sosmed {
                width: 58%;
                display: flex;
                justify-content: space-between;
            }

            .an-sosmed {
                display: flex;
                justify-content: space-between;
                width: 120px;
                margin-top: 2px;
                font-size: 28px;
                color: white;
            }

            img.foto-banner {
                width: 40%;
                margin-top: -80px;
            }

            /* hover */
            .icon-profile:hover {
                cursor: pointer;
                color: #298dff;
            }

            .icon-experience:hover {
                cursor: pointer;
                color: #298dff;
            }

            .icon-interest:hover {
                cursor: pointer;
                color: #298dff;
            }

            .instagram:hover {
                cursor: pointer;
                color: #298dff;
            }

            .facebook:hover {
                cursor: pointer;
                color: #298dff;
            }

            .linkedin:hover {
                cursor: pointer;
                color: #298dff;
            }

            .btn-Email:hover {
                cursor: pointer;
                background-color: #174274;
            }

            /* Banner */
        </style>

        <!-- Banner -->
        <div class="banner">
            <!-- Caption -->
            <div class="caption">
                <div class="sapaan">
                    <span>Hello!</span> I'm Hasna
                </div>
                <div class="desc">
                    I'm from Indonesia. I'm a Software Engineering student who is enthusiastic about information technology especially the front end. I'm' also interested in UI/UX design and I have participated in several uiux design competitions
                </div>
            </div>
        </div>
        <!-- Banner -->
    </section>
    @endsection


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beranda</title>
    </head>

    <body>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap');

            body {
                background-color: #201F1F;
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
            }

            /* Header */
            .header {
                margin-top: 30px;
                display: flex;
                justify-content: space-between;
                padding: 0 170px;
            }

            .iconNama {
                display: flex;
                justify-content: space-evenly;
                width: 12%;
            }

            .nama {
                color: white;
                font-weight: 700;
                font-size: 17px;
                margin-top: 7px;
            }

            .iconNama img {
                width: 30%;
            }

            nav {
                display: flex;
                justify-content: space-evenly;
                width: 40%;
                margin-top: 7px;
                color: white;
            }

            /* Header */

            /* Banner */
            .banner {
                margin-top: 150px;
                display: flex;
                justify-content: space-between;
                padding: 0 170px;
            }

            .caption {
                width: 40%;
                margin-left: 70px;
            }

            .sapaan {
                color: #298dff;
                font-size: 50px;
                font-weight: 700;
            }

            span {
                color: white;
            }

            .desc {
                margin-top: 10px;
                margin-bottom: 70px;
                color: white;
                text-align: justify;
            }

            .btn-Email {
                padding: 10px 20px;
                background-color: #298dff;
                color: white;
                font-weight: 700;
                border: none;
                border-radius: 5px;
            }

            .sosmed {
                width: 58%;
                display: flex;
                justify-content: space-between;
            }

            .an-sosmed {
                display: flex;
                justify-content: space-between;
                width: 120px;
                margin-top: 2px;
                font-size: 28px;
                color: white;
            }

            /* hover */
            .icon-profile:hover {
                cursor: pointer;
                color: #298dff;
            }

            .icon-experience:hover {
                cursor: pointer;
                color: #298dff;
            }

            .icon-interest:hover {
                cursor: pointer;
                color: #298dff;
            }

            .instagram:hover {
                cursor: pointer;
                color: #298dff;
            }

            .facebook:hover {
                cursor: pointer;
                color: #298dff;
            }

            .linkedin:hover {
                cursor: pointer;
                color: #298dff;
            }

            .btn-Email:hover {
                cursor: pointer;
                background-color: #174274;
            }

            /* Banner */
        </style>


    </body>

    </html>