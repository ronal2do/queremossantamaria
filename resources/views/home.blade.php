@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach($mensagem as $m)
                        <p><b>{{ $m->nome }}</b>, {{ $m->email }}</p>
                        <p>{{ $m->endereco }}</p>
                        <p><b>Tel:.</b> {{ $m->telefone }} -  <b>Cel:. </b> {{ $m->celular }} / <b>Receber WhatsApp:</b> {{ $m->whatsapp }}</p>
                        <p><b>Sugestão</b>: </p><p> {{ $m->sugestao }}</p>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
