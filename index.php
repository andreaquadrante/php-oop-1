<?php

    class HotelRoom {
        public $number;
        public $floor;
        public $beds;

        function __construct($number, $floor, $beds) {
            $this->number = $number;
            $this->floor = $floor;
            $this->beds = $beds;
        }

        public function room_info_display() {
            return 'La stanza numero ' . $this->number . ' si trova al piano ' . $this->floor . ' e ha ' . $this->beds . ' posti letto.';
        }
    }

    $hotel = [
        $room_121 = new HotelRoom(121, 4, 5),
        $room_139 = new HotelRoom(139, 6, 4),
        $room_225 = new HotelRoom(225, 11, 2)
    ];

    foreach ($hotel as $room) {
        echo $room->room_info_display() . '<br>';
    };

?>