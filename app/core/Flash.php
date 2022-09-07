<?php

namespace App\Core;

class Flash
{
    public static function setFlash($message, $type): void
    {
        $_SESSION['alert'] = [
            'type' => $type,
            'message' => $message
        ];
    }
    public static function getFlash()
    {
        if (isset($_SESSION['alert'])) {
            if ($_SESSION['alert']['type'] == 'success') {
                echo ' <div class="alert alert-success alert-dismissible" role="alert">' . $_SESSION['alert']['message'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            } else {
                echo ' <div class="alert alert-danger alert-dismissible" role="alert">' . $_SESSION['alert']['message'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            }
            unset($_SESSION['alert']);
        }
    }
}