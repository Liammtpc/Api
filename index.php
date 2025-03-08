<?php
//https://api.openweathermap.org/data/2.5/weather?q=Sweden&appid=5fe21d727c7e97085f41df29b9370243
$dbiR = '{"coord":{"lon":51.4215,"lat":35.6944},"weather":[{"id":721,"main":"Haze","description":"haze","icon":"50n"}],"base":"stations","main":{"temp":288.82,"feels_like":287.25,"temp_min":287.94,"temp_max":289.14,"pressure":1016,"humidity":31,"sea_level":1016,"grnd_level":864},"visibility":5000,"wind":{"speed":3.09,"deg":130},"clouds":{"all":75},"dt":1732634377,"sys":{"type":2,"id":47737,"country":"IR","sunrise":1732591280,"sunset":1732627345},"timezone":12600,"id":112931,"name":"Tehran","cod":200}';
$dbusa = '{"coord":{"lon":36.85,"lat":-3.3667},"weather":[{"id":801,"main":"Clouds","description":"few clouds","icon":"02n"}],"base":"stations","main":{"temp":295.13,"feels_like":294.95,"temp_min":295.13,"temp_max":295.13,"pressure":1013,"humidity":60,"sea_level":1013,"grnd_level":884},"visibility":10000,"wind":{"speed":2.37,"deg":65,"gust":5.73},"clouds":{"all":19},"dt":1732640790,"sys":{"country":"TZ","sunrise":1732590686,"sunset":1732634935},"timezone":10800,"id":149155,"name":"Usa River","cod":200}';
$dbEng = '{"coord":{"lon":-91.969,"lat":34.5443},"weather":[{"id":800,"main":"Clear","description":"clear sky","icon":"01d"}],"base":"stations","main":{"temp":281.75,"feels_like":279.57,"temp_min":280.96,"temp_max":283.14,"pressure":1026,"humidity":39,"sea_level":1026,"grnd_level":1017},"visibility":10000,"wind":{"speed":3.73,"deg":52,"gust":4.51},"clouds":{"all":3},"dt":1732640547,"sys":{"type":2,"id":46979,"country":"US","sunrise":1732625556,"sunset":1732661911},"timezone":-21600,"id":4110001,"name":"England","cod":200}';
$dbitaly = '{"coord":{"lon":-96.8847,"lat":32.184},"weather":[{"id":804,"main":"Clouds","description":"overcast clouds","icon":"04d"}],"base":"stations","main":{"temp":284.58,"feels_like":283.27,"temp_min":283.41,"temp_max":285.54,"pressure":1023,"humidity":57,"sea_level":1023,"grnd_level":1001},"visibility":10000,"wind":{"speed":1.7,"deg":111,"gust":1.73},"clouds":{"all":98},"dt":1732642204,"sys":{"type":2,"id":2020745,"country":"US","sunrise":1732626422,"sunset":1732663406},"timezone":-21600,"id":4700234,"name":"Italy","cod":200}';
$dbfrance = '{"coord":{"lon":-3.7396,"lat":5.2038},"weather":[{"id":801,"main":"Clouds","description":"few clouds","icon":"02d"}],"base":"stations","main":{"temp":303.14,"feels_like":310.14,"temp_min":303.14,"temp_max":303.14,"pressure":1012,"humidity":78,"sea_level":1012,"grnd_level":1011},"visibility":10000,"wind":{"speed":4.23,"deg":211,"gust":6},"clouds":{"all":19},"dt":1732643490,"sys":{"type":1,"id":1162,"country":"CI","sunrise":1732601221,"sunset":1732643887},"timezone":0,"id":2288873,"name":"France","cod":200}';
$dbgermany = '{"coord":{"lon":10.5,"lat":51.5},"weather":[{"id":803,"main":"Clouds","description":"broken clouds","icon":"04n"}],"base":"stations","main":{"temp":280.21,"feels_like":278.85,"temp_min":277.85,"temp_max":280.67,"pressure":1020,"humidity":91,"sea_level":1020,"grnd_level":984},"visibility":10000,"wind":{"speed":2.07,"deg":220,"gust":2.11},"clouds":{"all":71},"dt":1732642881,"sys":{"type":2,"id":197911,"country":"DE","sunrise":1732604077,"sunset":1732634194},"timezone":3600,"id":2921044,"name":"Germany","cod":200}';
$dbrussia = '{"coord":{"lon":100,"lat":60},"weather":[{"id":804,"main":"Clouds","description":"overcast clouds","icon":"04n"}],"base":"stations","main":{"temp":264.56,"feels_like":258.5,"temp_min":264.56,"temp_max":264.56,"pressure":1025,"humidity":94,"sea_level":1025,"grnd_level":985},"visibility":10000,"wind":{"speed":3.8,"deg":218,"gust":12.32},"clouds":{"all":100},"dt":1732643673,"sys":{"country":"RU","sunrise":1732672003,"sunset":1732696137},"timezone":25200,"id":2017370,"name":"Russia","cod":200}';
$dbchiness = '{"coord":{"lon":105,"lat":35},"weather":[{"id":800,"main":"Clear","description":"clear sky","icon":"01n"}],"base":"stations","main":{"temp":268.29,"feels_like":264.9,"temp_min":268.29,"temp_max":268.29,"pressure":1036,"humidity":52,"sea_level":1036,"grnd_level":819},"visibility":10000,"wind":{"speed":2.09,"deg":288,"gust":2.05},"clouds":{"all":0},"dt":1732643693,"sys":{"country":"CN","sunrise":1732664772,"sunset":1732700968},"timezone":28800,"id":1814991,"name":"China","cod":200}';
$dbtokyo = '{"coord":{"lon":139.6917,"lat":35.6895},"weather":[{"id":502,"main":"Rain","description":"heavy intensity rain","icon":"10n"}],"base":"stations","main":{"temp":283.66,"feels_like":283.22,"temp_min":282.9,"temp_max":285.74,"pressure":1008,"humidity":94,"sea_level":1008,"grnd_level":1007},"visibility":4746,"wind":{"speed":7.25,"deg":330,"gust":6.72},"rain":{"1h":4.34},"clouds":{"all":100},"dt":1732643764,"sys":{"type":2,"id":268395,"country":"JP","sunrise":1732656537,"sunset":1732692547},"timezone":32400,"id":1850144,"name":"Tokyo","cod":200}';
$iran = json_decode($dbiR, true);
$england = json_decode($dbEng, true);
$usa = json_decode($dbusa, true);
$italy = json_decode($dbitaly, true);
$france = json_decode($dbfrance, true);
$germany = json_decode($dbgermany, true);
$russia = json_decode($dbrussia, true);
$chine = json_decode($dbchiness, true);
$tokyo = json_decode($dbtokyo, true);
$tempture = [$russia["main"]["temp"], $iran["main"]["temp"], $france["main"]["temp"], $england["main"]["temp"], $usa["main"]["temp"], $germany["main"]["temp"], $chine["main"]["temp"], $tokyo["main"]["temp"]];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weather</title>
</head>

<body>
    <div class="bg">
        <div class="continear">
            <div class="navbar">
                <div class="navbar-logo"></div>
                <div class="search-box">
                    <button onclick="weather()"><img src="search.png" alt=""></button>
                    <input type="text" name="contery" id="inp">
                    <div class="display-show" id="display">
                       disply Tempture
                    </div>
                </div>
            </div>
            <div class="weather-head">
                <div class="weather-cards">
                    <img src="4102326_cloud_sun_sunny_weather_icon.png" alt="">
                    <div class="degress">
                        <?php
                        $temp = ($iran["main"]["temp"]) - 273.15;
                        echo $temp . "C";
                        ?>
                    </div>
                    <div class="weatherCard-info">
                        <span>
                            <?php
                            echo $iran["name"];
                            ?>
                        </span>
                        <span>
                            <img src="icons8-drop-50.png" alt="">
                            <?php
                            echo $iran["main"]["humidity"];
                            ?>
                        </span>
                        <span>
                            <img src="icons8-wind-symbol-48.png" alt="">
                            <?php
                            echo $iran["wind"]["speed"];
                            ?>
                        </span>
                    </div>
                </div>
                <div class="weather-cards">
                    <img src="sun.png" alt="" id="widths">
                    <div class="degress">
                        <?php
                        $temps = ($england["main"]["temp"]) - 273.15;
                        echo $temps . "C";
                        ?>
                    </div>
                    <div class="weatherCard-info">
                        <span>
                            <?php
                            echo $england["name"];
                            ?>
                        </span>
                        <span>
                            <img src="icons8-drop-50.png" alt="">
                            <?php
                            echo $england["main"]["humidity"];
                            ?>
                        </span>
                        <span>
                            <img src="icons8-wind-symbol-48.png" alt="">
                            <?php
                            echo $england["wind"]["speed"];
                            ?>
                        </span>
                    </div>
                </div>
                <div class="weather-cards">
                    <img src="rain.png" alt="" id="widths">
                    <div class="degress">
                        <?php
                        $tempss = ($usa["main"]["temp"]) - 273.15;
                        echo $tempss . "C";
                        ?>
                    </div>
                    <div class="weatherCard-info">
                        <span>
                            <?php
                            echo $usa["name"];
                            ?>
                        </span>
                        <span>
                            <img src="icons8-drop-50.png" alt="">
                            <?php
                            echo $usa["main"]["humidity"];
                            ?>
                        </span>
                        <span>
                            <img src="icons8-wind-symbol-48.png" alt="">
                            <?php
                            echo $usa["wind"]["speed"];
                            ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="weathers">
                    <table>
                        <tr id="tr">
                            <th>Row</th>
                            <th>Country</th>
                            <th>Weather</th>
                            <th>Degress</th>
                            <th>D.min</th>
                            <th>D.max</th>
                            <th>Wind</th>
                            <th>Rain</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><?php echo $germany["name"]; ?></td>
                            <td><?php echo $germany["weather"][0]["main"]; ?></td>
                            <td><?php echo $germany["main"]["temp"] - 273.15; ?></td>
                            <td><?php echo $germany["main"]["temp_min"] - 273.15; ?></td>
                            <td><?php echo $germany["main"]["temp_max"] - 273.15; ?></td>
                            <td><?php echo $germany["wind"]["speed"]; ?></td>
                            <td><?php echo $germany["main"]["humidity"]; ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><?php echo $russia["name"]; ?></td>
                            <td><?php echo $russia["weather"][0]["main"]; ?></td>
                            <td><?php echo $russia["main"]["temp"] - 273.15; ?></td>
                            <td><?php echo $russia["main"]["temp_min"] - 273.15; ?></td>
                            <td><?php echo $russia["main"]["temp_max"] - 273.15; ?></td>
                            <td><?php echo $russia["wind"]["speed"]; ?></td>
                            <td><?php echo $russia["main"]["humidity"]; ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><?php echo $italy["name"]; ?></td>
                            <td><?php echo $italy["weather"][0]["main"]; ?></td>
                            <td><?php echo $italy["main"]["temp"] - 273.15; ?></td>
                            <td><?php echo $italy["main"]["temp_min"] - 273.15; ?></td>
                            <td><?php echo $italy["main"]["temp_max"] - 273.15; ?></td>
                            <td><?php echo $italy["wind"]["speed"]; ?></td>
                            <td><?php echo $italy["main"]["humidity"]; ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><?php echo $chine["name"]; ?></td>
                            <td><?php echo $chine["weather"][0]["main"]; ?></td>
                            <td><?php echo $chine["main"]["temp"] - 273.15; ?></td>
                            <td><?php echo $chine["main"]["temp_min"] - 273.15; ?></td>
                            <td><?php echo $chine["main"]["temp_max"] - 273.15; ?></td>
                            <td><?php echo $chine["wind"]["speed"]; ?></td>
                            <td><?php echo $chine["main"]["humidity"]; ?></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><?php echo $tokyo["name"]; ?></td>
                            <td><?php echo $tokyo["weather"][0]["main"]; ?></td>
                            <td><?php echo $tokyo["main"]["temp"] - 273.15; ?></td>
                            <td><?php echo $tokyo["main"]["temp_min"] - 273.15; ?></td>
                            <td><?php echo $tokyo["main"]["temp_max"] - 273.15; ?></td>
                            <td><?php echo $tokyo["wind"]["speed"]; ?></td>
                            <td><?php echo $tokyo["main"]["humidity"]; ?></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><?php echo $england["name"]; ?></td>
                            <td><?php echo $england["weather"][0]["main"]; ?></td>
                            <td><?php echo $england["main"]["temp"] - 273.15; ?></td>
                            <td><?php echo $england["main"]["temp_min"] - 273.15; ?></td>
                            <td><?php echo $england["main"]["temp_max"] - 273.15; ?></td>
                            <td><?php echo $england["wind"]["speed"]; ?></td>
                            <td><?php echo $england["main"]["humidity"]; ?></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><?php echo $iran["name"]; ?></td>
                            <td><?php echo $iran["weather"][0]["main"]; ?></td>
                            <td><?php echo $iran["main"]["temp"] - 273.15; ?></td>
                            <td><?php echo $iran["main"]["temp_min"] - 273.15; ?></td>
                            <td><?php echo $iran["main"]["temp_max"] - 273.15; ?></td>
                            <td><?php echo $iran["wind"]["speed"]; ?></td>
                            <td><?php echo $iran["main"]["humidity"]; ?></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><?php echo $france["name"]; ?></td>
                            <td><?php echo $france["weather"][0]["main"]; ?></td>
                            <td><?php echo $france["main"]["temp"] - 273.15; ?></td>
                            <td><?php echo $france["main"]["temp_min"] - 273.15; ?></td>
                            <td><?php echo $france["main"]["temp_max"] - 273.15; ?></td>
                            <td><?php echo $france["wind"]["speed"]; ?></td>
                            <td><?php echo $france["main"]["humidity"]; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="hot-cold">
                    <div class="colder">
                        <img src="ice-crystal.png" alt="" class="colders">
                        <span>
                            <?php echo min($tempture) - 273.15; ?>
                        </span>
                    </div>
                    <div class="hoter">
                        <img src="hot.png" alt="" class="hoters">
                        <?php echo max($tempture) - 273.15; ?>
                    </div>
                </div>
            </div>
            <div class="subject">
                <marquee>This text will scroll from right to left</marquee>
            </div>
        </div>
    </div>
    <script>
        function weather() {
            var data = null;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {

                    let reault = JSON.parse(this.response);
                    let tempture = reault.main.temp-273.15;
                    let weathers = reault.weather[0].main;
                    document.getElementById("display").innerHTML = "Tempture:  " +  + tempture.toFixed(2) +",     "+ "Weather:  "  + weathers;
                }
            };
            let inp = document.getElementById("inp").value;

            xmlhttp.open("GET", 'https://api.openweathermap.org/data/2.5/weather?q=' + inp + '&appid=5fe21d727c7e97085f41df29b9370243');
            xmlhttp.send(data);
        }
    </script>
</body>

</html>