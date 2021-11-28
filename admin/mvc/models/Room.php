<?php

class Room extends Database
{
    function getLatesId()
    {
        $sql = "SELECT max(MA_LOAI_PHONG) as latestId FROM LOAI_PHONG";
        return $this->get_one($sql);
    }
}
