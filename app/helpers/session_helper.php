<?php 
session_start();

// Flash message helper
// EXAMPLE USAGE - flash('register_success, 'You are now registered', 'alert alert-danger');
// DISPLAY IN VIEW - echo flash('register_success');
function flash($name = '' , $message = '', $class = 'alert alert-light border border-success') {
    if (!empty($name)) {
        if(!empty($message) && empty($_SESSION[$name])) {
            if(!empty($_SESSION[$name])) {
                unset($_SESSION[$name]);
            }

            if(!empty($_SESSION[$name . '_class'])) {
                unset($_SESSION[$name . '_class']);
            }

            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        } else if (empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo '<div class = "' . $class . '" id = "msg-flash" role="alert">' . $_SESSION[$name] . '</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class ']);
        }

       
    }
}

