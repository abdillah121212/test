<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0a192f',
                        secondary: '#64ffda',
                        text: '#ccd6f6',
                        error: '#ff6b6b',
                    },
                    animation: {
                        'float': 'float 6s infinite alternate',
                        'shake': 'shake 0.5s',
                    },
                    keyframes: {
                        float: {
                            '0%': { transform: 'translate(0, 0) rotate(0deg)' },
                            '100%': { transform: 'translate(var(--tw-float-x), var(--tw-float-y)) rotate(2deg)' },
                        },
                        shake: {
                            '0%, 100%': { transform: 'translateX(0)' },
                            '10%, 30%, 50%, 70%, 90%': { transform: 'translateX(-5px)' },
                            '20%, 40%, 60%, 80%': { transform: 'translateX(5px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .bg-tech-gradient {
                background: linear-gradient(145deg, #64ffda, #0a192f);
            }
        }
    </style>
</head>
<body class="bg-primary text-text min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background elements -->
    <div class="fixed inset-0 z-0">
        <div class="absolute w-72 h-72 rounded-full bg-tech-gradient opacity-20 -top-12 -left-12 animate-float" style="--tw-float-x: 10px; --tw-float-y: 10px;"></div>
        <div class="absolute w-96 h-96 rounded-full bg-tech-gradient opacity-20 -bottom-36 -right-24 animate-float" style="--tw-float-x: -15px; --tw-float-y: 15px;"></div>
        
        <!-- Tech decorations -->
        <div class="absolute font-mono text-xs text-secondary/10 select-none top-[10%] left-[5%] animate-float" style="--tw-float-x: 5px; --tw-float-y: -5px;">// code.login();</div>
        <div class="absolute font-mono text-xs text-secondary/10 select-none top-[15%] right-[10%] animate-float" style="--tw-float-x: -8px; --tw-float-y: 8px;">/* secure access */</div>
        <div class="absolute font-mono text-xs text-secondary/10 select-none bottom-[20%] left-[8%] animate-float" style="--tw-float-x: 7px; --tw-float-y: -7px;"><!-- auth --></div>
        <div class="absolute font-mono text-xs text-secondary/10 select-none bottom-[15%] right-[5%] animate-float" style="--tw-float-x: -10px; --tw-float-y: 10px;">{ auth: true }</div>
        <div class="absolute font-mono text-xs text-secondary/10 select-none top-1/2 left-[20%] animate-float" style="--tw-float-x: 12px; --tw-float-y: -12px;">if(user) { login }</div>
    </div>

    <!-- Login container -->
    <div class="relative bg-primary/80 backdrop-blur-md border border-secondary/20 rounded-xl p-10 w-full max-w-md shadow-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
        <div class="text-center mb-8">
            <h1 class="text-secondary text-2xl font-bold mb-2">Tech Portal</h1>
            <p class="text-sm opacity-80">Access the future with secure login</p>
        </div>
        
        <form id="loginForm">
            <div class="mb-5 relative">
                <label for="username" class="block text-secondary text-sm mb-2">Username</label>
                <input type="text" id="username" placeholder="Enter your username" required
                    class="w-full px-4 py-3 bg-secondary/10 border border-secondary/30 rounded-lg text-sm focus:outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all">
                <span class="absolute right-3 top-[38px] text-secondary">👤</span>
                <div id="username-error" class="text-error text-xs mt-1 hidden"></div>
            </div>
            
            <div class="mb-5 relative">
                <label for="password" class="block text-secondary text-sm mb-2">Password</label>
                <input type="password" id="password" placeholder="Enter your password" required
                    class="w-full px-4 py-3 bg-secondary/10 border border-secondary/30 rounded-lg text-sm focus:outline-none focus:border-secondary focus:ring-2 focus:ring-secondary/20 transition-all">
                <span class="absolute right-3 top-[38px] text-secondary">🔒</span>
                <div id="password-error" class="text-error text-xs mt-1 hidden"></div>
            </div>
            
            <div class="flex justify-between items-center mb-5 text-xs">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" class="mr-2"> Remember me
                </label>
                <a href="#" class="text-secondary hover:opacity-80 transition-opacity">Forgot password?</a>
            </div>
            
            <button type="submit" class="w-full py-3 bg-secondary text-primary font-semibold rounded-lg hover:bg-[#52e0c4] hover:-translate-y-0.5 transition-all duration-300">
                Login
            </button>
            
            <div class="text-center mt-5 text-sm">
                Don't have an account? <a href="#" class="text-secondary font-medium hover:opacity-80 transition-opacity">Register</a>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const usernameError = document.getElementById('username-error');
            const passwordError = document.getElementById('password-error');
            
            // Reset error messages
            usernameError.classList.add('hidden');
            passwordError.classList.add('hidden');
            
            // Show loading effect
            const btn = this.querySelector('button[type="submit"]');
            btn.textContent = 'Authenticating...';
            btn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                // Validasi login
                if(username === 'sultan' && password === 'abdillah12') {
                    // Login berhasil, redirect ke welcome.html
                    window.location.href = '/login';
                        
               
                } else {
                    // Login gagal, tampilkan pesan error
                    if(username !== 'sultan') {
                        usernameError.textContent = 'Username tidak ditemukan';
                        usernameError.classList.remove('hidden');
                    }
                    
                    if(password !== 'abdillah12') {
                        passwordError.textContent = 'Password salah';
                        passwordError.classList.remove('hidden');
                    }
                    
                    // Shake effect untuk visual feedback
                    document.querySelector('.relative').classList.add('animate-shake');
                    setTimeout(() => {
                        document.querySelector('.relative').classList.remove('animate-shake');
                    }, 500);
                }
                
                btn.textContent = 'Login';
                btn.disabled = false;
            }, 1000);
        });

        // Floating animation for background elements
        const floatingElements = document.querySelectorAll('.animate-float');
        floatingElements.forEach(el => {
            const x = (Math.random() - 0.5) * 2;
            const y = (Math.random() - 0.5) * 2;
            el.style.setProperty('--tw-float-x', `${x * 10}px`);
            el.style.setProperty('--tw-float-y', `${y * 10}px`);
            el.style.animationDuration = `${5 + Math.random() * 5}s`;
        });
    </script>
</body>
</html>