<?php 

function dd($value, $die = true)
{
    var_dump($value);
    if($die)
    exit;
}

function view($dir, $vars = [])
{
    $viewBuilder =  new \System\View\viewBuilder();
}