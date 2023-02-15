<?php

    namespace App\Http\Controllers\AdminViews;

    use App\Http\Controllers\Controller;
    use App\Models\LoanDetail;
    use App\Models\OtherDetail;
    use App\Models\PersonalDetail;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class AdminController extends Controller
    {
        //

        public function dashboard()
        {
            if (Auth::check()) {
                return view('admin_pages.dashboard');
            }
            return redirect("login")->withSuccess('You are not allowed to access');
        }

        public function loan_list()
        {
//            $personalData = PersonalDetail::get();
//            $loanData = LoanDetail::where('personal_detail_id',$personalData[0]['id'])->first();
//            $otherDetail = OtherDetail::where('personal_detail_id',$personalData[0]['id'])->first();

            $personalData = PersonalDetail::with(['loan_data','other_data'])->paginate(50);
            return view('admin_pages.loan_list', compact('personalData'));
        }
    }
