<?php
namespace Pterodactyl\Http\Controllers\Admin\Arix;

use Illuminate\View\View;
use Illuminate\Support\Facades\Http as AASupport;
use Prologue\Alerts\AlertsMessageBag;
use Illuminate\View\Factory as ViewFactory;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\Arix\ArixComponentsRequest;
use Pterodactyl\Contracts\Repository\SettingsRepositoryInterface;

class ArixComponentsController extends Controller
{
    public function __construct(private AlertsMessageBag $alert, private SettingsRepositoryInterface $settings, private ViewFactory $view)
    {
    }
    public function index(): View
    {
        return $this->view->make(base64_decode("\131\x57\x52\164\141\127\x34\x75\131\x58\x4a\x70\145\x43\65\152\x62\62\x31\167\142\62\x35\x6c\142\156\122\x7a"), [base64_decode("\x63\x32\x56\x79\144\x6d\126\x79\125\x6d\71\63") => $this->settings->get(base64_decode("\x63\x32\126\60\144\107\154\165\132\x33\115\x36\x4f\x6d\x46\171\x61\130\147\66\143\x32\x56\171\x64\x6d\x56\x79\x55\155\x39\x33"), 1), base64_decode("\x63\62\x39\x6a\x61\x57\106\x73\121\156\x56\60\144\107\71\x75\x63\x77\75\x3d") => $this->settings->get(base64_decode("\143\62\126\60\144\x47\x6c\x75\132\x33\115\66\x4f\155\x46\x79\x61\130\x67\66\x63\62\71\152\141\x57\106\x73\x51\156\x56\60\144\x47\71\x75\x63\x77\75\x3d"), false), base64_decode("\x5a\107\x6c\x7a\x59\62\71\x79\132\x45\112\166\145\x41\75\75") => $this->settings->get(base64_decode("\x63\x32\x56\60\x64\x47\x6c\x75\132\x33\x4d\66\x4f\x6d\106\x79\141\x58\x67\x36\x5a\x47\x6c\172\131\62\71\x79\x5a\x45\112\x76\x65\x41\75\75"), true), base64_decode("\143\x33\122\150\144\110\x4e\x44\x59\130\x4a\x6b\143\167\x3d\75") => $this->settings->get(base64_decode("\143\62\126\x30\144\x47\x6c\165\132\x33\115\x36\x4f\x6d\x46\x79\x61\x58\147\x36\143\63\x52\x68\144\110\116\x44\131\130\112\x6b\x63\x77\x3d\75"), 2), base64_decode("\x63\x32\x6c\x6b\x5a\125\144\171\x59\x58\x42\x6f\143\x77\x3d\75") => $this->settings->get(base64_decode("\x63\x32\126\x30\x64\107\154\165\x5a\63\115\66\x4f\155\x46\x79\x61\x58\147\66\143\62\x6c\x6b\132\x55\x64\171\131\130\x42\x6f\x63\167\x3d\75"), 2), base64_decode("\132\63\x4a\x68\143\x47\x68\x7a") => $this->settings->get(base64_decode("\143\62\x56\x30\144\107\x6c\165\x5a\63\x4d\66\x4f\x6d\106\x79\141\x58\x67\x36\x5a\63\x4a\x68\x63\107\150\x7a"), 2), base64_decode("\143\x32\170\x76\x64\104\105\x3d") => $this->settings->get(base64_decode("\143\62\x56\x30\x64\107\154\x75\x5a\x33\x4d\x36\x4f\155\x46\171\141\130\x67\66\143\62\170\166\x64\104\x45\x3d"), base64_decode("\x5a\x47\154\172\131\x57\112\163\x5a\127\x51\75")), base64_decode("\x63\62\170\x76\x64\104\x49\75") => $this->settings->get(base64_decode("\143\62\126\60\144\107\154\x75\x5a\63\x4d\66\x4f\155\106\171\141\x58\x67\66\143\62\170\x76\144\x44\x49\75"), base64_decode("\x5a\x47\x6c\172\131\x57\x4a\x73\x5a\x57\x51\75")), base64_decode("\143\x32\170\166\144\104\115\x3d") => $this->settings->get(base64_decode("\x63\x32\126\x30\x64\x47\x6c\165\132\63\x4d\66\117\x6d\x46\x79\141\x58\x67\x36\x63\62\x78\166\144\x44\x4d\75"), base64_decode("\132\x47\x6c\x7a\x59\x57\x4a\163\132\127\x51\x3d")), base64_decode("\143\x32\x78\x76\x64\x44\121\75") => $this->settings->get(base64_decode("\x63\62\126\60\x64\x47\154\165\132\63\115\x36\117\x6d\x46\171\x61\x58\147\66\x63\62\x78\166\x64\104\121\x3d"), base64_decode("\132\x47\x6c\172\x59\x57\112\x73\x5a\127\x51\75")), base64_decode("\143\x32\170\166\144\x44\x55\x3d") => $this->settings->get(base64_decode("\x63\62\x56\x30\x64\x47\154\165\x5a\x33\115\x36\x4f\155\106\x79\x61\x58\x67\66\x63\62\x78\166\144\x44\125\x3d"), base64_decode("\x5a\107\154\172\x59\127\x4a\163\132\x57\121\x3d")), base64_decode("\x63\62\x78\166\x64\104\x59\x3d") => $this->settings->get(base64_decode("\143\62\x56\60\144\x47\x6c\x75\132\x33\x4d\x36\x4f\x6d\106\171\x61\x58\x67\x36\x63\62\170\166\144\104\131\75"), base64_decode("\132\107\x6c\x7a\x59\x57\x4a\x73\132\x57\x51\75")), base64_decode("\143\x32\x78\166\x64\104\x63\75") => $this->settings->get(base64_decode("\143\62\x56\60\144\x47\154\x75\132\x33\x4d\66\117\155\x46\171\141\x58\x67\66\143\62\x78\166\x64\104\143\75"), base64_decode("\132\x47\x6c\172\131\x57\112\x73\132\127\x51\x3d"))]);
    }
    public function store(ArixComponentsRequest $request)
    {
        foreach ($request->normalize() as $key => $value) {
            $this->settings->set('settings::' . $key, $value);
        }

        $this->alert->success('Theme settings have been updated successfully.')->flash();
        return redirect()->route('admin.arix.components');
    }
}