<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

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
            'name' => 'Nur',
            'username' => 'nur',
            'email' => 'nur@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Arifah',
        //     'email' => 'arifah@gmail.com',
        //     'password' => bcrypt('67890')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A dicta odio voluptates earum delectus. Animi minus delectus nobis dolorem iure!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident laudantium at dolor fuga exercitationem! At dolores impedit officia pariatur? Magni, sint? Voluptate, officia tempore sed sint natus sunt delectus doloribus. Atque dignissimos, veniam nobis dolor beatae, magni, reprehenderit consequuntur rerum neque vero minus provident odit tenetur iusto ullam quidem esse. Nobis commodi est quam, aut, quibusdam ipsam velit veniam distinctio odio ut necessitatibus asperiores dolorem molestias! Ea, sequi tempore. Numquam neque perspiciatis explicabo nam, rem voluptatum culpa. Sequi sint ratione laboriosam atque omnis non ad, vitae reiciendis fugit excepturi modi laudantium quod accusamus ipsum nulla ut aliquam, accusantium deleniti odio!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A dicta odio voluptates earum delectus. Animi minus delectus nobis dolorem iure!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident laudantium at dolor fuga exercitationem! At dolores impedit officia pariatur? Magni, sint? Voluptate, officia tempore sed sint natus sunt delectus doloribus. Atque dignissimos, veniam nobis dolor beatae, magni, reprehenderit consequuntur rerum neque vero minus provident odit tenetur iusto ullam quidem esse. Nobis commodi est quam, aut, quibusdam ipsam velit veniam distinctio odio ut necessitatibus asperiores dolorem molestias! Ea, sequi tempore. Numquam neque perspiciatis explicabo nam, rem voluptatum culpa. Sequi sint ratione laboriosam atque omnis non ad, vitae reiciendis fugit excepturi modi laudantium quod accusamus ipsum nulla ut aliquam, accusantium deleniti odio!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A dicta odio voluptates earum delectus. Animi minus delectus nobis dolorem iure!',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident laudantium at dolor fuga exercitationem! At dolores impedit officia pariatur? Magni, sint? Voluptate, officia tempore sed sint natus sunt delectus doloribus. Atque dignissimos, veniam nobis dolor beatae, magni, reprehenderit consequuntur rerum neque vero minus provident odit tenetur iusto ullam quidem esse. Nobis commodi est quam, aut, quibusdam ipsam velit veniam distinctio odio ut necessitatibus asperiores dolorem molestias! Ea, sequi tempore. Numquam neque perspiciatis explicabo nam, rem voluptatum culpa. Sequi sint ratione laboriosam atque omnis non ad, vitae reiciendis fugit excepturi modi laudantium quod accusamus ipsum nulla ut aliquam, accusantium deleniti odio!',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);



    }
}
