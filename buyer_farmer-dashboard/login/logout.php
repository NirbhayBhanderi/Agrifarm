<?php
ini_set('session.gc_maxlifetime', 5400);
ini_set('session.cookie_lifetime', 5400);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Destroy all session data
$_SESSION = array();

if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
    );
}

session_destroy();

// Prevent caching on all browsers
header('Cache-Control: no-store, no-cache, no-transform, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Expires: 0');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Surrogate-Control: no-store');

header('Location: Login.html');
exit();
?>
