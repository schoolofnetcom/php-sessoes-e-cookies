<?php

session_save_path(__DIR__.'\sessions');

session_start();

$_SESSION['meunome'] = 'Erik';
