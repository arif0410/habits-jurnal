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
                'prayer' => 'required|string',
                'breakfast' => 'required|string',
                'learningActivity' => 'required|string',
                'communityActivity' => 'nullable|string',
                'bedtime' => 'nullable',
            ]);

            Habit::create($validated);

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

        //     public function index(Request $request)
        //     {
        //         $query = Habit::query();
                
        //         // Sorting logic
        //         $sortColumn = $request->get('sort', 'date');
        //         $sortDirection = $request->get('direction', 'desc');
                
        //         // Validate sort direction
        //         if (!in_array(strtolower($sortDirection), ['asc', 'desc'])) {
        //             $sortDirection = 'desc';
        //         }
                
        //         // Validate and apply sorting
        //         $validColumns = [
        //             'studentName', 'studentSerial', 'studentClass', 'date', 
        //             'morningSport', 'wakeUpTime', 'worship', 'prayer', 
        //             'breakfast', 'learningActivity', 'communityActivity', 'bedtime'
        //         ];
                
        //         if (in_array($sortColumn, $validColumns)) {
        //             // Handle special cases for sorting
        //             if ($sortColumn === 'wakeUpTime' || $sortColumn === 'bedtime') {
        //                 // For time columns, we need to convert to time format for proper sorting
        //                 $query->orderBy(DB::raw("TIME($sortColumn)"), $sortDirection);
        //             } else {
        //                 $query->orderBy($sortColumn, $sortDirection);
        //             }
        //         } else {
        //             $query->orderBy('date', 'desc');
        //         }
                
        //         // Search functionality
        //         if ($request->has('search') && !empty($request->search)) {
        //             $searchTerm = $request->search;
        //             $query->where(function($q) use ($searchTerm) {
        //                 $q->where('studentName', 'LIKE', "%$searchTerm%")
        //                   ->orWhere('studentClass', 'LIKE', "%$searchTerm%")
        //                   ->orWhere('morningSport', 'LIKE', "%$searchTerm%")
        //                   ->orWhere('wakeUpTime', 'LIKE', "%$searchTerm%")
        //                   ->orWhere('worship', 'LIKE', "%$searchTerm%")
        //                   ->orWhere('prayer', 'LIKE', "%$searchTerm%")
        //                   ->orWhere('breakfast', 'LIKE', "%$searchTerm%")
        //                   ->orWhere('learningActivity', 'LIKE', "%$searchTerm%")
        //                   ->orWhere('communityActivity', 'LIKE', "%$searchTerm%")
        //                   ->orWhere('bedtime', 'LIKE', "%$searchTerm%");
        //             });
        //         }
                
        //         // Filter by class
        //         if ($request->has('class') && !empty($request->class)) {
        //             $query->where('studentClass', $request->class);
        //         }
                
        //         // Filter by date
        //         if ($request->has('date') && !empty($request->date)) {
        //             $query->whereDate('date', $request->date);
        //         }
                
        //         $habits = $query->paginate(10)->appends($request->all());
                
        //         return view('habits.index', compact('habits', 'sortColumn', 'sortDirection'));
        //     }

        //     public function destroy(Habit $habit)
        //     {
        //         $habit->delete();
        //         return redirect()->route('habits.index')
        //             ->with('success', 'Data kebiasaan berhasil dihapus');
        //     }

        // public function exportExcel(Request $request)
        // {
        //     $query = Habit::query();
        //     $habits = $query->get();
            
        //     return Excel::download(new HabitsExport($habits), 'data_kebiasaan_siswa.xlsx');
        // }

        // public function exportPdf(Request $request)
        // {
        //     $query = Habit::query();
            
        //     // Apply the same filters as index method
        //     // [Copy the filtering logic from index method]
            
        //     $habits = $query->get();
        //     $pdf = PDF::loadView('habits.pdf', compact('habits'));
            
        //     return $pdf->download('data_kebiasaan_siswa.pdf');
        // }
}
