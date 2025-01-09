<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Publicator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    
    public function run(): void
    {
        $r=new Role();
        $r->id=1;
        $r->name='Superadmin';
        $r->save();

        DB::table('roles')->insert([
            'id'=>2,
            'name'=>'Admin'
        ]);

        $r=new Role();
        $r->id=3;
        $r->name='NormalKullanici';
        $r->save();

        Category::create([
            'id'=>1,
            'name'=>'Kişisel Gelişim'
        ]);

        Category::create([
            'id'=>2,
            'name'=>'Dram'
        ]);

        DB::table('authors')->insert([
            'id'=>3,
            'name'=>'J.K',
            'surname'=>'Rowling',
            'created_at'=>now()
        ]);

        Publicator::create([
            'id'=>1,
            'name'=>'Kişisel Gelişim',
            'surname'=>'Yayınevi',
            'address'=>'İstanbul',
            
            'mail'=>'code23@gmail.com',
        ]);

        User::create([
            'id'=>1,
            'role_id'=>1,
            'name'=>'pinar',
            'surname'=>'celik',
            'email'=>'pcelik122@gmmail.com',
            'phone'=>1234567,
           'password' => Hash::make('12123434'),
            
        ]);
        
        Book::create([
            'id'=>1,
            'category_id'=>1,
            'author_id'=>3,
            'pub_id'=>1,
            'user_id'=>1,
            'name'=>'Kişisel Gelişim',
            'pageNumber'=>200,
            'is_lended'=>0,
            'barkod_no'=>1234567,
            'lend_time'=>15,
        ]);
      

    }
}
