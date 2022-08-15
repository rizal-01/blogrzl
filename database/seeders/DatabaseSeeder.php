<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Rizal',
            'username' => 'rizalbpd',
            'email' => 'rizalbagus71@gmail.com',
            'password' => bcrypt('admin')
        ]);

        // User::create([
        //     'name' => 'Dini',
        //     'email' => 'diniadinda18@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam unde corrupti, pariatur, facilis corporis vitae maiores laborum nulla vero labore',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam unde corrupti, pariatur, facilis corporis vitae maiores laborum nulla vero labore, ipsam optio odio accusantium eos tempora incidunt minima nesciunt. Repellat necessitatibus suscipit iste vel doloremque. Minima, cumque illum fugiat quasi nemo architecto sunt maiores odit iure fugit magni asperiores, neque facilis libero ut qui voluptate praesentium laboriosam itaque tenetur ad aliquid? Voluptatibus suscipit quisquam error eius repellendus ex quam, impedit quos. In excepturi doloribus, sunt natus amet nostrum error voluptatibus? Esse quidem ipsam, consectetur cum eius deserunt et sit optio, unde odio consequatur nisi excepturi praesentium odit fugit expedita ducimus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam unde corrupti, pariatur, facilis corporis vitae maiores laborum nulla vero labore',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam unde corrupti, pariatur, facilis corporis vitae maiores laborum nulla vero labore, ipsam optio odio accusantium eos tempora incidunt minima nesciunt. Repellat necessitatibus suscipit iste vel doloremque. Minima, cumque illum fugiat quasi nemo architecto sunt maiores odit iure fugit magni asperiores, neque facilis libero ut qui voluptate praesentium laboriosam itaque tenetur ad aliquid? Voluptatibus suscipit quisquam error eius repellendus ex quam, impedit quos. In excepturi doloribus, sunt natus amet nostrum error voluptatibus? Esse quidem ipsam, consectetur cum eius deserunt et sit optio, unde odio consequatur nisi excepturi praesentium odit fugit expedita ducimus?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam unde corrupti, pariatur, facilis corporis vitae maiores laborum nulla vero labore',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam unde corrupti, pariatur, facilis corporis vitae maiores laborum nulla vero labore, ipsam optio odio accusantium eos tempora incidunt minima nesciunt. Repellat necessitatibus suscipit iste vel doloremque. Minima, cumque illum fugiat quasi nemo architecto sunt maiores odit iure fugit magni asperiores, neque facilis libero ut qui voluptate praesentium laboriosam itaque tenetur ad aliquid? Voluptatibus suscipit quisquam error eius repellendus ex quam, impedit quos. In excepturi doloribus, sunt natus amet nostrum error voluptatibus? Esse quidem ipsam, consectetur cum eius deserunt et sit optio, unde odio consequatur nisi excepturi praesentium odit fugit expedita ducimus?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam unde corrupti, pariatur, facilis corporis vitae maiores laborum nulla vero labore',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam unde corrupti, pariatur, facilis corporis vitae maiores laborum nulla vero labore, ipsam optio odio accusantium eos tempora incidunt minima nesciunt. Repellat necessitatibus suscipit iste vel doloremque. Minima, cumque illum fugiat quasi nemo architecto sunt maiores odit iure fugit magni asperiores, neque facilis libero ut qui voluptate praesentium laboriosam itaque tenetur ad aliquid? Voluptatibus suscipit quisquam error eius repellendus ex quam, impedit quos. In excepturi doloribus, sunt natus amet nostrum error voluptatibus? Esse quidem ipsam, consectetur cum eius deserunt et sit optio, unde odio consequatur nisi excepturi praesentium odit fugit expedita ducimus?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
