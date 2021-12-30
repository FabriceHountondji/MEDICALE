<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Facture; 

class FactureRepository
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
        $this->model = app(Facture::class);
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
    public function makeStore($data): Facture{
        $facture = new Facture($data);
        $facture->save();
        return $facture;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Facture{
        $facture = Facture::findOrFail($id);
        $facture->update($data);
        return $facture;
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
