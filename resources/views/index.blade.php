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
                <div class="search">
                    <select id="selectDeparture">
                        <option></option>
                        @foreach ($routes as $route)
                            <option>{{ $route->route }}</option>
                        @endforeach
                    </select>
                </div>


                <li>Куди?</li>
                <div class="search">
                    <select id="selectArrival">
                        <option></option>
                        @foreach ($routes as $route)
                            <option>{{ $route->route }}</option>
                        @endforeach
                    </select>
                </div>


                <li>Кількість пасажирів</li>
                <input class="search" id="selectPassengerAmount" type="text" name="username">
            </ol>
            <ol class="bottom-search">
                <li>Дата відправлення</li>
                <div class="search4">
                    <select id="selectDepartureDate">
                        <option></option>
                        @foreach ($tickets as $ticket)
                            <option>{{ $ticket->departure_date }}</option>
                        @endforeach
                    </select>
                </div>
                <li>Дата прибуття</li>
                <div class="search">
                    <select id="selectArrivalDate">
                        <option></option>
                        @foreach ($tickets as $ticket)
                            <option>{{ $ticket->arrival_date }}</option>
                        @endforeach
                    </select>
                </div>
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
                            <li class="dep-time">{{ $ticket->departure_time }}</li>
                            <li class="dep-date">{{ $ticket->departure_date }}</li>
                            <li class="travel-time">{{ $ticket->travel_time }}</li>
                            <li class="dest-time">{{ $ticket->arrival_time }}</li>
                            <li class="dest-date">{{ $ticket->arrival_date }}</li>
                            <li class="price">{{ $ticket->ticket_price }}</li>
                        </ol>
                        <ol class="row2">
                            <li class="dep-place">{{ $ticket->departure_place }}</li>
                            <li class="dest-place">{{ $ticket->arrival_place }}</li>
                        </ol>
                        <ol class="row3">
                            @foreach ($transporters as $transporter)
                                @if ($transporter->id == 1)
                                    <li class="transporter">{{ $transporter->name }}</li>
                                    <li class="rating">{{ $transporter->rating }}</li>
                                @endif
                            @endforeach
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
                            <li class="dep-time">{{ $ticket->departure_time }}</li>
                            <li class="dep-date">{{ $ticket->departure_date }}</li>
                            <li class="travel-time">{{ $ticket->travel_time }}</li>
                            <li class="dest-time">{{ $ticket->arrival_time }}</li>
                            <li class="dest-date">{{ $ticket->arrival_date }}</li>
                            <li class="price">{{ $ticket->ticket_price }}</li>
                        </ol>
                        <ol class="row2">
                            <li class="dep-place">{{ $ticket->departure_place }}</li>
                            <li class="dest-place">{{ $ticket->arrival_place }}</li>
                        </ol>
                        <ol class="row3">
                            @foreach ($transporters as $transporter)
                                @if ($transporter->id == 2)
                                    <li class="transporter">{{ $transporter->name }}</li>
                                    <li class="rating">{{ $transporter->rating }}</li>
                                @endif
                            @endforeach
                            <li class="buy">Купити</li>
                        </ol>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <script>
      const selectElement = document.querySelector('#selectDeparture');
      const selectElement2 = document.querySelector('#selectArrival');
      const selectElement3 = document.querySelector('#selectDepartureDate');
      const selectElement4 = document.querySelector('#selectArrivalDate');

      selectElement.addEventListener('change', (event) => {
      var selectedDeparture = selectElement.value;
      var selectedArrival = selectElement2.value;
      var selectedDepartureDate = selectElement3.value;
      var selectedArrivalDate = selectElement4.value;
      var passengerAmount = document.querySelector('#selectPassengerAmount').value;
         @foreach ($tickets as $ticket)

            if (passengerAmount != '1' || passengerAmount == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            if ((selectedDepartureDate != '2024-02-29' && selectedDepartureDate != '2024-03-01') || selectedDepartureDate == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            if ((selectedArrivalDate != '2024-02-29' && selectedArrivalDate != '2024-03-02') || selectedArrivalDate == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            if ((selectedDeparture != 'Київ' && selectedDeparture != 'Львів') || selectedDeparture == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            var departurePlace = {!! json_encode($ticket->departure_place) !!};
            if (departurePlace == selectedDeparture) {
                if (departurePlace == 'Київ') {
                    if (selectedArrival == "Дніпро" && selectedDepartureDate == '2024-02-29' && selectedArrivalDate == "2024-02-29" && passengerAmount == '1') {
                        document.getElementById('one').style.display = 'block';
                        document.getElementById('two').style.display = 'none';
                    }
                    else {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'none';
                    }
                }
                else if (departurePlace == 'Львів') {
                    if (selectedArrival == "Запоріжжя"  && selectedDepartureDate == '2024-03-01' && selectedArrivalDate == "2024-03-02" && passengerAmount == '1') {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'block';
                    }
                   else {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'none';
                    }
                }
            }
         @endforeach
      });

      selectElement2.addEventListener('change', (event) => {
         var selectedDeparture = selectElement.value;
         var selectedArrival = selectElement2.value;
         var selectedDepartureDate = selectElement3.value;
         var selectedArrivalDate = selectElement4.value;
         var passengerAmount = document.querySelector('#selectPassengerAmount').value;
         @foreach ($tickets as $ticket)

            if (passengerAmount != '1' || passengerAmount == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            if ((selectedDepartureDate != '2024-02-29' && selectedDepartureDate != '2024-03-01') || selectedDepartureDate == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            if ((selectedArrivalDate != '2024-02-29' && selectedArrivalDate != '2024-03-02') || selectedArrivalDate == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

             if ((selectedArrival != 'Дніпро' && selectedArrival != 'Запоріжжя') || selectedArrival == "") {
                    document.getElementById('one').style.display = 'none';
                    document.getElementById('two').style.display = 'none';
             }
             
            var arrivalPlace = {!! json_encode($ticket->arrival_place) !!};
            if (arrivalPlace == selectedArrival) {
                if (arrivalPlace == 'Дніпро') {
                    if (selectedDeparture == "Київ" && selectedDepartureDate == '2024-02-29' && selectedArrivalDate == "2024-02-29"  && passengerAmount == '1') {
                        document.getElementById('one').style.display = 'block';
                        document.getElementById('two').style.display = 'none';
                    }
                    else {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'none';
                    }
                }
                else if (arrivalPlace == 'Запоріжжя') {
                    if (selectedDeparture == "Львів"  && selectedDepartureDate == '2024-03-01' && selectedArrivalDate == "2024-03-02"  && passengerAmount == '1') {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'block';
                    }
                    else {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'none';
                    }
                }
            }
         @endforeach
      });



      selectElement3.addEventListener('change', (event) => {
      var selectedDeparture = selectElement.value;
      var selectedArrival = selectElement2.value;
      var selectedDepartureDate = selectElement3.value;
      var selectedArrivalDate = selectElement4.value;
      var passengerAmount = document.querySelector('#selectPassengerAmount').value;
         @foreach ($tickets as $ticket)

            if (passengerAmount != '1' || passengerAmount == "") {
                document.getElementById('one').style.display = 'none';
               document.getElementById('two').style.display = 'none';
            }

            if ((selectedDepartureDate != '2024-02-29' && selectedDepartureDate != '2024-03-01') || selectedDepartureDate == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            if ((selectedArrivalDate != '2024-02-29' && selectedArrivalDate != '2024-03-02') || selectedArrivalDate == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            if ((selectedDeparture != 'Київ' && selectedDeparture != 'Львів') || selectedDeparture == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }
            
            var departureDate = {!! json_encode($ticket->departure_date) !!};
            if (departureDate == selectedDepartureDate) {
                if (departureDate == '2024-02-29') {
                    if (selectedArrivalDate == "2024-02-29" && selectedArrival == 'Дніпро' && selectedDeparture == 'Київ'  && passengerAmount == '1') {
                        document.getElementById('one').style.display = 'block';
                        document.getElementById('two').style.display = 'none';
                    }
                    else {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'none';
                    }
                }
                else if (departureDate == '2024-03-01') {
                    if (selectedArrivalDate == "2024-03-02" && selectedArrival == "Запоріжжя" && selectedDeparture == 'Львів'  && passengerAmount == '1') {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'block';
                    }
                    else {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'none';
                    }
                }
            }
         @endforeach
      });

      selectElement4.addEventListener('change', (event) => {
         var selectedDeparture = selectElement.value;
         var selectedArrival = selectElement2.value;
         var selectedDepartureDate = selectElement3.value;
         var selectedArrivalDate = selectElement4.value;
         var passengerAmount = document.querySelector('#selectPassengerAmount').value;
         @foreach ($tickets as $ticket)

            if (passengerAmount != '1' || passengerAmount == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            if ((selectedDepartureDate != '2024-02-29' && selectedDepartureDate != '2024-03-01') || selectedDepartureDate == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            if ((selectedArrivalDate != '2024-02-29' && selectedArrivalDate != '2024-03-02') || selectedArrivalDate == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            if ((selectedDeparture != 'Київ' && selectedDeparture != 'Львів') || selectedDeparture == "") {
                document.getElementById('one').style.display = 'none';
                document.getElementById('two').style.display = 'none';
            }

            var arrivalDate = {!! json_encode($ticket->arrival_date) !!};
            if (arrivalDate == selectedArrivalDate) {
                if (arrivalDate == '2024-02-29') {
                    if (selectedDepartureDate == "2024-02-29" && selectedArrival == "Дніпро" && selectedDeparture == "Київ"  && passengerAmount == '1') {
                        document.getElementById('one').style.display = 'block';
                        document.getElementById('two').style.display = 'none';
                    }
                    else {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'none';
                    }
                }
                else if (arrivalDate == '2024-03-02') {
                    if (selectedDepartureDate == "2024-03-01" && selectedArrival == "Запоріжжя" && selectedArrival == "Львів"  && passengerAmount == '1') {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'block';
                    }
                    else {
                        document.getElementById('one').style.display = 'none';
                        document.getElementById('two').style.display = 'none';
                    }
                }
            }
         @endforeach
      });

      document.querySelector('#selectPassengerAmount').addEventListener('input', (event) => {
          var selectedDeparture = selectElement.value;
          var selectedArrival = selectElement2.value;
          var selectedDepartureDate = selectElement3.value;
          var selectedArrivalDate = selectElement4.value;
          var passengerAmount = document.querySelector('#selectPassengerAmount').value;
          if (passengerAmount == '1') {
              if (selectedDeparture == "Львів" && selectedArrival == "Запоріжжя"  && selectedDepartureDate == '2024-03-01' && selectedArrivalDate == "2024-03-02"){
                   document.getElementById('one').style.display = 'none';
                   document.getElementById('two').style.display = 'block';
              }
              else if (selectedDeparture == "Київ" && selectedArrival == "Дніпро"  && selectedDepartureDate == '2024-02-29' && selectedArrivalDate == "2024-02-29"){
                   document.getElementById('one').style.display = 'block';
                   document.getElementById('two').style.display = 'none';
              }
              else {
                   document.getElementById('one').style.display = 'none';
                   document.getElementById('two').style.display = 'none';
              }
          }
          else {
               document.getElementById('one').style.display = 'none';
               document.getElementById('two').style.display = 'none';
          }
      });
    </script>

</body>
</html>
