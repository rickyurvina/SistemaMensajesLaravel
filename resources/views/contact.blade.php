
    <!--con for each de php-->
{{--    <?php foreach($portafolio as $portafolioitem){--}}
{{--        echo "<li>".$portafolioitem['title']."<li>";--}}
{{--    }?>--}}

{{--    <!--otra manera-->--}}
{{--    <ul>--}}
{{--        <?php foreach($portafolio as $portafolioitem):?>--}}
{{--            <li>{{$portafolioitem['title']}}<li>--}}
{{--        <?php endforeach?>--}}
{{--    </ul>--}}

{{--    <!--con blade-->--}}
{{--    <ul>--}}
{{--        @isset($portafolio)--}}
{{--            @foreach($portafolio as $portafolioitem)--}}
{{--                <li>{{$portafolioitem['title']}}</li>--}}
{{--            @endforeach--}}
{{--            @else--}}
{{--            <li>no Hay pryectos para mostratt</li>--}}
{{--        @endisset--}}
{{--    </ul>--}}

{{--        <!--con blade-->--}}
{{--        <ul>--}}
{{--            @forelse($portafolio as $portafolioitem)--}}
{{--                <li>{{$portafolioitem['title']}} <pre>{{ $loop->first ? 'Es el primero' : ''}} </pre> </li>--}}
{{--                @empty--}}
{{--                <li>No hay Proyectos apra mostrar</li>--}}
{{--            @endforelse--}}
{{--        </ul>--}}
@extends('layout')
@section('title','Contact')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form class="bg-white shadow rounded py-3 px-4"
                  method="POST"
                  ACTION="{{route('contact')}}">
                @csrf
                <h1 class="display-4">{{__('Contact')}}</h1>
                <hr>
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-light shadow
                @error('name') is-invalid" @else border-0 @enderror
                    id="name"
                           name="name"
                           placeholder="Nombre..."
                           value="{{old('name')}}" >
                    @error('name')
                    <span class="span invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control bg-light shadow
                @error('email') is-invalid" @else border-0 @enderror
                    id="email"
                           name="email"
                           placeholder="Correo..."
                           value="{{old('email')}}" >
                    @error('email')
                    <span class="span invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="subject">Asunto Correo</label>
                    <input class="form-control bg-light shadow
                @error('subject') is-invalid" @else border-0 @enderror
                    id="subject"
                           name="subject"
                           placeholder="Asunto..."
                           value="{{old('subject')}}" >
                    @error('subject')
                    <span class="span invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea class="form-control bg-light shadow-sm
                @error('content') is-invalid" @else border-0 @enderror
                    id="content"
                              name="content"
                              placeholder="Contenido del correo..."
                              value="{{old('content')}}" ></textarea>
                    @error('content')
                    <span class="span invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                    @enderror
                </div>



                <button class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
        </div>
    </div>



@endsection
