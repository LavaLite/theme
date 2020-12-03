<div class="section-header">
    <h2>{!!$category->title!!}</h2>
    <p> {!!$category->details!!} </p>
</div>
@foreach ($blocks as $block)
<div class="col-md-4">
    <div class="feature-card text-center">
        <div class="card-icon">
            <i class="las la-laptop-code"></i>
        </div>
        <div class="card-text">
            <h3 class="title">{!!$block->name!!}</h3>
            <p>{!!$block->description!!}</p>
        </div>
    </div>
</div>
@endforeach