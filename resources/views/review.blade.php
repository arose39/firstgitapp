@extends('layouts/layout')

@section('title') Reviews @endsection

@section('main_content')

    <h1 class="text-center">Оставьте Ваш отзыв</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>
    @endif

    <form method="post" action="/review/send">
    @csrf
        <input type='email' name="email" id="email" placeholder="Введите email" class="form-control"> <br>
        <input type='text' name="subject" id="subject" placeholder="Тема отзыва" class="form-control"> <br>
        <textarea name="review" id="review"class="form-control" placeholder="Отзыв"></textarea> <br>
        <div class=" text-center">
        <button type="submit" class="btn btn-success ">Отправить</button>
        </div>
    </form>

    <br>
    <h1>Все отзывы</h1>
    @foreach($reviews as $review)
    <div class="alert alert-dark">
        <h3>{{$review->subject}}</h3>
        <b>{{$review->email}}</b>
        <p>{{$review->review}}</p>
    </div>
    @endforeach

@endsection

