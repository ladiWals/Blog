@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Просмотр поста</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{ $post->id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{ $post->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Контент</td>
                                            <td>{!! $post->content !!}</td>
                                        </tr>
                                        <tr>
                                            <td>Категория</td>
                                            <td>{{ $post->category->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Теги</td>
                                            <td class="text">{{ implode(', ', $post->tags->pluck('title')->toArray()) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="btn btn-primary mr-1" href="{{ route('admin.post.edit', $post->id) }}">
                        Редактировать <i class="far fa-edit"></i>
                    </a>
                    <form method="post" action="{{ route('admin.post.delete', $post->id) }}" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">
                            Удалить
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
