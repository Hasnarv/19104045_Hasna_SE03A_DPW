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
    <section class="h-100 w-100" style="box-sizing: border-box">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&display=swap');

            body {
                margin: 0;
                padding: 0;
                font-family: 'Poppins', sans-serif;
            }

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
                color: black;
            }

            .desc {
                margin-top: 10px;
                margin-bottom: 70px;
                color: black;
                text-align: justify;
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