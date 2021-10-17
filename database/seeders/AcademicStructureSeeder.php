<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AcademicStructure;

class AcademicStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $structures = [
            [
                'title' => 'Faculty of Science',
                    'children' => [
                        [
                            'title' => 'Computer Science department',
                            'children' => [
                                    ['title' => 'machine learning'],
                                    ['title' => 'Design pattern'],
                                    ['title' => 'Artificial intelligence'],
                            ],
                        ],
                        [
                            'title' => 'Chemistry',
                                'children' => [
                                    ['title' => 'Organic chemistry'],
                                    ['title' => 'inorganic  chemistry'],
                                    ['title' => 'physical chemistry'],
                            ],
                        ],
                    ],
                ],
                [
                    'title' => 'Faculty of Engineering',
                        'children' => [
                        [
                            'title' => 'Mechanical Engineering',
                            'children' => [
                                ['title' => 'Design'],
                                ['title' => 'pipelines'],
                            ],
                        ],
                        [
                            'title' => 'civil Engineering ',
                            'children' => [
                                ['title' => 'drawing'],
                                ['title' => 'design'],
                                ['title' => 'graphics'],
                            ],
                        ],
                    ],
                ],
        ];
        foreach($structures as $structure)
        {
            AcademicStructure::create($structure);
        }
    }

    }

