<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\BonExamen; 

class BonExamenRepository
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
        $this->model = app(BonExamen::class);
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
    public function makeStore($data): BonExamen{
        $bonexamen = new BonExamen($data);
        $bonexamen->save();
        return $bonexamen;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): BonExamen{
        $bonexamen = BonExamen::findOrFail($id);
        $bonexamen->update($data);
        return $bonexamen;
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
