<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Examen; 

class ExamenRepository
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
        $this->model = app(Examen::class);
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
    public function makeStore($data): Examen{
        $examen = new Examen($data);
        $examen->save();
        return $examen;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Examen{
        $examen = Examen::findOrFail($id);
        $examen->update($data);
        return $examen;
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
