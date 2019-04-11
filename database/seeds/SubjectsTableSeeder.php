<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      App\Subject::create([
          'subjectName'=>'Programmazione 2',
          'credits'=>10,
          'totHours'=>80
      ]);

      App\Subject::create([
          'subjectName'=>'Linguaggi Multimediali',
          'credits'=>6,
          'totHours'=>40
      ]);

      App\Subject::create([
          'subjectName'=>'Video Editing',
          'credits'=>4,
          'totHours'=>25
      ]);

      App\Subject::create([
          'subjectName'=>'Motion Graphics',
          'credits'=>4,
          'totHours'=>20
      ]);
    }
}
