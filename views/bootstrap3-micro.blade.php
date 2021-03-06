@if ($breadcrumbs)
    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $i => $breadcrumb)
            <li id="breadcrumb-item-{{$i}}" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"
                @if(!$breadcrumb->last)
                itemref="breadcrumbs__item-{{$i + 1}}"
                @endif

                @if(!$breadcrumb->first)
                itemprop="child"
                @endif

                @if($breadcrumb->last)
                class="active"
                @endif
            >
                @if(!$breadcrumb->last)
                <a href="{{$breadcrumb->url}}" itemprop="url">
                    <span itemprop="title">{{$breadcrumb->title}}</span>
                </a>
                @else
                <span itemprop="title">{{$breadcrumb->title}}</span>
                @endif

        @endforeach
    </ol>
@endif
