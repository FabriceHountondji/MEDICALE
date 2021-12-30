<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Categorie; 

class CategorieRepository
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
        $this->model = app(Categorie::class);
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
    public function makeStore($data): Categorie{
        $categorie = new Categorie($data);
        $categorie->save();
        return $categorie;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Categorie{
        $categorie = Categorie::findOrFail($id);
        $categorie->update($data);
        return $categorie;
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
