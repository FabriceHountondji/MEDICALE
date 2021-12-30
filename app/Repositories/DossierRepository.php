<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Dossier; 

class DossierRepository
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
        $this->model = app(Dossier::class);
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
    public function makeStore($data): Dossier{
        $dossier = new Dossier($data);
        $dossier->save();
        return $dossier;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Dossier{
        $dossier = Dossier::findOrFail($id);
        $dossier->update($data);
        return $dossier;
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
