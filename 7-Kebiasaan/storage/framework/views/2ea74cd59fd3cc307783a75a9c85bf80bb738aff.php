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
                        <label for="fullName" class="required">Nama Lengkap</label>
                        <input type="text" id="fullName" name="fullName" required>
                        <div class="error" id="fullNameError">Nama lengkap harus diisi</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="required">Alamat Email</label>
                        <input type="email" id="email" name="email" required>
                        <div class="error" id="emailError">Format email tidak valid</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone" class="required">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone" required>
                        <div class="error" id="phoneError">Nomor telepon harus diisi</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="address" class="required">Alamat Lengkap</label>
                        <textarea id="address" name="address" rows="3" required></textarea>
                        <div class="error" id="addressError">Alamat lengkap harus diisi</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="occupation" class="required">Pekerjaan</label>
                        <input type="text" id="occupation" name="occupation" required>
                        <div class="error" id="occupationError">Pekerjaan harus diisi</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="income" class="required">Pendapatan per Bulan</label>
                        <select id="income" name="income" required>
                            <option value="">-- Pilih Range Pendapatan --</option>
                            <option value="0-1jt">Di bawah Rp 1.000.000</option>
                            <option value="1-2jt">Rp 1.000.000 - Rp 2.000.000</option>
                            <option value="2-3jt">Rp 2.000.000 - Rp 3.000.000</option>
                            <option value="3-5jt">Rp 3.000.000 - Rp 5.000.000</option>
                            <option value="5jt+">Di atas Rp 5.000.000</option>
                        </select>
                        <div class="error" id="incomeError">Pilihan pendapatan harus diisi</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="familyMembers" class="required">Jumlah Anggota Keluarga</label>
                        <input type="number" id="familyMembers" name="familyMembers" min="1" required>
                        <div class="error" id="familyMembersError">Jumlah anggota keluarga harus diisi</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="reason">Alasan Mendaftar (Opsional)</label>
                        <textarea id="reason" name="reason" rows="3"></textarea>
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
</html><?php /**PATH D:\file\coding\github\7-Kebiasaan\7-Kebiasaan\resources\views/welcome.blade.php ENDPATH**/ ?>