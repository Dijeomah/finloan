<?php

    namespace App\Http\Controllers\Views;

    use App\Http\Controllers\Controller;
    use App\Models\LoanDetail;
    use App\Models\OtherDetail;
    use App\Models\PersonalDetail;
    use App\Models\User;
    use Illuminate\Http\Request;

    class HomeController extends Controller
    {
        //
        public function index()
        {
            $title = "Home";
            return view('pages.index');
        }

        public function about()
        {
            return view('pages.about');
        }

        public function services()
        {
            return view('pages.services');
        }

        public function contact()
        {
            $title = "Contact us";
            return view('pages.contact', compact('title'));
        }

        public function apply_now(Request $request)
        {
            return view('pages.apply-now');
        }

        public function loanData(Request $request)
        {

            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
                'marital_status' => 'required',
                'birth_date' => 'required',
                'tax_id' => 'required',
                'loan_amount' => 'required',
                'monthly_income' => 'required',
                'loan_purpose' => 'required',
                'loan_period' => 'required',
                'property_address' => 'required',
                'employment_status' => 'required',
            ]);

            $data = $request->all();
//            var_dump($data);
//            dd($data);
            $personalData = PersonalDetail::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'marital_status' => $data['marital_status'],
                'birth_date' => $data['birth_date'],
                'tax_id' => $data['tax_id'],
            ]);

            $loanData = LoanDetail::create([
                'personal_detail_id' => $personalData['id'],
                'loan_amount' => $data['loan_amount'],
                'monthly_income' => $data['monthly_income'],
                'loan_purpose' => $data['loan_purpose'],
                'loan_period' => $data['loan_period'],
            ]);

            $otherData = OtherDetail::create([
                'personal_detail_id' => $personalData['id'],
                'property_address' => $data['property_address'],
                'employment_status' => $data['employment_status'],
            ]);


//            $this->createLoan($data);

            return redirect("/")->withSuccess('Your request has been sent.');

        }

        public function createLoan(array $data)
        {

            $personalData = PersonalDetail::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'phone_number' => $data['phone_number'],
                'marital_status' => $data['marital_status'],
                'birth_date' => $data['birth_date'],
                'tax_id' => $data['tax_id'],
            ]);

            $loanData = LoanDetail::create([
                'personal_detail_id' => $personalData['id'],
                'loan_amount' => $data['loan_amount'],
                'monthly_income' => $data['monthly_income'],
                'loan_purpose' => $data['loan_purpose'],
                'loan_period' => $data['loan_period'],
            ]);

            $otherData = OtherDetail::create([
                'personal_detail_id' => $personalData['id'],
                'property_address' => $data['property_address'],
                'employment_status' => $data['employment_status'],
            ]);

            return [$personalData, $loanData, $otherData];
        }
    }
