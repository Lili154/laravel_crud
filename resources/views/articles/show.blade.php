@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 20px;">
    <h1>{{ $article->title }}</h1>
    <p><strong>Status:</strong> {{ $article->status }}</p>
    <p><strong>Создано:</strong> {{ $article->created_at->format('d.m.Y H:i') }}</p>
    <hr>
    <p>{{ $article->content }}</p>

    <a href="{{ route('articles.index') }}" class="btn btn-primary">Back to articles</a>
</div>
