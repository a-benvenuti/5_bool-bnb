@extends('layouts.app')

@section('pageTitle')
Boolbnb | Dashboard
@endsection

@section('content')
<main id="dashboard-main">
    <div class="container dashboard">
        {{-- Title --}}
        <section class="title">
                <div class="title__text">
                    <h1>Dashboard</h1>
                    <p>Dashboard / Analytics</p>
                </div>
                <div class="title__date">
                    <p id="today"></p>
                </div>
        </section>
        {{-- /Title --}}
    
        <div class="row">
            {{-- Welcome section --}}
            <section class="welcome col-12">
                <div class="card">
                    <div class="card__header">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach ($users as $user)
                        <p>Ciao {{$user->name}}, bentornato! 👋</p>
                        @endforeach
                    </div>
                </div>
            </section>
            {{-- /Welcome section --}}
    
            {{-- user-info section --}}
            <section class="user-info col-lg-4">
                <div class="card">
                    <div class="card__header">
                        <h3>Dettagli utente</h3>
                    </div>
                    <div class="card__main">
                        @foreach ($users as $user)
                        <table>
                            <tr>
                                <th>Nome:</th>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <th>Cognome:</th>
                                <td>{{$user->surname}}</td>
                            </tr>
                            <tr>
                                <th>Data di nascita:</th>
                                <td>{{$user->birth_date}}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <th>Password:</th>
                                <td>***</td>
                            </tr>
                            <tr>
                                <th>Telefono:</th>
                                <td>{{$user->phone_number}}</td>
                            </tr>
                            <tr>
                                <th>Documento:</th>
                                <td>{{$user->document_type}}</td>
                            </tr>
                            <tr>
                                <th>Numero documento:</th>
                                <td>{{$user->document_number}}</td>
                            </tr>
                            <tr>
                                <th>Iscritto dal:</th>
                                <td>{{$user->created_at}}</td>
                            </tr>
                        </table>
                        @endforeach
                    </div>
                </div>
            </section>
            {{-- /user-info section --}}
    
            {{-- apartments section --}}
            <section class="apartments col-lg-8">
                <div class="card">
                    <div class="card__header">
                        <div class="col-lg-10">
                            <h3>I tuoi Appartamenti</h3>
                        </div>
                        <div class="create">
                            <a href="{{route('admin.create')}}">
                                <button type="button" class="btn btn-primary">
                                    <span>Aggiungi</span>
                                    <svg width="12" height="12" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 5H9M5 1L5 9" stroke="#fafafa" stroke-width="2.0" stroke-linecap="round"/>
                                    </svg> 
                                </button>
                            </a>                                                 
                        </div> 
                    </div>
                    <div class="card__main">
                        <div class="table-responsive-xl table-borderless table-hover">
                            <table class="table">
                                <thead class="thead">
                                    <tr>
                                        <th>Nome</th>
                                        <th class="dn-small">Immagine</th>
                                        <th class="dn-medium">Mq</th>
                                        <th class="dn-medium">€/Notte</th>
                                        <th class="dn-medium">Località</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($apartments as $apartment)
                                        <tr>
                                            <td >{{$apartment->name}}</td>
                                            <td class="dn-small"><img src="{{$apartment->image}}"></td>
                                            <td class="dn-medium">{{$apartment->mq}}</td>
                                            <td class="dn-medium">{{$apartment->price_day}}  €</td>
                                            <td class="dn-medium">{{$apartment->city}} - {{$apartment->country}}</td>
                                            <td><button><a href="{{route('admin.show', ['apartment' => $apartment->id ])}}">Visualizza</a></button></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            {{-- /apartments section --}}
    
            {{-- messages section --}}
            <section class="messages col-12">
                <div class="card">
                    <div class="card__header">                    
                        <div class="col-lg-7">
                            <h3>Messaggi</h3>
                        </div>
                    </div>
                    <div class="card__main">
                        <table class="table table-responsive-xl table-borderless table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Nome appartamento</th>
                                    <th>Oggetto Messaggio</th>
                                    <th>Messaggio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apartments as $apartment)
                                @if (count($apartment->messages) > 0)
                                @foreach ($apartment->messages as $message)
                                <tr>
                                    <td>{{$apartment->name}}</td>
                                    <td>{{$message->subject}}</td>
                                    <td>{{$message->message}}</td>
                                </tr>
                                @endforeach
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            {{-- /messages section --}}
        </div>
        @if (session('message'))
		<div class="alert-text alert alert-success">
			{{ session('message')}}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
		</div>
		@endif	
    </div>    
</main>
@endsection

@section('dayjs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.10.5/dayjs.min.js"></script>
    <script>
        document.getElementById("today").innerHTML = `${dayjs().format('dddd DD')} - ${dayjs().format('DD/MM/YYYY')}`;
    </script>
@endsection
