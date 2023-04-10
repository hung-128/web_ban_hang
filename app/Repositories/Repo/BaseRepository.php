<?php

namespace App\Repositories\Repo;

use App\Exceptions\AppException;
use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

abstract class BaseRepository implements EloquentRepositoryInterface
{
    protected Model $model;

    public function __construct()
    {
        $this->setModel();
    }

    /**
     * Get model
     *
     * @return string
     */
    abstract public function getModel(): string;

    /**
     * Set model
     *
     * @return $this
     */
    public function setModel(): self
    {
        $this->model = app()->make(
            $this->getModel()
        );

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAll(): mixed
    {
        return $this->model->all();
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function find(int $id): mixed
    {
        return $this->model->find($id);
    }

    /**
     * @param array $attributes
     *
     * @return mixed
     *
     * @throws AppException
     */
    public function create(array $attributes = [])
    {
        try {
            return $this->model->create($attributes);
        } catch (\Exception $exception) {
            throw new AppException($exception->getMessage());
        }
    }

    /**
     * @param int $id
     * @param array $attributes
     *
     * @return mixed
     *
     * @throws AppException
     */
    public function update(int $id, array $attributes = [])
    {
        try {
            $result = $this->model->find($id);
            $result->update($attributes);
            return $result->fresh();
        } catch (\Exception $exception) {
            throw new AppException($exception->getMessage());
        }
    }

    /**
     * @param int $id
     *
     * @return bool
     *
     * @throws AppException
     */
    public function delete(int $id): bool
    {
        try {
            $result = $this->find($id);
            $result->delete();
            return true;
        } catch (\Exception $exception) {
            throw new AppException($exception->getMessage());
        }
    }

    /**
     * @param array $attributes
     * @param array $value
     * @return mixed|void
     */
    public function updateOrCreate(array $attributes = [], array $value = [])
    {
        try {
            return $this->model->updateOrCreate($attributes, $value);
        } catch (QueryException $exception) {
        }
    }

    /**
     * @param array $data
     *
     * @return mixed
     *
     * @throws AppException
     */
    public function insert(array $data)
    {
        try {
            return $this->model->insert($data);
        } catch (\Exception $exception) {
            throw new AppException($exception->getMessage());
        }
    }

    /**
     * @param array $data
     *
     * @return mixed
     *
     * @throws AppException
     */
    public function upsert(array $data)
    {
        try {
            return $this->model->upsert($data, 'id');
        } catch (\Exception $exception) {
            throw new AppException($exception->getMessage());
        }
    }
}
