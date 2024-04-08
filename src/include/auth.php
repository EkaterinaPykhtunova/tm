<?php

if (!Application::getInstance()->getAuthService()->isAuth())
header('location: /login');
