<?php

if (!Application::getInstance()->getAuthService()->isAuth()) {
    $result = new stdclass();
    $result->success = false;
    http_response_code(401);
    echo json_encode($result);
    die();
}

