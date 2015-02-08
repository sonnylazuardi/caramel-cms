<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('{{asset('img/home-bg.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1 ng-hide="title.length">{{@$TITLE}}</h1>
                    <h1 ng-show="title.length" ng-bind-html="title"></h1>
                    <hr class="small">
                    <span class="subheading" ng-hide="description.length">{{@$SUBTITLE}}</span>
                    <span class="subheading" ng-show="description.length" ng-bind-html="description"></span>
                </div>
            </div>
        </div>
    </div>
</header>