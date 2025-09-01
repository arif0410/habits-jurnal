<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Tebak Angka</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 90%;
            max-width: 500px;
            text-align: center;
        }
        
        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 2.2rem;
        }
        
        .instruction {
            color: #555;
            margin-bottom: 25px;
            font-size: 1.1rem;
            line-height: 1.5;
        }
        
        .input-area {
            margin-bottom: 25px;
        }
        
        input[type="number"] {
            width: 150px;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1.2rem;
            text-align: center;
            transition: border-color 0.3s;
        }
        
        input[type="number"]:focus {
            border-color: #6a11cb;
            outline: none;
        }
        
        button {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            margin: 10px 5px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        button:active {
            transform: translateY(0);
        }
        
        #restart {
            background: linear-gradient(to right, #ff9966, #ff5e62);
        }
        
        .result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            font-size: 1.2rem;
            min-height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .attempts {
            margin-top: 15px;
            font-weight: bold;
            color: #2575fc;
        }
        
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .info {
            background-color: #d1ecf1;
            color: #0c5460;
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            input[type="number"] {
                width: 120px;
                font-size: 1rem;
            }
            
            button {
                padding: 10px 20px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎮 Game Tebak Angka</h1>
        <p class="instruction">Saya telah memilih sebuah angka antara 1 hingga 100. Bisakah kamu menebaknya?</p>
        
        <div class="input-area">
            <input type="number" id="guess" min="1" max="100" placeholder="Masukkan tebakan">
            <button id="submit-btn">Tebak!</button>
            <button id="restart">Mulai Ulang</button>
        </div>
        
        <div class="result info" id="result">Silakan masukkan tebakan pertama Anda!</div>
        <div class="attempts" id="attempts">Jumlah percobaan: 0</div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Elemen DOM
            const guessInput = document.getElementById('guess');
            const submitBtn = document.getElementById('submit-btn');
            const restartBtn = document.getElementById('restart');
            const resultDiv = document.getElementById('result');
            const attemptsDiv = document.getElementById('attempts');
            
            // Variabel game
            let randomNumber;
            let attempts;
            
            // Inisialisasi game
            initGame();
            
            // Fungsi inisialisasi game
            function initGame() {
                randomNumber = Math.floor(Math.random() * 100) + 1;
                attempts = 0;
                updateAttempts();
                resultDiv.className = 'result info';
                resultDiv.textContent = 'Silakan masukkan tebakan pertama Anda!';
                guessInput.value = '';
                guessInput.focus();
            }
            
            // Fungsi update tampilan percobaan
            function updateAttempts() {
                attemptsDiv.textContent = `Jumlah percobaan: ${attempts}`;
            }
            
            // Event listener untuk tombol tebak
            submitBtn.addEventListener('click', function() {
                checkGuess();
            });
            
            // Event listener untuk tekan Enter pada input
            guessInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    checkGuess();
                }
            });
            
            // Event listener untuk tombol restart
            restartBtn.addEventListener('click', function() {
                initGame();
            });
            
            // Fungsi untuk memeriksa tebakan
            function checkGuess() {
                const userGuess = parseInt(guessInput.value);
                
                // Validasi input
                if (isNaN(userGuess) || userGuess < 1 || userGuess > 100) {
                    resultDiv.className = 'result error';
                    resultDiv.textContent = 'Masukkan angka antara 1 dan 100!';
                    return;
                }
                
                // Tambah jumlah percobaan
                attempts++;
                updateAttempts();
                
                // Periksa tebakan
                if (userGuess === randomNumber) {
                    resultDiv.className = 'result success';
                    resultDiv.innerHTML = `🎉 Selamat! Anda benar! Angka yang dicari adalah ${randomNumber}.`;
                } else if (userGuess < randomNumber) {
                    resultDiv.className = 'result info';
                    resultDiv.textContent = 'Terlalu rendah! Coba angka yang lebih tinggi.';
                } else {
                    resultDiv.className = 'result info';
                    resultDiv.textContent = 'Terlalu tinggi! Coba angka yang lebih rendah.';
                }
                
                // Fokus kembali ke input
                guessInput.focus();
                guessInput.select();
            }
        });
    </script>
</body>
</html><?php /**PATH D:\file\coding\github\7-Kebiasaan\resources\views/game.blade.php ENDPATH**/ ?>