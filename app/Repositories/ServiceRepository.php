<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Service; 

class ServiceRepository
{
    use Repository;

    /**
     * The model being queried.
     *
     * @var Model
     */
    protected $model;
    

    /**
     * Constructor
     */
    public function __construct()
    {
        // setup the model
        $this->model = app(Service::class);
    }

    /**
     * Check if exists
     */
    public function ifExist($id)
    {
        return $this->find($id);
    }

    /**
     * Get an element
     */
    public function get($id)
    {
        return $this->findOrFail($id);
    }

    /**
     * To store model
     */
    public function makeStore($data): Service{
        $service = new Service($data);
        $service->save();
        return $service;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Service{
        $service = Service::findOrFail($id);
        $service->update($data);
        return $service;
    }

    /**
     * To delete model
     */
    public function makeDestroy($id)
    {
        return $this->findOrFail($id)->delete();
    }

    /**
     * To get all latest
     */
    public function getlatest()
    {
        return $this->latest()->get();
    }
}
