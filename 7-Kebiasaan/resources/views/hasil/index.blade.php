<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Data Kebiasaan Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Library untuk export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.20/jspdf.plugin.autotable.min.js"></script>
    <style>
        /* CSS yang sama seperti sebelumnya */
        :root {
            --primary: #5b7cfa;
            --primary-dark: #4561c9;
            --secondary: #6cbdff;
            --success: #0c8241;
            --danger: #a9bb06;
            --warning: #ffb74d;
            --text: #4a5568;
            --text-light: #718096;
            --border: #c8348d;
        }
        body {
            background: linear-gradient(135deg, #7c2e83, #4a00e0);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            padding: 15px;
            color: var(--text);
            line-height: 1.5;
            min-height: 100vh;
        }
        .container {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            padding: 20px;
            margin: 15px auto;
            max-width: 1800px;
        }
        .page-title { color: var(--primary); font-size: 1.5rem; font-weight: 600; }
        .badge-habit { padding: 6px 10px; border-radius: 10px; font-size: 0.8rem; white-space: nowrap; }
        .badge-yes { background-color: var(--success); color:white; }
        .badge-no { background-color: var(--danger); color:white; }
        .badge-time { background-color: var-secondary; color:white; }
        .edit-btn, .delete-btn { padding: 6px 10px; border-radius: 8px; font-size: 0.85rem; border:none; cursor:pointer; }
        .delete-btn { background-color: rgba(255, 138, 128, 0.15); color: var-danger; }
        .delete-btn:hover { background-color: var-danger; color:white; }
        .pagination { justify-content:center; }
        .export-buttons {
            margin-bottom: 20px;
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .btn-export {
            border-radius: 8px;
            padding: 8px 16px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .btn-excel {
            background-color: #217346;
            color: white;
            border: none;
        }
        .btn-excel:hover {
            background-color: #1a5c38;
            color: white;
        }
        .btn-pdf {
            background-color: #e74c3c;
            color: white;
            border: none;
        }
        .btn-pdf:hover {
            background-color: #c0392b;
            color: white;
        }
        
        /* Desktop-specific improvements */
        @media (min-width: 992px) {
            .container {
                padding: 30px;
            }
            .table-container {
                overflow: visible;
            }
            .table thead th {
                position: sticky;
                top: 0;
                background-color: #343a40;
                z-index: 10;
                vertical-align: middle;
                padding: 12px 8px;
            }
            .table td {
                padding: 10px 8px;
                vertical-align: middle;
            }
            .table th.sortable {
                cursor: pointer;
                position: relative;
                padding-right: 25px;
            }
            .table th.sortable:hover {
                background-color: #2c3136;
            }
            .table th.sortable::after {
                content: '';
                position: absolute;
                right: 8px;
                top: 50%;
                transform: translateY(-50%);
                width: 0;
                height: 0;
                border-left: 5px solid transparent;
                border-right: 5px solid transparent;
                border-top: 5px solid #fff;
                opacity: 0.5;
                transition: opacity 0.2s;
            }
            .table th.sortable.asc::after {
                border-top: none;
                border-bottom: 5px solid #fff;
                opacity: 1;
            }
            .badge-time {
                background-color: #00bcd4; /* biru terang */
                color: #fff;               /* teks putih */
                font-weight: bold;
            }
            .table th.sortable.desc::after {
                opacity: 1;
            }
            .table th.sortable::before {
                display: none;
            }
            .page-title {
                font-size: 1.8rem;
            }
            .table {
                table-layout: fixed;
                width: 100%;
            }
            .table th:nth-child(1), .table td:nth-child(1) { width: 12%; } /* Nama */
            .table th:nth-child(2), .table td:nth-child(2) { width: 7%; }  /* No Absen */
            .table th:nth-child(3), .table td:nth-child(3) { width: 10%; } /* Kelas */
            .table th:nth-child(4), .table td:nth-child(4) { width: 8%; }  /* Tanggal */
            .table th:nth-child(5), .table td:nth-child(5) { width: 7%; }  /* Olahraga */
            .table th:nth-child(6), .table td:nth-child(6) { width: 7%; }  /* Bangun */
            .table th:nth-child(7), .table td:nth-child(7) { width: 7%; }  /* Ibadah */
            .table th:nth-child(8), .table td:nth-child(8) { width: 7%; }  /* Sholat */
            .table th:nth-child(9), .table td:nth-child(9) { width: 7%; }  /* Sarapan */
            .table th:nth-child(10), .table td:nth-child(10) { width: 7%; } /* Belajar */
            .table th:nth-child(11), .table td:nth-child(11) { width: 8%; } /* Komunitas */
            .table th:nth-child(12), .table td:nth-child(12) { width: 8%; } /* Jam Tidur */
            .table th:nth-child(13), .table td:nth-child(13) { width: 5%; } /* Aksi */
        }

        /* Mobile responsiveness maintained */
        @media (max-width: 991px) {
            .table-responsive {
                overflow-x: auto;
            }
            .container {
                padding: 15px;
            }
        }

        /* Filter and search section */
        .filter-section {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .filter-row {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            align-items: end;
        }
        .filter-group {
            flex: 1;
            min-width: 180px;
        }
        .filter-group label {
            font-weight: 500;
            margin-bottom: 5px;
            color: var-text;
        }
        .filter-actions {
            display: flex;
            gap: 10px;
        }
        
        /* Save settings button */
        .btn-save-settings {
            background-color: #6c757d;
            color: white;
            border: none;
        }
        .btn-save-settings:hover {
            background-color: #5a6268;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="page-title"><i class="fas fa-table"></i> Data Kebiasaan Siswa</h2>
        <div class="export-buttons">
            <button class="btn btn-export btn-excel" onclick="exportToExcel()">
                <i class="fas fa-file-excel"></i> Excel
            </button>
            <button class="btn btn-export btn-pdf" onclick="exportToPDF()">
                <i class="fas fa-file-pdf"></i> PDF
            </button>
            <button class="btn btn-export btn-save-settings" onclick="saveSortSettings()">
                <i class="fas fa-save"></i> Simpan Pengaturan
            </button>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="filter-section">
        <div class="filter-row">
            <div class="filter-group">
                <label for="searchInput">Cari</label>
                <input type="text" id="searchInput" class="form-control" placeholder="Cari data..." oninput="filterTable()">
            </div>
            <div class="filter-group">
                <label for="classFilter">Kelas</label>
                <select id="classFilter" class="form-control" onchange="filterTable()">
                    <option value="">Semua Kelas</option>
                    <option value="7 A">7 A</option>
                    <option value="7 B">7 B</option>
                    <option value="7 C">7 C</option>
                    <option value="7 D">7 D</option>
                    <option value="7 E">7 E</option>
                    <option value="7 F">7 F</option>
                    <option value="7 G">7 G</option>
                    <option value="8 A">8 A</option>
                    <option value="8 B">8 B</option>
                    <option value="8 C">8 C</option>
                    <option value="8 D">8 D</option>
                    <option value="8 E">8 E</option>
                    <option value="8 F">8 F</option>
                    <option value="8 G">8 G</option>
                    <option value="9 A">9 A</option>
                    <option value="9 B">9 B</option>
                    <option value="9 C">9 C</option>
                    <option value="9 D">9 D</option>
                    <option value="9 E">9 E</option>
                    <option value="9 F">9 F</option>
                    <option value="9 G">9 G</option>
                </select>
            </div>
            <div class="filter-group">
                <label for="dateFilter">Tanggal</label>
                <input type="date" id="dateFilter" class="form-control" onchange="filterTable()">
            </div>
            <div class="filter-actions">
                <button class="btn btn-secondary" onclick="resetFilters()">
                    <i class="fas fa-redo"></i> Reset
                </button>
                <button class="btn btn-info" onclick="loadSortSettings()">
                    <i class="fas fa-cog"></i> Muat Pengaturan
                </button>
            </div>
        </div>
    </div>
    
    <div class="table-container table-responsive">
        <table class="table table-bordered table-striped" id="habits-table">
            <thead class="thead-dark">
                <tr>
                    <th class="sortable" onclick="sortTable(0)">Nama</th>
                    <th class="sortable" onclick="sortTable(1)">No Absen</th>
                    <th class="sortable" onclick="sortTable(2)">Kelas</th>
                    <th class="sortable" onclick="sortTable(3)">Tanggal</th>
                    <th class="sortable" onclick="sortTable(4)">Olahraga</th>
                    <th class="sortable" onclick="sortTable(5)">Bangun</th>
                    <th class="sortable" onclick="sortTable(6)">Ibadah</th>
                    <th class="sortable" onclick="sortTable(7)">Sholat</th>
                    <th class="sortable" onclick="sortTable(8)">Sarapan</th>
                    <th class="sortable" onclick="sortTable(9)">Belajar</th>
                    <th class="sortable" onclick="sortTable(10)">Komunitas</th>
                    <th class="sortable" onclick="sortTable(11)">Jam Tidur</th>
                    <th class="sortable">Aksi</th>
                </tr>
            </thead>
            <tbody id="habits-tbody">
                @forelse($habits as $habit)
                    <tr>
                        <td>{{ $habit->studentName }}</td>
                        <td>{{ $habit->studentSerial }}</td>
                        <td>{{ $habit->studentClass }}</td>
                        <td data-sort="{{ \Carbon\Carbon::parse($habit->date)->format('Ymd') }}">{{ \Carbon\Carbon::parse($habit->date)->format('d/m/Y') }}</td>
                        <td data-sort="{{ $habit->morningSport[0] }}"><span class="badge-habit {{ $habit->morningSport == 'Ya' ? 'badge-yes' : 'badge-no' }}">{{ $habit->morningSport[0] }}</span></td>
                        <td data-sort="{{ str_replace(':', '', $habit->wakeUpTime) }}"><span class="badge-habit badge-time">{{ $habit->wakeUpTime }}</span></td>
                        <td data-sort="{{ $habit->worship[0] }}"><span class="badge-habit {{ $habit->worship == 'Ya' ? 'badge-yes' : 'badge-no' }}">{{ $habit->worship[0] }}</span></td>
                        <td data-sort="{{ $habit->prayer }}"><span class="badge-habit {{ $habit->prayer == 'Ya' ? 'badge-yes' : 'badge-no' }}">{{ $habit->prayer }}</span></td>
                        <td data-sort="{{ $habit->breakfast }}"><span class="badge-habit {{ $habit->breakfast == 'Ya' ? 'badge-yes' : 'badge-no' }}">{{ $habit->breakfast }}</span></td>
                        <td data-sort="{{ $habit->learningActivity }}"><span class="badge-habit {{ $habit->learningActivity == 'Ya' ? 'badge-yes' : 'badge-no' }}">{{ $habit->learningActivity }}</span></td>
                        <td data-sort="{{ $habit->communityActivity }}"><span class="badge-habit {{ $habit->communityActivity == 'Ya' ? 'badge-yes' : 'badge-no' }}">{{ $habit->communityActivity }}</span></td>
                        <td data-sort="{{ str_replace(':', '', $habit->bedtime) }}"><span class="badge-habit badge-time">{{ $habit->bedtime }}</span></td>
                        <td>
                            <form action="{{ route('habits.destroy', $habit->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="13" class="text-center">Tidak ada data kebiasaan</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <!-- Pagination Laravel -->
    @if(method_exists($habits, 'links'))
        <div class="mt-3">
            {{ $habits->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>
    @endif
    {{-- <div class="mt-3">
        {{ $habits->appends(request()->query())->links('pagination::bootstrap-4') }}
    </div> --}}
    <!-- Dropdown Pilihan Jumlah Data -->
    <div class="flex justify-between items-center mb-4">
        <div>
            <label for="per_page" class="mr-2">Tampilkan:</label>
            <select name="per_page" id="per_page" onchange="changePerPage(this.value)" class="border rounded p-1">
                <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>10</option>
                <option value="25" {{ $perPage == 25 ? 'selected' : '' }}>25</option>
                <option value="32" {{ $perPage == 32 ? 'selected' : '' }}>32</option>
                <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>100</option>
                {{-- <option value="100" {{ $perPage == 1000 ? 'selected' : '' }}>1000</option> --}}
                <option value="all" {{ $perPage == 'all' ? 'selected' : '' }}>Semua</option>
            </select>
        </div>
    </div>

<!-- Script untuk mengubah jumlah data -->
<script>
function changePerPage(value) {
    const url = new URL(window.location.href);
    url.searchParams.set('per_page', value);
    url.searchParams.set('page', 1); // Reset ke halaman pertama
    window.location.href = url.toString();
}
</script>
</div>

<script>
    // Variables for sorting
    let currentSortColumn = -1;
    let sortDirection = 1; // 1 for ascending, -1 for descending

    // Function to sort table
    function sortTable(columnIndex) {
        const table = document.getElementById('habits-table');
        const tbody = document.getElementById('habits-tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));
        
        // Remove previous sort indicators
        const headers = table.querySelectorAll('th.sortable');
        headers.forEach(header => {
            header.classList.remove('asc', 'desc');
        });
        
        // Set new sort indicator
        if (currentSortColumn === columnIndex) {
            sortDirection *= -1; // Toggle direction
        } else {
            currentSortColumn = columnIndex;
            sortDirection = 1;
        }
        
        headers[columnIndex].classList.add(sortDirection === 1 ? 'asc' : 'desc');
        
        // Sort rows
        rows.sort((a, b) => {
            let aValue, bValue;
            
            if (a.cells[columnIndex].dataset.sort) {
                aValue = a.cells[columnIndex].dataset.sort;
                bValue = b.cells[columnIndex].dataset.sort;
            } else {
                aValue = a.cells[columnIndex].textContent.trim();
                bValue = b.cells[columnIndex].textContent.trim();
            }
            
            // Handle numeric values
            if (columnIndex === 1) { // No Absen column
                aValue = parseInt(aValue);
                bValue = parseInt(bValue);
            }
            
            if (aValue < bValue) return -1 * sortDirection;
            if (aValue > bValue) return 1 * sortDirection;
            return 0;
        });
        
        // Remove existing rows
        while (tbody.firstChild) {
            tbody.removeChild(tbody.firstChild);
        }
        
        // Add sorted rows
        rows.forEach(row => tbody.appendChild(row));
        
        // Save sort settings automatically
        saveSortSettings();
    }

    // Function to save sort settings to localStorage
    function saveSortSettings() {
        const settings = {
            sortColumn: currentSortColumn,
            sortDirection: sortDirection
        };
        
        localStorage.setItem('tableSortSettings', JSON.stringify(settings));
        
        // Show success message
        alert('Pengaturan sorting berhasil disimpan! Pengaturan akan diterima saat Anda membuka halaman ini lagi.');
    }

    // Function to load sort settings from localStorage
    function loadSortSettings() {
        const savedSettings = localStorage.getItem('tableSortSettings');
        
        if (savedSettings) {
            const settings = JSON.parse(savedSettings);
            
            // Apply saved settings
            if (settings.sortColumn !== -1) {
                currentSortColumn = settings.sortColumn;
                sortDirection = settings.sortDirection;
                
                // Apply the sort
                sortTable(settings.sortColumn);
                
                // Show success message
                alert('Pengaturan sorting berhasil dimuat!');
            }
        } else {
            alert('Tidak ada pengaturan sorting yang tersimpan.');
        }
    }

    // Function to automatically load sort settings when page loads
    function loadSortSettingsOnPageLoad() {
        const savedSettings = localStorage.getItem('tableSortSettings');
        
        if (savedSettings) {
            const settings = JSON.parse(savedSettings);
            
            // Apply saved settings
            if (settings.sortColumn !== -1) {
                currentSortColumn = settings.sortColumn;
                sortDirection = settings.sortDirection;
                
                // Apply the sort
                sortTable(settings.sortColumn);
            }
        }
    }

    // Load sort settings when page is loaded
    document.addEventListener('DOMContentLoaded', function() {
        loadSortSettingsOnPageLoad();
    });

    // Function to export sort settings to a file
    function exportSortSettings() {
        const settings = {
            sortColumn: currentSortColumn,
            sortDirection: sortDirection,
            exportDate: new Date().toISOString()
        };
        
        const dataStr = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(settings, null, 2));
        const downloadAnchorNode = document.createElement('a');
        downloadAnchorNode.setAttribute("href", dataStr);
        downloadAnchorNode.setAttribute("download", "sort_settings.json");
        document.body.appendChild(downloadAnchorNode);
        downloadAnchorNode.click();
        downloadAnchorNode.remove();
    }

    // Function to import sort settings from a file
    function importSortSettings(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                try {
                    const settings = JSON.parse(e.target.result);
                    
                    if (settings.sortColumn !== undefined && settings.sortDirection !== undefined) {
                        currentSortColumn = settings.sortColumn;
                        sortDirection = settings.sortDirection;
                        
                        // Apply the sort
                        sortTable(settings.sortColumn);
                        
                        // Save to localStorage
                        localStorage.setItem('tableSortSettings', JSON.stringify(settings));
                        
                        alert('Pengaturan sorting berhasil diimpor!');
                    } else {
                        alert('File tidak valid: format pengaturan tidak sesuai.');
                    }
                } catch (error) {
                    alert('Error membaca file: ' + error.message);
                }
            };
            reader.readAsText(file);
        }
        
        // Reset the input
        event.target.value = '';
    }

    // Function to filter table
    function filterTable() {
        const searchText = document.getElementById('searchInput').value.toLowerCase();
        const classFilter = document.getElementById('classFilter').value;
        const dateFilter = document.getElementById('dateFilter').value;
        const rows = document.getElementById('habits-tbody').querySelectorAll('tr');
        
        rows.forEach(row => {
            let showRow = true;
            const cells = row.querySelectorAll('td');
            
            // Text search (search across all columns)
            if (searchText) {
                let found = false;
                cells.forEach((cell, index) => {
                    if (index < 12) { // Exclude action column
                        if (cell.textContent.toLowerCase().includes(searchText)) {
                            found = true;
                        }
                    }
                });
                if (!found) showRow = false;
            }
            
            // Class filter
            if (classFilter && cells[2].textContent !== classFilter) {
                showRow = false;
            }
            
            // Date filter
            if (dateFilter) {
                const dateCell = cells[3];
                const cellDate = dateCell.dataset.sort; // YYYYMMDD format
                const filterDate = dateFilter.replace(/-/g, ''); // Convert YYYY-MM-DD to YYYYMMDD
                
                if (cellDate !== filterDate) {
                    showRow = false;
                }
            }
            
            // Show or hide row
            row.style.display = showRow ? '' : 'none';
        });
    }

    // Function to reset filters
    function resetFilters() {
        document.getElementById('searchInput').value = '';
        document.getElementById('classFilter').value = '';
        document.getElementById('dateFilter').value = '';
        
        const rows = document.getElementById('habits-tbody').querySelectorAll('tr');
        rows.forEach(row => {
            row.style.display = '';
        });
    }

    // Fungsi untuk export ke Excel
    function exportToExcel() {
        // Mengambil elemen tabel
        const table = document.getElementById('habits-table');
        
        // Membuat workbook baru
        const wb = XLSX.utils.book_new();
        
        // Mengonversi tabel menjadi worksheet
        const ws = XLSX.utils.table_to_sheet(table);
        
        // Menambahkan worksheet ke workbook
        XLSX.utils.book_append_sheet(wb, ws, "Data Kebiasaan Siswa");
        
        // Menyimpan file
        XLSX.writeFile(wb, "data_kebiasaan_siswa.xlsx");
    }

    // Fungsi untuk export ke PDF
    function exportToPDF() {
        // Inisialisasi jsPDF
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        
        // Judul laporan
        doc.setFontSize(18);
        doc.text("Data Kebiasaan Siswa", 14, 15);
        doc.setFontSize(11);
        doc.setTextColor(100);
        doc.text(`Dicetak pada: ${new Date().toLocaleDateString('id-ID')}`, 14, 22);
        
        // Mengambil data dari tabel
        const table = document.getElementById('habits-table');
        const headers = [];
        const rows = [];
        
        // Mengambil header
        for (let i = 0; i < table.rows[0].cells.length - 1; i++) { // -1 untuk menghilangkan kolom aksi
            headers.push(table.rows[0].cells[i].innerText);
        }
        
        // Mengambil data rows (mulai dari index 1 untuk melewati header)
        for (let i = 1; i < table.rows.length; i++) {
            const row = table.rows[i];
            const rowData = [];
            
            for (let j = 0; j < row.cells.length - 1; j++) { // -1 untuk menghilangkan kolom aksi
                // Mengambil teks tanpa elemen span
                const cell = row.cells[j];
                let cellText = cell.innerText;
                
                // Jika ada elemen span, ambil teks dari span
                if (cell.querySelector('span')) {
                    cellText = cell.querySelector('span').innerText;
                }
                
                rowData.push(cellText);
            }
            
            rows.push(rowData);
        }
        
        // Membuat tabel di PDF
        doc.autoTable({
            head: [headers],
            body: rows,
            startY: 30,
            styles: { fontSize: 9 },
            headStyles: { fillColor: [91, 124, 250] }
        });
        
        // Menyimpan PDF
        doc.save('data_kebiasaan_siswa.pdf');
    }
</script>
</body>
</html>