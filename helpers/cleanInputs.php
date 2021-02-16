<?php

function CleanInputs($input)
{
    $regex = "/['<>%_´]/i";
    return preg_replace($regex, "", $input);
}