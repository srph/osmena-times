<section class="list-group">
	@if( !$news->isEmpty() )
		<a href="#" class="list-group-item disabled"> Read More Articles! </a>
		@foreach($news as $article)
			<a href="{{ route('article', $article->id) }}" class="list-group-item {{ justAddActive('news/' . $article->id) }}"> {{ $article->title }} </a>
		@endforeach
	@else
		<a href="#" class="list-group-item disabled"> No articles published yet.. </a>
	@endif
</section>