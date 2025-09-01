<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            padding: 20px;
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
            padding: 25px 20px;
        }
        
        header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        header p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .app-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }
        
        .form-section {
            flex: 1;
            min-width: 300px;
            background: #f9f9f9;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-section h2 {
            color: #4a00e0;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #8e2de2;
        }
        
        .form-group {
            margin-bottom: 20px;
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
            gap: 15px;
            margin-top: 10px;
        }
        
        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .checkbox-item input {
            width: auto;
        }
        
        .btn {
            background: linear-gradient(135deg, #4a00e0 0%, #8e2de2 100%);
            color: white;
            border: none;
            padding: 15px 20px;
            font-size: 18px;
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
            min-width: 300px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .data-section h2 {
            color: #4a00e0;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #8e2de2;
        }
        
        .habits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .habit-card {
            background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            color: #333;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .habit-card i {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #4a00e0;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background: linear-gradient(135deg, #4a00e0 0%, #8e2de2 100%);
            color: white;
            font-weight: 600;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        tr:hover {
            background-color: #f1f1f1;
        }
        
        .actions {
            display: flex;
            gap: 10px;
        }
        
        .actions button {
            padding: 8px 12px;
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
            padding: 20px;
            background: #4a00e0;
            color: white;
        }
        
        @media (max-width: 768px) {
            .app-container {
                flex-direction: column;
            }
            
            .habits-grid {
                grid-template-columns: repeat(2, 1fr);
            }
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
                
                <form id="habitForm">
                    <div class="form-group">
                        <label for="studentName">Nama Siswa</label>
                        <input type="text" id="studentName" name="studentName" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="studentClass">Kelas</label>
                        <input type="text" id="studentClass" name="studentClass" required>
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
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="wakeUpTime">Bangun Pagi</label>
                        <input type="time" id="wakeUpTime" name="wakeUpTime" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Ibadah yang Dilaksanakan</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship1" name="worship" value="Sholat">
                                <label for="worship1">Sholat</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship2" name="worship" value="Baca Kitab">
                                <label for="worship2">Baca Kitab</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship3" name="worship" value="Meditasi">
                                <label for="worship3">Meditasi</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="prayer">Ibadah 5 Waktu</label>
                        <select id="prayer" name="prayer" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="Lengkap">Lengkap</option>
                            <option value="Sebagian">Sebagian</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="breakfast">Pelaksanaan Sarapan</label>
                        <select id="breakfast" name="breakfast" required>
                            <option value="">-- Pilih Status --</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="learningActivity">Keaktifan Belajar di Rumah</label>
                        <select id="learningActivity" name="learningActivity" required>
                            <option value="">-- Pilih Tingkat Keaktifan --</option>
                            <option value="Sangat Aktif">Sangat Aktif</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Kurang">Kurang</option>
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
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Tanggal</th>
                            <th>Olahraga</th>
                            <th>Bangun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="habitTable">
                        <tr>
                            <td>Ahmad</td>
                            <td>5A</td>
                            <td>15/08/2023</td>
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
                            <td>15/08/2023</td>
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
                            <td>14/08/2023</td>
                            <td>Lari</td>
                            <td>06:00</td>
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

    <script>
        document.getElementById('habitForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Ambil nilai dari form
            const studentName = document.getElementById('studentName').value;
            const studentClass = document.getElementById('studentClass').value;
            const date = document.getElementById('date').value;
            
            // Ambil olahraga pagi yang dipilih
            const morningSports = [];
            document.querySelectorAll('input[name="morningSport"]:checked').forEach(checkbox => {
                morningSports.push(checkbox.value);
            });
            
            const wakeUpTime = document.getElementById('wakeUpTime').value;
            
            // Ambil ibadah yang dipilih
            const worships = [];
            document.querySelectorAll('input[name="worship"]:checked').forEach(checkbox => {
                worships.push(checkbox.value);
            });
            
            const prayer = document.getElementById('prayer').value;
            const breakfast = document.getElementById('breakfast').value;
            const learningActivity = document.getElementById('learningActivity').value;
            const communityActivity = document.getElementById('communityActivity').value;
            const bedtime = document.getElementById('bedtime').value;
            const wakeTime = document.getElementById('wakeTime').value;
            
            // Format waktu tidur
            const sleepTime = `${bedtime} - ${wakeTime}`;
            
            // Tambahkan data ke tabel
            const table = document.getElementById('habitTable');
            const newRow = table.insertRow();
            
            newRow.innerHTML = `
                <td>${studentName}</td>
                <td>${studentClass}</td>
                <td>${new Date(date).toLocaleDateString('id-ID')}</td>
                <td>${morningSports.join(', ')}</td>
                <td>${wakeUpTime}</td>
                <td class="actions">
                    <button class="edit-btn"><i class="fas fa-edit"></i></button>
                    <button class="delete-btn"><i class="fas fa-trash"></i></button>
                </td>
            `;
            
            // Reset form
            this.reset();
            
            // Tampilkan pesan sukses
            alert('Data kebiasaan berhasil disimpan!');
            
            // Tambahkan event listener untuk tombol hapus
            newRow.querySelector('.delete-btn').addEventListener('click', function() {
                table.removeChild(newRow);
                alert('Data berhasil dihapus!');
            });
        });
        
        // Tambahkan event listener untuk semua tombol hapus yang sudah ada
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const row = this.closest('tr');
                row.parentNode.removeChild(row);
                alert('Data berhasil dihapus!');
            });
        });
        
        // Set tanggal hari ini sebagai default
        document.getElementById('date').valueAsDate = new Date();
    </script>
</body>
</html><?php /**PATH D:\file\coding\github\7-Kebiasaan\7-Kebiasaan\resources\views/test.blade.php ENDPATH**/ ?>