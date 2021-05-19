@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row ">
        <div class="col-md-12">
            <div class="card">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.checklist_groups.update', $checklistGroup) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-header">{{ __('Edit Checklist Group') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input class="form-control" value="{{ $checklistGroup->name }}" id="name" name="name" type="text" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit"> {{ __('Save') }}</button>
                </div>
            </form>
            <form action="{{ route('admin.checklist_groups.destroy', $checklistGroup) }}" method="Post">
                @csrf
                @method('DELETE')
                <div class="card-footer">
                    <button class="btn btn-sm btn-danger"
                    onclick="return confirm('{{ __('Are You Sure ?') }}')" type="submit"> {{ __('Delete This Checklist Group') }}</button>
                </div>

            </form>
           
        </div>
        </div>
    </div>
</div>
@endsection
