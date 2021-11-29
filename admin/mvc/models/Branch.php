<?php
class Branch extends Database
{
    function getAllBranch()
    {
        $sql = "SELECT * FROM CHI_NHANH";
        return $this->query($sql);
    }
    function getStatistic($id, $year)
    {
        if (empty($year)) {
            $year = 0;
        }
        $sql = "call ThongKeLuotKhach('{$id}', {$year})";
        return $this->get_list($sql);
    }
}
