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

      //Video Design Subjects

      //Video Design 1A id 4

      App\Subject::create([
          'subjectName'=>'Storia dell Arte Contemporanea',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>4
      ]);

      App\Subject::create([
          'subjectName'=>'Teoria e Analisi del Cinema e dell\'Audiovisivo',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>4
      ]);

      App\Subject::create([
          'subjectName'=>'Informazione per l\'Arte: Mezzi e Metodi' ,
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>4
      ]);

      App\Subject::create([
          'subjectName'=>'Elaborazione digitale dell\'Immagine' ,
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>4
      ]);

      App\Subject::create([
          'subjectName'=>'TTPF' ,
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>4
      ]);

      App\Subject::create([
          'subjectName'=>'Video Editing 1' ,
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>4
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione Multimediale 1' ,
          'credits'=>12,
          'totHours'=>120,
          'class_id'=>4
      ]);

      App\Subject::create([
          'subjectName'=>'Semiotica dell\'Arte' ,
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>4
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche di Produzione Video Teatro' ,
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>4
      ]);

      App\Subject::create([
          'subjectName'=>'Antropologia Culturale: Storia della Cultura Pop' ,
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>4
      ]);

      //Video Design 1B id 7

      App\Subject::create([
          'subjectName'=>'Storia dell Arte Contemporanea',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>7
      ]);

      App\Subject::create([
          'subjectName'=>'Teoria e Analisi del Cinema e dell\'Audiovisivo',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>7
      ]);

      App\Subject::create([
          'subjectName'=>'Informazione per l\'Arte: Mezzi e Metodi' ,
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>7
      ]);

      App\Subject::create([
          'subjectName'=>'Elaborazione digitale dell\'Immagine' ,
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>7
      ]);

      App\Subject::create([
          'subjectName'=>'TTPF' ,
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>7
      ]);

      App\Subject::create([
          'subjectName'=>'Video Editing 1' ,
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>7
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione Multimediale 1' ,
          'credits'=>12,
          'totHours'=>120,
          'class_id'=>7
      ]);

      App\Subject::create([
          'subjectName'=>'Semiotica dell\'Arte' ,
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>7
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche di Produzione Video Teatro' ,
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>7
      ]);

      App\Subject::create([
          'subjectName'=>'Antropologia Culturale: Storia della Cultura Pop' ,
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>7
      ]);

      //Video Design 2A id 5

      App\Subject::create([
          'subjectName'=>'Regia 1',
          'credits'=>12,
          'totHours'=>120,
          'class_id'=>5
      ]);

      App\Subject::create([
          'subjectName'=>'Teoria e Analisi del Cinema e dell\'Audiovisivo',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>5
      ]);

      App\Subject::create([
          'subjectName'=>'Fenomenologia delle Arti contemporanee' ,
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>5
      ]);

      App\Subject::create([
          'subjectName'=>'Video Editing 2' ,
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>5
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione Multimediale 2' ,
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>5
      ]);

      App\Subject::create([
          'subjectName'=>'Sound Design' ,
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>5
      ]);

      App\Subject::create([
          'subjectName'=>'Sociologia della Comunicazione' ,
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>5
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione Multimediale 3' ,
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>5
      ]);

      App\Subject::create([
          'subjectName'=>'Installazioni Multimediali' ,
          'credits'=>4,
          'totHours'=>50,
          'class_id'=>5
      ]);

      //Video Design 2B id 8

      App\Subject::create([
          'subjectName'=>'Regia 1',
          'credits'=>12,
          'totHours'=>120,
          'class_id'=>8
      ]);

      App\Subject::create([
          'subjectName'=>'Teoria e Analisi del Cinema e dell\'Audiovisivo',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>8
      ]);

      App\Subject::create([
          'subjectName'=>'Fenomenologia delle Arti contemporanee' ,
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>8
      ]);

      App\Subject::create([
          'subjectName'=>'Video Editing 2' ,
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>8
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione Multimediale 2' ,
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>8
      ]);

      App\Subject::create([
          'subjectName'=>'Sound Design' ,
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>8
      ]);

      App\Subject::create([
          'subjectName'=>'Sociologia della Comunicazione' ,
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>8
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione Multimediale 3' ,
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>8
      ]);

      App\Subject::create([
          'subjectName'=>'Installazioni Multimediali' ,
          'credits'=>4,
          'totHours'=>50,
          'class_id'=>8
      ]);

      //Video Design 3A id 6

      App\Subject::create([
          'subjectName'=>'Teoria e Metodo dei Mass Media',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>6
      ]);

      App\Subject::create([
          'subjectName'=>'Regia 2',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>6
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche dei Nuovi Media Integrati' ,
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>6
      ]);

      App\Subject::create([
          'subjectName'=>'Art Direction' ,
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>6
      ]);

      App\Subject::create([
          'subjectName'=>'Elaborazione Digitale dell\'Immagine 2' ,
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>6
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione Multimediale 4' ,
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>6
      ]);

      //Video Design 3B id 9

      App\Subject::create([
          'subjectName'=>'Teoria e Metodo dei Mass Media',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>9
      ]);

      App\Subject::create([
          'subjectName'=>'Regia 2',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>9
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche dei Nuovi Media Integrati' ,
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>9
      ]);

      App\Subject::create([
          'subjectName'=>'Art Direction' ,
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>9
      ]);

      App\Subject::create([
          'subjectName'=>'Elaborazione Digitale dell\'Immagine 2' ,
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>9
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione Multimediale 4' ,
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>9
      ]);

      //Sound Design

      App\Subject::create([
          'subjectName'=>'Storia dell\'arte contemporanea',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'Teoria e analisi del cinema',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'Tecnologie e applicazioni digitali',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'Informazione per l\'arte: mezzi e metodi',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'TPPF 1',
          'credits'=>4,
          'totHours'=>36,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche di ripresa',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'Sound Design 1',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'Audio e Mixaggio 1',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'Semiotica dell\'arte',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'Storia della musica contemporanea 1',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'Antropologia culturale - cultura pop',
          'credits'=>2,
          'totHours'=>30,
          'class_id'=>10
      ]);

      App\Subject::create([
          'subjectName'=>'Acustica',
          'credits'=>2,
          'totHours'=>16,
          'class_id'=>10
      ]);


      App\Subject::create([
          'subjectName'=>'TPPF 2',
          'credits'=>6,
          'totHours'=>45,
          'class_id'=>11
      ]);

      App\Subject::create([
          'subjectName'=>'Sound Design 2',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>11
      ]);

      App\Subject::create([
          'subjectName'=>'Audio e mixaggio 2',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>11
      ]);

      App\Subject::create([
          'subjectName'=>'Fenomenologia delle arti contemporanee',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>11
      ]);

      App\Subject::create([
          'subjectName'=>'Processi e tecniche per lo spettacolo multimediale',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>11
      ]);

      App\Subject::create([
          'subjectName'=>'Sistemi interattivi 1',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>11
      ]);

      App\Subject::create([
          'subjectName'=>'Storia della musica contemporanea 2',
          'credits'=>6,
          'totHours'=>40,
          'class_id'=>11
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche performative per le arti visive',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>11
      ]);

      App\Subject::create([
          'subjectName'=>'Sociologia della comunicazione',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>11
      ]);


      App\Subject::create([
          'subjectName'=>'Sound design 3',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>12
      ]);

      App\Subject::create([
          'subjectName'=>'Sistemi interattivi 2',
          'credits'=>60,
          'totHours'=>6,
          'class_id'=>12
      ]);

      App\Subject::create([
          'subjectName'=>'Storia della musica contemporanea 3',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>12
      ]);

      App\Subject::create([
          'subjectName'=>'Diritto, legislazione ed economia dello spettacolo',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>12
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione multimediale',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>12
      ]);

      App\Subject::create([
          'subjectName'=>'Sound Design 4',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>12
      ]);

      //CG
      App\Subject::create([
          'subjectName'=>'Storia dell\'arte contemporanea',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>34
      ]);

      App\Subject::create([
          'subjectName'=>'Teoria e analisi del cinema',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>34
      ]);

      App\Subject::create([
          'subjectName'=>'Informazione per l\'arte: mezzi e metodi',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>34
      ]);

      App\Subject::create([
          'subjectName'=>'TPPF',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>34
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche di animazione digitale 1',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>34
      ]);

      App\Subject::create([
          'subjectName'=>'Cinematografia',
          'credits'=>4,
          'totHours'=>60,
          'class_id'=>34
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione multimediale 1',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>34
      ]);

      App\Subject::create([
          'subjectName'=>'Culture digitali',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>34
      ]);

      App\Subject::create([
          'subjectName'=>'Semiotica dell\'arte',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>34
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche di modellazione digitale - Computer 3D 1',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>34
      ]);


      App\Subject::create([
          'subjectName'=>'Tecniche di animazione digitale 2',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>35
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione multimediale 2',
          'credits'=>12,
          'totHours'=>120,
          'class_id'=>35
      ]);

      App\Subject::create([
          'subjectName'=>'Fenomenologia delle arti contemporanee',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>35
      ]);

      App\Subject::create([
          'subjectName'=>'Sistemi interattivi',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>35
      ]);

      App\Subject::create([
          'subjectName'=>'Regia',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>35
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche di modellazione digitale - Computer 3D 2',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>35
      ]);

      App\Subject::create([
          'subjectName'=>'Sociologia della comunicazione',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>35
      ]);

      App\Subject::create([
          'subjectName'=>'Anatomia dell\'immagine',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>35
      ]);

      App\Subject::create([
          'subjectName'=>'Metodologia progettuale della comunicazione visiva',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>35
      ]);


      App\Subject::create([
          'subjectName'=>'Tecniche di animazione digitale 3',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>36
      ]);

      App\Subject::create([
          'subjectName'=>'Teoria e metodo dei Mass Media',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>36
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione multimediale 3',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>36
      ]);

      App\Subject::create([
          'subjectName'=>'Sistemi interattivi 2',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>36
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche di modellazione digitale - Computer 3D 3',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>36
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione multimediale 4',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>36
      ]);

      //GRAPHIC DESIGN
      App\Subject::create([
          'subjectName'=>'Storia dell\'arte contemporanea',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>13
      ]);

      App\Subject::create([
          'subjectName'=>'Storia del disegno e della grafica d\'arte',
          'credits'=>8,
          'totHours'=>48,
          'class_id'=>13
      ]);

      App\Subject::create([
          'subjectName'=>'Metodologia della progettazione',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>13
      ]);

      App\Subject::create([
          'subjectName'=>'Computer Graphic 1',
          'credits'=>12,
          'totHours'=>120,
          'class_id'=>13
      ]);

      App\Subject::create([
          'subjectName'=>'Elementi di grafica editoriale',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>13
      ]);

      App\Subject::create([
          'subjectName'=>'Graphic Design 1',
          'credits'=>12,
          'totHours'=>120,
          'class_id'=>13
      ]);

      App\Subject::create([
          'subjectName'=>'TPPF',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>13
      ]);

      App\Subject::create([
          'subjectName'=>'Semiotica dell\'arte',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>13
      ]);

      App\Subject::create([
          'subjectName'=>'Video grafica',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>14
      ]);

      App\Subject::create([
          'subjectName'=>'Graphic design 2',
          'credits'=>10,
          'totHours'=>100,
          'class_id'=>14
      ]);

      App\Subject::create([
          'subjectName'=>'Fotografia',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>14
      ]);

      App\Subject::create([
          'subjectName'=>'Fenomenologia delle arti contemporanee',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>14
      ]);

      App\Subject::create([
          'subjectName'=>'Brand Design',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>14
      ]);

      App\Subject::create([
          'subjectName'=>'Metodologia progettuale della comunicazione visiva',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>14
      ]);

      App\Subject::create([
          'subjectName'=>'Sociologia della comunicazione',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>14
      ]);

      App\Subject::create([
          'subjectName'=>'Storia del cinema e del video',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>14
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche dei procedimenti a stampa',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>14
      ]);

      App\Subject::create([
          'subjectName'=>'Tecniche di modellazione digitale - computer 3D',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>14
      ]);

      App\Subject::create([
          'subjectName'=>'Teoria e metodo dei Mass Media',
          'credits'=>6,
          'totHours'=>36,
          'class_id'=>15
      ]);

      App\Subject::create([
          'subjectName'=>'Graphic design 3',
          'credits'=>12,
          'totHours'=>120,
          'class_id'=>15
      ]);

      App\Subject::create([
          'subjectName'=>'Digital Video',
          'credits'=>6,
          'totHours'=>60,
          'class_id'=>15
      ]);

      App\Subject::create([
          'subjectName'=>'Progettazione grafica',
          'credits'=>8,
          'totHours'=>80,
          'class_id'=>15
      ]);

      App\Subject::create([
          'subjectName'=>'Design Management',
          'credits'=>4,
          'totHours'=>30,
          'class_id'=>15
      ]);

      App\Subject::create([
          'subjectName'=>'Allestimento degli spazi espositivi',
          'credits'=>4,
          'totHours'=>40,
          'class_id'=>15
      ]);

    }
}
