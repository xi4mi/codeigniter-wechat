<?php

class Shmcache
{
    private $shm_key;

    public function __construct ($shm_key) {
        $this->shm_key = $shm_key;
    }

    public function get()
    {
        $shmid = shmop_open($this->shm_key, 'a', 0, 0);
        if (false === $shmid)
            return false;
        $value = shmop_read($shmid, 0,shmop_size($shmid));
        if (false === $value)
            return false;

        shmop_close($shmid);
        return unserialize($value);
    }

    public function set($val)
    {
        $shmid = shmop_open($this->shm_key, 'c', 0777, 40960);
        $res = shmop_write($shmid, serialize($val), 0);
        shmop_close($shmid);
        return $res;
    }

    public function del()
    {
        $shmid = shmop_open($this->shm_key, 'w', 0777, 40960);
        if(false === $shmid)
            return false;

        $res = shmop_delete($shmid);
        shmop_close($shmid);
        return $res;
    }

}
