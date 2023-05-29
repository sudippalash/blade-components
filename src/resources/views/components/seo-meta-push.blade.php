@section($sectionName)
<title>{{ $pageTitle }}</title>
<meta name="title" content="{{ $title }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="description" content="{{ $description }}">
@if ($is_og)
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $title }}"/>
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    @if ($image)
    <meta property="og:image" content="{{ $image }}" />
    @endif

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    @if ($image)
    <meta property="twitter:image" content="{{ $image }}" />
    @endif
@endif
@endsection