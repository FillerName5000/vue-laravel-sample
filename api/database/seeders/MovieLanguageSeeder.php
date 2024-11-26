<?php

namespace Database\Seeders;

use App\Models\MovieLanguage;
use Illuminate\Database\Seeder;

class MovieLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getDataFromCsv(storage_path('datasets/movies_languages.csv'));
        $model = new MovieLanguage();
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
