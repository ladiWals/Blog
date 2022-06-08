@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="">
                        <h1 class="m-0">Редактирование поста ID-{{ $post->id }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('admin.post.update', $post->id) }}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}"
                                       id="title" placeholder="Название тега">
                                @error('title')
                                <div class="text-danger">Заполните поле</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Контент</label>
                                <textarea id="content" name="content">{{ $post->content }}</textarea>
                                @error('content')
                                <div class="text-danger">Заполните поле</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Категория</label>
                                <select name="category_id" class="form-control" id="category">
                                    @foreach ($categories as $category)
                                        <option
                                            value="{{ $category->id }}" {{ $category->id == $post->category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tags">Тэги</label>
                                <select multiple name="tags[]" class="form-control mb-3" id="tags">
                                    @foreach ($tags as $tag)
                                        <option
                                            value="{{ $tag->id }}"
                                            {{ $post->tags->pluck('id')->contains($tag->id) ? 'selected' : '' }}
                                        >
                                            {{ $tag->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('tags')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Главное изображение</label>
                                <div>
                                    @if(!empty($post->image))
                                        <img
                                            class="w-50"
                                            src="{{ asset('storage/' . $post->image) }}"
                                            alt="image">
                                    @endif
                                </div>
                                <div class="input-group mt-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image"
                                               value="{{ $post->image }}">
                                        <label class="custom-file-label" for="image">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">...</span>
                                    </div>
                                </div>
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="preview_image">Превью</label>
                                <div>
                                    @if(!empty($post->preview_image))
                                        <img
                                            class="w-50"
                                            src="{{ asset('storage/' . $post->preview_image) }}"
                                            alt="image">
                                    @endif
                                </div>
                                <div class="input-group mt-2">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="preview_image"
                                               name="preview_image" value="{{ $post->preview_image }}">
                                        <label class="custom-file-label" for="preview_image">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">...</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary mb-4" value="Обновить">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
