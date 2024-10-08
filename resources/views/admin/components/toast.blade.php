<div class="toast-container">
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="{{$name}}" class="toast hide text-white" role="alert">
            <div class="toast-header">
                {{--                <img src="..." class="rounded me-2" alt="...">--}}
                <strong class="me-auto">Bootstrap</strong>
{{--                <small>11 mins ago</small>--}}
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
        </div>
    </div>
</div>

@push("page_js")
    <script>
        $(document).ready(function () {
            let {{$name}} = $('#{{$name}}').toast({
                animation:true,
                autohide:true,
                delay:5000,
            });
        });

        function showToast($selector,details){
            let $toast = $($selector);

            let type = 'bg-info', title = 'Info';

            if(details.type == 'success'){
                type = 'bg-success';
                title = 'Successful';
            }else if(details.type == 'danger'){
                type = 'bg-danger';
                title = 'Error';
            }

            if(details.title){
                title = details.title;
            }

            $toast.addClass(type);
            $toast.find('.toast-header strong').text(title);
            $toast.find('.toast-body').text(details.message);

            console.log("toastDetails");
            $toast.toast('show');
        }
    </script>
@endpush
