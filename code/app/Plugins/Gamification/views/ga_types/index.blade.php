@extends('themes.default1.admin.layout.admin')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">{{Lang::get('gamification::lang.types')}}</h1>

        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('gamification.gaTypes.create') !!}">{{Lang::get('gamification::lang.create')}}</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>
        @include('gamification::interface.messages')
        <div class="box box-primary">
            <div class="box-body">
                    @include('gamification::ga_types.table')
            </div>
        </div>
    </div>
@endsection

