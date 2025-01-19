<?php

require_once('IOverlay.php');

class OverlayBlackAndWhite implements IOverlay {
    public function Apply() {
        echo 'Applying black and white overlay' . PHP_EOL;
    }
}