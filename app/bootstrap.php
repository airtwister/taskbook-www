<?php
require_once "../app/Autoloader.php";

try {
    $Router = new \Routes\Router();
    $Router->handle();
} catch (\Exceptions\BadUrlException $e) {
    http_response_code($e->getCode());
    $View = new \View\Errors\Page404();
    $View->render();
}  catch (\Exception $e) {
    echo "Execution failed: " . $e->getMessage();
}