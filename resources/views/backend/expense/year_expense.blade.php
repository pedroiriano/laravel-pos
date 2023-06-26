@extends('admin_dashboard')
@section('admin')

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <a href="{{ route('add.expense') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Expense </a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Expense</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        @php
            $year = date("Y");
            $expense = App\Models\Expense::where('year',$year)->sum('amount');
        @endphp
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"> Year Expense </h4>
                        <h5 style="color:white; font-size: 25px;" align="center"> Total : Rp. {{ $expense }}</h5>
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Details</th>
                                    <th>Amount</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        
                            <tbody>
                                @foreach($yearexpense as $key=> $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->details }}</td>
                                    <td>{{ $item->amount }}</td>
                                    <td>{{ $item->year }}</td>
                                    <td>
                                        <a href="{{ route('edit.expense',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light"><i class="far fa-edit"></i></a>
                                        <a href="{{ route('delete.customer',$item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->

</div> <!-- content -->

@endsection