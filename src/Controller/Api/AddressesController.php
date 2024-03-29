<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use Firebase\JWT\JWT;

class AddressesController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sortWhitelist' => [
            'id', 'name'
        ]
    ];

    public function initialize(): void
    {
        parent::initialize();

//        $this->Authentication->allowUnauthenticated(['index']);

    }

}
