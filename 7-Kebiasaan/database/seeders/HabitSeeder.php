<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Habit;
use Carbon\Carbon;

class HabitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = ['7 A', '9 A', '8 A', '7 B', '9 B', '8 B', '9 C', '8 C', '7 C', '9 D', '8 D', '7 D', '9 E', '8 E', '7 E', '9 F', '8 F', '7 F', '9 G', '8G', '7 F',];
        // $kelas = ['7 A', '9 A'];
        
        for ($i = 1; $i <= 720; $i++) {
            $studentNumber = $i % 32 + 1;
            $classIndex = array_rand($kelas);
            
            Habit::create([
                'studentName' => 'Siswa ' . $i,
                'studentSerial' => $studentNumber,
                'studentClass' => $kelas[$classIndex],
                'date' => Carbon::now()->subDays(rand(0, 30))->format('Y-m-d'),
                'morningSport' => rand(0, 1) ? 'Ya' : 'Tidak',
                'wakeUpTime' => rand(5, 7) . ':' . str_pad(rand(0, 59), 2, '0', STR_PAD_LEFT),
                'worship' => rand(0, 1) ? 'Ya' : 'Tidak',
                'prayer' => rand(0, 1) ? 'Ya' : 'Tidak',
                'breakfast' => rand(0, 1) ? 'Ya' : 'Tidak',
                'learningActivity' => rand(0, 1) ? 'Ya' : 'Tidak',
                'communityActivity' => rand(0, 1) ? 'Ya' : 'Tidak',
                'bedtime' => rand(21, 23) . ':' . str_pad(rand(0, 59), 2, '0', STR_PAD_LEFT),
            ]);
        }
    }
}
