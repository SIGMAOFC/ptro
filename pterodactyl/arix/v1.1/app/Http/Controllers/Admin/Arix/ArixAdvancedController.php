<?php
namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixAdvancedRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixAdvancedController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }
    public function index(): View
    {
        return $this->view->make(base64_decode("\x59\127\122\164\141\127\x34\x75\131\x58\112\x70\145\x43\65\150\132\x48\x5a\x68\x62\x6d\116\x6c\x5a\x41\x3d\x3d"), [base64_decode("\x63\x48\112\x76\132\155\x6c\x73\x5a\126\x52\x35\143\107\x55\x3d") => $this->settings->get(base64_decode("\143\62\126\60\x64\107\154\165\132\63\x4d\x36\117\155\x46\x79\x61\x58\147\x36\143\110\112\x76\x5a\155\x6c\163\x5a\x56\x52\x35\x63\x47\125\x3d"), base64_decode("\x5a\x33\x4a\150\x64\155\x46\60\x59\x58\x49\x3d")), base64_decode("\142\127\71\153\x5a\126\x52\x76\x5a\x32\144\x73\132\130\x49\75") => $this->settings->get(base64_decode("\x63\62\126\x30\144\107\154\x75\x5a\63\115\x36\117\155\x46\171\141\x58\147\66\142\x57\71\153\132\126\x52\x76\132\x32\x64\163\132\130\x49\75"), true), base64_decode("\142\107\106\165\132\61\116\x33\141\x58\122\152\141\x41\x3d\x3d") => $this->settings->get(base64_decode("\143\x32\x56\60\x64\x47\154\x75\132\63\115\x36\117\x6d\106\x79\x61\x58\x67\x36\x62\x47\106\x75\132\61\x4e\x33\141\130\x52\152\141\101\75\x3d"), true), base64_decode("\x61\x58\x42\107\142\107\x46\x6e") => $this->settings->get(base64_decode("\143\x32\126\60\x64\107\154\165\x5a\x33\115\66\x4f\x6d\x46\x79\141\130\x67\x36\x61\x58\x42\107\142\x47\x46\156"), true), base64_decode("\142\107\71\63\125\x6d\126\172\x62\x33\x56\x79\131\62\x56\x7a\x51\x57\x78\x6c\x63\156\x51\75") => $this->settings->get(base64_decode("\x63\x32\126\60\x64\107\154\165\x5a\63\115\x36\117\x6d\x46\x79\x61\x58\x67\66\x62\x47\x39\x33\125\x6d\x56\x7a\142\x33\126\x79\131\x32\126\172\x51\x57\x78\154\143\156\x51\75"), false)]);
    }
    public function store(ArixAdvancedRequest $request)
    {
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set('settings::' . $key, $value);
        }

        $this->alert->success('Theme settings have been updated successfully.')->flash();
        return redirect()->route('admin.arix.advanced');
    }
}