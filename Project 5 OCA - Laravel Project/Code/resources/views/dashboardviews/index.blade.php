@extends('layout.dashboardmain')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-xl-6">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Foodacity</div>
                        <div class="widget-subheading">Total Posts</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{$totalPosts}}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-6">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Foodacity</div>
                        <div class="widget-subheading">Total Users</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{$totalUsers}}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-6">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Foodacity</div>
                        <div class="widget-subheading">Total Categories</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{$totalCategories}}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-6">
            <div class="card mb-3 widget-content bg-premium-dark">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Foodacity</div>
                        <div class="widget-subheading">Total Likes</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning"><span>{{$totalLikes}}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
    </div>
</div>
</div>

<div class="main-card mb-3 card">
    <div class="card-header">Active Users
        <div class="btn-actions-pane-right">
            <div role="group" class="btn-group-sm btn-group">
                <button class="active btn btn-focus">Last Week</button>
                <button class="btn btn-focus">All Month</button>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Image</th>
                <th class="text-center">>First Name</th>
                <th class="text-center">Last Name</th>
                <th class="text-center">Visit User</th>
            </tr>
            </thead>
            <tbody>
            @foreach($activeUsers as $user)
            <tr>
                <td class="text-center text-muted">{{$user->id}}</td>
                <td class="text-center text-muted"><img height="90" width="90" src='{{asset("image/users/$user->image")}}' alt=""></td>
                <td class="text-center">{{$user->firstName}}</td>
                <td class="text-center">{{$user->lastName}}</td>
                <td class="text-center"><a class="btn btn-info" href="/author/{{$user->id}}">Visit</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-block text-center card-footer">
        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
        <button class="btn-wide btn btn-success">Save</button>
    </div>
</div>

@endsection
