<?php
namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixMetaRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixMetaController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }
    public function index(): View
    {
        return $this->view->make(base64_decode("\x59\127\x52\164\141\127\x34\x75\131\130\112\160\145\103\x35\164\x5a\130\122\x68"), [base64_decode("\x62\x57\x56\60\131\x56\71\152\142\62\170\166\x63\x67\x3d\75") => $this->settings->get(base64_decode("\143\x32\126\x30\x64\x47\x6c\x75\132\63\x4d\x36\117\x6d\106\171\141\x58\x67\66\x62\x57\x56\60\x59\x56\x39\152\x62\62\170\x76\x63\147\75\x3d"), base64_decode("\x49\172\122\x68\x4d\172\x56\152\x5a\x67\x3d\75")), base64_decode("\x62\127\x56\60\x59\x56\71\x30\x61\130\x52\x73\x5a\121\75\x3d") => $this->settings->get(base64_decode("\143\x32\126\x30\144\107\154\x75\x5a\63\115\x36\x4f\x6d\x46\171\x61\130\x67\x36\142\x57\126\x30\x59\x56\71\60\141\130\122\x73\132\x51\75\75"), base64_decode("\125\x48\122\x6c\x63\155\x39\153\x59\x57\x4e\60\x65\127\167\147\125\107\106\165\132\x57\167\75")), base64_decode("\x62\127\x56\x30\x59\x56\x39\153\132\130\116\x6a\x63\x6d\154\x77\144\107\x6c\166\142\x67\x3d\75") => $this->settings->get(base64_decode("\143\62\126\x30\x64\x47\x6c\165\x5a\63\115\x36\x4f\x6d\106\x79\x61\x58\147\66\142\127\x56\x30\x59\x56\71\153\x5a\x58\116\x6a\143\155\154\167\144\107\154\166\x62\x67\75\75"), base64_decode("\124\x33\126\171\111\107\x39\155\x5a\x6d\154\x6a\x61\127\106\163\x49\106\x42\60\132\130\112\166\132\107\106\152\144\110\x6c\163\111\110\102\x68\x62\x6d\x56\x73")), base64_decode("\142\127\126\x30\131\x56\x39\160\142\x57\106\x6e\x5a\x51\x3d\x3d") => $this->settings->get(base64_decode("\x63\x32\x56\x30\x64\107\x6c\x75\x5a\63\115\x36\117\x6d\x46\x79\141\x58\x67\x36\142\x57\126\60\131\x56\71\160\x62\127\106\x6e\x5a\x51\x3d\x3d"), base64_decode("\114\x32\x46\x79\141\130\147\x76\x62\x57\126\60\x59\123\x31\x30\131\127\144\172\x4c\156\102\x75\132\x77\75\x3d")), base64_decode("\142\127\x56\x30\x59\126\x39\x6d\x59\130\132\160\131\x32\x39\165") => $this->settings->get(base64_decode("\143\x32\x56\x30\x64\x47\154\x75\x5a\x33\x4d\x36\117\x6d\106\171\141\130\147\66\x62\127\126\x30\131\126\71\155\x59\130\132\160\x59\x32\71\165"), base64_decode("\x4c\62\106\x79\141\130\x67\x76\x51\x58\112\x70\x65\103\65\167\142\155\143\75"))]);
    }
    public function store(ArixMetaRequest $request)
    {
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set('settings::' . $key, $value);
        }

        $this->alert->success('Theme settings have been updated successfully.')->flash();
        return redirect()->route('admin.arix.meta');
    }
}