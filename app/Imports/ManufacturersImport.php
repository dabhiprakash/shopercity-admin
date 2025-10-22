<?php

namespace App\Imports;

use App\Models\Manufacturer;
use App\Models\Import;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Contracts\Queue\ShouldQueue;

class ManufacturersImport implements ToModel, WithHeadingRow, ShouldQueue, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    protected $csvUploadId;

    public function __construct($csvUploadId)
    {
        $this->csvUploadId = $csvUploadId;
    }

    public function model(array $row)
    {
        Import::where('id', $this->csvUploadId)->increment('processed_rows');
        return new Manufacturer([
            'name' => $row['name']
        ]);
    }

    public function chunkSize(): int
    {
        return 1000; // process 1000 rows per chunk
    }

}
