<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\WriterMovie;

class WriterMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getDataFromCsv(storage_path('datasets/writers_movies.csv'));
        $model = new WriterMovie();
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
