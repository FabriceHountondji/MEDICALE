<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Chambre; 

class ChambreRepository
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
        $this->model = app(Chambre::class);
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
    public function makeStore($data): Chambre{
        $chambre = new Chambre($data);
        $chambre->save();
        return $chambre;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Chambre{
        $chambre = Chambre::findOrFail($id);
        $chambre->update($data);
        return $chambre;
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
