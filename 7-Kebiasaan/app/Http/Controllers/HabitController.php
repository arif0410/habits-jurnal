<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class HabitController extends Controller
{

        public function index(Request $request)
        {
            $sort = $request->get('sort', 'date_desc');
            $class = $request->get('class');
            $perPage = $request->get('per_page', 32); // Default 32 data per halaman

            $query = Habit::query();
            
            // Filter berdasarkan kelas jika ada
            if ($class) {
                $query->where('studentClass', $class);
            }

            // Sorting
            $query->when($sort === 'date_asc', fn($q) => $q->orderBy('date', 'asc'))
                ->when($sort === 'date_desc', fn($q) => $q->orderBy('date', 'desc'))
                ->when($sort === 'class', fn($q) => $q->orderBy('studentClass', 'asc'));

            // Paginate dengan jumlah data dinamis ($perPage)
            if ($perPage == 'all') {
            $habits = $query->get();
            } else {
                $habits = $query->paginate((int)$perPage)->appends($request->except('page'));
            }
            // Untuk statistik, ambil semua data (atau bisa juga hanya per kelas)
            $allHabits = $class ? Habit::where('studentClass', $class)->get() : Habit::all();
            $total = $allHabits->count() ?: 1;

            $sportPercentage = round(($allHabits->where('morningSport', '!=', null)->count() / $total) * 100);
            $wakeUpPercentage = round(($allHabits->where('wakeUpTime', '!=', null)->count() / $total) * 100);
            $worshipPercentage = round(($allHabits->where('worship', '!=', null)->count() / $total) * 100);
            $breakfastPercentage = round(($allHabits->where('breakfast', 'Ya')->count() / $total) * 100);
            $learningPercentage = round(($allHabits->where('learningActivity', '!=', null)->count() / $total) * 100);
            $communityPercentage = round(($allHabits->where('communityActivity', '!=', null)->count() / $total) * 100);
            $sleepPercentage = round(($allHabits->where('bedtime', '!=', null)->count() / $total) * 100);
        // dd($request->all());
            return view('7-Kebiasaan', compact(
                'habits', 'allHabits', 'perPage',
                'sportPercentage', 'wakeUpPercentage', 'worshipPercentage',
                'breakfastPercentage', 'learningPercentage', 'communityPercentage', 'sleepPercentage'
            ));
        }


        public function home(Request $request)
        {
            $sort = $request->get('sort', 'date_desc');
            $class = $request->get('class');
            $perPage = $request->get('per_page', 32);

            $query = Habit::query();
            if ($class) {
                $query->where('studentClass', $class);
            }
            $query->when($sort === 'date_asc', fn($q) => $q->orderBy('date', 'asc'))
                ->when($sort === 'date_desc', fn($q) => $q->orderBy('date', 'desc'))
                ->when($sort === 'class', fn($q) => $q->orderBy('studentClass', 'asc'));

        // $habits = $query->paginate($perPage)->appends($request->except('page'));
            if ($perPage == 'all') {
            $habits = $query->get();
            } else {
                $habits = $query->paginate((int)$perPage)->appends($request->except('page'));
            }
            return view('hasil.index', compact('habits', 'perPage'));
        }

        public function store(Request $request)
        {
            // dd($request->all());
            $validated = $request->validate([
                'studentName' => 'required|string|max:100',
                'studentSerial' => 'required|string|max:5',
                'studentClass' => 'required|string|max:10',
                'date' => 'required|date',
                'morningSport' => 'nullable|array',
                'wakeUpTime' => 'required',
                'worship' => 'nullable|array',
                'prayer' => 'required|array',
                'breakfast' => 'required|string',
                'learningActivity' => 'required|string',
                'communityActivity' => 'nullable|string',
                'bedtime' => 'nullable',
            ]);

            Habit::create([
                'studentName' => $validated['studentName'],
                'studentSerial' => $validated['studentSerial'],
                'studentClass' => $validated['studentClass'],
                'date' => $validated['date'],
                'morningSport' => json_encode($validated['morningSport'] ?? []),
                'wakeUpTime' => $validated['wakeUpTime'],
                'worship' => json_encode($validated['worship'] ?? []),
                'prayer' => json_encode($validated['prayer'] ?? []),
                'breakfast' => $validated['breakfast'],
                'learningActivity' => $validated['learningActivity'],
                'communityActivity' => $validated['communityActivity'] ?? null,
                'bedtime' => $validated['bedtime'] ?? null,
            ]);

            return redirect('/')->with('success', 'Data kebiasaan berhasil disimpan!');
        }

        public function edit(Habit $habit)
        {
            return view('habits.edit', compact('habit'));
        }
            public function destroy(Habit $habit)
            {
                $habit->delete();
                return redirect()->route('habits.index')
                    ->with('success', 'Data kebiasaan berhasil dihapus');
            }

        public function update(Request $request, Habit $habit)
        {
            $validated = $request->validate([
                'studentName' => 'required|string|max:100',
                'studentSerial' => 'required|string|max:5',
                'studentClass' => 'required|string|max:10',
                'date' => 'required|date',
                'morningSport' => 'nullable|array',
                'wakeUpTime' => 'required',
                'worship' => 'nullable|array',
                'prayer' => 'required|string',
                'breakfast' => 'required|string',
                'learningActivity' => 'required|string',
                'communityActivity' => 'nullable|string',
                'bedtime' => 'nullable',
            ]);

            $habit->update($validated);

            return redirect()->route('habits.index')->with('success', 'Data kebiasaan berhasil diperbarui!');
        }

}
