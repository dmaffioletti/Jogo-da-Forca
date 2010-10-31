<?php
    
    include __DIR__.'/PhpDescribe/lib/PhpDescribe/Runner.php';
    echo PhpDescribe\Runner::build()
        ->addListener(new \PhpDescribe\EventListener\DisplayCodeListener())
        ->addListener(new \PhpDescribe\EventListener\RenameListener())
        ->setSpec('forca')
        ->runAndReport( $_REQUEST );