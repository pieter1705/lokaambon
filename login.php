<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Loka Monitor Ambon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        body {
            background: linear-gradient(135deg, #002B49 0%, #005a92 100%);
            min-height: 100vh;
        }
        .bg-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.1;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
</head>
<body class="flex items-center justify-center p-6 relative overflow-hidden">
    <div class="bg-pattern"></div>
    <div class="absolute top-[-10%] left-[-10%] w-72 h-72 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
    <div class="absolute bottom-[-10%] right-[-10%] w-72 h-72 bg-cyan-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>

    <div class="w-full max-w-md z-10">
        <div class="glass rounded-[2rem] shadow-2xl overflow-hidden p-10 transform transition-all hover:scale-[1.01]">
            
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-[#002B49] rounded-2xl mb-4 shadow-lg">
                    <i class="ri-shield-user-line text-4xl text-white"></i>
                </div>
                <h1 class="text-2xl font-black text-[#002B49] uppercase tracking-tighter">Login Portal</h1>
                <p class="text-gray-500 text-sm mt-1">Loka Monitor SFR Ambon</p>
            </div>

            <form action="auth.php" method="POST" class="space-y-6">
                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2 ml-1">Username</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
                            <i class="ri-user-3-line"></i>
                        </span>
                        <input type="text" name="username" required
                            class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all text-sm"
                            placeholder="Masukkan username">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-gray-700 uppercase tracking-widest mb-2 ml-1">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400">
                            <i class="ri-lock-password-line"></i>
                        </span>
                        <input type="password" name="password" required
                            class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all text-sm"
                            placeholder="••••••••">
                    </div>
                </div>

                <div class="flex items-center justify-between px-1">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <span class="text-xs text-gray-600 font-medium">Ingat saya</span>
                    </label>
                    <a href="#" class="text-xs font-bold text-blue-600 hover:text-blue-800 transition-colors">Lupa Password?</a>
                </div>

                <button type="submit" 
                    class="w-full bg-[#002B49] hover:bg-blue-700 text-white font-bold py-4 rounded-2xl shadow-xl shadow-blue-900/20 transition-all active:scale-95 flex items-center justify-center gap-2">
                    <span>MASUK SEKARANG</span>
                    <i class="ri-arrow-right-line"></i>
                </button>
            </form>

            <div class="mt-8 text-center">
                <a href="index.php" class="text-xs text-gray-400 hover:text-[#002B49] transition-colors flex items-center justify-center gap-1">
                    <i class="ri-arrow-left-s-line"></i> Kembali ke Website Utama
                </a>
            </div>
        </div>
        
        <p class="text-center text-white/50 text-[10px] mt-8 uppercase tracking-[0.2em]">
            &copy; 2026 Loka Monitor Ambon - Secure System
        </p>
    </div>
</body>
</html>