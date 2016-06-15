@extends('master')

@section('title', 'Home')

@section('content')

	<div class="hero">
	
		<p>Homepage.</p>	

	</div>

	<section class="features">
		
		<div class="tabs">
			
			<ul>
				
				<li class="active">DevOps Features</li>

				<li>Business Features</li>

			</ul>

		</div>

		<div class="tab-content">
			
			<div id="tab-1">
				
				<div class="row">

					@for ($i = 0; $i < 6; $i++)
				
						<div class="features__item columns small-12 medium-6 large-4">
							
							<div class="row collapse">
								
								<div class="columns small-3 medium-12">
									
									<img src="{{ asset('static/imgs/placeholder-features.svg') }}">

								</div>

								<div class="columns small-8 small-offset-1 medium-12 medium-offset-0">
									
									<h3>Runs on any cloud</h3>

									<p>No vendor lock-in. Mantl runs equally well on any cloud saving you time and energy.</p>

								</div>

							</div>

						</div>

					@endfor

				</div>

				<div class="row">
					
					<div class="columns small-12">
						
						<a class="button" href="#">Explore Mantl features</a>

					</div>

				</div>

			</div>


			<div id="tab-2" style="display:none">
			


			</div>

		</div>

	</section>

	<section class="use-cases">
		<blockquote cite="http://www.worldwildlife.org/who/index.html">
			For 50 years, WWF has been protecting the future of nature. The world's leading conservation organization, WWF works in 100 countries and is supported by 1.2 million members in the United States and close to 5 million globally.
			<p><span>KENNETH OWENS</span>CTO, Cloud Infrastructure Services Cisco</p>
		</blockquote>
	</section>

@endsection