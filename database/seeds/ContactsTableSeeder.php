<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $contacts = [
         [
            'firstname' => 'Yaco',
            'lastname' => 'Yang',
            'title' => 'Mr',
            'email' => '1140596245@qq.com',
            'phone' => '0426780403'
         ],
         [
            'firstname' => 'Xin',
            'lastname' => 'Zhang',
            'title' => 'Mr',
            'email' => '11793141952@qq.com',
            'phone' => '0412754188'
         ],
         [
            'firstname' => 'Lavan',
            'lastname' => 'Subenthiran',
            'title' => 'Mr',
            'email' => '11parraeels@gmail.com',
            'phone' => '0469090099'
         ]
      ];




      foreach ($contacts as $contact) {
         DB::table('contacts')->insert([
                     'firstname' => $contact['firstname'],
                     'lastname' => $contact['lastname'],
                     'title' => $contact['title'],
                     'email' => $contact['email'],
                     'phone' => $contact['phone'],
                 ]);
      }
    }
}
