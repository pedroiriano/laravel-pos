@extends('admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                        <a href="{{ route('pay.salary') }}" class="btn btn-primary rounded-pill waves-effect waves-light">All Pay Salary </a>
                        </ol>
                    </div>
                    <h4 class="page-title">Paid Salary</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

        <div class="row">

            <div class="col-lg-8 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="tab-pane" id="settings">
                            <form method="post" action="{{ route('employee.salary.store') }}">
                                @csrf

                                <input type="hidden" name="id" value="{{ $paysalary->id }}">

                                <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Paid Salary</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Employee Name</label>
                                            <strong style="color: #fff;">{{ $paysalary->name }}</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Salary Month</label>
                                            <strong style="color: #fff;">{{ date("F", strtotime('-1 month')) }}</strong>
                                            @php
                                                $salary_month = date("F", strtotime('-1 month'))
                                            @endphp
                                            <input type="hidden" name="month" value="{{ $salary_month }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Salary Year</label>
                                            <strong style="color: #fff;">{{ date("Y") }}</strong>
                                            @php
                                                $salary_year = date("Y")
                                            @endphp
                                            <input type="hidden" name="year" value="{{ $salary_year }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Employee Salary</label>
                                            <strong style="color: #fff;">{{ $paysalary->salary }}</strong>
                                            <input type="hidden" name="paid_amount" value="{{ $paysalary->salary }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Advance Salary</label>
                                            <strong style="color: #fff;">
                                                @if( $paysalary['advance']['advance_salary'] == NULL)
                                                <span>No Advance</span>
                                                <input type="hidden" name="advance_salary" value="0">
                                                
                                                @else
                                                @php
                                                $advsalary = App\Models\AdvanceSalary::where('month',$salary_month)->where('year',$salary_year)->where('employee_id',$paysalary->id)->first();
                                                @endphp
                                                {{ $advsalary?->advance_salary }}
                                                <input type="hidden" name="advance_salary" value="{{ $advsalary?->advance_salary }}">
                                                @if( $advsalary?->advance_salary == NULL)
                                                <span>No Advance</span>
                                                <input type="hidden" name="advance_salary" value="0">
                                                @endif
                                                @endif
                                            </strong>
                                        </div>
                                    </div>
                                    @php
                                        $advsalary = App\Models\AdvanceSalary::where('month',$salary_month)->where('year',$salary_year)->where('employee_id',$paysalary->id)->first();
                                        $amount = $paysalary->salary - $advsalary?->advance_salary;
                                    @endphp
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">Due Salary</label>
                                            <strong style="color: #fff;">
                                                @if($amount == Null )
                                                <span>No Salary</span>
                                                <input type="hidden" name="due_salary" value="0">
                                                @else
                                                {{ round($amount) }}
                                                <input type="hidden" name="due_salary" value="{{ round($amount) }}">
                                                @endif
                                            </strong>
                                        </div>
                                    </div>
                                </div> <!-- end row -->
           
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
                                </div>
                            </form>
                        </div>
                        <!-- end settings content-->
                   
                    </div>
                </div> <!-- end card-->

            </div> <!-- end col -->
        </div>
        <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->

@endsection