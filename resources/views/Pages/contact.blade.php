@extends('layouts.app')
@section ('content')
  <section>
	<div class="bg-contact2" style="background-image: url({{ asset('images/bg-01.jpg') }})">
		<div class="container-contact2">
    
        {!! Form::open(['route'=>'contact.submit'])!!}
			<div class="wrap-contact2">
				<form class="contact2-form validate-form">
					<span class="contact2-form-title">
						Contact Us
					</span>

					@if(Session::has('message'))
                    <div class="alert alert-success">
                    {{Session('message')}}
                    </div>
                    @endif
               
					<div class="wrap-input2 validate-input" data-validate="Name is required">
						<input class="input2" type="text" name="name">
						<span class="focus-input2" data-placeholder="NAME"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input2" type="text" name="email">
						<span class="focus-input2" data-placeholder="EMAIL"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="MESSAGE"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn">
								Send Your Message
							</button>
						</div>
					</div>
                {!!Form::close()!!}
			</div>
		</div>
	</div>
</section>
@endsection