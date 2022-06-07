@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание поста</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('admin.post.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="title"
                                    id="title"
                                    placeholder="Название поста"
                                    value="{{ old('title') }}"
                                >
                                @error('title')
                                <div class="text-danger">Заполните поле</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Контент</label>
                                <textarea id="content" name="content">
                                    {{ old('content') }}
                                </textarea>
                                @error('content')
                                <div class="text-danger">Заполните поле</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category_id" class="form-control" id="category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <select multiple name="tags[]" class="form-control mb-3" id="tags">
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}" {{ is_array(old('tags')) && in_array($tag->id, old('tags')) ? 'selected' : '' }}>
                                            {{ $tag->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Главное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image" value="{{ old('image') }}">
                                        <label class="custom-file-label" for="image">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">...</span>
                                    </div>
                                </div>
                                @error('image')
                                <div class="text-danger">Загрузите файл</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="preview_image">Превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="preview_image" name="preview_image" value="{{ old('preview_image') }}">
                                        <label class="custom-file-label" for="preview_image">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">...</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">Загрузите файл</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-success mb-4" value="Создать">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
