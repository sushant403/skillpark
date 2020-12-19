<!-- CategoriesBar -->
<div class="container header-hide-content">
    <div class="d-none d-md-flex border-top">
        <ul class="nav nav-fill border-bottom mx-auto">
            @foreach($allCategories as $id=>$allCategory)
            <li class="nav-item">
                <a class="nav-link"
                    href="{{ route('categories.show', $id) }}">{{ $allCategory }}</a>@if(!$loop->last)@endif
            </li>
            @endforeach
            <li class="nav-item"><a class="nav-link" href="{{ url('coming-soon') }}">{{ __('nepali.All Categories') }}</a></li>
        </ul>
    </div>
</div>
<!-- End CategoriesBar -->