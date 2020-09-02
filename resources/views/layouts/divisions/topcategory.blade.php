<div class="mb-md-3">
    <h3 class="h5">Popular Categories</h3>
    @foreach($topJobs as $id=>$topJobs)
    <a class="btn btn-xs btn-soft-secondary btn-pill mx-sm-1 mb-1"
        href="{{ route('categories.show', $id) }}">{{ $topJobs }}</a>@if(!$loop->last)@endif
    @endforeach
</div>