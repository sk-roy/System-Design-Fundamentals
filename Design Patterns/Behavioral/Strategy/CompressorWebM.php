<?php

require_once('ICompressor.php');

class CompressorWebM implements ICompressor {
    public function Compress() {
        echo 'Compressing video using MOV' . PHP_EOL;
    }
}