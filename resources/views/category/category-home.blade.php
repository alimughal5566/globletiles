@extends('layouts.app', ['page' => __('category Home'), 'pageSlug' => 'category'])

@section('content')
    <style>

        .sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a i, .sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a i, .off-canvas-sidebar .sidebar-wrapper>.nav [data-toggle="collapse"]~div>ul>li>a i, .off-canvas-sidebar .sidebar-wrapper .user .info [data-toggle="collapse"]~div>ul>li>a i {
            line-height: 32px;
        }
        .custom_color , .sorting_1 , table.dataTable.stripe tbody tr.odd, table.dataTable.display tbody tr.odd {
            background: #27293d !important;
        }
        .dataTables_wrapper .dataTables_length select {
            color: #fff !important;
        }
        .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter, .dataTables_wrapper .dataTables_info, .dataTables_wrapper .dataTables_processing, .dataTables_wrapper .dataTables_paginate {
            color: #fff !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
            color: #e7e4e4 !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button , .dataTables_wrapper .dataTables_filter input {
            color: #fff !important;
        }
        .card-body {
            overflow-x: scroll;
            overflow-y: hidden;
        }
    </style>
    <div class="content">
        <div class="row">
            @if(Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
            @endif
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="card-title">Category</h4>
                            </div>
                                                        <div class="col-4 text-right">
                                                            <a href="{{route('addCategory')}}" class="btn btn-sm btn-primary">Add Category</a>
                                                        </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="">
                            <table id="myTable" class="text-primary display table tablesorter">
                                <thead class="text-primary">
                                <tr>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Sr. No.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Creation Date</th>
                                    <th scope="col">Action</th>
                                </tr></thead>
                                <tbody>
                                <?php
                                $count=1;
                                ?>
                                @foreach($data as $datum)
                                    <tr class="custom_color" >
                                        <td><img src="{{url('black/images').'/'.$datum->thumbnail}}" alt="" style="height: 80px; width: auto"></td>\
                                        <td>{{$count}}</td>
                                        <td>{{$datum->name}}</td>
                                        <td>{{ \Carbon\Carbon::parse($datum->created_at)->format('D-M-Y / H:m:s') }}</td>

                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow bg-dark text-light">
                                                    <a class="dropdown-item" href="{{route('categoryDelete',[$datum->id])}}">Delete</a>
                                                    <a class="dropdown-item" href="{{route('categoryEdit',[$datum->id])}}">Edit</a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <?php
                                    $count++;
                                    ?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
