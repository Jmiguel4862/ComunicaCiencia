<?php
/**
 * Template Name: Página de Impacto
 * Descrição: Modelo para a seção de Impacto Regional do portal.
 */
get_header(); 
?>

<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <span class="text-comunicaPrimary font-bold text-xs uppercase tracking-widest bg-emerald-50 px-3 py-1 rounded-full">Transformar números em impacto</span>
                <h1 class="text-3xl sm:text-4xl font-heading font-bold text-comunicaDark mt-2">O que o conhecimento movimenta</h1>
                <p class="text-slate-600 text-sm mt-1">Visão integrada de alcance, entregas, parcerias e mudanças produzidas no território.</p>
            </div>
            <span class="bg-cyan-50 text-comunicaSecondary-dark text-xs font-bold px-4 py-2 rounded-xl border border-cyan-200">Modelo Demonstrativo</span>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <span class="text-xs text-slate-500 uppercase font-semibold">Pessoas Alcançadas</span>
                <strong class="text-3xl sm:text-4xl font-bold font-heading block mt-2 text-comunicaPrimary">1.840</strong>
                <span class="text-xs text-slate-500 mt-1 block">direta e indiretamente</span>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <span class="text-xs text-slate-500 uppercase font-semibold">Municípios</span>
                <strong class="text-3xl sm:text-4xl font-bold font-heading block mt-2 text-comunicaDark">6</strong>
                <span class="text-xs text-slate-500 mt-1 block">na região de Colatina</span>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <span class="text-xs text-slate-500 uppercase font-semibold">Parceiras</span>
                <strong class="text-3xl sm:text-4xl font-bold font-heading block mt-2 text-comunicaDark">14</strong>
                <span class="text-xs text-slate-500 mt-1 block">públicas e privadas</span>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-200">
                <span class="text-xs text-slate-500 uppercase font-semibold">Entregas</span>
                <strong class="text-3xl sm:text-4xl font-bold font-heading block mt-2 text-comunicaDark">47</strong>
                <span class="text-xs text-slate-500 mt-1 block">oficinas e soluções</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 space-y-6">
                <span class="text-xs font-bold text-comunicaPrimary uppercase">Território de Atuação</span>
                <h2 class="text-xl font-heading font-bold text-comunicaDark">Presença Regional em 6 Municípios</h2>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 pt-2">
                    <div class="p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-center font-bold text-comunicaPrimary">Colatina</div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-center font-semibold text-slate-700">Baixo Guandu</div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-center font-semibold text-slate-700">Marilândia</div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-center font-semibold text-slate-700">Linhares</div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-center font-semibold text-slate-700">São Domingos</div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 text-center font-semibold text-slate-700">Pancas</div>
                </div>
            </div>
            <div class="bg-comunicaDark text-white p-8 rounded-3xl shadow space-y-6 flex flex-col justify-between">
                <div>
                    <span class="text-xs uppercase font-semibold bg-white/20 px-3 py-1 rounded-full">Depoimento em Destaque</span>
                    <p class="text-lg font-heading italic mt-6">“O projeto mostrou que a tecnologia e a pesquisa podem ajudar diretamente a resolver problemas reais da nossa comunidade.”</p>
                </div>
                <div class="pt-4 border-t border-white/15 text-xs text-emerald-200">
                    <strong>Participante de ação de extensão</strong>
                    <p>Ifes Campus Colatina</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>