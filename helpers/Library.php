<?php
function redirect($url)
{
    header('location:' . DOM . $url);
    return true;
}