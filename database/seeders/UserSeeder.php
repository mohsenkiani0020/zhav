<?php

namespace Database\Seeders;

use App\Enums\GenderStatusEnum;
use App\Models\File;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'first_name'        => "محمد امین",
                'last_name'         => "عسگریان",
                'email'             => "asgarianm17@gmail.com",
                'email_verified_at' => Carbon::Now(),
                "password"          => bcrypt("zhavstudioamin"),
                'gender'            => GenderStatusEnum::male,
                "profile"           => [
                    'url'        => 'amin.webp',
                    'image_type' => 'profile',
                    'file_type'  => 'image',
                    'alt'        => 'Amin asgarian'
                ],
            ],
            [
                'first_name'        => "ایمان",
                'last_name'         => "نصر",
                'email'             => "iman.nasr.esfahan@gmail.com",
                'email_verified_at' => Carbon::Now(),
                "password"          => bcrypt("zhavstudioiman"),
                'gender'            => GenderStatusEnum::male,
                "profile"           => [
                    'url'        => 'iman.webp',
                    'image_type' => 'profile',
                    'file_type'  => 'image',
                    'alt'        => 'Iman nasr'
                ],
            ],
            [
                'first_name'        => "سبحان",
                'last_name'         => "امامی",
                'email'             => "emami.sbn@gmail.com",
                'email_verified_at' => Carbon::Now(),
                "password"          => bcrypt("zhavstudiosobhan"),
                'gender'            => GenderStatusEnum::male,
                "profile"           => [
                    'url'        => 'sobhan.webp',
                    'image_type' => 'profile',
                    'file_type'  => 'image',
                    'alt'        => 'Sobhan emami'
                ],
            ],
            [
                'first_name'        => "محسن",
                'last_name'         => "کیانی",
                'email'             => "mohsenkiani.ha@gmail.com",
                'email_verified_at' => Carbon::Now(),
                "password"          => bcrypt("zhavstudiomohsen"),
                'gender'            => GenderStatusEnum::male,
                "profile"           => [
                    'url'        => 'mohsen.webp',
                    'image_type' => 'profile',
                    'file_type'  => 'image',
                    'alt'        => 'Mohsen kiani'
                ],
            ]
        ];

        foreach ($items as $item) {
            $userObj = new User($item);
            unset($userObj['profile']);
            $userObj->withoutEvents(function () use ($userObj) {
                $userObj->save();
            });

            $profileImage = new File($item['profile']);
            $userObj->profileImage()->save($profileImage);
        }
    }
}
