<?php

class Room extends Database
{
    function getLatesId()
    {
        $sql = "SELECT max(MA_LOAI_PHONG) as latestId from LOAI_PHONG;
        ";
        return $this->get_one($sql);
    }
    function getAllSupp()
    {
        $sql = "SELECT * FROM LOAI_VAT_TU";
        return $this->get_list($sql);
    }
    function addRoomType($name, $square, $guest, $description)
    {
        $sql = "INSERT INTO LOAI_PHONG(TEN_LOAI_PHONG, DIEN_TICH, SO_KHACH, MO_TA_KHAC) 
        VALUES ('{$name}', {$square},{$guest}, '{$description}')";
        $this->query($sql);
    }
    function addBedInfo($id, $size, $quantity)
    {
        $sql = "INSERT INTO THONG_TIN_GIUONG(MA_LOAI_PHONG, KICH_THUOC, SO_LUONG) VALUES({$id},{$size} , {$quantity})";
        $this->query($sql);
    }
    function addSupp($supp, $id)
    {
        $sql = "INSERT INTO LOAI_VAT_TU_TRONG_LOAI_PHONG(MA_LOAI_VAT_TU, MA_LOAI_PHONG, SO_LUONG) VALUES ";
        foreach ($supp as $key => $value) {
            $temp = 1;
            if (!empty($value['quantity'])) {
                $temp = $value['quantity'];
            }
            $sql .= "('" . $value['id'] . "',";
            $sql .= "'" . $id . "',";
            $sql .= "'" . $temp . "'),";
        }
        $sql = substr($sql, 0, -1);
        $sql .= ";";
        $this->query($sql);
    }
}
