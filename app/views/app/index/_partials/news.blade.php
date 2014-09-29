<div class="row">
	@foreach($news as $article)
		<div class="col-sm-6 col-md-4">
			<section class="thumbnail" style="height: 400px; position: relative;">
				<img src="uploads/news/cover.jpg">
				<section class="caption">
					<h4 class="ellipsis"> {{ $article->title }} </h4>

					<div class="clearfix" style="margin-top: -10px; margin-bottom: -10px;">					
						<h5 class="pull-right">
							<small>
								<i class="glyphicon glyphicon-time"></i>
								Published by
								<a href="{{ route('profile', $article->user()->withTrashed()->first()->username) }}">
									{{ '@' . $article->user()->withTrashed()->first()->username }}
								</a>
							</small>
						</h5>
						<h5>
							<small>
								<i class="glyphicon glyphicon-time"></i>
								{{ $article->created_at->diffForHumans() }}
							</small>
						</h5>
					</div>

					<hr>
					
					<!-- caption -->				
					<p> {{ $article->preview }} </p>
					
					<!-- button -->
					<a href="{{ route('article', $article->id) }}"
						class="btn btn-default"
						style="position: absolute; left: 10px; bottom: 10px;">
						Read More
					</a>

					<h5 style="position: absolute; right: 10px; bottom: 10px;"> <small> <i class="glyphicon glyphicon-eye-open"></i> {{ $article->viewCount() }} views </small> </h5>
				</section>
			</section>
		</div>
	@endforeach
</div>

{{ $news->links() }}