<?php

function redirect($path) {
    header('location:' . URL_PROJECT . $path);
}