<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    const CONTENT = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. </p><p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>';

    public function run()
    { 
        DB::table('users')->insert([
            ['name' => 'user', 'surname' => 'resu', 'email' => 'user@domain.com', 'username' => 'useruser', 'password' => Hash::make('useruser'), 'role' => 'user', 'image' => '', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'user4', 'surname' => 'resu4', 'email' => 'user4@domain.com', 'username' => 'useruser4', 'password' => Hash::make('haRc1xuV'), 'role' => 'user', 'image' => '', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'user5', 'surname' => 'resu5', 'email' => 'user5@domain.com', 'username' => 'useruser5', 'password' => Hash::make('haRc1xuV'), 'role' => 'user', 'image' => '', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'staff', 'surname' => 'ffats', 'email' => 'staff@domain.com', 'username' => 'staffstaff', 'password' => Hash::make('staffstaff'), 'role' => 'staff', 'image' => '', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],  
            ['name' => 'admin', 'surname' => 'nimda', 'email' => 'admin@domain.com', 'username' => 'adminadmin', 'password' => Hash::make('adminadmin'), 'role' => 'admin', 'image' => '', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            
         
            
           
        ]);
        
        DB::table('blog')->insert([
            ['username_user_create' => 'useruser' , 'title_blog' => 'titolo blo n.1', 'tag_1' => 'sport' , 'tag_2' => 'calcio' , 'tag_3' => 'gossip' , 'block' => 0, 'desc' => self::CONTENT,'created_at' => date("Y-m-d H:i:s") , 'updated_at' => date("Y-m-d H:i:s")],
            ['username_user_create' => 'useruser4' , 'title_blog' => 'titolo blo n.2', 'tag_1' => 'sport n.2' , 'tag_2' => 'calcio n.2' , 'tag_3' => 'gossip n.2' ,'block' => 0, 'desc' => self::CONTENT, 'created_at' => date("Y-m-d H:i:s") , 'updated_at' => date("Y-m-d H:i:s")],
            ['username_user_create' => 'useruser5' , 'title_blog' => 'titolo blo n.3', 'tag_1' => 'sport n.3' , 'tag_2' => 'calcio n.3' , 'tag_3' => 'gossip n.3' ,'block' => 0, 'desc' => self::CONTENT, 'created_at' => date("Y-m-d H:i:s") , 'updated_at' => date("Y-m-d H:i:s")],
        ]);

        DB::table('post')->insert([
            ['title' => 'titolo del post', 'blogId' => 1 , 'username_post_create' => 'useruser', 'headline' => self::CONTENT , 'contenuto_1' => self::CONTENT , 'contenuto_2' => self::CONTENT, 'subtitle_1' => 'sottotitolo 1 del post' ,'subtitle_2' => 'sottotitolo 2 del post' , 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['title' => 'titolo del post n.2', 'blogId' => 1 , 'username_post_create' => 'useruser4', 'headline' => self::CONTENT , 'contenuto_1' => self::CONTENT, 'contenuto_2' => self::CONTENT, 'subtitle_1' => 'sottotitolo 1 del post n.2' ,'subtitle_2' => 'sottotitolo 2 del post n.2' ,'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['title' => 'titolo del post n.3', 'blogId' => 1 , 'username_post_create' => 'useruser4', 'headline' => self::CONTENT , 'contenuto_1' => self::CONTENT, 'contenuto_2' => self::CONTENT, 'subtitle_1' => 'sottotitolo 1 del post n.3' , 'subtitle_2' => 'sottotitolo 2 del post n.3' ,'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
        ]);
        
       

        DB::table('follower')->insert([
            ['blogId' => '1', 'follower' => 'useruser4', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['blogId' => '2', 'follower' => 'useruser5', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            
        ]);

        DB::table('notifications')->insert([
            ['recipient' => 'useruser4', 'sender' => 'useruser', 'blogId' => '1', 'created_at' => date("Y-m-d H:i:s"),  'updated_at' => date("Y-m-d H:i:s")],
        ]);

        
    }
}
