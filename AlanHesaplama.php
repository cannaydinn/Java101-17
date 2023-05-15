<?php
    class Sekil{
        public $kenar1;
        public $kenar2;
        public $kenar3;
        public $yukseklik;
    }

    class Dikdortgen extends Sekil{
        public function DikdortgenAlan($kenar1,$kenar2){
            return $kenar1 * $kenar2;
        }
        public function DikdortgenCevre($kenar1,$kenar2){
            return ((2 * $kenar1) + (2 * $kenar2));
        }
    }

    class Ucgen extends Sekil{
        public function UcgenAlan($kenar3,$yukseklik){
            return ($kenar3* $yukseklik) / 2;
        }
        public function UcgenCevre($kenar1,$kenar2,$kenar3){
            return $kenar1 + $kenar2 + $kenar3;
        }
    }

    class Kare extends Sekil{
        public function KareAlan($kenar1){
            return $kenar1 * $kenar1;
        }
        public function KareCevre($kenar1){
            return 4 * $kenar1;
        }
    }

    $dikdortgen = new Didortgen();
    echo "Dikdörtgen alanı: ".$dikdortgen->DikdortgenAlan(4,3);
    echo "<br>"; 
    echo "Dikdörtgen çevresi: ".$dikdortgen->DikdortgenCevre(4,3);
    echo "<br>";
    $ucgen = new Ucgen(); 
    echo "Üçgen alanı: ".$ucgen->UcgenAlan(4,3);
    echo "<br>";
    echo "Üçgen çevresi: ".$ucgen->UcgenCevre(3,4,5);
    echo "<br>";
    $kare = new Kare();
    echo "Kare alanı: ".$kare->KareAlan(4);
    echo "<br>";
    echo "Kare çevresi: ".$kare->KareCevre(4);
?>