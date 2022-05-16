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
                        <form method="post" action="{{ route('admin.post.update', $post->id) }}">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}" id="title" placeholder="Название тега">
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
                                <label for="category">Category</label>
                                <select name="category_id" class="form-control" id="category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $post->category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tags">Tags</label>
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
                            </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250
            });
        });
    </script>
@endsection
