<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Aplikasi 7 Kebiasaan Anak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS tetap sama seperti sebelumnya */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #b295d2 0%, #2575fc 100%);
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
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        
        .logo-container {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .school-logo {
            height: 60px;
            width: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            object-fit: contain;
        }
        
        .header-text {
            text-align: center;
            flex: 1;
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
            padding: 15px;
            background: #4a00e0;
            color: white;
            font-size: 0.9rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .footer-logo {
            height: 40px;
            width: auto;
            border-radius: 6px;
            object-fit: contain;
        }
        
        .footer-text {
            text-align: center;
            flex: 1;
        }
        
        /* Tambahan style untuk logo */
        .logo-placeholder {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #4a00e0 0%, #8e2de2 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 14px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        .footer-placeholder {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #4a00e0 0%, #8e2de2 100%);
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 12px;
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
                flex-direction: column;
                text-align: center;
            }
            
            .logo-container {
                justify-content: center;
                margin-bottom: 10px;
            }
            
            .school-logo {
                height: 50px;
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
            
            footer {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
            
            .footer-logo {
                height: 35px;
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
            
            .school-logo {
                height: 40px;
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

        /* Style untuk checkbox yang dinonaktifkan */
        .checkbox-item input[type="checkbox"]:disabled {
            border-color: #ccc;
            background-color: #f0f0f0;
            cursor: not-allowed;
        }

        .checkbox-item input[type="checkbox"]:disabled + label {
            color: #999;
            cursor: not-allowed;
        }

        .alert {
            padding: 12px 15px;
            border-radius: 6px;
            margin-bottom: 15px;
            display: none;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

    </style>
</head>
<body>
    <div class="container">
        <header>
            
            <div class="header-text">
                <h1><i class="fas fa-child"></i> Aplikasi 7 Kebiasaan Anak</h1>
                <p>Pantau perkembangan kebiasaan baik anak sehari-hari</p>
            </div>
            <div class="logo-container">
                <!-- Logo tambahan jika diperlukan (bisa dikosongkan) -->
            </div>
        </header>
        
        <div class="app-container">
            <div class="form-section">
                <h2><i class="fas fa-edit"></i> Input Data Kebiasaan</h2>
                
                <!-- Alert untuk pesan sukses/error -->
                <div id="alertBox" class="alert"></div>
                
                <form id="habitForm" action="<?php echo e(route('habits.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="studentName">Nama Siswa</label>
                        <input type="text" id="studentName" name="studentName" required>
                        <?php $__errorArgs = ['studentName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="studentSerial">Nomor Induk Siswa</label>
                        <input type="text" id="studentSerial" name="studentSerial" required>
                        <?php $__errorArgs = ['studentSerial'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="studentClass">Kelas</label>
                        <select id="studentClass" name="studentClass" required>
                            <option value="">-- Pilih Kelas --</option>
                            <option value="9 A">9 A</option>
                            <option value="9 B">9 B</option>
                            <option value="9 C">9 C</option>
                            <option value="9 D">9 D</option>
                            <option value="9 E">9 E</option>
                            <option value="9 F">9 F</option>
                            <option value="9 G">9 G</option>
                            <option value="8 A">8 A</option>
                            <option value="8 B">8 B</option>
                            <option value="8 C">8 C</option>
                            <option value="8 D">8 D</option>
                            <option value="8 E">8 E</option>
                            <option value="8 F">8 F</option>
                            <option value="8 G">8 G</option>
                            <option value="7 A">7 A</option>
                            <option value="7 B">7 B</option>
                            <option value="7 C">7 C</option>
                            <option value="7 D">7 D</option>
                            <option value="7 E">7 E</option>
                            <option value="7 F">7 F</option>
                            <option value="7 G">7 G</option>
                        </select>
                        <?php $__errorArgs = ['studentClass'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="date" id="date" name="date" required>
                        <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Olahraga Pagi</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport1" name="morningSport[]" value="Lari">
                                <label for="sport1">Lari</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport2" name="morningSport[]" value="Senam">
                                <label for="sport2">Senam</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport3" name="morningSport[]" value="Bersepeda">
                                <label for="sport3">Bersepeda</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport4" name="morningSport[]" value="Jalan Sehat">
                                <label for="sport4">JALAN SEHAT</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport5" name="morningSport[]" value="Peregangan Otot">
                                <label for="sport5">PEREGANGAN OTOT</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="sport6" name="morningSport[]" value="Tidak Olahraga">
                                <label for="sport6">TIDAK OLAHRAGA</label>
                            </div>
                        </div>
                        <?php $__errorArgs = ['morningSport'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="wakeUpTime">Bangun Pagi</label>
                        <input type="time" id="wakeUpTime" name="wakeUpTime" required>
                        <?php $__errorArgs = ['wakeUpTime'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Ibadah yang Dilaksanakan Setelah Bangun Pagi</label>
                        <div class="checkbox-group">
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship1" name="worship[]" value="Tahajud">
                                <label for="worship1">Tahajud</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship2" name="worship[]" value="Sholat Subuh">
                                <label for="worship2">Sholat Subuh</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship3" name="worship[]" value="Mengaji/Tadarus">
                                <label for="worship3">Mengaji/Tadarus</label>
                            </div>
                            <div class="checkbox-item">
                                <input type="checkbox" id="worship4" name="worship[]" value="Tidak Sholat Subuh">
                                <label for="worship4">Tidak Sholat Subuh</label>
                            </div>
                        </div>
                        <?php $__errorArgs = ['worship'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                        <?php $__errorArgs = ['prayer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
                        <?php $__errorArgs = ['breakfast'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="learningActivity">Keaktifan Belajar di Rumah</label>
                        <select id="learningActivity" name="learningActivity" required>
                            <option value="">-- Pilih Tingkat Keaktifan --</option>
                            <option value="tidak_belajar">tidak belajar</option>
                            <option value="Selalu_belajar">Selalu Belajar</option>
                            <option value="terkadang">Terkadang</option>
                            <option value="ketika_ulangan">Ketika Ulangan</option>
                            <option value="bila_disuruh">Bila Disuruh</option>
                            <option value="Dipaksa Belajar">Dipaksa Belajar</option>
                        </select>
                        <?php $__errorArgs = ['learningActivity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="communityActivity">Kegiatan Bermasyarakat</label>
                        <textarea id="communityActivity" name="communityActivity" rows="3"></textarea>
                        <?php $__errorArgs = ['communityActivity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="form-group">
                        <label for="sleepTime">Jam Waktu Tidur Malam</label>
                        <div style="display: flex; gap: 10px; align-items: center;">
                            <input type="time" id="bedtime" name="bedtime" placeholder="Waktu tidur" required>
                        </div>
                        <?php $__errorArgs = ['bedtime'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span style="color: red; font-size: 14px;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
        <p><?php echo e($sportPercentage); ?>%</p>
    </div>
    <div class="habit-card">
        <i class="fas fa-sun"></i>
        <h3>Bangun Pagi</h3>
        <p><?php echo e($wakeUpPercentage); ?>%</p>
    </div>
    <div class="habit-card">
        <i class="fas fa-pray"></i>
        <h3>Ibadah</h3>
        <p><?php echo e($worshipPercentage); ?>%</p>
    </div>
    <div class="habit-card">
        <i class="fas fa-utensils"></i>
        <h3>Sarapan</h3>
        <p><?php echo e($breakfastPercentage); ?>%</p>
    </div>
    <div class="habit-card">
        <i class="fas fa-book"></i>
        <h3>Belajar</h3>
        <p><?php echo e($learningPercentage); ?>%</p>
    </div>
    <div class="habit-card">
        <i class="fas fa-users"></i>
        <h3>Masyarakat</h3>
        <p><?php echo e($communityPercentage); ?>%</p>
    </div>    <div class="habit-card">
        <i class="fas fa-bed"></i>
        <h3>Tidur</h3>
        <p><?php echo e($sleepPercentage); ?>%</p>
    </div>
</div>
            </div>
        </div>
        
        <footer>
            <div>
                <!-- Ganti dengan path logo sekolah yang sesuai -->
                
            </div>
            <div class="footer-text">
                <p>&copy; 2025 Aplikasi 7 Kebiasaan Anak. SMPN 2 Prembun, Semua hak dilindungi.</p>
            </div>
            <div>
                <!-- Logo tambahan jika diperlukan (bisa dikosongkan) -->
            </div>
        </footer>
    </div>

    <script>
        // Hanya menyisakan JavaScript yang diperlukan untuk UI
        document.addEventListener('DOMContentLoaded', function() {
            // Set current date as default
            document.getElementById('date').valueAsDate = new Date();
            
            // Setup olahraga checkbox logic
            setupSportCheckboxLogic();
            
            // Setup ibadah checkbox logic
            setupWorshipCheckboxLogic();
            
            // Tampilkan pesan alert jika ada
            <?php if(session('success')): ?>
                showAlert('<?php echo e(session('success')); ?>', 'success');
            <?php endif; ?>
            
            <?php if($errors->any()): ?>
                showAlert('Terjadi kesalahan. Silakan periksa form input.', 'error');
            <?php endif; ?>
        });
        
        // Setup olahraga checkbox logic
        function setupSportCheckboxLogic() {
            const noSportCheckbox = document.getElementById('sport6');
            const otherSportCheckboxes = [
                document.getElementById('sport1'),
                document.getElementById('sport2'),
                document.getElementById('sport3'),
                document.getElementById('sport4'),
                document.getElementById('sport5')
            ];
            
            // Ketika "Tidak Olahraga" dicentang
            if (noSportCheckbox) {
                noSportCheckbox.addEventListener('change', function() {
                    if (this.checked) {
                        // Nonaktifkan checkbox lainnya
                        otherSportCheckboxes.forEach(checkbox => {
                            if (checkbox) {
                                checkbox.checked = false;
                                checkbox.disabled = true;
                            }
                        });
                    } else {
                        // Aktifkan kembali checkbox lainnya
                        otherSportCheckboxes.forEach(checkbox => {
                            if (checkbox) checkbox.disabled = false;
                        });
                    }
                });
            }
            
            // Ketika checkbox olahraga lain dicentang
            otherSportCheckboxes.forEach(checkbox => {
                if (checkbox) {
                    checkbox.addEventListener('change', function() {
                        if (this.checked && noSportCheckbox) {
                            // Pastikan "Tidak Olahraga" tidak dicentang
                            noSportCheckbox.checked = false;
                            noSportCheckbox.disabled = false;
                        }
                    });
                }
            });
        }
        
        // Setup ibadah checkbox logic
        function setupWorshipCheckboxLogic() {
            const noPrayerCheckbox = document.getElementById('worship4');
            const otherWorshipCheckboxes = [
                document.getElementById('worship1'),
                document.getElementById('worship2'),
                document.getElementById('worship3')
            ];
            
            // Ketika "Tidak Sholat Subuh" dicentang
            if (noPrayerCheckbox) {
                noPrayerCheckbox.addEventListener('change', function() {
                    if (this.checked) {
                        // Nonaktifkan checkbox ibadah lainnya
                        otherWorshipCheckboxes.forEach(checkbox => {
                            if (checkbox) {
                                checkbox.checked = false;
                                checkbox.disabled = true;
                            }
                        });
                    } else {
                        // Aktifkan kembali checkbox ibadah lainnya
                        otherWorshipCheckboxes.forEach(checkbox => {
                            if (checkbox) checkbox.disabled = false;
                        });
                    }
                });
            }
            
            // Ketika checkbox ibadah lain dicentang
            otherWorshipCheckboxes.forEach(checkbox => {
                if (checkbox) {
                    checkbox.addEventListener('change', function() {
                        if (this.checked && noPrayerCheckbox) {
                            // Pastikan "Tidak Sholat Subuh" tidak dicentang
                            noPrayerCheckbox.checked = false;
                            noPrayerCheckbox.disabled = false;
                        }
                    });
                }
            });
        }
        
        // Fungsi untuk menampilkan alert
        function showAlert(message, type) {
            const alertBox = document.getElementById('alertBox');
            alertBox.textContent = message;
            alertBox.className = type === 'success' ? 'alert alert-success' : 'alert alert-error';
            alertBox.style.display = 'block';
            
            // Sembunyikan alert setelah 5 detik
            setTimeout(() => {
                alertBox.style.display = 'none';
            }, 5000);
        }
    </script>
</body>
</html><?php /**PATH D:\file\coding\github\7-Kebiasaan\resources\views/7-Kebiasaan.blade.php ENDPATH**/ ?>