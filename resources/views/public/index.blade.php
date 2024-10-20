@extends('components.public.matrix', ['pagina' => 'index'])

@section('css_importados')

@stop

@php
    $bannersBottom = array_filter($banners, function ($banner) {
        return $banner['potition'] === 'bottom';
    });
    $bannerMid = array_filter($banners, function ($banner) {
        return $banner['potition'] === 'mid';
    });
@endphp

<style>
    @media (max-width: 600px) {
        .fixedWhastapp {
            right: 13px !important;
        }
    }
</style>



@section('content')

<main>

    <section class="flex flex-col lg:flex-row gap-3 lg:gap-10 justify-center items-center px-[5%] lg:pl-[5%] lg:pr-0 bg-[#5BE3A4]">
      
      <!-- Primer div -->
        <div class="w-full lg:w-[55%] text-[#151515] flex flex-col justify-center items-center gap-2 md:gap-10">
            <div class="w-full flex flex-col gap-5 px-0 lg:px-[5%] pt-8 lg:pt-0 xl:max-w-3xl">
              <h1 class="text-[#F8FCFF] font-Homie_Bold text-4xl xl:text-5xl">
                Propiedades que inspiran, experiencias que  marcan la diferencia.
              </h1>
              <p class="text-[#F8FCFF] text-base font-FixelText_Regular">
                  Ahora puedes disfrutar de Lima de la mejor  manera a través de nuestras propiedades  exclusivas.
              </p>
            </div>

            <div class="w-full flex flex-col gap-5 px-0 lg:px-[5%] pt-8 md:pt-0">
              <!--  -->
              <div class="px-0 w-full z-10">
                
                <!-- Tab Buttons -->
                <div class="bg-white rounded-t-lg inline-block w-auto md:max-w-[388px]">
                  <div class="flex justify-between items-center">
                    <button
                      class="px-10 py-3 text-[#009A84] font-FixelText_Semibold border-b-[2.5px] border-[#009A84] focus:outline-none tab-button flex-1"
                      onclick="showTab('tab1')">
                      Elige unas Fechas
                    </button>
                  </div>
                </div>
                
                <!-- Tab Content -->
                <div id="tab1" class="flex flex-col md:flex-row py-4 px-4 tab-content bg-white justify-between items-center gap-5 rounded-b-lg md:rounded-tr-lg w-full">
                  
                  <div class="w-full">
                    <div class="relative w-full text-left">
                      <div class="group">
                        <div>
                          <select name="departamento_id" id="departamento_id2"
                            class="w-full py-3 px-5 text-text18 text-[#000929] border-0">
                            <option value="">Ubicacion</option>

                          </select>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="w-[0.5px] h-[50px] bg-[#E0DEF7] hidden md:block">
                  </div>

                  <div class="w-full">
                    <div class="relative w-full text-left">
                      <div class="group">
                        <div>
                          <select name="categoria_id" id="categoria_id2"
                            class="w-full py-3 px-5 text-text18 text-[#000929] border-0">
                            <option value="">Categorias</option>

                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
    
                  <div class="w-[0.5px] h-[50px] bg-[#E0DEF7] hidden md:block">
                  </div>
    
                  <div class="flex justify-center items-center md:w-full">
                    <div class="flex flex-row-reverse 2md:flex-row justify-center items-center gap-5">
                      <div class="flex justify-start items-center w-full">
                        <button id="linkExplirarAlquileres"
                          class="bg-[#009A84] rounded-2xl font-FixelText_Semibold text-base text-white px-10 py-3 text-center">
                          <span class="flex w-full">Buscar</span>
                        </button>
                      </div>
                    </div>
                  </div>

                </div>
                
              </div>

              <!-- Pequeño slogan  -->
              <p class="font-FixelText_Regular underline text-sm text-white ">
                Propietario, anuncia tu propiedad gratis
              </p>

            </div>
        </div>

        <!-- Segundo div -->
        <div class="w-full lg:w-[45%] ">
          <div class="w-full h-full -mb-20 flex flex-row items-center justify-center">
              <img src="{{ asset('images/img/portadavt.png') }}" class="min-h-[500px] object-contain xl:h-[700px]" />
          </div>
        </div>

    </section>



    <section class="flex flex-col md:flex-row gap-10 lg:gap-20 items-center justify-center px-[5%] xl:px-[8%] py-8 lg:py-16 mt-20 lg:mt-14">

      <div class="w-full lg:w-1/2 flex flex-col items-start justify-center gap-5 xl:max-w-xl mx-auto">
        <h2 class="text-4xl lg:text-5xl font-Homie_Bold text-[#006258]">
          Con Ventura, estás donde quieres estar
        </h2>
        <p class="text-lg text-[#000929] font-FixelText_Regular">
          Con 6 años de experiencia gestionando inmuebles  en las mejores zonas de Lima, hemos desarrollado  un servicio que responde a la creciente demanda  de Airbnbs en la ciudad. 
          Somos un equipo comprometido con crear  experiencias de alquiler óptimas, garantizando  rentabilidad para nuestros propietarios y máximo  confort para nuestros huéspedes.
        </p>
        <div class="flex flex-col sm:flex-row gap-5 sm:gap-10 mt-5">
          <div class="flex flex-col gap-2">
            <h2 class="text-4xl lg:text-5xl font-FixelText_Bold text-[#002677]">
              90%
            </h2>
            <p class="text-sm text-[#009A84] font-FixelText_Medium">Tasa de Ocupación</p>
          </div>

          <div class="flex flex-col gap-2">
            <h2 class="text-4xl lg:text-5xl font-FixelText_Bold text-[#002677]">
              95%
            </h2>
            <p class="text-sm text-[#009A84] font-FixelText_Medium">Clientes Satisfechos</p>
          </div>

          <div class="flex flex-col gap-2">
            <h2 class="text-4xl lg:text-5xl font-FixelText_Bold text-[#002677]">
              +20%
            </h2>
            <p class="text-sm text-[#009A84] font-FixelText_Medium">Crecimiento Anual</p>
          </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-10 mt-2">
            <a class="bg-[#00897B] text-[#73F7AD] px-4 py-3 rounded-xl font-FixelText_Semibold">
              Sobre Nosotros
            </a>
        </div>
      </div>

      <div class="w-full lg:w-1/2 flex flex-col items-center justify-center">
          <img class="h-full w-full py-[5%] lg:py-[10%] object-contain" src="{{asset('images/img/portada_vt4.png')}}" />  
      </div>
      
    </section>


     {{-- seccion Ultimos Productos  --}}
     @if ($ultimosProductos->count() > 0)
        <section class="w-full px-[5%] xl:px-[8%] pb-12 overflow-visible" style="overflow-x: visible">
          <div class="flex flex-col md:flex-row justify-between items-start md:items-center w-full gap-10">
            <div class="flex flex-col gap-3 max-w-2xl">
              <h1 class="text-3xl lg:text-4xl font-Homie_Bold text-[#002677]">Nuestras propiedades</h1>
              <p class="text-lg text-[#000929] font-FixelText_Regular">Conoce acá todas las propiedades exclusivas que  tenemos disponibles. 
                Disfruta de una estadía  perfecta en las mejores zonas de Lima.</p>
            </div>
            <div>
              <a href="/catalogo" class="bg-[#00897B] text-[#73F7AD] px-4 py-4 rounded-xl font-FixelText_Semibold">
                Ver todos los departamentos</a>
            </div>
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 md:flex-row gap-4 lg:gap-8 mt-7 w-full">
            @foreach ($ultimosProductos as $item)
              <x-product.container width="col-span-1 " bgcolor="" :item="$item" />
            @endforeach
          </div>
        </section>
      @endif


  
    <section class="flex flex-col md:flex-row md:gap-10 lg:gap-20 items-center justify-center px-[5%] xl:px-[8%] w-full bg-[#009A84]">
    
        <div class="flex flex-col w-full md:w-1/2 pt-10 lg:py-10">
         
            <div class="flex flex-col w-full text-center max-w-2xl gap-5 mx-auto">
              <h2 class="text-4xl lg:text-5xl font-Homie_Bold text-[#73F7AD]">Lo que dicen nuestros clientes</h2>
              <p class="text-base font-FixelText_Regular text-white px-[5%]">
                Descubre lo que nuestros huéspedes y  propietarios opinan de nuestro servicio.
              </p>
            </div>

            <div class="flex flex-col w-full mt-5">
              <p class="text-xl font-FixelText_Semibold text-center text-white">
                "La plataforma de Ventura es a la que acudo casi a diario para buscar donde quedarme para vacaciones, o simplemente para buscar depas de mi sueño en nuevas áreas.
              </p>    
            </div>

            <div class="flex flex-col items-center self-center mt-5 gap-5">
              <p class="text-base font-FixelText_Semibold text-center text-white">
                <span class="text-lg text-[#73F7AD]">Alejandar Neyra,</span>
                <span class="text-lg text-white font-FixelText_Regular">Inquilino</span>
              </p>
              <div class="flex items-center">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5fec1ea2559a56881b67f1e4cd28129cee04be0df82bb20f234da5c48c732d9a?placeholderIfAbsent=true&apiKey=5531072f5ff9482693929f17ec98446f" class="object-contain shrink-0 self-stretch my-auto rounded-none aspect-square w-[72px]" alt="Client testimonial avatar 1" />
              </div>
            </div>
         
        </div>

        <div class="flex flex-col w-full md:w-1/2 justify-end items-end">
          <img loading="lazy"  class="object-cover lg:object-contain w-full md:h-[550px]" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a8593afed5046f7bdd1c0c35a2f7833d1c18904235d5a83fe710800a1a4dd62f?placeholderIfAbsent=true&apiKey=5531072f5ff9482693929f17ec98446f" />
        </div>
    
    </section>
  

    @if (!empty($benefit))
    <section class="flex flex-col lg:flex-row md:gap-10 lg:gap-20 items-center justify-center px-[5%] xl:px-[8%] py-10 lg:py-20 w-full">
        
      <div class="flex overflow-hidden flex-col min-w-[240px] w-full lg:w-2/5">
        <div class="flex relative flex-col w-full rounded-3xl overflow-hidden">
          
          <img loading="lazy" class="object-cover object-bottom absolute inset-0 h-full size-full" src="{{asset('images/svg/fondoverde.svg')}}"  alt="" />
          
          <div class="flex relative flex-col px-8 pt-4 md:pt-12 pb-80 w-full rounded-none min-h-[638px] max-md:px-5 max-md:pb-24  ">
            
            <img loading="lazy" class="object-cover sm:object-contain object-bottom absolute inset-0 size-full" src="{{asset('images/img/chicos_vt.png')}}"  alt="" />
            
            <div class="flex relative flex-col justify-center mb-0 w-full max-md:mb-2.5">
              <div class="flex flex-col w-full gap-3">
                <h2 class="text-2xl md:text-3xl font-Homie_Bold text-[#73F7AD]">
                  Gestionar tu propiedad de alquiler a corto plazo ahora es más fácil.
                </h2>
                <p class="text-base text-white font-FixelText_Light">
                  Más rentabilidad, menos estrés. Te ayudamos a maximizar tus ingresos y disfrutar de los beneficios de alquilar tu propiedad sin estrés.
                </p>
              </div>
              <a href="#contact" class="px-4 self-end py-2.5 mt-2 text-xs font-FixelText_Semibold text-center text-[#009A84] bg-[#73F7AD] rounded-xl">
                Ponte en contacto
              </a>
            </div>

          </div>
        </div>
      </div>
      
      <div class="flex flex-col min-w-[240px] w-full lg:w-3/5  ">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 lg:gap-10 items-start w-full max-md:mt-10">
          @foreach ($benefit as $beneficios)
            <article class="flex flex-col flex-1 shrink basis-0 min-w-[240px]">
              <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d12c7dad98a339a04f45dca80926da9272647e73c9fa2312278c65a2a356737e?placeholderIfAbsent=true&apiKey=5531072f5ff9482693929f17ec98446f" class="object-contain w-14 aspect-square" alt="Icono de cuidado de propiedad" />
              <div class="flex flex-col mt-4 w-full">
                <h3 class="text-2xl font-Homie_Bold tracking-tight leading-9 text-[#002677]">
                  {{$beneficios->titulo}}
                </h3>
                <p class="mt-2 text-base font-FixelText_Regular text-[#000929]">
                  {{$beneficios->descripcionshort}}
                </p>
              </div>
            </article>
          @endforeach
         

          {{-- <article class="flex flex-col flex-1 shrink basis-0 min-w-[240px]">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/82630b322d45cae165bf9e128f53f4e4d7eae5293991b429b2963d217ed0dfb4?placeholderIfAbsent=true&apiKey=5531072f5ff9482693929f17ec98446f" class="object-contain w-14 aspect-square" alt="Icono de creación de anuncios" />
            <div class="flex flex-col mt-4 w-full">
              <h3 class="text-2xl font-Homie_Bold tracking-tight leading-9 text-[#002677]">
                Creación de anuncios
              </h3>
              <p class="mt-2 text-base font-FixelText_Regular text-[#000929]">
                Publicamos y optimizamos tu propiedad en distintas plataformas de alquiler.
              </p>
            </div>
          </article>
          
          <article class="flex flex-col flex-1 shrink basis-0 min-w-[240px]">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9901fbf8b0795f4c5a5d0bab6c0ef7aa6069a82fee9a5140aa44c6dff71af98c?placeholderIfAbsent=true&apiKey=5531072f5ff9482693929f17ec98446f" class="object-contain w-14 aspect-square" alt="Icono de captación de huéspedes" />
            <div class="flex flex-col mt-4 w-full">
              <h3 class="text-2xl font-Homie_Bold tracking-tight leading-9 text-[#002677]">
                Captación y contacto con huéspedes
              </h3>
              <p class="mt-2 text-base font-FixelText_Regular text-[#000929]">
                Gestionamos las reservas y la comunicación con los huéspedes.
              </p>
            </div>
          </article>

          <article class="flex flex-col flex-1 shrink basis-0 min-w-[240px]">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/08e993d8f6f41f5ba27732b4d6c9d5d71ad723fcc7d0bd2877ae274cfbca085b?placeholderIfAbsent=true&apiKey=5531072f5ff9482693929f17ec98446f" class="object-contain w-14 aspect-square" alt="Icono de limpieza y mantenimiento" />
            <div class="flex flex-col mt-4 w-full">
              <h3 class="text-2xl font-Homie_Bold tracking-tight leading-9 text-[#002677]">
                Limpieza y mantenimiento
              </h3>
              <p class="mt-2 text-base font-FixelText_Regular text-[#000929]">
                Nos encargamos de que todo esté en perfecto estado para recibir al siguiente huésped.
              </p>
            </div>
          </article> --}}
        </div>
      </div>
      
    </section> 
    @endif
     


   
      <section class="flex flex-col justify-center items-center px-[5%] xl:px-[8%] py-14 w-full bg-[#73F7AD]">
          <div class="flex flex-col max-w-xl">
            
            <div class="flex flex-col w-full text-center gap-5 text-[#006258]">
              <h2 class="text-4xl font-Homie_Bold">¿Quieres que pongamos tu propiedad en alquiler?</h2>
              <p class="text-base font-FixelText_Regular text-[#000929]">Comparte aquí tu correo electrónico y te daremos más información.</p>
            </div>

            <div class="flex flex-col mt-8 w-full">
              <div class="flex flex-col w-full rounded-lg">
                <form id="subsEmail" class="flex flex-row gap-5 justify-end px-5 py-3.5 w-full bg-white rounded-2xl">
                  @csrf
                  <input placeholder="Introduce tu correo electrónico" type="email" id="email" name="email" class="w-full px-4 py-2 text-sm font-FixelText_Regular focus:border-0 focus:ring-0 text-[#006258] placeholder:text-[#00625852] border border-transparent rounded-xl" aria-label="Introduce tu correo electrónico" required>
                  <input type="hidden" name="tipo" value="Inicio"/>
                  <button type="submit" class="self-end px-10 py-3 text-base font-FixelText_Semibold text-center text-[#73F7AD] bg-[#009A84] rounded-lg">Enviar</button>
                </form>
              </div>
              <p class="text-base text-center font-FixelText_Regular text-[#000929]">
                Únete a <strong>10,000+</strong> propietarios más en nuestra comunidad inmobiliaria.
              </p>
            </div>

          </div>
      </section>
    

      <section class="flex flex-col md:flex-row px-[5%] lg:px-[8%] py-8 lg:py-16">
        
        <div class="flex flex-col px-0 md:px-5 lg:px-10 w-full md:w-1/2 bg-white">
          <div class="flex flex-col w-full">
            <h2 class="text-3xl font-Homie_Bold text-[#002677] ">
              ¿Tienes alguna pregunta o necesitas más información?
            </h2>
            <p class="mt-4 text-base font-FixelText_Regular text-[#000929]">
              Llena este formulario y nos pondremos en contacto contigo.
            </p>
          </div>
          <form id="formContactos" class="flex flex-col mt-6 w-full text-sm ">
            @csrf
            <div class="flex flex-col w-full gap-4">
              
              <input id="name" name="name" type="text" class="px-4 py-3.5 text-sm font-FixelText_Regular focus:border-[#006258] focus:ring-[#006258] text-[#006258] placeholder:text-[#00625852] border border-[#00625852] rounded-xl" placeholder="Nombre completo" aria-label="Nombre completo">
            
              <input id="phone" name="phone" type="tel" class="px-4 py-3.5 text-sm font-FixelText_Regular focus:border-[#006258] focus:ring-[#006258] text-[#006258] placeholder:text-[#00625852] border border-[#00625852] rounded-xl" placeholder="Teléfono" aria-label="Teléfono">
              
              <input id="emailform" name="email" type="email" class="px-4 py-3.5 text-sm font-FixelText_Regular focus:border-[#006258] focus:ring-[#006258] text-[#006258] placeholder:text-[#00625852] border border-[#00625852] rounded-xl" placeholder="E-mail" aria-label="E-mail">
            
              <textarea id="message" name="message" class="px-4 py-3.5 text-sm font-FixelText_Regular focus:border-[#006258] focus:ring-[#006258] text-[#006258] placeholder:text-[#00625852] border border-[#00625852] rounded-xl" placeholder="Mensaje" aria-label="Mensaje" rows="6"></textarea>
            </div>
            <button type="submit" class="px-4 py-3.5 mt-10 w-full text-base font-FixelText_Semibold text-emerald-300 bg-[#006258] rounded-xl ">
              Enviar solicitud
            </button>
          </form>
        </div>

        <div class="flex flex-col px-0 md:px-5  lg:px-10 w-full md:w-1/2">
          <div class="flex flex-col w-full">
            <h2 class="text-3xl font-Homie_Bold text-[#002677]">¡Conversemos!</h2>
            <p class="mt-4 text-base font-FixelText_Regular text-[#000929]">
              Para cualquier duda o consulta,  ponte en contacto con nosotros.
            </p>
          </div>
          <div class="flex flex-col justify-center mt-10 w-full  ">
            <div class="flex gap-2 items-start w-full  ">
              <img loading="lazy" src="{{asset('images/img/geo_vt.png')}}" class="object-contain shrink-0 w-6 aspect-square" alt="Icono de dirección">
              <div class="flex flex-col flex-1 shrink basis-0 min-w-[240px]">
                <h3 class="text-lg font-FixelText_Bold text-[#002677]">Dirección</h3>
                <p class="mt-2 text-base font-FixelText_Regular text-[#000929]">
                  @php
                      $locations = [];

                      if (!empty($general->address)) {
                          $locations[] = $general->address;
                      }

                      if (!empty($general->inside)) {
                          $locations[] = $general->inside;
                      }

                      if (!empty($general->district)) {
                          $locations[] = $general->district;
                      }

                      if (!empty($general->country)) {
                          $locations[] = $general->country;
                      }

                      $locationsString = implode(', ', $locations);
                  @endphp
                    {{ $locationsString }}
                </p>
              </div>
            </div>
            @if (!empty($general->cellphone))
            <div class="flex gap-2 items-start mt-8 w-full  ">
              <img loading="lazy" src="{{asset('images/img/phone_vt.png')}}" class="object-contain shrink-0 w-6 aspect-square" alt="Icono de teléfono">
              <div class="flex flex-col flex-1 shrink basis-0 min-w-[240px]">
                <h3 class="text-lg font-FixelText_Bold text-[#002677]">Número de Teléfono</h3>
                <p class="mt-2 text-base font-FixelText_Regular text-[#000929]">{{$general->cellphone}}</p>
              </div>
            </div>
            @endif
            
            @if (!empty($general->email))
            <div class="flex gap-2 items-start mt-8 w-full  ">
              <img loading="lazy" src="{{asset('images/img/mail_vt.png')}}" class="object-contain shrink-0 w-6 aspect-square" alt="Icono de correo electrónico">
              <div class="flex flex-col flex-1 shrink basis-0 min-w-[240px]">
                <h3 class="text-lg font-FixelText_Bold text-[#002677]">Correo Electrónico</h3>
                <p class="mt-2 text-base font-FixelText_Regular text-[#000929]">{{$general->email}}</p>
              </div>
            </div>
            @endif

            @if (!empty($general->schedule))
            <div class="flex gap-2 items-start mt-8 w-full  ">
              <img loading="lazy" src="{{asset('images/img/reloj_vt.png')}}" class="object-contain shrink-0 w-6 aspect-square" alt="Icono de horario de atención">
              <div class="flex flex-col flex-1 shrink basis-0 min-w-[240px]">
                <h3 class="text-lg font-FixelText_Bold text-[#002677]">Horario de Atención</h3>
                <p class="mt-2 text-base font-FixelText_Regular text-[#000929]">
                  {{$general->schedule}}
                </p>
              </div>
            </div>
            @endif
          </div>
        </div>
      
    </section>

   


    {{-- seccion Gran Descuento  --}}
    {{-- @if (count($bannerMid) > 0)
      <section class="flex flex-col md:flex-row justify-between bg-[#EEEEEE] mt-14 overflow-visible"
        style="overflow-x: visible">
        <x-banner-section :banner="$bannerMid" />
      </section>
    @endif --}}

    {{-- seccion Productos populares  --}}
    @if ($productosPupulares->count() > 0)
      <section class=" bg-[#F8F8F8] overflow-visible" style="overflow-x: visible">
        <div class="w-full px-[5%] py-14 lg:py-20">
          <div class="flex flex-col md:flex-row justify-between w-full gap-3">
            <h1 class="text-2xl md:text-3xl font-semibold font-Inter_Medium text-[#323232]">Productos Destacados</h1>
            {{-- <div class="flex  flex-col md:flex-row gap-2 md:gap-8">
              <a href="/catalogo" class="flex items-center   font-Inter_Medium  hover:text-[#006BF6] ">Todos</a>
              @foreach ($categoriasAll as $item)
                <a href="/catalogo/{{ $item->id }}"
                  class="flex items-center font-Inter_Medium  hover:text-[#006BF6]  transition ease-out duration-300 transform  ">{{ $item->name }}
                </a>
              @endforeach
            </div> --}}
          </div>
          @foreach ($productosPupulares->chunk(4) as $taken)
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 md:flex-row gap-4 mt-14 w-full">
              @foreach ($taken as $item)
                <x-product.container width="w-1/4" bgcolor="bg-[#FFFFFF]" :item="$item" />
                {{-- <x-productos-card width="w-1/4" bgcolor="bg-[#FFFFFF]" :item="$item" /> --}}
              @endforeach
            </div>
          @endforeach
        </div>
      </section>
    @endif

    {{-- Seccion Blog --}}
    {{-- @if ($blogs->count() > 0)
      <section class="w-full px-[5%] py-7 lg:py-14 overflow-visible" data-aos="fade-up" style="overflow-x: visible">
        <div class="flex flex-col md:flex-row justify-between w-full gap-3">
          <h1 class="text-2xl md:text-3xl font-semibold font-Inter_Medium text-[#323232]">Blog & Eventos</h1>
          <a href="/blog/0" class="flex items-center text-base font-Inter_Medium font-semibold text-[#006BF6]">Ver todos
            las Publicaciones <img src="{{ asset('images/img/arrowBlue.png') }}" alt="Icono" class="ml-2 "></a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mt-14 gap-10 sm:gap-5">
          @foreach ($blogs as $post)
            <x-blog.container-post :post="$post" />
          @endforeach
        </div>

      </section>
    @endif --}}


    {{-- gran descuento --}}
    {{-- @if (count($bannersBottom) > 0)
      <section class="w-full px-[5%] mt-7 lg:mt-10 ">
        <div class="bg-gradient-to-b from-gray-50 to-white flex flex-col md:flex-row justify-between bg-[#EEEEEE]">
          <x-banner-section :banner="$bannersBottom" />
        </div>
      </section>
    @endif --}}


    {{-- @if ($benefit->count() > 0)
      <section class="py-10 lg:py-13 bg-[#F8F8F8] w-full px[5%]">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 ">
          @foreach ($benefit as $item)
            <div class="flex flex-col items-center w-full gap-1 justify-center text-center px-[10%] xl:px-[18%]">
              <img src="{{ asset($item->icono) }}" alt="">
              <h4 class="text-xl font-bold font-Inter_Medium"> {{ $item->titulo }} </h4>
              <div class="text-lg leading-8 text-[#444444] font-Inter_Medium">{!! $item->descripcionshort !!}</div>
            </div>
          @endforeach
        </div>
      </section>
    @endif --}}



</main>


    <!-- Main modal -->
    <div id="modalofertas" class="modal modalbanner">
        <!-- Modal body -->
        <div class="p-1 ">
            <x-swipper-card-ofertas :items="$popups" id="modalOfertas" />
        </div>
    </div>


@section('scripts_importados')

    <script>
      function alerta(message) {
          Swal.fire({
              title: message,
              icon: "error",
          });
      }

      function validarEmail(value) {
          console.log(value)
          const regex =
              /^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/

          if (!regex.test(value)) {
              alerta("El campo email no es válido");
              return false;
          }
          return true;
      }

      $('#formContactos').submit(function(event) {
          // Evita que se envíe el formulario automáticamente
          //console.log('evcnto')
          let btnEnviar = $('#btnEnviar');
          btnEnviar.prop('disabled', true);
          btnEnviar.text('Enviando...');
          btnEnviar.css('cursor', 'not-allowed');

          event.preventDefault();
          let formDataArray = $(this).serializeArray();

          if (!validarEmail($('#emailform').val())) {
              btnEnviar.prop('disabled', false);
              btnEnviar.text('Enviar Mensaje');
              btnEnviar.css('cursor', 'pointer');
              return;
          };


          /* console.log(formDataArray); */
          $.ajax({
              url: '{{ route('guardarContactos') }}',
              method: 'POST',
              data: $(this).serialize(),
              beforeSend: function() {
                  Swal.fire({
                      title: 'Enviando...',
                      text: 'Por favor, espere',
                      allowOutsideClick: false,
                      onBeforeOpen: () => {
                          Swal.showLoading();
                      }
                  });
              },
              success: function(response) {
                  Swal.close(); // Close the loading message
                  $('#formContactos')[0].reset();
                  Swal.fire({
                      title: response.message,
                      icon: "success",
                  });

                  if (!window.location.href.includes('#formularioenviado')) {
                      window.location.href = window.location.href.split('#')[0] +
                      '#formularioenviado';
                  }
                  btnEnviar.prop('disabled', false);
                  btnEnviar.text('Enviar Mensaje');
                  btnEnviar.css('cursor', 'pointer');
              },
              error: function(error) {
                  Swal.close(); // Close the loading message
                  const obj = error.responseJSON.message;
                  const keys = Object.keys(error.responseJSON.message);
                  let flag = false;
                  keys.forEach(key => {
                      if (!flag) {
                          const e = obj[key][0];
                          Swal.fire({
                              title: error.message,
                              text: e,
                              icon: "error",
                          });
                          flag = true; // Marcar como mostrado
                      }
                  });
                  btnEnviar.prop('disabled', false);
                  btnEnviar.text('Enviar Mensaje');
                  btnEnviar.css('cursor', 'pointer');
              }
          });
      })
    </script>


    <script>
        let pops = @json($popups);

        function calcularTotal() {
            let articulos = Local.get('carrito')
            let total = articulos.map(item => {
                let monto
                if (Number(item.descuento) !== 0) {
                    monto = item.cantidad * Number(item.descuento)
                } else {
                    monto = item.cantidad * Number(item.precio)

                }
                return monto

            })
            const suma = total.reduce((total, elemento) => total + elemento, 0);

            $('#itemsTotal').text(`S/. ${suma.toFixed(2)} `)

        }
        $(document).ready(function() {
            console.log(pops.length)
            if (pops.length > 0) {
                $('#modalofertas').modal({
                    show: true,
                    fadeDuration: 100
                })

            }


            $(document).ready(function() {
                articulosCarrito = Local.get('carrito') || [];

                // PintarCarrito();
            });

        })
    </script>


@stop

@stop
