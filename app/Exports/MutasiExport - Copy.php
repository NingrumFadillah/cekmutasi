<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\User;
use Maatwebsite\Excel\Concerns\FromArray;
class MutasiExport implements FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */
  
      
protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function array(): array
    {
        return $this->data;
    }

   
}
