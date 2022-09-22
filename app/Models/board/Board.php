<?php

namespace App\Models\board;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Exception;

class Board extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "boards";
    protected $fillable  = ['title', 'content', 'hit'];

    /**
     * 목적 : 서버 게시판 데이터 추가
     * 만든일시 : 2022-09-16 Fri 01:39:12
     * 제작자 : 지건우
     * 업데이트 일시 : 
     * 업데이트 사유 : 
     */
    public static function boardUpload(array $list)
    {
        try {
            $requestValue = Board::create([
                'title' => $list['title'],
                'content' => $list['content'],
                'hit' => 0,
            ]);

            if ($requestValue != null) {
                return 'true';
            }  
            
            throw new Exception('뭘 했는데 이 오류가 나오는거..');
        } catch (\Exception $th) { 
            throw new Exception('서버상의 오류 발생');
        }
    }

    /**
     * 목적 : 서버 게시판 데이터 추가
     * 만든일시 : 2022-09-16 Fri 01:39:12
     * 제작자 : 지건우
     * 업데이트 일시 : 
     * 업데이트 사유 : 
     */
    public static function boardUpdate(array $list)
    {
        try {
            $requestValue = 
                Board::find($list['id'])
                    ->update([
                        'title' => $list['title'],
                        'content' => $list['content'],
                        'hit' => 0,
                    ]);

            if ($requestValue != null) {
                return 'true';
            }  
            
            throw new Exception('뭘 했는데 이 오류가 나오는거..');
        } catch (\Exception $th) { 
            throw new Exception($th);
        }
    }
}
