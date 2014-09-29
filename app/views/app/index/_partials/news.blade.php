<div class="row">
	@foreach($news as $article)
		<div class="col-sm-6 col-md-4">
			<section class="thumbnail" style="height: 400px;">
				<img src="uploads/news/cover.jpg">
				<section class="caption">
					<h4>
						{{ $article->title }} <br />
						<small>
							<i class="glyphicon glyphicon-time"></i>
							{{ $article->created_at->diffForHumans() }}
						</small>
					</h4>
					<p> {{ $article->preview }} </p>
					<p>
						<a href="#" class="btn btn-default" role="button">Read More</a>
					</p>
				</section>
			</section>
		</div>
	@endforeach
</div>

{{ $news->links() }}