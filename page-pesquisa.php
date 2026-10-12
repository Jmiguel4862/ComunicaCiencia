<?php
/**
 * Template Name: Página de Pesquisa
 * Descrição: Modelo para a seção de Pesquisa do portal.
 */
get_header(); 
?>

<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 bg-white p-8 rounded-3xl shadow-sm border border-slate-200">
            <div>
                <span class="text-comunicaPrimary font-bold text-xs uppercase tracking-widest bg-emerald-50 px-3 py-1 rounded-full">Pesquisa no Campus Colatina</span>
                <h1 class="text-3xl sm:text-4xl font-heading font-bold text-comunicaDark mt-2">Ideias que investigam o presente.</h1>
                <p class="text-slate-600 text-sm mt-1 max-w-2xl">Indicadores oficiais para aproximar pesquisadores, estudantes e sociedade do conhecimento produzido no campus.</p>
            </div>
            <a class="bg-slate-100 hover:bg-slate-200 text-slate-800 text-xs font-bold px-4 py-3 rounded-2xl transition-all flex items-center gap-2 border border-slate-300" href="https://sigpesq.ifes.edu.br/publico/Indicadores.aspx?Campus=8" target="_blank" rel="noopener">
                <span>SigPesq · Ifes ↗</span>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-comunicaPrimary text-white p-6 rounded-3xl shadow">
                <span class="text-xs text-emerald-200 uppercase font-semibold">Pesquisadores</span>
                <strong class="text-4xl font-bold font-heading block mt-2">40</strong>
                <span class="text-xs text-emerald-100 mt-1 block">servidores envolvidos</span>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <span class="text-xs text-slate-500 uppercase font-semibold">Estudantes</span>
                <strong class="text-4xl font-bold font-heading block mt-2 text-comunicaDark">58</strong>
                <span class="text-xs text-slate-500 mt-1 block">formação científica em andamento</span>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <span class="text-xs text-slate-500 uppercase font-semibold">Projetos Ativos</span>
                <strong class="text-4xl font-bold font-heading block mt-2 text-comunicaDark">32</strong>
                <span class="text-xs text-slate-500 mt-1 block">por área de atuação</span>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <span class="text-xs text-slate-500 uppercase font-semibold">Áreas</span>
                <strong class="text-4xl font-bold font-heading block mt-2 text-comunicaDark">13</strong>
                <span class="text-xs text-slate-500 mt-1 block">diversidade do campus</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <article class="lg:col-span-8 bg-white p-8 rounded-3xl shadow-sm border border-slate-200 space-y-6">
                <div class="flex justify-between items-center border-b border-slate-100 pb-4">
                    <div>
                        <span class="text-xs font-bold text-comunicaPrimary uppercase">Indicadores Oficiais</span>
                        <h2 class="text-xl font-heading font-bold text-comunicaDark">Projetos Ativos por Área</h2>
                    </div>
                    <span class="text-xs bg-emerald-50 text-comunicaPrimary font-semibold px-3 py-1 rounded-full">SigPesq</span>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between text-sm font-semibold text-slate-700 mb-1"><span>Arquitetura e Urbanismo</span> <span>5 projetos</span></div>
                        <div class="w-full bg-slate-100 h-3 rounded-full overflow-hidden"><div class="bg-comunicaPrimary h-full rounded-full" style="width: 100%"></div></div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm font-semibold text-slate-700 mb-1"><span>Ciência da Computação</span> <span>5 projetos</span></div>
                        <div class="w-full bg-slate-100 h-3 rounded-full overflow-hidden"><div class="bg-comunicaPrimary h-full rounded-full" style="width: 100%"></div></div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm font-semibold text-slate-700 mb-1"><span>Educação</span> <span>4 projetos</span></div>
                        <div class="w-full bg-slate-100 h-3 rounded-full overflow-hidden"><div class="bg-comunicaPrimary h-full rounded-full" style="width: 80%"></div></div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm font-semibold text-slate-700 mb-1"><span>Administração</span> <span>4 projetos</span></div>
                        <div class="w-full bg-slate-100 h-3 rounded-full overflow-hidden"><div class="bg-comunicaPrimary h-full rounded-full" style="width: 80%"></div></div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm font-semibold text-slate-700 mb-1"><span>Engenharia Civil</span> <span>3 projetos</span></div>
                        <div class="w-full bg-slate-100 h-3 rounded-full overflow-hidden"><div class="bg-comunicaPrimary h-full rounded-full" style="width: 60%"></div></div>
                    </div>
                </div>
            </article>

            <aside class="lg:col-span-4 space-y-6">
                <div class="bg-comunicaDark text-white p-8 rounded-3xl shadow space-y-4">
                    <span class="text-xs uppercase font-semibold bg-white/20 px-3 py-1 rounded-full">Para a sociedade</span>
                    <h2 class="text-xl font-heading font-bold">Por que esses dados importam?</h2>
                    <p class="text-xs text-emerald-100 leading-relaxed">Eles mostram as competências disponíveis no campus, ajudam organizações a encontrar pesquisadores e revelam oportunidades formativas.</p>
                </div>
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200 flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 text-comunicaPrimary flex items-center justify-center shrink-0 font-bold"><i class="fa-solid fa-check"></i></div>
                    <div>
                        <h3 class="font-bold text-sm text-comunicaDark">Informação Institucional</h3>
                        <p class="text-xs text-slate-600 mt-1">Dados consultados diretamente na página pública oficial do SigPesq.</p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

<?php get_footer(); ?>