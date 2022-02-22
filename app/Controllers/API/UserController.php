<?php

namespace App\Controllers\API;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceContoller
{
    public function __contruct(){
        $this->model->$this->setModel(new UserModel());
    }
    public function index()
    {
        $users = $this->model->findAll();
        return $this->respond($users);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        try {
            $user = this->request->getJSON();
            if($this->model->insert($user)):
                return $this->respondCreated($user);
            else: return $this->failValidationError($this->model->validation->listErrors());
            endif;
        } catch (\Exception $th) {
           return $this->failServerError('Ha ocurrido un error en el servidor');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}

