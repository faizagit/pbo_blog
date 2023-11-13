<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Faiz Agit Zahiri',
            'username' => 'faizagitos',
            'email' => 'faiz.agit2005@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Bagas Arianto',
        //     'email' => 'bagas15@gmail.com',
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
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum porro asperiores corrupti consectetur. Eveniet error quae minus vitae placeat ex delectus quod est explicabo,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum porro asperiores corrupti consectetur. Eveniet error quae minus vitae placeat ex delectus quod est explicabo, illo sed eligendi quibusdam! Fugiat iure amet sequi illo dolores numquam fugit tempore fuga adipisci, deserunt a distinctio accusamus consequuntur ipsa optio sunt temporibus praesentium placeat! Ratione suscipit dolore officiis eligendi soluta? Praesentium odit eos rerum facilis qui delectus consectetur commodi laudantium, eum est repellendus enim itaque voluptatum molestiae, cupiditate quaerat voluptas iure! Amet, rem ad, inventore quia nisi accusamus maxime tenetur doloremque aliquid dolorem placeat, et consequuntur voluptates eius deserunt aut odio id dolorum aliquam.',
        //     'category_id' => 1,    
        //     'user_id' => 1       
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum porro asperiores corrupti consectetur. Eveniet error quae minus vitae placeat ex delectus quod est explicabo,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum porro asperiores corrupti consectetur. Eveniet error quae minus vitae placeat ex delectus quod est explicabo, illo sed eligendi quibusdam! Fugiat iure amet sequi illo dolores numquam fugit tempore fuga adipisci, deserunt a distinctio accusamus consequuntur ipsa optio sunt temporibus praesentium placeat! Ratione suscipit dolore officiis eligendi soluta? Praesentium odit eos rerum facilis qui delectus consectetur commodi laudantium, eum est repellendus enim itaque voluptatum molestiae, cupiditate quaerat voluptas iure! Amet, rem ad, inventore quia nisi accusamus maxime tenetur doloremque aliquid dolorem placeat, et consequuntur voluptates eius deserunt aut odio id dolorum aliquam.',
        //     'category_id' => 1,    
        //     'user_id' => 1       
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum porro asperiores corrupti consectetur. Eveniet error quae minus vitae placeat ex delectus quod est explicabo,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum porro asperiores corrupti consectetur. Eveniet error quae minus vitae placeat ex delectus quod est explicabo, illo sed eligendi quibusdam! Fugiat iure amet sequi illo dolores numquam fugit tempore fuga adipisci, deserunt a distinctio accusamus consequuntur ipsa optio sunt temporibus praesentium placeat! Ratione suscipit dolore officiis eligendi soluta? Praesentium odit eos rerum facilis qui delectus consectetur commodi laudantium, eum est repellendus enim itaque voluptatum molestiae, cupiditate quaerat voluptas iure! Amet, rem ad, inventore quia nisi accusamus maxime tenetur doloremque aliquid dolorem placeat, et consequuntur voluptates eius deserunt aut odio id dolorum aliquam.',
        //     'category_id' => 2,    
        //     'user_id' => 1       
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum porro asperiores corrupti consectetur. Eveniet error quae minus vitae placeat ex delectus quod est explicabo,',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum porro asperiores corrupti consectetur. Eveniet error quae minus vitae placeat ex delectus quod est explicabo, illo sed eligendi quibusdam! Fugiat iure amet sequi illo dolores numquam fugit tempore fuga adipisci, deserunt a distinctio accusamus consequuntur ipsa optio sunt temporibus praesentium placeat! Ratione suscipit dolore officiis eligendi soluta? Praesentium odit eos rerum facilis qui delectus consectetur commodi laudantium, eum est repellendus enim itaque voluptatum molestiae, cupiditate quaerat voluptas iure! Amet, rem ad, inventore quia nisi accusamus maxime tenetur doloremque aliquid dolorem placeat, et consequuntur voluptates eius deserunt aut odio id dolorum aliquam.',
        //     'category_id' => 2,    
        //     'user_id' => 2       
        // ]);
    }
}
