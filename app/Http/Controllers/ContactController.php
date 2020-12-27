<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\SiteSetting;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Datatables;
use Validator;
use Illuminate\Support\Facades\Config;

class ContactController extends Controller
{

    protected $user;
    static $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function __construct()
    {
        // $this->middleware('auth');
        // $this->middleware(function ($request, $next) {
        //     $this->user = Auth::user();

        //     date_default_timezone_set('America/Toronto');        //..."Europe/London"

        //     return $next($request);
        // });
    }

    public function index(Request $request)
    {
        //... At first , check expire clients and do process.
        // if ($request->has('locale'))
        //     $locale = $request->locale;
        // else
        //     $locale = 'en';
        // $contact = Contact::where('locale', $locale)->first();
        // if ($contact == null)
        //     $contact = Contact::where('locale', 'en')->first();
        $locale = session('locale');
        $contact = Contact::where('locale', $locale)->first();
        // dd($locale);
        // dd($contact);
        // exit;
        $setting = SiteSetting::where('locale', $locale)->first();
        return view('contacts.index', ['listtype' => 'mine', 'contact' => $contact, 'setting' => $setting]);
    }

    //... for DataTable Data
    public function data(Request $request)
    {

        $locale = $request->locale;
        $list = Contact::where('locale', $locale)->get();

        return Datatables::of($list)

            ->addColumn('title', function ($item) {
                return $item->title;
            })
            ->addColumn('image', function ($item) {
                return " <a href='/{$item->image}' target='_blank'> " . "<img style='height: 50px;' src='/{$item->image}' />" . " </a> ";
            })
            ->addColumn('locale', function ($item) {
                return Config::get('app.locales')[$item->locale];
            })
            ->addColumn('action', function ($item) {
                $url1 = route('contacts.edit', $item->id);
                $modifyurl = " <a href='{$url1}'> " . __('Detail') . " </a> ";
                return $modifyurl;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {

        $contacts = Contact::where('locale', 'en')->get();
        foreach ($contacts as $key => $item) {
            $_contacts = Contact::where('valueid', $item->valueid)->get();
            if (count($_contacts) == 14)
                unset($contacts[$key]);
        }

        return view("contacts.create", ['contacts' => $contacts]);
    }

    public function store(Request $request)
    {
        //
        $input = $request->all();

        // dd($input);
        // exit;
        Validator::make($request->all(), [
            'offsite_cleaning_facility_address' => 'required',
            'offsite_cleaning_facility_town' => 'required',
            'offsite_cleaning_facility_tel' => 'required',
            'offsite_cleaning_facility_email' => 'required',
            'offices_address' => 'required',
            'offices_town' => 'required',
            'offices_tel' => 'required',
            'offices_email' => 'required',
            'embed' => 'required',
        ])->validate();

        $input['locale'] = session('locale');
        $contact = Contact::create($input);

        return redirect()->route('contacts.index');
    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', ['contact' => $contact]);
    }

    public function update(Request $request, Contact $contact)
    {
        //
        $input = $request->all();

        Validator::make($request->all(), [
            'offsite_cleaning_facility_address' => 'required',
            'offsite_cleaning_facility_town' => 'required',
            'offsite_cleaning_facility_tel' => 'required',
            'offsite_cleaning_facility_email' => 'required',
            'offices_address' => 'required',
            'offices_town' => 'required',
            'offices_tel' => 'required',
            'offices_email' => 'required',
            'embed' => 'required',
        ])->validate();


        $contact->fill($input);

        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $checking = Contact::where('locale', $locale)->get();
        if (count($checking) != 0) {
            return back();
        }
        $contact->save();


        return redirect()->route('contacts.index');
    }

    public function destroy(Contact $contact)
    {
        //
        Contact::destroy($contact->id);

        return response()->json([
            'success' => __('Client deleted successfully!')
        ]);
    }

    public function view(Request  $request)
    {
        # code...
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $contact = Contact::where('locale', $locale)->first();
        if (empty($contact)) {
            $contact = Contact::where('locale', 'en')->first();
        }
        $siteSetting = SiteSetting::where('locale', $locale)->first();
        // dd($locale);
        return view('contact', ['contact' => $contact, 'siteSetting' => $siteSetting]);
    }

    public function privacy()
    {
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $setting = SiteSetting::where('locale', $locale)->first();
        return view('privacy-policy', ['setting' => $setting]);
    }

    public function terms()
    {
        $locale = session('locale');
        if ($locale == null)
            $locale = 'en';
        $setting = SiteSetting::where('locale', $locale)->first();
        return view('terms-of-use', ['setting' => $setting]);
    }
}
