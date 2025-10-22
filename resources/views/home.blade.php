<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
        
    </style>
    </head>
    <body class="antialiased font-sans">
        <!-- Header Fixo -->
    <header class="fixed top-0 w-full bg-white shadow-lg z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-bold text-purple-600">Geventos</div>
            <div class="space-x-4">
                <button onclick="scrollToSection('planos')" class="text-gray-600 hover:text-purple-600 transition-colors">Planos</button>
                <button onclick="scrollToSection('comentarios')" class="text-gray-600 hover:text-purple-600 transition-colors">Avaliações</button>
                <button onclick="scrollToSection('contato')" class="text-gray-600 hover:text-purple-600 transition-colors">Contato</button>
                <a href="/login">
                    <button class="bg-purple-600 text-white px-6 py-2 rounded-lg hover:bg-purple-700 transition-colors">Login</button>
                </a>
                <a href="/registro">
                    <button class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-colors">Registrar</button>
                </a>
            </div>
        </nav>
    </header>

    <!-- Banner Principal -->
    <section class="gradient-bg min-h-full pt-20 pb-16">
        <div class="container mx-auto px-6 py-16">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-5xl font-bold mb-6">Gerencie seu negócio com inteligência</h1>
                    <p class="text-xl mb-8 opacity-90">O <strong>Geventos</strong> é a solução completa para gestão empresarial. Controle financeiro, estoque, vendas e muito mais em uma única plataforma.</p>
                    <button class="bg-green-600 text-white text-xl px-6 py-2 rounded-lg hover:bg-green-700 transition-colors" onclick="scrollToSection('planos')">Escolha seu Plano</button>
                </div>
                
                <!-- Notebook com Sistema -->
                <div class="floating">
                    <div class="relative">
                       <img src="{{ asset('/images/notebook.png') }}" alt="notebook">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Planos -->
    <section id="planos" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Escolha o plano ideal</h2>
                <p class="text-xl text-gray-600">Soluções para empresas de todos os tamanhos</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Plano Gratuito -->
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Gratuito</h3>
                        <div class="text-4xl font-bold text-green-600 mb-2">R$ 0</div>
                        <div class="text-gray-600 mb-6">/mês</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Até 10 produtos</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Dashboard básico</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Suporte por email</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> 1 usuário</li>
                        </ul>
                        <button onclick="selectPlan('gratuito')" class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition-colors">Começar Grátis</button>
                    </div>
                </div>
                
                <!-- Plano Básico -->
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Básico</h3>
                        <div class="text-4xl font-bold text-purple-600 mb-2">R$ 49</div>
                        <div class="text-gray-600 mb-6">/mês</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Até 100 produtos</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Relatórios básicos</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Suporte por email</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> 1 usuário</li>
                        </ul>
                        <button onclick="selectPlan('basico')" class="w-full bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition-colors">Escolher Plano</button>
                    </div>
                </div>
                
                <!-- Plano Profissional -->
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover border-4 border-purple-500 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-purple-500 text-white px-4 py-1 rounded-full text-sm">Mais Popular</div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Profissional</h3>
                        <div class="text-4xl font-bold text-purple-600 mb-2">R$ 99</div>
                        <div class="text-gray-600 mb-6">/mês</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Produtos ilimitados</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Relatórios avançados</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Suporte prioritário</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Até 5 usuários</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> API integração</li>
                        </ul>
                        <button onclick="selectPlan('profissional')" class="w-full bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition-colors">Escolher Plano</button>
                    </div>
                </div>
                
                <!-- Plano Empresarial -->
                <div class="bg-white p-8 rounded-xl shadow-lg card-hover">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Empresarial</h3>
                        <div class="text-4xl font-bold text-purple-600 mb-2">R$ 199</div>
                        <div class="text-gray-600 mb-6">/mês</div>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Recursos ilimitados</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Relatórios personalizados</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Suporte 24/7</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Usuários ilimitados</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Consultoria dedicada</li>
                        </ul>
                        <button onclick="selectPlan('empresarial')" class="w-full bg-purple-600 text-white py-3 rounded-lg hover:bg-purple-700 transition-colors">Escolher Plano</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Comentários -->
    <section id="comentarios" class="py-20 bg-gradient-to-r from-blue-600 to-indigo-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">O que nossos clientes dizem</h2>
                <p class="text-xl text-gray-200">Mais de 10.000 empresas confiam no Geventos</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-xl">
                    <div class="flex mb-4">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-gray-700 mb-4">"O Geventos revolucionou nossa gestão. Conseguimos reduzir custos em 30% e aumentar nossa produtividade significativamente."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">MR</div>
                        <div>
                            <div class="font-semibold">Maria Rosa</div>
                            <div class="text-gray-600 text-sm">CEO, TechSolutions</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl">
                    <div class="flex mb-4">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-gray-700 mb-4">"Interface intuitiva e recursos poderosos. Nossa equipe se adaptou rapidamente e os resultados apareceram em poucas semanas."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">JS</div>
                        <div>
                            <div class="font-semibold">João Silva</div>
                            <div class="text-gray-600 text-sm">Diretor, ComercialMax</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-xl">
                    <div class="flex mb-4">
                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                    </div>
                    <p class="text-gray-700 mb-4">"Suporte excepcional e sistema muito confiável. Recomendo para qualquer empresa que queira crescer de forma organizada."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-4">AC</div>
                        <div>
                            <div class="font-semibold">Ana Costa</div>
                            <div class="text-gray-600 text-sm">Gerente, LogisticaPro</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section id="contato" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-800 mb-4">Entre em contato</h2>
                    <p class="text-xl text-gray-600">Tire suas dúvidas ou solicite uma demonstração personalizada</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Fale conosco</h3>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                    <span class="text-purple-600">📧</span>
                                </div>
                                <div>
                                    <div class="font-semibold">Email</div>
                                    <div class="text-gray-600">contato@gestaopro.com</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                    <span class="text-purple-600">📞</span>
                                </div>
                                <div>
                                    <div class="font-semibold">Telefone</div>
                                    <div class="text-gray-600">(11) 9999-9999</div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                                    <span class="text-purple-600">🕒</span>
                                </div>
                                <div>
                                    <div class="font-semibold">Horário</div>
                                    <div class="text-gray-600">Seg-Sex: 8h às 18h</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <form onsubmit="submitContact(event)">
                            <div class="mb-6">
                                <label for="nome" class="block text-gray-700 font-semibold mb-2">Nome completo</label>
                                <input type="text" id="nome" name="nome" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500">
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500">
                            </div>
                            <div class="mb-6">
                                <label for="empresa" class="block text-gray-700 font-semibold mb-2">Empresa</label>
                                <input type="text" id="empresa" name="empresa" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500">
                            </div>
                            <div class="mb-6">
                                <label for="mensagem" class="block text-gray-700 font-semibold mb-2">Mensagem</label>
                                <textarea id="mensagem" name="mensagem" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-purple-500"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors">Enviar Mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="text-2xl font-bold mb-4">Geventos</div>
                    <p class="text-gray-400">A solução completa para gestão empresarial inteligente.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Produto</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Recursos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Preços</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Integrações</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Suporte</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Central de Ajuda</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Documentação</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Empresa</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Sobre</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Carreiras</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Geventos. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>



    <script>
        function scrollToSection(sectionId) {
            document.getElementById(sectionId).scrollIntoView({ behavior: 'smooth' });
        }





        function selectPlan(planName) {
            showMessage(`Plano ${planName} selecionado! Redirecionando para o checkout...`, 'success');
        }



        function submitContact(event) {
            event.preventDefault();
            const nome = document.getElementById('nome').value;
            showMessage(`Obrigado, ${nome}! Sua mensagem foi enviada. Retornaremos em até 24 horas.`, 'success');
            event.target.reset();
        }

        function showMessage(message, type) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `fixed top-24 right-6 p-4 rounded-lg shadow-lg z-50 ${type === 'success' ? 'bg-green-500' : 'bg-red-500'} text-white`;
            messageDiv.textContent = message;
            document.body.appendChild(messageDiv);
            
            setTimeout(() => {
                messageDiv.remove();
            }, 4000);
        }


    </script>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'99242f3ff391009f',t:'MTc2MTA4NTY3MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
    </body>
</html>
