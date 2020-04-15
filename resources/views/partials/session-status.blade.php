@if(session('status'))
    <div class="alert alert-primary alert-dismissible fade-show" role="alert">
        {{session('status')}}
        <button class="close"
                data-dimiss="alert"
                aria-label="close">
        <span aria-hidden="true">&times;</span>
        ></button>
    </div>
@endif

