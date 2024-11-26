<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getDataFromCsv(storage_path('datasets/movies.csv'));
        $model = new Movie();
        foreach ($data as $row) {
            $model->create($row);
        }
    }

    private function getDataFromCsv(string $path): array
    {
        $file = fopen($path, 'r');
        $header = fgetcsv($file, separator: ';');
        $data = [];
        while ($row = fgetcsv($file, separator: ';')) {
            $data[] = array_combine($header, $row);
        }

        fclose($file);
        return $data;
    }
}
