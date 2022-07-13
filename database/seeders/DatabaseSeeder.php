<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // User::create([
        //     'name' => 'Irvan Falasifa',
        //     'email' => 'irvan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Koko Imut',
        //     'email' => 'koko@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Subdit PAI pada PAUD dan TK',
            'slug' => 'subdit-pai-pada-paud-dan-tk'
        ]);

        Category::create([
            'name' => 'Subdit PAI pada SMP',
            'slug' => 'subdit-pai-pada-smp'
        ]);

        Category::create([
            'name' => 'Subdit PAI pada SMA',
            'slug' => 'subdit-pai-pada-sma'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Kegiatan Pertama',
        //     'slug' => 'kegiatan-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet quas repudiandae vel explicabo non dicta ut voluptatum corrupti eaque corporis id veritatis aliquid, omnis, itaque consectetur, fuga aperiam quos? Exercitationem, dolor. Aut eius quibusdam sint, pariatur numquam ipsam eos perspiciatis eveniet! Deserunt ut ipsum excepturi minima non distinctio voluptatibus facere consectetur quidem aliquid nam mollitia, placeat et vitae debitis eligendi alias neque nulla expedita unde ea quibusdam. Possimus eum alias minima maiores nesciunt molestias, consequatur voluptate dolorum minus reiciendis vel repellendus ab labore ipsum. Obcaecati asperiores laborum, dolore quas consectetur natus reiciendis, nisi culpa possimus hic facilis corrupti repellat voluptatem?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Kegiatan Kedua',
        //     'slug' => 'kegiatan-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet quas repudiandae vel explicabo non dicta ut voluptatum corrupti eaque corporis id veritatis aliquid, omnis, itaque consectetur, fuga aperiam quos? Exercitationem, dolor. Aut eius quibusdam sint, pariatur numquam ipsam eos perspiciatis eveniet! Deserunt ut ipsum excepturi minima non distinctio voluptatibus facere consectetur quidem aliquid nam mollitia, placeat et vitae debitis eligendi alias neque nulla expedita unde ea quibusdam. Possimus eum alias minima maiores nesciunt molestias, consequatur voluptate dolorum minus reiciendis vel repellendus ab labore ipsum. Obcaecati asperiores laborum, dolore quas consectetur natus reiciendis, nisi culpa possimus hic facilis corrupti repellat voluptatem?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Kegiatan Ketiga',
        //     'slug' => 'kegiatan-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet quas repudiandae vel explicabo non dicta ut voluptatum corrupti eaque corporis id veritatis aliquid, omnis, itaque consectetur, fuga aperiam quos? Exercitationem, dolor. Aut eius quibusdam sint, pariatur numquam ipsam eos perspiciatis eveniet! Deserunt ut ipsum excepturi minima non distinctio voluptatibus facere consectetur quidem aliquid nam mollitia, placeat et vitae debitis eligendi alias neque nulla expedita unde ea quibusdam. Possimus eum alias minima maiores nesciunt molestias, consequatur voluptate dolorum minus reiciendis vel repellendus ab labore ipsum. Obcaecati asperiores laborum, dolore quas consectetur natus reiciendis, nisi culpa possimus hic facilis corrupti repellat voluptatem?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

    }
}
