<?php

require_once('ICompressor.php');

class CompressorMOV implements ICompressor {
    public function Compress() {
        echo 'Compressing video using MOV' . PHP_EOL;
    }
}