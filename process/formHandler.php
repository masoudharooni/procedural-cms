<?php
if (isset($_GET['contactUs']) and $_GET['contactUs'] == 1 and in_array($_GET['contactUs'], [0, 1])) {
    header('location:http://localhost/procedural-cms/?contactUs=1');
} elseif (isset($_GET['contactUs']) and $_GET['contactUs'] == 0 and in_array($_GET['contactUs'], [0, 1])) {
    header('location:http://localhost/procedural-cms/?contactUs=0');
}
