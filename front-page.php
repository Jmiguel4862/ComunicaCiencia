<?php
/**
 * Template para a Página Inicial (Início)
 */
get_header(); 
?>

<!-- Hero Section styled like Agifes Portal -->
<div class="hero-pattern text-white py-16 lg:py-24 relative">
    <!-- Decorative geometric shapes -->
    <div class="geo-shape w-64 h-64 -top-20 -left-20 rounded-3xl"></div>
    <div class="geo-shape w-96 h-96 -bottom-32 -right-20 rounded-full"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 space-y-6">
                <span class="inline-block bg-white/15 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider text-emerald-100 border border-white/20">
                    Pesquisa, Extensão e Inovação · Ifes Campus Colatina
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-bold tracking-tight leading-tight">
                    Conhecimento que se encontra com a vida.
                </h1>
                <p class="text-lg sm:text-xl text-emerald-50 max-w-2xl font-normal">
                    Um portal público para conhecer tudo o que o campus produz, investiga e compartilha com a sociedade capixaba, transformando ciência em desenvolvimento regional.
                </p>
                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="<?php echo home_url('/pesquisa'); ?>" class="bg-white text-comunicaDark hover:bg-emerald-50 font-bold px-6 py-3.5 rounded-xl shadow-lg transition-all flex items-center gap-2 transform hover:-translate-y-0.5">
                        Conhecer a pesquisa <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo home_url('/extensao'); ?>" class="bg-comunicaDark/80 hover:bg-comunicaDark text-white border border-white/20 font-semibold px-6 py-3.5 rounded-xl transition-all backdrop-blur-sm">
                        Explorar a extensão
                    </a>
                </div>
            </div>

            <!-- Hero Right Visual -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="relative w-full max-w-sm bg-white/10 backdrop-blur-md rounded-3xl p-6 border border-white/20 shadow-2xl flex flex-col justify-between items-center text-center">
                    <div class="absolute -top-3 -right-3 bg-comunicaSecondary text-white text-xs font-bold px-3 py-1 rounded-full shadow">
                        Campus ↔ Território
                    </div>
                    <div class="w-20 h-20 rounded-2xl bg-white/20 flex items-center justify-center p-2 shadow-inner mb-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Ícone Logo" class="w-full h-full object-contain filter drop-shadow">
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-xl font-bold font-heading">Ecossistema Integrado</h3>
                        <p class="text-sm text-emerald-100">Conectando editores, pesquisadores, bolsistas e organizações locais em um só lugar.</p>
                    </div>
                    <div class="w-full grid grid-cols-3 gap-2 pt-4 mt-4 border-t border-white/15 text-xs text-emerald-200">
                        <div class="bg-white/5 p-2 rounded-lg"><b>40</b> Pesquisadores</div>
                        <div class="bg-white/5 p-2 rounded-lg"><b>32</b> Projetos</div>
                        <div class="bg-white/5 p-2 rounded-lg"><b>19</b> Extensões</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Statistics Counters Strip -->
<section class="bg-comunicaDark text-white py-10 border-b border-white/10 shadow-inner">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 text-center">
            <div class="p-4 bg-white/5 rounded-2xl border border-white/10 hover:bg-white/10 transition-all">
                <span class="block text-3xl sm:text-4xl font-bold text-comunicaSecondary-light font-heading">40</span>
                <span class="text-xs sm:text-sm text-emerald-100 font-semibold mt-1 block">pesquisadores em projetos ativos</span>
            </div>
            <div class="p-4 bg-white/5 rounded-2xl border border-white/10 hover:bg-white/10 transition-all">
                <span class="block text-3xl sm:text-4xl font-bold text-comunicaSecondary-light font-heading">58</span>
                <span class="text-xs sm:text-sm text-emerald-100 font-semibold mt-1 block">estudantes em projetos ativos</span>
            </div>
            <div class="p-4 bg-white/5 rounded-2xl border border-white/10 hover:bg-white/10 transition-all">
                <span class="block text-3xl sm:text-4xl font-bold text-comunicaSecondary-light font-heading">32</span>
                <span class="text-xs sm:text-sm text-emerald-100 font-semibold mt-1 block">projetos ativos por área</span>
            </div>
            <div class="p-4 bg-white/5 rounded-2xl border border-white/10 hover:bg-white/10 transition-all">
                <span class="block text-3xl sm:text-4xl font-bold text-comunicaSecondary-light font-heading">19</span>
                <span class="text-xs sm:text-sm text-emerald-100 font-semibold mt-1 block">ações de extensão mapeadas</span>
            </div>
            <div class="p-4 bg-white/5 rounded-2xl border border-white/10 hover:bg-white/10 transition-all col-span-2 md:col-span-1">
                <span class="block text-3xl sm:text-4xl font-bold text-comunicaSecondary-light font-heading">9</span>
                <span class="text-xs sm:text-sm text-emerald-100 font-semibold mt-1 block">bolsistas de extensão cadastrados</span>
            </div>
        </div>
    </div>
</section>

<!-- Quick Access Circular Icons -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <span class="text-comunicaPrimary font-bold text-xs uppercase tracking-widest bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">Navegação Direta</span>
            <h2 class="text-3xl font-heading font-bold text-comunicaDark mt-2">Acesso Rápido</h2>
            <p class="text-slate-600 max-w-lg mx-auto text-sm mt-1">Encontre rapidamente as principais ferramentas, editais e documentos do campus.</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-6 text-center">
            <a href="<?php echo home_url('/extensao'); ?>" class="group flex flex-col items-center p-4 rounded-2xl hover:bg-emerald-50/60 transition-all">
                <div class="w-20 h-20 rounded-full bg-comunicaPrimary text-white flex items-center justify-center text-2xl shadow-md group-hover:scale-110 group-hover:bg-comunicaPrimary-light transition-all mb-3 border-2 border-emerald-100">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <span class="font-heading font-bold text-slate-800 text-sm group-hover:text-comunicaPrimary">Editais</span>
            </a>
            <a href="<?php echo home_url('/pesquisa'); ?>" class="group flex flex-col items-center p-4 rounded-2xl hover:bg-emerald-50/60 transition-all">
                <div class="w-20 h-20 rounded-full bg-comunicaPrimary text-white flex items-center justify-center text-2xl shadow-md group-hover:scale-110 group-hover:bg-comunicaPrimary-light transition-all mb-3 border-2 border-emerald-100">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <span class="font-heading font-bold text-slate-800 text-sm group-hover:text-comunicaPrimary">Patentes & Pesquisa</span>
            </a>
            <a href="<?php echo home_url('/impacto'); ?>" class="group flex flex-col items-center p-4 rounded-2xl hover:bg-emerald-50/60 transition-all">
                <div class="w-20 h-20 rounded-full bg-comunicaPrimary text-white flex items-center justify-center text-2xl shadow-md group-hover:scale-110 group-hover:bg-comunicaPrimary-light transition-all mb-3 border-2 border-emerald-100">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <span class="font-heading font-bold text-slate-800 text-sm group-hover:text-comunicaPrimary">Termo de Sigilo</span>
            </a>
            <a href="<?php echo home_url('/pesquisa'); ?>" class="group flex flex-col items-center p-4 rounded-2xl hover:bg-emerald-50/60 transition-all">
                <div class="w-20 h-20 rounded-full bg-comunicaPrimary text-white flex items-center justify-center text-2xl shadow-md group-hover:scale-110 group-hover:bg-comunicaPrimary-light transition-all mb-3 border-2 border-emerald-100">
                    <i class="fa-solid fa-code"></i>
                </div>
                <span class="font-heading font-bold text-slate-800 text-sm group-hover:text-comunicaPrimary">Softwares</span>
            </a>
            <a href="<?php echo home_url('/extensao'); ?>" class="group flex flex-col items-center p-4 rounded-2xl hover:bg-emerald-50/60 transition-all">
                <div class="w-20 h-20 rounded-full bg-comunicaPrimary text-white flex items-center justify-center text-2xl shadow-md group-hover:scale-110 group-hover:bg-comunicaPrimary-light transition-all mb-3 border-2 border-emerald-100">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <span class="font-heading font-bold text-slate-800 text-sm group-hover:text-comunicaPrimary">Incubadora</span>
            </a>
            <a href="<?php echo home_url('/impacto'); ?>" class="group flex flex-col items-center p-4 rounded-2xl hover:bg-emerald-50/60 transition-all">
                <div class="w-20 h-20 rounded-full bg-comunicaPrimary text-white flex items-center justify-center text-2xl shadow-md group-hover:scale-110 group-hover:bg-comunicaPrimary-light transition-all mb-3 border-2 border-emerald-100">
                    <i class="fa-solid fa-book-open"></i>
                </div>
                <span class="font-heading font-bold text-slate-800 text-sm group-hover:text-comunicaPrimary">Cartilha de PI</span>
            </a>
        </div>
    </div>
</section>

<!-- News & Carousel Section -->
<section class="py-16 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 gap-4">
            <div>
                <span class="text-comunicaPrimary font-bold text-xs uppercase tracking-widest bg-emerald-100/60 px-3 py-1 rounded-full">Atualizações</span>
                <h2 class="text-3xl font-heading font-bold text-comunicaDark mt-2">Notícias e Destaques</h2>
            </div>
            <a href="<?php echo home_url('/extensao'); ?>" class="text-comunicaPrimary font-bold hover:underline flex items-center gap-1 text-sm">Ver todas as notícias <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-4 space-y-4">
                <div class="bg-comunicaPrimary text-white p-6 rounded-2xl shadow-md cursor-pointer hover:bg-comunicaPrimary-dark transition-all">
                    <span class="text-xs uppercase tracking-wider font-semibold bg-white/20 px-2.5 py-1 rounded-md">Destaques</span>
                    <h3 class="text-xl font-bold font-heading mt-3">Novo Portal Integrado de Inovação</h3>
                    <p class="text-sm text-emerald-100 mt-2">Conheça as iniciativas do Campus Colatina na nova plataforma unificada de impacto.</p>
                </div>
                <div class="bg-comunicaDark text-white p-6 rounded-2xl shadow-md cursor-pointer hover:bg-black transition-all">
                    <span class="text-xs uppercase tracking-wider font-semibold bg-white/20 px-2.5 py-1 rounded-md">Editais Abertos</span>
                    <h3 class="text-xl font-bold font-heading mt-3">Incubadora abre vagas para empreendedores</h3>
                    <p class="text-sm text-emerald-100 mt-2">Edital 02/2026 com inscrições abertas para apoio a startups e negócios inovadores.</p>
                </div>
            </div>

            <div class="lg:col-span-8 bg-gradient-to-r from-comunicaDark to-[#015154] rounded-3xl text-white p-8 sm:p-12 shadow-xl relative overflow-hidden flex flex-col justify-between min-h-[360px]">
                <div class="absolute -right-12 -bottom-12 w-64 h-64 bg-white/5 rounded-full blur-2xl pointer-events-none"></div>
                <div class="relative z-10 space-y-4">
                    <span class="bg-comunicaSecondary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Edital de Fluxo Contínuo · Outubro/2026</span>
                    <h2 class="text-3xl sm:text-4xl font-bold font-heading tracking-tight">Empreendedor, é hora de decolar com o Ifes!</h2>
                    <p class="text-emerald-100 max-w-xl text-sm sm:text-base">Inscrições abertas para pré-incubação e incubação de empresas inovadoras no Campus Colatina. Conecte sua ideia ao ecossistema tecnológico.</p>
                </div>
                <div class="relative z-10 pt-6 flex flex-wrap items-center justify-between gap-4 border-t border-white/15">
                    <div class="text-xs text-emerald-200">
                        <p><b>Apoio:</b> Fapes, Sebrae, Ifes Campus Colatina, Agifes</p>
                    </div>
                    <a href="<?php echo home_url('/extensao'); ?>" class="bg-white text-comunicaDark font-bold px-6 py-2.5 rounded-xl hover:bg-emerald-50 transition-all shadow text-sm inline-block">
                        Saiba mais e Inscreva-se →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Showcase Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-comunicaPrimary font-bold text-xs uppercase tracking-widest bg-emerald-50 px-3 py-1 rounded-full border border-emerald-200">Vitrine Tecnológica</span>
            <h2 class="text-3xl font-heading font-bold text-comunicaDark mt-2">Tecnologias em Destaque</h2>
            <p class="text-slate-600 max-w-lg mx-auto text-sm mt-1">Conheça soluções, patentes e produtos desenvolvidos por pesquisadores e alunos do campus.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <article class="bg-gradient-to-b from-comunicaPrimary to-comunicaDark text-white rounded-3xl p-6 shadow-xl flex flex-col justify-between relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-all text-6xl">
                    <i class="fa-solid fa-seedling"></i>
                </div>
                <div>
                    <span class="bg-white/20 text-emerald-100 text-[11px] uppercase tracking-wider font-semibold px-3 py-1 rounded-full">Fabricação do Papel</span>
                    <h3 class="text-xl font-bold font-heading mt-4 leading-snug">Material oriundo de subprodutos da indústria cervejeira</h3>
                </div>
                <div class="pt-6 mt-6 border-t border-white/15 flex justify-between items-center">
                    <span class="text-xs text-emerald-200 font-medium">Ifes Campus Colatina</span>
                    <a href="<?php echo home_url('/pesquisa'); ?>" class="bg-white text-comunicaPrimary font-bold px-4 py-2 rounded-xl text-xs hover:bg-emerald-50 transition-all">Ver Tecnologia</a>
                </div>
            </article>

            <article class="bg-gradient-to-b from-comunicaSecondary-dark to-comunicaDark text-white rounded-3xl p-6 shadow-xl flex flex-col justify-between relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-all text-6xl">
                    <i class="fa-solid fa-mug-hot"></i>
                </div>
                <div>
                    <span class="bg-white/20 text-cyan-100 text-[11px] uppercase tracking-wider font-semibold px-3 py-1 rounded-full">Alimentos</span>
                    <h3 class="text-xl font-bold font-heading mt-4 leading-snug">Processamento de café arábica por fermentação induzida via úmida</h3>
                </div>
                <div class="pt-6 mt-6 border-t border-white/15 flex justify-between items-center">
                    <span class="text-xs text-cyan-200 font-medium">Ifes Campus Colatina</span>
                    <a href="<?php echo home_url('/pesquisa'); ?>" class="bg-white text-comunicaDark font-bold px-4 py-2 rounded-xl text-xs hover:bg-cyan-50 transition-all">Ver Tecnologia</a>
                </div>
            </article>

            <article class="bg-gradient-to-b from-slate-700 to-comunicaDark text-white rounded-3xl p-6 shadow-xl flex flex-col justify-between relative overflow-hidden group">
                <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-all text-6xl">
                    <i class="fa-solid fa-gears"></i>
                </div>
                <div>
                    <span class="bg-white/20 text-slate-200 text-[11px] uppercase tracking-wider font-semibold px-3 py-1 rounded-full">Química | Metalurgia</span>
                    <h3 class="text-xl font-bold font-heading mt-4 leading-snug">Processo de utilização de resíduo de mármore na fabricação de pelotas siderúrgicas</h3>
                </div>
                <div class="pt-6 mt-6 border-t border-white/15 flex justify-between items-center">
                    <span class="text-xs text-slate-300 font-medium">Ifes Campus Colatina</span>
                    <a href="<?php echo home_url('/pesquisa'); ?>" class="bg-white text-comunicaDark font-bold px-4 py-2 rounded-xl text-xs hover:bg-slate-100 transition-all">Ver Tecnologia</a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Participate Section -->
<section class="py-16 bg-comunicaPrimary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="bg-white/15 text-emerald-100 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Como Participar</span>
            <h2 class="text-3xl font-heading font-bold mt-2">A extensão também acontece com você.</h2>
            <p class="text-emerald-100 text-sm mt-2">Escolha a forma de participação que mais combina com o seu perfil e objetivo.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-comunicaDark/70 border border-white/15 p-6 rounded-2xl flex flex-col justify-between">
                <span class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center font-bold text-sm mb-4">01</span>
                <div>
                    <h3 class="font-bold font-heading text-lg">Sou estudante</h3>
                    <p class="text-xs text-emerald-100 mt-2">Encontre projetos, bolsas, cursos e oportunidades de aprendizagem prática.</p>
                </div>
            </div>
            <div class="bg-comunicaDark/70 border border-white/15 p-6 rounded-2xl flex flex-col justify-between">
                <span class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center font-bold text-sm mb-4">02</span>
                <div>
                    <h3 class="font-bold font-heading text-lg">Sou servidor</h3>
                    <p class="text-xs text-emerald-100 mt-2">Cadastre uma ação, compartilhe resultados ou sugira uma pauta institucional.</p>
                </div>
            </div>
            <div class="bg-comunicaDark/70 border border-white/15 p-6 rounded-2xl flex flex-col justify-between">
                <span class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center font-bold text-sm mb-4">03</span>
                <div>
                    <h3 class="font-bold font-heading text-lg">Represento organização</h3>
                    <p class="text-xs text-emerald-100 mt-2">Proponha uma parceria ou apresente uma demanda real da comunidade.</p>
                </div>
            </div>
            <div class="bg-comunicaDark/70 border border-white/15 p-6 rounded-2xl flex flex-col justify-between">
                <span class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center font-bold text-sm mb-4">04</span>
                <div>
                    <h3 class="font-bold font-heading text-lg">Quero conhecer</h3>
                    <p class="text-xs text-emerald-100 mt-2">Acompanhe atividades abertas, histórias e relatórios de impacto do campus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>