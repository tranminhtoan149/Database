<?php

class Client extends Database
{
    function getAllClientInfo()
    {
        $sql = "SELECT MA_KHACH_HANG, CMND, HO_TEN, DIEN_THOAI, EMAIL, USERNAME, DIEM, LOAI from KHACH_HANG;";
        return $this->get_list($sql);
    }
    function searchClient($keyword)
    {
        $sql = "SELECT MA_KHACH_HANG, CMND, HO_TEN, DIEN_THOAI, EMAIL, USERNAME, DIEM, LOAI from KHACH_HANG WHERE HO_TEN like '%{$keyword}%'";
        return $this->get_list($sql);
    }
    function getDetailClient($id)
    {
        $sql = "SELECT * from DON_DAT_PHONG where MA_KHACH_HANG={$id} and NGAY_GIO_DAT > NOW()";
        return $this->get_list($sql);
    }
    function getClient($id)
    {
        $sql = "SELECT ";
    }
}
