<?php

require_once('IOverlay.php');

class OverlayNone implements IOverlay {
    public function Apply() {
        echo 'Not applying an overlay' . PHP_EOL;
    }
}