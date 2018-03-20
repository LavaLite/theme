<div class="section-header">
    <h2>{!!$category->title!!}</h2>
    <p> {!!$category->details!!} </p>
</div>
@foreach ($blocks as $block)
<div class="col-sm-4 content-center text-center">
    <div class="list-view-item">
        <i class="{!!$block->icon!!}"></i>
        <h5>{!!$block->name!!}</h5>
        <p>{!!$block->description!!} ​ </p>
    </div>
</div>
@endforeach