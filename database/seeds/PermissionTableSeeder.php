<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $permission = [

        	/*[

                //permission role

        		'name' => 'role-list',

        		'display_name' => 'Display Role Listing',

        		'description' => 'See only Listing Of Role'

        	],

        	[

        		'name' => 'role-create',

        		'display_name' => 'Create Role',

        		'description' => 'Create New Role'

        	],

        	[

        		'name' => 'role-edit',

        		'display_name' => 'Edit Role',

        		'description' => 'Edit Role'

        	],

        	[

        		'name' => 'role-delete',

        		'display_name' => 'Delete Role',

        		'description' => 'Delete Role'

        	],

            //permission item

        	[

        		'name' => 'item-list',

        		'display_name' => 'Display Item Listing',

        		'description' => 'See only Listing Of Item'

        	],

        	[

        		'name' => 'item-create',

        		'display_name' => 'Create Item',

        		'description' => 'Create New Item'

        	],

        	[

        		'name' => 'item-edit',

        		'display_name' => 'Edit Item',

        		'description' => 'Edit Item'

        	],

        	[

        		'name' => 'item-delete',

        		'display_name' => 'Delete Item',

        		'description' => 'Delete Item'

        	],

            //permission humas
            [

                'name' => 'humas-list',

                'display_name' => 'Display Humas Listing',

                'description' => 'See only Listing Of Humas'

            ],

            [

                'name' => 'humas-create',

                'display_name' => 'Create Humas',

                'description' => 'Create New Humas'

            ],

            [

                'name' => 'humas-edit',

                'display_name' => 'Edit Humas',

                'description' => 'Edit Humas'

            ],

            [

                'name' => 'humas-delete',

                'display_name' => 'Delete Humas',

                'description' => 'Delete Humas'

            ],

             //permission unit kerja
            [

                'name' => 'unit_kerja-list',

                'display_name' => 'Display Unit Kerja Listing',

                'description' => 'See only Listing Of Unit Kerja'

            ],

            [

                'name' => 'unit_kerja-create',

                'display_name' => 'Create Unit Kerja',

                'description' => 'Create New Unit Kerja'

            ],

            [

                'name' => 'unit_kerja-edit',

                'display_name' => 'Edit Unit Kerja',

                'description' => 'Edit Unit Kerja'

            ],

            [

                'name' => 'unit_kerja-delete',

                'display_name' => 'Delete Unit Kerja',

                'description' => 'Delete Unit Kerja'

            ],

            //role jabatan
              [

                'name' => 'jabatan-list',

                'display_name' => 'Display Jabatan Listing',

                'description' => 'See only Listing Of Jabatan'

            ],

            [

                'name' => 'jabatan-create',

                'display_name' => 'Create Jabatan',

                'description' => 'Create New Jabatan'

            ],

            [

                'name' => 'jabatan-edit',

                'display_name' => 'Edit Jabatan',

                'description' => 'Edit Jabatan'

            ],

            [

                'name' => 'jabatan-delete',

                'display_name' => 'Delete Jabatan',

                'description' => 'Delete Jabatan'

            ],

            //data auth complaint
            [

                'name' => 'complaint-list',

                'display_name' => 'Display Complaint Listing',

                'description' => 'See only Listing Of Complaint'

            ],

            [

                'name' => 'complaint-create',

                'display_name' => 'Create Complaint',

                'description' => 'Create New Complaint'

            ],

            [

                'name' => 'complaint-edit',

                'display_name' => 'Edit Complaint',

                'description' => 'Edit Complaint'

            ],

            [

                'name' => 'complaint-delete',

                'display_name' => 'Delete Complaint',

                'description' => 'Delete Complaint'

            ],

            //data auth karyawan
            [

                'name' => 'karyawan-list',

                'display_name' => 'Display Karyawan Listing',

                'description' => 'See only Listing Of Karyawan'

            ],

            [

                'name' => 'karyawan-create',

                'display_name' => 'Create Karyawan',

                'description' => 'Create New Karyawan'

            ],

            [

                'name' => 'karyawan-edit',

                'display_name' => 'Edit Karyawan',

                'description' => 'Edit Karyawan'

            ],

            [

                'name' => 'karyawan-delete',

                'display_name' => 'Delete Karyawan',

                'description' => 'Delete Karyawan'

            ],

            [

                'name' => 'humas-download',

                'display_name' => 'Download Humas',

                'description' => 'Download Humas'

            ],

            [

                'name' => 'humas-laporan',

                'display_name' => 'Laporan Humas',

                'description' => 'Laporan Humas'

            ],

             [

                'name' => 'complaint-download',

                'display_name' => 'Download Complaint',

                'description' => 'Download Complaint'

            ],

            [

                'name' => 'complaint-laporan',

                'display_name' => 'Laporan Complaint',

                'description' => 'Laporan Complaint'

            ],

            //data auth cuti 
            [

                'name' => 'cuti-list',

                'display_name' => 'Display Cuti Listing',

                'description' => 'See only Listing Of Cuti'

            ],

            [

                'name' => 'cuti-create',

                'display_name' => 'Create Cuti',

                'description' => 'Create New Cuti'

            ],

            [

                'name' => 'cuti-edit',

                'display_name' => 'Edit Cuti',

                'description' => 'Edit Cuti'

            ],

            [

                'name' => 'cuti-delete',

                'display_name' => 'Delete Cuti',

                'description' => 'Delete Cuti'

            ],


            //data auth arisan 
            [

                'name' => 'arisan-list',

                'display_name' => 'Display Arisan Listing',

                'description' => 'See only Listing Of Arisan'

            ],

            [

                'name' => 'arisan-create',

                'display_name' => 'Create Arisan',

                'description' => 'Create New Arisan'

            ],

            [

                'name' => 'arisan-edit',

                'display_name' => 'Edit Arisan',

                'description' => 'Edit Arisan'

            ],

            [

                'name' => 'arisan-delete',

                'display_name' => 'Delete Arisan',

                'description' => 'Delete Arisan'

            ],

              //data auth ppi 
            [

                'name' => 'ppi-list',

                'display_name' => 'Display Ppi Listing',

                'description' => 'See only Listing Of Ppi'

            ],

            [

                'name' => 'ppi-create',

                'display_name' => 'Create Ppi',

                'description' => 'Create New Ppi'

            ],

            [

                'name' => 'ppi-edit',

                'display_name' => 'Edit Ppi',

                'description' => 'Edit Ppi'

            ],

            [

                'name' => 'ppi-delete',

                'display_name' => 'Delete Ppi',

                'description' => 'Delete Ppi'

            ],

              //data auth pmkp 
            [

                'name' => 'pmkp-list',

                'display_name' => 'Display Pmkp Listing',

                'description' => 'See only Listing Of Pmkp'

            ],

            [

                'name' => 'pmkp-create',

                'display_name' => 'Create Pmkp',

                'description' => 'Create New Pmkp'

            ],

            [

                'name' => 'pmkp-edit',

                'display_name' => 'Edit Pmkp',

                'description' => 'Edit Pmkp'

            ],

            [

                'name' => 'pmkp-delete',

                'display_name' => 'Delete Pmkp',

                'description' => 'Delete Pmkp'

            ],
                //download dan laporan
            [

                'name' => 'ppi-download',

                'display_name' => 'Download Ppi',

                'description' => 'Download Ppi'

            ],

            [

                'name' => 'ppi-laporan',

                'display_name' => 'Laporan Ppi',

                'description' => 'Laporan Ppi'

            ],
            // pmkp lap dan down
            [

                'name' => 'pmkp-download',

                'display_name' => 'Download Pmkp',

                'description' => 'Download Pmkp'

            ],

            [

                'name' => 'pmkp-laporan',

                'display_name' => 'Laporan Pmkp',

                'description' => 'Laporan Pmkp'

            ],

              //data auth laporan pmkp 
            [

                'name' => 'laporanpmkp-list',

                'display_name' => 'Display Laporan Pmkp Listing',

                'description' => 'See only Listing Of Laporan Pmkp'

            ],

            [

                'name' => 'laporanpmkp-create',

                'display_name' => 'Create Laporan Pmkp',

                'description' => 'Create New Laporan Pmkp'

            ],

            [

                'name' => 'laporanpmkp-edit',

                'display_name' => 'Edit Laporan Pmkp',

                'description' => 'Edit Laporan Pmkp'

            ],

            [

                'name' => 'laporanpmkp-delete',

                'display_name' => 'Delete Laporan Pmkp',

                'description' => 'Delete Laporan Pmkp'

            ],
               
            [

                'name' => 'laporanpmkp-download',

                'display_name' => 'Download Laporan Pmkp',

                'description' => 'Download Laporan Pmkp'

            ],

            [

                'name' => 'laporanpmkp-laporan',

                'display_name' => 'Laporan Laporan Pmkp',

                'description' => 'Laporan Laporan Pmkp'

            ],

             //data auth area indikator
            [

                'name' => 'areaindikator-list',

                'display_name' => 'Display Area indikator Listing',

                'description' => 'See only Listing Of Area indikator'

            ],

            [

                'name' => 'areaindikator-create',

                'display_name' => 'Create Area indikator',

                'description' => 'Create New Area indikator'

            ],

            [

                'name' => 'areaindikator-edit',

                'display_name' => 'Edit Area indikator',

                'description' => 'Edit Area indikator'

            ],

            [

                'name' => 'areaindikator-delete',

                'display_name' => 'Delete Area indikator',

                'description' => 'Delete Area indikator'

            ],
               
            [

                'name' => 'areaindikator-download',

                'display_name' => 'Download Area indikator',

                'description' => 'Download Area indikator'

            ],

            [

                'name' => 'areaindikator-laporan',

                'display_name' => 'Laporan Area indikator',

                'description' => 'Laporan Area indikator'

            ],

             //data auth sub area indikator
            [

                'name' => 'subai-list',

                'display_name' => 'Display Sub Area indikator Listing',

                'description' => 'See only Listing Of Sub Area indikator'

            ],

            [

                'name' => 'subai-create',

                'display_name' => 'Create Sub Area indikator',

                'description' => 'Create New Sub Area indikator'

            ],

            [

                'name' => 'subai-edit',

                'display_name' => 'Edit Sub Area indikator',

                'description' => 'Edit Sub Area indikator'

            ],

            [

                'name' => 'subai-delete',

                'display_name' => 'Delete Sub Area indikator',

                'description' => 'Delete Sub Area indikator'

            ],
               
            [

                'name' => 'subai-download',

                'display_name' => 'Download Sub Area indikator',

                'description' => 'Download Sub Area indikator'

            ],

            [

                'name' => 'subai-laporan',

                'display_name' => 'Laporan Sub Area indikator',

                'description' => 'Laporan Sub Area indikator'

            ],


             //data auth angka indikator
            [

                'name' => 'angkaindikator-list',

                'display_name' => 'Display Angka indikator Listing',

                'description' => 'See only Listing Of Angka indikator'

            ],

            [

                'name' => 'angkaindikator-create',

                'display_name' => 'Create Angka indikator',

                'description' => 'Create New Angka indikator'

            ],

            [

                'name' => 'angkaindikator-edit',

                'display_name' => 'Edit Angka indikator',

                'description' => 'Edit Angka indikator'

            ],

            [

                'name' => 'angkaindikator-delete',

                'display_name' => 'Delete Angka indikator',

                'description' => 'Delete Angka indikator'

            ],
               
            [

                'name' => 'angkaindikator-download',

                'display_name' => 'Download Angka indikator',

                'description' => 'Download Angka indikator'

            ],

            [

                'name' => 'angkaindikator-laporan',

                'display_name' => 'Laporan Angka indikator',

                'description' => 'Laporan Angka indikator'

            ],


        

           //data auth kejadian indikator
           [

            'name' => 'kejadianindikator-list',

            'display_name' => 'Display Kejadian indikator Listing',

            'description' => 'See only Listing Of Kejadian indikator'

        ],

        [

            'name' => 'kejadianindikator-create',

            'display_name' => 'Create Kejadian indikator',

            'description' => 'Create New Kejadian indikator'

        ],

        [

            'name' => 'kejadianindikator-edit',

            'display_name' => 'Edit Kejadian indikator',

            'description' => 'Edit Kejadian indikator'

        ],

        [

            'name' => 'kejadianindikator-delete',

            'display_name' => 'Delete Kejadian indikator',

            'description' => 'Delete Kejadian indikator'

        ],
           
        [

            'name' => 'kejadianindikator-download',

            'display_name' => 'Download Kejadian indikator',

            'description' => 'Download Kejadian indikator'

        ],

        [

            'name' => 'kejadianindikator-laporan',

            'display_name' => 'Laporan Kejadian indikator',

            'description' => 'Laporan Kejadian indikator'

        ],

        [

            'name' => 'areaindikator-print',

            'display_name' => 'Display Area indikator Print',

            'description' => 'See only Print Of Area indikator'

        ],

        //data auth kejadian indikator
        [

            'name' => 'read-rehabmedik',

            'display_name' => 'Display Rehab Medik Listing',

            'description' => 'See only Listing Of Rehab Medik'

        ],

        [

            'name' => 'create-rehabmedik',

            'display_name' => 'Create Rehab Medik',

            'description' => 'Create New Rehab Medik'

        ],

        [

            'name' => 'update-rehabmedik',

            'display_name' => 'Edit Rehab Medik',

            'description' => 'Edit Rehab Medik'

        ],

        [

            'name' => 'delete-rehabmedik',

            'display_name' => 'Delete Rehab Medik',

            'description' => 'Delete Rehab Medik'

        ],

        [

            'name' => 'laporan-rehabmedik',

            'display_name' => 'Laporan Rehab Medik',

            'description' => 'Laporan Rehab Medik'

        ],

        //data auth ipsrs
        [

            'name' => 'read-ipsrs',

            'display_name' => 'Display IPSRS Listing',

            'description' => 'See only Listing Of IPSRS'

        ],

        [

            'name' => 'create-ipsrs',

            'display_name' => 'Create IPSRS',

            'description' => 'Create New IPSRS'

        ],

        [

            'name' => 'update-ipsrs',

            'display_name' => 'Edit IPSRS',

            'description' => 'Edit IPSRS'

        ],

        [

            'name' => 'delete-ipsrs',

            'display_name' => 'Delete IPSRS',

            'description' => 'Delete IPSRS'

        ],

        [

            'name' => 'laporan-ipsrs',

            'display_name' => 'Laporan IPSRS',

            'description' => 'Laporan IPSRS'

        ],*/
        [

            'name' => 'konfirmasi-ipsrs',

            'display_name' => 'Konfirmasi IPSRS',

            'description' => 'Konfirmasi IPSRS'

        ],

    ];


        foreach ($permission as $key => $value) {

        	Permission::create($value);

        }
    }
}
