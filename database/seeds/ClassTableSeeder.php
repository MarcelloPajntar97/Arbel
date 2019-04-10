<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      App\ClassModel::create([
          'course'=>'Media Design',
          'year'=>1
      ]);

      App\ClassModel::create([
          'course'=>'Media Design',
          'year'=>2
      ]);
      App\ClassModel::create([
          'course'=>'Media Design',
          'year'=>3
      ]);


      App\ClassModel::create([
          'course'=>'Video Design',
          'year'=>1,
          'section'=>'A'
      ]);
      App\ClassModel::create([
          'course'=>'Video Design',
          'year'=>2,
          'section'=>'A'
      ]);
      App\ClassModel::create([
          'course'=>'Video Design',
          'year'=>3,
          'section'=>'A'
      ]);


      App\ClassModel::create([
          'course'=>'Video Design',
          'year'=>1,
          'section'=>'B'
      ]);
      App\ClassModel::create([
          'course'=>'Video Design',
          'year'=>2,
          'section'=>'B'
      ]);
      App\ClassModel::create([
          'course'=>'Video Design',
          'year'=>3,
          'section'=>'B'
      ]);


      App\ClassModel::create([
          'course'=>'Sound Design',
          'year'=>1
      ]);
      App\ClassModel::create([
          'course'=>'Sound Design',
          'year'=>2
      ]);
      App\ClassModel::create([
          'course'=>'Sound Design',
          'year'=>3
      ]);


      App\ClassModel::create([
          'course'=>'Graphic Design',
          'year'=>1
      ]);
      App\ClassModel::create([
          'course'=>'Graphic Design',
          'year'=>2
      ]);
      App\ClassModel::create([
          'course'=>'Graphic Design',
          'year'=>3
      ]);


      App\ClassModel::create([
          'course'=>'Illustrazione',
          'year'=>1
      ]);
      App\ClassModel::create([
          'course'=>'Illustrazione',
          'year'=>2
      ]);
      App\ClassModel::create([
          'course'=>'Illustrazione',
          'year'=>3
      ]);


      App\ClassModel::create([
          'course'=>'Fotografia',
          'year'=>1
      ]);
      App\ClassModel::create([
          'course'=>'Fotografia',
          'year'=>2
      ]);
      App\ClassModel::create([
          'course'=>'Fotografia',
          'year'=>3
      ]);


      App\ClassModel::create([
          'course'=>'Fashion Design',
          'year'=>1
      ]);
      App\ClassModel::create([
          'course'=>'Fashion Design',
          'year'=>2
      ]);
      App\ClassModel::create([
          'course'=>'Fashion Design',
          'year'=>3
      ]);


      App\ClassModel::create([
          'course'=>'Comunicazione',
          'year'=>1
      ]);
      App\ClassModel::create([
          'course'=>'Comunicazione',
          'year'=>2
      ]);
      App\ClassModel::create([
          'course'=>'Comunicazione',
          'year'=>3
      ]);


      App\ClassModel::create([
          'course'=>'Interior Design',
          'year'=>1
      ]);
      App\ClassModel::create([
          'course'=>'Interior Design',
          'year'=>2
      ]);
      App\ClassModel::create([
          'course'=>'Interior Design',
          'year'=>3
      ]);


      App\ClassModel::create([
          'course'=>'Product Design',
          'year'=>1
      ]);
      App\ClassModel::create([
          'course'=>'Product Design',
          'year'=>2
      ]);
      App\ClassModel::create([
          'course'=>'Product Design',
          'year'=>3
      ]);


      App\ClassModel::create([
          'course'=>'CG Animation',
          'year'=>1
      ]);
      App\ClassModel::create([
          'course'=>'CG Animation',
          'year'=>2
      ]);
      App\ClassModel::create([
          'course'=>'CG Animation',
          'year'=>3
      ]);

    }
}
