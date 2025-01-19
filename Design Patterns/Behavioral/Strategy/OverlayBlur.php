<?php

require_once('IOverlay.php');

class OverlayBlur implements IOverlay {
    public function Apply() {
        echo 'Applying blue overlay' . PHP_EOL;
    }
}