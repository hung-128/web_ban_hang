<?php

namespace App\Repositories;

interface EloquentRepositoryInterface
{
    /**
     * Get all
     *
     * @return mixed
     */
    public function getAll();

    /**
     * Get one
     *
     * @param int $id
     * @return mixed
     */
    public function find(int $id);

    /**
     * Create
     *
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes = []);

    /**
     * Update
     *
     * @param int $id
     * @param array $attributes
     * @return mixed
     */
    public function update(int $id, array $attributes = []);

    /**
     * Delete
     *
     * @param int $id
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param array $attributes
     * @param array $values
     * @return mixed
     */
    public function updateOrCreate(array $attributes = [], array $values = []);
}
