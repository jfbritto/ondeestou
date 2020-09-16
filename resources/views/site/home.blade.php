
@extends('includes.base_site')

@section('body')


<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="/img/fundo.png" alt="" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Onde Estou</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-question"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <!-- <p class="masthead-subheading font-weight-light mb-0">Todos seus lugares em apenas um</p> -->
    </div>
</header>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Pra que serve?</h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <p style="margin-bottom: 35px !important; font-size: 1.7rem; font-weight: 300 !important; color: #2c3e50 !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
            Quantas redes sociais você tem? Muitas?
        </p>
        <p style="margin-bottom: 35px !important; font-size: 1.7rem; font-weight: 300 !important; color: #2c3e50 !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
            São importantes para você?
        </p>
        <p style="margin-bottom: 35px !important; font-size: 1.7rem; font-weight: 300 !important; color: #2c3e50 !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
            Elas fazem parte do seu negócio?
        </p>
        <p style="margin-bottom: 35px !important; font-size: 1.7rem; font-weight: 300 !important; color: #2c3e50 !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
            Se a maioria das respostas foram SIM, o ondeestou.app foi feito para você!
        </p>
        <hr>
        <p style="margin-bottom: 35px !important; font-size: 1.7rem; font-weight: 300 !important; color: #2c3e50 !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
            <img style="max-width: 200px;" class="img img-fluid" src="/img/exe.jpeg" alt="" />
        </p>
        <p style="margin-bottom: 35px !important; font-size: 1.7rem; font-weight: 300 !important; color: #2c3e50 !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
            Centralize tudo em apenas um lugar!
            <br>
            Corre lá!
            <br>
            <br>
            <a href="/register" class="btn btn-secondary">CADASTRAR</a>
        </p>


    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Como usar?</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    Ao entrar no site, clique em "REGISTRAR"
                </p>
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    <img style="border-radius: 10px;border: 1px solid #fff; max-width: 200px;" class="img img-fluid" src="/img/1.jpeg" alt="" />
                </p>
            </div>
            <div class="col-md-4">
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    Preencha os campos com suas informações
                </p>
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    <img style="border-radius: 10px;border: 1px solid #fff; max-width: 200px;" class="img img-fluid" src="/img/2.jpeg" alt="" />
                </p>
            </div>
            <div class="col-md-4">
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    Depois de se cadastrar, é hora de adicionar suas redes sociais!
                </p>
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    <img style="border-radius: 10px;border: 1px solid #fff; max-width: 200px;" class="img img-fluid" src="/img/3.jpeg" alt="" />
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    Preencha os campos com suas informações
                </p>
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    <img style="border-radius: 10px;border: 1px solid #fff; max-width: 200px;" class="img img-fluid" src="/img/4.jpeg" alt="" />
                </p>
            </div>
            <div class="col-md-4">
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    Prontinho! agora é só cadastrar as outras!
                </p>
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    <img style="border-radius: 10px;border: 1px solid #fff; max-width: 200px;" class="img img-fluid" src="/img/5.jpeg" alt="" />
                </p>
            </div>
            <div class="col-md-4">
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    Agora basta copiar seu link e compartinhar onde quiser!
                </p>
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    <img style="border-radius: 10px;border: 1px solid #fff; max-width: 200px;" class="img img-fluid" src="/img/6.jpeg" alt="" />
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    Depois de tudo pronto, sua página ficará tipo assim:
                </p>
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #fff !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    <img style="border-radius: 10px;border: 1px solid #fff; max-width: 200px;" class="img img-fluid" src="/img/exe.jpeg" alt="" />
                </p>
            </div>
        </div>


    </div>
</section>

<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Quem criou?</h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p style="margin-bottom: 15px !important; font-size: 1.3rem; font-weight: 300 !important; color: #2c3e50 !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    <img style="border: 1px solid #fff; max-width: 200px;" class="img img-fluid rounded-circle img-thumbnail rounded" src="/img/dev.jpg" alt="" />
                </p>
                <p style="margin-bottom: 15px !important; font-size: 1.5rem; font-weight: 300 !important; color: #2c3e50 !important; text-align: center !important;" class="masthead-subheading font-weight-light mb-0">
                    João Filipi Britto 
                    <br>
                    <br>
                    <a target="_blank" href="/jfbritto" class="btn btn-secondary">SAIBA MAIS</a>
                </p>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-lg-8 mx-auto">

                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email Address</label>
                            <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                </form>
            </div>
        </div> -->

    </div>
</section>

<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Quem está usando?</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">

            <div class="owl-carousel" style="text-align:center">

                @foreach($users as $user)
                    @php
                    if($user->avatar != null && $user->avatar != ''){
                        $avt = '/storage/user/'.$user->avatar;
                    }else{
                        $avt = '/img/user.png';
                    }
                    @endphp
                    <a target="_blank" href="/{{$user->url_name}}" class="text-center">
                        <img style="border-radius: 100%; cursor: pointer; border: 1px solid #fff" src="{{$avt}}" alt="" > <br>
                        <span style="color: white; margin-top: 5px">{{$user->name}}</span>
                    </a>

                @endforeach

            </div>
            <!-- <div class="col-md-12 text center"><p class="lead">Compartilhe todas suas redes em apenas um lugar.</p></div> -->
            <!-- <div class="col-lg-4 mr-auto"><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div> -->
        </div>

    </div>
</section>


<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
</div>


@stop

@section('js')

<script>
    $(document).ready(function(){
        
        let width  = screen.width;
        let height = screen.height;

        if(width < 415){

            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:80,
                nav:true,
                dots:true,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                items: 2
            });

        }else{

            $(".owl-carousel").owlCarousel({
                loop:true,
                margin:80,
                nav:true,
                dots:true,
                autoplay:true,
                autoplayTimeout:2000,
                autoplayHoverPause:true,
                items: 4
            });

        }

    })
</script>

@stop