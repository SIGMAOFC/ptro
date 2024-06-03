<?php
namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixLayoutRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixLayoutController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }
    public function index(): View
    {
        return $this->view->make(base64_decode("\131\x57\122\x74\x61\x57\x34\165\131\130\112\160\x65\103\65\x73\x59\x58\154\x76\144\x58\x51\75"), [base64_decode("\x62\107\x46\x35\x62\63\x56\60") => $this->settings->get(base64_decode("\143\x32\x56\60\144\x47\x6c\x75\132\63\115\66\x4f\155\106\171\141\130\x67\x36\x62\x47\106\65\x62\x33\126\x30"), 1), base64_decode("\143\62\126\x68\x63\155\x4e\157\121\62\71\164\x63\107\71\165\x5a\127\x35\60") => $this->settings->get(base64_decode("\143\x32\126\x30\x64\x47\154\x75\132\63\115\66\117\155\x46\171\x61\130\147\x36\x63\x32\x56\x68\143\x6d\116\157\x51\x32\x39\164\x63\x47\71\165\x5a\127\65\x30"), 1), base64_decode("\x62\107\x39\x6e\142\x31\x42\166\x63\62\x6c\60\x61\x57\71\165") => $this->settings->get(base64_decode("\143\x32\126\x30\x64\107\154\165\132\x33\115\66\x4f\x6d\106\171\x61\130\147\66\142\107\71\x6e\x62\x31\102\x76\x63\62\x6c\x30\141\x57\71\165"), 1), base64_decode("\143\x32\x39\152\x61\x57\106\163\x55\107\71\172\141\130\122\x70\142\62\x34\x3d") => $this->settings->get(base64_decode("\x63\62\x56\60\x64\x47\x6c\165\x5a\63\x4d\66\117\155\x46\171\141\x58\x67\x36\x63\62\71\152\141\127\x46\x73\x55\x47\71\x7a\141\130\122\160\x62\x32\64\x3d"), 1), base64_decode("\x62\107\x39\156\141\127\65\115\131\x58\154\x76\x64\130\x51\x3d") => $this->settings->get(base64_decode("\143\62\x56\x30\x64\107\154\165\132\63\115\x36\x4f\x6d\106\171\141\x58\x67\x36\142\107\71\156\141\x57\65\x4d\131\x58\154\166\144\x58\121\x3d"), 1)]);
    }
    public function store(ArixLayoutRequest $request)
    {
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set('settings::' . $key, $value);
        }

        $this->alert->success('Theme settings have been updated successfully.')->flash();
        return redirect()->route('admin.arix.layout');
    }
}