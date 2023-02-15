@extends('admin_pages.include.template')
@section('view')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Basic Table</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.blade.php"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Data Table</li>
                            <li class="breadcrumb-item active">Basic Table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <!-- Zero Configuration  Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Zero Configuration</h4><span>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function:<code>$().DataTable();</code>.</span><span>Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</span>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display" id="basic-1">
                                    <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Marital Status</th>
                                        <th>Date of Birth</th>
                                        <th>Identification</th>
                                        <th>Loan Amount</th>
                                        <th>Monthly Income</th>
                                        <th>Loan Purpose</th>
                                        <th>Loan Period</th>
                                        <th>Address </th>
                                        <th>Employment</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($personalData as $data)
                                        <tr>
                                            <td>{{$data->created_at}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->phone_number}}</td>
                                            <td>{{$data->marital_status}}</td>
                                            <td>{{$data->birth_date}}</td>
                                            <td>{{$data->tax_id}}</td>
                                            <td>{{$data->loan_data->loan_amount}}</td>
                                            <td>{{$data->loan_data->monthly_income}}</td>
                                            <td>{{$data->loan_data->loan_purpose}}</td>
                                            <td>{{$data->loan_data->loan_period}}</td>
                                            <td>{{$data->other_data->property_address}}</td>
                                            <td>{{$data->other_data->employment_status}}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit"><a href="#"><i class="icon-pencil-alt"></i></a>
                                                    </li>
                                                    <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{$personalData->links()}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Zero Configuration  Ends-->
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
