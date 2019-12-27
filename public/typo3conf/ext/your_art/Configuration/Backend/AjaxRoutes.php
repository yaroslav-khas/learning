<?php
return [
    'update_record_status' => [
        'path' => '/status/update',
        'target' => \Khas\YourArt\Controller\Backend\AjaxController::class. '::updateStatus'
    ],
];