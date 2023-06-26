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
                            <a href="{{ route('add.advance.salary') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Advance Salary </a>
                        </ol>
                    </div>
                    <h4 class="page-title">All Pay Salary</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{ date("F Y") }}</h4><br>
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Month</th>
                                    <th>Year</th>
                                    <th>Salary</th>
                                    <th>Advance</th>
                                    <th>Due</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        
                        
                            <tbody>
                                @foreach($employee as $key=> $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><img src="{{ asset($item->image) }}" style="width:50px; "></td>
                                    <td>{{ $item->name }}</td>
                                    <td><span class="badge bg-info"> {{ date("F", strtotime('-1 month')) }} </span> </td>
                                    <td>
                                        <span class="badge bg-info"> 
                                            @if(date("F", strtotime('-1 month')) == "December")
                                                {{ date("Y", strtotime('-1 year'))}}
                                            @else
                                                {{ date("Y") }}
                                            @endif
                                               
                                        </span>
                                    </td>
                                    <td>{{ $item->salary }}</td>
                                    
                                    <td>
                                        @if($item['advance']['advance_salary'] == NULL )
                                            <p>No Advance</p>
                                        @else
                                            @php
                                            $monthsalary = date("F", strtotime('-1 month'));
                                            $yearsalary = date("Y");
                                            $empid = $item->id;
                                            $advsalary = App\Models\AdvanceSalary::where('month',$monthsalary)->where('year',$yearsalary)->where('employee_id',$empid)->first();
                                            @endphp
                                            @if ($advsalary == NULL)
                                                <p>No Advance</p>
                                            @else
                                                {{ $advsalary?->advance_salary }}
                                            @endif 
                                        @endif
                                        
                                    </td>
                                    
                                    <td>
                                        @if ($item['advance']['advance_salary'] == NULL )
                                            
                                            <strong style="color: #fff;"> {{ round($item->salary) }} </strong>

                                        @else 
                                            
                                            <strong style="color: #fff;"> {{ round($item->salary - $advsalary?->advance_salary) }} </strong>
                                        @endif
                                        
                                       
                                        
                                    </td>    
                                    <td>
                                        <a href="{{ route('pay.now.salary',$item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Pay Now</a>
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