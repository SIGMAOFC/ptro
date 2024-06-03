<?php
namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixStylingRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixStylingController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }
    public function index(): View
    {
        return $this->view->make(base64_decode("\x59\127\x52\164\141\x57\x34\x75\131\130\x4a\x70\x65\x43\x35\x7a\144\110\154\163\x61\x57\x35\x6e"), [base64_decode("\131\155\x46\152\141\62\x64\171\142\x33\x56\x75\x5a\x45\x6c\164\x59\127\144\x6c") => $this->settings->get(base64_decode("\143\x32\x56\x30\144\x47\x6c\x75\x5a\63\x4d\x36\117\x6d\106\171\141\130\x67\66\131\x6d\106\152\x61\x32\x64\x79\x62\63\x56\x75\x5a\x45\154\164\x59\127\x64\154"), base64_decode("\142\x6d\x39\x75\132\121\x3d\75")), base64_decode("\131\x6d\x46\x6a\x61\62\x64\171\x62\x33\126\x75\132\x45\154\x74\131\x57\144\x6c\124\107\x6c\156\x61\110\121\x3d") => $this->settings->get(base64_decode("\143\62\x56\x30\x64\x47\154\165\132\x33\115\x36\117\155\106\x79\x61\x58\x67\x36\x59\155\106\x6a\x61\x32\144\171\142\63\x56\x75\x5a\105\x6c\164\131\127\144\x6c\124\107\x6c\x6e\x61\110\121\x3d"), base64_decode("\x62\155\x39\x75\132\x51\75\75")), base64_decode("\131\x6d\106\152\x61\62\x52\x79\142\x33\x41\75") => $this->settings->get(base64_decode("\143\62\x56\x30\144\107\x6c\x75\x5a\63\x4d\66\117\155\x46\171\x61\130\x67\66\131\x6d\106\x6a\x61\x32\122\x79\142\63\101\75"), false), base64_decode("\131\x6d\106\x6a\141\x32\x52\x79\x62\63\102\x51\132\130\x4a\152\x5a\127\65\x30\131\127\144\154") => $this->settings->get(base64_decode("\143\x32\126\60\x64\x47\154\x75\132\x33\x4d\66\117\155\106\171\x61\x58\x67\66\131\155\x46\152\141\x32\122\x79\142\x33\x42\x51\132\x58\112\x6a\132\127\x35\x30\x59\x57\x64\154"), base64_decode("\115\124\101\x77\112\x51\x3d\75")), base64_decode("\132\107\x56\155\131\x58\126\163\144\x45\61\x76\x5a\107\x55\75") => $this->settings->get(base64_decode("\x63\x32\x56\60\x64\107\x6c\165\132\x33\x4d\66\117\155\106\171\x61\130\147\x36\132\107\x56\155\131\130\126\163\144\x45\61\x76\x5a\x47\x55\x3d"), base64_decode("\x5a\107\x46\x79\141\62\61\166\x5a\x47\x55\75")), base64_decode("\131\62\71\167\145\130\112\160\x5a\62\150\60") => $this->settings->get(base64_decode("\143\62\x56\60\x64\107\x6c\165\x5a\x33\x4d\x36\x4f\155\106\x79\141\x58\x67\x36\131\x32\71\167\145\130\x4a\160\x5a\x32\150\60"), base64_decode("\122\x47\x56\172\x61\x57\144\x75\132\x57\121\x67\131\156\x6b\x67\x56\x32\x56\160\141\155\126\171\x63\x79\x35\x76\142\155\x55\75")), base64_decode("\143\x6d\x46\153\141\130\x56\172\123\x57\65\x77\x64\x58\x51\x3d") => $this->settings->get(base64_decode("\x63\62\x56\60\144\x47\154\165\132\63\x4d\x36\x4f\x6d\x46\171\x61\x58\x67\66\x63\x6d\x46\153\x61\130\x56\172\123\x57\x35\167\144\130\121\75"), base64_decode("\x4e\63\x42\x34")), base64_decode("\131\155\71\x79\x5a\x47\x56\171\123\127\x35\x77\x64\130\x51\75") => $this->settings->get(base64_decode("\143\x32\x56\x30\x64\107\154\165\132\x33\x4d\66\x4f\x6d\106\171\141\130\147\x36\x59\x6d\71\x79\132\107\x56\x79\123\127\x35\x77\144\130\121\75"), true), base64_decode("\x63\x6d\106\153\x61\130\126\172\121\155\x39\64") => $this->settings->get(base64_decode("\x63\x32\126\60\144\x47\154\x75\x5a\63\115\x36\x4f\155\x46\x79\141\130\x67\x36\x63\155\106\x6b\141\x58\126\172\x51\x6d\71\x34"), base64_decode("\x4d\124\x42\x77\145\x41\75\x3d")), base64_decode("\132\x6d\170\150\143\62\x68\116\x5a\x58\116\x7a\131\127\x64\x6c") => $this->settings->get(base64_decode("\x63\62\x56\x30\144\x47\x6c\x75\132\x33\x4d\x36\117\x6d\x46\x79\141\x58\147\66\x5a\155\170\150\143\x32\150\x4e\132\130\x4e\x7a\x59\127\x64\x6c"), 1), base64_decode("\143\107\106\x6e\132\126\x52\160\x64\107\170\x6c") => $this->settings->get(base64_decode("\143\62\x56\60\144\x47\x6c\165\x5a\63\x4d\x36\117\155\106\x79\x61\130\x67\x36\143\x47\106\x6e\x5a\126\x52\160\x64\107\170\x6c"), true), base64_decode("\x62\x47\x39\x6e\141\x57\65\x43\x59\127\x4e\162\132\x33\x4a\x76\144\x57\65\x6b") => $this->settings->get(base64_decode("\143\x32\x56\60\144\x47\154\x75\x5a\63\x4d\x36\117\x6d\x46\171\141\x58\x67\x36\x62\107\x39\156\x61\127\x35\x43\131\127\116\162\132\63\x4a\166\x64\127\65\x6b"), base64_decode("\x4c\62\x46\x79\141\x58\147\x76\x59\155\x46\x6a\141\x32\144\171\x62\63\x56\165\x5a\x43\61\x73\142\62\x64\x70\142\151\65\x77\142\x6d\x63\75")), base64_decode("\142\x47\x39\156\141\x57\x35\x48\x63\x6d\106\x6b\x61\127\x56\x75\144\x41\x3d\75") => $this->settings->get(base64_decode("\x63\62\126\x30\144\x47\154\x75\x5a\x33\115\x36\117\155\x46\x79\x61\130\147\66\142\x47\71\156\141\127\x35\110\x63\155\x46\153\141\127\126\x75\x64\x41\75\x3d"), false)]);
    }
    public function store(ArixStylingRequest $request)
    {
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set('settings::' . $key, $value);
        }

        $this->alert->success('Theme settings have been updated successfully.')->flash();
        return redirect()->route('admin.arix.styling');
    }
}