<?php

namespace model;

class Company
{
    private int $company_id = 0;
    private String $company_name = '';
    private int $factory = 0;

    /**
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->company_id;
    }

    /**
     * @param int $company_id
     */
    public function setCompanyId(int $company_id): void
    {
        $this->company_id = $company_id;
    }

    /**
     * @return String
     */
    public function getCompanyName(): string
    {
        return $this->company_name;
    }

    /**
     * @param String $company_name
     */
    public function setCompanyName(string $company_name): void
    {
        $this->company_name = $company_name;
    }

    /**
     * @return int
     */
    public function getFactory(): int
    {
        return $this->factory;
    }

    /**
     * @param int $factory
     */
    public function setFactory(int $factory): void
    {
        $this->factory = $factory;
    }


}