<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <title>Сервіс з продажу транспортних квитків</title>
    <link href="{{ asset('styles.css') }}" rel="stylesheet" />
</head>
<body>
    <div id="header">
        <nav>
            <img src="images/icons8-home-50.png" />
            <ol class="nav">
                <li><img src="images/icons8-bus-50.png" />Автобус</li>
                <li><img src="images/icons8-train-50.png" />Поїзд</li>
                <li><img src="images/icons8-plane-50.png" />Літак</li>
            </ol>
            <ol class="settings">
                <li><img id="set1" src="images/icons8-person-24.png" /></li>
                <li><img src="images/icons8-settings-50.png" /></li>
                <li><img src="images/icons8-notification-50.png" /></li>
                <li><img src="images/icons8-question-50.png" /></li>
            </ol>

        </nav>
        <div id="search">
            <ol class="top-search">
                <li>Звідки?</li>
                <li><div class="search1"></div></li>
                <li>Куди?</li>
                <li><div class="search2"></div></li>
                <li>Кількість пасажирів</li>
                <li><div class="search3"></div></li>
            </ol>
            <ol class="bottom-search">
                <li>Дата відправлення</li>
                <li><div class="search4"></div></li>
                <li>Дата повернення</li>
                <li><div class="search5"></div></li>
            </ol>
        </div>
    </div>
    <div class="sort">
        <ol>
            <li>Ціна</li>
            <li>Час у дорозі</li>
            <li>Час відправлення</li>
            <li>Час прибуття</li>
            <li>Вільні місця</li>
        </ol>
    </div>
    <div id="tickets">
        @foreach ($tickets as $ticket)
            @if ($ticket->id == 1)
                <div id="one">
                    <p>Квиток 1</p>
                    <div class="body">
                        <ol class="row1">
                            <li class="dep">{{ $ticket->departure_place }}</li>
                            <li>{{ $ticket->travel_time }}</li>
                            <li class="dest">{{ $ticket->arrival_place }}</li>
                            <li>{{ $ticket->ticket_price }}</li>
                        </ol>
                        <ol class="row2">
                            <li>{{ $ticket->departure_time }}</li>
                            <li>{{ $ticket->arrival_time }}</li>
                        </ol>
                        <ol class="row3">
                            <li>{{ $ticket->transporter }}</li>
                            <li class="rating">{{ $ticket->transporter_rating }}</li>
                            <li class="buy">Купити</li>
                        </ol>
                    </div>
                </div>
            @endif
            @if ($ticket->id == 2)
                <div id="two">
                    <p>Квиток 2</p>
                    <div class="body">
                        <ol class="row1">
                            <li class="dep">{{ $ticket->departure_place }}</li>
                            <li>{{ $ticket->travel_time }}</li>
                            <li class="dest">{{ $ticket->arrival_place }}</li>
                            <li>{{ $ticket->ticket_price }}</li>
                        </ol>
                        <ol class="row2">
                            <li>{{ $ticket->departure_time }}</li>
                            <li>{{ $ticket->arrival_time }}</li>
                        </ol>
                        <ol class="row3">
                            <li>{{ $ticket->transporter }}</li>
                            <li class="rating">{{ $ticket->transporter_rating }}</li>
                            <li class="buy">Купити</li>
                        </ol>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</body>
</html>
