<!-- CategoriesBar -->
<div class="container header-show-content">
    <div class="d-flex border-top">
        <ul class="nav nav-classic w-100">
            @foreach($allCategories as $id=>$allCategory)
            <li class="nav-item">
                <a class="{{ Request::is( route('categories.show', $id) ) ? 'nav-link-active' : 'nav-link' }}"
                    href="{{ route('categories.show', $id) }}">{{ $allCategory }}</a>@if(!$loop->last)@endif
            </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- End CategoriesBar -->
