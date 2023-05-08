<?php

namespace model;

class Bracelet
{
    private int $bracelet_id = 0;

    /**
     * @return int
     */
    public function getBraceletId(): int
    {
        return $this->bracelet_id;
    }

    /**
     * @param int $bracelet_id
     */
    public function setBraceletId(int $bracelet_id): void
    {
        $this->bracelet_id = $bracelet_id;
    }


}