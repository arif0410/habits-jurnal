<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f5f7fa;
        }
    </style>
    <body>
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
    </body>