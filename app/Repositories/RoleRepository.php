<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Role; 

class RoleRepository
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
        $this->model = app(Role::class);
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
    public function makeStore($data): Role{
        $role = new Role($data);
        $role->save();
        return $role;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Role{
        $role = Role::findOrFail($id);
        $role->update($data);
        return $role;
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
