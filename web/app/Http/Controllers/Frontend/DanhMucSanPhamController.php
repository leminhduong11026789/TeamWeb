<?php

namespace  App\Http\Controllers\Frontend;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\UpdateSanPhamRequest;
use App\Models\MoTaSanPham;
use App\Repositories\DanhMucSanPhamRepository;
use App\Repositories\MoTaSanPhamRepository;
use App\Repositories\SanPhamRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class DanhMucSanPhamController extends AppBaseController
{
    /** @var  SanPhamRepository */
    private $sanPhamRepository;
    private $danhMucSanPhamRepository;
    private $moTaSanPhamRepository;

    public function __construct(MoTaSanPhamRepository $moTaSanPhamRepo,DanhMucSanPhamRepository $danhMucSanPhamRepo,SanPhamRepository $sanPhamRepo)
    {
        $this->moTaSanPhamRepository = $moTaSanPhamRepo;
        $this->danhMucSanPhamRepository = $danhMucSanPhamRepo;
        $this->sanPhamRepository = $sanPhamRepo;
    }

    /**
     * Display a listing of the SanPham.
     *
     * @param Request $request
     * @return Response
     */
    public function index($slug)
    {
        $category = $this->danhMucSanPhamRepository->findByField('slug','=',$slug,['*'],false)->first();
        if (empty($category)) {
            return redirect(route('trang-chu'));
        }
        $sanPhams = $this->sanPhamRepository->findByField('danh_muc_id','=',$category->id,['*'],false);
        $numberInline = 3;
        $numberInpage = 3;
        return view('frontend.san_pham.danhmuc',compact('sanPhams','category','numberInline','numberInpage'));
    }
}
