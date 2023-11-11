<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contactanos</h2>
            <h3 class="section-subheading text-muted">O envianos un mensaje al 315 6666666</h3>
            @if($message = Session::get('success'))
                <h3 class="text-muted">Mensaje enviado con exito</h3>
            @endif

        </div>
        <form id="contactForm" method="post" action="{{ route('validar') }}">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="name" type="text" placeholder="Tu nombre *" data-sb-validations="required" name="name">
                        @error('name')
                        <h3 class="text-muted">{{ $message }}</h3>
                        @enderror
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Tu correo *" data-sb-validations="required,email" name="email">
                        @error('email')
                        <h3 class="text-muted">{{ $message }}</h3>
                        @enderror
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="Tu telefono *" data-sb-validations="required" pattern="3[0-9]{9,9}" name="number">
                        @error('number')
                        <h3 class="text-muted">{{ $message }}</h3>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Tu mensaje *" data-sb-validations="required" name="message"></textarea>
                        @error('message')
                        <h3 class="text-muted">{{ $message }}</h3>
                        @enderror
                    </div>
                </div>
            </div>
            
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Enviar mensaje</button></div>
        </form>
    </div>
</section>