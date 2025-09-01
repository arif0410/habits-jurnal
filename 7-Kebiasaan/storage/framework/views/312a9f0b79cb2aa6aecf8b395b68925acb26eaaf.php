<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Program Makan Siang Gratis</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            text-align: center;
            padding: 20px 0;
            background: linear-gradient(135deg, #2c3e50, #4a6491);
            color: white;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        header h1 {
            margin-bottom: 10px;
            font-size: 2.2rem;
        }
        
        header p {
            font-size: 1.1rem;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .form-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .form-info {
            flex: 1;
            min-width: 300px;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .form-info h2 {
            color: #2c3e50;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #4a6491;
        }
        
        .info-list {
            list-style-type: none;
        }
        
        .info-list li {
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
        }
        
        .info-list li:before {
            content: "•";
            color: #4a6491;
            font-weight: bold;
            position: absolute;
            left: 10px;
        }
        
        .form {
            flex: 2;
            min-width: 300px;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #4a6491;
            outline: none;
            box-shadow: 0 0 0 2px rgba(74, 100, 145, 0.2);
        }
        
        .required:after {
            content: " *";
            color: #e74c3c;
        }
        
        .btn {
            background: linear-gradient(135deg, #2c3e50, #4a6491);
            color: white;
            border: none;
            padding: 14px 20px;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .btn:hover {
            background: linear-gradient(135deg, #4a6491, #2c3e50);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .error {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            color: #7f8c8d;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .form-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Program Makan Siang Gratis</h1>
            <p>Daftarkan diri Anda untuk mendapatkan akses ke program makan siang gratis bagi yang memenuhi syarat</p>
        </header>
        
        <div class="form-container">
            <div class="form-info">
                <h2>Informasi Program</h2>
                <ul class="info-list">
                    <li>Program ini ditujukan untuk membantu masyarakat yang membutuhkan</li>
                    <li>Pendaftaran diverifikasi untuk memastikan bantuan tepat sasaran</li>
                    <li>Makan siang sehat dan bergizi disediakan setiap hari kerja</li>
                    <li>Pengambilan makan siang dapat dilakukan di lokasi yang telah ditentukan</li>
                    <li>Pendaftaran yang tidak memenuhi syarat tidak akan diproses</li>
                </ul>
                <p style="margin-top: 20px; font-style: italic;">
                    Untuk informasi lebih lanjut, hubungi: (021) 1234-5678 atau email: info@programmakanansiang.org
                </p>
            </div>
            
            <div class="form">
                <h2 style="color: #2c3e50; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid #4a6491;">Formulir Pendaftaran</h2>
                
                <form id="registrationForm">
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
                    
                    <button type="submit" class="btn">Daftar Sekarang</button>
                </form>
            </div>
        </div>
        
        <footer>
            <p>&copy; 2023 Program Makan Siang Gratis. Semua hak dilindungi.</p>
        </footer>
    </div>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            
            // Validasi Nama Lengkap
            const fullName = document.getElementById('fullName');
            if (!fullName.value.trim()) {
                document.getElementById('fullNameError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('fullNameError').style.display = 'none';
            }
            
            // Validasi Email
            const email = document.getElementById('email');
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email.value)) {
                document.getElementById('emailError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('emailError').style.display = 'none';
            }
            
            // Validasi Telepon
            const phone = document.getElementById('phone');
            if (!phone.value.trim()) {
                document.getElementById('phoneError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('phoneError').style.display = 'none';
            }
            
            // Validasi Alamat
            const address = document.getElementById('address');
            if (!address.value.trim()) {
                document.getElementById('addressError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('addressError').style.display = 'none';
            }
            
            // Validasi Pekerjaan
            const occupation = document.getElementById('occupation');
            if (!occupation.value.trim()) {
                document.getElementById('occupationError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('occupationError').style.display = 'none';
            }
            
            // Validasi Pendapatan
            const income = document.getElementById('income');
            if (!income.value) {
                document.getElementById('incomeError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('incomeError').style.display = 'none';
            }
            
            // Validasi Jumlah Anggota Keluarga
            const familyMembers = document.getElementById('familyMembers');
            if (!familyMembers.value || familyMembers.value < 1) {
                document.getElementById('familyMembersError').style.display = 'block';
                isValid = false;
            } else {
                document.getElementById('familyMembersError').style.display = 'none';
            }
            
            // Jika semua valid, tampilkan alert
            if (isValid) {
                alert('Pendaftaran berhasil! Terima kasih telah mendaftar program makan siang gratis. Kami akan menghubungi Anda untuk verifikasi lebih lanjut.');
                this.reset();
            }
        });
    </script>
</body>
</html><?php /**PATH D:\file\coding\github\7-Kebiasaan\resources\views/welcome.blade.php ENDPATH**/ ?>