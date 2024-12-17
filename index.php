<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>ตั้งค่าแอพ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Sarabun', sans-serif;
        }

        .sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .sidebar.open {
            transform: translateX(0);
        }

        .bg-pattern {
            background-color: #f3f4f6;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%230d9488' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        .setting-card {
            transition: all 0.2s ease;
        }

        .setting-card:hover {
            transform: translateY(-2px);
            background-color: #f8fafc;
        }
    </style>
</head>
<body class="bg-pattern min-h-screen">
    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden transition-opacity duration-300"></div>

    <!-- Header -->
    <header class="bg-teal-700 p-4 flex justify-between items-center shadow-lg fixed top-0 w-full z-30">
        <div class="flex items-center">
            <img alt="Logo" class="mr-2 rounded-lg" height="40" src="https://placehold.co/40x40" width="40"/>
            <span class="text-white font-bold text-xl hidden sm:inline-block">แอพของฉัน</span>
        </div>
        <div class="flex items-center space-x-4">
            <a href="https://line.me/ti/p/~your-line-id" 
               class="text-white hover:text-teal-200 transition-colors flex items-center" 
               target="_blank">
                <i class="fab fa-line text-xl mr-1.5"></i>
                <span class="text-sm">ติดต่อผู้สร้าง</span>
            </a>
            <button class="text-white text-2xl hover:text-teal-200 transition-colors lg:hidden" id="menu-button">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-teal-700 py-2 px-4 flex justify-center shadow-lg fixed top-16 w-full z-20">
        <div class="flex space-x-2 mt-4 text-sm">
            <a class="text-white hover:bg-teal-600 px-3 py-1.5 rounded-full transition-colors flex items-center" href="files.html">
                <i class="fas fa-folder text-xs mr-1.5"></i>
                <span>ลิ้งเก็บไฟล์</span>
            </a>
            <a class="bg-white text-teal-700 px-3 py-1.5 rounded-full shadow-md hover:bg-gray-100 transition-colors flex items-center" href="settings.html">
                <i class="fas fa-cog text-xs mr-1.5"></i>
                <span>ตั้งค่าแอพ</span>
            </a>
            <a class="text-white hover:bg-teal-600 px-3 py-1.5 rounded-full transition-colors flex items-center" href="json.html">
                <i class="fas fa-download text-xs mr-1.5"></i>
                <span>โหลด JSON</span>
            </a>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar fixed inset-y-0 left-0 bg-teal-700 w-64 p-4 text-white z-50 shadow-lg" id="sidebar">
        <!-- Close button -->
        <div class="flex justify-end mb-6">
            <button class="text-white hover:text-teal-200 transition-colors p-1" id="close-button">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <div class="space-y-2">
            <a class="block py-2 px-4 rounded hover:bg-teal-600 transition-colors" href="files.html">
                <i class="fas fa-folder mr-2"></i>
                ลิ้งเก็บไฟล์
            </a>
            <a class="block py-2 px-4 rounded bg-teal-600" href="settings.html">
                <i class="fas fa-cog mr-2"></i>
                ตั้งค่าแอพ
            </a>
            <a class="block py-2 px-4 rounded hover:bg-teal-600 transition-colors" href="json.html">
                <i class="fas fa-download mr-2"></i>
                โหลด JSON
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="p-4 mt-36 lg:ml-0 transition-all duration-300 max-w-4xl mx-auto">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-4 border-b bg-gray-50">
                <h2 class="text-xl font-bold text-gray-800 mb-2">
                    <i class="fas fa-cog mr-2 text-teal-600"></i>
                    ตั้งค่าแอพ
                </h2>
                <p class="text-gray-600">จัดการการตั้งค่าทั้งหมดของแอพพลิเคชัน</p>
            </div>

            <!-- Settings Items -->
            <div class="divide-y divide-gray-200">
                <div class="setting-card p-4 cursor-pointer" onclick="showSettingForm('ads')">
                    <h3 class="font-semibold text-gray-800">ตั้งค่าโฆษณา</h3>
                    <p class="text-gray-600 text-sm mt-1">จัดการการแสดงโฆษณาและ ID โฆษณา</p>
                </div>
                
                <div class="setting-card p-4 cursor-pointer" onclick="showSettingForm('links')">
                    <h3 class="font-semibold text-gray-800">ตั้งค่าลิงก์</h3>
                    <p class="text-gray-600 text-sm mt-1">กำหนดลิงก์ VIP และ Premium</p>
                </div>
                
                <div class="setting-card p-4 cursor-pointer" onclick="showSettingForm('api')">
                    <h3 class="font-semibold text-gray-800">ตั้งค่า API</h3>
                    <p class="text-gray-600 text-sm mt-1">กำหนดค่า API Key และการเชื่อมต่อ</p>
                </div>
                
                <div class="setting-card p-4 cursor-pointer" onclick="showSettingForm('guide')">
                    <h3 class="font-semibold text-gray-800">คู่มือการใช้งาน</h3>
                    <p class="text-gray-600 text-sm mt-1">แก้ไขคำแนะนำและวิธีการใช้งาน</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Sidebar Toggle
        const menuButton = document.getElementById('menu-button');
        const closeButton = document.getElementById('close-button');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        function toggleSidebar() {
            sidebar.classList.toggle('open');
            overlay.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        }

        menuButton.addEventListener('click', toggleSidebar);
        closeButton.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);

        // Close sidebar on window resize if screen becomes large
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                sidebar.classList.remove('open');
                overlay.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        });

        // Settings form handler
        function showSettingForm(type) {
            // Store current setting type to localStorage
            localStorage.setItem('currentSetting', type);
            
            // Redirect to appropriate form
            const forms = {
                'ads': 'ads-settings.html',
                'links': 'links-settings.html',
                'api': 'api-settings.html',
                'guide': 'guide-settings.html'
            };
            
            if (forms[type]) {
                window.location.href = forms[type];
            }
        }

        // Show toast message
        function showToast(message, type = 'success') {
            const toast = document.createElement('div');
            toast.className = `fixed top-4 right-4 ${type === 'success' ? 'bg-green-500' : 'bg-red-500'} text-white p-4 rounded-lg shadow-lg z-50 animate-fade-in`;
            toast.innerHTML = message;
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 3000);
        }
    </script>
</body>
</html>