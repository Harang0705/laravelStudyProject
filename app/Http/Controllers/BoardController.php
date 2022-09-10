<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class BoardController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 목적 : 보드게시판 메인화면 이동
     * 만든일시 : 2022-09-01 Thu 16:12:39
     * 제작자 : 지건우
     * 업데이트 일시 : 2022-09-01 Thu 16:15:05
     * 업데이트 사유 : 그러게요 이게 어떤걸 추가로 고쳐볼까요?
     */
    public function index()
    {
        return view('board\index');
    }

    /**
     * 목적 : 보드게시판 제작화면 이동
     * 만든일시 : 2022-09-04 Sun 08:13:18
     * 제작자 : 지건우
     * 업데이트 일시 :
     * 업데이트 사유 :
     */

    public function create()
    {
        return view('board\create');
    }

    /**
     * 목적 : 보드게시판 서버 업로드
     * 만든일시 : 2022-09-04 Sun 08:13:32
     * 제작자 : 지건우
     * 업데이트 일시 :
     * 업데이트 사유 :
     */
    public function store(Request $request)
    {
    }

}
