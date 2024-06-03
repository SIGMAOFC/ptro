<?php
namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixAnnouncementRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixAnnouncementController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }
    public function index(): View
    {
        return $this->view->make(base64_decode("\131\127\122\x74\x61\x57\64\x75\x59\x58\112\x70\145\103\65\x68\x62\155\x35\x76\144\127\65\152\132\127\x31\154\x62\156\121\x3d"), [base64_decode("\x59\127\65\165\x62\63\x56\x75\x59\x32\x56\x74\x5a\127\x35\x30\x56\110\154\x77\x5a\x51\75\x3d") => $this->settings->get(base64_decode("\x63\62\126\x30\x64\107\154\x75\132\63\x4d\66\117\x6d\x46\171\141\x58\147\66\x59\x57\x35\x75\142\x33\126\165\131\62\x56\164\132\127\x35\60\x56\x48\154\x77\x5a\121\x3d\x3d"), base64_decode("\x63\x47\x46\171\x64\110\153\x3d")), base64_decode("\131\127\65\165\142\63\x56\x75\131\x32\x56\164\132\x57\x35\60\x51\x32\170\x76\143\62\x56\150\x59\x6d\170\154") => $this->settings->get(base64_decode("\143\x32\x56\60\x64\x47\154\165\x5a\x33\115\66\117\x6d\106\x79\141\130\147\66\131\x57\65\x75\142\63\x56\x75\131\62\126\164\x5a\127\x35\x30\121\62\x78\x76\143\x32\126\x68\x59\x6d\x78\154"), false), base64_decode("\131\x57\x35\165\x62\x33\x56\x75\x59\x32\126\x74\132\x57\65\60\x54\x57\x56\172\143\62\x46\x6e\132\121\x3d\x3d") => $this->settings->get(base64_decode("\x63\62\x56\60\x64\107\154\165\x5a\x33\x4d\x36\117\155\106\171\x61\x58\147\66\131\127\x35\x75\142\63\126\x75\x59\62\126\164\132\127\65\60\124\127\x56\x7a\143\x32\106\156\x5a\x51\x3d\x3d"), base64_decode("\126\62\x55\x67\x61\107\106\x32\132\x53\x42\x68\111\107\x4a\171\131\127\x35\153\111\x47\65\x6c\144\171\x42\156\131\127\61\x6c\x49\x48\102\150\142\155\126\x73\x49\x47\x52\154\143\x32\154\x6e\142\x69\x45\75"))]);
    }
    public function store(ArixAnnouncementRequest $request)
    {
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set('settings::' . $key, $value);
        }

        $this->alert->success('Theme settings have been updated successfully.')->flash();
        return redirect()->route('admin.arix.announcement');
    }
}