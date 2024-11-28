<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Simulation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myProfile = Profile::create([
            'name' => 'Nanditya Vianti Putri',
            'email' => 'naviantii@student.uns.ac.id',
            'number' => '087836810455'
        ]);

        $project1 = Project::create([
            'title' => 'Profil Restaurant Profile Web Design',
            'description' => 'This website is a static website design project that aims to provide branding and display restaurant information.',
            'photo' => 'projects/project1.png',
            'link' => 'https://navin-restaurant-cafe.netlify.app/',
            'profile_id' => $myProfile->id
        ]);

        $project2 = Project::create([
            'title' => 'Indriati Solo Baru Hospital\'s CBT Credential Program',
            'description' => 'This website is a website used as a CBT-based written exam for the nursing credential program at Indriati Solo Baru Hospital.',
            'photo' => 'projects/project2.png',
            'link' => 'http://localhost/html/kredensial/soal_pilgan.php?no=1',
            'profile_id' => $myProfile->id
        ]);

        $project3 = Project::create([
            'title' => 'SANDYAKALA Train Transportation\'s Reservation System',
            'description' => 'This website is a website providing SANDYAKALA train travel accommodation which provides several online booking features.',
            'photo' => 'projects/project3.png',
            'link' => 'https://github.com/lentera14/Sandyakala',
            'profile_id' => $myProfile->id
        ]);

        $project4 = Project::create([
            'title' => 'Rumah Makan Gudeg Joglo\'s Cashier System',
            'description' => 'This website is a cashier system to help users or cashiers in making food or drink ordering transactions at the Gudeg Joglo Restaurant.',
            'photo' => 'projects/project4.png',
            'link' => 'http://localhost/gudeg_joglo/entri_order.php',
            'profile_id' => $myProfile->id
        ]);

        $project5 = Project::create([
            'title' => 'Endless Runner Game "Weapon Hunter"',
            'description' => 'Weapon Hunter is a 2D endless runner game where players are required to achieve the highest score at each level.',
            'photo' => 'projects/project5.png',
            'link' => 'https://drive.google.com/file/d/1Mfr1S362i1Gf8BHlduj-ssiyPcltsQtC/view?usp=sharing',
            'profile_id' => $myProfile->id
        ]);

        $project6 = Project::create([
            'title' => 'Animal Reproduction Project',
            'description' => 'This project is a project to create an educational video that explains material about animal reproduction.',
            'photo' => 'projects/project6.png',
            'link' => 'https://youtu.be/VTbUqjX0Lxk?si=JCag3J1g3LsN1xNN',
            'profile_id' => $myProfile->id
        ]);

        $project7 = Project::create([
            'title' => 'Geometric Transformation Project',
            'description' => 'An interactive multimedia project that contains material on the concepts of translation, reflection, and dilation of flat shapes.',
            'photo' => 'projects/project7.png',
            'link' => 'https://drive.google.com/drive/folders/1qqgX8oXIj7tepF2lLpgNEBjP0E35Q_AB?usp=sharing',
            'profile_id' => $myProfile->id
        ]);
    }
}
