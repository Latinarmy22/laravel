@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-blue order-card">
                                        <div class="card-block">
                                            <h5>Usuarios</h5>
                                            @php
                                                use App\Models\User;
                                                $cantUsuarios = User::count();

                                            @endphp
                                            <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cantUsuarios}}</span></h2>
                                            <p class="m-b-0 text-rigth"><a href="/usuarios" class="text-white">Ver mas</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-green order-card">
                                        <div class="card-block">
                                            <h5>Roles</h5>
                                            @php
                                                use Spatie\Permission\Models\Role;
                                                $cantRoles = Role::count();
                                            @endphp
                                            <h2 class="text-right"><i class="fas fa-user-lock"></i><span>{{$cantRoles}}</span></h2>
                                            <p class="m-b-0 text-rigth"><a href="/roles" class="text-white">Ver mas</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-xl-4">
                                    <div class="card bg-c-pink order-card">
                                        <div class="card-block">
                                            <h5>Blogs</h5>
                                            @php
                                                use App\Models\Blog;
                                                $cantBlogs = Blog::count();
                                            @endphp
                                            <h2 class="text-right"><i class="fas fa-user-lock"></i><span>{{$cantBlogs}}</span></h2>
                                            <p class="m-b-0 text-rigth"><a href="/blogs" class="text-white">Ver mas</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

