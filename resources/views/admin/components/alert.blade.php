@if(!empty($title) || !empty($errors))
@php
    // dd($title,$errors->all());
@endphp
<div class="alert alert-{{$type ?: 'danger'}} alert-dismissible fade show" role="alert">

    <h4 class="alert-heading">{{ucwords($title)?:"Errors!"}}</h4>
    {{--    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>--}}
    @empty(!$errors)
    <hr>

        @foreach($errors AS $item)
            <p class="mb-0">{{$item}}</p>
        @endforeach
    @endempty

    {{--    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>--}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif