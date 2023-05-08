<?php

namespace model;

class Factory
{
    private int $id = 0;
    private String $factory_adress = '';
    private String $factory_city = '';
    private String $factory_country = '';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getFactoryAdress(): string
    {
        return $this->factory_adress;
    }

    /**
     * @param String $factory_adress
     */
    public function setFactoryAdress(string $factory_adress): void
    {
        $this->factory_adress = $factory_adress;
    }

    /**
     * @return String
     */
    public function getFactoryCity(): string
    {
        return $this->factory_city;
    }

    /**
     * @param String $factory_city
     */
    public function setFactoryCity(string $factory_city): void
    {
        $this->factory_city = $factory_city;
    }

    /**
     * @return String
     */
    public function getFactoryCountry(): string
    {
        return $this->factory_country;
    }

    /**
     * @param String $factory_country
     */
    public function setFactoryCountry(string $factory_country): void
    {
        $this->factory_country = $factory_country;
    }
}