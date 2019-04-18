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
          'subjectName'=>"Storia dell'arte contemporanea",
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>1
      ]);

      App\Subject::create([
          'subjectName'=>"Teoria e analisi del cinema",
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>1
      ]);

      App\Subject::create([
          'subjectName'=>"Informazioni per l'arte: Mezzi e Metodi",
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>1
      ]);

      App\Subject::create([
          'subjectName'=>"TPPF",
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>1
      ]);

      App\Subject::create([
          'subjectName'=>"Computer Graphic 1",
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>1
      ]);

      App\Subject::create([
          'subjectName'=>'Video Editing',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>1
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione Multimediale 1',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>1
      ]);

      App\Subject::create([
          'subjectName'=>'Video Editing',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>1
      ]);


      App\Subject::create([
          'subjectName'=>'Grafica Multimediale',
          'credits'=>4,
          'totHours'=>60,
          'class_id'=>1
      ]);

      App\Subject::create([
          'subjectName'=>"Semiotica dell'arte",
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>1
      ]);

      App\Subject::create([
          'subjectName'=>"Antropologia Culturale - Cultura pop",
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>1
      ]);



      App\Subject::create([
          'subjectName'=>'Computer Graphic 2',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>2
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione Multimediale 2',
          'credits'=>10,
          'totHours'=>100,
          'class_id'=>2
      ]);

      App\Subject::create([
          'subjectName'=>'Fenomenologia delle arti contemporanee',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>2
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche dei nuovi media integrati',
          'credits'=>6,
          'totHours'=>70,
          'class_id'=>2
      ]);

      App\Subject::create([
          'subjectName'=>'Estetica dei new media',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>2
      ]);

      App\Subject::create([
          'subjectName'=>'Sistemi interattivi 1',
          'credits'=>10,
          'totHours'=>100,
          'class_id'=>2
      ]);

      App\Subject::create([
          'subjectName'=>'Net Marketing',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>2
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche di modellazione digitale 3D',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>2
      ]);

      App\Subject::create([
          'subjectName'=>'Sociologia della comunicazione',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>2
      ]);


      App\Subject::create([
          'subjectName'=>'Teoria e metodo dei Mass Media',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>3
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione multimediale 3',
          'credits'=>10,
          'totHours'=>100,
          'class_id'=>3
      ]);

      App\Subject::create([
          'subjectName'=>'Sistemi interattivi 2',
          'credits'=>10,
          'totHours'=>100,
          'class_id'=>3
      ]);

      App\Subject::create([
          'subjectName'=>'Linguaggi multimediali 2',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>3
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione multimediale 4',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>3
      ]);



      App\Subject::create([
          'subjectName'=>'Motion Graphics',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>5
      ]);
    }
}
