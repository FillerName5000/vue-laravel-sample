<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeederBase extends Seeder
{
    /**
     * Run the database seeds.
     */

    protected $datasetName;
    protected $newModel;

   /*  public function __construct($datasetName, $newModel){
        $this->datasetName = $datasetName;
        $this->newModel = $newModel;
    }

    public function run(): void
    {
        $data = $this->getDataFromCsv(storage_path('database\datasets\$datasetName.csv'));
        foreach ($data as $row) {
            $newModel->create($row);
        }
    }

    private function getDataFromCsv(string $filename): array
    {
        $data = [];
        $file = fopen($filename, 'r');
        while (($line = fgetcsv($file)) !== false) {
            $data[] = $line;
        }
        fclose($file);
        return $data;
    } */
}
