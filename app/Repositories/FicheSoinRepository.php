<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\FicheSoin; 

class FicheSoinRepository
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
        $this->model = app(FicheSoin::class);
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
    public function makeStore($data): FicheSoin{
        $fichesoin = new FicheSoin($data);
        $fichesoin->save();
        return $fichesoin;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): FicheSoin{
        $fichesoin = FicheSoin::findOrFail($id);
        $fichesoin->update($data);
        return $fichesoin;
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
