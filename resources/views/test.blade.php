<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Aplikasi 7 Kebiasaan Anak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            padding: 15px;
            -webkit-text-size-adjust: 100%;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
        
        header {
            background: linear-gradient(135deg, #4a00e0 0%, #8e2de2 100%);
            color: white;
            text-align: center;
            padding: 20px 15px;
        }
        
        header h1 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
        
        header p {
            font-size: 1rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .app-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 15px;
        }
        
        .form-section {
            flex: 1;
            min-width: 0;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-section h2 {
            color: #4a00e0;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #8e2de2;
            font-size: 1.3rem;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            transition: border 0.3s;
            -webkit-appearance: none;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #4a00e0;
            outline: none;
            box-shadow: 0 0 0 2px rgba(74, 0, 224, 0.2);
        }
        
        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
        
        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 5px;
            flex: 1 0 30%;
        }
        
        .checkbox-item input {
            width: auto;
        }
        
        .btn {
            background: linear-gradient(135deg, #4a00e0 0%, #8e2de2 100%);
            color: white;
            border: none;
            padding: 15px 20px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            font-weight: 600;
            transition: all 0.3s;
            margin-top: 10px;
        }
        
        .btn:hover {
            background: linear-gradient(135deg, #8e2de2 0%, #4a00e0 100%);
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        
        .data-section {
            flex: 2;
            min-width: 0;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .data-section h2 {
            color: #4a00e0;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #8e2de2;
            font-size: 1.3rem;
        }
        
        .sorting-controls {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }
        
        .sort-btn {
            background: #f1f1f1;
            border: 1px solid #ddd;
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s;
        }
        
        .sort-btn:hover {
            background: #e5e5e5;
        }
        
        .sort-btn.active {
            background: #4a00e0;
            color: white;
            border-color: #4a00e0;
        }
        
        .habits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 12px;
            margin-bottom: 20px;
        }
        
        .habit-card {
            background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .habit-card i {
            font-size: 1.5rem;
            margin-bottom: 8px;
            color: #4a00e0;
        }
        
        .habit-card h3 {
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 10px 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 0.9rem;
        }
        
        th {
            background: linear-gradient(135deg, #4a00e0 0%, #8e2de2 100%);
            color: white;
            font-weight: 600;
            cursor: pointer;
            position: relative;
        }
        
        th:hover {
            background: linear-gradient(135deg, #5a1fe4 0%, #9e3df2 100%);
        }
        
        th i {
            margin-left: 5px;
            font-size: 0.8rem;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        tr:hover {
            background-color: #f1f1f1;
        }
        
        .actions {
            display: flex;
            gap: 8px;
        }
        
        .actions button {
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .edit-btn {
            background: #4a00e0;
            color: white;
        }
        
        .delete-btn {
            background: #ff4757;
            color: white;
        }
        
        .actions button:hover {
            opacity: 0.9;
            transform: scale(1.05);
        }
        
        footer {
            text-align: center;
            padding: 15px;
            background: #4a00e0;
            color: white;
            font-size: 0.9rem;
        }
        
        /* Media queries untuk responsivitas */
        @media (max-width: 896px) and (orientation: landscape) {
            body {
                padding: 10px;
            }
            
            .app-container {
                flex-direction: row;
                gap: 15px;
                padding: 10px;
            }
            
            .form-section, .data-section {
                padding: 15px;
            }
            
            .habits-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }
        
        @media (max-width: 828px) { /* Ukuran iPhone XR dalam portrait */
            body {
                padding: 10px;
            }
            
            header {
                padding: 15px 10px;
            }
            
            header h1 {
                font-size: 1.5rem;
            }
            
            header p {
                font-size: 0.9rem;
            }
            
            .app-container {
                flex-direction: column;
                gap: 15px;
                padding: 10px;
            }
            
            .form-section, .data-section {
                padding: 15px;
                width: 100%;
            }
            
            .form-section h2, .data-section h2 {
                font-size: 1.2rem;
            }
            
            .sorting-controls {
                flex-direction: column;
            }
            
            .sort-btn {
                width: 100%;
                justify-content: center;
            }
            
            .checkbox-item {
                flex: 1 0 45%;
            }
            
            .habits-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 10px;
            }
            
            .habit-card {
                padding: 10px;
            }
            
            .habit-card i {
                font-size: 1.3rem;
            }
            
            .habit-card h3 {
                font-size: 0.85rem;
            }
            
            table {
                display: block;
                overflow-x: auto;
            }
            
            th, td {
                padding: 8px 10px;
                font-size: 0.85rem;
            }
            
            .form-group input,
            .form-group select,
            .form-group textarea {
                padding: 10px;
                font-size: 16px; /* Mencegah zoom pada iOS */
            }
            
            /* Penyesuaian khusus untuk input time di iOS */
            input[type="time"] {
                height: 44px; /* Memastikan tap target cukup besar */
            }
        }
        
        @media (max-width: 414px) { /* Ukuran layar lebih kecil */
            .habits-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .checkbox-item {
                flex: 1 0 100%;
            }
            
            header h1 {
                font-size: 1.3rem;
            }
            
            .form-section h2, .data-section h2 {
                font-size: 1.1rem;
            }
            
            th, td {
                padding: 6px 8px;
                font-size: 0.8rem;
            }
            
            .actions {
                flex-direction: column;
                gap: 5px;
            }
            
            .actions button {
                padding: 5px 8px;
            }
        }
        
        /* Penyesuaian untuk elemen form di iOS */
        select {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23444' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 16px;
            padding-right: 40px;
        }
        
        /* Memastikan tombol mudah di-tap di perangkat mobile */
        button, input[type="checkbox"], input[type="radio"], label {
            min-height: 44px;
            min-width: 44px;
        }
        
        .checkbox-item label {
            min-height: 0;
        }

        /* Styling checkbox custom */
        .checkbox-item {
            position: relative;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .checkbox-item input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            width: 22px;
            height: 22px;
            border: 2px solid #4a00e0;
            border-radius: 6px;
            background: #fff;
            cursor: pointer;
            position: relative;
            transition: all 0.2s ease;
        }

        .checkbox-item input[type="checkbox"]:hover {
            border-color: #8e2de2;
            box-shadow: 0 0 5px rgba(142,45,226,0.4);
        }

        .checkbox-item input[type="checkbox"]:checked {
            background: linear-gradient(135deg, #4a00e0, #8e2de2);
            border-color: #4a00e0;
        }

        .checkbox-item input[type="checkbox"]:checked::after {
            content: "\f00c"; /* Font Awesome check icon */
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            font-size: 14px;
            transform: translate(-50%, -50%);
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1><i class="fas fa-child"></i> Aplikasi 7 Kebiasaan Anak</h1>
            <p>Pantau perkembangan kebiasaan baik anak sehari-hari</p>
        </header>
        
        <div class="app-container">
            <div class="form-section">
                <h2><i class="fas fa-edit"></i> Input Data Kebiasaan</h2>
                
                <form id="habitForm" action="/habits/simpan">
                    @csrf
                    <div class="form-group">
                        <label for="studentName">Nama Siswa</label>
                        <input type="text" id="studentName" name="studentName" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="prayer">Kelas</label>
                        <select id="prayer" name="prayer" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="9A">9A</option>
                            <option value="9B">9B</option>
                            <option value="9C">9C</option>
                            <option value="9D">9D</option>
                            <option value="9E">9E</option>
                            <option value="9F">9F</option>
                            <option value="9G">9G</option>
                            <option value="9A">8A</option>
                            <option value="9B">8B</option>
                            <option value="9C">8C</option>
                            <option value="9D">8D</option>
                            <option value="9E">8E</option>
                            <option value="9F">8F</option>
                            <option value="9G">8G</option>
                            <option value="9A">7A</option>
                            <option value="9B">7B</option>
                            <option value="9C">7C</option>
                            <option value="9D">7D</option>
                            <option value="9E">7E</option>
                            <option value="9F">7F</option>
                            <option value="9G">7G</option>
                            
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Olahraga Pagi</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport1" name="morningSport" value="Lari">
                                <label for="sport1">Lari</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport2" name="morningSport" value="Senam">
                                <label for="sport2">Senam</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport3" name="morningSport" value="Bersepeda">
                                <label for="sport3">Bersepeda</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport4" name="morningSport" value="Bersepeda">
                                <label for="jalan_sehat">JALAN SEHAT</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport5" name="morningSport" value="Bersepeda">
                                <label for="perengangan_otot">PEREGANGAN OTOT</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport6" name="morningSport" value="Bersepeda">
                                <label for="Tidak_ada">TIDAK OLAHRAGA</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="wakeUpTime">Bangun Pagi</label>
                        <input type="time" id="wakeUpTime" name="wakeUpTime" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Ibadah yang Dilaksanakan Setelah Bangun Pagi</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship1" name="worship" value="Sholat">
                                <label for="tahajud">Tahajud</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship2" name="worship" value="Baca Kitab">
                                <label for="sholat_subuh">Sholat Subuh</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship3" name="worship" value="Meditasi">
                                <label for="mengaji">Mengaji/Tadarus</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship3" name="worship" value="Meditasi">
                                <label for="tidak_sholat_subuh">Tidak Sholat Subuh</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="prayer">Ibadah 5 Waktu</label>
                        <select id="prayer" name="prayer" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="Rajin">RAJIN</option>
                            <option value="Terkadang">TERKADANG</option>
                            <option value="Jarang">JARANG</option>
                            <option value="Tidak_pernah">TIDAK PERNAH</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="breakfast">Pelaksanaan Sarapan</label>
                        <select id="breakfast" name="breakfast" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="Ya">YA</option>
                            <option value="Membawa_bekal">MEMBAWA BEKAL</option>
                            <option value="Program_MBG_sekolah">Program MBG Disekolah</option>
                            <option value="Tidak_sarapan">Tidak Sarapan</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="learningActivity">Keaktifan Belajar di Rumah</label>
                        <select id="learningActivity" name="learningActivity" required>
                            <option value="">-- Pilih Tingkat Keaktifan --</option>
                            <option value="Selalu_belajar">Selalu Belajar</option>
                            <option value="terkadang">Terkadang</option>
                            <option value="ketika_ulangan">Ketika Ulangan</option>
                            <option value="bila_disuruh">Bila Disuruh</option>
                            <option value="Dipaksa Belajar">Dipaksa Belajar</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="communityActivity">Kegiatan Bermasyarakat</label>
                        <textarea id="communityActivity" name="communityActivity" rows="3"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="sleepTime">Rentang Waktu Tidur Malam</label>
                        <div style="display: flex; gap: 10px; align-items: center;">
                            <input type="time" id="bedtime" name="bedtime" placeholder="Waktu tidur" required>
                            <span>s/d</span>
                            <input type="time" id="wakeTime" name="wakeTime" placeholder="Waktu bangun" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn"><i class="fas fa-save"></i> Simpan Data</button>
                </form>
            </div>
            
            <div class="data-section">
                <h2><i class="fas fa-chart-line"></i> Progress Kebiasaan</h2>
                
                <div class="sorting-controls">
                    <button class="sort-btn" id="sortDateAsc">
                        <i class="fas fa-sort-amount-down-alt"></i> Tanggal Terlama
                    </button>
                    <button class="sort-btn" id="sortDateDesc">
                        <i class="fas fa-sort-amount-down"></i> Tanggal Terbaru
                    </button>
                    <button class="sort-btn" id="sortClass">
                        <i class="fas fa-sort-alpha-down"></i> Urutkan per Kelas
                    </button>
                </div>
                
                <div class="habits-grid">
                    <div class="habit-card">
                        <i class="fas fa-running"></i>
                        <h3>Olahraga</h3>
                        <p>85%</p>
                    </div>
                    <div class="habit-card">
                        <i class="fas fa-sun"></i>
                        <h3>Bangun Pagi</h3>
                        <p>78%</p>
                    </div>
                    <div class="habit-card">
                        <i class="fas fa-pray"></i>
                        <h3>Ibadah</h3>
                        <p>92%</p>
                    </div>
                    <div class="habit-card">
                        <i class="fas fa-utensils"></i>
                        <h3>Sarapan</h3>
                        <p>88%</p>
                    </div>
                    <div class="habit-card">
                        <i class="fas fa-book"></i>
                        <h3>Belajar</h3>
                        <p>75%</p>
                    </div>
                    <div class="habit-card">
                        <i class="fas fa-users"></i>
                        <h3>Masyarakat</h3>
                        <p>65%</p>
                    </div>
                    <div class="habit-card">
                        <i class="fas fa-bed"></i>
                        <h3>Tidur</h3>
                        <p>80%</p>
                    </div>
                </div>
                
                <h2><i class="fas fa-table"></i> Data Kebiasaan</h2>
                
                <table>
                    <thead>
                        <tr>
                            <th data-sort="name">Nama <i class="fas fa-sort"></i></th>
                            <th data-sort="class">Kelas <i class="fas fa-sort"></i></th>
                            <th data-sort="date">Tanggal <i class="fas fa-sort"></i></th>
                            <th>Olahraga</th>
                            <th>Bangun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="habitTable">
                        <tr>
                            <td>Ahmad</td>
                            <td>5A</td>
                            <td data-date="2023-08-15">15/08/2023</td>
                            <td>Lari, Senam</td>
                            <td>05:30</td>
                            <td class="actions">
                                <button class="edit-btn"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Siti</td>
                            <td>4B</td>
                            <td data-date="2023-08-15">15/08/2023</td>
                            <td>Bersepeda</td>
                            <td>05:45</td>
                            <td class="actions">
                                <button class="edit-btn"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Budi</td>
                            <td>6C</td>
                            <td data-date="2023-08-14">14/08/2023</td>
                            <td>Lari</td>
                            <td>18:00</td>
                            <td class="actions">
                                <button class="edit-btn"><i class="fas fa-edit"></i></button>
                                <button class="delete-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <footer>
            <p>&copy; 2023 Aplikasi 7 Kebiasaan Anak. Semua hak dilindungi.</p>
        </footer>
    </div>

    {{-- <script>
        // Data store
        let habitData = [];
        
        // Initialize with sample data
        function initializeData() {
            const sampleData = [
                { name: 'Ahmad', class: '5A', date: '2023-08-15', sports: 'Lari, Senam', wakeTime: '05:30' },
                { name: 'Siti', class: '4B', date: '2023-08-15', sports: 'Bersepeda', wakeTime: '05:45' },
                { name: 'Budi', class: '6C', date: '2023-08-14', sports: 'Lari', wakeTime: '06:00' }
            ];
            
            habitData = sampleData.map(item => ({
                ...item,
                displayDate: formatDisplayDate(item.date)
            }));
            
            renderTable();
        }
        
        // Format date for display
        function formatDisplayDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('id-ID');
        }
        
        // Render table with current data
        function renderTable() {
            const tableBody = document.getElementById('habitTable');
            tableBody.innerHTML = '';
            
            habitData.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.name}</td>
                    <td>${item.class}</td>
                    <td data-date="${item.date}">${item.displayDate}</td>
                    <td>${item.sports}</td>
                    <td>${item.wakeTime}</td>
                    <td class="actions">
                        <button class="edit-btn"><i class="fas fa-edit"></i></button>
                        <button class="delete-btn"><i class="fas fa-trash"></i></button>
                    </td>
                `;
                
                // Add event listener for delete button
                row.querySelector('.delete-btn').addEventListener('click', function() {
                    deleteHabit(item);
                });
                
                tableBody.appendChild(row);
            });
        }
        
        // Sort data by date (ascending)
        function sortByDateAsc() {
            habitData.sort((a, b) => new Date(a.date) - new Date(b.date));
            renderTable();
            updateActiveButton('sortDateAsc');
        }
        
        // Sort data by date (descending)
        function sortByDateDesc() {
            habitData.sort((a, b) => new Date(b.date) - new Date(a.date));
            renderTable();
            updateActiveButton('sortDateDesc');
        }
        
        // Sort data by class
        function sortByClass() {
            habitData.sort((a, b) => a.class.localeCompare(b.class));
            renderTable();
            updateActiveButton('sortClass');
        }
        
        // Sort data by name
        function sortByName() {
            habitData.sort((a, b) => a.name.localeCompare(b.name));
            renderTable();
        }
        
        // Update active button state
        function updateActiveButton(activeId) {
            document.querySelectorAll('.sort-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            document.getElementById(activeId).classList.add('active');
        }
        
        // Delete habit
        function deleteHabit(habit) {
            if (confirm(`Hapus data kebiasaan untuk ${habit.name}?`)) {
                habitData = habitData.filter(item => 
                    item.name !== habit.name || 
                    item.class !== habit.class || 
                    item.date !== habit.date
                );
                renderTable();
            }
        }
        
        // Add new habit
        function addHabit(habit) {
            habitData.push({
                ...habit,
                displayDate: formatDisplayDate(habit.date)
            });
            renderTable();
        }
        
        // Initialize when page loads
        document.addEventListener('DOMContentLoaded', function() {
            initializeData();
            
            // Set up event listeners for sorting buttons
            document.getElementById('sortDateAsc').addEventListener('click', sortByDateAsc);
            document.getElementById('sortDateDesc').addEventListener('click', sortByDateDesc);
            document.getElementById('sortClass').addEventListener('click', sortByClass);
            
            // Set up event listeners for table header sorting
            document.querySelectorAll('th[data-sort]').forEach(th => {
                th.addEventListener('click', function() {
                    const sortType = this.getAttribute('data-sort');
                    if (sortType === 'name') {
                        sortByName();
                    } else if (sortType === 'class') {
                        sortByClass();
                    } else if (sortType === 'date') {
                        sortByDateDesc();
                    }
                });
            });
            
            // Set up form submission
            document.getElementById('habitForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const studentName = document.getElementById('studentName').value;
                const studentClass = document.getElementById('studentClass').value;
                const date = document.getElementById('date').value;
                
                // Get morning sports
                const morningSports = [];
                document.querySelectorAll('input[name="morningSport"]:checked').forEach(checkbox => {
                    morningSports.push(checkbox.value);
                });
                
                const wakeUpTime = document.getElementById('wakeUpTime').value;
                
                // Create new habit object
                const newHabit = {
                    name: studentName,
                    class: studentClass,
                    date: date,
                    sports: morningSports.join(', '),
                    wakeTime: wakeUpTime
                };
                
                // Add to data and render table
                addHabit(newHabit);
                
                // Reset form
                this.reset();
                document.getElementById('date').valueAsDate = new Date();
                
                // Show success message
                alert('Data kebiasaan berhasil disimpan!');
            });
            
            // Set today's date as default
            document.getElementById('date').valueAsDate = new Date();
            
            // Set up event listeners for existing delete buttons
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const name = row.cells[0].textContent;
                    const className = row.cells[1].textContent;
                    const date = row.getAttribute('data-date');
                    
                    if (confirm(`Hapus data kebiasaan untuk ${name}?`)) {
                        habitData = habitData.filter(item => 
                            item.name !== name || 
                            item.class !== className || 
                            item.date !== date
                        );
                        renderTable();
                    }
                });
            });
        });
    </script> --}}
</body>
</html>