<div class="x_why_main_wrapper">
    <div class="x_why_img_overlay"></div>
    <div class="container">
        <div class="x_why_left_main_wrapper">
            <img src="{{ $page->present()->firstImage(1000,null,'resize',80) }}" alt="{{ $page->title }}">
        </div>
        <div class="x_why_right_main_wrapper">
            <h3>{{ $page->title }}</h3>
            {!! $page->body !!}
        </div>
    </div>
</div>
<!-- btc team Wrapper End -->