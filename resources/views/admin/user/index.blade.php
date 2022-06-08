@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Пользователи</h1>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-success mb-3">Добавить</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th colspan="3" class="text-center">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td class="col-1 text-center"><a
                                                    href="{{ route('admin.user.show', $user->id) }}"><i
                                                        class="far fa-eye"></i></a></td>
                                            <td class="col-1 text-center text-success"><a class="text-success"
                                                                                          href="{{ route('admin.user.edit', $user->id) }}"><i
                                                        class="far fa-edit"></i></a></td>
                                            <td class="col-1 text-center">
                                                <form method="post"
                                                      action="{{ route('admin.user.delete', $user->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fas fa-trash text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{ $users->links() }}
            </div>
        </section>
    </div>
@endsection
