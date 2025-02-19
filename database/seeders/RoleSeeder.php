<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use App\Models\Module;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            'users' => [
                'actions' => [
                    'index' => 'user.index',
                    'create'  => 'user.create',
                    'edit'    => 'user.edit',
                    'trash' => 'user.destroy',
                    'restore' => 'user.restore',
                    'delete' => 'user.forceDelete'
                ],
                'roles' => [
                    RoleEnum::ADMIN => ['index', 'create', 'edit', 'trash', 'restore', 'destroy'],
                ]
            ],
            'roles' => [
                'actions' => [
                    'index'   => 'role.index',
                    'create'  => 'role.create',
                    'edit'    => 'role.edit',
                    'delete'  => 'role.destroy'
                ],
                'roles' => [
                    RoleEnum::ADMIN => ['index', 'create', 'edit', 'delete'],
                ],
            ],
            'attachments' => [
                'actions' => [
                    'index'   => 'attachment.index',
                    'create'  => 'attachment.create',
                    'delete'  => 'attachment.destroy'
                ],
                'roles' => [
                    RoleEnum::ADMIN => ['index', 'create', 'delete'],
                    RoleEnum::STAFF => ['index', 'create', 'delete'],
                    RoleEnum::AUTHOR => ['index', 'create', 'delete'],
                    RoleEnum::MEMBER => ['index', 'create', 'delete'],
                    RoleEnum::CREATOR => ['index', 'create', 'delete'],
                ],
            ],
            'categories' => [
                'actions' => [
                    'index'   => 'category.index',
                    'create'  => 'category.create',
                    'edit'    => 'category.edit',
                    'delete'  => 'category.destroy'
                ],
                'roles' => [
                    RoleEnum::ADMIN => ['index', 'create', 'edit', 'delete'],
                    RoleEnum::USER => ['index', 'create', 'edit', 'destroy'],
                    RoleEnum::STAFF => ['index', 'create', 'edit', 'destroy'],
                    RoleEnum::AUTHOR => ['index', 'create', 'edit', 'destroy'],
                    RoleEnum::MEMBER => ['index', 'create', 'edit', 'destroy'],
                    RoleEnum::CREATOR => ['index', 'create', 'edit', 'destroy'],
                ]
            ],
            'tags' => [
                'actions' => [
                    'index'   => 'tag.index',
                    'create'  => 'tag.create',
                    'edit'    => 'tag.edit',
                    'trash'   => 'tag.destroy',
                    'restore' => 'tag.restore',
                    'delete'  => 'tag.forceDelete'
                ],
                'roles' => [
                    RoleEnum::ADMIN => ['index', 'create', 'edit', 'trash', 'restore', 'delete'],
                    RoleEnum::USER => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::STAFF => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::AUTHOR => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::MEMBER => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::CREATOR => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                ]
            ],
            'blogs' => [
                'actions' => [
                    'index'   => 'blog.index',
                    'create'  => 'blog.create',
                    'edit'    => 'blog.edit',
                    'trash'   => 'blog.destroy',
                    'restore' => 'blog.restore',
                    'delete'  => 'blog.forceDelete'
                ],
                'roles' => [
                    RoleEnum::ADMIN => ['index', 'create', 'edit', 'trash', 'restore', 'delete'],
                    RoleEnum::USER => ['index', 'create', 'edit', 'forceDelete'],
                    RoleEnum::STAFF => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::AUTHOR => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::MEMBER => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::CREATOR => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                ]
            ],
            'pages' => [
                'actions' => [
                    'index'   => 'page.index',
                    'create'  => 'page.create',
                    'edit'    => 'page.edit',
                    'trash'   => 'page.destroy',
                    'restore' => 'page.restore',
                    'delete'  => 'page.forceDelete'
                ],
                'roles' => [
                    RoleEnum::ADMIN => ['index', 'create', 'edit', 'trash', 'restore', 'delete'],
                    RoleEnum::USER => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::STAFF => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::AUTHOR => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::MEMBER => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                    RoleEnum::CREATOR => ['index', 'create', 'edit', 'destroy', 'restore', 'forceDelete'],
                ]
            ],
        ];

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $userpermision = [];
        $staffpermision = [];
        $authorpermision = [];
        $memberpermision = [];
        $creatorpermision = [];

        foreach ($modules as $key => $value) {
            Module::updateOrCreate(['name' => $key], ['name' => $key, 'actions' => $value['actions']]);
            foreach ($value['actions'] as $key => $permission) {
                if (!Permission::where('name', $permission)->first()) {
                    $permission = Permission::create(['name' => $permission]);
                }
                if (isset($value['roles'])) {
                    foreach ($value['roles'] as $role => $allowed_actions) {
                        if ($role == RoleEnum::USER) {
                            if (in_array($key, $allowed_actions)) {
                                $userpermision[] = $permission;
                            }
                        }
                        if ($role == RoleEnum::STAFF) {
                            if (in_array($key, $allowed_actions)) {
                                $staffpermision[] = $permission;
                            }
                        }
                        if ($role == RoleEnum::AUTHOR) {
                            if (in_array($key, $allowed_actions)) {
                                $authorpermision[] = $permission;
                            }
                        }
                        if ($role == RoleEnum::MEMBER) {
                            if (in_array($key, $allowed_actions)) {
                                $memberpermision[] = $permission;
                            }
                        }
                        if ($role == RoleEnum::CREATOR) {
                            if (in_array($key, $allowed_actions)) {
                                $creatorpermision[] = $permission;
                            }
                        }
                    }
                }
            }
        }


        $admin = Role::create([
            'name' => RoleEnum::ADMIN,
            'system_reserve' => true
        ]);
        $admin->givePermissionTo(Permission::all());
        $user = User::factory()->create([
            'email' => 'admin@example.com',
            'password' => Hash::make('123456789'),
            'gender' => 'male',
            'dob' => '01/01/2000',
            'location' => 'Rome',
            'country_code' => '39',
            'phone' => '612345678',
            'skills' => 'Developer',
            'about_me' => 'Administrator',
            'first_name' => 'john',
            'last_name' => 'deo',
            'postal_code' => '00100',
            'address' => 'Rome',
            'country_id' => 380,
            'state_id' => 1771,
            'bio' => 'Developer',
            'system_reserve' => true,
        ]);
        $user->assignRole($admin);

        $userRole = Role::create([
            'name' => RoleEnum::USER,
            'system_reserve' => false
        ]);

        $userRole->givePermissionTo($userpermision);
        $user = User::factory()->create([
            'first_name' => 'Quinn',
            'last_name' => 'Mcdowell',
            'email' => 'matixuko@mailinator.com',
            'password' => Hash::make('123456789'),
            'country_code' => '33',
            'phone' => '0123456789',
            'dob' => '08/11/2024',
            'gender' => 'male',
            'status' => '1',
            'country_id' => '250',
            'state_id' => '1201',
            'location' => 'Paris',
            'postal_code' => '75001',
            'about_me' => 'I like using platforms that make life easier. As a user, I value efficiency and creativity, and I am always on the lookout for exciting features and content. I appreciate how easy it is to navigate this space and find what I am looking for.',
            'bio' => 'Quinn Mcdowell is a regular user who enjoys exploring the platform and utilizing its features. He is a curious individual who values simplicity and ease of access in everything he does. Quinn frequently seeks out new content and loves discovering innovative ideas.',
            'system_reserve' => false,
        ]);
        $user->assignRole($userRole);
        $image = public_path('/assets/images/user-images/1.png');
        if (File::exists($image)) {
            $user->addMedia($image)->toMediaCollection('image');
        }

        $staffRole = Role::create([
            'name' => RoleEnum::STAFF,
            'system_reserve' => false
        ]);
        $staffRole->givePermissionTo($staffpermision);
        $user = User::factory()->create([
            'first_name' => 'Abra',
            'last_name' => 'Delgado',
            'email' => 'jipe@mailinator.com',
            'password' => Hash::make('123456789'),
            'country_code' => '49',
            'phone' => '0891234567',
            'dob' => '02/16/2024',
            'gender' => 'male',
            'status' => '1',
            'country_id' => 276,
            'state_id' => 1313,
            'location' => 'Munich',
            'postal_code' => '80331',
            'about_me' => 'Being part of the staff means I get to help make everything happen. I love the sense of responsibility that comes with my role, and I take pride in ensuring that everything runs like clockwork. My goal is to always be a reliable and supportive presence in the team.',
            'bio' => 'Abra Delgado is a dedicated staff member who ensures everything runs smoothly behind the scenes. With a keen sense of responsibility and a proactive approach, Abra is always ready to tackle challenges and support the team. She takes pride in her work and loves contributing to the overall success of the organization.',
            'system_reserve' => false,
        ]);
        $user->assignRole($staffRole);
        $image = public_path('/assets/images/user-images/2.png');
        if (File::exists($image)) {
            $user->addMedia($image)->toMediaCollection('image');
        }

        $authorRole = Role::create([
            'name' => RoleEnum::AUTHOR,
            'system_reserve' => false
        ]);
        $authorRole->givePermissionTo($authorpermision);
        $user = User::factory()->create([
            'first_name' => 'Byron',
            'last_name' => 'Harrington',
            'email' => 'pacab@mailinator.com',
            'password' => Hash::make('123456789'),
            'country_code' => '81',
            'phone' => '0312345678',
            'dob' => '02/08/2000',
            'gender' => 'male',
            'status' => '1',
            'country_id' => 392,
            'state_id' => 1886,
            'location' => 'Tokyo',
            'postal_code' => '1000001',
            'about_me' => 'Writing has always been my way of making sense of the world. As an author, I aim to tell stories that not only entertain but also offer new perspectives. I believe that words have the power to change minds and hearts, and I strive to use mine thoughtfully.',
            'bio' => 'Byron Harrington is an accomplished author who enjoys crafting stories that captivate and inform. With a keen eye for detail and a love for storytelling, Byron pours his passion into every word he writes. He enjoys exploring a variety of topics and genres, always looking to push the boundaries of his creativity.',
            'system_reserve' => false,
        ]);
        $user->assignRole($authorRole);
        $image = public_path('/assets/images/user-images/3.png');
        if (File::exists($image)) {
            $user->addMedia($image)->toMediaCollection('image');
        }

        $memberRole = Role::create([
            'name' => RoleEnum::MEMBER,
            'system_reserve' => false
        ]);
        $memberRole->givePermissionTo($memberpermision);
        $user = User::factory()->create([
            'first_name' => 'Sierra',
            'last_name' => 'Carson',
            'email' => 'buloqo@mailinator.com',
            'password' => Hash::make('123456789'),
            'country_code' => '55',
            'phone' => '11912345678',
            'dob' => '01/29/2022',
            'gender' => 'male',
            'status' => '1',
            'country_id' => 76,
            'state_id' => 530,
            'location' => 'Sao Paulo',
            'postal_code' => '01000000',
            'about_me' => 'As a member, I believe in the power of community and shared goals. Whether it is lending a hand or offering my thoughts, I am always ready to get involved. I am passionate about connecting with others and learning through shared experiences.',
            'bio' => 'Sierra Carson is an active and dedicated member of our community. She loves engaging with others and contributing to various discussions and initiatives. Sierra values collaboration and enjoys being part of a supportive group where everyone works together.',
            'system_reserve' => false,
        ]);
        $user->assignRole($memberRole);
        $image = public_path('/assets/images/user-images/4.png');
        if (File::exists($image)) {
            $user->addMedia($image)->toMediaCollection('image');
        }

        $creatorRole = Role::create([
            'name' => RoleEnum::CREATOR,
            'system_reserve' => false
        ]);
        $creatorRole->givePermissionTo($creatorpermision);
        $user = User::factory()->create([
            'first_name' => 'Phyllis',
            'last_name' => 'Berg',
            'email' => 'xubefymumi@mailinator.com',
            'password' => Hash::make('123456789'),
            'country_code' => '27',
            'phone' => '0111234567',
            'dob' => '12/12/2001',
            'gender' => 'male',
            'status' => '1',
            'country_id' => 710,
            'state_id' => 3098,
            'location' => 'Johannesburg',
            'postal_code' => '2000',
            'about_me' => 'Creativity is at the heart of everything I do. I love bringing fresh ideas into the world and sharing them with others. As a creator, my mission is to inspire, provoke thought, and connect with my audience in meaningful ways.',
            'bio' => 'Phyllis Berg is a creative mind who thrives on bringing ideas to life. As a creator, she focuses on crafting unique and meaningful content, whether through writing, design, or other mediums. Phyllis is passionate about innovation and believes in the power of creativity to inspire and engage others.',
            'system_reserve' => false,
        ]);
        $user->assignRole($creatorRole);
        $image = public_path('/assets/images/user-images/5.png');
        if (File::exists($image)) {
            $user->addMedia($image)->toMediaCollection('image');
        }
    }
}
