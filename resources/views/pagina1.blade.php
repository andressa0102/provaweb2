@extends('layout')
@section('content')

<div class="card brder">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Pergunta 1: </strong> </h4>
                </p>
            </div>
        </div>
        <form acion="{{route('dadosPagina1)}}" mthod="POST">
            @csrf

            <div class="form-group py-4">
                <label for="pergunta"> <h3> <strong> Quem é a arista mais ativa no instagram? </strong> </h3></labl>
                <div class="orm-check p-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
                    <label class="form-check-label" for="pergunta">
                        <h5> Virginia </h5>
                    </label>
                </div>
                <div class="orm-check p-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
                    <label class="form-check-label" for="pergunta">
                        <h5> Larissa Manola </h5>
                    </label>
                </div>
                <div class="orm-check p-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
                    <label class="form-check-label" for="pergunta">
                        <h5> Mel Maia </h5>
                    </label>
                </div>
                <div class="orm-check p-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
                    <label class="form-check-label" for="pergunta">
                        <h5> Vi Tube </h5>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
            <buton onclick="window.location.href='/';" type="button"
                   class="btn bn-danger btn-sm">Dsistir</button>
        </form>
    </div>
</div>

@endsection