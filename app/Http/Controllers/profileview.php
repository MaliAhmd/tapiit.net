<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use Illuminate\Support\Facades\Crypt;
use BaconQrCode\Writer;
use App\Models\profileview as pw;
use App\Models\style;


class profileview extends Controller
{

    public function profileview(Request $req)
    {
        $qr = pw::where('ran_id', $req->ran_id)->first();
        $user = user::find($qr->user_id);
        if (!$user) {
            abort(404);
        }

        $style = style::where('user_id', $user->id)->first();
        $publicinfo = (object) [
            'img' => $user->img,
            'logo' => $user->logo,
            'company' => $user->company,
            'name' => $user->name,
            'email' => $user->email,
            'location' => $user->location,
            'designation' => $user->designation,
            'description' => $user->description,
            'website' => $user->website,
            'fb' => $user->fb,
            'insta' => $user->insta,
            'twitter' => $user->twitter,
            'linkedin' => $user->linkedin,
            'tiktok' => $user->tiktok,
            'youtube' => $user->youtube,
            'contact' => $user->contact,
            'country' => $user->country,
            'city' => $user->city,
            'address' => $user->address,
            'website' => $user->website,
            'company' => $user->company,
        ];

        if ($user->layout == 1) {
            return view('card', ['user' => $publicinfo, 'font' => $style->font]);
        } else {
            echo "Details Not Available";
        }
    }


    public function generate()
    {
        $url = route('tapit', 'fawdmuhammad14@gmail.com');

        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );
        $writer = new Writer($renderer);
        $qrCode = $writer->writeString($url);

        return response($qrCode)->header('Content-type', 'image/png');
    }
}
