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

                <form action="{{ route('admin.checklist_groups.checklists.store', $checklistGroup) }}" method="POST">
                @csrf
                <div class="card-header">{{ __('New Checklists') }}</div>

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
                                <input class="form-control" value="{{ old('name') }}" id="name" name="name" type="text" placeholder="{{ __('Checklist Name') }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit"> {{ __('Save') }}</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
