</main>

    <footer class="bg-comunicaDark text-white pt-16 pb-8 mt-20 border-t border-emerald-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 pb-12 border-b border-white/10">
                <!-- Brand & About -->
                <div class="space-y-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/text-without-logo.png" alt="Comunica Ciência Logo" class="h-10 object-contain filter brightness-0 invert">
                    <p class="text-xs text-emerald-100 leading-relaxed">
                        O Ifes Campus Colatina cumpre atribuições de difusão de ciência, tecnologia, inovação e extensão, estimulando o desenvolvimento sustentável do território capixaba.
                    </p>
                </div>

                <!-- Menu Links -->
                <div class="space-y-3">
                    <h3 class="font-heading font-bold text-sm tracking-wider uppercase text-comunicaSecondary-light">Menu Institucional</h3>
                    <ul class="space-y-2 text-xs text-emerald-100">
                        <li><a href="<?php echo home_url(); ?>" class="hover:underline">Início</a></li>
                        <li><a href="<?php echo home_url('/pesquisa'); ?>" class="hover:underline">Pesquisa e Dados</a></li>
                        <li><a href="<?php echo home_url('/extensao'); ?>" class="hover:underline">Portfólio de Extensão</a></li>
                        <li><a href="<?php echo home_url('/impacto'); ?>" class="hover:underline">Impacto Regional</a></li>
                    </ul>
                </div>

                <!-- Fale Conosco -->
                <div class="space-y-3 text-xs text-emerald-100">
                    <h3 class="font-heading font-bold text-sm tracking-wider uppercase text-comunicaSecondary-light">Fale Conosco</h3>
                    <p><i class="fa-solid fa-location-dot mr-2"></i> Av. Rio Branco, 50 - Santa Luzia, Vitória - ES, 29056-264 / Campus Colatina</p>
                    <p><i class="fa-solid fa-clock mr-2"></i> Atendimento ao público de 8h às 18h</p>
                    <p><i class="fa-solid fa-phone mr-2"></i> (27) 3357-7500</p>
                    <p><i class="fa-solid fa-envelope mr-2"></i> comunicacao.colatina@ifes.edu.br</p>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row justify-between items-center text-xs text-emerald-300 gap-4">
                <p>© 2026 Ifes Campus Colatina · Conhecimento em Movimento. Todos os direitos reservados.</p>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-white"><i class="fa-brands fa-facebook-f text-base"></i></a>
                    <a href="#" class="hover:text-white"><i class="fa-brands fa-instagram text-base"></i></a>
                    <a href="#" class="hover:text-white"><i class="fa-brands fa-linkedin-in text-base"></i></a>
                    <a href="#" class="hover:text-white"><i class="fa-brands fa-youtube text-base"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script para o menu mobile funcionar no WordPress -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuButton = document.getElementById('menuButton');
            if(menuButton && mobileMenu) {
                menuButton.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>

    <?php wp_footer(); ?>
</body>
</html>