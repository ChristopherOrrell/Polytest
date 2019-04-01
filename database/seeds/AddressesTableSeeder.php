<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $addresses= [
       [
         'customer_id' => 1,
         'customer_type' => 'customer',
         'firstname' => 'Yaco',
         'lastname' => 'Yang',
         'address' => '31 rainbow street',
         'address2' => '',
         'city' => 'Kingsford',
         'state' => 'NSW',
         'postcode' => '2032',
         'country' => 'AU'
       ],
       [
         'customer_id' => 1,
         'customer_type' => 'billing',
         'firstname' => 'Yaco',
         'lastname' => 'Yang',
         'address' => '31 rainbow street',
         'address2' => '',
         'city' => 'Kingsford',
         'state' => 'NSW',
         'postcode' => '2032',
         'country' => 'AU'
       ],
       [
         'customer_id' => 1,
         'customer_type' => 'shipping',
         'firstname' => 'Yaco',
         'lastname' => 'Yang',
         'address' => '31 rainbow street',
         'address2' => '',
         'city' => 'Kingsford',
         'state' => 'NSW',
         'postcode' => '2032',
         'country' => 'AU'
       ],
       [
         'customer_id' => 2,
         'customer_type' => 'customer',
         'firstname' => 'Xin',
         'lastname' => 'Zhang',
         'address' => '22 Grose St',
         'address2' => '',
         'city' => 'Little Bay',
         'state' => 'NSW',
         'postcode' => '2036',
         'country' => 'AU'
       ],
       [
         'customer_id' => 2,
         'customer_type' => 'billing',
         'firstname' => 'Xin',
         'lastname' => 'Billing',
         'address' => 'Xin Billing Address1',
         'address2' => 'Xin Billing Address 2',
         'city' => 'Xin City',
         'state' => 'Xin State',
         'postcode' => '2036',
         'country' => 'AU'
       ],
       [
         'customer_id' => 2,
         'customer_type' => 'shipping',
         'firstname' => 'Xin Shipping',
         'lastname' => 'Zhang',
         'address' => 'Xin Shipping Address1',
         'address2' => 'Xin Shipping Address 2',
         'city' => 'Xin City',
         'state' => 'Xin State',
         'postcode' => '2036',
         'country' => 'AU'
       ],
       [
         'customer_id' => 3,
         'customer_type' => 'customer',
         'firstname' => 'Lavan',
         'lastname' => 'Subenthiran',
         'address' => '36 Thane Street',
         'address2' => '',
         'city' => 'Wentworthville',
         'state' => 'NSW',
         'postcode' => '2145',
         'country' => 'AU'
       ],
       [
         'customer_id' => 3,
         'customer_type' => 'billing',
         'firstname' => '',
         'lastname' => '',
         'address' => '',
         'address2' => '',
         'city' => '',
         'state' => '',
         'postcode' => '',
         'country' => ''
       ],
       [
         'customer_id' => 3,
         'customer_type' => 'shipping',
         'firstname' => '',
         'lastname' => '',
         'address' => '',
         'address2' => '',
         'city' => '',
         'state' => '',
         'postcode' => '',
         'country' => ''
       ]
    ];

    foreach ($addresses as $address) {
        DB::table('addresses')->insert([
                    'addressable_id' => $address['customer_id'],
                    'addressable_type' => $address['customer_type'],
                    'firstname' => $address['firstname'],
                    'lastname' => $address['lastname'],
                    'address' => $address['address'],
                    'address2' => $address['address2'],
                    'city' => $address['city'],
                    'state' => $address['state'],
                    'postcode' => $address['postcode'],
                    'country' => $address['country'],
                ]);
    }
    }
}
