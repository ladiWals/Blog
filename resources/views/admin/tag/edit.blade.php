@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование тега {{ $tag->title }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('admin.tag.update', $tag->id) }}">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input type="text" class="form-control" name="title" value="{{ $tag->title }}" id="title" placeholder="Название тега">
                                @error('title')
                                <div class="text-danger">Заполните поле</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
