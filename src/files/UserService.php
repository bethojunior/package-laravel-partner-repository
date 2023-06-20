<?php

namespace App\Services\User;

use App\Repositories\User\UserRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $repository;

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function all()
    {
        return $this->repository->getModel()::get();
    }

    /**
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function find(int $id)
    {
        return $this->repository->getModel()::where('id','=', $id)->with(['status','type'])->first();
    }

    /**
     * @param array $params
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     */
    public function create(array $params) : Model
    {
        $params['password'] = Hash::make($params['password']);
        $user = $this->repository->create($params);

        return $user;
    }

    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|null
     */
    public function update(array $data)
    {
        $this_ = $this->repository->getModel()::find($data['id']);
        $this_->update($data);

        return $this_;
    }


    /**
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function destroy(int $id)
    {
        $user = $this->repository->find($id);
        $user->delete();

        return $user;
    }


}
