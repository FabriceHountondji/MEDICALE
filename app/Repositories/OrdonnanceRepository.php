<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Ordonnance; 

class OrdonnanceRepository
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
        $this->model = app(Ordonnance::class);
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
    public function makeStore($data): Ordonnance{
        $ordonnance = new Ordonnance($data);
        $ordonnance->save();
        return $ordonnance;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Ordonnance{
        $ordonnance = Ordonnance::findOrFail($id);
        $ordonnance->update($data);
        return $ordonnance;
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
