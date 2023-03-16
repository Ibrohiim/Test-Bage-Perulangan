<?php

class Perulangan
{
    private $jumlah = 0;

    public function Hasil(int $angka)
    {
        if ($this->kelipatanTiga($angka) && $this->kelipatanLima($angka)) {
            return $this->hasilKelipatanTigaDanLima($angka);
        }
        if ($this->kelipatanTiga($angka)) {
            return $this->haislKelipatanTiga($angka);
        }
        if ($this->kelipatanLima($angka)) {
            return $this->hasilKelipatanLima($angka);
        }
    }
    private function hasilKelipatanTigaDanLima()
    {
        $this->jumlah++;
        if ($this->jumlah <= 5) {
            return "Bage Concat";
        }
    }
    private function haislKelipatanTiga()
    {
        if ($this->jumlah >= 2) {
            return "Concat";
        }
        return "Bage";
    }
    private function hasilKelipatanLima()
    {
        if ($this->jumlah >= 2) {
            return "Bage";
        }
        return "Concat";
    }

    private function kelipatanTiga(int $angka)
    {
        return $angka % 3 === 0;
    }
    private function kelipatanLima(int $angka)
    {
        return $angka % 5 === 0;
    }
    public function Jumlah()
    {
        return $this->jumlah;
    }
}