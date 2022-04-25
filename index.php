<div class="ads-info">
    <div class="ads-info-time"><?= date('H') ?><span>:</span><?= date('i') ?></div>
    <div class="ads-info-weather">
        <div class="ads-info-weather-num"><?
            if ($json['weather']['fact']) {
                $temperature = $json['weather']['fact']['temp'];
                $temperature = round($temperature);
                if ($temperature > 0) {
                    print '+' . $temperature . '°C';
                } elseif ($temperature < 0) {
                    print '-' . $temperature . '°C';
                } else {
                    print $temperature . '°C';
                }
            }
            ?></div>
        <div class="ads-info-weather-icon"><?
            if ($json['weather']['fact']['icon']) {
                $icon = $json['weather']['fact']['icon'];
                print file_get_contents('https://yastatic.net/weather/i/icons/funky/dark/' . $icon . '.svg');
            }
            ?></div>
        <div class="ads-info-weather-text"><?
            if ($future[1]) {
                $in2hours = 'Через 2 часа ';
                if (strpos($future[1]['icon'], 'rain') !== false) {
                    $in2hours .= 'возможны дожди';
                } else {
                    $temperature = $future[1]['temp'];
                    $temperature = round($temperature);
                    if ($temperature > 0) {
                        $in2hours .= 'будет +' . $temperature . '°C';
                    } elseif ($temperature < 0) {
                        $in2hours .= 'будет -' . $temperature . '°C';
                    } else {
                        $in2hours .= 'будет ' . $temperature . '°C';
                    }
                }
                print $in2hours;
            }
            ?><br/><img src="/assets/images/yaw.svg" alt=""></div>
    </div>
</div>
