<?php
/**
 * Test repository.
 */

namespace App\Repository;

/**
 * Class TestRepository.
 */
class TestRepository
{
    /**
     * Data.
     *
     * @var array
     */
    private $data = [
        1 => [
            'id' => 1,
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            'tags' => [
                'Sed',
                'convallis',
                'nibh',
            ],
        ],
        2 => [
            'id' => 2,
            'title' => 'Etiam diam ipsum, dignissim eget suscipit nec, faucibus accumsan felis',
            'tags' => [
                'Phasellus',
                'vestibulum',
                'tortor',
            ],
        ],
        3 => [
            'id' => 3,
            'title' => 'Nullam eget dui blandit, scelerisque lacus a, sagittis nibh',
            'tags' => [
                'Curabitur',
                'consectetur',
                'porttitor',
            ],
        ],
    ];

    /**
     * Find all.
     *
     * @return array Result
     */
    public function findAll(): array
    {
        return $this->data;
    }

    /**
     * Find one by Id.
     *
     * @param int $id Id
     *
     * @return array|null Result
     */
    public function findById(int $id): array
    {
        return isset($this->data[$id]) && count($this->data)
            ? $this->data[$id] : null;
    }
}