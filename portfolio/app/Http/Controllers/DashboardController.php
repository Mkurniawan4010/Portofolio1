<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('dashboard', [
            'sections' => [
                [
                    'title' => 'Skills',
                    'description' => 'Kelola skill dan tingkat kemampuan.',
                    'route' => route('admin.skills.index'),
                    'icon' => 'fas fa-code',
                ],
                [
                    'title' => 'Pengalaman',
                    'description' => 'Tambah atau edit riwayat pengalaman kerja.',
                    'route' => route('admin.experiences.index'),
                    'icon' => 'fas fa-briefcase',
                ],
                [
                    'title' => 'Proyek',
                    'description' => 'Atur daftar proyek yang ditampilkan di portofolio.',
                    'route' => route('admin.projects.index'),
                    'icon' => 'fas fa-project-diagram',
                ],
                [
                    'title' => 'Sertifikat',
                    'description' => 'Kelola sertifikat dan bukti pencapaian.',
                    'route' => route('admin.certificates.index'),
                    'icon' => 'fas fa-award',
                ],
                [
                    'title' => 'Organisasi',
                    'description' => 'Ubah data organisasi dan aktivitas.',
                    'route' => route('admin.organizations.index'),
                    'icon' => 'fas fa-users',
                ],
            ],
        ]);
    }
}
