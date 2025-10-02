<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grupo 20+</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/css/welcome.css', 'resources/js/app.js'])
</head>

<body>

    <header>
        <a href="/">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" class="logo">
        </a>

        <nav>
            <ul>
                <li><a href="#historia">EMPRESA</a></li>
                <li><a href="#departamentos">PRODUTOS</a></li>
                <li><a href="#foot">CONTATOS</a></li>
            </ul>
        </nav>

    </header>


    <main>

<div class="swiper">
  <div class="swiper-wrapper">
    @forelse($images as $image)
        <div class="swiper-slide">
            <img src="{{ asset('storage/' . $image->path) }}" 
                 class="w-full h-full object-cover">
        </div>
    @empty
        <div class="swiper-slide">
            <div class="flex items-center justify-center h-full bg-gray-200">
                <p class="text-gray-500">Nenhuma imagem encontrada.</p>
            </div>
        </div>
    @endforelse
  </div>
  <div class="swiper-pagination"></div>

  <div class="swiper-button-prev absolute top-1/2 z-10 p-2">
    <div class="bg-white/95 border p-1 rounded-full text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
        </svg>
    </div>
  </div>

  <div class="swiper-button-next absolute right-0 top-1/2 z-10 p-2">
    <div class="bg-white/95 border p-1 rounded-full text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
</svg>

    </div>
  </div>
</div>

    </main>

    <section id="departamentos">
    <div class="baixo">
        <div class="titulo">
            <h1>Conheca Nossos Departamentos</h1>
        </div>

        <div class="produtos">

            <div class="lingeries">
                <div class="quadrado-1">
                    <img src="{{ Vite::asset('resources/images/27910.jpg') }}">
                </div>
                <div class="texto">
                    <h2>Lingeries</h2>
                    <p>A lingerie vai além de uma simples peça de roupa íntima; ela representa sensualidade, conforto e
                        autoconfiança. Disponível em diversos estilos, tecidos e modelos, a lingerie pode ser delicada e
                        romântica, com rendas e detalhes sofisticados, ou ousada e moderna, com cortes estratégicos e
                        transparências.</p>
                </div>
            </div>

            <div class="roupa-feminina">
                <div class="texto">
                    <h2>Roupa Feminina</h2>
                    <p>A roupa feminina é uma expressão de estilo, personalidade e conforto. Com uma enorme diversidade
                        de peças, cores e modelagens, atende a diferentes ocasiões e preferências. Desde vestidos
                        elegantes a jeans versáteis, passando por blusas delicadas e conjuntos modernos, a moda feminina
                        evolui constantemente, refletindo tendências e influências culturais.</p>
                </div>
                <div class="quadrado-2">
                    <img src="{{ Vite::asset('resources/images/2148098519.jpg') }}">
                </div>
            </div>

            <div class="bijouteria">
                <div class="quadrado-3">
                    <img src="{{ Vite::asset('resources/images/2150218026.jpg') }}">
                </div>
                <div class="texto">
                    <h2>Bijouteria</h2>
                    <p>As bijuterias são acessórios versáteis que adicionam charme e personalidade a qualquer look.
                        Feitas de materiais diversos, como metal, resina, pedras sintéticas e acrílico, elas oferecem
                        opções acessíveis e estilosas para todas as ocasiões. Brincos, colares, anéis e pulseiras podem
                        transformar uma produção simples em algo sofisticado e moderno.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="historia">
    <div class="quem-somos">
        <h1>Nossa Historia</h1>
        <p>Lorem ipsum dolor sit amet. Aut impedit quibusdam est inventore praesentium aut nisi obcaecati in autem modi est repellat internos ea expedita perferendis aut accusamus Quis? Et cupiditate labore ut unde excepturi ea harum placeat eum delectus atque est corrupti perspiciatis.</p>
    </div>
</section>
<section id="foot">


<footer class="rodape">
    <div class="logo">
        <img src="{{ Vite::asset('resources/images/logo.png')}}" >
    </div>
    <div class="coluna">
    <h3>Redes Sociais</h3>
    <ul>
  <li>
    <a href="https://www.facebook.com/share/19LweQyEet/" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-facebook"></i> Facebook
    </a>
  </li>
  <li>
    <a href="https://www.instagram.com/lojas20mais_itacoatiara?igsh=aTl3azh1cHk3aGRm" target="_blank" rel="noopener noreferrer">
      <i class="fab fa-instagram"></i> Instagram
    </a>
  </li>
  </ul>
  </div>

  <div class="coluna">
    <h3>Contate-nos</h3>
   <p>
  <a href="https://wa.me/55929933320591" target="_blank" rel="noopener noreferrer">
    <i class="fab fa-whatsapp"></i> WhatsApp
  </a>
</p>

<p>
  <i class="fas fa-phone"></i> (92) 93332-0591
</p>
  </div>

  <div class="coluna">
    <h3>Horário de Atendimento</h3>
    <p>Seg - Sex: 9h às 18h</p>
    <p>Sáb: 9h às 13h</p>
  </div>

</footer>
</section>
</body>

</html>