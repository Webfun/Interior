<?php


namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Mail\FormSubmitMail;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Message;
use App\Models\Testimonial;
use Carbon\Carbon;
use App\Models\User;
use App\Models\WebsiteData;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;


class PageController extends Controller
{

    public function getWebsiteSettings()
    {
        $settings = WebsiteData::all();
        $data = [];
        foreach ($settings as  $setting) {
            $data[$setting->slug] =   $setting->value;
        }
        return $data;
    }

    public function home()
    {
        $data = $this->getWebsiteSettings();
        $testimonials = Testimonial::all();
        $projects = Project::all();
        return view('frontend.home', compact( 'projects','data','testimonials'));
    }
    public function about()
    {
        $testimonials = Testimonial::all();
        return view('frontend.about', compact( 'testimonials'));
    }


        public function contact()
        {
            $data = $this->getWebsiteSettings();
            return view('frontend.contact', compact('data'));
        }
        protected function contact_store(Request $request)
        {

            $request->validate([
                "name" => "required",
                "email" => "required|email",
                "phone" => "required",
                "message" => "required",
            ]);

            $form = new Message([
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "message" => $request->message,
            ]);

            $form->save();
            return back()->with('success', 'Form submitted successfully');
        }

    public function services()
    {
        return view('frontend.services');
    }
    public function project()
    {
        $projects = Project::latest()->with('images')->paginate(4);
        return view('frontend.project', compact('projects'));
    }
}
