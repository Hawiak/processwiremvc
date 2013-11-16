<?php
$mvc = new MvcModule();
$mvc->set_controller(new $controller);
$mvc->set_action($action);
echo $mvc->render();


