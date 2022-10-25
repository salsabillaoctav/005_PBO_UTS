<?php 

require_once '../No2/No2interface.php';

class Airplane implements Flyer {
    public function takeOff() {
        return 'Helicopter lepas landas';
    }
    
    public function land() {
        return 'Helicopter mendarat';
    }

    public function fly() {
        return 'Helicopter dalam perjalanan';
    }
}

class Bird implements Flyer {
    public function takeOff() {
        return 'Elang mencari makan';
    }
    
    public function land() {
        return 'Elang kembali pulang';
    }

    public function fly() {
        return 'Elang terbang';
    }

    public function buildNest() {
        return 'Elang membuat sarang';
    }

    public function layEggs() {
        return 'Elang bertelur';
    }
}

class Superman implements Flyer {
    public function takeOff() {
        return 'superman mengejar batman';
    }
    
    public function land() {
        return 'superman melawan batman';
    }

    public function fly() {
        return 'superman melancarkan pukulan';
    }

    public function leapBuilding() {
        return 'batman terpental menabrak bangunan pencakar langit';
    }

    public function stopBullet() {
        return 'Polisi menembaki superman namun ditangkis';
    }
}

$airplane = new Airplane;
$bird = new Bird;
$superman = new Superman;