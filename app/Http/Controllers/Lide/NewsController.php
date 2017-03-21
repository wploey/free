<?php

namespace App\Http\Controllers\Lide;

use App\Http\Controllers\ApiController;
use App\Models\Lide\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class NewsController
 * @package App\Http\Controllers\Lide
 */
class NewsController extends ApiController
{
    protected $newTransformer;

    /**
     * NewsController constructor.
     * @param $newTransformer
     */
    public function __construct(NewTransformer $newTransformer)
    {
        $this->newTransformer = $newTransformer;
        $this->middleware('auth.basic',['only'=>['store','update']]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $news = News::all();
        return $this->response([
            'status' => 'success',
            'data' => $this->newTransformer->transformCollection($news->toArray())
        ]);
    }

    public function store(Request $request)
    {
        if(! $request->get('title') or ! $request->get('body')){
            return $this->setStatusCode(422)->responseError('validate failde');
        }
        News::create($request->all());
        return $this->setStatusCode(201)->response([
            'status'=>'success',
            'message'=>'new created'
        ]);
    }
    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function show($id)
    {
        $new = News::find($id);
        if (!$new) {
            return $this->responseNotFound();
        }
        return $this->response([
            'status' => 'success',
            'data' => $this->newTransformer->transform($new)
        ]);
    }


}
