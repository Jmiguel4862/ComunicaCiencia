<?php
/**
 * Template Name: Página de Extensão
 * Descrição: Modelo para a seção de Extensão (Portfólio) do portal.
 */
get_header(); 
?>

<div class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-200 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
            <div>
                <span class="text-comunicaPrimary font-bold text-xs uppercase tracking-widest bg-emerald-50 px-3 py-1 rounded-full">Portfólio de Extensão</span>
                <h1 class="text-3xl font-heading font-bold text-comunicaDark mt-2">Conheça as ações em andamento</h1>
                <p class="text-slate-600 text-sm mt-1">Pesquise iniciativas, descubra quem coordena e acompanhe conexões com o território.</p>
            </div>
            <div class="bg-comunicaPrimary text-white px-6 py-3 rounded-2xl text-center shadow">
                <strong class="text-2xl font-bold font-heading block">19</strong>
                <span class="text-xs text-emerald-100">ações mapeadas</span>
            </div>
        </div>

        <!-- Toolbar Search & Filters -->
        <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-200 flex flex-col sm:flex-row items-center gap-4">
            <div class="relative w-full sm:w-96">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input id="search" type="search" placeholder="Buscar ação, tema ou coordenador..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 text-sm focus:outline-none focus:border-comunicaPrimary">
            </div>
            <div class="flex flex-wrap gap-2 w-full sm:w-auto" id="filterChips">
                <button class="px-4 py-2 rounded-xl text-xs font-semibold bg-comunicaPrimary text-white" data-filter="all">Todas</button>
                <button class="px-4 py-2 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200" data-filter="Inovação">Inovação</button>
                <button class="px-4 py-2 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200" data-filter="Educação">Educação</button>
                <button class="px-4 py-2 rounded-xl text-xs font-semibold bg-slate-100 text-slate-700 hover:bg-slate-200" data-filter="Comunicação">Comunicação</button>
            </div>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="actionCards">
            <!-- Cards populated by JS -->
        </div>
    </div>
</div>

<!-- Modal de Detalhes -->
<dialog id="detailDialog" class="p-0 rounded-3xl shadow-2xl max-w-lg w-full backdrop:bg-slate-900/60">
    <div class="bg-comunicaPrimary text-white p-6 flex justify-between items-center">
        <h3 class="font-heading font-bold text-lg" id="dialogTitle">Detalhes da Ação</h3>
        <button class="dialog-close text-white text-xl hover:opacity-75 focus:outline-none">&times;</button>
    </div>
    <div class="p-6 space-y-4 bg-white text-slate-800" id="dialogContent">
        <!-- Content loaded dynamically -->
    </div>
</dialog>

<!-- Script de interatividade do Portfólio -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const actionsData = [
            { id: 'nic', title: 'Núcleo Incubador do Campus Colatina', category: 'Inovação', coordinator: 'Prof. Jaimel', desc: 'Apoio ao empreendedorismo, pré-incubação e conexão com organizações e ecossistema local.' },
            { id: 'colatina', title: 'Colatina Digital', category: 'Inovação', coordinator: 'Equipe de TI', desc: 'Inteligência artificial aplicada à educação e ao atendimento ágil ao cidadão.' },
            { id: 'comunica', title: 'Comunica Ciência', category: 'Comunicação', coordinator: 'Equipe de Extensão', desc: 'Comunicação pública para aproximar pesquisas científicas e a sociedade.' },
            { id: 'inovar', title: 'Projeto Inovar Colatina', category: 'Educação', coordinator: 'Prof. Julio', desc: 'Formação de facilitadores e novas metodologias ativas de aprendizagem.' }
        ];

        const cardsContainer = document.getElementById('actionCards');
        const searchInput = document.getElementById('search');
        const filterChips = document.querySelectorAll('[data-filter]');
        const detailDialog = document.getElementById('detailDialog');
        const dialogTitle = document.getElementById('dialogTitle');
        const dialogContent = document.getElementById('dialogContent');

        function renderCards(filter = 'all', query = '') {
            if(!cardsContainer) return;
            cardsContainer.innerHTML = '';
            
            const filtered = actionsData.filter(item => {
                const matchFilter = filter === 'all' || item.category === filter;
                const matchQuery = item.title.toLowerCase().includes(query.toLowerCase()) || item.desc.toLowerCase().includes(query.toLowerCase());
                return matchFilter && matchQuery;
            });

            if(filtered.length === 0) {
                cardsContainer.innerHTML = '<p class="col-span-3 text-center text-slate-500 py-8">Nenhuma ação encontrada com os critérios informados.</p>';
                return;
            }

            filtered.forEach(item => {
                const card = document.createElement('article');
                card.className = 'bg-white p-6 rounded-3xl shadow-sm border border-slate-200 flex flex-col justify-between hover:shadow-md transition-all';
                card.innerHTML = `
                    <div>
                        <span class="text-[11px] font-bold text-comunicaPrimary bg-emerald-50 px-3 py-1 rounded-full uppercase">${item.category}</span>
                        <h3 class="font-heading font-bold text-lg text-comunicaDark mt-4">${item.title}</h3>
                        <p class="text-xs text-slate-600 mt-2 leading-relaxed">${item.desc}</p>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-100 flex justify-between items-center">
                        <span class="text-xs text-slate-500 font-semibold">${item.coordinator}</span>
                        <button class="bg-comunicaPrimary text-white font-bold px-4 py-2 rounded-xl text-xs hover:bg-comunicaPrimary-dark transition-all" data-detail="${item.id}">Conhecer →</button>
                    </div>
                `;
                cardsContainer.appendChild(card);
            });

            document.querySelectorAll('[data-detail]').forEach(btn => {
                btn.addEventListener('click', () => {
                    const actionId = btn.getAttribute('data-detail');
                    const found = actionsData.find(a => a.id === actionId) || { title: 'Detalhes da Ação', desc: 'Informações institucionais detalhadas da iniciativa.', coordinator: 'Coordenação Ifes' };
                    openDialog(found.title, `<p class="text-sm text-slate-700">${found.desc}</p><div class="mt-4 p-4 bg-slate-50 rounded-2xl text-xs text-slate-600"><p><b>Coordenador(a):</b> ${found.coordinator}</p><p class="mt-1"><b>Campus:</b> Colatina</p></div>`);
                });
            });
        }

        renderCards();

        if(searchInput) {
            searchInput.addEventListener('input', (e) => {
                renderCards('all', e.target.value);
            });
        }

        filterChips.forEach(chip => {
            chip.addEventListener('click', () => {
                filterChips.forEach(c => c.classList.remove('bg-comunicaPrimary', 'text-white'));
                filterChips.forEach(c => c.classList.add('bg-slate-100', 'text-slate-700'));
                chip.classList.add('bg-comunicaPrimary', 'text-white');
                chip.classList.remove('bg-slate-100', 'text-slate-700');
                renderCards(chip.getAttribute('data-filter'), searchInput ? searchInput.value : '');
            });
        });

        function openDialog(title, html) {
            if(detailDialog) {
                dialogTitle.textContent = title;
                dialogContent.innerHTML = html;
                detailDialog.showModal();
            }
        }

        document.querySelectorAll('.dialog-close').forEach(btn => {
            btn.addEventListener('click', () => {
                if(detailDialog) detailDialog.close();
            });
        });
    });
</script>

<?php get_footer(); ?>