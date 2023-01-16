<?php
function ticket_statons() {
    return [
        [
            'name'    => 'Dhaka',
            'address' => 'Dhaka',
            'lat'     => 92.45554,
            'lon'     => -94.56455,
        ],
        [
            'name'    => 'Dhaka Bimanbondor',
            'address' => 'Dhaka Bimanbondor',
            'lat'     => 95.45554,
            'lon'     => -94.564585,
        ],
        [
            'name'    => 'Khulna',
            'address' => 'Khulna',
            'lat'     => 94.44554,
            'lon'     => -95.56455,
        ],
    ];
}

function eticket_trains() {
    return [
        [
            'name'            => 'Suborna Express',
            'date'            => '2023-01-14',
            'home_station_id' => 1,
            'start_time'      => '06:00',
        ],
        [
            'name'            => 'Chitra Express',
            'date'            => '2023-01-14',
            'home_station_id' => 1,
            'start_time'      => '11:00',
        ],
    ];
}

function eticket_bogis(){
    return ['KA', 'KHA'];
}