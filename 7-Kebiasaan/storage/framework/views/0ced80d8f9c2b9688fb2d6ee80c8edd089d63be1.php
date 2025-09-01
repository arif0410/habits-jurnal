<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Data Kebiasaan Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        :root {
            --primary: #5b7cfa;
            --primary-dark: #4561c9;
            --secondary: #6cbdff;
            --accent: #ff7e5f;
            --light: #f8f9fa;
            --success: #0c8241;
            --warning: #ffb74d;
            --danger: #a9bb06;
            --text: #4a5568;
            --text-light: #718096;
            --border: #e2e8f0;
        }
        
        body {
            background: linear-gradient(135deg, #7c2e83, #4a00e0);
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            padding: 15px;
            color: var(--text);
            line-height: 1.5;
        }

        
        .container {
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            padding: 20px;
            margin-top: 15px;
            margin-bottom: 15px;
            max-width: 100%;
            overflow: hidden;
        }
        
        .page-title {
            color: var(--primary);
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--border);
            font-size: 1.5rem;
            font-weight: 600;
        }
        
        .search-box {
            margin-bottom: 20px;
            position: relative;
        }
        
        .search-box .form-control {
            padding-left: 45px;
            border-radius: 12px;
            border: 1px solid var(--border);
            height: 45px;
            font-size: 16px; /* Prevent zoom on iOS */
        }
        
        .search-box i {
            position: absolute;
            left: 15px;
            top: 13px;
            color: var(--text-light);
            font-size: 18px;
        }
        
        .table-container {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
            margin-bottom: 20px;
            border-radius: 12px;
            border: 1px solid var(--border);
        }
        
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-bottom: 0;
        }
        
        th {
            background-color: var(--primary);
            color: white;
            padding: 14px 12px;
            text-align: left;
            position: sticky;
            top: 0;
            cursor: pointer;
            font-weight: 500;
            font-size: 0.85rem;
            white-space: nowrap;
        }
        
        th:hover {
            background-color: var(--primary-dark);
        }
        
        td {
            padding: 12px;
            border-bottom: 1px solid var(--border);
            font-size: 0.9rem;
            vertical-align: middle;
        }
        
        tr:last-child td {
            border-bottom: none;
        }
        
        tr:nth-child(even) {
            background-color: #fafcff;
        }
        
        tr:hover {
            background-color: #f1f7ff;
        }
        
        .badge-habit {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 10px;
            font-size: 0.8rem;
            margin: 2px;
            font-weight: 500;
        }
        
        .badge-yes {
            background-color: var(--success);
            color: white;
        }
        
        .badge-no {
            background-color: var(--danger);
            color: white;
        }
        
        .badge-time {
            background-color: var(--secondary);
            color: white;
        }
        
        .actions {
            white-space: nowrap;
        }
        
        .edit-btn, .delete-btn {
            padding: 6px 10px;
            border-radius: 8px;
            display: inline-block;
            margin-right: 5px;
            font-size: 0.85rem;
            border: none;
            cursor: pointer;
        }
        
        .edit-btn {
            background-color: rgba(255, 184, 77, 0.15);
            color: var(--warning);
        }
        
        
        .delete-btn {
            background-color: rgba(255, 138, 128, 0.15);
            color: var(--danger);
        }
        
        .delete-btn:hover {
            background-color: var(#6ed69c);
            color: white;
        }
        
        .pagination {
            margin: 20px 0;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .page-item {
            margin: 3px;
        }
        
        .page-link {
            border-radius: 10px;
            border: 1px solid var(--border);
            padding: 8px 14px;
            color: var(--primary);
        }
        
        .page-item.active .page-link {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .page-info {
            text-align: center;
            margin-bottom: 15px;
            color: var(--text-light);
            font-size: 0.9rem;
        }
        
        footer {
            text-align: center;
            margin-top: 25px;
            color: var(--text-light);
            padding: 15px 0;
            border-top: 1px solid var(--border);
            font-size: 0.85rem;
        }
        
        .sort-icon {
            margin-left: 5px;
            font-size: 0.75rem;
        }
        
        /* iPhone XR specific adjustments */
        @media only screen and (device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) {
            body {
                padding: 10px;
            }
            
            .container {
                padding: 15px;
                border-radius: 14px;
            }
            
            .page-title {
                font-size: 1.4rem;
            }
            
            th {
                padding: 12px 10px;
                font-size: 0.8rem;
            }
            
            td {
                padding: 10px;
                font-size: 0.85rem;
            }
            
            .badge-habit {
                padding: 5px 8px;
                font-size: 0.75rem;
            }
        }
        
        /* General mobile responsiveness */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            table {
                min-width: 800px; /* Allow horizontal scrolling on mobile */
            }
            
            th, td {
                padding: 10px 8px;
            }
            
            .edit-btn, .delete-btn {
                padding: 5px 8px;
                font-size: 0.8rem;
            }
            
            .page-link {
                padding: 6px 10px;
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 576px) {
            .page-title {
                font-size: 1.3rem;
            }
            
            .search-box .form-control {
                height: 44px;
            }
            
            .page-info {
                font-size: 0.85rem;
            }
            
            footer {
                font-size: 0.8rem;
            }
        }
        
        /* Safe area insets for iPhone X and later */
        @supports(padding: max(0px)) {
            body {
                padding-left: max(15px, env(safe-area-inset-left));
                padding-right: max(15px, env(safe-area-inset-right));
                padding-top: max(15px, env(safe-area-inset-top));
                padding-bottom: max(15px, env(safe-area-inset-bottom));
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="page-title"><i class="fas fa-table"></i> Data Kebiasaan Siswa</h2>
        
        <!-- Search Box -->
        <div class="row search-box">
            <div class="col-12">
                <div class="form-group">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchInput" class="form-control" placeholder="Cari data kebiasaan...">
                </div>
            </div>
        </div>
        
        <!-- Page Info -->
        <div class="page-info">
            Menampilkan <span id="currentItems">0</span> dari <span id="totalItems"><?php echo e(count($habits)); ?></span> data
        </div>
        
        <!-- Table Container -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th onclick="sortTable(0)">Nama <i class="fas fa-sort sort-icon"></i></th>
                        <th onclick="sortTable(1)">Kelas <i class="fas fa-sort sort-icon"></i></th>
                        <th onclick="sortTable(2)">Tanggal <i class="fas fa-sort sort-icon"></i></th>
                        <th>Olahraga</th>
                        <th>Bangun</th>
                        <th>Ibadah</th>
                        <th>Sholat</th>
                        <th>Sarapan</th>
                        <th>Belajar</th>
                        <th>Komunitas</th>
                        <th>Aksi</th>
                    </tr>
                </thead> 
                <tbody id="habitTable">
                    <?php $__empty_1 = true; $__currentLoopData = $habits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $habit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($habit->studentName); ?></td>
                        <td><?php echo e($habit->studentClass); ?></td>
                        <td data-date="<?php echo e($habit->date); ?>"><?php echo e(\Carbon\Carbon::parse($habit->date)->format('d/m/Y')); ?></td>
                        <td><span class="badge-habit <?php echo e($habit->morningSport[0] === 'Ya' ? 'badge-yes' : 'badge-no'); ?>"><?php echo e($habit->morningSport[0]); ?></span></td>
                        <td><span class="badge-habit badge-time"><?php echo e($habit->wakeUpTime); ?></span></td>
                        <td><span class="badge-habit <?php echo e($habit->worship[0] === 'Ya' ? 'badge-yes' : 'badge-no'); ?>"><?php echo e($habit->worship[0]); ?></span></td>
                        <td><span class="badge-habit <?php echo e($habit->prayer === 'Ya' ? 'badge-yes' : 'badge-no'); ?>"><?php echo e($habit->prayer); ?></span></td>
                        <td><span class="badge-habit <?php echo e($habit->breakfast === 'Ya' ? 'badge-yes' : 'badge-no'); ?>"><?php echo e($habit->breakfast); ?></span></td>
                        <td><span class="badge-habit <?php echo e($habit->learningActivity === 'Ya' ? 'badge-yes' : 'badge-no'); ?>"><?php echo e($habit->learningActivity); ?></span></td>
                        <td><span class="badge-habit <?php echo e($habit->communityActivity === 'Ya' ? 'badge-yes' : 'badge-no'); ?>"><?php echo e($habit->communityActivity); ?></span></td>
                        <td class="actions">
                            <form action="<?php echo e(route('habits.destroy', $habit->id)); ?>" method="POST" style="display: inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="delete-btn" onclick="return confirm('Hapus data kebiasaan untuk <?php echo e($habit->studentName); ?>?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="11" style="text-align: center;">Tidak ada data kebiasaan</td>
                    </tr>
                    <?php endif; ?>
                </tbody> 
            </table>
        </div>
        
        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination" id="pagination">
                <!-- Pagination akan di-generate oleh JavaScript -->
            </ul>
        </nav>
        
        <footer>
            <p>&copy; 2025 Aplikasi 7 Kebiasaan Anak. Semua hak dilindungi.</p>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.getElementById('habitTable');
            const rows = table.getElementsByTagName('tr');
            const itemsPerPage = 8; // Kurangi sedikit untuk mobile
            let currentPage = 1;
            let filteredRows = Array.from(rows);
            let sortColumn = -1;
            let sortDirection = 1; // 1 for ascending, -1 for descending
            
            // Initialize page info
            document.getElementById('totalItems').textContent = <?php echo e(count($habits)); ?>;
            updatePageInfo();
            
            // Initialize pagination
            updatePagination();
            
            // Search functionality
            document.getElementById('searchInput').addEventListener('keyup', function() {
                const searchText = this.value.toLowerCase();
                filteredRows = Array.from(rows).filter(row => {
                    const cells = row.getElementsByTagName('td');
                    for (let i = 0; i < cells.length; i++) {
                        if (cells[i].textContent.toLowerCase().includes(searchText)) {
                            return true;
                        }
                    }
                    return false;
                });
                
                currentPage = 1;
                renderTable();
                updatePagination();
                updatePageInfo();
            });
            
            // Sort functionality
            window.sortTable = function(columnIndex) {
                // Update sort direction if clicking the same column
                if (sortColumn === columnIndex) {
                    sortDirection *= -1;
                } else {
                    sortColumn = columnIndex;
                    sortDirection = 1;
                }
                
                // Update sort icons
                const headers = document.querySelectorAll('th');
                headers.forEach((header, index) => {
                    const icon = header.querySelector('.sort-icon');
                    if (icon) {
                        if (index === columnIndex) {
                            icon.className = sortDirection === 1 ? 
                                'fas fa-sort-up sort-icon' : 'fas fa-sort-down sort-icon';
                        } else {
                            icon.className = 'fas fa-sort sort-icon';
                        }
                    }
                });
                
                filteredRows.sort((a, b) => {
                    let aValue = a.getElementsByTagName('td')[columnIndex].textContent;
                    let bValue = b.getElementsByTagName('td')[columnIndex].textContent;
                    
                    // Special handling for date column
                    if (columnIndex === 2) {
                        const aDate = new Date(a.getElementsByTagName('td')[columnIndex].getAttribute('data-date'));
                        const bDate = new Date(b.getElementsByTagName('td')[columnIndex].getAttribute('data-date'));
                        return (aDate - bDate) * sortDirection;
                    }
                    
                    // Numeric sorting for class if possible
                    if (columnIndex === 1 && !isNaN(aValue) && !isNaN(bValue)) {
                        return (parseInt(aValue) - parseInt(bValue)) * sortDirection;
                    }
                    
                    return aValue.localeCompare(bValue) * sortDirection;
                });
                
                renderTable();
            };
            
            function renderTable() {
                // Hide all rows
                Array.from(rows).forEach(row => row.style.display = 'none');
                
                // Show rows for current page
                const start = (currentPage - 1) * itemsPerPage;
                const end = start + itemsPerPage;
                
                for (let i = start; i < end && i < filteredRows.length; i++) {
                    if (filteredRows[i]) {
                        filteredRows[i].style.display = '';
                    }
                }
            }
            
            function updatePagination() {
                const pagination = document.getElementById('pagination');
                pagination.innerHTML = '';
                
                const pageCount = Math.ceil(filteredRows.length / itemsPerPage);
                
                if (pageCount <= 1) return;
                
                // Previous button
                const prevLi = document.createElement('li');
                prevLi.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
                prevLi.innerHTML = `<a class="page-link" href="#" onclick="changePage(${currentPage - 1}); return false;">&laquo;</a>`;
                pagination.appendChild(prevLi);
                
                // Page buttons
                const startPage = Math.max(1, currentPage - 2);
                const endPage = Math.min(pageCount, startPage + 4);
                
                for (let i = startPage; i <= endPage; i++) {
                    const li = document.createElement('li');
                    li.className = `page-item ${i === currentPage ? 'active' : ''}`;
                    li.innerHTML = `<a class="page-link" href="#" onclick="changePage(${i}); return false;">${i}</a>`;
                    pagination.appendChild(li);
                }
                
                // Next button
                const nextLi = document.createElement('li');
                nextLi.className = `page-item ${currentPage === pageCount ? 'disabled' : ''}`;
                nextLi.innerHTML = `<a class="page-link" href="#" onclick="changePage(${currentPage + 1}); return false;">&raquo;</a>`;
                pagination.appendChild(nextLi);
            }
            
            window.changePage = function(page) {
                if (page < 1 || page > Math.ceil(filteredRows.length / itemsPerPage)) return;
                
                currentPage = page;
                renderTable();
                updatePagination();
                updatePageInfo();
                
                // Scroll to top of table
                document.querySelector('.table-container').scrollIntoView({behavior: 'smooth'});
            };
            
            function updatePageInfo() {
                const start = Math.min((currentPage - 1) * itemsPerPage + 1, filteredRows.length);
                const end = Math.min(currentPage * itemsPerPage, filteredRows.length);
                const total = filteredRows.length;
                
                document.getElementById('currentItems').textContent = total === 0 ? 
                    '0' : `${start} - ${end}`;
            }
            
            // Initial render
            renderTable();
            
            // Add touch-friendly styles
            document.querySelectorAll('button, .page-link').forEach(element => {
                element.style.cursor = 'pointer';
                element.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.98)';
                });
                element.addEventListener('touchend', function() {
                    this.style.transform = '';
                });
            });
        });
    </script>
</body>
</html><?php /**PATH D:\file\coding\github\7-Kebiasaan\resources\views//hasil/index.blade.php ENDPATH**/ ?>