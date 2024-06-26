<?php

namespace OpenAdminCore\PHPInfo\Http\Controllers;

use Illuminate\Routing\Controller;
use OpenAdminCore\Admin\Layout\Content;
use OpenAdminCore\PHPInfo\PHPInfo;

class PHPInfoController extends Controller
{
    public function index(Content $content, PHPInfo $info)
    {
        $info = $info::toCollection();

        return $content
            ->title('PHP info')
            ->description('An overview of your php ini settings')
            ->body(view('phpinfo::index', ['info'=>$info]));
    }
}
