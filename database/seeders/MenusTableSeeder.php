<?php

namespace Database\Seeders;

use App\Models\Menu\MenuDetail;
use App\Models\Menu\MenuHeader;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('menu_headers')->truncate();
        DB::table('menu_details')->truncate();
        DB::table('menu_sub_details')->truncate();

        $currentDateTime = now();
        $prefix = 'admin';

        $menuItems = [
            [
                'header' => [
                    'name1' => 'Dashboards',
                    'name2' => 'Dashboards',
                    'is_active' => 1,
                    'icon' => 'ri-dashboard-2-line',
                    'menu_slug' => null,
                    'menu_code' => 1,
                    'menu' => null,
                    'created_at' => $currentDateTime,
                    'updated_at' => $currentDateTime,
                ],
                'children' => []
            ],

            // ['title' => 'Products', 'route' => 'admin.products.index'],
            // ['title' => 'Add New Product', 'route' => 'admin.products.create'],
            // ['title' => 'Categories', 'route' => 'admin.categories.index'],
            // ['title' => 'Brands', 'route' => 'admin.brands.index'],
            // ['title' => 'Attributes', 'route' => 'admin.attributes.index'],
            // ['title' => 'Tags', 'route' => 'admin.tags.index'],
            // ['title' => 'Inventory', 'route' => 'admin.inventory.index'],

            [
                'header' => [
                    'name1' => 'Product-Management',
                    'name2' => 'Product-Management',
                    'is_active' => 1,
                    'icon' => 'fas fa-tachometer-alt',
                    'menu_slug' => null,
                    'menu_code' => 100,
                    'menu' => null,
                    'created_at' => $currentDateTime,
                    'updated_at' => $currentDateTime,
                ],
                'children' => [
                    [
                        'name1' => 'Category',
                        'name2' => 'Category',
                        'sequence' => '10',
                        'menu_slug' => '',
                        'page_url' => "$prefix/category",
                        'is_submenu_available' => 0,
                        'is_active' => 1,
                        'icon' => 'ri-download-cloud-2-fill',
                        'created_at' => $currentDateTime,
                        'updated_at' => $currentDateTime,
                    ],
                    [
                        'name1' => 'Add New Product',
                        'name2' => 'Add New Product',
                        'sequence' => '20',
                        'menu_slug' => '',
                        'page_url' => "$prefix/products/create",
                        'is_submenu_available' => 0,
                        'is_active' => 1,
                        'icon' => 'ri-arrow-go-back-line',
                        'created_at' => $currentDateTime,
                        'updated_at' => $currentDateTime,
                    ],
                    [
                        'name1' => 'Product',
                        'name2' => 'Product',
                        'sequence' => '20',
                        'menu_slug' => '',
                        'page_url' => "$prefix/products",
                        'is_submenu_available' => 0,
                        'is_active' => 1,
                        'icon' => 'ri-arrow-go-back-line',
                        'created_at' => $currentDateTime,
                        'updated_at' => $currentDateTime,
                    ],
                ]
            ],
            [
                'header' => [
                    'name1' => 'Order-Management',
                    'name2' => 'Order-Management',
                    'is_active' => 1,
                    'icon' => 'fas fa-tachometer-alt',
                    'menu_slug' => null,
                    'menu_code' => 200,
                    'menu' => null,
                    'created_at' => $currentDateTime,
                    'updated_at' => $currentDateTime,
                ],
                'children' => [
                    [
                        'name1' => 'Order',
                        'name2' => 'Order',
                        'sequence' => '10',
                        'menu_slug' => '',
                        'page_url' => "$prefix/order",
                        'is_submenu_available' => 0,
                        'is_active' => 1,
                        'icon' => 'ri-download-cloud-2-fill',
                        'created_at' => $currentDateTime,
                        'updated_at' => $currentDateTime,
                    ],
                ]
            ],
            [
                'header' => [
                    'name1' => 'Administration',
                    'name2' => 'Administration',
                    'is_active' => 1,
                    'icon' => 'ri-admin-line',
                    'menu_slug' => null,
                    'menu_code' => 300,
                    'menu' => json_encode(['item1' => 'value1', 'item2' => 'value2']),
                    'created_at' => $currentDateTime,
                    'updated_at' => $currentDateTime,
                ],
                'children' => [
                    [
                        'name1' => 'Users',
                        'name2' => 'Users',
                        'sequence' => '1',
                        'menu_slug' => '',
                        'page_url' => "$prefix/administration/user",
                        'is_submenu_available' => 0,
                        'is_active' => 1,
                        'icon' => 'ri-user-line',
                        'created_at' => $currentDateTime,
                        'updated_at' => $currentDateTime,
                    ],
                    [
                        'name1' => 'Role',
                        'name2' => 'Role',
                        'sequence' => '2',
                        'menu_slug' => '',
                        'page_url' => "$prefix/administration/role",
                        'is_submenu_available' => 0,
                        'is_active' => 1,
                        'icon' => 'ri-shield-user-line',
                        'created_at' => $currentDateTime,
                        'updated_at' => $currentDateTime,
                    ],
                    [
                        'name1' => 'Permission',
                        'name2' => 'Permission',
                        'sequence' => '3',
                        'menu_slug' => '',
                        'page_url' => "$prefix/administration/permission",
                        'is_submenu_available' => 0,
                        'is_active' => 1,
                        'icon' => 'ri-shield-keyhole-line',
                        'created_at' => $currentDateTime,
                        'updated_at' => $currentDateTime,
                    ],
                    [
                        'name1' => 'User Activity',
                        'name2' => 'User Activity',
                        'sequence' => '4',
                        'menu_slug' => '',
                        'page_url' => "$prefix/administration/user-activity",
                        'is_submenu_available' => 0,
                        'is_active' => 1,
                        'icon' => 'ri-user-follow-line',
                        'created_at' => $currentDateTime,
                        'updated_at' => $currentDateTime,
                    ],
                    [
                        'name1' => 'Logged Users Tracking',
                        'name2' => 'Logged Users Tracking',
                        'sequence' => '5',
                        'menu_slug' => '',
                        'page_url' => "$prefix/administration/logged-user-tracking",
                        'is_submenu_available' => 0,
                        'is_active' => 1,
                        'icon' => 'ri-shield-keyhole-line',
                        'created_at' => $currentDateTime,
                        'updated_at' => $currentDateTime,
                    ],
                    [
                        'name1' => 'Setting',
                        'name2' => 'Setting',
                        'sequence' => '7',
                        'menu_slug' => '',
                        'page_url' => "$prefix/administration/setting",
                        'is_submenu_available' => 0,
                        'is_active' => 1,
                        'icon' => 'ri-settings-5-line',
                        'created_at' => $currentDateTime,
                        'updated_at' => $currentDateTime,
                    ]
                    //... continue for Permission, User Activity, etc.
                ]
            ],
        ];

        foreach ($menuItems as $item) {
            $menuHeader = MenuHeader::create($item['header']);
            if (!empty($item['children'])) {
                foreach ($item['children'] as $child) {
                    $child['menu_header_id'] = $menuHeader->id;
                    MenuDetail::updateOrCreate(
                        [
                            'menu_header_id' => $menuHeader->id,
                            'name1' => $child['name1'],
                        ],
                        $child
                    );
                }
            }
        }

        generateMenuSlug();
    }
}
