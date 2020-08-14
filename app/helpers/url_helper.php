<?php
// Simple page redirect
function redirect($page)
{
    //var_dump("redirect", $page);
    header('location: ' . URLROOT1 . '/' . $page);
}
