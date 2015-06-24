<?php

namespace Spatie\SatisTest;

use DB;
use Faker\Factory;
use File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\MediaLibraryModel\MediaLibraryModelInterface;
use Spatie\MediaLibrary\Models\Media;
use Spatie\SuperSeeder\Parsers\YamlParser;
use Spatie\SuperSeeder\SuperSeeder;

class SatisTest extends Seeder
{
    public static function sayHello()
    {
        return 'hello';
    }
}
