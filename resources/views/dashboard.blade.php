<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        tr {
            background-color: #f5f5f5;
        }
        th,
        td {
            padding: 15px;
            text-align: right;
            border-bottom: 1px solid #ccc;
        }
        tr:hover {
            background-color: #cdcdcd;
        }
    </style>
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <td>شماره</td>
                    <td>نام</td>
                    <td>تلفن</td>
                    <td>سن</td>
                    <td>زمان ثبت</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($registrars as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->name}}</td>
                    <td>{{$r->tel}}</td>
                    <td>{{$r->age}}</td>
                    <td>{{$r->created_at}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <div style="height: 40px; overflow: hidden;">
        {{ $registrars->links() }}
    </div>
    <div>
        <a href="{{ route('logout') }}">
            <button>Logout</button>
        </a>
    </div>
</body>
</html>
