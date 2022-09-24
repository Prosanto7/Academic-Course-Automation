<?php
session_start();

function restoreSessionIfAvailable()
{
    if (!isset($_SESSION['user_id'])) {
        if (isset($_COOKIE['academic-course-automation-data'])) {
            $data = json_decode($_COOKIE['academic-course-automation-data']);

            $id = $data->id;
            $hash = $data->hash;

            $db = Database::getInstance();

            $db->query('select * from users where user_id=:user_id and pass_hash=:hash');
            $db->bind(':user_id', $id);
            $db->bind(':hash', $hash);

            $user = $db->single();

            if ($user) {
                $_SESSION['user_id'] = $user->user_id;
                $_SESSION['user_name'] = $user->name;
                $_SESSION['is_admin'] = $user->isadmin;
            }
        }
    }
}


function isLoggedIn()
{
    if (isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}

function security()
{
    if (!isLoggedIn()) {
        redirect('users/index');
    }
}

function flash($name = '', $message = '', $class = 'alert alert-success')
{
    if (!empty($name)) {

        if (!empty($message) && empty($_SESSION[$name])) {

            $_SESSION[$name] = $message;
            $_SESSION[$name . '_class'] = $class;
        } elseif (empty($message) && !empty($_SESSION[$name])) {
            $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : '';
            echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';

            unset($_SESSION[$name]);
            unset($_SESSION[$name . '_class']);
        }
    }
}

