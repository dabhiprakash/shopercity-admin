<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Import;
use App\Models\Manufacturer;
use App\Models\ModelNumber;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Contracts\Queue\ShouldQueue;


class ModelNumberImport implements ToModel, WithHeadingRow, ShouldQueue, WithChunkReading
{
    /**
    * @param Collection $collection
    */

    protected $csvUploadId;

    public function __construct($csvUploadId)
    {
        $this->csvUploadId = $csvUploadId;
    }

    public function model(array $row)
    {
        Import::where('id', $this->csvUploadId)->increment('processed_rows');
        $manufactur = Manufacturer::where('name', $row['manufacturename'])->first();
        if($manufactur) {
            return new ModelNumber([
                'manufacturer' => $manufactur->id,
                'model_number' => $row['modelnumber'],
                'description' => $row['description']
            ]);
        }

    }

    public function chunkSize(): int
    {
        return 1000; // process 1000 rows per chunk
    }

}
