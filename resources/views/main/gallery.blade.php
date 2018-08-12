@extends("layout.app")

@section('body')
<!-- gallery -->
		<div class="gallery">
			<!-- Page Starts Here -->
			<div class="content">
				<div class="container">
					<div class="gallery">
						<h3>Photo Gallery</h3>
						<div class="gallery-top">
							
							@forelse($galls as $gall)
							<div class="view view-tenth">
								<img src="{{asset('gallery/'.$gall->photo)}}" />
								<div class="mask">
									<h2>{{$gall->title}}</h2>
									<p>{{$gall->description}}</p>
									<a href="#" class="info">Read More</a>
								</div>
							</div>
							 @empty
                            <h2> <center>no Gallery</center> </h2>
                           @endforelse
							
							<div class="clearfix"></div>
						</div>
					</div>
					{{$galls->links()}}
				</div>

			</div>
			<!-- Page Ends Here -->
		</div>
		<!-- //gallery -->
@endsection
