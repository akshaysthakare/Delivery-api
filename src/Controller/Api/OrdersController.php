<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use Firebase\JWT\JWT;

class OrdersController extends AppController
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
    public function index()
    {
        $this->Crud->on('beforePaginate', function (\cake\Event\EventInterface $event) {
            $this->paginate['contain']=['OrderStatuses' , 'OrderTypes' ];
        });
        return $this->Crud->execute();
    }

}
