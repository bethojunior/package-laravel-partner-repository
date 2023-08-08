<?php

namespace App\Contracts\Service;

abstract class AbstractService
{

    protected $repository;

    /**
     * @param $repository
     * @return void
     */
    public function setRepository($repository): void
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function getRepository(): mixed
    {
        return $this->repository;
    }

    /**
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    public function create(array $params)
    {
        try{
            $item = $this->repository->create($params);
        }catch (\Exception $exception)
        {
            throw new \Exception($exception->getMessage());
        }

        return $item;
    }

    /**
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    public function update(array $params)
    {
        try{
            $item = $this->repository->find($params['id']);
            $item->update($params);
        }catch (\Exception $exception)
        {
            throw new \Exception($exception->getMessage());
        }

        return $item;
    }

    /**
     * @param int $id
     * @return mixed
     * @throws \Exception
     */
    public function destroy(int $id)
    {
        try{
            $item = $this->repository->find($id);
            $item->delete($id);
        }catch (\Exception $exception)
        {
            throw new \Exception($exception->getMessage());
        }

        return $item;
    }

}
