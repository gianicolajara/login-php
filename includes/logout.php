<?php

include_once './classSession.php';

$session = new SessionUser();

$session->closeSession();

header('location: ../index.php');