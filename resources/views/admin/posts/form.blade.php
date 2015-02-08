@extends('app')

@section('content')
<div class="row">
    <div class="col-md-6">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form name="postForm" id="postForm" novalidate="" method="post" action="{{url('admin/posts/create')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" id="title" required="" data-validation-required-message="The title of your post." value="{{old('title')}}" ng-model="title" ng-change="titleChanged()">
                    <p class="help-block text-success">slug : <span id="slug" ng-bind-html="slug"></span></p>
                    <input type="hidden" name="slug" ng-value="slug">
                </div>
            </div>

            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Content</label>
                    <textarea ng-model="content" rows="5" class="form-control" placeholder="Content of your post" id="content" name="html" required data-validation-required-message="Please enter a content." msd-elastic>{{old('html')}}</textarea>
                    <p class="help-block text-danger"></p>
                </div>
            </div>
            

            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Short Description</label>
                    <input type="text" class="form-control" placeholder="Short Description" name="description" id="description" required="" data-validation-required-message="Short description of your post." value="{{old('description')}}" ng-model="description">
                </div>
            </div>
            
            <br>
            <div id="success"></div>
            <div class="row">
                <div class="form-group col-xs-12">
                    <button type="submit" class="btn btn-default">Save</button> 
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <div btf-markdown="content">
        </div>
    </div>
</div>

<script src="{{asset('//code.angularjs.org/1.3.12/angular.min.js')}}"></script>
<script src="{{asset('//code.angularjs.org/1.3.12/angular-sanitize.min.js')}}"></script>
<script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/showdown/0.3.1/showdown.min.js')}}"></script>
<script src="{{asset('//cdn.rawgit.com/btford/angular-markdown-directive/v0.3.1/markdown.js')}}"></script>
<script src="{{asset('//cdn.rawgit.com/monospaced/angular-elastic/v2.4.2/elastic.js')}}"></script>
<script>
    angular.module('CaramelApp', ['btford.markdown', 'monospaced.elastic'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    })

    .controller('AppCtrl', function($scope) {
        $scope.titleChanged = function() {
            if ($scope.title == undefined) 
                $scope.slug = ''; 
            else 
                $scope.slug = $scope.title.replace(/(^\-+|[^a-zA-Z0-9\/_| -]+|\-+$)/g, '').toLowerCase().replace(/[\/_| -]+/g, '-');
        };
    });
</script>
@endsection
