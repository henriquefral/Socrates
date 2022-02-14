<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'title' => 'Tales de mileto',
            'description'=> 'Um dos primeiros filósofos conhecidos, dizia que a água era a origem de todas as coisas. Toda vida surgiu da água e a ela deve voltar em seu fim.',
            'experience_required' => 1
        ]);
        DB::table('levels')->insert([
            'title' => 'Anaximandro de mileto',
            'description'=> 'Dizia que o mundo se encontrava contornado pelo "indefinido", algo que ele não soube explicar, pois para ele esse "indefinido" é algo diferente de tudo que ela originou. O "indefinido" também é conhecido como ápeiron.',
            'experience_required' => 100
        ]);
        DB::table('levels')->insert([
            'title' => 'Anaxímenes de mileto',
            'description'=> 'Nascido em 570 a.C. Simpatizava com a teoria de Tales, porém acreditava que havia uma substância antes da água, o ar. O ar gerava não apenas a água, talvez Anaxímenes tenha acreditado que água, fogo, ar e terra geravam vida, mas partiam do princípio do ar.',
            'experience_required' => 200
        ]);
        DB::table('levels')->insert([
            'title' => 'Parmênides',
            'description'=> 'Parmênides (500 a.C) habitava a colônia grega de Eleia, no sul da Itália. Parmênides acreditava que tudo que existe sempre existiu, isto é, nada se transforma de forma relevante, nada pode se transformar naquilo que é diferente de sua essência. Parmênides diz sobre os falhos sentidos que nos enganam, era uma ilusão, contra a razão.',
            'experience_required' => 300
        ]);
        DB::table('levels')->insert([
            'title' => 'Heráclito de éfeso',
            'description'=> 'Para esse filósofo, nascido em 540 a.C na Ásia menor. Como contrario de Parmênides, ele acreditava na constante transformação da natureza, sendo essa a principal característica da natureza. Segundo ele: "Tudo flui".',
            'experience_required' => 400
        ]);
    }
}
