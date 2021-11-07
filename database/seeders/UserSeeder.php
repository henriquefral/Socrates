<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tome;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        try {
            DB::beginTransaction();

            $users = User::factory()->count(3)->make()->toArray();

            foreach ($users as $user) {

                $user = User::create($user);

                $tome = Tome::factory()->make()->toArray();

                $user->tome()->create($tome);
            }
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
        }
        */

        
        try{ 
            DB::beginTransaction();
            $user = User::create(User::factory()->make()->toArray());

            $tome = Tome::factory()->make();

            $user->tome()->create($tome->toArray());
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();  
        }
        

    /*
        DB::table('users')->insert([
            'experience' => 1,
            'name' => Str::random(10),
            'cpf' => Str::random(11),
            'birth_date' => Carbon::now,
            'occupation' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'level_id'=> 1 
        ]);
    */
    //Nesse modo, ele é conectado no Model. 
    //Logo todos os $fillable devem ser usados, caso contrário, dará erro. 
    /*    
        $user = User::create([
            'experience' => 1,
            'name' => Str::random(10),
            'cpf' => Str::random(11),
            'birth_date' => Carbon::now(),
            'occupation' => Str::random(10),
            'email'=> Str::random(8).'@gmail.com',
            'password' => Hash::make('password'),
            'level_id' => 1
        ]);

        $user->tome()->create([
            'title'=> Str::random(3),
        ]);
        */
    }
}
