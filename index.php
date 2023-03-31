<?php

require __DIR__ . '/vendor/autoload.php';

app()->get('/', function () {
	response()->page('./welcome.html');
});

app()->run();
