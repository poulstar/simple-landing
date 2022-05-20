<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>پل استار - مشاوره رایگان</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <style>
        @font-face {
            font-family: "dana VF";
            src: url("../../assets/fonts/dana/variable/dana2webGX.woff") format("woff-variations"),
                url("../../assets/fonts/dana/variable/dana2webGX.woff") format("woff");
            font-display: fallback;
        }
        body, html {
            font-family: "dana VF";
            line-height: 160%;
            margin: 0;
            padding: 0;
            letter-spacing: -0.2px;
            direction: rtl;
        }
        .cover {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }
        .contain {
            width: 100%;
            object-fit: contain;
            position: absolute;
            bottom: 0;
            left: 0;
            max-height: 100%;
        }
        .right {
            right: 0;
            width: 40%;
            /* height: 100%; */
            /* padding-top: 2%; */
            display: flex;
            justify-content: center;
            align-content: center;
        }
        form {
            margin: auto;
            max-width: 400px;
        }
        .inner-from {
            padding: 5%;
            @if(Session::has('success'))
            background-color: rgba(12, 202, 120, 0.9);
            @else
            background-color: rgba(255, 255, 255, 0.5);
            @endif
            border-radius: 10px;
        }
        .left, .right {
            position: absolute;
        }
        .left {
            left: 0;
            width: 60%;
            height: 100%;
        }
        label {
            display: flex;
            width: 100%;
            overflow: hidden;
            position: relative;
            display: block;
        }
        .input {
            width: 92%;
            flex-grow: 1;
            padding: 10px 3%;
            font-family: "dana VF";
            border: 2px solid lightgray;
            outline: none;
            border-radius: 8px;
            margin-top: 15px;
            display: block;
            position: relative;
        }
        .send {
            margin-top: 25px;
            width: 100%;
            color: white;
            border: none !important;
            text-align: center;
            background-color: #263157;
            cursor: pointer;
        }
        .form {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .title {
            font-size: 15px;
            margin-bottom: 5vh;
            text-align: justify;
        }
        .subtitle {
            text-align: center;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 25px;
            clear: both;

        }
        .padding {
            margin: 0 2%;
            position: relative;
            width: 96%;
            height: 100%;
        }
        .alert {
            font-weight: bold;
            text-align: justify;
            font-size: 14px;
            color: white;
        }
        .mobile_container{
            position: relative;
            width: 100%;

            /* display: flex; */
            /* flex-direction: left; */

        }
        .mobile_img{
            width: 60%;
            float: left;
            /* height: 100%; */
            margin:0;
            height: 100%;
        }
        .mobile_contain{
            width: 100%;

        }
        .mobile_title {
            position: absolute;
            right:15px;
            top: 90px;
            width:45%;
            font-size: 12px;
            line-height: 3vh;
            text-align: justify;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            padding: 2%;
            font-weight: bold;

        }
        @media only screen and (max-width: 680px) {
            .right, .left {
                position: relative;
                width: 100%;
            }
            .left {
                display: none;
            }
            .title{
                display: none;
            }
            .mobile_container{
                height: 42%;
            }

        }
        @media only screen and (min-width: 680px) {
            .right{
                height: 100%;
            }
            .mobile_contain {
                position: relative;
                width: 100%;
            }

            .mobile_contain {
                display: none;
            }
            .mobile_title{
                display: none;

            }


        }
    </style>
</head>
<body>
    <img class="cover" src="{{ asset('assets/img/2.jpg') }}" />
    <div class="form" >
        <div class="padding" >
            <div class="mobile_container" >
                <div class="mobile_title">
                    خانواده پل استار از طریق مهارت آموزی و آموزش زبان برنامه نویسی به کودکان و نوجوانان، آنها را در مسیر دستیابی به توانمندی لازم برای موفقیت در زندگی و کار و لذت بردن از آن در قرن حاظر همراهی می کند.
                </div>
                <div class="mobile_img">
                    <img class="mobile_contain" src="{{ asset('assets/img/1.png') }}" />
                </div>
            </div>
            <div class="right" >
                <form method="POST" action="{{ route('add-user') }}">
                    @csrf
                    <div class="title">
                        خانواده پل استار از طریق مهارت آموزی و آموزش زبان برنامه نویسی به کودکان و نوجوانان، آنها را در مسیر دستیابی به توانمندی لازم برای موفقیت در زندگی و کار و لذت بردن از آن در قرن حاظر همراهی می کند.
                    </div>

                    <div class="inner-from">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @else
                            <div class="subtitle">
                                با پر کردن فرم زیر شما در لیست مشاوره رایگان موسسه پل استار قرار خواهید گرفت:
                            </div>
                            <label>
                                <input class="input" name="name" placeholder="نام و نام خانوادگی والد" required/>
                            </label>
                            <label>
                                <input class="input" type="number" name="age" placeholder="سن فرزند" required/>
                            </label>
                            <label>
                                <input class="input" type="tel" name="tel" placeholder="شماره موبایل" required/>
                            </label>
                            <input class="" type="number" name="hours" hidden/>
                            <button type="submit" class="input send">ارسال</button>
                        @endif
                    </div>
                </form>
            </div>
            <div class="left">
                <img class="contain" src="{{ asset('assets/img/1.png') }}" />
            </div>


        </div>
    </div>
</body>
</html>
