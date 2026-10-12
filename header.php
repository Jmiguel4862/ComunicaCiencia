<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        comunicaPrimary: {
                            DEFAULT: '#009769',
                            dark: '#007853',
                            light: '#00b37d',
                            pale: '#e6f7f2'
                        },
                        comunicaSecondary: {
                            DEFAULT: '#029DA2',
                            dark: '#017b80',
                            light: '#03c0c7'
                        },
                        comunicaDark: '#17332E',
                        comunicaLight: '#FFFFFF'
                    },
                    fontFamily: {
                        sans: ['Sora', 'sans-serif'],
                        heading: ['Sora', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts: Sora -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Sora', sans-serif; background-color: #f8fafc; color: #17332E; }
        h1, h2, h3, h4 { font-family: 'Sora', sans-serif; }
        
        .hero-pattern {
            background: linear-gradient(135deg, #17332E 0%, #009769 50%, #029DA2 100%);
            position: relative;
            overflow: hidden;
        }
        .hero-pattern::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 10%, transparent 20%);
            background-size: 40px 40px;
            transform: rotate(15deg);
            pointer-events: none;
        }
        .geo-shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            transform: rotate(45deg);
            pointer-events: none;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    <div class="bg-amber-500 text-slate-950 px-4 py-2 text-xs font-semibold flex flex-col sm:flex-row justify-between items-center gap-1 z-50">
        <div class="flex items-center gap-2">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <span>Protótipo integrado · Ifes Campus Colatina & Agifes Standard</span>
        </div>
        <p class="text-[11px] opacity-90">Dados de impacto e painéis sincronizados para demonstração institucional.</p>
    </div>

    <header class="bg-comunicaDark text-white shadow-md sticky top-0 z-40 border-b border-emerald-950">
        <div class="bg-black/30 text-[11px] px-4 py-1.5 flex justify-between items-center text-emerald-100 border-b border-white/10">
            <div class="flex items-center gap-4">
                <span>Instituto Federal do Espírito Santo</span>
                <span class="hidden sm:inline">|</span>
                <span class="hidden sm:inline">Ministério da Educação</span>
            </div>
            <div class="flex items-center gap-3">
                <a href="#" class="hover:text-white"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="hover:text-white"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="hover:text-white"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="hover:text-white"><i class="fa-brands fa-youtube"></i></a>
                <a href="#" class="hover:text-white"><i class="fa-solid fa-magnifying-glass"></i></a>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <a href="<?php echo home_url(); ?>" class="flex items-center gap-3 group">
                <img src="<?php echo get_template_directory_uri(); ?>/img/text-with-logo.png" alt="Comunica Ciência Logo" class="h-10 sm:h-12 object-contain">
                <div class="hidden sm:block border-l border-white/20 pl-3">
                    <span class="font-heading font-bold text-base sm:text-lg tracking-tight leading-tight block">Conhecimento em Movimento</span>
                    <span class="text-xs text-comunicaSecondary-light font-medium block">Ifes Campus Colatina · Comunica Ciência</span>
                </div>
            </a>

            <!-- Desktop Menu apontando para as páginas reais do WordPress -->
            <nav class="hidden lg:flex items-center gap-1 bg-black/20 p-1.5 rounded-full border border-white/10">
                <a href="<?php echo home_url(); ?>" class="px-4 py-2 rounded-full text-sm font-semibold transition-all <?php echo is_front_page() ? 'bg-white text-comunicaDark shadow-sm' : 'text-white hover:bg-white/10'; ?>">Início</a>
                <a href="<?php echo home_url('/pesquisa'); ?>" class="px-4 py-2 rounded-full text-sm font-semibold transition-all <?php echo is_page('pesquisa') ? 'bg-white text-comunicaDark shadow-sm' : 'text-white hover:bg-white/10'; ?>">Pesquisa</a>
                <a href="<?php echo home_url('/extensao'); ?>" class="px-4 py-2 rounded-full text-sm font-semibold transition-all <?php echo is_page('extensao') ? 'bg-white text-comunicaDark shadow-sm' : 'text-white hover:bg-white/10'; ?>">Extensão</a>
                <a href="<?php echo home_url('/impacto'); ?>" class="px-4 py-2 rounded-full text-sm font-semibold transition-all <?php echo is_page('impacto') ? 'bg-white text-comunicaDark shadow-sm' : 'text-white hover:bg-white/10'; ?>">Impacto</a>
            </nav>

            <button class="lg:hidden text-white text-2xl p-2 rounded-lg hover:bg-white/10 focus:outline-none" id="menuButton" aria-label="Abrir Menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div id="mobileMenu" class="hidden lg:hidden bg-comunicaDark border-t border-white/10 px-4 py-3 space-y-2">
            <a href="<?php echo home_url(); ?>" class="block px-4 py-2.5 rounded-lg text-sm font-semibold text-white hover:bg-white/10">Início</a>
            <a href="<?php echo home_url('/pesquisa'); ?>" class="block px-4 py-2.5 rounded-lg text-sm font-semibold text-emerald-100 hover:bg-white/10">Pesquisa</a>
            <a href="<?php echo home_url('/extensao'); ?>" class="block px-4 py-2.5 rounded-lg text-sm font-semibold text-emerald-100 hover:bg-white/10">Extensão</a>
            <a href="<?php echo home_url('/impacto'); ?>" class="block px-4 py-2.5 rounded-lg text-sm font-semibold text-emerald-100 hover:bg-white/10">Impacto</a>
        </div>
    </header>

    <main class="flex-grow">